<?php
/**
 * Template Name: Tài liệu
 * Template for Documents/Resources page
 */
get_header(); ?>

<section class="services-section" style="margin-top: 110px; padding-top: 100px;">
    <div class="services-container">
        <p class="section-title" style="text-align: center;">TÀI LIỆU</p>
        <h2 style="text-align: center; margin-bottom: 60px;">Tài liệu và nguồn học liệu</h2>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; else : ?>
                <!-- Featured Document: Chỉ tay ở trẻ -->
                <div class="featured-document" style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); padding: 40px; border-radius: 20px; margin-bottom: 50px; border: 2px solid #0ea5e9;">
                    <div style="display: flex; align-items: center; gap: 30px; flex-wrap: wrap;">
                        <div class="document-image" style="flex-shrink: 0;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20.jpg" 
                                 alt="Chỉ tay ở trẻ - Hành vi giao tiếp quan trọng"
                                 style="width: 120px; height: 120px; object-fit: cover; border-radius: 15px; box-shadow: 0 8px 25px rgba(14, 165, 233, 0.3); border: 3px solid white;">
                        </div>
                        <div class="document-content" style="flex: 1;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                <span style="background: #0ea5e9; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8em; font-weight: 600;">MỚI</span>
                                <span style="color: #0369a1; font-weight: 600;">Tài liệu chuyên môn</span>
                            </div>
                            <h3 style="color: #0c4a6e; font-size: 1.8em; margin-bottom: 15px; font-weight: 700;">
                                Chỉ tay ở trẻ: Dấu hiệu nhỏ, ý nghĩa lớn
                            </h3>
                            <p style="color: #475569; line-height: 1.6; margin-bottom: 20px;">
                                Tìm hiểu về tầm quan trọng của hành vi chỉ tay trong phát triển giao tiếp và phát hiện sớm 
                                rối loạn phổ tự kỷ. Tài liệu cung cấp hướng dẫn chi tiết cho phụ huynh và chuyên gia.
                            </p>
                            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                                <button onclick="showPointingDocument()" class="btn" style="background: #0ea5e9; color: white; padding: 12px 24px; border: none; border-radius: 25px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">
                                    <i class="fas fa-eye" style="margin-right: 8px;"></i>Xem tài liệu
                                </button>
                                <button onclick="downloadPointingGuide()" class="btn" style="background: white; color: #0ea5e9; padding: 12px 24px; border: 2px solid #0ea5e9; border-radius: 25px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">
                                    <i class="fas fa-download" style="margin-right: 8px;"></i>Tải về PDF
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="120" height="120" xmlns="http://www.w3.org/2000/svg">
                                <rect width="120" height="120" fill="#e8f4f5" rx="10"/>
                                <rect x="30" y="25" width="60" height="70" fill="white" stroke="#4a9fa5" stroke-width="2"/>
                                <line x1="40" y1="40" x2="70" y2="40" stroke="#4a9fa5" stroke-width="2"/>
                                <line x1="40" y1="55" x2="70" y2="55" stroke="#4a9fa5" stroke-width="2"/>
                                <line x1="40" y1="70" x2="70" y2="70" stroke="#4a9fa5" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3 class="service-title">Tài liệu đào tạo</h3>
                        <p class="service-description">
                            Tài liệu và giáo trình đào tạo cho phụ huynh và nhà chuyên môn về các phương pháp 
                            can thiệp và giáo dục trẻ có nhu cầu đặc biệt.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="120" height="120" xmlns="http://www.w3.org/2000/svg">
                                <rect width="120" height="120" fill="#e8f4f5" rx="10"/>
                                <circle cx="60" cy="60" r="35" fill="white" stroke="#d4af37" stroke-width="2"/>
                                <polygon points="50,55 50,70 70,62.5" fill="#d4af37"/>
                            </svg>
                        </div>
                        <h3 class="service-title">Video hướng dẫn</h3>
                        <p class="service-description">
                            Thư viện video hướng dẫn các hoạt động, bài tập và kỹ thuật can thiệp 
                            có thể áp dụng tại nhà.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="120" height="120" xmlns="http://www.w3.org/2000/svg">
                                <rect width="120" height="120" fill="#e8f4f5" rx="10"/>
                                <rect x="35" y="30" width="50" height="60" fill="white" stroke="#4a9fa5" stroke-width="2" rx="5"/>
                                <rect x="45" y="50" width="30" height="3" fill="#d4af37"/>
                                <rect x="45" y="60" width="30" height="3" fill="#d4af37"/>
                                <rect x="45" y="70" width="20" height="3" fill="#d4af37"/>
                            </svg>
                        </div>
                        <h3 class="service-title">Bài viết chuyên môn</h3>
                        <p class="service-description">
                            Các bài viết, nghiên cứu và tin tức cập nhật về giáo dục đặc biệt 
                            và can thiệp sớm.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="120" height="120" xmlns="http://www.w3.org/2000/svg">
                                <rect width="120" height="120" fill="#e8f4f5" rx="10"/>
                                <path d="M 30 80 L 50 30 L 70 80 L 90 40" stroke="#4a9fa5" stroke-width="3" fill="none"/>
                                <circle cx="50" cy="30" r="4" fill="#d4af37"/>
                                <circle cx="70" cy="80" r="4" fill="#d4af37"/>
                                <circle cx="90" cy="40" r="4" fill="#d4af37"/>
                            </svg>
                        </div>
                        <h3 class="service-title">Biểu mẫu đánh giá</h3>
                        <p class="service-description">
                            Các biểu mẫu, bảng đánh giá phát triển và theo dõi tiến trình của trẻ.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="120" height="120" xmlns="http://www.w3.org/2000/svg">
                                <rect width="120" height="120" fill="#e8f4f5" rx="10"/>
                                <rect x="30" y="35" width="60" height="50" fill="white" stroke="#4a9fa5" stroke-width="2" rx="3"/>
                                <circle cx="45" cy="55" r="5" fill="#d4af37"/>
                                <circle cx="60" cy="55" r="5" fill="#d4af37"/>
                                <circle cx="75" cy="55" r="5" fill="#d4af37"/>
                                <line x1="35" y1="70" x2="85" y2="70" stroke="#4a9fa5" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3 class="service-title">Tài nguyên trực tuyến</h3>
                        <p class="service-description">
                            Liên kết đến các nguồn tài liệu, website và công cụ hữu ích cho 
                            phụ huynh và giáo viên.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="120" height="120" xmlns="http://www.w3.org/2000/svg">
                                <rect width="120" height="120" fill="#e8f4f5" rx="10"/>
                                <rect x="25" y="30" width="35" height="50" fill="white" stroke="#4a9fa5" stroke-width="2"/>
                                <rect x="65" y="30" width="35" height="50" fill="white" stroke="#4a9fa5" stroke-width="2"/>
                                <line x1="35" y1="45" x2="50" y2="45" stroke="#d4af37" stroke-width="2"/>
                                <line x1="75" y1="45" x2="90" y2="45" stroke="#d4af37" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3 class="service-title">Sách và ấn phẩm</h3>
                        <p class="service-description">
                            Danh mục sách và ấn phẩm khuyến nghị về phát triển trẻ em và 
                            giáo dục đặc biệt.
                        </p>
                    </div>
                </div>
                
                <div style="max-width: 800px; margin: 60px auto 0; padding: 40px; background: var(--light-bg); border-radius: 10px; text-align: center;">
                    <h3 style="color: var(--primary-color); margin-bottom: 20px;">
                        Đăng ký nhận tài liệu mới nhất
                    </h3>
                    <p style="margin-bottom: 30px; color: var(--text-dark);">
                        Đăng ký email để nhận thông tin về các tài liệu, bài viết và nguồn học liệu mới nhất từ Hand in Hand Foundation.
                    </p>
                    <form style="display: flex; gap: 15px; max-width: 500px; margin: 0 auto;">
                        <input type="email" placeholder="Email của bạn" style="flex: 1; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 15px;">
                        <button type="submit" class="btn btn-primary" style="padding: 12px 30px; white-space: nowrap;">
                            Đăng ký
                        </button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Pointing Document Modal -->
