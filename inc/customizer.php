<?php

/**
 * Customizer para a seção Hero da Home
 */

function blog_valber_customize_register($wp_customize)
{
    // ===== PAINEL HERO HOME =====
    $wp_customize->add_panel('hero_home_panel', array(
        'title'       => __('Hero da Home', 'valber-brito'),
        'description' => __('Configurações da seção Hero da página inicial', 'valber-brito'),
        'priority'    => 20,
    ));

    // ===== SEÇÃO 1: TEXTOS =====
    $wp_customize->add_section('hero_home_text', array(
        'title'       => __('Textos da Hero', 'valber-brito'),
        'panel'       => 'hero_home_panel',
        'priority'    => 10,
    ));

    // Título
    $wp_customize->add_setting('hero_home_title', array(
        'default'           => 'Bem-vindo ao ValberBrito.com',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('hero_home_title', array(
        'label'       => __('Título da Hero', 'valber-brito'),
        'section'     => 'hero_home_text',
        'type'        => 'text',
        'priority'    => 10,
    ));

    // Subtítulo
    $wp_customize->add_setting('hero_home_subtitle', array(
        'default'           => 'Escalas, harmonia, improvisação e muito mais.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('hero_home_subtitle', array(
        'label'       => __('Subtítulo da Hero', 'valber-brito'),
        'section'     => 'hero_home_text',
        'type'        => 'textarea',
        'priority'    => 20,
    ));

    // ===== SEÇÃO 2: BOTÕES =====
    $wp_customize->add_section('hero_home_buttons', array(
        'title'       => __('Botões da Hero', 'valber-brito'),
        'panel'       => 'hero_home_panel',
        'priority'    => 20,
    ));

    // Primeiro Botão - Texto
    $wp_customize->add_setting('hero_home_button1_text', array(
        'default'           => 'Comece Aqui',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_home_button1_text', array(
        'label'       => __('Texto do 1º Botão', 'valber-brito'),
        'section'     => 'hero_home_buttons',
        'type'        => 'text',
        'priority'    => 10,
    ));

    // Primeiro Botão - URL
    $wp_customize->add_setting('hero_home_button1_url', array(
        'default'           => home_url('/comece-aqui'),
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('hero_home_button1_url', array(
        'label'       => __('URL do 1º Botão', 'valber-brito'),
        'section'     => 'hero_home_buttons',
        'type'        => 'url',
        'priority'    => 20,
    ));

    // Segundo Botão - Texto
    $wp_customize->add_setting('hero_home_button2_text', array(
        'default'           => 'Ler o Blog',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_home_button2_text', array(
        'label'       => __('Texto do 2º Botão', 'valber-brito'),
        'section'     => 'hero_home_buttons',
        'type'        => 'text',
        'priority'    => 30,
    ));

    // Segundo Botão - URL
    $wp_customize->add_setting('hero_home_button2_url', array(
        'default'           => home_url('/blog'),
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('hero_home_button2_url', array(
        'label'       => __('URL do 2º Botão', 'valber-brito'),
        'section'     => 'hero_home_buttons',
        'type'        => 'url',
        'priority'    => 40,
    ));

    // ===== SEÇÃO 3: IMAGEM =====
    $wp_customize->add_section('hero_home_image', array(
        'title'       => __('Imagem da Hero', 'valber-brito'),
        'panel'       => 'hero_home_panel',
        'priority'    => 30,
    ));

    // Imagem
    $wp_customize->add_setting('hero_home_image', array(
        'default'           => get_template_directory_uri() . '/assets/image/guitar.webp',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_home_image', array(
        'label'       => __('Imagem da Hero', 'valber-brito'),
        'section'     => 'hero_home_image',
        'priority'    => 10,
    )));

    // Alt da Imagem
    $wp_customize->add_setting('hero_home_image_alt', array(
        'default'           => 'Ilustração de uma pessoa tocando guitarra',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_home_image_alt', array(
        'label'       => __('Texto alternativo da imagem', 'valber-brito'),
        'section'     => 'hero_home_image',
        'type'        => 'text',
        'priority'    => 20,
    ));
}

add_action('customize_register', 'blog_valber_customize_register');
