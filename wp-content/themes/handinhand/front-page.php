<?php
/**
 * Template Name: Front Page
 * The main landing page template
 */
get_header(); ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-container">
        <div class="hero-content">
            <h1>HAND IN HAND FOUNDATION</h1>
            <h2>TRUNG TÂM CAN THIỆP<br>GIÁO DỤC SỚM</h2>
            <div class="hero-buttons">
                <a href="<?php echo esc_url(home_url('/gioi-thieu')); ?>" class="btn btn-primary">View Work</a>
                <a href="#video" class="btn-play">
                    <i class="fas fa-play"></i>
                </a>
            </div>
        </div>
        <div class="hero-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.jpg" alt="Hand in Hand Foundation" onerror="this.style.display='none'">
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="about-container">
        <div class="about-content">
            <p class="section-title">GIỚI THIỆU</p>
            <h2>Trung tâm can thiệp, Giáo dục sớm<br>Hand in Hand Foundation</h2>
            <p>
                <strong>Hand in Hand Foundation</strong> là tổ chức giáo dục hướng đến cộng đồng trẻ từ 18 
                tháng đến 12 tuổi với các loại hình đặc biệt: Trẻ rối loạn phổ tự kỷ - Trẻ tăng động 
                giảm chú ý- trẻ chậm nói - Trẻ có rối loạn ngôn ngữ - Khiếm thính - Và trẻ có các 
                khó khăn khác trong học tập.
            </p>
            <p>
                Chúng tôi mang đến cho trẻ em môi trường học an toàn, thân thiện, hiện đại; 
                Chương trình học đạt chuẩn Mỹ, hỗ trợ rộng rãi cho sự phát triển của trẻ, hướng 
                đến môi trường học hòa nhập và khả năng thích ứng xã hội.
            </p>
            <p>
                Ngoài trẻ em, Hand in Hand Foundation còn là tổ chức đào tạo, huấn luyện, hỗ 
                trợ chất lượng cao dành cho các nhà chuyên môn và phụ huynh để nâng cao 
                khả năng làm việc, hỗ trợ cho trẻ em có nhu cầu đặc biệt.
            </p>
            <a href="<?php echo esc_url(home_url('/gioi-thieu')); ?>" class="btn btn-secondary">Tìm hiểu thêm</a>
        </div>
        <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.jpg" alt="Đội ngũ Hand in Hand Foundation" onerror="this.style.display='none'">
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section" style="padding: 80px 30px; background: white;">
    <div class="news-container" style="max-width: 1200px; margin: 0 auto;">
        <p style="color: #e63946; font-size: 16px; font-weight: 700; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 1px; font-family: Arial, sans-serif;">TIN TỨC</p>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px;">
            <!-- Bài viết 1 -->
            <article style="display: block;">
                <h3 style="font-size: 16px; color: #4a9fa5; margin-bottom: 10px; font-weight: 700; text-transform: uppercase; line-height: 1.4; text-align: center; font-family: Arial, sans-serif;">
                    <a href="<?php echo home_url('/tin-tuc/'); ?>" style="color: #4a9fa5; text-decoration: none;">CỬA TIỆM HẠNH PHÚC CỦA NGƯỜI TỰ KỶ</a>
                </h3>
                <p style="font-size: 13px; color: #888; margin-bottom: 20px; text-align: center; font-family: Arial, sans-serif;">vnexpress - 06/03/2025</p>
                <div style="display: flex; gap: 20px; align-items: flex-start;">
                    <div style="flex: 0 0 160px;">
                        <div style="width: 160px; height: 120px; overflow: hidden; border-radius: 5px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.jpg" alt="Cửa tiệm hạnh phúc" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <div style="flex: 1;">
                        <div style="font-size: 14px; line-height: 1.6; color: #333; margin-bottom: 15px; font-family: Arial, sans-serif;">
                            "Cửa tiệm hạnh phúc" là tên gọi thân mật của mô hình kinh tế dành cho người tự kỷ, nơi họ được công nhận là người lao động có lương, thưởng và được ghi nhận...
                        </div>
                        <a href="<?php echo home_url('/tin-tuc/'); ?>" style="color: #ff8c00; font-weight: 600; font-size: 13px; text-decoration: none; font-family: Arial, sans-serif;">Xem thêm →</a>
                    </div>
                </div>
            </article>
            
            <!-- Bài viết 2 -->
            <article style="display: block;">
                <h3 style="font-size: 16px; color: #4a9fa5; margin-bottom: 10px; font-weight: 700; text-transform: uppercase; line-height: 1.4; text-align: center; font-family: Arial, sans-serif;">
                    <a href="<?php echo home_url('/tin-tuc/'); ?>" style="color: #4a9fa5; text-decoration: none;">TỶ LỆ TRẺ TỰ KỶ TĂNG MẠNH, BỘ TRƯỞNG Y TẾ MỸ PHÁT NGÔN GÂY TRANH CÃI</a>
                </h3>
                <p style="font-size: 13px; color: #888; margin-bottom: 20px; text-align: center; font-family: Arial, sans-serif;">tuoitre - 25/04/2025</p>
                <div style="display: flex; gap: 20px; align-items: flex-start;">
                    <div style="flex: 0 0 160px;">
                        <div style="width: 160px; height: 120px; overflow: hidden; border-radius: 5px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.jpg" alt="Trẻ tự kỷ" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <div style="flex: 1;">
                        <div style="font-size: 14px; line-height: 1.6; color: #333; margin-bottom: 15px; font-family: Arial, sans-serif;">
                            Tỉ lệ trẻ em mắc chứng rối loạn phổ tự kỷ (ASD) tại Mỹ tiếp tục tăng mạnh, theo báo cáo mới nhất từ Trung tâm Kiểm soát và Phòng ngừa dịch bệnh nước này (CDC)...
                        </div>
                        <a href="<?php echo home_url('/tin-tuc/'); ?>" style="color: #ff8c00; font-weight: 600; font-size: 13px; text-decoration: none; font-family: Arial, sans-serif;">Xem thêm →</a>
                    </div>
                </div>
            </article>
                        <!-- Bài viết 3 -->
            <article style="display: block;">
                <h3 style="font-size: 16px; color: #4a9fa5; margin-bottom: 10px; font-weight: 700; text-transform: uppercase; line-height: 1.4; text-align: center; font-family: Arial, sans-serif;">
                    <a href="<?php echo home_url('/tin-tuc/'); ?>" style="color: #4a9fa5; text-decoration: none;">HÀNH TRÌNH 13 NĂM CỦA MẸ ĐƠN THÂN CHĂM CON TỰ KỶ</a>
                </h3>
                <p style="font-size: 13px; color: #888; margin-bottom: 20px; text-align: center; font-family: Arial, sans-serif;">vnexpress - 18/04/2019</p>
                <div style="display: flex; gap: 20px; align-items: flex-start;">
                    <div style="flex: 0 0 160px;">
                        <div style="width: 160px; height: 120px; overflow: hidden; border-radius: 5px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.jpg" alt="Trẻ tự kỷ" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <div style="flex: 1;">
                        <div style="font-size: 14px; line-height: 1.6; color: #333; margin-bottom: 15px; font-family: Arial, sans-serif;">
                            Yang Yang chia sẻ về hành trình vừa làm cha , làm mẹ , giáo viên và là bạn của đứa con trai tự kỷ suốt 13 năm qua ở Trung Quốc...
                        </div>
                        <a href="<?php echo home_url('/tin-tuc/'); ?>" style="color: #ff8c00; font-weight: 600; font-size: 13px; text-decoration: none; font-family: Arial, sans-serif;">Xem thêm →</a>
                    </div>
                </div>
            </article>
                        <!-- Bài viết 4 -->
            <article style="display: block;">
                <h3 style="font-size: 16px; color: #4a9fa5; margin-bottom: 10px; font-weight: 700; text-transform: uppercase; line-height: 1.4; text-align: center; font-family: Arial, sans-serif;">
                    <a href="<?php echo home_url('/tin-tuc/'); ?>" style="color: #4a9fa5; text-decoration: none;">CẶP SONG SINH TỰ KỶ ĐƯỢC CHỮA TRỊ BẰNG Y HỌC CỔ TRUYỂN</a>
                </h3>
                <p style="font-size: 13px; color: #888; margin-bottom: 20px; text-align: center; font-family: Arial, sans-serif;">vnexpress - 16/8/2018</p>
                <div style="display: flex; gap: 20px; align-items: flex-start;">
                    <div style="flex: 0 0 160px;">
                        <div style="width: 160px; height: 120px; overflow: hidden; border-radius: 5px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7.jpg" alt="Trẻ tự kỷ" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <div style="flex: 1;">
                        <div style="font-size: 14px; line-height: 1.6; color: #333; margin-bottom: 15px; font-family: Arial, sans-serif;">
                            Hàng ngày hai cháu đến Bệnh viện Châm cứu Trung ương (Hà Nội) để điện châm, thủy châm, xoa bóp bấm huyệt, trong liệu trình một tháng.
                        </div>
                        <a href="<?php echo home_url('/tin-tuc/'); ?>" style="color: #ff8c00; font-weight: 600; font-size: 13px; text-decoration: none; font-family: Arial, sans-serif;">Xem thêm →</a>
                    </div>
                </div>
            </article>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo home_url('/tin-tuc/'); ?>" style="color: #4a9fa5; font-weight: 600; font-size: 14px; text-decoration: none; font-family: Arial, sans-serif; border: 2px solid #4a9fa5; padding: 12px 24px; border-radius: 5px; display: inline-block;">
                Xem tất cả tin tức →
            </a>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="services-section">
    <div class="services-container">
        <p class="section-title" style="text-align: center;">DỊCH VỤ</p>

        <div class="services-grid">
            <?php
            $services_args = array(
                'post_type'      => 'service',
                'posts_per_page' => 6,
                'orderby'        => 'menu_order',
                'order'          => 'ASC'
            );
            $services_query = new WP_Query($services_args);
            
            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
            ?>
                <div class="service-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="service-icon">
                            <?php the_post_thumbnail('service-thumb'); ?>
                        </div>
                    <?php endif; ?>
                    <h3 class="service-title"><?php the_title(); ?></h3>
                    <div class="service-description">
                        <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <!-- Default Service Cards -->
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/8.jpg" alt="Sàng lọc sớm">
                    </div>
                    <h3 class="service-title">Sàng lọc sớm</h3>
                    <p class="service-description">
                        Hand in Hand thực hiện sàng lọc các vấn đề về phát triển và hành vi của trẻ để hiểu nguy cơ chậm phát triển hoặc rối loạn của trẻ. Từ đó khẳng định nhu cầu và công cụ phù hợp. Dựa trên kết quả sàng lọc, chúng tôi sẽ cung cấp các phương pháp khuyến nghị phù hợp cho phụ huynh.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/9.jpg" alt="Đánh giá chuyên sâu">
                    </div>
                    <h3 class="service-title">Đánh giá chuyên sâu</h3>
                    <p class="service-description">
                        Chuyên gia của Hand in Hand sẽ sử dụng công cụ và phương pháp quốc tế chuyển biệt để xác định mức độ phát triển, điểm mạnh, điểm khó khăn của trẻ. Từ đó chúng tôi sẽ lên kế hoạch can thiệp và chương trình học cá nhân hóa, giúp trẻ phát triển đúng với đồ tuổi nhất có thể.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/10.jpg" alt="Hỗ trợ đào tạo">
                    </div>
                    <h3 class="service-title">Hỗ trợ, đào tạo nhà chuyên môn, người chăm sóc trẻ</h3>
                    <p class="service-description">
                        Hand in Hand coi trọng việc hỗ trợ và làm đồng hành với các nhà chuyên môn, phụ huynh cho trẻ có nhu cầu đặc biệt. Chúng tôi luôn có chương trình đào tạo chuyên sâu để nhà chuyên môn, cha mẹ trẻ hiểu rõ, khuyến nghị phù hợp cho phù huynh và kỹ năng làm việc, tăng cường kiến nhân và đồng hành lâu dài.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/11.jpg" alt="Can thiệp 1:1">
                    </div>
                    <h3 class="service-title">Can thiệp 1:1</h3>
                    <p class="service-description">
                        Can thiệp 1:1 là bước khởi đầu quan trọng, đặc biệt khi trẻ đang rất khó cần. Khi có có kỹ năng nền tảng, trẻ mới dễ dàng phát triển hoặc can thiệp trong môi trường nhóm trước khi vào lớp nhập trường học. Chúng tôi luôn khuyến khích phụ huynh cùng tham gia giúp cho việc nhập trường.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/12.jpg" alt="Học theo buổi">
                    </div>
                    <h3 class="service-title">Học theo buổi</h3>
                    <p class="service-description">
                        Đây là cách học ưu việt với những trẻ có khả năng học hòa nhập. Mỗi buổi tại trung tâm giúp trẻ được hỗ trợ chuyên sâu, cá nhân hóa. Mỗi học hòa nhập giúp trẻ được quan sát – bắt chước – giáo tiếp với bạn vì. Buổi học hòa nhập giúp trẻ được hành vi. Buổi học hòa nhập giúp trẻ được quan sát – bắt chước – giáo tiếp với bạn.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/13.jpg" alt="Học bán trú">
                    </div>
                    <h3 class="service-title">Học bán trú</h3>
                    <p class="service-description">
                        Môi trường học bán trú rất phù hợp để can thiệp, hỗ trợ liên tục cho trẻ sẵn sàng cho các trẻ trong độ tuổi vàng dưới 6 tuổi. Nhờ buổi học liên tục thì độ tự lập, tự phục vụ các tiết học thiết yếu 1:1 và học nhóm giúp trẻ vừa được hỗ trợ cá nhân vừa được quan sát, bắt chước bạn vì.
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

