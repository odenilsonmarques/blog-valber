<?php get_header(); ?>

<main class="site-content">

    <!-- HERO DA BUSCA -->
    <section class="hero-blog text-center py-5">
        <div class="container">

            <h1 class="fw-bold mb-3">
                Resultados da busca
            </h1>

            <p class="text-muted fs-5">
                Você buscou por:
                <strong><?php echo esc_html(get_search_query()); ?></strong>
            </p>

            <!--Chamando o Campo de busca padrao do wp-->
            <div class="mt-4">
                <?php get_search_form(); ?>
            </div>

        </div>
    </section>

    <!-- RESULTADOS -->
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

                                    <span class="text-muted small">
                                        <?php the_category(', '); ?>
                                    </span>

                                    <h2 class="h6 mt-2">
                                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                </div>

                            </article>
                        </div>

                    <?php endwhile; ?>

                <?php else : ?>

                    <div class="col-12 text-center">
                        <p class="fs-5">
                            Nenhum resultado encontrado para sua busca.
                        </p>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-button-back-to-blog mt-3">
                            Voltar para o Blog
                        </a>
                    </div>

                <?php endif; ?>

            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
