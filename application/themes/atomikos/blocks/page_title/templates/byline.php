<?php  defined('C5_EXECUTE') or die("Access Denied.");
$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
$page = Page::getCurrentPage();
$date = $dh->formatDate($page->getCollectionDatePublic(), true);
$user = UserInfo::getByID($page->getCollectionUserID());
$avatarService = app(\Concrete\Core\User\Avatar\AvatarService::class);
$site = app('site')->getSite();
$config = $site->getConfigRepository();
$publicProfilesEnabled = $config->get('user.profiles_enabled');


$check = $page->getAttribute('thumbnail');
// "small" サイズの画像サムネイルを取得
if ($check) {
    $src = $check->getThumbnailURL('small');

    $thumbnail = \HtmlObject\Image::create($src);
    $thumbnail->alt($title); // オプション: Alt テキストを設定する
    //$thumbnail->title('Title テキスト'); // オプション: Title テキストを設定する
    $thumbnail->addClass('blog-entry-hero-img'); // オプション: Class 名を加える
}


//    echo \HtmlObject\Image::create($src)->alt($title);

?>

<div class="ccm-block-page-title-byline">
    <h1 class="page-title"><?=h($title)?></h1>

    <div class="blog-author-byline">

        <?php if ($user) { ?>

            <?php
            $avatar = $avatarService->getAvatar($user);
            if ($avatar) {
            ?>
                <div class="blog-author-byline-avatar"><?=$avatar->output()?></div>
            <?php } ?>

            <div class="blog-author-byline-author">
                <?php if ($publicProfilesEnabled) { ?>
                    <a href="<?=$user->getUserPublicProfileURL()?>"><?php echo $user->getUserDisplayName(); ?></a>
                <?php } else { ?>
                    <?php echo $user->getUserDisplayName(); ?>
                <?php } ?>
            </div>

        <?php } ?>

        <div class="blog-author-byline-date">
            <?php echo $page->getCollectionDatePublicObject()->format('F j, Y • g:iA'); ?>
        </div>

    </div>
</div>
<div class="blog-entry-hero">
<?php echo $thumbnail;?>
</div>

