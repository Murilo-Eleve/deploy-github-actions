<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); // Carrega os scripts e estilos enfileirados ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2>testsje</h2>
    <nav>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'primary', // Menu de navegação
                'container' => false,
            ) );
        ?>
    </nav>
</header>
