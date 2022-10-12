<?php

/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  Block snippets control the HTML for individual blocks
  in the blocks field. This image snippet overwrites
  Kirby's default image block to add custom classes
  and data attributes.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/

/** @var Block $block */

use Kirby\Cms\Block;
use Kirby\Toolkit\Str;

$alt      = $block->alt();
$caption  = $block->caption();
$contain  = $block->crop()->isFalse();
$link     = $block->link();
$ratio    = $block->ratio()->or('auto');
$class    = 'w-full aspect-' . $ratio;
$src      = null;
$lightbox = $link->isEmpty();
$srcValue = null;

if ($block->location() === 'web') {
    $src      = $block->src();
    $srcValue = $src->escape('attr');
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt->or($image->alt());
    $src = $srcValue = $image->permalink();
}

$attrs = attr([
  'data-contain'  => $contain,
  'data-lightbox' => $lightbox,
  'href'          => $link->or($src),
]);

?>
<?php if ($srcValue): ?>

<figure>
  <a <?= $attrs ?>>
    <div class="<?= $class ?>">
      <img class="object-cover h-full w-full" src="<?= $srcValue ?>" alt="<?= esc($alt, 'attr') ?>">
    </div>
  </a>

  <?php if ($caption->isNotEmpty()): ?>
  <figcaption class="img-caption">
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
<?php endif ?>
