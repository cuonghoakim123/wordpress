# 🔧 HƯỚNG DẪN FIX LỖI TRANG CHỦ KHÔNG VÀO ĐƯỢC KHI DÙNG SSL

## 🐛 Vấn Đề:
- ✅ Trang con vào được (VD: /gioi-thieu, /tin-tuc)
- ❌ Trang chủ KHÔNG vào được
- 🔒 Sau khi enable SSL/HTTPS

---

## 🔍 NGUYÊN NHÂN:

### 1. WordPress Settings Sai
Database vẫn lưu `http://` thay vì `https://`

### 2. File .htaccess Thiếu Force HTTPS
Không redirect HTTP → HTTPS

### 3. Mixed Content
Trang chủ load resources từ HTTP trong HTTPS

### 4. Permalinks Chưa Regenerate
WordPress chưa update rewrite rules

---

## ✅ GIẢI PHÁP TỪNG BƯỚC:

### BƯỚC 1: Kiểm Tra URLs Trong Database

**Chạy trong phpMyAdmin:**

```sql
-- Kiểm tra URLs hiện tại
SELECT option_name, option_value 
FROM wp_options 
WHERE option_name IN ('siteurl', 'home');
```

**Kết quả mong đợi (nếu dùng HTTPS):**
```
siteurl: https://yourdomain.com
home: https://yourdomain.com
```

**Nếu vẫn là HTTP, chạy:**

```sql
-- Update sang HTTPS
UPDATE wp_options SET option_value = 'https://yourdomain.com' WHERE option_name = 'siteurl';
UPDATE wp_options SET option_value = 'https://yourdomain.com' WHERE option_name = 'home';
```

---

### BƯỚC 2: Sử Dụng File .htaccess Đúng

#### A. Nếu Đã Có SSL (Production):

**Dùng file:** `.htaccess-production`

**Rename file:**
```bash
# Backup file cũ
ren .htaccess .htaccess.bak

# Dùng file production
copy .htaccess-production .htaccess
```

**Hoặc thủ công:** Copy nội dung từ `.htaccess-production` sang `.htaccess`

#### B. Nếu Chưa Có SSL (Testing):

**Dùng file:** `.htaccess-http`

```bash
copy .htaccess-http .htaccess
```

---

### BƯỚC 3: Force HTTPS Trong wp-config.php

**Thêm vào file `wp-config.php`** (trước dòng `/* That's all, stop editing! */`):

```php
// Force SSL/HTTPS
define('FORCE_SSL_ADMIN', true);
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
    $_SERVER['HTTPS']='on';

// Hoặc đơn giản hơn (nếu không dùng proxy/CDN):
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    define('FORCE_SSL_ADMIN', true);
}
```

---

### BƯỚC 4: Regenerate Permalinks

1. **Login vào WordPress Admin:** `https://yourdomain.com/wp-admin`
2. **Settings → Permalinks**
3. **KHÔNG cần đổi gì**
4. Click **Save Changes**

→ WordPress sẽ tự regenerate `.htaccess` và rewrite rules

---

### BƯỚC 5: Clear Cache

#### A. Browser Cache
- **Chrome:** Ctrl + Shift + Delete
- Hoặc mở **Incognito/Private window**

#### B. WordPress Cache (nếu có plugin)
- WP Super Cache: Delete Cache
- W3 Total Cache: Performance → Purge All Caches

#### C. Hosting Cache (nếu có)
- cPanel → Cache Manager → Purge

#### D. Cloudflare Cache (nếu dùng)
- Caching → Purge Everything

---

## 🔧 TROUBLESHOOTING

### Lỗi: "Too Many Redirects"

**Nguyên nhân:** Loop redirect HTTP ↔ HTTPS

**Giải pháp:**

1. **Kiểm tra wp-config.php** - Đảm bảo chỉ có 1 trong các đoạn code force HTTPS

2. **Nếu dùng Cloudflare:**
   - SSL/TLS → Overview → Encryption mode: **Full** hoặc **Full (Strict)**
   - KHÔNG dùng "Flexible"

3. **Sửa .htaccess:**
   ```apache
   # Thay vì:
   RewriteCond %{HTTPS} off
   RewriteRule ^(.*)$ https://%{HTTP_HOST}/$1 [R=301,L]
   
   # Dùng (nếu có Cloudflare):
   RewriteCond %{HTTP:X-Forwarded-Proto} !https
   RewriteCond %{HTTPS} off
   RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
   ```

---

### Lỗi: "Mixed Content" (Khóa HTTPS màu vàng)

**Nguyên nhân:** Trang load cả HTTP và HTTPS resources

**Giải pháp:**

1. **Install plugin:** Really Simple SSL
2. Hoặc **chạy SQL update URLs:**
   ```sql
   -- Dùng file update-database-urls-simple.sql
   -- Tìm: http://yourdomain.com
   -- Thay: https://yourdomain.com
   ```

---

### Lỗi: Trang Chủ 404 Nhưng Trang Con OK

**Nguyên nhân:** Permalinks settings

**Giải pháp:**

1. **Check WordPress Reading Settings:**
   - Settings → Reading
   - "Your homepage displays": **A static page**
   - Homepage: **Trang Chủ**

2. **Regenerate Permalinks** (như BƯỚC 4)

3. **Check .htaccess permissions:**
   ```bash
   # Qua FTP, set permissions:
   .htaccess → 644
   ```

---

## 📋 QUICK CHECKLIST

Khi gặp lỗi trang chủ không vào được:

```
✅ Database URLs đã update sang HTTPS?
   → Chạy: SELECT option_value FROM wp_options WHERE option_name IN ('siteurl','home');

✅ File .htaccess đúng?
   → Production: Dùng .htaccess-production
   → Testing: Dùng .htaccess-http

✅ wp-config.php có force HTTPS?
   → Thêm: define('FORCE_SSL_ADMIN', true);

✅ Đã regenerate permalinks?
   → Settings → Permalinks → Save

✅ Đã clear cache?
   → Browser, WordPress, Hosting, CDN

✅ SSL certificate đã cài đúng?
   → Check tại: https://www.ssllabs.com/ssltest/
```

---

## 🚀 NHANH NHẤT - GIẢI PHÁP 1 DÒNG

**Nếu đang dùng HTTP (chưa có SSL):**

1. Dùng file `update-database-urls-simple.sql`
2. Find & Replace:
   - Tìm: `https://yourdomain.com`
   - Thay: `http://yourdomain.com` (không có 's')
3. Update URLs trong database
4. Dùng `.htaccess-http`
5. Regenerate permalinks

**Nếu đã có SSL:**

1. Chạy SQL update URLs sang HTTPS
2. Dùng `.htaccess-production`
3. Thêm force SSL trong wp-config.php
4. Regenerate permalinks
5. Clear cache

---

## 📞 VẪN GẶP VẤN ĐỀ?

**Gửi cho tôi:**
1. Screenshot lỗi
2. URL website
3. Hosting provider name
4. Đã cài SSL chưa?

**Files để check:**
- `.htaccess` (nội dung hiện tại)
- `wp-config.php` (phần define SSL)
- Database: `SELECT * FROM wp_options WHERE option_name IN ('siteurl','home');`

---

**Good luck! 🍀**
