<?php

class Products
{
    public $products;
    
    public function __construct()
    {
        $this->products = require __DIR__.'/../db.php';
    }
}