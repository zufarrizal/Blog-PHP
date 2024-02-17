<?php
// Database connection
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "articles"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve article ID from form
$article_id = $_POST['article_id'];

// Delete article from database
$sql = "DELETE FROM articles WHERE id = $article_id";

if ($conn->query($sql) === TRUE) {
    // Artikel berhasil dihapus, redirect ke halaman utama
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
