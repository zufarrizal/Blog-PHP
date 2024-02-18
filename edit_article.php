<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Content</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <header>
            <h1>ZUFAR RIZAL</h1>
            <p>Welcome to your space for jotting down your thoughts!</p>
        </header>
        <div class="container">
            <h2>Edit Content</h2>
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

            if (isset($_GET['article_id']) && !empty($_GET['article_id'])) {
                $article_id = $_GET['article_id'];

                $sql = "SELECT * FROM articles WHERE id = $article_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
            ?>
                    <form action="process_edit_article.php" method="post">
                        <input type="hidden" name="article_id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Title" id="title" name="title" value="<?php echo $row['title']; ?>">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Content" id="content" name="content" rows="15"><?php echo $row['content']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        <br>
                        <a href="index.php" class="btn btn-danger btn-block">Back</a>
                    </form>
            <?php
                } else {
                    echo "Article not found.";
                }
            } else {
                echo "Invalid article ID.";
            }

            $conn->close();
            ?>
            <footer>
                <p>© 2024 ZUFAR RIZAL. All rights reserved.</p>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </div>
</body>

</html>