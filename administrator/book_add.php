<?php
    session_start();

    require_once "../connect.php";

    $title = $_POST['title_book'];
    $series = $_POST['series_book'];
    $author = $_POST['author_book'];
    $count = $_POST['count_pages'];

    if (empty($title) || empty($author)) {
        $_SESSION['book_add_message'] = '<br><span style="color: red; font-weight: bold; margin-top: 10px">Podaj minimum tytuł oraz autora książki</span>';
        header('Location: admin_panel.php');
        exit();
    }

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno != 0)
    {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        if ($result = $connection->query("INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('$title', '$series', '$author', $count, true);"))
        {
            $_SESSION['book_add_message'] = '<br><span style="color: green; font-weight: bold; margin-top: 10px">Książka została dodana pomyślnie</span>';
        }
    }

        // $result->close();
        // $connection->close();

        header('Location: admin_panel.php');
?>
