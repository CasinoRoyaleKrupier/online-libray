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

        if ($result = $connection->query("SELECT * FROM books"))
        {
            $row = $result->fetch_assoc();

            $rows_count = $result->num_rows;
            if ($rows_count < 1) {
                echo '<span id="table_title">W bazie danych nie ma książek</span>';
            } else {
                if ($row['is_available'] == 1) {
                    $string_available = 'Tak';
                } else {
                    $string_available = '<span style="color: red;">Nie</span>';
                }

                echo <<< END
                    <span id="table_title">Lista wszystkich książek</span>
                    <table class="tg" align="center">
                        <tr>
                            <th class="tg-c3ow">Tytuł</th>
                            <th class="tg-c3ow">Autor</th>
                            <th class="tg-c3ow">Strony</th>
                            <th class="tg-c3ow">Dostępność</th>
                        </tr>
                        <tr>
                            <td>$row[series]: $row[title]</td>
                            <td>$row[author]</td>
                            <td>$row[number_of_pages]</td>
                            <td>$string_available</td>
                        </tr>
                END;

                while($row = mysqli_fetch_array($result))
                {
                    if ($row['is_available'] == 1) {
                        $string_available = 'Tak';
                    } else {
                        $string_available = '<span style="color: red;">Nie</span>';
                    }

                    echo <<< END
                        <tr>
                            <td>$row[series]: $row[title]</td>
                            <td>$row[author]</td>
                            <td>$row[number_of_pages]</td>
                            <td>$string_available</td>
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
