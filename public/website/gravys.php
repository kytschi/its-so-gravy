<?php
$comments = $DUMBDOG->comments();

require_once("./website/header.php");
?>
<body id="background-gravys">
    <main>
        <h1><?= $DUMBDOG->page->name; ?></h1>
        <div id="tiles">
            <?php
            foreach ($comments as $comment) {
                ?>
                <div class='tile'>
                    <p>
                        <?= $comment->content; ?>
                    </p>
                    <a href="/?gravy=<?= $comment->id; ?>" class="button">gravy me</a>
                </div>
                <?php
            }
            ?>
        </div>
<?php
require_once("./website/footer.php");
?>