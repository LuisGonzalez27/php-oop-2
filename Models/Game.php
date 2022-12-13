<?php
require_once 'Product.php';
class Game extends Product
{
    public $age;
    public $textbook;

    public function __construct($_name, $_price, $_category, $_brand, $_age, $_textbook)
    {
        parent::__construct($_name, $_price, $_category, $_brand);
        $this->age = $_age;
        $this->textbook = $_textbook;
    }
};