<?php
include 'config.php';

$result = $conn->query("SELECT * FROM blogs ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blogger</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; text-align: center; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; box-shadow: 0px 0px 10px gray; }
        .blog { border-bottom: 1px solid #ddd; padding: 10px; }
        .blog h2 { color: #333; }
        .blog img { max-width: 100%; height: auto; }
        .btn { background: #28a745; color: white; padding: 8px; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Blogger</h1>
        <a href="dashboard.php" class="btn">Go to Dashboard</a>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="blog">
                <h2><?php echo $row['title']; ?></h2>
                <p>By <?php echo $row['author']; ?></p>
                <?php if (!empty($row['image'])): ?>
                    <img src="<?php echo $row['image']; ?>" alt="Blog Image">
                <?php endif; ?>
                <p><?php echo substr($row['content'], 0, 100); ?>...</p>
                <a href="view.php?id=<?php echo $row['id']; ?>" class="btn">Read More</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
