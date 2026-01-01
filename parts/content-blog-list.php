<section class="blog-list py-5">
    <div class="container">

        <!-- <h2 class="text-center mb-4">Listagem de Posts</h2> -->

        <div class="row g-4">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $blog_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'paged'          => $paged
            ]);

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
            ?>

                    <div class="col-md-4 col-sm-6">

                        <article class="card h-100 border-0 shadow-sm">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'blog-thumb')); ?>"
                                    class="card-img-top"
                                    alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>

                            <style>
                                .custom-link a {
                                    display: inline-block;
                                    background-color: #f1f3f5;
                                    /* cor de fundo */
                                    padding: 4px 10px;
                                    /* espaçamento interno */
                                    border-radius: 6px;
                                    /* cantos arredondados */
                                    font-size: 0.75rem;
                                    color: #4A240E;
                                    text-decoration: none;
                                    margin-right: 6px;
                                    /* espaço entre categorias */
                                }

                                .custom-link a:hover {
                                    background-color: #e9ecef;
                                    color: #212529;
                                }


                                button.video-trigger {
                                    background: none;
                                    padding: 0;
                                    margin-left: 5px;
                                    color: #4A240E;
                                    cursor: pointer;
                                }
                            </style>

                            <div class="card-body ">
                                <span class="text-muted small custom-link">
                                    <?php the_category(', '); ?>

                                    <?php
                                    $video_url = get_post_meta(get_the_ID(), 'video_url', true);
                                    ?>

                                    <?php if (!empty($video_url)) : ?>
                                        <button class="video-trigger border-0"
                                            data-bs-toggle="modal"
                                            data-bs-target="#videoModal" title="ver prévia"
                                            data-video="<?php echo esc_url($video_url); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z" />
                                            </svg>
                                        </button>
                                    <?php endif; ?>


                                    <div class="modal fade" id="videoModal" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <iframe id="videoFrame"
                                                        width="100%"
                                                        height="400"
                                                        src=""
                                                        frameborder="0"
                                                        allow="autoplay; encrypted-media"
                                                        allowfullscreen>
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const modal = document.getElementById('videoModal');
                                            const iframe = document.getElementById('videoFrame');

                                            modal.addEventListener('show.bs.modal', function(event) {
                                                const button = event.relatedTarget;
                                                const videoUrl = button.getAttribute('data-video');
                                                iframe.src = videoUrl + '?autoplay=1';
                                            });

                                            modal.addEventListener('hidden.bs.modal', function() {
                                                iframe.src = '';
                                            });
                                        });
                                    </script>
                                </span>

                                <h3 class="h6 mt-2">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                        <h5 class="text-muted"><?php the_title(); ?></h5>
                                    </a>
                                    <p class="text-muted small"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                    <!-- <?php echo wp_trim_words(get_the_excerpt(), 10); ?> -->
                                </h3>
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