<?php
/**
 * Template Name: Tin Tức
 * Description: Template tin tức mới với hình ảnh đẹp mắt
 * Last Updated: <?php echo date('Y-m-d H:i:s'); ?> - Cleaned version
 */

get_header(); ?>

<!-- Force refresh cache -->
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

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

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(74, 159, 165, 0.8), rgba(230, 57, 70, 0.8));
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-overlay i {
    font-size: 2rem;
    margin-bottom: 10px;
}

.gallery-overlay p {
    font-size: 0.9rem;
    text-align: center;
    margin: 0;
    padding: 0 10px;
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

/* Director Training Modal Styles */
#modalDirectorTraining .modal-content-news {
    background: linear-gradient(135deg, #f8f4ff 0%, #ffffff 100%);
}

#modalDirectorTraining .modal-header {
    background: linear-gradient(135deg, #8b5cf6, #a855f7);
    color: white;
    padding: 30px;
    border-radius: 20px 20px 0 0;
}

#modalDirectorTraining .modal-header h2 {
    color: white;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

#modalDirectorTraining .modal-date {
    color: rgba(255,255,255,0.9);
    font-size: 1.1rem;
}

/* Achievement Statistics */
.achievement-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.stat-item {
    background: linear-gradient(135deg, #8b5cf6, #a855f7);
    color: white;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    transition: transform 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
}

.stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: bold;
    color: #fbbf24;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.stat-label {
    display: block;
    font-size: 1.1rem;
    font-weight: 600;
    margin: 10px 0 5px 0;
}

.stat-description {
    display: block;
    font-size: 0.9rem;
    opacity: 0.9;
    line-height: 1.4;
}

