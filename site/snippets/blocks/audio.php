<?php

/** @var Block $block */

use Kirby\Cms\Block;

$file = $block->source()->toFile();
if ($file): ?>
  <div class="not-prose">
    <div class="sm:flex bg-black text-white mb-8">
      <?php $poster = $block->poster()->toFile();
      if ($poster): ?>
        <figure class="flex-shrink-0"><?= $poster->crop(220, 220) ?></figure>
      <?php endif ?>
      <div class="p-4">
        <h1 class="text-2xl mb-1"><?= $block->title()->html() ?></h1>
        <h2 class="text-2xl text-gray-300"><?= $block->subtitle()->html() ?></h2>
        <div class="mt-4">
          <?= $block->description() ?>
        </div>
        <audio class="mt-8 h-8"
          <?= $block->controls()->isTrue() ? 'controls' : '' ?>
          <?= $block->autoplay()->isTrue() ? 'autoplay' : '' ?>
        >
          <source src="<?= $file->url() ?>" type="<?= $file->mime() ?>">
          Your browser does not support the <code>audio</code> element.
        </audio>
      </div>
    </div>
  </div>
<?php endif ?>