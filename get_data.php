<?php include "/dbinfo.inc.php"; ?>

<?php

$database = mysqli_select_db($connection);
    $result = mysqli_query($conn, "SELECT * FROM suburb LIMIT 10");
    while($query_data = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<td>",$query_data[0], "</td>",
            "<td>",$query_data[1], "</td>",
            "<td>",$query_data[2], "</td>",
            "<td>",$query_data[3], "</td>",
            "<td>",$query_data[4], "</td>",
            "<td>",$query_data[5], "</td>";
        echo "</tr>";
    }


?>