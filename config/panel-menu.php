<?php

return [
    'site',
    '-',
    'kitchensink' => [
        'label' => 'Kitchen Sink',
        'icon' => 'dashboard',
        'link' => 'pages/kitchensinks+kitchen-sink',
        'current' => function() {
            return str_contains(kirby()->request()->path(), 'kitchensink');
        }
    ],
    '-',
    'users',
    'languages',
    'system',
];
