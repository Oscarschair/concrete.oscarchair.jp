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
    <div class="container">
      <div class="split left">
        <h1 id="business-font">Your Business</h1>
        <a href="#" id="business-font " class="button business-btn"> Learn More </a>
      </div>
      <div class="split right">
        <h1 id="design-font">Your Designs</h1>
        <a href="#" class="button design-btn" id="design-font">Design More</a>
      </div>
    </div>
