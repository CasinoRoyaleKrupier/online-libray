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
        </div>
        <div class="nav_button">
            <a href="admin_panel_remove_book.php">Usuń książkę</a>
        </div>
    </nav>

    <main>
        <form action="book_remove.php" method="post">
            <legend>Oddaj książke</legend>

            <label for="book_id">Podaj id książki</label>
            <input type="text" name="book_id" id="book_id">

            <br>

            <input type="submit">

            <?php
                if (isset($_SESSION['book_remove_message'])) {
                    echo $_SESSION['book_remove_message'];
                }
            ?>
        </form>
    </main>

    <script src="js/header_admin_listeners.js"></script>
</body>
</html>