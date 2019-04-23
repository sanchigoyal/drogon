<div class="card card-block h-100">
    <?php if ( has_post_thumbnail() ) { ?>
        <img
            src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>"
            class="card-img-top img-fluid"
            alt="..."
        />
    <?php } ?>
    <div class="card-body">
        <h5 class="card-title">
            <strong>   
                <a href="<?php echo get_permalink();?>">
                    <?php the_title(); ?>
                </a>
            </strong>
        </h5>
        <?php the_excerpt();?>
    </div>
    <div class="card-footer">
        <small class="text-muted">
            <!-- Category -->
            <?php 
                $categories = get_the_category();
                if ( ! empty( $categories ) ) { ?>
                    <a href="<?php echo get_category_link($categories[0]->term_id);?>"><?php echo $categories[0]->name;?></a> &nbsp; • &nbsp;
            <?php }?>
            <!-- Posted Date -->
            <?php echo get_the_date();?> &nbsp; • &nbsp; 
            <!-- Comments -->
            <?php
                $comment_count = get_comments_number();
                if ( comments_open() ) {
                    if ( $comment_count == 0 ) {?>
                        No Comments
                    <?php }
                    else{ ?>
                        <a href="<?php echo get_comments_link(); ?>">
                            <i class="fas fa-comment-dots"></i><?php echo $comment_count ?>
                        </a>
                    <?php }
                } else {?>
                    No Comments
                <?php }
            ?>
        </small>
    </div>
</div>