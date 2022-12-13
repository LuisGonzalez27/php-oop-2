<?php
    require_once __DIR__ . '/Models/Product.php';

    $palla = new Product('Palla', 5, 'Cane');

    var_dump($palla);

    $productDog = new Food('Crocchette ', 43, 'Cane', 'Tonno e Riso', '15 Kg');

    var_dump($productDog);
?>