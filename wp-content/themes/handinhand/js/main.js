jQuery(document).ready(function($) {
    'use strict';
    
    console.log('Hand in Hand Foundation - Main.js v1.0.1 loaded successfully');
    
    try {
        // Initialize all components with error handling
        initializeNavigation();
        initializeScrollEffects();
        initializeMobileMenu();
        initializeAdditionalMobileMenu();
        initializeDocumentFunctions();
    } catch (error) {
        console.error('Error during initialization:', error);
    }
    
    // Smooth Scrolling for anchor links with error handling
    try {
        $('a[href*="#"]:not([href="#"])').on('click', function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 110
                }, 800);
                return false;
            }
        }
    });
    
    // Add active class to current menu item
    var currentUrl = window.location.href;
    $('.main-navigation a').each(function() {
        var linkUrl = $(this).attr('href');
        if (currentUrl.indexOf(linkUrl) !== -1 && linkUrl !== '/') {
            $(this).addClass('active');
        }
    });
    
    // Header scroll effect
    var header = $('.site-header');
    var scrollThreshold = 100;
    
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > scrollThreshold) {
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    });
    
    // Mobile menu toggle (if needed)
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('active');
        $('.main-navigation').toggleClass('active');
    });
    
    // Close mobile menu when clicking outside
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.site-header').length) {
            $('.main-navigation').removeClass('active');
            $('.menu-toggle').removeClass('active');
        }
    });
    
    // Lazy load images (simple implementation)
    if ('IntersectionObserver' in window) {
        var imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var image = entry.target;
                    if (image.dataset.src) {
                        image.src = image.dataset.src;
                        image.classList.remove('lazy');
                        imageObserver.unobserve(image);
                    }
                }
            });
        });
        
        document.querySelectorAll('img.lazy').forEach(function(img) {
            imageObserver.observe(img);
        });
    }
    
    // Contact form submission (basic validation)
    $('.contact-form').on('submit', function(e) {
        e.preventDefault();
        
        var name = $('#name').val().trim();
        var phone = $('#phone').val().trim();
        var message = $('#message').val().trim();
        
        if (name === '' || phone === '' || message === '') {
            alert('Vui lòng điền đầy đủ thông tin bắt buộc.');
            return false;
        }
        
        // Here you would typically send the form data via AJAX
        alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất có thể.');
        $(this)[0].reset();
    });
    
    } catch (error) {
        console.error('Error in jQuery ready function:', error);
    }
    
});

// Initialize Navigation
function initializeNavigation() {
    // Check if jQuery is available
    if (typeof $ === 'undefined' || typeof jQuery === 'undefined') {
        console.warn('jQuery not available, skipping navigation initialization');
        return;
    }
    
    try {
        // Add active class to current menu item
        var currentUrl = window.location.href;
        $('.main-navigation a').each(function() {
            var linkUrl = $(this).attr('href');
            if (currentUrl.indexOf(linkUrl) !== -1 && linkUrl !== '/') {
                $(this).addClass('active');
            }
        });
    } catch (error) {
        console.error('Error in initializeNavigation:', error);
    }
}

// Initialize Scroll Effects
function initializeScrollEffects() {
    // Check if jQuery is available
    if (typeof $ === 'undefined' || typeof jQuery === 'undefined') {
        console.warn('jQuery not available, skipping scroll effects initialization');
        return;
    }
    
    try {
        var header = $('.site-header');
        var scrollThreshold = 100;
        
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > scrollThreshold) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }
            
            // Animate elements on scroll
            animateOnScroll();
        });
        
        // Run once on load
        animateOnScroll();
    } catch (error) {
        console.error('Error in initializeScrollEffects:', error);
    }
}

// Initialize Mobile Menu
function initializeMobileMenu() {
    // Check if jQuery is available
    if (typeof $ === 'undefined' || typeof jQuery === 'undefined') {
        console.warn('jQuery not available, skipping mobile menu initialization');
        return;
    }
    
    try {
        $('.menu-toggle').on('click', function() {
            $(this).toggleClass('active');
            $('.main-navigation').toggleClass('active');
        });
    } catch (error) {
        console.error('Error in initializeMobileMenu:', error);
    }
}

// Additional Mobile Menu Behaviors
function initializeAdditionalMobileMenu() {
    // Check if jQuery is available
    if (typeof $ === 'undefined' || typeof jQuery === 'undefined') {
        console.warn('jQuery not available, skipping additional mobile menu initialization');
        return;
    }
    
    try {
        // Close mobile menu when clicking outside
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.site-header').length) {
                $('.main-navigation').removeClass('active');
                $('.menu-toggle').removeClass('active');
            }
        });
    } catch (error) {
        console.error('Error in initializeAdditionalMobileMenu:', error);
    }
}

