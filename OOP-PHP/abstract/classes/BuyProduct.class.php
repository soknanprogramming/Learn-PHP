<?php

    //paymentmethod.adstrat.php
    abstract class Visa{
        public function visaPayment(){
            return "Perform a payment";
        }
        
        abstract protected function getPayment();
    }

    

    //this.php
    class BuyProduct extends Visa{
        public function getPayment(){
            return $this->visaPayment();
        }
    }

    //index.php
    $buyProduct = new BuyProduct();
    echo $buyProduct->getPayment();

?>