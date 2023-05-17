<?php
require_once __DIR__ . "/product.php";

/**
 * [Description CoverProduct]
 * extend class Produc in CoverProduct
 */
class CoverProduct extends Products
{
    public $value = "Cucce";
    public $capacity;

    /**
     * @param int $_capacity
     */
    function __construct($_name, $_serNumb, $_price, $_categories, $_capacity, $_poster = null)
    {
        parent::__construct($_name, $_serNumb, $_price, $_categories, $_poster);
        $this->capacity = $_capacity;
    }
}
