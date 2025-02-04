<?php
    if(isset($_GET['name']) && isset($_GET['sister'])){
        echo "Your name is {$_GET['name']} <br>";
        echo "Sister's name is {$_GET['sister']}";
    }
?>