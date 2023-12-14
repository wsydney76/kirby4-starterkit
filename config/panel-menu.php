<?php

return [
    'site',
    '-',
    'kitchensink' => [
        'label' => 'Kitchen Sink',
        'icon' => 'dashboard',
        'link' => 'pages/kitchensinks+kitchen-sink',
        'current' => function() {
            return kirby()->request()->path() == 'panel/pages/kitchensinks+kitchen-sink';
        }
    ],
    '-',
    'products' => [
        'label' => 'Products Demo',
        'icon' => 'cart',
        'link' => 'products',
        'current' => function() {
            return kirby()->request()->path() == 'panel/products';
        }
    ],
    '-',
    'search' => [
        'label' => 'Search Page',
        'icon' => 'search',
        'link' => 'search',
        'current' => function() {
            return kirby()->request()->path() == 'panel/search';
        }
    ],
    'users',
    'languages',
    'system',
];
