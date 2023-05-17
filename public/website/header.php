<!DOCTYPE html>
<html lang='en'>
    <head>
        <title><?= $DUMBDOG->site->name; ?></title>
        <link rel="icon" type="image/png" sizes="64x64" href="/assets/dumbdog.png">
        <link rel="stylesheet" type="text/css" href="<?= $DUMBDOG->site->theme . '?t=' . time(); ?>">
        <meta name="description" content="<?= $DUMBDOG->page->meta_description ? $DUMBDOG->page->meta_description : $DUMBDOG->site->meta_description; ?>">
        <meta name="keywords" content="<?= $DUMBDOG->page->meta_keywords ? $DUMBDOG->page->meta_keywords : $DUMBDOG->site->meta_keywords; ?>">
        <meta name="author" content="<?= $DUMBDOG->page->meta_author ? $DUMBDOG->page->meta_author : $DUMBDOG->site->meta_author; ?>">
    </head>