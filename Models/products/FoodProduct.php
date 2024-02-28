<?php

require_once __DIR__ . '/Product.php';

class FoodProduct extends Product
{
    public $expiration;
    public $ingredients;
    public static $type = 'food';
    public static $icon = 'fas fa-bowl-food';

    public function __construct($name, $image, $price, Category $category, $expiration, $ingredients)
    {
        parent::__construct($name, $image, $price, $category);
        $this->expiration = $expiration;
        $this->ingredients = $ingredients;
    }
}
