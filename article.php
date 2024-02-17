<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
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
                echo "<a href='index.php'><button>Back</button></a>";
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
</body>

</html>