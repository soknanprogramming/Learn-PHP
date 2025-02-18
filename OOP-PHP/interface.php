<?php

    interface PaymentInterface{
        //public function payNow();
        public function paymentProcess();
    }

    interface LoginInterface{
        public function loginFirst();
        public function paymentProcess();
    }

    class Paypal implements PaymentInterface, LoginInterface{
        public function loginFirst(){}
        private function payNow(){}
        public function paymentProcess(){
            $this->loginFirst();
            $this->payNow();
        }
    }

    class Visa implements PaymentInterface, LoginInterface{
        private function payNow(){}
        public function loginFirst(){}
        public function paymentProcess(){
            $this->loginFirst();
            $this->payNow();
        }
    }

    class Chash implements PaymentInterface{
        private function payNow(){}
        public function paymentProcess(){
            $this->payNow();
        }
    }

    class BuyProduct{
        public function pay(PaymentInterface $paymentType){
            $paymentType->paymentProcess();
        }

        public function payOnline(LoginInterface $paymentType){
            $paymentType->paymentProcess();
        }
    }

    $paymentType = new Chash();
    $buyProduct = new BuyProduct();
    $buyProduct->pay($paymentType);

    $buyProduct->pay(new Visa);



?>