-- ============================================================
-- SQL Script: CONVERT DATABASE COLLATION
-- Từ: utf8mb4_unicode_520_ci → utf8mb4_unicode_ci
-- ============================================================
-- CẢNH BÁO: Script này sẽ thay đổi collation của TOÀN BỘ database!
-- Backup database trước khi chạy!
-- ============================================================

-- Tắt strict mode tạm thời để tránh lỗi
SET SESSION sql_mode = '';

-- Thay đổi collation mặc định của database
ALTER DATABASE `handinhand_db` 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

-- ============================================================
-- CONVERT TẤT CẢ BẢNG
-- ============================================================

-- 1. wp_commentmeta
ALTER TABLE `wp_commentmeta` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 2. wp_comments (có thể gặp lỗi với default values)
ALTER TABLE `wp_comments` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 3. wp_links
ALTER TABLE `wp_links` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 4. wp_options
ALTER TABLE `wp_options` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 5. wp_postmeta
ALTER TABLE `wp_postmeta` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 6. wp_posts
ALTER TABLE `wp_posts` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 7. wp_termmeta
ALTER TABLE `wp_termmeta` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 8. wp_terms
ALTER TABLE `wp_terms` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 9. wp_term_relationships
ALTER TABLE `wp_term_relationships` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 10. wp_term_taxonomy
ALTER TABLE `wp_term_taxonomy` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 11. wp_usermeta
ALTER TABLE `wp_usermeta` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 12. wp_users
ALTER TABLE `wp_users` 
CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Bật lại strict mode
SET SESSION sql_mode = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- ============================================================
-- KIỂM TRA KẾT QUẢ
-- ============================================================
SELECT 
    TABLE_NAME,
    TABLE_COLLATION
FROM 
    information_schema.TABLES
WHERE 
    TABLE_SCHEMA = 'handinhand_db'
ORDER BY 
    TABLE_NAME;

-- ============================================================
-- HOÀN TẤT!
-- ============================================================
-- Tất cả bảng đã được convert sang utf8mb4_unicode_ci
-- ============================================================

-- LƯU Ý:
-- 1. Backup database trước khi chạy script này!
-- 2. Sau khi convert, file update-database-urls.sql sẽ hoạt động tốt
-- 3. Không cần COLLATE trong REPLACE() nữa
-- ============================================================
