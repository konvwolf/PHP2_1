<?php
class Bomber extends Product {
    private $bomb_load;
    private $take_off_weight;

    function __construct ($oem, $name, $class, $price, $description, $bomb_load, $take_off_weight) {
        parent::__construct($oem, $name, $class, $price, $description);
        $this -> bomb_load = $bomb_load;
        $this -> take_off_weight = $take_off_weight;
    }

    function getBombLoad () {
        return $this -> bomb_load;
    }

    function getTakeOffWeight () {
        return $this -> take_off_weight;
    }
}