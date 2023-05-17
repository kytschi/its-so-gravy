<?php
$background = "background-home";
require_once("./website/header.php");
$comment = $DUMBDOG->comments([
    'order' => 'ORDER BY RAND() LIMIT 1'
]);
if ($comment) {
    $comment = reset($comment);
}
?>
<body id="<?= $background; ?>">
    <main>
        <h1><?= $DUMBDOG->site->name; ?></h1>
        <div id="gravy">
            <div>
                <p>
                    <?= $comment->content; ?>
                </p>
                <div id="comment"></div>
            </div>
            <img class="img" src="/website/assets/<?= $background; ?>.jpg?t=1">
        </div>
<?php
require_once("./website/footer.php");
?>