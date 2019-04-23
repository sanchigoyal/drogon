<!-- Adds header.php content here -->
<?php get_header();?>

<main class="site-main single-page flex-shrink-0" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="entry-header container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                    <li class="breadcrumb-item">
                        <?php 
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) { ?>
                                <a href="<?php echo get_category_link($categories[0]->term_id);?>"><?php echo $categories[0]->name;?></a>
                        <?php }?>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php the_title();?>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="single-page-wrapper container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <?php get_template_part( 'template-parts/content', 'single' ); ?>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    // Navigation 
					the_post_navigation( array(
						'prev_text' => '<span class="nav-title"><i class="fas fa-arrow-circle-left"></i> %title</span>',
                        'next_text' => '<span class="nav-title">%title <i class="fas fa-arrow-circle-right"></i></span>',
                        'screen_reader_text' => __( '' ),
					) );
				    ?>
                    <!-- TODO: Related Posts -->  
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; // End of the loop. ?>
</main>

<!-- Adds footer.php content here -->
<?php get_footer();?>