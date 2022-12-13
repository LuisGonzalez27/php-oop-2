<?php
?>
<main class="container">

    <h2 class="text-center py-2">Food</h2>

    <div class="row">

        <div class="col d-flex justify-content-center">
            <div class="card border-dark" style="width: 18rem;">
                <img src="<?php echo $product1->image ?>">
                <div class="card-boy card-header my-card-boy">
                    <h5 class="card-title">
                        <?php echo $product1->name ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Category:
                        <?php echo $product1->category ?>
                    </h6>
                    <p class="card-subtitle text-muted">
                        <?php echo $product1->food_type ?>
                    </p>
                    <p class="card-subtitle text-muted">
                        Size:
                        <?php echo $product1->size ?>
                    </p>
                    <p class="my-price">
                        Prezzo:
                        <?php echo $product1->price ?>€
                    </p>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card border-dark" style="width: 18rem;">
                <img src="<?php echo $product2->image ?>">
                <div class="card-boy card-header my-card-boy">
                    <h5 class="card-title">
                        <?php echo $product2->name ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Category:
                        <?php echo $product2->category ?>
                    </h6>
                    <p class="card-subtitle text-muted">
                        <?php echo $product2->food_type ?>
                    </p>
                    <p class="card-subtitle text-muted">
                        Size:
                        <?php echo $product2->size ?>
                    </p>
                    <p class="my-price">
                        Prezzo:
                        <?php echo $product2->price ?>€
                    </p>
                </div>
            </div>
        </div>

        <h2 class="text-center py-2">Game</h2>

        <div class="row">

            <div class="col d-flex justify-content-center">
                <div class="card border-dark" style="width: 18rem;">
                    <img src="<?php echo $product3->image ?>">
                    <div class="card-boy card-header my-card-boy">
                        <h5 class="card-title">
                            <?php echo $product3->name ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Category:
                            <?php echo $product3->category ?>
                        </h6>
                        <p class="card-subtitle text-muted">
                            Age:
                            <?php echo $product4->age?>
                        </p>
                        <p class="card-subtitle text-muted">
                            Textbook:
                            <?php echo $product4->textbook?>
                        </p>
                        <p class="my-price">
                            Prezzo:
                            <?php echo $product3->price ?>€
                        </p>
                    </div>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card border-dark" style="width: 18rem;">
                    <img src="<?php echo $product4->image ?>">
                    <div class="card-boy card-header my-card-boy">
                        <h5 class="card-title">
                            <?php echo $product4->name ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Category:
                            <?php echo $product4->category ?>
                        </h6>
                        <p class="card-subtitle text-muted">
                            Age:
                            <?php echo $product4->age?>
                        </p>
                        <p class="card-subtitle text-muted">
                            Textbook:
                            <?php echo $product4->textbook?>
                        </p>
                        <p class="my-price">
                            Prezzo:
                            <?php echo $product4->price ?>€
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>

</main>