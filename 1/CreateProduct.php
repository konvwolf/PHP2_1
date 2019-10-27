<?php
include 'Product.class.php';
include 'Bomber.class.php';
include 'Tank.class.php';

class CreateProduct {
    function createBomber ($oem, $name, $class, $price, $description, $bomb_load, $take_off_weight) {
        return new Bomber ($oem, $name, $class, $price, $description, $bomb_load, $take_off_weight);
    }

    function createTank ($oem, $name, $class, $price, $description, $full_mass, $mobility) {
        return new Tank ($oem, $name, $class, $price, $description, $full_mass, $mobility);
    }
}