<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header">
        <nav class="nav-bar">
            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandPersona_Marca03.png" alt="brandpersona-marca"
                width="100px" height="auto">
            <ul class="menu">
                <li class="menu-item"><a href="">HOME</a></li>
                <li class="menu-item"><a href="">POR QUE BRAND PERSONA</a></li>
                <li class="menu-item"><a href="">O MERCADO</a></li>
                <li class="menu-item"><a href="">VANTAGENS</a></li>
                <li class="menu-item"><a href="">COMO FUNCIONA</a></li>
                <li class="menu-item"><a href="">O COMBO</a></li>
                <li class="menu-item"><a href="">CONTATO</a></li>
            </ul>
        </nav>
    </header>