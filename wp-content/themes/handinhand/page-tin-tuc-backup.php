<?php
/**
 * Template Name: Tin Tức
 * Description: Template cho trang tin tức Hand in Hand Foundation
 */

get_header(); ?>

<style>
/* CSS cho trang tin tức theo design mẫu */
.news-page-wrapper {
    margin-top: 100px;
    padding: 40px 20px;
    background: #f8f9fa;
    min-height: 100vh;
}

.news-container {
    max-width: 1200px;
    margin: 0 auto;
}

.news-page-title {
    color: #e63946;
    font-size: 18px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 40px;
    text-align: left;
    font-family: Arial, sans-serif;
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px 60px;
}

.news-item {
    background: white;
    border-radius: 0;
    overflow: hidden;
    box-shadow: none;
    border: none;
}

.news-item-title {
    color: #4a9fa5;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 10px;
    line-height: 1.4;
    font-family: Arial, sans-serif;
}

.news-item-title a {
    color: #4a9fa5;
    text-decoration: none;
}

.news-item-title a:hover {
    color: #3a8a8f;
}

.news-item-meta {
    text-align: center;
    font-size: 13px;
    color: #888;
    margin-bottom: 20px;
    font-family: Arial, sans-serif;
}

.news-item-content {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.news-item-image {
    flex: 0 0 160px;
}

.news-item-image img {
    width: 160px;
    height: 120px;
    object-fit: cover;
    border-radius: 5px;
}

.news-item-image-placeholder {
    width: 160px;
    height: 120px;
    background: linear-gradient(135deg, #4a9fa5, #3a8a8f);
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 32px;
}

.news-item-text {
    flex: 1;
}

.news-item-excerpt {
    font-size: 14px;
    line-height: 1.6;
    color: #333;
    margin-bottom: 15px;
    font-family: Arial, sans-serif;
}

.news-item-link {
    color: #ff8c00;
    font-weight: 600;
    font-size: 13px;
    text-decoration: none;
    font-family: Arial, sans-serif;
    transition: color 0.3s ease;
}

.news-item-link:hover {
    color: #e67d00;
}

/* Responsive */
@media (max-width: 768px) {
    .news-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .news-item-content {
        flex-direction: column;
        gap: 15px;
    }
    
    .news-item-image {
        flex: none;
        align-self: center;
    }
    
    .news-page-wrapper {
        padding: 20px 15px;
        margin-top: 80px;
    }
}

@media (max-width: 480px) {
    .news-page-title {
        font-size: 16px;
        margin-bottom: 30px;
    }
    
    .news-item-title {
        font-size: 14px;
    }
    
    .news-item-image img,
    .news-item-image-placeholder {
        width: 140px;
        height: 105px;
    }
}
</style>

<div class="news-page-wrapper">
    <div class="news-container">
        <h1 class="news-page-title">TIN TỨC</h1>
        
        <div class="news-grid">
            <?php
            // Query để lấy tin tức
            $news_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 8,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            
            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                    <article class="news-item">
                        <h2 class="news-item-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        
                        <div class="news-item-meta">
                            <?php 
                            // Giả lập nguồn tin như trong ảnh mẫu
                            $sources = array('vnexpress', 'tuoitre', 'thanhnien', 'dantri');
                            $random_source = $sources[array_rand($sources)];
                            echo $random_source . ' - ' . get_the_date('d/m/Y'); 
                            ?>
                        </div>
                        
                        <div class="news-item-content">
                            <div class="news-item-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" 
                                         alt="<?php the_title_attribute(); ?>">
                                <?php else : ?>
                                    <div class="news-item-image-placeholder">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="news-item-text">
                                <div class="news-item-excerpt">
                                    <?php 
                                    $excerpt = get_the_excerpt();
                                    if ($excerpt) {
                                        echo wp_trim_words($excerpt, 25, '...');
                                    } else {
                                        echo wp_trim_words(get_the_content(), 25, '...');
                                    }
                                    ?>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="news-item-link">
                                    Xem thêm →
                                </a>
                            </div>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; color: #666;">
                    <i class="fas fa-newspaper" style="font-size: 64px; margin-bottom: 20px; opacity: 0.3;"></i>
                    <h3>Chưa có tin tức nào</h3>
                    <p>Hiện tại chưa có bài viết nào được đăng. Vui lòng quay lại sau.</p>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%"><stop offset="0%" stop-color="rgba(255,255,255,0.1)"/><stop offset="100%" stop-color="transparent"/></radialGradient></defs><circle cx="200" cy="200" r="100" fill="url(%23a)"/><circle cx="800" cy="300" r="80" fill="url(%23a)"/><circle cx="300" cy="700" r="120" fill="url(%23a)"/><circle cx="700" cy="800" r="90" fill="url(%23a)"/></svg>');
    pointer-events: none;
}

.news-hero-content {
    position: relative;
    z-index: 10;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    text-align: center;
    color: white;
}

.news-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(36px, 5vw, 64px);
    font-weight: 700;
    margin-bottom: 24px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
    letter-spacing: -0.02em;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease forwards 0.3s;
}

