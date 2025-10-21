<?php
/**
 * Template Name: Giới thiệu
 * Template for About page
 */
get_header(); ?>

<section class="about-section" style="margin-top: 110px; padding-top: 100px;">
    <div class="about-container">
        <div class="about-content">
            <p class="section-title">GIỚI THIỆU</p>
            <h2>Trung tâm can thiệp, Giáo dục sớm<br>Hand in Hand Foundation</h2>
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; else : ?>
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
                
                <h3 style="color: var(--primary-color); margin-top: 40px; margin-bottom: 20px;">Sứ mệnh của chúng tôi</h3>
                <p>
                    Cung cấp môi trường giáo dục chất lượng cao và các dịch vụ can thiệp chuyên nghiệp 
                    để giúp trẻ em có nhu cầu đặc biệt phát triển toàn diện, hội nhập cộng đồng và 
                    đạt được tiềm năng tốt nhất của mình.
                </p>
                
                <h3 style="color: var(--primary-color); margin-top: 40px; margin-bottom: 20px;">Tầm nhìn</h3>
                <p>
                    Trở thành trung tâm can thiệp và giáo dục sớm hàng đầu tại Việt Nam, được công nhận 
                    về chất lượng dịch vụ và đóng góp tích cực cho cộng đồng trẻ em có nhu cầu đặc biệt.
                </p>
                
                <h3 style="color: var(--primary-color); margin-top: 40px; margin-bottom: 20px;">Giá trị cốt lõi</h3>
                <ul style="margin-left: 30px; line-height: 2;">
                    <li><strong>Chuyên nghiệp:</strong> Luôn cập nhật và áp dụng các phương pháp can thiệp tiên tiến nhất</li>
                    <li><strong>Tận tâm:</strong> Đặt lợi ích và sự phát triển của trẻ lên hàng đầu</li>
                    <li><strong>Hợp tác:</strong> Làm việc chặt chẽ với gia đình và cộng đồng</li>
                    <li><strong>Đổi mới:</strong> Không ngừng cải tiến và phát triển chương trình</li>
                    <li><strong>Tôn trọng:</strong> Tôn trọng sự khác biệt và tiềm năng của mỗi trẻ</li>
                </ul>
            <?php endif; ?>
        </div>
        <div class="about-image">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.jpg" alt="Đội ngũ Hand in Hand Foundation">
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="services-section" style="background: var(--light-bg);">
    <div class="services-container">
        <h2 style="text-align: center; margin-bottom: 60px;">Đội ngũ chuyên môn</h2>
        <div class="about-content" style="max-width: 900px; margin: 0 auto; text-align: center;">
            <p style="font-size: 16px; line-height: 1.8;">
                Đội ngũ của chúng tôi bao gồm các chuyên gia tâm lý, giáo viên giáo dục đặc biệt, 
                nhà trị liệu ngôn ngữ, và các chuyên gia can thiệp được đào tạo bài bản tại Việt Nam 
                và quốc tế. Chúng tôi làm việc với tinh thần cống hiến, luôn đặt lợi ích của trẻ 
                và gia đình lên hàng đầu.
            </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
