<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Article</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Add New Article</h2>
        <form action="process_article.php" method="post">
            <label for="title">Title :</label><br>
            <input type="text" id="title" name="title"><br><br>
            <label for="content">Content :</label><br>
            <textarea id="content" name="content" rows="5" cols="40"></textarea><br><br>
            <input type="submit" value="Add">
        </form>
        <a href='index.php'><button>Back</button></a>
        <footer>
            <p>© 2024 ZUFAR RIZAL. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>