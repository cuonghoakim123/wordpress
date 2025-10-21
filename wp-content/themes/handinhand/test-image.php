<?php
/**
 * Test Image Display - Kiểm tra hình ảnh Chris Simpson
 */

// Đường dẫn đến thư mục ảnh
$images_dir = __DIR__ . '/assets/images/';
$images_url = get_template_directory_uri() . '/assets/images/';

echo "<h2>Kiểm tra hình ảnh Chris Simpson</h2>";

// Danh sách các file ảnh cần kiểm tra
$test_images = [
    'chris-simpson.jpg' => 'Ảnh chính của Thầy Chris',
    '19.jpg' => 'Ảnh dự phòng 1',
    '18.jpg' => 'Ảnh dự phòng 2', 
    '17.jpg' => 'Ảnh dự phòng 3'
];

echo "<div style='display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; padding: 20px;'>";

foreach ($test_images as $filename => $description) {
    $file_path = $images_dir . $filename;
    $file_url = $images_url . $filename;
    
    echo "<div style='border: 1px solid #ddd; padding: 15px; border-radius: 8px; text-align: center;'>";
    echo "<h4>{$description}</h4>";
    echo "<p><strong>File:</strong> {$filename}</p>";
    
    if (file_exists($file_path)) {
        $file_size = round(filesize($file_path) / 1024, 1);
        echo "<p style='color: green;'>✅ File tồn tại ({$file_size} KB)</p>";
        echo "<img src='{$file_url}' style='width: 150px; height: 150px; object-fit: cover; border-radius: 50%; border: 3px solid #ec4899;' alt='{$description}'>";
    } else {
        echo "<p style='color: red;'>❌ File không tồn tại</p>";
        echo "<div style='width: 150px; height: 150px; background: #ec4899; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 2em;'>⭐</div>";
    }
    
    echo "</div>";
}

echo "</div>";

echo "<h3>Hướng dẫn thay đổi ảnh:</h3>";
echo "<ol>";
echo "<li>Chuẩn bị ảnh mới (định dạng JPG, kích thước tối thiểu 300x300px)</li>";
echo "<li>Đặt tên file: <code>chris-simpson.jpg</code></li>";
echo "<li>Upload vào thư mục: <code>/wp-content/themes/handinhand/assets/images/</code></li>";
echo "<li>Thay thế file cũ và refresh trang</li>";
echo "</ol>";

echo "<p><strong>Đường dẫn thư mục:</strong> <code>{$images_dir}</code></p>";
?>