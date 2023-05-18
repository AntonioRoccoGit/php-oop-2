<?php
require_once __DIR__ . "/../models/product.php";
require_once __DIR__ . "/../models/category.php";
require_once __DIR__ . "/../models/gameProduct.php";
require_once __DIR__ . "/../models/foodProduct.php";
require_once __DIR__ . "/../models/coverProduct.php";

$categoryArray = [
    $cat_category = new ProductCategory("Gatti", 01, "fa-cat"),
    $dog_category = new ProductCategory("Cani", 02, "fa-dog")
];

$products_array = [];


$products_array[] = new Products("lettiera", "9999044", 17.5, $cat_category, "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQMZpFjIvxvdhkqD_3un8D7gyiO8Hxypd0-XodOgOIBCXwJ55KzfiJYpcTztm34KuAxuGxsjSbfQs5D74QxK6wOD2JDSiz9G30_IU8v5ACSee7_CYRBhxZPjMqsWIvW0MRcCg&usqp=CAc");
$products_array[] = new Products("pettorina", "79114236", 15, $cat_category, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxPlB5iSMkJqtIKsKct0lYT75zdsXXshMT7A&usqp=CAU");
$products_array[] = new Products("spazzola", "68954848", 6.5, $dog_category, "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQSLaBvpZoHFTfZWDvjjCy01BVyd04CJeM6_iXUhmB_tsQcuy3lcUUWJhoeZe1ZSSGnQvpLe65BZrgkURYQUSTpczQiWWuokqGbdR6rQscJqbTIDNnG-V4bYBSgHJK7xUA5pw&usqp=CAc");
$products_array[] = new GameProduct("KONG", "4584564484", 12.99, $dog_category, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ__TFjlNOGjK5Uidt99T6zGK_vPg2oqkrTtQ&usqp=CAU");
$products_array[] = new FoodProduct("Trainer", "12653387", 22.49, $dog_category, "12/08/2026", "https://www.giramico.it/wp-content/uploads/2017/07/HP-MINI-light-mockup-sito-nobackground.png");
$products_array[] = new CoverProduct("Super Cuccia", "12653387", 22.49, $dog_category, 3, "https://shop-cdn-m.mediazs.com/bilder/cuscino/per/trasportini/per/cani/8/400/4_top_seller_1000x1000_8.jpg");


$products_array[5]->setIsOutDoor(false);
