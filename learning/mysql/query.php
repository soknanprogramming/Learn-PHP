<?php
require("db.php");

echo "This is query page <br>";
$username = "soknan";

$query = "SELECT * FROM user_tbl WHERE user_name = '$username'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    echo $row['user_id'] . "<br>";
    echo $row['user_name'] . "<br>";
    echo $row['create_datetime'] . "<br>";
}
?>