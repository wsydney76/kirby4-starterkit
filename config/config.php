<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen.
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */

use site\twigextensions\SiteExtension;

$isDev = $_SERVER['ENVIRONMENT'] === 'dev';
$isProd = $_SERVER['ENVIRONMENT'] === 'production';

return [
    'debug' => $isDev,
    'panel.css' => 'assets/css/custom-panel.css',
    'panel.menu' => require __DIR__ . '/panel-menu.php',
    'thumbs' => [
        'format' => 'webp'
    ],
    'wearejust.twig.env.extensions' => [
        'site' => SiteExtension::class
    ],
    'wearejust.twig.cache' => $isProd,

];
