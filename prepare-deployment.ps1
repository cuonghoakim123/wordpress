# ============================================================
# Hand in Hand Foundation - Deployment Preparation Script
# Version: 1.0 (Windows PowerShell)
# Description: Chuẩn bị dự án WordPress để deploy lên hosting
# ============================================================

Write-Host ""
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host "  Hand in Hand Foundation - Deployment Preparation" -ForegroundColor Cyan
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host ""

# Variables
$ProjectDir = Get-Location
$BackupDir = Join-Path $ProjectDir "deployment-backup"
$DeployDir = Join-Path $ProjectDir "deployment-ready"
$Date = Get-Date -Format "yyyyMMdd_HHmmss"

Write-Host "📁 Project Directory: $ProjectDir" -ForegroundColor White
Write-Host "💾 Backup Directory: $BackupDir" -ForegroundColor White
Write-Host "🚀 Deploy Directory: $DeployDir" -ForegroundColor White
Write-Host ""

# Create directories
Write-Host "📂 Creating directories..." -ForegroundColor Yellow
New-Item -ItemType Directory -Force -Path $BackupDir | Out-Null
New-Item -ItemType Directory -Force -Path $DeployDir | Out-Null

# Step 1: Backup
Write-Host ""
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host "  STEP 1: Backing up current project" -ForegroundColor Cyan
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host "📦 Creating backup archive..." -ForegroundColor Yellow

$BackupFile = Join-Path $BackupDir "handinhand_backup_$Date.zip"

# Create backup excluding unnecessary folders
$ExcludeFolders = @("deployment-backup", "deployment-ready", ".git", "node_modules")
$FilesToBackup = Get-ChildItem -Path $ProjectDir -Recurse | Where-Object {
    $item = $_
    -not ($ExcludeFolders | Where-Object { $item.FullName -like "*$_*" })
}

try {
    Compress-Archive -Path $ProjectDir\* -DestinationPath $BackupFile -Force
    Write-Host "✅ Backup created successfully!" -ForegroundColor Green
} catch {
    Write-Host "❌ Backup failed: $($_.Exception.Message)" -ForegroundColor Red
    exit 1
}

# Step 2: Copy files to deployment directory
Write-Host ""
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host "  STEP 2: Preparing deployment files" -ForegroundColor Cyan
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host "📋 Copying essential files..." -ForegroundColor Yellow

# Copy theme
Write-Host "  → Copying theme..." -ForegroundColor Gray
$ThemeDestDir = Join-Path $DeployDir "wp-content\themes"
New-Item -ItemType Directory -Force -Path $ThemeDestDir | Out-Null
Copy-Item -Path "wp-content\themes\handinhand" -Destination $ThemeDestDir -Recurse -Force

# Copy database
Write-Host "  → Copying database..." -ForegroundColor Gray
Copy-Item -Path "handinhand_db.sql" -Destination $DeployDir -Force

# Copy SQL update script
Write-Host "  → Copying SQL update script..." -ForegroundColor Gray
Copy-Item -Path "update-database-urls.sql" -Destination $DeployDir -Force

# Copy fix paths guide
Write-Host "  → Copying paths fix guide..." -ForegroundColor Gray
Copy-Item -Path "FIX-PATHS-GUIDE.md" -Destination $DeployDir -Force

# Copy uploads if exists
if (Test-Path "wp-content\uploads") {
    Write-Host "  → Copying uploads..." -ForegroundColor Gray
    $UploadsDestDir = Join-Path $DeployDir "wp-content"
    Copy-Item -Path "wp-content\uploads" -Destination $UploadsDestDir -Recurse -Force
}

# Copy plugins if exists
if (Test-Path "wp-content\plugins") {
    Write-Host "  → Copying plugins..." -ForegroundColor Gray
    $PluginsDestDir = Join-Path $DeployDir "wp-content"
    Copy-Item -Path "wp-content\plugins" -Destination $PluginsDestDir -Recurse -Force
}

Write-Host "✅ Files copied successfully!" -ForegroundColor Green

# Step 3: Create production wp-config.php template
Write-Host ""
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host "  STEP 3: Creating production configuration" -ForegroundColor Cyan
Write-Host "============================================================" -ForegroundColor Cyan

