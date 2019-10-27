<?php
class Tank extends Product {
    private $full_mass;
    private $mobility;

    function __construct ($oem, $name, $class, $price, $description, $full_mass, $mobility) {
        parent::__construct($oem, $name, $class, $price, $description);
        $this -> full_mass = $full_mass;
        $this -> mobility = $mobility;
    }

    function getFullMass () {
        return $this -> full_mass;
    }

    function getMobility () {
        return $this -> mobility;
    }
}