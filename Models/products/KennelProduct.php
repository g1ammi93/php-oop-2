<?php

require_once __DIR__ . '/Product.php';

class KennelProduct extends Product
{
    private $color;
    private $size;
    private $type = 'kennel';
    private $icon = 'fas fa-bone';

    public function __construct($name, $image, $price, Category $category, $color, $size)
    {
        parent::__construct($name, $image, $price, $category);
        $this->color = $color;
        $this->size = $size;
    }
}
