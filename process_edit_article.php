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

// Retrieve data from form
$article_id = $_POST['article_id'];
$title = $_POST['title'];
$content = $_POST['content'];

// Update article in the database
$sql = "UPDATE articles SET title='$title', content='$content' WHERE id=$article_id";

if ($conn->query($sql) === TRUE) {
    // Redirect to index page after successful edit
    header("Location: index.php");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
