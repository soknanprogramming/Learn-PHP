<?php

include('database.php');

$query = 'SELECT * FROM user_tbl';
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        foreach($row as $key => $col){
            echo $key . "=" . $col . "<br>";
        }
        $id = $row['user_id'];
        echo '<a href="delete.php?id='. $row['user_id'] . '">Delete user</a>';
        echo "<hr>";
    }
}
?>