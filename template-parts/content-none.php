<div class="container entry-content text-center">
    <img height="300" width="300" src="<?php echo get_template_directory_uri();?>/libraries/images/noSearch.png">
    <h2><?php esc_html_e( 'Oops! No Results Found', 'drogon' ); ?></h2>
    <?php if ( is_search() ) : ?>

        <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'drogon' ); ?></p>

	<?php else : ?>

        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'drogon' ); ?></p>

    <?php endif; ?>
    <?php get_search_form(); ?>
</div>