<?php
defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Editor\LinkAbstractor;
use Concrete\Core\Form\Service\DestinationPicker\DestinationPicker;

/** @var \Concrete\Core\Form\Service\Form $form */
/** @var \Concrete\Core\Application\Service\FileManager $fileManager */
/** @var \Concrete\Core\Editor\EditorInterface $editor */

?>

<fieldset class="mb-3">
    <legend><?=t('Basics')?></legend>
    <div class="mb-3">
        <label class="form-label" for="image"><?=t('Left Image')?></label>
        <?php echo $fileManager->image('image', 'image', t('Choose Image'), $image ?? null); ?>
    </div>
    <div class="mb-3">
        <label class="form-label" for="image"><?=t('Right Image')?></label>
        <?php echo $fileManager->image('image2', 'image2', t('Choose Image'), $image2 ?? null); ?>
    </div>

    <div class="mb-3">
        <label class="form-label" for="image"><?=t('Height')?></label>
        <input class="form-range" type="range" name="height" id="heroImageHeight" min="20" max="100" onchange="updateHeroImageHeight(this.value)" value="<?=$height?>">
        <div class="alert alert-info">
            <?=t('Current Value:')?> <code><span data-value="height"></span></code>
        </div>
    </div>
</fieldset>
<fieldset class="mb-3">
    <legend><?=t('Left info.')?></legend>
    <div class="mb-3">
        <label class="form-label" for="title"><?=t('Title')?></label>
        <input type="text" name="title" class="form-control" value="<?=$title ?? null?>">
    </div>
    <div class="mb-3">
        <label class="form-label" for="body"><?=t('Body')?></label>
        <?php
        echo $editor->outputBlockEditModeEditor('body', isset($body) ? LinkAbstractor::translateFromEditMode($body) : null);
        ?>
    </div>
    <div class="mb-3">
        <label class="form-label" for="buttonText"><?=t('Button Text')?></label>
        <input type="text" name="buttonText" class="form-control" value="<?=$buttonText ?? null ?>">
        <div class="help-block">
            <?=t('Leave blank to omit the button.')?>
        </div>
    </div>
    <div class="mb-3">
        <?php echo $form->label('buttonLink', t('Button Link')) ?>
        <?php echo $destinationPicker->generate(
            'imageLink',
            $imageLinkPickers,
            $imageLinkHandle,
            $imageLinkValue
        )
        ?>
    </div>
</fieldset>

<fieldset class="mb-3">
    <legend><?=t('Right info.')?></legend>
    <div class="mb-3">
        <label class="form-label" for="title2"><?=t('Title')?></label>
        <input type="text" name="title2" class="form-control" value="<?=$title2 ?? null?>">
    </div>
    <div class="mb-3">
        <label class="form-label" for="body2"><?=t('Body')?></label>
        <?php
        echo $editor->outputBlockEditModeEditor('body', isset($body2) ? LinkAbstractor::translateFromEditMode($body2) : null);
        ?>
    </div>
    <div class="mb-3">
        <label class="form-label" for="buttonText"><?=t('Button Text')?></label>
        <input type="text" name="buttonText2" class="form-control" value="<?=$buttonText2 ?? null ?>">
        <div class="help-block">
            <?=t('Leave blank to omit the button.')?>
        </div>
    </div>
    <div class="mb-3">
        <?php echo $form->label('buttonLink', t('Button Link')) ?>
        <?php echo $destinationPicker->generate(
            'imageLink',
            $imageLinkPickers,
            $imageLinkHandle,
            $imageLinkValue
        )
        ?>
    </div>
</fieldset>

<script type="text/javascript">
    $(function() {
        updateHeroImageHeight = function (value) {
            document.querySelector('span[data-value=height]').innerHTML = value
        }
        updateHeroImageHeight(document.getElementById('heroImageHeight').value)

        Concrete.Vue.activateContext('cms', function (Vue, config) {
            new Vue({
                el: 'div[data-vue=hero-image]',
                components: config.components
            })
        })

    })
</script>
