<!DOCTYPE html>
<html class="h-100">
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="Sanchi Goyal" />
    <!-- Allows wordpress plugins to inject stylesheets -->
    <?php wp_head();?>
</head>
<body <?php body_class('d-flex flex-column h-100');?>>
    <header class="site-header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container d-flex justify-content-between">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <strong><?php bloginfo('name'); ?></strong>
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarkey"
                aria-controls="navbarsExampleDefault"
                aria-expanded="true"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarkey">
                <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class' => 'navbar-nav mr-auto',
                            'add_nav_li_class' => 'nav-item'
                        )
                    ); 
                ?>
                <?php get_search_form(); ?>
            </div>
            </div>
        </nav>
    </header>

    <div class="site-content mb-5">
    