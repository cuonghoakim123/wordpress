<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" as="script">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- Error handling for console -->
    <script>
    // Early error suppression for missing images
    window.addEventListener('error', function(e) {
        if (e.target.tagName === 'IMG') {
            e.preventDefault();
            return false;
        }
    }, true);
    
    // Console error filtering
    const originalError = console.error;
    console.error = function(...args) {
        const message = args.join(' ');
        if (message.includes('404') && (message.includes('.jpg') || message.includes('.png'))) {
            return; // Suppress 404 image errors
        }
        originalError.apply(console, args);
    };
    </script>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        <div class="site-logo">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg" alt="<?php bloginfo('name'); ?>" onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-logo.svg'">
                </a>
            <?php endif; ?>
        </div>
        
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => 'handinhand_default_menu',
            ));
            ?>
        </nav>
    </div>
</header>

<?php
// Default menu if no menu is set
function handinhand_default_menu() {
    echo '<ul>';
    echo '<li><a href="' . home_url('/') . '" class="active">TRANG CHỦ</a></li>';
    echo '<li><a href="' . home_url('/gioi-thieu') . '">GIỚI THIỆU</a></li>';
    echo '<li><a href="' . home_url('/chuyen-gia') . '">CHUYÊN GIA</a></li>';
    echo '<li><a href="' . home_url('/tin-tuc') . '">TIN TỨC</a></li>';
    echo '<li><a href="' . home_url('/tai-lieu') . '">TÀI LIỆU</a></li>';
    echo '<li><a href="' . home_url('/lien-he') . '">LIÊN HỆ</a></li>';
    echo '</ul>';
}
