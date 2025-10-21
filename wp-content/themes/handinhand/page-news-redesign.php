<?php
/**
 * Template Name: Trang Tin Tức Mới
 * Description: Template đơn giản cho trang tin tức
 */

get_header(); ?>

<style>
/* CSS inline để đảm bảo hiển thị */
.news-page {
    margin-top: 100px;
    min-height: 100vh;
    background: #f8f9fa;
}

.news-hero {
    background: linear-gradient(135deg, #4a9fa5 0%, #3a8a8f 100%);
    padding: 80px 0;
    text-align: center;
    color: white;
    position: relative;
    overflow: hidden;
}

.news-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.1);
    z-index: 1;
}

.news-hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
}

.news-hero h1 {
    font-size: 48px;
    font-weight: 800;
    margin-bottom: 20px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    text-transform: uppercase;
    letter-spacing: 3px;
}

.news-hero p {
    font-size: 18px;
    opacity: 0.95;
    line-height: 1.6;
    max-width: 600px;
    margin: 0 auto;
}

.news-content {
    padding: 80px 0;
}

.news-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.section-title {
    text-align: center;
    font-size: 36px;
    color: #4a9fa5;
    margin-bottom: 50px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, #4a9fa5, #e63946);
    border-radius: 2px;
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-bottom: 60px;
}

.news-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(74, 159, 165, 0.1);
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.news-image {
    height: 250px;
    background: linear-gradient(135deg, #4a9fa5, #3a8a8f);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 48px;
    position: relative;
    overflow: hidden;
}

.news-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.news-card:hover .news-image img {
    transform: scale(1.05);
}

.news-card-content {
    padding: 30px;
}

.news-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
    font-size: 14px;
    color: #6c757d;
}

.news-date {
    background: #e63946;
    color: white;
    padding: 5px 12px;
    border-radius: 15px;
    font-weight: 600;
    font-size: 12px;
}

.news-category {
    background: #d4af37;
    color: white;
    padding: 5px 12px;
    border-radius: 15px;
    font-weight: 600;
    font-size: 12px;
    text-transform: uppercase;
}

.news-title {
    font-size: 22px;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
    line-height: 1.3;
}

.news-title a {
    color: #4a9fa5;
    text-decoration: none;
    transition: color 0.3s ease;
}

.news-title a:hover {
    color: #3a8a8f;
}

.news-excerpt {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 15px;
}

.read-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #4a9fa5, #3a8a8f);
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}

.read-more-btn:hover {
    background: linear-gradient(135deg, #3a8a8f, #4a9fa5);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(74, 159, 165, 0.3);
    color: white;
}

.read-more-btn i {
    transition: transform 0.3s ease;
}

.read-more-btn:hover i {
    transform: translateX(3px);
}

.no-posts {
    text-align: center;
    padding: 80px 20px;
    color: #6c757d;
}

.no-posts i {
    font-size: 80px;
    color: #4a9fa5;
    margin-bottom: 30px;
    opacity: 0.5;
}

.no-posts h3 {
    font-size: 28px;
    color: #333;
    margin-bottom: 15px;
}

.no-posts p {
    font-size: 16px;
}

.newsletter {
    background: linear-gradient(135deg, #4a9fa5 0%, #3a8a8f 100%);
    padding: 80px 0;
    text-align: center;
    color: white;
    position: relative;
    overflow: hidden;
}

.newsletter::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="25" cy="25" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1.5" fill="rgba(255,255,255,0.1)"/></svg>');
    z-index: 1;
}

.newsletter-content {
    position: relative;
    z-index: 2;
    max-width: 600px;
    margin: 0 auto;
    padding: 0 20px;
}

.newsletter h3 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 15px;
}

.newsletter p {
    font-size: 16px;
    opacity: 0.9;
    margin-bottom: 30px;
}

.newsletter-form {
    display: flex;
    gap: 15px;
    max-width: 400px;
    margin: 0 auto;
}

.newsletter-form input {
    flex: 1;
    padding: 15px 20px;
    border: none;
    border-radius: 25px;
    font-size: 16px;
    outline: none;
}

