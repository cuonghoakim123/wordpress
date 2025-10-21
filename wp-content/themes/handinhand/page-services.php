<?php
/**
 * Template Name: Dịch vụ
 * Template for Services page
 */
get_header(); ?>

<section class="services-section" style="margin-top: 110px; padding-top: 100px;">
    <div class="services-container">
        <p class="section-title" style="text-align: center;">DỊCH VỤ</p>
        <h2 style="text-align: center; margin-bottom: 60px;">Các dịch vụ của Hand in Hand Foundation</h2>
        
        <div class="services-grid">
            <?php
            $services_args = array(
                'post_type'      => 'service',
                'posts_per_page' => -1,
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
                        <?php the_content(); ?>
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
                        Đây là cách học ưu việt với những trẻ có khả năng học hòa nhập. Mỗi buổi tại trung tâm giúp trẻ được hỗ trợ chuyên sâu, cá nhân hóa. Mỗi học hòa nhập giúp trẻ được quan sát – bắt chước – giáo tiếp với bạn vì. Buổi học hòa nhập giúp trẻ được hành vi.
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
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="entry-content" style="max-width: 900px; margin: 60px auto 0; text-align: center;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<!-- Call to Action -->
<section class="contact-section">
    <div class="contact-container">
        <h2>Liên hệ với chúng tôi để được tư vấn</h2>
        <p class="contact-subtitle">Đội ngũ chuyên gia của chúng tôi sẵn sàng hỗ trợ bạn</p>
        <a href="<?php echo esc_url(home_url('/lien-he')); ?>" class="btn btn-primary" style="display: inline-block; margin-top: 20px;">
            Liên hệ ngay
        </a>
    </div>
</section>

<?php get_footer(); ?>
