<?php

use Kirby\Products\Product;

return [
    'pattern' => 'products/(:any)/update',
    'load'    => function (string $id) {
        $product = Product::find($id);

        return [
            'component' => 'k-form-dialog',
            'props' => [
                'fields' => require __DIR__ . '/fields.php',
                'value'  => $product
            ]
        ];
    },
    'submit' => function (string $id) {
        return Product::update($id, get());
    }
];
