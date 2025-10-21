<?php
/**
 * Script tạo dữ liệu mẫu cho tin tức
 * Chạy script này trong WordPress admin để tạo dữ liệu mẫu
 */

// Tạo categories
$categories = array(
    'Hoạt động' => 'Các hoạt động của Hand in Hand Foundation',
    'Giáo dục đặc biệt' => 'Thông tin về giáo dục trẻ em đặc biệt',
    'Nghiên cứu' => 'Các nghiên cứu và báo cáo',
    'Sự kiện' => 'Các sự kiện và hội thảo'
);

foreach ($categories as $cat_name => $cat_desc) {
    if (!term_exists($cat_name, 'category')) {
        wp_insert_term($cat_name, 'category', array(
            'description' => $cat_desc,
            'slug' => sanitize_title($cat_name)
        ));
    }
}

// Tạo bài viết mẫu
$sample_posts = array(
    array(
        'title' => 'Cửa tiệm hạnh phúc của người tự kỷ',
        'content' => '"Cửa tiệm hạnh phúc" là tên gọi thân mật của mô hình kinh tế dành cho người tự kỷ, nơi họ được công nhận là người lao động có lương, thưởng và được ghi nhận bởi xã hội. Đây là một mô hình tiên tiến giúp người tự kỷ hòa nhập cộng đồng và phát triển kỹ năng sống.',
        'category' => 'Hoạt động',
        'excerpt' => 'Mô hình kinh tế đặc biệt giúp người tự kỷ hòa nhập cộng đồng và phát triển kỹ năng sống.',
        'featured' => true
    ),
    array(
        'title' => 'Tỷ lệ trẻ tự kỷ tăng mạnh, Bộ trưởng Y tế Mỹ phát ngôn gây tranh cãi',
        'content' => 'Tỉ lệ trẻ em mắc chứng rối loạn phổ tự kỷ (ASD) tại Mỹ tiếp tục tăng mạnh, theo báo cáo mới nhất từ Trung tâm Kiểm soát và Phòng ngừa dịch bệnh nước này (CDC). Nghiên cứu cho thấy 1 trong 36 trẻ em được chẩn đoán mắc ASD.',
        'category' => 'Nghiên cứu',
        'excerpt' => 'CDC công bố tỷ lệ trẻ tự kỷ tại Mỹ đã tăng lên 1/36 trẻ em.',
        'featured' => true
    ),
    array(
        'title' => 'Phương pháp ABA - Liệu pháp hành vi ứng dụng cho trẻ tự kỷ',
        'content' => 'Phương pháp ABA (Applied Behavior Analysis) là một trong những phương pháp được chứng minh hiệu quả nhất trong việc can thiệp cho trẻ tự kỷ. Phương pháp này tập trung vào việc phân tích và thay đổi hành vi thông qua các kỹ thuật học tập có cấu trúc.',
        'category' => 'Giáo dục đặc biệt',
        'excerpt' => 'ABA là phương pháp can thiệp hiệu quả cho trẻ tự kỷ thông qua phân tích hành vi.',
        'featured' => false
    ),
    array(
        'title' => 'Hội thảo quốc tế về giáo dục đặc biệt 2025',
        'content' => 'Hand in Hand Foundation tổ chức hội thảo quốc tế về giáo dục đặc biệt với sự tham gia của các chuyên gia hàng đầu từ Mỹ, Úc và Nhật Bản. Hội thảo diễn ra trong 3 ngày với nhiều chủ đề hấp dẫn về phương pháp giáo dục hiện đại.',
        'category' => 'Sự kiện',
        'excerpt' => 'Hội thảo quốc tế quy tụ các chuyên gia hàng đầu về giáo dục đặc biệt.',
        'featured' => true
    ),
    array(
        'title' => 'Chương trình đào tạo giáo viên giáo dục đặc biệt',
        'content' => 'Trung tâm khởi động chương trình đào tạo chuyên sâu cho giáo viên giáo dục đặc biệt. Chương trình kéo dài 6 tháng với nội dung được thiết kế theo chuẩn quốc tế, giúp giáo viên nắm vững các phương pháp can thiệp hiệu quả.',
        'category' => 'Hoạt động',
        'excerpt' => 'Chương trình đào tạo 6 tháng cho giáo viên theo chuẩn quốc tế.',
        'featured' => false
    ),
    array(
        'title' => 'Nghiên cứu mới về liệu pháp âm nhạc cho trẻ khiếm thính',
        'content' => 'Một nghiên cứu mới từ Đại học Johns Hopkins cho thấy liệu pháp âm nhạc có thể giúp cải thiện đáng kể khả năng giao tiếp và phát triển ngôn ngữ cho trẻ em khiếm thính. Nghiên cứu được thực hiện trên 200 trẻ em trong 2 năm.',
        'category' => 'Nghiên cứu',
        'excerpt' => 'Liệu pháp âm nhạc mang lại hiệu quả tích cực cho trẻ em khiếm thính.',
        'featured' => false
    ),
    array(
        'title' => 'Lễ khánh thành cơ sở mới tại Quận 7',
        'content' => 'Hand in Hand Foundation vừa khánh thành cơ sở mới tại Quận 7, TP.HCM với diện tích 1000m2, được trang bị đầy đủ thiết bị hiện đại. Cơ sở mới có thể phục vụ đồng thời 150 trẻ em với các nhu cầu đặc biệt khác nhau.',
        'category' => 'Sự kiện',
        'excerpt' => 'Cơ sở mới 1000m2 tại Quận 7 có thể phục vụ 150 trẻ em.',
        'featured' => false
    ),
    array(
        'title' => 'Phương pháp TEACCH trong giáo dục trẻ tự kỷ',
        'content' => 'TEACCH (Treatment and Education of Autistic and Communication-related handicapped Children) là phương pháp giáo dục có cấu trúc dành cho trẻ tự kỷ. Phương pháp này tập trung vào việc tạo ra môi trường học tập có tổ chức, dự đoán được.',
        'category' => 'Giáo dục đặc biệt',
        'excerpt' => 'TEACCH tạo môi trường học tập có cấu trúc cho trẻ tự kỷ.',
        'featured' => false
    )
);

foreach ($sample_posts as $post_data) {
    // Kiểm tra xem bài viết đã tồn tại chưa
    $existing_post = get_page_by_title($post_data['title'], OBJECT, 'post');
    
    if (!$existing_post) {
        $post_id = wp_insert_post(array(
            'post_title' => $post_data['title'],
            'post_content' => $post_data['content'],
            'post_excerpt' => $post_data['excerpt'],
            'post_status' => 'publish',
            'post_type' => 'post',
            'post_author' => 1
        ));
        
        if ($post_id && !is_wp_error($post_id)) {
            // Gán category
            $category = get_term_by('name', $post_data['category'], 'category');
            if ($category) {
                wp_set_post_categories($post_id, array($category->term_id));
            }
            
            // Đánh dấu bài viết nổi bật
            if ($post_data['featured']) {
                update_post_meta($post_id, 'featured_post', '1');
            }
        }
    }
}

echo "Đã tạo xong dữ liệu mẫu cho tin tức!";
?>