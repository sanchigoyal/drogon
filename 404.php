<!-- Adds header.php content here -->
<?php get_header();?>

<main class="site-main flex-shrink-0" role="main">
    <div class="container entry-content text-center">
        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/libraries/images/404.jpg">
        <h2><?php esc_html_e( 'Oops! That page can’t be found.', 'drogon' ); ?></h2>
        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'drogon' ); ?></p>
        <?php get_search_form(); ?>
    </div>
</main>

<!-- Adds footer.php content here -->
<?php get_footer();?>