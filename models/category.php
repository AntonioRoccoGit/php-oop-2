<?php

/**
 * Class ProductCategory
 */
class ProductCategory
{
    public $name;
    public $id;
    public $icon;

    /**
     * @param string $_name
     * @param int $_id
     * @param string $_icon
     */
    function __construct($_name, $_id, $_icon)
    {
        $this->name = $_name;
        $this->id = $_id;
        $this->icon = $_icon;
    }
}
