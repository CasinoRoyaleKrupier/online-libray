<?php

    session_start();

    if (isset($_SESSION['logged']) && ($_SESSION['logged'] == true))
    {
        header('Location: panel_user.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/login_panel.css"> -->

    <title>Document</title>
</head>
<body>
    <div id="container_login">
        <header>Biblioteka online - logowanie</header>
        <form action="user_php_scripts/authorization.php" method="post">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Hasło">

            <input type="submit" value="Zaloguj się">
        </form>

        <div>
            <a href="register.php">
                Zajerestruj się
            </a>
        </div>

        <?php
            if (isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
            }
        ?>
    </div>
    <script src="js/login_listeners.js"></script>
</body>
</html>