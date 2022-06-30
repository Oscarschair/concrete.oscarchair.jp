<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
    <?= Core::make('site')->getSite()->getAttribute('GTM_head'); ?>
    <?= Core::make('site')->getSite()->getAttribute('adsense_auto'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?=$view->getThemeStyles()?>
    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $f = File::getByID($this->fID);
        $fullPath = $f->getURL();

        echo '<script>';
        echo 'console.log('.$fullPath.')';
        echo '</script>';
    ?>
</head>
<body>
    <?= Core::make('site')->getSite()->getAttribute('GTM_body'); ?>
<div class="theme-atomik <?php echo $c->getPageWrapperClass()?>">
