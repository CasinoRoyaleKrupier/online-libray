<?php
    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno != 0)
    {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        $connection->query("SET NAMES 'utf8'");

        $current_user = $_SESSION['user'];

        if ($result = $connection->query("SELECT * FROM books WHERE borrower = '$current_user' AND is_available = false"))
        {
            $row = $result->fetch_assoc();

            $rows_count = $result->num_rows;
            if ($rows_count < 1) {
                echo '<span id="table_title">Nie masz wyporzyczonej żadnej książki</span>';
            } else {
                echo <<< END
                    <span id="table_title">Wypożyczone książki</span>
                    <table class="tg" align="center">
                        <tr>
                            <th class="tg-c3ow">Id</th>
                            <th class="tg-c3ow">Tytuł</th>
                            <th class="tg-c3ow">Autor</th>
                        </tr>
                END;

                echo <<< END
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[series]: $row[title]</td>
                        <td>$row[author]</td>
                    </tr>
                END;

                while($row = mysqli_fetch_array($result))
                {
                    echo <<< END
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[series]: $row[title]</td>
                            <td>$row[author]</td>
                        </tr>
                    END;
                }

                echo "</table>";
            }
        }

        $result->close();
        $connection->close();
    }
?>
