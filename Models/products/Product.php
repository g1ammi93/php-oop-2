<?php

require_once __DIR__ . '/../Category.php';

class Product
{
    protected $name;
    protected $image;
    protected $price;
    protected $category;

    public function __construct($name, $image, $price, Category $category)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }
}
