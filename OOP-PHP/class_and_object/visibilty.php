<?php
class Dog{
    private $name;
    protected $color;
    public int $age;

    public function setName(string $name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

class CuteDog extends Dog{
    public function setColor(string $color){
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
}

$obj = new CuteDog();

$obj->setName("Kyky");
$obj->setColor("Blak");
$obj->age = 10;


echo "Name is " . $obj->getName() . "<br>";
echo "Color is " . $obj->getColor() . "<br>";
echo "Age is " . $obj->age . "<br>";


?>