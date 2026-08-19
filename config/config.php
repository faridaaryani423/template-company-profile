<?php
/**
 * config.php
 * Konfigurasi utama PT Revere Company Profile.
 * Ganti seluruh nilai bertanda [ ... ] dengan data resmi perusahaan.
 */

// ── Identitas Perusahaan ────────────────────────────────────────────────
define('SITE_NAME',        'PT Revere');
define('SITE_TAGLINE',     'Properti yang Dibangun untuk Bertahan');
define('SITE_DESCRIPTION', 'PT Revere adalah perusahaan pengembang dan konsultan properti yang merancang, membangun, dan mengelola aset properti komersial serta residensial dengan standar kualitas tertinggi.');
define('SITE_URL',         'https://www.revere.co.id');
define('SITE_YEAR',        date('Y'));

// ── Kontak ───────────────────────────────────────────────────────────────
define('COMPANY_ADDRESS',  '[ALAMAT] Jl. Jenderal Sudirman Kav. 45, Jakarta Selatan 12190, Indonesia');
define('COMPANY_PHONE',    '[NOMOR TELEPON] +62 21 5140 8899');
define('COMPANY_WHATSAPP', '[NOMOR WHATSAPP] +62 812 3456 7890');
define('COMPANY_EMAIL',    '[EMAIL] info@revere.co.id');
define('COMPANY_HOURS',    'Senin – Jumat, 09.00 – 18.00 WIB');

// ── Sosial Media ─────────────────────────────────────────────────────────
define('SOCIAL_INSTAGRAM', 'https://instagram.com/revere.co.id');
define('SOCIAL_LINKEDIN',  'https://linkedin.com/company/revere');
define('SOCIAL_FACEBOOK',  'https://facebook.com/revere.co.id');

// ── Peta ─────────────────────────────────────────────────────────────────
define('MAP_EMBED_SRC', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.987!2d106.8227!3d-6.2088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMzEuNyJTIDEwNsKwNDknMjEuNyJF!5e0!3m2!1sen!2sid!4v1700000000000');

// ── Path Dasar ───────────────────────────────────────────────────────────
define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', ''); // isi jika di-deploy pada subfolder, mis. '/company-profile'
