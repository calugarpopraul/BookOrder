<?php

function get_orders(){
    $ordersJson = file_get_contents('data/orders.json');
    $orders = json_decode($ordersJson,true);

    return $orders;
}

?>