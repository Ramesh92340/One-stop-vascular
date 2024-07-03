<?php
// Database connection (replace with your actual database connection details)
include '../../db.connection/db_connection.php';

// Function to generate a unique file name
function generateUniqueFileName($fileName)
{
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    return uniqid() . '_' . time() . '.' . $ext;
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check for existence of $_POST keys to avoid undefined index warnings
    $blog_id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $main_content = isset($_POST['main_content']) ? $_POST['main_content'] : '';
    $full_content = isset($_POST['full_content']) ? $_POST['full_content'] : '';

    // Ensure required fields are not empty
    if (empty($title) || empty($main_content) || empty($full_content)) {
        die("Error: Title, Main Content, and Full Content cannot be empty.");
    }

    // Handle file uploads for title image and main image
    $title_image_path = '';
    if (!empty($_FILES['title_image']['name'])) {
        $title_image_directory = "uploads/photos/";  // Adjust the upload directory path as necessary
        $title_image_name = generateUniqueFileName($_FILES['title_image']['name']);
        $title_image_path = $title_image_directory . $title_image_name;
        if (!move_uploaded_file($_FILES['title_image']['tmp_name'], $title_image_path)) {
            die("Error uploading title image.");
        }
    }

    $main_image_path = '';
    if (!empty($_FILES['main_image']['name'])) {
        $main_image_directory = "uploads/photos/";  // Adjust the upload directory path as necessary
        $main_image_name = generateUniqueFileName($_FILES['main_image']['name']);
        $main_image_path = $main_image_directory . $main_image_name;
        if (!move_uploaded_file($_FILES['main_image']['tmp_name'], $main_image_path)) {
            die("Error uploading main image.");
        }
    }

    if ($blog_id > 0) {
        // Update existing blog post
        if (!empty($title_image_path) && !empty($main_image_path)) {
            $stmt = $conn->prepare("UPDATE blogs SET title = ?, main_content = ?, full_content = ?, title_image = ?, main_image = ? WHERE id = ?");
            $stmt->bind_param("sssssi", $title, $main_content, $full_content, $title_image_path, $main_image_path, $blog_id);
        } elseif (!empty($title_image_path)) {
            $stmt = $conn->prepare("UPDATE blogs SET title = ?, main_content = ?, full_content = ?, title_image = ? WHERE id = ?");
            $stmt->bind_param("ssssi", $title, $main_content, $full_content, $title_image_path, $blog_id);
        } elseif (!empty($main_image_path)) {
            $stmt = $conn->prepare("UPDATE blogs SET title = ?, main_content = ?, full_content = ?, main_image = ? WHERE id = ?");
            $stmt->bind_param("ssssi", $title, $main_content, $full_content, $main_image_path, $blog_id);
        } else {
            $stmt = $conn->prepare("UPDATE blogs SET title = ?, main_content = ?, full_content = ? WHERE id = ?");
            $stmt->bind_param("sssi", $title, $main_content, $full_content, $blog_id);
        }
    } else {
        // Insert new blog post
        $stmt = $conn->prepare("INSERT INTO blogs (title, main_content, full_content, title_image, main_image, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("sssss", $title, $main_content, $full_content, $title_image_path, $main_image_path);
    }

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Blog post published/updated successfully!";
        header("Location: allBlog.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
        header("Location: newBlog.php");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
