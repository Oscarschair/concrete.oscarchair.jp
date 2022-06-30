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
        $c = Page::getCurrentPage();
        $fullPath = $c->getCollectionLink();
        $pos = strpos($fullPath, "/blog/");
        if ($pos !== false) {//blog配下かをチェック
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "NewsArticle",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?=$fullPath?>"
        },
        "headline": "<?=$pageTitle?>",

    }
    </script>
    <?php       
        } 
    ?>
</head>
<body>
    <?= Core::make('site')->getSite()->getAttribute('GTM_body'); ?>
<div class="theme-atomik <?php echo $c->getPageWrapperClass()?>">
