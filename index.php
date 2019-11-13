<?php

    session_start();

    if (isset($_SESSION['logged']) && ($_SESSION['logged'] == true))
    {
        header('Location: panel_user.php');
        exit();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login_panel.css">
    <link rel="stylesheet" href="css/login_inputs.css">
    <link rel="stylesheet" href="css/table.css">

    <title>Biblioteka online - Logowanie</title>
</head>
<body>
    <div id="container_login">
        <form action="user_php_scripts/authorization.php" method="post">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Hasło">

            <input type="submit" value="Zaloguj się">
        </form>
    </div>

    <div id="container_row">
        <div id="container_register">
            <header>Rejestracja</header>
            <form action="user_php_scripts/register_new_user.php" method="post">
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="password" placeholder="Hasło">
                <input type="password" name="re_password" placeholder="Powtórz hasło" id="re_password">

                <input type="submit" value="Zajerestruj się">
            </form>
        </div>
    </div>

    <div id="container_row">
        <div id="containter_table">
        <span id="table_title">Lista dostępnych książek</span>
        <table class="tg">
            <tr>
                <th class="tg-c3ow">Tytuł</th>
                <th class="tg-c3ow">Autor</th>
            </tr>
            <?php require_once "user_php_scripts/login_table_books.php" ?>
        </table>
    </div>
    </div>

    <!-- <script src="js/login_listeners.js"></script> -->
</body>
</html>