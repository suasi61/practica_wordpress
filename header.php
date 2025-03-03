<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php wp_head(); ?>


    <title>Blog</title>
</head>
<body>
    <header>
        <?php

        wp_nav_menu(array(
            'menu' => 'primary',
            'theme_location' => 'primary',
            'container' => 'ul',
            'menu_class' => 'navbar-nav d-flex flex-row gap-3 justify-content-center align-items-center w-100',
            'link_class' => 'nav-link text-decoration-none nav-item'
        ))
        ?>
    </header>