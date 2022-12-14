<?php
?>
<main class="container pt-5">
    <div class="row">
        <?php foreach ($products as $product): ?>
        <div class="col d-flex justify-content-center">
            <div class="card border-dark" style="width: 18rem;">
                <img src="<?= $product->image; ?>">
                <div class="card-boy card-header my-card-boy">
                    <h5 class="card-title">
                        <?= $product->name ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Category:
                        <?= $product->category ?>
                    </h6>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Vote:
                        <?= $product->getVote() ?>
                    </h6>
                    <p>
                        <?php if ($product->getClassName() === 'Food') {
                            echo 'Tipologia: ' . $product->getFoodType();
                            ?>
                            <br>
                            <?php
                            echo 'Size: ' . $product->getSize();
                               } elseif ($product->getClassName() === 'Game') {
                                    echo 'Age: ' . $product->getAge();
                                    ?>
                                    <br>
                                    <?php
                                    echo 'Textbook: ' . $product->getTextbook();
                                }?>
                    </p>
                    <p class="my-price">
                        Prezzo:
                        <?= $product->price ?>€
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>