.news-hero p {
    font-size: clamp(16px, 2vw, 20px);
    opacity: 0.95;
    line-height: 1.7;
    max-width: 700px;
    margin: 0 auto 40px;
    font-weight: 400;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease forwards 0.6s;
}

.hero-stats {
    display: flex;
    justify-content: center;
    gap: 60px;
    margin-top: 50px;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease forwards 0.9s;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 32px;
    font-weight: 800;
    display: block;
    margin-bottom: 8px;
}

.stat-label {
    font-size: 14px;
    opacity: 0.9;
    text-transform: uppercase;
    letter-spacing: 1px;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* News Content Section */
.news-content {
    padding: 100px 0;
    background: #ffffff;
}

.news-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.section-header {
    text-align: center;
    margin-bottom: 80px;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(28px, 4vw, 48px);
    color: #2d3748;
    margin-bottom: 20px;
    font-weight: 600;
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #4a9fa5, #e63946);
    border-radius: 2px;
}

.section-subtitle {
    font-size: 18px;
    color: #718096;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* News Grid */
.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
    gap: 40px;
    margin-bottom: 80px;
}

/* News Card với Animation */
.news-card {
    background: #ffffff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid #e2e8f0;
    position: relative;
    transform: translateY(0);
}

.news-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 25px 60px rgba(0,0,0,0.15);
    border-color: #4a9fa5;
}

.news-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #4a9fa5, #e63946, #d4af37);
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.news-card:hover::before {
    transform: scaleX(1);
}

/* News Image với Overlay */
.news-image {
    height: 280px;
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #4a9fa5 0%, #3a8a8f 100%);
}

.news-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.news-card:hover .news-image img {
    transform: scale(1.08);
}

.news-image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(74, 159, 165, 0.8), rgba(58, 138, 143, 0.6));
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.4s ease;
}

.news-card:hover .news-image-overlay {
    opacity: 1;
}

.news-image-icon {
    color: white;
    font-size: 48px;
}

.news-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 64px;
    opacity: 0.8;
}

/* News Content */
.news-card-content {
    padding: 30px;
}

.news-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    gap: 15px;
}

