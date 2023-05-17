<?php
$status = true;
try {
    if (isset($_POST['send'])) {   
        if (empty($_POST['content'])) {
            throw new \Exception('Missing required fields');
        }

        if (!$DUMBDOG->captcha->validate()) {
            throw new \Exception('Invalid captcha');
        }

        $status = $DUMBDOG->addComment([
            'content' => $_POST['content']
        ]);
        if ($status) {
            header("location: /gravy-poured");
        } else {
            $status = 'Failed to pour that gravy';
        }
    }
} catch (\Exception $err) {
    $status = $err->getMessage();
}


$background = "background-pour";
require_once("./website/header.php");
?>
<body id="<?= $background; ?>">
    <main>
        <?php
        if (is_string($status)) {
            ?>
            <div class="error">
                <h5>I'm but something went wrong...</h5>
                <p>
                    <?= $status; ?>
                </p>
            </div>
            <p>&nbsp;</p>
            <?php
        }
        ?>
        <h1><?= $DUMBDOG->site->name; ?></h1>
        <div id="gravy">
            <div>
                <form method="post">
                    <div class="form-input">
                        <textarea name="content" rows="5" placeholder="enter your gravy moment here"></textarea>
                    </div>
                    <div class="form-input">
                        <?= $DUMBDOG->captcha->draw(); ?>
                    </div>
                    <div class="form-input">
                        <button type="submit" name="send">send it</button>
                    </div>
                </form>
            </div>
            <img class="img" src="/website/assets/<?= $background; ?>.jpg?t=1">
        </div>
<?php
require_once("./website/footer.php");
?>
