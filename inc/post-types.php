<?php

// Register CPT for Pilares
function blogvalber_register_pillars_cpt() {
    $labels = array(
        'name'               => __('Pilares', 'valber-brito'),
        'singular_name'      => __('Pilar', 'valber-brito'),
        'add_new_item'       => __('Adicionar Novo Pilar', 'valber-brito'),
        'edit_item'          => __('Editar Pilar', 'valber-brito'),
        'new_item'           => __('Novo Pilar', 'valber-brito'),
        'view_item'          => __('Ver Pilar', 'valber-brito'),
        'search_items'       => __('Buscar Pilares', 'valber-brito'),
        'not_found'          => __('Nenhum pilar encontrado', 'valber-brito'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'show_in_rest'       => true,
        'supports'           => array('title','editor','excerpt','thumbnail','page-attributes'),
        'menu_icon'          => 'dashicons-lightbulb',
    );

    register_post_type('pillar', $args);
}
add_action('init', 'blogvalber_register_pillars_cpt');
