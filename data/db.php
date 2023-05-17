<?php
require_once __DIR__ . "/../models/product.php";
require_once __DIR__ . "/../models/category.php";
require_once __DIR__ . "/../models/gameProduct.php";
require_once __DIR__ . "/../models/foodProduct.php";

$categoryArray = [
    $cat_category = new ProductCategory("Gatti", 01, "fa-cat"),
    $dog_category = new ProductCategory("Cani", 02, "fa-dog")
];

$products_array = [];


$products_array[] = new Products("lettiera", "999907444", 17.5, $cat_category);
$products_array[] = new Products("pettorina", "7911236", 15, $dog_category);
$products_array[] = new Products("spazzola", "68954848", 6.5, $cat_category);
$products_array[] = new GameProduct("KONG", "4584568465", 12.99, $dog_category);
$products_array[] = new FoodProduct("Trainer", "12653387", 22.49, $dog_category, "12/08/2026");



var_dump($products_array, $categoryArray);
