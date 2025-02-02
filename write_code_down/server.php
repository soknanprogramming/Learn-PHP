<?php
$x = 1;
foreach($_SERVER as $key => $value){
    echo "{$x}. {$key} = {$value} <br>";
    $x++;
}
?>