<?php

require_once __DIR__ . '/Product.php';

class KennelProduct extends Product
{
    public $color;
    public $size;
    public static $type = 'kennel';
    public static $icon = 'fas fa-house';

    public function __construct($name, $image, $price, Category $category, $color, $size)
    {
        parent::__construct($name, $image, $price, $category);
        $this->color = $color;
        $this->size = $size;
    }
}
