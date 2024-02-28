<?php

require_once __DIR__ . '/../Models/products/FoodProduct.php';
require_once __DIR__ . '/../Models/products/KennelProduct.php';
require_once __DIR__ . '/../Models/products/ToyProduct.php';
require_once __DIR__ . '/categories.php';


$products = [
    new FoodProduct(
        'Royal Canin Mini Adult',
        'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',
        20.99,
        $categories['dog'],
        '2025-11-10',
        ['prosciutto', 'riso']
    ),
    new FoodProduct(
        'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
        15.99,
        $categories['dog'],
        '2025-12-15',
        ['tonno', 'riso']
    ),
    new FoodProduct(
        'Almo Nature Cat Daily Lattina',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
        10.49,
        $categories['cat'],
        '2025-10-30',
        ['vitello']
    ),
    new FoodProduct(
        'Mangime per Pesci Guppy in Fiocchi',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
        5.99,
        $categories['fish'],
        '2026-01-20',
        ['guppy']
    ),
    new KennelProduct(
        'Voliera Wilma in Legno',
        'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
        99.99,
        $categories['bird'],
        'red',
        'small'
    ),
    new KennelProduct(
        'Cartucce Filtranti per Filtro EasyCrystal',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
        8.49,
        $categories['fish'],
        'blue',
        'medium'
    ),
    new ToyProduct(
        'Kong Classic',
        'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
        12.99,
        $categories['dog'],
        'black',
        'plastic'
    ),
    new ToyProduct(
        'Topini di peluche Trixie',
        'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
        6.99,
        $categories['cat'],
        'purple',
        'peluche'
    )
];
