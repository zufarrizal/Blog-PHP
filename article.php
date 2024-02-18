<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTICLE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <header>
            <h1>ZUFAR RIZAL</h1>
            <p>Welcome to your space for jotting down your thoughts!</p>
            <a href="add_article.php" class="btn btn-primary">Add New Content</a>
        </header>
        <?php
        // Koneksi ke database dan pengambilan data artikel

        // Pengaturan koneksi database
        $servername = "localhost";
        $username = "root"; // Ganti dengan username database Anda
        $password = ""; // Ganti dengan password database Anda
        $dbname = "articles"; // Ganti dengan nama database Anda

        // Membuat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Memeriksa apakah ID artikel diberikan
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $article_id = $_GET['id'];

            // Query untuk mengambil artikel berdasarkan ID
            $sql = "SELECT * FROM articles WHERE id = $article_id";
            $result = $conn->query($sql);

            // Menampilkan artikel lengkap
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<div class='post'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<hr/>";
                echo "<p>" . $row["content"] . "</p>";
                echo "</div>";
                echo "<a href='index.php' class='btn btn-danger btn-block'>Back</a>";
            } else {
                echo "Artikel tidak ditemukan.";
            }
        } else {
            echo "ID artikel tidak valid.";
        }

        $conn->close();
        ?>
    </div>

    <footer>
        <p>© 2024 ZUFAR RIZAL. All rights reserved.</p>
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>