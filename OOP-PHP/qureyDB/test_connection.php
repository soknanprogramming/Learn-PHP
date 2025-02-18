<?php

include 'Dbh.php';

$db = new Dbh();
$conn = $db->testConnect();

if ($conn) {
    echo "Database connected successfully!";
}
?>
