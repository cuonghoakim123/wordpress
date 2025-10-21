/**
 * Content Management JavaScript
 * Hand in Hand Foundation
 */

// Document ready
document.addEventListener('DOMContentLoaded', function() {
    console.log('Content.js loaded successfully');
    
    // Initialize any content-specific functionality
    initializeContent();
});

function initializeContent() {
    // Add any content-specific JavaScript functionality here
    console.log('Content functionality initialized');
    
    // Example: Handle document cards hover effects
    const documentCards = document.querySelectorAll('.document-card');
    if (documentCards.length > 0) {
        documentCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.08)';
            });
        });
    }
    
    // Handle smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
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
}

// Export functions for global use
window.ContentJS = {
    initialize: initializeContent
};