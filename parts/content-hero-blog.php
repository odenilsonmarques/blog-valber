<?php get_header(); ?>

<main class="site-content">

    <!-- HERO DO BLOG -->
    <section class="hero-blog text-center py-5">
        <div class="container">
            
            <h1 class="fw-bold mb-3"><?php echo get_theme_mod('hero_blog_title', 'Blog de Música'); ?></h1>
            <p class="text-muted fs-5">
                <?php echo get_theme_mod('hero_blog_subtitle', 'Dicas, tutoriais e insights sobre música.'); ?>
            </p>

            <!-- Busca -->
            <div class="mt-4">
                <?php get_search_form(); ?>
            </div>
        </div>
    </section>
</main>