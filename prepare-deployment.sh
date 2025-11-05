#!/bin/bash
###############################################################################
# Hand in Hand Foundation - Deployment Preparation Script
# Version: 1.0
# Description: Chuẩn bị dự án WordPress để deploy lên production hosting
###############################################################################

echo "============================================================"
echo "  Hand in Hand Foundation - Deployment Preparation"
echo "============================================================"
echo ""

# Colors
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Variables
PROJECT_DIR=$(pwd)
BACKUP_DIR="$PROJECT_DIR/deployment-backup"
DEPLOY_DIR="$PROJECT_DIR/deployment-ready"
DATE=$(date +"%Y%m%d_%H%M%S")

echo "📁 Project Directory: $PROJECT_DIR"
echo "💾 Backup Directory: $BACKUP_DIR"
echo "🚀 Deploy Directory: $DEPLOY_DIR"
echo ""

# Create directories
echo "📂 Creating directories..."
mkdir -p "$BACKUP_DIR"
mkdir -p "$DEPLOY_DIR"

# Step 1: Backup current project
echo ""
echo "============================================================"
echo "  STEP 1: Backing up current project"
echo "============================================================"
echo "📦 Creating backup archive..."

tar -czf "$BACKUP_DIR/handinhand_backup_$DATE.tar.gz" \
    --exclude="deployment-backup" \
    --exclude="deployment-ready" \
    --exclude=".git" \
    --exclude="node_modules" \
    .

if [ $? -eq 0 ]; then
    echo -e "${GREEN}✅ Backup created successfully!${NC}"
else
    echo -e "${RED}❌ Backup failed!${NC}"
    exit 1
fi

# Step 2: Copy files to deployment directory
echo ""
echo "============================================================"
echo "  STEP 2: Preparing deployment files"
echo "============================================================"

echo "📋 Copying essential files..."

# Copy theme
echo "  → Copying theme..."
mkdir -p "$DEPLOY_DIR/wp-content/themes"
cp -r wp-content/themes/handinhand "$DEPLOY_DIR/wp-content/themes/"

# Copy database
echo "  → Copying database..."
cp handinhand_db.sql "$DEPLOY_DIR/"

# Copy uploads if exists
if [ -d "wp-content/uploads" ]; then
    echo "  → Copying uploads..."
    cp -r wp-content/uploads "$DEPLOY_DIR/wp-content/"
fi

# Copy plugins if exists
if [ -d "wp-content/plugins" ]; then
    echo "  → Copying plugins..."
    cp -r wp-content/plugins "$DEPLOY_DIR/wp-content/"
fi

echo -e "${GREEN}✅ Files copied successfully!${NC}"

# Step 3: Create production wp-config.php template
echo ""
echo "============================================================"
echo "  STEP 3: Creating production configuration"
echo "============================================================"

cat > "$DEPLOY_DIR/wp-config-TEMPLATE.php" << 'EOF'
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
EOF

echo -e "${GREEN}✅ wp-config-TEMPLATE.php created${NC}"

# Step 4: Create production .htaccess
echo ""
cat > "$DEPLOY_DIR/htaccess-PRODUCTION" << 'EOF'
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
EOF

echo -e "${GREEN}✅ htaccess-PRODUCTION created${NC}"

# Step 5: Create README for deployment
echo ""
cat > "$DEPLOY_DIR/DEPLOY-README.txt" << 'EOF'
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
   - Run this SQL to update URLs:
     
     UPDATE wp_options 
     SET option_value = 'https://yourdomain.com' 
     WHERE option_name = 'siteurl' OR option_name = 'home';

4. CONFIGURE wp-config.php
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

Need help? Check WordPress.org support forums or contact your hosting provider.

================================================================================
EOF

echo -e "${GREEN}✅ DEPLOY-README.txt created${NC}"

# Step 6: Create deployment checklist
echo ""
cat > "$DEPLOY_DIR/DEPLOYMENT-CHECKLIST.txt" << 'EOF'
================================================================================
  DEPLOYMENT CHECKLIST
