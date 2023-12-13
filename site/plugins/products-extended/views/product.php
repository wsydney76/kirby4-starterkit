<?php

use Kirby\Products\Product;

return [
    'pattern' => 'products/(:any)',
    'action'  => function ($id) {
        $product = Product::find($id);

        return [
            'component'  => 'k-product-view',
            'breadcrumb' => [
                [
                    'label' => $product['title'],
                    'link'  => 'products/' . $id
                ]
            ],
            'props' => [
                'product' => $product
            ]
        ];
    }
];
