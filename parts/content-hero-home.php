<?php get_header(); ?>

<main class="site-content">

    <!-- HERO DA HOME -->
    <section class="hero-home py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- TEXTO -->
                <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                    <h1 class="fw-bold mb-3">
                        A música explicada de forma simples
                    </h1>

                    <p class="text-muted fs-5 mb-4">
                        Escalas, harmonia, improvisação e muito mais.
                    </p>

                    <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                        <a href="#"
                            class="btn custom-btn-hero-home px-4">
                            Comece Aqui
                        </a>

                        <a href="<?php echo esc_url(home_url('/blog')); ?>"
                            class="btn btn-outline-secondary bg-secondary text-white px-4">
                            Ler o Blog
                        </a>
                    </div>
                </div>

                <!-- IMAGEM / ILUSTRAÇÃO -->
                <div class="col-md-6 text-center">
                    <div class="hero-home-image">
                        <!-- imagem ilustrativa / futura -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/guitar.webp"
                            alt="Ilustração de uma pessoa tocando guitarra"
                            class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

