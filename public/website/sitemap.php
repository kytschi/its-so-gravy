<?php
$pages = $DUMBDOG->pages();
$comments = $DUMBDOG->comments();
require_once("./website/header.php");
?>
<body id="background-sitemap">
    <main>
        <h1><?= $DUMBDOG->site->name; ?></h1>
        <?php
        foreach ($pages as $page) {
            if ($page->id == $DUMBDOG->page->id) {
                continue;
            }
            ?>
            <p><a href="<?= $page->url;?>" class="button"><?= strtolower($page->name); ?></a></p>
            <?php
        }
        foreach ($comments as $comment) {
            ?>
            <p><a href="/?gravy=<?= $comment->id;?>" class="button"><?= strtolower($comment->content); ?></a></p>
            <?php
        }
        ?>
<?php
require_once("./website/footer.php");
?>