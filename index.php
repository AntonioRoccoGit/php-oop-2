<!-- Include Product class -->
<?php require_once __DIR__ . "/models/product.php"; ?>

<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include __DIR__ . "/partials/head.php" ?>
<!-- /head -->

<body>

</body>

<!-- footer -->
<?php include __DIR__ . "/partials/footer.php" ?>
<!-- /footer -->


</html>

<?php

$first_product = new Products("lettiera", "4584568465", 6.5);

var_dump($first_product);