.newsletter-form button {
    background: #e63946;
    color: white;
    border: none;
    padding: 15px 25px;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.newsletter-form button:hover {
    background: #d63039;
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 768px) {
    .news-hero h1 {
        font-size: 28px;
        letter-spacing: 1px;
    }
    
    .news-hero p {
        font-size: 16px;
    }
    
    .section-title {
        font-size: 24px;
    }
    
    .news-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .news-card-content {
        padding: 20px;
    }
    
    .newsletter-form {
        flex-direction: column;
        gap: 15px;
    }
    
    .newsletter h3 {
        font-size: 24px;
    }
}

@media (max-width: 480px) {
    .news-hero {
        padding: 60px 0;
    }
    
    .news-hero h1 {
        font-size: 24px;
    }
    
    .news-content {
        padding: 60px 0;
    }
    
    .newsletter {
        padding: 60px 0;
    }
}
</style>

<main class="news-page">
    <!-- Hero Section -->
    <section class="news-hero">
        <div class="news-hero-content">
            <h1>TIN TỨC & HOẠT ĐỘNG</h1>
            <p>Cập nhật những thông tin mới nhất về hoạt động của Hand in Hand Foundation và các tin tức liên quan đến giáo dục đặc biệt</p>
        </div>
    </section>

    <!-- News Content -->
    <section class="news-content">
        <div class="news-container">
            <h2 class="section-title">TIN TỨC MỚI NHẤT</h2>
            
            <div class="news-grid">
                <?php
                // Query cho tin tức
                $news_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'post_status' => 'publish',
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                ));
                
                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) : $news_query->the_post();
                        $categories = get_the_category();
                        ?>
                        <article class="news-card">
                            <div class="news-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" 
                                         alt="<?php the_title(); ?>">
                                <?php else : ?>
                                    <i class="fas fa-newspaper"></i>
                                <?php endif; ?>
                            </div>
                            
                            <div class="news-card-content">
                                <div class="news-meta">
                                    <span class="news-date"><?php echo get_the_date('d/m/Y'); ?></span>
                                    <?php if ($categories) : ?>
                                        <span class="news-category"><?php echo esc_html($categories[0]->name); ?></span>
                                    <?php endif; ?>
                                </div>
                                
                                <h3 class="news-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                
                                <div class="news-excerpt">
                                    <?php 
                                    $excerpt = get_the_excerpt();
                                    if ($excerpt) {
                                        echo wp_trim_words($excerpt, 25);
                                    } else {
                                        echo wp_trim_words(get_the_content(), 25);
                                    }
                                    ?>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="read-more-btn">
                                    Đọc tiếp <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    
                    // Pagination
                    if ($news_query->max_num_pages > 1) :
                        ?>
                        <div style="grid-column: 1 / -1; text-align: center; margin-top: 40px;">
                            <div style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap;">
                                <?php
                                echo paginate_links(array(
                                    'total' => $news_query->max_num_pages,
                                    'current' => max(1, get_query_var('paged')),
                                    'format' => '?paged=%#%',
                                    'show_all' => false,
                                    'type' => 'plain',
                                    'end_size' => 2,
                                    'mid_size' => 1,
                                    'prev_text' => '← Trước',
                                    'next_text' => 'Sau →',
                                ));
                                ?>
                            </div>
                        </div>
                        <?php
                    endif;
                    
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="no-posts">
                        <i class="fas fa-newspaper"></i>
                        <h3>Chưa có tin tức nào</h3>
                        <p>Hiện tại chưa có bài viết nào được đăng. Vui lòng quay lại sau hoặc liên hệ với chúng tôi để biết thêm thông tin.</p>
                    </div>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="newsletter-content">
            <h3>Đăng ký nhận tin tức</h3>
            <p>Cập nhật những thông tin mới nhất về hoạt động của Hand in Hand Foundation</p>
            <form class="newsletter-form" onsubmit="alert('Cảm ơn bạn đã đăng ký! Chúng tôi sẽ gửi tin tức mới nhất đến email của bạn.'); return false;">
                <input type="email" placeholder="Nhập email của bạn..." required>
                <button type="submit">
                    <i class="fas fa-paper-plane"></i> Đăng ký
                </button>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>