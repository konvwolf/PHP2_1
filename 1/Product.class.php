<?php
class Product {
    private $oem;
    private $name;
    private $class;
    private $price;
    private $description;

    function __construct ($oem, $name, $class, $price, $description) {
        $this -> oem = $oem;
        $this -> name = $name;
        $this -> class = $class;
        $this -> price = $price;
        $this -> description = $description;
    }

    function getOEM () {
        return $this -> oem;
    }

    function getName () {
        return $this -> name;
    }

    function getClass () {
        return $this -> class;
    }

    function getPrice () {
        return $this -> price;
    }

    function getDescription () {
        return $this -> description;
    }
}