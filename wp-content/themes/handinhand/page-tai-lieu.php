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
                    <button onclick="downloadPointingGuide()" class="btn btn-secondary">
                        <i class="fas fa-download"></i> Tải về
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
                    <button onclick="downloadSpeechDelayGuide()" class="btn btn-secondary" style="border-color: #ff9800; color: #ff9800;">
                        <i class="fas fa-download"></i> Tải về
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
                    <button onclick="downloadToiletTrainingGuide()" class="btn btn-secondary" style="border-color: #4caf50; color: #4caf50;">
                        <i class="fas fa-download"></i> Tải về
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
                    <button onclick="downloadGoldenPeriodGuide()" class="btn btn-secondary" style="border-color: #ffc107; color: #ffc107;">
                        <i class="fas fa-download"></i> Tải về
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
                    <button onclick="downloadParentsTeacherGuide()" class="btn btn-secondary" style="border-color: #9c27b0; color: #9c27b0;">
                        <i class="fas fa-download"></i> Tải về
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
                        <p>Nhận trọn bộ 5 tài liệu chuyên môn về phát triển trẻ em và can thiệp sớm từ Hand in Hand Foundation</p>
                        <div class="included-docs">
                            <span><i class="fas fa-check-circle"></i> Chỉ tay ở trẻ</span>
                            <span><i class="fas fa-check-circle"></i> Chậm nói vs Lười nói</span>
                            <span><i class="fas fa-check-circle"></i> Lộ trình toilet training</span>
                            <span><i class="fas fa-check-circle"></i> Giai đoạn vàng can thiệp</span>
                            <span><i class="fas fa-check-circle"></i> Cha mẹ - Người thầy đầu tiên</span>
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
                    <div class="category-count">15 tài liệu</div>
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
                <p><strong>Tài liệu chi tiết về hành vi chỉ tay ở trẻ em và vai trò trong phát hiện sớm rối loạn phổ tự kỷ.</strong></p>
                <p>Nội dung bao gồm định nghĩa, các loại chỉ tay, mối liên quan với ASD, và phương pháp khuyến khích phát triển.</p>
            </div>
        </div>
        <div class="modal-footer-pointing">
            <button onclick="downloadPointingGuide()" class="btn-download">
                <i class="fas fa-download"></i> Tải tài liệu
            </button>
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
            <button onclick="downloadSpeechDelayGuide()" class="btn-download" style="background: #ff9800;">
                <i class="fas fa-download"></i> Tải tài liệu PDF
            </button>
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
            <button onclick="downloadToiletTrainingGuide()" class="btn-download" style="background: #4caf50;">
                <i class="fas fa-download"></i> Tải tài liệu PDF
            </button>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/19.jpg" 
                         alt="Giai đoạn vàng để can thiệp sớm"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 300px; object-fit: cover; border-radius: 15px;">
                    <div class="fallback-image" style="display: none; width: 100%; height: 300px; background: linear-gradient(135deg, #fff8e1, #ffecb3); border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 15px;">
                        <i class="fas fa-star" style="font-size: 4em; color: #ffc107;"></i>
                        <span style="color: #f57c00; font-size: 1.2em; font-weight: 600;">Giai đoạn vàng can thiệp</span>
                    </div>
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
            <button onclick="downloadGoldenPeriodGuide()" class="btn-download" style="background: #ffc107; color: #333;">
                <i class="fas fa-download"></i> Tải tài liệu PDF
            </button>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/15.jpg" 
                         alt="Cha mẹ - Người thầy đầu tiên"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 300px; object-fit: cover; border-radius: 15px;">
                    <div class="fallback-image" style="display: none; width: 100%; height: 300px; background: linear-gradient(135deg, #f3e5f5, #e1bee7); border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 15px;">
                        <i class="fas fa-heart" style="font-size: 4em; color: #9c27b0;"></i>
                        <span style="color: #7b1fa2; font-size: 1.2em; font-weight: 600;">Cha mẹ - Người thầy đầu tiên</span>
                    </div>
                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="intro-parents">
                    <h3><i class="fas fa-heart"></i> Vai trò đặc biệt của cha mẹ</h3>
                    <p><strong>Cha mẹ hay người trực tiếp nuôi dạy trẻ chính là "người thầy" tuyệt vời nhất đối với trẻ rối loạn phổ tự kỷ nói riêng và trẻ có nhu cầu đặc biệt nói chung.</strong></p>
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
            <button onclick="downloadParentsTeacherGuide()" class="btn-download" style="background: #9c27b0;">
                <i class="fas fa-download"></i> Tải tài liệu PDF
            </button>
            <button onclick="shareParentsTeacherDocument()" class="btn-share" style="border-color: #9c27b0; color: #9c27b0;">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<style>
/* Page Styles */
.tai-lieu-page {
    font-family: 'Inter', sans-serif;
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

📋 Bao gồm 4 tài liệu:
• Chỉ tay ở trẻ: Dấu hiệu nhỏ, ý nghĩa lớn
• Trẻ "chậm nói" khác với trẻ "lười nói"  
• Lộ trình tập ngồi bồn cầu cho trẻ tự kỷ
• Đừng bỏ lỡ giai đoạn vàng để can thiệp

📧 Tính năng tải về sẽ được bổ sung sớm.
Vui lòng liên hệ Hand in Hand Foundation để nhận bộ tài liệu hoàn chỉnh.

📞 Hotline: [Số điện thoại]
✉️ Email: [Email liên hệ]
`;
    
    alert(message);
    
    // Optional: Track download intent for analytics
    console.log('User requested full document download package');
}

// Close golden period modal when clicking outside
document.getElementById('goldenPeriodModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeGoldenPeriodModal();
    }
});

// Close all modals with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closePointingModal();
        closeSpeechDelayModal();
        closeToiletTrainingModal();
        closeGoldenPeriodModal();
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