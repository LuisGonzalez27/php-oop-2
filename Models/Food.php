<?php
require_once __DIR__ . '/Product.php';
class Food extends Product{
        public $food_type;
        public $size;

        function __construct($_name, $_price, $_category, $_brand, $_image, $_food_type, $_size){
            parent::__construct($_name, $_price, $_category, $_brand,$_image);
            $this->food_type = $_food_type;
            $this->size = $_size;
        }
    }