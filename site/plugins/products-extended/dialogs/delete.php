<?php

use Kirby\Products\Product;

return [
    'pattern' => 'products/(:any)/delete',
    'load' => function () {
        return [
            'component' => 'k-remove-dialog',
            'props' => [
                'text' => 'Do you really want to delete the product?'
            ]
        ];
    },
    'submit' => function (string $id) {
        Product::delete($id);

        return [
            // always make sure to redirect to the products list
            // especially when the product is deleted from the
            // product sub view
            'redirect' => '/products'
        ];
    }
];
