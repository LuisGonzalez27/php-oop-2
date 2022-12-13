<?php
    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/Models/Food.php';
    require_once __DIR__ . '/Models/Game.php';

    $product1 = new Product('Palla', 5,'Purina','Cane');

    var_dump($product1);

    $product2 = new Food('Crocchette ', 43,'Purina','Cane', 'Tonno e Riso', '15 Kg');

    var_dump($product2);

    $product3 = new Game('Corda', 4, 'Cane', 'Monge', 'Adult', 'Inluso');
    var_dump($product3);

?>