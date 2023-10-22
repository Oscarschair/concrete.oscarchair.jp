<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<script>
    console.log('前Console: <?=$link.get_parent_class()?>' );
</script>

<?php
$view = new \Concrete\Core\View\View();
$view->setViewTheme('atomikos');
?>

<div class="ccm-summary-template-blog-image-left mb-3 mb-md-0 blog-box">
    <div class="row">
        <div class="col-md-6">
            <a href="<?=$link?>"><img class="img-fluid mb-md-0 mb-3" src="<?=$thumbnail->getThumbnailURL('blog_entry_thumbnail')?>"></a>
        </div>
        <div class="col-md-6">
            <h4 class=""><a href="<?=$link?>"><?=$title?></a></h4>
            <?php
            $view->inc('elements/byline.php', ['author' => $author, 'date' => $date]);
            ?>
            <?php if ($description) { ?>
                <p><?=$description?></p>
            <?php } ?>
        </div>
    </div>
</div>
