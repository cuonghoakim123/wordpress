<?php
/**
 * Script to create "Tài Liệu" page programmatically
 * Run this once to create the page
 */

// Check if we're in WordPress environment
if (!function_exists('wp_insert_post')) {
    // Load WordPress
    require_once('../../../wp-load.php');
}

// Check if page already exists
$existing_page = get_page_by_path('tai-lieu');

if (!$existing_page) {
    // Create the page
    $page_data = array(
        'post_title'     => 'Tài Liệu',
        'post_content'   => 'Trang tài liệu giáo dục của Hand in Hand Foundation về rối loạn phổ tự kỷ và phát triển trẻ em.',
        'post_status'    => 'publish',
        'post_type'      => 'page',
        'post_name'      => 'tai-lieu',
        'page_template'  => 'page-tai-lieu.php'
    );
    
    $page_id = wp_insert_post($page_data);
    
    if ($page_id) {
        echo "✅ Trang 'Tài Liệu' đã được tạo thành công với ID: " . $page_id . "\n";
        echo "🔗 URL: " . get_permalink($page_id) . "\n";
        
        // Set page template
        update_post_meta($page_id, '_wp_page_template', 'page-tai-lieu.php');
        
        echo "📄 Template 'page-tai-lieu.php' đã được gán cho trang.\n";
    } else {
        echo "❌ Lỗi: Không thể tạo trang.\n";
    }
} else {
    echo "ℹ️ Trang 'Tài Liệu' đã tồn tại với ID: " . $existing_page->ID . "\n";
    echo "🔗 URL: " . get_permalink($existing_page->ID) . "\n";
    
    // Update template if needed
    $current_template = get_post_meta($existing_page->ID, '_wp_page_template', true);
    if ($current_template !== 'page-tai-lieu.php') {
        update_post_meta($existing_page->ID, '_wp_page_template', 'page-tai-lieu.php');
        echo "📄 Template đã được cập nhật thành 'page-tai-lieu.php'.\n";
    }
}

// Also create documents page if it doesn't exist
$documents_page = get_page_by_path('documents');
if (!$documents_page) {
    $documents_data = array(
        'post_title'     => 'Documents',
        'post_content'   => 'Educational documents and resources from Hand in Hand Foundation.',
        'post_status'    => 'publish',
        'post_type'      => 'page',
        'post_name'      => 'documents',
        'page_template'  => 'page-documents.php'
    );
    
    $docs_page_id = wp_insert_post($documents_data);
    
    if ($docs_page_id) {
        echo "✅ Trang 'Documents' đã được tạo thành công với ID: " . $docs_page_id . "\n";
        update_post_meta($docs_page_id, '_wp_page_template', 'page-documents.php');
    }
}

echo "\n🎉 Hoàn tất! Bạn có thể truy cập:\n";
echo "- " . home_url('/tai-lieu/') . "\n";
echo "- " . home_url('/documents/') . "\n";
?>