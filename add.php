<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $image = "";

    if (!empty($_FILES['image']['name'])) {
        $image = "uploads/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    $stmt = $conn->prepare("INSERT INTO blogs (title, content, author, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $content, $author, $image);
    $stmt->execute();
    
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
</head>
<body>
    <h2>Add a New Blog</h2>
    <form method="POST" enctype="multipart/form-data">
        Title: <input type="text" name="title" required><br>
        Author: <input type="text" name="author" required><br>
        Content: <textarea name="content" required></textarea><br>
        Image: <input type="file" name="image" accept="image/*"><br>
        <button type="submit">Add Blog</button>
    </form>
</body>
</html>
