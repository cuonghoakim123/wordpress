<?php
// Cập nhật bài viết về Giám đốc Hiền Đỗ với fallback images
require_once('wp-config.php');

// Nội dung bài viết chi tiết với fallback images
$post_content = '
<div class="director-profile">
    <div class="profile-header">
        <div class="director-photo-container">
            <div class="director-photo-placeholder">
                <i class="fas fa-user-circle"></i>
                <span>Cô Theresa Hiền Đỗ</span>
            </div>
        </div>
        <div class="profile-intro">
            <h2>Cô Theresa Hiền Đỗ</h2>
            <h3>Giám đốc và Người sáng lập Trung tâm Hand in Hand Foundation</h3>
            <p class="profile-tagline">"Trao cơ hội – Gieo yêu thương – Khơi tiềm năng"</p>
        </div>
    </div>

    <div class="profile-content">
        <section class="introduction">
            <h3><i class="fas fa-user-circle"></i> Giới thiệu</h3>
            <p>Cô Theresa Hiền Đỗ – Giám đốc và là người sáng lập Trung tâm Hand in Hand Foundation – là một trong những chuyên gia tiên phong của Việt Nam trong lĩnh vực giáo dục đặc biệt và tự kỷ, mang tầm nhìn nhân văn và sâu sắc về hòa nhập giáo dục cho mọi trẻ em.</p>
            
            <p>Lớn lên cùng một người chị gái có khó khăn trong học tập, cô sớm nuôi dưỡng ước mơ đồng hành và hỗ trợ những trẻ em có nhu cầu đặc biệt. Điều này đã định hướng toàn bộ sự nghiệp của cô, từ việc chọn ngành học đến việc cống hiến hết mình cho lĩnh vực giáo dục đặc biệt.</p>
        </section>

        <section class="education">
            <h3><i class="fas fa-graduation-cap"></i> Học vấn và Đào tạo</h3>
            <div class="education-timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2007</div>
                    <div class="timeline-content">
                        <h4>Cử nhân Giáo dục Đặc biệt</h4>
                        <p>Tốt nghiệp xuất sắc Đại học Sư phạm TP. Hồ Chí Minh, khóa đầu tiên của ngành Giáo dục đặc biệt</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2015</div>
                    <div class="timeline-content">
                        <h4>Thạc sĩ chuyên ngành Tự kỷ</h4>
                        <p>Hoàn thành xuất sắc chương trình Thạc sĩ tại Vương quốc Anh với Học bổng Chevening danh giá của Chính phủ Anh</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="experience">
            <h3><i class="fas fa-briefcase"></i> Kinh nghiệm Làm việc</h3>
            <p>Trong suốt hơn <strong>15 năm công tác</strong>, cô đã trải qua nhiều vị trí trong lĩnh vực giáo dục và phát triển năng lực chuyên môn cho trẻ em có:</p>
            <ul class="specialty-list">
                <li><i class="fas fa-check-circle"></i> Rối loạn phổ tự kỷ</li>
                <li><i class="fas fa-check-circle"></i> Khiếm thính</li>
                <li><i class="fas fa-check-circle"></i> Khuyết tật trí tuệ</li>
                <li><i class="fas fa-check-circle"></i> Rối loạn ngôn ngữ</li>
            </ul>

            <h4>Hợp tác Quốc tế</h4>
            <p>Cô từng làm việc và hợp tác với các tổ chức phi chính phủ quốc tế uy tín:</p>
            <div class="partner-organizations">
                <div class="org-item">
                    <div class="org-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <span>VSO (Voluntary Service Overseas)</span>
                </div>
                <div class="org-item">
                    <div class="org-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <span>Saigon Children\'s Charity</span>
                </div>
                <div class="org-item">
                    <div class="org-icon">
                        <i class="fas fa-deaf"></i>
                    </div>
                    <span>Global Foundation for Children with Hearing Loss</span>
                </div>
                <div class="org-item">
                    <div class="org-icon">
                        <i class="fas fa-dove"></i>
                    </div>
                    <span>The Owl Centre (UK)</span>
                </div>
                <div class="org-item">
                    <div class="org-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <span>Trinh Foundation Australia</span>
                </div>
            </div>
        </section>

        <section class="achievements">
            <h3><i class="fas fa-trophy"></i> Thành tựu Nổi bật</h3>
            <div class="achievement-grid">
                <div class="achievement-item">
                    <div class="achievement-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="achievement-content">
                        <h4>2010</h4>
                        <p>Sáng lập Trung tâm Hand in Hand Foundation (Tay Trong Tay) tại Nha Trang</p>
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="achievement-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="achievement-content">
                        <h4>Trung tâm Kiểu mẫu</h4>
                        <p>Hand in Hand được công nhận là Trung tâm kiểu mẫu đầu tiên về giáo dục hòa nhập của tỉnh Khánh Hòa</p>
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="achievement-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="achievement-content">
                        <h4>Hơn 15 năm</h4>
                        <p>Kinh nghiệm trong lĩnh vực giáo dục đặc biệt và phát triển năng lực cho trẻ em</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="philosophy">
            <h3><i class="fas fa-heart"></i> Triết lý Giáo dục</h3>
            <blockquote class="philosophy-quote">
                <i class="fas fa-quote-left"></i>
                <p>"Mỗi đứa trẻ, dù khác biệt đến đâu, đều có quyền được học tập và hạnh phúc. Tại Hand in Hand Foundation, chúng tôi tạo ra một môi trường nơi mỗi đứa trẻ được thấu hiểu, tôn trọng và phát triển theo đúng khả năng riêng của mình."</p>
                <cite>- Cô Theresa Hiền Đỗ</cite>
                <i class="fas fa-quote-right"></i>
            </blockquote>
            
            <div class="core-values">
                <h4>Ba Giá trị Cốt lõi:</h4>
                <div class="values-grid">
                    <div class="value-item">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h5>Trao cơ hội</h5>
                        <p>Mở ra những cơ hội học tập và phát triển cho mọi trẻ em</p>
                    </div>
                    <div class="value-item">
                        <i class="fas fa-seedling"></i>
                        <h5>Gieo yêu thương</h5>
                        <p>Lan tỏa tình yêu thương và sự quan tâm đến từng đứa trẻ</p>
                    </div>
                    <div class="value-item">
                        <i class="fas fa-lightbulb"></i>
                        <h5>Khơi tiềm năng</h5>
                        <p>Phát hiện và phát triển tiềm năng ẩn giấu trong mỗi trẻ</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="vision">
            <h3><i class="fas fa-eye"></i> Tầm nhìn Tương lai</h3>
            <p>Cô Hiền Đỗ tiếp tục đồng hành cùng đội ngũ giáo viên, phụ huynh và cộng đồng, lan tỏa tinh thần giáo dục hòa nhập và xây dựng cầu nối giữa Việt Nam và quốc tế trong hành trình vì tương lai trẻ em đặc biệt.</p>
            
            <p>Bà mong muốn Hand in Hand Foundation không chỉ là một trung tâm giáo dục, mà còn là ngọn hải đăng soi sáng con đường cho những gia đình có con em đặc biệt, đồng thời là cầu nối kết nối cộng đồng với những hiểu biết đúng đắn về giáo dục hòa nhập.</p>
        </section>
    </div>
