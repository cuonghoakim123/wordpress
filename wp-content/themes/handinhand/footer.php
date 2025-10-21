    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" onerror="this.style.display='none'">
                <?php endif; ?>
            </div>
            <p class="footer-text">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
            </p>
        </div>
    </footer>

    <!-- Load main JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js?v=<?php echo filemtime(get_template_directory() . '/assets/js/main.js'); ?>"></script>
    
    <?php wp_footer(); ?>
</body>
</html>
