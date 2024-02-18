<?php
// Koneksi database
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "articles"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $article_id = $_POST['article_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Update artikel di database
    $sql = "UPDATE articles SET title='$title', content='$content' WHERE id=$article_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman index.php
        header("Location: index.php");
        exit(); // pastikan tidak ada kode lain yang dieksekusi setelah redirect
    } else {
        echo "Error updating article: " . $conn->error;
    }
}

$conn->close();
