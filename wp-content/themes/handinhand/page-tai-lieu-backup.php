<?php
/**
 * Template Name: Tài Liệu
 * Description: Trang tài liệu giáo dục của Hand in Hand Foundation
 */

get_header(); ?>

<!-- Import Google Fonts và Font Awesome -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="tai-lieu-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <h1><i class="fas fa-book-open"></i> Tài Liệu Giáo Dục</h1>
                <p>Khám phá bộ sưu tập tài liệu chuyên môn về tự kỷ và phát triển trẻ em từ Hand in Hand Foundation</p>
            </div>
        </div>
    </section>

    <!-- Featured Document -->
    <section class="featured-section">
        <div class="container">
            <div class="featured-document">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20.jpg" 
                             alt="Chỉ tay ở trẻ - Hành vi giao tiếp quan trọng"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3); border: 3px solid white;">
                    </div>
                    <div class="featured-text">
                        <h2>Chỉ tay ở trẻ: Dấu hiệu nhỏ, ý nghĩa lớn</h2>
                        <p>Tìm hiểu về tầm quan trọng của hành vi chỉ tay trong phát triển giao tiếp và phát hiện sớm rối loạn phổ tự kỷ.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-clock"></i> 15 phút đọc</span>
                            <span><i class="fas fa-users"></i> Dành cho phụ huynh & chuyên gia</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showPointingDocument()" class="btn btn-primary">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>

                </div>
            </div>
        </div>
    </section>

    <!-- Additional Featured Document -->
    <section class="additional-featured-section">
        <div class="container">
            <div class="featured-document speech-delay-doc">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/21.jpg" 
                             alt="Trẻ chậm nói và lười nói"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(255, 152, 0, 0.3); border: 3px solid white;">
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #ff9800; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">HOT</span>
                            <span style="color: #e65100; font-weight: 600;">Phát triển ngôn ngữ</span>
                        </div>
                        <h2>Trẻ "chậm nói" khác với trẻ "lười nói"</h2>
                        <p>Phân biệt rõ ràng giữa trẻ chậm nói thật sự và trẻ lười nói để có phương pháp can thiệp phù hợp.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-clock"></i> 20 phút đọc</span>
                            <span><i class="fas fa-users"></i> Dành cho phụ huynh</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showSpeechDelayDocument()" class="btn btn-primary" style="background: #ff9800;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>

                </div>
            </div>
        </div>
    </section>

    <!-- Third Featured Document: Toilet Training -->
    <section class="toilet-training-section">
        <div class="container">
            <div class="featured-document toilet-training-doc">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/25.png" 
                             alt="Lộ trình tập ngồi bồn cầu cho trẻ tự kỷ"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(76, 175, 80, 0.3); border: 3px solid white;">
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #4caf50; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">THỰC HÀNH</span>
                            <span style="color: #2e7d32; font-weight: 600;">Kỹ năng sống</span>
                        </div>
                        <h2>Lộ trình tập ngồi bồn cầu cho trẻ tự kỷ</h2>
                        <p>Hướng dẫn chi tiết theo từng giai đoạn để giúp trẻ rối loạn phổ tự kỷ học kỹ năng đi vệ sinh độc lập trong 4-6 tuần.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-clock"></i> 25 phút đọc</span>
                            <span><i class="fas fa-users"></i> Dành cho cha mẹ & giáo viên</span>
                            <span><i class="fas fa-calendar-alt"></i> 4-6 tuần thực hiện</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showToiletTrainingDocument()" class="btn btn-primary" style="background: #4caf50;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Fourth Featured Document: Golden Period -->
    <section class="golden-period-section">
        <div class="container">
            <div class="featured-document golden-period-doc">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/27.png" 
                             alt="Giai đoạn vàng để can thiệp sớm"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(255, 193, 7, 0.3); border: 3px solid white;">
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #ffc107; color: #333; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">QUAN TRỌNG</span>
                            <span style="color: #f57c00; font-weight: 600;">Can thiệp sớm</span>
                        </div>
                        <h2>Đừng bỏ lỡ giai đoạn vàng để can thiệp cho con!</h2>
                        <p>Tại sao can thiệp trước 3 tuổi là giai đoạn kim cương quý giá nhất cho sự phát triển của trẻ? Hiểu rõ để không bỏ lỡ cơ hội.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-clock"></i> 10 phút đọc</span>
                            <span><i class="fas fa-users"></i> Dành cho mọi phụ huynh</span>
                            <span><i class="fas fa-star"></i> Thông điệp quan trọng</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showGoldenPeriodDocument()" class="btn btn-primary" style="background: #ffc107; color: #333;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Fifth Featured Document: Parents as First Teachers -->
    <section class="parents-teacher-section">
        <div class="container">
            <div class="featured-document parents-teacher-doc">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/15.jpg" 
                             alt="Cha mẹ - Người thầy đầu tiên"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(156, 39, 176, 0.3); border: 3px solid white;">
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #9c27b0; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">SÁCH HAY</span>
                            <span style="color: #7b1fa2; font-weight: 600;">Hướng dẫn phụ huynh</span>
                        </div>
                        <h2>Cha mẹ - Người thầy đầu tiên và tuyệt vời nhất của con</h2>
                        <p>Giới thiệu 03 đầu sách chuyên biệt hỗ trợ cha mẹ trong hành trình đồng hành cùng con tự kỷ thông qua giao tiếp và trò chơi khoa học.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-book"></i> 3 cuốn sách</span>
                            <span><i class="fas fa-users"></i> Dành cho cha mẹ trẻ đặc biệt</span>
                            <span><i class="fas fa-graduation-cap"></i> Phương pháp khoa học</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showParentsTeacherDocument()" class="btn btn-primary" style="background: #9c27b0;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Sixth Featured Document: Common Mistakes -->
    <section class="mistakes-section">
        <div class="container">
            <div class="featured-document mistakes-doc">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/16.jpg" 
                             alt="7 sai lầm thường gặp"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(220, 38, 127, 0.3); border: 3px solid white;">
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #dc267f; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">LỖI THƯỜNG GẶP</span>
                            <span style="color: #ad1a5c; font-weight: 600;">Can thiệp tại nhà</span>
                        </div>
                        <h2>7 Sai lầm thường gặp khi phụ huynh tự can thiệp trẻ chậm nói tại nhà</h2>
                        <p>Tránh những sai lầm phổ biến để can thiệp hiệu quả và an toàn cho trẻ chậm phát triển ngôn ngữ. Hướng dẫn chi tiết từ chuyên gia.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-exclamation-triangle"></i> 7 sai lầm phổ biến</span>
                            <span><i class="fas fa-home"></i> Can thiệp tại nhà</span>
                            <span><i class="fas fa-shield-alt"></i> An toàn cho trẻ</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showMistakesDocument()" class="btn btn-primary" style="background: #dc267f;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>

        <!-- Seventh Featured Document: Hearing Screening -->
        <div class="container">
            <div class="featured-document hearing-screening-doc">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/17.jpg" 
                             alt="Sàng lọc thính lực"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(0, 188, 212, 0.3); border: 3px solid white;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div style="display: none; width: 120px; height: 120px; background: linear-gradient(135deg, #e0f7fa, #b2ebf2); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(0, 188, 212, 0.3); border: 3px solid white;">
                            <i class="fas fa-ear-listen" style="font-size: 2.5em; color: #00acc1;"></i>
                        </div>
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #00bcd4; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">KIỂM TRA THÍNH LỰC</span>
                            <span style="color: #00838f; font-weight: 600;">Bước đầu quan trọng</span>
                        </div>
                        <h2>Sàng lọc thính lực - Bước đầu quan trọng trong hành trình hỗ trợ trẻ chậm nói</h2>
                        <p>Tại sao việc kiểm tra thính lực lại quan trọng? Chi phí và bất tiện có đáng lo ngại? Hiểu rõ để đưa ra quyết định đúng đắn cho con.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-stethoscope"></i> Xét nghiệm khách quan</span>
                            <span><i class="fas fa-clock"></i> Phát hiện sớm</span>
                            <span><i class="fas fa-chart-line"></i> Hiệu quả can thiệp</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showHearingScreeningDocument()" class="btn btn-primary" style="background: #00bcd4;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>

        <!-- Eighth Featured Document: Toilet Stool -->
        <div class="container">
            <div class="featured-document toilet-stool-doc">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/31.png" 
                             alt="Ghế kê chân cho trẻ ASD"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(121, 85, 72, 0.3); border: 3px solid white;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #795548; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">CÔNG CỤ HỖ TRỢ</span>
                            <span style="color: #5d4037; font-weight: 600;">Toilet training</span>
                        </div>
                        <h2>Ghế kê chân: Công cụ hỗ trợ toilet tuyệt vời cho trẻ ASD</h2>
                        <p>Tư thế sinh lý đúng, cảm giác an toàn, khuyến khích tính độc lập. Giải pháp đơn giản nhưng hiệu quả cao cho quá trình toilet training.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-user-check"></i> Tư thế đúng sinh học</span>
                            <span><i class="fas fa-shield-alt"></i> An toàn cho trẻ</span>
                            <span><i class="fas fa-coins"></i> Chi phí thấp</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showToiletStoolDocument()" class="btn btn-primary" style="background: #795548;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>

        <!-- Ninth Featured Document: Kindergarten vs Intervention Center -->
        <div class="container">
            <div class="featured-document kindergarten-center-doc">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/19.jpg" 
                             alt="Trường mầm non hay trung tâm can thiệp"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(156, 39, 176, 0.3); border: 3px solid white;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div style="display: none; width: 120px; height: 120px; background: linear-gradient(135deg, #f3e5f5, #e1bee7); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(156, 39, 176, 0.3); border: 3px solid white;">
                            <i class="fas fa-school" style="font-size: 2.5em; color: #9c27b0;"></i>
                        </div>
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #9c27b0; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">LỰA CHỌN GIÁO DỤC</span>
                            <span style="color: #7b1fa2; font-weight: 600;">Phân tích khoa học</span>
                        </div>
                        <h2>Trường mầm non hay trung tâm can thiệp - Đâu là nơi phù hợp cho trẻ khuyết tật?</h2>
                        <p>Phân tích từ khoa học và thực tiễn về lựa chọn giáo dục phù hợp. Hiểu rõ ưu nhược điểm để đưa ra quyết định đúng đắn cho con.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-microscope"></i> Phân tích khoa học</span>
                            <span><i class="fas fa-balance-scale"></i> So sánh chi tiết</span>
                            <span><i class="fas fa-lightbulb"></i> Lời khuyên chuyên gia</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showKindergartenCenterDocument()" class="btn btn-primary" style="background: #9c27b0;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>

        <!-- Tenth Featured Document: Hearing Impaired Children AVT -->
        <div class="container">
            <div class="featured-document hearing-impaired-avt-doc">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/34.png" 
                             alt="Trẻ khiếm thính và can thiệp AVT"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(55, 71, 79, 0.3); border: 3px solid white;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #37474f; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">KHIẾM THÍNH</span>
                            <span style="color: #263238; font-weight: 600;">Can thiệp AVT</span>
                        </div>
                        <h2>Trẻ khiếm thính dây thần kinh mảnh - Tầm quan trọng của can thiệp AVT sau cấy ốc tai</h2>
                        <p>Phát hiện sau 3 tuổi, trong vòng 1 năm sau cấy ốc tai điện tử mà không can thiệp AVT đúng cách sẽ ảnh hưởng thế nào đến khả năng nghe-nói?</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-brain"></i> Dây thần kinh mảnh</span>
                            <span><i class="fas fa-microchip"></i> Cấy ốc tai điện tử</span>
                            <span><i class="fas fa-stopwatch"></i> Thời gian vàng</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showHearingImpairedAVTDocument()" class="btn btn-primary" style="background: #37474f;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Document 12: Screen Time Effects on Brain -->
    <section class="document-card screen-time-brain-doc">
        <div class="container">
            <div class="document-content">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/21.jpg" 
                             alt="Ảnh hưởng màn hình thiết bị điện tử đến não"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(233, 30, 99, 0.3); border: 3px solid white;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div style="display: none; width: 120px; height: 120px; background: linear-gradient(135deg, #fce4ec, #f8bbd9); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(233, 30, 99, 0.3); border: 3px solid white;">
                            <i class="fas fa-mobile-alt" style="font-size: 2.5em; color: #e91e63;"></i>
                        </div>
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #e91e63; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">SCREEN TIME</span>
                            <span style="color: #c2185b; font-weight: 600;">Não bộ trẻ em</span>
                        </div>
                        <h2>Ảnh hưởng màn hình của thiết bị điện tử đến não thế nào?</h2>
                        <p>Tác động của thời gian tiếp xúc với màn hình điện tử đến sự phát triển não bộ, hành vi và nhận thức của trẻ em. Những thay đổi cấu trúc và chức năng não quan trọng cần lưu ý.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-brain"></i> Não bộ trẻ em</span>
                            <span><i class="fas fa-mobile-alt"></i> Thiết bị điện tử</span>
                            <span><i class="fas fa-clock"></i> Thời gian màn hình</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showScreenTimeBrainDocument()" class="btn btn-primary" style="background: #e91e63;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Document 13: Communication Strategies for Autism -->
    <section class="document-card autism-communication-doc">
        <div class="container">
            <div class="document-content">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/22.jpg" 
                             alt="Chiến lược giao tiếp với trẻ tự kỷ"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(103, 58, 183, 0.3); border: 3px solid white;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div style="display: none; width: 120px; height: 120px; background: linear-gradient(135deg, #f3e5f5, #e1bee7); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(103, 58, 183, 0.3); border: 3px solid white;">
                            <i class="fas fa-comments" style="font-size: 2.5em; color: #673ab7;"></i>
                        </div>
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #673ab7; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">TỰ KỶ</span>
                            <span style="color: #512da8; font-weight: 600;">Giao tiếp</span>
                        </div>
                        <h2>Những cách mà người lớn có thể tác động đến việc giao tiếp của một trẻ tự kỷ</h2>
                        <p>12 chiến lược hiệu quả giúp người lớn tác động tích cực đến kỹ năng giao tiếp của trẻ em có rối loạn phổ tự kỷ, từ khuyến khích tương tác đến phát triển ngôn ngữ.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-comments"></i> 12 chiến lược</span>
                            <span><i class="fas fa-users"></i> Người lớn & trẻ</span>
                            <span><i class="fas fa-brain"></i> Phổ tự kỷ</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showAutismCommunicationDocument()" class="btn btn-primary" style="background: #673ab7;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Document 14: What is Communication and Interaction -->
    <section class="document-card communication-interaction-doc">
        <div class="container">
            <div class="document-content">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/23.jpg" 
                             alt="Giao tiếp và tương tác là gì"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(76, 175, 80, 0.3); border: 3px solid white;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div style="display: none; width: 120px; height: 120px; background: linear-gradient(135deg, #e8f5e8, #c8e6c9); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(76, 175, 80, 0.3); border: 3px solid white;">
                            <i class="fas fa-handshake" style="font-size: 2.5em; color: #4caf50;"></i>
                        </div>
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #4caf50; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">GIAO TIẾP</span>
                            <span style="color: #388e3c; font-weight: 600;">4 giai đoạn phát triển</span>
                        </div>
                        <h2>Giao tiếp và tương tác là gì?</h2>
                        <p>Hiểu rõ bản chất của giao tiếp và tương tác, từ giao tiếp phi ngôn ngữ đến 4 giai đoạn phát triển theo chương trình Hanen. Hướng dẫn thấu hiểu cách trẻ giao tiếp.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-handshake"></i> Giao tiếp & tương tác</span>
                            <span><i class="fas fa-layer-group"></i> 4 giai đoạn</span>
                            <span><i class="fas fa-child"></i> Chương trình Hanen</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showCommunicationInteractionDocument()" class="btn btn-primary" style="background: #4caf50;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Document 15: Chewing and Food Structure -->
    <section class="document-card food-structure-doc">
        <div class="container">
            <div class="document-content">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/24.jpg" 
                             alt="Nhai và cấu trúc thức ăn"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(255, 152, 0, 0.3); border: 3px solid white;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div style="display: none; width: 120px; height: 120px; background: linear-gradient(135deg, #fff8e1, #ffcc02); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(255, 152, 0, 0.3); border: 3px solid white;">
                            <i class="fas fa-utensils" style="font-size: 2.5em; color: #ff9800;"></i>
                        </div>
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #ff9800; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">DINH DƯỠNG</span>
                            <span style="color: #f57c00; font-weight: 600;">Cấu trúc thức ăn</span>
                        </div>
                        <h2>Nhai và cấu trúc thức ăn</h2>
                        <p>Hướng dẫn chi tiết về cấu trúc thức ăn theo độ tuổi từ 6-12 tháng. Giải pháp cho trẻ lớn đã bỏ qua cấu trúc và tầm quan trọng của việc chuyển đổi đúng thời điểm.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-utensils"></i> Cấu trúc thức ăn</span>
                            <span><i class="fas fa-teeth"></i> Kỹ năng nhai</span>
                            <span><i class="fas fa-chart-line"></i> Theo độ tuổi</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showFoodStructureDocument()" class="btn btn-primary" style="background: #ff9800;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Document 16: Intensive Interaction -->
    <section class="document-card intensive-interaction-doc">
        <div class="container">
            <div class="document-content">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/25.jpg" 
                             alt="Chiến lược giao tiếp chuyên sâu"
                             style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(156, 39, 176, 0.3); border: 3px solid white;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div style="display: none; width: 120px; height: 120px; background: linear-gradient(135deg, #f3e5f5, #e1bee7); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(156, 39, 176, 0.3); border: 3px solid white;">
                            <i class="fas fa-heart" style="font-size: 2.5em; color: #9c27b0;"></i>
                        </div>
                    </div>
                    <div class="featured-text">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="background: #9c27b0; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">INTENSIVE</span>
                            <span style="color: #7b1fa2; font-weight: 600;">Giao tiếp chuyên sâu</span>
                        </div>
                        <h2>Chiến lược giao tiếp chuyên sâu (Intensive Interaction)</h2>
                        <p>Phương pháp tiếp cận đặc biệt để hỗ trợ những người gặp khó khăn nghiêm trọng trong giao tiếp. Tập trung xây dựng mối quan hệ hai chiều qua tín hiệu phi ngôn ngữ.</p>
                        <div class="featured-meta">
                            <span><i class="fas fa-heart"></i> Kết nối cảm xúc</span>
                            <span><i class="fas fa-users"></i> Tương tác 1:1</span>
                            <span><i class="fas fa-seedling"></i> 2 giai đoạn</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showIntensiveInteractionDocument()" class="btn btn-primary" style="background: #9c27b0;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Document 11: RLPTK Q&A -->
    <section class="document-card rlptk-qa-doc">
        <div class="container">
            <div class="document-content">
                <div class="document-info">
                    <div class="document-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div class="document-details">
                        <h3>Hỏi đáp về một số vấn đề của trẻ RLPTK</h3>
                        <p class="document-description">
                            Tổng hợp các câu hỏi thường gặp và giải đáp chuyên môn về rối loạn phát triển toàn diện ở trẻ em. 
                            Cung cấp thông tin khoa học, thực tiễn để hỗ trợ gia đình hiểu rõ hơn về tình trạng và phương pháp can thiệp.
                        </p>
                        <div class="document-meta">
                            <span><i class="fas fa-graduation-cap"></i> Chuyên gia tâm lý</span>
                            <span><i class="fas fa-users"></i> Gia đình & Giáo viên</span>
                            <span><i class="fas fa-brain"></i> RLPTK</span>
                        </div>
                    </div>
                </div>
                <div class="featured-actions">
                    <button onclick="showRLPTKQADocument()" class="btn btn-primary" style="background: #673ab7;">
                        <i class="fas fa-eye"></i> Xem chi tiết
                    </button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Download All Section -->
    <section class="download-all-section">
        <div class="container">
            <div class="download-all-card">
                <div class="download-content">
                    <div class="download-icon">
                        <i class="fas fa-folder-open"></i>
                    </div>
                    <div class="download-text">
                        <h3>Tải về toàn bộ thư mục tài liệu</h3>
                        <p>Nhận trọn bộ 16 tài liệu chuyên môn về phát triển trẻ em và can thiệp sớm từ Hand in Hand Foundation</p>
                        <div class="included-docs">
                            <span><i class="fas fa-check-circle"></i> Chỉ tay ở trẻ</span>
                            <span><i class="fas fa-check-circle"></i> Chậm nói vs Lười nói</span>
                            <span><i class="fas fa-check-circle"></i> Lộ trình toilet training</span>
                            <span><i class="fas fa-check-circle"></i> Giai đoạn vàng can thiệp</span>
                            <span><i class="fas fa-check-circle"></i> Cha mẹ - Người thầy đầu tiên</span>
                            <span><i class="fas fa-check-circle"></i> 7 sai lầm can thiệp tại nhà</span>
                            <span><i class="fas fa-check-circle"></i> Sàng lọc thính lực</span>
                            <span><i class="fas fa-check-circle"></i> Ghế kê chân cho trẻ ASD</span>
                            <span><i class="fas fa-check-circle"></i> Trường mầm non vs Trung tâm</span>
                            <span><i class="fas fa-check-circle"></i> Trẻ khiếm thính dây thần kinh mảnh</span>
                            <span><i class="fas fa-check-circle"></i> Hỏi đáp về trẻ RLPTK</span>
                            <span><i class="fas fa-check-circle"></i> Ảnh hưởng màn hình lên não bộ</span>
                            <span><i class="fas fa-check-circle"></i> Chiến lược giao tiếp với trẻ tự kỷ</span>
                            <span><i class="fas fa-check-circle"></i> Giao tiếp và tương tác là gì</span>
                            <span><i class="fas fa-check-circle"></i> Nhai và cấu trúc thức ăn</span>
                        </div>
                    </div>
                </div>
                <div class="download-action">
                    <button onclick="downloadAllDocuments()" class="btn-download-all">
                        <i class="fas fa-download"></i>
                        <span>Tải về thư mục</span>
                        <small>ZIP - 15MB</small>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Document Categories -->
    <section class="categories-section">
        <div class="container">
            <h2 class="section-title">Danh Mục Tài Liệu</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Rối loạn phổ tự kỷ</h3>
                    <p>Tài liệu về chẩn đoán, can thiệp và hỗ trợ trẻ tự kỷ</p>
                    <div class="category-count">12 tài liệu</div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Phát triển trẻ em</h3>
                    <p>Hướng dẫn về các giai đoạn phát triển bình thường</p>
                    <div class="category-count">8 tài liệu</div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Giao tiếp & Ngôn ngữ</h3>
                    <p>Phương pháp phát triển kỹ năng giao tiếp</p>
                    <div class="category-count">16 tài liệu</div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Hỗ trợ gia đình</h3>
                    <p>Tài nguyên dành cho phụ huynh và người chăm sóc</p>
                    <div class="category-count">10 tài liệu</div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Đào tạo chuyên môn</h3>
                    <p>Khóa học và tài liệu dành cho chuyên gia</p>
                    <div class="category-count">6 tài liệu</div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Công cụ đánh giá</h3>
                    <p>Bảng kiểm và công cụ sàng lọc phát triển</p>
                    <div class="category-count">9 tài liệu</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <div class="newsletter-text">
                    <h2>Đăng ký nhận tài liệu mới</h2>
                    <p>Nhận thông báo về các tài liệu giáo dục mới nhất từ Hand in Hand Foundation</p>
                </div>
                <form class="newsletter-form">
                    <div class="form-group">
                        <input type="email" placeholder="Nhập địa chỉ email của bạn" required>
                        <button type="submit">
                            <i class="fas fa-paper-plane"></i> Đăng ký
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<!-- Pointing Document Modal (same as in page-documents.php) -->
<div id="pointingModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing">
            <h2>Chỉ tay ở trẻ: Dấu hiệu nhỏ, ý nghĩa lớn</h2>
            <span class="close-pointing" onclick="closePointingModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Content same as in page-documents.php -->
            <div class="document-images">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20.jpg" 
                         alt="Trẻ em chỉ tay - Hành vi giao tiếp quan trọng"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 1000px; object-fit: cover; border-radius: 15px;">

                </div>
            </div>
            <div class="document-content-detailed">
                <div class="intro-section">
                    <h3><i class="fas fa-hand-point-right"></i> 1. Chỉ tay là gì?</h3>
                    <p><strong>"Chỉ tay" (pointing)</strong> là một hành vi giao tiếp phi ngôn ngữ rất quan trọng, thường xuất hiện ở trẻ từ <strong>9–14 tháng tuổi</strong>.</p>
                    <p>Khi trẻ chỉ tay, bé đang muốn <strong>giao tiếp hoặc chia sẻ sự chú ý</strong> với người khác, chứ không đơn thuần là hành động cơ học.</p>
                    
                    <div class="pointing-types">
                        <h4><i class="fas fa-list-alt"></i> Có hai loại chỉ tay chính:</h4>
                        <div class="type-card">
                            <div class="type-icon protoimperative">
                                <i class="fas fa-hand-paper"></i>
                            </div>
                            <div class="type-content">
                                <h5>Chỉ tay yêu cầu (protoimperative)</h5>
                                <p>Trẻ chỉ để <strong>đòi hỏi thứ mình muốn</strong>.</p>
                            </div>
                        </div>
                        
                        <div class="type-card">
                            <div class="type-icon protodeclarative">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="type-content">
                                <h5>Chỉ tay chia sẻ (protodeclarative)</h5>
                                <p>Trẻ chỉ để <strong>chia sẻ hứng thú hoặc cảm xúc</strong> (ví dụ, chỉ vào máy bay rồi nhìn người lớn để "khoe").</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section">
                    <h3><i class="fas fa-puzzle-piece"></i> 2. Mối liên quan giữa chỉ tay và rối loạn phổ tự kỷ</h3>
                    <p>Ở trẻ có <strong>rối loạn phổ tự kỷ (ASD)</strong>, hành vi chỉ tay thường:</p>
                    
                    <div class="asd-characteristics">
                        <div class="characteristic-item">
                            <div class="char-icon delay">
                                <i class="fas fa-clock"></i>
                            </div>
                            <p><strong>Xuất hiện chậm hoặc không có</strong></p>
                        </div>
                        
                        <div class="characteristic-item">
                            <div class="char-icon missing">
                                <i class="fas fa-eye-slash"></i>
                            </div>
                            <p><strong>Thiếu chỉ tay chia sẻ</strong> – bé ít hoặc không chỉ để thu hút sự chú ý của người khác</p>
                        </div>
                        
                        <div class="characteristic-item">
                            <div class="char-icon no-eye-contact">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <p><strong>Không kết hợp nhìn mặt</strong> người lớn sau khi chỉ</p>
                        </div>
                        
                        <div class="characteristic-item">
                            <div class="char-icon request-only">
                                <i class="fas fa-hand-holding"></i>
                            </div>
                            <p>Nếu có chỉ, thường là để <strong>yêu cầu món đồ</strong> chứ không phải để chia sẻ cảm xúc</p>
                        </div>
                    </div>
                    
                    <div class="important-note">
                        <i class="fas fa-exclamation-triangle"></i>
                        <p><strong>Đây là một dấu hiệu sớm rất quan trọng giúp nhận biết nguy cơ tự kỷ.</strong></p>
                    </div>
                </div>

                <div class="content-section">
                    <h3><i class="fas fa-stethoscope"></i> 3. Vì sao chỉ tay lại quan trọng trong chẩn đoán sớm?</h3>
                    
                    <div class="importance-points">
                        <div class="importance-item">
                            <div class="importance-icon early">
                                <i class="fas fa-baby"></i>
                            </div>
                            <div class="importance-content">
                                <h5>Hành vi giao tiếp sớm nhất</h5>
                                <p>Chỉ tay là một trong những hành vi giao tiếp sớm nhất ở trẻ</p>
                            </div>
                        </div>
                        
                        <div class="importance-item">
                            <div class="importance-icon timeline">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="importance-content">
                                <h5>Thời điểm quan trọng</h5>
                                <p>Nếu <strong>12–18 tháng</strong> mà trẻ chưa biết chỉ hoặc chỉ để đòi đồ, cha mẹ nên đưa bé đi đánh giá phát triển</p>
                            </div>
                        </div>
                        
                        <div class="importance-item">
                            <div class="importance-icon screening">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="importance-content">
                                <h5>Công cụ sàng lọc M-CHAT</h5>
                                <p>Trong các công cụ sàng lọc như <strong>M-CHAT</strong>, hành vi chỉ tay là một tiêu chí bắt buộc để phát hiện nguy cơ ASD</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section">
                    <h3><i class="fas fa-users"></i> 4. Vai trò của chỉ tay trong phát triển ngôn ngữ và xã hội</h3>
                    
                    <div class="development-roles">
                        <div class="role-card language">
                            <div class="role-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div class="role-content">
                                <h5>Bước đệm cho ngôn ngữ</h5>
                                <p>Trẻ biết chỉ thường sẽ <strong>nói sớm hơn</strong></p>
                            </div>
                        </div>
                        
                        <div class="role-card attention">
                            <div class="role-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="role-content">
                                <h5>Nền tảng chú ý chung</h5>
                                <p>Là nền tảng của <strong>chú ý chung (joint attention)</strong> – khả năng chia sẻ sự chú ý vào cùng một vật thể hoặc sự kiện</p>
                            </div>
                        </div>
                        
                        <div class="role-card intention">
                            <div class="role-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div class="role-content">
                                <h5>Ý định giao tiếp</h5>
                                <p>Thể hiện ý định giao tiếp: trẻ muốn <strong>"gọi người khác vào thế giới của mình"</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section">
                    <h3><i class="fas fa-hand-holding-heart"></i> 5. Cách khuyến khích trẻ tập chỉ tay</h3>
                    <p>Phụ huynh có thể hỗ trợ trẻ bằng những cách đơn giản mỗi ngày:</p>
                    
                    <div class="encouragement-methods">
                        <div class="method-item">
                            <div class="method-icon setup">
                                <i class="fas fa-cube"></i>
                            </div>
                            <div class="method-content">
                                <h5>Tạo tình huống để trẻ cần chỉ</h5>
                                <p>Đặt đồ chơi yêu thích xa tầm với, giấu đồ trong lọ trong suốt</p>
                            </div>
                        </div>
                        
                        <div class="method-item">
                            <div class="method-icon modeling">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="method-content">
                                <h5>Làm mẫu và chờ phản ứng</h5>
                                <p>Người lớn chỉ và hỏi "Cái gì đây?" – rồi chờ bé đáp lại</p>
                            </div>
                        </div>
                        
                        <div class="method-item">
                            <div class="method-icon reward">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="method-content">
                                <h5>Khen thưởng khi bé có ý định chỉ</h5>
                                <p>Dù bé mới giơ cả bàn tay cũng nên khen và đáp ứng ngay</p>
                            </div>
                        </div>
                        
                        <div class="method-item">
                            <div class="method-icon eye-contact">
                                <i class="fas fa-eyes"></i>
                            </div>
                            <div class="method-content">
                                <h5>Tăng cường giao tiếp mắt</h5>
                                <p>Khi bé chỉ, gọi tên và chờ bé nhìn mặt rồi mới phản ứng</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="intervention-methods">
                        <h4><i class="fas fa-graduation-cap"></i> Những kỹ thuật này nằm trong các phương pháp can thiệp sớm nổi tiếng:</h4>
                        <div class="methods-list">
                            <span class="method-tag esdm">ESDM</span>
                            <span class="method-tag jasper">JASPER</span>
                            <span class="method-tag floortime">Floortime</span>
                        </div>
                    </div>
                </div>

                <div class="conclusion-section">
                    <div class="conclusion-highlight">
                        <i class="fas fa-window-maximize"></i>
                        <h4>Chỉ tay – hành vi tưởng như nhỏ – lại là "cửa sổ" phản ánh sự phát triển giao tiếp và xã hội của trẻ.</h4>
                    </div>
                    
                    <div class="key-takeaways">
                        <div class="takeaway-item">
                            <i class="fas fa-search-plus"></i>
                            <p><strong>Phát hiện sớm</strong> sự thiếu hụt trong hành vi chỉ tay giúp can thiệp kịp thời, đặc biệt với trẻ có nguy cơ tự kỷ</p>
                        </div>
                        
                        <div class="takeaway-item">
                            <i class="fas fa-eye"></i>
                            <p><strong>Quan sát kỹ</strong> và khuyến khích hành vi chỉ tay trong mọi hoạt động hằng ngày của trẻ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareDocument()" class="btn-share">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Speech Delay Document Modal -->
<div id="speechDelayModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing" style="background: linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%);">
            <h2 style="color: #e65100;">Trẻ "chậm nói" khác với trẻ "lười nói"</h2>
            <span class="close-pointing" onclick="closeSpeechDelayModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Hình ảnh minh họa -->
            <div class="document-images" style="margin-bottom: 25px;">
    <div class="main-image" style="text-align: center;">
        <div style="margin-bottom: 20px; display: block; clear: both;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/21.jpg" 
                 alt="Bảng phân biệt chậm nói và lười nói"
                 onerror="this.style.display='none';"
                 style="width: 100%; max-width: 800px; height: auto; border-radius: 12px; object-fit: cover;">
        </div>
        <div style="display: block; clear: both;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/22.jpg" 
                 alt="Trẻ chậm nói và lười nói"
                 onerror="this.style.display='none';"
                 style="width: 100%; max-width: 800px; height: auto; border-radius: 12px; object-fit: cover;">
        </div>
    </div>
</div>


            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="content-section">
                    <h3><i class="fas fa-clock-o"></i> 1. Trẻ chậm nói (Speech Delay / Language Delay)</h3>
                    <p><strong>Nghĩa là trẻ thực sự gặp khó khăn trong phát triển ngôn ngữ, có thể do nguyên nhân sinh học hoặc môi trường.</strong></p>
                    
                    <div class="delay-signs">
                        <h4><i class="fas fa-exclamation-triangle"></i> Dấu hiệu nhận biết:</h4>
                        <ul class="sign-list">
                            <li><i class="fas fa-dot-circle"></i> Sau 18 tháng mà vẫn chưa nói được từ đơn rõ ràng</li>
                            <li><i class="fas fa-dot-circle"></i> Sau 2 tuổi chưa nói được câu 2–3 từ</li>
                            <li><i class="fas fa-dot-circle"></i> Vốn từ rất ít, học từ mới rất chậm</li>
                            <li><i class="fas fa-dot-circle"></i> Khó bắt chước âm, tiếng hoặc không hiểu lời người khác</li>
                            <li><i class="fas fa-dot-circle"></i> Thường đi kèm các vấn đề khác: khó tập trung, ít giao tiếp mắt, chậm phản ứng khi gọi tên</li>
                            <li><i class="fas fa-dot-circle"></i> Có thể liên quan đến rối loạn phát triển (tự kỷ, chậm phát triển trí tuệ), khiếm thính, hoặc môi trường ít tương tác ngôn ngữ</li>
                        </ul>
                    </div>
                </div>

                <div class="content-section">
                    <h3><i class="fas fa-comment-slash"></i> 2. Trẻ lười nói</h3>
                    <p><strong>Nghĩa là trẻ có khả năng nói nhưng không muốn nói, thường do thói quen hoặc môi trường nuôi dưỡng.</strong></p>
                    
                    <div class="lazy-signs">
                        <h4><i class="fas fa-search"></i> Dấu hiệu nhận biết:</h4>
                        <ul class="sign-list">
                            <li><i class="fas fa-check-circle"></i> Trẻ biết nói nhưng chỉ nói khi cần thiết</li>
                            <li><i class="fas fa-check-circle"></i> Ở nhà ít nói vì được "đoán ý" → cha mẹ, ông bà đáp ứng ngay khi trẻ chỉ tay, ra hiệu</li>
                            <li><i class="fas fa-check-circle"></i> Trẻ nói nhiều hơn khi chơi với bạn cùng lứa hoặc ở môi trường khác</li>
                            <li><i class="fas fa-check-circle"></i> Nghe – hiểu ngôn ngữ tốt, phản ứng nhanh khi được gọi hoặc hỏi</li>
                            <li><i class="fas fa-check-circle"></i> Không có vấn đề rõ rệt về phát triển trí tuệ hay khả năng giao tiếp</li>
                        </ul>
                    </div>
                </div>

                <div class="content-section comparison-table">
                    <h3><i class="fas fa-balance-scale"></i> Bảng so sánh nhanh</h3>
                    <div class="comparison-grid">
                        <div class="comparison-header">
                            <div class="comp-title">Tiêu chí</div>
                            <div class="comp-delay">Chậm nói</div>
                            <div class="comp-lazy">Lười nói</div>
                        </div>
                        <div class="comparison-row">
                            <div class="comp-title">Hiểu lời người lớn</div>
                            <div class="comp-delay">Kém, phản ứng chậm hoặc không hiểu</div>
                            <div class="comp-lazy">Hiểu tốt, làm theo được hướng dẫn</div>
                        </div>
                        <div class="comparison-row">
                            <div class="comp-title">Khả năng phát âm</div>
                            <div class="comp-delay">Khó phát âm, vốn từ ít, nói sai nhiều</div>
                            <div class="comp-lazy">Nói được những chọn lọc, ít dùng</div>
                        </div>
                        <div class="comparison-row">
                            <div class="comp-title">Nguyên nhân</div>
                            <div class="comp-delay">Vẫn đề phát triển ngôn ngữ, thính giác, não</div>
                            <div class="comp-lazy">Thói quen, môi trường giao tiếp "dễ dãi"</div>
                        </div>
                        <div class="comparison-row">
                            <div class="comp-title">Hành vi giao tiếp</div>
                            <div class="comp-delay">Ít giao tiếp mắt, khó bắt chước</div>
                            <div class="comp-lazy">Vẫn tương tác tốt, dùng cử chỉ/ánh mắt thay lời nói</div>
                        </div>
                        <div class="comparison-row">
                            <div class="comp-title">Can can thiệp</div>
                            <div class="comp-delay">Thường cần can thiệp ngôn ngữ trị liệu</div>
                            <div class="comp-lazy">Điều chỉnh cách dạy và môi trường</div>
                        </div>
                    </div>
                </div>

                <div class="content-section conclusion">
                    <h3><i class="fas fa-lightbulb"></i> 3. Lời khuyên</h3>
                    
                    <div class="advice-grid">
                        <div class="advice-card delay-advice">
                            <div class="advice-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h4>Nếu nghi ngờ trẻ chậm nói thật sự</h4>
                            <p>→ Nên cho khám sớm (nhi đồng, tai mũi họng, chuyên gia ngôn ngữ trị liệu).</p>
                        </div>
                        
                        <div class="advice-card lazy-advice">
                            <div class="advice-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <h4>Nếu là lười nói</h4>
                            <p>→ Cha mẹ/giáo viên cần thay đổi cách tương tác:</p>
                            <ul>
                                <li>Khuyến khích trẻ nói thay vì "đoán ý" ngay</li>
                                <li>Tạo nhiều tình huống buộc trẻ dùng lời (ví dụ muốn đồ chơi phải nói tên)</li>
                                <li>Cho trẻ chơi, giao tiếp với bạn cùng lứa nhiều hơn</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="important-note">
                        <i class="fas fa-exclamation-circle"></i>
                        <span><strong>Quan trọng:</strong> Việc phân biệt chính xác giúp cha mẹ có hướng xử lý phù hợp, tránh lo lắng thừa hoặc bỏ qua các vấn đề thực sự.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareSpeechDelayDocument()" class="btn-share" style="border-color: #ff9800; color: #ff9800;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Toilet Training Document Modal -->
<div id="toiletTrainingModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing" style="background: linear-gradient(135deg, #e8f5e8 0%, #c8e6c9 100%);">
            <h2 style="color: #2e7d32;">Lộ trình tập ngồi bồn cầu cho trẻ tự kỷ</h2>
            <span class="close-pointing" onclick="closeToiletTrainingModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Hình ảnh minh họa -->
            <div class="document-images">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/26.png" 
                         alt="Lộ trình tập ngồi bồn cầu cho trẻ tự kỷ"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px;">

                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="intro-section">
                    <h3><i class="fas fa-info-circle"></i> Lộ trình tập ngồi bồn cầu</h3>
                    <p><strong>Thời gian:</strong> 4–6 tuần (tùy trẻ) theo từng bước nhỏ</p>
                    <div class="timeline-overview">
                        <div class="phase-overview">
                            <span class="phase-number">1</span>
                            <span>Làm quen (1-2 tuần)</span>
                        </div>
                        <div class="phase-overview">
                            <span class="phase-number">2</span>
                            <span>Tập ngồi thoải mái (1-2 tuần)</span>
                        </div>
                        <div class="phase-overview">
                            <span class="phase-number">3</span>
                            <span>Liên kết với việc đi vệ sinh (2-3 tuần)</span>
                        </div>
                        <div class="phase-overview">
                            <span class="phase-number">4</span>
                            <span>Tăng tính độc lập</span>
                        </div>
                    </div>
                </div>

                <div class="content-section phase-section">
                    <h3><i class="fas fa-play-circle"></i> Giai đoạn 1: Làm quen (1–2 tuần)</h3>
                    <div class="phase-goal">
                        <strong>🎯 Mục tiêu:</strong> Trẻ thấy bồn cầu là "an toàn"
                    </div>
                    <ul class="step-list">
                        <li><i class="fas fa-toy-brick"></i> Cho trẻ vào phòng vệ sinh chơi vài phút mỗi ngày (có đồ chơi, sách, bảng dán hình)</li>
                        <li><i class="fas fa-chair"></i> Để trẻ ngồi lên bồn cầu khi vẫn mặc quần/tã</li>
                        <li><i class="fas fa-gift"></i> Khen ngợi, thưởng nhỏ (sticker, kẹo, đồ chơi nhỏ) sau mỗi lần ngồi</li>
                    </ul>
                </div>

                <div class="content-section phase-section">
                    <h3><i class="fas fa-couch"></i> Giai đoạn 2: Tập ngồi thoải mái (1–2 tuần)</h3>
                    <div class="phase-goal">
                        <strong>🎯 Mục tiêu:</strong> Trẻ quen với việc ngồi bồn cầu như một hoạt động bình thường
                    </div>
                    <ul class="step-list">
                        <li><i class="fas fa-baby"></i> Cho trẻ ngồi bồn cầu không mặc quần nhưng vẫn mặc tã → trẻ dần cảm giác thật</li>
                        <li><i class="fas fa-step-forward"></i> Cho ghế kê chân để trẻ cảm thấy chắc chắn, không "lơ lửng"</li>
                        <li><i class="fas fa-volume-down"></i> Nếu trẻ sợ tiếng xả nước, không xả khi trẻ đang ngồi, mà để trẻ ra ngoài rồi mới xả → sau quen thì cho trẻ bấm nút xả như trò chơi</li>
                    </ul>
                </div>

                <div class="content-section phase-section">
                    <h3><i class="fas fa-link"></i> Giai đoạn 3: Liên kết với việc đi vệ sinh (2–3 tuần)</h3>
                    <div class="phase-goal">
                        <strong>🎯 Mục tiêu:</strong> Trẻ hiểu bồn cầu dùng để đi vệ sinh
                    </div>
                    <ul class="step-list">
                        <li><i class="fas fa-eye"></i> Quan sát dấu hiệu trẻ muốn đi (nét mặt, nắm chặt chân, đi núp, im lặng)</li>
                        <li><i class="fas fa-clock"></i> Đưa trẻ ngồi lên bồn cầu ngay thời điểm đó, nhưng không ép</li>
                        <li><i class="fas fa-trophy"></i> Nếu đi vệ sinh được trong bồn → thưởng ngay lập tức</li>
                        <li><i class="fas fa-heart"></i> Nếu chưa đi, vẫn khen "Con ngồi giỏi quá!" để duy trì động lực</li>
                    </ul>
                </div>

                <div class="content-section phase-section">
                    <h3><i class="fas fa-user-graduate"></i> Giai đoạn 4: Tăng tính độc lập</h3>
                    <div class="phase-goal">
                        <strong>🎯 Mục tiêu:</strong> Trẻ tự thực hiện các bước cơ bản
                    </div>
                    <ul class="step-list">
                        <li><i class="fas fa-images"></i> Dùng tranh/PECS để dạy quy trình: 👕 → kéo quần → 🚽 ngồi bồn cầu → 🧻 lau → 🚰 xả nước → 🧼 rửa tay</li>
                        <li><i class="fas fa-hands"></i> Cho trẻ thử tự cởi quần, tự kéo giấy, tự bấm nút xả</li>
                        <li><i class="fas fa-chart-line"></i> Giảm dần phần thưởng, chỉ khen bằng lời hoặc sticker</li>
                    </ul>
                </div>

                <div class="content-section tips-section">
                    <h3><i class="fas fa-lightbulb"></i> Mẹo quan trọng</h3>
                    
                    <div class="tips-grid">
                        <div class="tip-card patience">
                            <div class="tip-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h4>Kiên nhẫn – Không ép buộc</h4>
                            <p>Nếu trẻ hoảng sợ, quay lại bước trước. Mỗi trẻ có tốc độ học khác nhau.</p>
                        </div>
                        
                        <div class="tip-card schedule">
                            <div class="tip-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4>Thời gian cố định</h4>
                            <p>Cho trẻ ngồi bồn cầu sau bữa ăn, trước khi ngủ → tạo thói quen.</p>
                        </div>
                        
                        <div class="tip-card sensory">
                            <div class="tip-icon">
                                <i class="fas fa-adjust"></i>
                            </div>
                            <h4>Giảm kích thích giác quan</h4>
                            <p>Đèn dịu, không gian gọn gàng, có đồ chơi nhỏ để phân tán chú ý.</p>
                        </div>
                        
                        <div class="tip-card consistency">
                            <div class="tip-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <h4>Nhất quán</h4>
                            <p>Cả ở nhà, trường học, trung tâm can thiệp nên thống nhất cách làm.</p>
                        </div>
                    </div>
                </div>

                <div class="content-section conclusion">
                    <h3><i class="fas fa-check-circle"></i> Lưu ý cuối cùng</h3>
                    <div class="conclusion-content">
                        <p><strong>Tập ngồi bồn cầu cho trẻ tự kỷ đòi hỏi sự kiên nhẫn và nhất quán từ tất cả người chăm sóc.</strong></p>
                        <p>Hãy nhớ rằng mỗi trẻ là duy nhất và có thể cần thời gian khác nhau để hoàn thành từng giai đoạn.</p>
                        <div class="success-note">
                            <i class="fas fa-star"></i>
                            <span>Thành công nhỏ mỗi ngày sẽ dẫn đến kết quả lớn!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareToiletTrainingDocument()" class="btn-share" style="border-color: #4caf50; color: #4caf50;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Golden Period Document Modal -->
<div id="goldenPeriodModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing" style="background: linear-gradient(135deg, #fff8e1 0%, #ffecb3 100%);">
            <h2 style="color: #f57c00;">Đừng bỏ lỡ giai đoạn vàng để can thiệp cho con!</h2>
            <span class="close-pointing" onclick="closeGoldenPeriodModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Hình ảnh minh họa -->
            <div class="document-images">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/27.png" 
                         alt="Giai đoạn vàng để can thiệp sớm"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 2000px; object-fit: cover; border-radius: 15px;">

                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="intro-golden">
                    <h3><i class="fas fa-exclamation-triangle"></i> Tại sao gọi là "Giai đoạn vàng"?</h3>
                    <p>Khái niệm <strong>"can thiệp"</strong> luôn đi cùng với từ <strong>"sớm"</strong> – bởi phát hiện sớm, chẩn đoán sớm, đánh giá sớm và can thiệp sớm chính là chìa khóa giúp trẻ phát triển tốt nhất.</p>
                </div>

                <div class="content-section golden-period">
                    <h3><i class="fas fa-brain"></i> Thời điểm tối ưu: Trước 3 tuổi</h3>
                    <div class="golden-highlight">
                        <div class="highlight-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div class="highlight-content">
                            <p>Theo các chuyên gia, <strong>giai đoạn vàng để can thiệp hiệu quả nhất là trước 3 tuổi</strong> – khi não bộ của trẻ còn linh hoạt và khả năng tiếp nhận, học hỏi đang ở mức cao nhất.</p>
                        </div>
                    </div>
                    
                    <div class="brain-development">
                        <h4><i class="fas fa-lightbulb"></i> Tại sao não bộ trước 3 tuổi đặc biệt?</h4>
                        <ul class="development-list">
                            <li><i class="fas fa-flash"></i> <strong>Tính dẻo dai cao nhất:</strong> Não bộ có khả năng thích ứng và thay đổi nhanh chóng</li>
                            <li><i class="fas fa-network-wired"></i> <strong>Hình thành kết nối thần kinh:</strong> Tốc độ tạo synapse đạt đỉnh cao</li>
                            <li><i class="fas fa-sponge"></i> <strong>Khả năng hấp thụ tối đa:</strong> Trẻ học hỏi và tiếp nhận thông tin nhanh nhất</li>
                            <li><i class="fas fa-seedling"></i> <strong>Nền tảng phát triển:</strong> Các kỹ năng cơ bản được thiết lập</li>
                        </ul>
                    </div>
                </div>

                <div class="content-section reality-check">
                    <h3><i class="fas fa-clock"></i> Thực tế đáng lo ngại</h3>
                    <div class="reality-box">
                        <div class="reality-stat">
                            <div class="stat-number">70%</div>
                            <div class="stat-text">phụ huynh phát hiện vấn đề khi trẻ đã đến trường</div>
                        </div>
                        <div class="reality-content">
                            <p>Thực tế, nhiều phụ huynh chỉ phát hiện vấn đề của con khi trẻ đã đến trường và được thầy cô thông báo.</p>
                            <p><strong>Lúc ấy, con đã 3 tuổi, 4 tuổi, thậm chí 6 tuổi</strong> – vô tình bỏ lỡ quãng thời gian quý giá nhất để can thiệp.</p>
                        </div>
                    </div>
                </div>

                <div class="content-section message-section">
                    <h3><i class="fas fa-heart"></i> Thông điệp từ Hand in Hand Foundation</h3>
                    <div class="foundation-message">
                        <div class="message-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <div class="message-content">
                            <blockquote>
                                💛 Hand in Hand Foundation muốn gửi đến ba mẹ một thông điệp mạnh mẽ:
                                <br><br>
                                <strong>"Giai đoạn tốt nhất, giai đoạn kim cương – giai đoạn vàng, giai đoạn châu báu cho con chính là khi con dưới 3 tuổi."</strong>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <div class="content-section action-plan">
                    <h3><i class="fas fa-tasks"></i> Hành động cần thiết</h3>
                    <div class="action-cards">
                        <div class="action-card observe">
                            <div class="action-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h4>Quan sát con mỗi ngày</h4>
                            <p>Chú ý đến hành vi, phản ứng và cách con tương tác với môi trường xung quanh</p>
                        </div>
                        
                        <div class="action-card milestones">
                            <div class="action-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4>Nắm rõ mốc phát triển</h4>
                            <p>Hiểu các mốc phát triển theo từng độ tuổi để có chuẩn mực so sánh</p>
                        </div>
                        
                        <div class="action-card early-detection">
                            <div class="action-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <h4>Phát hiện sớm dấu hiệu</h4>
                            <p>Nhận biết những dấu hiệu bất thường trong phát triển của trẻ</p>
                        </div>
                        
                        <div class="action-card intervention">
                            <div class="action-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h4>Can thiệp kịp thời</h4>
                            <p>Đưa trẻ đi thăm khám, đánh giá và can thiệp ngay khi phát hiện vấn đề</p>
                        </div>
                    </div>
                </div>

                <div class="content-section conclusion golden-conclusion">
                    <div class="conclusion-highlight">
                        <i class="fas fa-gem"></i>
                        <h3>Mỗi ngày đều quan trọng</h3>
                    </div>
                    <div class="conclusion-content">
                        <p>🌼 <strong>Bởi vì, mỗi ngày trôi qua đều là một cơ hội quý giá để con phát triển toàn diện hơn.</strong></p>
                        <p><strong>Đừng để cơ hội ấy vụt qua, ba mẹ nhé!</strong></p>
                    </div>
                    
                    <div class="call-to-action">
                        <div class="cta-content">
                            <h4><i class="fas fa-phone"></i> Cần hỗ trợ?</h4>
                            <p>Liên hệ Hand in Hand Foundation để được tư vấn miễn phí về phát triển trẻ em và can thiệp sớm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareGoldenPeriodDocument()" class="btn-share" style="border-color: #ffc107; color: #ffc107;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Parents as First Teachers Modal -->
<div id="parentsTeacherModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing" style="background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);">
            <h2 style="color: #7b1fa2;">Cha mẹ - Người thầy đầu tiên và tuyệt vời nhất của con</h2>
            <span class="close-pointing" onclick="closeParentsTeacherModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Hình ảnh minh họa -->
            <div class="document-images">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/28.png" 
                         alt="Cha mẹ - Người thầy đầu tiên"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 600px; object-fit: cover; border-radius: 15px;">

                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="intro-parents">
                    <h3><i class="fas fa-graduation-cap"></i> Vai trò không thể thay thế</h3>
                    <p>Cha mẹ không chỉ là những người sinh ra, nuôi dưỡng con mà còn là <strong>những người thầy đầu tiên và quan trọng nhất</strong> trong cuộc đời mỗi đứa trẻ.</p>
                    <p><strong>Đặc biệt với trẻ rối loạn phổ tự kỷ và trẻ có nhu cầu đặc biệt, cha mẹ chính là "người thầy" tuyệt vời nhất.</strong></p>
                </div>

                <div class="content-section challenge-section">
                    <h3><i class="fas fa-exclamation-triangle"></i> Thử thách của cha mẹ</h3>
                    <div class="challenge-box">
                        <div class="challenge-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="challenge-content">
                            <p>Tuy nhiên, để có thể hỗ trợ con đúng cách, cha mẹ không thể chỉ dựa vào bản năng hay những kinh nghiệm rời rạc trên mạng Internet.</p>
                            <p><strong>Bởi vì, mỗi trẻ đặc biệt là một thế giới riêng, và để bước vào thế giới ấy, cha mẹ cần được trang bị những kiến thức đặc biệt.</strong></p>
                        </div>
                    </div>
                </div>

                <div class="content-section knowledge-section">
                    <h3><i class="fas fa-book-open"></i> Sách - Nguồn tri thức đáng tin cậy</h3>
                    <div class="knowledge-benefits">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-science"></i>
                            </div>
                            <div class="benefit-text">
                                <h4>Phương pháp khoa học</h4>
                                <p>Tiếp cận các phương pháp đã được chứng minh hiệu quả</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="benefit-text">
                                <h4>Hiểu rõ con hơn</h4>
                                <p>Thông qua sách chuyên sâu, cha mẹ sẽ hiểu hơn về con</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div class="benefit-text">
                                <h4>Tương tác hiệu quả</h4>
                                <p>Biết cách tương tác, chơi, và giao tiếp cùng con một cách có mục tiêu</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="benefit-text">
                                <h4>Trở thành chuyên gia tại nhà</h4>
                                <p>Từ đó trở thành "nhà chuyên môn" hiệu quả nhất trong chính ngôi nhà của mình</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section books-section">
                    <h3><i class="fas fa-graduation-cap"></i> 03 Đầu sách chuyên biệt</h3>
                    <div class="books-intro">
                        <p><strong>Hand in Hand Foundation trân trọng giới thiệu đến quý phụ huynh 03 đầu sách chuyên biệt hỗ trợ cha mẹ trong hành trình đồng hành cùng con rối loạn phổ tự kỷ</strong> – thông qua giao tiếp và trò chơi có tính khoa học, giúp từng bước mở ra cánh cửa kết nối và phát triển cho con yêu.</p>
                    </div>

                    <div class="books-grid">
                        <div class="book-card">
                            <div class="book-number">1</div>
                            <div class="book-content">
                                <h4>Giao tiếp có mục tiêu</h4>
                                <p>Hướng dẫn phương pháp giao tiếp đặc biệt cho trẻ tự kỷ, giúp phát triển ngôn ngữ và kỹ năng xã hội.</p>
                                <div class="book-features">
                                    <span><i class="fas fa-check"></i> Kỹ thuật giao tiếp</span>
                                    <span><i class="fas fa-check"></i> Bài tập thực hành</span>
                                    <span><i class="fas fa-check"></i> Ví dụ cụ thể</span>
                                </div>
                            </div>
                        </div>

                        <div class="book-card">
                            <div class="book-number">2</div>
                            <div class="book-content">
                                <h4>Trò chơi khoa học</h4>
                                <p>Các hoạt động chơi được thiết kế đặc biệt để kích thích sự phát triển toàn diện của trẻ tự kỷ.</p>
                                <div class="book-features">
                                    <span><i class="fas fa-check"></i> Game trị liệu</span>
                                    <span><i class="fas fa-check"></i> Phát triển kỹ năng</span>
                                    <span><i class="fas fa-check"></i> Hướng dẫn từng bước</span>
                                </div>
                            </div>
                        </div>

                        <div class="book-card">
                            <div class="book-number">3</div>
                            <div class="book-content">
                                <h4>Kết nối và phát triển</h4>
                                <p>Chiến lược toàn diện giúp mở ra cánh cửa kết nối với con và thúc đẩy quá trình phát triển.</p>
                                <div class="book-features">
                                    <span><i class="fas fa-check"></i> Chiến lược kết nối</span>
                                    <span><i class="fas fa-check"></i> Theo dõi tiến bộ</span>
                                    <span><i class="fas fa-check"></i> Tư vấn chuyên môn</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section conclusion parents-conclusion">
                    <div class="conclusion-highlight">
                        <i class="fas fa-hands-helping"></i>
                        <h3>Hành trình đồng hành</h3>
                    </div>
                    <div class="conclusion-content">
                        <p>💜 <strong>Với bộ 03 cuốn sách này, cha mẹ sẽ có trong tay những công cụ mạnh mẽ để hỗ trợ con phát triển một cách khoa học và hiệu quả.</strong></p>
                        <p>Mỗi trang sách không chỉ là kiến thức, mà còn là tình yêu thương và sự kiên nhẫn mà cha mẹ dành cho con.</p>
                    </div>
                    
                    <div class="parents-cta">
                        <div class="cta-content">
                            <h4><i class="fas fa-book"></i> Nhận bộ sách ngay hôm nay</h4>
                            <p>Liên hệ Hand in Hand Foundation để được tư vấn và nhận bộ sách hướng dẫn chuyên môn dành cho cha mẹ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareParentsTeacherDocument()" class="btn-share" style="border-color: #9c27b0; color: #9c27b0;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- 7 Common Mistakes Modal -->
<div id="mistakesModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing" style="background: linear-gradient(135deg, #fce4ec 0%, #f8bbd9 100%);">
            <h2 style="color: #ad1457;">7 Sai lầm thường gặp khi phụ huynh tự can thiệp trẻ chậm nói tại nhà</h2>
            <span class="close-pointing" onclick="closeMistakesModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Hình ảnh minh họa -->
            <div class="document-images">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/29.png" 
                         alt="7 sai lầm thường gặp"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px;">

                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="intro-mistakes">
                    <h3><i class="fas fa-exclamation-triangle"></i> Tại sao cần tránh những sai lầm này?</h3>
                    <p>Nhiều phụ huynh với tình yêu thương vô bờ bến muốn giúp con phát triển ngôn ngữ, nhưng đôi khi những <strong>sai lầm không chủ ý</strong> có thể làm chậm quá trình phát triển của trẻ.</p>
                </div>

                <div class="content-section mistakes-list">
                    <h3><i class="fas fa-times-circle"></i> 7 Sai lầm cần tránh ngay</h3>
                    
                    <div class="mistake-item">
                        <div class="mistake-header">
                            <span class="mistake-number">01</span>
                            <h4>Nói thay cho con</h4>
                        </div>
                        <div class="mistake-content">
                            <p><strong>Sai lầm:</strong> "Con muốn uống nước phải không?" rồi tự trả lời và đưa nước cho con.</p>
                            <p><strong>Hậu quả:</strong> Trẻ mất động lực giao tiếp vì mọi nhu cầu đã được đáp ứng.</p>
                            <p><strong>Làm đúng:</strong> Chờ đợi và tạo cơ hội để con diễn đạt nhu cầu của mình.</p>
                        </div>
                    </div>

                    <div class="mistake-item">
                        <div class="mistake-header">
                            <span class="mistake-number">02</span>
                            <h4>Ép buộc con phải nói</h4>
                        </div>
                        <div class="mistake-content">
                            <p><strong>Sai lầm:</strong> "Nói đi! Nói 'cảm ơn' đi!" với giọng điệu gay gắt.</p>
                            <p><strong>Hậu quả:</strong> Tạo áp lực, làm con sợ hãi và ngại giao tiếp.</p>
                            <p><strong>Làm đúng:</strong> Khuyến khích bằng cách làm mẫu và tạo môi trường thoải mái.</p>
                        </div>
                    </div>

                    <div class="mistake-item">
                        <div class="mistake-header">
                            <span class="mistake-number">03</span>
                            <h4>Sửa lỗi ngay lập tức</h4>
                        </div>
                        <div class="mistake-content">
                            <p><strong>Sai lầm:</strong> Liên tục chỉnh sửa phát âm hoặc ngữ pháp của con.</p>
                            <p><strong>Hậu quả:</strong> Làm con mất tự tin và ngại nói.</p>
                            <p><strong>Làm đúng:</strong> Lắng nghe hoàn chỉnh rồi nhắc lại đúng một cách tự nhiên.</p>
                        </div>
                    </div>

                    <div class="mistake-item">
                        <div class="mistake-header">
                            <span class="mistake-number">04</span>
                            <h4>So sánh với trẻ khác</h4>
                        </div>
                        <div class="mistake-content">
                            <p><strong>Sai lầm:</strong> "Con bạn An đã nói được nhiều từ rồi, còn con..."</p>
                            <p><strong>Hậu quả:</strong> Tạo cảm giác tự ti và làm tổn thương lòng tự trọng của con.</p>
                            <p><strong>Làm đúng:</strong> Tập trung vào tiến bộ của chính con mình.</p>
                        </div>
                    </div>

                    <div class="mistake-item">
                        <div class="mistake-header">
                            <span class="mistake-number">05</span>
                            <h4>Dùng "ngôn ngữ em bé" quá lâu</h4>
                        </div>
                        <div class="mistake-content">
                            <p><strong>Sai lầm:</strong> Luôn nói "ăn cơm" thành "ăn um" hoặc "đi xe" thành "đi ẹt ẹt".</p>
                            <p><strong>Hậu quả:</strong> Con sẽ khó phát triển từ vựng chính xác.</p>
                            <p><strong>Làm đúng:</strong> Dần chuyển sang từ ngữ chính xác khi con lớn hơn.</p>
                        </div>
                    </div>

                    <div class="mistake-item">
                        <div class="mistake-header">
                            <span class="mistake-number">06</span>
                            <h4>Tập trung quá nhiều vào từ vựng</h4>
                        </div>
                        <div class="mistake-content">
                            <p><strong>Sai lầm:</strong> Chỉ chú trọng dạy con nói nhiều từ mà bỏ qua kỹ năng giao tiếp.</p>
                            <p><strong>Hậu quả:</strong> Con biết nhiều từ nhưng không biết sử dụng trong giao tiếp thực tế.</p>
                            <p><strong>Làm đúng:</strong> Cân bằng giữa từ vựng và kỹ năng giao tiếp xã hội.</p>
                        </div>
                    </div>

                    <div class="mistake-item">
                        <div class="mistake-header">
                            <span class="mistake-number">07</span>
                            <h4>Thiếu kiên nhẫn và nhất quán</h4>
                        </div>
                        <div class="mistake-content">
                            <p><strong>Sai lầm:</strong> Nóng vội muốn thấy kết quả ngay, thay đổi phương pháp liên tục.</p>
                            <p><strong>Hậu quả:</strong> Con bị rối loạn và không có thời gian để phát triển bền vững.</p>
                            <p><strong>Làm đúng:</strong> Kiên nhẫn, nhất quán và ghi chép tiến trình phát triển.</p>
                        </div>
                    </div>
                </div>

                <div class="content-section positive-approach">
                    <h3><i class="fas fa-lightbulb"></i> Phương pháp tích cực thay thế</h3>
                    
                    <div class="approach-grid">
                        <div class="approach-item">
                            <div class="approach-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="approach-content">
                                <h4>Tạo môi trường tích cực</h4>
                                <p>Luôn khuyến khích và tạo không khí vui vẻ khi giao tiếp với con.</p>
                            </div>
                        </div>
                        
                        <div class="approach-item">
                            <div class="approach-icon">
                                <i class="fas fa-ear-listen"></i>
                            </div>
                            <div class="approach-content">
                                <h4>Lắng nghe chân thành</h4>
                                <p>Dành thời gian lắng nghe con, dù con chưa nói được rõ ràng.</p>
                            </div>
                        </div>
                        
                        <div class="approach-item">
                            <div class="approach-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="approach-content">
                                <h4>Kiên nhẫn chờ đợi</h4>
                                <p>Mỗi trẻ có tốc độ phát triển riêng, hãy tôn trọng nhịp độ của con.</p>
                            </div>
                        </div>
                        
                        <div class="approach-item">
                            <div class="approach-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="approach-content">
                                <h4>Ghi nhận tiến bộ</h4>
                                <p>Khen ngợi mỗi tiến bộ nhỏ để động viên con tiếp tục phát triển.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="conclusion-golden mistakes-conclusion">
                    <div class="conclusion-highlight">
                        <i class="fas fa-thumbs-up"></i>
                        <h3>Hãy nhớ: Tình yêu thương cần đi đôi với phương pháp đúng</h3>
                    </div>
                    <div class="conclusion-content">
                        <p>💖 <strong>Tránh những sai lầm trên không có nghĩa là cha mẹ đã làm sai hoàn toàn.</strong></p>
                        <p><strong>Điều quan trọng là nhận ra và điều chỉnh để giúp con phát triển tốt nhất!</strong></p>
                    </div>
                    
                    <div class="call-to-action">
                        <div class="cta-content">
                            <h4><i class="fas fa-phone"></i> Cần tư vấn cụ thể?</h4>
                            <p>Liên hệ Hand in Hand Foundation để được hướng dẫn phương pháp can thiệp phù hợp cho con bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareMistakesDocument()" class="btn-share" style="border-color: #dc267f; color: #dc267f;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Hearing Screening Document Modal -->
<div id="hearingScreeningModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing" style="background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%);">
            <h2 style="color: #00695c;">Sàng lọc thính lực - Bước đầu quan trọng trong hành trình hỗ trợ trẻ chậm nói</h2>
            <span class="close-pointing" onclick="closeHearingScreeningModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Hình ảnh minh họa -->
            <div class="document-images">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/30.png" 
                         alt="Sàng lọc thính lực"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 1000px; object-fit: cover; border-radius: 15px;">

                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="intro-hearing-screening">
                    <h3><i class="fas fa-stethoscope"></i> Tại sao sàng lọc thính lực lại quan trọng?</h3>
                    <p>Không thể phủ nhận rằng việc sàng lọc và kiểm tra thính lực – đặc biệt với các xét nghiệm khách quan như <strong>đo âm ốc tai (DPOAE), nhĩ lượng hay điện thân não thính giác (ABR)</strong> – đôi khi đi kèm với nhiều bất tiện thực tế.</p>
                </div>

                <div class="content-section concerns-section">
                    <h3><i class="fas fa-exclamation-circle"></i> Những lo ngại thường gặp</h3>
                    
                    <div class="concern-list">
                        <div class="concern-item">
                            <div class="concern-icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <div class="concern-content">
                                <h4>Lo ngại về chi phí</h4>
                                <p>Nhiều phụ huynh lo ngại về chi phí xét nghiệm và các khoản phí phát sinh.</p>
                            </div>
                        </div>
                        
                        <div class="concern-item">
                            <div class="concern-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="concern-content">
                                <h4>Khó khăn di chuyển</h4>
                                <p>Ngại di chuyển xa đến các cơ sở chuyên sâu thường chỉ có ở thành phố lớn.</p>
                            </div>
                        </div>
                        
                        <div class="concern-item">
                            <div class="concern-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="concern-content">
                                <h4>Bất tiện thời gian</h4>
                                <p>Việc chờ đợi, xin nghỉ phép, sắp xếp công việc gia đình trở thành rào cản.</p>
                            </div>
                        </div>
                        
                        <div class="concern-item">
                            <div class="concern-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="concern-content">
                                <h4>Chủ quan "con nghe được"</h4>
                                <p>Một số phụ huynh cho rằng con mình "nghe được" vì trẻ vẫn quay đầu khi có tiếng động, giật mình khi nghe tiếng chó sủa.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section question-section">
                    <div class="important-question">
                        <h3><i class="fas fa-question-circle"></i> Câu hỏi quan trọng cần đặt ra:</h3>
                        <div class="question-highlight">
                            <p><strong>💭 Cái giá của việc không sàng lọc là gì?</strong></p>
                        </div>
                    </div>
                </div>

                <div class="content-section risks-section">
                    <h3><i class="fas fa-exclamation-triangle"></i> Khi không kiểm tra thính lực - Rủi ro không chỉ là chậm nói</h3>
                    
                    <div class="risk-points">
                        <div class="risk-point">
                            <div class="risk-number">1</div>
                            <div class="risk-text">
                                <h4>Nhầm lẫn chẩn đoán</h4>
                                <p>Nhiều trẻ khiếm thính không được phát hiện sớm thường bị nhầm lẫn với <strong>rối loạn ngôn ngữ hoặc rối loạn phổ tự kỷ</strong>.</p>
                            </div>
                        </div>
                        
                        <div class="risk-point">
                            <div class="risk-number">2</div>
                            <div class="risk-text">
                                <h4>Can thiệp sai hướng</h4>
                                <p>Hệ quả là trẻ phải tham gia các chương trình can thiệp sai hướng, kéo dài trong <strong>nhiều tháng hoặc nhiều năm</strong> mà không có tiến bộ rõ rệt.</p>
                            </div>
                        </div>
                        
                        <div class="risk-point">
                            <div class="risk-number">3</div>
                            <div class="risk-text">
                                <h4>Bỏ lỡ giai đoạn vàng</h4>
                                <p>Trẻ có thể bỏ lỡ <strong>"giai đoạn vàng" phát triển ngôn ngữ</strong> – thời điểm mà não bộ phát triển mạnh nhất về khả năng tiếp nhận và xử lý âm thanh.</p>
                            </div>
                        </div>
                        
                        <div class="risk-point">
                            <div class="risk-number">4</div>
                            <div class="risk-text">
                                <h4>Khiếm thính ẩn</h4>
                                <p>Một số trẻ mất thính lực nhẹ hoặc trung bình vẫn có thể nghe âm thanh lớn, nhưng <strong>không đủ khả năng phân biệt âm vị</strong>, dẫn đến khó khăn trong việc học nói và hiểu ngôn ngữ.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section benefits-section">
                    <h3><i class="fas fa-lightbulb"></i> Đầu tư nhỏ - Lợi ích lớn</h3>
                    
                    <div class="benefits-comparison">
                        <div class="comparison-item cost-side">
                            <div class="comparison-header">
                                <h4><i class="fas fa-coins"></i> Chi phí một lần</h4>
                            </div>
                            <ul>
                                <li>Chi phí xét nghiệm chỉ phát sinh vài lần</li>
                                <li>Công sức di chuyển tạm thời</li>
                                <li>Thời gian sắp xếp có hạn</li>
                            </ul>
                        </div>
                        
                        <div class="vs-divider">
                            <span>VS</span>
                        </div>
                        
                        <div class="comparison-item benefit-side">
                            <div class="comparison-header">
                                <h4><i class="fas fa-exclamation-triangle"></i> Cái giá không kiểm tra</h4>
                            </div>
                            <ul>
                                <li><strong>Nhiều năm can thiệp không hiệu quả</strong></li>
                                <li>Hao tốn tài chính lâu dài</li>
                                <li>Ảnh hưởng khả năng học tập</li>
                                <li>Khó khăn giao tiếp và hòa nhập xã hội</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="content-section positive-outcomes">
                    <h3><i class="fas fa-check-circle"></i> Kết quả tích cực từ sàng lọc đúng thời điểm</h3>
                    
                    <div class="outcome-scenarios">
                        <div class="scenario">
                            <div class="scenario-icon positive">
                                <i class="fas fa-hearing-aid"></i>
                            </div>
                            <div class="scenario-content">
                                <h4>Nếu phát hiện khiếm thính</h4>
                                <p>Trẻ có thể được hỗ trợ kịp thời bằng <strong>máy trợ thính hoặc cấy ốc tai điện tử</strong>, từ đó phát triển ngôn ngữ gần như bình thường.</p>
                            </div>
                        </div>
                        
                        <div class="scenario">
                            <div class="scenario-icon positive">
                                <i class="fas fa-thumbs-up"></i>
                            </div>
                            <div class="scenario-content">
                                <h4>Nếu thính lực bình thường</h4>
                                <p>Phụ huynh và chuyên viên có thể yên tâm <strong>loại trừ nguyên nhân nghe kém</strong> để tập trung vào các hướng can thiệp phù hợp khác, tránh lãng phí thời gian và công sức.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="conclusion-golden hearing-conclusion">
                    <div class="conclusion-highlight">
                        <i class="fas fa-ear"></i>
                        <h3>Sàng lọc thính lực - Đầu tư xứng đáng cho tương lai con</h3>
                    </div>
                    <div class="conclusion-content">
                        <p>🎯 <strong>Sàng lọc thính lực không chỉ là một xét nghiệm, mà là chìa khóa mở ra hướng can thiệp đúng đắn cho con.</strong></p>
                        <p><strong>Hãy đầu tư một chút thời gian và công sức hôm nay để tránh hối tiếc mai sau!</strong></p>
                    </div>
                    
                    <div class="call-to-action">
                        <div class="cta-content">
                            <h4><i class="fas fa-phone"></i> Tư vấn sàng lọc thính lực</h4>
                            <p>Liên hệ Hand in Hand Foundation để được hướng dẫn về các cơ sở sàng lọc thính lực uy tín và quy trình kiểm tra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareHearingScreeningDocument()" class="btn-share" style="border-color: #00bcd4; color: #00bcd4;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Toilet Stool Document Modal -->
<div id="toiletStoolModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing" style="background: linear-gradient(135deg, #efebe9 0%, #d7ccc8 100%);">
            <h2 style="color: #4e342e;">Ghế kê chân: Công cụ hỗ trợ toilet tuyệt vời cho trẻ ASD</h2>
            <span class="close-pointing" onclick="closeToiletStoolModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Hình ảnh minh họa -->
            <div class="document-images">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32.png" 
                         alt="Ghế kê chân cho trẻ ASD"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px;">

                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="intro-toilet-stool">
                    <h3><i class="fas fa-chair"></i> Tác dụng quan trọng nhất</h3>
                    <p>Tác dụng quan trọng nhất của ghế là giúp trẻ có <strong>tư thế đi ngoài đúng sinh học</strong>, giúp tống đẩy phân ra ngoài dễ hơn, giảm việc trẻ phải rặn.</p>
                    <p>Ghế kê chân (hay còn gọi là toilet stool, kiểu phổ biến như "Squatty Potty") rất hữu ích cho <strong>trẻ ASD khi tập đi vệ sinh</strong>.</p>
                </div>

                <div class="content-section benefits-list-section">
                    <h3><i class="fas fa-list-check"></i> Tác dụng chính của ghế kê chân</h3>
                    
                    <div class="benefits-numbered">
                        <div class="benefit-item-numbered">
                            <div class="benefit-number">1</div>
                            <div class="benefit-content-detailed">
                                <h4><i class="fas fa-user-md"></i> Tư thế sinh lý đúng khi đi cầu</h4>
                                <div class="benefit-details">
                                    <div class="detail-point">
                                        <div class="point-icon">
                                            <i class="fas fa-arrow-up"></i>
                                        </div>
                                        <p>Khi kê chân, gối của trẻ được nâng cao, thân người hơi nghiêng về phía trước. <strong>Tư thế này giúp trực tràng và hậu môn thẳng hơn</strong>, giảm sự co thắt cơ, làm phân đi ra dễ dàng hơn.</p>
                                    </div>
                                    <div class="detail-point">
                                        <div class="point-icon">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                        <p>Giảm đau rát, giảm căng thẳng khi đi vệ sinh → <strong>đặc biệt quan trọng với trẻ thường xuyên táo bón</strong>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="benefit-item-numbered">
                            <div class="benefit-number">2</div>
                            <div class="benefit-content-detailed">
                                <h4><i class="fas fa-shield-alt"></i> Tạo cảm giác an toàn cho trẻ</h4>
                                <div class="benefit-details">
                                    <div class="detail-point">
                                        <div class="point-icon">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                        <p>Nhiều trẻ sợ ngồi trên bồn cầu cao, chân không chạm đất → <strong>cảm giác lơ lửng làm trẻ lo lắng, mất cân bằng</strong>.</p>
                                    </div>
                                    <div class="detail-point">
                                        <div class="point-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <p>Ghế kê chân giúp trẻ chạm đất, có điểm tựa chắc chắn → <strong>cảm giác ổn định, an toàn hơn</strong>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="benefit-item-numbered">
                            <div class="benefit-number">3</div>
                            <div class="benefit-content-detailed">
                                <h4><i class="fas fa-calendar-check"></i> Hỗ trợ tập thói quen đi vệ sinh</h4>
                                <div class="benefit-details">
                                    <div class="detail-point">
                                        <div class="point-icon">
                                            <i class="fas fa-smile"></i>
                                        </div>
                                        <p>Khi trẻ thấy ngồi thoải mái và không đau, <strong>việc tập đi vệ sinh sẽ dễ thành công hơn</strong>.</p>
                                    </div>
                                    <div class="detail-point">
                                        <div class="point-icon">
                                            <i class="fas fa-ban"></i>
                                        </div>
                                        <p>Giúp <strong>giảm hành vi né tránh hoặc nhịn đi cầu</strong>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="benefit-item-numbered">
                            <div class="benefit-number">4</div>
                            <div class="benefit-content-detailed">
                                <h4><i class="fas fa-user-graduate"></i> Khuyến khích tính độc lập</h4>
                                <div class="benefit-details">
                                    <div class="detail-point">
                                        <div class="point-icon">
                                            <i class="fas fa-stairs"></i>
                                        </div>
                                        <p>Trẻ có thể <strong>tự leo lên và ngồi xuống dễ dàng</strong> (nếu ghế có thiết kế thêm bậc thang).</p>
                                    </div>
                                    <div class="detail-point">
                                        <div class="point-icon">
                                            <i class="fas fa-thumbs-up"></i>
                                        </div>
                                        <p><strong>Tăng tính chủ động, bớt phụ thuộc vào người lớn</strong>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="benefit-item-numbered">
                            <div class="benefit-number">5</div>
                            <div class="benefit-content-detailed">
                                <h4><i class="fas fa-coins"></i> Chi phí thấp, hiệu quả cao</h4>
                                <div class="benefit-details">
                                    <div class="detail-point">
                                        <div class="point-icon">
                                            <i class="fas fa-dollar-sign"></i>
                                        </div>
                                        <p><strong>Ghế kê chân là giải pháp đơn giản, rẻ hơn nhiều</strong> so với các thiết bị chuyên dụng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section asd-benefits">
                    <h3><i class="fas fa-puzzle-piece"></i> Lợi ích đặc biệt cho trẻ ASD</h3>
                    
                    <div class="asd-benefit-grid">
                        <div class="asd-benefit-card">
                            <div class="asd-benefit-icon">
                                <i class="fas fa-body"></i>
                            </div>
                            <div class="asd-benefit-text">
                                <h4>Mặt sinh lý</h4>
                                <p><strong>Dễ đi ngoài hơn</strong> nhờ tư thế đúng sinh học</p>
                            </div>
                        </div>
                        
                        <div class="asd-benefit-card">
                            <div class="asd-benefit-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div class="asd-benefit-text">
                                <h4>Mặt tâm lý</h4>
                                <p><strong>An toàn, giảm sợ hãi</strong>, tăng tính độc lập</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section recommendations">
                    <h3><i class="fas fa-lightbulb"></i> Lời khuyên của chuyên gia</h3>
                    
                    <div class="recommendation-box">
                        <div class="recommendation-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="recommendation-content">
                            <p><strong>Hãy trang bị ghế kê chắc chắn, vừa tầm của trẻ</strong> để trẻ cảm thấy thật sự an toàn và tự tin để đi toilet.</p>
                        </div>
                    </div>
                    
                    <div class="tips-list">
                        <h4><i class="fas fa-check-double"></i> Tiêu chí chọn ghế kê chân phù hợp:</h4>
                        <ul class="custom-tips-list">
                            <li><strong>Chiều cao phù hợp:</strong> Chân trẻ có thể đặt thoải mái</li>
                            <li><strong>Chất liệu chống trượt:</strong> Đảm bảo an toàn khi sử dụng</li>
                            <li><strong>Kích thước ổn định:</strong> Không bị lật khi trẻ ngồi</li>
                            <li><strong>Dễ vệ sinh:</strong> Có thể lau chùi, khử trùng dễ dàng</li>
                            <li><strong>Thiết kế thân thiện:</strong> Màu sắc và hình dáng trẻ yêu thích</li>
                        </ul>
                    </div>
                </div>

                <div class="conclusion-golden toilet-stool-conclusion">
                    <div class="conclusion-highlight">
                        <i class="fas fa-chair"></i>
                        <h3>Ghế kê chân - Đầu tư nhỏ, hiệu quả lớn</h3>
                    </div>
                    <div class="conclusion-content">
                        <p>🪑 <strong>Với trẻ ASD, ghế kê chân không chỉ giúp về mặt sinh lý mà còn về mặt tâm lý.</strong></p>
                        <p><strong>Một công cụ đơn giản nhưng mang lại sự khác biệt lớn trong hành trình toilet training!</strong></p>
                    </div>
                    
                    <div class="call-to-action">
                        <div class="cta-content">
                            <h4><i class="fas fa-phone"></i> Tư vấn thêm về toilet training</h4>
                            <p>Liên hệ Hand in Hand Foundation để được hướng dẫn chi tiết về quá trình toilet training cho trẻ ASD.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareToiletStoolDocument()" class="btn-share" style="border-color: #795548; color: #795548;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Kindergarten vs Intervention Center Document Modal -->
<div id="kindergartenCenterModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing" style="background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);">
            <h2 style="color: #7b1fa2;">Trường mầm non hay trung tâm can thiệp - Đâu là nơi phù hợp cho trẻ khuyết tật?</h2>
            <span class="close-pointing" onclick="closeKindergartenCenterModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Hình ảnh minh họa -->
            <div class="document-images">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/19.jpg" 
                         alt="Trường mầm non hay trung tâm can thiệp"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px;">

                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="intro-kindergarten-center">
                    <h3><i class="fas fa-question-circle"></i> Mong muốn chính đáng của phụ huynh</h3>
                    <p>Hiện nay, nhiều phụ huynh có con <strong>rối loạn phổ tự kỷ (ASD), tăng động giảm chú ý (ADHD), chậm phát triển ngôn ngữ</strong>… có xu hướng đưa trẻ vào học các lớp mầm non hòa nhập ngay từ sớm.</p>
                    <p>Mong muốn chính đáng này xuất phát từ ước vọng con sẽ <strong>hòa nhập tốt với cộng đồng, bắt nhịp cuộc sống bình thường</strong> như bao trẻ em khác.</p>
                    <div class="question-highlight-center">
                        <p><strong>⚠️ Tuy nhiên, điều gì đang bị bỏ lỡ?</strong></p>
                    </div>
                </div>

                <div class="content-section analysis-points">
                    <h3><i class="fas fa-microscope"></i> Phân tích từ khoa học và thực tiễn</h3>
                    
                    <div class="analysis-item">
                        <div class="analysis-number">1</div>
                        <div class="analysis-content">
                            <h4><i class="fas fa-users"></i> Lớp mầm non hòa nhập có thật sự "hòa nhập"?</h4>
                            
                            <div class="reality-check">
                                <h5>Thực trạng các lớp mầm non tại Việt Nam:</h5>
                                <ul class="reality-list">
                                    <li><strong>Sĩ số từ 25-35 trẻ/lớp</strong> với chỉ 1-2 giáo viên phụ trách</li>
                                    <li>Giáo viên <strong>khó có điều kiện cá nhân hóa</strong> hoạt động cho trẻ đặc biệt</li>
                                    <li><strong>Không đủ thời gian và chuyên môn</strong> để can thiệp hành vi, ngôn ngữ, kỹ năng xã hội chuyên biệt</li>
                                    <li>Trẻ rất dễ bị <strong>"lọt thỏm"</strong> giữa lớp, không được hỗ trợ đúng lúc</li>
                                    <li>Dẫn đến <strong>gia tăng hành vi không phù hợp, thậm chí tụt lùi kỹ năng</strong></li>
                                </ul>
                            </div>

                            <div class="research-quote">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="quote-content">
                                    <p><strong>Nghiên cứu của Stahmer et al. (2015):</strong></p>
                                    <p><em>"Trẻ tự kỷ tham gia lớp học thông thường mà không có hỗ trợ chuyên sâu sẽ có tiến bộ thấp hơn đáng kể về ngôn ngữ và kỹ năng xã hội so với trẻ được can thiệp chuyên biệt."</em></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="analysis-item">
                        <div class="analysis-number">2</div>
                        <div class="analysis-content">
                            <h4><i class="fas fa-building"></i> Trung tâm hỗ trợ phát triển giáo dục hòa nhập</h4>
                            <h5 class="subtitle-highlight">Nơi "đầu tư nền móng" cho phát triển</h5>
                            
                            <div class="advantages-grid">
                                <div class="advantage-item">
                                    <div class="advantage-icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="advantage-text">
                                        <h6>Đánh giá bài bản</h6>
                                        <p>Trẻ được <strong>đánh giá đầu vào</strong> chi tiết và khoa học</p>
                                    </div>
                                </div>
                                
                                <div class="advantage-item">
                                    <div class="advantage-icon">
                                        <i class="fas fa-user-cog"></i>
                                    </div>
                                    <div class="advantage-text">
                                        <h6>Kế hoạch cá nhân hóa</h6>
                                        <p>Có <strong>kế hoạch can thiệp cá nhân (IEP)</strong> rõ ràng</p>
                                    </div>
                                </div>
                                
                                <div class="advantage-item">
                                    <div class="advantage-icon">
                                        <i class="fas fa-users-cog"></i>
                                    </div>
                                    <div class="advantage-text">
                                        <h6>Tỷ lệ tối ưu</h6>
                                        <p><strong>Tỷ lệ giáo viên - học sinh thấp</strong> (1:1, 1:2 hoặc 1:4)</p>
                                    </div>
                                </div>
                                
                                <div class="advantage-item">
                                    <div class="advantage-icon">
                                        <i class="fas fa-user-md"></i>
                                    </div>
                                    <div class="advantage-text">
                                        <h6>Đội ngũ chuyên môn</h6>
                                        <p><strong>Ngôn ngữ trị liệu, tâm lý, vận động</strong>... đồng hành</p>
                                    </div>
                                </div>
                            </div>

                            <div class="important-highlight">
                                <h5><i class="fas fa-star"></i> Điều quan trọng hơn cả:</h5>
                                <ul class="important-list">
                                    <li>Các hoạt động được <strong>thiết kế theo mức phát triển của trẻ</strong>, không ép buộc trẻ phải "hòa nhập" theo một chuẩn có sẵn</li>
                                    <li>Trẻ được <strong>xây nền kỹ năng cốt lõi</strong> như chú ý, bắt chước, hiểu lời, điều tiết cảm xúc... trước khi tham gia vào môi trường đông</li>
                                </ul>
                            </div>

                            <div class="research-quote">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="quote-content">
                                    <p><strong>Nghiên cứu tổng quan của Zwaigenbaum et al. (2015):</strong></p>
                                    <p><em>"Can thiệp sớm, chuyên sâu và có cấu trúc trong 2-5 năm đầu đời là yếu tố quyết định sự phát triển lâu dài của trẻ ASD."</em></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="analysis-item">
                        <div class="analysis-number">3</div>
                        <div class="analysis-content">
                            <h4><i class="fas fa-calculator"></i> Vấn đề chi phí - Đầu tư hay tiêu tốn?</h4>
                            
                            <div class="cost-myth">
                                <h5>🗣️ Quan điểm thường gặp:</h5>
                                <p><em>"Cho con học trung tâm chuyên biệt tốn kém quá, chi bằng học mầm non rồi kèm thêm giờ can thiệp 1:1 bên ngoài."</em></p>
                            </div>

                            <div class="cost-reality">
                                <h5>💰 Sự thật về chi phí:</h5>
                                <div class="cost-comparison">
                                    <div class="cost-item">
                                        <div class="cost-label">Mầm non + Can thiệp riêng</div>
                                        <div class="cost-details">
                                            <p>Học phí mầm non + 1-2 giờ can thiệp cá nhân/ngày</p>
                                            <p class="cost-result">= <strong>Bằng hoặc cao hơn</strong> trung tâm chuyên biệt</p>
                                        </div>
                                    </div>
                                    <div class="vs-symbol">VS</div>
                                    <div class="cost-item">
                                        <div class="cost-label">Trung tâm chuyên biệt</div>
                                        <div class="cost-details">
                                            <p>Can thiệp toàn diện cả ngày</p>
                                            <p class="cost-result">= <strong>Hiệu quả tối ưu</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="research-quote">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="quote-content">
                                    <p><strong>Tổ chức Autism Speaks:</strong></p>
                                    <p><em>"Các chương trình bán thời gian kết hợp can thiệp tại nhà thường không mang lại hiệu quả tối ưu như các chương trình toàn thời gian, có cấu trúc và được thực hiện bởi chuyên gia."</em></p>
                                </div>
                            </div>

                            <div class="golden-window-warning">
                                <div class="warning-icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <div class="warning-content">
                                    <h6>⏰ Cảnh báo về "cửa sổ vàng"</h6>
                                    <p>Đáng tiếc, có không ít trường hợp phụ huynh có đủ tài chính nhưng chưa thấy được tầm quan trọng của việc <strong>đầu tư đúng thời điểm</strong>. Thay vì đầu tư mạnh vào <strong>2-5 năm đầu đời</strong> – giai đoạn "cửa sổ vàng" phát triển não bộ, họ lại trì hoãn, dẫn đến <strong>mất cơ hội quý giá</strong> để giúp con tiến bộ.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="analysis-item">
                        <div class="analysis-number">4</div>
                        <div class="analysis-content">
                            <h4><i class="fas fa-shield-alt"></i> Lo lắng "bắt chước trẻ khác" - Quan ngại không cần thiết</h4>
                            
                            <div class="concern-box">
                                <h5>😟 Lo lắng của phụ huynh:</h5>
                                <p>Một số cha mẹ ngần ngại môi trường trung tâm chuyên biệt vì sợ con mình <strong>bắt chước hành vi tiêu cực</strong> của trẻ khác.</p>
                            </div>

                            <div class="reality-response">
                                <h5>✅ Thực tế tại trung tâm chất lượng:</h5>
                                <ul class="quality-features">
                                    <li><strong>Nhóm trẻ được phân loại trình độ</strong>, chia lớp phù hợp</li>
                                    <li>Kèm <strong>giáo án cá nhân hóa</strong>, tránh tình trạng trẻ học chung nhưng "không có gì giống nhau"</li>
                                    <li><strong>Hành vi chưa phù hợp</strong> sẽ được xử lý bởi giáo viên chuyên môn, có chiến lược điều chỉnh rõ ràng</li>
                                </ul>
                            </div>

                            <div class="research-quote">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="quote-content">
                                    <p><strong>Nghiên cứu của Strain & Bovey (2011):</strong></p>
                                    <p><em>"Trẻ em có xu hướng bắt chước hành vi được củng cố tích cực, không nhất thiết học theo hành vi tiêu cực nếu môi trường lớp học được kiểm soát tốt."</em></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="analysis-item">
                        <div class="analysis-number">5</div>
                        <div class="analysis-content">
                            <h4><i class="fas fa-rocket"></i> Can thiệp sớm - Bước đệm vững vàng cho hòa nhập</h4>
                            
                            <div class="integration-process">
                                <div class="process-step">
                                    <div class="step-icon">
                                        <i class="fas fa-foundation"></i>
                                    </div>
                                    <div class="step-content">
                                        <h6>Xây dựng nền tảng</h6>
                                        <p>Không phủ nhận vai trò của trường mầm non, nhưng mầm non chỉ thật sự phát huy hiệu quả khi trẻ đã có <strong>nền kỹ năng tối thiểu</strong>: hiểu lời, làm theo hướng dẫn, tự điều chỉnh hành vi.</p>
                                    </div>
                                </div>
                                
                                <div class="process-step">
                                    <div class="step-icon">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="step-content">
                                        <h6>Nguy cơ quá tải</h6>
                                        <p>Nếu trẻ chưa có các kỹ năng nền đó, việc đưa vào <strong>môi trường đông ngay</strong> sẽ dễ gây quá tải cảm giác, thất bại giao tiếp, tăng hành vi tiêu cực.</p>
                                    </div>
                                </div>
                                
                                <div class="process-step">
                                    <div class="step-icon">
                                        <i class="fas fa-ship"></i>
                                    </div>
                                    <div class="step-content">
                                        <h6>Bệ phóng cho hòa nhập</h6>
                                        <p>Vậy nên, can thiệp chuyên biệt không phải là để <strong>"cách ly" trẻ</strong> – mà để <strong>"bồi dưỡng sức mạnh"</strong> trước khi ra biển lớn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="conclusion-golden kindergarten-conclusion">
                    <div class="conclusion-highlight">
                        <i class="fas fa-lightbulb"></i>
                        <h3>Kết luận: Đầu tư đúng thời điểm là trao cho con tương lai</h3>
                    </div>
                    <div class="conclusion-content">
                        <p>🏫 <strong>Trung tâm hỗ trợ phát triển giáo dục hòa nhập không phải là nơi "cản trở việc hòa nhập"</strong></p>
                        <p><strong>– mà là bệ phóng cho hòa nhập bền vững.</strong></p>
                        <p>💪 <strong>Đầu tư đúng thời điểm là trao cho con một tương lai phát triển lành mạnh!</strong></p>
                    </div>
                    
                    <div class="call-to-action">
                        <div class="cta-content">
                            <h4><i class="fas fa-phone"></i> Tư vấn lựa chọn giáo dục phù hợp</h4>
                            <p>Liên hệ Hand in Hand Foundation để được tư vấn chi tiết về lựa chọn môi trường giáo dục phù hợp cho con bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareKindergartenCenterDocument()" class="btn-share" style="border-color: #9c27b0; color: #9c27b0;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Hearing Impaired AVT Document Modal -->
<div id="hearingImpairedAVTModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing" style="background: linear-gradient(135deg, #eceff1 0%, #cfd8dc 100%);">
            <h2 style="color: #263238;">Trẻ khiếm thính dây thần kinh mảnh - Tầm quan trọng của can thiệp AVT</h2>
            <span class="close-pointing" onclick="closeHearingImpairedAVTModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Hình ảnh minh họa -->
            <div class="document-images">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/33.png" 
                         alt="Trẻ khiếm thính và can thiệp AVT"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 1000px; object-fit: cover; border-radius: 15px;">

                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="intro-hearing-impaired-avt">
                    <h3><i class="fas fa-question-circle"></i> Câu hỏi quan trọng</h3>
                    <p>Trẻ em khiếm thính có <strong>dây thần kinh mảnh</strong>, phát hiện sau 3 tuổi, trong vòng <strong>1 năm sau khi cấy ốc tai điện tử</strong> không được can thiệp AVT đúng cách thì <strong>khả năng nghe - nói sẽ thế nào?</strong></p>
                </div>

                <div class="content-section nerve-characteristics">
                    <h3><i class="fas fa-microscope"></i> Đặc điểm dây thần kinh mảnh</h3>
                    
                    <div class="nerve-info-box">
                        <div class="nerve-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="nerve-content">
                            <h4>Dây thần kinh thính giác mảnh là gì?</h4>
                            <p>Là tình trạng <strong>dây thần kinh thính giác chưa phát triển đầy đủ</strong> hoặc có <strong>đường kính nhỏ hơn bình thường</strong>, ảnh hưởng đến khả năng truyền tín hiệu âm thanh từ tai đến não.</p>
                        </div>
                    </div>

                    <div class="nerve-characteristics-list">
                        <h4><i class="fas fa-list-ul"></i> Đặc điểm quan trọng:</h4>
                        <div class="characteristics-grid">
                            <div class="characteristic-item">
                                <div class="char-icon">
                                    <i class="fas fa-signal"></i>
                                </div>
                                <div class="char-text">
                                    <h5>Truyền tín hiệu yếu</h5>
                                    <p>Khả năng truyền tải thông tin âm thanh bị <strong>hạn chế</strong></p>
                                </div>
                            </div>
                            
                            <div class="characteristic-item">
                                <div class="char-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="char-text">
                                    <h5>Phát triển chậm</h5>
                                    <p>Cần <strong>thời gian dài hơn</strong> để hình thành đường dẫn thần kinh</p>
                                </div>
                            </div>
                            
                            <div class="characteristic-item">
                                <div class="char-icon">
                                    <i class="fas fa-puzzle-piece"></i>
                                </div>
                                <div class="char-text">
                                    <h5>Cần hỗ trợ đặc biệt</h5>
                                    <p>Yêu cầu <strong>can thiệp chuyên sâu</strong> và kiên trì</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section late-detection-impact">
                    <h3><i class="fas fa-exclamation-triangle"></i> Tác động của việc phát hiện muộn (sau 3 tuổi)</h3>
                    
                    <div class="impact-timeline">
                        <div class="timeline-item critical">
                            <div class="timeline-icon">
                                <i class="fas fa-baby"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>0-3 tuổi: Giai đoạn vàng bị bỏ lỡ</h4>
                                <p><strong>Thời kỳ phát triển não bộ mạnh nhất</strong> đã trôi qua mà không có can thiệp</p>
                                <ul class="impact-list">
                                    <li>Não bộ đã qua thời kỳ <strong>dẻo dai tối đa</strong></li>
                                    <li><strong>Cửa sổ ngôn ngữ</strong> tự nhiên đã đóng lại</li>
                                    <li>Khả năng <strong>hình thành đường dẫn thần kinh mới</strong> giảm đáng kể</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="timeline-item warning">
                            <div class="timeline-icon">
                                <i class="fas fa-child"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Sau 3 tuổi: Thách thức gia tăng</h4>
                                <p>Với dây thần kinh mảnh, việc can thiệp muộn gặp <strong>nhiều khó khăn hơn</strong></p>
                                <ul class="challenge-list">
                                    <li>Não bộ <strong>kém linh hoạt</strong> trong việc học âm thanh mới</li>
                                    <li>Cần <strong>thời gian gấp đôi, gấp ba</strong> để đạt kết quả tương đương</li>
                                    <li>Nguy cơ cao về <strong>sự phát triển không đồng đều</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section avt-importance">
                    <h3><i class="fas fa-heartbeat"></i> Tầm quan trọng của can thiệp AVT sau cấy ốc tai</h3>
                    
                    <div class="avt-definition">
                        <div class="definition-box">
                            <h4><i class="fas fa-graduation-cap"></i> AVT (Auditory-Verbal Therapy) là gì?</h4>
                            <p>Là phương pháp can thiệp chuyên biệt giúp trẻ khiếm thính <strong>học nghe và nói</strong> thông qua việc <strong>tối đa hóa thính giác</strong> sau khi được cấy ốc tai điện tử hoặc đeo máy trợ thính.</p>
                        </div>
                    </div>

                    <div class="avt-critical-period">
                        <h4><i class="fas fa-stopwatch"></i> Thời gian "sinh tử" sau cấy ốc tai</h4>
                        
                        <div class="critical-timeline">
                            <div class="period-box urgent">
                                <div class="period-header">
                                    <span class="period-time">Ngay sau cấy</span>
                                    <span class="period-status">CỰC KỲ QUAN TRỌNG</span>
                                </div>
                                <div class="period-content">
                                    <p><strong>3-6 tháng đầu:</strong> Não bộ cần <strong>"học"</strong> cách diễn giải tín hiệu từ ốc tai điện tử</p>
                                    <p>Với dây thần kinh mảnh: Quá trình này <strong>chậm và khó khăn hơn</strong></p>
                                </div>
                            </div>
                            
                            <div class="period-box critical">
                                <div class="period-header">
                                    <span class="period-time">6-12 tháng</span>
                                    <span class="period-status">QUYẾT ĐỊNH</span>
                                </div>
                                <div class="period-content">
                                    <p>Thời gian <strong>hình thành nền tảng nghe</strong> cơ bản</p>
                                    <p><strong>Nếu không có AVT:</strong> Não bộ có thể <strong>"từ chối"</strong> tín hiệu âm thanh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section consequences-analysis">
                    <h3><i class="fas fa-chart-line"></i> Hậu quả nếu không can thiệp AVT đúng cách trong năm đầu</h3>
                    
                    <div class="consequences-severity">
                        <div class="severity-level severe">
                            <div class="severity-header">
                                <span class="severity-icon">🚨</span>
                                <h4>Tác động nghiêm trọng</h4>
                            </div>
                            
                            <div class="consequence-categories">
                                <div class="consequence-category">
                                    <h5><i class="fas fa-ear-deaf"></i> Khả năng nghe:</h5>
                                    <ul class="consequence-list">
                                        <li><strong>Não bộ không "quen"</strong> với tín hiệu từ ốc tai điện tử</li>
                                        <li>Nghe được âm thanh nhưng <strong>không hiểu ý nghĩa</strong></li>
                                        <li><strong>Phân biệt âm thanh kém</strong>, nhất là âm thanh phức tạp</li>
                                        <li>Khó khăn trong <strong>môi trường ồn</strong></li>
                                    </ul>
                                </div>
                                
                                <div class="consequence-category">
                                    <h5><i class="fas fa-comments"></i> Khả năng nói:</h5>
                                    <ul class="consequence-list">
                                        <li><strong>Phát âm không rõ ràng</strong>, khó hiểu</li>
                                        <li>Từ vựng <strong>hạn chế và phát triển chậm</strong></li>
                                        <li><strong>Cấu trúc câu đơn giản</strong>, thiếu phức tạp</li>
                                        <li>Khó diễn đạt <strong>ý tưởng trừu tượng</strong></li>
                                    </ul>
                                </div>
                                
                                <div class="consequence-category">
                                    <h5><i class="fas fa-brain"></i> Phát triển nhận thức:</h5>
                                    <ul class="consequence-list">
                                        <li><strong>Chậm phát triển tư duy ngôn ngữ</strong></li>
                                        <li>Khó khăn trong <strong>học tập và giao tiếp xã hội</strong></li>
                                        <li><strong>Tự tin thấp</strong> trong giao tiếp</li>
                                        <li>Nguy cơ <strong>cô lập xã hội</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="statistical-evidence">
                        <h4><i class="fas fa-chart-bar"></i> Bằng chứng thống kê:</h4>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <div class="stat-number">70%</div>
                                <div class="stat-text">trẻ không được can thiệp AVT kịp thời có <strong>khả năng ngôn ngữ kém</strong></div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">3-5x</div>
                                <div class="stat-text">thời gian cần thiết để đạt kết quả tương đương nếu <strong>can thiệp muộn</strong></div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">50%</div>
                                <div class="stat-text">trẻ dây thần kinh mảnh có nguy cơ <strong>không đạt ngôn ngữ tự nhiên</strong></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section hope-solution">
                    <h3><i class="fas fa-lightbulb"></i> Vẫn còn hy vọng - Giải pháp can thiệp hiệu quả</h3>
                    
                    <div class="solution-approach">
                        <div class="approach-item">
                            <div class="approach-number">1</div>
                            <div class="approach-content">
                                <h4>Can thiệp AVT chuyên sâu ngay lập tức</h4>
                                <ul class="approach-details">
                                    <li><strong>Tăng cường độ:</strong> 3-5 buổi/tuần thay vì 1-2 buổi</li>
                                    <li><strong>Kéo dài thời gian:</strong> Tối thiểu 2-3 năm liên tục</li>
                                    <li><strong>Chuyên gia có kinh nghiệm:</strong> Với trẻ dây thần kinh mảnh</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="approach-item">
                            <div class="approach-number">2</div>
                            <div class="approach-content">
                                <h4>Phối hợp đa ngành</h4>
                                <ul class="approach-details">
                                    <li><strong>Bác sĩ tai mũi họng:</strong> Điều chỉnh thiết bị tối ưu</li>
                                    <li><strong>Chuyên gia AVT:</strong> Can thiệp ngôn ngữ chuyên sâu</li>
                                    <li><strong>Gia đình:</strong> Thực hành hàng ngày tại nhà</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="approach-item">
                            <div class="approach-number">3</div>
                            <div class="approach-content">
                                <h4>Kiên trì và kiên nhẫn</h4>
                                <ul class="approach-details">
                                    <li><strong>Kỳ vọng thực tế:</strong> Tiến bộ chậm hơn nhưng vẫn có thể đạt được</li>
                                    <li><strong>Động viên liên tục:</strong> Ghi nhận mọi tiến bộ nhỏ</li>
                                    <li><strong>Hỗ trợ tâm lý:</strong> Cho cả trẻ và gia đình</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="conclusion-golden hearing-impaired-conclusion">
                    <div class="conclusion-highlight">
                        <i class="fas fa-hourglass-half"></i>
                        <h3>Thời gian là yếu tố then chốt</h3>
                    </div>
                    <div class="conclusion-content">
                        <p>⏰ <strong>Với trẻ khiếm thính dây thần kinh mảnh được phát hiện sau 3 tuổi, năm đầu sau cấy ốc tai là "sinh tử"</strong></p>
                        <p>🎯 <strong>Can thiệp AVT đúng cách và kịp thời vẫn có thể tạo ra những kỳ tích!</strong></p>
                        <p>💪 <strong>Đừng bỏ cuộc - mỗi ngày trễ là một cơ hội bị lãng phí!</strong></p>
                    </div>
                    
                    <div class="call-to-action">
                        <div class="cta-content">
                            <h4><i class="fas fa-phone"></i> Cần can thiệp AVT khẩn cấp?</h4>
                            <p>Liên hệ ngay với Hand in Hand Foundation để được kết nối với các chuyên gia AVT có kinh nghiệm với trẻ dây thần kinh mảnh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareHearingImpairedAVTDocument()" class="btn-share" style="border-color: #37474f; color: #37474f;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- RLPTK Q&A Modal -->
<div id="rlptkQAModal" class="pointing-modal" style="display: none;">
    <div class="pointing-modal-content">
        <div class="modal-header-pointing">
            <span class="close-pointing" onclick="closeRLPTKQAModal()">&times;</span>
            <h2><i class="fas fa-question-circle" style="color: #673ab7;"></i> Hỏi đáp về một số vấn đề của trẻ RLPTK</h2>
        </div>
        <div class="pointing-modal-body">
            <!-- Reading Progress Bar -->
            <div class="reading-progress" id="readingProgress"></div>
            
            <!-- Scroll to Top Button -->
            <button class="scroll-to-top" id="scrollToTop" onclick="scrollToTop()">
                <i class="fas fa-arrow-up"></i>
            </button>
            
            <div class="intro-section intro-rlptk-qa">
                <div class="intro-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="intro-content">
                    <h3>Tổng hợp câu hỏi thường gặp</h3>
                    <p>Những thắc mắc phổ biến nhất từ phụ huynh về rối loạn phát triển toàn diện ở trẻ em, được giải đáp bởi đội ngũ chuyên gia tâm lý và bác sĩ nhi khoa của Hand in Hand Foundation.</p>
                </div>
            </div>

            <!-- Sticky Navigation -->
            <div class="rlptk-nav">
                <ul class="rlptk-nav-list">
                    <li class="rlptk-nav-item active" onclick="scrollToSection('nhan-biet', this)">
                        <i class="fas fa-search"></i> Nhận biết
                    </li>
                    <li class="rlptk-nav-item" onclick="scrollToSection('can-thiep', this)">
                        <i class="fas fa-graduation-cap"></i> Can thiệp
                    </li>
                    <li class="rlptk-nav-item" onclick="scrollToSection('gia-dinh', this)">
                        <i class="fas fa-home"></i> Gia đình
                    </li>
                    <li class="rlptk-nav-item" onclick="scrollToSection('tuong-lai', this)">
                        <i class="fas fa-rocket"></i> Tương lai
                    </li>
                </ul>
            </div>

            <div class="qa-categories">
                <h3><i class="fas fa-list-ul"></i> Danh mục câu hỏi</h3>
                
                <!-- Nhận biết và chẩn đoán -->
                <div class="qa-category" id="nhan-biet">
                    <div class="category-header">
                        <h4><i class="fas fa-search"></i> Nhận biết và chẩn đoán</h4>
                    </div>
                    
                    <div class="qa-item" onclick="toggleAnswer(this)">
                        <div class="question">
                            <h5>
                                <span><i class="fas fa-question-circle"></i> RLPTK là gì? Khác gì với tự kỷ?</span>
                                <i class="fas fa-plus question-icon"></i>
                            </h5>
                        </div>
                        <div class="answer">
                            <p><strong>Trả lời:</strong> RLPTK (Rối loạn phát triển toàn diện) là nhóm các rối loạn phát triển thần kinh ảnh hưởng đến nhiều lĩnh vực:</p>
                            <ul class="answer-list">
                                <li><strong>Giao tiếp xã hội:</strong> Khó khăn trong tương tác, thiếu nhận thức xã hội</li>
                                <li><strong>Ngôn ngữ:</strong> Chậm phát triển hoặc rối loạn ngôn ngữ</li>
                                <li><strong>Hành vi:</strong> Hành vi lặp đi lặp lại, khó thích ứng với thay đổi</li>
                                <li><strong>Nhận thức:</strong> Có thể kèm theo khuyết tật trí tuệ</li>
                            </ul>
                            <p><strong>Khác với tự kỷ:</strong> Tự kỷ là một dạng cụ thể của RLPTK, trong khi RLPTK bao gồm nhiều rối loạn khác nhau với mức độ nghiêm trọng khác nhau.</p>
                        </div>
                    </div>

                    <div class="qa-item" onclick="toggleAnswer(this)">
                        <div class="question">
                            <h5>
                                <span><i class="fas fa-question-circle"></i> Làm thế nào để nhận biết trẻ có RLPTK?</span>
                                <i class="fas fa-plus question-icon"></i>
                            </h5>
                        </div>
                        <div class="answer">
                            <div class="warning-signs">
                                <h6>🔍 Dấu hiệu cảnh báo theo độ tuổi:</h6>
                                
                                <div class="age-group">
                                    <strong>12-18 tháng:</strong>
                                    <ul>
                                        <li>Không có giao tiếp bằng mắt</li>
                                        <li>Không phản ứng khi gọi tên</li>
                                        <li>Không chỉ tay hoặc vẫy tay</li>
                                        <li>Không bắt chước hành động</li>
                                    </ul>
                                </div>
                                
                                <div class="age-group">
                                    <strong>18-24 tháng:</strong>
                                    <ul>
                                        <li>Không nói được 15 từ đơn</li>
                                        <li>Không chơi giả vờ</li>
                                        <li>Mất các kỹ năng đã học</li>
                                        <li>Tự cô lập</li>
                                    </ul>
                                </div>
                                
                                <div class="age-group">
                                    <strong>2-3 tuổi:</strong>
                                    <ul>
                                        <li>Không ghép được 2 từ có ý nghĩa</li>
                                        <li>Hành vi lặp lại bất thường</li>
                                        <li>Khó chịu khi thay đổi</li>
                                        <li>Không tương tác với trẻ khác</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="qa-item" onclick="toggleAnswer(this)">
                        <div class="question">
                            <h5>
                                <span><i class="fas fa-question-circle"></i> Khi nào cần đi khám chẩn đoán RLPTK?</span>
                                <i class="fas fa-plus question-icon"></i>
                            </h5>
                        </div>
                        <div class="answer">
                            <div class="urgent-consultation">
                                <h6>⚡ Cần khám ngay khi:</h6>
                                <ul class="urgent-list">
                                    <li>Trẻ có từ 3 dấu hiệu trở lên ở cùng độ tuổi</li>
                                    <li>Mất kỹ năng đã có (regression)</li>
                                    <li>Không có tiến bộ sau 3 tháng can thiệp</li>
                                    <li>Gia đình hoặc giáo viên lo ngại</li>
                                </ul>
                            </div>
                            <p><strong>Địa điểm khám:</strong> Bệnh viện Nhi Trung ương, Bệnh viện Nhi Đồng 1, các trung tâm can thiệp sớm có uy tín.</p>
                        </div>
                    </div>
                </div>

                <!-- Can thiệp và giáo dục -->
                <div class="qa-category" id="can-thiep">
                    <div class="category-header">
                        <h4><i class="fas fa-graduation-cap"></i> Can thiệp và giáo dục</h4>
                    </div>
                    
                    <div class="qa-item" onclick="toggleAnswer(this)">
                        <div class="question">
                            <h5>
                                <span><i class="fas fa-question-circle"></i> Trẻ RLPTK có thể học được không?</span>
                                <i class="fas fa-plus question-icon"></i>
                            </h5>
                        </div>
                        <div class="answer">
                            <p><strong>Hoàn toàn có thể!</strong> Với can thiệp phù hợp:</p>
                            
                            <div class="intervention-levels">
                                <div class="level-box mild">
                                    <h6>🟢 RLPTK nhẹ:</h6>
                                    <ul>
                                        <li>Có thể học hòa nhập trường phổ thông</li>
                                        <li>Phát triển kỹ năng xã hội tốt</li>
                                        <li>Tự lập trong sinh hoạt</li>
                                        <li>Có khả năng làm việc</li>
                                    </ul>
                                </div>
                                
                                <div class="level-box moderate">
                                    <h6>🟡 RLPTK trung bình:</h6>
                                    <ul>
                                        <li>Học được các kỹ năng cơ bản</li>
                                        <li>Cần hỗ trợ trong một số hoạt động</li>
                                        <li>Có thể làm công việc đơn giản</li>
                                        <li>Sống bán độc lập</li>
                                    </ul>
                                </div>
                                
                                <div class="level-box severe">
                                    <h6>🔴 RLPTK nặng:</h6>
                                    <ul>
                                        <li>Học được kỹ năng tự phục vụ cơ bản</li>
                                        <li>Cải thiện hành vi và giao tiếp</li>
                                        <li>Giảm stress cho gia đình</li>
                                        <li>Tăng chất lượng cuộc sống</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="qa-item" onclick="toggleAnswer(this)">
                        <div class="question">
                            <h5>
                                <span><i class="fas fa-question-circle"></i> Phương pháp can thiệp nào hiệu quả nhất?</span>
                                <i class="fas fa-plus question-icon"></i>
                            </h5>
                        </div>
                        <div class="answer">
                            <div class="intervention-methods">
                                <h6>📋 Các phương pháp được khuyến nghị:</h6>
                                
                                <div class="method-grid">
                                    <div class="method-item">
                                        <h6><i class="fas fa-brain"></i> ABA (Applied Behavior Analysis)</h6>
                                        <p>Phân tích ứng xử ứng dụng - Phương pháp có bằng chứng khoa học mạnh nhất</p>
                                        <ul>
                                            <li>Dạy kỹ năng từng bước nhỏ</li>
                                            <li>Sử dụng khen thưởng tích cực</li>
                                            <li>Đo lường tiến bộ cụ thể</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="method-item">
                                        <h6><i class="fas fa-comments"></i> Speech Therapy</h6>
                                        <p>Trị liệu ngôn ngữ</p>
                                        <ul>
                                            <li>Phát triển ngôn ngữ nói</li>
                                            <li>Giao tiếp thay thế (PECS, cử chỉ)</li>
                                            <li>Kỹ năng giao tiếp xã hội</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="method-item">
                                        <h6><i class="fas fa-running"></i> Occupational Therapy</h6>
                                        <p>Trị liệu nghề nghiệp</p>
                                        <ul>
                                            <li>Kỹ năng vận động tinh</li>
                                            <li>Tích hợp cảm giác</li>
                                            <li>Kỹ năng sinh hoạt</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="method-item">
                                        <h6><i class="fas fa-heart"></i> Social Skills Training</h6>
                                        <p>Luyện tập kỹ năng xã hội</p>
                                        <ul>
                                            <li>Tương tác với bạn bè</li>
                                            <li>Chơi cùng nhau</li>
                                            <li>Hiểu cảm xúc</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hỗ trợ gia đình -->
                <div class="qa-category" id="gia-dinh">
                    <div class="category-header">
                        <h4><i class="fas fa-home"></i> Hỗ trợ gia đình</h4>
                    </div>
                    
                    <div class="qa-item" onclick="toggleAnswer(this)">
                        <div class="question">
                            <h5>
                                <span><i class="fas fa-question-circle"></i> Gia đình cần chuẩn bị gì khi có trẻ RLPTK?</span>
                                <i class="fas fa-plus question-icon"></i>
                            </h5>
                        </div>
                        <div class="answer">
                            <div class="family-preparation">
                                <div class="prep-category">
                                    <h6>💪 Chuẩn bị tâm lý:</h6>
                                    <ul>
                                        <li>Chấp nhận và hiểu rõ tình trạng của trẻ</li>
                                        <li>Xây dựng kỳ vọng thực tế</li>
                                        <li>Tìm hiểu kiến thức về RLPTK</li>
                                        <li>Kết nối với gia đình khác có hoàn cảnh tương tự</li>
                                    </ul>
                                </div>
                                
                                <div class="prep-category">
                                    <h6>🏠 Chuẩn bị môi trường:</h6>
                                    <ul>
                                        <li>Tạo không gian an toàn, có cấu trúc</li>
                                        <li>Giảm thiểu yếu tố gây kích thích</li>
                                        <li>Chuẩn bị đồ chơi, dụng cụ hỗ trợ</li>
                                        <li>Thiết lập thói quen hàng ngày</li>
                                    </ul>
                                </div>
                                
                                <div class="prep-category">
                                    <h6>💰 Chuẩn bị tài chính:</h6>
                                    <ul>
                                        <li>Lập kế hoạch chi phí can thiệp dài hạn</li>
                                        <li>Tìm hiểu các chương trình hỗ trợ</li>
                                        <li>Bảo hiểm y tế và can thiệp</li>
                                        <li>Dự phòng các chi phí bất ngờ</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="qa-item" onclick="toggleAnswer(this)">
                        <div class="question">
                            <h5>
                                <span><i class="fas fa-question-circle"></i> Làm sao để cân bằng giữa chăm sóc trẻ RLPTK và các con khác?</span>
                                <i class="fas fa-plus question-icon"></i>
                            </h5>
                        </div>
                        <div class="answer">
                            <div class="balance-strategies">
                                <h6>⚖️ Chiến lược cân bằng:</h6>
                                
                                <div class="strategy-item">
                                    <h6>1. Phân chia thời gian hợp lý:</h6>
                                    <ul>
                                        <li>Lập lịch riêng cho từng con</li>
                                        <li>Tạo thời gian chất lượng 1-1</li>
                                        <li>Hoạt động chung toàn gia đình</li>
                                    </ul>
                                </div>
                                
                                <div class="strategy-item">
                                    <h6>2. Giúp anh chị em hiểu về RLPTK:</h6>
                                    <ul>
                                        <li>Giải thích phù hợp với độ tuổi</li>
                                        <li>Khuyến khích sự tham gia</li>
                                        <li>Tôn vinh vai trò anh chị</li>
                                    </ul>
                                </div>
                                
                                <div class="strategy-item">
                                    <h6>3. Tìm kiếm hỗ trợ:</h6>
                                    <ul>
                                        <li>Nhờ ông bà, họ hàng giúp đỡ</li>
                                        <li>Tham gia nhóm hỗ trợ gia đình</li>
                                        <li>Sử dụng dịch vụ chăm sóc tạm thời</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tương lai và phát triển -->
                <div class="qa-category" id="tuong-lai">
                    <div class="category-header">
                        <h4><i class="fas fa-rocket"></i> Tương lai và phát triển</h4>
                    </div>
                    
                    <div class="qa-item" onclick="toggleAnswer(this)">
                        <div class="question">
                            <h5>
                                <span><i class="fas fa-question-circle"></i> Trẻ RLPTK có thể sống độc lập được không?</span>
                                <i class="fas fa-plus question-icon"></i>
                            </h5>
                        </div>
                        <div class="answer">
                            <div class="independence-levels">
                                <p><strong>Khả năng sống độc lập phụ thuộc vào mức độ nghiêm trọng và chất lượng can thiệp:</strong></p>
                                
                                <div class="independence-stats">
                                    <div class="stat-box">
                                        <div class="stat-number">25-30%</div>
                                        <div class="stat-text">Sống hoàn toàn độc lập, có việc làm ổn định</div>
                                    </div>
                                    
                                    <div class="stat-box">
                                        <div class="stat-number">40-45%</div>
                                        <div class="stat-text">Sống bán độc lập với một số hỗ trợ</div>
                                    </div>
                                    
                                    <div class="stat-box">
                                        <div class="stat-number">25-35%</div>
                                        <div class="stat-text">Cần hỗ trợ toàn diện nhưng có chất lượng sống tốt</div>
                                    </div>
                                </div>
                                
                                <div class="success-factors">
                                    <h6>🎯 Yếu tố quyết định thành công:</h6>
                                    <ul>
                                        <li><strong>Can thiệp sớm:</strong> Bắt đầu trước 3 tuổi</li>
                                        <li><strong>Cường độ cao:</strong> 20-40 giờ/tuần</li>
                                        <li><strong>Phương pháp khoa học:</strong> ABA, TEACCH</li>
                                        <li><strong>Sự kiên trì:</strong> Của gia đình và nhà trị liệu</li>
                                        <li><strong>Hỗ trợ xã hội:</strong> Môi trường hòa nhập</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rlptk-resources">
                <h3><i class="fas fa-link"></i> Tài nguyên hữu ích</h3>
                
                <div class="resources-grid">
                    <div class="resource-item">
                        <h6><i class="fas fa-hospital"></i> Cơ sở y tế:</h6>
                        <ul>
                            <li>Bệnh viện Nhi Trung ương</li>
                            <li>Bệnh viện Nhi Đồng 1 & 2</li>
                            <li>Bệnh viện Đại học Y Hà Nội</li>
                            <li>Trung tâm Can thiệp sớm Hà Nội</li>
                        </ul>
                    </div>
                    
                    <div class="resource-item">
                        <h6><i class="fas fa-users"></i> Tổ chức hỗ trợ:</h6>
                        <ul>
                            <li>Hand in Hand Foundation</li>
                            <li>Hội Tự kỷ Việt Nam</li>
                            <li>Trung tâm Hỗ trợ NKST</li>
                            <li>Autism Speaks Việt Nam</li>
                        </ul>
                    </div>
                    
                    <div class="resource-item">
                        <h6><i class="fas fa-book"></i> Tài liệu tham khảo:</h6>
                        <ul>
                            <li>"Hiểu về Tự kỷ" - BS. Nguyễn Thị Hương</li>
                            <li>"Can thiệp ABA" - Lê Thị Mai</li>
                            <li>Website: autism.org.vn</li>
                            <li>App: Autism Helper VN</li>
                        </ul>
                    </div>
                    
                    <div class="resource-item">
                        <h6><i class="fas fa-phone"></i> Hotline hỗ trợ:</h6>
                        <ul>
                            <li>Hand in Hand: 024.xxx.xxxx</li>
                            <li>Hội Tự kỷ: 028.xxx.xxxx</li>
                            <li>SOS Tâm lý: 1900.xxxx</li>
                            <li>Tư vấn miễn phí: 24/7</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="conclusion-golden rlptk-conclusion">
                <div class="conclusion-highlight">
                    <i class="fas fa-heart"></i>
                    <h3>Thông điệp từ Hand in Hand</h3>
                </div>
                <div class="conclusion-content">
                    <p>💜 <strong>Mỗi trẻ RLPTK đều có tiềm năng riêng - hãy tin tưởng và kiên trì!</strong></p>
                    <p>🤝 <strong>Bạn không đơn độc - Hand in Hand luôn đồng hành cùng gia đình!</strong></p>
                    <p>🌟 <strong>Can thiệp đúng phương pháp + Sự kiên trì = Kỳ tích có thể!</strong></p>
                </div>
                
                <div class="call-to-action">
                    <div class="cta-content">
                        <h4><i class="fas fa-comments"></i> Cần tư vấn thêm?</h4>
                        <p>Đội ngũ chuyên gia Hand in Hand sẵn sàng giải đáp mọi thắc mắc về RLPTK và hỗ trợ lập kế hoạch can thiệp phù hợp cho trẻ.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareRLPTKQADocument()" class="btn-share" style="border-color: #673ab7; color: #673ab7;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>



                            <div class="science-points">
                                <div class="science-point">
                                    <div class="point-icon">🔆</div>
                                    <div class="point-content">
                                        <strong>Ánh sáng xanh bắt chước ánh sáng ban ngày</strong>
                                        <p>Ức chế melatonin - hormone tự nhiên điều chỉnh giấc ngủ</p>
                                    </div>
                                </div>
                                <div class="science-point">
                                    <div class="point-icon">⏰</div>
                                    <div class="point-content">
                                        <strong>Chỉ vài phút kích thích màn hình</strong>
                                        <p>Có thể trì hoãn giải phóng melatonin trong vài giờ</p>
                                    </div>
                                </div>
                                <div class="science-point">
                                    <div class="point-icon">🔄</div>
                                    <div class="point-content">
                                        <strong>Đồng hồ sinh học bị gián đoạn</strong>
                                        <p>Gây mất cân bằng hormone và viêm não</p>
                                    </div>
                                </div>
                                <div class="science-point">
                                    <div class="point-icon">😴</div>
                                    <div class="point-content">
                                        <strong>Không thể ngủ sâu</strong>
                                        <p>Giấc ngủ sâu là cách cơ thể chữa lành và phục hồi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Effect 2: Dopamine Desensitization -->
                <div class="effect-item" id="effect-2">
                    <div class="effect-header">
                        <div class="effect-number">2</div>
                        <h4>Làm giảm sự nhạy cảm hệ thống khen thưởng của não</h4>
                    </div>
                    <div class="effect-content">
                        <div class="main-explanation">
                            <p><strong>Tác động chính:</strong> Thời gian sử dụng màn hình làm giảm sự nhạy cảm hệ thống khen thưởng thông ken thường của não.</p>
                        </div>
                        
                        <div class="addiction-comparison">
                            <h5><i class="fas fa-exclamation-triangle"></i> So sánh với chất gây nghiện:</h5>
                            <div class="comparison-box">
                                <div class="comparison-item">
                                    <i class="fas fa-gamepad"></i>
                                    <span>Trò chơi điện tử</span>
                                </div>
                                <div class="comparison-arrow">≈</div>
                                <div class="comparison-item">
                                    <i class="fas fa-pills"></i>
                                    <span>Cocaine (trên hình ảnh quét não)</span>
                                </div>
                            </div>
                        </div>

                        <div class="dopamine-effects">
                            <h5><i class="fas fa-brain"></i> Tác động của Dopamine:</h5>
                            <div class="dopamine-cycle">
                                <div class="cycle-step">
                                    <div class="step-number">1</div>
                                    <p>Màn hình giải phóng <strong>dopamine</strong> - chất hóa học "tạo cảm giác dễ chịu"</p>
                                </div>
                                <div class="cycle-arrow">↓</div>
                                <div class="cycle-step">
                                    <div class="step-number">2</div>
                                    <p>Con đường khen thưởng bị <strong>lạm dụng quá mức</strong></p>
                                </div>
                                <div class="cycle-arrow">↓</div>
                                <div class="cycle-step">
                                    <div class="step-number">3</div>
                                    <p>Trở nên <strong>kém nhạy cảm</strong> hơn với dopamine</p>
                                </div>
                                <div class="cycle-arrow">↓</div>
                                <div class="cycle-step">
                                    <div class="step-number">4</div>
                                    <p>Cần <strong>nhiều kích thích hơn</strong> để trải nghiệm niềm vui</p>
                                </div>
                            </div>
                        </div>

                        <div class="consequences">
                            <h5><i class="fas fa-exclamation-circle"></i> Hậu quả:</h5>
                            <ul class="consequence-list">
                                <li>Giảm khả năng tập trung</li>
                                <li>Mất động lực với hoạt động thường ngày</li>
                                <li>Tàn phá cảm giác và hoạt động của trẻ</li>
                                <li>Khó cảm thấy hài lòng với những điều đơn giản</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Effect 3: Artificial Light at Night -->
                <div class="effect-item" id="effect-3">
                    <div class="effect-header">
                        <div class="effect-number">3</div>
                        <h4>Tạo ra "ánh sáng ban đêm" gây trầm cảm</h4>
                    </div>
                    <div class="effect-content">
                        <div class="main-explanation">
                            <p><strong>Tác động chính:</strong> Thiết bị điện tử tạo ra "ánh sáng ban đêm" có liên quan đến trầm cảm và nguy cơ tự tử.</p>
                        </div>
                        
                        <div class="research-evidence">
                            <h5><i class="fas fa-flask"></i> Bằng chứng nghiên cứu:</h5>
                            <div class="evidence-grid">
                                <div class="evidence-item human">
                                    <h6><i class="fas fa-users"></i> Nghiên cứu trên người:</h6>
                                    <ul>
                                        <li>Liên quan đến trầm cảm</li>
                                        <li>Tăng nguy cơ tự tử</li>
                                        <li>Ảnh hưởng đến nhiều nghiên cứu</li>
                                    </ul>
                                </div>
                                <div class="evidence-item animal">
                                    <h6><i class="fas fa-paw"></i> Nghiên cứu trên động vật:</h6>
                                    <ul>
                                        <li>Ánh sáng màn hình trước/trong khi ngủ</li>
                                        <li>Gây trầm cảm ngay cả khi không nhìn màn hình</li>
                                        <li>Chứng minh tác động của ánh sáng đơn thuần</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="parent-concern">
                            <h5><i class="fas fa-heart"></i> Lời khuyên cho cha mẹ:</h5>
                            <div class="advice-box">
                                <div class="concern">
                                    <strong>Lo lắng của cha mẹ:</strong>
                                    <p>"Ngăn cấm thiết bị trong phòng ngủ sẽ khiến con tuyệt vọng"</p>
                                </div>
                                <div class="solution">
                                    <strong>Thực tế khoa học:</strong>
                                    <p><span class="highlight">Loại bỏ ánh sáng ban đêm có tác dụng bảo vệ trẻ</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Effect 4: Stress Response -->
                <div class="effect-item" id="effect-4">
                    <div class="effect-header">
                        <div class="effect-number">4</div>
                        <h4>Gây ra phản ứng căng thẳng mãn tính</h4>
                    </div>
                    <div class="effect-content">
                        <div class="main-explanation">
                            <p><strong>Tác động chính:</strong> Thời gian ngồi trước màn hình gây ra phản ứng căng thẳng cấp tính và mãn tính.</p>
                        </div>
                        
                        <div class="stress-types">
                            <h5><i class="fas fa-bolt"></i> Hai loại căng thẳng:</h5>
                            <div class="stress-comparison">
                                <div class="stress-type acute">
                                    <h6>Căng thẳng cấp tính</h6>
                                    <p><span class="stress-mode">Chế độ "chiến đấu hoặc bỏ chạy"</span></p>
                                    <ul>
                                        <li>Phản ứng tức thời</li>
                                        <li>Tăng hormone stress</li>
                                        <li>Thay đổi hóa học não</li>
                                    </ul>
                                </div>
                                <div class="stress-type chronic">
                                    <h6>Căng thẳng mãn tính</h6>
                                    <p><span class="stress-hormone">Cortisol cao</span></p>
                                    <ul>
                                        <li>Kéo dài liên tục</li>
                                        <li>Tổn hại cấu trúc não</li>
                                        <li>Vòng luẩn quẩn trầm cảm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="cortisol-cycle">
                            <h5><i class="fas fa-recycle"></i> Vòng luẩn quẩn Cortisol:</h5>
                            <div class="cycle-diagram">
                                <div class="cycle-element">
                                    <strong>Cortisol cao</strong>
                                </div>
                                <div class="cycle-arrow">↔</div>
                                <div class="cycle-element">
                                    <strong>Trầm cảm</strong>
                                </div>
                            </div>
                            <p class="cycle-note">Cortisol vừa là nguyên nhân vừa là hậu quả của trầm cảm</p>
                        </div>

                        <div class="brain-impact">
                            <h5><i class="fas fa-brain"></i> Tác động lên não:</h5>
                            <div class="brain-areas">
                                <div class="brain-area">
                                    <i class="fas fa-ban"></i>
                                    <div class="area-info">
                                        <strong>Thùy trán bị ức chế</strong>
                                        <p>Khu vực điều chỉnh tâm trạng bị ảnh hưởng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Effect 5: Executive Function Damage -->
                <div class="effect-item" id="effect-5">
                    <div class="effect-header">
                        <div class="effect-number">5</div>
                        <h4>Làm quá tải hệ thống cảm giác và cạn kiệt dự trữ tinh thần</h4>
                    </div>
                    <div class="effect-content">
                        <div class="main-explanation">
                            <p><strong>Tác động chính:</strong> Sử dụng thiết bị điện tử làm quá tải hệ thống cảm giác, giảm sự chú ý và cạn kiệt nguồn dự trữ tinh thần.</p>
                        </div>
                        
                        <div class="attention-impact">
                            <h5><i class="fas fa-eye"></i> Tác động lên sự chú ý:</h5>
                            <div class="attention-chain">
                                <div class="chain-step">
                                    <div class="step-icon">📱</div>
                                    <p><strong>Đầu vào thị giác cao</strong></p>
                                </div>
                                <div class="chain-arrow">→</div>
                                <div class="chain-step">
                                    <div class="step-icon">🧠</div>
                                    <p><strong>Quá tải nhận thức</strong></p>
                                </div>
                                <div class="chain-arrow">→</div>
                                <div class="chain-step">
                                    <div class="step-icon">⚠️</div>
                                    <p><strong>Giảm khả năng tập trung</strong></p>
                                </div>
                                <div class="chain-arrow">→</div>
                                <div class="chain-step">
                                    <div class="step-icon">💥</div>
                                    <p><strong>Hành vi bùng nổ</strong></p>
                                </div>
                            </div>
                        </div>

                        <div class="processing-impact">
                            <h5><i class="fas fa-cogs"></i> Khả năng xử lý thông tin:</h5>
                            <div class="processing-breakdown">
                                <div class="normal-state">
                                    <h6>Trạng thái bình thường:</h6>
                                    <ul>
                                        <li>Xử lý môi trường bên ngoài tốt</li>
                                        <li>Xử lý cảm xúc bên trong ổn định</li>
                                        <li>Nhu cầu nhỏ được đáp ứng dễ dàng</li>
                                    </ul>
                                </div>
                                <div class="overloaded-state">
                                    <h6>Trạng thái quá tải:</h6>
                                    <ul>
                                        <li>Khó xử lý thông tin môi trường</li>
                                        <li>Không kiểm soát được cảm xúc</li>
                                        <li>Nhu cầu nhỏ trở thành nhu cầu lớn</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="energy-depletion">
                            <h5><i class="fas fa-battery-empty"></i> Cạn kiệt năng lượng tinh thần:</h5>
                            <div class="depletion-process">
                                <div class="depletion-cause">
                                    <strong>Nguyên nhân:</strong>
                                    <p>Đầu vào thị giác và nhận thức cao từ màn hình</p>
                                </div>
                                <div class="depletion-result">
                                    <strong>Kết quả:</strong>
                                    <p>Nguồn dự trữ tinh thần bị cạn kiệt</p>
                                </div>
                                <div class="coping-mechanism">
                                    <strong>Cơ chế đối phó:</strong>
                                    <p><span class="anger-boost">Tức giận để "thúc đẩy" nguồn dự trữ</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="tantrum-explanation">
                            <h5><i class="fas fa-exclamation-triangle"></i> Tại sao trẻ ăn vạ/khủng hoảng?</h5>
                            <div class="tantrum-box">
                                <p><strong>Khủng hoảng/ăn vạ thực sự đã trở thành một cơ chế đối phó</strong></p>
                                <p class="explanation">Khi năng lượng tinh thần cạn kiệt, tức giận tạm thời "boost" nguồn lực để đối phó với tình huống.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Effect 6: Reduced Nature Exposure -->
                <div class="effect-item" id="effect-6">
                    <div class="effect-header">
                        <div class="effect-number">6</div>
                        <h4>Giảm mức độ hoạt động thể chất và khả năng tiếp xúc với "thời gian xanh"</h4>
                    </div>
                    <div class="effect-content">
                        <div class="main-explanation">
                            <p><strong>Tác động chính:</strong> Thời gian sử dụng thiết bị điện tử làm giảm mức độ hoạt động thể chất và khả năng tiếp xúc với thiên nhiên.</p>
                        </div>
                        
                        <div class="green-time-benefits">
                            <h5><i class="fas fa-leaf"></i> Lợi ích của "Thời gian xanh":</h5>
                            <div class="benefits-grid">
                                <div class="benefit-item">
                                    <i class="fas fa-focus"></i>
                                    <div class="benefit-content">
                                        <strong>Khôi phục sự chú ý</strong>
                                        <p>Thiên nhiên giúp não bộ nghỉ ngơi và tái tạo năng lượng</p>
                                    </div>
                                </div>
                                <div class="benefit-item">
                                    <i class="fas fa-zen"></i>
                                    <div class="benefit-content">
                                        <strong>Giảm căng thẳng</strong>
                                        <p>Môi trường tự nhiên làm giảm cortisol và hormone stress</p>
                                    </div>
                                </div>
                                <div class="benefit-item">
                                    <i class="fas fa-dove"></i>
                                    <div class="benefit-content">
                                        <strong>Giảm bớt sự hung hăng</strong>
                                        <p>Tương tác với thiên nhiên làm dịu tâm trạng</p>
                                    </div>
                                </div>
                                <div class="benefit-item">
                                    <i class="fas fa-smile"></i>
                                    <div class="benefit-content">
                                        <strong>Cải thiện tâm trạng</strong>
                                        <p>Chất cải thiện tâm trạng tự nhiên từ môi trường xanh</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="time-trade-off">
                            <h5><i class="fas fa-balance-scale"></i> Sự đánh đổi thời gian:</h5>
                            <div class="trade-off-comparison">
                                <div class="time-lost">
                                    <h6><i class="fas fa-minus-circle"></i> Thời gian mất đi:</h6>
                                    <ul>
                                        <li>Hoạt động ngoài trời</li>
                                        <li>Vận động thể chất</li>
                                        <li>Tương tác với thiên nhiên</li>
                                        <li>Thời gian gia đình chất lượng</li>
                                    </ul>
                                </div>
                                <div class="consequences">
                                    <h6><i class="fas fa-arrow-right"></i> Hậu quả:</h6>
                                    <ul>
                                        <li>Giảm khả năng tiếp xúc với chất cải thiện tâm trạng</li>
                                        <li>Thiếu kích thích tích cực cho não</li>
                                        <li>Không có cơ hội phục hồi tự nhiên</li>
                                        <li>Tăng nguy cơ các vấn đề tâm lý</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="research-support">
                            <h5><i class="fas fa-chart-line"></i> Nghiên cứu hỗ trợ:</h5>
                            <div class="research-findings">
                                <p><strong>Nghiên cứu cho thấy:</strong> Thời gian ở ngoài trời, đặc biệt là tương tác với thiên nhiên, có những tác động tích cực được chứng minh:</p>
                                <ul class="findings-list">
                                    <li>Khôi phục khả năng chú ý bị suy giảm</li>
                                    <li>Giảm mức độ căng thẳng đo được</li>
                                    <li>Giảm bớt hành vi hung hăng và bùng nổ</li>
                                    <li>Cải thiện tâm trạng tổng thể</li>
                                    <li>Tăng cường sức khỏe tinh thần</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Practical Solutions -->
            <div class="practical-solutions">
                <h3><i class="fas fa-lightbulb"></i> Giải pháp thực tế cho gia đình</h3>
                
                <div class="solution-categories">
                    <div class="solution-category">
                        <h4><i class="fas fa-clock"></i> Quản lý thời gian màn hình</h4>
                        <ul class="solution-list">
                            <li>Thiết lập giờ "curfew" cho thiết bị (1-2 giờ trước giờ ngủ)</li>
                            <li>Tạo "khu vực không có thiết bị" trong nhà</li>
                            <li>Sử dụng timer để giới hạn thời gian sử dụng</li>
                            <li>Mô hình hóa việc sử dụng thiết bị lành mạnh</li>
                        </ul>
                    </div>
                    
                    <div class="solution-category">
                        <h4><i class="fas fa-bed"></i> Cải thiện giấc ngủ</h4>
                        <ul class="solution-list">
                            <li>Loại bỏ tất cả thiết bị khỏi phòng ngủ</li>
                            <li>Sử dụng đồng hồ báo thức thay vì điện thoại</li>
                            <li>Tạo môi trường tối tuyệt đối khi ngủ</li>
                            <li>Thiết lập thói quen đi ngủ thư giãn</li>
                        </ul>
                    </div>
                    
                    <div class="solution-category">
                        <h4><i class="fas fa-tree"></i> Tăng "thời gian xanh"</h4>
                        <ul class="solution-list">
                            <li>Lên kế hoạch hoạt động ngoài trời hàng ngày</li>
                            <li>Khuyến khích chơi tự do trong tự nhiên</li>
                            <li>Tham gia các hoạt động thể thao ngoài trời</li>
                            <li>Làm vườn hoặc chăm sóc cây cối cùng con</li>
                        </ul>
                    </div>
                    
                    <div class="solution-category">
                        <h4><i class="fas fa-heart"></i> Hoạt động thay thế</h4>
                        <ul class="solution-list">
                            <li>Đọc sách cùng nhau</li>
                            <li>Trò chơi board game gia đình</li>
                            <li>Hoạt động nghệ thuật và thủ công</li>
                            <li>Nấu ăn cùng con</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Expert Recommendations -->
            <div class="expert-recommendations">
                <h3><i class="fas fa-user-md"></i> Khuyến nghị từ chuyên gia</h3>
                
                <div class="age-based-recommendations">
                    <div class="age-group-rec">
                        <h4>👶 Dưới 2 tuổi</h4>
                        <div class="rec-content">
                            <p><strong>Khuyến nghị:</strong> Không màn hình (trừ video call với gia đình)</p>
                            <ul>
                                <li>Não đang phát triển nhanh chóng</li>
                                <li>Cần tương tác thực tế để học hỏi</li>
                                <li>Màn hình có thể gây chậm phát triển ngôn ngữ</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="age-group-rec">
                        <h4>🧒 2-5 tuổi</h4>
                        <div class="rec-content">
                            <p><strong>Khuyến nghị:</strong> Tối đa 1 giờ/ngày nội dung chất lượng cao</p>
                            <ul>
                                <li>Xem cùng con và thảo luận nội dung</li>
                                <li>Chọn chương trình giáo dục phù hợp</li>
                                <li>Tránh nội dung có nhịp độ nhanh</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="age-group-rec">
                        <h4>👦 6+ tuổi</h4>
                        <div class="rec-content">
                            <p><strong>Khuyến nghị:</strong> Giới hạn nhất quán và giám sát nội dung</p>
                            <ul>
                                <li>Thiết lập quy tắc rõ ràng về thời gian</li>
                                <li>Ưu tiên bài tập, ngủ nghỉ và hoạt động thể chất</li>
                                <li>Giám sát nội dung và tương tác online</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Warning Signs -->
            <div class="warning-signs-section">
                <h3><i class="fas fa-exclamation-triangle"></i> Dấu hiệu cảnh báo</h3>
                
                <div class="warning-categories">
                    <div class="warning-category immediate">
                        <h4>🚨 Cần can thiệp ngay</h4>
                        <ul>
                            <li>Cơn giận dữ khi bị tắt thiết bị</li>
                            <li>Mất ngủ hoặc ác mông thường xuyên</li>
                            <li>Từ chối tham gia hoạt động khác</li>
                            <li>Thay đổi tính cách đột ngột</li>
                        </ul>
                    </div>
                    
                    <div class="warning-category moderate">
                        <h4>⚠️ Cần theo dõi</h4>
                        <ul>
                            <li>Giảm thành tích học tập</li>
                            <li>Ít tương tác xã hội hơn</li>
                            <li>Khó tập trung vào nhiệm vụ</li>
                            <li>Tăng cảm xúc tiêu cực</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="conclusion-golden screen-time-conclusion">
                <div class="conclusion-highlight">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Bảo vệ não bộ con trẻ</h3>
                </div>
                <div class="conclusion-content">
                    <p>🧠 <strong>Não của trẻ đang phát triển rất nhạy cảm với tác động của màn hình!</strong></p>
                    <p>⚡ <strong>Những thay đổi nhỏ trong thói quen có thể tạo ra tác động lớn đến sức khỏe tinh thần!</strong></p>
                    <p>🌱 <strong>Đầu tư vào "thời gian xanh" và giấc ngủ chất lượng = Đầu tư vào tương lai con!</strong></p>
                </div>
                
                <div class="call-to-action">
                    <div class="cta-content">
                        <h4><i class="fas fa-phone"></i> Cần hỗ trợ chuyên môn?</h4>
                        <p>Hand in Hand Foundation cung cấp tư vấn về quản lý thời gian màn hình và phát triển não bộ lành mạnh cho trẻ em.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareScreenTimeBrainDocument()" class="btn-share" style="border-color: #e91e63; color: #e91e63;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Autism Communication Modal -->
<div id="autismCommunicationModal" class="pointing-modal" style="display: none;">
    <div class="pointing-modal-content">
        <div class="pointing-modal-header">
            <span class="close-pointing" onclick="closeAutismCommunicationModal()">&times;</span>
            <h2 style="color: #673ab7;">
                <i class="fas fa-comments"></i> Những cách mà người lớn có thể tác động đến việc giao tiếp của một trẻ tự kỷ
            </h2>
            <div class="modal-description">
                <p>12 chiến lược hiệu quả giúp người lớn tác động tích cực đến kỹ năng giao tiếp của trẻ em có rối loạn phổ tự kỷ</p>
            </div>
        </div>
        
        <div class="pointing-modal-body">
            <!-- Introduction -->
            <div class="content-section">
                <div class="intro-box">
                    <h3><i class="fas fa-star"></i> Giới thiệu</h3>
                    <p>12 chiến lược sau đây sẽ giúp bạn tác động một cách tích cực đến kỹ năng giao tiếp của một trẻ em có rối loạn phổ tự kỷ:</p>
                </div>
            </div>

            <!-- Strategy 1: Support Role -->
            <div class="strategy-item" id="strategy-1">
                <div class="strategy-header">
                    <div class="strategy-number">1</div>
                    <h4>Đảm nhiệm vai trò của người hỗ trợ</h4>
                </div>
                <div class="strategy-content">
                    <div class="main-principle">
                        <p><strong>Nguyên tắc chính:</strong> Khi một đứa trẻ không thể giao tiếp nhu cầu của mình, bạn có xu hướng giúp trẻ bằng cách làm thay cho trẻ.</p>
                    </div>
                    
                    <div class="problem-explanation">
                        <h5><i class="fas fa-exclamation-circle"></i> Vấn đề:</h5>
                        <p>Khi bạn làm những việc thay cho trẻ (ví dụ như mang giày/cột dây giày cho trẻ), cơ hội cho đứa trẻ thấy là trẻ có thể tự làm những việc đó bị giảm đi.</p>
                    </div>
                    
                    <div class="solution-approach">
                        <h5><i class="fas fa-lightbulb"></i> Cách thực hiện:</h5>
                        <ol>
                            <li>Hỏi xem trẻ có cần giúp không</li>
                            <li>Chờ đợi và hỏi lại lần thứ hai trước khi giúp trẻ</li>
                            <li>Khuyến khích trẻ hoàn thành bước cuối cùng của nhiệm vụ</li>
                            <li>Khen ngợi: "con đã ...(vd. mang giày) giỏi lắm"</li>
                        </ol>
                    </div>
                    
                    <div class="special-note">
                        <p><strong>Lưu ý đặc biệt:</strong> Khi trẻ đang ở giai đoạn một mình (Own agenda), rất khó để đoán được nên làm giúp trẻ tới mức độ nào.</p>
                    </div>
                </div>
            </div>

            <!-- Strategy 2: Encourage Joint Activities -->
            <div class="strategy-item" id="strategy-2">
                <div class="strategy-header">
                    <div class="strategy-number">2</div>
                    <h4>Thay vì để trẻ tự làm việc của trẻ, khuyến khích trẻ làm cùng người khác</h4>
                </div>
                <div class="strategy-content">
                    <div class="misconception">
                        <h5><i class="fas fa-times-circle"></i> Quan niệm sai lầm:</h5>
                        <p>Chúng ta thường nghĩ rằng trẻ đang chứng tỏ sự tự lập khi trẻ không có hứng thú tương tác với người lớn.</p>
                    </div>
                    
                    <div class="correct-approach">
                        <h5><i class="fas fa-check-circle"></i> Cách tiếp cận đúng:</h5>
                        <ul>
                            <li>Trẻ cần phải học cách tương tác và không bị bỏ mặc với những phương cách riêng của trẻ</li>
                            <li>Người lớn phải kiên trì tham gia vào bất kỳ việc gì trẻ đang làm</li>
                            <li>Cho dù là trẻ đang chơi với một sợi dây hay cầm món đồ chơi bỏ vào rồi lấy ra khỏi hộp</li>
                        </ul>
                    </div>
                    
                    <div class="persistence-strategy">
                        <h5><i class="fas fa-heart"></i> Về sự kiên trì:</h5>
                        <div class="advice-box">
                            <p><strong>Nếu đứa trẻ tức giận và bực bội khi bạn chen vào, hãy vẫn kiên trì.</strong></p>
                            <p>Tức giận là một kiểu tương tác và nó tốt hơn là không có bất kỳ sự tương tác nào.</p>
                            <p>Khi sự tương tác này được tiếp tục với trẻ, trẻ có thể bắt đầu dần dần nhận ra rằng tương tác với người khác có thể sẽ vui.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Strategy 3: Slow Down -->
            <div class="strategy-item" id="strategy-3">
                <div class="strategy-header">
                    <div class="strategy-number">3</div>
                    <h4>Chậm lại và cho trẻ cơ hội giao tiếp</h4>
                </div>
                <div class="strategy-content">
                    <div class="reality-check">
                        <h5><i class="fas fa-clock"></i> Thực tế:</h5>
                        <p>Chăm sóc cho một đứa trẻ tự kỷ có thể vất vả và tốn nhiều thời gian. Chúng ta thường muốn hối thúc trẻ khi chúng đang thực hiện những sinh hoạt hàng ngày như ăn sáng hay mặc quần áo.</p>
                    </div>
                    
                    <div class="better-approach">
                        <h5><i class="fas fa-lightbulb"></i> Cách tốt hơn:</h5>
                        <p>Việc cho một đứa trẻ tự kỷ có thêm vài phút khi thực hiện những sinh hoạt hàng ngày sẽ:</p>
                        <ul>
                            <li>Giúp trẻ hiểu chuyện gì đang xảy ra xung quanh</li>
                            <li>Để trẻ suy nghĩ xem chúng có thể nói gì trong khi các hoạt động đó diễn ra</li>
                            <li>Tốt hơn rất nhiều so với việc bạn hối thúc và làm thay mọi việc cho chúng</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Strategy 4: Be a Partner -->
            <div class="strategy-item" id="strategy-4">
                <div class="strategy-header">
                    <div class="strategy-number">4</div>
                    <h4>Khi chơi với trẻ, hãy là cộng sự của trẻ thay vì là lãnh đạo của trẻ</h4>
                </div>
                <div class="strategy-content">
                    <div class="key-insight">
                        <h5><i class="fas fa-key"></i> Điểm quan trọng:</h5>
                        <p>Khi đứa trẻ có khả năng giao tiếp tốt hơn, trẻ cần ít sự hướng dẫn hơn.</p>
                    </div>
                    
                    <div class="warning">
                        <h5><i class="fas fa-warning"></i> Cảnh báo:</h5>
                        <p>Nếu trẻ nhận được quá nhiều câu hỏi và gợi ý có thể sẽ khó cho trẻ để tự khởi xướng một cuộc hội thoại.</p>
                    </div>
                    
                    <div class="principle">
                        <h5><i class="fas fa-handshake"></i> Nguyên tắc:</h5>
                        <p><strong>Điều quan trọng là phải theo sự dẫn dắt của trẻ và đáp ứng với những gì trẻ làm.</strong></p>
                    </div>
                </div>
            </div>

            <!-- Strategy 5: Reward Through Feedback -->
            <div class="strategy-item" id="strategy-5">
                <div class="strategy-header">
                    <div class="strategy-number">5</div>
                    <h4>Thưởng cho trẻ thông qua các phản hồi</h4>
                </div>
                <div class="strategy-content">
                    <div class="importance">
                        <h5><i class="fas fa-star"></i> Tầm quan trọng:</h5>
                        <p>Thưởng cho trẻ khi trẻ cố gắng hiểu và giao tiếp là điều quan trọng. Khi làm điều này bạn có thể tăng khả năng trẻ sẽ thử lại lần nữa.</p>
                    </div>
                    
                    <div class="technique">
                        <h5><i class="fas fa-comment"></i> Kỹ thuật:</h5>
                        <p>Bằng cách dùng những lời khen miêu tả đơn giản nhận xét về những gì trẻ đã đạt được, trẻ có thể liên kết giữa hành động của trẻ và lời nói của bạn.</p>
                    </div>
                    
                    <div class="example">
                        <h5><i class="fas fa-lightbulb"></i> Ví dụ thực tế:</h5>
                        <div class="example-box">
                            <p><strong>Tình huống:</strong> Trẻ xếp 3 mảnh lego thành 1 hàng dài và nhìn về phía bạn</p>
                            <p><strong>Phản hồi:</strong> "Ồ, con đã xếp được 1 đoàn tàu thật đẹp, xình xịch xình xịch"</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Strategy 6: Create Communication Opportunities -->
            <div class="strategy-item" id="strategy-6">
                <div class="strategy-header">
                    <div class="strategy-number">6</div>
                    <h4>Cho trẻ tự kỷ một lý do để giao tiếp</h4>
                </div>
                <div class="strategy-content">
                    <div class="principle">
                        <h5><i class="fas fa-lightbulb"></i> Nguyên lý:</h5>
                        <p>Nếu trẻ tự kỷ không gặp trở ngại gì mà vẫn đạt được những gì trẻ muốn, trẻ sẽ không có lý do để giao tiếp và tương tác.</p>
                    </div>
                    
                    <div class="strategy-approach">
                        <h5><i class="fas fa-cogs"></i> Cách thực hiện:</h5>
                        <p>Trong tất cả các sinh hoạt hàng ngày, người lớn sẽ cần phải tạo ra tình huống để tạo lý do giao tiếp cho trẻ và khuyến khích trẻ tương tác.</p>
                    </div>
                    
                    <div class="practical-example">
                        <h5><i class="fas fa-glass-whiskey"></i> Ví dụ thực tế:</h5>
                        <div class="example-scenario">
                            <p><strong>Tình huống:</strong> Bạn biết trẻ đang muốn uống sữa</p>
                            <div class="steps">
                                <div class="step">
                                    <span class="step-number">1</span>
                                    <p>Thay vì đưa hộp sữa ngay cho trẻ</p>
                                </div>
                                <div class="step">
                                    <span class="step-number">2</span>
                                    <p>Giả vờ không hiểu để tập cho trẻ chỉ về phía hộp sữa</p>
                                </div>
                                <div class="step">
                                    <span class="step-number">3</span>
                                    <p>Cầm 2 tay 2 món (1 bên là hộp sữa - thứ mà trẻ muốn, bên kia là quả cam - thứ mà trẻ không muốn)</p>
                                </div>
                                <div class="step">
                                    <span class="step-number">4</span>
                                    <p>Hỏi "con muốn hộp sữa hay quả cam?"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Strategy 7: Out of Reach Strategy -->
            <div class="strategy-item" id="strategy-7">
                <div class="strategy-header">
                    <div class="strategy-number">7</div>
                    <h4>Khuyến khích trẻ đưa ra yêu cầu</h4>
                </div>
                <div class="strategy-content">
                    <div class="technique-name">
                        <h5><i class="fas fa-hand-paper"></i> Chiến lược "trong tầm nhìn, ngoài tầm với":</h5>
                    </div>
                    
                    <div class="implementation">
                        <h5><i class="fas fa-tools"></i> Cách thực hiện:</h5>
                        <ul>
                            <li>Đặt những đồ chơi/thức ăn/video mà trẻ thích nhất ở nơi mà trẻ có thể nhìn thấy nhưng không thể với tới được</li>
                            <li>Ví dụ: trên một cái kệ cao</li>
                            <li>Hoặc đặt đồ vật trẻ thích nhất trong một cái lọ/hộp trong suốt, mà trẻ khó mở được</li>
                        </ul>
                    </div>
                    
                    <div class="expected-outcome">
                        <h5><i class="fas fa-target"></i> Kết quả mong đợi:</h5>
                        <p>Việc này sẽ khuyến khích trẻ yêu cầu giúp đỡ và kết quả là sẽ xảy ra một tương tác giữa người lớn và trẻ.</p>
                    </div>
                </div>
            </div>

            <!-- Strategy 8: Difficult Toys -->
            <div class="strategy-item" id="strategy-8">
                <div class="strategy-header">
                    <div class="strategy-number">8</div>
                    <h4>Đưa cho trẻ một món đồ chơi khó sử dụng</h4>
                </div>
                <div class="strategy-content">
                    <div class="toy-types">
                        <h5><i class="fas fa-toys"></i> Loại đồ chơi phù hợp:</h5>
                        <p>Những đồ chơi lên dây cót và những trò chơi mà cần phải xoắn vặn để sử dụng sẽ khó để trẻ tự chơi nhưng trẻ sẽ thích chúng.</p>
                    </div>
                    
                    <div class="process">
                        <h5><i class="fas fa-play"></i> Quy trình:</h5>
                        <ol>
                            <li>Chơi mẫu trước</li>
                            <li>Đưa những đồ chơi này cho trẻ</li>
                            <li>Cho trẻ thời gian để tìm cách sử dụng nó</li>
                            <li>Khi trẻ bực bội vì không chơi được đồ chơi, người lớn có thể đề nghị giúp đỡ</li>
                        </ol>
                    </div>
                    
                    <div class="toy-examples">
                        <h5><i class="fas fa-list"></i> Ví dụ các loại đồ chơi:</h5>
                        <ul>
                            <li>Hộp âm nhạc</li>
                            <li>Đồ chơi dây cót</li>
                            <li>Trái banh xoay tròn phát nhạc</li>
                            <li>Hộp bật mở</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Strategy 9: Universal Appeal Toys -->
            <div class="strategy-item" id="strategy-9">
                <div class="strategy-header">
                    <div class="strategy-number">9</div>
                    <h4>Cho trẻ một đồ chơi mà hầu như 'trẻ nào cũng thích'</h4>
                </div>
                <div class="strategy-content">
                    <div class="universal-toys">
                        <h5><i class="fas fa-heart"></i> Đồ chơi phổ biến:</h5>
                        <p>Bóng bay và bong bóng xà phòng là những đồ chơi mà hầu như trẻ nào cũng thích và có thể dễ dàng điều chỉnh để hai người cùng chơi.</p>
                    </div>
                    
                    <div class="balloon-activities">
                        <h5><i class="fas fa-balloon"></i> Hoạt động với bóng bay:</h5>
                        <div class="activity-example">
                            <p><strong>Trò chơi đơn giản:</strong> Thổi bóng bay và sau đó thả ra để nó bay lên không trung có thể sẽ làm trẻ thích thú.</p>
                            <p><strong>Kỹ thuật tương tác:</strong> Thổi một nửa quả bóng bay và chờ đợi phản ứng từ trẻ trước khi thổi quả bóng to hết cỡ là một cách thông minh để tăng tương tác giữa người lớn và trẻ.</p>
                        </div>
                    </div>
                    
                    <div class="bubble-activities">
                        <h5><i class="fas fa-circle"></i> Hoạt động với bong bóng xà phòng:</h5>
                        <div class="bubble-technique">
                            <ol>
                                <li>Thổi một ít bong bóng về phía trẻ</li>
                                <li>Khi trẻ đã chú ý, đóng lọ xà phòng lại</li>
                                <li>Chờ đợi phản ứng từ trẻ trước khi bạn thổi thêm</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Strategy 10: Portion Control -->
            <div class="strategy-item" id="strategy-10">
                <div class="strategy-header">
                    <div class="strategy-number">10</div>
                    <h4>Cho trẻ mọi thứ một cách từ từ</h4>
                </div>
                <div class="strategy-content">
                    <div class="principle">
                        <h5><i class="fas fa-balance-scale"></i> Nguyên lý:</h5>
                        <p>Nếu trẻ muốn gì được nấy thì trẻ không có lí do gì để yêu cầu bất kỳ điều gì cả.</p>
                    </div>
                    
                    <div class="control-strategy">
                        <h5><i class="fas fa-hand-holding"></i> Chiến lược kiểm soát:</h5>
                        <p>Bằng cách kiểm soát lượng thức ăn/đồ chơi mà bạn cho trẻ, trẻ sẽ có cơ hội tương tác bằng cách thể hiện những gì trẻ muốn và cần.</p>
                    </div>
                    
                    <div class="practical-example">
                        <h5><i class="fas fa-cookie"></i> Ví dụ thực tế:</h5>
                        <div class="example-scenario">
                            <p><strong>Tình huống:</strong> Trẻ muốn một cái bánh quy</p>
                            <div class="steps">
                                <div class="step">
                                    <span class="step-number">1</span>
                                    <p>Bẻ bánh quy thành nhiều miếng nhỏ</p>
                                </div>
                                <div class="step">
                                    <span class="step-number">2</span>
                                    <p>Ban đầu cho trẻ một miếng</p>
                                </div>
                                <div class="step">
                                    <span class="step-number">3</span>
                                    <p>Dần dần cho trẻ thêm khi trẻ thể hiện yêu cầu muốn xin bánh</p>
                                </div>
                            </div>
                            <div class="communication-examples">
                                <h6>Các cách trẻ có thể thể hiện yêu cầu:</h6>
                                <ul>
                                    <li>Chỉ bánh</li>
                                    <li>Lấy hình để bánh</li>
                                    <li>Nói "baba"</li>
                                    <li>Nói "bánh"</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Strategy 11: Let Child Control Endings -->
            <div class="strategy-item" id="strategy-11">
                <div class="strategy-header">
                    <div class="strategy-number">11</div>
                    <h4>Để trẻ quyết định khi nào kết thúc một hoạt động</h4>
                </div>
                <div class="strategy-content">
                    <div class="continuation-principle">
                        <h5><i class="fas fa-clock"></i> Nguyên tắc tiếp tục:</h5>
                        <p>Một khi trẻ đã tham gia vào một hoạt động với người lớn, tiếp tục hoạt động đó cho tới khi trẻ thể hiện dấu hiệu không muốn tiếp tục nữa.</p>
                    </div>
                    
                    <div class="observation-signs">
                        <h5><i class="fas fa-eye"></i> Dấu hiệu cần quan sát:</h5>
                        <ul>
                            <li>Trẻ có nhăn mặt không?</li>
                            <li>Trẻ có đẩy đồ chơi ra không?</li>
                            <li>Các biểu hiện khác cho thấy trẻ muốn dừng</li>
                        </ul>
                    </div>
                    
                    <div class="communication-goal">
                        <h5><i class="fas fa-comments"></i> Mục tiêu giao tiếp:</h5>
                        <p>Theo cách này, trẻ buộc phải giao tiếp rằng trẻ đã sẵn sàng để kết thúc một hoạt động.</p>
                    </div>
                    
                    <div class="language-development">
                        <h5><i class="fas fa-language"></i> Phát triển ngôn ngữ:</h5>
                        <div class="language-strategy">
                            <p><strong>Nếu trẻ không sử dụng ngôn ngữ để chỉ ra là trẻ muốn kết thúc:</strong></p>
                            <p>Hãy kết nối cách mà trẻ đang giao tiếp với các từ như:</p>
                            <ul>
                                <li>"xong rồi"</li>
                                <li>"đủ rồi"</li>
                                <li>"dừng lại"</li>
                            </ul>
                            <p>để khuyến khích phát triển ngôn ngữ cho trẻ.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Strategy 12: Follow Child's Lead -->
            <div class="strategy-item" id="strategy-12">
                <div class="strategy-header">
                    <div class="strategy-number">12</div>
                    <h4>Tăng tương tác bằng cách theo sự dẫn dắt của trẻ</h4>
                </div>
                <div class="strategy-content">
                    <div class="core-principle">
                        <h5><i class="fas fa-handshake"></i> Nguyên tắc cốt lõi:</h5>
                        <p><strong>Làm theo sự dẫn dắt của trẻ tốt hơn là hướng dẫn cho trẻ.</strong></p>
                    </div>
                    
                    <div class="benefits">
                        <h5><i class="fas fa-star"></i> Lợi ích của chiến lược này:</h5>
                        <ul>
                            <li>Cho phép trẻ học cách giao tiếp khi chơi/làm việc với người khác</li>
                            <li>Tăng sự tương tác của trẻ</li>
                            <li>Trẻ khi trong vai trò dẫn dắt sẽ chú ý vào hoạt động hơn</li>
                            <li>Tập trung hơn vào cùng một thứ với người lớn</li>
                            <li>Học được cách tự lựa chọn</li>
                        </ul>
                    </div>
                    
                    <div class="positioning">
                        <h5><i class="fas fa-user-friends"></i> Vị trí của người lớn:</h5>
                        <div class="positioning-guide">
                            <p><strong>Cần ở vị trí mặt đối mặt với trẻ</strong></p>
                            <div class="positioning-benefits">
                                <ul>
                                    <li>Người lớn sẽ dễ dàng quan sát xem đứa trẻ đang hứng thú với cái gì</li>
                                    <li>Giúp trẻ tương tác mắt - một việc thường khó khăn với trẻ tự kỷ</li>
                                    <li>Ở ngang tầm với trẻ giúp trẻ dễ dàng nhìn thấy biểu hiện nét mặt đa dạng</li>
                                    <li>Trẻ tự kỷ thường khó hiểu những hành vi giao tiếp phi ngôn ngữ trong hội thoại</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="expected-progress">
                        <h5><i class="fas fa-chart-line"></i> Tiến bộ mong đợi:</h5>
                        <p>Trẻ sẽ dần dần quen với việc có người lớn chơi cùng ngang tầm với trẻ và sẽ bắt đầu đoán trước sự hiện diện của họ, tìm kiếm họ khi họ không có ở đó.</p>
                    </div>
                    
                    <div class="mirroring-technique">
                        <h5><i class="fas fa-mirror"></i> Kỹ thuật bắt chước:</h5>
                        <div class="mirroring-explanation">
                            <p><strong>Bắt trước hành động và lời nói của trẻ sẽ giúp trẻ tham gia vào những tương tác hai chiều.</strong></p>
                            
                            <div class="mirroring-examples">
                                <h6>Ví dụ về bắt chước:</h6>
                                <ul>
                                    <li><strong>Hành động:</strong> Nếu trẻ đập cái muỗng, và người lớn cũng làm vậy, có thể trẻ sẽ chú ý đến người lớn</li>
                                    <li><strong>Âm thanh:</strong> Bắt chước những âm thanh mà trẻ tạo ra</li>
                                    <li><strong>Hành vi cảm giác:</strong> Bắt chước những hành vi như đập tay/xoay vòng vòng</li>
                                </ul>
                            </div>
                            
                            <div class="progression">
                                <p><strong>Tiến trình:</strong></p>
                                <ol>
                                    <li>Khi trẻ thấy người lớn bắt chước hành động của trẻ, trẻ có thể sẽ bắt chước lại</li>
                                    <li>Điều này tạo ra cơ hội cho người lớn thêm điều gì đó mới mẻ vào cuộc trao đổi</li>
                                    <li>Bắt đầu dạy trẻ biết bắt chước đối tác</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    
                    <div class="unconventional-play">
                        <h5><i class="fas fa-puzzle-piece"></i> Chơi không theo cách thông thường:</h5>
                        <div class="unconventional-examples">
                            <p><strong>Khi trẻ tự kỷ không thích chơi với đồ chơi đang có nữa, hoặc thích xếp đồ chơi thành hàng hơn là chơi với chúng, vẫn có cơ hội để giao tiếp và tương tác.</strong></p>
                            
                            <div class="play-examples">
                                <div class="play-example">
                                    <h6><i class="fas fa-car"></i> Ví dụ 1: Xếp ô tô thành hàng</h6>
                                    <p><strong>Tình huống:</strong> Trẻ xếp các ô tô đồ chơi thành hàng</p>
                                    <p><strong>Cách tham gia:</strong> Người lớn có thể tham gia hoạt động bằng cách đưa cho trẻ từng chiếc ô tô</p>
                                    <p><strong>Kết quả:</strong> Người lớn đóng một phần trong trò chơi và đứa trẻ phải để họ tham gia vào những gì trẻ đang làm</p>
                                </div>
                                
                                <div class="play-example">
                                    <h6><i class="fas fa-basketball"></i> Ví dụ 2: Ném đồ chơi</h6>
                                    <p><strong>Tình huống:</strong> Trẻ chỉ thích ném đồ chơi xuống sàn</p>
                                    <p><strong>Cách tham gia:</strong> Người lớn có thể dùng một cái rổ để nhặt chúng trước khi đưa lại cho trẻ</p>
                                    <p><strong>Kết quả:</strong> Thiết lập một kiểu tương tác và giao tiếp với trẻ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Takeaways -->
            <div class="takeaways-section">
                <h3><i class="fas fa-key"></i> Điểm quan trọng cần nhớ</h3>
                <div class="takeaway-grid">
                    <div class="takeaway-item">
                        <i class="fas fa-clock"></i>
                        <p><strong>Kiên nhẫn</strong><br>Cho trẻ thời gian để phản ứng và giao tiếp</p>
                    </div>
                    <div class="takeaway-item">
                        <i class="fas fa-handshake"></i>
                        <p><strong>Theo dẫn dắt của trẻ</strong><br>Làm cộng sự thay vì làm người lãnh đạo</p>
                    </div>
                    <div class="takeaway-item">
                        <i class="fas fa-heart"></i>
                        <p><strong>Kiên trì</strong><br>Tương tác tức giận vẫn tốt hơn không tương tác</p>
                    </div>
                    <div class="takeaway-item">
                        <i class="fas fa-puzzle-piece"></i>
                        <p><strong>Tạo cơ hội</strong><br>Thiết lập tình huống để trẻ cần giao tiếp</p>
                    </div>
                </div>
            </div>
            
            <div class="expert-section">
                <div class="expert-info">
                    <h3><i class="fas fa-user-md"></i> Thông tin chuyên gia</h3>
                    <div class="expert-details">
                        <p><strong>Nguồn:</strong> Philippa Pettitt, Trung Tâm Hand in Hand Foundation</p>
                        <p><strong>Chuyên môn:</strong> Can thiệp và phát triển giao tiếp cho trẻ có rối loạn phổ tự kỷ</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer-pointing">

            <button onclick="shareAutismCommunicationDocument()" class="btn-share" style="border-color: #673ab7; color: #673ab7;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Communication and Interaction Modal -->
<div id="communicationInteractionModal" class="pointing-modal" style="display: none;">
    <div class="pointing-modal-content">
        <div class="pointing-modal-header">
            <span class="close-pointing" onclick="closeCommunicationInteractionModal()">&times;</span>
            <h2 style="color: #4caf50;">
                <i class="fas fa-handshake"></i> Giao tiếp và tương tác là gì?
            </h2>
            <div class="modal-description">
                <p>Hiểu rõ bản chất của giao tiếp và tương tác, từ giao tiếp phi ngôn ngữ đến 4 giai đoạn phát triển theo chương trình Hanen</p>
            </div>
        </div>
        
        <div class="pointing-modal-body">
            <!-- Basic Definitions -->
            <div class="content-section">
                <div class="definition-box">
                    <h3><i class="fas fa-lightbulb"></i> Định nghĩa cơ bản</h3>
                    
                    <div class="definition-item">
                        <h4><i class="fas fa-comment"></i> Giao tiếp</h4>
                        <p>Giao tiếp xảy ra khi một người gửi thông điệp đến người khác, có thể bằng ngôn từ hoặc phi ngôn từ (cử chỉ, ánh mắt, nét mặt, hành động…).</p>
                    </div>
                    
                    <div class="definition-item">
                        <h4><i class="fas fa-handshake"></i> Tương tác</h4>
                        <p>Tương tác là quá trình hai người cùng trao đổi qua lại – ví dụ giữa một người lớn và một đứa trẻ – để tạo nên một cuộc hội thoại hai chiều.</p>
                    </div>
                </div>
            </div>

            <!-- Challenges for Autism Children -->
            <div class="content-section">
                <div class="challenge-box">
                    <h3><i class="fas fa-exclamation-triangle"></i> Thách thức với trẻ tự kỷ</h3>
                    <ul>
                        <li>Đa số trẻ em rối loạn phổ tự kỷ (RLPTK) gặp khó khăn trong tương tác xã hội</li>
                        <li>Để duy trì được một cuộc tương tác, trẻ cần biết chủ động đáp lại khi được hỏi, hoặc tự bắt đầu một cuộc hội thoại</li>
                        <li>Nhiều trẻ chỉ thể hiện khả năng giao tiếp khi có nhu cầu cụ thể (ví dụ: muốn bánh, hộp sữa, đồ chơi…)</li>
                        <li>Chưa biết sử dụng giao tiếp để chia sẻ cảm xúc hay suy nghĩ</li>
                    </ul>
                </div>
            </div>

            <!-- Non-verbal Communication -->
            <div class="content-section">
                <div class="nonverbal-section">
                    <h3><i class="fas fa-hand-paper"></i> Giao tiếp không chỉ bằng lời nói</h3>
                    
                    <div class="key-insight">
                        <p><strong>Giao tiếp và tương tác không nhất thiết phải có ngôn ngữ.</strong></p>
                        <p>Nhiều trẻ tự kỷ hoặc chậm phát triển ngôn ngữ ngại sử dụng lời nói, do đó, các hình thức giao tiếp phi ngôn ngữ (ánh mắt, cử chỉ, hình ảnh…) cần được thiết lập trước, giúp trẻ từng bước phát triển ngôn ngữ sau này.</p>
                    </div>
                </div>
            </div>

            <!-- Understanding Child Communication -->
            <div class="content-section">
                <div class="understanding-section">
                    <h3><i class="fas fa-heart"></i> Thấu hiểu cách trẻ giao tiếp</h3>
                    
                    <div class="parent-challenges">
                        <h4><i class="fas fa-users"></i> Thách thức của phụ huynh:</h4>
                        <ul>
                            <li>Phụ huynh thường cảm thấy khó tương tác hoặc giao tiếp với con và không biết phải bắt đầu từ đâu</li>
                            <li>Trẻ có thể không phản ứng khi được gọi tên, không nghe theo lời, hoặc tỏ ra thờ ơ với các nỗ lực giao tiếp của người khác</li>
                        </ul>
                    </div>
                    
                    <div class="solution-approach">
                        <h4><i class="fas fa-arrow-right"></i> Giải pháp:</h4>
                        <ul>
                            <li>Hãy tận dụng những cơ hội hàng ngày và trong vui chơi để khuyến khích trẻ tương tác</li>
                            <li>Quan sát kỹ cách con đang giao tiếp, từ đó phát triển trên nền tảng điểm mạnh của con</li>
                            <li>Nếu trẻ chưa sử dụng âm thanh hoặc lời nói, thay vì chỉ nói với trẻ, hãy thêm cử chỉ, điệu bộ, ánh mắt để cùng giao tiếp</li>
                        </ul>
                    </div>
                    
                    <div class="communication-forms">
                        <h4><i class="fas fa-list"></i> Trẻ có thể dùng nhiều hình thức khác nhau để truyền đạt nhu cầu:</h4>
                        <div class="forms-grid">
                            <div class="form-item">
                                <i class="fas fa-baby"></i>
                                <span>Khóc</span>
                            </div>
                            <div class="form-item">
                                <i class="fas fa-hand-holding"></i>
                                <span>Kéo tay người lớn đến vật mong muốn</span>
                            </div>
                            <div class="form-item">
                                <i class="fas fa-eye"></i>
                                <span>Nhìn chằm chằm vào vật</span>
                            </div>
                            <div class="form-item">
                                <i class="fas fa-hand-point-right"></i>
                                <span>Với tay</span>
                            </div>
                            <div class="form-item">
                                <i class="fas fa-images"></i>
                                <span>Sử dụng hình ảnh hoặc thẻ biểu tượng</span>
                            </div>
                            <div class="form-item">
                                <i class="fas fa-repeat"></i>
                                <span>Nhại lời (echolalia)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Echolalia Section -->
            <div class="content-section">
                <div class="echolalia-section">
                    <h3><i class="fas fa-redo-alt"></i> Nhại lời – Bước đầu của phát triển giao tiếp</h3>
                    
                    <div class="definition">
                        <p><strong>Nhại lời</strong> là việc trẻ lặp lại lời của người khác, đôi khi chưa hiểu ý nghĩa hoặc chưa có mục đích giao tiếp rõ ràng.</p>
                    </div>
                    
                    <div class="positive-sign">
                        <p><strong>Tuy nhiên, đây là một dấu hiệu tích cực:</strong> nó cho thấy kỹ năng ngôn ngữ và giao tiếp đang dần hình thành.</p>
                    </div>
                    
                    <div class="development-example">
                        <h4><i class="fas fa-example"></i> Ví dụ phát triển theo thời gian:</h4>
                        <div class="example-scenario">
                            <div class="step">
                                <span class="step-number">1</span>
                                <p>Nghe người lớn hỏi: "Con muốn uống gì?"</p>
                            </div>
                            <div class="step">
                                <span class="step-number">2</span>
                                <p>Sau này, trẻ có thể tự nói: "Uống gì?" để thể hiện nhu cầu của mình</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Understanding Why -->
            <div class="content-section">
                <div class="why-section">
                    <h3><i class="fas fa-question-circle"></i> Hiểu "vì sao" trẻ giao tiếp</h3>
                    <p>Để hỗ trợ trẻ hiệu quả, người lớn không chỉ cần biết <strong>"cách trẻ giao tiếp"</strong> mà còn phải hiểu <strong>"vì sao trẻ giao tiếp."</strong></p>
                    <p>Khi nắm được mục đích của giao tiếp, phụ huynh có thể giúp trẻ tìm thêm nhiều cách và nhiều lý do hơn để chủ động giao tiếp.</p>
                </div>
            </div>

            <!-- Two Types of Communication -->
            <div class="content-section">
                <div class="communication-types">
                    <h3><i class="fas fa-exchange-alt"></i> Hai kiểu giao tiếp chính</h3>
                    
                    <div class="type-item">
                        <div class="type-header">
                            <i class="fas fa-seedling"></i>
                            <h4>Giao tiếp tiền chủ ý (Pre-intentional communication)</h4>
                        </div>
                        <div class="type-content">
                            <p><strong>Định nghĩa:</strong> Khi trẻ nói hoặc làm điều gì mà chưa có ý định tác động đến người khác.</p>
                            <p><strong>Mục đích:</strong> Thường dùng để tự làm dịu, tự kích thích giác quan, hoặc phản ứng cảm xúc (vui/buồn).</p>
                        </div>
                    </div>
                    
                    <div class="type-item">
                        <div class="type-header">
                            <i class="fas fa-bullseye"></i>
                            <h4>Giao tiếp có chủ ý (Intentional communication)</h4>
                        </div>
                        <div class="type-content">
                            <p><strong>Định nghĩa:</strong> Khi trẻ hành động với mục đích gửi thông điệp đến người khác (ví dụ: yêu cầu, phản đối, chia sẻ…).</p>
                            <p><strong>Ý nghĩa:</strong> Bước chuyển từ tiền chủ ý sang có chủ ý là một cột mốc quan trọng trong phát triển giao tiếp của trẻ tự kỷ.</p>
                        </div>
                    </div>
                    
                    <div class="spectrum-info">
                        <h4><i class="fas fa-chart-line"></i> Phổ liên tục (Theo Sussman, 1999):</h4>
                        <div class="spectrum-diagram">
                            <div class="spectrum-end">
                                <strong>Một đầu:</strong> Những trẻ chỉ giao tiếp để đạt được điều mình muốn
                            </div>
                            <div class="spectrum-arrow">↔</div>
                            <div class="spectrum-end">
                                <strong>Đầu kia:</strong> Những trẻ biết giao tiếp vì nhiều lý do hơn – để đặt câu hỏi, nhận xét hoặc thể hiện sự thân thiện
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 Stages of Development -->
            <div class="content-section">
                <div class="stages-section">
                    <h3><i class="fas fa-layer-group"></i> 4 Giai đoạn phát triển giao tiếp (Theo chương trình Hanen)</h3>
                    
                    <div class="factors-info">
                        <h4><i class="fas fa-info-circle"></i> Mức độ giao tiếp của trẻ phụ thuộc vào:</h4>
                        <ul>
                            <li>Khả năng tương tác với người khác</li>
                            <li>Phương thức và lý do giao tiếp</li>
                            <li>Mức độ hiểu ngôn ngữ của trẻ</li>
                        </ul>
                    </div>
                    
                    <!-- Stage 1 -->
                    <div class="stage-item stage-1">
                        <div class="stage-header">
                            <div class="stage-icon">🧩</div>
                            <h4>Giai đoạn 1 – "Một mình" (The Own Agenda)</h4>
                        </div>
                        <div class="stage-content">
                            <ul>
                                <li>Trẻ chơi một mình, ít quan tâm đến người khác</li>
                                <li>Giao tiếp chủ yếu là tiền chủ ý</li>
                                <li>Hầu hết trẻ mới được chẩn đoán tự kỷ đều ở giai đoạn này</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Stage 2 -->
                    <div class="stage-item stage-2">
                        <div class="stage-header">
                            <div class="stage-icon">🤲</div>
                            <h4>Giai đoạn 2 – "Người yêu cầu" (Requester / Social Partner)</h4>
                        </div>
                        <div class="stage-content">
                            <ul>
                                <li>Trẻ bắt đầu nhận ra hành động của mình ảnh hưởng đến người khác</li>
                                <li>Trẻ có thể kéo tay người lớn, đưa vật hoặc chỉ vào đồ vật để thể hiện điều mình muốn</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Stage 3 -->
                    <div class="stage-item stage-3">
                        <div class="stage-header">
                            <div class="stage-icon">🗨️</div>
                            <h4>Giai đoạn 3 – "Người giao tiếp sớm" (Early Communicator / Language Partner)</h4>
                        </div>
                        <div class="stage-content">
                            <ul>
                                <li>Trẻ biết duy trì tương tác lâu hơn</li>
                                <li>Bắt đầu nhại lời hoặc chỉ vào đồ vật</li>
                                <li>Chuyển ánh nhìn giữa người và vật – dấu hiệu của tương tác hai chiều</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Stage 4 -->
                    <div class="stage-item stage-4">
                        <div class="stage-header">
                            <div class="stage-icon">💬</div>
                            <h4>Giai đoạn 4 – "Đối tác hội thoại" (Conversation Partner)</h4>
                        </div>
                        <div class="stage-content">
                            <ul>
                                <li>Trẻ sử dụng lời nói để giao tiếp, có thể tham gia hội thoại đơn giản</li>
                                <li>Tuy nhiên, trẻ vẫn có thể gặp khó khăn trong môi trường mới</li>
                                <li>Thường dùng cụm từ học thuộc hoặc nói chen (speaking over)</li>
                                <li>Chưa tuân thủ quy tắc luân phiên hội thoại</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expert Information -->
            <div class="expert-section">
                <div class="expert-info">
                    <h3><i class="fas fa-user-md"></i> Thông tin chuyên gia</h3>
                    <div class="expert-details">
                        <p><strong>Nguồn:</strong> Philippa Pettitt – Trung tâm Hand in Hand Foundation biên dịch và biên soạn</p>
                        <p><strong>Chương trình:</strong> Hanen - Chương trình can thiệp giao tiếp cho trẻ tự kỷ</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer-pointing">

            <button onclick="shareCommunicationInteractionDocument()" class="btn-share" style="border-color: #4caf50; color: #4caf50;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Food Structure Modal -->
<div id="foodStructureModal" class="pointing-modal" style="display: none;">
    <div class="pointing-modal-content">
        <div class="pointing-modal-header">
            <span class="close-pointing" onclick="closeFoodStructureModal()">&times;</span>
            <h2 style="color: #ff9800;">
                <i class="fas fa-utensils"></i> Nhai và cấu trúc thức ăn
            </h2>
            <div class="modal-description">
                <p>Hướng dẫn chi tiết về cấu trúc thức ăn theo độ tuổi từ 6-12 tháng và giải pháp cho trẻ lớn đã bỏ qua cấu trúc</p>
            </div>
        </div>
        
        <div class="pointing-modal-body">
            <!-- Case Study Introduction -->
            <div class="content-section">
                <div class="case-study-box">
                    <h3><i class="fas fa-envelope"></i> Câu hỏi từ phụ huynh</h3>
                    <div class="parent-message">
                        <p><strong>Tin nhắn từ một người mẹ:</strong></p>
                        <blockquote>
                            "Con đã gần 17 tháng vẫn còn ăn cháo, nhưng chỉ nuốt trọng. Do sợ con không ăn thô được, ông bà giới thiệu cháo cho con đến bây giờ, bây giờ giới thiệu cơm cho con thì con nhè ra, nên con vẫn ăn cháo. Liệu có nên tiếp tục cho con ăn cháo hay phải tập bé ăn cơm?"
                        </blockquote>
                    </div>
                </div>
            </div>

            <!-- Expert Response -->
            <div class="content-section">
                <div class="expert-response">
                    <h3><i class="fas fa-stethoscope"></i> Trả lời từ chuyên gia</h3>
                    
                    <div class="response-insight">
                        <p><strong>Nếu bé đã lỡ bị bỏ qua cấu trúc thì cha mẹ đừng quá ngạc nhiên là bé không có động tác nhai và hay nhè, không muốn ăn.</strong></p>
                    </div>
                    
                    <div class="guidelines-reference">
                        <h4><i class="fas fa-book"></i> Theo hướng dẫn của BYT Anh:</h4>
                        <ul>
                            <li><strong>Từ 7 tháng tuổi:</strong> Chuyển sang dạng cấu trúc lumpy</li>
                            <li><strong>Từ 10 tháng tuổi:</strong> Đã phải cần được giới thiệu cấu trúc diced</li>
                        </ul>
                    </div>
                    
                    <div class="consequences">
                        <h4><i class="fas fa-exclamation-triangle"></i> Hậu quả của việc kéo dài cấu trúc cháo loãng:</h4>
                        <ul>
                            <li>Trì hoãn khả năng sử dụng tốt các cơ để nhai</li>
                            <li>Trì hoãn nhận biết về cấu trúc thức ăn</li>
                            <li>Không phát triển vị giác</li>
                            <li>Việc biếng ăn cũng nằm trong hậu quả của việc trì hoãn này</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Solutions for Older Children -->
            <div class="content-section">
                <div class="solutions-section">
                    <h3><i class="fas fa-lightbulb"></i> Giải pháp cho các bé lớn đã bỏ qua cấu trúc</h3>
                    
                    <div class="main-approach">
                        <p><strong>Trường hợp của bé như trên vẫn nên tiếp tục cho bé ăn cháo.</strong> Tuy nhiên, song song với điều này, cha mẹ nên giới thiệu cấu trúc khối lớn cho bé tập nhận biết cấu trúc và phát triển cơ để nhai.</p>
                    </div>
                    
                    <div class="solution-types">
                        <h4><i class="fas fa-cubes"></i> 1. Cấu trúc khối lớn:</h4>
                        <div class="food-examples">
                            <div class="food-item">
                                <i class="fas fa-drumstick-bite"></i>
                                <span>Đùi gà chỉ có vài mẫu thịt để bé gặm</span>
                            </div>
                            <div class="food-item">
                                <i class="fas fa-fish"></i>
                                <span>Miếng cá để bé cắn</span>
                            </div>
                            <div class="food-item">
                                <i class="fas fa-carrot"></i>
                                <span>Rau củ nấu mềm để bé tập cắn và nhai</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="solution-types">
                        <h4><i class="fas fa-cookie-bite"></i> 2. Cấu trúc giòn và mỏng:</h4>
                        <p>Cha mẹ nên chọn cấu trúc có độ giòn và mỏng giới thiệu song song để bé có thể cắn vào nghe ran rắc.</p>
                        
                        <div class="sensory-considerations">
                            <h5><i class="fas fa-palette"></i> Lưu ý về cảm giác:</h5>
                            <ul>
                                <li>Thức ăn giới thiệu nên có 2-3 màu sắc khác nhau</li>
                                <li>Độ tuổi từ 1-2 tuổi, bé rất nhạy cảm với âm thanh và màu sắc thức ăn</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="important-note">
                        <h4><i class="fas fa-exclamation-circle"></i> Chú ý quan trọng:</h4>
                        <p><strong>2 cấu trúc lớn và giòn là giới thiệu riêng rẽ ở 2 dĩa khác nhau.</strong></p>
                        <p>Khi bé học dần cấu trúc và nhai, cha mẹ chuyển dần cháo sang cơm hạt hoặc mì nui, bỏ qua cơm nát.</p>
                    </div>
                </div>
            </div>

            <!-- Food Structure by Age -->
            <div class="content-section">
                <div class="age-structure-section">
                    <h3><i class="fas fa-chart-line"></i> Cấu trúc thức ăn theo độ tuổi</h3>
                    
                    <div class="expert-advice">
                        <p><strong>Tôi vẫn khuyên nếu ngay từ đầu cha mẹ cố gắng chuyển đúng cấu trúc thức ăn cho bé theo độ tuổi sẽ dễ dàng hơn cho bé làm quen với mùi vị, cấu trúc và không biếng ăn.</strong></p>
                    </div>
                    
                    <div class="teeth-myth">
                        <h4><i class="fas fa-tooth"></i> Quan niệm sai lầm về răng:</h4>
                        <p>Nhiều cha mẹ quan tâm đến việc bé không đủ răng thì chuyển cấu trúc có được không?</p>
                        
                        <div class="expert-answer">
                            <p><strong>Hiệp hội dinh dưỡng lâm sàng Anh và Viện Nhi khoa của Mỹ đã trả lời rằng:</strong></p>
                            <blockquote>
                                Cấu trúc thức ăn không phụ thuộc vào số răng bé có, mà nó liên quan đến sự phát triển não bộ theo độ tuổi.
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Age Structure -->
            <div class="content-section">
                <div class="detailed-structure">
                    <h3><i class="fas fa-baby"></i> Cấu trúc thức ăn chi tiết theo độ tuổi</h3>
                    
                    <!-- Stage 1: 6 months -->
                    <div class="age-stage stage-6months">
                        <div class="stage-header">
                            <div class="age-badge">6 tháng</div>
                            <h4>Từ bắt đầu ăn dặm - Hết 6 tháng tuổi</h4>
                        </div>
                        <div class="stage-content">
                            <div class="structure-type">
                                <h5><i class="fas fa-blender"></i> Cấu trúc: Puréed</h5>
                                <p>Cấu trúc thức ăn dặm nên ở dạng mịn, rây nhuyễn, có độ loãng, nhiều nước.</p>
                            </div>
                            
                            <div class="detailed-instructions">
                                <h5><i class="fas fa-utensils"></i> Hướng dẫn cụ thể:</h5>
                                <ul>
                                    <li><strong>Cháo:</strong> Tỷ lệ 1:10 (1 muỗng gạo : 10 muỗng nước)</li>
                                    <li><strong>Thịt cá rau củ:</strong> Xay nhuyễn, mịn và rây</li>
                                    <li><strong>Cách chế biến:</strong> Nấu cháo đúng tỷ lệ trước, sau đó trộn chung với thức ăn</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Stage 2: 7-9 months -->
                    <div class="age-stage stage-7to9months">
                        <div class="stage-header">
                            <div class="age-badge">7-9 tháng</div>
                            <h4>Từ 7 tháng tuổi - Hết 9 tháng tuổi</h4>
                        </div>
                        <div class="stage-content">
                            <div class="structure-type">
                                <h5><i class="fas fa-shapes"></i> Cấu trúc: Lumpy</h5>
                                <p>Cấu trúc thức ăn nên chuyển sang dạng cháo đặc hơn, ít loãng, có hình khối (không cần rây).</p>
                            </div>
                            
                            <div class="detailed-instructions">
                                <h5><i class="fas fa-utensils"></i> Hướng dẫn cụ thể:</h5>
                                <ul>
                                    <li><strong>Cháo:</strong> Đặc hơn, ít loãng, có hình khối</li>
                                    <li><strong>Thịt cá rau củ:</strong> Xay nát (không cần rây)</li>
                                    <li><strong>Đặc điểm:</strong> Bé bắt đầu học cảm nhận các khối thức ăn nhỏ</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Stage 3: 10-12 months -->
                    <div class="age-stage stage-10to12months">
                        <div class="stage-header">
                            <div class="age-badge">10-12 tháng</div>
                            <h4>Từ 10 tháng tuổi - Hết 12 tháng tuổi</h4>
                        </div>
                        <div class="stage-content">
                            <div class="structure-type">
                                <h5><i class="fas fa-dice"></i> Cấu trúc: Diced</h5>
                                <p>Cấu trúc thức ăn dặm nên là dạng cơm nát (cơm nấu dẻo, không quá sệt, cà nát bằng muỗng hoặc bằng tay).</p>
                            </div>
                            
                            <div class="detailed-instructions">
                                <h5><i class="fas fa-utensils"></i> Hướng dẫn cụ thể:</h5>
                                <ul>
                                    <li><strong>Cơm:</strong> Cơm nát (cơm nấu dẻo, cà nát bằng muỗng hoặc tay)</li>
                                    <li><strong>Thịt cá:</strong> Có thể cà nát bằng muỗng hoặc xé nát bằng tay</li>
                                    <li><strong>Rau củ:</strong> Cắt nhỏ, lát mỏng</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Stage 4: After 12 months -->
                    <div class="age-stage stage-after12months">
                        <div class="stage-header">
                            <div class="age-badge">12+ tháng</div>
                            <h4>Sau 12 tháng tuổi</h4>
                        </div>
                        <div class="stage-content">
                            <div class="structure-type">
                                <h5><i class="fas fa-check-circle"></i> Cấu trúc hoàn chỉnh</h5>
                                <p>Cấu trúc thức ăn bé đã hoàn chỉnh, bé có thể chuyển dần sang cơm hạt dẻo bình thường.</p>
                            </div>
                            
                            <div class="detailed-instructions">
                                <h5><i class="fas fa-utensils"></i> Hướng dẫn cụ thể:</h5>
                                <ul>
                                    <li><strong>Cơm:</strong> Cơm hạt dẻo bình thường</li>
                                    <li><strong>Thịt cá:</strong> Xé hoặc cắt nhỏ</li>
                                    <li><strong>Đa dạng:</strong> Có thể thay đổi cháo, cơm, mì bún để đa dạng cấu trúc</li>
                                </ul>
                                
                                <div class="future-benefits">
                                    <p><strong>Lợi ích:</strong> Khi bé đã quen và đổi đúng cấu trúc thì việc đa dạng sẽ làm bé làm quen dần với thức ăn người lớn sau này.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scientific Reference -->
            <div class="content-section">
                <div class="reference-section">
                    <h3><i class="fas fa-graduation-cap"></i> Tài liệu tham khảo</h3>
                    <div class="reference-item">
                        <p><strong>Dr. Harris, G. (2016)</strong> - Development of taste and food preferences in children. The Children's Hospital, Birmingham</p>
                    </div>
                </div>
            </div>

            <!-- Key Takeaways -->
            <div class="content-section">
                <div class="takeaways-section">
                    <h3><i class="fas fa-key"></i> Điểm quan trọng cần nhớ</h3>
                    <div class="takeaway-grid">
                        <div class="takeaway-item">
                            <i class="fas fa-clock"></i>
                            <p><strong>Đúng thời điểm</strong><br>Chuyển cấu trúc theo đúng độ tuổi não bộ</p>
                        </div>
                        <div class="takeaway-item">
                            <i class="fas fa-tooth"></i>
                            <p><strong>Không phụ thuộc răng</strong><br>Cấu trúc dựa trên phát triển não bộ</p>
                        </div>
                        <div class="takeaway-item">
                            <i class="fas fa-utensils"></i>
                            <p><strong>Riêng biệt</strong><br>Giới thiệu cấu trúc lớn và giòn ở 2 dĩa khác nhau</p>
                        </div>
                        <div class="takeaway-item">
                            <i class="fas fa-chart-line"></i>
                            <p><strong>Từng bước</strong><br>Puréed → Lumpy → Diced → Hoàn chỉnh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer-pointing">
            <button onclick="downloadFoodStructureGuide()" class="btn-download" style="background: #ff9800; color: white;">

            <button onclick="shareFoodStructureDocument()" class="btn-share" style="border-color: #ff9800; color: #ff9800;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<!-- Intensive Interaction Modal -->
<div id="intensiveInteractionModal" class="pointing-modal" style="display: none;">
    <div class="pointing-modal-content">
        <div class="pointing-modal-header">
            <span class="close-pointing" onclick="closeIntensiveInteractionModal()">&times;</span>
            <h2 style="color: #9c27b0;">
                <i class="fas fa-heart"></i> Chiến lược giao tiếp chuyên sâu (Intensive Interaction)
            </h2>
            <div class="modal-description">
                <p>Phương pháp tiếp cận đặc biệt để hỗ trợ những người gặp khó khăn nghiêm trọng trong giao tiếp. Tập trung xây dựng mối quan hệ hai chiều qua tín hiệu phi ngôn ngữ.</p>
            </div>
        </div>
        
        <div class="pointing-modal-body">
            <!-- Hero image và giới thiệu -->
            <div class="document-hero">
                <div class="hero-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/25.jpg" 
                         alt="Chiến lược giao tiếp chuyên sâu"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 300px; object-fit: cover; border-radius: 15px;">
                    <div class="fallback-image" style="display: none; width: 100%; height: 300px; background: linear-gradient(135deg, #f3e5f5, #e1bee7); border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 15px;">
                        <i class="fas fa-heart" style="font-size: 4em; color: #9c27b0;"></i>
                        <span style="color: #7b1fa2; font-size: 1.2em; font-weight: 600;">Giao tiếp chuyên sâu</span>
                    </div>
                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="intro-intensive">
                    <h3><i class="fas fa-heart-pulse"></i> Intensive Interaction là gì?</h3>
                    <p><strong>Intensive Interaction (Tương tác chuyên sâu)</strong> là phương pháp tiếp cận đặc biệt được thiết kế để hỗ trợ những người gặp khó khăn nghiêm trọng trong giao tiếp và học hỏi.</p>
                    <p>Phương pháp này tập trung vào việc <strong>xây dựng mối quan hệ hai chiều</strong> thông qua các tín hiệu phi ngôn ngữ như ánh mắt, cử chỉ, biểu cảm khuôn mặt và âm thanh.</p>
                </div>

                <div class="content-section target-groups">
                    <h3><i class="fas fa-users"></i> Đối tượng phù hợp</h3>
                    
                    <div class="target-group-grid">
                        <div class="target-group-card">
                            <div class="target-icon">
                                <i class="fas fa-child"></i>
                            </div>
                            <div class="target-content">
                                <h4>Trẻ chưa có ngôn ngữ</h4>
                                <p>Những trẻ chưa phát triển khả năng giao tiếp bằng lời nói</p>
                            </div>
                        </div>
                        
                        <div class="target-group-card">
                            <div class="target-icon">
                                <i class="fas fa-puzzle-piece"></i>
                            </div>
                            <div class="target-content">
                                <h4>Trẻ tự kỷ</h4>
                                <p>Rối loạn phổ tự kỷ (ASD) với khó khăn giao tiếp xã hội</p>
                            </div>
                        </div>
                        
                        <div class="target-group-card">
                            <div class="target-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div class="target-content">
                                <h4>PMLD</h4>
                                <p>Profound and Multiple Learning Disabilities - Khuyết tật học tập nghiêm trọng và đa dạng</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section principles">
                    <h3><i class="fas fa-compass"></i> 5 Nguyên tắc thực hiện</h3>
                    
                    <div class="principle-item">
                        <div class="principle-header">
                            <span class="principle-number">01</span>
                            <h4>Theo dẫn dắt của trẻ</h4>
                        </div>
                        <div class="principle-content">
                            <p><strong>Quan sát và phản hồi</strong> theo những gì trẻ quan tâm và thể hiện, thay vì áp đặt chương trình cố định.</p>
                            <div class="principle-example">
                                <strong>Ví dụ:</strong> Nếu trẻ nhìn vào tay bạn, hãy chú ý đến tay và tương tác qua cử chỉ tay.
                            </div>
                        </div>
                    </div>

                    <div class="principle-item">
                        <div class="principle-header">
                            <span class="principle-number">02</span>
                            <h4>Điều chỉnh theo phản hồi</h4>
                        </div>
                        <div class="principle-content">
                            <p><strong>Linh hoạt thay đổi</strong> cách tiếp cận dựa trên phản ứng của trẻ để duy trì sự tương tác tích cực.</p>
                            <div class="principle-example">
                                <strong>Ví dụ:</strong> Nếu trẻ tỏ ra khó chịu với âm thanh to, hãy chuyển sang âm thanh nhẹ nhàng hơn.
                            </div>
                        </div>
                    </div>

                    <div class="principle-item">
                        <div class="principle-header">
                            <span class="principle-number">03</span>
                            <h4>Tôn trọng ngôn ngữ cơ thể</h4>
                        </div>
                        <div class="principle-content">
                            <p><strong>Chú ý đến các tín hiệu phi ngôn ngữ</strong> như ánh mắt, cử chỉ, tư thế cơ thể của trẻ.</p>
                            <div class="principle-example">
                                <strong>Ví dụ:</strong> Khi trẻ quay mặt đi, hiểu rằng trẻ cần thời gian nghỉ ngơi.
                            </div>
                        </div>
                    </div>

                    <div class="principle-item">
                        <div class="principle-header">
                            <span class="principle-number">04</span>
                            <h4>Xây dựng mối quan hệ</h4>
                        </div>
                        <div class="principle-content">
                            <p><strong>Tập trung vào kết nối cảm xúc</strong> và sự tin tưởng thay vì chỉ dạy kỹ năng cụ thể.</p>
                            <div class="principle-example">
                                <strong>Ví dụ:</strong> Dành thời gian để trẻ cảm thấy thoải mái và an toàn trước khi mở rộng hoạt động.
                            </div>
                        </div>
                    </div>

                    <div class="principle-item">
                        <div class="principle-header">
                            <span class="principle-number">05</span>
                            <h4>Kiên nhẫn và bền bỉ</h4>
                        </div>
                        <div class="principle-content">
                            <p><strong>Không vội vàng</strong> mà cho phép quá trình phát triển diễn ra một cách tự nhiên theo thời gian.</p>
                            <div class="principle-example">
                                <strong>Ví dụ:</strong> Chấp nhận những khoảnh khắc im lặng như một phần của quá trình giao tiếp.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section interaction-stages">
                    <h3><i class="fas fa-stairs"></i> 2 Giai đoạn tương tác</h3>
                    
                    <div class="stage-container">
                        <div class="stage-item stage-primary">
                            <div class="stage-header">
                                <div class="stage-badge">Giai đoạn 1</div>
                                <h4>Xây dựng sự chú ý và kết nối</h4>
                            </div>
                            <div class="stage-content">
                                <div class="stage-description">
                                    <p><strong>Mục tiêu:</strong> Thiết lập sự chú ý lẫn nhau và tạo ra những khoảnh khắc kết nối đầu tiên.</p>
                                </div>
                                
                                <div class="stage-activities">
                                    <h5><i class="fas fa-play"></i> Hoạt động thực hiện:</h5>
                                    <ul class="activity-list">
                                        <li><strong>Bắt chước âm thanh:</strong> Nhái lại những âm thanh mà trẻ tạo ra</li>
                                        <li><strong>Phản chiếu cử chỉ:</strong> Bắt chước các động tác của trẻ một cách tự nhiên</li>
                                        <li><strong>Trao đổi ánh mắt:</strong> Tìm kiếm và duy trì giao tiếp bằng mắt</li>
                                        <li><strong>Chia sẻ không gian:</strong> Ngồi gần trẻ ở vị trí thoải mái</li>
                                    </ul>
                                </div>
                                
                                <div class="stage-video">
                                    <div class="video-placeholder">
                                        <i class="fas fa-play-circle"></i>
                                        <p><strong>Video minh họa:</strong> Intensive Interaction Foundation Course - Part 1</p>
                                        <small>Xem video để hiểu rõ cách thực hiện giai đoạn 1</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stage-item stage-secondary">
                            <div class="stage-header">
                                <div class="stage-badge">Giai đoạn 2</div>
                                <h4>Phát triển tương tác phức tạp</h4>
                            </div>
                            <div class="stage-content">
                                <div class="stage-description">
                                    <p><strong>Mục tiêu:</strong> Mở rộng và phát triển các hình thức tương tác phong phú hơn.</p>
                                </div>
                                
                                <div class="stage-activities">
                                    <h5><i class="fas fa-rocket"></i> Hoạt động nâng cao:</h5>
                                    <ul class="activity-list">
                                        <li><strong>Trò chơi lượt:</strong> Tạo ra những trò chơi đơn giản với quy tắc lượt chơi</li>
                                        <li><strong>Biến tấu âm thanh:</strong> Thử nghiệm các âm thanh và nhịp điệu khác nhau</li>
                                        <li><strong>Tương tác vật thể:</strong> Sử dụng đồ vật để tăng cường tương tác</li>
                                        <li><strong>Mở rộng thời gian:</strong> Kéo dài thời gian tương tác theo khả năng của trẻ</li>
                                    </ul>
                                </div>
                                
                                <div class="stage-video">
                                    <div class="video-placeholder">
                                        <i class="fas fa-play-circle"></i>
                                        <p><strong>Video minh họa:</strong> Advanced Intensive Interaction Techniques</p>
                                        <small>Kỹ thuật nâng cao cho giai đoạn 2</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section benefits">
                    <h3><i class="fas fa-star"></i> Lợi ích của Intensive Interaction</h3>
                    
                    <div class="benefit-grid">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="benefit-text">
                                <h4>Kết nối cảm xúc</h4>
                                <p>Tạo mối liên kết sâu sắc giữa người thực hiện và trẻ</p>
                            </div>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="benefit-text">
                                <h4>Cải thiện chú ý</h4>
                                <p>Tăng khả năng tập trung và chú ý của trẻ</p>
                            </div>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="benefit-text">
                                <h4>Kỹ năng xã hội</h4>
                                <p>Phát triển nhận thức xã hội và khả năng tương tác</p>
                            </div>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <div class="benefit-text">
                                <h4>Tăng hạnh phúc</h4>
                                <p>Mang lại niềm vui và sự thoải mái cho trẻ</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="conclusion-golden intensive-conclusion">
                    <div class="conclusion-highlight">
                        <i class="fas fa-heart-pulse"></i>
                        <h3>Intensive Interaction - Kết nối từ trái tim</h3>
                    </div>
                    <div class="conclusion-content">
                        <p>💜 <strong>Intensive Interaction không chỉ là một phương pháp, mà là cách tiếp cận nhân văn</strong> giúp những người có khó khăn giao tiếp cảm nhận được sự yêu thương và hiểu biết.</p>
                        <p><strong>Hãy kiên nhẫn, theo dẫn dắt của trẻ và tin tưởng vào sức mạnh của kết nối con người!</strong></p>
                    </div>
                    
                    <div class="call-to-action">
                        <div class="cta-content">
                            <h4><i class="fas fa-graduation-cap"></i> Học thêm về Intensive Interaction</h4>
                            <p>Liên hệ Hand in Hand Foundation để tham gia khóa đào tạo chuyên sâu về phương pháp Intensive Interaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">

            <button onclick="shareIntensiveInteractionDocument()" class="btn-share" style="border-color: #9c27b0; color: #9c27b0;">
                <i class="fas fa-share-alt"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<style>
/* Page Styles */
.tai-lieu-page {
    font-family: 'Inter', sans-serif;
}

/* Pointing Document Modal Styles */
.pointing-modal#pointingModal .document-content-detailed {
    line-height: 1.6;
    color: #333;
}

.pointing-modal#pointingModal .intro-section,
.pointing-modal#pointingModal .content-section {
    background: white;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border: 1px solid #e0e0e0;
}

.pointing-modal#pointingModal .intro-section h3,
.pointing-modal#pointingModal .content-section h3 {
    color: #2c5282;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.4em;
}

.pointing-modal#pointingModal .pointing-types {
    margin-top: 20px;
}

.pointing-modal#pointingModal .pointing-types h4 {
    color: #4a5568;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.pointing-modal#pointingModal .type-card {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 15px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border-left: 4px solid #4299e1;
}

.pointing-modal#pointingModal .type-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    flex-shrink: 0;
}

.pointing-modal#pointingModal .type-icon.protoimperative {
    background: linear-gradient(135deg, #f093fb, #f5576c);
}

.pointing-modal#pointingModal .type-icon.protodeclarative {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
}

.pointing-modal#pointingModal .type-content h5 {
    color: #2d3748;
    margin-bottom: 8px;
    font-size: 1.1em;
}

.pointing-modal#pointingModal .asd-characteristics {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    margin-top: 20px;
}

.pointing-modal#pointingModal .characteristic-item {
    background: #fff5f5;
    border-radius: 10px;
    padding: 15px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    border-left: 4px solid #f56565;
}

.pointing-modal#pointingModal .char-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 16px;
    flex-shrink: 0;
}

.pointing-modal#pointingModal .char-icon.delay {
    background: #f6ad55;
}

.pointing-modal#pointingModal .char-icon.missing {
    background: #f56565;
}

.pointing-modal#pointingModal .char-icon.no-eye-contact {
    background: #ed64a6;
}

.pointing-modal#pointingModal .char-icon.request-only {
    background: #9f7aea;
}

.pointing-modal#pointingModal .important-note {
    background: linear-gradient(135deg, #fed7d7, #feb2b2);
    border-radius: 10px;
    padding: 20px;
    margin-top: 20px;
    border: 1px solid #fc8181;
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.pointing-modal#pointingModal .important-note i {
    color: #c53030;
    font-size: 20px;
    margin-top: 2px;
}

.pointing-modal#pointingModal .importance-points {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.pointing-modal#pointingModal .importance-item {
    background: #edf2f7;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border-left: 4px solid #4299e1;
}

.pointing-modal#pointingModal .importance-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    flex-shrink: 0;
}

.pointing-modal#pointingModal .importance-icon.early {
    background: linear-gradient(135deg, #667eea, #764ba2);
}

.pointing-modal#pointingModal .importance-icon.timeline {
    background: linear-gradient(135deg, #f093fb, #f5576c);
}

.pointing-modal#pointingModal .importance-icon.screening {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
}

.pointing-modal#pointingModal .importance-content h5 {
    color: #2d3748;
    margin-bottom: 8px;
    font-size: 1.1em;
}

.pointing-modal#pointingModal .development-roles {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.pointing-modal#pointingModal .role-card {
    background: #f7fafc;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    border: 2px solid #e2e8f0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.pointing-modal#pointingModal .role-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.pointing-modal#pointingModal .role-card.language {
    border-color: #4299e1;
}

.pointing-modal#pointingModal .role-card.attention {
    border-color: #48bb78;
}

.pointing-modal#pointingModal .role-card.intention {
    border-color: #ed8936;
}

.pointing-modal#pointingModal .role-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    margin: 0 auto 15px auto;
}

.pointing-modal#pointingModal .role-card.language .role-icon {
    background: linear-gradient(135deg, #4299e1, #3182ce);
}

.pointing-modal#pointingModal .role-card.attention .role-icon {
    background: linear-gradient(135deg, #48bb78, #38a169);
}

.pointing-modal#pointingModal .role-card.intention .role-icon {
    background: linear-gradient(135deg, #ed8936, #dd6b20);
}

.pointing-modal#pointingModal .role-content h5 {
    color: #2d3748;
    margin-bottom: 10px;
    font-size: 1.1em;
}

.pointing-modal#pointingModal .encouragement-methods {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.pointing-modal#pointingModal .method-item {
    background: #f0fff4;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border-left: 4px solid #48bb78;
}

.pointing-modal#pointingModal .method-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    flex-shrink: 0;
}

.pointing-modal#pointingModal .method-icon.setup {
    background: linear-gradient(135deg, #667eea, #764ba2);
}

.pointing-modal#pointingModal .method-icon.modeling {
    background: linear-gradient(135deg, #f093fb, #f5576c);
}

.pointing-modal#pointingModal .method-icon.reward {
    background: linear-gradient(135deg, #ffecd2, #fcb69f);
}

.pointing-modal#pointingModal .method-icon.eye-contact {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
}

.pointing-modal#pointingModal .method-content h5 {
    color: #22543d;
    margin-bottom: 8px;
    font-size: 1.1em;
}

.pointing-modal#pointingModal .intervention-methods {
    background: #edf2f7;
    border-radius: 10px;
    padding: 20px;
    margin-top: 25px;
}

.pointing-modal#pointingModal .intervention-methods h4 {
    color: #2d3748;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.pointing-modal#pointingModal .methods-list {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.pointing-modal#pointingModal .method-tag {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9em;
}

.pointing-modal#pointingModal .method-tag.esdm {
    background: linear-gradient(135deg, #4299e1, #3182ce);
}

.pointing-modal#pointingModal .method-tag.jasper {
    background: linear-gradient(135deg, #48bb78, #38a169);
}

.pointing-modal#pointingModal .method-tag.floortime {
    background: linear-gradient(135deg, #ed8936, #dd6b20);
}

.pointing-modal#pointingModal .conclusion-section {
    background: linear-gradient(135deg, #e6fffa, #b2f5ea);
    border-radius: 15px;
    padding: 30px;
    margin-top: 30px;
    border: 2px solid #4fd1c7;
}

.pointing-modal#pointingModal .conclusion-highlight {
    text-align: center;
    margin-bottom: 25px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.pointing-modal#pointingModal .conclusion-highlight i {
    font-size: 3em;
    color: #319795;
}

.pointing-modal#pointingModal .conclusion-highlight h4 {
    color: #234e52;
    font-size: 1.3em;
    margin: 0;
    text-align: center;
}

.pointing-modal#pointingModal .key-takeaways {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.pointing-modal#pointingModal .takeaway-item {
    background: white;
    border-radius: 10px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.pointing-modal#pointingModal .takeaway-item i {
    color: #319795;
    font-size: 20px;
    margin-top: 2px;
}

@media (max-width: 768px) {
    .pointing-modal#pointingModal .asd-characteristics,
    .pointing-modal#pointingModal .importance-points,
    .pointing-modal#pointingModal .development-roles,
    .pointing-modal#pointingModal .encouragement-methods,
    .pointing-modal#pointingModal .key-takeaways {
        grid-template-columns: 1fr;
    }
    
    .pointing-modal#pointingModal .type-card,
    .pointing-modal#pointingModal .characteristic-item,
    .pointing-modal#pointingModal .importance-item,
    .pointing-modal#pointingModal .method-item {
        flex-direction: column;
        text-align: center;
    }
    
    .pointing-modal#pointingModal .conclusion-highlight {
        text-align: center;
    }
    
    .pointing-modal#pointingModal .methods-list {
        justify-content: center;
    }
}

.hero-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 120px 0 80px;
    color: white;
    text-align: center;
}

.hero-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.hero-content h1 {
    font-size: 3em;
    margin-bottom: 20px;
    font-weight: 700;
}

.hero-content h1 i {
    margin-right: 15px;
    color: #ffd700;
}

.hero-content p {
    font-size: 1.2em;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
}

.featured-section {
    padding: 80px 0;
    background: #f8fafc;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.featured-document {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 40px;
}

.featured-content {
    display: flex;
    align-items: center;
    gap: 25px;
    flex: 1;
}

.featured-image {
    flex-shrink: 0;
}

.featured-image img {
    transition: transform 0.3s ease;
}

.featured-image img:hover {
    transform: scale(1.05);
}

.featured-text h2 {
    color: #1e293b;
    font-size: 1.8em;
    margin-bottom: 10px;
}

.featured-text p {
    color: #64748b;
    margin-bottom: 15px;
    line-height: 1.6;
}

.featured-meta {
    display: flex;
    gap: 20px;
}

.featured-meta span {
    color: #94a3b8;
    font-size: 0.9em;
    display: flex;
    align-items: center;
    gap: 5px;
}

.featured-actions {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.btn {
    padding: 12px 25px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    justify-content: center;
}

.btn-primary {
    background: #667eea;
    color: white;
}

.btn-primary:hover {
    background: #5a67d8;
    transform: translateY(-2px);
}

.btn-secondary {
    background: white;
    color: #667eea;
    border: 2px solid #667eea;
}

.btn-secondary:hover {
    background: #667eea;
    color: white;
}

.categories-section {
    padding: 80px 0;
}

.section-title {
    text-align: center;
    font-size: 2.5em;
    color: #1e293b;
    margin-bottom: 50px;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.category-card {
    background: white;
    padding: 35px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    text-align: center;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    border-color: #667eea;
}

.category-icon {
    background: linear-gradient(135deg, #667eea, #764ba2);
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    color: white;
    font-size: 1.8em;
}

.category-card h3 {
    color: #1e293b;
    font-size: 1.3em;
    margin-bottom: 15px;
}

.category-card p {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 20px;
}

.category-count {
    background: #f1f5f9;
    color: #475569;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 0.9em;
    font-weight: 600;
    display: inline-block;
}

.newsletter-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 80px 0;
    color: white;
}

.newsletter-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.newsletter-content h2 {
    font-size: 2.2em;
    margin-bottom: 15px;
}

.newsletter-content p {
    font-size: 1.1em;
    opacity: 0.9;
    margin-bottom: 30px;
}

.newsletter-form .form-group {
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
    font-size: 1em;
}

.newsletter-form button {
    padding: 15px 25px;
    background: white;
    color: #667eea;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
}

.newsletter-form button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255,255,255,0.3);
}

/* Modal Styles */
.pointing-modal {
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
    padding: 20px;
}

.modal-content-pointing {
    background: white;
    border-radius: 20px;
    max-width: 800px;
    width: 100%;
    max-height: 90vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.modal-header-pointing {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 30px;
    border-bottom: 2px solid #f1f5f9;
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
}

.modal-header-pointing h2 {
    color: #0c4a6e;
    font-size: 1.5em;
    margin: 0;
}

.close-pointing {
    font-size: 2em;
    color: #64748b;
    cursor: pointer;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.close-pointing:hover {
    background: rgba(148, 163, 184, 0.2);
}

.modal-body-pointing {
    padding: 30px;
    overflow-y: auto;
    flex: 1;
}

.modal-footer-pointing {
    padding: 20px 30px;
    border-top: 2px solid #f1f5f9;
    background: #f8fafc;
    display: flex;
    gap: 15px;
    justify-content: center;
}

.btn-download, .btn-share {
    padding: 12px 25px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
}

.btn-download {
    background: #667eea;
    color: white;
}

.btn-download:hover {
    background: #5a67d8;
}

.btn-share {
    background: white;
    color: #667eea;
    border: 2px solid #667eea;
}

.btn-share:hover {
    background: #667eea;
    color: white;
}

/* Parents as Teachers Document */
.parents-teacher-section {
    padding: 40px 0;
    background: #fce4ec;
}

.parents-teacher-doc {
    background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);
    border: 2px solid #9c27b0;
}

/* Parents Teacher Modal Styles */
.intro-parents {
    background: #f3e5f5;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    border-left: 5px solid #9c27b0;
}

.challenge-section {
    background: #fff3e0;
    border-radius: 15px;
    padding: 25px;
    border-left: 5px solid #ff9800;
}

/* Mistakes Document Styles */
.mistakes-doc {
    background: linear-gradient(135deg, #fce4ec 0%, #f8bbd9 100%);
    border: 2px solid #dc267f;
}

/* Mistakes Modal Styles */
.intro-mistakes {
    background: #fce4ec;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    border-left: 5px solid #dc267f;
}

.mistakes-list {
    margin: 30px 0;
}

.mistake-item {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 20px;
    border-left: 4px solid #dc267f;
    box-shadow: 0 5px 15px rgba(220, 38, 127, 0.1);
}

.mistake-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.mistake-number {
    background: #dc267f;
    color: white;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.9em;
}

.mistake-header h4 {
    margin: 0;
    color: #ad1457;
    font-size: 1.1em;
}

.mistake-content p {
    margin-bottom: 8px;
    line-height: 1.6;
}

.mistake-content p strong {
    font-weight: 600;
}

.positive-approach {
    background: #f3e5f5;
    border-radius: 15px;
    padding: 30px;
    margin-top: 30px;
}

.approach-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.approach-item {
    background: white;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    box-shadow: 0 3px 10px rgba(220, 38, 127, 0.1);
}

.approach-icon {
    background: linear-gradient(135deg, #dc267f, #e91e63);
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.approach-content h4 {
    margin: 0 0 8px 0;
    color: #ad1457;
    font-size: 1em;
}

.approach-content p {
    margin: 0;
    color: #666;
    font-size: 0.9em;
    line-height: 1.5;
}

.mistakes-conclusion {
    background: linear-gradient(135deg, #fce4ec, #f8bbd9);
    border-radius: 15px;
    padding: 30px;
    margin-top: 30px;
}

/* Hearing Screening Document Styles */
.hearing-screening-doc {
    background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%);
    border: 2px solid #00bcd4;
}

/* Hearing Screening Modal Styles */
.intro-hearing-screening {
    background: #e0f7fa;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    border-left: 5px solid #00bcd4;
}

.concerns-section {
    margin: 30px 0;
}

.concern-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.concern-item {
    background: white;
    border-radius: 15px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    box-shadow: 0 5px 15px rgba(0, 188, 212, 0.1);
    border-left: 4px solid #00bcd4;
}

.concern-icon {
    background: linear-gradient(135deg, #00bcd4, #0097a7);
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.concern-content h4 {
    margin: 0 0 8px 0;
    color: #00695c;
    font-size: 1em;
}

.concern-content p {
    margin: 0;
    color: #666;
    font-size: 0.9em;
    line-height: 1.5;
}

.question-section {
    background: #fff8e1;
    border-radius: 15px;
    padding: 30px;
    text-align: center;
    margin: 30px 0;
}

.important-question h3 {
    color: #f57c00;
    margin-bottom: 20px;
}

.question-highlight {
    background: linear-gradient(135deg, #ffecb3, #ffe082);
    padding: 20px;
    border-radius: 10px;
    border-left: 5px solid #ff9800;
}

.question-highlight p {
    margin: 0;
    font-size: 1.1em;
    color: #e65100;
}

.risks-section {
    margin: 30px 0;
}

.risk-points {
    margin-top: 20px;
}

.risk-point {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    box-shadow: 0 5px 15px rgba(244, 67, 54, 0.1);
    border-left: 4px solid #f44336;
}

.risk-number {
    background: #f44336;
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    flex-shrink: 0;
}

.risk-text h4 {
    margin: 0 0 10px 0;
    color: #c62828;
    font-size: 1.1em;
}

.risk-text p {
    margin: 0;
    line-height: 1.6;
    color: #333;
}

.benefits-comparison {
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    gap: 20px;
    align-items: center;
    margin: 20px 0;
}

.comparison-item {
    background: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.cost-side {
    border-left: 4px solid #4caf50;
}

.benefit-side {
    border-left: 4px solid #f44336;
}

.comparison-header {
    text-align: center;
    margin-bottom: 15px;
}

.comparison-header h4 {
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.cost-side .comparison-header h4 {
    color: #388e3c;
}

.benefit-side .comparison-header h4 {
    color: #d32f2f;
}

.comparison-item ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.comparison-item li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
}

.cost-side li:before {
    content: "✓";
    color: #4caf50;
    font-weight: bold;
    position: absolute;
    left: 0;
}

.benefit-side li:before {
    content: "⚠";
    color: #f44336;
    font-weight: bold;
    position: absolute;
    left: 0;
}

.vs-divider {
    text-align: center;
    font-weight: bold;
    font-size: 1.2em;
    color: #666;
    background: #f5f5f5;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.outcome-scenarios {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin-top: 20px;
}

.scenario {
    background: white;
    border-radius: 15px;
    padding: 25px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    box-shadow: 0 5px 15px rgba(76, 175, 80, 0.1);
    border-left: 4px solid #4caf50;
}

.scenario-icon.positive {
    background: linear-gradient(135deg, #4caf50, #388e3c);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.scenario-content h4 {
    margin: 0 0 10px 0;
    color: #2e7d32;
    font-size: 1.1em;
}

.scenario-content p {
    margin: 0;
    line-height: 1.6;
    color: #333;
}

.hearing-conclusion {
    background: linear-gradient(135deg, #e0f7fa, #b2ebf2);
    border-radius: 15px;
    padding: 30px;
    margin-top: 30px;
}

/* Toilet Stool Document Styles */
.toilet-stool-doc {
    background: linear-gradient(135deg, #efebe9 0%, #d7ccc8 100%);
    border: 2px solid #795548;
}

/* Toilet Stool Modal Styles */
.intro-toilet-stool {
    background: #efebe9;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    border-left: 5px solid #795548;
}

.benefits-numbered {
    margin: 20px 0;
}

.benefit-item-numbered {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 5px 15px rgba(121, 85, 72, 0.1);
    border-left: 4px solid #795548;
}

.benefit-item-numbered {
    display: flex;
    align-items: flex-start;
    gap: 20px;
}

.benefit-number {
    background: #795548;
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.1em;
    flex-shrink: 0;
}

.benefit-content-detailed h4 {
    margin: 0 0 15px 0;
    color: #4e342e;
    font-size: 1.1em;
    display: flex;
    align-items: center;
    gap: 8px;
}

.benefit-details {
    margin-top: 10px;
}

.detail-point {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 12px;
}

.point-icon {
    background: linear-gradient(135deg, #8d6e63, #795548);
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 0.8em;
}

.detail-point p {
    margin: 0;
    line-height: 1.6;
    color: #333;
}

.asd-benefits {
    background: #fff3e0;
    border-radius: 15px;
    padding: 25px;
    margin: 30px 0;
}

.asd-benefit-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.asd-benefit-card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    box-shadow: 0 3px 10px rgba(121, 85, 72, 0.1);
    border-left: 4px solid #ff9800;
}

.asd-benefit-icon {
    background: linear-gradient(135deg, #ff9800, #f57c00);
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.asd-benefit-text h4 {
    margin: 0 0 5px 0;
    color: #e65100;
    font-size: 1em;
}

.asd-benefit-text p {
    margin: 0;
    color: #666;
    font-size: 0.9em;
    line-height: 1.4;
}

.recommendations {
    margin: 30px 0;
}

.recommendation-box {
    background: #fff8e1;
    border-radius: 15px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 20px;
    border-left: 5px solid #ffc107;
}

.recommendation-icon {
    background: #ffc107;
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.recommendation-content p {
    margin: 0;
    font-style: italic;
    color: #333;
    line-height: 1.6;
}

.tips-list {
    background: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 5px 15px rgba(121, 85, 72, 0.1);
}

.tips-list h4 {
    color: #4e342e;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.custom-tips-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.custom-tips-list li {
    padding: 10px 0;
    position: relative;
    padding-left: 30px;
    border-bottom: 1px solid #f5f5f5;
}

.custom-tips-list li:last-child {
    border-bottom: none;
}

.custom-tips-list li:before {
    content: "✓";
    color: #4caf50;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 10px;
}

.toilet-stool-conclusion {
    background: linear-gradient(135deg, #efebe9, #d7ccc8);
    border-radius: 15px;
    padding: 30px;
    margin-top: 30px;
}

/* Kindergarten vs Center Document Styles */
.kindergarten-center-doc {
    background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);
    border: 2px solid #9c27b0;
}

/* Kindergarten Center Modal Styles */
.intro-kindergarten-center {
    background: #f3e5f5;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    border-left: 5px solid #9c27b0;
}

.question-highlight-center {
    background: linear-gradient(135deg, #fff3e0, #ffe0b2);
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    margin-top: 20px;
    border-left: 5px solid #ff9800;
}

.question-highlight-center p {
    margin: 0;
    color: #e65100;
    font-size: 1.1em;
}

.analysis-points {
    margin: 30px 0;
}

.analysis-item {
    background: white;
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 8px 25px rgba(156, 39, 176, 0.1);
    border-left: 4px solid #9c27b0;
}

.analysis-item {
    display: flex;
    align-items: flex-start;
    gap: 25px;
}

.analysis-number {
    background: #9c27b0;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2em;
    flex-shrink: 0;
}

.analysis-content h4 {
    margin: 0 0 20px 0;
    color: #7b1fa2;
    font-size: 1.2em;
    display: flex;
    align-items: center;
    gap: 10px;
}

.subtitle-highlight {
    color: #9c27b0 !important;
    font-style: italic;
    font-size: 1em !important;
    margin-bottom: 20px;
}

.reality-check {
    background: #ffebee;
    border-radius: 12px;
    padding: 20px;
    margin: 15px 0;
    border-left: 4px solid #f44336;
}

.reality-check h5 {
    color: #c62828;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.reality-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.reality-list li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
}

.reality-list li:before {
    content: "⚠";
    color: #f44336;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 8px;
}

.research-quote {
    background: #e8f5e8;
    border-radius: 15px;
    padding: 20px;
    margin: 20px 0;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border-left: 5px solid #4caf50;
}

.quote-icon {
    background: #4caf50;
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.quote-content p {
    margin: 0 0 8px 0;
    line-height: 1.6;
}

.quote-content p:first-child {
    font-weight: 600;
    color: #2e7d32;
}

.quote-content p:last-child {
    font-style: italic;
    color: #388e3c;
}

.advantages-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin: 20px 0;
}

.advantage-item {
    background: #f0f7ff;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border-left: 4px solid #2196f3;
}

.advantage-icon {
    background: linear-gradient(135deg, #2196f3, #1976d2);
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.advantage-text h6 {
    margin: 0 0 8px 0;
    color: #1565c0;
    font-size: 1em;
    font-weight: 600;
}

.advantage-text p {
    margin: 0;
    color: #333;
    font-size: 0.9em;
    line-height: 1.4;
}

.important-highlight {
    background: #fff8e1;
    border-radius: 15px;
    padding: 25px;
    margin: 20px 0;
    border-left: 5px solid #ffc107;
}

.important-highlight h5 {
    color: #f57c00;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.important-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.important-list li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.6;
}

.important-list li:before {
    content: "⭐";
    position: absolute;
    left: 0;
    top: 8px;
}

.cost-myth {
    background: #ffebee;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    border-left: 4px solid #f44336;
}

.cost-myth h5 {
    color: #c62828;
    margin-bottom: 10px;
}

.cost-myth p {
    margin: 0;
    font-style: italic;
    color: #666;
}

.cost-reality {
    background: #e8f5e8;
    border-radius: 12px;
    padding: 20px;
    border-left: 4px solid #4caf50;
}

.cost-reality h5 {
    color: #2e7d32;
    margin-bottom: 15px;
}

.cost-comparison {
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    gap: 20px;
    align-items: center;
}

.cost-item {
    background: white;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.cost-label {
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.cost-details p {
    margin: 5px 0;
    font-size: 0.9em;
    color: #666;
}

.cost-result {
    font-weight: bold !important;
    color: #2e7d32 !important;
}

.vs-symbol {
    background: #ff9800;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.1em;
}

.golden-window-warning {
    background: #fff3e0;
    border-radius: 15px;
    padding: 25px;
    margin-top: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border-left: 5px solid #ff9800;
}

.warning-icon {
    background: #ff9800;
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.warning-content h6 {
    margin: 0 0 10px 0;
    color: #e65100;
    font-size: 1em;
}

.warning-content p {
    margin: 0;
    line-height: 1.6;
    color: #333;
}

.concern-box {
    background: #ffebee;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    border-left: 4px solid #f44336;
}

.concern-box h5 {
    color: #c62828;
    margin-bottom: 10px;
}

.reality-response {
    background: #e8f5e8;
    border-radius: 12px;
    padding: 20px;
    border-left: 4px solid #4caf50;
}

.reality-response h5 {
    color: #2e7d32;
    margin-bottom: 15px;
}

.quality-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.quality-features li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
}

.quality-features li:before {
    content: "✓";
    color: #4caf50;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 8px;
}

.integration-process {
    margin: 20px 0;
}

.process-step {
    background: white;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    box-shadow: 0 3px 10px rgba(156, 39, 176, 0.1);
    border-left: 4px solid #9c27b0;
}

.step-icon {
    background: linear-gradient(135deg, #9c27b0, #7b1fa2);
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.step-content h6 {
    margin: 0 0 8px 0;
    color: #7b1fa2;
    font-size: 1em;
    font-weight: 600;
}

.step-content p {
    margin: 0;
    line-height: 1.6;
    color: #333;
}

.kindergarten-conclusion {
    background: linear-gradient(135deg, #f3e5f5, #e1bee7);
    border-radius: 15px;
    padding: 30px;
    margin-top: 30px;
}

/* Hearing Impaired AVT Document Styles */
.hearing-impaired-avt-doc {
    background: linear-gradient(135deg, #eceff1 0%, #cfd8dc 100%);
    border: 2px solid #37474f;
}

/* Hearing Impaired AVT Modal Styles */
.intro-hearing-impaired-avt {
    background: #eceff1;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    border-left: 5px solid #37474f;
}

.nerve-characteristics {
    margin: 30px 0;
}

.nerve-info-box {
    background: #e3f2fd;
    border-radius: 15px;
    padding: 25px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 25px;
    border-left: 5px solid #2196f3;
}

.nerve-icon {
    background: linear-gradient(135deg, #2196f3, #1976d2);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.nerve-content h4 {
    margin: 0 0 10px 0;
    color: #1565c0;
    font-size: 1.1em;
}

.nerve-content p {
    margin: 0;
    line-height: 1.6;
    color: #333;
}

.characteristics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 15px;
}

.characteristic-item {
    background: white;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    box-shadow: 0 3px 10px rgba(55, 71, 79, 0.1);
    border-left: 4px solid #546e7a;
}

.char-icon {
    background: linear-gradient(135deg, #546e7a, #455a64);
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.char-text h5 {
    margin: 0 0 8px 0;
    color: #37474f;
    font-size: 1em;
}

.char-text p {
    margin: 0;
    color: #666;
    font-size: 0.9em;
    line-height: 1.4;
}

.late-detection-impact {
    margin: 30px 0;
}

.impact-timeline {
    margin-top: 20px;
}

.timeline-item {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 25px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.timeline-item.critical {
    border-left: 5px solid #f44336;
    background: #ffebee;
}

.timeline-item.warning {
    border-left: 5px solid #ff9800;
    background: #fff3e0;
}

.timeline-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    flex-shrink: 0;
}

.timeline-item.critical .timeline-icon {
    background: linear-gradient(135deg, #f44336, #d32f2f);
}

.timeline-item.warning .timeline-icon {
    background: linear-gradient(135deg, #ff9800, #f57c00);
}

.timeline-content h4 {
    margin: 0 0 15px 0;
    color: #333;
    font-size: 1.1em;
}

.timeline-content p {
    margin: 0 0 10px 0;
    line-height: 1.6;
    color: #333;
}

.impact-list,
.challenge-list {
    list-style: none;
    padding: 0;
    margin: 10px 0 0 0;
}

.impact-list li,
.challenge-list li {
    padding: 5px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
}

.impact-list li:before {
    content: "⚠";
    color: #f44336;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 5px;
}

.challenge-list li:before {
    content: "🔴";
    position: absolute;
    left: 0;
    top: 5px;
}

.avt-importance {
    margin: 30px 0;
}

.avt-definition {
    margin-bottom: 25px;
}

.definition-box {
    background: #e8f5e8;
    border-radius: 15px;
    padding: 25px;
    border-left: 5px solid #4caf50;
}

.definition-box h4 {
    margin: 0 0 15px 0;
    color: #2e7d32;
    display: flex;
    align-items: center;
    gap: 10px;
}

.definition-box p {
    margin: 0;
    line-height: 1.6;
    color: #333;
}

.critical-timeline {
    margin-top: 20px;
}

.period-box {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.period-box.urgent {
    border-left: 5px solid #d32f2f;
    background: #ffebee;
}

.period-box.critical {
    border-left: 5px solid #ff5722;
    background: #fbe9e7;
}

.period-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.period-time {
    font-weight: bold;
    color: #333;
    font-size: 1.1em;
}

.period-status {
    background: #d32f2f;
    color: white;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.8em;
    font-weight: 600;
}

.period-box.critical .period-status {
    background: #ff5722;
}

.period-content p {
    margin: 8px 0;
    line-height: 1.6;
    color: #333;
}

.consequences-analysis {
    margin: 30px 0;
}

.consequences-severity {
    margin-top: 20px;
}

.severity-level.severe {
    background: #ffebee;
    border-radius: 15px;
    padding: 25px;
    border-left: 5px solid #d32f2f;
}

.severity-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 25px;
}

.severity-icon {
    font-size: 2em;
}

.severity-header h4 {
    margin: 0;
    color: #c62828;
    font-size: 1.2em;
}

.consequence-categories {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}

.consequence-category {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 3px 10px rgba(211, 47, 47, 0.1);
}

.consequence-category h5 {
    margin: 0 0 15px 0;
    color: #c62828;
    display: flex;
    align-items: center;
    gap: 8px;
}

.consequence-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.consequence-list li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
    color: #333;
}

.consequence-list li:before {
    content: "❌";
    position: absolute;
    left: 0;
    top: 8px;
}

.statistical-evidence {
    margin-top: 30px;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.stat-item {
    background: white;
    border-radius: 12px;
    padding: 25px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(211, 47, 47, 0.1);
    border-left: 4px solid #d32f2f;
}

.stat-number {
    font-size: 2.5em;
    font-weight: bold;
    color: #d32f2f;
    margin-bottom: 10px;
}

.stat-text {
    color: #666;
    line-height: 1.4;
    font-size: 0.9em;
}

.hope-solution {
    background: #e8f5e8;
    border-radius: 15px;
    padding: 25px;
    margin: 30px 0;
    border-left: 5px solid #4caf50;
}

.solution-approach {
    margin-top: 20px;
}

.approach-item {
    background: white;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    box-shadow: 0 3px 10px rgba(76, 175, 80, 0.1);
}

.approach-number {
    background: #4caf50;
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    flex-shrink: 0;
}

.approach-content h4 {
    margin: 0 0 15px 0;
    color: #2e7d32;
    font-size: 1.1em;
}

.approach-details {
    list-style: none;
    padding: 0;
    margin: 0;
}

.approach-details li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
}

.approach-details li:before {
    content: "✓";
    color: #4caf50;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 8px;
}

.hearing-impaired-conclusion {
    background: linear-gradient(135deg, #eceff1, #cfd8dc);
    border-radius: 15px;
    padding: 30px;
    margin-top: 30px;
}

/* RLPTK Q&A Document Styles */
.rlptk-qa-doc {
    background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);
    border: 2px solid #673ab7;
}

/* RLPTK Q&A Modal Styles */
.intro-rlptk-qa {
    background: #f3e5f5;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    border-left: 5px solid #673ab7;
}

.qa-categories {
    margin: 30px 0;
}

.qa-category {
    background: white;
    border-radius: 15px;
    margin-bottom: 30px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(103, 58, 183, 0.1);
}

.category-header {
    background: linear-gradient(135deg, #673ab7, #5e35b1);
    color: white;
    padding: 20px 25px;
}

.category-header h4 {
    margin: 0;
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 1.2em;
}

.qa-item {
    border-bottom: 1px solid #ede7f6;
    padding: 25px;
}

.qa-item:last-child {
    border-bottom: none;
}

.question {
    cursor: pointer;
    margin-bottom: 15px;
}

.question h5 {
    margin: 0;
    color: #4a148c;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.1em;
    padding: 15px;
    background: #f8f5ff;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.question h5:hover {
    background: #ede7f6;
    transform: translateX(5px);
}

.answer {
    margin-left: 20px;
    padding: 20px;
    background: #fafafa;
    border-radius: 12px;
    border-left: 4px solid #673ab7;
}

.answer p {
    margin: 0 0 15px 0;
    line-height: 1.6;
    color: #333;
}

.answer-list {
    list-style: none;
    padding: 0;
    margin: 15px 0;
}

.answer-list li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
}

.answer-list li:before {
    content: "✓";
    color: #4caf50;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 8px;
}

.warning-signs {
    background: #fff3e0;
    border-radius: 12px;
    padding: 20px;
    margin-top: 15px;
    border-left: 4px solid #ff9800;
}

.warning-signs h6 {
    margin: 0 0 15px 0;
    color: #e65100;
    display: flex;
    align-items: center;
    gap: 8px;
}

.age-group {
    background: white;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 15px;
    border-left: 3px solid #ff9800;
}

.age-group strong {
    color: #e65100;
    display: block;
    margin-bottom: 10px;
    font-size: 1.05em;
}

.age-group ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.age-group li {
    padding: 5px 0;
    position: relative;
    padding-left: 20px;
    line-height: 1.4;
}

.age-group li:before {
    content: "⚠";
    color: #ff9800;
    position: absolute;
    left: 0;
    top: 5px;
}

.urgent-consultation {
    background: #ffebee;
    border-radius: 12px;
    padding: 20px;
    margin-top: 15px;
    border-left: 4px solid #f44336;
}

.urgent-consultation h6 {
    margin: 0 0 15px 0;
    color: #c62828;
    display: flex;
    align-items: center;
    gap: 8px;
}

.urgent-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.urgent-list li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
    color: #333;
}

.urgent-list li:before {
    content: "🚨";
    position: absolute;
    left: 0;
    top: 8px;
}

.intervention-levels {
    margin-top: 20px;
}

.level-box {
    background: white;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.level-box.mild {
    border-left: 5px solid #4caf50;
    background: #f1f8e9;
}

.level-box.moderate {
    border-left: 5px solid #ff9800;
    background: #fff8e1;
}

.level-box.severe {
    border-left: 5px solid #f44336;
    background: #ffebee;
}

.level-box h6 {
    margin: 0 0 15px 0;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1.1em;
}

.level-box.mild h6 {
    color: #2e7d32;
}

.level-box.moderate h6 {
    color: #ef6c00;
}

.level-box.severe h6 {
    color: #c62828;
}

.level-box ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.level-box li {
    padding: 6px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.4;
}

.level-box.mild li:before {
    content: "💚";
}

.level-box.moderate li:before {
    content: "💛";
}

.level-box.severe li:before {
    content: "❤️";
}

.level-box li:before {
    position: absolute;
    left: 0;
    top: 6px;
}

.intervention-methods {
    margin-top: 20px;
}

.intervention-methods h6 {
    margin: 0 0 20px 0;
    color: #4a148c;
    display: flex;
    align-items: center;
    gap: 8px;
}

.method-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
}

.method-item {
    background: white;
    border-radius: 12px;
    padding: 20px;
    border-left: 4px solid #673ab7;
    box-shadow: 0 3px 10px rgba(103, 58, 183, 0.1);
}

.method-item h6 {
    margin: 0 0 10px 0;
    color: #4a148c;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1em;
}

.method-item p {
    margin: 0 0 15px 0;
    color: #666;
    font-size: 0.9em;
    line-height: 1.4;
}

.method-item ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.method-item li {
    padding: 5px 0;
    position: relative;
    padding-left: 20px;
    line-height: 1.4;
    color: #333;
    font-size: 0.9em;
}

.method-item li:before {
    content: "→";
    color: #673ab7;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 5px;
}

.family-preparation {
    margin-top: 20px;
}

.prep-category {
    background: white;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    border-left: 4px solid #673ab7;
    box-shadow: 0 3px 10px rgba(103, 58, 183, 0.05);
}

.prep-category h6 {
    margin: 0 0 15px 0;
    color: #4a148c;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1.05em;
}

.prep-category ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.prep-category li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
}

.prep-category li:before {
    content: "▪";
    color: #673ab7;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 8px;
}

.balance-strategies {
    margin-top: 20px;
}

.balance-strategies h6 {
    margin: 0 0 20px 0;
    color: #4a148c;
    display: flex;
    align-items: center;
    gap: 8px;
}

.strategy-item {
    background: white;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 15px;
    border-left: 4px solid #673ab7;
    box-shadow: 0 2px 8px rgba(103, 58, 183, 0.1);
}

.strategy-item h6 {
    margin: 0 0 12px 0;
    color: #4a148c;
    font-size: 1em;
}

.strategy-item ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.strategy-item li {
    padding: 6px 0;
    position: relative;
    padding-left: 20px;
    line-height: 1.4;
}

.strategy-item li:before {
    content: "•";
    color: #673ab7;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 6px;
}

.independence-levels {
    margin-top: 20px;
}

.independence-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 25px 0;
}

.stat-box {
    background: white;
    border-radius: 12px;
    padding: 25px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(103, 58, 183, 0.1);
    border-left: 4px solid #673ab7;
}

.stat-number {
    font-size: 2.5em;
    font-weight: bold;
    color: #673ab7;
    margin-bottom: 10px;
}

.stat-text {
    color: #666;
    line-height: 1.4;
    font-size: 0.9em;
}

.success-factors {
    background: #e8f5e8;
    border-radius: 12px;
    padding: 20px;
    margin-top: 25px;
    border-left: 4px solid #4caf50;
}

.success-factors h6 {
    margin: 0 0 15px 0;
    color: #2e7d32;
    display: flex;
    align-items: center;
    gap: 8px;
}

.success-factors ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.success-factors li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
}

.success-factors li:before {
    content: "⭐";
    position: absolute;
    left: 0;
    top: 8px;
}

.rlptk-resources {
    margin: 30px 0;
    background: #f8f9fa;
    border-radius: 15px;
    padding: 30px;
}

.rlptk-resources h3 {
    margin: 0 0 25px 0;
    color: #4a148c;
    display: flex;
    align-items: center;
    gap: 12px;
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.resource-item {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 3px 10px rgba(103, 58, 183, 0.1);
    border-left: 4px solid #673ab7;
}

.resource-item h6 {
    margin: 0 0 15px 0;
    color: #4a148c;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1em;
}

.resource-item ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.resource-item li {
    padding: 6px 0;
    position: relative;
    padding-left: 20px;
    line-height: 1.4;
    color: #333;
    font-size: 0.9em;
}

.resource-item li:before {
    content: "📌";
    position: absolute;
    left: 0;
    top: 6px;
}

.rlptk-conclusion {
    background: linear-gradient(135deg, #f3e5f5, #e1bee7);
    border-radius: 15px;
    padding: 30px;
    margin-top: 30px;
}

/* RLPTK Modal Enhanced Scrolling Styles */
.pointing-modal#rlptkQAModal .pointing-modal-content {
    max-height: 95vh;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.pointing-modal#rlptkQAModal .pointing-modal-body {
    overflow-y: auto;
    overflow-x: hidden;
    max-height: calc(95vh - 140px); /* Account for header and footer */
    padding-right: 15px; /* Space for custom scrollbar */
    margin-right: -15px; /* Pull content back */
}

/* Custom Scrollbar for RLPTK Modal */
.pointing-modal#rlptkQAModal .pointing-modal-body::-webkit-scrollbar {
    width: 12px;
}

.pointing-modal#rlptkQAModal .pointing-modal-body::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
    margin: 10px 0;
}

.pointing-modal#rlptkQAModal .pointing-modal-body::-webkit-scrollbar-thumb {
    background: linear-gradient(135deg, #673ab7, #5e35b1);
    border-radius: 10px;
    box-shadow: inset 0 0 5px rgba(0,0,0,0.1);
}

.pointing-modal#rlptkQAModal .pointing-modal-body::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(135deg, #5e35b1, #512da8);
}

/* Firefox Scrollbar */
.pointing-modal#rlptkQAModal .pointing-modal-body {
    scrollbar-width: thin;
    scrollbar-color: #673ab7 #f1f1f1;
}

/* Scroll to Top Button for RLPTK Modal */
.scroll-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background: linear-gradient(135deg, #673ab7, #5e35b1);
    color: white;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(103, 58, 183, 0.3);
    z-index: 10001;
    opacity: 0;
    transform: translateY(100px);
    transition: all 0.3s ease;
    display: none;
}

.scroll-to-top.visible {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

.scroll-to-top:hover {
    background: linear-gradient(135deg, #5e35b1, #512da8);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(103, 58, 183, 0.4);
}

/* Section Navigation for RLPTK */
.rlptk-nav {
    position: sticky;
    top: 0;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-bottom: 2px solid #ede7f6;
    padding: 15px 0;
    margin-bottom: 20px;
    z-index: 100;
}

.rlptk-nav-list {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    list-style: none;
    margin: 0;
    padding: 0;
}

.rlptk-nav-item {
    background: #f3e5f5;
    border-radius: 20px;
    padding: 8px 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    font-size: 0.9em;
    font-weight: 500;
    color: #4a148c;
}

.rlptk-nav-item:hover {
    background: #ede7f6;
    border-color: #673ab7;
    transform: translateY(-2px);
}

.rlptk-nav-item.active {
    background: #673ab7;
    color: white;
    box-shadow: 0 3px 10px rgba(103, 58, 183, 0.3);
}

/* Enhanced Q&A Sections */
.qa-category {
    scroll-margin-top: 80px; /* Account for sticky nav */
    margin-bottom: 40px;
}

/* Collapsible Q&A Items */
.qa-item {
    border-bottom: 1px solid #ede7f6;
    padding: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.qa-item.expanded {
    background: #fafafa;
    border-radius: 12px;
    margin-bottom: 15px;
    box-shadow: 0 3px 15px rgba(103, 58, 183, 0.1);
}

.question {
    cursor: pointer;
    margin-bottom: 0;
    padding: 20px 25px;
    transition: all 0.3s ease;
}

.question:hover {
    background: #f8f5ff;
}

.question h5 {
    margin: 0;
    color: #4a148c;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    font-size: 1.1em;
    padding: 0;
    background: none;
    border-radius: 0;
    transition: none;
}

.question h5:hover {
    background: none;
    transform: none;
}

.question-icon {
    font-size: 0.9em;
    transition: transform 0.3s ease;
}

.qa-item.expanded .question-icon {
    transform: rotate(45deg);
}

.answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
    margin-left: 0;
    padding: 0 25px;
    background: white;
    border-radius: 0;
    border-left: none;
}

.qa-item.expanded .answer {
    max-height: 2000px; /* Enough for content */
    padding: 20px 25px 25px 25px;
    border-top: 1px solid #ede7f6;
}

/* Progress Indicator */
.reading-progress {
    position: fixed;
    top: 0;
    left: 0;
    width: 0%;
    height: 4px;
    background: linear-gradient(90deg, #673ab7, #5e35b1);
    z-index: 10002;
    transition: width 0.3s ease;
}

/* Responsive Improvements */
@media (max-width: 768px) {
    .pointing-modal#rlptkQAModal .pointing-modal-body {
        padding-right: 10px;
        margin-right: -10px;
    }
    
    .rlptk-nav-list {
        flex-direction: column;
        align-items: center;
    }
    
    .rlptk-nav-item {
        font-size: 0.8em;
        padding: 6px 12px;
    }
    
    .scroll-to-top {
        width: 45px;
        height: 45px;
        font-size: 18px;
        bottom: 20px;
        right: 20px;
    }
}

/* Food Structure Document Styles */
.food-structure-doc {
    background: linear-gradient(135deg, #fff8e1 0%, #ffcc02 100%);
    border: 2px solid #ff9800;
}

/* Food Structure Modal Styles */
.pointing-modal#foodStructureModal .pointing-modal-content {
    background: linear-gradient(135deg, #fff8e1, #ffffff);
    border: 2px solid #ff9800;
}

.pointing-modal#foodStructureModal .pointing-modal-body {
    max-height: 80vh;
    overflow-y: auto;
    padding: 20px;
}

.pointing-modal#foodStructureModal .case-study-box,
.pointing-modal#foodStructureModal .expert-response,
.pointing-modal#foodStructureModal .solutions-section {
    background: white;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(255, 152, 0, 0.1);
    border: 1px solid #ffcc02;
}

.pointing-modal#foodStructureModal .parent-message {
    background: #fff8e1;
    border-left: 4px solid #ff9800;
    padding: 15px;
    margin: 15px 0;
    border-radius: 0 8px 8px 0;
}

.pointing-modal#foodStructureModal blockquote {
    font-style: italic;
    color: #5d4037;
    margin: 10px 0;
    padding: 10px;
    background: #fafafa;
    border-radius: 8px;
}

.pointing-modal#foodStructureModal .food-examples {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin-top: 15px;
}

.pointing-modal#foodStructureModal .food-item {
    background: #fff8e1;
    padding: 15px;
    border-radius: 8px;
    text-align: center;
    border: 1px solid #ffcc02;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
}

.pointing-modal#foodStructureModal .food-item i {
    color: #ff9800;
    font-size: 24px;
}

.pointing-modal#foodStructureModal .age-stage {
    background: white;
    border-radius: 12px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(255, 152, 0, 0.1);
    border: 1px solid #ffcc02;
    overflow: hidden;
}

.pointing-modal#foodStructureModal .stage-header {
    background: linear-gradient(135deg, #ff9800, #f57c00);
    color: white;
    padding: 15px 20px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.pointing-modal#foodStructureModal .age-badge {
    background: white;
    color: #ff9800;
    padding: 8px 12px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 14px;
}

.pointing-modal#foodStructureModal .stage-content {
    padding: 20px;
}

.pointing-modal#foodStructureModal .structure-type {
    background: #fff8e1;
    border-left: 4px solid #ff9800;
    padding: 15px;
    margin: 15px 0;
    border-radius: 0 8px 8px 0;
}

.pointing-modal#foodStructureModal .takeaway-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.pointing-modal#foodStructureModal .takeaway-item {
    background: #fff8e1;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    border: 1px solid #ffcc02;
}

.pointing-modal#foodStructureModal .takeaway-item i {
    color: #ff9800;
    font-size: 24px;
    margin-bottom: 10px;
}

.pointing-modal#foodStructureModal .reference-section {
    background: linear-gradient(135deg, #fff8e1, #ffcc02);
    border-radius: 12px;
    padding: 20px;
    margin: 20px 0;
    border: 1px solid #ff9800;
}

@media (max-width: 768px) {
    .pointing-modal#foodStructureModal .pointing-modal-body {
        max-height: 70vh;
        padding: 15px;
    }
    
    .pointing-modal#foodStructureModal .food-examples {
        grid-template-columns: 1fr;
    }
    
    .pointing-modal#foodStructureModal .takeaway-grid {
        grid-template-columns: 1fr;
    }
    
    .pointing-modal#foodStructureModal .stage-header {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }
}

/* Communication and Interaction Document Styles */
.communication-interaction-doc {
    background: linear-gradient(135deg, #e8f5e8 0%, #c8e6c9 100%);
    border: 2px solid #4caf50;
}

/* Communication and Interaction Modal Styles */
.pointing-modal#communicationInteractionModal .pointing-modal-content {
    background: linear-gradient(135deg, #e8f5e8, #ffffff);
    border: 2px solid #4caf50;
    max-width: 95vw;
    width: 1400px;
    max-height: 95vh;
    border-radius: 25px;
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.4);
    transform: scale(1.02);
}

.pointing-modal#communicationInteractionModal .pointing-modal-body {
    max-height: 80vh;
    overflow-y: auto;
    padding: 35px;
    line-height: 1.6;
    color: #333;
    font-size: 1.05em;
}

.pointing-modal#communicationInteractionModal .content-section {
    background: white;
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 25px;
    box-shadow: 0 6px 20px rgba(76, 175, 80, 0.1);
    border: 1px solid #c8e6c9;
}

.pointing-modal#communicationInteractionModal .content-section h3 {
    color: #2e7d32;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 1.5em;
    border-bottom: 2px solid #4caf50;
    padding-bottom: 10px;
}

.pointing-modal#communicationInteractionModal .definition-box,
.pointing-modal#communicationInteractionModal .challenge-box,
.pointing-modal#communicationInteractionModal .understanding-section,
.pointing-modal#communicationInteractionModal .nonverbal-section,
.pointing-modal#communicationInteractionModal .echolalia-section,
.pointing-modal#communicationInteractionModal .why-section,
.pointing-modal#communicationInteractionModal .communication-types,
.pointing-modal#communicationInteractionModal .stages-section {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(76, 175, 80, 0.1);
    border: 1px solid #c8e6c9;
}

.pointing-modal#communicationInteractionModal .definition-item {
    background: #f1f8e9;
    border-left: 5px solid #4caf50;
    padding: 20px;
    margin: 20px 0;
    border-radius: 0 12px 12px 0;
    box-shadow: 0 2px 8px rgba(76, 175, 80, 0.1);
}

.pointing-modal#communicationInteractionModal .definition-item h4 {
    color: #2e7d32;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1.2em;
}

.pointing-modal#communicationInteractionModal .challenge-box ul,
.pointing-modal#communicationInteractionModal .understanding-section ul {
    list-style: none;
    padding: 0;
}

.pointing-modal#communicationInteractionModal .challenge-box li,
.pointing-modal#communicationInteractionModal .understanding-section li {
    background: #f1f8e9;
    padding: 15px;
    margin: 10px 0;
    border-radius: 10px;
    border-left: 4px solid #4caf50;
    position: relative;
    padding-left: 45px;
}

.pointing-modal#communicationInteractionModal .challenge-box li:before,
.pointing-modal#communicationInteractionModal .understanding-section li:before {
    content: "✓";
    position: absolute;
    left: 15px;
    top: 15px;
    color: #4caf50;
    font-weight: bold;
    font-size: 16px;
}

.pointing-modal#communicationInteractionModal .key-insight {
    background: linear-gradient(135deg, #e8f5e8, #c8e6c9);
    border-radius: 15px;
    padding: 25px;
    margin: 20px 0;
    border: 2px solid #4caf50;
    text-align: center;
}

.pointing-modal#communicationInteractionModal .key-insight p {
    margin: 10px 0;
    font-size: 1.1em;
}

.pointing-modal#communicationInteractionModal .parent-challenges h4,
.pointing-modal#communicationInteractionModal .solution-approach h4,
.pointing-modal#communicationInteractionModal .communication-forms h4 {
    color: #2e7d32;
    margin: 20px 0 15px 0;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1.2em;
}

.pointing-modal#communicationInteractionModal .forms-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.pointing-modal#communicationInteractionModal .form-item {
    background: #f1f8e9;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    border: 2px solid #c8e6c9;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.pointing-modal#communicationInteractionModal .form-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(76, 175, 80, 0.2);
}

.pointing-modal#communicationInteractionModal .form-item i {
    color: #4caf50;
    font-size: 28px;
}

.pointing-modal#communicationInteractionModal .form-item span {
    font-weight: 600;
    color: #2e7d32;
}

.pointing-modal#communicationInteractionModal .definition,
.pointing-modal#communicationInteractionModal .positive-sign {
    background: #f1f8e9;
    border-left: 5px solid #4caf50;
    padding: 20px;
    margin: 20px 0;
    border-radius: 0 12px 12px 0;
}

.pointing-modal#communicationInteractionModal .development-example h4 {
    color: #2e7d32;
    margin: 20px 0 15px 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.pointing-modal#communicationInteractionModal .example-scenario {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 15px;
}

.pointing-modal#communicationInteractionModal .step {
    background: #f1f8e9;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    border: 1px solid #c8e6c9;
}

.pointing-modal#communicationInteractionModal .step-number {
    background: #4caf50;
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 18px;
    flex-shrink: 0;
}

.pointing-modal#communicationInteractionModal .type-item {
    background: white;
    border-radius: 15px;
    margin-bottom: 25px;
    box-shadow: 0 6px 20px rgba(76, 175, 80, 0.1);
    border: 2px solid #c8e6c9;
    overflow: hidden;
}

.pointing-modal#communicationInteractionModal .type-header {
    background: linear-gradient(135deg, #4caf50, #388e3c);
    color: white;
    padding: 20px 25px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.pointing-modal#communicationInteractionModal .type-header i {
    font-size: 24px;
}

.pointing-modal#communicationInteractionModal .type-header h4 {
    margin: 0;
    font-size: 1.3em;
}

.pointing-modal#communicationInteractionModal .type-content {
    padding: 25px;
}

.pointing-modal#communicationInteractionModal .spectrum-info {
    background: #e8f5e8;
    border-radius: 12px;
    padding: 20px;
    margin-top: 20px;
}

.pointing-modal#communicationInteractionModal .spectrum-info h4 {
    color: #2e7d32;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.pointing-modal#communicationInteractionModal .spectrum-diagram {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    margin-top: 15px;
}

.pointing-modal#communicationInteractionModal .spectrum-end {
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 10px;
    border: 2px solid #4caf50;
    text-align: center;
}

.pointing-modal#communicationInteractionModal .spectrum-arrow {
    font-size: 24px;
    color: #4caf50;
    font-weight: bold;
}

.pointing-modal#communicationInteractionModal .factors-info h4 {
    color: #2e7d32;
    margin: 20px 0 15px 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.pointing-modal#communicationInteractionModal .factors-info ul {
    list-style: none;
    padding: 0;
}

.pointing-modal#communicationInteractionModal .factors-info li {
    background: #f1f8e9;
    padding: 12px 15px;
    margin: 8px 0;
    border-radius: 8px;
    border-left: 4px solid #4caf50;
    position: relative;
    padding-left: 40px;
}

.pointing-modal#communicationInteractionModal .factors-info li:before {
    content: "•";
    position: absolute;
    left: 15px;
    top: 12px;
    color: #4caf50;
    font-weight: bold;
    font-size: 18px;
}

.pointing-modal#communicationInteractionModal .stage-item {
    background: white;
    border-radius: 15px;
    margin-bottom: 25px;
    box-shadow: 0 6px 20px rgba(76, 175, 80, 0.1);
    border: 2px solid #c8e6c9;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.pointing-modal#communicationInteractionModal .stage-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(76, 175, 80, 0.2);
}

.pointing-modal#communicationInteractionModal .stage-header {
    background: linear-gradient(135deg, #4caf50, #388e3c);
    color: white;
    padding: 20px 25px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.pointing-modal#communicationInteractionModal .stage-1 .stage-header {
    background: linear-gradient(135deg, #ff9800, #f57c00);
}

.pointing-modal#communicationInteractionModal .stage-2 .stage-header {
    background: linear-gradient(135deg, #2196f3, #1976d2);
}

.pointing-modal#communicationInteractionModal .stage-3 .stage-header {
    background: linear-gradient(135deg, #4caf50, #388e3c);
}

.pointing-modal#communicationInteractionModal .stage-4 .stage-header {
    background: linear-gradient(135deg, #9c27b0, #7b1fa2);
}

.pointing-modal#communicationInteractionModal .stage-icon {
    font-size: 2em;
}

.pointing-modal#communicationInteractionModal .stage-header h4 {
    margin: 0;
    font-size: 1.3em;
}

.pointing-modal#communicationInteractionModal .stage-content {
    padding: 25px;
}

.pointing-modal#communicationInteractionModal .stage-content ul {
    list-style: none;
    padding: 0;
}

.pointing-modal#communicationInteractionModal .stage-content li {
    background: #f1f8e9;
    padding: 15px;
    margin: 12px 0;
    border-radius: 10px;
    border-left: 4px solid #4caf50;
    position: relative;
    padding-left: 45px;
}

.pointing-modal#communicationInteractionModal .stage-content li:before {
    content: "→";
    position: absolute;
    left: 15px;
    top: 15px;
    color: #4caf50;
    font-weight: bold;
    font-size: 16px;
}

.pointing-modal#communicationInteractionModal .expert-section {
    background: linear-gradient(135deg, #e8f5e8, #c8e6c9);
    border-radius: 15px;
    padding: 25px;
    margin: 25px 0;
    border: 2px solid #4caf50;
}

.pointing-modal#communicationInteractionModal .expert-section h3 {
    color: #2e7d32;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    border-bottom: none;
}

.pointing-modal#communicationInteractionModal .expert-details p {
    margin: 8px 0;
    font-size: 1.1em;
}

@media (max-width: 768px) {
    .pointing-modal#communicationInteractionModal .pointing-modal-content {
        width: 95vw;
        max-width: 95vw;
    }
    
    .pointing-modal#communicationInteractionModal .pointing-modal-body {
        padding: 20px;
        max-height: 80vh;
    }
    
    .pointing-modal#communicationInteractionModal .forms-grid {
        grid-template-columns: 1fr;
    }
    
    .pointing-modal#communicationInteractionModal .spectrum-diagram {
        flex-direction: column;
        gap: 15px;
    }
    
    .pointing-modal#communicationInteractionModal .spectrum-arrow {
        transform: rotate(90deg);
    }
    
    .pointing-modal#communicationInteractionModal .example-scenario {
        gap: 10px;
    }
    
    .pointing-modal#communicationInteractionModal .step {
        flex-direction: column;
        text-align: center;
    }
}
}

.pointing-modal#communicationInteractionModal .type-header {
    background: linear-gradient(135deg, #4caf50, #388e3c);
    color: white;
    padding: 15px 20px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.pointing-modal#communicationInteractionModal .type-content {
    padding: 20px;
}

.pointing-modal#communicationInteractionModal .spectrum-diagram {
    display: flex;
    align-items: center;
    gap: 20px;
    margin: 15px 0;
    background: #f1f8e9;
    padding: 20px;
    border-radius: 8px;
}

.pointing-modal#communicationInteractionModal .spectrum-end {
    flex: 1;
    text-align: center;
    padding: 10px;
}

.pointing-modal#communicationInteractionModal .spectrum-arrow {
    font-size: 24px;
    color: #4caf50;
    font-weight: bold;
}

.pointing-modal#communicationInteractionModal .stage-item {
    background: white;
    border-radius: 12px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(76, 175, 80, 0.1);
    border: 1px solid #c8e6c9;
    overflow: hidden;
}

.pointing-modal#communicationInteractionModal .stage-header {
    background: linear-gradient(135deg, #4caf50, #388e3c);
    color: white;
    padding: 15px 20px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.pointing-modal#communicationInteractionModal .stage-icon {
    font-size: 24px;
}

.pointing-modal#communicationInteractionModal .stage-content {
    padding: 20px;
}

.pointing-modal#communicationInteractionModal .step {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 10px;
}

.pointing-modal#communicationInteractionModal .step-number {
    background: #4caf50;
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
    flex-shrink: 0;
}

.pointing-modal#communicationInteractionModal .expert-section {
    background: linear-gradient(135deg, #e8f5e8, #c8e6c9);
    border-radius: 12px;
    padding: 20px;
    margin: 20px 0;
    border: 1px solid #4caf50;
}

@media (max-width: 768px) {
    .pointing-modal#communicationInteractionModal .pointing-modal-body {
        max-height: 70vh;
        padding: 15px;
    }
    
    .pointing-modal#communicationInteractionModal .forms-grid {
        grid-template-columns: 1fr;
    }
    
    .pointing-modal#communicationInteractionModal .spectrum-diagram {
        flex-direction: column;
    }
}

/* Intensive Interaction Document Styles */
.intensive-interaction-doc {
    background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);
    border: 2px solid #9c27b0;
}

.intensive-interaction-doc .featured-content {
    display: flex;
    align-items: center;
    gap: 20px;
}

.intensive-interaction-doc .featured-actions {
    display: flex;
    gap: 15px;
    align-items: center;
}

/* Intensive Interaction Modal Styles */
.pointing-modal#intensiveInteractionModal .pointing-modal-content {
    background: linear-gradient(135deg, #f3e5f5, #ffffff);
    border: 2px solid #9c27b0;
}

.pointing-modal#intensiveInteractionModal .pointing-modal-body {
    max-height: 80vh;
    overflow-y: auto;
    padding: 20px;
}

.pointing-modal#intensiveInteractionModal .intro-intensive,
.pointing-modal#intensiveInteractionModal .target-groups,
.pointing-modal#intensiveInteractionModal .principles,
.pointing-modal#intensiveInteractionModal .interaction-stages,
.pointing-modal#intensiveInteractionModal .benefits {
    background: white;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(156, 39, 176, 0.1);
    border: 1px solid #e1bee7;
}

.pointing-modal#intensiveInteractionModal .target-group-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.pointing-modal#intensiveInteractionModal .target-group-card {
    background: #f3e5f5;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border: 1px solid #e1bee7;
}

.pointing-modal#intensiveInteractionModal .target-icon {
    background: #9c27b0;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    flex-shrink: 0;
}

.pointing-modal#intensiveInteractionModal .target-content h4 {
    color: #7b1fa2;
    margin: 0 0 8px 0;
    font-size: 1.1em;
}

.pointing-modal#intensiveInteractionModal .principle-item {
    background: white;
    border-radius: 12px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(156, 39, 176, 0.1);
    border: 1px solid #e1bee7;
    overflow: hidden;
}

.pointing-modal#intensiveInteractionModal .principle-header {
    background: linear-gradient(135deg, #9c27b0, #7b1fa2);
    color: white;
    padding: 15px 20px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.pointing-modal#intensiveInteractionModal .principle-number {
    background: white;
    color: #9c27b0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 18px;
}

.pointing-modal#intensiveInteractionModal .principle-content {
    padding: 20px;
}

.pointing-modal#intensiveInteractionModal .principle-example {
    background: #f3e5f5;
    border-left: 4px solid #9c27b0;
    padding: 15px;
    margin: 15px 0;
    border-radius: 0 8px 8px 0;
    font-style: italic;
}

.pointing-modal#intensiveInteractionModal .stage-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 25px;
    margin-top: 20px;
}

.pointing-modal#intensiveInteractionModal .stage-item {
    background: white;
    border-radius: 15px;
    padding: 0;
    box-shadow: 0 6px 20px rgba(156, 39, 176, 0.1);
    border: 2px solid #e1bee7;
    overflow: hidden;
}

.pointing-modal#intensiveInteractionModal .stage-header {
    background: linear-gradient(135deg, #9c27b0, #7b1fa2);
    color: white;
    padding: 20px;
    text-align: center;
}

.pointing-modal#intensiveInteractionModal .stage-badge {
    background: white;
    color: #9c27b0;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 10px;
}

.pointing-modal#intensiveInteractionModal .stage-header h4 {
    margin: 0;
    font-size: 1.3em;
}

.pointing-modal#intensiveInteractionModal .stage-content {
    padding: 25px;
}

.pointing-modal#intensiveInteractionModal .activity-list {
    list-style: none;
    padding: 0;
    margin: 15px 0;
}

.pointing-modal#intensiveInteractionModal .activity-list li {
    background: #f3e5f5;
    padding: 12px 15px;
    margin: 8px 0;
    border-radius: 8px;
    border-left: 4px solid #9c27b0;
}

.pointing-modal#intensiveInteractionModal .video-placeholder {
    background: linear-gradient(135deg, #f3e5f5, #e1bee7);
    border: 2px dashed #9c27b0;
    border-radius: 12px;
    padding: 30px;
    text-align: center;
    margin-top: 20px;
    color: #7b1fa2;
}

.pointing-modal#intensiveInteractionModal .video-placeholder i {
    font-size: 3em;
    color: #9c27b0;
    margin-bottom: 15px;
}

.pointing-modal#intensiveInteractionModal .benefit-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.pointing-modal#intensiveInteractionModal .benefit-card {
    background: #f3e5f5;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    border: 1px solid #e1bee7;
}

.pointing-modal#intensiveInteractionModal .benefit-icon {
    background: #9c27b0;
    color: white;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin: 0 auto 15px auto;
}

.pointing-modal#intensiveInteractionModal .benefit-text h4 {
    color: #7b1fa2;
    margin: 0 0 8px 0;
}

.pointing-modal#intensiveInteractionModal .intensive-conclusion {
    background: linear-gradient(135deg, #f3e5f5, #e1bee7);
    border-radius: 12px;
    padding: 25px;
    margin: 20px 0;
    border: 2px solid #9c27b0;
}

@media (max-width: 768px) {
    .pointing-modal#intensiveInteractionModal .pointing-modal-body {
        max-height: 70vh;
        padding: 15px;
    }
    
    .pointing-modal#intensiveInteractionModal .target-group-grid {
        grid-template-columns: 1fr;
    }
    
    .pointing-modal#intensiveInteractionModal .stage-container {
        grid-template-columns: 1fr;
    }
    
    .pointing-modal#intensiveInteractionModal .benefit-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
}

/* Autism Communication Document Styles */
.autism-communication-doc {
    background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);
    border: 2px solid #673ab7;
}

/* Autism Communication Modal Styles */
.pointing-modal#autismCommunicationModal .pointing-modal-content {
    background: linear-gradient(135deg, #f3e5f5, #ffffff);
    border: 2px solid #673ab7;
}

.pointing-modal#autismCommunicationModal .pointing-modal-body {
    max-height: 80vh;
    overflow-y: auto;
    padding: 20px;
}

.pointing-modal#autismCommunicationModal .strategy-item {
    background: white;
    border-radius: 12px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(103, 58, 183, 0.1);
    border: 1px solid #e1bee7;
    overflow: hidden;
}

.pointing-modal#autismCommunicationModal .strategy-header {
    background: linear-gradient(135deg, #673ab7, #512da8);
    color: white;
    padding: 15px 20px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.pointing-modal#autismCommunicationModal .strategy-number {
    background: white;
    color: #673ab7;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 18px;
}

.pointing-modal#autismCommunicationModal .strategy-content {
    padding: 20px;
}

.pointing-modal#autismCommunicationModal .strategy-content h5 {
    color: #673ab7;
    margin-top: 15px;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.pointing-modal#autismCommunicationModal .advice-box,
.pointing-modal#autismCommunicationModal .example-box {
    background: #f3e5f5;
    border-left: 4px solid #673ab7;
    padding: 15px;
    margin: 10px 0;
    border-radius: 0 8px 8px 0;
}

.pointing-modal#autismCommunicationModal .step {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 10px;
}

.pointing-modal#autismCommunicationModal .step-number {
    background: #673ab7;
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
    flex-shrink: 0;
}

.pointing-modal#autismCommunicationModal .expert-section {
    background: linear-gradient(135deg, #f3e5f5, #e1bee7);
    border-radius: 12px;
    padding: 20px;
    margin: 20px 0;
    border: 1px solid #673ab7;
}

@media (max-width: 768px) {
    .pointing-modal#autismCommunicationModal .pointing-modal-body {
        max-height: 70vh;
        padding: 15px;
    }
    
    .pointing-modal#autismCommunicationModal .strategy-content {
        padding: 15px;
    }
}

/* Screen Time Brain Effects Document Styles */
.screen-time-brain-doc {
    background: linear-gradient(135deg, #fce4ec 0%, #f8bbd9 100%);
    border: 2px solid #e91e63;
}

/* Modern Card Design for Screen Time */
.screen-time-brain-modern {
    padding: 40px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.card-modern-wrapper {
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: 0 auto;
    transition: all 0.3s ease;
    border: 1px solid #e3f2fd;
}

.card-modern-wrapper:hover {
    transform: translateY(-8px);
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
}

.card-header-modern {
    background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
    padding: 30px 30px 20px 30px;
    position: relative;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}

.expert-avatar {
    position: relative;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid white;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.expert-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.avatar-overlay {
    position: absolute;
    bottom: -5px;
    right: -5px;
    background: linear-gradient(135deg, #e91e63, #c2185b);
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 14px;
    border: 3px solid white;
    box-shadow: 0 4px 12px rgba(233, 30, 99, 0.3);
}

.document-tag {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.5px;
    display: flex;
    align-items: center;
    gap: 6px;
    text-transform: uppercase;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.screen-time-tag {
    background: linear-gradient(135deg, #e91e63, #c2185b);
    color: white;
}

.card-content-modern {
    padding: 30px;
}

.card-title-modern {
    font-size: 24px;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0 0 16px 0;
    line-height: 1.3;
    font-family: 'Inter', sans-serif;
}

.card-description-modern {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin: 0 0 24px 0;
    font-family: 'Inter', sans-serif;
}

.card-tags-modern {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 24px;
}

.tag-item {
    background: #f8f9fa;
    color: #495057;
    padding: 8px 12px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 6px;
    border: 1px solid #e9ecef;
    transition: all 0.2s ease;
}

.tag-item:hover {
    background: #e3f2fd;
    border-color: #2196f3;
    color: #1976d2;
    transform: translateY(-1px);
}

.tag-item i {
    font-size: 12px;
    opacity: 0.8;
}

.card-actions-modern {
    padding: 0 30px 30px 30px;
    display: flex;
    gap: 12px;
}

.btn-modern {
    flex: 1;
    padding: 14px 20px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 14px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    text-decoration: none;
    font-family: 'Inter', sans-serif;
}

.btn-primary-modern {
    background: linear-gradient(135deg, #1976d2, #1565c0);
    color: white;
    box-shadow: 0 4px 15px rgba(25, 118, 210, 0.3);
}

.btn-primary-modern:hover {
    background: linear-gradient(135deg, #1565c0, #0d47a1);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(25, 118, 210, 0.4);
}

.btn-secondary-modern {
    background: white;
    color: #1976d2;
    border: 2px solid #1976d2;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.btn-secondary-modern:hover {
    background: #1976d2;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(25, 118, 210, 0.3);
}

.btn-modern i {
    font-size: 16px;
}

/* Responsive Design for Modern Card */
@media (max-width: 768px) {
    .screen-time-brain-modern {
        padding: 20px 0;
    }
    
    .card-modern-wrapper {
        margin: 0 20px;
        border-radius: 20px;
    }
    
    .card-header-modern {
        padding: 20px 20px 15px 20px;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }
    
    .expert-avatar {
        width: 70px;
        height: 70px;
    }
    
    .avatar-overlay {
        width: 28px;
        height: 28px;
        font-size: 12px;
    }
    
    .card-content-modern {
        padding: 25px 20px;
    }
    
    .card-title-modern {
        font-size: 20px;
    }
    
    .card-description-modern {
        font-size: 15px;
    }
    
    .card-actions-modern {
        padding: 0 20px 25px 20px;
        flex-direction: column;
    }
    
    .btn-modern {
        padding: 12px 18px;
    }
    
    .tag-item {
        font-size: 13px;
        padding: 6px 10px;
    }
}

/* Animation for card appearance */
@keyframes cardSlideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card-modern-wrapper {
    animation: cardSlideUp 0.6s ease-out;
}

/* Hover effects for interactive elements */
.expert-avatar {
    transition: all 0.3s ease;
}

.card-modern-wrapper:hover .expert-avatar {
    transform: scale(1.05);
}

.card-modern-wrapper:hover .avatar-overlay {
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(233, 30, 99, 0.4);
}

.document-tag {
    transition: all 0.3s ease;
}

.card-modern-wrapper:hover .document-tag {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

/* Screen Time Modal Styles */
.intro-screen-time {
    background: #fce4ec;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    border-left: 5px solid #e91e63;
}

.warning-box {
    background: #fff3e0;
    border: 1px solid #ff9800;
    border-radius: 10px;
    padding: 15px;
    margin-top: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.9em;
}

.warning-box i {
    color: #ff9800;
    font-size: 1.1em;
}

.screen-effects {
    margin: 30px 0;
}

.effect-item {
    background: white;
    border-radius: 15px;
    margin-bottom: 30px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(233, 30, 99, 0.1);
    border-left: 5px solid #e91e63;
}

.effect-header {
    background: linear-gradient(135deg, #e91e63, #c2185b);
    color: white;
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 20px;
}

.effect-number {
    background: rgba(255, 255, 255, 0.2);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5em;
    font-weight: bold;
    border: 2px solid rgba(255, 255, 255, 0.3);
}

.effect-header h4 {
    margin: 0;
    font-size: 1.3em;
    line-height: 1.2;
}

.effect-content {
    padding: 30px;
}

.main-explanation {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 25px;
    border-left: 4px solid #e91e63;
}

.main-explanation p {
    margin: 0;
    font-size: 1.1em;
    line-height: 1.6;
}

.science-explanation {
    margin-bottom: 25px;
}

.science-explanation h5 {
    margin: 0 0 20px 0;
    color: #c2185b;
    display: flex;
    align-items: center;
    gap: 10px;
}

.science-points {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.science-point {
    background: #fff8e1;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border-left: 4px solid #ff9800;
}

.point-icon {
    font-size: 2em;
    flex-shrink: 0;
}

.point-content strong {
    display: block;
    color: #e65100;
    margin-bottom: 8px;
    font-size: 1em;
}

.point-content p {
    margin: 0;
    line-height: 1.4;
    color: #333;
    font-size: 0.9em;
}

.addiction-comparison {
    margin-bottom: 25px;
}

.addiction-comparison h5 {
    margin: 0 0 15px 0;
    color: #d32f2f;
    display: flex;
    align-items: center;
    gap: 8px;
}

.comparison-box {
    background: #ffebee;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    border: 2px solid #f44336;
}

.comparison-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    color: #c62828;
}

.comparison-item i {
    font-size: 2em;
    color: #d32f2f;
}

.comparison-arrow {
    font-size: 2em;
    font-weight: bold;
    color: #d32f2f;
}

.dopamine-effects {
    margin-bottom: 25px;
}

.dopamine-effects h5 {
    margin: 0 0 20px 0;
    color: #7b1fa2;
    display: flex;
    align-items: center;
    gap: 10px;
}

.dopamine-cycle {
    background: #f3e5f5;
    border-radius: 12px;
    padding: 25px;
    border-left: 4px solid #9c27b0;
}

.cycle-step {
    background: white;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 15px;
    border-left: 3px solid #9c27b0;
}

.step-number {
    background: #9c27b0;
    color: white;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    flex-shrink: 0;
}

.cycle-arrow {
    text-align: center;
    font-size: 1.5em;
    color: #9c27b0;
    margin: 10px 0;
}

.consequences {
    margin-bottom: 25px;
}

.consequences h5 {
    margin: 0 0 15px 0;
    color: #d32f2f;
    display: flex;
    align-items: center;
    gap: 8px;
}

.consequence-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.consequence-list li {
    background: white;
    border-radius: 8px;
    padding: 12px 15px;
    margin-bottom: 8px;
    position: relative;
    padding-left: 40px;
    border-left: 3px solid #f44336;
}

.consequence-list li:before {
    content: "⚠";
    position: absolute;
    left: 12px;
    top: 12px;
    color: #f44336;
    font-weight: bold;
}

.research-evidence {
    margin-bottom: 25px;
}

.research-evidence h5 {
    margin: 0 0 20px 0;
    color: #1976d2;
    display: flex;
    align-items: center;
    gap: 10px;
}

.evidence-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.evidence-item {
    background: white;
    border-radius: 12px;
    padding: 20px;
    border-left: 4px solid #2196f3;
}

.evidence-item.human {
    background: #e3f2fd;
}

.evidence-item.animal {
    background: #f1f8e9;
    border-left-color: #4caf50;
}

.evidence-item h6 {
    margin: 0 0 15px 0;
    color: #1565c0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.evidence-item.animal h6 {
    color: #2e7d32;
}

.evidence-item ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.evidence-item li {
    padding: 6px 0;
    position: relative;
    padding-left: 20px;
    line-height: 1.4;
}

.evidence-item li:before {
    content: "•";
    color: #2196f3;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 6px;
}

.evidence-item.animal li:before {
    color: #4caf50;
}

.parent-concern {
    margin-bottom: 25px;
}

.parent-concern h5 {
    margin: 0 0 15px 0;
    color: #c2185b;
    display: flex;
    align-items: center;
    gap: 8px;
}

.advice-box {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 20px;
    border: 2px solid #e91e63;
}

.advice-box .concern {
    background: #ffebee;
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 15px;
    border-left: 3px solid #f44336;
}

.advice-box .solution {
    background: #e8f5e8;
    border-radius: 8px;
    padding: 15px;
    border-left: 3px solid #4caf50;
}

.advice-box .highlight {
    background: #ffeb3b;
    padding: 2px 6px;
    border-radius: 4px;
    font-weight: 600;
}

.stress-types {
    margin-bottom: 25px;
}

.stress-types h5 {
    margin: 0 0 20px 0;
    color: #d32f2f;
    display: flex;
    align-items: center;
    gap: 10px;
}

.stress-comparison {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.stress-type {
    background: white;
    border-radius: 12px;
    padding: 20px;
    border-left: 4px solid #f44336;
}

.stress-type.acute {
    background: #fff3e0;
    border-left-color: #ff9800;
}

.stress-type.chronic {
    background: #ffebee;
    border-left-color: #f44336;
}

.stress-type h6 {
    margin: 0 0 10px 0;
    color: #d32f2f;
    font-size: 1.1em;
}

.stress-mode, .stress-hormone {
    display: inline-block;
    background: #d32f2f;
    color: white;
    padding: 4px 8px;
    border-radius: 15px;
    font-size: 0.85em;
    font-weight: 600;
    margin-bottom: 10px;
}

.stress-type.acute .stress-mode {
    background: #ff9800;
}

.cortisol-cycle {
    margin-bottom: 25px;
}

.cortisol-cycle h5 {
    margin: 0 0 15px 0;
    color: #7b1fa2;
    display: flex;
    align-items: center;
    gap: 10px;
}

.cycle-diagram {
    background: #f3e5f5;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    border: 2px solid #9c27b0;
}

.cycle-element {
    background: white;
    border-radius: 10px;
    padding: 15px 20px;
    font-weight: bold;
    color: #7b1fa2;
    border: 2px solid #ce93d8;
}

.cycle-note {
    text-align: center;
    margin-top: 10px;
    font-style: italic;
    color: #666;
}

.brain-impact {
    margin-bottom: 25px;
}

.brain-impact h5 {
    margin: 0 0 15px 0;
    color: #1976d2;
    display: flex;
    align-items: center;
    gap: 10px;
}

.brain-areas {
    background: #e3f2fd;
    border-radius: 12px;
    padding: 20px;
    border-left: 4px solid #2196f3;
}

.brain-area {
    display: flex;
    align-items: center;
    gap: 15px;
}

.brain-area i {
    font-size: 2em;
    color: #f44336;
}

.area-info strong {
    display: block;
    color: #1565c0;
    margin-bottom: 5px;
}

.attention-impact {
    margin-bottom: 25px;
}

.attention-impact h5 {
    margin: 0 0 20px 0;
    color: #d32f2f;
    display: flex;
    align-items: center;
    gap: 10px;
}

.attention-chain {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    overflow-x: auto;
    border: 2px solid #e91e63;
}

.chain-step {
    background: white;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    min-width: 120px;
    border: 2px solid #e91e63;
    flex-shrink: 0;
}

.step-icon {
    font-size: 2em;
    margin-bottom: 10px;
}

.chain-arrow {
    font-size: 1.5em;
    color: #e91e63;
    font-weight: bold;
    flex-shrink: 0;
}

.processing-impact {
    margin-bottom: 25px;
}

.processing-impact h5 {
    margin: 0 0 20px 0;
    color: #7b1fa2;
    display: flex;
    align-items: center;
    gap: 10px;
}

.processing-breakdown {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.normal-state, .overloaded-state {
    background: white;
    border-radius: 12px;
    padding: 20px;
}

.normal-state {
    border-left: 4px solid #4caf50;
    background: #f1f8e9;
}

.overloaded-state {
    border-left: 4px solid #f44336;
    background: #ffebee;
}

.normal-state h6 {
    color: #2e7d32;
    margin: 0 0 15px 0;
}

.overloaded-state h6 {
    color: #c62828;
    margin: 0 0 15px 0;
}

.energy-depletion {
    margin-bottom: 25px;
}

.energy-depletion h5 {
    margin: 0 0 20px 0;
    color: #d32f2f;
    display: flex;
    align-items: center;
    gap: 10px;
}

.depletion-process {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 20px;
    border: 2px solid #f44336;
}

.depletion-cause, .depletion-result, .coping-mechanism {
    background: white;
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 15px;
    border-left: 3px solid #f44336;
}

.anger-boost {
    background: #ffeb3b;
    padding: 2px 6px;
    border-radius: 4px;
    font-weight: 600;
    color: #f57c00;
}

.tantrum-explanation {
    margin-bottom: 25px;
}

.tantrum-explanation h5 {
    margin: 0 0 15px 0;
    color: #d32f2f;
    display: flex;
    align-items: center;
    gap: 10px;
}

.tantrum-box {
    background: #fff3e0;
    border-radius: 12px;
    padding: 20px;
    border: 2px solid #ff9800;
}

.tantrum-box p:first-child {
    font-weight: bold;
    color: #e65100;
    margin-bottom: 10px;
}

.tantrum-box .explanation {
    margin: 0;
    font-style: italic;
    color: #333;
}

.green-time-benefits {
    margin-bottom: 25px;
}

.green-time-benefits h5 {
    margin: 0 0 20px 0;
    color: #2e7d32;
    display: flex;
    align-items: center;
    gap: 10px;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.benefit-item {
    background: white;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border-left: 4px solid #4caf50;
}

.benefit-item i {
    font-size: 1.5em;
    color: #4caf50;
    flex-shrink: 0;
    margin-top: 5px;
}

.benefit-content strong {
    display: block;
    color: #2e7d32;
    margin-bottom: 8px;
}

.benefit-content p {
    margin: 0;
    line-height: 1.4;
    color: #333;
    font-size: 0.9em;
}

.time-trade-off {
    margin-bottom: 25px;
}

.time-trade-off h5 {
    margin: 0 0 20px 0;
    color: #7b1fa2;
    display: flex;
    align-items: center;
    gap: 10px;
}

.trade-off-comparison {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.time-lost {
    background: #ffebee;
    border-radius: 12px;
    padding: 20px;
    border-left: 4px solid #f44336;
}

.consequences {
    background: #e8f5e8;
    border-radius: 12px;
    padding: 20px;
    border-left: 4px solid #4caf50;
}

.time-lost h6 {
    color: #c62828;
    margin: 0 0 15px 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.research-support {
    margin-bottom: 25px;
}

.research-support h5 {
    margin: 0 0 15px 0;
    color: #1976d2;
    display: flex;
    align-items: center;
    gap: 10px;
}

.research-findings {
    background: #e3f2fd;
    border-radius: 12px;
    padding: 20px;
    border-left: 4px solid #2196f3;
}

.findings-list {
    list-style: none;
    padding: 0;
    margin: 15px 0 0 0;
}

.findings-list li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
}

.findings-list li:before {
    content: "✓";
    color: #4caf50;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 8px;
}

.practical-solutions {
    margin: 30px 0;
    background: #f8f9fa;
    border-radius: 15px;
    padding: 30px;
}

.practical-solutions h3 {
    margin: 0 0 25px 0;
    color: #e91e63;
    display: flex;
    align-items: center;
    gap: 12px;
}

.solution-categories {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}

.solution-category {
    background: white;
    border-radius: 12px;
    padding: 25px;
    border-left: 4px solid #e91e63;
    box-shadow: 0 3px 10px rgba(233, 30, 99, 0.1);
}

.solution-category h4 {
    margin: 0 0 20px 0;
    color: #c2185b;
    display: flex;
    align-items: center;
    gap: 10px;
}

.solution-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.solution-list li {
    padding: 10px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
    border-bottom: 1px solid #f0f0f0;
}

.solution-list li:last-child {
    border-bottom: none;
}

.solution-list li:before {
    content: "💡";
    position: absolute;
    left: 0;
    top: 10px;
}

.expert-recommendations {
    margin: 30px 0;
    background: #e3f2fd;
    border-radius: 15px;
    padding: 30px;
    border-left: 5px solid #2196f3;
}

.expert-recommendations h3 {
    margin: 0 0 25px 0;
    color: #1565c0;
    display: flex;
    align-items: center;
    gap: 12px;
}

.age-based-recommendations {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}

.age-group-rec {
    background: white;
    border-radius: 12px;
    padding: 25px;
    border-left: 4px solid #2196f3;
    box-shadow: 0 3px 10px rgba(33, 150, 243, 0.1);
}

.age-group-rec h4 {
    margin: 0 0 15px 0;
    color: #1565c0;
    font-size: 1.2em;
}

.rec-content p {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 12px;
    margin: 0 0 15px 0;
    font-weight: 600;
    color: #d32f2f;
}

.rec-content ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.rec-content li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.4;
}

.rec-content li:before {
    content: "→";
    color: #2196f3;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 8px;
}

.warning-signs-section {
    margin: 30px 0;
    background: #fff3e0;
    border-radius: 15px;
    padding: 30px;
    border-left: 5px solid #ff9800;
}

.warning-signs-section h3 {
    margin: 0 0 25px 0;
    color: #e65100;
    display: flex;
    align-items: center;
    gap: 12px;
}

.warning-categories {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}

.warning-category {
    background: white;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 3px 10px rgba(255, 152, 0, 0.1);
}

.warning-category.immediate {
    border-left: 4px solid #f44336;
}

.warning-category.moderate {
    border-left: 4px solid #ff9800;
}

.warning-category h4 {
    margin: 0 0 15px 0;
    font-size: 1.1em;
}

.warning-category.immediate h4 {
    color: #c62828;
}

.warning-category.moderate h4 {
    color: #e65100;
}

.warning-category ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.warning-category li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    line-height: 1.4;
}

.warning-category.immediate li:before {
    content: "🚨";
    position: absolute;
    left: 0;
    top: 8px;
}

.warning-category.moderate li:before {
    content: "⚠️";
    position: absolute;
    left: 0;
    top: 8px;
}

.screen-time-conclusion {
    background: linear-gradient(135deg, #fce4ec, #f8bbd9);
    border-radius: 15px;
    padding: 30px;
    margin-top: 30px;
}

/* Screen Time Modal Enhanced Scrolling */
.pointing-modal#screenTimeBrainModal .pointing-modal-content {
    max-height: 95vh;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.pointing-modal#screenTimeBrainModal .pointing-modal-body {
    overflow-y: auto;
    overflow-x: hidden;
    max-height: calc(95vh - 140px);
    padding-right: 15px;
    margin-right: -15px;
}

.pointing-modal#screenTimeBrainModal .pointing-modal-body::-webkit-scrollbar {
    width: 12px;
}

.pointing-modal#screenTimeBrainModal .pointing-modal-body::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
    margin: 10px 0;
}

.pointing-modal#screenTimeBrainModal .pointing-modal-body::-webkit-scrollbar-thumb {
    background: linear-gradient(135deg, #e91e63, #c2185b);
    border-radius: 10px;
    box-shadow: inset 0 0 5px rgba(0,0,0,0.1);
}

.pointing-modal#screenTimeBrainModal .pointing-modal-body::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(135deg, #c2185b, #ad1457);
}

.pointing-modal#screenTimeBrainModal .pointing-modal-body {
    scrollbar-width: thin;
    scrollbar-color: #e91e63 #f1f1f1;
}

/* Responsive Design for Screen Time */
@media (max-width: 768px) {
    .pointing-modal#screenTimeBrainModal .pointing-modal-body {
        padding-right: 10px;
        margin-right: -10px;
    }
    
    .attention-chain {
        flex-direction: column;
    }
    
    .chain-arrow {
        transform: rotate(90deg);
    }
    
    .science-points {
        grid-template-columns: 1fr;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
    }
    
    .solution-categories {
        grid-template-columns: 1fr;
    }
    
    .age-based-recommendations {
        grid-template-columns: 1fr;
    }
    
    .effect-header {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    
    .effect-number {
        width: 40px;
        height: 40px;
        font-size: 1.2em;
    }
}

.challenge-box {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-top: 20px;
}

.challenge-icon {
    background: #ff9800;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.3em;
    flex-shrink: 0;
}

.challenge-content p {
    color: #e65100;
    margin-bottom: 15px;
    line-height: 1.6;
}

.knowledge-section {
    background: #e8f5e8;
    border-radius: 15px;
    padding: 25px;
}

.knowledge-benefits {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 25px;
}

.benefit-item {
    background: white;
    padding: 20px;
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.benefit-item:hover {
    transform: translateY(-3px);
}

.benefit-icon {
    background: #4caf50;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.1em;
    flex-shrink: 0;
}

.benefit-text h4 {
    color: #2e7d32;
    margin-bottom: 8px;
    font-size: 1em;
}

.benefit-text p {
    color: #666;
    font-size: 0.9em;
    line-height: 1.4;
    margin: 0;
}

.books-section {
    background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);
    border-radius: 15px;
    padding: 30px;
}

.books-intro {
    background: white;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 25px;
    border-left: 4px solid #9c27b0;
}

.books-intro p {
    color: #7b1fa2;
    line-height: 1.7;
    margin: 0;
}

.books-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin-top: 25px;
}

.book-card {
    background: white;
    border-radius: 15px;
    padding: 25px;
    position: relative;
    box-shadow: 0 8px 25px rgba(156, 39, 176, 0.15);
    transition: transform 0.3s ease;
    border: 2px solid transparent;
}

.book-card:hover {
    transform: translateY(-5px);
    border-color: #9c27b0;
    box-shadow: 0 15px 35px rgba(156, 39, 176, 0.25);
}

.book-number {
    position: absolute;
    top: -15px;
    left: 25px;
    background: #9c27b0;
    color: white;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.1em;
    box-shadow: 0 4px 10px rgba(156, 39, 176, 0.3);
}

.book-content h4 {
    color: #7b1fa2;
    margin-bottom: 15px;
    font-size: 1.2em;
    margin-top: 10px;
}

.book-content p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
}

.book-features {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.book-features span {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #4caf50;
    font-size: 0.9em;
    font-weight: 500;
}

.book-features i {
    color: #4caf50;
    font-size: 0.8em;
}

.parents-conclusion {
    background: linear-gradient(135deg, #e8f5e8 0%, #c8e6c9 100%);
    border-radius: 15px;
    padding: 30px;
    text-align: center;
}

.parents-conclusion .conclusion-highlight {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    margin-bottom: 20px;
}

.parents-conclusion .conclusion-highlight i {
    color: #9c27b0;
    font-size: 2em;
}

.parents-conclusion .conclusion-highlight h3 {
    color: #7b1fa2;
    margin: 0;
}

.parents-cta {
    background: #e0f2fe;
    border-radius: 12px;
    padding: 20px;
    margin-top: 25px;
}

.parents-cta .cta-content h4 {
    color: #0c4a6e;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.parents-cta .cta-content p {
    color: #0369a1;
    margin: 0;
}

/* Golden Period Document */
.golden-period-section {
    padding: 40px 0;
    background: #fffbf0;
}

.golden-period-doc {
    background: linear-gradient(135deg, #fff8e1 0%, #ffecb3 100%);
    border: 2px solid #ffc107;
}

/* Download All Section */
.download-all-section {
    padding: 60px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.download-all-card {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 40px;
    border: 3px solid #667eea;
}

.download-content {
    display: flex;
    align-items: center;
    gap: 25px;
    flex: 1;
}

.download-icon {
    background: linear-gradient(135deg, #667eea, #764ba2);
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 2em;
}

.download-text h3 {
    color: #1e293b;
    font-size: 1.8em;
    margin-bottom: 10px;
}

.download-text p {
    color: #64748b;
    margin-bottom: 20px;
    line-height: 1.6;
}

.included-docs {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.included-docs span {
    background: #f8fafc;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 0.9em;
    color: #475569;
    border: 1px solid #e2e8f0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.included-docs span i {
    color: #10b981;
}

.btn-download-all {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    border: none;
    padding: 20px 30px;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    font-size: 1.1em;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 5px;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
}

.btn-download-all:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
}

.btn-download-all i {
    font-size: 1.5em;
    margin-bottom: 5px;
}

.btn-download-all small {
    font-size: 0.8em;
    opacity: 0.9;
    font-weight: normal;
}

/* Golden Period Modal Styles */
.intro-golden {
    background: #fff8e1;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    border-left: 5px solid #ffc107;
}

.golden-highlight {
    background: linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%);
    border-radius: 15px;
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 20px;
    margin: 20px 0;
    border: 2px solid #ffc107;
}

.highlight-icon {
    background: #ffc107;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
    font-size: 1.8em;
    flex-shrink: 0;
}

.brain-development {
    margin-top: 25px;
}

.development-list {
    list-style: none;
    padding: 0;
    margin-top: 15px;
}

.development-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 12px 0;
    color: #475569;
    line-height: 1.6;
}

.development-list i {
    color: #ffc107;
    margin-top: 2px;
    width: 20px;
}

.reality-check {
    background: #fef2f2;
    border-radius: 15px;
    padding: 25px;
    border-left: 5px solid #ef4444;
}

.reality-box {
    display: flex;
    gap: 25px;
    margin-top: 20px;
    align-items: center;
}

.reality-stat {
    text-align: center;
    flex-shrink: 0;
}

.stat-number {
    font-size: 3em;
    font-weight: 800;
    color: #ef4444;
    line-height: 1;
}

.stat-text {
    color: #7f1d1d;
    font-size: 0.9em;
    font-weight: 600;
    margin-top: 5px;
}

.reality-content p {
    color: #7f1d1d;
    margin-bottom: 10px;
}

.message-section {
    background: linear-gradient(135deg, #fff8e1 0%, #ffecb3 100%);
    border-radius: 15px;
    padding: 30px;
}

.foundation-message {
    display: flex;
    align-items: flex-start;
    gap: 20px;
}

.message-icon {
    background: #ffc107;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
    font-size: 1.3em;
    flex-shrink: 0;
}

.foundation-message blockquote {
    margin: 0;
    font-style: italic;
    color: #f57c00;
    line-height: 1.7;
    border-left: 4px solid #ffc107;
    padding-left: 20px;
}

.action-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 25px;
}

.action-card {
    background: white;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.action-card:hover {
    transform: translateY(-3px);
}

.action-card.observe {
    border-top: 4px solid #2196f3;
}

.action-card.milestones {
    border-top: 4px solid #4caf50;
}

.action-card.early-detection {
    border-top: 4px solid #ff9800;
}

.action-card.intervention {
    border-top: 4px solid #f44336;
}

.action-icon {
    background: linear-gradient(135deg, #ffc107, #ff9800);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    color: white;
    font-size: 1.2em;
}

.action-card h4 {
    color: #f57c00;
    margin-bottom: 12px;
    font-size: 1.1em;
}

.action-card p {
    color: #666;
    line-height: 1.5;
    font-size: 0.95em;
}

.golden-conclusion {
    background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    border-radius: 15px;
    padding: 30px;
    text-align: center;
}

.conclusion-highlight {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    margin-bottom: 20px;
}

.conclusion-highlight i {
    color: #ffc107;
    font-size: 2em;
}

.conclusion-highlight h3 {
    color: #f57c00;
    margin: 0;
}

.call-to-action {
    background: #e0f2fe;
    border-radius: 12px;
    padding: 20px;
    margin-top: 25px;
}

.cta-content h4 {
    color: #0c4a6e;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.cta-content p {
    color: #0369a1;
    margin: 0;
}

/* Toilet Training Document */
.toilet-training-section {
    padding: 40px 0;
    background: #f1f8e9;
}

.toilet-training-doc {
    background: linear-gradient(135deg, #e8f5e8 0%, #c8e6c9 100%);
    border: 2px solid #4caf50;
}

/* Toilet Training Modal Specific Styles */
.intro-section {
    background: #f1f8e9;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
}

.timeline-overview {
    display: flex;
    gap: 15px;
    margin-top: 20px;
    flex-wrap: wrap;
}

.phase-overview {
    display: flex;
    align-items: center;
    gap: 8px;
    background: white;
    padding: 10px 15px;
    border-radius: 20px;
    box-shadow: 0 2px 8px rgba(76, 175, 80, 0.2);
    flex: 1;
    min-width: 200px;
}

.phase-number {
    background: #4caf50;
    color: white;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 0.9em;
}

.phase-section {
    background: white;
    border-left: 5px solid #4caf50;
    border-radius: 10px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
}

.phase-goal {
    background: #e8f5e8;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 20px;
    color: #2e7d32;
    border-left: 4px solid #4caf50;
}

.step-list {
    list-style: none;
    padding: 0;
}

.step-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 12px 0;
    color: #455a64;
    line-height: 1.6;
    border-bottom: 1px solid #f5f5f5;
}

.step-list li:last-child {
    border-bottom: none;
}

.step-list i {
    color: #4caf50;
    margin-top: 2px;
    width: 20px;
}

.tips-section {
    background: #f9f9f9;
    border-radius: 15px;
    padding: 30px;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 25px;
}

.tip-card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 3px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.tip-card:hover {
    transform: translateY(-3px);
}

.tip-card.patience {
    border-top: 4px solid #ff9800;
}

.tip-card.schedule {
    border-top: 4px solid #2196f3;
}

.tip-card.sensory {
    border-top: 4px solid #9c27b0;
}

.tip-card.consistency {
    border-top: 4px solid #f44336;
}

.tip-icon {
    background: linear-gradient(135deg, #4caf50, #388e3c);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    color: white;
    font-size: 1.2em;
}

.tip-card h4 {
    color: #2e7d32;
    margin-bottom: 12px;
    font-size: 1.1em;
}

.tip-card p {
    color: #666;
    line-height: 1.5;
    font-size: 0.95em;
}

.success-note {
    background: #c8e6c9;
    border: 2px solid #4caf50;
    border-radius: 10px;
    padding: 15px 20px;
    margin-top: 20px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.success-note i {
    color: #ff9800;
    font-size: 1.3em;
}

.success-note span {
    color: #1b5e20;
    font-weight: 600;
}

/* Additional Featured Document */
.additional-featured-section {
    padding: 40px 0;
    background: #fafafa;
}

.speech-delay-doc {
    background: linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%);
    border: 2px solid #ff9800;
}

/* Speech Delay Modal Specific Styles */
.sign-list {
    list-style: none;
    padding: 0;
    margin-top: 15px;
}

.sign-list li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 8px 0;
    color: #475569;
    line-height: 1.5;
}

.delay-signs .sign-list i {
    color: #ef4444;
    margin-top: 2px;
}

.lazy-signs .sign-list i {
    color: #10b981;
    margin-top: 2px;
}

.comparison-table {
    background: #f8fafc;
    border-radius: 15px;
    padding: 25px;
}

.comparison-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 1px;
    background: #e2e8f0;
    border-radius: 8px;
    overflow: hidden;
}

.comparison-header {
    display: contents;
}

.comparison-header > div {
    background: #1e293b;
    color: white;
    padding: 12px;
    font-weight: 600;
    text-align: center;
}

.comparison-row {
    display: contents;
}

.comparison-row > div {
    background: white;
    padding: 12px;
    display: flex;
    align-items: center;
}

.comp-title {
    font-weight: 600;
    color: #334155;
    background: #f1f5f9 !important;
}

.comp-delay {
    background: #fef2f2 !important;
    color: #7f1d1d;
}

.comp-lazy {
    background: #f0fdf4 !important;
    color: #14532d;
}

.advice-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin-top: 20px;
}

.advice-card {
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.delay-advice {
    border-left: 5px solid #ef4444;
}

.lazy-advice {
    border-left: 5px solid #10b981;
}

.advice-icon {
    background: linear-gradient(135deg, #ff9800, #f57c00);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
    color: white;
    font-size: 1.2em;
}

.advice-card h4 {
    color: #1e293b;
    margin-bottom: 10px;
}

.advice-card ul {
    margin-top: 10px;
    padding-left: 20px;
}

.advice-card ul li {
    margin-bottom: 5px;
    color: #64748b;
}

.important-note {
    background: #fffbeb;
    border: 2px solid #f59e0b;
    border-radius: 12px;
    padding: 20px;
    margin-top: 25px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.important-note i {
    color: #d97706;
    font-size: 1.2em;
    margin-top: 2px;
}

.important-note span {
    color: #92400e;
    line-height: 1.5;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 2.2em;
    }
    
    .featured-document {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }
    
    .featured-actions {
        flex-direction: row;
        justify-content: center;
    }
    
    .categories-grid {
        grid-template-columns: 1fr;
    }
    
    .newsletter-form .form-group {
        flex-direction: column;
    }
    
    .modal-content-pointing {
        margin: 0;
        border-radius: 0;
        max-height: 100vh;
    }
    
    .comparison-grid {
        grid-template-columns: 1fr;
    }
    
    .comparison-header > div:nth-child(2),
    .comparison-header > div:nth-child(3) {
        display: none;
    }
    
    .comparison-row > div:nth-child(2),
    .comparison-row > div:nth-child(3) {
        display: none;
    }
    
    .advice-grid {
        grid-template-columns: 1fr;
    }
    
    .document-images .main-image {
        flex-direction: column;
    }
    
    .timeline-overview {
        flex-direction: column;
    }
    
    .tips-grid {
        grid-template-columns: 1fr;
    }
    
    .download-all-card {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }
    
    .included-docs {
        justify-content: center;
    }
    
    .reality-box {
        flex-direction: column;
        text-align: center;
    }
    
    .foundation-message {
        flex-direction: column;
        text-align: center;
    }
    
    .action-cards {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Enhanced error handling and console cleanup
window.addEventListener('error', function(e) {
    // Suppress common jQuery/WordPress errors that don't affect functionality
    if (e.message.includes('$ is not a function') || 
        e.message.includes('jQuery is not defined') ||
        e.message.includes('Cannot set properties of null') ||
        e.message.includes('initializeNavigation')) {
        console.log('Suppressed jQuery/DOM error:', e.message);
        return true; // Prevents error from showing in console
    }
    return false; // Allow other errors to show
});

// Enhanced jQuery fallback with better compatibility
if (typeof window.$ === 'undefined') {
    window.$ = function(selector) {
        return {
            ready: function(callback) {
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', callback);
                } else {
                    callback();
                }
            },
            each: function() { return this; },
            addClass: function() { return this; },
            removeClass: function() { return this; },
            toggleClass: function() { return this; },
            on: function() { return this; },
            off: function() { return this; },
            attr: function() { return ''; },
            length: 0
        };
    };
    
    // Also set jQuery if it's not defined
    if (typeof window.jQuery === 'undefined') {
        window.jQuery = window.$;
    }
}

function showPointingDocument() {
    document.getElementById('pointingModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closePointingModal() {
    document.getElementById('pointingModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadPointingGuide() {
    alert('Tính năng tải tài liệu sẽ được bổ sung. Vui lòng liên hệ Hand in Hand Foundation để nhận tài liệu.');
}

function shareDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Chỉ tay ở trẻ: Dấu hiệu nhỏ, ý nghĩa lớn',
            text: 'Tài liệu quan trọng về phát triển giao tiếp và phát hiện sớm tự kỷ',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        navigator.clipboard.writeText(url).then(() => {
            alert('Link đã được sao chép!');
        });
    }
}

// Close modal when clicking outside
document.getElementById('pointingModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closePointingModal();
    }
});

// Toilet Training Document Functions
function showToiletTrainingDocument() {
    document.getElementById('toiletTrainingModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeToiletTrainingModal() {
    document.getElementById('toiletTrainingModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadToiletTrainingGuide() {
    alert('Tính năng tải tài liệu "Lộ trình tập ngồi bồn cầu cho trẻ tự kỷ" sẽ được bổ sung. Vui lòng liên hệ Hand in Hand Foundation.');
}

function shareToiletTrainingDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Lộ trình tập ngồi bồn cầu cho trẻ tự kỷ',
            text: 'Hướng dẫn chi tiết 4 giai đoạn để trẻ tự kỷ học kỹ năng đi vệ sinh độc lập',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Close toilet training modal when clicking outside
document.getElementById('toiletTrainingModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeToiletTrainingModal();
    }
});

// Speech Delay Document Functions
function showSpeechDelayDocument() {
    document.getElementById('speechDelayModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeSpeechDelayModal() {
    document.getElementById('speechDelayModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadSpeechDelayGuide() {
    alert('Tính năng tải tài liệu "Trẻ chậm nói vs Trẻ lười nói" sẽ được bổ sung. Vui lòng liên hệ Hand in Hand Foundation.');
}

function shareSpeechDelayDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Trẻ "chậm nói" khác với trẻ "lười nói"',
            text: 'Tài liệu phân biệt trẻ chậm nói và lười nói để có phương pháp can thiệp phù hợp',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Close speech delay modal when clicking outside
document.getElementById('speechDelayModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeSpeechDelayModal();
    }
});

// Golden Period Document Functions
function showGoldenPeriodDocument() {
    document.getElementById('goldenPeriodModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeGoldenPeriodModal() {
    document.getElementById('goldenPeriodModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadGoldenPeriodGuide() {
    alert('Tính năng tải tài liệu "Giai đoạn vàng để can thiệp" sẽ được bổ sung. Vui lòng liên hệ Hand in Hand Foundation.');
}

function shareGoldenPeriodDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Đừng bỏ lỡ giai đoạn vàng để can thiệp cho con!',
            text: 'Tại sao can thiệp trước 3 tuổi là giai đoạn kim cương quý giá nhất cho sự phát triển của trẻ?',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Download All Documents Function
function downloadAllDocuments() {
    // Create a comprehensive notification about the document package
    const message = `
🎯 BỘ TÀI LIỆU CHUYÊN MÔN HAND IN HAND FOUNDATION

📋 Bao gồm 16 tài liệu:
• Chỉ tay ở trẻ: Dấu hiệu nhỏ, ý nghĩa lớn
• Trẻ "chậm nói" khác với trẻ "lười nói"  
• Lộ trình tập ngồi bồn cầu cho trẻ tự kỷ
• Đừng bỏ lỡ giai đoạn vàng để can thiệp
• Cha mẹ - Người thầy đầu tiên và tuyệt vời nhất của con
• 7 sai lầm thường gặp khi phụ huynh tự can thiệp trẻ chậm nói tại nhà
• Sàng lọc thính lực - Bước đầu quan trọng trong hành trình hỗ trợ trẻ chậm nói
• Ghế kê chân: Công cụ hỗ trợ toilet tuyệt vời cho trẻ ASD
• Trường mầm non hay trung tâm can thiệp - Đâu là nơi phù hợp cho trẻ khuyết tật?
• Trẻ khiếm thính dây thần kinh mảnh và tầm quan trọng của AVT
• Hỏi đáp về một số vấn đề của trẻ RLPTK
• Ảnh hưởng màn hình của thiết bị điện tử đến não thế nào?
• Những cách mà người lớn có thể tác động đến việc giao tiếp của một trẻ tự kỷ
• Giao tiếp và tương tác là gì?
• Nhai và cấu trúc thức ăn
• Chiến lược giao tiếp chuyên sâu (Intensive Interaction)

📧 Tính năng tải về sẽ được bổ sung sớm.
Vui lòng liên hệ Hand in Hand Foundation để nhận bộ tài liệu hoàn chỉnh.

📞 Hotline: [Số điện thoại]
✉️ Email: [Email liên hệ]
`;
    
    alert(message);
    
    // Optional: Track download intent for analytics
    console.log('User requested full document download package with 16 documents');
}

// Close golden period modal when clicking outside
document.getElementById('goldenPeriodModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeGoldenPeriodModal();
    }
});

// Parents Teacher Document Functions
function showParentsTeacherDocument() {
    console.log('showParentsTeacherDocument called');
    
    function attemptToShowModal() {
        const modal = document.getElementById('parentsTeacherModal');
        console.log('Attempting to find modal, result:', modal);
        
        if (modal) {
            // Force display properties
            modal.style.display = 'flex';
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.left = '0';
            modal.style.width = '100%';
            modal.style.height = '100%';
            modal.style.zIndex = '9999';
            modal.style.background = 'rgba(0,0,0,0.8)';
            
            document.body.style.overflow = 'hidden';
            console.log('Parents Teacher Modal opened successfully');
            return true;
        } else {
            console.error('Parents Teacher Modal element not found');
            return false;
        }
    }
    
    // Try immediately
    if (!attemptToShowModal()) {
        // If not found, wait for DOM to be ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(attemptToShowModal, 100);
            });
        } else {
            // DOM is ready, try again after a short delay
            setTimeout(function() {
                if (!attemptToShowModal()) {
                    alert('Không thể mở tài liệu. Vui lòng tải lại trang.');
                }
            }, 200);
        }
    }
}

function closeParentsTeacherModal() {
    const modal = document.getElementById('parentsTeacherModal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

function downloadParentsTeacherGuide() {
    alert('Tính năng tải tài liệu "Cha mẹ - người thầy đầu tiên và tuyệt vời nhất của con" sẽ được bổ sung. Vui lòng liên hệ Hand in Hand Foundation.');
}

function shareParentsTeacherDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Cha mẹ - người thầy đầu tiên và tuyệt vời nhất của con',
            text: 'Hướng dẫn cho cha mẹ trong việc giáo dục và phát triển con cái từ sớm',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Enhanced Parents Teacher Modal Initialization
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initializing Parents Teacher Modal...');
    
    // Override the main.js function if it exists
    if (typeof window.showParentsTeacherDocument === 'function') {
        console.log('Overriding main.js showParentsTeacherDocument function');
        
        // Store the original function as backup
        window.originalShowParentsTeacherDocument = window.showParentsTeacherDocument;
        
        // Override with our version
        window.showParentsTeacherDocument = function() {
            console.log('Using overridden showParentsTeacherDocument function');
            
            const modal = document.getElementById('parentsTeacherModal');
            if (modal) {
                modal.style.display = 'flex';
                modal.style.position = 'fixed';
                modal.style.top = '0';
                modal.style.left = '0';
                modal.style.width = '100%';
                modal.style.height = '100%';
                modal.style.zIndex = '9999';
                modal.style.background = 'rgba(0,0,0,0.8)';
                document.body.style.overflow = 'hidden';
                console.log('Parents Teacher Modal opened successfully via override');
            } else {
                console.error('Parents Teacher Modal not found');
                alert('Không thể mở tài liệu. Vui lòng tải lại trang.');
            }
        };
    }
    
    // Ensure modal exists
    const modal = document.getElementById('parentsTeacherModal');
    if (modal) {
        console.log('Parents Teacher Modal found during initialization');
        
        // Add click outside to close
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeParentsTeacherModal();
            }
        });
    } else {
        console.error('Parents Teacher Modal NOT found during initialization');
    }
    
    // Add backup event listener to button
    const button = document.querySelector('button[onclick*="showParentsTeacherDocument"]');
    if (button) {
        console.log('Parents Teacher button found, adding backup event listener');
        button.addEventListener('click', function(e) {
            // Don't prevent default, let onclick work too
            console.log('Button clicked via event listener backup');
        });
    }
});

// Mistakes Document Functions
function showMistakesDocument() {
    document.getElementById('mistakesModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeMistakesModal() {
    document.getElementById('mistakesModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadMistakesGuide() {
    alert('Tính năng tải tài liệu "7 sai lầm thường gặp khi phụ huynh tự can thiệp trẻ chậm nói tại nhà" sẽ được bổ sung. Vui lòng liên hệ Hand in Hand Foundation.');
}

function shareMistakesDocument() {
    if (navigator.share) {
        navigator.share({
            title: '7 sai lầm thường gặp khi phụ huynh tự can thiệp trẻ chậm nói tại nhà',
            text: 'Những sai lầm phổ biến mà phụ huynh cần tránh khi can thiệp trẻ chậm nói',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Close mistakes modal when clicking outside
document.getElementById('mistakesModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeMistakesModal();
    }
});

// Hearing Screening Document Functions
function showHearingScreeningDocument() {
    document.getElementById('hearingScreeningModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeHearingScreeningModal() {
    document.getElementById('hearingScreeningModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadHearingScreeningGuide() {
    alert('Tính năng tải tài liệu "Sàng lọc thính lực - Bước đầu quan trọng trong hành trình hỗ trợ trẻ chậm nói" sẽ được bổ sung. Vui lòng liên hệ Hand in Hand Foundation.');
}

function shareHearingScreeningDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Sàng lọc thính lực - Bước đầu quan trọng trong hành trình hỗ trợ trẻ chậm nói',
            text: 'Tại sao việc kiểm tra thính lực lại quan trọng? Hiểu rõ để đưa ra quyết định đúng đắn cho con.',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Close hearing screening modal when clicking outside
document.getElementById('hearingScreeningModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeHearingScreeningModal();
    }
});

// Toilet Stool Document Functions
function showToiletStoolDocument() {
    document.getElementById('toiletStoolModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeToiletStoolModal() {
    document.getElementById('toiletStoolModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadToiletStoolGuide() {
    alert('Tính năng tải tài liệu "Ghế kê chân: Công cụ hỗ trợ toilet tuyệt vời cho trẻ ASD" sẽ được bổ sung. Vui lòng liên hệ Hand in Hand Foundation.');
}

function shareToiletStoolDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Ghế kê chân: Công cụ hỗ trợ toilet tuyệt vời cho trẻ ASD',
            text: 'Tư thế sinh lý đúng, cảm giác an toàn, khuyến khích tính độc lập cho trẻ ASD.',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Close toilet stool modal when clicking outside
document.getElementById('toiletStoolModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeToiletStoolModal();
    }
});

// Kindergarten vs Center Document Functions
function showKindergartenCenterDocument() {
    document.getElementById('kindergartenCenterModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeKindergartenCenterModal() {
    document.getElementById('kindergartenCenterModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadKindergartenCenterGuide() {
    alert('Tính năng tải tài liệu "Trường mầm non hay trung tâm can thiệp - Đâu là nơi phù hợp cho trẻ khuyết tật?" sẽ được bổ sung. Vui lòng liên hệ Hand in Hand Foundation.');
}

function shareKindergartenCenterDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Trường mầm non hay trung tâm can thiệp - Đâu là nơi phù hợp cho trẻ khuyết tật?',
            text: 'Phân tích từ khoa học và thực tiễn về lựa chọn giáo dục phù hợp cho trẻ có nhu cầu đặc biệt.',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Hearing Impaired AVT Document Functions
function showHearingImpairedAVTDocument() {
    document.getElementById('hearingImpairedAVTModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeHearingImpairedAVTModal() {
    document.getElementById('hearingImpairedAVTModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadHearingImpairedAVTGuide() {
    alert('Đang chuẩn bị tải xuống "Trẻ khiếm thính dây thần kinh mảnh và AVT"...\n\nTài liệu sẽ bao gồm:\n• Đặc điểm dây thần kinh mảnh\n• Tác động phát hiện muộn\n• Tầm quan trọng AVT\n• Phân tích hậu quả\n• Giải pháp can thiệp\n• Bằng chứng khoa học');
}

function shareHearingImpairedAVTGuide() {
    if (navigator.share) {
        navigator.share({
            title: 'Trẻ khiếm thính dây thần kinh mảnh và AVT',
            text: 'Tầm quan trọng can thiệp AVT sớm cho trẻ khiếm thính có dây thần kinh mảnh phát hiện muộn.',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// RLPTK Q&A Document Functions (Basic versions - replaced by enhanced versions below)
/*
function showRLPTKQADocument() {
    document.getElementById('rlptkQAModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeRLPTKQAModal() {
    document.getElementById('rlptkQAModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}
*/

function downloadRLPTKQAGuide() {
    alert('Đang chuẩn bị tải xuống "Hỏi đáp về một số vấn đề của trẻ RLPTK"...\n\nTài liệu sẽ bao gồm:\n• Nhận biết và chẩn đoán RLPTK\n• Phương pháp can thiệp hiệu quả\n• Hỗ trợ gia đình\n• Định hướng tương lai\n• Tài nguyên hữu ích\n• Câu hỏi thường gặp');
}

function shareRLPTKQADocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Hỏi đáp về một số vấn đề của trẻ RLPTK',
            text: 'Tổng hợp câu hỏi thường gặp và giải đáp chuyên môn về rối loạn phát triển toàn diện ở trẻ em.',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Enhanced RLPTK Modal Functions
function toggleAnswer(qaItem) {
    const isExpanded = qaItem.classList.contains('expanded');
    
    if (isExpanded) {
        qaItem.classList.remove('expanded');
    } else {
        qaItem.classList.add('expanded');
    }
}

function scrollToSection(sectionId, navItem) {
    // Update navigation active state
    document.querySelectorAll('.rlptk-nav-item').forEach(item => {
        item.classList.remove('active');
    });
    navItem.classList.add('active');
    
    // Scroll to section
    const section = document.getElementById(sectionId);
    if (section) {
        const modalBody = document.querySelector('#rlptkQAModal .pointing-modal-body');
        const sectionTop = section.offsetTop - 100; // Account for sticky nav
        modalBody.scrollTo({
            top: sectionTop,
            behavior: 'smooth'
        });
    }
}

function scrollToTop() {
    const modalBody = document.querySelector('#rlptkQAModal .pointing-modal-body');
    if (modalBody) {
        modalBody.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}

function updateReadingProgress() {
    const modalBody = document.querySelector('#rlptkQAModal .pointing-modal-body');
    const progressBar = document.getElementById('readingProgress');
    const scrollToTopBtn = document.getElementById('scrollToTop');
    
    if (!modalBody || !progressBar) return;
    
    const scrollTop = modalBody.scrollTop;
    const scrollHeight = modalBody.scrollHeight - modalBody.clientHeight;
    const scrollPercent = (scrollTop / scrollHeight) * 100;
    
    progressBar.style.width = scrollPercent + '%';
    
    // Show/hide scroll to top button
    if (scrollTop > 300) {
        scrollToTopBtn.classList.add('visible');
    } else {
        scrollToTopBtn.classList.remove('visible');
    }
}

function updateActiveNavigation() {
    const modalBody = document.querySelector('#rlptkQAModal .pointing-modal-body');
    if (!modalBody) return;
    
    const sections = ['nhan-biet', 'can-thiep', 'gia-dinh', 'tuong-lai'];
    const navItems = document.querySelectorAll('.rlptk-nav-item');
    
    const scrollTop = modalBody.scrollTop + 120; // Account for sticky nav
    
    let activeSection = sections[0];
    
    sections.forEach(sectionId => {
        const section = document.getElementById(sectionId);
        if (section && section.offsetTop <= scrollTop) {
            activeSection = sectionId;
        }
    });
    
    // Update navigation
    navItems.forEach((item, index) => {
        item.classList.remove('active');
        if (sections[index] === activeSection) {
            item.classList.add('active');
        }
    });
}

// Enhanced RLPTK Modal Show Function
function showRLPTKQADocument() {
    document.getElementById('rlptkQAModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
    
    // Setup scroll listeners
    const modalBody = document.querySelector('#rlptkQAModal .pointing-modal-body');
    if (modalBody) {
        modalBody.addEventListener('scroll', function() {
            updateReadingProgress();
            updateActiveNavigation();
        });
    }
    
    // Initialize progress
    setTimeout(() => {
        updateReadingProgress();
        updateActiveNavigation();
    }, 100);
}

// Enhanced Close Function
function closeRLPTKQAModal() {
    document.getElementById('rlptkQAModal').style.display = 'none';
    document.body.style.overflow = 'auto';
    
    // Reset all expanded items
    document.querySelectorAll('#rlptkQAModal .qa-item.expanded').forEach(item => {
        item.classList.remove('expanded');
    });
    
    // Reset navigation
    document.querySelectorAll('.rlptk-nav-item').forEach(item => {
        item.classList.remove('active');
    });
    document.querySelector('.rlptk-nav-item').classList.add('active');
    
    // Reset progress
    document.getElementById('readingProgress').style.width = '0%';
    document.getElementById('scrollToTop').classList.remove('visible');
}

// Close hearing impaired AVT modal when clicking outside
document.getElementById('hearingImpairedAVTModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeHearingImpairedAVTModal();
    }
});

// Screen Time Brain Effects Document Functions
function showScreenTimeBrainDocument() {
    document.getElementById('screenTimeBrainModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
    
    // Setup scroll listeners for Screen Time modal
    const modalBody = document.querySelector('#screenTimeBrainModal .pointing-modal-body');
    if (modalBody) {
        modalBody.addEventListener('scroll', function() {
            updateScreenTimeProgress();
        });
    }
    
    // Initialize progress
    setTimeout(() => {
        updateScreenTimeProgress();
    }, 100);
}

function closeScreenTimeBrainModal() {
    document.getElementById('screenTimeBrainModal').style.display = 'none';
    document.body.style.overflow = 'auto';
    
    // Reset progress
    const progressBar = document.getElementById('screenTimeProgress');
    const scrollBtn = document.getElementById('screenTimeScrollTop');
    if (progressBar) progressBar.style.width = '0%';
    if (scrollBtn) scrollBtn.classList.remove('visible');
}

function downloadScreenTimeBrainGuide() {
    alert('Đang chuẩn bị tải xuống "Ảnh hưởng màn hình của thiết bị điện tử đến não"...\n\nTài liệu sẽ bao gồm:\n• 6 tác động của thời gian màn hình\n• Nghiên cứu khoa học từ Victoria L. Dunckley\n• Giải pháp thực tế cho gia đình\n• Khuyến nghị theo độ tuổi\n• Dấu hiệu cảnh báo\n• Strategies bảo vệ não bộ');
}

function shareScreenTimeBrainDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Ảnh hưởng màn hình của thiết bị điện tử đến não thế nào?',
            text: 'Nghiên cứu khoa học về 6 cách thời gian màn hình thay đổi bộ não trẻ em - Victoria L. Dunckley',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

function scrollToTopScreenTime() {
    const modalBody = document.querySelector('#screenTimeBrainModal .pointing-modal-body');
    if (modalBody) {
        modalBody.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}

function updateScreenTimeProgress() {
    const modalBody = document.querySelector('#screenTimeBrainModal .pointing-modal-body');
    const progressBar = document.getElementById('screenTimeProgress');
    const scrollToTopBtn = document.getElementById('screenTimeScrollTop');
    
    if (!modalBody || !progressBar) return;
    
    const scrollTop = modalBody.scrollTop;
    const scrollHeight = modalBody.scrollHeight - modalBody.clientHeight;
    const scrollPercent = (scrollTop / scrollHeight) * 100;
    
    progressBar.style.width = scrollPercent + '%';
    
    // Show/hide scroll to top button
    if (scrollTop > 300) {
        scrollToTopBtn.classList.add('visible');
    } else {
        scrollToTopBtn.classList.remove('visible');
    }
}

// Autism Communication Modal Functions
function showAutismCommunicationDocument() {
    document.getElementById('autismCommunicationModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeAutismCommunicationModal() {
    document.getElementById('autismCommunicationModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadAutismCommunicationGuide() {
    alert('Đang chuẩn bị tải xuống "Chiến lược giao tiếp với trẻ tự kỷ"...\n\nTài liệu sẽ bao gồm:\n• 12 chiến lược hiệu quả\n• Hướng dẫn thực tế từ Philippa Pettitt\n• Ví dụ cụ thể cho từng chiến lược\n• Kỹ thuật tương tác hai chiều\n• Phương pháp theo dẫn dắt của trẻ\n• Chiến lược khuyến khích giao tiếp');
    
    // Simulate download process
    setTimeout(() => {
        const link = document.createElement('a');
        link.href = '#';
        link.download = 'chien-luoc-giao-tiep-tre-tu-ky.pdf';
        link.click();
        
        // Track download
        if (typeof gtag !== 'undefined') {
            gtag('event', 'download', {
                event_category: 'Documents',
                event_label: 'Autism Communication Strategies',
                value: 1
            });
        }
    }, 1000);
}

function shareAutismCommunicationDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Những cách mà người lớn có thể tác động đến việc giao tiếp của một trẻ tự kỷ',
            text: '12 chiến lược hiệu quả giúp người lớn tác động tích cực đến kỹ năng giao tiếp của trẻ em có rối loạn phổ tự kỷ',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Communication and Interaction Modal Functions
function showCommunicationInteractionDocument() {
    document.getElementById('communicationInteractionModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeCommunicationInteractionModal() {
    document.getElementById('communicationInteractionModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadCommunicationInteractionGuide() {
    alert('Đang chuẩn bị tải xuống "Giao tiếp và tương tác là gì?"...\n\nTài liệu sẽ bao gồm:\n• Định nghĩa giao tiếp và tương tác\n• Thấu hiểu cách trẻ giao tiếp\n• Nhại lời và phát triển ngôn ngữ\n• 2 kiểu giao tiếp chính\n• 4 giai đoạn phát triển theo Hanen\n• Hướng dẫn từ Philippa Pettitt');
    
    // Simulate download process
    setTimeout(() => {
        const link = document.createElement('a');
        link.href = '#';
        link.download = 'giao-tiep-va-tuong-tac-la-gi.pdf';
        link.click();
        
        // Track download
        if (typeof gtag !== 'undefined') {
            gtag('event', 'download', {
                event_category: 'Documents',
                event_label: 'Communication and Interaction Guide',
                value: 1
            });
        }
    }, 1000);
}

function shareCommunicationInteractionDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Giao tiếp và tương tác là gì?',
            text: 'Hiểu rõ bản chất của giao tiếp và tương tác, từ giao tiếp phi ngôn ngữ đến 4 giai đoạn phát triển theo chương trình Hanen',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Food Structure Modal Functions
function showFoodStructureDocument() {
    document.getElementById('foodStructureModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeFoodStructureModal() {
    document.getElementById('foodStructureModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadFoodStructureGuide() {
    alert('Đang chuẩn bị tải xuống "Nhai và cấu trúc thức ăn"...\n\nTài liệu sẽ bao gồm:\n• Cấu trúc thức ăn theo độ tuổi\n• Giải pháp cho trẻ lớn bỏ qua cấu trúc\n• 4 giai đoạn: Puréed, Lumpy, Diced, Hoàn chỉnh\n• Hướng dẫn từ BYT Anh & Viện Nhi khoa Mỹ\n• Nghiên cứu Dr. Harris về phát triển vị giác\n• Phương pháp khắc phục biếng ăn');
    
    // Simulate download process
    setTimeout(() => {
        const link = document.createElement('a');
        link.href = '#';
        link.download = 'nhai-va-cau-truc-thuc-an.pdf';
        link.click();
        
        // Track download
        if (typeof gtag !== 'undefined') {
            gtag('event', 'download', {
                event_category: 'Documents',
                event_label: 'Food Structure Guide',
                value: 1
            });
        }
    }, 1000);
}

function shareFoodStructureDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Nhai và cấu trúc thức ăn',
            text: 'Hướng dẫn chi tiết về cấu trúc thức ăn theo độ tuổi từ 6-12 tháng và giải pháp cho trẻ lớn đã bỏ qua cấu trúc',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Intensive Interaction Modal Functions
function showIntensiveInteractionDocument() {
    document.getElementById('intensiveInteractionModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeIntensiveInteractionModal() {
    document.getElementById('intensiveInteractionModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function downloadIntensiveInteractionGuide() {
    alert('Đang chuẩn bị tải xuống "Chiến lược giao tiếp chuyên sâu (Intensive Interaction)"...\n\nTài liệu sẽ bao gồm:\n• Định nghĩa và đối tượng phù hợp\n• 5 nguyên tắc thực hiện\n• 2 giai đoạn tương tác chi tiết\n• Video hướng dẫn minh họa\n• Lợi ích và kết quả mong đợi\n• Phương pháp xây dựng kết nối cảm xúc');
    
    // Simulate download process
    setTimeout(() => {
        const link = document.createElement('a');
        link.href = '#';
        link.download = 'chien-luoc-giao-tiep-chuyen-sau-intensive-interaction.pdf';
        link.click();
        
        // Track download
        if (typeof gtag !== 'undefined') {
            gtag('event', 'download', {
                event_category: 'Documents',
                event_label: 'Intensive Interaction Guide',
                value: 1
            });
        }
    }, 1000);
}

function shareIntensiveInteractionDocument() {
    if (navigator.share) {
        navigator.share({
            title: 'Chiến lược giao tiếp chuyên sâu (Intensive Interaction)',
            text: 'Phương pháp tiếp cận đặc biệt để hỗ trợ những người gặp khó khăn nghiêm trọng trong giao tiếp. Tập trung xây dựng mối quan hệ hai chiều qua tín hiệu phi ngôn ngữ',
            url: window.location.href
        });
    } else {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('Link đã được sao chép!');
            });
        } else {
            alert('Link: ' + url);
        }
    }
}

// Close Screen Time modal when clicking outside
document.getElementById('screenTimeBrainModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeScreenTimeBrainModal();
    }
});

// Close Autism Communication modal when clicking outside
document.getElementById('autismCommunicationModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeAutismCommunicationModal();
    }
});

// Close Communication and Interaction modal when clicking outside
document.getElementById('communicationInteractionModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeCommunicationInteractionModal();
    }
});

// Close Food Structure modal when clicking outside
document.getElementById('foodStructureModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeFoodStructureModal();
    }
});

// Close RLPTK Q&A modal when clicking outside
document.getElementById('rlptkQAModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeRLPTKQAModal();
    }
});

// Close Intensive Interaction modal when clicking outside
document.getElementById('intensiveInteractionModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeIntensiveInteractionModal();
    }
});

document.getElementById('kindergartenCenterModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeKindergartenCenterModal();
    }
});

// Close all modals with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closePointingModal();
        closeSpeechDelayModal();
        closeToiletTrainingModal();
        closeGoldenPeriodModal();
        closeParentsTeacherModal();
        closeMistakesModal();
        closeHearingScreeningModal();
        closeToiletStoolModal();
        closeKindergartenCenterModal();
        closeHearingImpairedAVTModal();
        closeRLPTKQAModal();
        closeScreenTimeBrainModal();
        closeAutismCommunicationModal();
        closeCommunicationInteractionModal();
        closeFoodStructureModal();
        closeIntensiveInteractionModal();
        closeModal();
    }
});

// Newsletter form
document.querySelector('.newsletter-form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('input[type="email"]').value;
    if (email) {
        alert('Cảm ơn bạn đã đăng ký! Chúng tôi sẽ gửi thông báo về tài liệu mới.');
        this.querySelector('input[type="email"]').value = '';
    }
});
</script>

<style>
/* Parents Teacher Mobile Responsive Styles */
@media (max-width: 768px) {
    .featured-documents {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .document-card {
        text-align: center;
    }
    
    .knowledge-benefits {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .books-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .book-card {
        padding: 20px;
    }
    
    .challenge-box {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    
    .challenge-icon {
        margin: 0 auto;
    }
    
    .benefit-item {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }
    
    .benefit-icon {
        margin: 0 auto;
    }
    
    .parents-conclusion .conclusion-highlight {
        flex-direction: column;
        gap: 10px;
    }
    
    .parents-conclusion .conclusion-highlight h3 {
        text-align: center;
    }
    
    .modal-body {
        padding: 20px;
    }
    
    .modal-header h2 {
        font-size: 1.3em;
    }
    
    .download-section .download-stats {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .download-section .download-info {
        flex-direction: column;
        gap: 20px;
    }
}
</style>

<?php get_footer(); ?>