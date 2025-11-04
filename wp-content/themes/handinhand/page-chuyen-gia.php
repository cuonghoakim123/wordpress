<?php
/**
 * Template Name: Chuyên Gia
 * Description: Trang giới thiệu các chuyên gia của Hand in Hand Foundation
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

/* Hero Section - White Theme */
.expert-hero {
    background: #ffffff;
    padding: 120px 0 80px 0;
    position: relative;
    overflow: hidden;
    border-bottom: 1px solid #e2e8f0;
}

.expert-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 30%, rgba(74, 159, 165, 0.03) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(230, 57, 70, 0.03) 0%, transparent 50%);
    pointer-events: none;
}

.hero-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    text-align: center;
    color: #1e293b;
    position: relative;
    z-index: 2;
}

.hero-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 700;
    margin-bottom: 1rem;
    color: #1e293b;
    animation: fadeInUp 1s ease-out;
}

.hero-subtitle {
    font-size: clamp(1rem, 2.5vw, 1.3rem);
    opacity: 0.8;
    font-weight: 300;
    max-width: 800px;
    margin: 0 auto;
    color: #64748b;
    animation: fadeInUp 1s ease-out 0.3s both;
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

/* Main Content */
.expert-main {
    background: #f8fafc;
    padding: 80px 0;
}

.expert-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Expert Profile Section */
.expert-profile {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.1);
    margin-bottom: 60px;
    transition: transform 0.3s ease;
}

.expert-profile:hover {
    transform: translateY(-10px);
}

.profile-header {
    display: grid;
    grid-template-columns: 300px 1fr;
    gap: 50px;
    padding: 50px;
    align-items: start;
}

.profile-image {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    aspect-ratio: 3/4;
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.expert-profile:hover .profile-image img {
    transform: scale(1.05);
}

.image-placeholder {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #4a9fa5 0%, #667eea 100%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 4rem;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
}

.image-placeholder:hover {
    background: linear-gradient(135deg, #3a8a8f 0%, #5a67d8 100%);
    transform: scale(1.02);
}

.upload-hint {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    font-size: 1rem;
    opacity: 0.9;
    background: rgba(0,0,0,0.3);
    padding: 15px 20px;
    border-radius: 12px;
    backdrop-filter: blur(10px);
}

.upload-hint i {
    font-size: 1.5rem;
}

.upload-hint span {
    font-size: 0.9rem;
    font-weight: 500;
}

.profile-info {
    padding: 20px 0;
}

.expert-name {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 15px;
    line-height: 1.2;
}

.expert-title {
    font-size: 1.3rem;
    color: #4a9fa5;
    font-weight: 600;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.expert-intro {
    font-size: 1.1rem;
    color: #64748b;
    line-height: 1.8;
    margin-bottom: 30px;
    font-style: italic;
}

.expert-achievements {
    display: flex;
    gap: 30px;
    margin-top: 30px;
}

.achievement-item {
    text-align: center;
    padding: 20px;
    background: #f1f5f9;
    border-radius: 15px;
    flex: 1;
}

.achievement-number {
    font-size: 2rem;
    font-weight: 800;
    color: #4a9fa5;
    display: block;
    margin-bottom: 5px;
}

.achievement-label {
    font-size: 0.9rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 500;
}

/* Content Sections */
.content-section {
    background: white;
    border-radius: 16px;
    padding: 40px;
    margin-bottom: 30px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.content-section:hover {
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transform: translateY(-5px);
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 25px;
    position: relative;
    padding-left: 25px;
}

.section-title::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 4px;
    height: 30px;
    background: linear-gradient(135deg, #4a9fa5, #667eea);
    border-radius: 2px;
}

.section-content {
    font-size: 1rem;
    line-height: 1.8;
    color: #334155;
}

.section-content p {
    margin-bottom: 20px;
}

.section-content p:last-child {
    margin-bottom: 0;
}

/* Highlight Box */
.highlight-box {
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
    border-left: 5px solid #4a9fa5;
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
    position: relative;
}

.highlight-box::before {
    content: '"';
    position: absolute;
    top: -10px;
    left: 20px;
    font-size: 4rem;
    color: #4a9fa5;
    font-family: serif;
    opacity: 0.3;
}

.highlight-text {
    font-size: 1.2rem;
    font-weight: 500;
    color: #1e293b;
    font-style: italic;
    line-height: 1.6;
}

/* Timeline Section */
.timeline {
    margin: 40px 0;
}

.timeline-item {
    display: flex;
    gap: 30px;
    margin-bottom: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid #e2e8f0;
    position: relative;
}

.timeline-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.timeline-year {
    flex: 0 0 100px;
    background: linear-gradient(135deg, #4a9fa5, #667eea);
    color: white;
    padding: 15px;
    border-radius: 12px;
    text-align: center;
    font-weight: 700;
    font-size: 1.1rem;
    height: fit-content;
}

.timeline-content {
    flex: 1;
    padding-top: 10px;
}

.timeline-title {
    font-size: 1.2rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 10px;
}

.timeline-description {
    color: #64748b;
    line-height: 1.6;
}

/* Responsive Design */
@media (max-width: 768px) {
    .expert-hero {
        padding: 100px 0 60px 0;
    }
    
    .profile-header {
        grid-template-columns: 1fr;
        gap: 30px;
        padding: 30px;
        text-align: center;
    }
    
    .profile-image {
        max-width: 250px;
        margin: 0 auto;
    }
    
    .expert-achievements {
        flex-direction: column;
        gap: 15px;
    }
    
    .timeline-item {
        flex-direction: column;
        gap: 15px;
    }
    
    .timeline-year {
        align-self: flex-start;
        width: fit-content;
    }
    
    .content-section {
        padding: 25px;
    }
    
    .expert-main {
        padding: 60px 0;
    }
}

/* Expert Divider */
.expert-divider {
    margin: 80px 0;
    text-align: center;
    position: relative;
}

.expert-divider::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
    transform: translateY(-50%);
}

.divider-content {
    background: #f8fafc;
    padding: 0 30px;
    display: inline-flex;
    align-items: center;
    gap: 15px;
    color: #64748b;
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    z-index: 2;
}

.divider-content i {
    color: #e63946;
    font-size: 1.2rem;
}

/* Expert Section */
.expert-section {
    margin-top: 60px;
    padding-top: 40px;
}

.section-header-custom {
    text-align: center;
    margin-bottom: 60px;
    padding: 40px 20px;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    border-radius: 20px;
    position: relative;
    overflow: hidden;
}

.section-header-custom::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 20%, rgba(74, 159, 165, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(230, 57, 70, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.expert-section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 15px;
    position: relative;
    z-index: 2;
}

.expert-section-subtitle {
    font-size: 1.2rem;
    color: #4a9fa5;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    position: relative;
    z-index: 2;
}

/* Awards Grid */
.awards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    margin: 30px 0;
}

.award-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    padding: 25px;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    border-radius: 16px;
    border-left: 4px solid #4a9fa5;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.award-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(74, 159, 165, 0.05) 0%, transparent 100%);
    pointer-events: none;
}

.award-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(74, 159, 165, 0.15);
    border-left-color: #e63946;
}

.award-icon {
    flex: 0 0 50px;
    height: 50px;
    background: linear-gradient(135deg, #4a9fa5, #667eea);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    position: relative;
    z-index: 2;
}

.award-item:hover .award-icon {
    background: linear-gradient(135deg, #e63946, #dc2626);
    transform: scale(1.1);
}

.award-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 8px;
    line-height: 1.3;
}

.award-content p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.5;
    margin: 0;
}

/* Enhanced Responsive */
@media (max-width: 768px) {
    .awards-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .award-item {
        padding: 20px;
    }
    
    .divider-content {
        padding: 0 20px;
        font-size: 0.9rem;
    }
    
    .expert-section-title {
        font-size: 2rem;
    }
    
    .expert-section-subtitle {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .award-item {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    
    .award-icon {
        align-self: center;
    }
}

/* International Expert Styles */
.expert-profile.international {
    border: 3px solid transparent;
    background: linear-gradient(white, white) padding-box,
                linear-gradient(45deg, #1e3a8a, #3b82f6, #06b6d4) border-box;
    position: relative;
}

.expert-profile.international::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #1e3a8a, #3b82f6, #06b6d4);
    border-radius: 22px;
    z-index: -1;
    animation: borderGlow 3s ease-in-out infinite alternate;
}

@keyframes borderGlow {
    0% {
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
    }
    100% {
        box-shadow: 0 0 40px rgba(6, 182, 212, 0.7);
    }
}

.international-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #1e40af, #3b82f6);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 4px 15px rgba(30, 64, 175, 0.4);
    backdrop-filter: blur(10px);
}

.international-divider .divider-content {
    background: linear-gradient(135deg, #eff6ff, #dbeafe);
    color: #1e40af;
}

.international-divider .divider-content i {
    color: #3b82f6;
}

.international-section .section-header-custom {
    background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
    border: 2px solid #93c5fd;
}

.international-section .section-header-custom::before {
    background: 
        radial-gradient(circle at 20% 20%, rgba(59, 130, 246, 0.15) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(30, 64, 175, 0.15) 0%, transparent 50%);
}

.flag-indicator {
    position: absolute;
    top: 20px;
    right: 30px;
    z-index: 3;
}

.flag-indicator img {
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

/* Qualifications Grid */
.qualifications-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.qualification-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 20px;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    border-radius: 12px;
    border-left: 4px solid #3b82f6;
    transition: all 0.3s ease;
}

.qualification-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(59, 130, 246, 0.15);
    border-left-color: #1e40af;
}

.qual-icon {
    flex: 0 0 40px;
    height: 40px;
    background: linear-gradient(135deg, #3b82f6, #1e40af);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
}

.qual-content h4 {
    font-size: 1rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 5px;
    line-height: 1.3;
}

.qual-content p {
    color: #64748b;
    font-size: 0.85rem;
    line-height: 1.4;
    margin: 0;
}

/* International Highlight */
.international-highlight {
    background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
    border-left-color: #3b82f6;
}

.international-highlight::before {
    color: #3b82f6;
}

/* Countries Grid */
.countries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 25px 0;
}

.country-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 20px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.country-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    border-color: #3b82f6;
}

.country-flag {
    flex: 0 0 50px;
    height: 40px;
}

.country-flag img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
}

.country-info h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 5px;
}

.country-info p {
    color: #64748b;
    font-size: 0.9rem;
    margin: 0;
    line-height: 1.4;
}

/* Support Activities */
.support-activities {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin: 25px 0;
}

.activity-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 25px;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    border-radius: 16px;
    border-top: 4px solid #3b82f6;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.activity-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, transparent 100%);
    pointer-events: none;
}

.activity-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(59, 130, 246, 0.2);
    border-top-color: #1e40af;
}

.activity-icon {
    flex: 0 0 50px;
    height: 50px;
    background: linear-gradient(135deg, #3b82f6, #1e40af);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.4rem;
    position: relative;
    z-index: 2;
}

.activity-item:hover .activity-icon {
    background: linear-gradient(135deg, #1e40af, #1e3a8a);
    transform: scale(1.1);
}

.activity-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 8px;
    line-height: 1.3;
}

.activity-content p {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.5;
    margin: 0;
}

/* Enhanced Mobile Responsive */
@media (max-width: 768px) {
    .qualifications-grid,
    .countries-grid,
    .support-activities {
        grid-template-columns: 1fr;
    }
    
    .country-item,
    .activity-item,
    .qualification-item {
        padding: 15px;
    }
    
    .flag-indicator {
        display: none;
    }
    
    .expert-profile.international::before {
        animation: none;
    }
}

@media (max-width: 480px) {
    .international-badge,
    .specialist-badge,
    .partnership-badge {
        position: relative;
        top: 0;
        right: 0;
        margin-top: 15px;
        align-self: flex-start;
    }
}

/* Partnership Badge */
.partnership-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8em;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
    z-index: 2;
    transition: all 0.3s ease;
}

