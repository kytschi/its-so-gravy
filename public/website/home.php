<?php
$background = "background-home";
require_once("./website/header.php");
if (!empty($_GET['gravy'])) {
    $comment = $DUMBDOG->comments([
        'where' => [
            'query' => 'id=:id',
            'data' => [
                'id' => $_GET['gravy']
            ]
        ]
    ]);
}
if (empty($comment)) {
    $comment = $DUMBDOG->comments([
        'order' => 'ORDER BY RAND() LIMIT 1'
    ]);
}
if ($comment) {
    $comment = reset($comment);
}
?>
<body id="<?= $background; ?>">
    <main>
        <?php
        if (!empty($_GET['gravy'])) {
            ?>
            <p>
                <a href="/" class="button">clear the gravy</a>
            </p>
            <?php
        }
        ?>
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