================================================================================

PRE-DEPLOYMENT:
[ ] Backup current site
[ ] Test site locally
[ ] Update all plugins/themes
[ ] Check database for issues
[ ] Verify all images exist

DURING DEPLOYMENT:
[ ] Create hosting account
[ ] Create database & user
[ ] Upload files via FTP/SFTP
[ ] Import database
[ ] Configure wp-config.php
[ ] Set file permissions
[ ] Update URLs in database

POST-DEPLOYMENT:
[ ] Test homepage
[ ] Test all pages
[ ] Test admin login
[ ] Check responsive design
[ ] Test forms
[ ] Verify images loading
[ ] Check navigation
[ ] Test search functionality

OPTIMIZATION:
[ ] Enable SSL (HTTPS)
[ ] Install caching plugin
[ ] Enable CDN
[ ] Optimize images
[ ] Minify CSS/JS
[ ] Setup lazy loading
[ ] Enable GZIP compression

SECURITY:
[ ] Change admin password
[ ] Install security plugin (Wordfence)
[ ] Enable firewall
[ ] Disable file editing
[ ] Hide WordPress version
[ ] Setup 2FA authentication
[ ] Regular backups enabled

SEO:
[ ] Install Yoast SEO
[ ] Submit sitemap to Google
[ ] Setup Google Analytics
[ ] Configure meta tags
[ ] Check robots.txt
[ ] Verify mobile-friendly

MONITORING:
[ ] Setup uptime monitoring
[ ] Configure error alerts
[ ] Enable analytics tracking
[ ] Test site speed
[ ] Monitor performance

================================================================================
Date deployed: _______________
Deployed by: _________________
Notes: _______________________
================================================================================
EOF

echo -e "${GREEN}✅ DEPLOYMENT-CHECKLIST.txt created${NC}"

# Step 7: Create SQL script for URL update
echo ""
cat > "$DEPLOY_DIR/update-urls.sql" << 'EOF'
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

-- Clear cache (if using caching plugins)
DELETE FROM wp_options WHERE option_name LIKE '_transient_%';
DELETE FROM wp_options WHERE option_name LIKE '_site_transient_%';

-- Done!
SELECT 'URLs updated successfully!' AS Status;
EOF

echo -e "${GREEN}✅ update-urls.sql created${NC}"

# Step 8: Create deployment package
echo ""
echo "============================================================"
echo "  STEP 4: Creating deployment package"
echo "============================================================"

cd "$DEPLOY_DIR"
zip -r "../handinhand_deployment_$DATE.zip" . -x "*.git*" "*.DS_Store"
cd "$PROJECT_DIR"

if [ $? -eq 0 ]; then
    echo -e "${GREEN}✅ Deployment package created successfully!${NC}"
else
    echo -e "${RED}❌ Package creation failed!${NC}"
fi

# Step 9: Generate report
echo ""
echo "============================================================"
echo "  DEPLOYMENT PREPARATION COMPLETE!"
echo "============================================================"
echo ""
echo -e "${GREEN}📦 Deployment Package:${NC}"
echo "   → handinhand_deployment_$DATE.zip"
echo ""
echo -e "${GREEN}📁 Files ready in:${NC}"
echo "   → $DEPLOY_DIR"
echo ""
echo -e "${GREEN}💾 Backup saved to:${NC}"
echo "   → $BACKUP_DIR/handinhand_backup_$DATE.tar.gz"
echo ""
echo -e "${YELLOW}📋 Next Steps:${NC}"
echo "   1. Download: handinhand_deployment_$DATE.zip"
echo "   2. Read: deployment-ready/DEPLOY-README.txt"
echo "   3. Follow: DEPLOYMENT-GUIDE.md"
echo "   4. Upload to hosting"
echo ""
echo -e "${GREEN}✅ All files are ready for deployment!${NC}"
echo ""
echo "============================================================"
