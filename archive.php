<!-- Adds header.php content here -->
<?php get_header();?>

<main class="site-main flex-shrink-0" role="main">
    <!-- Title --->
    <div class="container entry-header archive">
        <?php if ( is_tag() ) { ?>
            <h1 class="entry-title"><span class="hashtag">#</span><?php echo single_cat_title(); ?></h1>
        <?php } elseif ( is_category() ) { ?>
            <h1 class="entry-title"><?php echo single_cat_title(); ?></h1>
        <?php } else { ?>
            <h1 class="entry-title"><?php echo the_archive_title();?></h1>
        <?php } ?>
        <div class="taxonomy-description text-muted"><?php echo the_archive_description(); ?></div>
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