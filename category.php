<?php get_header(); ?>

<main class="site-content">

    <!-- HERO DA CATEGORIA -->
    <section class="hero-blog text-center py-5">
        <div class="container">

            <h1 class="fw-bold mb-3">
                <?php single_cat_title(); ?>
            </h1>

            <?php if (category_description()) : ?>
                <p class="text-muted fs-5">
                    <?php echo category_description(); ?>
                </p>
            <?php endif; ?>

        </div>
    </section>

    <!-- LISTAGEM DE POSTS DA CATEGORIA -->
    <section class="blog-list py-5">
        <div class="container">

            <div class="row g-4">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="col-md-3 col-sm-6">
                            <article class="card h-100 border-0 shadow-sm">

                                <?php if (has_post_thumbnail()) : ?>
                                    <img
                                        src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'blog-thumb')); ?>"
                                        class="card-img-top"
                                        alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>

                                <div class="card-body">

                                    <h2 class="h6">
                                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                </div>

                            </article>
                        </div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="text-center">
                        Nenhum post encontrado nesta categoria.
                    </p>
                <?php endif; ?>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
