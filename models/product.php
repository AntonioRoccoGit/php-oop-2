<?php

/**
 * ##Products class
 * defina a class product
 * @author Antonio Rocco
 */

class Products
{
    public $value = "Generico";
    public $name;
    public $serNumber;
    public $poster;
    public $brand;
    public $price;
    public $description = "Inserire una descrizione";
    public $categories;


    /**
     * @param string $_name
     * @param string $_serNumb
     * @param float $_price
     * @param object $_categories
     * @param string $_poster
     */
    function __construct($_name, $_serNumb, $_price, $_categories, $_poster = null)
    {
        $this->name = $_name;
        $this->serNumber = $_serNumb;
        $this->price = $_price;
        $this->categories = $_categories;
        $this->poster = $_poster;
    }
}
