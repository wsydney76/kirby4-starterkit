<?php

require '../vendor/autoload.php';

echo (new Kirby([
    'roots' => [
        'index' => __DIR__,
        'base' => $base = dirname(__DIR__),
        'content' => $base . '/content',
        'config' => $config = $base . '/config',
        'blueprints' => $config . '/blueprints',
        'collections' => $config . '/collections',
        'site' => $base . '/site',
        'templates' => $base . '/templates',
        'storage' => $storage = $base . '/storage',
        'accounts' => $storage . '/accounts',
        'cache' => $storage . '/cache',
        'sessions' => $storage . '/sessions',
    ]
]))->render();
