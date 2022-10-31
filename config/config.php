<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen.
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */

// Load dotenv?
if (class_exists(Dotenv\Dotenv::class)) {
    Dotenv\Dotenv::createUnsafeImmutable('..')->safeLoad();
}

$isDev = $_SERVER['ENVIRONMENT'] === 'dev';
$isProd = $_SERVER['ENVIRONMENT'] === 'production';

return [
    'debug' => $isDev,
    'panel.install' => true,
    'thumbs' => [
        'format' => 'webp'
    ],
    'amteich.twig.env.extensions' => [
        'site' => 'site\\twigextensions\\SiteExtension'
    ],
    'amteich.twig.cache' => $isProd
];
