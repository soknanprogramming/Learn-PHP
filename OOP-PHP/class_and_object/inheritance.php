<?php 

    class Fruit{
        private $color = null;
        protected $size = 2;
        public $price = 1;
        public function setColor(string $color){
            $this->color = $color;
        }
        public function getColor(){
            return $this->color;
        }
    }

    class GoodFruit extends Fruit{
        public function setSize(int $size){
            $this->size = $size;
        }

        public function getSize(){
            return $this->size;
        }
    }

    $objGF = new GoodFruit();

    $objGF->setColor("back");
    echo "Color is " . $objGF->getSize() . "<br>";

    $objGF->setSize(50);
    echo "Size is " . $objGF->getSize() . "<br>";

    $objGF->price = 100;
    echo "Price is " . $objGF->price . "<br>";

?>