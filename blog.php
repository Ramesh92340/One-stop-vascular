<?php
// Database connection (replace with your actual database connection details)
include './db.connection/db_connection.php';

// Get blog ID from URL
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($blog_id > 0) {
    // Fetch blog data
    $stmt = $conn->prepare("SELECT title, main_content, full_content, title_image, main_image FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $stmt->bind_result($title, $main_content, $full_content, $title_image, $main_image);
    $stmt->fetch();
    $stmt->close();
} else {
    echo "Invalid blog ID.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($title); ?></title>
    <link href="css/styles.css" rel="stylesheet"> <!-- Include your CSS file here -->
</head>

<body>
    <div class='container'>
        <div class='blog-post'>
            <?php
            if (!empty($title_image)) {
                $title_image_path = "../../uploads/photos/{$title_image}";
                echo "<img src='{$title_image_path}' alt='Title Image' class='img-fluid'>";
            }
            ?>
            <h1><?php echo htmlspecialchars($title); ?></h1>

            <div class='blog-main-content'>
                <h2>Main Content</h2>
                <p><?php echo htmlspecialchars($main_content); ?></p>
            </div>
            <?php
            if (!empty($main_image)) {
                $main_image_path = "../../uploads/photos/{$main_image}";
                echo "<img src='{$main_image_path}' alt='Main Image' class='img-fluid'>";
            }
            ?>
            <div class='blog-full-content'>
                <h2>Full Content</h2>
                <div><?php echo $full_content; ?></div>
            </div>
        </div>
    </div>
</body>

</html>