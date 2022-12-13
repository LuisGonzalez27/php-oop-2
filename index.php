<?php
    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/Models/Food.php';
    require_once __DIR__ . '/Models/Game.php';

    // var_dump($product1);

    $product1 = new Food('Crocchette ', 23,'Gemon','Cane','./img/gemon.jpg','Tonno e Riso', '3 Kg');

    // var_dump($product1);

    $product2 = new Food('Crocchette ', 18,'Purina','Gatto','./img/purina.jpg','Salmone', '1.5 Kg');

    // var_dump($product2);

    $product3 = new Game('Corda', 4, 'Gemon','Cane','./img/corda.jpg', 'Adult', 'No');
    // var_dump($product3);

    $product4 = new Game('Topo meccanico', 8, 'Purina','Gatto','./img/topo.jpg', 'Adult', 'Incluso');
    // var_dump($product4);

    include_once __DIR__ . '/partials/header.php';
    include_once __DIR__ . '/partials/main.php';
    include_once __DIR__ . '/partials/footer.php';

?>