$WpConfigContent = @'
<?php
/**
 * WordPress Production Configuration
 * RENAME THIS FILE TO: wp-config.php
 * FILL IN YOUR HOSTING DATABASE INFORMATION
 */

// ** STEP 1: UPDATE DATABASE SETTINGS FROM YOUR HOSTING ** //
define( 'DB_NAME', 'YOUR_DATABASE_NAME_HERE' );
define( 'DB_USER', 'YOUR_DATABASE_USER_HERE' );
define( 'DB_PASSWORD', 'YOUR_DATABASE_PASSWORD_HERE' );
define( 'DB_HOST', 'localhost' ); // Usually 'localhost', check with your hosting

define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**
 * STEP 2: GENERATE NEW KEYS
 * Visit: https://api.wordpress.org/secret-key/1.1/salt/
 * Replace the lines below with the generated keys
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix = 'wp_';

// Production Settings - Security & Performance
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG', false );
define( 'DISALLOW_FILE_EDIT', true );
define( 'FORCE_SSL_ADMIN', true );
define( 'WP_CACHE', true );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
'@

Set-Content -Path (Join-Path $DeployDir "wp-config-TEMPLATE.php") -Value $WpConfigContent
Write-Host "✅ wp-config-TEMPLATE.php created" -ForegroundColor Green

# Step 4: Create production .htaccess
$HtaccessContent = @'
# WordPress Production .htaccess
# RENAME THIS FILE TO: .htaccess

# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress

# Security Headers
<IfModule mod_headers.c>
    Header set X-Content-Type-Options "nosniff"
    Header set X-Frame-Options "SAMEORIGIN"
    Header set X-XSS-Protection "1; mode=block"
    Header set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>

# Disable Directory Browsing
Options -Indexes

# Protect wp-config.php
<Files wp-config.php>
    order allow,deny
    deny from all
</Files>

# Enable GZIP Compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
</IfModule>

# Browser Caching
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType image/x-icon "access plus 1 year"
    ExpiresDefault "access plus 2 days"
</IfModule>
'@

Set-Content -Path (Join-Path $DeployDir "htaccess-PRODUCTION") -Value $HtaccessContent
Write-Host "✅ htaccess-PRODUCTION created" -ForegroundColor Green

# Step 5: Create deployment instructions
$ReadmeContent = @'
================================================================================
  HAND IN HAND FOUNDATION - DEPLOYMENT INSTRUCTIONS
================================================================================

🚀 QUICK START DEPLOYMENT:

1. UPLOAD FILES TO HOSTING
   - Upload all files to public_html (or www folder)
   - Use FTP/SFTP or cPanel File Manager

2. CREATE DATABASE
   - Create new MySQL database in cPanel
   - Create database user with ALL PRIVILEGES
   - Note database name, username, password

3. IMPORT DATABASE
   - Open phpMyAdmin
   - Select your database
   - Import: handinhand_db.sql
   
4. UPDATE DATABASE URLs ⚡ QUAN TRỌNG!
   - Mở file: update-database-urls.sql
   - Sửa dòng: SET @new_url = 'https://yourdomain.com';
   - Thay 'https://yourdomain.com' bằng domain THẬT của bạn
   - Trong phpMyAdmin, tab SQL
   - Copy toàn bộ nội dung update-database-urls.sql
   - Paste và click GO
   
   HOẶC chạy SQL này:
   
     UPDATE wp_options 
     SET option_value = 'https://yourdomain.com' 
     WHERE option_name = 'siteurl' OR option_name = 'home';

5. CONFIGURE wp-config.php
   - Rename: wp-config-TEMPLATE.php → wp-config.php
   - Edit and fill in:
     * DB_NAME
     * DB_USER
     * DB_PASSWORD
     * DB_HOST (usually 'localhost')
   - Generate new keys: https://api.wordpress.org/secret-key/1.1/salt/

5. SETUP .htaccess
   - Rename: htaccess-PRODUCTION → .htaccess

6. SET FILE PERMISSIONS
   - Files: 644
   - Directories: 755
   - wp-config.php: 600

