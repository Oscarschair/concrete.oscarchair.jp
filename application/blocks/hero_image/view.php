<?php

defined('C5_EXECUTE') or die('Access Denied.');

/**
 * @var Concrete\Core\Block\View\BlockView $this
 * @var Concrete\Core\Block\View\BlockView $view
 * @var Concrete\Core\Area\Area $a
 * @var Concrete\Core\Block\Block $b
 * @var Concrete\Core\Entity\Block\BlockType\BlockType $bt
 * @var Concrete\Block\HeroImage\Controller $controller
 * @var Concrete\Core\Form\Service\Form $form
 * @var int $bID
 *
 * @var string|null $title
 * @var string|null $body
 * @var string|null $buttonText
 * @var string|null $buttonExternalLink
 * @var int|null $buttonInternalLinkCID
 * @var int|null $buttonFileLinkID
 * @var string|null $height
 * @var string|null $buttonStyle
 * @var string|null $buttonColor
 * @var string|null $buttonSize
 *
 * @var Concrete\Core\Entity\File\File|null $image
 * @var Concrete\Core\Entity\File\File|null $image2
 * @var HtmlObject\Link|null $button
 */
if ($image === null) {
    return;
}
if ($image2 === null) {
    return;
}
?>
<div data-transparency="element" class="ccm-block-hero-image pc" <?php if ($height) { ?>style="min-height: <?=$height?>vh"<?php } ?>>
    <div class="ccm-block-hero-image-cover" <?php if ($height) { ?>style="min-height: <?=$height?>vh"<?php } ?>></div>
    <div style="background-image: url(<?= h("\"{$image->getURL()}\"") ?>); <?php if ($height) { ?>min-height: <?=$height?>vh<?php } ?>" class="ccm-block-hero-image-image"></div>
    <div class="ccm-block-hero-image-text" <?php if ($height) { ?>style="min-height: <?=$height?>vh"<?php } ?>>
        <?php
        if ((string) $title !== '' ) {
            ?>
            <h1 style="display:none;"><?= $title ?></h1>
            <?php
         }
         if ((string) $body !== '') {
            echo $body;
         }
         if ($button !== null) {
             ?>
             <div class="mt-4"><?= $button ?></div>
             <?php
         }
         ?>
    </div>
</div>
<div data-transparency="element" class="ccm-block-hero-image sp" <?php if ($height2) { ?>style="min-height: <?=$height2?>vh"<?php } ?>>
    <div class="ccm-block-hero-image-cover" <?php if ($height2) { ?>style="min-height: <?=$height2?>vh"<?php } ?>></div>
    <div style="background-image: url(<?= h("\"{$image2->getURL()}\"") ?>); <?php if ($height2) { ?>min-height: <?=$height2?>vh<?php } ?>" class="ccm-block-hero-image-image"></div>
    <div class="ccm-block-hero-image-text" <?php if ($height2) { ?>style="min-height: <?=$height2?>vh"<?php } ?>>
        <?php
        if ((string) $title !== '' ) {
            ?>
            <h1 style="display:none;"><?= $title ?></h1>
            <?php
         }
         if ((string) $body !== '') {
            echo $body;
         }
         if ($button !== null) {
             ?>
             <div class="mt-4 os-upper-70"><?= $button ?></div>
             <?php
         }
         ?>
    </div>
</div>
