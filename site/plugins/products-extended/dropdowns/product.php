<?php

return [
    'pattern' => 'products/(:any)',
    'action'  => function (string $id) {
        return [
            [
                'text'   => 'Edit',
                'icon'   => 'edit',
                'dialog' => 'products/' . $id . '/update'
            ],
            [
                'text'   => 'Delete',
                'icon'   => 'trash',
                'dialog' => 'products/' . $id . '/delete'
            ]
        ];
    }
];
