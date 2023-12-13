<?php

use Kirby\Products\Product;
use Kirby\Toolkit\Str;

return [
    'label' => 'Products',
    'icon'  => 'cart',
    'query' => function (string $query) {
        $products = Product::list();
        $results  = [];

        foreach ($products as $product) {
            if (Str::contains($product['title'], $query, true) === true) {
                $results[] = [
                    'text' => $product['title'],
                    'link' => '/products/' . $product['id'],
                    'image' => [
                        'icon' => 'cart',
                        'back' => 'purple-400'
                    ]
                ];
            }
        }

        // show 20 results max
        return array_slice($results, 0, 10);
    }
];