<div id="pointingModal" class="pointing-modal" style="display: none;">
    <div class="modal-content-pointing">
        <div class="modal-header-pointing">
            <h2>Chỉ tay ở trẻ: Dấu hiệu nhỏ, ý nghĩa lớn</h2>
            <span class="close-pointing" onclick="closePointingModal()">&times;</span>
        </div>
        <div class="modal-body-pointing">
            <!-- Hình ảnh minh họa -->
            <div class="document-images">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20.jpg" 
                         alt="Trẻ em chỉ tay - Hành vi giao tiếp quan trọng"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                         style="width: 100%; height: 300px; object-fit: cover; border-radius: 15px;">
                    <div class="fallback-image" style="display: none; width: 100%; height: 300px; background: linear-gradient(135deg, #e0f2fe, #bae6fd); border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 15px;">
                        <i class="fas fa-hand-point-right" style="font-size: 4em; color: #0ea5e9;"></i>
                        <span style="color: #0369a1; font-size: 1.2em; font-weight: 600;">Chỉ tay ở trẻ</span>
                    </div>
                </div>
            </div>

            <!-- Nội dung tài liệu -->
            <div class="document-content-detailed">
                <div class="content-section">
                    <h3><i class="fas fa-question-circle"></i> 1. Chỉ tay là gì?</h3>
                    <p>
                        <strong>"Chỉ tay" (pointing)</strong> là một hành vi giao tiếp phi ngôn ngữ rất quan trọng, 
                        thường xuất hiện ở trẻ từ <strong>9–14 tháng tuổi</strong>.
                    </p>
                    <p>
                        Khi trẻ chỉ tay, bé đang muốn giao tiếp hoặc chia sẻ sự chú ý với người khác, 
                        chứ không đơn thuần là hành động cơ học.
                    </p>
                    
                    <div class="pointing-types">
                        <h4>Có hai loại chỉ tay chính:</h4>
                        <div class="type-grid">
                            <div class="type-card">
                                <div class="type-icon">
                                    <i class="fas fa-hand-holding"></i>
                                </div>
                                <h5>Chỉ tay yêu cầu (protoimperative)</h5>
                                <p>Trẻ chỉ để đòi hỏi thứ mình muốn.</p>
                            </div>
                            <div class="type-card">
                                <div class="type-icon">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <h5>Chỉ tay chia sẻ (protodeclarative)</h5>
                                <p>Trẻ chỉ để chia sẻ hứng thú hoặc cảm xúc (ví dụ, chỉ vào máy bay rồi nhìn người lớn để "khoe").</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section">
                    <h3><i class="fas fa-brain"></i> 2. Mối liên quan giữa chỉ tay và rối loạn phổ tự kỷ</h3>
                    <p>Ở trẻ có rối loạn phổ tự kỷ (ASD), hành vi chỉ tay thường:</p>
                    <ul class="asd-signs">
                        <li><i class="fas fa-clock"></i> Xuất hiện chậm hoặc không có</li>
                        <li><i class="fas fa-eye-slash"></i> Thiếu chỉ tay chia sẻ – bé ít hoặc không chỉ để thu hút sự chú ý của người khác</li>
                        <li><i class="fas fa-user-times"></i> Không kết hợp nhìn mặt người lớn sau khi chỉ</li>
                        <li><i class="fas fa-hand-point-right"></i> Nếu có chỉ, thường là để yêu cầu món đồ chứ không phải để chia sẻ cảm xúc</li>
                    </ul>
                    <div class="warning-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Đây là một dấu hiệu sớm rất quan trọng giúp nhận biết nguy cơ tự kỷ.</span>
                    </div>
                </div>

                <div class="content-section">
                    <h3><i class="fas fa-search"></i> 3. Vì sao chỉ tay lại quan trọng trong chẩn đoán sớm?</h3>
                    <div class="importance-points">
                        <div class="point-item">
                            <i class="fas fa-baby"></i>
                            <span>Chỉ tay là một trong những hành vi giao tiếp sớm nhất ở trẻ</span>
                        </div>
                        <div class="point-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Nếu 12–18 tháng mà trẻ chưa biết chỉ hoặc chỉ để đòi đồ, cha mẹ nên đưa bé đi đánh giá phát triển</span>
                        </div>
                        <div class="point-item">
                            <i class="fas fa-clipboard-check"></i>
                            <span>Trong các công cụ sàng lọc như M-CHAT, hành vi chỉ tay là một tiêu chí bắt buộc để phát hiện nguy cơ ASD</span>
                        </div>
                    </div>
                </div>

                <div class="content-section">
                    <h3><i class="fas fa-comments"></i> 4. Vai trò của chỉ tay trong phát triển ngôn ngữ và xã hội</h3>
                    <div class="role-grid">
                        <div class="role-card">
                            <i class="fas fa-language"></i>
                            <h4>Bước đệm cho ngôn ngữ</h4>
                            <p>Trẻ biết chỉ thường sẽ nói sớm hơn</p>
                        </div>
                        <div class="role-card">
                            <i class="fas fa-eye"></i>
                            <h4>Nền tảng chú ý chung</h4>
                            <p>Khả năng chia sẻ sự chú ý vào cùng một vật thể hoặc sự kiện</p>
                        </div>
                        <div class="role-card">
                            <i class="fas fa-heart"></i>
                            <h4>Ý định giao tiếp</h4>
                            <p>Trẻ muốn "gọi người khác vào thế giới của mình"</p>
                        </div>
                    </div>
                </div>

                <div class="content-section">
                    <h3><i class="fas fa-hands-helping"></i> 5. Cách khuyến khích trẻ tập chỉ tay</h3>
                    <p>Phụ huynh có thể hỗ trợ trẻ bằng những cách đơn giản mỗi ngày:</p>
                    
                    <div class="techniques-grid">
                        <div class="technique-card">
                            <div class="technique-icon">
                                <i class="fas fa-puzzle-piece"></i>
                            </div>
                            <h4>Tạo tình huống</h4>
                            <p>Đặt đồ chơi yêu thích xa tầm với, giấu đồ trong lọ trong suốt</p>
                        </div>
                        
                        <div class="technique-card">
                            <div class="technique-icon">
                                <i class="fas fa-user-teacher"></i>
                            </div>
                            <h4>Làm mẫu và chờ</h4>
                            <p>Người lớn chỉ và hỏi "Cái gì đây?" – rồi chờ bé đáp lại</p>
                        </div>
                        
                        <div class="technique-card">
                            <div class="technique-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h4>Khen thưởng</h4>
                            <p>Dù bé mới giơ cả bàn tay cũng nên khen và đáp ứng ngay</p>
                        </div>
                        
                        <div class="technique-card">
                            <div class="technique-icon">
                                <i class="fas fa-eye-dropper"></i>
                            </div>
                            <h4>Tăng cường giao tiếp mắt</h4>
                            <p>Khi bé chỉ, gọi tên và chờ bé nhìn mặt rồi mới phản ứng</p>
                        </div>
                    </div>
                    
                    <div class="methods-note">
                        <i class="fas fa-lightbulb"></i>
                        <p>Những kỹ thuật này nằm trong các phương pháp can thiệp sớm nổi tiếng như <strong>ESDM, JASPER, hay Floortime</strong>.</p>
                    </div>
                </div>

                <div class="content-section conclusion">
                    <h3><i class="fas fa-key"></i> Kết luận</h3>
                    <div class="conclusion-content">
                        <p>
                            <strong>Chỉ tay – hành vi tưởng như nhỏ – lại là "cửa sổ" phản ánh sự phát triển giao tiếp và xã hội của trẻ.</strong>
                        </p>
                        <p>
                            Việc phát hiện sớm sự thiếu hụt trong hành vi chỉ tay giúp can thiệp kịp thời, đặc biệt với trẻ có nguy cơ tự kỷ.
                        </p>
                        <p>
                            Cha mẹ nên quan sát kỹ và khuyến khích hành vi chỉ tay trong mọi hoạt động hằng ngày của trẻ.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer-pointing">
            <button onclick="downloadPointingGuide()" class="btn-download">
                <i class="fas fa-download"></i> Tải tài liệu PDF
            </button>
            <button onclick="shareDocument()" class="btn-share">
                <i class="fas fa-share"></i> Chia sẻ
            </button>
        </div>
    </div>
