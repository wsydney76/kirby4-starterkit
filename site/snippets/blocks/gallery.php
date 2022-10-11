<?php
/** @var \Kirby\Cms\Block $block */
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$ratio   = $block->ratio()->or('auto');
?>
<figure<?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>>
  <div class="grid grid-cols-2 md:grid-cols-3 gap-4 not-prose">
    <?php foreach ($block->images()->toFiles() as $image): ?>
      <div>
        <?= $image->crop(300,300) ?>
      </div>
    <?php endforeach ?>
  </div>
  <?php if ($caption->isNotEmpty()): ?>
    <figcaption>
      <?= $caption ?>
    </figcaption>
  <?php endif ?>
</figure>
