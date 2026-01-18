<?php

function blog_valber_assets()
{
    //Bootstrap CSS
    wp_enqueue_style('boot-min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3');

    //Main Style
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.0.0', 'all');

    //Bootstrap JS
    wp_enqueue_script('boot-min-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.3', true);

    //Script Modal Video
    wp_enqueue_script('script-modal-js', get_template_directory_uri() . '/assets/js/script-modal.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'blog_valber_assets');



function blogvalber_config_theme_setup()
{
    // Registro de menus
    register_nav_menus(array(
        /**
         * O segundo parâmetro é o text domain.
         * Na prática, ele funciona como o identificador de tradução do tema.
         *
         * Exemplo:
         * Se houver a necessidade de traduzir o texto "Menu Principal",
         * o WordPress verifica a quem esse texto pertence.
         * Ele identifica o text domain (valber-brito) e, em seguida,
         * procura o arquivo de tradução correspondente ao tema.
         */
        'main-menu'   => __('Menu Principal', 'valber-brito'),
        'footer-menu' => __('Menu Rodapé', 'valber-brito'),
    ));

    // Suporte a logo personalizada
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');

    // Tamanho personalizado para thumbnails do blog, para utiliza-lo chamar o nome do primeiro parametro('blog-thumb') onde desejar
    add_image_size('blog-thumb', 400, 250, true);
}

add_action('after_setup_theme', 'blogvalber_config_theme_setup');
