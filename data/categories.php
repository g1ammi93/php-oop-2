<?php

require_once __DIR__ . '/../Models/Category.php';

$categories = [
    'dog' => new Category('Cani', 'fa-solid fa-dog'),
    'cat' => new Category('Gatti', 'fa-solid fa-cat'),
    'fish' => new Category('Pesci', 'fa-solid fa-fish'),
    'bird' => new Category('Bird', 'fa-solid fa-dove'),
];
