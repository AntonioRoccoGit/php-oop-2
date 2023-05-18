<?php
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/../traits/OutDoor.php";
class GameProduct extends Products
{
    use OutDoor;
    public $value = "Giochi";
    public $material;
    public $utility;
}
