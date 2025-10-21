<?php
/**
 * Template Name: Liên hệ
 * Template for Contact page
 */
get_header(); ?>

<section class="contact-section" style="margin-top: 110px; padding-top: 100px;">
    <div class="contact-container">
        <p class="section-title">LIÊN HỆ</p>
        <h2>Liên hệ ngay hôm nay<br>để Tư vấn - Đánh Giá - Nhập học</h2>
        
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-details">
                    <h3>Địa chỉ</h3>
                    <p>
                        <strong>Cơ sở 1:</strong> STH47.A7 đường số 14, KDT Lê Hồng Phong II, Nam Nha Trang<br>
                        <strong>Cơ sở 2:</strong> Số 1 đường Sao Biển, Bắc Nha Trang
                    </p>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="contact-details">
                    <h3>Điện thoại</h3>
                    <p>
                        <strong>0916.277.484</strong> (Cô Linh) - <strong>0343.939.929</strong> (Cô Sinh)
                    </p>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-details">
                    <h3>Email</h3>
                    <p>
                        contact@handinhandfoundation.org
                    </p>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="contact-details">
                    <h3>Giờ làm việc</h3>
                    <p>
                        Thứ 2 - Thứ 6: 8:00 - 17:00<br>
                        Thứ 7: 8:00 - 12:00<br>
                        Chủ nhật: Nghỉ
                    </p>
                </div>
            </div>
        </div>
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="entry-content" style="max-width: 800px; margin: 60px auto 0;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
        
        <!-- Contact Form (Optional) -->
        <div style="max-width: 600px; margin: 60px auto 0;">
            <h3 style="text-align: center; margin-bottom: 30px; color: var(--primary-color);">Gửi tin nhắn cho chúng tôi</h3>
            <form class="contact-form" style="background: var(--white); padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                <div style="margin-bottom: 20px;">
                    <label for="name" style="display: block; margin-bottom: 8px; font-weight: 600;">Họ và tên *</label>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 15px;">
                </div>
                
                <div style="margin-bottom: 20px;">
                    <label for="phone" style="display: block; margin-bottom: 8px; font-weight: 600;">Số điện thoại *</label>
                    <input type="tel" id="phone" name="phone" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 15px;">
                </div>
                
                <div style="margin-bottom: 20px;">
                    <label for="email" style="display: block; margin-bottom: 8px; font-weight: 600;">Email</label>
                    <input type="email" id="email" name="email" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 15px;">
                </div>
                
                <div style="margin-bottom: 20px;">
                    <label for="message" style="display: block; margin-bottom: 8px; font-weight: 600;">Nội dung *</label>
                    <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 15px; resize: vertical;"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%; cursor: pointer;">
                    Gửi tin nhắn
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Map Section (Optional) -->
<section style="padding: 0; margin: 0;">
    <div style="width: 100%; height: 400px; background: var(--light-bg); display: flex; align-items: center; justify-content: center;">
        <p style="color: var(--text-light); font-style: italic;">
            [Bản đồ Google Maps có thể được nhúng tại đây]
        </p>
    </div>
</section>

<?php get_footer(); ?>
