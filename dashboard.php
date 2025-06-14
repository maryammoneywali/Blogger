<?php
include 'config.php';
$result = $conn->query("SELECT * FROM blogs ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .container { max-width: 800px; margin: auto; }
        .btn { padding: 5px 10px; text-decoration: none; background: blue; color: white; }
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    <a href="add.php" class="btn">Add New Blog</a>
    <table border="1" width="100%">
        <tr>
            <th>Title</th><th>Author</th><th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
