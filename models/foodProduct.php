<?php
require_once __DIR__ . "/product.php";
class FoodProduct extends Products
{
    public $value = "Food";
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
    function __construct($_name, $_serNumb, $_price, $_categories, $_exp_date)
    {
        parent::__construct($_name, $_serNumb, $_price, $_categories);
        $this->expireDate = $_exp_date;
    }
}
