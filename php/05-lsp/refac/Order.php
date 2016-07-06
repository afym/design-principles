<?php

class Order
{

    private $products;

    public function __construct()
    {
        $this->products = new ArrayObject();
    }

    public function addProduct(Product $product)
    {
        $this->products->append($product);
    }

    public function getTotal()
    {
        $total = 0.0;

        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total;
    }

}
