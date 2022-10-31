<?php

require '../vendor/autoload.php';

echo (new Kirby([
    'roots' => [
        'index' => __DIR__,
        'base' => $base = dirname(__DIR__),
        'accounts' => $base . '/data/accounts',
        'content' => $base . '/data/content',
        'config' => $config = $base . '/config',
        'blueprints' => $config . '/blueprints',
        'site' => $base . '/site',
        'templates' => $base . '/templates',
        'storage' => $storage = $base . '/storage',
        'cache' => $storage . '/cache',
        'sessions' => $storage . '/sessions',
    ]
]))->render();
