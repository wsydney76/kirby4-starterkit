<style>
    .audio-wrapper {
        display: flex;
        background: black;
        color: white;
        margin-bottom: 2em;
    }
    .audio-info {
        padding: 1em;
    }
    .audio-poster {
        flex-shrink: 0;
        margin-bottom: -5px !important;
    }
    .audio-title {
        font-size: 1.5rem;
        margin-bottom: 0.25em !important;
    }
    .audio-subtitle {
        font-size: 1rem;
    }
    .audio-element {
        margin-top: 2rem;
        height: 2rem;
    }
</style>

<?php /** @var Block $block  */

use Kirby\Cms\Block;

$file = $block->source()->toFile();
if ($file): ?>
    <div class="audio-wrapper">
        <?php $poster = $block->poster()->toFile();
        if ($poster): ?>
            <figure class="audio-poster"><?= $poster->crop(220, 220) ?></figure>
        <?php endif ?>
        <div class="audio-info">
            <h1 class="audio-title"><?= $block->title()->html() ?></h1>
            <h2 class="audio-subtitle"><?= $block->subtitle()->html() ?></h2>
                <div class="audio-description">
                    <?= $block->description() ?>
                </div>
                <audio class="audio-element"
                    <?= $block->controls()->isTrue() ? 'controls' : '' ?>
                    <?= $block->autoplay()->isTrue() ? 'autoplay' : '' ?>
                >
                    <source src="<?= $file->url()?>" type="<?= $file->mime() ?>">
                    Your browser does not support the <code>audio</code> element.
                </audio>
        </div>
    </div>
<?php endif ?>
