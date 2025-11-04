<?php
/**
 * Create News Page
 * This script will create a WordPress page with slug 'tin-tuc'
 */

// Include WordPress
require_once('wp-config.php');
require_once(ABSPATH . 'wp-includes/wp-db.php');
require_once(ABSPATH . 'wp-includes/pluggable.php');
require_once(ABSPATH . 'wp-admin/includes/post.php');

// Bootstrap WordPress
if (!function_exists('wp')) {
    require_once(ABSPATH . 'wp-settings.php');
}

// Check if page exists
$existing_page = get_page_by_path('tin-tuc');

if (!$existing_page) {
    // Create new page
    $page_data = array(
        'post_title'     => 'Tin Tức',
        'post_content'   => 'Trang tin tức của Hand in Hand Foundation',
        'post_status'    => 'publish',
        'post_type'      => 'page',
        'post_name'      => 'tin-tuc',
        'page_template'  => 'page-tin-tuc.php'
    );
    
    $page_id = wp_insert_post($page_data);
    
    if ($page_id && !is_wp_error($page_id)) {
        // Set page template
        update_post_meta($page_id, '_wp_page_template', 'page-tin-tuc.php');
        
        echo "✅ Trang 'Tin Tức' đã được tạo thành công!<br>";
        echo "📄 ID: $page_id<br>";
        echo "🔗 URL: <a href='" . get_permalink($page_id) . "'>" . get_permalink($page_id) . "</a><br>";
        echo "📝 Template: page-tin-tuc.php<br><br>";
        
        echo "🎯 <strong>Bây giờ bạn có thể truy cập:</strong><br>";
        echo "- <a href='" . home_url('/tin-tuc/') . "' target='_blank'>" . home_url('/tin-tuc/') . "</a><br>";
    } else {
        echo "❌ Lỗi tạo trang: " . (is_wp_error($page_id) ? $page_id->get_error_message() : 'Unknown error') . "<br>";
    }
} else {
    // Update existing page to use correct template
    update_post_meta($existing_page->ID, '_wp_page_template', 'page-tin-tuc.php');
    
    echo "ℹ️ Trang 'Tin Tức' đã tồn tại<br>";
    echo "📄 ID: " . $existing_page->ID . "<br>";
    echo "🔗 URL: <a href='" . get_permalink($existing_page->ID) . "'>" . get_permalink($existing_page->ID) . "</a><br>";
    echo "📝 Template đã được cập nhật: page-tin-tuc.php<br><br>";
    
    echo "🎯 <strong>Bây giờ bạn có thể truy cập:</strong><br>";
    echo "- <a href='" . home_url('/tin-tuc/') . "' target='_blank'>" . home_url('/tin-tuc/') . "</a><br>";
}

// Also check tai-lieu page
$tai_lieu_page = get_page_by_path('tai-lieu');

if (!$tai_lieu_page) {
    // Create tai-lieu page
    $page_data = array(
        'post_title'     => 'Tài Liệu',
        'post_content'   => 'Trang tài liệu của Hand in Hand Foundation',
        'post_status'    => 'publish',
        'post_type'      => 'page',
        'post_name'      => 'tai-lieu',
        'page_template'  => 'page-tai-lieu.php'
    );
    
    $page_id = wp_insert_post($page_data);
    
    if ($page_id && !is_wp_error($page_id)) {
        update_post_meta($page_id, '_wp_page_template', 'page-tai-lieu.php');
        echo "<br>✅ Trang 'Tài Liệu' đã được tạo thành công!<br>";
        echo "🔗 URL: <a href='" . home_url('/tai-lieu/') . "' target='_blank'>" . home_url('/tai-lieu/') . "</a><br>";
    }
} else {
    update_post_meta($tai_lieu_page->ID, '_wp_page_template', 'page-tai-lieu.php');
    echo "<br>ℹ️ Trang 'Tài Liệu' đã tồn tại và template đã được cập nhật<br>";
    echo "🔗 URL: <a href='" . home_url('/tai-lieu/') . "' target='_blank'>" . home_url('/tai-lieu/') . "</a><br>";
}

echo "<br><hr><br>";
echo "🚀 <strong>Hoàn thành! Bây giờ bạn có thể:</strong><br>";
echo "1. Truy cập <a href='" . home_url('/tin-tuc/') . "' target='_blank'>" . home_url('/tin-tuc/') . "</a><br>";
echo "2. Truy cập <a href='" . home_url('/tai-lieu/') . "' target='_blank'>" . home_url('/tai-lieu/') . "</a><br>";
echo "3. Xóa file này (create-pages.php) sau khi xong<br>";
?>