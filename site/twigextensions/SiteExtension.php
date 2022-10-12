<?php


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
