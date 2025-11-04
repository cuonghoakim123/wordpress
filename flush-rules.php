<?php
/**
 * Flush Rewrite Rules Helper
 * Visit this file once to flush rewrite rules
 */

// Include WordPress
require_once('wp-config.php');
require_once(ABSPATH . 'wp-includes/wp-db.php');
require_once(ABSPATH . 'wp-includes/pluggable.php');
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

// Bootstrap WordPress
if (!function_exists('wp')) {
    require_once(ABSPATH . 'wp-settings.php');
}

// Add rewrite rules
add_rewrite_rule('^tin-tuc/?$', 'index.php?custom_page=tin-tuc', 'top');
add_rewrite_rule('^tai-lieu/?$', 'index.php?custom_page=tai-lieu', 'top');

// Flush rewrite rules
flush_rewrite_rules(true);

echo "Rewrite rules flushed successfully!<br>";
echo "Now you can access:<br>";
echo "- <a href='" . home_url('/tin-tuc/') . "'>" . home_url('/tin-tuc/') . "</a><br>";
echo "- <a href='" . home_url('/tai-lieu/') . "'>" . home_url('/tai-lieu/') . "</a><br>";
?>