</div>

<style>
.director-profile {
    max-width: 1000px;
    margin: 0 auto;
    padding: 40px 20px;
    font-family: "Inter", sans-serif;
}

.profile-header {
    display: flex;
    gap: 40px;
    margin-bottom: 50px;
    align-items: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.director-photo-container {
    flex-shrink: 0;
}

.director-photo-placeholder {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4a9fa5, #3a8a8f);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    border: 5px solid #4a9fa5;
    box-shadow: 0 10px 30px rgba(74, 159, 165, 0.3);
}

.director-photo-placeholder i {
    font-size: 80px;
    margin-bottom: 10px;
}

.director-photo-placeholder span {
    font-size: 14px;
    font-weight: 600;
    padding: 0 15px;
    line-height: 1.2;
}

.profile-intro h2 {
    color: #4a9fa5;
    font-size: 32px;
    margin-bottom: 10px;
    font-weight: 700;
}

.profile-intro h3 {
    color: #2d3748;
    font-size: 20px;
    margin-bottom: 15px;
    font-weight: 500;
}

.profile-tagline {
    color: #e63946;
    font-size: 18px;
    font-style: italic;
    font-weight: 600;
    background: linear-gradient(90deg, #e63946, #d4af37);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.profile-content section {
    margin-bottom: 40px;
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    border-left: 5px solid #4a9fa5;
}

.profile-content h3 {
    color: #4a9fa5;
    font-size: 24px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.profile-content h3 i {
    color: #e63946;
}

.education-timeline {
    position: relative;
    padding-left: 30px;
}

.education-timeline::before {
    content: "";
    position: absolute;
    left: 15px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(to bottom, #4a9fa5, #e63946);
}

.timeline-item {
    position: relative;
    margin-bottom: 30px;
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.timeline-item::before {
    content: "";
    position: absolute;
    left: -37px;
    top: 5px;
    width: 12px;
    height: 12px;
    background: #4a9fa5;
    border-radius: 50%;
    border: 3px solid white;
    box-shadow: 0 0 0 2px #4a9fa5;
}

.timeline-year {
    background: linear-gradient(135deg, #4a9fa5, #3a8a8f);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    min-width: 80px;
    text-align: center;
}

.timeline-content h4 {
    color: #2d3748;
    margin-bottom: 8px;
    font-size: 18px;
}

.specialty-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.specialty-list li {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px;
    background: #f8f9fa;
    border-radius: 10px;
    border-left: 4px solid #4a9fa5;
}

.specialty-list i {
    color: #4a9fa5;
}

.partner-organizations {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.org-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}

.org-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.org-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4a9fa5, #3a8a8f);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    flex-shrink: 0;
}

.achievement-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}

.achievement-item {
    display: flex;
    gap: 20px;
    padding: 25px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 15px;
    border: 1px solid #e2e8f0;
}

.achievement-icon {
    background: linear-gradient(135deg, #4a9fa5, #3a8a8f);
    color: white;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    flex-shrink: 0;
}

.achievement-content h4 {
    color: #4a9fa5;
    font-size: 18px;
    margin-bottom: 8px;
    font-weight: 600;
}

.philosophy-quote {
    background: linear-gradient(135deg, #4a9fa5 0%, #3a8a8f 100%);
    color: white;
    padding: 40px;
    border-radius: 20px;
    position: relative;
    margin: 30px 0;
    text-align: center;
}

.philosophy-quote i.fa-quote-left {
    position: absolute;
    top: 20px;
    left: 30px;
    font-size: 30px;
    opacity: 0.3;
}

.philosophy-quote i.fa-quote-right {
    position: absolute;
    bottom: 20px;
    right: 30px;
    font-size: 30px;
    opacity: 0.3;
}

.philosophy-quote p {
    font-size: 18px;
    line-height: 1.8;
    margin-bottom: 20px;
    font-style: italic;
}

.philosophy-quote cite {
    font-weight: 600;
    font-size: 16px;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
    margin-top: 25px;
}

.value-item {
    text-align: center;
    padding: 30px 20px;
    background: white;
    border-radius: 15px;
    border: 2px solid #e2e8f0;
    transition: all 0.3s ease;
}

.value-item:hover {
    border-color: #4a9fa5;
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(74, 159, 165, 0.2);
}

.value-item i {
    font-size: 48px;
    color: #4a9fa5;
    margin-bottom: 15px;
    display: block;
}

.value-item h5 {
    color: #2d3748;
    font-size: 20px;
    margin-bottom: 10px;
    font-weight: 600;
}

.value-item p {
    color: #4a5568;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .profile-header {
        flex-direction: column;
        text-align: center;
        padding: 30px 20px;
    }
    
    .director-photo-placeholder {
        width: 150px;
        height: 150px;
    }
    
    .director-photo-placeholder i {
        font-size: 60px;
    }
    
    .profile-intro h2 {
        font-size: 24px;
    }
    
    .profile-intro h3 {
        font-size: 16px;
    }
    
    .timeline-item {
        flex-direction: column;
        gap: 10px;
    }
    
    .achievement-item {
        flex-direction: column;
        text-align: center;
    }
    
    .org-item {
        flex-direction: column;
        text-align: center;
    }
}
</style>
';

// Tìm và cập nhật bài viết đã tồn tại
$existing_post = get_page_by_title('Giới thiệu Giám đốc Trung tâm Hand in Hand Foundation – Cô Hiền Đỗ', OBJECT, 'post');

if ($existing_post) {
    // Cập nhật bài viết
    $post_id = wp_update_post(array(
        'ID' => $existing_post->ID,
        'post_content' => $post_content,
    ));
    
    if ($post_id && !is_wp_error($post_id)) {
        echo 'Đã cập nhật bài viết về Giám đốc Hiền Đỗ với ID: ' . $post_id . PHP_EOL;
        echo 'URL: ' . get_permalink($post_id) . PHP_EOL;
    } else {
        echo 'Lỗi cập nhật bài viết: ' . ($post_id ? $post_id->get_error_message() : 'Unknown error') . PHP_EOL;
    }
} else {
    echo 'Không tìm thấy bài viết để cập nhật.' . PHP_EOL;
}
?>