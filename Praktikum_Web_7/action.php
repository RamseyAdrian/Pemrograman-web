<?php


class Barang
{
    private $name;
    private $weightKG;
    private $weightG;
    private $weightMG;
    private $stock;


    //-------------Name--------------------
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    //-------------Berat KG--------------------
    function set_weightKG($weightKG)
    {
        $this->weightKG = $weightKG;
    }

    function get_weightKG()
    {
        return $this->weightKG;
    }

    //-------------Berat G--------------------
    function set_weightG($weightG)
    {
        $this->weightG = $weightG;
    }

    function get_weightG()
    {
        return $this->weightG;
    }

    //-------------Berat MG--------------------
    function set_weightMG($weightMG)
    {
        $this->weightMG = $weightMG;
    }

    function get_weightMG()
    {
        return $this->weightMG;
    }

    //-------------Stock--------------------
    function set_stock($stock)
    {
        $this->stock = $stock;
    }

    function get_stock()
    {
        return $this->stock;
    }
}
