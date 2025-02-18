<?php
    class FirstClass{
        const EXAMPLE = "You can't change this!";
        public const SNTEST = "Just Sn Test!";

        public static function test(){
            $testing = "This is a test!";
            return $testing;
        }
    }

    class SecondClass extends FirstClass{
        public static $staticProperty = "A static property!";

        public static function anotherTest(){
            echo parent::EXAMPLE . "<br>";
            echo self::$staticProperty . "<br>";
        }
    }

    $a = FirstClass::EXAMPLE;
    echo $a . "<br>";


    $b = FirstClass::SNTEST;
    echo $b . "<br>";

    $c = SecondClass::anotherTest();
    echo $c . "<br>";

    $d = FirstClass::test();
    echo $d . "<br>";

?>