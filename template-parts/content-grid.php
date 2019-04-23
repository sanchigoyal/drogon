<div class="container">
    <div class="row">
        <?php /* Start the Loop */ 
            while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pt-4 pb-4">        
                    <?php get_template_part( 'template-parts/content' ); ?>
                </div>	
            <?php 
            endwhile; 
        ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php
                the_posts_pagination( array(
                    'prev_text' => '<i class="fas fa-arrow-circle-left"></i>',
                    'next_text' => '<i class="fas fa-arrow-circle-right"></i>',
                ) ); 
            ?>
        </div>
    </div>
</div>

