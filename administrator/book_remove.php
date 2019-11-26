<?php
    session_start();

    require_once "connect.php";

    $id_book = $_POST['book_id'];
    $rent_user = $_SESSION['user'];

    if (empty($id_book)) {
        $_SESSION['book_rent_message'] = '<br><span style="color: red; font-weight: bold; margin-top: 10px">Podaj id książki</span>';
        header('Location: panel_get_book.php');
        exit();
    }

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno != 0)
    {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        if ($result = $connection->query("SELECT is_available FROM books WHERE id = $id_book"))
        {
            $row = $result->fetch_assoc();

            $rows_count = $result->num_rows;
            if ($rows_count == 0) {
                $_SESSION['book_rent_message'] = '<br><span style="color: red; font-weight: bold; margin-top: 10px">Nie znaleziono książki</span>';
            } else {
                if ($row['is_available'] == 1) {
                    if ($update_row = $connection->query("UPDATE books SET is_available = false, borrower = 'user' WHERE id = $id_book")) {
                        $_SESSION['book_rent_message'] = '<br><span style="color: green; font-weight: bold; margin-top: 10px">Książke dodano pomyślnie</span>';
                    }
                } else {
                    $_SESSION['book_rent_message'] = '<br><span style="color: red; font-weight: bold; margin-top: 10px">Nie znaleziono książki lub została już wypożyczona</span>';
                }
            }
            // $update_row->close();
        }

        $result->close();
        $connection->close();

        header('Location: panel_get_book.php');
    }
?>
