<?php
require("db.php");

$query = "SELECT * FROM user_tbl";
$result = mysqli_query($conn, $query);
echo "<table>";
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>" . $row['user_name'] . "</td>";
        echo "<td>" . $row['create_datetime'] . "</td>";
        echo "</tr>";
    }
echo "</table>";
}
?>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    table{
        width: 50%;
        margin: auto;
        font-size: 2em;
    }
    th, td{
        padding: 10px;
    }
</style>