<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>


    <header>
        <div class="header-content">

            <?php if ($logo = get_field('logo', 'option')) { ?>
                <a href="#"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></a>
            <?php } ?>
            <ul>
                <li><a class="btn" href="#">English</a></li>
                <li><a class="btn" href="#">Music</a></li>
                <li><a class="btn primary-contained-button" href="#">Contact</a></li>
            </ul>
        </div>
    </header>