<?php

include './db.php';

// function updateCart($cust_id, $p_id, $quantity, $total)
// {
// }

if (isset($_POST['updateCart'])) {
    $cust_id = $_POST['cust_id'];
    $p_id = $_POST['p_id'];
    $quantity = $_POST['quantity'];
    $total = $_POST['total'];
}

function add_to_cart($cust_id, $p_id, $quantity)
{
}

function remove_from_cart($cust_id, $p_id, $quantity)
{
}
