<?php

require_once __DIR__ . '/Product.php';

class ToyProduct extends Product
{
    private $color;
    private $materials;
    public static $type = 'toy';
    public static $icon = 'fas fa-bone';

    public function __construct($name, $image, $price, Category $category, $color, $materials)
    {
        parent::__construct($name, $image, $price, $category);
        $this->color = $color;
        $this->materials = $materials;
    }
}
