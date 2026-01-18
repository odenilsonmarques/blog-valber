<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="py-1 fixed-top">
        <nav class="main-menu navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand fw-bold text-white" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo esc_html(get_bloginfo('name'));
                    }
                    ?>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <?php
                    wp_nav_menu([
                        'theme_location'  => 'main-menu',
                        'depth'           => 2,
                        'container'       => false,
                        'menu_class'      => 'navbar-nav ms-auto d-flex align-items-center gap-4',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback'
                    ]);
                    ?>

                </div>
            </div>
        </nav>
    </header>

   