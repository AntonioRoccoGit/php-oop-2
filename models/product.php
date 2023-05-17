<?php

/**
 * ##Products class
 * defina a class product
 * @author Antonio Rocco
 */

class Products
{
    public $value = "Products";
    public $name;
    public $serNumber;
    public $brand;
    public $price;
    public $description;
    public $categories;


    /**
     * @param string $_name
     * @param string $_serNumb
     * @param float $_price
     * @param object $_categories
     */
    function __construct($_name, $_serNumb, $_price, $_categories)
    {
        $this->name = $_name;
        $this->serNumber = $_serNumb;
        $this->price = $_price;
        $this->categories = $_categories;
    }
}
