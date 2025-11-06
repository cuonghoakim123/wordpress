-- ============================================================
-- SQL Script để Update URLs khi Deploy lên Hosting
-- Chạy script này NGAY SAU KHI import database
-- Thay 'https://yourdomain.com' bằng domain thật của bạn
-- ============================================================

-- QUAN TRỌNG: Thay thế 'https://yourdomain.com' bằng domain THẬT của bạn
-- Ví dụ: 'https://handinhandfoundation.org' hoặc 'https://www.yoursite.com'

SET @old_url = 'http://localhost/woredpress';
SET @new_url = 'https://yourdomain.com';  -- ← THAY ĐỔI URL NÀY!

-- Hiển thị thông tin
SELECT CONCAT('Updating URLs from: ', @old_url, ' to: ', @new_url) AS 'Status';

-- 1. Update Site URL và Home URL (QUAN TRỌNG NHẤT)
UPDATE wp_options 
SET option_value = @new_url 
WHERE option_name IN ('siteurl', 'home');

-- 2. Update GUIDs trong wp_posts (cho media/attachments)
UPDATE wp_posts 
SET guid = REPLACE(guid COLLATE utf8mb4_unicode_520_ci, @old_url, @new_url);

-- 3. Update URLs trong post content
UPDATE wp_posts 
SET post_content = REPLACE(post_content COLLATE utf8mb4_unicode_520_ci, @old_url, @new_url)
WHERE post_content LIKE CONCAT('%', @old_url, '%');

-- 4. Update URLs trong post excerpts
UPDATE wp_posts 
SET post_excerpt = REPLACE(post_excerpt COLLATE utf8mb4_unicode_520_ci, @old_url, @new_url)
WHERE post_excerpt LIKE CONCAT('%', @old_url, '%');

-- 5. Update URLs trong post meta
UPDATE wp_postmeta 
SET meta_value = REPLACE(meta_value COLLATE utf8mb4_unicode_520_ci, @old_url, @new_url)
WHERE meta_value LIKE CONCAT('%', @old_url, '%');

-- 6. Update URLs trong comments
UPDATE wp_comments 
SET comment_content = REPLACE(comment_content COLLATE utf8mb4_unicode_520_ci, @old_url, @new_url)
WHERE comment_content LIKE CONCAT('%', @old_url, '%');

UPDATE wp_comments 
SET comment_author_url = REPLACE(comment_author_url COLLATE utf8mb4_unicode_520_ci, @old_url, @new_url)
WHERE comment_author_url LIKE CONCAT('%', @old_url, '%');

-- 7. Update URLs trong options table
UPDATE wp_options 
SET option_value = REPLACE(option_value COLLATE utf8mb4_unicode_520_ci, @old_url, @new_url)
WHERE option_value LIKE CONCAT('%', @old_url, '%')
AND option_name NOT IN ('siteurl', 'home');

-- 8. Clear all transients và cache
DELETE FROM wp_options WHERE option_name LIKE '_transient_%';
DELETE FROM wp_options WHERE option_name LIKE '_site_transient_%';

-- 9. Hiển thị kết quả
SELECT 
    'siteurl' AS 'Setting',
    option_value AS 'Current Value'
FROM wp_options 
WHERE option_name = 'siteurl'
UNION ALL
SELECT 
    'home' AS 'Setting',
    option_value AS 'Current Value'
FROM wp_options 
WHERE option_name = 'home';

-- Hiển thị thông báo hoàn thành
SELECT '✅ URLs đã được cập nhật thành công!' AS 'Status';
SELECT CONCAT('Từ: ', @old_url) AS 'Old URL';
SELECT CONCAT('Đến: ', @new_url) AS 'New URL';

-- ============================================================
-- HƯỚNG DẪN SỬ DỤNG:
-- ============================================================
-- 1. Import database: handinhand_db.sql
-- 2. Sửa dòng: SET @new_url = 'https://yourdomain.com';
--    → Thay 'https://yourdomain.com' bằng domain thật
-- 3. Chạy script này trong phpMyAdmin
-- 4. Xóa cache trình duyệt
-- 5. Truy cập website và kiểm tra
-- ============================================================

-- LƯU Ý: Sau khi chạy script, vào WordPress Admin:
-- Settings → Permalinks → Click "Save Changes" 
-- (không cần thay đổi gì, chỉ cần save để regenerate .htaccess)
-- ============================================================
