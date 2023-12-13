<?php

use Kirby\Products\Product;

return [
    'pattern' => 'products/create',
    'load'    => function () {
        return [
            'component' => 'k-form-dialog',
            'props'     => [
                'fields'       => require __DIR__ . '/fields.php',
                'submitButton' => t('create'),
            ],
        ];
    },
    'submit' => function () {
        return Product::create(get());
    }
];
