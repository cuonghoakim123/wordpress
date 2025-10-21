// Error handling và console fixes cho trang tin tức
document.addEventListener('DOMContentLoaded', function() {
    // Xử lý lỗi hình ảnh
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        img.addEventListener('error', function() {
            // Thay thế hình ảnh bị lỗi bằng placeholder
            this.style.display = 'none';
            
            // Tạo placeholder nếu chưa có
            if (!this.nextElementSibling || !this.nextElementSibling.classList.contains('image-placeholder')) {
                const placeholder = document.createElement('div');
                placeholder.className = 'image-placeholder';
                placeholder.innerHTML = '<i class="fas fa-image"></i>';
                placeholder.style.cssText = `
                    width: ${this.offsetWidth || 200}px;
                    height: ${this.offsetHeight || 200}px;
                    background: linear-gradient(135deg, #4a9fa5, #3a8a8f);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: 48px;
                    border-radius: ${this.classList.contains('director-photo') ? '50%' : '10px'};
                `;
                this.parentNode.insertBefore(placeholder, this.nextSibling);
            }
        });
        
        // Thêm loading state
        img.addEventListener('loadstart', function() {
            this.style.opacity = '0.5';
        });
        
        img.addEventListener('load', function() {
            this.style.opacity = '1';
        });
    });
    
    // Suppress console errors cho missing resources
    const originalConsoleError = console.error;
    console.error = function(...args) {
        const message = args.join(' ');
        // Bỏ qua lỗi 404 cho hình ảnh
        if (message.includes('404') && (message.includes('.jpg') || message.includes('.png') || message.includes('.gif'))) {
            return;
        }
        originalConsoleError.apply(console, args);
    };
    
    // Lazy loading cho performance
    if ('IntersectionObserver' in window) {
        const lazyImages = document.querySelectorAll('img[data-src]');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => imageObserver.observe(img));
    }
    
    // Cải thiện accessibility
    const buttons = document.querySelectorAll('button, .btn, .read-more-btn');
    buttons.forEach(button => {
        if (!button.getAttribute('aria-label') && !button.innerText.trim()) {
            button.setAttribute('aria-label', 'Button');
        }
    });
    
    // Performance monitoring
    if ('performance' in window) {
        window.addEventListener('load', () => {
            setTimeout(() => {
                const navigation = performance.getEntriesByType('navigation')[0];
                if (navigation.loadEventEnd - navigation.loadEventStart > 3000) {
                    console.info('Trang tải chậm, hãy xem xét tối ưu hóa');
                }
            }, 0);
        });
    }
    
    // Xử lý smooth scroll
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
    
    // Touch gestures cho mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    document.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    document.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 100;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            // Có thể thêm navigation logic ở đây
            console.log(diff > 0 ? 'Swipe left' : 'Swipe right');
        }
    }
    
    // Analytics events (nếu có Google Analytics)
    if (typeof gtag !== 'undefined') {
        // Track page view
        gtag('event', 'page_view', {
            page_title: document.title,
            page_location: window.location.href
        });
        
        // Track button clicks
        document.querySelectorAll('.read-more-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                gtag('event', 'click', {
                    event_category: 'engagement',
                    event_label: 'read_more_button'
                });
            });
        });
    }
});

// Service Worker registration (cho caching)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('SW registered: ', registration);
            })
            .catch(registrationError => {
                console.log('SW registration failed: ', registrationError);
            });
    });
}

// Global error handler
window.addEventListener('error', function(e) {
    // Bỏ qua lỗi hình ảnh
    if (e.target.tagName === 'IMG') {
        return false;
    }
    
    // Log các lỗi khác
    console.error('Global error:', e.error);
    
    // Có thể gửi error report đến server
    // sendErrorReport(e.error);
});

// Unhandled promise rejection
window.addEventListener('unhandledrejection', function(e) {
    console.error('Unhandled promise rejection:', e.reason);
    e.preventDefault();
});

// Utility functions
window.HandInHandUtils = {
    // Format date
    formatDate: function(date) {
        return new Intl.DateTimeFormat('vi-VN').format(new Date(date));
    },
    
    // Debounce function
    debounce: function(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },
    
    // Throttle function
    throttle: function(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        }
    },
    
    // Check if element is in viewport
    isInViewport: function(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
};