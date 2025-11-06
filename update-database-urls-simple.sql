-- ============================================================
-- SQL Script để Update URLs - PHIÊN BẢN ĐƠN GIẢN
-- Không dùng biến, tránh lỗi collation
-- ============================================================

-- CÁCH SỬ DỤNG:
-- 1. Tìm và thay TẤT CẢ 'http://localhost/woredpress' thành domain mới
-- 2. Tìm và thay TẤT CẢ 'https://yourdomain.com' thành domain thật
-- 3. Chạy toàn bộ script trong phpMyAdmin

-- ============================================================
-- BƯỚC 1: Update Site URL và Home URL (QUAN TRỌNG NHẤT!)
-- ============================================================
UPDATE wp_options 
SET option_value = 'https://yourdomain.com' 
WHERE option_name = 'siteurl';

UPDATE wp_options 
SET option_value = 'https://yourdomain.com' 
WHERE option_name = 'home';

-- ============================================================
-- BƯỚC 2: Update GUIDs trong wp_posts (cho media/attachments)
-- ============================================================
UPDATE wp_posts 
SET guid = REPLACE(guid, 'http://localhost/woredpress', 'https://yourdomain.com');

-- ============================================================
-- BƯỚC 3: Update URLs trong post content
-- ============================================================
UPDATE wp_posts 
SET post_content = REPLACE(post_content, 'http://localhost/woredpress', 'https://yourdomain.com');

-- ============================================================
-- BƯỚC 4: Update URLs trong post excerpts
-- ============================================================
UPDATE wp_posts 
SET post_excerpt = REPLACE(post_excerpt, 'http://localhost/woredpress', 'https://yourdomain.com');

-- ============================================================
-- BƯỚC 5: Update URLs trong post meta
-- ============================================================
UPDATE wp_postmeta 
SET meta_value = REPLACE(meta_value, 'http://localhost/woredpress', 'https://yourdomain.com');

-- ============================================================
-- BƯỚC 6: Update URLs trong comments content
-- ============================================================
UPDATE wp_comments 
SET comment_content = REPLACE(comment_content, 'http://localhost/woredpress', 'https://yourdomain.com');

-- ============================================================
-- BƯỚC 7: Update URLs trong comment author URLs
-- ============================================================
UPDATE wp_comments 
SET comment_author_url = REPLACE(comment_author_url, 'http://localhost/woredpress', 'https://yourdomain.com');

-- ============================================================
-- BƯỚC 8: Update URLs trong options khác
-- ============================================================
UPDATE wp_options 
SET option_value = REPLACE(option_value, 'http://localhost/woredpress', 'https://yourdomain.com')
WHERE option_name NOT IN ('siteurl', 'home');

-- ============================================================
-- BƯỚC 9: Update user meta (nếu có)
-- ============================================================
UPDATE wp_usermeta 
SET meta_value = REPLACE(meta_value, 'http://localhost/woredpress', 'https://yourdomain.com');

-- ============================================================
-- BƯỚC 10: Clear cache và transients
-- ============================================================
DELETE FROM wp_options WHERE option_name LIKE '_transient_%';
DELETE FROM wp_options WHERE option_name LIKE '_site_transient_%';

-- ============================================================
-- KIỂM TRA KẾT QUẢ
-- ============================================================
SELECT 'Site URL' AS Setting, option_value AS Value 
FROM wp_options WHERE option_name = 'siteurl'
UNION ALL
SELECT 'Home URL' AS Setting, option_value AS Value 
FROM wp_options WHERE option_name = 'home';

-- ============================================================
-- HƯỚNG DẪN:
-- ============================================================
-- 1. Mở file này bằng text editor (Notepad++, VS Code)
-- 2. Ctrl+H (Find & Replace)
-- 3. Tìm: https://yourdomain.com
-- 4. Thay: https://tenmien-that-cua-ban.com (VD: https://handinhand.org)
-- 5. Replace All
-- 6. Save file
-- 7. Copy toàn bộ nội dung
-- 8. Paste vào phpMyAdmin → SQL tab
-- 9. Click GO
-- 10. Kiểm tra kết quả
-- ============================================================

-- LƯU Ý QUAN TRỌNG:
-- - KHÔNG có dấu / ở cuối domain
-- - Đúng: https://yourdomain.com
-- - SAI: https://yourdomain.com/
-- ============================================================
