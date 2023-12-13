<?php

use Kirby\Products\Product;
use Kirby\Toolkit\A;

return [
    'pattern' => 'products',
    'action'  => function () {
        $sort = get('sort', 'title');
        $dir  = get('dir', 'asc');

        $products = Product::list();
        $products = A::sort($products, $sort, $dir);

        return [
            'component' => 'k-products-view',
            'props' => [
                'dir'      => $dir,
                'sort'     => $sort,
                'products' => $products
            ]
        ];
    }
];
