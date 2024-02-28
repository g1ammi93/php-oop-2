<?php

require_once __DIR__ . '/Category.php'

class Product {
    protected $id;
    protected $name;
    protected $image;
    protected $price;
    protected $category;

    public function __construct($id, $name, $image, $price, Category $category) {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
    }
}

?>