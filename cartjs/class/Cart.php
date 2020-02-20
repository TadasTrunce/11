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

    public function remove($id)
    {
        if (isset($this->cart[$id])) {
            unset($this->cart[$id]);
        }
        $this->update();
    }

    public function update()
    {
        $_SESSION['cart'] = $this->cart;
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function setCart($cart)
    {
        $_SESSION['cart'] = $cart;
    }

    public function getProduct($id)
    {

        if (isset($this->products->products[$id])) {
            return $this->products->products[$id]; // masyvas produkto kurio id == $id
        }

        return null;
        
    }

    public function cartTotal()
    {
        $total = 0;
        foreach ($this->cart as $id => $count) {
            $total += $this->getProduct($id)['price']*$count;
        }
        return $total;
    }

}