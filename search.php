<!-- Adds header.php content here -->
<?php get_header();?>

<main class="site-main flex-shrink-0" role="main">
    <!-- Title --->
    <div class="container entry-header archive">
        <h1 class="entry-title">
            <?php printf( esc_html__( 'Search results for: %s', 'drogon' ), '<i>' . get_search_query() . '</i>' ); ?>
        </h1>
    </div>
    
    <?php 
    if ( have_posts() ) :
        get_template_part( 'template-parts/content', 'grid' );
    else :
        get_template_part( 'template-parts/content', 'none' );
    endif; ?>
</main>

<!-- Adds footer.php content here -->
<?php get_footer();?>