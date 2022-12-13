<?php
require_once __DIR__ . '/Category.php';
    class Product {
        public $name;
        public $price;
        public $brand;
        public $category;

    
        function __construct(string $_name,int $_price, string $_brand, $_category){
            $this->name = $_name;
            $this->price = $_price;
            $this->brand = $_brand;
            $this->category = $_category;
        }
    }
