<?php
require_once __DIR__ . '/Category.php';
    class Product {
        public $name;
        public $price;
        public $brand;
        public $category;
        public $image;

    
        function __construct(string $_name,int $_price, string $_brand, $_category, string $_image)
        {
            $this->name = $_name;
            $this->price = $_price;
            $this->brand = $_brand;
            $this->category = $_category;
            $this->image = $_image;
        }

        public function getClassName()
        {
            return get_class();
        }
    }
