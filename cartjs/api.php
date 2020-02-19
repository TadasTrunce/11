<?php
session_start();
require __DIR__.'/class/Cart.php';
require __DIR__.'/class/Products.php';
$products = new Products;
$cart = new Cart($products);

$rawData = file_get_contents("php://input");
$data = json_decode($rawData, 1);
$cart->add($data['id'], $data['count']);

ob_start(); // uzdraudziam echo

require __DIR__ .'/cart-view.php';

$html = ob_get_clean();

header('Content-Type: application/json');

$response = ['data' => ['html' => $html]];

echo json_encode($response);