</div>

<style>
/* Featured Document Styles */
.featured-document:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(14, 165, 233, 0.2);
    transition: all 0.3s ease;
}

.featured-document .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(14, 165, 233, 0.3);
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
    max-width: 900px;
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
    color: #334155;
}

.modal-body-pointing {
    padding: 30px;
    overflow-y: auto;
    flex: 1;
}

.document-images {
    margin-bottom: 30px;
}

.content-section {
    margin-bottom: 35px;
    padding-bottom: 25px;
    border-bottom: 1px solid #f1f5f9;
}

.content-section:last-child {
    border-bottom: none;
}

.content-section h3 {
    color: #0c4a6e;
    font-size: 1.3em;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.content-section h3 i {
    color: #0ea5e9;
}

.pointing-types {
    margin-top: 20px;
}

.type-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 15px;
}

.type-card {
    background: #f8fafc;
    padding: 20px;
    border-radius: 12px;
    border-left: 4px solid #0ea5e9;
    transition: all 0.3s ease;
}

.type-card:hover {
    background: #f0f9ff;
    transform: translateX(5px);
}

.type-icon {
    color: #0ea5e9;
    font-size: 1.5em;
    margin-bottom: 10px;
}

.type-card h5 {
    color: #0c4a6e;
    margin-bottom: 8px;
    font-size: 1em;
}