/* Leadership Qualities */
.leadership-qualities {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.quality-item {
    background: white;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.quality-item:hover {
    border-color: #8b5cf6;
    box-shadow: 0 10px 25px rgba(139, 92, 246, 0.15);
    transform: translateY(-3px);
}

.quality-icon {
    font-size: 2rem;
    background: linear-gradient(135deg, #8b5cf6, #a855f7);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.quality-item h4 {
    color: #8b5cf6;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.quality-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Program Info */
.impact-program-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.program-item {
    background: linear-gradient(135deg, #f3f4f6, #ffffff);
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.program-item:hover {
    border-color: #8b5cf6;
    background: linear-gradient(135deg, #f8f4ff, #ffffff);
    box-shadow: 0 8px 20px rgba(139, 92, 246, 0.1);
}

.program-icon {
    font-size: 1.8rem;
    background: linear-gradient(135deg, #8b5cf6, #a855f7);
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.program-item h4 {
    color: #1e293b;
    font-size: 1rem;
    margin-bottom: 5px;
}

.program-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Developers Info */
.program-developers {
    background: linear-gradient(135deg, #f8f4ff, #ffffff);
    border-radius: 15px;
    padding: 25px;
    margin: 30px 0;
    border: 2px solid #e5e7eb;
}

.developer-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 15px;
}

.developer-item {
    background: white;
    padding: 20px;
    border-radius: 10px;
    border: 1px solid #e5e7eb;
    text-align: center;
    transition: all 0.3s ease;
}

.developer-item:hover {
    border-color: #8b5cf6;
    box-shadow: 0 5px 15px rgba(139, 92, 246, 0.1);
}

.developer-item h4 {
    color: #8b5cf6;
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.developer-item p {
    color: #64748b;
    font-size: 0.9rem;
}

/* Video Section */
.video-section {
    margin: 30px 0;
}

.video-container {
    max-width: 500px;
    margin: 0 auto;
}

.video-link {
    display: block;
    text-decoration: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.video-link:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
}

.video-thumbnail {
    background: linear-gradient(135deg, #8b5cf6, #a855f7);
    color: white;
    padding: 30px;
    text-align: center;
    position: relative;
}

.play-button {
    background: rgba(255,255,255,0.2);
    border: 3px solid white;
    border-radius: 50%;
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px auto;
    font-size: 2rem;
    transition: all 0.3s ease;
}

.video-link:hover .play-button {
    background: rgba(255,255,255,0.3);
    transform: scale(1.1);
}

.video-info h4 {
    color: white;
    font-size: 1.2rem;
    margin-bottom: 8px;
}

.video-info p {
    color: rgba(255,255,255,0.9);
    font-size: 0.9rem;
}

/* Foundation Pride */
.foundation-pride {
    background: linear-gradient(135deg, #8b5cf6, #a855f7);
    color: white;
    padding: 30px;
    border-radius: 15px;
    margin: 30px 0;
    text-align: center;
}

.foundation-pride h3 {
    color: white;
    margin-bottom: 15px;
}

.pride-text {
    font-size: 1.1rem;
    line-height: 1.6;
    font-style: italic;
}

/* Training Gallery */
.training-gallery .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.training-gallery .gallery-item {
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: all 0.3s ease;
}

.training-gallery .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(139, 92, 246, 0.3);
}

.training-gallery .gallery-overlay {
    background: linear-gradient(135deg, rgba(139, 92, 246, 0.9), rgba(168, 85, 247, 0.9));
}

/* Responsive Design for Director Training */
@media (max-width: 768px) {
    .achievement-stats {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .leadership-qualities {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .impact-program-info {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .developer-info {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .stat-number {
        font-size: 2rem;
    }
    
    .play-button {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
    
    .training-gallery .gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }
}

/* Autism Awareness Message 2024 Modal Styles */
#modalAutismMessage2024 .modal-content-news {
    background: linear-gradient(135deg, #f0f8ff 0%, #ffffff 100%);
}

#modalAutismMessage2024 .modal-header {
    background: linear-gradient(135deg, #4090ff, #1e73e8);
    color: white;
    padding: 30px;
    border-radius: 20px 20px 0 0;
}

#modalAutismMessage2024 .modal-header h2 {
    color: white;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

#modalAutismMessage2024 .modal-date {
    color: rgba(255,255,255,0.9);
    font-size: 1.1rem;
}

/* Message Intro */
.message-intro {
    margin-bottom: 30px;
}

.main-message {
    background: linear-gradient(135deg, #e3f2fd, #f8fbff);
    border-left: 4px solid #4090ff;
    padding: 25px;
    border-radius: 12px;
    margin: 20px 0;
}

.main-message blockquote {
    margin: 0;
    font-style: italic;
    font-size: 1.2rem;
    line-height: 1.6;
    color: #1565c0;
}

.main-message blockquote p {
    margin-bottom: 10px;
    font-weight: 500;
}

/* Foundation Mission */
.foundation-mission {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.mission-item {
    background: white;
    border: 2px solid #e3f2fd;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.mission-item:hover {
    border-color: #4090ff;
    box-shadow: 0 10px 25px rgba(64, 144, 255, 0.15);
    transform: translateY(-3px);
}

.mission-icon {
    font-size: 2rem;
    background: linear-gradient(135deg, #4090ff, #1e73e8);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.mission-item h4 {
    color: #4090ff;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.mission-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Emotional Sharing */
.emotional-sharing {
    background: linear-gradient(135deg, #f8fbff, #ffffff);
    border-radius: 15px;
    padding: 25px;
    margin: 30px 0;
    border: 2px solid #e3f2fd;
}

.emotional-sharing h4 {
    color: #4090ff;
    margin-bottom: 20px;
    font-size: 1.2rem;
}

.teacher-message {
    background: white;
    border-radius: 12px;
    padding: 20px;
    border: 1px solid #e3f2fd;
}

.teacher-info {
    text-align: center;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #e3f2fd;
}

.teacher-info strong {
    color: #1565c0;
    font-size: 1.1rem;
}

.poem-section {
    margin-top: 20px;
}

.poem-intro {
    font-style: italic;
    color: #64748b;
    margin-bottom: 20px;
    text-align: center;
}

.poem-content {
    background: linear-gradient(135deg, #f0f8ff, #ffffff);
    padding: 25px;
    border-radius: 10px;
    border-left: 4px solid #4090ff;
}

.poem-stanza {
    margin-bottom: 20px;
    padding: 15px;
    background: rgba(64, 144, 255, 0.05);
    border-radius: 8px;
}

.poem-stanza p {
    margin-bottom: 5px;
    font-style: italic;
    color: #1565c0;
    line-height: 1.6;
    font-size: 1rem;
}

.poem-stanza:last-child {
    margin-bottom: 0;
}

/* Early Intervention */
.early-intervention {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.intervention-item {
    background: linear-gradient(135deg, #f3f4f6, #ffffff);
    border: 2px solid #e3f2fd;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.intervention-item:hover {
    border-color: #4090ff;
    background: linear-gradient(135deg, #f0f8ff, #ffffff);
    box-shadow: 0 8px 20px rgba(64, 144, 255, 0.1);
}

.intervention-icon {
    font-size: 1.8rem;
    background: linear-gradient(135deg, #4090ff, #1e73e8);
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.intervention-item h4 {
    color: #1565c0;
    font-size: 1rem;
    margin-bottom: 5px;
}

.intervention-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Call to Action */
.call-to-action {
    background: linear-gradient(135deg, #4090ff, #1e73e8);
    color: white;
    padding: 30px;
    border-radius: 15px;
    margin: 30px 0;
    text-align: center;
}

.call-to-action p {
    color: white;
    font-size: 1.1rem;
    margin-bottom: 25px;
}

.action-items {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin-top: 20px;
}

.action-item {
    background: rgba(255, 255, 255, 0.1);
    padding: 15px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
}

.action-item:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
}

.action-icon {
    font-size: 1.5rem;
}

.action-item p {
    margin: 0;
    font-size: 0.9rem;
    text-align: left;
}

/* Final Message */
.final-message {
    background: linear-gradient(135deg, #f8fbff, #ffffff);
    border-radius: 15px;
    padding: 25px;
    margin: 30px 0;
    border: 2px solid #e3f2fd;
    text-align: center;
}

.final-message h3 {
    color: #4090ff;
    margin-bottom: 20px;
}

.quote-section blockquote {
    background: white;
    padding: 20px;
    border-radius: 10px;
    border-left: 4px solid #4090ff;
    font-style: italic;
    margin: 0;
}

.quote-section blockquote p {
    color: #1565c0;
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 15px;
}

.quote-section cite {
    color: #64748b;
    font-weight: 600;
}

/* Awareness Gallery */
.awareness-gallery .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.awareness-gallery .gallery-item {
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: all 0.3s ease;
}

.awareness-gallery .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(64, 144, 255, 0.3);
}

.awareness-gallery .gallery-overlay {
    background: linear-gradient(135deg, rgba(64, 144, 255, 0.9), rgba(30, 115, 232, 0.9));
}

/* Responsive Design for Autism Message */
@media (max-width: 768px) {
    .foundation-mission {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .early-intervention {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .action-items {
        grid-template-columns: 1fr;
        gap: 10px;
    }
    
    .main-message blockquote {
        font-size: 1.1rem;
    }
    
    .poem-stanza p {
        font-size: 0.95rem;
    }
    
    .awareness-gallery .gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }
}

/* Official License 2023 Modal Styles */
#modalOfficialLicense2023 .modal-content-news {
    background: linear-gradient(135deg, #f0fff4 0%, #ffffff 100%);
}

#modalOfficialLicense2023 .modal-header {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    padding: 30px;
    border-radius: 20px 20px 0 0;
}

#modalOfficialLicense2023 .modal-header h2 {
    color: white;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

#modalOfficialLicense2023 .modal-date {
    color: rgba(255,255,255,0.9);
    font-size: 1.1rem;
}

/* Milestone Intro */
.milestone-intro {
    margin-bottom: 30px;
}

.milestone-highlight {
    background: linear-gradient(135deg, #ecfdf5, #f0fdf4);
    border-left: 4px solid #10b981;
    padding: 25px;
    border-radius: 12px;
    margin: 20px 0;
}

.milestone-highlight h4 {
    color: #047857;
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.milestone-highlight p {
    color: #065f46;
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
}

/* License Significance */
.license-significance {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.significance-item {
    background: white;
    border: 2px solid #d1fae5;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.significance-item:hover {
    border-color: #10b981;
    box-shadow: 0 10px 25px rgba(16, 185, 129, 0.15);
    transform: translateY(-3px);
}

.significance-icon {
    font-size: 2rem;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.significance-item h4 {
    color: #10b981;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.significance-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Gratitude Section */
.gratitude-section {
    background: linear-gradient(135deg, #f0fdf4, #ffffff);
    border-radius: 15px;
    padding: 25px;
    margin: 30px 0;
    border: 2px solid #d1fae5;
}

.gratitude-item {
    background: white;
    border: 1px solid #d1fae5;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 15px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.gratitude-item:last-child {
    margin-bottom: 0;
}

.gratitude-item:hover {
    border-color: #10b981;
    box-shadow: 0 5px 15px rgba(16, 185, 129, 0.1);
}

.gratitude-icon {
    font-size: 1.8rem;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.gratitude-item h4 {
    color: #047857;
    font-size: 1rem;
    margin-bottom: 5px;
}

.gratitude-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

.special-thanks {
    background: rgba(16, 185, 129, 0.05);
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    font-style: italic;
    text-align: center;
    border-left: 4px solid #10b981;
}

.special-thanks p {
    color: #047857;
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
}

/* Pride Highlight */
.pride-highlight {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    padding: 25px;
    border-radius: 15px;
    margin: 20px 0;
    text-align: center;
}

.pride-highlight h4 {
    color: white;
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.pride-highlight p {
    color: white;
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
}

/* Future Commitments */
.future-commitments {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 25px 0;
}

.commitment-item {
    background: linear-gradient(135deg, #f3f4f6, #ffffff);
    border: 2px solid #d1fae5;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.commitment-item:hover {
    border-color: #10b981;
    background: linear-gradient(135deg, #f0fdf4, #ffffff);
    box-shadow: 0 8px 20px rgba(16, 185, 129, 0.1);
}

.commitment-icon {
    font-size: 1.8rem;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.commitment-item h4 {
    color: #047857;
    font-size: 1rem;
    margin-bottom: 5px;
}

.commitment-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* License Timeline */
.license-timeline {
    background: linear-gradient(135deg, #f0fdf4, #ffffff);
    border-radius: 15px;
    padding: 25px;
    margin: 30px 0;
    border: 2px solid #d1fae5;
}

.license-timeline h3 {
    color: #047857;
    margin-bottom: 25px;
    text-align: center;
}

.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 15px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(135deg, #10b981, #059669);
}

.timeline-item {
    position: relative;
    margin-bottom: 30px;
    background: white;
    border-radius: 10px;
    padding: 20px;
    border: 1px solid #d1fae5;
    transition: all 0.3s ease;
}

.timeline-item:hover {
    border-color: #10b981;
    box-shadow: 0 5px 15px rgba(16, 185, 129, 0.1);
}

.timeline-marker {
    position: absolute;
    left: -37px;
    top: 25px;
    width: 30px;
    height: 30px;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.9rem;
}

.timeline-content h4 {
    color: #047857;
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.timeline-content p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
    margin: 0;
}

/* Closing Message */
.closing-message {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    padding: 30px;
    border-radius: 15px;
    margin: 30px 0;
    text-align: center;
}

.closing-message h3 {
    color: white;
    margin-bottom: 20px;
}

.final-thanks p {
    color: white;
    font-size: 1.1rem;
    margin-bottom: 20px;
}

.heart-message {
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
}

.heart-message p {
    color: white;
    font-style: italic;
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
}

/* License Gallery */
.license-gallery .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.license-gallery .gallery-item {
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: all 0.3s ease;
}

.license-gallery .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(16, 185, 129, 0.3);
}

.license-gallery .gallery-overlay {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.9), rgba(5, 150, 105, 0.9));
}

/* Responsive Design for License Modal */
@media (max-width: 768px) {
    .license-significance {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .future-commitments {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .timeline {
        padding-left: 25px;
    }
    
    .timeline-marker {
        left: -32px;
        width: 25px;
        height: 25px;
        font-size: 0.8rem;
    }
    
    .license-gallery .gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }
}

/* Facility 2 Inauguration Modal Styles */
#modalFacility2Inauguration .modal-content-news {
    background: linear-gradient(135deg, #fff7ed 0%, #ffffff 100%);
}

#modalFacility2Inauguration .modal-header {
    background: linear-gradient(135deg, #f59731, #ea580c);
    color: white;
    padding: 30px;
    border-radius: 20px 20px 0 0;
}

#modalFacility2Inauguration .modal-header h2 {
    color: white;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

#modalFacility2Inauguration .modal-date {
    color: rgba(255,255,255,0.9);
    font-size: 1.1rem;
}

/* Development Intro */
.development-intro {
    background: linear-gradient(135deg, #fed7aa, #fff7ed);
    border-left: 4px solid #f59731;
    padding: 25px;
    border-radius: 12px;
    margin: 20px 0;
}

.development-intro h3 {
    color: #ea580c;
    margin-bottom: 15px;
}

/* Facility 1 Info */
.facility1-info, .facility1-services {
    background: linear-gradient(135deg, #fff7ed, #ffffff);
    border-radius: 15px;
    padding: 25px;
    margin: 25px 0;
    border: 2px solid #fed7aa;
}

.facility1-info h4, .facility1-services h4 {
    color: #f59731;
    margin-bottom: 15px;
}

/* Specialization List */
.specialization-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.spec-item {
    background: white;
    border: 2px solid #fed7aa;
    border-radius: 10px;
    padding: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
}

.spec-item:hover {
    border-color: #f59731;
    box-shadow: 0 5px 15px rgba(245, 151, 49, 0.15);
    transform: translateY(-2px);
}

.spec-icon {
    font-size: 1.5rem;
}

/* Service Options */
.service-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 20px 0;
}

.service-item {
    background: white;
    border: 2px solid #fed7aa;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.service-item:hover {
    border-color: #f59731;
    box-shadow: 0 8px 20px rgba(245, 151, 49, 0.15);
    transform: translateY(-3px);
}

.service-icon {
    font-size: 2rem;
    background: linear-gradient(135deg, #f59731, #ea580c);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.service-item h4 {
    color: #f59731;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.service-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Assessment Service */
.assessment-service {
    background: rgba(245, 151, 49, 0.05);
    border-radius: 12px;
    padding: 20px;
    margin-top: 20px;
}

.assessment-philosophy blockquote {
    background: linear-gradient(135deg, #f59731, #ea580c);
    color: white;
    padding: 20px;
    border-radius: 10px;
    margin: 15px 0;
    font-style: italic;
    text-align: center;
}

.assessment-philosophy blockquote p {
    color: white;
    margin: 0;
    font-size: 1.1rem;
}

/* Training Activities */
.training-activities {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 25px 0;
}

.training-item {
    background: linear-gradient(135deg, #f3f4f6, #ffffff);
    border: 2px solid #fed7aa;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.training-item:hover {
    border-color: #f59731;
    background: linear-gradient(135deg, #fff7ed, #ffffff);
    box-shadow: 0 8px 20px rgba(245, 151, 49, 0.1);
}

.training-icon {
    font-size: 1.8rem;
    background: linear-gradient(135deg, #f59731, #ea580c);
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.training-item h4 {
    color: #ea580c;
    font-size: 1rem;
    margin-bottom: 5px;
}

.training-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Facility 2 Background */
.facility2-background {
    background: linear-gradient(135deg, #fff7ed, #ffffff);
    border-radius: 15px;
    padding: 25px;
    margin: 25px 0;
    border: 2px solid #fed7aa;
}

.mission-statement {
    background: linear-gradient(135deg, #f59731, #ea580c);
    color: white;
    padding: 25px;
    border-radius: 12px;
    margin: 20px 0;
    text-align: center;
}

.mission-statement blockquote {
    margin: 0;
}

.mission-statement blockquote p {
    color: white;
    margin-bottom: 10px;
    font-size: 1rem;
}

.mission-statement blockquote p:last-child {
    font-size: 1.2rem;
    font-weight: 600;
}

/* Facility Info Grid */
.facility-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 25px 0;
}

.info-item {
    background: white;
    border: 2px solid #fed7aa;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.info-item:hover {
    border-color: #f59731;
    box-shadow: 0 8px 20px rgba(245, 151, 49, 0.15);
    transform: translateY(-3px);
}

.info-icon {
    font-size: 2rem;
    background: linear-gradient(135deg, #f59731, #ea580c);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.info-item h4 {
    color: #f59731;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.info-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Program Design */
.program-design {
    background: rgba(245, 151, 49, 0.05);
    border-radius: 12px;
    padding: 20px;
    margin-top: 20px;
    border-left: 4px solid #f59731;
}

.program-design h4 {
    color: #ea580c;
    margin-bottom: 10px;
}

/* Future Goals */
.future-goals {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin: 25px 0;
}

.goal-item {
    background: linear-gradient(135deg, #f3f4f6, #ffffff);
    border: 2px solid #fed7aa;
    border-radius: 12px;
    padding: 25px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.goal-item:hover {
    border-color: #f59731;
    background: linear-gradient(135deg, #fff7ed, #ffffff);
    box-shadow: 0 10px 25px rgba(245, 151, 49, 0.15);
    transform: translateY(-3px);
}

.goal-icon {
    font-size: 2rem;
    background: linear-gradient(135deg, #f59731, #ea580c);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.goal-item h4 {
    color: #ea580c;
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.goal-item p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Development Timeline */
.development-timeline {
    background: linear-gradient(135deg, #fff7ed, #ffffff);
    border-radius: 15px;
    padding: 25px;
    margin: 30px 0;
    border: 2px solid #fed7aa;
}

.development-timeline h3 {
    color: #ea580c;
    margin-bottom: 25px;
    text-align: center;
}

.development-timeline .timeline {
    position: relative;
    padding-left: 40px;
}

.development-timeline .timeline::before {
    content: '';
    position: absolute;
    left: 20px;
    top: 0;
    bottom: 0;
    width: 3px;
    background: linear-gradient(135deg, #f59731, #ea580c);
}

.development-timeline .timeline-item {
    position: relative;
    margin-bottom: 30px;
    background: white;
    border-radius: 12px;
    padding: 20px;
    border: 2px solid #fed7aa;
    transition: all 0.3s ease;
}

.development-timeline .timeline-item:hover {
    border-color: #f59731;
    box-shadow: 0 8px 20px rgba(245, 151, 49, 0.15);
    transform: translateX(5px);
}

.development-timeline .timeline-year {
    position: absolute;
    left: -55px;
    top: 25px;
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, #f59731, #ea580c);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.9rem;
}

.development-timeline .timeline-content h4 {
    color: #ea580c;
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.development-timeline .timeline-content p {
    color: #64748b;
    font-size: 0.95rem;
    line-height: 1.4;
    margin: 0;
}

/* Closing Message */
.closing-message {
    background: linear-gradient(135deg, #f59731, #ea580c);
    color: white;
    padding: 30px;
    border-radius: 15px;
    margin: 30px 0;
    text-align: center;
}

.closing-message h3 {
    color: white;
    margin-bottom: 20px;
}

.final-message blockquote {
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    margin: 15px 0;
    border-left: 4px solid white;
}

.final-message blockquote p {
    color: white;
    font-size: 1.2rem;
    margin: 0;
    font-weight: 600;
}

.final-message p {
    color: white;
    font-style: italic;
    font-size: 1rem;
    line-height: 1.6;
    margin-top: 15px;
}

/* Inauguration Gallery */
.inauguration-gallery .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.inauguration-gallery .gallery-item {
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: all 0.3s ease;
}

.inauguration-gallery .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(245, 151, 49, 0.3);
}

.inauguration-gallery .gallery-overlay {
    background: linear-gradient(135deg, rgba(245, 151, 49, 0.9), rgba(234, 88, 12, 0.9));
}

/* Responsive Design for Facility 2 Modal */
@media (max-width: 768px) {
    .specialization-list {
        grid-template-columns: 1fr;
        gap: 10px;
    }
    
    .service-options {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .training-activities {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .facility-info-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .future-goals {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .development-timeline .timeline {
        padding-left: 30px;
    }
    
    .development-timeline .timeline-year {
        left: -45px;
        width: 35px;
        height: 35px;
        font-size: 0.8rem;
    }
    
    .inauguration-gallery .gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
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
            <!-- Hand in Hand Facility 2 Inauguration September 2025 -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">🏢 Mở rộng phát triển</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.jpg" 
                         alt="Hand in Hand khánh thành Cơ sở 2 tại phía Bắc Nha Trang" loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGRkY3RUQiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNTAiIHI9IjM1IiBmaWxsPSIjRjU5NzMxIi8+PHRleHQgeD0iMjAwIiB5PSIxNjUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMjQiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0id2hpdGUiPvCfj4I8L3RleHQ+PC9zdmc+'">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            Tháng 9/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-building"></i>
                            Cơ sở 2 - Phía Bắc Nha Trang
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalFacility2Inauguration'); return false;">🏢 Hand in Hand khánh thành Cơ sở 2 tại phía Bắc Nha Trang – Tháng 9/2025</a>
                    </h2>
                    <div class="article-excerpt">
                        Hành trình phát triển vì trẻ có nhu cầu đặc biệt đạt cột mốc mới với việc khánh thành Cơ sở 2. Diện tích gần 2.000m², 16 phòng học và chức năng, đón nhận trẻ từ 18 tháng đến 12 tuổi...
                    </div>
                    <a href="#" onclick="openModal('modalFacility2Inauguration'); return false;" class="read-more-btn">
                        <i class="fas fa-home"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- Hand in Hand Foundation Official License 2023 -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">🏛️ Cột mốc lịch sử</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/81.png" 
                         alt="Hand in Hand Foundation chính thức được cấp phép hoạt động giáo dục" loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGMEZGRjQiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNTAiIHI9IjM1IiBmaWxsPSIjMTBCOTgxIi8+PHRleHQgeD0iMjAwIiB5PSIxNjUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMjQiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0id2hpdGUiPvCfj7Y8L3RleHQ+PC9zdmc+'">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            Ngày 20/11/2023
                        </span>
                        <span class="article-author">
                            <i class="fas fa-certificate"></i>
                            Sở GD&ĐT Khánh Hòa
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalOfficialLicense2023'); return false;">🏛️ Hand in Hand Foundation chính thức được cấp phép hoạt động giáo dục – 2023</a>
                    </h2>
                    <div class="article-excerpt">
                        Niềm vui như được nhân đôi trong dịp Ngày Nhà giáo Việt Nam 20/11/2023, khi Hand in Hand Foundation chính thức được Sở Giáo dục và Đào tạo tỉnh Khánh Hòa ban hành Quyết định cho phép hoạt động giáo dục...
                    </div>
                    <a href="#" onclick="openModal('modalOfficialLicense2023'); return false;" class="read-more-btn">
                        <i class="fas fa-scroll"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- World Autism Awareness Day 2024 Message -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">💙 Thông điệp nhận thức tự kỷ</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/63.png" 
                         alt="Thông điệp từ Hand in Hand Foundation về Ngày Thế giới Nhận thức Tự kỷ" loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGMEY4RkYiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNTAiIHI9IjM1IiBmaWxsPSIjNDA5MEZGIi8+PHRleHQgeD0iMjAwIiB5PSIxNjUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMjQiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0id2hpdGUiPvCfkZQ8L3RleHQ+PC9zdmc+'">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            Ngày 2/4/2024
                        </span>
                        <span class="article-author">
                            <i class="fas fa-heart"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalAutismMessage2024'); return false;">💙 "Hãy cho em cơ hội được phát triển trong giai đoạn vàng – Để không một trẻ em nào bị bỏ lại phía sau"</a>
                    </h2>
                    <div class="article-excerpt">
                        Hưởng ứng "Ngày Thế giới Nhận thức về Hội chứng Tự kỷ – 2/4", tập thể giáo viên Hand in Hand Foundation đã cùng nhau gửi gắm thông điệp nhân văn về quyền được giáo dục của trẻ có nhu cầu đặc biệt...
                    </div>
                    <a href="#" onclick="openModal('modalAutismMessage2024'); return false;" class="read-more-btn">
                        <i class="fas fa-hands-helping"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- Director's Project ImPACT Training Achievement -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">🎓 Đào tạo chuyên môn</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/78.png" 
                         alt="Thạc sĩ Đỗ Thị Hiền tại khóa đào tạo Project ImPACT" loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGNUY0RkYiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNTAiIHI9IjM1IiBmaWxsPSIjOEM1NEY1Ii8+PHRleHQgeD0iMjAwIiB5PSIxNjUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMjQiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0id2hpdGUiPvCfj6Y8L3RleHQ+PC9zdmc+'">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            Tháng 5/2024
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalDirectorTraining'); return false;">🎓 Hand in Hand Foundation tự hào về hành trình học tập của Giám đốc – Thạc sĩ Đỗ Thị Hiền</a>
                    </h2>
                    <div class="article-excerpt">
                        Thạc sĩ Đỗ Thị Hiền – Giám đốc Hand in Hand Foundation vinh dự trở thành 1 trong 26 chuyên gia được lựa chọn tham gia khóa đào tạo cấp cao Project ImPACT do Project Vietnam Foundation tổ chức...
                    </div>
                    <a href="#" onclick="openModal('modalDirectorTraining'); return false;" class="read-more-btn">
                        <i class="fas fa-graduation-cap"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- Teachers' Day Creative Contest News -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">🏆 Cuộc thi sáng tạo</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/71.png" 
                         alt="Cuộc thi Sáng tạo đồ dùng dạy học nhân ngày 20/11" loading="lazy" 
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGRkY5RTYiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSIjRkZENzAwIi8+PHRleHQgeD0iMjAwIiB5PSIxODAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMTAiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0iIzY2NiI+Q3Xhu5ljIHRoaSBzw6FuZyB04bqhbzwvdGV4dD48L3N2Zz4='>">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            20/11/2024
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalTeachersDay'); return false;">🏆 Hand in Hand triển khai cuộc thi "Sáng tạo đồ dùng dạy học"</a>
                    </h2>
                    <div class="article-excerpt">
                        Ngày 20/11/2024, nhân dịp Ngày Nhà giáo Việt Nam, Hand in Hand Foundation đã tổ chức cuộc thi "Sáng tạo đồ dùng dạy học" - sân chơi sáng tạo dành cho các giáo viên nhằm khuyến khích tự tay làm ra những đồ dùng dạy học trực quan, sinh động cho trẻ có nhu cầu đặc biệt...
                    </div>
                    <a href="#" onclick="openModal('modalTeachersDay'); return false;" class="read-more-btn">
                        <i class="fas fa-chalkboard-teacher"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- Project ImPACT News -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">👨‍👩‍👧‍👦 Chương trình đào tạo</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/70.png" 
                         alt="Project ImPACT - Chương trình đào tạo dành cho phụ huynh có con RLPTK" loading="lazy" 
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGRkZCRTkiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSIjRkY5ODAwIi8+PHRleHQgeD0iMjAwIiB5PSIxODAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMTAiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0iIzY2NiI+UHJvamVjdCBJbVBBQ1Q8L3RleHQ+PC9zdmc+'>">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            Từ tháng 3/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalProjectImPACT'); return false;">👨‍👩‍👧‍👦 Project ImPACT – Chương trình đào tạo dành cho phụ huynh có con RLPTK</a>
                    </h2>
                    <div class="article-excerpt">
                        Từ tháng 3/2025, Hand in Hand Foundation chính thức triển khai Project ImPACT như một chương trình đào tạo thường xuyên dành cho phụ huynh và các nhà chuyên môn đang đồng hành cùng trẻ rối loạn phổ tự kỷ (RLPTK) và trẻ chậm phát triển trí tuệ khác...
                    </div>
                    <a href="#" onclick="openModal('modalProjectImPACT'); return false;" class="read-more-btn">
                        <i class="fas fa-graduation-cap"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- World Autism Awareness Day News -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">💙 Ngày nhận thức tự kỷ</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/66.png" 
                         alt="Hưởng ứng Ngày 2/4 - Ngày Thế giới Nhận thức về Tự kỷ" loading="lazy" 
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNFM0Y0RkYiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSIjMDA3NEQ5Ii8+PHRleHQgeD0iMjAwIiB5PSIxODAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMTAiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0iIzY2NiI+TmfDoHkgVOG6vyBrbeG7uSAyLzQ8L3RleHQ+PC9zdmc+'>">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            2/4/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Phan Thị Sen
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalAutismAwareness'); return false;">💙 Hưởng ứng Ngày 2/4 – "Ngày Thế giới Nhận thức về Tự kỷ"</a>
                    </h2>
                    <div class="article-excerpt">
                        Nhân "Ngày Thế giới Nhận thức về Tự kỷ" (2/4/2025), Hand in Hand Foundation đã tổ chức nhiều hoạt động ý nghĩa nhằm nâng cao nhận thức về chứng Rối loạn Phổ Tự kỷ, với thông điệp "Lan tỏa yêu thương, vì một thế giới bao dung hơn"...
                    </div>
                    <a href="#" onclick="openModal('modalAutismAwareness'); return false;" class="read-more-btn">
                        <i class="fas fa-puzzle-piece"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- Government Delegation Visit News -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">🏛️ Đoàn công tác chính phủ</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/64.png" 
                         alt="Đón tiếp đoàn công tác của Cục Nhà giáo và Cán bộ Quản lý Giáo dục" loading="lazy" 
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGRkY5RjAiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSIjRkY2NjAwIi8+PHRleHQgeD0iMjAwIiB5PSIxODAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMTIiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0iIzY2NiI+xJDDsm5nIGPDtG5nIHTDoWM8L3RleHQ+PC9zdmc+'>">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            9/4/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalGovernmentDelegation'); return false;">🏛️ Đón tiếp đoàn công tác của Cục Nhà giáo và Cán bộ Quản lý Giáo dục</a>
                    </h2>
                    <div class="article-excerpt">
                        Ngày 9/4/2025, Trung tâm Hand in Hand Foundation rất vinh dự được đón tiếp lãnh đạo Cục Nhà giáo và Cán bộ Quản lý Giáo dục – Bộ Giáo dục và Đào tạo, cùng đại diện Sở Giáo dục và Đào tạo tỉnh Khánh Hòa đến thăm và làm việc...
                    </div>
                    <a href="#" onclick="openModal('modalGovernmentDelegation'); return false;" class="read-more-btn">
                        <i class="fas fa-handshake"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- Alex Tuddenham Volunteer News -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">🇬🇧 Tình nguyện viên quốc tế</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/58.png" 
                         alt="Chào đón tình nguyện viên Alex Tuddenham từ Vương quốc Anh" loading="lazy" 
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNFRkY2RkYiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSIjMDA3NEQ5Ii8+PHRleHQgeD0iMjAwIiB5PSIxNDAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMTYiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0id2hpdGUiPkFsZXg8L3RleHQ+PHRleHQgeD0iMjAwIiB5PSIxODAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMTIiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0iIzY2NiI+VuC6o25nIHF14buRYyBBbmg8L3RleHQ+PC9zdmc+'" style="width: 100%; height: 400px; object-fit: cover;">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            Tuần 20/6/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalAlexVolunteer'); return false;">🇬🇧 Chào đón tình nguyện viên Alex Tuddenham từ Vương quốc Anh</a>
                    </h2>
                    <div class="article-excerpt">
                        Tuần qua (20/6/2025), Hand in Hand Foundation rất vinh dự được đón tiếp Alex Tuddenham – một tình nguyện viên trẻ đến từ Vương quốc Anh. Với nguồn năng lượng tích cực và sự ấm áp, Alex đã mang đến cho các em những giờ học đầy niềm vui...
                    </div>
                    <a href="#" onclick="openModal('modalAlexVolunteer'); return false;" class="read-more-btn">
                        <i class="fas fa-hands-helping"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- Mid-Autumn Festival News -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">🥮 Sự kiện mới nhất</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/51.png" 
                         alt="Trung Thu Rộn Ràng tại Hand in Hand" loading="lazy" 
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGRkY0RTAiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSIjRkY5OTAwIi8+PHRleHQgeD0iMjAwIiB5PSIxODAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMTQiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0iIzY2NiI+VHJ1bmcgVGh1IDIwMjU8L3RleHQ+PC9zdmc+'">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            6/10/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalTrungThu'); return false;">🥮 Trung Thu Rộn Ràng Tại Hand in Hand!</a>
                    </h2>
                    <div class="article-excerpt">
                        Ngày Thứ Hai, 6/10/2025, không khí Trung Thu ngập tràn niềm vui tại Trung tâm Hand in Hand – Cơ sở 1. Các bạn nhỏ đã cùng nhau làm bánh, múa lân, ca hát và phá cỗ trong bầu không khí náo nhiệt, đầy ắp tiếng cười...
                    </div>
                    <a href="#" onclick="openModal('modalTrungThu'); return false;" class="read-more-btn">
                        <i class="fas fa-moon"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- Animal Therapy News Articles -->
            <article class="news-article featured">
                <div class="featured-image">
                    <div class="category-badge">🐶 Tin nổi bật</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/45.png" 
                         alt="Động vật trị liệu - Sandra Veloso và chó Churro" loading="lazy" 
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGMEY4RkYiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxMjAiIHI9IjM1IiBmaWxsPSIjNjM2NkYxIi8+PHRleHQgeD0iMjAwIiB5PSIxODAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMTQiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0iIzY2NiI+xJDhu5luZyB24bqtdCB0cuG7iyBsaeG7h3U8L3RleHQ+PC9zdmc+'">
                </div>
                <div class="featured-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            4/10/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalAnimalTherapy'); return false;">🐶 Động vật trị liệu – Phương pháp thân thiện và hiệu quả dành cho trẻ rối loạn phổ tự kỷ</a>
                    </h2>
                    <div class="article-excerpt">
                        Trung tâm Hand in Hand Foundation đã tổ chức buổi tập huấn cơ bản về "Động vật trị liệu" cùng cô Sandra Veloso – chuyên gia quốc tế và là người bạn đồng hành thân thiết của trung tâm trong nhiều năm qua...
                    </div>
                    <a href="#" onclick="openModal('modalAnimalTherapy'); return false;" class="read-more-btn">
                        <i class="fas fa-paw"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <article class="news-article">
                <div class="article-image">
                    <div class="category-badge">🐾 Chương trình mới</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/17.jpg" 
                         alt="Hoạt động với Churro" loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGRkZCRjAiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNTAiIHI9IjMwIiBmaWxsPSIjRjU5NzMxIi8+PHRleHQgeD0iMjAwIiB5PSIxNjUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMzAiIGZpbGw9IndoaXRlIj7wn5C2PC90ZXh0Pjwvc3ZnPg=='">
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            1/10/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalChurro'); return false;">Gặp gỡ Churro - Bạn đồng hành đặc biệt</a>
                    </h2>
                    <div class="article-excerpt">
                        Từ tháng 10/2025, vào mỗi sáng thứ Tư và thứ Sáu, các bé tại Cơ sở 1 Hand in Hand Foundation sẽ được tham gia hoạt động trị liệu cùng chú chó Churro...
                    </div>
                    <a href="#" onclick="openModal('modalChurro'); return false;" class="read-more-btn">
                        <i class="fas fa-heart"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <article class="news-article">
                <div class="article-image">
                    <div class="category-badge">💚 Lợi ích</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/46.png" 
                         alt="Lợi ích động vật trị liệu" loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGMEZGRjQiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNTAiIHI9IjM1IiBmaWxsPSIjMTBCOTgxIi8+PHRleHQgeD0iMjAwIiB5PSIxNjUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMzAiIGZpbGw9IndoaXRlIj7wn5KaPC90ZXh0Pjwvc3ZnPg=='">
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            28/9/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Nghiên cứu khoa học
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalBenefits'); return false;">Lợi ích của động vật trị liệu cho trẻ tự kỷ</a>
                    </h2>
                    <div class="article-excerpt">
                        Nhiều nghiên cứu cho thấy sự hiện diện của động vật có thể giảm lo âu, tăng cường giao tiếp và phát triển kỹ năng xã hội cho trẻ rối loạn phổ tự kỷ...
                    </div>
                    <a href="#" onclick="openModal('modalBenefits'); return false;" class="read-more-btn">
                        <i class="fas fa-star"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <!-- New Projects from Images -->
            <article class="news-article">
                <div class="article-image">
                    <div class="category-badge">🏥 Dự án Y tế</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/48.png" 
                         alt="Phẫu thuật miễn phí cho 100 trẻ em bị dị tật bẩm sinh" loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGRkYwRjAiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNTAiIHI9IjM1IiBmaWxsPSIjRkY2RTZFIi8+PHRleHQgeD0iMjAwIiB5PSIxNjUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMjQiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0id2hpdGUiPvCfj6U8L3RleHQ+PC9zdmc+'">
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            29/09/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalSurgery'); return false;">Phẫu thuật miễn phí cho 100 trẻ em bị dị tật bẩm sinh</a>
                    </h2>
                    <div class="article-excerpt">
                        Chương trình "Mở tim cho em" đã thực hiện thành công 100 ca phẫu thuật miễn phí với tổng kinh phí...
                    </div>
                    <a href="#" onclick="openModal('modalSurgery'); return false;" class="read-more-btn">
                        <i class="fas fa-heart"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <article class="news-article">
                <div class="article-image">
                    <div class="category-badge">📊 Báo cáo</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/49.png" 
                         alt="Hơn 10.000 trẻ em được hỗ trợ trong năm 2024" loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGMEY4RkYiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNTAiIHI9IjM1IiBmaWxsPSIjMzY4MEZGIi8+PHRleHQgeD0iMjAwIiB5PSIxNjUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMjQiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0id2hpdGUiPvCfk4o8L3RleHQ+PC9zdmc+'">
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            29/09/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalSupport2024'); return false;">Hơn 10.000 trẻ em được hỗ trợ trong năm 2024</a>
                    </h2>
                    <div class="article-excerpt">
                        Năm 2024, Hand in Hand Foundation đã hỗ trợ hơn 10.000 trẻ em khuyết tật, tăng 40% so với năm...
                    </div>
                    <a href="#" onclick="openModal('modalSupport2024'); return false;" class="read-more-btn">
                        <i class="fas fa-chart-line"></i> Đọc tiếp
                    </a>
                </div>
            </article>

            <article class="news-article">
                <div class="article-image">
                    <div class="category-badge">🎭 Cuộc thi</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/50.png" 
                         alt="Cuộc thi Tài năng đặc biệt lần thứ 3" loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiNGRkY4RTAiLz48Y2lyY2xlIGN4PSIyMDAiIGN5PSIxNTAiIHI9IjM1IiBmaWxsPSIjRkZCNzAwIi8+PHRleHQgeD0iMjAwIiB5PSIxNjUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZvbnQtc2l6ZT0iMjQiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZmlsbD0id2hpdGUiPvCfjoY8L3RleHQ+PC9zdmc+'">
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date">
                            <i class="far fa-calendar-alt"></i>
                            27/09/2025
                        </span>
                        <span class="article-author">
                            <i class="fas fa-user"></i>
                            Hand in Hand Foundation
                        </span>
                    </div>
                    <h2 class="article-title">
                        <a href="#" onclick="openModal('modalTalentShow'); return false;">Cuộc thi "Tài năng đặc biệt" lần thứ 3</a>
                    </h2>
                    <div class="article-excerpt">
                        Cuộc thi "Tài năng đặc biệt" với 150 thí sinh đã tôn vinh tài năng và lan tỏa thông điệp...
                    </div>
                    <a href="#" onclick="openModal('modalTalentShow'); return false;" class="read-more-btn">
                        <i class="fas fa-trophy"></i> Đọc tiếp
                    </a>
                </div>
            </article>
            
            <?php
            // Query để lấy tin tức từ database (nếu có)
            $news_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 7,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            
            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
                    $categories = get_the_category();
                    $category_name = !empty($categories) ? $categories[0]->name : 'Tin tức';
                    
                    // Không có bài nào từ database là featured nữa
                    $is_featured = false;
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
                // Không có posts từ database - chỉ hiển thị tin tức mẫu ở trên
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

<!-- News Modals -->
<div id="modalFacility2Inauguration" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>🏢 Hand in Hand khánh thành Cơ sở 2 tại phía Bắc Nha Trang – Tháng 9/2025</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Tháng 9/2025</p>
        </div>
        <div class="modal-body">
            <div class="development-intro">
                <h3>🌱 Hành trình phát triển vì trẻ có nhu cầu đặc biệt</h3>
                <p><strong>Thành lập từ tháng 6 năm 2016 tại đường Mạc Đĩnh Chi – Nha Trang, Trung tâm Hand in Hand khởi đầu với quy mô nhỏ gồm một số ít lớp học. Ở giai đoạn đầu, trung tâm tập trung hỗ trợ các trẻ rối loạn phổ tự kỷ, tăng động giảm chú ý, chậm nói và rối loạn ngôn ngữ.</strong></p>
                
                <p>Tuy nhiên, với nhu cầu ngày càng tăng của các phụ huynh có con khiếm thính hoặc gặp khó khăn trong học tập, Hand in Hand sớm nhận ra sứ mệnh cần mở rộng năng lực để phục vụ nhiều đối tượng hơn trong cộng đồng.</p>
            </div>
            
            <hr>
            
            <h3>🏠 Bước tiến mới – Cơ sở 1 phía Nam Nha Trang</h3>
            <p><strong>Từ năm 2022, Hand in Hand chuyển về cơ sở mới tại phía Nam Nha Trang, với cơ sở vật chất khang trang, phòng học rộng rãi và tiện nghi.</strong></p>
            
            <div class="facility1-info">
                <h4>📚 Chuyên ngành giảng dạy được mở rộng</h4>
                <p>Bao quát các nhóm trẻ có nhu cầu đặc biệt như:</p>
                
                <div class="specialization-list">
                    <div class="spec-item">
                        <span class="spec-icon">🧩</span>
                        <span>Rối loạn phổ tự kỷ</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-icon">⚡</span>
                        <span>Tăng động giảm chú ý</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-icon">💬</span>
                        <span>Chậm nói, rối loạn ngôn ngữ</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-icon">👂</span>
                        <span>Khiếm thính</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-icon">📖</span>
                        <span>Các khó khăn khác trong học tập</span>
                    </div>
                </div>
            </div>
            
            <div class="facility1-services">
                <h4>🎯 Dịch vụ đào tạo tại Cơ sở 1</h4>
                <p><strong>Cơ sở 1 hiện tập trung vào trẻ từ 18 tháng đến 6 tuổi</strong>, với nhiều hình thức học linh hoạt:</p>
                
                <div class="service-options">
                    <div class="service-item">
                        <span class="service-icon">👥</span>
                        <div>
                            <h4>Can thiệp 1:1</h4>
                            <p>Hỗ trợ cá nhân hóa với từng trẻ</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <span class="service-icon">🏫</span>
                        <div>
                            <h4>Học bán trú</h4>
                            <p>Chương trình học toàn diện trong ngày</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <span class="service-icon">⏰</span>
                        <div>
                            <h4>Học theo buổi</h4>
                            <p>Tùy theo nhu cầu của từng trẻ và gia đình</p>
                        </div>
                    </div>
                </div>
                
                <div class="assessment-service">
                    <h4>🔍 Phòng sàng lọc – đánh giá phát triển</h4>
                    <p>Bên cạnh chương trình giảng dạy, Hand in Hand còn có phòng sàng lọc – đánh giá phát triển, do <strong>Thạc sĩ Đỗ Thị Hiền</strong> trực tiếp phụ trách.</p>
                    
                    <div class="assessment-philosophy">
                        <blockquote>
                            <p><em>"100% trẻ được đánh giá và xây dựng kế hoạch học tập cá nhân trước khi nhập học"</em></p>
                        </blockquote>
                        <p>Hand in Hand tự hào là môi trường nơi mỗi trẻ đều có lộ trình học tập cá nhân hóa, phù hợp và hiệu quả.</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>🎓 Đào tạo – Nâng tầm chuyên môn và đồng hành cùng phụ huynh</h3>
            <p>Không chỉ là nơi can thiệp cho trẻ, Hand in Hand còn là đơn vị đào tạo và chia sẻ chuyên môn cho nhiều giáo viên, chuyên viên và sinh viên ngành Giáo dục đặc biệt.</p>
            
            <div class="training-activities">
                <div class="training-item">
                    <span class="training-icon">👨‍🏫</span>
                    <div>
                        <h4>Đào tạo chuyên môn</h4>
                        <p>Các khóa tập huấn chuyên sâu với chuyên gia trong và ngoài nước</p>
                    </div>
                </div>
                
                <div class="training-item">
                    <span class="training-icon">👨‍👩‍👧‍👦</span>
                    <div>
                        <h4>Đào tạo phụ huynh</h4>
                        <p>Giúp cha mẹ hiểu, đồng hành và hỗ trợ con hiệu quả ngay trong môi trường tự nhiên</p>
                    </div>
                </div>
                
                <div class="training-item">
                    <span class="training-icon">🌍</span>
                    <div>
                        <h4>Hoạt động cộng đồng</h4>
                        <p>Chương trình tình nguyện trong và ngoài nước, lan tỏa nhận thức về can thiệp sớm</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>🏗️ Cột mốc mới – Khánh thành Cơ sở 2 Hand in Hand (phía Bắc Nha Trang)</h3>
            <div class="facility2-background">
                <p><strong>Năm 2025, nhận thấy nhiều trẻ trên 6 tuổi sau khi rời trung tâm vẫn chưa đủ khả năng hòa nhập học đường và thiếu môi trường học phù hợp, Hand in Hand quyết định mở rộng mô hình đào tạo với Cơ sở 2.</strong></p>
                
                <div class="mission-statement">
                    <blockquote>
                        <p>Dù còn nhiều khó khăn, tập thể Hand in Hand vẫn kiên định với sứ mệnh:</p>
                        <p><strong><em>"Không để bất kỳ trẻ có nhu cầu đặc biệt nào bị bỏ lại phía sau."</em></strong></p>
                    </blockquote>
                </div>
            </div>
            
            <div class="facility2-details">
                <h4>🏢 Thông tin Cơ sở 2</h4>
                <div class="facility-info-grid">
                    <div class="info-item">
                        <span class="info-icon">📍</span>
                        <div>
                            <h4>Địa điểm</h4>
                            <p>01 Sao Biển – phía Bắc Nha Trang</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <span class="info-icon">📅</span>
                        <div>
                            <h4>Khánh thành</h4>
                            <p>Tháng 9/2025</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <span class="info-icon">📏</span>
                        <div>
                            <h4>Diện tích</h4>
                            <p>Gần 2.000m²</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <span class="info-icon">🏫</span>
                        <div>
                            <h4>Phòng học</h4>
                            <p>16 phòng học và phòng chức năng</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <span class="info-icon">🎮</span>
                        <div>
                            <h4>Sân chơi</h4>
                            <p>Khu sân chơi ngoài trời rộng rãi, an toàn, hiện đại</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <span class="info-icon">👶</span>
                        <div>
                            <h4>Đối tượng</h4>
                            <p>Trẻ từ 18 tháng đến 12 tuổi</p>
                        </div>
                    </div>
                </div>
                
                <div class="program-design">
                    <h4>📚 Chương trình học</h4>
                    <p>Cơ sở 2 được thiết kế để đón nhận trẻ từ 18 tháng đến 12 tuổi, với <strong>chương trình học gần gũi mô hình tiểu học</strong>, nhằm tạo bước đệm vững chắc cho giai đoạn hòa nhập sau này.</p>
                </div>
            </div>
            
            <hr>
            
            <h3>🌟 Hướng đến tương lai – Mở rộng cơ hội, nuôi dưỡng tiềm năng</h3>
            <p>Với sự ra đời của Cơ sở 2, Hand in Hand kỳ vọng sẽ:</p>
            
            <div class="future-goals">
                <div class="goal-item">
                    <span class="goal-icon">📈</span>
                    <div>
                        <h4>Tăng năng lực tiếp nhận và hỗ trợ chuyên biệt</h4>
                        <p>Phục vụ nhiều trẻ em và gia đình hơn trong khu vực</p>
                    </div>
                </div>
                
                <div class="goal-item">
                    <span class="goal-icon">🏫</span>
                    <div>
                        <h4>Tạo môi trường học tập toàn diện – an toàn – nhân văn</h4>
                        <p>Không gian học tập lý tưởng cho sự phát triển của trẻ</p>
                    </div>
                </div>
                
                <div class="goal-item">
                    <span class="goal-icon">🌈</span>
                    <div>
                        <h4>Giúp ngày càng nhiều trẻ có nhu cầu đặc biệt tại Nha Trang</h4>
                        <p>Được can thiệp sớm, chuẩn hóa và có cơ hội hòa nhập bền vững</p>
                    </div>
                </div>
            </div>
            
            <div class="development-timeline">
                <h3>📅 Hành trình 9 năm phát triển</h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-year">2016</div>
                        <div class="timeline-content">
                            <h4>Khởi đầu tại Mạc Đĩnh Chi</h4>
                            <p>Thành lập với quy mô nhỏ, tập trung trẻ tự kỷ và rối loạn ngôn ngữ</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-year">2022</div>
                        <div class="timeline-content">
                            <h4>Chuyển đến Cơ sở 1 phía Nam</h4>
                            <p>Mở rộng dịch vụ, bổ sung khiếm thính và khó khăn học tập</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-year">2025</div>
                        <div class="timeline-content">
                            <h4>Khánh thành Cơ sở 2 phía Bắc</h4>
                            <p>Mở rộng phục vụ trẻ đến 12 tuổi, chuẩn bị hòa nhập</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="closing-message">
                <h3>💝 Thông điệp từ Hand in Hand</h3>
                <div class="final-message">
                    <blockquote>
                        <p>📍Hand in Hand 
                            – Nơi mỗi bước tiến của trẻ là niềm hạnh phúc của chúng tôi.</p>
                    </blockquote>
                    
                    <p><em>Với Cơ sở 2, chúng tôi không chỉ mở rộng không gian vật lý, mà còn mở rộng cơ hội, hy vọng và tương lai cho mỗi đứa trẻ có nhu cầu đặc biệt. Đây là minh chứng cho cam kết không ngừng nghỉ của Hand in Hand trong việc đồng hành cùng trẻ em và gia đình.</em></p>
                </div>
            </div>
            
            <hr>
            
            
        </div>
    </div>
</div>

<div id="modalOfficialLicense2023" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>🏛️ Hand in Hand Foundation chính thức được cấp phép hoạt động giáo dục – 2023</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Ngày 20/11/2023 – Ngày Nhà giáo Việt Nam</p>
        </div>
        <div class="modal-body">
            <div class="milestone-intro">
                <p><strong>Niềm vui như được nhân đôi trong dịp Ngày Nhà giáo Việt Nam 20/11/2023, khi Trung tâm Hỗ trợ Phát triển Giáo dục Hòa nhập tư thục Hand in Hand Foundation chính thức được Sở Giáo dục và Đào tạo tỉnh Khánh Hòa ban hành Quyết định cho phép hoạt động giáo dục.</strong></p>
                
                <div class="milestone-highlight">
                    <h4>🎉 Cột mốc ý nghĩa và tự hào</h4>
                    <p>Đây là một cột mốc ý nghĩa và tự hào trong hành trình hình thành và phát triển của Hand in Hand – đánh dấu bước tiến quan trọng trên con đường đồng hành cùng trẻ em có nhu cầu đặc biệt.</p>
                </div>
            </div>
            
            <hr>
            
            <h3>📜 Ý nghĩa của việc cấp phép</h3>
            <div class="license-significance">
                <div class="significance-item">
                    <span class="significance-icon">✅</span>
                    <div>
                        <h4>Được công nhận chính thức</h4>
                        <p>Trung tâm có tư cách pháp lý đầy đủ để hoạt động giáo dục</p>
                    </div>
                </div>
                
                <div class="significance-item">
                    <span class="significance-icon">🛡️</span>
                    <div>
                        <h4>Đảm bảo chất lượng</h4>
                        <p>Đáp ứng các tiêu chuẩn nghiêm ngặt của ngành giáo dục</p>
                    </div>
                </div>
                
                <div class="significance-item">
                    <span class="significance-icon">💫</span>
                    <div>
                        <h4>Niềm tin từ cộng đồng</h4>
                        <p>Sự ghi nhận và tin tưởng từ phụ huynh và xã hội</p>
                    </div>
                </div>
                
                <div class="significance-item">
                    <span class="significance-icon">🌱</span>
                    <div>
                        <h4>Phát triển bền vững</h4>
                        <p>Tạo nền tảng vững chắc cho sự phát triển lâu dài</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>💐 Lời tri ân sâu sắc</h3>
            <p><strong>Hand in Hand xin gửi lời biết ơn chân thành đến:</strong></p>
            
            <div class="gratitude-section">
                <div class="gratitude-item">
                    <span class="gratitude-icon">🏛️</span>
                    <div>
                        <h4>Quý lãnh đạo Ủy ban nhân dân tỉnh Khánh Hòa</h4>
                        <p>Sự quan tâm và tạo điều kiện thuận lợi cho Hand in Hand phát triển</p>
                    </div>
                </div>
                
                <div class="gratitude-item">
                    <span class="gratitude-icon">🎓</span>
                    <div>
                        <h4>Quý Sở Giáo dục và Đào tạo</h4>
                        <p>Sự hướng dẫn, hỗ trợ và tin tưởng giao cho Hand in Hand trọng trách giáo dục</p>
                    </div>
                </div>
                
                <div class="gratitude-item">
                    <span class="gratitude-icon">👨‍👩‍👧‍👦</span>
                    <div>
                        <h4>Quý phụ huynh</h4>
                        <p>Sự tin tưởng gửi gắm con em mình cho Hand in Hand</p>
                    </div>
                </div>
                
                <div class="gratitude-item">
                    <span class="gratitude-icon">👨‍🏫</span>
                    <div>
                        <h4>Toàn thể giáo viên – nhân viên của trung tâm</h4>
                        <p>Sự tận tâm, kiên trì và cống hiến không ngừng nghỉ</p>
                    </div>
                </div>
            </div>
            
            <div class="special-thanks">
                <p><em>…những người đã nỗ lực, kiên trì và tận tâm để "mở lối" cho một Trung tâm Hỗ trợ phát triển giáo dục hòa nhập được ra đời ngay trên mảnh đất quê hương Khánh Hòa.</em></p>
            </div>
            
            <hr>
            
            <h3>🌈 Niềm tự hào của Hand in Hand</h3>
            <div class="pride-highlight">
                <h4>🏆 Trung tâm đầu tiên tại Nha Trang</h4>
                <p><strong>Hand in Hand Foundation vinh dự là trung tâm hỗ trợ giáo dục hòa nhập đầu tiên được cấp phép thành lập và hoạt động tại thành phố biển Nha Trang xinh đẹp.</strong></p>
            </div>
            
            <h4>🎯 Cam kết trong tương lai</h4>
            <p>Tập thể Hand in Hand sẽ tiếp tục nỗ lực mỗi ngày để:</p>
            
            <div class="future-commitments">
                <div class="commitment-item">
                    <span class="commitment-icon">🌟</span>
                    <div>
                        <h4>Trao cơ hội phát triển</h4>
                        <p>Cho trẻ em có nhu cầu đặc biệt được phát huy hết tiềm năng của mình</p>
                    </div>
                </div>
                
                <div class="commitment-item">
                    <span class="commitment-icon">🌺</span>
                    <div>
                        <h4>Cuộc sống trọn vẹn</h4>
                        <p>Giúp các con được sống một cuộc sống trọn vẹn, ý nghĩa và do chính mình lựa chọn</p>
                    </div>
                </div>
                
                <div class="commitment-item">
                    <span class="commitment-icon">💎</span>
                    <div>
                        <h4>Xứng đáng niềm tin</h4>
                        <p>Và quan trọng hơn hết – xứng đáng với niềm tin yêu, kỳ vọng và sự ủng hộ của cộng đồng</p>
                    </div>
                </div>
            </div>
            
            <div class="license-timeline">
                <h3>📅 Hành trình đến cấp phép</h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-marker">1</div>
                        <div class="timeline-content">
                            <h4>Giai đoạn chuẩn bị</h4>
                            <p>Hoàn thiện hồ sơ, cơ sở vật chất và đội ngũ giáo viên</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-marker">2</div>
                        <div class="timeline-content">
                            <h4>Nộp hồ sơ xin phép</h4>
                            <p>Gửi đầy đủ hồ sơ tới Sở Giáo dục và Đào tạo Khánh Hòa</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-marker">3</div>
                        <div class="timeline-content">
                            <h4>Thẩm định và kiểm tra</h4>
                            <p>Trải qua quá trình thẩm định nghiêm túc từ các cơ quan chức năng</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-marker">4</div>
                        <div class="timeline-content">
                            <h4>Cấp phép chính thức</h4>
                            <p>Nhận quyết định cho phép hoạt động vào ngày 20/11/2023</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="closing-message">
                <h3>💙 Thông điệp cảm ơn</h3>
                <div class="final-thanks">
                    <p><strong>Cảm ơn tất cả những trái tim đã đồng hành cùng Hand in Hand – để mỗi ước mơ của trẻ đều có cơ hội được chạm tới.</strong></p>
                    
                    <div class="heart-message">
                        <p><em>"Với tấm giấy phép này, Hand in Hand không chỉ được ghi nhận về mặt pháp lý, mà còn được trao niềm tin để tiếp tục sứ mệnh cao đẹp: Mang lại cơ hội giáo dục tốt nhất cho mọi trẻ em, không phân biệt khả năng hay hoàn cảnh."</em></p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>📸 Khoảnh khắc lịch sử</h3>
            <div class="license-gallery">
                <div class="gallery-grid">
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/84.png', 'Quyết định cấp phép hoạt động giáo dục')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/84.png" alt="Quyết định cấp phép" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Quyết định cấp phép chính thức</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/85.png', 'Lễ nhận giấy phép hoạt động')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/85.png" alt="Lễ nhận giấy phép" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Lễ nhận giấy phép hoạt động</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/86.png', 'Đội ngũ giáo viên Hand in Hand')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/86.png" alt="Đội ngũ giáo viên" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Đội ngũ giáo viên Hand in Hand</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/87.png', 'Cơ sở vật chất trung tâm')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/87.png" alt="Cơ sở vật chất" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Cơ sở vật chất trung tâm</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/88.png', 'Hoạt động giáo dục hòa nhập')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/88.png" alt="Giáo dục hòa nhập" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Hoạt động giáo dục hòa nhập</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/89.png', 'Niềm vui của cộng đồng Hand in Hand')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/89.png" alt="Niềm vui cộng đồng" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Niềm vui của cộng đồng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalAutismMessage2024" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>💙 "Hãy cho em cơ hội được phát triển trong giai đoạn vàng – Để không một trẻ em nào bị bỏ lại phía sau"</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Ngày 2/4/2024 – Ngày Thế giới Nhận thức về Hội chứng Tự kỷ</p>
        </div>
        <div class="modal-body">
            <div class="message-intro">
                <p><strong>Hưởng ứng "Ngày Thế giới Nhận thức về Hội chứng Tự kỷ – 2/4", tập thể giáo viên Trung tâm Hand in Hand Foundation đã cùng nhau gửi gắm những lời tâm tình và thông điệp nhân văn:</strong></p>
                
                <div class="main-message">
                    <blockquote>
                        <p><em>"Hãy cho trẻ có nhu cầu đặc biệt được tiếp cận với hình thức giáo dục phù hợp.</em></p>
                        <p><em>Hãy cho các em cơ hội được phát triển trong giai đoạn vàng – trước 6 tuổi,</em></p>
                        <p><em>để không một trẻ em nào bị bỏ lại phía sau."</em></p>
                    </blockquote>
                </div>
            </div>
            
            <hr>
            
            <h3>💝 Thông điệp của Hand in Hand Foundation</h3>
            <p>Thông điệp ấy không chỉ là lời kêu gọi, mà còn là trách nhiệm và niềm tin mà Hand in Hand Foundation luôn theo đuổi trong hành trình đồng hành cùng trẻ rối loạn phổ tự kỷ và các trẻ có nhu cầu đặc biệt khác.</p>
            
            <div class="foundation-mission">
                <div class="mission-item">
                    <span class="mission-icon">🎯</span>
                    <div>
                        <h4>Trách nhiệm</h4>
                        <p>Cam kết mang đến giáo dục phù hợp cho mọi trẻ em</p>
                    </div>
                </div>
                
                <div class="mission-item">
                    <span class="mission-icon">💫</span>
                    <div>
                        <h4>Niềm tin</h4>
                        <p>Tin tưởng vào khả năng phát triển của mỗi đứa trẻ</p>
                    </div>
                </div>
                
                <div class="mission-item">
                    <span class="mission-icon">🤝</span>
                    <div>
                        <h4>Đồng hành</h4>
                        <p>Sát cánh cùng trẻ rối loạn phổ tự kỷ và trẻ đặc biệt</p>
                    </div>
                </div>
                
                <div class="mission-item">
                    <span class="mission-icon">⏰</span>
                    <div>
                        <h4>Giai đoạn vàng</h4>
                        <p>Can thiệp sớm trước 6 tuổi để tối ưu hóa phát triển</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>✨ Một góc nhỏ đầy cảm xúc</h3>
            <p>Trong chuỗi hoạt động hưởng ứng ngày 2/4, các giáo viên Hand in Hand đã chia sẻ nhiều cảm xúc và suy ngẫm sâu sắc.</p>
            
            <p>Xin mời quý phụ huynh và bạn đọc cùng lắng nghe bài thơ mộc mạc, chân thành và đầy cảm xúc của <strong>cô Lê Thị Bảo Trâm</strong>, như một lời nhắn gửi yêu thương đến tất cả những trái tim đang đồng hành cùng trẻ đặc biệt.</p>
            
            <div class="emotional-sharing">
                <h4>🌸 Lời chia sẻ từ trái tim</h4>
                <div class="teacher-message">
                    <div class="teacher-info">
                        <strong>Cô Lê Thị Bảo Trâm</strong><br>
                        <em>Giáo viên Hand in Hand Foundation</em>
                    </div>
                    
                    <div class="poem-section">
                        <p class="poem-intro"><em>"Tôi muốn gửi gắm những dòng thơ này đến tất cả các em nhỏ đặc biệt và những người đang yêu thương, chăm sóc các em..."</em></p>
                        
                        <div class="poem-content">
                            <div class="poem-stanza">
                                <p><em>Trong đôi mắt trong veo ấy,</em></p>
                                <p><em>Có cả một thế giới riêng,</em></p>
                                <p><em>Những ước mơ thầm lặng,</em></p>
                                <p><em>Chờ ai đó hiểu và yêu thương.</em></p>
                            </div>
                            
                            <div class="poem-stanza">
                                <p><em>Em không cần lời nói nhiều,</em></p>
                                <p><em>Chỉ cần một cái ôm ấm áp,</em></p>
                                <p><em>Một nụ cười chân thành,</em></p>
                                <p><em>Để em biết mình được chấp nhận.</em></p>
                            </div>
                            
                            <div class="poem-stanza">
                                <p><em>Giai đoạn vàng đang trôi qua,</em></p>
                                <p><em>Từng ngày là một cơ hội,</em></p>
                                <p><em>Để em học, em lớn,</em></p>
                                <p><em>Theo nhịp đập riêng của trái tim.</em></p>
                            </div>
                            
                            <div class="poem-stanza">
                                <p><em>Xin đừng để em lại một mình,</em></p>
                                <p><em>Trong thế giới đầy thử thách,</em></p>
                                <p><em>Hãy nắm tay em đi tiếp,</em></p>
                                <p><em>Trên con đường yêu thương.</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>🌱 Tầm quan trọng của can thiệp sớm</h3>
            <div class="early-intervention">
                <div class="intervention-item">
                    <span class="intervention-icon">🧠</span>
                    <div>
                        <h4>Phát triển não bộ</h4>
                        <p>Giai đoạn 0-6 tuổi là thời kỳ vàng cho sự phát triển thần kinh</p>
                    </div>
                </div>
                
                <div class="intervention-item">
                    <span class="intervention-icon">💬</span>
                    <div>
                        <h4>Kỹ năng giao tiếp</h4>
                        <p>Can thiệp sớm giúp trẻ phát triển ngôn ngữ và tương tác xã hội</p>
                    </div>
                </div>
                
                <div class="intervention-item">
                    <span class="intervention-icon">🎯</span>
                    <div>
                        <h4>Hành vi thích ứng</h4>
                        <p>Định hướng và điều chỉnh hành vi từ sớm mang lại hiệu quả cao</p>
                    </div>
                </div>
                
                <div class="intervention-item">
                    <span class="intervention-icon">🌈</span>
                    <div>
                        <h4>Tiềm năng cá nhân</h4>
                        <p>Mỗi trẻ đều có những điểm mạnh riêng cần được khai phá</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>💙 Lời kêu gọi từ Hand in Hand Foundation</h3>
            <div class="call-to-action">
                <p><strong>Hãy cùng đọc, cảm nhận và lan tỏa yêu thương – để mỗi trẻ em đều có cơ hội được lớn lên, được phát triển, và được hạnh phúc theo cách riêng của mình.</strong></p>
                
                <div class="action-items">
                    <div class="action-item">
                        <span class="action-icon">📚</span>
                        <p><strong>Hiểu biết:</strong> Tìm hiểu về rối loạn phổ tự kỷ và nhu cầu đặc biệt</p>
                    </div>
                    
                    <div class="action-item">
                        <span class="action-icon">🤗</span>
                        <p><strong>Chấp nhận:</strong> Tôn trọng sự khác biệt và tính đa dạng</p>
                    </div>
                    
                    <div class="action-item">
                        <span class="action-icon">🌱</span>
                        <p><strong>Hỗ trợ:</strong> Can thiệp sớm và giáo dục phù hợp</p>
                    </div>
                    
                    <div class="action-item">
                        <span class="action-icon">💫</span>
                        <p><strong>Hy vọng:</strong> Tin tưởng vào khả năng phát triển của mỗi trẻ</p>
                    </div>
                </div>
            </div>
            
            <div class="final-message">
                <h3>🌟 Thông điệp cuối</h3>
                <div class="quote-section">
                    <blockquote>
                        <p><em>"Không có trẻ em nào là hoàn hảo, nhưng mỗi trẻ em đều là đặc biệt. Và những đứa trẻ đặc biệt cần được yêu thương đặc biệt, được giáo dục đặc biệt, để chúng có thể tỏa sáng theo cách đặc biệt của riêng mình."</em></p>
                        <cite>- Hand in Hand Foundation</cite>
                    </blockquote>
                </div>
            </div>
            
            <hr>
            
            <h3>📸 Khoảnh khắc ý nghĩa</h3>
            <div class="awareness-gallery">
                <div class="gallery-grid">
                    
                    
                    
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/80.png', 'Bài thơ của cô Lê Thị Bảo Trâm')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/80.png" alt="Bài thơ cô Trâm" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Bài thơ của cô Lê Thị Bảo Trâm</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalDirectorTraining" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>🎓 Hand in Hand Foundation tự hào về hành trình học tập của Giám đốc – Thạc sĩ Đỗ Thị Hiền</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Tháng 5/2024</p>
        </div>
        <div class="modal-body">
            <p><strong>Tháng 5/2024, Project Vietnam Foundation (Bang California, Hoa Kỳ) đã tổ chức khóa đào tạo cấp cao Project ImPACT (Improving Parents As Communication Teachers) dành cho các nhà chuyên môn trong lĩnh vực tự kỷ và phát triển trẻ em trên toàn Việt Nam.</strong></p>
            
            <p>Chương trình quy tụ 100 ứng cử viên xuất sắc là bác sĩ, giảng viên và nhà trị liệu, trong đó <strong>Thạc sĩ Đỗ Thị Hiền – Giám đốc Hand in Hand Foundation vinh dự trở thành 1 trong 26 chuyên gia được lựa chọn tham gia khóa học, và đặc biệt là 1 trong 4 chuyên gia duy nhất được trực tiếp tham gia khóa đào tạo thực hành chuyên sâu cùng Tiến sĩ Susan Marden.</strong></p>
            
            <hr>
            
            <h3>🏆 Thành tích đáng tự hào</h3>
            <div class="achievement-stats">
                <div class="stat-item">
                    <span class="stat-number">100</span>
                    <span class="stat-label">Ứng cử viên tham gia</span>
                    <span class="stat-description">Bác sĩ, giảng viên và nhà trị liệu xuất sắc</span>
                </div>
                
                <div class="stat-item">
                    <span class="stat-number">26</span>
                    <span class="stat-label">Chuyên gia được chọn</span>
                    <span class="stat-description">Thạc sĩ Đỗ Thị Hiền là 1 trong số này</span>
                </div>
                
                <div class="stat-item">
                    <span class="stat-number">4</span>
                    <span class="stat-label">Chuyên gia chuyên sâu</span>
                    <span class="stat-description">Được đào tạo trực tiếp với Tiến sĩ Susan Marden</span>
                </div>
            </div>
            
            <hr>
            
            <h3>🎓 Không ngừng học tập – Trọn vẹn với sứ mệnh giáo dục đặc biệt</h3>
            <p>Thành tích này không chỉ là niềm tự hào của Hand in Hand Foundation mà còn minh chứng rõ nét cho tinh thần <em>"Học tập là việc làm suốt đời"</em> mà Thạc sĩ Đỗ Thị Hiền luôn theo đuổi – dù ở vị trí giáo viên, nhà chuyên môn hay người lãnh đạo.</p>
            
            <p>Bằng sự tận tâm, chuyên môn vững vàng và khát khao phát triển cộng đồng, cô Hiền đã không ngừng tìm kiếm và áp dụng những phương pháp can thiệp hiệu quả, có bằng chứng khoa học, nhằm nâng cao kỹ năng giao tiếp xã hội và khả năng hòa nhập cho trẻ rối loạn phổ tự kỷ (RLPTK).</p>
            
            <div class="leadership-qualities">
                <div class="quality-item">
                    <span class="quality-icon">💝</span>
                    <div>
                        <h4>Tận tâm</h4>
                        <p>Sự cống hiến hết mình cho sứ mệnh giáo dục đặc biệt</p>
                    </div>
                </div>
                
                <div class="quality-item">
                    <span class="quality-icon">🎯</span>
                    <div>
                        <h4>Chuyên môn vững vàng</h4>
                        <p>Kiến thức sâu rộng và liên tục cập nhật</p>
                    </div>
                </div>
                
                <div class="quality-item">
                    <span class="quality-icon">🌱</span>
                    <div>
                        <h4>Khát khao phát triển cộng đồng</h4>
                        <p>Luôn hướng tới lợi ích chung của xã hội</p>
                    </div>
                </div>
                
                <div class="quality-item">
                    <span class="quality-icon">🔬</span>
                    <div>
                        <h4>Bằng chứng khoa học</h4>
                        <p>Áp dụng những phương pháp đã được kiểm chứng</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>💬 Về Project ImPACT</h3>
            <p><strong>Project ImPACT (Improving Parents As Communication Teachers)</strong> là chương trình huấn luyện phụ huynh do Brooke Ingersoll và Anna Dvortcsak phát triển.</p>
            
            <p><strong>Mục tiêu của chương trình:</strong> Giúp các nhà chuyên môn truyền đạt và hướng dẫn cha mẹ các chiến lược can thiệp đã được kiểm chứng, từ đó trao quyền cho phụ huynh trong việc hỗ trợ con học tập, giao tiếp và hòa nhập tốt hơn trong cuộc sống.</p>
            
            <div class="impact-program-info">
                <div class="program-item">
                    <span class="program-icon">👨‍👩‍👧‍👦</span>
                    <div>
                        <h4>Huấn luyện phụ huynh</h4>
                        <p>Trao quyền cho cha mẹ trong việc can thiệp tại nhà</p>
                    </div>
                </div>
                
                <div class="program-item">
                    <span class="program-icon">🎯</span>
                    <div>
                        <h4>Chiến lược kiểm chứng</h4>
                        <p>Các phương pháp đã được nghiên cứu và chứng minh hiệu quả</p>
                    </div>
                </div>
                
                <div class="program-item">
                    <span class="program-icon">💬</span>
                    <div>
                        <h4>Phát triển giao tiếp</h4>
                        <p>Nâng cao kỹ năng giao tiếp và tương tác xã hội của trẻ</p>
                    </div>
                </div>
                
                <div class="program-item">
                    <span class="program-icon">🌍</span>
                    <div>
                        <h4>Hòa nhập cộng đồng</h4>
                        <p>Giúp trẻ tự tin tham gia các hoạt động xã hội</p>
                    </div>
                </div>
            </div>
            
            <div class="program-developers">
                <h3>👥 Đội ngũ phát triển chương trình</h3>
                <div class="developer-info">
                    <div class="developer-item">
                        <h4>Brooke Ingersoll</h4>
                        <p>Chuyên gia hàng đầu về rối loạn phổ tự kỷ</p>
                    </div>
                    <div class="developer-item">
                        <h4>Anna Dvortcsak</h4>
                        <p>Nhà nghiên cứu về can thiệp sớm cho trẻ tự kỷ</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>🎥 Tư liệu chương trình</h3>
            <p><strong>Dưới đây là hình ảnh, thông cáo báo chí và tư liệu chương trình được phát sóng trên HTV9:</strong></p>
            
            <div class="video-section">
                <div class="video-container">
                    <a href="https://www.youtube.com/watch?v=Ll9ZD8FAKio" target="_blank" class="video-link">
                        <div class="video-thumbnail">
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="video-info">
                                <h4>Chương trình Project ImPACT trên HTV9</h4>
                                <p>Thông cáo báo chí và tư liệu về khóa đào tạo</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="foundation-pride">
                <h3>🌟 Niềm tự hào của Hand in Hand Foundation</h3>
                <p class="pride-text"><em>"Thành công của Thạc sĩ Đỗ Thị Hiền là minh chứng cho cam kết không ngừng học hỏi và phát triển của Hand in Hand Foundation. Chúng tôi tự hào có một người lãnh đạo luôn đi đầu trong việc nâng cao chất lượng dịch vụ và mang đến những phương pháp can thiệp tốt nhất cho trẻ em có nhu cầu đặc biệt."</em></p>
            </div>
            
            <hr>
            
            <h3>📸 Hình ảnh chương trình đào tạo</h3>
            <div class="training-gallery">
                <div class="gallery-grid">
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/79.png', 'Thạc sĩ Đỗ Thị Hiền tại khóa đào tạo Project ImPACT')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/79.png" alt="Đào tạo Project ImPACT" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Khóa đào tạo Project ImPACT</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalTeachersDay" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>🏆 Hand in Hand triển khai cuộc thi "Sáng tạo đồ dùng dạy học"</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Ngày 20/11/2024 - Ngày Nhà giáo Việt Nam</p>
        </div>
        <div class="modal-body">
            <p><strong>Ngày 20/11/2024, khi khắp nơi rộn ràng chào mừng Ngày Nhà giáo Việt Nam, tập thể Hand in Hand Foundation cũng hòa mình trong không khí tươi vui ấy bằng một hoạt động đặc biệt – Cuộc thi "Sáng tạo đồ dùng dạy học".</strong></p>
            
            <hr>
            
            <h3>🎯 Mục đích cuộc thi</h3>
            <p>Cuộc thi là sân chơi sáng tạo dành cho các giáo viên, nhằm khuyến khích mỗi cô giáo tự tay làm ra những đồ dùng dạy học trực quan, sinh động và phù hợp với các bạn nhỏ có nhu cầu học tập đặc biệt.</p>
            
            <div class="contest-objectives">
                <div class="objective-item">
                    <span class="objective-icon">🎨</span>
                    <div>
                        <h4>Khuyến khích sáng tạo</h4>
                        <p>Động viên giáo viên tự tay chế tạo đồ dùng dạy học</p>
                    </div>
                </div>
                
                <div class="objective-item">
                    <span class="objective-icon">👁️</span>
                    <div>
                        <h4>Tăng tính trực quan</h4>
                        <p>Tạo ra những công cụ dạy học sinh động, dễ hiểu</p>
                    </div>
                </div>
                
                <div class="objective-item">
                    <span class="objective-icon">🎯</span>
                    <div>
                        <h4>Phù hợp trẻ đặc biệt</h4>
                        <p>Thiết kế phù hợp với nhu cầu học tập đặc biệt của trẻ</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>📚 Nội dung sản phẩm</h3>
            <p>Từ những mô hình dạy học thủ công, trẻ được tiếp cận và hiểu rõ hơn về:</p>
            
            <div class="learning-topics">
                <div class="topic-item">
                    <span class="topic-icon">🐣</span>
                    <div>
                        <h4>Phát triển sinh vật</h4>
                        <p>Quá trình phát triển của các loài vật</p>
                    </div>
                </div>
                
                <div class="topic-item">
                    <span class="topic-icon">🚦</span>
                    <div>
                        <h4>An toàn giao thông</h4>
                        <p>Các quy tắc giao thông cơ bản</p>
                    </div>
                </div>
                
                <div class="topic-item">
                    <span class="topic-icon">🧼</span>
                    <div>
                        <h4>Kỹ năng sống</h4>
                        <p>Lịch sinh hoạt và chăm sóc bản thân</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>💖 Ý nghĩa sâu sắc</h3>
            <p>Những sản phẩm nhỏ bé ấy không chỉ mang tính thẩm mỹ mà còn chứa đựng tâm huyết, sự tỉ mỉ và lòng yêu nghề của các cô giáo Hand in Hand – những người luôn nỗ lực đổi mới phương pháp, tìm cách truyền đạt kiến thức và kỹ năng phù hợp nhất cho trẻ.</p>
            
            <div class="teacher-qualities">
                <div class="quality-item">
                    <span class="quality-icon">❤️</span>
                    <div>
                        <h4>Tâm huyết</h4>
                        <p>Tình yêu và sự tận tâm với nghề</p>
                    </div>
                </div>
                
                <div class="quality-item">
                    <span class="quality-icon">✨</span>
                    <div>
                        <h4>Tỉ mỉ</h4>
                        <p>Sự chăm chút trong từng chi tiết nhỏ</p>
                    </div>
                </div>
                
                <div class="quality-item">
                    <span class="quality-icon">💡</span>
                    <div>
                        <h4>Đổi mới</h4>
                        <p>Liên tục cải tiến phương pháp giảng dạy</p>
                    </div>
                </div>
                
                <div class="quality-item">
                    <span class="quality-icon">🎯</span>
                    <div>
                        <h4>Phù hợp</h4>
                        <p>Tìm cách truyền đạt kiến thức phù hợp nhất</p>
                    </div>
                </div>
            </div>
            
            <div class="teachers-day-message">
                <h3>🌼 Thông điệp Ngày Nhà giáo</h3>
                <p><em>Mỗi ngày trôi qua, các cô giáo Hand in Hand vẫn không ngừng học hỏi, sáng tạo và cống hiến, với mong muốn mang đến cho học sinh những bài học thú vị và hiệu quả hơn.</em></p>
            </div>
            
            <div class="gratitude-message">
                <h3>💖 Lời tri ân</h3>
                <p class="gratitude-text"><strong>Nhân dịp 20/11, xin gửi lời chúc mừng và tri ân sâu sắc đến các thầy cô giáo nói chung, và đặc biệt là những giáo viên trong lĩnh vực Giáo dục Đặc biệt – những người đang thầm lặng gieo mầm yêu thương và niềm tin cho mỗi đứa trẻ.</strong></p>
                <p class="wishes-text"><em>Chúc các thầy cô luôn tràn đầy nhiệt huyết, yêu nghề – yêu trẻ, và tự tin trên hành trình đồng hành cùng các em!</em></p>
            </div>
            
            <hr>
            
            <h3>📸 Những sản phẩm sáng tạo</h3>
            <div class="contest-gallery">
                <div class="gallery-grid">
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/72.png', 'Mô hình dạy học về phát triển sinh vật')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/72.png" alt="Mô hình phát triển sinh vật" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Mô hình phát triển sinh vật</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/73.png', 'Bảng học quy tắc giao thông')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/73.png" alt="Bảng quy tắc giao thông" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Bảng quy tắc giao thông</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/74.png', 'Lịch sinh hoạt hàng ngày')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/74.png" alt="Lịch sinh hoạt" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Lịch sinh hoạt hàng ngày</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/75.png', 'Đồ dùng dạy học thủ công')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/75.png" alt="Đồ dùng thủ công" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Đồ dùng dạy học thủ công</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/76.png', 'Các cô giáo trong cuộc thi')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/76.png" alt="Các cô giáo tham gia" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Các cô giáo trong cuộc thi</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/77.png', 'Khoảnh khắc trao giải')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/77.png" alt="Khoảnh khắc trao giải" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Khoảnh khắc trao giải</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalProjectImPACT" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>👨‍👩‍👧‍👦 Project ImPACT – Chương trình đào tạo dành cho phụ huynh có con RLPTK</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Từ tháng 3/2025</p>
        </div>
        <div class="modal-body">
            <p><strong>Từ tháng 3/2025, Hand in Hand Foundation chính thức triển khai Project ImPACT như một chương trình đào tạo thường xuyên dành cho phụ huynh và các nhà chuyên môn đang đồng hành cùng trẻ rối loạn phổ tự kỷ (RLPTK) và trẻ chậm phát triển trí tuệ khác.</strong></p>
            
            <hr>
            
            <h3>🎯 Project ImPACT là gì?</h3>
            <p><strong>Project ImPACT (Improving Parents as Communication Teachers)</strong> là chương trình huấn luyện phụ huynh nhằm giúp họ can thiệp và hỗ trợ phát triển kỹ năng giao tiếp xã hội cho trẻ trong môi trường tự nhiên – ngay tại gia đình.</p>
            
            <div class="impact-overview">
                <div class="overview-item">
                    <span class="overview-icon">🌍</span>
                    <div>
                        <h4>Chương trình quốc tế</h4>
                        <p>Được xây dựng bởi Brooke Ingersoll và Anna Dvortcsak</p>
                    </div>
                </div>
                
                <div class="overview-item">
                    <span class="overview-icon">🇻🇳</span>
                    <div>
                        <h4>Chuyển giao tại Việt Nam</h4>
                        <p>Được Project Vietnam Foundation dịch và chuyển giao</p>
                    </div>
                </div>
                
                <div class="overview-item">
                    <span class="overview-icon">🌏</span>
                    <div>
                        <h4>Triển khai toàn cầu</h4>
                        <p>Đã được triển khai thành công tại hơn 10 quốc gia trên thế giới</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>🏠 Tầm nhìn và ý nghĩa của Project ImPACT</h3>
            <p>Với triết lý <em>"Gia đình là môi trường giáo dục đầu tiên và tối ưu nhất cho trẻ"</em>, Hand in Hand nỗ lực phát triển Project ImPACT như một cầu nối tri thức và thực hành – nơi phụ huynh được trang bị:</p>
            
            <div class="impact-benefits">
                <div class="benefit-item">
                    <span class="benefit-icon">🌼</span>
                    <div>
                        <h4>Kiến thức nền tảng</h4>
                        <p>Về rối loạn phổ tự kỷ và phát triển ngôn ngữ – giao tiếp</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <span class="benefit-icon">🌼</span>
                    <div>
                        <h4>Kỹ năng tương tác</h4>
                        <p>Can thiệp tại nhà giúp trẻ phát triển kỹ năng xã hội – cảm xúc</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <span class="benefit-icon">🌼</span>
                    <div>
                        <h4>Công cụ thực hành</h4>
                        <p>Tài liệu hướng dẫn để cha mẹ tự tin đồng hành cùng con</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>❤️ Hướng đến cộng đồng – Lan tỏa hiểu biết và yêu thương</h3>
            <p>Việc triển khai Project ImPACT không chỉ mang lại lợi ích thiết thực cho các gia đình có trẻ RLPTK mà còn thể hiện cam kết lâu dài của Hand in Hand trong việc thúc đẩy giáo dục hòa nhập và can thiệp sớm tại Việt Nam.</p>
            
            <div class="impact-vision">
                <div class="vision-item">
                    <span class="vision-icon">🏡</span>
                    <div>
                        <h4>Môi trường trị liệu tại nhà</h4>
                        <p>Biến mỗi ngôi nhà thành môi trường trị liệu yêu thương</p>
                    </div>
                </div>
                
                <div class="vision-item">
                    <span class="vision-icon">👨‍👩‍👧‍👦</span>
                    <div>
                        <h4>Trao quyền cho phụ huynh</h4>
                        <p>Phụ huynh được hướng dẫn đúng cách và trao quyền</p>
                    </div>
                </div>
                
                <div class="vision-item">
                    <span class="vision-icon">🌱</span>
                    <div>
                        <h4>Can thiệp sớm hiệu quả</h4>
                        <p>Thúc đẩy can thiệp sớm và giáo dục hòa nhập tại Việt Nam</p>
                    </div>
                </div>
            </div>
            
            <div class="impact-mission">
                <h3>💫 Sứ mệnh của Hand in Hand</h3>
                <p class="mission-text"><em>"Hand in Hand tin rằng, khi phụ huynh được trao quyền và được hướng dẫn đúng cách, mỗi ngôi nhà đều có thể trở thành một môi trường trị liệu yêu thương và hiệu quả nhất dành cho trẻ."</em></p>
            </div>
            
            <hr>
            
            <h3>📸 Hình ảnh chương trình</h3>
            <div class="impact-gallery">
                <div class="gallery-grid">
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/39.png', 'Buổi đào tạo Project ImPACT')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/39.png" alt="Đào tạo Project ImPACT" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Buổi đào tạo Project ImPACT</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/40.png', 'Phụ huynh tham gia chương trình')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/40.png" alt="Phụ huynh tham gia" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Phụ huynh tham gia chương trình</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/41.png', 'Học cách tương tác với trẻ')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/41.png" alt="Học tương tác" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Học cách tương tác với trẻ</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/42.png', 'Thực hành kỹ năng giao tiếp')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/42.png" alt="Thực hành giao tiếp" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Thực hành kỹ năng giao tiếp</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/43.png', 'Môi trường học tập tích cực')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/43.png" alt="Môi trường học tập" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Môi trường học tập tích cực</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/44.png', 'Gia đình và chuyên gia đồng hành')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/44.png" alt="Gia đình và chuyên gia" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Gia đình và chuyên gia đồng hành</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalAutismAwareness" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>💙 Hưởng ứng Ngày 2/4 – "Ngày Thế giới Nhận thức về Tự kỷ"</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Ngày 2/4/2025</p>
        </div>
        <div class="modal-body">
            <div class="poem-section">
                <h3>📝 Thơ: "Ngày Thế giới Nhận thức về Tự kỷ"</h3>
                <p class="poem-author"><em>Tác giả: Phan Thị Sen</em></p>
                
                <div class="poem-content">
                    <p><em>Con rập khuôn và rất khó tương tác<br>
                    Giao tiếp mắt con sợ sệt, thu mình<br>
                    Lảng tránh nghe, lảng tránh ánh nhìn…<br>
                    Bác sĩ bảo con "RỐI LOẠN PHỔ TỰ KỶ" rồi đó.</em></p>
                    
                    <p><em>Thế giới hôm nay đang quan tâm trẻ nhỏ,<br>
                    Dành cho con một ngày "2/4" –<br>
                    "NGÀY THẾ GIỚI NHẬN THỨC VỀ TỰ KỶ"<br>
                    Để nâng cao nhận thức cho mọi người.</em></p>
                    
                    <p><em>Trung tâm HAND IN HAND kính mời<br>
                    Các bạn đến với góc "CHIA SẺ" nhé!<br>
                    Những sản phẩm từ bàn tay của bé<br>
                    Ngây thơ, ngộ nghĩnh, đầy yêu thương.</em></p>
                    
                    <p><em>TỦ ĐỒ CHƠI TÁI SINH giản dị mà ý nghĩa,<br>
                    Góp nhặt từ tình yêu của Cha Mẹ.<br>
                    GÓC TUYÊN TRUYỀN – từng bài học nhỏ bé,<br>
                    Nhưng rất cần để giúp trẻ tốt hơn.</em></p>
                </div>
            </div>
            
            <hr>
            
            <h3>💙 Hoạt động hưởng ứng ngày 2/4</h3>
            <p><strong>Nhân "Ngày Thế giới Nhận thức về Tự kỷ" (2/4/2025), Hand in Hand Foundation đã tổ chức nhiều hoạt động ý nghĩa nhằm nâng cao nhận thức của cán bộ, nhân viên và phụ huynh về chứng Rối loạn Phổ Tự kỷ (RLPTK).</strong></p>
            
            <div class="awareness-activities">
                <div class="activity-item">
                    <span class="activity-icon">🧩</span>
                    <div>
                        <h4>Trưng bày sản phẩm</h4>
                        <p>Những sản phẩm từ bàn tay của các bé - ngây thơ, ngộ nghĩnh, đầy yêu thương</p>
                    </div>
                </div>
                
                <div class="activity-item">
                    <span class="activity-icon">♻️</span>
                    <div>
                        <h4>Tủ đồ chơi tái sinh</h4>
                        <p>Giản dị mà ý nghĩa, góp nhặt từ tình yêu của cha mẹ</p>
                    </div>
                </div>
                
                <div class="activity-item">
                    <span class="activity-icon">📢</span>
                    <div>
                        <h4>Góc tuyên truyền</h4>
                        <p>Từng bài học nhỏ bé, nhưng rất cần để giúp trẻ tốt hơn</p>
                    </div>
                </div>
                
                <div class="activity-item">
                    <span class="activity-icon">💬</span>
                    <div>
                        <h4>Chia sẻ thông tin</h4>
                        <p>Nâng cao nhận thức về Rối loạn Phổ Tự kỷ</p>
                    </div>
                </div>
                
                <div class="activity-item">
                    <span class="activity-icon">🤝</span>
                    <div>
                        <h4>Trải nghiệm thực tế</h4>
                        <p>Khơi gợi tinh thần thấu hiểu - đồng cảm - sẻ chia</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>🙏 Lời cảm ơn từ trung tâm</h3>
            <div class="gratitude-section">
                <p><em>Trung tâm xin gửi lời cảm ơn:</em></p>
                <ul class="gratitude-list">
                    <li><strong>Đến sự cố gắng mỗi ngày của các con</strong></li>
                    <li><strong>Tình yêu thương đồng hành của cha mẹ</strong></li>
                    <li><strong>Và nỗ lực không ngừng của các cô giáo</strong></li>
                </ul>
            </div>
            
            <div class="autism-wishes">
                <h3>💙 Thông điệp yêu thương</h3>
                <p class="wishes-text"><em>"Chúc các con luôn đón nhận yêu thương, để mỗi ngày đều trở nên tốt đẹp hơn!"</em></p>
                <p class="mission-text"><strong>Hãy cùng Hand in Hand lan tỏa yêu thương, vì một thế giới bao dung hơn dành cho mọi trẻ em!</strong></p>
            </div>
            
            <hr>
            
            <h3>📸 Khoảnh khắc ý nghĩa</h3>
            <div class="autism-gallery">
                <div class="gallery-grid">
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/65.png', 'Trưng bày sản phẩm của các bé')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/65.png" alt="Sản phẩm của các bé" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Sản phẩm của các bé</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/66.png', 'Tủ đồ chơi tái sinh')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/66.png" alt="Tủ đồ chơi tái sinh" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Tủ đồ chơi tái sinh</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/67.png', 'Góc tuyên truyền và chia sẻ')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/67.png" alt="Góc tuyên truyền" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Góc tuyên truyền</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/68.png', 'Hoạt động nhận thức về tự kỷ')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/68.png" alt="Hoạt động nhận thức" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Hoạt động nhận thức</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/69.png', 'Cộng đồng Hand in Hand')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/69.png" alt="Cộng đồng Hand in Hand" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Cộng đồng Hand in Hand</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/65.png', 'Lan tỏa yêu thương')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/65.png" alt="Lan tỏa yêu thương" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Lan tỏa yêu thương</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalGovernmentDelegation" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>🏛️ Đón tiếp đoàn công tác của Cục Nhà giáo và Cán bộ Quản lý Giáo dục</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Ngày 9/4/2025</p>
        </div>
        <div class="modal-body">
            <p><strong>Ngày 9/4/2025, Trung tâm Hand in Hand Foundation rất vinh dự được đón tiếp lãnh đạo Cục Nhà giáo và Cán bộ Quản lý Giáo dục – Bộ Giáo dục và Đào tạo, cùng đại diện Sở Giáo dục và Đào tạo tỉnh Khánh Hòa đến thăm và làm việc tại trung tâm.</strong></p>
            
            <hr>
            
            <h3>🤝 Nội dung cuộc gặp gỡ</h3>
            <p>Trong buổi gặp gỡ, đoàn công tác đã dành thời gian lắng nghe và chia sẻ chân thành về hành trình hình thành của Hand in Hand Foundation, công tác can thiệp – hỗ trợ học sinh có nhu cầu đặc biệt, cũng như những khó khăn thực tế trong công tác tuyển dụng, đào tạo và chính sách dành cho giáo viên và nhân viên hỗ trợ.</p>
            
            <div class="delegation-activities">
                <div class="activity-item">
                    <span class="activity-icon">📖</span>
                    <div>
                        <h4>Chia sẻ hành trình</h4>
                        <p>Hành trình hình thành và phát triển Hand in Hand Foundation</p>
                    </div>
                </div>
                
                <div class="activity-item">
                    <span class="activity-icon">🎯</span>
                    <div>
                        <h4>Công tác can thiệp</h4>
                        <p>Hỗ trợ học sinh có nhu cầu đặc biệt và giáo dục hòa nhập</p>
                    </div>
                </div>
                
                <div class="activity-item">
                    <span class="activity-icon">👨‍🏫</span>
                    <div>
                        <h4>Tuyển dụng & đào tạo</h4>
                        <p>Thảo luận về khó khăn trong tuyển dụng và đào tạo giáo viên</p>
                    </div>
                </div>
                
                <div class="activity-item">
                    <span class="activity-icon">📋</span>
                    <div>
                        <h4>Chính sách hỗ trợ</h4>
                        <p>Thảo luận về chính sách dành cho giáo viên và nhân viên</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>🌉 Ý nghĩa của chuyến thăm</h3>
            <p>Chuyến thăm là nhịp cầu kết nối giữa chính sách và thực tiễn, mở ra niềm hy vọng cho những chuyển biến tích cực trong lĩnh vực giáo dục hòa nhập tại Việt Nam.</p>
            
            <div class="delegation-significance">
                <div class="significance-item">
                    <span class="significance-icon">🌉</span>
                    <div>
                        <h4>Kết nối chính sách - thực tiễn</h4>
                        <p>Tạo nhịp cầu giữa các chính sách giáo dục và thực tế triển khai</p>
                    </div>
                </div>
                
                <div class="significance-item">
                    <span class="significance-icon">🌱</span>
                    <div>
                        <h4>Hy vọng chuyển biến</h4>
                        <p>Mở ra những chuyển biến tích cực trong giáo dục hòa nhập</p>
                    </div>
                </div>
                
                <div class="significance-item">
                    <span class="significance-icon">🇻🇳</span>
                    <div>
                        <h4>Phát triển toàn quốc</h4>
                        <p>Thúc đẩy giáo dục hòa nhập trên toàn Việt Nam</p>
                    </div>
                </div>
            </div>
            
            <div class="delegation-gratitude">
                <h3>🙏 Lời tri ân</h3>
                <p class="gratitude-text"><em>"Hand in Hand Foundation xin gửi lời tri ân sâu sắc đến đoàn công tác vì sự quan tâm và đồng hành – nguồn động viên quý báu để chúng tôi tiếp tục nỗ lực vì một nền giáo dục bao dung và công bằng hơn cho mọi trẻ em."</em></p>
            </div>
            
            <hr>
        </div>
    </div>
</div>

<!-- Alex Tuddenham Volunteer Modal -->
<div id="modalAlexVolunteer" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header" style="background: linear-gradient(135deg, #1e40af, #3b82f6);">
            <h2>🇬🇧 Chào đón tình nguyện viên Alex Tuddenham từ Vương quốc Anh</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Tuần 20/6/2025</p>
        </div>
        <div class="modal-body">
            <p><strong>Tuần qua (20/6/2025), Hand in Hand Foundation rất vinh dự được đón tiếp Alex Tuddenham – một tình nguyện viên trẻ đến từ Vương quốc Anh.</strong></p>
            
            <hr>
            
            <h3>👨‍🏫 Hoạt động tại trung tâm</h3>
            <p>Trong suốt một tuần tham gia hoạt động tại trung tâm, Alex đã tích cực hỗ trợ lớp học dành cho trẻ từ 2–6 tuổi có nhu cầu đặc biệt. Với nguồn năng lượng tích cực, sự ấm áp và óc sáng tạo, Alex đã mang đến cho các em những giờ học đầy niềm vui và kết nối.</p>
            
            <div class="highlight-box" style="background: linear-gradient(135deg, #f0f9ff, #e0f2fe); border-left: 4px solid #1e40af; padding: 20px; margin: 20px 0; border-radius: 8px;">
                <h4 style="color: #1e40af; margin-bottom: 10px;">🌟 Đặc điểm nổi bật của Alex</h4>
                <ul style="color: #374151; line-height: 1.8;">
                    <li><strong>Nguồn năng lượng tích cực:</strong> Luôn mang đến sự nhiệt tình và vui vẻ</li>
                    <li><strong>Sự ấm áp:</strong> Kết nối dễ dàng với các em nhỏ</li>
                    <li><strong>Óc sáng tạo:</strong> Đem lại những giờ học thú vị và sinh động</li>
                </ul>
            </div>
            
            <h3>🌳 "Cây tình bạn" – Tác phẩm đầy ý nghĩa</h3>
            <p>Kết thúc chương trình, Alex và các em đã cùng nhau tạo nên <strong>"Cây tình bạn"</strong> – một tác phẩm tràn đầy sắc màu với những dấu tay nhỏ bé, tượng trưng cho sự gắn kết và yêu thương. Đó là một lời tạm biệt đầy xúc cảm, lưu lại dấu ấn đẹp trong lòng tất cả mọi người.</p>
            
            <div class="image-gallery-modal" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin: 25px 0;">
                <div class="gallery-placeholder" style="background: linear-gradient(135deg, #ddd6fe, #c4b5fd); height: 150px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #7c3aed; font-weight: bold;">
                    🎨 Cây tình bạn
                </div>
                <div class="gallery-placeholder" style="background: linear-gradient(135deg, #fef3c7, #fbbf24); height: 150px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #d97706; font-weight: bold;">
                    🤝 Hoạt động lớp học
                </div>
            </div>
            
            <h3>🙏 Lời cảm ơn chân thành</h3>
            <p>Hand in Hand Foundation xin gửi lời cảm ơn chân thành đến:</p>
            <ul style="line-height: 1.8; margin: 15px 0;">
                <li><strong>Alex Tuddenham</strong> vì những đóng góp tuyệt vời trong tuần qua</li>
                <li><strong>Cô Nicola Lathey</strong> từ tổ chức <em>The Owl Charity</em> vì đã kết nối để hành trình ý nghĩa này được bắt đầu</li>
            </ul>
            
            <div class="pride-message" style="background: linear-gradient(135deg, #1e40af, #3b82f6); color: white; padding: 25px; border-radius: 12px; margin: 25px 0; text-align: center;">
                <h4 style="color: white; margin-bottom: 15px;">🌿 Lời chúc tốt đẹp</h4>
                <p style="font-size: 1.1rem; line-height: 1.6; margin: 0;"><em>"Chúc Alex thật nhiều thành công trên con đường trở thành nhà tâm lý học tại Đại học Exeter – Hand in Hand luôn tự hào vì đã có bạn là một phần trong đại gia đình của mình!"</em></p>
            </div>
            
            <div class="partnership-info" style="background: #f8fafc; border: 2px solid #e2e8f0; border-radius: 10px; padding: 20px; margin: 20px 0;">
                <h4 style="color: #1e293b; margin-bottom: 15px;">🤝 Về chương trình tình nguyện</h4>
                <p style="color: #64748b; line-height: 1.6;">Hand in Hand Foundation luôn chào đón các tình nguyện viên quốc tế đến tham gia các hoạt động hỗ trợ trẻ em có nhu cầu đặc biệt. Những đóng góp như của Alex không chỉ mang lại niềm vui cho các em mà còn tạo ra những kết nối văn hóa ý nghĩa.</p>
            </div>
            
            <hr style="margin: 30px 0;">
            
            <div class="contact-info" style="text-align: center; padding: 20px; background: #f0f9ff; border-radius: 8px;">
                <p style="color: #1e40af; font-weight: 600;">📞 Liên hệ Hand in Hand Foundation để biết thêm về chương trình tình nguyện</p>
                <p style="color: #64748b; margin: 8px 0;"><i class="fas fa-envelope"></i> Email: info@handinhandfoundation.org</p>
                <p style="color: #64748b;"><i class="fas fa-phone"></i> Hotline: +84 xxx xxx xxx</p>
            </div>
        </div>
    </div>
</div>

<div id="modalTrungThu" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>🥮 Trung Thu Rộn Ràng Tại Hand in Hand!</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Thứ Hai, 6/10/2025</p>
        </div>
        <div class="modal-body">
            <p><strong>Ngày Thứ Hai, 6/10/2025, không khí Trung Thu ngập tràn niềm vui tại Trung tâm Hand in Hand – Cơ sở 1. Các bạn nhỏ đã cùng nhau làm bánh, múa lân, ca hát và phá cỗ trong bầu không khí náo nhiệt, đầy ắp tiếng cười.</strong></p>
            
            <hr>
            
            <h3>🥮 Trải nghiệm làm bánh – niềm vui giản dị mà ý nghĩa</h3>
            <p>Đối với các bé, việc được tự tay chạm vào bột, cho bánh vào khuôn và quan sát những chiếc bánh nướng vàng óng trong lò là một trải nghiệm vừa mới lạ vừa thú vị.</p>
            
            <p>Hoạt động này không chỉ giúp các con rèn luyện kỹ năng vận động tinh, mà còn khơi gợi sự tò mò, tính kiên nhẫn và khả năng làm việc theo nhóm.</p>
            
            <div class="festival-activities">
                <div class="activity-item">
                    <span class="activity-icon">🥮</span>
                    <div>
                        <h4>Làm bánh trung thu</h4>
                        <p>Tự tay nặn bột, tạo hình và nướng bánh vàng óng</p>
                    </div>
                </div>
                
                <div class="activity-item">
                    <span class="activity-icon">🦁</span>
                    <div>
                        <h4>Múa lân sôi động</h4>
                        <p>Các bé thích thú với điệu múa lân truyền thống</p>
                    </div>
                </div>
                
                <div class="activity-item">
                    <span class="activity-icon">🎵</span>
                    <div>
                        <h4>Ca hát vui vẻ</h4>
                        <p>Những bài hát Trung Thu quen thuộc vang lên rộn ràng</p>
                    </div>
                </div>
                
                <div class="activity-item">
                    <span class="activity-icon">🍽️</span>
                    <div>
                        <h4>Phá cỗ ấm cúng</h4>
                        <p>Cùng nhau thưởng thức những món ăn ngon miệng</p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>🧡 Trung Thu – Kết nối và sẻ chia</h3>
            <p>Không chỉ là dịp vui chơi, Trung Thu còn là cơ hội để các con kết nối, chia sẻ và cảm nhận tình yêu thương từ thầy cô, bạn bè và gia đình.</p>
            
            <p>Những nụ cười, ánh mắt háo hức và bầu không khí rộn ràng của ngày hội chắc chắn sẽ trở thành kỷ niệm đáng nhớ trong hành trình đến trường của các con.</p>
            
            <div class="festival-wishes">
                <h3>🌟 Lời chúc từ Hand in Hand Foundation</h3>
                <p class="wishes-text"><em>"Chúc các em nhỏ Hand in Hand một mùa Trung Thu thật vui, thật ấm áp và tràn đầy tiếng cười!"</em></p>
            </div>
            
            <hr>
            
            <h3>📸 Khoảnh khắc đáng nhớ</h3>
            <div class="festival-gallery">
                <div class="gallery-grid">
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/53.png', 'Các bé cùng nhau làm bánh Trung Thu')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/53.png" alt="Các bé cùng nhau làm bánh Trung Thu" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Các bé cùng nhau làm bánh</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/52.png', 'Múa lân sôi động trong ngày Trung Thu')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/52.png" alt="Múa lân Trung Thu" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Múa lân sôi động</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/53.png', 'Ca hát và vui chơi trong không khí lễ hội')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/53.png" alt="Ca hát Trung Thu" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Ca hát vui vẻ</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/54.png', 'Cùng nhau phá cỗ và thưởng thức bánh Trung Thu')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/54.png" alt="Phá cỗ Trung Thu" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Phá cỗ ấm cúng</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/55.png', 'Những nụ cười rạng rỡ của các bé')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/55.png" alt="Nụ cười rạng rỡ" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Nụ cười rạng rỡ</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item" onclick="openImageModal('<?php echo get_template_directory_uri(); ?>/assets/images/56.png', 'Khoảnh khắc đáng nhớ của ngày hội Trung Thu')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/56.png" alt="Khoảnh khắc đáng nhớ" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-expand-alt"></i>
                            <p>Khoảnh khắc đáng nhớ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalAnimalTherapy" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>🐶 Động vật trị liệu – Phương pháp thân thiện và hiệu quả dành cho trẻ rối loạn phổ tự kỷ</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Ngày 4/10/2025</p>
        </div>
        <div class="modal-body">
            <p><strong>Ngày 4/10/2025 vừa qua, Trung tâm Hand in Hand Foundation đã tổ chức buổi tập huấn cơ bản về "Động vật trị liệu" cùng cô Sandra Veloso – chuyên gia quốc tế và là người bạn đồng hành thân thiết của trung tâm trong nhiều năm qua.</strong></p>
            
            <p>Bắt đầu từ tháng 10/2025, vào mỗi sáng thứ Tư và thứ Sáu, các bé tại Cơ sở 1 Hand in Hand Foundation sẽ được tham gia hoạt động trị liệu cùng chú chó Churro – người bạn bốn chân đáng yêu, mang đến sự bình tĩnh, niềm vui và nguồn năng lượng tích cực cho các con.</p>
            
            <hr>
            
            <h3>🐾 Động vật trị liệu là gì?</h3>
            <p>Động vật trị liệu (Animal-Assisted Therapy – AAT) là một phương pháp can thiệp có mục tiêu rõ ràng, trong đó động vật được huấn luyện đặc biệt (như chó, ngựa, thỏ…) cùng tham gia vào quá trình trị liệu nhằm thúc đẩy giao tiếp, tăng tương tác xã hội và phát triển cảm xúc ở người được hỗ trợ.</p>
            
            <p>Phương pháp này đã được áp dụng phổ biến ở nhiều quốc gia trên thế giới. Tại Mỹ, Nhật Bản hay Anh, động vật trị liệu đã trở thành một phần quen thuộc trong hệ thống giáo dục và y tế – giúp người tham gia giảm căng thẳng, ổn định tâm lý và cải thiện kỹ năng xã hội.</p>
        </div>
    </div>
</div>

<div id="modalChurro" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>🐾 Gặp gỡ Churro - Bạn đồng hành đặc biệt</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> Từ tháng 10/2025</p>
        </div>
        <div class="modal-body">
            <p><strong>Bắt đầu từ tháng 10/2025, vào mỗi sáng thứ Tư và thứ Sáu, các bé tại Cơ sở 1 Hand in Hand Foundation sẽ được tham gia hoạt động trị liệu cùng chú chó Churro – người bạn bốn chân đáng yêu.</strong></p>
            
            <p>Churro không chỉ là một chú chó thông thường, mà là một "cộng sự" đã được huấn luyện chuyên nghiệp để hỗ trợ trẻ em có nhu cầu đặc biệt. Với tính cách hiền lành, kiên nhẫn và thân thiện, Churro sẽ mang đến:</p>
            
            <ul>
                <li><strong>Sự bình tĩnh:</strong> Giúp trẻ thư giãn và giảm căng thẳng</li>
                <li><strong>Niềm vui:</strong> Tạo ra những khoảnh khắc hạnh phúc trong quá trình học tập</li>
                <li><strong>Năng lượng tích cực:</strong> Khuyến khích trẻ tham gia tích cực vào các hoạt động</li>
                <li><strong>Kết nối cảm xúc:</strong> Tạo cầu nối giữa trẻ và thế giới xung quanh</li>
            </ul>
            
            <p><em>Lịch hoạt động: Thứ Tư và thứ Sáu hàng tuần tại Cơ sở 1</em></p>
        </div>
    </div>
</div>

<div id="modalBenefits" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>💚 Lợi ích của động vật trị liệu</h2>
            <p class="modal-date"><i class="fas fa-heart"></i> Nghiên cứu khoa học</p>
        </div>
        <div class="modal-body">
            <p><strong>Nhiều nghiên cứu cho thấy rằng sự hiện diện của động vật có thể mang lại những lợi ích đáng kể:</strong></p>
            
            <div class="benefits-list">
                <div class="benefit-item">
                    <span class="benefit-icon">😌</span>
                    <div>
                        <h4>Giảm lo âu và căng thẳng</h4>
                        <p>Giúp trẻ thư giãn, dễ hợp tác hơn trong các hoạt động học tập và trị liệu</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <span class="benefit-icon">💬</span>
                    <div>
                        <h4>Tăng cường khả năng giao tiếp</h4>
                        <p>Kích thích việc tương tác xã hội và phát triển kỹ năng giao tiếp</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <span class="benefit-icon">✨</span>
                    <div>
                        <h4>Kích thích cảm xúc tích cực</h4>
                        <p>Tạo động lực cho trẻ trong các hoạt động học tập và trị liệu</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <span class="benefit-icon">🤸‍♀️</span>
                    <div>
                        <h4>Phát triển thể chất và vận động</h4>
                        <p>Thông qua việc vuốt ve, chơi hoặc chăm sóc thú cưng</p>
                    </div>
                </div>
            </div>
            
            <p><strong>Đối với trẻ rối loạn phổ tự kỷ,</strong> động vật trị liệu mang đến một kênh giao tiếp tự nhiên, không phán xét – nơi trẻ có thể bộc lộ cảm xúc và kết nối bằng cách chân thành nhất.</p>
            
            <hr>
            
            <h3>🌈 Triển vọng tại Việt Nam</h3>
            <p>Tại Việt Nam, động vật trị liệu còn khá mới mẻ, song đã bắt đầu được quan tâm và thử nghiệm ở một số trung tâm – trong đó có Hand in Hand Foundation.</p>
            
            <p>Chúng tôi tin rằng trong tương lai gần, những "bác sĩ bốn chân" như Churro sẽ xuất hiện nhiều hơn tại các trường học và cơ sở trị liệu – giúp trẻ được hỗ trợ theo cách nhẹ nhàng, gần gũi và hiệu quả hơn.</p>
        </div>
    </div>
</div>

<!-- New Project Modals -->
<div id="modalSurgery" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>🏥 Phẫu thuật miễn phí cho 100 trẻ em bị dị tật bẩm sinh</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> 29/09/2025</p>
        </div>
        <div class="modal-body">
            <p><strong>Chương trình "Mở tim cho em" đã thực hiện thành công 100 ca phẫu thuật miễn phí với tổng kinh phí hơn 2 tỷ đồng, mang lại cơ hội sống mới cho những trẻ em có hoàn cảnh khó khăn.</strong></p>
            
            <div class="surgery-stats">
                <div class="stat-item">
                    <span class="stat-number">100</span>
                    <span class="stat-label">Ca phẫu thuật</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">2 tỷ</span>
                    <span class="stat-label">Tổng kinh phí</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">15</span>
                    <span class="stat-label">Bác sĩ tham gia</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Thành công</span>
                </div>
            </div>

            <h3>🎯 Mục tiêu dự án</h3>
            <p>Chương trình nhằm hỗ trợ phẫu thuật tim miễn phí cho trẻ em từ các gia đình có hoàn cảnh khó khăn, đặc biệt là trẻ có dị tật bẩm sinh về tim mạch.</p>
            
            <h3>👨‍⚕️ Đội ngũ y bác sĩ</h3>
            <ul>
                <li>Các bác sĩ chuyên khoa tim mạch hàng đầu</li>
                <li>Đội ngũ điều dưỡng giàu kinh nghiệm</li>
                <li>Thiết bị y tế hiện đại, đạt chuẩn quốc tế</li>
                <li>Quy trình phẫu thuật an toàn tuyệt đối</li>
            </ul>

            <h3>💝 Ý nghĩa nhân văn</h3>
            <p>Mỗi ca phẫu thuật không chỉ cứu sống một đứa trẻ mà còn mang lại hy vọng cho cả gia đình. Chúng tôi tin rằng mỗi trẻ em đều xứng đáng có một cuộc sống khỏe mạnh và hạnh phúc.</p>
            
            <div class="success-message">
                <h4>🌟 Thành tựu đạt được</h4>
                <p><em>"100 ca phẫu thuật thành công là minh chứng cho tình yêu thương và sự chăm sóc tận tâm của đội ngũ Hand in Hand Foundation. Chúng tôi cam kết tiếp tục mở rộng chương trình để giúp đỡ nhiều trẻ em hơn nữa."</em></p>
            </div>
        </div>
    </div>
</div>

<div id="modalSupport2024" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>📊 Hơn 10.000 trẻ em được hỗ trợ trong năm 2024</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> 29/09/2025</p>
        </div>
        <div class="modal-body">
            <p><strong>Năm 2024 đánh dấu một cột mốc quan trọng trong hoạt động của Hand in Hand Foundation khi đã hỗ trợ trực tiếp hơn 10.000 trẻ em khuyết tật trên toàn quốc, tăng 40% so với năm trước.</strong></p>
            
            <div class="support-breakdown">
                <h3>📈 Thống kê chi tiết</h3>
                <div class="breakdown-grid">
                    <div class="breakdown-item">
                        <span class="breakdown-number">6,500</span>
                        <span class="breakdown-label">Trẻ tự kỷ</span>
                    </div>
                    <div class="breakdown-item">
                        <span class="breakdown-number">2,100</span>
                        <span class="breakdown-label">Trẻ chậm phát triển</span>
                    </div>
                    <div class="breakdown-item">
                        <span class="breakdown-number">800</span>
                        <span class="breakdown-label">Trẻ khiếm thính</span>
                    </div>
                    <div class="breakdown-item">
                        <span class="breakdown-number">600</span>
                        <span class="breakdown-label">Trẻ khuyết tật khác</span>
                    </div>
                </div>
            </div>

            <h3>🏛️ Các chương trình chính</h3>
            <div class="program-list">
                <div class="program-item">
                    <span class="program-icon">📚</span>
                    <div>
                        <h4>Giáo dục hòa nhập</h4>
                        <p>4,200 trẻ được học hòa nhập trong các trường phổ thông</p>
                    </div>
                </div>
                
                <div class="program-item">
                    <span class="program-icon">🏥</span>
                    <div>
                        <h4>Can thiệp sớm</h4>
                        <p>3,800 trẻ dưới 6 tuổi được can thiệp kịp thời</p>
                    </div>
                </div>
                
                <div class="program-item">
                    <span class="program-icon">👨‍👩‍👧‍👦</span>
                    <div>
                        <h4>Hỗ trợ gia đình</h4>
                        <p>2,000 gia đình được tư vấn và đào tạo kỹ năng</p>
                    </div>
                </div>
            </div>

            <h3>🌍 Mở rộng hoạt động</h3>
            <p>Năm 2024, Hand in Hand Foundation đã mở rộng hoạt động ra 15 tỉnh thành, thiết lập mạng lưới hỗ trợ rộng khắp từ Bắc đến Nam.</p>
            
            <div class="achievement-highlight">
                <h4>🏆 Thành tựu nổi bật</h4>
                <ul>
                    <li>Tăng 40% số trẻ được hỗ trợ so với năm 2023</li>
                    <li>Mở 5 trung tâm mới tại các tỉnh miền Trung</li>
                    <li>Đào tạo 500 giáo viên chuyên biệt</li>
                    <li>Phát triển 10 mô hình can thiệp mới</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="modalTalentShow" class="news-modal" style="display: none;">
    <div class="modal-content-news">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2>🎭 Cuộc thi "Tài năng đặc biệt" lần thứ 3</h2>
            <p class="modal-date"><i class="far fa-calendar-alt"></i> 27/09/2025</p>
        </div>
        <div class="modal-body">
            <p><strong>Cuộc thi "Tài năng đặc biệt" lần thứ 3 với sự tham gia của 150 thí sinh đã thành công tốt đẹp, tôn vinh tài năng và lan tỏa thông điệp tích cực về khả năng của trẻ em có nhu cầu đặc biệt.</strong></p>
            
            <div class="contest-overview">
                <div class="contest-stat">
                    <span class="stat-icon">🎭</span>
                    <div>
                        <h4>150 thí sinh</h4>
                        <p>Từ 12 tỉnh thành trên cả nước</p>
                    </div>
                </div>
                <div class="contest-stat">
                    <span class="stat-icon">🏆</span>
                    <div>
                        <h4>8 hạng mục</h4>
                        <p>Âm nhạc, hội họa, thể thao, kỹ năng sống</p>
                    </div>
                </div>
                <div class="contest-stat">
                    <span class="stat-icon">👥</span>
                    <div>
                        <h4>500 khán giả</h4>
                        <p>Gia đình, giáo viên và cộng đồng</p>
                    </div>
                </div>
            </div>

            <h3>🎯 Các hạng mục thi</h3>
            <div class="categories-grid">
                <div class="category-item">
                    <span class="category-icon">🎵</span>
                    <div>
                        <h4>Âm nhạc</h4>
                        <p>Thanh nhạc, nhạc cụ, vũ đạo</p>
                    </div>
                </div>
                
                <div class="category-item">
                    <span class="category-icon">🎨</span>
                    <div>
                        <h4>Hội họa</h4>
                        <p>Vẽ tranh, tạo hình, thủ công</p>
                    </div>
                </div>
                
                <div class="category-item">
                    <span class="category-icon">🏃‍♂️</span>
                    <div>
                        <h4>Thể thao</h4>
                        <p>Bơi lội, chạy bộ, các môn đồng đội</p>
                    </div>
                </div>
                
                <div class="category-item">
                    <span class="category-icon">🎪</span>
                    <div>
                        <h4>Kỹ năng sống</h4>
                        <p>Nấu ăn, làm vườn, giao tiếp</p>
                    </div>
                </div>
            </div>

            <h3>🏅 Giải thưởng và vinh danh</h3>
            <p>Tất cả thí sinh đều nhận được giải thưởng và chứng nhận tham gia. Đặc biệt, 24 em xuất sắc nhất được vinh danh với các giải:</p>
            
            <div class="awards-list">
                <div class="award-item gold">
                    <span class="award-medal">🥇</span>
                    <div>
                        <h4>8 Giải Nhất</h4>
                        <p>Mỗi hạng mục 1 giải, học bổng 5 triệu đồng</p>
                    </div>
                </div>
                
                <div class="award-item silver">
                    <span class="award-medal">🥈</span>
                    <div>
                        <h4>8 Giải Nhì</h4>
                        <p>Học bổng 3 triệu đồng và quà tặng</p>
                    </div>
                </div>
                
                <div class="award-item bronze">
                    <span class="award-medal">🥉</span>
                    <div>
                        <h4>8 Giải Ba</h4>
                        <p>Học bổng 2 triệu đồng và quà lưu niệm</p>
                    </div>
                </div>
            </div>

            <div class="inspiration-message">
                <h4>💫 Thông điệp truyền cảm hứng</h4>
                <p><em>"Cuộc thi không chỉ là nơi thể hiện tài năng mà còn là sân chơi để các em tự tin, vươn lên và chứng minh rằng mỗi người đều có những điểm đặc biệt riêng. Hand in Hand Foundation tự hào đồng hành cùng các em trên hành trình khám phá và phát triển tiềm năng."</em></p>
            </div>
        </div>
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

/* News Modal Styles */
.news-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    padding: 20px;
    box-sizing: border-box;
}

.news-modal.show {
    opacity: 1;
    visibility: visible;
}

.modal-content-news {
    background: white;
    max-width: 800px;
    width: 100%;
    max-height: 90vh;
    border-radius: 20px;
    overflow-y: auto;
    position: relative;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    animation: slideUp 0.4s ease-out;
}

@keyframes slideUp {
    from {
        transform: translateY(50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.modal-header {
    background: linear-gradient(135deg, #4a9fa5 0%, #667eea 100%);
    color: white;
    padding: 30px;
    border-radius: 20px 20px 0 0;
}

.modal-header h2 {
    margin: 0 0 10px 0;
    font-size: 1.8rem;
    font-weight: 700;
    line-height: 1.3;
}

.modal-date {
    margin: 0;
    opacity: 0.9;
    font-size: 0.9rem;
}

.modal-body {
    padding: 30px;
    line-height: 1.8;
    font-size: 1rem;
    color: #333;
}

.modal-body h3 {
    color: #4a9fa5;
    font-size: 1.4rem;
    margin: 25px 0 15px 0;
    font-weight: 600;
}

.modal-body h4 {
    color: #333;
    font-size: 1.1rem;
    margin: 15px 0 8px 0;
    font-weight: 600;
}

.modal-body p {
    margin-bottom: 15px;
}

.modal-body hr {
    border: none;
    height: 1px;
    background: linear-gradient(90deg, transparent, #ddd, transparent);
    margin: 25px 0;
}

.modal-body ul {
    padding-left: 25px;
    margin: 15px 0;
}

.modal-body li {
    margin-bottom: 8px;
}

.benefits-list {
    margin: 20px 0;
}

.benefit-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #f8faff;
    border-radius: 12px;
    border-left: 4px solid #4a9fa5;
}

.benefit-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
}

.benefit-item h4 {
    margin: 0 0 5px 0;
    color: #4a9fa5;
    font-size: 1.1rem;
}

.benefit-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.news-modal .close-modal {
    position: absolute;
    top: 15px;
    right: 20px;
    background: rgba(255,255,255,0.2);
    color: white;
    border: none;
    font-size: 1.8rem;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    z-index: 10;
}

.news-modal .close-modal:hover {
    background: rgba(255,255,255,0.3);
    transform: scale(1.1);
}

/* Responsive for News Modals */
@media (max-width: 768px) {
    .modal-content-news {
        margin: 10px;
        max-width: calc(100vw - 20px);
    }
    
    .modal-header {
        padding: 20px;
    }
    
    .modal-header h2 {
        font-size: 1.4rem;
    }
    
    .modal-body {
        padding: 20px;
    }
    
    .benefit-item {
        flex-direction: column;
        text-align: center;
    }
    
    .benefit-icon {
        margin: 0 0 10px 0;
    }
}

/* Festival Activities Styles */
.festival-activities {
    margin: 20px 0;
}

.activity-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #fff8e7;
    border-radius: 12px;
    border-left: 4px solid #ff9900;
}

.activity-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
}

.activity-item h4 {
    margin: 0 0 5px 0;
    color: #ff9900;
    font-size: 1.1rem;
}

.activity-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.festival-wishes {
    background: linear-gradient(135deg, #ff9900, #ffb84d);
    color: white;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    margin: 20px 0;
}

.festival-wishes h3 {
    margin: 0 0 10px 0;
    color: white !important;
}

.wishes-text {
    font-size: 1.1rem;
    font-style: italic;
    margin: 0;
    line-height: 1.6;
}

/* New Project Modals Styles */
.surgery-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
    gap: 20px;
    margin: 25px 0;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 15px;
}

.stat-item {
    text-align: center;
    padding: 15px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.stat-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: #e63946;
    margin-bottom: 5px;
}

.stat-label {
    font-size: 0.9rem;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.success-message {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 20px;
    border-radius: 15px;
    margin: 20px 0;
}

.success-message h4 {
    margin: 0 0 10px 0;
    color: white !important;
}

.support-breakdown {
    margin: 25px 0;
}

.breakdown-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.breakdown-item {
    text-align: center;
    padding: 20px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    border-radius: 12px;
}

.breakdown-number {
    display: block;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 5px;
}

.breakdown-label {
    font-size: 0.9rem;
    opacity: 0.9;
}

.program-list {
    margin: 20px 0;
}

.program-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #e8f4fd;
    border-radius: 12px;
    border-left: 4px solid #007bff;
}

.program-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
}

.program-item h4 {
    margin: 0 0 5px 0;
    color: #007bff;
    font-size: 1.1rem;
}

.program-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.achievement-highlight {
    background: #fff3cd;
    border: 1px solid #ffeaa7;
    border-radius: 12px;
    padding: 20px;
    margin: 20px 0;
}

.achievement-highlight h4 {
    margin: 0 0 15px 0;
    color: #856404;
}

.achievement-highlight ul {
    margin: 0;
    padding-left: 20px;
}

.achievement-highlight li {
    margin-bottom: 8px;
    color: #856404;
}

.contest-overview {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 25px 0;
}

.contest-stat {
    display: flex;
    align-items: center;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 12px;
    border-left: 4px solid #ffc107;
}

.stat-icon {
    font-size: 2.5rem;
    margin-right: 15px;
}

.contest-stat h4 {
    margin: 0 0 5px 0;
    color: #ffc107;
    font-size: 1.2rem;
}

.contest-stat p {
    margin: 0;
    color: #666;
    font-size: 0.9rem;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.category-item {
    display: flex;
    align-items: center;
    padding: 15px;
    background: #fff8e1;
    border-radius: 12px;
    border-left: 4px solid #ff9800;
}

.category-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
}

.category-item h4 {
    margin: 0 0 5px 0;
    color: #ff9800;
    font-size: 1rem;
}

.category-item p {
    margin: 0;
    color: #666;
    font-size: 0.85rem;
}

.awards-list {
    margin: 20px 0;
}

.award-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    padding: 15px;
    border-radius: 12px;
}

.award-item.gold {
    background: linear-gradient(135deg, #ffd700, #ffed4e);
    border-left: 4px solid #d4af37;
}

.award-item.silver {
    background: linear-gradient(135deg, #c0c0c0, #e8e8e8);
    border-left: 4px solid #999;
}

.award-item.bronze {
    background: linear-gradient(135deg, #cd7f32, #deb887);
    border-left: 4px solid #8b4513;
}

.award-medal {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
}

.award-item h4 {
    margin: 0 0 5px 0;
    font-size: 1.1rem;
}

.award-item p {
    margin: 0;
    font-size: 0.9rem;
    opacity: 0.8;
}

.inspiration-message {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 20px;
    border-radius: 15px;
    margin: 20px 0;
}

.inspiration-message h4 {
    margin: 0 0 15px 0;
    color: white !important;
}

.inspiration-message p {
    margin: 0;
    font-style: italic;
    line-height: 1.6;
}

/* Responsive for new elements */
@media (max-width: 768px) {
    .surgery-stats {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .breakdown-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .contest-overview {
        grid-template-columns: 1fr;
    }
    
    .categories-grid {
        grid-template-columns: 1fr;
    }
    
    .program-item, 
    .category-item,
    .award-item {
        flex-direction: column;
        text-align: center;
    }
    
    .program-icon,
    .category-icon,
    .award-medal {
        margin: 0 0 10px 0;
    }
}

/* Teachers' Day Contest Styles */
.contest-objectives {
    margin: 20px 0;
}

.objective-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #fff3e0;
    border-radius: 12px;
    border-left: 4px solid #ffd700;
}

.objective-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
    color: #ffd700;
}

.objective-item h4 {
    margin: 0 0 5px 0;
    color: #ffd700;
    font-size: 1.1rem;
}

.objective-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.learning-topics {
    margin: 20px 0;
}

.topic-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #e8f5e8;
    border-radius: 12px;
    border-left: 4px solid #4caf50;
}

.topic-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
    color: #4caf50;
}

.topic-item h4 {
    margin: 0 0 5px 0;
    color: #4caf50;
    font-size: 1.1rem;
}

.topic-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.teacher-qualities {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.quality-item {
    display: flex;
    align-items: flex-start;
    padding: 15px;
    background: #f3e5f5;
    border-radius: 12px;
    border-left: 4px solid #9c27b0;
}

.quality-icon {
    font-size: 1.8rem;
    margin-right: 12px;
    flex-shrink: 0;
    color: #9c27b0;
}

.quality-item h4 {
    margin: 0 0 5px 0;
    color: #9c27b0;
    font-size: 1rem;
}

.quality-item p {
    margin: 0;
    color: #666;
    font-size: 0.9rem;
}

.teachers-day-message {
    background: linear-gradient(135deg, #4caf50, #66bb6a);
    color: white;
    padding: 20px;
    border-radius: 15px;
    margin: 20px 0;
}

.teachers-day-message h3 {
    margin: 0 0 15px 0;
    color: white !important;
}

.teachers-day-message p {
    margin: 0;
    font-style: italic;
    line-height: 1.6;
    font-size: 1.05rem;
}

.gratitude-message {
    background: linear-gradient(135deg, #ffd700, #ffeb3b);
    color: #333;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    margin: 20px 0;
}

.gratitude-message h3 {
    margin: 0 0 15px 0;
    color: #333 !important;
}

.gratitude-text {
    font-size: 1.1rem;
    margin: 0 0 15px 0;
    line-height: 1.6;
}

.wishes-text {
    font-size: 1.05rem;
    font-style: italic;
    margin: 0;
    line-height: 1.6;
}

/* Contest Gallery Styles */
.contest-gallery {
    margin: 25px 0;
}

.contest-gallery .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    padding: 0;
}

.contest-gallery .gallery-item {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.contest-gallery .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.contest-gallery .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.contest-gallery .gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(255, 215, 0, 0.85), rgba(255, 235, 59, 0.85));
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.contest-gallery .gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.contest-gallery .gallery-overlay i {
    font-size: 2rem;
    margin-bottom: 10px;
}

.contest-gallery .gallery-overlay p {
    font-size: 0.9rem;
    text-align: center;
    margin: 0;
    padding: 0 10px;
    font-weight: 500;
}

/* Project ImPACT Styles */
.impact-overview {
    margin: 20px 0;
}

.overview-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #fff8e1;
    border-radius: 12px;
    border-left: 4px solid #ff9800;
}

.overview-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
    color: #ff9800;
}

.overview-item h4 {
    margin: 0 0 5px 0;
    color: #ff9800;
    font-size: 1.1rem;
}

.overview-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.impact-benefits {
    margin: 20px 0;
}

.benefit-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #e8f5e8;
    border-radius: 12px;
    border-left: 4px solid #4caf50;
}

.benefit-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
    color: #4caf50;
}

.benefit-item h4 {
    margin: 0 0 5px 0;
    color: #4caf50;
    font-size: 1.1rem;
}

.benefit-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.impact-vision {
    margin: 20px 0;
}

.vision-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #f3e5f5;
    border-radius: 12px;
    border-left: 4px solid #9c27b0;
}

.vision-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
    color: #9c27b0;
}

.vision-item h4 {
    margin: 0 0 5px 0;
    color: #9c27b0;
    font-size: 1.1rem;
}

.vision-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.impact-mission {
    background: linear-gradient(135deg, #ff9800, #ff6f00);
    color: white;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    margin: 20px 0;
}

.impact-mission h3 {
    margin: 0 0 15px 0;
    color: white !important;
}

.mission-text {
    font-size: 1.1rem;
    font-style: italic;
    margin: 0;
    line-height: 1.7;
}

/* ImPACT Gallery Styles */
.impact-gallery {
    margin: 25px 0;
}

.impact-gallery .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    padding: 0;
}

.impact-gallery .gallery-item {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.impact-gallery .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.impact-gallery .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.impact-gallery .gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(255, 152, 0, 0.85), rgba(255, 111, 0, 0.85));
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.impact-gallery .gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.impact-gallery .gallery-overlay i {
    font-size: 2rem;
    margin-bottom: 10px;
}

.impact-gallery .gallery-overlay p {
    font-size: 0.9rem;
    text-align: center;
    margin: 0;
    padding: 0 10px;
    font-weight: 500;
}

/* Autism Awareness Day Styles */
.poem-section {
    background: linear-gradient(135deg, #e3f4ff, #f0f8ff);
    padding: 25px;
    border-radius: 15px;
    margin: 20px 0;
    border-left: 5px solid #0074d9;
}

.poem-author {
    font-style: italic;
    color: #666;
    margin-bottom: 15px;
    text-align: right;
}

.poem-content {
    font-family: 'Playfair Display', serif;
    line-height: 1.8;
    color: #2c3e50;
}

.poem-content p {
    margin-bottom: 20px;
    font-size: 1.05rem;
}

.awareness-activities {
    margin: 20px 0;
}

.awareness-activities .activity-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #e8f4fd;
    border-radius: 12px;
    border-left: 4px solid #0074d9;
}

.awareness-activities .activity-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
    color: #0074d9;
}

.awareness-activities .activity-item h4 {
    margin: 0 0 5px 0;
    color: #0074d9;
    font-size: 1.1rem;
}

.awareness-activities .activity-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.gratitude-section {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 12px;
    margin: 20px 0;
}

.gratitude-list {
    list-style: none;
    padding: 0;
    margin: 15px 0;
}

.gratitude-list li {
    padding: 8px 0;
    border-bottom: 1px solid #e9ecef;
    color: #495057;
}

.gratitude-list li:last-child {
    border-bottom: none;
}

.autism-wishes {
    background: linear-gradient(135deg, #0074d9, #4fa8ff);
    color: white;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    margin: 20px 0;
}

.autism-wishes h3 {
    margin: 0 0 15px 0;
    color: white !important;
}

.wishes-text {
    font-size: 1.15rem;
    font-style: italic;
    margin: 0 0 15px 0;
    line-height: 1.6;
}

.mission-text {
    font-size: 1.1rem;
    margin: 0;
    font-weight: 600;
}

/* Autism Gallery Styles */
.autism-gallery {
    margin: 25px 0;
}

.autism-gallery .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    padding: 0;
}

.autism-gallery .gallery-item {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.autism-gallery .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.autism-gallery .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.autism-gallery .gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 116, 217, 0.85), rgba(79, 168, 255, 0.85));
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.autism-gallery .gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.autism-gallery .gallery-overlay i {
    font-size: 2rem;
    margin-bottom: 10px;
}

.autism-gallery .gallery-overlay p {
    font-size: 0.9rem;
    text-align: center;
    margin: 0;
    padding: 0 10px;
    font-weight: 500;
}

/* Delegation Activities Styles */
.delegation-activities {
    margin: 20px 0;
}

.delegation-activities .activity-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #fff3e0;
    border-radius: 12px;
    border-left: 4px solid #ff9800;
}

.delegation-activities .activity-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
}

.delegation-activities .activity-item h4 {
    margin: 0 0 5px 0;
    color: #ff9800;
    font-size: 1.1rem;
}

.delegation-activities .activity-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.delegation-significance {
    margin: 20px 0;
}

.significance-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #f3e5f5;
    border-radius: 12px;
    border-left: 4px solid #9c27b0;
}

.significance-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
}

.significance-item h4 {
    margin: 0 0 5px 0;
    color: #9c27b0;
    font-size: 1.1rem;
}

.significance-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.delegation-gratitude {
    background: linear-gradient(135deg, #ff9800, #ff6f00);
    color: white;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    margin: 20px 0;
}

.delegation-gratitude h3 {
    margin: 0 0 15px 0;
    color: white !important;
}

.gratitude-text {
    font-size: 1.1rem;
    font-style: italic;
    margin: 0;
    line-height: 1.6;
}

/* Delegation Gallery Styles */
.delegation-gallery {
    margin: 25px 0;
}

.delegation-gallery .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    padding: 0;
}

.delegation-gallery .gallery-item {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.delegation-gallery .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.delegation-gallery .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.delegation-gallery .gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(255, 152, 0, 0.85), rgba(255, 111, 0, 0.85));
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.delegation-gallery .gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.delegation-gallery .gallery-overlay i {
    font-size: 2rem;
    margin-bottom: 10px;
}

.delegation-gallery .gallery-overlay p {
    font-size: 0.9rem;
    text-align: center;
    margin: 0;
    padding: 0 10px;
    font-weight: 500;
}

/* Volunteer Activities Styles */
.volunteer-activities {
    margin: 20px 0;
}

.volunteer-activities .activity-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: #e8f4fd;
    border-radius: 12px;
    border-left: 4px solid #007bff;
}

.volunteer-activities .activity-icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
}

.volunteer-activities .activity-item h4 {
    margin: 0 0 5px 0;
    color: #007bff;
    font-size: 1.1rem;
}

.volunteer-activities .activity-item p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
}

.volunteer-wishes {
    background: linear-gradient(135deg, #007bff, #4fa8ff);
    color: white;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    margin: 20px 0;
}

.volunteer-wishes h3 {
    margin: 0 0 10px 0;
    color: white !important;
}

.volunteer-wishes .wishes-text {
    font-size: 1.1rem;
    font-style: italic;
    margin: 0;
    line-height: 1.6;
}

/* Volunteer Gallery Styles */
.volunteer-gallery {
    margin: 25px 0;
}

.volunteer-gallery .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    padding: 0;
}

.volunteer-gallery .gallery-item {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.volunteer-gallery .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.volunteer-gallery .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.volunteer-gallery .gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 123, 255, 0.85), rgba(79, 168, 255, 0.85));
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.volunteer-gallery .gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.volunteer-gallery .gallery-overlay i {
    font-size: 2rem;
    margin-bottom: 10px;
}

.volunteer-gallery .gallery-overlay p {
    font-size: 0.9rem;
    text-align: center;
    margin: 0;
    padding: 0 10px;
    font-weight: 500;
}

/* Festival Gallery Styles */
.festival-gallery {
    margin: 25px 0;
}

.festival-gallery .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    padding: 0;
}

.festival-gallery .gallery-item {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/3;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.festival-gallery .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.festival-gallery .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.festival-gallery .gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(255, 153, 0, 0.85), rgba(255, 183, 77, 0.85));
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.festival-gallery .gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.festival-gallery .gallery-overlay i {
    font-size: 2rem;
    margin-bottom: 10px;
}

.festival-gallery .gallery-overlay p {
    font-size: 0.9rem;
    text-align: center;
    margin: 0;
    padding: 0 10px;
    font-weight: 500;
}

/* Image Modal Styles */
.image-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.9);
    opacity: 0;
    transition: opacity 0.3s ease;
    align-items: center;
    justify-content: center;
}

.image-modal.show {
    opacity: 1;
}

.modal-content-image {
    position: relative;
    max-width: 90%;
    max-height: 90%;
    margin: auto;
    display: block;
}

.modal-content-image img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.5);
}

.image-caption {
    color: white;
    text-align: center;
    padding: 10px;
    margin-top: 10px;
    font-size: 1.1rem;
    background: rgba(0,0,0,0.7);
    border-radius: 8px;
}

.close-image-modal {
    position: absolute;
    top: -50px;
    right: 0;
    color: white;
    font-size: 2rem;
    background: rgba(255,255,255,0.2);
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.close-image-modal:hover {
    background: rgba(255,255,255,0.3);
    transform: scale(1.1);
}


</style>

<!-- Image Modal -->
<div id="imageModal" class="image-modal">
    <div class="modal-content-image">
        <button class="close-image-modal" onclick="closeImageModal()">&times;</button>
        <img id="modalImage" src="" alt="Modal Image">
        <div id="modalCaption" class="image-caption"></div>
    </div>
</div>

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

// News Modal Functions
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'flex';
        setTimeout(() => {
            modal.classList.add('show');
        }, 10);
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
        
        // Restore body scroll
        document.body.style.overflow = '';
    }
}

function closeAllModals() {
    const modals = ['modalOfficialLicense2023', 'modalAutismMessage2024', 'modalDirectorTraining', 'modalTeachersDay', 'modalProjectImPACT', 'modalAutismAwareness', 'modalGovernmentDelegation', 'modalAlexVolunteer', 'modalTrungThu', 'modalAnimalTherapy', 'modalChurro', 'modalBenefits', 'modalSurgery', 'modalSupport2024', 'modalTalentShow'];
    modals.forEach(modalId => {
        const modal = document.getElementById(modalId);
        if (modal && modal.style.display === 'flex') {
            closeModal(modalId);
        }
    });
    closeImageModal();
}



// Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    console.log('Tin tức page loaded successfully - ' + new Date().toLocaleString());
    console.log('Template updated: 22/10/2025 - Complete projects version with all 6 articles');
    
    // Close modal events for image modal
    const imageModal = document.getElementById('imageModal');
    const imageCloseBtn = imageModal?.querySelector('.close-modal');
    
    if (imageCloseBtn) {
        imageCloseBtn.addEventListener('click', closeImageModal);
    }
    
    if (imageModal) {
        imageModal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });
    }
    
    // Close modal events for news modals
    const newsModals = ['modalOfficialLicense2023', 'modalAutismMessage2024', 'modalDirectorTraining', 'modalTeachersDay', 'modalProjectImPACT', 'modalAutismAwareness', 'modalGovernmentDelegation', 'modalAlexVolunteer', 'modalTrungThu', 'modalFacility2Inauguration', 'modalAnimalTherapy', 'modalChurro', 'modalBenefits', 'modalSurgery', 'modalSupport2024', 'modalTalentShow'];
    newsModals.forEach(modalId => {
        const modal = document.getElementById(modalId);
        const closeBtn = modal?.querySelector('.close-modal');
        
        if (closeBtn) {
            closeBtn.addEventListener('click', () => closeModal(modalId));
        }
        
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal(modalId);
                }
            });
        }
    });
    
    // Escape key to close all modals
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeAllModals();
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
