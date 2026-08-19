<?php
/**
 * functions.php
 * Kumpulan helper function yang dipakai di seluruh halaman.
 */

/** Cetak string dengan escaping aman untuk HTML */
function e($string) {
    echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/** Kembalikan URL asset relatif terhadap BASE_URL */
function asset($path) {
    return BASE_URL . '/assets/' . ltrim($path, '/');
}

/** Tentukan apakah suatu file adalah halaman yang sedang aktif (untuk navbar) */
function is_active($page) {
    $current = basename($_SERVER['PHP_SELF']);
    return $current === $page ? 'active' : '';
}

/** Bersihkan input form sederhana */
function clean_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/** Data statistik perusahaan (trust indicators) — ganti sesuai data riil */
function get_company_stats() {
    return [
        ['value' => 12,  'suffix' => '+', 'label' => 'Tahun Pengalaman'],
        ['value' => 120, 'suffix' => '+', 'label' => 'Proyek Selesai'],
        ['value' => 85,  'suffix' => '+', 'label' => 'Klien Korporat & Privat'],
        ['value' => 45,  'suffix' => '+', 'label' => 'Profesional Internal'],
    ];
}

/** Data layanan utama */
function get_services() {
    return [
        [
            'icon'  => 'compass',
            'name'  => 'Konsultasi Properti',
            'desc'  => 'Analisis kelayakan lahan, studi pasar, dan strategi investasi properti yang disusun berdasarkan data.',
        ],
        [
            'icon'  => 'hammer',
            'name'  => 'Pengembangan & Konstruksi',
            'desc'  => 'Pengelolaan proyek dari perencanaan hingga serah terima, dengan standar mutu dan ketepatan waktu.',
        ],
        [
            'icon'  => 'building-2',
            'name'  => 'Manajemen Aset',
            'desc'  => 'Pengelolaan operasional gedung dan kawasan agar nilai aset tetap terjaga dan tumbuh.',
        ],
        [
            'icon'  => 'handshake',
            'name'  => 'Pemasaran & Leasing',
            'desc'  => 'Strategi penjualan dan penyewaan unit dengan pendekatan yang tepat sasaran dan terukur.',
        ],
    ];
}

/** Data proyek unggulan */
function get_projects($limit = null) {
    $projects = [
        [
            'name' => 'Meridian Business Park',
            'category' => 'Commercial',
            'desc' => 'Kawasan perkantoran modern seluas 4,2 hektar di jantung bisnis Jakarta Selatan.',
            'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1200&auto=format&fit=crop',
        ],
        [
            'name' => 'Arden Residence',
            'category' => 'Residential',
            'desc' => 'Hunian tapak eksklusif dengan konsep taman terbuka dan keamanan berlapis 24 jam.',
            'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&auto=format&fit=crop',
        ],
        [
            'name' => 'Revere Tech Tower',
            'category' => 'Technology',
            'desc' => 'Gedung perkantoran pintar dengan integrasi sistem bangunan berbasis IoT.',
            'image' => 'https://images.unsplash.com/photo-1554469384-e58fac16e23a?q=80&w=1200&auto=format&fit=crop',
        ],
        [
            'name' => 'Kanaya Logistics Hub',
            'category' => 'Industrial',
            'desc' => 'Fasilitas pergudangan dan distribusi terintegrasi di kawasan industri Cikarang.',
            'image' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?q=80&w=1200&auto=format&fit=crop',
        ],
        [
            'name' => 'Solace Residences',
            'category' => 'Residential',
            'desc' => 'Apartemen premium dengan pemandangan kota dan fasilitas rekreasi lengkap.',
            'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=1200&auto=format&fit=crop',
        ],
        [
            'name' => 'Northgate Commercial Center',
            'category' => 'Commercial',
            'desc' => 'Pusat ritel dan komersial dengan tenant mix yang dikurasi untuk kebutuhan komunitas.',
            'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1200&auto=format&fit=crop',
        ],
    ];
    return $limit ? array_slice($projects, 0, $limit) : $projects;
}

/** Data testimoni klien */
function get_testimonials() {
    return [
        [
            'quote'   => 'PT Revere menangani proyek kami dengan sangat profesional, mulai dari perencanaan hingga serah terima tepat waktu.',
            'name'    => 'Andrew Prasetyo',
            'position'=> 'Direktur Operasional',
            'company' => 'Kanaya Group',
        ],
        [
            'quote'   => 'Tim konsultasi mereka membantu kami membuat keputusan investasi yang tepat berdasarkan data pasar yang akurat.',
            'name'    => 'Melisa Wijaya',
            'position'=> 'Head of Investment',
            'company' => 'Arden Capital',
        ],
        [
            'quote'   => 'Kualitas manajemen aset PT Revere membuat nilai properti kami tetap terjaga bahkan setelah lima tahun beroperasi.',
            'name'    => 'Rangga Kusuma',
            'position'=> 'Owner',
            'company' => 'Meridian Holdings',
        ],
    ];
}

/** Data anggota tim */
function get_team() {
    return [
        ['name' => 'Bimo Adiwardana', 'role' => 'Chief Executive Officer', 'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop'],
        ['name' => 'Sarah Amelia', 'role' => 'Chief Operating Officer', 'image' => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=800&auto=format&fit=crop'],
        ['name' => 'Daniel Hartono', 'role' => 'Head of Development', 'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=800&auto=format&fit=crop'],
        ['name' => 'Prisca Ananta', 'role' => 'Head of Marketing', 'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=800&auto=format&fit=crop'],
    ];
}
