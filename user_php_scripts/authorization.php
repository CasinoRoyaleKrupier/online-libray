<?php
    session_start();

    if (!isset($_POST['login']) && (!isset($_POST['password'])))
    {
        header('Location: index.php');
        exit();
    }

    require_once "../administrator/connect.php";

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno != 0) {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $login = htmlentities($login, ENT_QUOTES, "UTF-8");

        if ( $result = $connection->query(sprintf("SELECT * FROM users WHERE username = '%s'", mysqli_real_escape_string($connection, $login))))
        {
            $user_count = $result->num_rows;
            if ($user_count > 0)
            {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['pass']))
                {
                    $_SESSION['logged'] = true;

                    $_SESSION['id'] = $row['id'];
                    $_SESSION['user'] = $row['username'];
                    $_SESSION['email'] = $row['mail'];

                    unset($_SESSION['error']);
                    header('Location: ../panel_user.php');
                    $result->close();
                }
                else
                {
                    $_SESSION['error'] = '<div style="color: red; margin-top: 10px; font-size: 18px; font-family: \'Roboto\', sans-serif;">Incorect password!</div>';
                    header('Location: ../index.php');
                }
            }
            else
            {
                $_SESSION['error'] = '<div style="color: red; margin-top: 10px; font-size: 18px; font-family: \'Roboto\', sans-serif;">Incorect login or password!</div>';
                header('Location: ../index.php');
            }
        }

        $connection->close();
    }
?>