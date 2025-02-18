<?php
//destructors working when end of object or we delete it
class TestDestructors{
    public $testing;
    public function __destruct(){
        echo "You was delete object !<br>";
    }
}

$obj = new TestDestructors();
$obj->testing = 80;
echo $obj->testing . "<br>";

unset($obj);
?>