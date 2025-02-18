<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $path = "class/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if(!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;

}

?>