.asd-signs {
    list-style: none;
    padding: 0;
}

.asd-signs li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 0;
    color: #475569;
}

.asd-signs i {
    color: #ef4444;
    width: 20px;
}

.warning-box {
    background: #fef2f2;
    border: 2px solid #fca5a5;
    border-radius: 10px;
    padding: 15px 20px;
    margin-top: 20px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.warning-box i {
    color: #dc2626;
    font-size: 1.2em;
}

.warning-box span {
    color: #7f1d1d;
    font-weight: 600;
}

.importance-points {
    margin-top: 15px;
}

.point-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 12px 0;
    color: #475569;
}

.point-item i {
    color: #0ea5e9;
    width: 20px;
}

.role-grid, .techniques-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.role-card, .technique-card {
    background: #f8fafc;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    border: 2px solid #e2e8f0;
    transition: all 0.3s ease;
}

.role-card:hover, .technique-card:hover {
    background: #f0f9ff;
    border-color: #0ea5e9;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(14, 165, 233, 0.15);
}

.role-card i, .technique-card .technique-icon i {
    color: #0ea5e9;
    font-size: 2em;
    margin-bottom: 15px;
    display: block;
}

.role-card h4, .technique-card h4 {
    color: #0c4a6e;
    margin-bottom: 10px;
    font-size: 1.1em;
}

