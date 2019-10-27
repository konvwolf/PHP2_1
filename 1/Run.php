<?php
include 'CreateProduct.php';
include 'products_list.php';

$product = new CreateProduct;

if (isset ($bomberProduct)) {
    foreach ($bomberProduct as $val) {
        $bomber = $product -> createBomber ($val['oem'], $val['name'], $val['class'], $val['price'], $val['description'], $val['bomb_load'], $val['take_off_weight']);
        echo $bomber -> getClass () . ' ' . $bomber -> getName () . ' разработан фирмой "' . $bomber -> getOEM () . '". ' . $bomber -> getDescription () . '. ' .
            'Максимальный взлетный вес самолета составляет ' . $bomber -> getTakeOffWeight () . '. Он может нести бомбовую нагрузку массой до ' . $bomber -> getBombLoad () .
            '. Стоимость самолета составляет ' . $bomber -> getPrice () . '.<br>';
    }
}

if (isset ($tankProduct)) {
    foreach ($tankProduct as $val) {
        $tank = $product -> createTank ($val['oem'], $val['name'], $val['class'], $val['price'], $val['description'], $val['full_mass'], $val['mobility']);
        echo $tank -> getClass () . ' ' . $tank -> getName () . 'фирмы "' . $tank -> getOEM () . '". ' . $tank -> getDescription () . ' Машина имеет полную боевую массу '
            . $tank -> getFullMass () . ' ' . $tank -> getMobility . '. Стоимость одной машины составляет ' . $tank -> getPrice () .' рублей.<br>';
    }
}