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
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/operators.css">
    <link rel="stylesheet" href="css/table.css">

    <title>Biblioteka online</title>
</head>
<body>
    <header>
        <span><a href="panel_user.php">Biblioteka online</a></span>

        <div class="button right to_logout">
            Wyloguj się
        </div>
    </header>

    <nav>
        <div class="nav_button">
            <a href="panel_user.php">Moje książki</a>
        </div>
        <div class="nav_button">
            <a href="panel_list_of_books.php">Lista książek</a>
        </div>
        <div class="nav_button">
            <a href="panel_get_book.php">Wypożycz</a>
        </div>
    </nav>

    <main>
        <?php require_once "books_all.php" ?>
    </main>

    <script src="js/header_listeners.js"></script>
</body>
</html>