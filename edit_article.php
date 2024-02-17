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

// Retrieve article ID from URL
$article_id = $_GET['article_id'];

// Retrieve article data from database
$sql = "SELECT * FROM articles WHERE id = $article_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the selected article
    $row = $result->fetch_assoc();
    $title = $row["title"];
    $content = $row["content"];
} else {
    echo "Artikel tidak ditemukan.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Article</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Edit Article</h2>
        <form action="process_edit_article.php" method="post">
            <input type="hidden" name="article_id" value="<?php echo $article_id; ?>">
            <label for="title">Title :</label><br>
            <input type="text" id="title" name="title" value="<?php echo $title; ?>"><br><br>
            <label for="content">Content :</label><br>
            <textarea id="content" name="content" rows="5" cols="40"><?php echo $content; ?></textarea><br><br>
            <input type="submit" value="Save Changes">
        </form>
        <a href='index.php'><button>Back</button></a>
        <footer>
            <p>© 2024 ZUFAR RIZAL. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>