<?php get_header(); ?>

<main class="">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- HERO DO POST -->
            <?php
            $hero_bg = has_post_thumbnail()
                ? get_the_post_thumbnail_url(get_the_ID(), 'large')
                : '';
            ?>

            <section class="hero-blog text-center py-5"
                style="background-image: url('<?php echo esc_url($hero_bg); ?>');">

                <div class="hero-overlay"></div>

                <div class="container position-relative text-center">

                    <h1 class="fw-bold mb-2 text-white">
                        <?php the_title(); ?>
                    </h1>

                    <p class="hero-subtitle mt-2">
                        Quer se aprofundar nesse conteúdo?
                    </p>

                    <a href="https://hotmart.com/SEU_PRODUTO"
                        class="hero-link">
                        Curso completo →
                    </a>


                </div>

            </section>


            <!-- CONTEÚDO DO POST -->
            <section class="single-post py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            <!-- IMAGEM DE DESTAQUE -->



                            <!-- EXCERPT / INTRODUÇÃO -->
                            <?php if (has_excerpt()) : ?>
                                <p class="lead mb-4">
                                    <?php the_excerpt(); ?>
                                </p>
                            <?php endif; ?>

                            <!-- VÍDEO DO POST -->
                            <?php
                            $video_url = get_post_meta(get_the_ID(), 'video_url', true);
                            if ($video_url) :
                            ?>
                                <div class="video-wrapper mb-5">
                                    <iframe
                                        width="100%"
                                        height="420"
                                        src="<?php echo esc_url($video_url); ?>"
                                        frameborder="0"
                                        allow="autoplay; encrypted-media"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            <?php endif; ?>

                            <!-- CONTEÚDO PRINCIPAL -->
                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>

                            <!-- CTA HOTMART -->
                            <div class="cta-curso mt-5 p-4 rounded">
                                <h4>Quer se aprofundar nesse conteúdo?</h4>
                                <p>
                                    No curso completo você aprende aplicações práticas,
                                    exercícios guiados e improvisação em contextos reais
                                    para evoluir de forma consistente.
                                </p>

                                <a href="https://hotmart.com/SEU_PRODUTO"
                                    class="btn btn-dark"
                                    target="_blank">
                                    Acessar curso completo
                                </a>
                            </div>

                            <!-- NAVEGAÇÃO -->
                            <div class="post-navigation d-flex justify-content-between mt-5">
                                <div>
                                    <?php previous_post_link('%link', '← Post anterior'); ?>
                                </div>
                                <div>
                                    <?php next_post_link('%link', 'Próximo post →'); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <style>
                body {
                    padding-top: 2.0rem;
                    /* padrão navbar */
                }


                .post-content {
                    font-size: 1.05rem;
                    line-height: 1.8;
                }

                .post-content h2,
                .post-content h3 {
                    margin-top: 2.5rem;
                }

                .video-wrapper iframe {
                    border-radius: 12px;
                }

                .cta-curso {
                    background: #f8f9fa;
                    border-left: 4px solid #212529;
                }

                .cta-curso h4 {
                    margin-bottom: 0.5rem;
                }


                .hero-blog {
                    background-size: cover;
                    background-position: center;
                    position: relative;
                    color: #fff;

                    min-height: 260px;
                    padding: 4rem 0;
                }


                .hero-overlay {
                    position: absolute;
                    inset: 0;
                    background: rgba(0, 0, 0, 0.45);
                }

                .hero-blog .container {
                    position: relative;
                    z-index: 2;
                }


                .hero-subtitle {
                    color: rgba(255, 255, 255, 0.85);
                    font-size: 1.1rem;
                }

                .hero-link {
                    color: #fff;
                    font-weight: 500;
                    text-decoration: underline;
                    font-size: 0.95rem;
                }

                .hero-link:hover {
                    opacity: 0.8;
                }
            </style>

    <?php endwhile;
    endif; ?>

</main>
<?php get_footer(); ?>