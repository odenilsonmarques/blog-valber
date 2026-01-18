<?php
/* Template Name: Categorias */
get_header();
?>

<main class="site-content">
    <div class="container py-5">

        <!-- Esse header pode ser usado aqui. O HTML5 permite múltiplos <header>, desde que cada um tenha um escopo semântico claro. -->
        <header class="categories-hero text-center py-5 mb-5">
            <h1 class="fw-bold mb-3">Categorias</h1>
            <p class="categories-subtitle">
                Explore os conteúdos organizados por tema
                e estude de forma mais direcionada.
            </p>
        </header>

        <!-- LISTAGEM DE CATEGORIAS -->
        <div class="row g-4">

            <?php
            $categories = get_categories([
                'hide_empty' => true
            ]);

            foreach ($categories as $category) :
            ?>
                <div class="col-md-4 col-sm-6">
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                        class="text-decoration-none text-dark d-block h-100">

                        <div class="category-card h-100 p-4 border rounded-3 text-center">
                            <h3 class="h5 fw-bold mb-2">
                                <?php echo esc_html($category->name); ?>
                            </h3>

                            <p class="text-muted small mb-0">
                                <?php echo intval($category->count); ?>
                                <?php echo $category->count === 1 ? 'conteúdo' : 'conteúdos'; ?>
                            </p>

                            <?php if (!empty($category->description)) : ?>
                                <p class="text-muted small mb-0">
                                    <?php echo esc_html($category->description); ?>
                                </p>
                            <?php endif; ?>
                        </div>

                    </a>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</main>

<?php get_footer(); ?>

