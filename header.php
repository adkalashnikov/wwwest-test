<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>
    <div class="wrapper">
        <div class="content">
            <header class="page-header js-h-sticky">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light" >
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">MoGo</a>

                        <button class="navbar-toggler" type="button"
                                data-toggle="collapse"
                                data-target="#h-navbar"
                                aria-controls="h-navbar"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="h-navbar">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-h',
                                    'menu_class' => 'page-header-nav nav navbar-nav',
                                    'container' => false )
                            ); ?>

                            <ul class="nav navbar-nav page-header-nav-2">
                                <li>
                                    <a href="#"><?php get_template_part( 'include/svg/ic-cart' ); ?></a>
                                </li>

                                <li>
                                    <a href="#" data-toggle="modal" data-target="#search-modal">
                                        <?php get_template_part( 'include/svg/ic-search' ); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
