<section class="home-latest-posts py-5">
    <div class="container">

        <!-- TÍTULO -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Últimos Posts do Blog</h4>
            <a href="<?php echo esc_url(home_url('/blog')); ?>"
                class="text-decoration-none small">
                Ver todos →
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
                                <img
                                    src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'blog-thumb')); ?>"
                                    class="card-img-top"
                                    alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>

                            <div class="card-body">
                                <h6 class="card-title mb-2">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                        <?php the_title(); ?>
                                    </a>
                                </h6>

                                <a href="<?php the_permalink(); ?>" class="small">
                                    Ler →
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

