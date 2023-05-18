<?php
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/../traits/OutDoor.php";
/**
 * [Description FoodProduct]
 * extend class Produc in FoodProduct
 */
class FoodProduct extends Products
{
    public $value = "Cibo";
    public $weight;
    public $flavour;
    public $expireDate;

    /**
     * @param string $_name
     * @param string $_serNumb
     * @param float $_price
     * @param object $_categories
     * @param string $_exp_date
     */
    function __construct($_name, $_serNumb, $_price, $_categories, $_exp_date, $_poster = null)
    {
        parent::__construct($_name, $_serNumb, $_price, $_categories, $_poster);
        $this->expireDate = $_exp_date;
    }
}
