<?php
include 'config.php';

$id = $_GET['id'];
$conn->query("DELETE FROM blogs WHERE id=$id");
header("Location: dashboard.php");
?>
