<?php

class Test1{
    private static $name = "Reaksmey";
    protected static $age = 11;
    public static $height = 140;

    public static function setName(string $name){
        self::$name = $name;
    }
    public static function getName(){
        return self::$name;
    }

}

class Test2 extends Test1{
    public static function setAge(int $age){
        parent::$age = $age;
    }
    public static function getAge(){
        return parent::$age;
    }
}


$obj1 = new Test2();
echo "age get by obj1 is " . $obj1->getAge() . "<br>";
$obj1->setAge(22);
$obj2 = new Test2();
echo "age get by obj2 is " . $obj2->getAge() . "<br>";

Test2::$height = 999;
echo "Height is " . Test2::$height . "<br>";
echo "Name is " . Test1::getName() . "<br>";

?>