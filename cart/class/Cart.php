<?php

class Cart
{
    private $cart;
    private $products;

    public function __construct(Products $products)
    {
        $this->cart = $_SESSION['cart'] ?? [];
        $this->products = $products;
    }
    
    public function add($id, $count)
    {
        if (isset($this->cart[$id])) {
            $this->cart[$id] += $count;
        }
        else {
            $this->cart[$id] = $count;
        }
        $this->update();
    }

    public function update()
    {
        $_SESSION['cart'] = $this->cart;
    }

    public function getCart()
    {
        return $_SESSION['cart'] ?? [];
    }

    public function setCart($cart)
    {
        $_SESSION['cart'] = $cart;
    }

    public function getProduct($id)
    {

        if (isset($this->products->products[$id])) {
            return $this->products->products[$id];
        }

        return null;
        
    }

}