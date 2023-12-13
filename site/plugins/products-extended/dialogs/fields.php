<?php

use Kirby\Products\Product;
use Kirby\Toolkit\A;

return [
    'title' => [
        'label' => 'Title',
        'type'  => 'text'
    ],
    'type' => [
        'label' => 'Type',
        'type'  => 'select',
        'empty' => false,
        'width' => '1/2',
        'options' => A::map(Product::types(), function ($type) {
            return ['value' => $type, 'text' => $type];
        })
    ],
    'price' => [
        'label' => 'Price',
        'type'  => 'number',
        'step'  => 0.01,
        'before' => '€',
        'width' => '1/2'
    ],
    'description' => [
        'label' => 'Description',
        'type'  => 'textarea',
        'buttons' => false
    ]
];
