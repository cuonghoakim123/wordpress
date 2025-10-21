<?php
/**
 * Template Name: Tin Tức
 * Description: Template tin tức mới với hình ảnh đẹp mắt
 */

get_header(); ?>

<!-- Import Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* Reset & Base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    line-height: 1.6;
    color: #333;
}

/* Hero Section với Background Image */
.news-hero {
    height: 60vh;
    background: linear-gradient(135deg, rgba(0,0,0,0.7), rgba(0,0,0,0.5)), 
                url('https://images.unsplash.com/photo-1497486751825-1233686d5d80?q=80&w=2070&auto=format&fit=crop') center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin-top: 80px;
}

.news-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 30% 30%, rgba(74, 159, 165, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 70% 70%, rgba(230, 57, 70, 0.3) 0%, transparent 50%);
    pointer-events: none;
}

.hero-content {
    text-align: center;
    color: white;
    max-width: 800px;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}

.hero-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 700;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    animation: fadeInUp 1s ease-out;
}

.hero-subtitle {
    font-size: clamp(1rem, 2.5vw, 1.3rem);
    opacity: 0.95;
    font-weight: 300;
    animation: fadeInUp 1s ease-out 0.3s both;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Main Content Section */
.news-main {
    background: #f8fafc;
    padding: 80px 0;
}

.news-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* News Grid Layout với Masonry Effect */
.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

/* Featured Article (First Article - Larger) */
.news-article.featured {
    grid-column: 1 / -1;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    transition: transform 0.3s ease;
}

.news-article.featured:hover {
    transform: translateY(-10px);
}

.featured-image {
    position: relative;
    overflow: hidden;
}

.featured-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.news-article.featured:hover .featured-image img {
    transform: scale(1.1);
}

.featured-content {
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* Regular News Articles */
.news-article {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    position: relative;
}

.news-article:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.article-image {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.article-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.news-article:hover .article-image img {
    transform: scale(1.05);
}

.image-placeholder {
    width: 100%;
    height: 250px;
    background: linear-gradient(135deg, #4a9fa5 0%, #667eea 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 3rem;
    position: relative;
}

.image-placeholder::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.1);
}

/* Category Badge */
.category-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: rgba(230, 57, 70, 0.95);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    backdrop-filter: blur(10px);
    z-index: 2;
}

/* Article Content */
.article-content {
    padding: 30px;
}

.article-meta {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
    font-size: 0.85rem;
    color: #64748b;
}

.article-date {
    display: flex;
    align-items: center;
    gap: 5px;
}

.article-author {
    display: flex;
    align-items: center;
    gap: 5px;
}

.article-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 15px;
    line-height: 1.3;
    transition: color 0.3s ease;
}

.featured .article-title {
    font-size: 2rem;
    margin-bottom: 20px;
}

.article-title a {
    color: inherit;
    text-decoration: none;
}

.article-title a:hover {
    color: #4a9fa5;
}

.article-excerpt {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.featured .article-excerpt {
    font-size: 1.1rem;
    margin-bottom: 25px;
}

/* Read More Button */
.read-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #4a9fa5, #3a8a8f);
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 500;
    font-size: 0.9rem;
    transition: all 0.3s ease;
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
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
}

.read-more-btn:hover::before {
    left: 100%;
}

.read-more-btn:hover {
    background: linear-gradient(135deg, #3a8a8f, #2d7a7f);
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(74, 159, 165, 0.4);
    color: white;
}

.read-more-btn i {
    transition: transform 0.3s ease;
}

.read-more-btn:hover i {
    transform: translateX(3px);
}

/* Image Gallery Section */
.image-gallery {
    margin: 60px 0;
    padding: 60px 0;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.05);
}

.gallery-header {
    text-align: center;
    margin-bottom: 40px;
}

.gallery-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    color: #1e293b;
    margin-bottom: 10px;
}

.gallery-subtitle {
    color: #64748b;
    font-size: 1.1rem;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 0 40px;
}

