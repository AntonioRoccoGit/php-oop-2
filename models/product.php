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
    private $serNumber;
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
    function __construct(String $_name, String $_serNumb, float $_price, $_categories, $_poster = null)
    {
        $this->name = $_name;
        try {
            $this->setSerialNumb($_serNumb);
        } catch (Exception $err) {
            var_dump($err->getMessage() . " Error:" . $err->getCode() . " Articolo: " . $this->name);
        };
        $this->price = $_price;
        $this->categories = $_categories;
        $this->poster = $_poster;
    }

    public function setSerialNumb($serial)
    {
        if (strlen($serial) == 8) {
            $this->serNumber = $serial;
        } else {
            throw new Exception("Serial Number is not valid", 00540);
        }
    }
}
