<?php
defined('C5_EXECUTE') or die('Access Denied.');
if ($image === null) {
    return;
}
if ($image2 === null) {
    return;
}
?>
<div class="container">
    <div class="hero-split" style="<?php if ($height) { ?>min-height: <?= $height ?>vh;<?php } ?>">
        <div class="split left"
            style="background-image: url(<?= h("\"{$image->getURL()}\"") ?>); <?php if ($height) { ?>min-height: <?= $height ?>vh<?php } ?>;background-repeat: no-repeat;background-size: cover;background-position: center;">
            <?php
            if ((string) $title !== '') {
                ?>
                <h1 id="left-font">
                    <?= $title ?>
                </h1>
                <?php
            }
            if ((string) $body !== '') {
                ?>
                <div class="split-desc">
                    <?= $body ?>
                </div>
                <?php
            }
            if ($buttonText !== null) {
                ?>
                <a href="<?= $buttonLink ?>" id="left-font " class="button left-btn"> <?= $buttonText ?> </a>
                <?php
            }
            ?>
        </div>
        <div class="split right"
            style="background-image: url(<?= h("\"{$image2->getURL()}\"") ?>); <?php if ($height) { ?>min-height: <?= $height ?>vh<?php } ?>;background-repeat: no-repeat;background-size: cover;background-position: center;">
            <?php
            if ((string) $title2 !== '') {
                ?>
                <h1 id="right-font">
                    <?= $title2 ?>
                </h1>
                <?php
            }
            if ((string) $body2 !== '') {
                ?>
                <div class="split-desc">
                    <?= $body2 ?>
                </div>
                <?php
            }
            if ($buttonText2 !== null) {
                ?>
                <a href="<?= $buttonLink2 ?>" id="right-font " class="button right-btn"> <?= $buttonText2 ?> </a>
                <?php
            }
            ?>
        </div>
    </div>
</div>