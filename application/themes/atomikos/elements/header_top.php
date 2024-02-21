<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
    <?php
        $c = Page::getCurrentPage();
        $thumbnail = $c->getAttribute('thumbnail');
        if ($thumbnail) {
            // "small" サイズの画像サムネイルを取得
            $thumbnail_url = $thumbnail->getThumbnailURL('small');
        }
        $datePublished =$c->getCollectionDateAdded('F j, Y');
        $dateModified =$c->getCollectionDateLastModified('F j, Y');
        $title = $c->getCollectionName();
        $fullPath = $c->getCollectionLink();
        $topics = $c->getAttribute('blog_entry_topics');
        $pos = strpos($fullPath, "/blog/");
        $get_ip = $_SERVER["REMOTE_ADDR"];
    ?>
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'ip_address' : '<?=$get_ip?>'<?php
            if (isset($topics) && count($topics)) {
                foreach ($topics as $topic) {
            ?>,
            'blog_topic' : '<?=$topic->getTreeNodeDisplayName()?>'
            <?php
                }
            }
            ?>
        });
    </script>


    <?= Core::make('site')->getSite()->getAttribute('GTM_head'); ?>
    <?= Core::make('site')->getSite()->getAttribute('adsense_auto'); ?>
    <script>
        gtag('config','G-3E1MHVDB8S',{
            'custom_map':{
                'dimension1': 'test_dimension'
            },
            'test_dimension': 'test_data'
        });
    </script>
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
        "headline": "<?=$title?>",
        "image": [
            "<?=$thumbnail_url?>"
        ],
        "datePublished":"<?=$datePublished?>",
        "dateModified": "<?=$dateModified?>",
        "author": [{
          "@type": "Person",
          "name": "Oscar Chair",
          "url": "https://oscarchair.jp/"
        }]
    }
    </script>
    <?php       
        } 
    ?>
</head>
<body>
    <?= Core::make('site')->getSite()->getAttribute('GTM_body'); ?>
<div class="theme-atomik <?php echo $c->getPageWrapperClass()?>">
