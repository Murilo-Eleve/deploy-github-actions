<?php
function meu_tema_scripts() {
    // Carregar o CSS principal do tema
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());

    // Carregar scripts adicionais, se necessário
    // wp_enqueue_script('meu-tema-script', get_template_directory_uri() . '/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');


// No arquivo functions.php
function meu_tema_menus() {
    register_nav_menu('primary', 'Menu Principal');
}
add_action('after_setup_theme', 'meu_tema_menus');



?>
