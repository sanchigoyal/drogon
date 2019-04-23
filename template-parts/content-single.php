<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-title text-center">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="post-meta-data text-center text-muted">
        <?php
			$author_id = get_post_field( 'post_author', get_the_ID() );
        ?>
        <!-- Avatar -->
        <?php echo get_avatar( $author_id, 30, '', '', array(
            'class' => 'rounded-circle'
        )); ?>
        <!-- Author Name -->
        <a href="<?php echo get_author_posts_url( $author_id ); ?>">
            <?php echo get_the_author_meta( 'display_name', $author_id ); ?>
        </a> &nbsp; • &nbsp;
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
    </div>
    <div class="post-fimage">
        <?php if ( has_post_thumbnail() ) { ?>
            <img
                src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>"
                class="img-fluid"
                alt="..."
            />
        <?php } ?>
    </div>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
    <?php
        $tags_list = get_the_tag_list('',' ');
        if ( $tags_list ) { ?>
            <div class="post-tag-links">
                <?php echo $tags_list; ?>
            </div>
        <?php }
    ?>
</article>