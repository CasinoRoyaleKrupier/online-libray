<?php

    session_start();

    if (!isset($_SESSION['logged']) && ($_SESSION['logged'] == true))
    {
        header('Location: index.php');
        exit();
    }

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/operators.css">
    <link rel="stylesheet" href="../css/table.css">

    <title>Biblioteka online</title>
</head>
<body>
    <header>
        <span>
            <a href="panel_user.php">Biblioteka online</a>
        </span>

        <div class="button right to_logout">
            Wyloguj się
        </div>
    </header>

    <nav>
        <div class="nav_button">
            <a href="admin_panel_add_book.php">Dodaj książkę</a>
            <a href="admin_panel_remove_book.php">Usuń książkę</a>
        </div>
    </nav>

    <main>
        <form action="book_add.php" method="post">
            <legend>Dodaj książke</legend>

            <label for="title_book">Tytuł książki</label>
            <input type="text" name="title_book" id="title_book">
            <br>

            <label for="series_book">Seria książki</label>
            <input type="text" name="series_book" id="series_book">
            <br>

            <label for="author_book">Autor książki</label>
            <input type="text" name="author_book" id="author_book">
            <br>

            <label for="count_pages">Ilość stron</label>
            <input type="text" name="count_pages" id="count_pages">
            <br>

            <input type="submit">

            <?php
                if (isset($_SESSION['book_add_message'])) {
                    echo $_SESSION['book_add_message'];
                }
            ?>
        </form>
    </main>

    <script src="js/header_admin_listeners.js"></script>
</body>
</html>