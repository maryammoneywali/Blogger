<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM blogs WHERE id=$id");
$blog = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $blog['title']; ?></title>
</head>
<body>
    <h1><?php echo $blog['title']; ?></h1>
    <p>By <?php echo $blog['author']; ?></p>
    <p><?php echo $blog['content']; ?></p>
    <a href="index.php">Back to Home</a>
</body>
</html>
