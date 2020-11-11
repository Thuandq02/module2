<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;
new Product("laptop");


$productManager = new ProductManager();

$productManager->add(new Product("laptop"));
$productManager->add(new Product("mobile"));

$products = $productManager->getProducts();

foreach ($products as $product) {
    echo $product->getName() . "<br/>";
}