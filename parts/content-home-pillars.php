<?php
$pillars = new WP_Query( array(
    'post_type'      => 'pillar',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
) );
?>

<section class="home-pillars py-5">
    <div class="container">
        <div class="row text-center">

            <?php if ( $pillars->have_posts() ) : while ( $pillars->have_posts() ) : $pillars->the_post(); ?>

                <div class="col-md-4 mb-4">
                    <div class="pillar-item h-100 d-flex flex-column justify-content-center align-items-center text-center p-4 border rounded-3">

                        <div class="pillar-icon mb-3">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                            <?php else : ?>
                                <!-- fallback SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2" />
                                    <path fill-rule="evenodd" d="M12 3v10h-1V3z" />
                                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1z" />
                                    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5" />
                                </svg>
                            <?php endif; ?>
                        </div>

                        <h5 class="fw-bold"><?php the_title(); ?></h5>
                        <p class="text-muted small mb-0"><?php the_excerpt(); ?></p>

                    </div>
                </div>

            <?php endwhile; wp_reset_postdata(); else : ?>

                <!-- Fallback: conteúdo estático original caso não haja 'pillars' -->
                <div class="col-md-4 mb-4">
                    <div class="pillar-item h-100 d-flex flex-column justify-content-center align-items-center text-center p-4 border rounded-3">

                        <div class="pillar-icon mb-3">
                            <!-- SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                                <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2" />
                                <path fill-rule="evenodd" d="M12 3v10h-1V3z" />
                                <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1z" />
                                <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5" />
                            </svg>
                        </div>
                        <h5 class="fw-bold">Improvisação</h5>
                        <p class="text-muted small mb-0">Pentatônicas, frases e linguagem musical.</p>

                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="pillar-item h-100 d-flex flex-column justify-content-center align-items-center text-center p-4 border rounded-3">
                        <div class="pillar-icon mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                                <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2" />
                                <path fill-rule="evenodd" d="M12 3v10h-1V3z" />
                                <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1z" />
                                <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5" />
                            </svg>
                        </div>
                        <h5 class="fw-bold">Harmonia</h5>
                        <p class="text-muted small">Formação, progressões e campo harmônico.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="pillar-item h-100 d-flex flex-column justify-content-center align-items-center text-center p-4 border rounded-3">
                        <div class="pillar-icon mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                                <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2" />
                                <path fill-rule="evenodd" d="M12 3v10h-1V3z" />
                                <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1z" />
                                <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5" />
                            </svg>
                        </div>
                        <h5 class="fw-bold">Improvisação</h5>
                        <p class="text-muted small">Pentatônicas, frases e linguagem musical.</p>
                    </div>
                </div>

            <?php endif; ?>
        </div>
    </div>
</section>
