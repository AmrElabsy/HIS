<!DOCTYPE html>
<html>
<head>
    <base href="/his/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php getTitle() ?></title>
    <?php
    if (!isset($_SESSION['lang']))
    {
        // Link Arabic Files
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>bootstrap.english.css">
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>bootstrap.arabic.css">
        <?php
    }
    else {
        if ($_SESSION['lang'] == 'arabic') {
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>bootstrap.english.css">
            <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>bootstrap.arabic.css">
            <?php
        } elseif ($_SESSION['lang'] == 'english') {
            // Link Files Based on SESSION
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>bootstrap.english.css">
            <?php
        }
    }
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style.css">
    <?php
    if (!isset($_SESSION['lang']))
    {
        // Link Arabic Style
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style-ar.css">
        <?php
    }
    else {
        if ($_SESSION['lang'] == 'arabic') {
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style-ar.css">
            <?php
        } elseif ($_SESSION['lang'] == 'english') {
            // Link Files Based on SESSION
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style-en.css">
            <?php
        }
    }
    ?>
</head>
<body>

