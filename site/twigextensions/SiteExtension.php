<?php
/**
 * FauxTwigExtension for Craft CMS 3.x
 *
 * This is intended to be used with the Symfony Plugin for PhpStorm:
 * https://plugins.jetbrains.com/plugin/7219-symfony-plugin
 *
 * It will provide full auto-complete for craft.app. and and many other useful things
 * in your Twig templates.
 *
 * Place the file somewhere in your project or include it via PhpStorm Settings -> Include Path.
 * You never call it, it's never included anywhere via PHP directly nor does it affect other
 * classes or Twig in any way. But PhpStorm will index it, and think all those variables
 * are in every single template and thus allows you to use Intellisense auto completion.
 *
 * Thanks to Robin Schambach; for context, see:
 * https://github.com/Haehnchen/idea-php-symfony2-plugin/issues/1103
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2019 nystudio107
 */

namespace site\twigextensions;

use Kirby\Toolkit\Html;
use Twig\Extension\AbstractExtension;
use Twig\Markup;
use Twig\TwigFunction;

/**
 * @author    wsydney76
 * @package   Site
 * @since     1.0.0
 */
class SiteExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('tel', function($tel) {
                return new Markup(Html::tel($tel), 'UTF-8');
            }),
            new TwigFunction('email', function($email) {
                return new Markup(Html::email($email), 'UTF-8');
            }),
            new TwigFunction('a', function($url, $text) {
                return new Markup(Html::a($url, $text), 'UTF-8');
            })
        ];
    }
}
