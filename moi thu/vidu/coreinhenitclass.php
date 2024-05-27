<?php
    class Product{
            public $Id;
            public $Name;
            
            public function __construct($Id, $Name)
            {
                $this->Id = $Id;
                $this->Name = $Name;
            }
            public function set_Id($Id){
                $this->Id = $Id;
            }
            public function get_Id($Id){
                $this->Id = $Id;
            }
            public function set_Name($Name){
                $this->Name = $Name;
            }
            public function get_Name($Name){
                $this->Name = $Name;
            }
           
            public function toString(){
                return $this->Id.'-'.$this->Name;
            }
        }
        class Laptop extends Product{
            public $Company;
            public $Color;
            public $Amount;
            public $Price;
            public function __construct($Id,$Name,$Company, $Color, $Amount, $Price)
            {
                $this->Id =$Id;
                $this->Name =$Name;
                $this->Company = $Company;
                $this->Color = $Color;
                $this->Amount = $Amount;
                $this->Price = $Price;
            }
            public function set_Company($Company){
                $this->Company = $Company;
            }
            public function get_Company($Company){
                $this->Company = $Company;
            }
            public function set_Color($Color){
                $this->Color = $Color;
            }
            public function get_Color($Color){
                $this->Color = $Color;
            }
            public function set_Amount($Amount){
                $this->Amount = $Amount;
            }
            public function get_Amount($Amount){
                $this->Amount = $Amount;
            }
            public function set_Price($Price){
               $this->Price = $Price;
            }
            public function get_Price($Price){
                $this->Price = $Price;
            }
            public function subtotal(){
                return intval($this->Price)*intval($this->Amount);
            }
            public function toString(){
                return $this->Id.'-'.$this->Name.'-'.$this->Company.'-'.$this->Color.'-'.$this->Amount.'-'.$this->Price . '<br>total ' . $this->subtotal();
            }
        }
        ?>

      
