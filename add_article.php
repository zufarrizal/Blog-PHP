<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel Baru</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Artikel Baru</h2>
        <form action="process_article.php" method="post">
            <label for="title">Judul:</label><br>
            <input type="text" id="title" name="title"><br><br>
            <label for="content">Konten:</label><br>
            <textarea id="content" name="content" rows="5" cols="40"></textarea><br><br>
            <input type="submit" value="Tambahkan">
        </form>
        <a href='index.php'><button>Kembali</button></a>
        <footer>
            <p>© 2024 ZUFAR RIZAL. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>