// Initialize Document Functions
function initializeDocumentFunctions() {
    // Make sure document modal functions are available globally
    if (typeof showPointingDocument === 'undefined') {
        window.showPointingDocument = function() {
            var modal = document.getElementById('pointingModal');
            if (modal) {
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }
        };
    }
    
    if (typeof closePointingModal === 'undefined') {
        window.closePointingModal = function() {
            var modal = document.getElementById('pointingModal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        };
    }
    
    if (typeof downloadPointingGuide === 'undefined') {
        window.downloadPointingGuide = function() {
            alert('Tính năng tải tài liệu sẽ được bổ sung. Vui lòng liên hệ Hand in Hand Foundation để nhận tài liệu.');
        };
    }
    
    if (typeof shareDocument === 'undefined') {
        window.shareDocument = function() {
            if (navigator.share) {
                navigator.share({
                    title: 'Chỉ tay ở trẻ: Dấu hiệu nhỏ, ý nghĩa lớn',
                    text: 'Tài liệu quan trọng về phát triển giao tiếp và phát hiện sớm tự kỷ',
                    url: window.location.href
                });
            } else {
                var url = window.location.href;
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(url).then(function() {
                        alert('Link đã được sao chép vào clipboard!');
                    });
                } else {
                    alert('Link: ' + url);
                }
            }
        };
    }
}

// Animate elements on scroll
function animateOnScroll() {
    $('.service-card, .news-card, .about-content, .expert-card, .category-card').each(function() {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        
        if (elementBottom > viewportTop && elementTop < viewportBottom) {
            $(this).addClass('animate-in');
        }
    });
}

// Global functions for theme
window.HandInHandTheme = {
    init: function() {
        console.log('Hand in Hand Theme v1.0.1 initialized');
    },
    showModal: function(modalId) {
        var modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
    },
    hideModal: function(modalId) {
        var modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }
};

// Show Parents Teacher Document
function showParentsTeacherDocument() {
    console.log('showParentsTeacherDocument called from main.js');
    
    // Check if we're on the tai-lieu page with the new modal structure
    const newModal = document.getElementById('parentsTeacherModal');
    if (newModal) {
        console.log('Using new modal structure');
        newModal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        return;
    }
    
    // Fallback to old modal structure if it exists
    const modal = document.getElementById('documentsModal');
    const content = document.querySelector('.modal-document-content');
    
    if (!modal || !content) {
        console.error('Modal elements not found');
        alert('Không thể mở tài liệu. Vui lòng tải lại trang.');
        return;
    }
    
    content.innerHTML = `
        <div class="modal-header">
            <h2><i class="fas fa-heart"></i> Cha Mẹ - Người Thầy Đầu Tiên và Tuyệt Vời Nhất Của Con</h2>
            <button type="button" class="close-modal" onclick="closeModal()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <div class="intro-parents">
                <h3><i class="fas fa-users"></i> Vai Trò Đặc Biệt Của Cha Mẹ</h3>
                <p>Cha mẹ không chỉ là người sinh ra và nuôi dưỡng con, mà còn là những nhà giáo dục đầu tiên và quan trọng nhất trong cuộc đời của trẻ. Với trẻ rối loạn phổ tự kỷ, vai trò này càng trở nên thiết yếu và đầy ý nghĩa.</p>
                <p><strong>Sự hiểu biết sâu sắc về con, tình yêu vô điều kiện và sự kiên nhẫn của cha mẹ tạo nên nền tảng vững chắc cho sự phát triển của trẻ.</strong></p>
            </div>

            <div class="challenge-section">
                <h3><i class="fas fa-mountain"></i> Thử Thách Và Cơ Hội</h3>
                <div class="challenge-box">
                    <div class="challenge-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="challenge-content">
                        <p><strong>Thử thách:</strong> Nhiều cha mẹ cảm thấy bối rối, không biết bắt đầu từ đâu khi con được chẩn đoán rối loạn phổ tự kỷ.</p>
                        <p><strong>Cơ hội:</strong> Chính sự gần gũi và hiểu biết đặc biệt này giúp cha mẹ trở thành những "chuyên gia" về con mình.</p>
                        <p><strong>Giải pháp:</strong> Trang bị kiến thức và kỹ năng cần thiết để hỗ trợ con phát triển tối ưu.</p>
                    </div>
                </div>
            </div>

            <div class="knowledge-section">
                <h3><i class="fas fa-lightbulb"></i> Kiến Thức Cần Thiết Cho Cha Mẹ</h3>
                <div class="knowledge-benefits">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="benefit-text">
                            <h4>Hiểu về tự kỷ</h4>
                            <p>Nắm vững đặc điểm và nhu cầu của trẻ tự kỷ</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="benefit-text">
                            <h4>Kỹ năng giao tiếp</h4>
                            <p>Học cách giao tiếp hiệu quả với con</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="benefit-text">
                            <h4>Quản lý cảm xúc</h4>
                            <p>Hỗ trợ con điều chỉnh cảm xúc và hành vi</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <div class="benefit-text">
                            <h4>Kỹ năng xã hội</h4>
                            <p>Phát triển khả năng tương tác xã hội</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="benefit-text">
                            <h4>Hỗ trợ học tập</h4>
                            <p>Tạo môi trường học tập thuận lợi</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="benefit-text">
                            <h4>Tự chăm sóc</h4>
                            <p>Hướng dẫn kỹ năng sống độc lập</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="books-section">
                <h3><i class="fas fa-book-open"></i> Thư Viện Sách Dành Cho Cha Mẹ</h3>
                <div class="books-intro">
                    <p><strong>Chúng tôi đã tuyển chọn những cuốn sách quý giá nhất</strong> để giúp cha mẹ trang bị kiến thức và kỹ năng cần thiết. Mỗi cuốn sách đều được viết bởi các chuyên gia hàng đầu và đã được kiểm chứng qua thực tế.</p>
                </div>
                <div class="books-grid">
                    <div class="book-card">
                        <div class="book-number">1</div>
                        <div class="book-content">
                            <h4>Hướng Dẫn Can Thiệp Sớm Tại Nhà</h4>
                            <p>Cuốn sách cung cấp những phương pháp can thiệp hiệu quả mà cha mẹ có thể thực hiện tại nhà, từ những kỹ thuật cơ bản đến nâng cao.</p>
                            <div class="book-features">
                                <span><i class="fas fa-check-circle"></i> Phương pháp ABA đơn giản</span>
                                <span><i class="fas fa-check-circle"></i> Hoạt động thực hành hàng ngày</span>
                                <span><i class="fas fa-check-circle"></i> Theo dõi tiến triển của trẻ</span>
                                <span><i class="fas fa-check-circle"></i> Giải đáp thắc mắc thường gặp</span>
                            </div>
                        </div>
                    </div>
                    <div class="book-card">
                        <div class="book-number">2</div>
                        <div class="book-content">
                            <h4>Giao Tiếp Hiệu Quả Với Trẻ Tự Kỷ</h4>
                            <p>Tập trung vào việc phát triển kỹ năng giao tiếp và ngôn ngữ cho trẻ, với những chiến lược cụ thể và dễ áp dụng.</p>
                            <div class="book-features">
                                <span><i class="fas fa-check-circle"></i> Kỹ thuật giao tiếp không lời</span>
                                <span><i class="fas fa-check-circle"></i> Phát triển ngôn ngữ từ cơ bản</span>
                                <span><i class="fas fa-check-circle"></i> Sử dụng hình ảnh và ký hiệu</span>
                                <span><i class="fas fa-check-circle"></i> Xây dựng từ vựng chức năng</span>
                            </div>
                        </div>
                    </div>
                    <div class="book-card">
                        <div class="book-number">3</div>
                        <div class="book-content">
                            <h4>Xây Dựng Kỹ Năng Sống Độc Lập</h4>
                            <p>Hướng dẫn cha mẹ cách dạy con những kỹ năng sống cần thiết để trẻ có thể tự chăm sóc bản thân và hòa nhập cộng đồng.</p>
                            <div class="book-features">
                                <span><i class="fas fa-check-circle"></i> Kỹ năng tự phục vụ cá nhân</span>
                                <span><i class="fas fa-check-circle"></i> Quản lý thời gian và công việc</span>
                                <span><i class="fas fa-check-circle"></i> Kỹ năng xã hội cơ bản</span>
                                <span><i class="fas fa-check-circle"></i> Chuẩn bị cho tương lai</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="parents-conclusion">
                <div class="conclusion-highlight">
                    <i class="fas fa-star"></i>
                    <h3>Bạn Chính Là Chuyên Gia Của Con Mình</h3>
                </div>
                <p>Không ai hiểu con bạn hơn chính bạn. Với kiến thức đúng đắn, tình yêu thương và sự kiên trì, cha mẹ có thể tạo ra những thay đổi kỳ diệu trong cuộc đời của con.</p>
                
                <div class="parents-cta">
                    <div class="cta-content">
                        <h4><i class="fas fa-graduation-cap"></i> Bắt Đầu Hành Trình Học Hỏi</h4>
                        <p>Hãy cùng chúng tôi trang bị những kiến thức và kỹ năng cần thiết để trở thành người thầy tuyệt vời nhất cho con.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-actions">
            <button class="btn-download" onclick="downloadParentsTeacherGuide()">
                <i class="fas fa-download"></i> Tải Hướng Dẫn
            </button>
            <button class="btn-share" onclick="shareParentsTeacherDocument()">
                <i class="fas fa-share"></i> Chia Sẻ
            </button>
        </div>
    `;
    
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function downloadParentsTeacherGuide() {
    // Create download link
    const link = document.createElement('a');
    link.href = '#';
    link.download = 'Cha-Me-Nguoi-Thay-Dau-Tien-Cua-Con.pdf';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    
    showToast('Đã tải xuống hướng dẫn cho cha mẹ!');
}

function shareParentsTeacherDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Cha Mẹ - Người Thầy Đầu Tiên và Tuyệt Vời Nhất Của Con',
            text: 'Khám phá vai trò đặc biệt của cha mẹ trong việc hỗ trợ trẻ rối loạn phổ tự kỷ',
            url: window.location.href
        });
    } else {
        const text = 'Cha Mẹ - Người Thầy Đầu Tiên và Tuyệt Vời Nhất Của Con - ' + window.location.href;
        navigator.clipboard.writeText(text);
        showToast('Đã sao chép liên kết!');
    }
}
