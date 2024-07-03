<?php
// Database connection (replace with your actual database connection details)
include './db.connection/db_connection.php';

// Fetch blog data
$sql = "SELECT id, title, main_content, main_image FROM blogs ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog Summaries</title>
    <link href="css/styles.css" rel="stylesheet"> <!-- Include your CSS file here -->
</head>
<body>


    <div class='row row-custom no-gutters'>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Determine image to display (use main_image if exists)
                $image_path = !empty($row['main_image']) ? "../uploads/photos/{$row['main_image']}" : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";

                echo "
                <div class='col-12 col-md-4 col-custom'>
                    <div class='card card-custom'>
                        <img src='{$image_path}' class='card-img-top' alt='Blog Image'>

                        <div class='card-body'>
                            <h5 class='card-title' style='color:black;'>{$row['title']}</h5>
                            <p class='card-text'>" . substr(strip_tags($row['main_content']), 0, 100) . "...</p>
                            <a href='blog.php?id={$row['id']}' class='btn btn-primary'>Read More</a>
                        </div>
                    </div>
                </div>
                ";
            }
        } else {
            echo "<p>No blog posts found.</p>";
        }
        $conn->close();
        ?>
    </div>


    
</body>
</html>
