<?php
    require_once "administrator/connect.php";

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno != 0)
    {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        $connection->query("SET NAMES 'utf8'");

        if ($result = $connection->query("SELECT * FROM books WHERE available = 1"))
        {
            $row = $result->fetch_assoc();
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr><td>" . $row['series'] . ": " . $row['title'] . "</td><td>" . $row['author'] . "</td></tr>";
            }
        }

        $result->close();
        $connection->close();
    }
?>
