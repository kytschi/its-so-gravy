<?php
$background = "background-page";
require_once("./website/header.php");
?>
<body id="<?= $background; ?>">
    <main>
        <p>
            <a href="/" class="button">clear the gravy</a>
        </p>
        <h1><?= $DUMBDOG->page->name; ?></h1>
        <div id="gravy">
            <div>
                <?= $DUMBDOG->page->content; ?>
                <div id="comment"></div>
            </div>
            <img class="img" src="/website/assets/<?= $background; ?>.jpg?t=1">
        </div>
<?php
require_once("./website/footer.php");
?>