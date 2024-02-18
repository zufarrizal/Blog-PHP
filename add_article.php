<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD NEW Content</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <header>
            <h1>ZUFAR RIZAL</h1>
            <p>Welcome to your space for jotting down your thoughts!</p>
        </header>

        <body>
            <div class="container">
                <h2>Add New Content</h2>
                <form action="process_article.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" aria-label="With textarea" id="content" name="content" placeholder="Content"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Add">
                </form>
                <br>
                <a href='index.php' class="btn btn-danger btn-block">Back</a>
                <footer>
                    <p>© 2024 ZUFAR RIZAL. All rights reserved.</p>
                </footer>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        </body>


</html>