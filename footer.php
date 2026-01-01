<footer class="site-footer pt-5 pb-4 mt-5">
    <div class="container">

        <div class="row">

            <!-- COLUNA 1: MARCA -->
            <div class="col-md-3 mb-4">
                <h5 class="footer-title">
                    <?php bloginfo('name'); ?>
                </h5>
                <p class="small text-muted">
                    Conteúdos sobre escalas, harmonia, improvisação e teoria musical.
                </p>
            </div>

            <!-- COLUNA 2: BLOG -->
            <div class="col-md-3 mb-4">
                <h6 class="footer-title">Blog</h6>
                <ul class="list-unstyled">
                    <?php
                    $categories = get_categories(['hide_empty' => true]);
                    foreach ($categories as $category) :
                    ?>
                        <li>
                            <a href="<?php echo esc_url(get_category_link($category)); ?>">
                                <?php echo esc_html($category->name); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- COLUNA 3: APRENDER -->
            <div class="col-md-3 mb-4">
                <h6 class="footer-title">Aprender</h6>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://hotmart.com/seu-link" target="_blank" rel="noopener">
                            Curso Completo
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>">
                            Blog
                        </a>
                    </li>
                </ul>
            </div>

            <!-- COLUNA 4: CONTATO -->
            <div class="col-md-3 mb-4">
                <h6 class="footer-title">Contato</h6>
                <ul class="list-unstyled">
                    <li>
                        <a href="mailto:contato@valberbrito.com.br">
                            contato@valberbrito.com.br
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            Instagram
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            YouTube
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- LINHA FINAL -->
        <div class="footer-bottom text-center pt-3 mt-3">
            <small>
                © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
                Todos os direitos reservados.
            </small>
        </div>

    </div>

    <?php wp_footer(); ?>
</footer>

</body>

</html>