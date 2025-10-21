<?php
// Tạo dữ liệu tin tức mẫu
require_once('wp-config.php');

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
        echo 'Tạo category: ' . $cat_name . PHP_EOL;
    }
}

// Tạo bài viết mẫu
$sample_posts = array(
    array(
        'title' => 'Cửa tiệm hạnh phúc của người tự kỷ',
        'content' => 'Cửa tiệm hạnh phúc là tên gọi thân mật của mô hình kinh tế dành cho người tự kỷ, nơi họ được công nhận là người lao động có lương, thưởng và được ghi nhận bởi xã hội. Đây là một mô hình tiên tiến giúp người tự kỷ hòa nhập cộng đồng và phát triển kỹ năng sống. Tại đây, những người tự kỷ không chỉ được làm việc mà còn được tôn trọng, yêu thương và có cơ hội thể hiện tài năng của mình.',
        'category' => 'Hoạt động',
        'excerpt' => 'Mô hình kinh tế đặc biệt giúp người tự kỷ hòa nhập cộng đồng và phát triển kỹ năng sống.'
    ),
    array(
        'title' => 'Tỷ lệ trẻ tự kỷ tăng mạnh tại Việt Nam',
        'content' => 'Theo thống kê mới nhất, tỷ lệ trẻ em mắc chứng rối loạn phổ tự kỷ tại Việt Nam đang có xu hướng tăng. Điều này đòi hỏi sự quan tâm và đầu tư nhiều hơn vào lĩnh vực giáo dục đặc biệt. Các chuyên gia khuyên rằng việc phát hiện sớm và can thiệp kịp thời sẽ giúp trẻ có cơ hội phát triển tốt nhất.',
        'category' => 'Nghiên cứu', 
        'excerpt' => 'Thống kê cho thấy tỷ lệ trẻ tự kỷ đang gia tăng, đòi hỏi nhiều chương trình can thiệp.'
    ),
    array(
        'title' => 'Phương pháp ABA trong giáo dục trẻ đặc biệt',
        'content' => 'Applied Behavior Analysis (ABA) là phương pháp can thiệp hiệu quả cho trẻ tự kỷ. Phương pháp này tập trung vào việc phân tích và thay đổi hành vi thông qua các kỹ thuật học tập có cấu trúc. ABA đã được chứng minh là có hiệu quả cao trong việc cải thiện kỹ năng giao tiếp, học tập và sinh hoạt hàng ngày của trẻ.',
        'category' => 'Giáo dục đặc biệt',
        'excerpt' => 'ABA là phương pháp can thiệp hiệu quả cho trẻ tự kỷ thông qua phân tích hành vi.'
    ),
    array(
        'title' => 'Hội thảo quốc tế về giáo dục đặc biệt 2025',
        'content' => 'Hand in Hand Foundation tổ chức hội thảo quốc tế về giáo dục đặc biệt với sự tham gia của các chuyên gia hàng đầu từ Mỹ, Úc và Nhật Bản. Hội thảo diễn ra trong 3 ngày với nhiều chủ đề hấp dẫn về phương pháp giáo dục hiện đại, công nghệ hỗ trợ và kinh nghiệm thực tiễn.',
        'category' => 'Sự kiện',
        'excerpt' => 'Hội thảo quốc tế quy tụ các chuyên gia hàng đầu về giáo dục đặc biệt.'
    ),
    array(
        'title' => 'Chương trình đào tạo giáo viên chuyên nghiệp',
        'content' => 'Trung tâm khởi động chương trình đào tạo chuyên sâu cho giáo viên giáo dục đặc biệt. Chương trình kéo dài 6 tháng với nội dung được thiết kế theo chuẩn quốc tế, giúp giáo viên nắm vững các phương pháp can thiệp hiệu quả và kỹ năng làm việc với trẻ em có nhu cầu đặc biệt.',
        'category' => 'Hoạt động',
        'excerpt' => 'Chương trình đào tạo 6 tháng cho giáo viên theo chuẩn quốc tế.'
    ),
    array(
        'title' => 'Liệu pháp âm nhạc cho trẻ khiếm thính',
        'content' => 'Nghiên cứu mới từ Đại học Johns Hopkins cho thấy liệu pháp âm nhạc có thể giúp cải thiện đáng kể khả năng giao tiếp và phát triển ngôn ngữ cho trẻ em khiếm thính. Nghiên cứu được thực hiện trên 200 trẻ em trong 2 năm với kết quả đầy khích lệ.',
        'category' => 'Nghiên cứu',
        'excerpt' => 'Liệu pháp âm nhạc mang lại hiệu quả tích cực cho trẻ em khiếm thính.'
    ),
    array(
        'title' => 'Lễ khánh thành cơ sở mới tại Quận 7',
        'content' => 'Hand in Hand Foundation vừa khánh thành cơ sở mới tại Quận 7, TP.HCM với diện tích 1000m2, được trang bị đầy đủ thiết bị hiện đại. Cơ sở mới có thể phục vụ đồng thời 150 trẻ em với các nhu cầu đặc biệt khác nhau và tạo việc làm cho 50 giáo viên chuyên nghiệp.',
        'category' => 'Sự kiện',
        'excerpt' => 'Cơ sở mới 1000m2 tại Quận 7 có thể phục vụ 150 trẻ em.'
    ),
    array(
        'title' => 'Phương pháp TEACCH trong giáo dục trẻ tự kỷ',
        'content' => 'TEACCH (Treatment and Education of Autistic and Communication-related handicapped Children) là phương pháp giáo dục có cấu trúc dành cho trẻ tự kỷ. Phương pháp này tập trung vào việc tạo ra môi trường học tập có tổ chức, dự đoán được và phù hợp với đặc điểm của từng trẻ.',
        'category' => 'Giáo dục đặc biệt',
        'excerpt' => 'TEACCH tạo môi trường học tập có cấu trúc cho trẻ tự kỷ.'
    )
);

foreach ($sample_posts as $post_data) {
    $existing_post = get_page_by_title($post_data['title'], OBJECT, 'post');
    
    if (!$existing_post) {
        $post_id = wp_insert_post(array(
            'post_title' => $post_data['title'],
            'post_content' => $post_data['content'],
            'post_excerpt' => $post_data['excerpt'],
            'post_status' => 'publish',
            'post_type' => 'post',
            'post_author' => 1,
            'post_date' => date('Y-m-d H:i:s', strtotime('-' . rand(1, 30) . ' days'))
        ));
        
        if ($post_id && !is_wp_error($post_id)) {
            $category = get_term_by('name', $post_data['category'], 'category');
            if ($category) {
                wp_set_post_categories($post_id, array($category->term_id));
            }
            echo 'Tạo bài viết: ' . $post_data['title'] . PHP_EOL;
        }
    } else {
        echo 'Bài viết đã tồn tại: ' . $post_data['title'] . PHP_EOL;
    }
}

echo 'Hoàn thành tạo dữ liệu mẫu!' . PHP_EOL;
?>