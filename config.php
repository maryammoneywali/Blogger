<?php
$host = "localhost";
$dbname = "dbicczo7nmdy09";
$username = "u6c7kfxyegqnr";
$password = "gm5l9ycbabtq";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
