<!-- Adds header.php content here -->
<?php get_header();?>

<main class="site-main flex-shrink-0" role="main">
    <?php 
    if ( have_posts() ) :
        get_template_part( 'template-parts/content', 'grid' );
    else : 
        get_template_part( 'template-parts/content', 'none' );
    endif; ?>
</main>

<!-- Adds footer.php content here -->
<?php get_footer();?>