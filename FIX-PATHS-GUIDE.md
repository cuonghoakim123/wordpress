# 🔧 HƯỚNG DẪN SỬA LỖI ĐƯỜNG DẪN KHI DEPLOY

## ⚠️ VẤN ĐỀ

Khi deploy từ local (`localhost/woredpress`) lên hosting, website sẽ bị lỗi do:
1. Database chứa URLs cũ: `http://localhost/woredpress`
2. File `.htaccess` có RewriteBase sai: `/woredpress/`

---

## ✅ GIẢI PHÁP - ĐÃ SỬA

### 1. File .htaccess ✅ ĐÃ SỬA

**Đã thay đổi:**
```apache
# CŨ (Local)
RewriteBase /woredpress/
RewriteRule . /woredpress/index.php [L]

# MỚI (Production)
RewriteBase /
RewriteRule . /index.php [L]
```

✅ File `.htaccess` đã được sửa và sẵn sàng cho production!

---

### 2. Database URLs ❗ CẦN SỬA KHI DEPLOY

**Vấn đề:** Database chứa URLs cũ:
- `http://localhost/woredpress`

**Giải pháp:** Chạy SQL script sau khi import database

---

## 🚀 HƯỚNG DẪN DEPLOY CHI TIẾT

### BƯỚC 1: Upload Files

Upload tất cả files LÊN hosting (file `.htaccess` đã được sửa)

### BƯỚC 2: Import Database

1. Vào phpMyAdmin trên hosting
2. Tạo database mới
3. Import file: `handinhand_db.sql`

### BƯỚC 3: Update URLs trong Database ⚡ QUAN TRỌNG

**Option A: Dùng SQL Script (Khuyến nghị)**

1. Mở file: `update-database-urls.sql`
2. Sửa dòng 12:
   ```sql
   SET @new_url = 'https://yourdomain.com';  -- Thay bằng domain THẬT
   ```
3. Vào phpMyAdmin → Tab SQL
4. Copy toàn bộ nội dung file `update-database-urls.sql`
5. Paste và click **Go**

**Option B: Update Thủ Công**

Chạy các câu lệnh SQL sau trong phpMyAdmin:

```sql
-- Thay 'https://yourdomain.com' bằng domain THẬT của bạn

-- 1. Update Site URL và Home URL
UPDATE wp_options 
SET option_value = 'https://yourdomain.com' 
WHERE option_name = 'siteurl' OR option_name = 'home';

-- 2. Update URLs trong posts
UPDATE wp_posts 
SET guid = REPLACE(guid, 'http://localhost/woredpress', 'https://yourdomain.com');

UPDATE wp_posts 
SET post_content = REPLACE(post_content, 'http://localhost/woredpress', 'https://yourdomain.com');

-- 3. Update URLs trong post meta
UPDATE wp_postmeta 
SET meta_value = REPLACE(meta_value, 'http://localhost/woredpress', 'https://yourdomain.com');

-- 4. Clear cache
DELETE FROM wp_options WHERE option_name LIKE '_transient_%';
DELETE FROM wp_options WHERE option_name LIKE '_site_transient_%';
```

### BƯỚC 4: Cấu hình wp-config.php

Đảm bảo `wp-config.php` có thông tin database đúng:

```php
define( 'DB_NAME', 'your_database_name' );
define( 'DB_USER', 'your_database_user' );
define( 'DB_PASSWORD', 'your_password' );
define( 'DB_HOST', 'localhost' );
```

### BƯỚC 5: Regenerate Permalinks

1. Login WordPress Admin: `https://yourdomain.com/wp-admin`
2. Settings → Permalinks
3. Click **Save Changes** (không cần thay đổi gì)

Bước này sẽ regenerate file `.htaccess` với URLs mới

---

## ✅ KIỂM TRA SAU KHI DEPLOY

### 1. Kiểm tra Homepage
```
Visit: https://yourdomain.com
```
- [ ] Trang chủ hiển thị đúng
- [ ] CSS/JS load được
- [ ] Hình ảnh hiển thị

### 2. Kiểm tra Navigation
- [ ] Click các menu items
- [ ] Tất cả links đúng domain mới
- [ ] Không có link nào trỏ về localhost

### 3. Kiểm tra Admin
```
Login: https://yourdomain.com/wp-admin
```
- [ ] Login thành công
- [ ] Dashboard load đúng
- [ ] Media library hiển thị ảnh

### 4. Kiểm tra Database URLs

Chạy SQL này để verify:
```sql
SELECT option_name, option_value 
FROM wp_options 
WHERE option_name IN ('siteurl', 'home');
```

Kết quả phải là:
- siteurl: `https://yourdomain.com`
- home: `https://yourdomain.com`

---

## 🐛 TROUBLESHOOTING

### Lỗi: Trang vẫn redirect về localhost

**Nguyên nhân:** Database URLs chưa được update

**Giải pháp:**
```sql
UPDATE wp_options 
SET option_value = 'https://yourdomain.com' 
WHERE option_name = 'siteurl' OR option_name = 'home';
```

---

### Lỗi: CSS/JS không load (404)

**Nguyên nhân:** Permalinks chưa được regenerate

**Giải pháp:**
1. WordPress Admin → Settings → Permalinks
2. Click "Save Changes"

---

### Lỗi: 404 trên tất cả các trang

**Nguyên nhân:** File .htaccess không đúng

**Giải pháp:**
Đảm bảo file `.htaccess` có nội dung:
```apache
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
```

---

### Lỗi: Hình ảnh không hiển thị

**Nguyên nhân:** URLs trong database chưa được update

**Giải pháp:**
```sql
UPDATE wp_posts 
SET guid = REPLACE(guid, 'http://localhost/woredpress', 'https://yourdomain.com');
```

---

## 📋 CHECKLIST ĐƯỜNG DẪN

Trước khi deploy, đảm bảo:

### Files đã sửa ✅
- [x] `.htaccess` - RewriteBase = `/` (đã sửa)
- [x] Theme files - Dùng WordPress functions (OK)
- [x] SQL script - `update-database-urls.sql` (đã tạo)

### Cần làm khi deploy ⚠️
- [ ] Import database
- [ ] Chạy SQL update script
- [ ] Cấu hình wp-config.php
- [ ] Regenerate permalinks
- [ ] Test toàn bộ site

---

## 💡 TẠI SAO THEME KHÔNG CẦN SỬA?

Theme Hand in Hand đã được code đúng cách:

✅ **Đường dẫn động:**
```php
// ĐÚNG - Tự động adapt với domain mới
get_template_directory_uri()  // Cho assets
home_url('/')                   // Cho links
site_url()                      // Cho WordPress URLs
```

❌ **KHÔNG dùng hardcoded:**
```php
// SAI - Sẽ bị lỗi khi deploy
'http://localhost/woredpress/...'
'/woredpress/...'
```

Vì vậy theme sẽ tự động hoạt động với domain mới sau khi update database!

---

## 🎯 TÓM TẮT

**Đã sửa:**
- ✅ `.htaccess` → Production ready

**Cần làm khi deploy:**
1. ⚠️ Import database
2. ⚠️ Chạy `update-database-urls.sql`
3. ⚠️ Cấu hình `wp-config.php`
4. ⚠️ Regenerate permalinks

**Kết quả:**
- ✅ Website hoạt động hoàn hảo với domain mới
- ✅ Không còn lỗi đường dẫn
- ✅ CSS/JS/Images load đúng

---

<div align="center">

**🎉 Dự án đã sẵn sàng deploy! 🎉**

*Chỉ cần follow các bước trên để update URLs*

</div>
