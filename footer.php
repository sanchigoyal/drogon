
    </div>
    <!-- Return to top icon -->
    <a href="javascript:" id="return-to-top"
      ><i class="fas fa-chevron-up"></i
    ></a>
    <!-- Footer -->
    <footer class="site-footer border-top bg-dark mt-auto">
        <div id="footer-bottom" class="container">
            <div class="footer-bottom row">
                <div class="site-info col-md-6">
                    <p>
                        <?php bloginfo('name'); ?> | Copyright © 2018-2019
                    </p>
                </div>
                <div class="social-media-menu col-md-6 float-right">
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'footer',
                        'container_id' => 'footer-menu',
                        'menu_id' => 'footer-menu', 
                        'depth' => 1,
                        'fallback_cb' => '',
                    ) ); ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- Allows wordpress plugins to inject scripts -->
    <?php wp_footer();?>
</body>
</html>