.gallery-item {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.gallery-item:hover {
    transform: scale(1.05);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.gallery-placeholder {
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, #e2e8f0, #cbd5e1);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #64748b;
    font-size: 2rem;
}

/* Empty State */
.empty-state {
    text-align: center;
    padding: 100px 20px;
    color: #64748b;
}

.empty-icon {
    font-size: 4rem;
    color: #cbd5e1;
    margin-bottom: 20px;
}

.empty-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    color: #1e293b;
    margin-bottom: 10px;
}

.empty-message {
    font-size: 1.1rem;
    max-width: 500px;
    margin: 0 auto;
}

/* Responsive Design */
@media (max-width: 768px) {
    .news-hero {
        height: 50vh;
        margin-top: 70px;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .news-article.featured {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .featured-image img {
        height: 300px;
    }
    
    .featured-content {
        padding: 30px 25px;
    }
    
    .news-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }
    
    .gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        padding: 0 20px;
    }
}

@media (max-width: 480px) {
    .news-main {
        padding: 60px 0;
    }
    
    .article-content {
        padding: 20px;
    }
    
    .featured-content {
        padding: 25px 20px;
    }
    
    .image-gallery {
        margin: 40px 0;
        padding: 40px 0;
    }
}






</style>

<!-- Hero Section -->
<section class="news-hero">
    <div class="hero-content">
        <h1 class="hero-title">Tin Tức & Hoạt Động</h1>
        <p class="hero-subtitle">Cập nhật những thông tin mới nhất từ Hand in Hand Foundation - Mang yêu thương đến những trái tim nhỏ</p>
    </div>
</section>

<!-- Main Content -->
<section class="news-main">
    <div class="news-container">
        <div class="news-grid">
            <?php
            // Query để lấy tin tức
            $news_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 10,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            
            if ($news_query->have_posts()) :
                $post_count = 0;
                while ($news_query->have_posts()) : $news_query->the_post();
                    $categories = get_the_category();
                    $category_name = !empty($categories) ? $categories[0]->name : 'Tin tức';
                    $post_count++;
                    
                    // First post as featured
                    $is_featured = ($post_count === 1);
                    ?>
                    <article class="news-article <?php echo $is_featured ? 'featured' : ''; ?>">
                        <!-- Article Image -->
                        <?php if ($is_featured) : ?>
                            <div class="featured-image">
                        <?php else : ?>
                            <div class="article-image">
                        <?php endif; ?>
                            
                            <div class="category-badge"><?php echo esc_html($category_name); ?></div>
                            
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), $is_featured ? 'large' : 'medium'); ?>" 
                                     alt="<?php the_title_attribute(); ?>" loading="lazy">
                            <?php else : ?>
                                <div class="image-placeholder">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Article Content -->
                        <?php if ($is_featured) : ?>
                            <div class="featured-content">
                        <?php else : ?>
                            <div class="article-content">
                        <?php endif; ?>
                            
                            <div class="article-meta">
                                <span class="article-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <?php echo get_the_date('d/m/Y'); ?>
                                </span>
                                <span class="article-author">
                                    <i class="fas fa-user"></i>
                                    <?php the_author(); ?>
                                </span>
                            </div>
                            
                            <h2 class="article-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            
                            <div class="article-excerpt">
                                <?php 
                                $excerpt = get_the_excerpt();
                                $word_count = $is_featured ? 30 : 20;
                                if ($excerpt) {
                                    echo wp_trim_words($excerpt, $word_count, '...');
                                } else {
                                    echo wp_trim_words(get_the_content(), $word_count, '...');
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
                wp_reset_postdata();
            else :
                ?>
                <div class="empty-state">
                    <div class="empty-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3 class="empty-title">Chưa có tin tức nào</h3>
                    <p class="empty-message">Hiện tại chưa có bài viết nào được đăng. Hãy quay lại sau để xem những câu chuyện cảm động từ Hand in Hand Foundation!</p>
                </div>
                <?php
            endif;
            ?>
        </div>
        
        <!-- Image Gallery Section -->
        <div class="image-gallery">
            <div class="gallery-header">
                <h3 class="gallery-title">Hình Ảnh Hoạt Động</h3>
                <p class="gallery-subtitle">Những khoảnh khắc đáng nhớ trong các chương trình của chúng tôi</p>
            </div>
            
            <div class="gallery-grid">
                <?php
                // Tạo gallery với hình ảnh mẫu đẹp
                $sample_images = array(
                    'https://images.unsplash.com/photo-1559027615-cd4628902d4a?q=80&w=1000&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=1000&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1000&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1497486751825-1233686d5d80?q=80&w=1000&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?q=80&w=1000&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1612198188060-c7c2a3b66eae?q=80&w=1000&auto=format&fit=crop'
                );
                
                $gallery_titles = array(
                    'Chăm sóc trẻ em đặc biệt',
                    'Hoạt động giáo dục',
                    'Trị liệu phục hồi chức năng',
                    'Hỗ trợ gia đình',
                    'Đào tạo chuyên môn',
                    'Cộng đồng yêu thương'
                );
                
                foreach($sample_images as $index => $image_url) :
                ?>
                    <div class="gallery-item" onclick="openImageModal('<?php echo $image_url; ?>', '<?php echo $gallery_titles[$index]; ?>')">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $gallery_titles[$index]; ?>" loading="lazy">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Image Modal -->
<div id="imageModal" class="image-modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img id="modalImage" src="" alt="">
        <div class="modal-caption" id="modalCaption"></div>
    </div>
</div>

<style>
/* Image Modal Styles */
.image-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.9);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.image-modal.show {
    opacity: 1;
    visibility: visible;
}