.role-card p, .technique-card p {
    color: #64748b;
    font-size: 0.9em;
    line-height: 1.4;
}

.methods-note {
    background: #fffbeb;
    border: 2px solid #fbbf24;
    border-radius: 10px;
    padding: 20px;
    margin-top: 25px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
}

.methods-note i {
    color: #f59e0b;
    font-size: 1.3em;
    margin-top: 2px;
}

.methods-note p {
    color: #92400e;
    margin: 0;
    line-height: 1.5;
}

.conclusion {
    background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
    border: 2px solid #10b981;
    border-radius: 15px;
    padding: 25px;
}

.conclusion h3 {
    color: #047857;
}

.conclusion-content p {
    color: #374151;
    margin-bottom: 15px;
    line-height: 1.7;
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
    background: #0ea5e9;
    color: white;
}

.btn-download:hover {
    background: #0284c7;
    transform: translateY(-2px);
}

.btn-share {
    background: white;
    color: #0ea5e9;
    border: 2px solid #0ea5e9;
}

.btn-share:hover {
    background: #0ea5e9;
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .featured-document {
        padding: 25px;
    }
    
    .featured-document > div {
        flex-direction: column;
        text-align: center;
    }
    
    .modal-content-pointing {
        margin: 0;
        border-radius: 0;
        max-height: 100vh;
    }
    
    .modal-body-pointing {
        padding: 20px;
    }
    
    .type-grid, .role-grid, .techniques-grid {
        grid-template-columns: 1fr;
    }
    
    .modal-footer-pointing {
        flex-direction: column;
    }
    
    .btn-download, .btn-share {
        width: 100%;
        justify-content: center;
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
    // Tạo PDF hoặc download file
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
        // Fallback for browsers that don't support Web Share API
        const url = window.location.href;
        navigator.clipboard.writeText(url).then(() => {
            alert('Link đã được sao chép vào clipboard!');
        });
    }
}

// Close modal when clicking outside
document.getElementById('pointingModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closePointingModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closePointingModal();
    }
});
</script>

<?php get_footer(); ?>
