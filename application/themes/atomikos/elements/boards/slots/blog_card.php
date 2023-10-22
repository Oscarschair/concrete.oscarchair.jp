<?php 

defined('C5_EXECUTE') or die("Access Denied.");

/**
 * @var $slot \Concrete\Core\Board\Instance\Slot\Content\ContentSlotRenderer
 */

$slot->display(1);

echo '<script>';
echo 'console.log("CARD")';
echo '</script>';