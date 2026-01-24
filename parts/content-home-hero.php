<?php get_header(); ?>

<main class="site-content">

    <!-- HERO DA HOME -->
    <section class="hero-home py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- TEXTO -->
                <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                    <h1 class="fw-bold mb-3 ms-4">
                        <?php echo esc_html(get_theme_mod('hero_home_title', 'Bem-vindo ao ValberBrito.com')); ?>
                    </h1>

                    <p class="text-muted fs-5 mb-4 ms-4">
                        <?php echo esc_html(get_theme_mod('hero_home_subtitle', 'Escalas, harmonia, improvisação e muito mais.')); ?>
                    </p>

                    <div class="d-flex gap-3 justify-content-center justify-content-md-start ms-4">
                        <a href="<?php echo esc_url(get_theme_mod('hero_home_button1_url', home_url('/comece-aqui'))); ?>"
                            class="btn custom-btn-hero-home px-4">
                            <?php echo esc_html(get_theme_mod('hero_home_button1_text', 'Comece Aqui')); ?>
                        </a>

                        <a href="<?php echo esc_url(get_theme_mod('hero_home_button2_url', home_url('/blog'))); ?>"
                            class="btn btn-outline-secondary bg-secondary text-white px-4">
                            <?php echo esc_html(get_theme_mod('hero_home_button2_text', 'Ler o Blog')); ?>
                        </a>
                    </div>
                </div>

                <!-- IMAGEM / ILUSTRAÇÃO -->
                <div class="col-md-6 text-center">
                    <div class="hero-home-image">
                        <?php
                        // Obter imagem customizada ou usar padrão
                        $hero_image = get_theme_mod('hero_home_image');
                        $default_image = get_template_directory_uri() . '/assets/image/image-hero-default.webp';
                        $image_src = !empty($hero_image) ? $hero_image : $default_image;
                        $image_alt = get_theme_mod('hero_home_image_alt', 'Ilustração de uma pessoa tocando guitarra');
                        ?>
                        <img src="<?php echo esc_url($image_src); ?>"
                            alt="<?php echo esc_attr($image_alt); ?>"
                            class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

