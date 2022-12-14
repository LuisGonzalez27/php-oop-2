<?php
require_once 'Product.php';
class Game extends Product
{
    public $age;
    public $textbook;

    public function __construct($_name, $_price, $_category, $_brand,$_image, $_age, $_textbook)
    {
        parent::__construct($_name, $_price, $_category, $_brand,$_image);
        $this->age = $_age;
        $this->textbook = $_textbook;
    }

    function getClassName()
    {
        return get_class();
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setTextbook($textbook)
    {
        $this->textbook = $textbook;
    }

    public function getTextbook()
    {
        return $this->textbook;
    }

};