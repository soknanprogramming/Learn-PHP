<?php
// use function unset() to delete an object
    class Testing{
        public function getData(){
            return 593738;
        }
        public function __destruct(){
            echo "You was delete an object!";
        }
    }

    $obj = new Testing;
    echo "Data is " . $obj->getData() . "<br>";

    unset($obj);
?>