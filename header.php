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
                    <nav class="navbar navbar-expand-lg" role="navigation">
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">MoGo</a>

                        <div>
                            <div class="collapse navbar-collapse" id="h-navbar">
                                <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-h',
                                        'menu_class' => 'page-header-nav nav navbar-nav',
                                        'container' => false )
                                ); ?>
                            </div>

                            <button class="navbar-toggler" type="button"
                                    data-toggle="collapse"
                                    data-target="#h-navbar"
                                    aria-controls="h-navbar"
                                    ria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </nav>
                </div>
            </header>
