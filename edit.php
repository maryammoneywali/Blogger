<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM blogs WHERE id=$id");
$blog = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("UPDATE blogs SET title='$title', content='$content' WHERE id=$id");
    header("Location: dashboard.php");
}
?>

<form method="POST">
    Title: <input type="text" name="title" value="<?php echo $blog['title']; ?>" required><br>
    Content: <textarea name="content"><?php echo $blog['content']; ?></textarea><br>
    <button type="submit">Update</button>
</form>
