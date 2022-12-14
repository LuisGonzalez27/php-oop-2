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

        function getClassName()
        {
          return get_class();
        }

        public function setFoodType($food_type)
        {
          $this->food_type = $food_type;
        }
        public function getFoodType()
        {
          return $this->food_type;
        }

        public function setSize($size)
        {
          $this->food_type = $size;
        }
        public function getSize()
        {
          return $this->food_type;
        }
    }