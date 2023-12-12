<?php

return [
    'site',
    '-',
    'kitchensink' => [
        'label' => 'Kitchen Sink',
        'icon' => 'dashboard',
        'link' => 'pages/kitchensinks+kitchen-sink',
        'current' => function() {
            return str_ends_with(kirby()->request()->path(), '+kitchen-sink');
        }
    ],
    '-',
    'users',
    'languages',
    'system',
];
