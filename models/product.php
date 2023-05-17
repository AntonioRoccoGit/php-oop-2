<?php

/**
 * ##Products class
 * defina a class product
 * @author Antonio Rocco
 */

class Products
{
    public $name;
    public $serNumber;
    public $price;
    public $description;
    public $categories;

    /**
     * @param string $_name
     * @param string $_serNumb
     * @param float $_price
     */
    function __construct($_name, $_serNumb, $_price)
    {
        $this->name = $_name;
        $this->serNumber = $_serNumb;
        $this->price = $_price;
    }
}