.news-date {
    background: linear-gradient(135deg, #e63946, #dc2626);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 12px rgba(230, 57, 70, 0.3);
}

.news-category {
    background: linear-gradient(135deg, #d4af37, #b8941f);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 12px rgba(212, 175, 55, 0.3);
}

.news-title {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    font-weight: 600;
    color: #2d3748;
    margin-bottom: 16px;
    line-height: 1.4;
    height: 64px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.news-title a {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s ease;
}

.news-title a:hover {
    color: #4a9fa5;
}

.news-excerpt {
    color: #4a5568;
    line-height: 1.7;
    margin-bottom: 24px;
    font-size: 15px;
    height: 84px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
}

/* Read More Button */
.read-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #4a9fa5, #3a8a8f);
    color: white;
    padding: 14px 28px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.read-more-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.6s ease;
}

.read-more-btn:hover::before {
    left: 100%;
}

.read-more-btn:hover {
    background: linear-gradient(135deg, #3a8a8f, #2d7a7f);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(74, 159, 165, 0.4);
    color: white;
}

.read-more-btn i {
    transition: transform 0.3s ease;
}

.read-more-btn:hover i {
    transform: translateX(4px);
}

/* No Posts State */
.no-posts {
    text-align: center;
    padding: 100px 20px;
    color: #718096;
}

.no-posts-icon {
    font-size: 120px;
    color: #4a9fa5;
    margin-bottom: 30px;
    opacity: 0.3;
}

.no-posts h3 {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    color: #2d3748;
    margin-bottom: 16px;
    font-weight: 600;
}

.no-posts p {
    font-size: 18px;
    max-width: 500px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Newsletter Section */
.newsletter {
    background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%);
    padding: 100px 0;
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
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><circle cx="200" cy="200" r="3" fill="rgba(255,255,255,0.1)"/><circle cx="800" cy="300" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="300" cy="700" r="4" fill="rgba(255,255,255,0.1)"/><circle cx="700" cy="800" r="2.5" fill="rgba(255,255,255,0.1)"/></svg>');
    pointer-events: none;
}

.newsletter-content {
    position: relative;
    z-index: 10;
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
    text-align: center;
    color: white;
}

.newsletter h3 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(28px, 4vw, 42px);
    font-weight: 600;
    margin-bottom: 20px;
}

.newsletter p {
    font-size: 18px;
    opacity: 0.9;
    margin-bottom: 40px;
    line-height: 1.6;
}

.newsletter-form {
    display: flex;
    gap: 20px;
    max-width: 500px;
    margin: 0 auto;
}

.newsletter-form input {
    flex: 1;
    padding: 18px 24px;
    border: none;
    border-radius: 30px;
    font-size: 16px;
    outline: none;
    background: rgba(255,255,255,0.95);
    color: #2d3748;
    transition: all 0.3s ease;
}

.newsletter-form input:focus {
    background: white;
    box-shadow: 0 0 0 3px rgba(74, 159, 165, 0.3);
}

.newsletter-form input::placeholder {
    color: #718096;
}

.newsletter-form button {
    background: linear-gradient(135deg, #e63946, #dc2626);
    color: white;
    border: none;
    padding: 18px 32px;
    border-radius: 30px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
    display: flex;
    align-items: center;
    gap: 8px;
}

.newsletter-form button:hover {
    background: linear-gradient(135deg, #dc2626, #b91c1c);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(230, 57, 70, 0.4);
}

/* Responsive Design */
@media (max-width: 768px) {
    .news-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .news-card-content {
        padding: 25px;
    }
    
    .hero-stats {
        flex-direction: column;
        gap: 30px;
    }
    
    .newsletter-form {
        flex-direction: column;
        gap: 20px;
    }
    
    .newsletter-form input,
    .newsletter-form button {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .news-hero {
        padding: 80px 0;
    }
    
    .news-content {
        padding: 80px 0;
    }
    
    .newsletter {
        padding: 80px 0;
    }
    
    .news-grid {
        grid-template-columns: 1fr;
    }
}

/* Loading Animation */
.news-grid.loading .news-card {
    opacity: 0;
    transform: translateY(30px);
    animation: cardFadeIn 0.6s ease forwards;
}

.news-grid.loading .news-card:nth-child(1) { animation-delay: 0.1s; }
.news-grid.loading .news-card:nth-child(2) { animation-delay: 0.2s; }
.news-grid.loading .news-card:nth-child(3) { animation-delay: 0.3s; }
.news-grid.loading .news-card:nth-child(4) { animation-delay: 0.4s; }
.news-grid.loading .news-card:nth-child(5) { animation-delay: 0.5s; }
.news-grid.loading .news-card:nth-child(6) { animation-delay: 0.6s; }

@keyframes cardFadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<main class="tin-tuc-page">
    <!-- Hero Section cho Tin Tức -->
    <section class="tin-tuc-hero">
        <div class="tin-tuc-container">
            <h1 class="tin-tuc-title">TIN TỨC & HOẠT ĐỘNG</h1>
            <p class="tin-tuc-subtitle">Cập nhật những thông tin mới nhất về hoạt động của Hand in Hand Foundation và các tin tức liên quan đến giáo dục đặc biệt</p>
        </div>
    </section>

<main class="news-page">
    <!-- Hero Section với Animation -->
    <section class="news-hero">
        <div class="news-hero-content">
            <h1>TIN TỨC & HOẠT ĐỘNG</h1>
            <p>Cập nhật những thông tin mới nhất về hoạt động của Hand in Hand Foundation và các tin tức liên quan đến giáo dục đặc biệt cho trẻ em</p>
            
            <div class="hero-stats">
                <?php
                $post_count = wp_count_posts('post');
                $published_posts = $post_count->publish;
                $categories_count = wp_count_terms('category', array('hide_empty' => true));
                ?>
                <div class="stat-item">
                    <span class="stat-number"><?php echo $published_posts; ?>+</span>
                    <span class="stat-label">Bài viết</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number"><?php echo $categories_count; ?>+</span>
                    <span class="stat-label">Chủ đề</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">1000+</span>
                    <span class="stat-label">Lượt đọc/tháng</span>
                </div>
            </div>
        </div>
    </section>

    <!-- News Content Section -->
    <section class="news-content">
        <div class="news-container">
            <div class="section-header">
                <h2 class="section-title">Tin Tức Mới Nhất</h2>
                <p class="section-subtitle">Khám phá những câu chuyện truyền cảm hứng và thông tin hữu ích về giáo dục đặc biệt</p>
            </div>
            
            <div class="news-grid loading">
                <?php
                // Query cho tin tức với pagination
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $news_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));
                
                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) : $news_query->the_post();
                        $categories = get_the_category();
                        $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        ?>
                        <article class="news-card">
                            <div class="news-image">
                                <?php if ($featured_image) : ?>
                                    <img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>">
                                    <div class="news-image-overlay">
                                        <i class="fas fa-eye news-image-icon"></i>
                                    </div>
                                <?php else : ?>
                                    <div class="news-placeholder">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="news-card-content">
                                <div class="news-meta">
                                    <span class="news-date">
                                        <i class="far fa-calendar-alt"></i>
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </span>
                                    <?php if ($categories && !is_wp_error($categories)) : ?>
                                        <span class="news-category">
                                            <i class="fas fa-tag"></i>
                                            <?php echo esc_html($categories[0]->name); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                
                                <h3 class="news-title">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <div class="news-excerpt">
                                    <?php 
                                    $excerpt = get_the_excerpt();
                                    if ($excerpt) {
                                        echo wp_trim_words($excerpt, 18, '...');
                                    } else {
                                        echo wp_trim_words(get_the_content(), 18, '...');
                                    }
                                    ?>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="read-more-btn" title="Đọc tiếp: <?php the_title_attribute(); ?>">
                                    <span>Đọc tiếp</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    
                    // Custom Pagination
                    if ($news_query->max_num_pages > 1) :
                        ?>
                        <div style="grid-column: 1 / -1; margin-top: 60px;">
                            <div style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap;">
                                <?php
                                $pagination_links = paginate_links(array(
                                    'total' => $news_query->max_num_pages,
                                    'current' => max(1, $paged),
                                    'format' => '?paged=%#%',
                                    'show_all' => false,
                                    'type' => 'array',
                                    'end_size' => 2,
                                    'mid_size' => 1,
                                    'prev_text' => '<i class="fas fa-chevron-left"></i> Trước',
                                    'next_text' => 'Sau <i class="fas fa-chevron-right"></i>',
                                ));
                                
                                if ($pagination_links) {
                                    foreach ($pagination_links as $link) {
                                        echo '<div style="margin: 5px;">' . $link . '</div>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <style>
                        .page-numbers {
                            display: inline-flex;
                            align-items: center;
                            gap: 8px;
                            padding: 12px 20px;
                            background: #ffffff;
                            border: 2px solid #e2e8f0;
                            color: #4a5568;
                            border-radius: 10px;
                            font-weight: 600;
                            text-decoration: none;
                            transition: all 0.3s ease;
                            min-width: 50px;
                            justify-content: center;
                        }
                        
                        .page-numbers:hover,
                        .page-numbers.current {
                            background: #4a9fa5;
                            color: white;
                            border-color: #4a9fa5;
                            transform: translateY(-2px);
                            box-shadow: 0 5px 15px rgba(74, 159, 165, 0.3);
                        }
                        
                        .page-numbers.prev,
                        .page-numbers.next {
                            padding: 12px 24px;
                        }
                        </style>
                        <?php
                    endif;
                    
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="no-posts">
                        <div class="no-posts-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <h3>Chưa có tin tức nào</h3>
                        <p>Hiện tại chưa có bài viết nào được đăng. Vui lòng quay lại sau để đọc những tin tức mới nhất từ Hand in Hand Foundation.</p>
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
            <h3><i class="fas fa-envelope-open-text"></i> Đăng ký nhận tin tức</h3>
            <p>Nhận những thông tin cập nhật mới nhất về hoạt động của Hand in Hand Foundation và các xu hướng giáo dục đặc biệt</p>
            
            <form class="newsletter-form" onsubmit="handleNewsletterSubmit(event)">
                <input type="email" placeholder="Nhập địa chỉ email của bạn..." required>
                <button type="submit">
                    <i class="fas fa-paper-plane"></i>
                    <span>Đăng ký ngay</span>
                </button>
            </form>
        </div>
    </section>
</main>

<script>
// Animation on load
document.addEventListener('DOMContentLoaded', function() {
    // Remove loading class after a brief delay
    setTimeout(() => {
        const newsGrid = document.querySelector('.news-grid');
        if (newsGrid) {
            newsGrid.classList.remove('loading');
        }
    }, 100);
    
    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Newsletter form handler
function handleNewsletterSubmit(event) {
    event.preventDefault();
    const email = event.target.querySelector('input[type="email"]').value;
    
    // Simple validation
    if (!email || !email.includes('@')) {
        alert('Vui lòng nhập địa chỉ email hợp lệ!');
        return;
    }
    
    // Show success message
    alert('Cảm ơn bạn đã đăng ký! Chúng tôi sẽ gửi những tin tức mới nhất đến email của bạn.');
    
    // Clear form
    event.target.reset();
    
    // In a real implementation, you would send this to your backend
    console.log('Newsletter subscription:', email);
}

// Add some interactive effects
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effect to cards
    const cards = document.querySelectorAll('.news-card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-12px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Add click ripple effect to buttons
    const buttons = document.querySelectorAll('.read-more-btn, .newsletter-form button');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255,255,255,0.3);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s ease-out;
                pointer-events: none;
            `;
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
});

// Add CSS for ripple animation
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
</script>

<?php get_footer(); ?>