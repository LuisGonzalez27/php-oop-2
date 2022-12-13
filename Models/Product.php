<?php
    class Product {
        public $name;
        public $price;
        public $animal;

        function __construct($_name, $_price, $_animal){
            $this->name = $_name;
            $this->price = $_price;
            $this->animal = $_animal;
        }
    }

    class Food extends Product{
        public $food_type;
        public $size;

        function __construct($_name, $_price, $_animal, $_food_type, $_size){
            parent::__construct($_name, $_price, $_animal);
            $this->food_type = $_food_type;
            $this->size = $_size;
        }
    }
?>