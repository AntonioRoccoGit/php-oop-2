<?php
trait OutDoor
{
    private bool $isOutDoor = true;

    function setIsOutDoor($_isOut)
    {
        $this->isOutDoor = $_isOut;
    }

    function getIsOutDoor()
    {
        var_dump($this->isOutDoor);
    }
}
