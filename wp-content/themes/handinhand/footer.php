    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <div class="text-logo" style="color: #4a9fa5; font-size: 1.5rem; font-weight: 700;">
                        <?php bloginfo('name'); ?>
                    </div>
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
