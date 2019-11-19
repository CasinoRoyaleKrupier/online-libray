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

        if ($result = $connection->query("SELECT * FROM books WHERE is_available = true"))
        {
            $row = $result->fetch_assoc();

            $rows_count = $result->num_rows;
            if ($rows_count < 1) {
                echo '<span id="table_title">W bazie danych nie ma książek</span>';
            } else {
                echo <<< END
                    <span id="table_title">Dostępne książki</span>
                    <table class="tg" align="center">
                        <tr>
                            <th class="tg-c3ow"></th>
                            <th class="tg-c3ow">Tytuł</th>
                            <th class="tg-c3ow">Autor</th>
                        </tr>
                END;

                echo '<tr><td><input type="checkbox"></td><td>' . $row['series'] . ': ' . $row['title'] . '</td><td>' . $row['author'] . '</td></tr>';

                while($row = mysqli_fetch_array($result))
                {
                    echo '<tr><td><input type="checkbox"></td><td>' . $row['series'] . ': ' . $row['title'] . '</td<td><td>' . $row['author'] . '</td></tr>';
                }

                echo "</table>";
            }
        }

        $result->close();
        $connection->close();
    }
?>
