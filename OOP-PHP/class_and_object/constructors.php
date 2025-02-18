<?php
// Constuctors working when we create object

class TestConstructor{
    private $password = "ggpp";
    public function __construct($password){
        $this->password = $password;
        echo "You have create an object ! <br>";
    }

    public function getPassword(){
        return $this->password;
    }
}


$obj1 = new TestConstructor("1234");
$obj2 = new TestConstructor("youtube");

echo "obj1 password is " . $obj1->getPassword() . "<br>";
echo "obj2 password is " . $obj2->getPassword() . "<br>";

?>