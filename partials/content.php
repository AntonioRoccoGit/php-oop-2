<div class="ms_container mt-4">
    <div class="container">
        <div class="row row-cols-4">
            <?php foreach ($products_array as $product) { ?>
                <div class="col mb-2">
                    <div class="card h-100">
                        <img src="<?php echo $product->poster ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase"><?php echo $product->name ?></h5>
                            <p class="card-text"><?php echo $product->description ?></p>
                            <p class="card-text"><?php echo $product->value ?></p>
                            <i class="fa-solid <?php echo $product->categories->icon ?> mb-2"></i>
                            <a href="#" class="btn btn-primary"><?php echo number_format((float) $product->price, 2, '.', ''); ?>€</a>

                        </div>
                    </div>
                </div>
            <?php }; ?>

        </div>
    </div>
</div>