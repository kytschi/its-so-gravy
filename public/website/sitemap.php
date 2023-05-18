<?php
$pages = $DUMBDOG->pages();
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
        ?>
<?php
require_once("./website/footer.php");
?>