<?php

load([
    'Kirby\Products\Product' => __DIR__ . '/classes/Product.php'
]);

Kirby::plugin('getkirby/products', [
    'areas' => [
        'products' => [
            'label'   => 'Products',
            'icon'    => 'cart',
            'menu'    => true,
            'dialogs' => [
                require __DIR__ . '/dialogs/create.php',
                require __DIR__ . '/dialogs/update.php',
                require __DIR__ . '/dialogs/delete.php',
            ],
            'dropdowns' => [
                require __DIR__ . '/dropdowns/product.php'
            ],
            'search' => 'products',
            'searches' => [
                'products' => require __DIR__ . '/searches/products.php'
            ],
            'views' => [
                require __DIR__ . '/views/product.php',
                require __DIR__ . '/views/products.php'
            ]
        ]
    ]
]);
