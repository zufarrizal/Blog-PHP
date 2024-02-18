<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZUFAR RIZAL</title>
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

    // Pagination
    $articles_per_page = 4;
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $articles_per_page;

    // Fetch articles
    $sql = "SELECT * FROM articles ORDER BY created_at DESC LIMIT $offset, $articles_per_page";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        // Batasi teks artikel menjadi 200 karakter
        $content_short = substr($row["content"], 0, 200);
        // Menampilkan teks artikel singkat
        echo "<div class='post'>";
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<hr/>";
        echo "<p>" . $content_short . "...</p>";
        // Menampilkan tombol "Read more" dengan link ke halaman artikel lengkap
        echo "<form class='edit-form' action='article.php' method='get'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<button type='submit' class='btn btn-primary'>Read More</button>";
        echo "</form>";
        echo "<form class='edit-form' action='edit_article.php' method='get'>";
        echo "<input type='hidden' name='article_id' value='" . $row['id'] . "'>";
        echo "<input type='submit' class='btn btn-warning' value='Edit'>";
        echo "</form>";
        echo "<form class='delete-form' action='delete_article.php' method='post' onsubmit='return confirmDelete()'>";
        echo "<input type='hidden' name='article_id' value='" . $row['id'] . "'>";
        echo "<input type='submit' class='btn btn-danger' value='Delete'>";
        echo "</form>";

        echo "</form>";
        echo "</div>";
      }
    } else {
      echo "Belum ada artikel.";
    }
    $conn->close();

    // Pagination links
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT COUNT(*) AS total FROM articles";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_articles = $row['total'];
    $total_pages = ceil($total_articles / $articles_per_page);

    echo "<div class='pagination'>";
    if ($current_page > 1) {
      echo "<a href='index.php?page=" . ($current_page - 1) . "' class='btn btn-primary active'>Prev</a>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
      echo "<a href='index.php?page=" . $i . "' class='btn btn-primary active" . ($current_page == $i ?: "") . "' > " . $i . " </a>";
    }

    if ($current_page < $total_pages) {
      echo "<a href='index.php?page=" . ($current_page + 1) . "' class='btn btn-primary active'>Next</a>";
    }
    echo "</div>";
    ?>

    <footer>
      <p>© 2024 ZUFAR RIZAL. All rights reserved.</p>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script>
    function confirmDelete() {
      return confirm("Are you sure you want to delete this content?");
    }
  </script>

</body>

</html>