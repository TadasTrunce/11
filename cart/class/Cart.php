<?php

class Cart
{

    private $cart;

    public function __construct()
    {
        $this->cart = $_SESSION['cart'] ?? [];
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

}