7. INSTALL WORDPRESS CORE
   - Download fresh WordPress: https://wordpress.org/download/
   - Upload and extract
   - Keep your wp-content folder!

8. TEST YOUR SITE
   - Visit: https://yourdomain.com
   - Login: https://yourdomain.com/wp-admin
   - Check all pages and functionality

9. POST-DEPLOYMENT
   - Enable SSL (HTTPS)
   - Install security plugin
   - Setup backup system
   - Configure caching

================================================================================
  SUPPORT
================================================================================

For detailed instructions, see: DEPLOYMENT-GUIDE.md

================================================================================
'@

Set-Content -Path (Join-Path $DeployDir "DEPLOY-README.txt") -Value $ReadmeContent
Write-Host "✅ DEPLOY-README.txt created" -ForegroundColor Green

# Step 6: Create SQL update script
$SqlContent = @'
-- ============================================================
-- Update WordPress URLs for Production
-- Replace 'https://yourdomain.com' with your actual domain
-- ============================================================

-- Update site URL and home URL
UPDATE wp_options 
SET option_value = 'https://yourdomain.com' 
WHERE option_name = 'siteurl' OR option_name = 'home';

-- Update post GUIDs (optional, for media)
UPDATE wp_posts 
SET guid = REPLACE(guid, 'http://localhost/woredpress', 'https://yourdomain.com');

-- Update post content URLs
UPDATE wp_posts 
SET post_content = REPLACE(post_content, 'http://localhost/woredpress', 'https://yourdomain.com');

-- Update post meta
UPDATE wp_postmeta 
SET meta_value = REPLACE(meta_value, 'http://localhost/woredpress', 'https://yourdomain.com');

-- Clear cache
DELETE FROM wp_options WHERE option_name LIKE '_transient_%';
DELETE FROM wp_options WHERE option_name LIKE '_site_transient_%';

-- Done!
SELECT 'URLs updated successfully!' AS Status;
'@

Set-Content -Path (Join-Path $DeployDir "update-urls.sql") -Value $SqlContent
Write-Host "✅ update-urls.sql created" -ForegroundColor Green

# Step 7: Create deployment package
Write-Host ""
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host "  STEP 4: Creating deployment package" -ForegroundColor Cyan
Write-Host "============================================================" -ForegroundColor Cyan

$DeployPackage = Join-Path $ProjectDir "handinhand_deployment_$Date.zip"

try {
    Compress-Archive -Path (Join-Path $DeployDir "*") -DestinationPath $DeployPackage -Force
    Write-Host "✅ Deployment package created successfully!" -ForegroundColor Green
} catch {
    Write-Host "❌ Package creation failed: $($_.Exception.Message)" -ForegroundColor Red
}

# Final Report
Write-Host ""
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host "  DEPLOYMENT PREPARATION COMPLETE!" -ForegroundColor Cyan
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "📦 Deployment Package:" -ForegroundColor Green
Write-Host "   → handinhand_deployment_$Date.zip" -ForegroundColor White
Write-Host ""
Write-Host "📁 Files ready in:" -ForegroundColor Green
Write-Host "   → $DeployDir" -ForegroundColor White
Write-Host ""
Write-Host "💾 Backup saved to:" -ForegroundColor Green
Write-Host "   → $BackupFile" -ForegroundColor White
Write-Host ""
Write-Host "📋 Next Steps:" -ForegroundColor Yellow
Write-Host "   1. Extract: handinhand_deployment_$Date.zip" -ForegroundColor White
Write-Host "   2. Read: deployment-ready\DEPLOY-README.txt" -ForegroundColor White
Write-Host "   3. Follow: DEPLOYMENT-GUIDE.md" -ForegroundColor White
Write-Host "   4. Upload to hosting" -ForegroundColor White
Write-Host ""
Write-Host "✅ All files are ready for deployment!" -ForegroundColor Green
Write-Host ""
Write-Host "============================================================" -ForegroundColor Cyan
Write-Host ""

# Ask to open deployment folder
$OpenFolder = Read-Host "Do you want to open the deployment folder? (Y/N)"
if ($OpenFolder -eq "Y" -or $OpenFolder -eq "y") {
    Invoke-Item $DeployDir
}
