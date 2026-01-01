<section class="blog-categories py-4">
    <div class="container text-center">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) :
        ?>
            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                class="btn btn-outline-secondary mx-1 mb-2">
                <?php echo esc_html($category->name); ?>
            </a>
        <?php endforeach; ?>
    </div>
</section>