.modal-content {
    position: relative;
    max-width: 90vw;
    max-height: 90vh;
    text-align: center;
}

.modal-content img {
    max-width: 100%;
    max-height: 80vh;
    border-radius: 10px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.5);
}

.close-modal {
    position: absolute;
    top: -40px;
    right: -10px;
    color: white;
    font-size: 2rem;
    cursor: pointer;
    z-index: 10000;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    transition: background 0.3s ease;
}

.close-modal:hover {
    background: rgba(255,255,255,0.3);
}

.modal-caption {
    color: white;
    font-size: 1.2rem;
    margin-top: 20px;
    padding: 10px;
    background: rgba(0,0,0,0.7);
    border-radius: 8px;
    font-family: 'Inter', sans-serif;
}
</style>

<script>
// Image Modal Functions
function openImageModal(imageSrc, caption) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const modalCaption = document.getElementById('modalCaption');
    
    modal.style.display = 'flex';
    setTimeout(() => {
        modal.classList.add('show');
    }, 10);
    
    modalImg.src = imageSrc;
    modalCaption.textContent = caption;
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.remove('show');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 300);
}

// Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    // Close modal events
    const closeBtn = document.querySelector('.close-modal');
    const modal = document.getElementById('imageModal');
    
    if (closeBtn) {
        closeBtn.addEventListener('click', closeImageModal);
    }
    
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });
    }
    
    // Escape key to close modal
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeImageModal();
        }
    });
    
    // Smooth scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe articles for animation
    document.querySelectorAll('.news-article').forEach((article, index) => {
        article.style.opacity = '0';
        article.style.transform = 'translateY(50px)';
        article.style.transition = `all 0.6s ease ${index * 0.1}s`;
        observer.observe(article);
    });
    
    // Observe gallery items
    document.querySelectorAll('.gallery-item').forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = `all 0.5s ease ${index * 0.05}s`;
        observer.observe(item);
    });
    
    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Add hover effects to gallery items
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05) translateY(-5px)';
            this.style.boxShadow = '0 15px 30px rgba(0,0,0,0.2)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) translateY(0)';
            this.style.boxShadow = 'none';
        });
    });
});

// Smooth scroll for anchor links
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

// Add loading animation to read more buttons
document.querySelectorAll('.read-more-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        const icon = this.querySelector('i');
        if (icon) {
            icon.className = 'fas fa-spinner fa-spin';
            setTimeout(() => {
                icon.className = 'fas fa-arrow-right';
            }, 1000);
        }
    });
});
</script>

<?php get_footer(); ?>
