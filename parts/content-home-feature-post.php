<section class="home-featured-post py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <?php
            $featured_query = new WP_Query([
                'posts_per_page' => 1,
                'meta_key'       => 'featured_post',
                'meta_value'     => '1'
            ]);

            if ($featured_query->have_posts()) :
                while ($featured_query->have_posts()) : $featured_query->the_post();
            ?>

                    <!-- IMAGEM -->
                    <div class="col-md-5">
                        <?php if (has_post_thumbnail()) : ?>
                            <img
                                src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>"
                                class="img-fluid rounded-3"
                                alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                    </div>

                    <!-- CONTEÚDO -->
                    <div class="col-md-7">
                        <h3 class="fw-bold mb-3">
                            <?php the_title(); ?>
                        </h3>

                        <p class="text-muted mb-4">
                            <?php echo wp_trim_words(get_the_excerpt(), 22); ?>
                        </p>

                        <a href="<?php the_permalink(); ?>" class="btn btn-dark">
                            Ler agora
                        </a>
                    </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>
    </div>
</section>
