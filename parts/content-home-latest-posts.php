<section class="home-latest-posts py-5">
    <div class="container">

        <!-- TÍTULO -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Últimos Posts do Blog</h4>
            <a href="<?php echo esc_url(home_url('/blog')); ?>"
                class="text-decoration-none small">
                Ver todos <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
            </a>
        </div>

        <!-- GRID -->
        <div class="row g-4">

            <?php
            $latest_posts = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 4
            ]);

            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post();
            ?>
                    <div class="col-md-3 col-sm-6">
                        <article class="card h-100 border-0 shadow-sm">

                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'blog-thumb')); ?>"
                                    class="card-img-top"
                                    alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/image/placeholder-card-post.png'); ?>"
                                    class="card-img-top"
                                    alt="Imagem padrão - <?php the_title_attribute(); ?>">
                            <?php endif; ?>

                            <div class="card-body">
                                <h6 class="card-title mb-2">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                        <?php the_title(); ?>
                                    </a>
                                </h6>

                                <a href="<?php the_permalink(); ?>" class="small text-decoration-none">
                                    Ler <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>

                        </article>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>
    </div>
</section>