.partnership-badge:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 16px rgba(245, 158, 11, 0.5);
}

.specialist-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8em;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
    z-index: 2;
    transition: all 0.3s ease;
}

.specialist-badge:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 16px rgba(16, 185, 129, 0.5);
}

/* Partnership Expert Profile Styling */
.expert-profile.partnership {
    border: 2px solid #fed7aa;
    background: linear-gradient(135deg, #fefbf3 0%, #fffbeb 100%);
}

.expert-profile.partnership .expert-name {
    color: #d97706;
}

.expert-profile.partnership .expert-title {
    color: #f59e0b;
}

.expert-profile.partnership .profile-header::before {
    background: linear-gradient(45deg, transparent 30%, rgba(245, 158, 11, 0.1) 70%);
}

/* Memorial Profile Card */
.expert-profile.memorial-profile {
    border: 3px solid #ec4899;
    background: linear-gradient(135deg, #fdf2f8 0%, #fef7ff 100%);
    position: relative;
    overflow: hidden;
}

.expert-profile.memorial-profile::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #ec4899, #be185d, #9d174d, #be185d, #ec4899);
    background-size: 200% 100%;
    animation: memorial-profile-gradient 3s ease-in-out infinite;
}

@keyframes memorial-profile-gradient {
    0%, 100% { background-position: 0% 0%; }
    50% { background-position: 100% 0%; }
}

.expert-profile.memorial-profile .expert-name {
    color: #be185d;
}

.expert-profile.memorial-profile .expert-title {
    color: #ec4899;
    font-style: italic;
}

.profile-header.memorial-profile-header::before {
    background: linear-gradient(45deg, transparent 30%, rgba(236, 72, 153, 0.1) 70%);
}

.profile-image.memorial-image {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.memorial-avatar {
    width: 200px;
    height: 200px;
    background: linear-gradient(135deg, #ec4899, #be185d);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 30px rgba(236, 72, 153, 0.3);
    position: relative;
}

.memorial-avatar::before {
    content: '';
    position: absolute;
    inset: -3px;
    border-radius: 50%;
    background: linear-gradient(45deg, #ec4899, #be185d, #9d174d, #be185d);
    background-size: 200% 200%;
    animation: memorial-avatar-border 3s linear infinite;
    z-index: -1;
}

@keyframes memorial-avatar-border {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.memorial-avatar i {
    font-size: 4em;
    color: white;
    animation: memorial-star 2s ease-in-out infinite;
}

@keyframes memorial-star {
    0%, 100% { 
        opacity: 0.8; 
        transform: scale(1) rotate(0deg); 
        filter: brightness(1);
    }
    50% { 
        opacity: 1; 
        transform: scale(1.1) rotate(5deg); 
        filter: brightness(1.2) drop-shadow(0 0 10px rgba(255,255,255,0.5));
    }
}

.memorial-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #ec4899, #be185d);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8em;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 4px 12px rgba(236, 72, 153, 0.4);
    z-index: 2;
    animation: memorial-badge-glow 2s ease-in-out infinite;
}

@keyframes memorial-badge-glow {
    0%, 100% { 
        box-shadow: 0 4px 12px rgba(236, 72, 153, 0.4);
        transform: scale(1);
    }
    50% { 
        box-shadow: 0 6px 20px rgba(236, 72, 153, 0.6);
        transform: scale(1.05);
    }
}

.memorial-name {
    color: #be185d !important;
    font-family: 'Playfair Display', serif;
}

.memorial-title {
    color: #ec4899 !important;
    font-style: italic;
}

.memorial-description {
    color: #6b7280;
    font-style: italic;
    border-left: 3px solid #ec4899;
    padding-left: 15px;
}

.expert-achievements.memorial-achievements {
    border-top: 2px solid #f3e8ff;
}

.achievement-item.memorial-achievement {
    transition: all 0.3s ease;
}

.achievement-item.memorial-achievement:hover {
    background: #fef7ff;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(236, 72, 153, 0.15);
}

.achievement-item.memorial-achievement .achievement-number {
    color: #ec4899;
    font-weight: 700;
}

.achievement-item.memorial-achievement .achievement-label {
    color: #be185d;
}

@media (max-width: 480px) {
    .expert-name {
        font-size: 2rem;
    }
    
    .expert-title {
        font-size: 1.1rem;
    }
    
    .section-title {
        font-size: 1.5rem;
        padding-left: 20px;
    }
    
    .highlight-box {
        padding: 20px;
    }
}
</style>

<!-- Hero Section -->
<section class="expert-hero">
    <div class="hero-content">
        <h1 class="hero-title">Đội Ngũ Chuyên Gia</h1>
        <p class="hero-subtitle">Những người tiên phong trong lĩnh vực giáo dục đặc biệt và tự kỷ tại Việt Nam</p>
    </div>
</section>

<!-- Main Content -->
<section class="expert-main">
    <div class="expert-container">
        
        <!-- Expert Profile 1 - Cô Hiền Đỗ -->
        <article class="expert-profile">
            <div class="profile-header">
                <div class="profile-image">
                    <!-- Ảnh Cô Hiền Đỗ -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/23.png"
                         alt="Cô Theresa Hiền Đỗ - Giám đốc Hand in Hand Foundation" 
                         loading="lazy">
                </div>
                
                <div class="profile-info">
                    <h2 class="expert-name">Cô Theresa Hiền Đỗ</h2>
                    <div class="expert-title">Giám đốc & Người sáng lập Hand in Hand Foundation</div>
                    <div class="expert-intro">
                        Một trong những chuyên gia tiên phong của Việt Nam trong lĩnh vực giáo dục đặc biệt và tự kỷ, 
                        mang tầm nhìn nhân văn và sâu sắc về hòa nhập giáo dục cho mọi trẻ em.
                    </div>
                    
                    <div class="expert-achievements">
                        <div class="achievement-item">
                            <span class="achievement-number">15+</span>
                            <span class="achievement-label">Năm kinh nghiệm</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">2010</span>
                            <span class="achievement-label">Thành lập HiH</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">UK</span>
                            <span class="achievement-label">Thạc sĩ Tự kỷ</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Expert Profile 2 - Cô Phan Thị Sen -->
        <article class="expert-profile">
            <div class="profile-header">
                <div class="profile-image">
                    <!-- Ảnh Cô Phan Thị Sen -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/15.jpg" 
                         alt="Cô Phan Thị Sen - Phó Giám đốc Hand in Hand Foundation" 
                         loading="lazy">
                </div>
                
                <div class="profile-info">
                    <h2 class="expert-name">Cô Phan Thị Sen</h2>
                    <div class="expert-title">Phó Giám đốc Hand in Hand Foundation</div>
                    <div class="expert-intro">
                        Một nhà giáo tận tâm với hơn 30 năm cống hiến cho sự nghiệp giáo dục và phục hồi chức năng cho trẻ khuyết tật. 
                        Cô là tấm gương sáng về lòng yêu nghề, sự kiên trì và tình yêu thương vô điều kiện dành cho học trò.
                    </div>
                    
                    <div class="expert-achievements">
                        <div class="achievement-item">
                            <span class="achievement-number">30+</span>
                            <span class="achievement-label">Năm kinh nghiệm</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">1995</span>
                            <span class="achievement-label">Bắt đầu GDĐB</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">25+</span>
                            <span class="achievement-label">Năm chuyên sâu</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Expert Profile 3 - Cô Philippa Pettitt -->
        <article class="expert-profile international">
            <div class="profile-header">
                <div class="profile-image">
                    <!-- Ảnh Cô Philippa Pettitt -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/16.jpg"
                         alt="Cô Philippa Pettitt - Cố vấn quốc tế Hand in Hand Foundation" 
                         loading="lazy">
                    <div class="international-badge">
                        <i class="fas fa-globe"></i>
                        <span>International</span>
                    </div>
                </div>
                
                <div class="profile-info">
                    <h2 class="expert-name">Cô Philippa Pettitt</h2>
                    <div class="expert-title">Cố vấn Quốc tế Hand in Hand Foundation</div>
                    <div class="expert-intro">
                        Chuyên gia giáo dục đặc biệt đến từ Vương quốc Anh với hơn 27 năm kinh nghiệm, 
                        cống hiến cho sự phát triển và hòa nhập của trẻ em có nhu cầu đặc biệt trên toàn cầu.
                    </div>
                    
                    <div class="expert-achievements">
                        <div class="achievement-item">
                            <span class="achievement-number">27+</span>
                            <span class="achievement-label">Năm kinh nghiệm</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">UK</span>
                            <span class="achievement-label">Vương quốc Anh</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">3</span>
                            <span class="achievement-label">Quốc gia hỗ trợ</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Expert Profile 4 - Cô Nicola Lathey -->
        <article class="expert-profile specialist">
            <div class="profile-header">
                <div class="profile-image">
                    <!-- Ảnh Cô Nicola Lathey -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/17.jpg"
                         alt="Cô Nicola Lathey - Cố vấn chuyên môn Hand in Hand Foundation" 
                         loading="lazy">
                    <div class="specialist-badge">
                        <i class="fas fa-comments"></i>
                        <span>Speech Therapy</span>
                    </div>
                </div>
                
                <div class="profile-info">
                    <h2 class="expert-name">Cô Nicola Lathey</h2>
                    <div class="expert-title">Cố vấn Chuyên môn - Trị liệu Ngôn ngữ</div>
                    <div class="expert-intro">
                        Một trong những chuyên gia trị liệu ngôn ngữ và nói hàng đầu Vương quốc Anh, 
                        người đã cống hiến sự nghiệp để giúp trẻ em phát triển khả năng giao tiếp tự tin và tự nhiên.
                    </div>
                    
                    <div class="expert-achievements">
                        <div class="achievement-item">
                            <span class="achievement-number">1999</span>
                            <span class="achievement-label">Tốt nghiệp</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">25+</span>
                            <span class="achievement-label">Năm kinh nghiệm</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">BBC</span>
                            <span class="achievement-label">Truyền hình</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Expert Profile 5 - Cô Marianne Simpson -->
        <article class="expert-profile partnership">
            <div class="profile-header">
                <div class="profile-image">
                    <!-- Ảnh Cô Marianne Simpson -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/18.jpg"
                         alt="Cô Marianne Simpson - Nhà đồng hành Hand in Hand Foundation" 
                         loading="lazy">
                    <div class="partnership-badge">
                        <i class="fas fa-handshake"></i>
                        <span>Partnership</span>
                    </div>
                </div>
                
                <div class="profile-info">
                    <h2 class="expert-name">Cô Marianne Simpson</h2>
                    <p class="expert-title">Nhà đồng hành - Hand in Hand Foundation</p>
                    <p class="expert-description">
                        Chuyên gia giáo dục đặc biệt với 35+ năm kinh nghiệm, đồng sáng lập trường hòa nhập đầu tiên tại Nha Trang
                    </p>
                    
                    <div class="expert-achievements">
                        <div class="achievement-item">
                            <span class="achievement-number">35+</span>
                            <span class="achievement-label">Năm kinh nghiệm</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">2010</span>
                            <span class="achievement-label">Đồng sáng lập</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">UK</span>
                            <span class="achievement-label">Oxfordshire</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Expert Profile 6 - Thầy Chris Simpson (Memorial) -->
        <article class="expert-profile memorial-profile">
            <div class="profile-header memorial-profile-header">
                <div class="profile-image memorial-image">
                    <!-- Memorial Portrait -->
                    <div class="memorial-avatar">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="memorial-badge">
                        <i class="fas fa-heart"></i>
                        <span>In Memory</span>
                    </div>
                </div>
                
                <div class="profile-info memorial-info">
                    <h2 class="expert-name memorial-name">Thầy Chris Simpson</h2>
                    <p class="expert-title memorial-title">Người đồng sáng lập - Mãi mãi trong tim</p>
                    <p class="expert-description memorial-description">
                        Người thầy tận tụy, đồng sáng lập Hand in Hand Foundation, để lại di sản vô giá cho giáo dục hòa nhập Việt Nam
                    </p>
                    
                    <div class="expert-achievements memorial-achievements">
                        <div class="achievement-item memorial-achievement">
                            <span class="achievement-number">∞</span>
                            <span class="achievement-label">Tình yêu thương</span>
                        </div>
                        <div class="achievement-item memorial-achievement">
                            <span class="achievement-number">2010</span>
                            <span class="achievement-label">Đồng sáng lập</span>
                        </div>
                        <div class="achievement-item memorial-achievement">
                            <span class="achievement-number">VSO</span>
                            <span class="achievement-label">Tình nguyện viên</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Background & Education -->
        <div class="content-section">
            <h3 class="section-title">Học Vấn & Thành Tựu</h3>
            <div class="section-content">
                <p>
                    Là một trong những người Việt Nam đầu tiên nhận <strong>Học bổng Chevening danh giá của Chính phủ Anh</strong>, 
                    cô Hiền Đỗ đã hoàn thành chương trình Thạc sĩ chuyên ngành Tự kỷ (xuất sắc) tại Vương quốc Anh.
                </p>
                <p>
                    Trước đó, cô tốt nghiệp Đại học Sư phạm TP. Hồ Chí Minh, <strong>khóa đầu tiên của ngành Giáo dục đặc biệt năm 2007</strong>, 
                    với thành tích xuất sắc. Lớn lên cùng một người chị gái có khó khăn trong học tập, 
                    cô sớm nuôi dưỡng ước mơ đồng hành và hỗ trợ những trẻ em có nhu cầu đặc biệt.
                </p>
            </div>
            
            <div class="highlight-box">
                <div class="highlight-text">
                    Trao cơ hội – Gieo yêu thương – Khơi tiềm năng
                </div>
            </div>
        </div>

        <!-- Career Journey -->
        <div class="content-section">
            <h3 class="section-title">Quá Trình Sự Nghiệp</h3>
            <div class="section-content">
                <p>
                    Trong suốt hơn 15 năm công tác, cô đã trải qua nhiều vị trí trong lĩnh vực giáo dục và phát triển năng lực chuyên môn 
                    cho trẻ em có <strong>rối loạn phổ tự kỷ, khiếm thính, khuyết tật trí tuệ và ngôn ngữ</strong>.
                </p>
                <p>
                    Cô từng làm việc cho các tổ chức phi chính phủ quốc tế uy tín như:
                </p>
                <ul style="margin: 20px 0; padding-left: 20px;">
                    <li><strong>VSO (Voluntary Service Overseas)</strong></li>
                    <li><strong>Saigon Children's Charity</strong></li>
                    <li><strong>Global Foundation for Children with Hearing Loss</strong></li>
                    <li><strong>The Owl Centre (UK)</strong></li>
                    <li><strong>Trinh Foundation Australia</strong></li>
                </ul>
            </div>
        </div>

        <!-- Timeline -->
        <div class="content-section">
            <h3 class="section-title">Cột Mốc Sự Nghiệp</h3>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2007</div>
                    <div class="timeline-content">
                        <div class="timeline-title">Tốt nghiệp Đại học Sư phạm TP.HCM</div>
                        <div class="timeline-description">
                            Khóa đầu tiên ngành Giáo dục đặc biệt với thành tích xuất sắc
                        </div>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2008-2010</div>
                    <div class="timeline-content">
                        <div class="timeline-title">Học bổng Chevening - Thạc sĩ Tự kỷ</div>
                        <div class="timeline-description">
                            Hoàn thành xuất sắc chương trình Thạc sĩ chuyên ngành Tự kỷ tại Vương quốc Anh
                        </div>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2010</div>
                    <div class="timeline-content">
                        <div class="timeline-title">Sáng lập Hand in Hand Foundation</div>
                        <div class="timeline-description">
                            Thành lập Trung tâm Hand in Hand Foundation (Tay Trong Tay) - mô hình giáo dục hòa nhập tiên phong tại Nha Trang
                        </div>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2025</div>
                    <div class="timeline-content">
                        <div class="timeline-title">Trung tâm kiểu mẫu</div>
                        <div class="timeline-description">
                            Hand in Hand Foundation được công nhận là Trung tâm kiểu mẫu đầu tiên về giáo dục hòa nhập của tỉnh Khánh Hòa
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Philosophy & Vision -->
        <div class="content-section">
            <h3 class="section-title">Triết Lý & Tầm Nhìn</h3>
            <div class="section-content">
                <p>
                    Dưới sự dẫn dắt của cô, Hand in Hand Foundation trở thành nơi mỗi đứa trẻ được thấu hiểu, tôn trọng và phát triển theo đúng khả năng riêng của mình.
                </p>
                <p>
                    Với triết lý <strong>"Trao cơ hội – Gieo yêu thương – Khơi tiềm năng"</strong>, cô Hiền Đỗ luôn tâm niệm rằng 
                    mỗi đứa trẻ, dù khác biệt đến đâu, đều có quyền được học tập và hạnh phúc.
                </p>
                <p>
                    Cô tiếp tục đồng hành cùng đội ngũ giáo viên, phụ huynh và cộng đồng, lan tỏa tinh thần giáo dục hòa nhập 
                    và xây dựng cầu nối giữa Việt Nam và quốc tế trong hành trình vì tương lai trẻ em đặc biệt.
                </p>
            </div>
        </div>

        <!-- Divider -->
        <div class="expert-divider">
            <div class="divider-content">
                <i class="fas fa-heart"></i>
                <span>Đồng sáng lập</span>
                <i class="fas fa-heart"></i>
            </div>
        </div>

        <!-- Cô Phan Thị Sen Content -->
        <div class="expert-section" id="co-sen">
            <div class="section-header-custom">
                <h2 class="expert-section-title">Cô Phan Thị Sen</h2>
                <p class="expert-section-subtitle">Phó Giám đốc Trung tâm Hand in Hand Foundation</p>
            </div>

            <!-- Background & Early Career -->
            <div class="content-section">
                <h3 class="section-title">Khởi Đầu Sự Nghiệp</h3>
                <div class="section-content">
                    <p>
                        Ngay từ thuở nhỏ, cô Sen đã ước mơ trở thành cô giáo. Sau khi tốt nghiệp sư phạm, 
                        cô bắt đầu sự nghiệp giảng dạy tại các vùng nông thôn khó khăn ở <strong>Đắk Lắk</strong>, 
                        rồi sau đó trở về Nha Trang và bén duyên với công việc giảng dạy trẻ khuyết tật tại 
                        <strong>Trường Trẻ em khuyết tật Tương Lai từ năm 1995</strong>.
                    </p>
                    <p>
                        Hơn 25 năm làm việc trong lĩnh vực giáo dục đặc biệt, cô đã trải qua nhiều vị trí từ 
                        giáo viên, phó phòng đến trưởng phòng dạy thực hành tại <strong>Trung tâm Phục hồi chức năng – 
                        Giáo dục trẻ em khuyết tật Khánh Hòa</strong>.
                    </p>
                </div>
            </div>

            <!-- Professional Development -->
            <div class="content-section">
                <h3 class="section-title">Phát Triển Chuyên Môn</h3>
                <div class="section-content">
                    <p>
                        Cô không ngừng học hỏi và đổi mới phương pháp giảng dạy, đặc biệt trong việc ứng dụng 
                        <strong>ngôn ngữ ký hiệu</strong> và các công cụ hỗ trợ trẻ khiếm thính, tự kỷ, down, và thiểu năng trí tuệ.
                    </p>
                    <p>
                        Với sự tận tâm và chuyên nghiệp, cô đã trở thành một trong những chuyên gia hàng đầu trong lĩnh vực 
                        phục hồi chức năng và giáo dục đặc biệt tại Khánh Hòa.
                    </p>
                </div>
                
                <div class="highlight-box">
                    <div class="highlight-text">
                        Tình yêu thương vô điều kiện dành cho học trò là nguồn động lực vô tận
                    </div>
                </div>
            </div>

            <!-- Awards & Recognition -->
            <div class="content-section">
                <h3 class="section-title">Danh Hiệu & Giải Thưởng</h3>
                <div class="section-content">
                    <p>Trong suốt quá trình công tác, cô đã đạt nhiều danh hiệu và giải thưởng cao quý:</p>
                    
                    <div class="awards-grid">
                        <div class="award-item">
                            <div class="award-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="award-content">
                                <h4>Chiến sĩ thi đua cấp tỉnh</h4>
                                <p>Ghi nhận sự cống hiến xuất sắc trong giáo dục</p>
                            </div>
                        </div>
                        
                        <div class="award-item">
                            <div class="award-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="award-content">
                                <h4>Bằng khen Thủ tướng Chính phủ</h4>
                                <p>Danh hiệu cao quý cấp quốc gia</p>
                            </div>
                        </div>
                        
                        <div class="award-item">
                            <div class="award-icon">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div class="award-content">
                                <h4>Giải thưởng Phụ nữ Việt Nam tiêu biểu</h4>
                                <p>Tôn vinh những đóng góp xuất sắc</p>
                            </div>
                        </div>
                        
                        <div class="award-item">
                            <div class="award-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="award-content">
                                <h4>Nhiều bằng khen</h4>
                                <p>Bộ Giáo dục, Bộ Y tế và UBND tỉnh</p>
                            </div>
                        </div>
                    </div>
                    
                    <p>
                        Những phần thưởng ấy là minh chứng cho nhiệt huyết và đóng góp bền bỉ của cô với trẻ em đặc biệt.
                    </p>
                </div>
            </div>

            <!-- Current Role -->
            <div class="content-section">
                <h3 class="section-title">Vai Trò Hiện Tại</h3>
                <div class="section-content">
                    <p>
                        Sau khi nghỉ hưu, cô Sen tiếp tục cống hiến với vai trò <strong>Phó Giám đốc Trung tâm Hand in Hand Foundation</strong>. 
                        Với vốn kinh nghiệm quý báu và tấm lòng yêu trẻ, cô luôn đồng hành cùng đội ngũ giáo viên trong:
                    </p>
                    
                    <ul style="margin: 20px 0; padding-left: 20px; line-height: 2;">
                        <li><strong>Công tác chuyên môn</strong> - Hướng dẫn phương pháp giảng dạy</li>
                        <li><strong>Đánh giá học sinh</strong> - Xây dựng kế hoạch học tập cá nhân</li>
                        <li><strong>Bồi dưỡng năng lực giảng dạy</strong> - Đào tạo đội ngũ giáo viên</li>
                        <li><strong>Tư vấn phụ huynh</strong> - Hỗ trợ gia đình hiểu về trẻ đặc biệt</li>
                    </ul>
                    
                    <p>
                        Hình ảnh người cô giản dị, ấm áp và đầy tâm huyết đã trở thành nguồn cảm hứng cho thế hệ giáo viên trẻ của Trung tâm.
                    </p>
                </div>
            </div>
        </div>

        <!-- International Divider -->
        <div class="expert-divider international-divider">
            <div class="divider-content">
                <i class="fas fa-globe"></i>
                <span>Cố vấn quốc tế</span>
                <i class="fas fa-globe"></i>
            </div>
        </div>

        <!-- Cô Philippa Pettitt Content -->
        <div class="expert-section international-section" id="co-philippa">
            <div class="section-header-custom international-header">
                <h2 class="expert-section-title">Cô Philippa Pettitt</h2>
                <p class="expert-section-subtitle">Cố vấn Quốc tế - Vương quốc Anh</p>
                <div class="flag-indicator">
                    <img src="https://flagicons.lipis.dev/flags/4x3/gb.svg" alt="UK Flag" style="width: 40px; height: 30px; border-radius: 4px;">
                </div>
            </div>

            <!-- Education & Qualifications -->
            <div class="content-section">
                <h3 class="section-title">Học Vấn & Chứng Chỉ</h3>
                <div class="section-content">
                    <p>
                        Philippa tốt nghiệp <strong>Cử nhân Xã hội học</strong> và có <strong>Chứng chỉ Sau đại học về Giáo dục</strong>, 
                        cùng các khóa học trình độ <strong>Thạc sĩ về Quản lý giai đoạn đầu đời và Tự kỷ</strong>.
                    </p>
                    <p>
                        Cô đã dành trọn hơn hai thập kỷ làm việc với trẻ từ <strong>lứa tuổi mẫu giáo đến người trưởng thành</strong>, 
                        phát triển chuyên môn sâu trong lĩnh vực <strong>tự kỷ và quản lý hành vi</strong>.
                    </p>
                </div>
                
                <div class="qualifications-grid">
                    <div class="qualification-item">
                        <div class="qual-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="qual-content">
                            <h4>Cử nhân Xã hội học</h4>
                            <p>Nền tảng vững chắc về khoa học xã hội</p>
                        </div>
                    </div>
                    
                    <div class="qualification-item">
                        <div class="qual-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="qual-content">
                            <h4>Chứng chỉ Sau đại học Giáo dục</h4>
                            <p>Chuyên môn giảng dạy chuyên nghiệp</p>
                        </div>
                    </div>
                    
                    <div class="qualification-item">
                        <div class="qual-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="qual-content">
                            <h4>Thạc sĩ Quản lý giai đoạn đầu đời</h4>
                            <p>Chuyên sâu về phát triển trẻ nhỏ</p>
                        </div>
                    </div>
                    
                    <div class="qualification-item">
                        <div class="qual-icon">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <div class="qual-content">
                            <h4>Thạc sĩ Tự kỷ</h4>
                            <p>Chuyên gia hàng đầu về rối loạn tự kỷ</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pioneer Work -->
            <div class="content-section">
                <h3 class="section-title">Thành Tựu Tiên Phong</h3>
                <div class="section-content">
                    <p>
                        Cô từng <strong>thành lập và điều hành đơn vị tự kỷ đầu tiên</strong> tại một trường tiểu học chính thống 
                        ở Portsmouth, Anh quốc. Đây là một bước đột phá trong việc hòa nhập trẻ tự kỷ vào môi trường giáo dục chính thống.
                    </p>
                    
                    <div class="highlight-box international-highlight">
                        <div class="highlight-text">
                            Tiên phong trong việc tạo ra đơn vị tự kỷ đầu tiên tại trường học chính thống ở Portsmouth, UK
                        </div>
                    </div>
                </div>
            </div>

            <!-- International Work -->
            <div class="content-section">
                <h3 class="section-title">Hoạt Động Quốc Tế</h3>
                <div class="section-content">
                    <p>
                        Sau khi nghỉ hưu, Philippa tiếp tục tham gia giảng dạy và phát triển các khóa đào tạo chuyên sâu về 
                        <strong>tự kỷ và hành vi</strong> tại nhiều quốc gia:
                    </p>
                    
                    <div class="countries-grid">
                        <div class="country-item">
                            <div class="country-flag">
                                <img src="https://flagicons.lipis.dev/flags/4x3/vn.svg" alt="Vietnam Flag">
                            </div>
                            <div class="country-info">
                                <h4>Việt Nam</h4>
                                <p>Hỗ trợ Hand in Hand Foundation</p>
                            </div>
                        </div>
                        
                        <div class="country-item">
                            <div class="country-flag">
                                <img src="https://flagicons.lipis.dev/flags/4x3/ps.svg" alt="Palestine Flag">
                            </div>
                            <div class="country-info">
                                <h4>Palestine</h4>
                                <p>Đào tạo giáo viên địa phương</p>
                            </div>
                        </div>
                        
                        <div class="country-item">
                            <div class="country-flag">
                                <img src="https://flagicons.lipis.dev/flags/4x3/kh.svg" alt="Cambodia Flag">
                            </div>
                            <div class="country-info">
                                <h4>Campuchia</h4>
                                <p>Phát triển chương trình giáo dục</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support for Hand in Hand -->
            <div class="content-section">
                <h3 class="section-title">Hỗ Trợ Hand in Hand Foundation</h3>
                <div class="section-content">
                    <p>
                        Cô là người trực tiếp hỗ trợ đội ngũ Hand in Hand Foundation qua các chương trình:
                    </p>
                    
                    <div class="support-activities">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="activity-content">
                                <h4>Chương trình huấn luyện</h4>
                                <p>Đào tạo chuyên sâu cho đội ngũ giáo viên Việt Nam</p>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div class="activity-content">
                                <h4>Tư vấn chuyên môn</h4>
                                <p>Chia sẻ kinh nghiệm và phương pháp quốc tế</p>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="activity-content">
                                <h4>Thăm thực tế</h4>
                                <p>Đánh giá và cải thiện chất lượng dịch vụ</p>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <div class="activity-content">
                                <h4>Kiến thức quốc tế</h4>
                                <p>Cập nhật xu hướng và phương pháp mới nhất</p>
                            </div>
                        </div>
                    </div>
                    
                    <p>
                        Cô Philippa Pettitt không chỉ là người cố vấn tận tâm mà còn là <strong>người bạn đồng hành đáng quý</strong> 
                        của Hand in Hand Foundation. Sự tận tụy và cam kết của cô đối với giáo dục hòa nhập đã góp phần quan trọng 
                        trong việc nâng cao chất lượng can thiệp và dạy học cho trẻ em có nhu cầu đặc biệt tại Việt Nam.
                    </p>
                </div>
            </div>
        </div>

        <!-- Speech Therapy Divider -->
        <div class="expert-divider specialist-divider">
            <div class="divider-content">
                <i class="fas fa-comments"></i>
                <span>Chuyên gia trị liệu ngôn ngữ</span>
                <i class="fas fa-comments"></i>
            </div>
        </div>

        <!-- Cô Nicola Lathey Content -->
        <div class="expert-section specialist-section" id="co-nicola">
            <div class="section-header-custom specialist-header">
                <h2 class="expert-section-title">Cô Nicola Lathey</h2>
                <p class="expert-section-subtitle">Cố vấn Chuyên môn - Trị liệu Ngôn ngữ và Nói</p>
                <div class="specialty-indicator">
                    <i class="fas fa-microphone-alt"></i>
                    <span>Speech & Language Therapy</span>
                </div>
            </div>

            <!-- Personal Inspiration -->
            <div class="content-section">
                <h3 class="section-title">Nguồn Cảm Hứng Cá Nhân</h3>
                <div class="section-content">
                    <p>
                        Nicola khởi nguồn niềm đam mê của mình từ chính <strong>người em trai mắc hội chứng Down</strong>. 
                        Trải nghiệm cá nhân này đã tạo nên động lực mạnh mẽ để cô cống hiến cho lĩnh vực trị liệu ngôn ngữ, 
                        giúp những đứa trẻ có khó khăn trong giao tiếp.
                    </p>
                    
                    <div class="highlight-box specialist-highlight">
                        <div class="highlight-text">
                            Niềm đam mê bắt nguồn từ tình yêu thương và sự hiểu biết sâu sắc về những thách thức mà trẻ đặc biệt phải đối mặt
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professional Journey -->
            <div class="content-section">
                <h3 class="section-title">Hành Trình Sự Nghiệp</h3>
                <div class="section-content">
                    <p>
                        Sau khi tốt nghiệp ngành <strong>Trị liệu ngôn ngữ vào năm 1999</strong>, cô nhanh chóng trở thành 
                        một trong những chuyên gia nổi tiếng quốc tế trong lĩnh vực này.
                    </p>
                    
                    <div class="career-timeline">
                        <div class="timeline-item-specialist">
                            <div class="timeline-year-specialist">1999</div>
                            <div class="timeline-content-specialist">
                                <h4>Tốt nghiệp Trị liệu Ngôn ngữ</h4>
                                <p>Bắt đầu sự nghiệp chuyên môn</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item-specialist">
                            <div class="timeline-year-specialist">2013</div>
                            <div class="timeline-content-specialist">
                                <h4>Xuất bản "Small Talk" - Macmillan</h4>
                                <p>Cuốn sách đoạt giải về phát triển ngôn ngữ trẻ em</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item-specialist">
                            <div class="timeline-year-specialist">Hiện tại</div>
                            <div class="timeline-content-specialist">
                                <h4>Sáng lập The Owl Centre</h4>
                                <p>Trung tâm trị liệu đa ngành cho trẻ em tại Anh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Awards & Publications -->
            <div class="content-section">
                <h3 class="section-title">Thành Tựu & Xuất Bản</h3>
                <div class="section-content">
                    <div class="achievements-showcase">
                        <div class="achievement-showcase-item featured">
                            <div class="achievement-icon-large">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="achievement-details">
                                <h4>Cuốn sách "Small Talk"</h4>
                                <p class="publisher">Macmillan, 2013</p>
                                <p class="description">Tác phẩm bán chạy về phát triển ngôn ngữ trẻ em, được chuyển thể thành nhiều ấn phẩm thiếu nhi</p>
                                <div class="achievement-badge">Đoạt giải</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Media & Public Speaking -->
            <div class="content-section">
                <h3 class="section-title">Truyền Thông & Diễn Đàn</h3>
                <div class="section-content">
                    <p>
                        Cô thường xuyên xuất hiện trên truyền hình và các diễn đàn lớn để chia sẻ về phát triển ngôn ngữ sớm:
                    </p>
                    
                    <div class="media-grid">
                        <div class="media-item">
                            <div class="media-icon">
                                <i class="fab fa-bbc"></i>
                            </div>
                            <div class="media-content">
                                <h4>BBC</h4>
                                <p>Chuyên gia thường xuyên trên đài truyền hình Anh</p>
                            </div>
                        </div>
                        
                        <div class="media-item">
                            <div class="media-icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <div class="media-content">
                                <h4>Daily Mail</h4>
                                <p>Chuyên mục tư vấn phát triển trẻ em</p>
                            </div>
                        </div>
                        
                        <div class="media-item">
                            <div class="media-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="media-content">
                                <h4>Hội thảo Quốc tế</h4>
                                <p>Diễn giả tại các sự kiện chuyên môn lớn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- The Owl Centre -->
            <div class="content-section">
                <h3 class="section-title">The Owl Centre</h3>
                <div class="section-content">
                    <p>
                        Nicola là người <strong>sáng lập và giám đốc The Owl Centre</strong> – trung tâm trị liệu đa ngành 
                        cho trẻ em tại Anh quốc. Trung tâm này đã trở thành mô hình tiên tiến trong lĩnh vực trị liệu ngôn ngữ 
                        và phát triển trẻ em.
                    </p>
                    
                    <div class="centre-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h4>Trị liệu đa ngành</h4>
                            <p>Kết hợp nhiều phương pháp chuyên môn</p>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-child"></i>
                            </div>
                            <h4>Chuyên biệt trẻ em</h4>
                            <p>Tập trung hoàn toàn vào nhu cầu trẻ</p>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>Mô hình tiên tiến</h4>
                            <p>Áp dụng công nghệ và phương pháp mới nhất</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Partnership with Hand in Hand -->
            <div class="content-section">
                <h3 class="section-title">Hợp Tác Với Hand in Hand Foundation</h3>
                <div class="section-content">
                    <p>
                        Cô hợp tác lâu năm với Hand in Hand Foundation trong việc phát triển chương trình đào tạo giáo viên 
                        và xây dựng phương pháp trị liệu phù hợp với trẻ em Việt Nam.
                    </p>
                    
                    <div class="collaboration-areas">
                        <div class="collab-item">
                            <div class="collab-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="collab-content">
                                <h4>Đào tạo Giáo viên</h4>
                                <p>Phát triển chương trình đào tạo chuyên sâu cho đội ngũ</p>
                            </div>
                        </div>
                        
                        <div class="collab-item">
                            <div class="collab-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="collab-content">
                                <h4>Phương pháp Trị liệu</h4>
                                <p>Xây dựng quy trình phù hợp với văn hóa Việt Nam</p>
                            </div>
                        </div>
                        
                        <div class="collab-item">
                            <div class="collab-icon">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <div class="collab-content">
                                <h4>Hỗ trợ Chuyên môn</h4>
                                <p>Tư vấn và đồng hành trong các ca can thiệp khó</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="highlight-box specialist-highlight">
                        <div class="highlight-text">
                            "Mỗi đứa trẻ đều có thể học nói và thể hiện bản thân theo cách riêng"
                        </div>
                    </div>
                    
                    <p>
                        Với niềm tin mạnh mẽ rằng mỗi đứa trẻ đều có thể học nói và thể hiện bản thân theo cách riêng, 
                        cô Nicola luôn truyền cảm hứng cho đội ngũ giáo viên và phụ huynh tại Hand in Hand Foundation. 
                        Sự hiện diện của cô là cầu nối quý giá giữa chuyên môn quốc tế và thực tiễn giáo dục tại Việt Nam.
                    </p>
                </div>
            </div>
        </div>

        <!-- Partnership Divider -->
        <div class="expert-divider partnership-divider">
            <div class="divider-content">
                <i class="fas fa-handshake"></i>
                <span>Nhà đồng hành</span>
                <i class="fas fa-handshake"></i>
            </div>
        </div>

        <!-- Cô Marianne Simpson Content -->
        <div class="expert-section partnership-section" id="co-marianne">
            <div class="section-header-custom partnership-header">
                <h2 class="expert-section-title">Cô Marianne Simpson</h2>
                <p class="expert-section-subtitle">Nhà đồng hành của Hand in Hand Foundation</p>
                <div class="partnership-indicator">
                    <i class="fas fa-hands-helping"></i>
                    <span>35+ Years Experience</span>
                </div>
            </div>

            <!-- Introduction -->
            <div class="content-section">
                <h3 class="section-title">Giới Thiệu</h3>
                <div class="section-content">
                    <p>
                        Cô Marianne Simpson – <strong>Nhà đồng hành của Trung tâm Hand in Hand Foundation</strong> – 
                        là một chuyên gia giáo dục đặc biệt với <strong>hơn 35 năm kinh nghiệm</strong> làm việc tại 
                        Vương quốc Anh và Việt Nam, người đã góp phần đặt nền móng cho giáo dục hòa nhập tại Nha Trang.
                    </p>
                    
                    <div class="highlight-box partnership-highlight">
                        <div class="highlight-text">
                            Người đặt nền móng đầu tiên cho giáo dục hòa nhập tại Nha Trang
                        </div>
                    </div>
                </div>
            </div>

            <!-- Career Journey -->
            <div class="content-section">
                <h3 class="section-title">Quá Trình Làm Việc</h3>
                <div class="section-content">
                    <div class="career-timeline-extended">
                        <div class="timeline-section uk-phase">
                            <h4 class="timeline-section-title">
                                <i class="fas fa-flag" style="color: #012169;"></i>
                                Giai đoạn tại Anh Quốc
                            </h4>
                            
                            <div class="timeline-content-extended">
                                <p>
                                    Tại Anh, Marianne từng là <strong>giáo viên tư vấn chuyên môn cho dịch vụ vật lý trị liệu</strong>, 
                                    lãnh đạo nhóm các nhà trị liệu, đồng thời đào tạo giáo viên và phụ huynh trên toàn vùng Oxfordshire.
                                </p>
                                
                                <div class="uk-achievements">
                                    <div class="achievement-card">
                                        <div class="achievement-icon">
                                            <i class="fas fa-chalkboard-teacher"></i>
                                        </div>
                                        <div class="achievement-text">
                                            <h5>Giáo viên tư vấn chuyên môn</h5>
                                            <p>Dịch vụ vật lý trị liệu</p>
                                        </div>
                                    </div>
                                    
                                    <div class="achievement-card">
                                        <div class="achievement-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="achievement-text">
                                            <h5>Lãnh đạo nhóm trị liệu</h5>
                                            <p>Oxfordshire, Anh Quốc</p>
                                        </div>
                                    </div>
                                    
                                    <div class="achievement-card">
                                        <div class="achievement-icon">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <div class="achievement-text">
                                            <h5>Đào tạo giáo viên & phụ huynh</h5>
                                            <p>Toàn vùng Oxfordshire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-section vietnam-phase">
                            <h4 class="timeline-section-title">
                                <i class="fas fa-flag" style="color: #da251d;"></i>
                                Hành Trình đến Việt Nam
                            </h4>
                            
                            <div class="vietnam-journey">
                                <div class="journey-milestone">
                                    <div class="milestone-year">2000</div>
                                    <div class="milestone-content">
                                        <h5>Chuyến thăm đầu tiên</h5>
                                        <p>
                                            Sau chuyến thăm Việt Nam năm 2000, cô nhận ra <strong>sự thiếu hụt hỗ trợ cho trẻ khuyết tật</strong> 
                                            và quyết tâm quay lại Việt Nam để đóng góp cho lĩnh vực này.
                                        </p>
                                    </div>
                                </div>

                                <div class="journey-milestone">
                                    <div class="milestone-year">2005</div>
                                    <div class="milestone-content">
                                        <h5>Đại học Sư phạm Quốc gia TP.HCM</h5>
                                        <p>
                                            Cô làm việc với tư cách <strong>tư vấn giáo dục đặc biệt</strong>, 
                                            mang kinh nghiệm quốc tế vào giáo dục Việt Nam.
                                        </p>
                                    </div>
                                </div>

                                <div class="journey-milestone">
                                    <div class="milestone-year">2007</div>
                                    <div class="milestone-content">
                                        <h5>Chuyển đến Nha Trang</h5>
                                        <p>
                                            Cô cùng chồng – <strong>ông Chris Simpson</strong> – chuyển đến Nha Trang, 
                                            bắt đầu hành trình xây dựng giáo dục hòa nhập tại thành phố biển.
                                        </p>
                                    </div>
                                </div>

                                <div class="journey-milestone featured">
                                    <div class="milestone-year">2010</div>
                                    <div class="milestone-content">
                                        <h5>Thành lập Hand in Hand</h5>
                                        <p>
                                            Tại đây, họ đã gặp <strong>cô Hiền Đỗ</strong> và cùng nhau sáng lập trường Hand in Hand – 
                                            <strong>ngôi trường hòa nhập đầu tiên tại thành phố</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Current Contributions -->
            <div class="content-section">
                <h3 class="section-title">Đóng Góp Hiện Tại</h3>
                <div class="section-content">
                    <p>
                        Từ đó đến nay, cô Marianne tiếp tục hỗ trợ trung tâm trong các chương trình huấn luyện, 
                        phát triển giáo viên và cố vấn chuyên môn, mang theo tình yêu và tâm huyết sâu sắc dành cho trẻ em Việt Nam.
                    </p>
                    
                    <div class="current-contributions">
                        <div class="contribution-item">
                            <div class="contribution-icon">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                            <div class="contribution-content">
                                <h4>Chương trình Huấn luyện</h4>
                                <p>Phát triển và thực hiện các khóa đào tạo chuyên sâu</p>
                            </div>
                        </div>
                        
                        <div class="contribution-item">
                            <div class="contribution-icon">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <div class="contribution-content">
                                <h4>Phát triển Giáo viên</h4>
                                <p>Nâng cao năng lực đội ngũ giáo dục đặc biệt</p>
                            </div>
                        </div>
                        
                        <div class="contribution-item">
                            <div class="contribution-icon">
                                <i class="fas fa-compass"></i>
                            </div>
                            <div class="contribution-content">
                                <h4>Cố vấn Chuyên môn</h4>
                                <p>Hướng dẫn và tư vấn các phương pháp giáo dục tiên tiến</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Legacy & Impact -->
            <div class="content-section">
                <h3 class="section-title">Di Sản & Tác Động</h3>
                <div class="section-content">
                    <div class="legacy-showcase">
                        <div class="legacy-text">
                            <p>
                                Với <strong>trái tim nhân hậu và tinh thần cống hiến không ngừng</strong>, 
                                cô Marianne Simpson là biểu tượng của tình bạn quốc tế và niềm tin rằng 
                                giáo dục hòa nhập có thể thay đổi cuộc đời của những đứa trẻ có nhu cầu đặc biệt 
                                ở mọi nơi trên thế giới.
                            </p>
                        </div>
                        
                        <div class="impact-stats">
                            <div class="stat-item">
                                <div class="stat-number">15+</div>
                                <div class="stat-label">Năm tại Việt Nam</div>
                            </div>
                            
                            <div class="stat-item">
                                <div class="stat-number">1</div>
                                <div class="stat-label">Trường hòa nhập đầu tiên</div>
                            </div>
                            
                            <div class="stat-item">
                                <div class="stat-number">∞</div>
                                <div class="stat-label">Tình yêu dành cho trẻ em VN</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="highlight-box partnership-highlight">
                        <div class="highlight-text">
                            Biểu tượng của tình bạn quốc tế và niềm tin vào sức mạnh của giáo dục hòa nhập
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Memorial Divider -->
        <div class="expert-divider memorial-divider">
            <div class="divider-content">
                <i class="fas fa-heart"></i>
                <span>Tri ân</span>
                <i class="fas fa-heart"></i>
            </div>
        </div>

        <!-- Thầy Chris Simpson Memorial 
             HƯỚNG DẪN THAY ĐỔI HÌNH ẢNH:
             1. Upload ảnh mới vào thư mục: /wp-content/themes/handinhand/assets/images/
             2. Đặt tên file: chris-simpson.jpg (hoặc đổi tên trong biến $memorial_image ở dưới)
             3. Ảnh sẽ tự động hiển thị, nếu không có sẽ dùng ảnh dự phòng
        -->
        <div class="expert-section memorial-section" id="thay-chris">
            <div class="section-header-custom memorial-header">
                <div class="memorial-portrait-container">
                    <div class="memorial-image-wrapper">
                        <?php
                        // Thay đổi tên file ảnh ở đây để sử dụng ảnh khác
                        $memorial_image = '19.jpg'; // Sử dụng hình ảnh 19.jpg
                        $fallback_images = ['18.jpg', '17.jpg', '16.jpg', 'chris-simpson.jpg']; // Danh sách ảnh dự phòng
                        
                        $image_found = false;
                        $image_path = get_template_directory() . '/assets/images/' . $memorial_image;
                        
                        if (file_exists($image_path)) {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/' . $memorial_image . '" 
                                     alt="Thầy Chris Simpson - Người đồng sáng lập Hand in Hand Foundation"
                                     class="memorial-photo">';
                            $image_found = true;
                        } else {
                            // Thử các ảnh dự phòng
                            foreach($fallback_images as $fallback) {
                                $fallback_path = get_template_directory() . '/assets/images/' . $fallback;
                                if (file_exists($fallback_path)) {
                                    echo '<img src="' . get_template_directory_uri() . '/assets/images/' . $fallback . '" 
                                             alt="Thầy Chris Simpson - Người đồng sáng lập Hand in Hand Foundation"
                                             class="memorial-photo">';
                                    $image_found = true;
                                    break;
                                }
                            }
                        }
                        
                        if (!$image_found) {
                            echo '<div class="memorial-portrait fallback-portrait">
                                    <i class="fas fa-star"></i>
                                  </div>';
                        }
                        ?>
                    </div>
                </div>
                <h2 class="expert-section-title memorial-title">Thầy Chris Simpson</h2>
                <p class="expert-section-subtitle memorial-subtitle">Người đồng sáng lập - Mãi mãi trong tim chúng ta</p>
                <div class="memorial-years">
                    <i class="fas fa-infinity"></i>
                    <span>Tri ân - Tưởng nhớ</span>
                    <i class="fas fa-infinity"></i>
                </div>
            </div>

            <!-- Introduction -->
            <div class="content-section memorial-content">
                <h3 class="section-title memorial-section-title">Giới Thiệu</h3>
                <div class="section-content">
                    <p class="memorial-text">
                        <strong>Thầy Chris Simpson</strong> – người đồng sáng lập và là người thầy, người bạn lớn của 
                        Trung tâm Hand in Hand Foundation – đã để lại dấu ấn sâu sắc trong hành trình hình thành và 
                        phát triển của giáo dục hòa nhập tại Việt Nam.
                    </p>
                    
                    <div class="memorial-quote">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="quote-text">
                            Những giá trị mà thầy vun đắp sẽ tiếp tục được lan tỏa qua mỗi lớp học, 
                            mỗi nụ cười và mỗi đứa trẻ được trao cơ hội hòa nhập
                        </div>
                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Journey & Partnership -->
            <div class="content-section memorial-content">
                <h3 class="section-title memorial-section-title">Quá Trình Làm Việc</h3>
                <div class="section-content">
                    <div class="memorial-story">
                        <div class="story-section">
                            <div class="story-header">
                                <i class="fas fa-handshake"></i>
                                <h4>Cuộc Gặp Định Mệnh</h4>
                            </div>
                            <p>
                                Thầy Chris cùng vợ là <strong>cô Marianne Simpson</strong> đã đến Việt Nam trong vai trò 
                                <strong>tình nguyện viên quốc tế (VSO)</strong>, nơi họ gặp gỡ cô Hiền Đỗ – 
                                khi ấy là một giáo viên trẻ mới vào nghề.
                            </p>
                            <p>
                                Cuộc gặp gỡ định mệnh này đã mở ra chặng đường hợp tác ý nghĩa giữa những con người 
                                mang chung tấm lòng vì trẻ em khuyết tật.
                            </p>
                        </div>

                        <div class="story-section">
                            <div class="story-header">
                                <i class="fas fa-seedling"></i>
                                <h4>Xây Dựng Nền Móng</h4>
                            </div>
                            <p>
                                Với <strong>tri thức uyên thâm và lòng tận tụy</strong>, thầy Chris đã dành nhiều năm 
                                giảng dạy, tư vấn và trực tiếp góp sức xây dựng trường Hand in Hand – 
                                <strong>ngôi trường hòa nhập đầu tiên tại Nha Trang</strong>.
                            </p>
                        </div>

                        <div class="story-section">
                            <div class="story-header">
                                <i class="fas fa-lightbulb"></i>
                                <h4>Nguồn Cảm Hứng</h4>
                            </div>
                            <p>
                                Thầy không chỉ là người thầy trong chuyên môn mà còn là <strong>người truyền cảm hứng</strong>, 
                                luôn khích lệ các đồng nghiệp và học trò vượt qua giới hạn bản thân để vươn tới điều tốt đẹp hơn.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Legacy & Remembrance -->
            <div class="content-section memorial-content">
                <h3 class="section-title memorial-section-title">Di Sản & Tưởng Nhớ</h3>
                <div class="section-content">
                    <div class="legacy-tribute">
                        <div class="tribute-text">
                            <p>
                                Dù thầy đã rời xa thế gian, <strong>tinh thần nhân ái và cống hiến</strong> của thầy 
                                vẫn sống mãi trong tim của các đồng nghiệp và học trò Hand in Hand Foundation.
                            </p>
                        </div>
                        
                        <div class="memorial-values">
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="value-content">
                                    <h4>Tình Yêu Thương</h4>
                                    <p>Dành cho trẻ em khuyết tật</p>
                                </div>
                            </div>
                            
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="value-content">
                                    <h4>Tri Thức</h4>
                                    <p>Uyên thâm và tận tụy</p>
                                </div>
                            </div>
                            
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-bridge"></i>
                                </div>
                                <div class="value-content">
                                    <h4>Kết Nối</h4>
                                    <p>Việt Nam - Anh Quốc</p>
                                </div>
                            </div>
                            
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-fire"></i>
                                </div>
                                <div class="value-content">
                                    <h4>Truyền Lửa</h4>
                                    <p>Cảm hứng cho thế hệ sau</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="memorial-tribute-final">
                        <div class="tribute-border">
                            <div class="tribute-content">
                                <h4 class="tribute-title">Tri Ân Mãi Mãi</h4>
                                <p class="tribute-message">
                                    Trung tâm Hand in Hand Foundation mãi ghi nhớ và tri ân <strong>người thầy Chris Simpson</strong> – 
                                    người đã đặt nền móng và truyền lửa yêu thương cho hành trình giáo dục hòa nhập, 
                                    kết nối hai đất nước Việt Nam – Anh Quốc bằng tình bạn và lòng nhân ái.
                                </p>
                                
                                <div class="eternal-flame">
                                    <i class="fas fa-fire"></i>
                                    <span>Tinh thần sống mãi</span>
                                    <i class="fas fa-fire"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Image Upload Modal -->
<div id="imageUploadModal" class="upload-modal" style="display: none;">
    <div class="modal-content-upload">
        <div class="modal-header">
            <h3>Thêm ảnh cho Cô Theresa Hiền Đỗ</h3>
            <span class="close-upload-modal">&times;</span>
        </div>
        
        <div class="modal-body">
            <div class="upload-area" id="uploadArea">
                <div class="upload-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <p class="upload-text">Kéo thả ảnh vào đây hoặc <span class="browse-text">chọn file</span></p>
                <input type="file" id="imageInput" accept="image/*" style="display: none;">
            </div>
            
            <div class="image-preview" id="imagePreview" style="display: none;">
                <img id="previewImg" src="" alt="Preview">
                <div class="preview-actions">
                    <button type="button" class="btn-remove" onclick="removePreview()">
                        <i class="fas fa-trash"></i> Xóa
                    </button>
                    <button type="button" class="btn-upload" onclick="uploadImage()">
                        <i class="fas fa-check"></i> Sử dụng ảnh này
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Upload Modal Styles */
.upload-modal {
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
}

.upload-modal.show {
    opacity: 1;
    visibility: visible;
}

.modal-content-upload {
    background: white;
    border-radius: 20px;
    width: 90%;
    max-width: 500px;
    max-height: 90vh;
    overflow-y: auto;
    animation: modalSlideIn 0.3s ease-out;
}

@keyframes modalSlideIn {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 30px;
    border-bottom: 1px solid #e2e8f0;
}

.modal-header h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    color: #1e293b;
    margin: 0;
}

.close-upload-modal {
    font-size: 1.5rem;
    color: #64748b;
    cursor: pointer;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.close-upload-modal:hover {
    background: #f1f5f9;
    color: #e63946;
}

.modal-body {
    padding: 30px;
}

.upload-area {
    border: 3px dashed #cbd5e1;
    border-radius: 12px;
    padding: 40px 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    background: #f8fafc;
}

.upload-area:hover,
.upload-area.dragover {
    border-color: #4a9fa5;
    background: #f0f9ff;
}

.upload-icon {
    font-size: 3rem;
    color: #64748b;
    margin-bottom: 15px;
}

.upload-area:hover .upload-icon,
.upload-area.dragover .upload-icon {
    color: #4a9fa5;
}

.upload-text {
    color: #64748b;
    font-size: 1.1rem;
    margin: 0;
}

.browse-text {
    color: #4a9fa5;
    font-weight: 600;
    text-decoration: underline;
    cursor: pointer;
}

.image-preview {
    text-align: center;
}

.image-preview img {
    max-width: 100%;
    max-height: 300px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.preview-actions {
    display: flex;
    gap: 15px;
    justify-content: center;
}

.btn-remove,
.btn-upload {
    padding: 12px 24px;
    border: none;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.btn-remove {
    background: #ef4444;
    color: white;
}

.btn-remove:hover {
    background: #dc2626;
    transform: translateY(-2px);
}

.btn-upload {
    background: linear-gradient(135deg, #4a9fa5, #667eea);
    color: white;
}

.btn-upload:hover {
    background: linear-gradient(135deg, #3a8a8f, #5a67d8);
    transform: translateY(-2px);
}

/* Loading State */
.uploading {
    pointer-events: none;
    opacity: 0.7;
}

.uploading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 30px;
    height: 30px;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #4a9fa5;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

/* Notification Animations */
@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideOutRight {
    from {
        transform: translateX(0);
        opacity: 1;
    }
    to {
        transform: translateX(100%);
        opacity: 0;
    }
}
</style>

<script>
// Image Upload Functions
function openImageUploader() {
    const modal = document.getElementById('imageUploadModal');
    modal.style.display = 'flex';
    setTimeout(() => {
        modal.classList.add('show');
    }, 10);
}

function closeUploadModal() {
    const modal = document.getElementById('imageUploadModal');
    modal.classList.remove('show');
    setTimeout(() => {
        modal.style.display = 'none';
        resetUploadArea();
    }, 300);
}

function resetUploadArea() {
    const uploadArea = document.getElementById('uploadArea');
    const imagePreview = document.getElementById('imagePreview');
    const imageInput = document.getElementById('imageInput');
    
    uploadArea.style.display = 'block';
    imagePreview.style.display = 'none';
    imageInput.value = '';
}

function removePreview() {
    resetUploadArea();
}

function uploadImage() {
    const previewImg = document.getElementById('previewImg');
    const profileImage = document.querySelector('.profile-image');
    
    // Hiển thị loading
    const modal = document.getElementById('imageUploadModal');
    modal.classList.add('uploading');
    
    // Simulate upload process
    setTimeout(() => {
        // Thay thế placeholder bằng ảnh mới
        profileImage.innerHTML = `<img src="${previewImg.src}" alt="Cô Theresa Hiền Đỗ" loading="lazy">`;
        
        // Đóng modal
        modal.classList.remove('uploading');
        closeUploadModal();
        
        // Hiển thị thông báo thành công
        showSuccessMessage('Đã cập nhật ảnh thành công!');
        
    }, 2000);
}

function showSuccessMessage(message) {
    const notification = document.createElement('div');
    notification.innerHTML = `
        <div style="
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 15px 25px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
            animation: slideInRight 0.5s ease-out;
        ">
            <i class="fas fa-check-circle"></i>
            ${message}
        </div>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.5s ease-in forwards';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 500);
    }, 3000);
}

// Smooth animations on scroll
document.addEventListener('DOMContentLoaded', function() {
    
    // Upload Modal Event Listeners
    const uploadModal = document.getElementById('imageUploadModal');
    const closeBtn = document.querySelector('.close-upload-modal');
    const uploadArea = document.getElementById('uploadArea');
    const imageInput = document.getElementById('imageInput');
    const browseText = document.querySelector('.browse-text');
    
    // Close modal events
    if (closeBtn) {
        closeBtn.addEventListener('click', closeUploadModal);
    }
    
    if (uploadModal) {
        uploadModal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeUploadModal();
            }
        });
    }
    
    // File input events
    if (uploadArea && imageInput) {
        uploadArea.addEventListener('click', () => imageInput.click());
        
        if (browseText) {
            browseText.addEventListener('click', (e) => {
                e.stopPropagation();
                imageInput.click();
            });
        }
        
        imageInput.addEventListener('change', handleFileSelect);
        
        // Drag and drop
        uploadArea.addEventListener('dragover', handleDragOver);
        uploadArea.addEventListener('dragleave', handleDragLeave);
        uploadArea.addEventListener('drop', handleDrop);
    }
    
    function handleFileSelect(e) {
        const files = e.target.files;
        if (files.length > 0) {
            processFile(files[0]);
        }
    }
    
    function handleDragOver(e) {
        e.preventDefault();
        uploadArea.classList.add('dragover');
    }
    
    function handleDragLeave(e) {
        e.preventDefault();
        uploadArea.classList.remove('dragover');
    }
    
    function handleDrop(e) {
        e.preventDefault();
        uploadArea.classList.remove('dragover');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            processFile(files[0]);
        }
    }
    
    function processFile(file) {
        if (!file.type.startsWith('image/')) {
            alert('Vui lòng chọn file hình ảnh!');
            return;
        }
        
        if (file.size > 5 * 1024 * 1024) {
            alert('File quá lớn! Vui lòng chọn file nhỏ hơn 5MB.');
            return;
        }
        
        const reader = new FileReader();
        reader.onload = function(e) {
            const previewImg = document.getElementById('previewImg');
            const uploadArea = document.getElementById('uploadArea');
            const imagePreview = document.getElementById('imagePreview');
            
            previewImg.src = e.target.result;
            uploadArea.style.display = 'none';
            imagePreview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
    
    // Escape key to close modal
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeUploadModal();
        }
    });
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Animate content sections
    document.querySelectorAll('.content-section, .expert-profile').forEach((section, index) => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(50px)';
        section.style.transition = `all 0.6s ease ${index * 0.1}s`;
        observer.observe(section);
    });
    
    // Animate timeline items
    document.querySelectorAll('.timeline-item').forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-30px)';
        item.style.transition = `all 0.5s ease ${index * 0.1}s`;
        observer.observe(item);
    });
    
    // Achievement counter animation
    const achievements = document.querySelectorAll('.achievement-number');
    achievements.forEach(achievement => {
        const finalValue = achievement.textContent;
        if (!isNaN(parseInt(finalValue))) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(achievement, parseInt(finalValue));
                        observer.unobserve(entry.target);
                    }
                });
            });
            observer.observe(achievement);
        }
    });
    
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 50;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target + '+';
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current) + '+';
            }
        }, 30);
    }
});
</script>

<style>
/* Specialist Expert Styling */
.expert-divider.specialist-divider {
    background: linear-gradient(135deg, #e8f5e8 0%, #f0f9ff 100%);
    border: 2px solid #10b981;
    margin: 60px 0;
}

.specialist-divider .divider-content {
    color: #10b981;
    font-weight: 600;
}

.specialist-divider .divider-content i {
    color: #059669;
    font-size: 1.2em;
}

.expert-section.specialist-section {
    background: #ffffff;
    border: 2px solid #f0fdf4;
    border-radius: 20px;
    padding: 40px;
    margin: 40px 0;
    box-shadow: 0 10px 25px rgba(16, 185, 129, 0.1);
}

.section-header-custom.specialist-header {
    text-align: center;
    margin-bottom: 40px;
    padding: 30px;
    background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
    border-radius: 15px;
    border: 1px solid #d1fae5;
}

.specialty-indicator {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #10b981;
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    font-size: 0.9em;
    font-weight: 600;
    margin-top: 15px;
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
}

.specialty-indicator i {
    font-size: 1.1em;
}

/* Specialist Highlights */
.highlight-box.specialist-highlight {
    background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
    border: 2px solid #10b981;
    border-radius: 15px;
    padding: 25px;
    margin: 30px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.highlight-box.specialist-highlight::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #10b981, #059669, #047857);
}

.highlight-box.specialist-highlight .highlight-text {
    color: #047857;
    font-size: 1.1em;
    font-weight: 600;
    font-style: italic;
}

/* Timeline Styling for Specialist */
.career-timeline {
    position: relative;
    padding: 30px 0;
}

.timeline-item-specialist {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    position: relative;
}

.timeline-year-specialist {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.9em;
    margin-right: 30px;
    box-shadow: 0 6px 15px rgba(16, 185, 129, 0.3);
}

.timeline-content-specialist {
    flex: 1;
    background: #f9fafb;
    padding: 20px;
    border-radius: 10px;
    border-left: 4px solid #10b981;
}

.timeline-content-specialist h4 {
    color: #047857;
    margin-bottom: 8px;
    font-size: 1.1em;
}

.timeline-content-specialist p {
    color: #6b7280;
    margin: 0;
}

/* Media Grid */
.media-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 25px;
}

.media-item {
    display: flex;
    align-items: center;
    background: #f9fafb;
    padding: 20px;
    border-radius: 12px;
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
}

.media-item:hover {
    background: #f0fdf4;
    border-color: #10b981;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.15);
}

.media-icon {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    font-size: 1.2em;
}

.media-content h4 {
    color: #047857;
    margin-bottom: 5px;
    font-size: 1em;
}

.media-content p {
    color: #6b7280;
    margin: 0;
    font-size: 0.9em;
}

/* Centre Features */
.centre-features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 25px;
    margin-top: 25px;
}

.feature-item {
    text-align: center;
    padding: 25px;
    background: #f9fafb;
    border-radius: 15px;
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
}

.feature-item:hover {
    background: #f0fdf4;
    border-color: #10b981;
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(16, 185, 129, 0.15);
}

.feature-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    font-size: 1.4em;
}

.feature-item h4 {
    color: #047857;
    margin-bottom: 10px;
    font-size: 1em;
}

.feature-item p {
    color: #6b7280;
    margin: 0;
    font-size: 0.9em;
}

/* Collaboration Areas */
.collaboration-areas {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    margin: 30px 0;
}

.collab-item {
    display: flex;
    align-items: flex-start;
    background: #f9fafb;
    padding: 25px;
    border-radius: 15px;
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
}

.collab-item:hover {
    background: #f0fdf4;
    border-color: #10b981;
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(16, 185, 129, 0.15);
}

.collab-icon {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    font-size: 1.2em;
}

.collab-content h4 {
    color: #047857;
    margin-bottom: 8px;
    font-size: 1.1em;
}

.collab-content p {
    color: #6b7280;
    margin: 0;
    line-height: 1.5;
}

/* Achievements Showcase for Specialist */
.achievements-showcase {
    margin-top: 25px;
}

.achievement-showcase-item.featured {
    background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
    border: 2px solid #10b981;
    padding: 30px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    gap: 25px;
    transition: all 0.3s ease;
}

.achievement-showcase-item.featured:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(16, 185, 129, 0.2);
}

.achievement-icon-large {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2em;
    box-shadow: 0 6px 15px rgba(16, 185, 129, 0.3);
}

.achievement-details h4 {
    color: #047857;
    font-size: 1.4em;
    margin-bottom: 8px;
}

.achievement-details .publisher {
    color: #059669;
    font-weight: 600;
    margin-bottom: 10px;
    font-size: 1em;
}

.achievement-details .description {
    color: #6b7280;
    line-height: 1.6;
    margin-bottom: 15px;
}

.achievement-badge {
    display: inline-block;
    background: #10b981;
    color: white;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 0.85em;
    font-weight: 600;
}

/* Partnership Expert Styling */
.expert-divider.partnership-divider {
    background: linear-gradient(135deg, #fef3c7 0%, #fef9e7 100%);
    border: 2px solid #f59e0b;
    margin: 60px 0;
}

.partnership-divider .divider-content {
    color: #f59e0b;
    font-weight: 600;
}

.partnership-divider .divider-content i {
    color: #d97706;
    font-size: 1.2em;
}

.expert-section.partnership-section {
    background: #ffffff;
    border: 2px solid #fef3c7;
    border-radius: 20px;
    padding: 40px;
    margin: 40px 0;
    box-shadow: 0 10px 25px rgba(245, 158, 11, 0.1);
}

.section-header-custom.partnership-header {
    text-align: center;
    margin-bottom: 40px;
    padding: 30px;
    background: linear-gradient(135deg, #fef3c7 0%, #fef9e7 100%);
    border-radius: 15px;
    border: 1px solid #fed7aa;
}

.partnership-indicator {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #f59e0b;
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    font-size: 0.9em;
    font-weight: 600;
    margin-top: 15px;
    box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
}

.partnership-indicator i {
    font-size: 1.1em;
}

/* Partnership Highlights */
.highlight-box.partnership-highlight {
    background: linear-gradient(135deg, #fef3c7 0%, #fef9e7 100%);
    border: 2px solid #f59e0b;
    border-radius: 15px;
    padding: 25px;
    margin: 30px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.highlight-box.partnership-highlight::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #f59e0b, #d97706, #b45309);
}

.highlight-box.partnership-highlight .highlight-text {
    color: #b45309;
    font-size: 1.1em;
    font-weight: 600;
    font-style: italic;
}

/* Extended Career Timeline */
.career-timeline-extended {
    margin: 30px 0;
}

.timeline-section {
    margin-bottom: 40px;
    padding: 25px;
    border-radius: 15px;
    border: 1px solid #e5e7eb;
}

.timeline-section.uk-phase {
    background: linear-gradient(135deg, #f1f5f9 0%, #f8fafc 100%);
    border-color: #64748b;
}

.timeline-section.vietnam-phase {
    background: linear-gradient(135deg, #fef2f2 0%, #fef7f7 100%);
    border-color: #dc2626;
}

.timeline-section-title {
    color: #1f2937;
    font-size: 1.3em;
    font-weight: 600;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.timeline-content-extended {
    padding-left: 30px;
}

/* UK Achievements Grid */
.uk-achievements {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 25px;
}

.achievement-card {
    display: flex;
    align-items: center;
    background: #ffffff;
    padding: 20px;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.achievement-card:hover {
    background: #fef3c7;
    border-color: #f59e0b;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(245, 158, 11, 0.15);
}

.achievement-card .achievement-icon {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    font-size: 1.2em;
}

.achievement-card .achievement-text h5 {
    color: #b45309;
    margin-bottom: 5px;
    font-size: 1em;
}

.achievement-card .achievement-text p {
    color: #6b7280;
    margin: 0;
    font-size: 0.9em;
}

/* Vietnam Journey */
.vietnam-journey {
    margin-top: 25px;
}

.journey-milestone {
    display: flex;
    align-items: flex-start;
    margin-bottom: 25px;
    padding: 20px;
    background: #ffffff;
    border-radius: 12px;
    border-left: 4px solid #dc2626;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.journey-milestone:hover {
    background: #fef2f2;
    transform: translateX(5px);
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.15);
}

.journey-milestone.featured {
    background: linear-gradient(135deg, #fef2f2 0%, #fef7f7 100%);
    border-left-color: #b91c1c;
    border-left-width: 6px;
}

.milestone-year {
    flex-shrink: 0;
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #dc2626, #b91c1c);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.9em;
    margin-right: 25px;
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
}

.milestone-content h5 {
    color: #b91c1c;
    font-size: 1.1em;
    margin-bottom: 8px;
}

.milestone-content p {
    color: #6b7280;
    line-height: 1.6;
    margin: 0;
}

/* Current Contributions */
.current-contributions {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    margin-top: 25px;
}

.contribution-item {
    display: flex;
    align-items: flex-start;
    background: #f9fafb;
    padding: 25px;
    border-radius: 15px;
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
}

.contribution-item:hover {
    background: #fef3c7;
    border-color: #f59e0b;
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(245, 158, 11, 0.15);
}

.contribution-icon {
    flex-shrink: 0;
    width: 55px;
    height: 55px;
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    font-size: 1.3em;
    box-shadow: 0 4px 10px rgba(245, 158, 11, 0.3);
}

.contribution-content h4 {
    color: #b45309;
    margin-bottom: 8px;
    font-size: 1.1em;
}

.contribution-content p {
    color: #6b7280;
    margin: 0;
    line-height: 1.5;
}

/* Legacy & Impact */
.legacy-showcase {
    margin-top: 25px;
}

.legacy-text {
    text-align: center;
    margin-bottom: 30px;
    padding: 25px;
    background: #f9fafb;
    border-radius: 15px;
    border: 1px solid #e5e7eb;
}

.legacy-text p {
    font-size: 1.05em;
    line-height: 1.7;
    color: #374151;
}

.impact-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 30px;
}

.stat-item {
    text-align: center;
    padding: 25px;
    background: linear-gradient(135deg, #fef3c7 0%, #fef9e7 100%);
    border-radius: 15px;
    border: 2px solid #f59e0b;
    transition: all 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(245, 158, 11, 0.2);
}

.stat-number {
    font-size: 2.5em;
    font-weight: 800;
    color: #d97706;
    display: block;
    margin-bottom: 8px;
    font-family: 'Playfair Display', serif;
}

.stat-label {
    color: #b45309;
    font-weight: 600;
    font-size: 0.9em;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .expert-section.specialist-section,
    .expert-section.partnership-section {
        padding: 25px;
    }
    
    .section-header-custom.specialist-header {
        padding: 20px;
    }
    
    .timeline-item-specialist {
        flex-direction: column;
        text-align: center;
    }
    
    .timeline-year-specialist {
        margin-right: 0;
        margin-bottom: 15px;
    }
    
    .achievement-showcase-item.featured {
        flex-direction: column;
        text-align: center;
    }
    
    .media-grid,
    .centre-features,
    .collaboration-areas {
        grid-template-columns: 1fr;
    }
    
    .collab-item {
        flex-direction: column;
        text-align: center;
    }
    
    .collab-icon {
        margin-right: 0;
        margin-bottom: 15px;
    }
    
    /* Partnership Responsive */
    .section-header-custom.partnership-header {
        padding: 20px;
    }
    
    .timeline-section {
        padding: 20px;
    }
    
    .timeline-content-extended {
        padding-left: 15px;
    }
    
    .uk-achievements,
    .current-contributions {
        grid-template-columns: 1fr;
    }
    
    .journey-milestone {
        flex-direction: column;
        text-align: center;
    }
    
    .milestone-year {
        margin-right: 0;
        margin-bottom: 15px;
    }
    
    .achievement-card,
    .contribution-item {
        flex-direction: column;
        text-align: center;
    }
    
    .achievement-card .achievement-icon,
    .contribution-icon {
        margin-right: 0;
        margin-bottom: 15px;
    }
    
    .impact-stats {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .stat-number {
        font-size: 2em;
    }
}

/* Memorial Section Styling */
.expert-divider.memorial-divider {
    background: linear-gradient(135deg, #fdf2f8 0%, #fef7ff 100%);
    border: 2px solid #ec4899;
    margin: 60px 0;
    position: relative;
    overflow: hidden;
}

.memorial-divider::before {
    content: '';
    position: absolute;
    top: 0;
    left: -50%;
    width: 200%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(236, 72, 153, 0.1), transparent);
    animation: memorial-shimmer 3s ease-in-out infinite;
}

@keyframes memorial-shimmer {
    0% { transform: translateX(-100%); }
    50% { transform: translateX(0%); }
    100% { transform: translateX(100%); }
}

.memorial-divider .divider-content {
    color: #ec4899;
    font-weight: 600;
    position: relative;
    z-index: 2;
}

.memorial-divider .divider-content i {
    color: #be185d;
    font-size: 1.2em;
    animation: heartbeat 2s ease-in-out infinite;
}

@keyframes heartbeat {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.expert-section.memorial-section {
    background: linear-gradient(135deg, #ffffff 0%, #fdf2f8 100%);
    border: 3px solid #ec4899;
    border-radius: 25px;
    padding: 50px;
    margin: 40px 0;
    box-shadow: 0 15px 35px rgba(236, 72, 153, 0.15);
    position: relative;
    overflow: hidden;
}

.expert-section.memorial-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 6px;
    background: linear-gradient(90deg, #ec4899, #be185d, #9d174d, #be185d, #ec4899);
    background-size: 200% 100%;
    animation: memorial-gradient 4s ease-in-out infinite;
}

@keyframes memorial-gradient {
    0%, 100% { background-position: 0% 0%; }
    50% { background-position: 100% 0%; }
}

.section-header-custom.memorial-header {
    text-align: center;
    margin-bottom: 50px;
    padding: 40px;
    background: linear-gradient(135deg, #fdf2f8 0%, #fef7ff 100%);
    border-radius: 20px;
    border: 2px solid #f3e8ff;
    position: relative;
}

.memorial-portrait-container {
    display: flex;
    justify-content: center;
    margin-bottom: 25px;
}

.memorial-image-wrapper {
    position: relative;
    width: 150px;
    height: 150px;
}

.memorial-image-wrapper::before {
    content: '';
    position: absolute;
    inset: -6px;
    border-radius: 50%;
    background: linear-gradient(45deg, #ec4899, #be185d, #9d174d, #be185d);
    background-size: 200% 200%;
    animation: memorial-photo-border 3s linear infinite;
    z-index: 1;
}

.memorial-photo {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #ec4899;
    box-shadow: 0 10px 30px rgba(236, 72, 153, 0.3);
    position: relative;
    z-index: 2;
    display: block;
}

@keyframes memorial-photo-border {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.memorial-portrait.fallback-portrait {
    width: 150px;
    height: 150px;
    background: linear-gradient(135deg, #ec4899, #be185d);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 25px rgba(236, 72, 153, 0.3);
    position: absolute;
    top: 0;
    left: 0;
}

.memorial-portrait {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #ec4899, #be185d);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    box-shadow: 0 8px 25px rgba(236, 72, 153, 0.3);
    position: relative;
}

.memorial-portrait::before {
    content: '';
    position: absolute;
    inset: -4px;
    border-radius: 50%;
    background: linear-gradient(45deg, #ec4899, #be185d, #9d174d, #be185d);
    background-size: 200% 200%;
    animation: memorial-border 3s linear infinite;
    z-index: -1;
}

@keyframes memorial-border {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.memorial-portrait i {
    font-size: 2.5em;
    color: white;
    animation: starlight 2s ease-in-out infinite;
}

@keyframes starlight {
    0%, 100% { opacity: 0.8; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.05); }
}

.expert-section-title.memorial-title {
    color: #be185d;
    font-size: 2.5em;
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
}

.expert-section-subtitle.memorial-subtitle {
    color: #ec4899;
    font-size: 1.2em;
    font-style: italic;
    margin-bottom: 20px;
}

.memorial-years {
    display: inline-flex;
    align-items: center;
    gap: 15px;
    background: #ec4899;
    color: white;
    padding: 15px 30px;
    border-radius: 30px;
    font-weight: 600;
    box-shadow: 0 6px 20px rgba(236, 72, 153, 0.3);
}

.memorial-years i {
    font-size: 1.2em;
    animation: infinite-glow 2s ease-in-out infinite;
}

@keyframes infinite-glow {
    0%, 100% { filter: brightness(1); }
    50% { filter: brightness(1.3); }
}

/* Memorial Content Styling */
.content-section.memorial-content {
    margin-bottom: 40px;
}

.section-title.memorial-section-title {
    color: #be185d;
    border-left-color: #ec4899;
    position: relative;
}

.section-title.memorial-section-title::before {
    content: '✦';
    position: absolute;
    left: -35px;
    color: #ec4899;
    font-size: 1.2em;
    animation: twinkle 1.5s ease-in-out infinite;
}

@keyframes twinkle {
    0%, 100% { opacity: 0.5; transform: scale(0.8); }
    50% { opacity: 1; transform: scale(1); }
}

.memorial-text {
    font-size: 1.1em;
    line-height: 1.8;
    color: #374151;
    text-align: center;
}

/* Memorial Quote */
.memorial-quote {
    display: flex;
    align-items: center;
    gap: 20px;
    background: linear-gradient(135deg, #fef7ff 0%, #fdf4ff 100%);
    padding: 30px;
    border-radius: 20px;
    border: 2px solid #f3e8ff;
    margin: 30px 0;
    position: relative;
}

.memorial-quote::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #ec4899, #be185d);
    border-radius: 20px 20px 0 0;
}

.quote-icon {
    font-size: 2em;
    color: #ec4899;
    opacity: 0.7;
}

.quote-text {
    flex: 1;
    font-size: 1.2em;
    font-style: italic;
    color: #be185d;
    text-align: center;
    font-weight: 500;
}

/* Memorial Story */
.memorial-story {
    margin-top: 30px;
}

.story-section {
    margin-bottom: 35px;
    padding: 25px;
    background: linear-gradient(135deg, #fefbff 0%, #fdf4ff 100%);
    border-radius: 15px;
    border-left: 5px solid #ec4899;
    transition: all 0.3s ease;
}

.story-section:hover {
    transform: translateX(10px);
    box-shadow: 0 8px 25px rgba(236, 72, 153, 0.15);
}

.story-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.story-header i {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, #ec4899, #be185d);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1em;
}

.story-header h4 {
    color: #be185d;
    font-size: 1.3em;
    margin: 0;
}

.story-section p {
    color: #4b5563;
    line-height: 1.7;
    margin-bottom: 12px;
}

/* Memorial Values */
.memorial-values {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 25px;
    margin: 30px 0;
}

.value-item {
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #fefbff 0%, #fdf4ff 100%);
    padding: 25px;
    border-radius: 15px;
    border: 2px solid #f3e8ff;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.value-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(236, 72, 153, 0.1), transparent);
    transition: left 0.5s ease;
}

.value-item:hover {
    border-color: #ec4899;
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(236, 72, 153, 0.2);
}

.value-item:hover::before {
    left: 100%;
}

.value-icon {
    flex-shrink: 0;
    width: 55px;
    height: 55px;
    background: linear-gradient(135deg, #ec4899, #be185d);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    font-size: 1.3em;
    position: relative;
    z-index: 2;
}

.value-content h4 {
    color: #be185d;
    margin-bottom: 8px;
    font-size: 1.1em;
    position: relative;
    z-index: 2;
}

.value-content p {
    color: #6b7280;
    margin: 0;
    position: relative;
    z-index: 2;
}

/* Memorial Tribute Final */
.memorial-tribute-final {
    margin-top: 40px;
}

.tribute-border {
    padding: 3px;
    background: linear-gradient(45deg, #ec4899, #be185d, #9d174d, #be185d, #ec4899);
    background-size: 200% 200%;
    animation: tribute-border 4s ease-in-out infinite;
    border-radius: 25px;
}

@keyframes tribute-border {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.tribute-content {
    background: white;
    padding: 40px;
    border-radius: 22px;
    text-align: center;
}

.tribute-title {
    color: #be185d;
    font-size: 1.8em;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.tribute-message {
    font-size: 1.1em;
    line-height: 1.8;
    color: #374151;
    margin-bottom: 25px;
}

.eternal-flame {
    display: inline-flex;
    align-items: center;
    gap: 15px;
    color: #ec4899;
    font-weight: 600;
    font-size: 1.1em;
}

.eternal-flame i {
    font-size: 1.3em;
    animation: flame-dance 1.5s ease-in-out infinite;
}

@keyframes flame-dance {
    0%, 100% { transform: scale(1) rotate(-2deg); }
    25% { transform: scale(1.1) rotate(2deg); }
    50% { transform: scale(1.05) rotate(-1deg); }
    75% { transform: scale(1.1) rotate(1deg); }
}

/* Responsive Design for Memorial */
@media (max-width: 768px) {
    .expert-section.memorial-section {
        padding: 30px;
    }
    
    .section-header-custom.memorial-header {
        padding: 25px;
    }
    
    .memorial-image-wrapper {
        width: 120px;
        height: 120px;
    }
    
    .memorial-image-wrapper::before {
        inset: -4px;
    }
    
    .memorial-photo,
    .memorial-portrait.fallback-portrait {
        width: 120px;
        height: 120px;
        border-width: 3px;
    }
    
    .memorial-portrait {
        width: 80px;
        height: 80px;
    }
    
    .memorial-portrait i {
        font-size: 2em;
    }
    
    .expert-section-title.memorial-title {
        font-size: 2em;
    }
    
    .memorial-quote {
        flex-direction: column;
        gap: 15px;
    }
    
    .memorial-values {
        grid-template-columns: 1fr;
    }
    
    .value-item {
        flex-direction: column;
        text-align: center;
    }
    
    .value-icon {
        margin-right: 0;
        margin-bottom: 15px;
    }
    
    .story-header {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<?php get_footer(); ?>