# PT Revere — Company Profile Website

Website company profile premium untuk PT Revere (properti), dibangun dengan PHP native, HTML5, CSS3, dan JavaScript — tanpa framework berat.

## Menjalankan di XAMPP

1. Copy folder `company-profile` ke dalam `htdocs` (mis. `C:\xampp\htdocs\company-profile`).
2. Jalankan Apache dari XAMPP Control Panel.
3. Buka `http://localhost/company-profile/index.php` di browser.

Tidak memerlukan database — seluruh data ditampilkan dari `includes/functions.php` (data proyek, layanan, tim, testimoni) agar mudah diedit tanpa MySQL.

## Struktur Folder

```
company-profile/
├── index.php          → Homepage
├── about.php           → Tentang kami, visi/misi, tim
├── services.php        → Layanan & alur kerja
├── projects.php        → Portofolio proyek + filter kategori
├── contact.php         → Form kontak, peta, info kontak
├── assets/
│   ├── css/style.css    → Seluruh styling (design system + komponen)
│   ├── js/script.js     → Navbar, drawer mobile, reveal, counter, filter, validasi form
│   └── images/          → Simpan foto asli perusahaan di sini
├── includes/
│   ├── header.php       → <head>, SEO meta, structured data
│   ├── navbar.php       → Navigasi sticky + drawer mobile
│   ├── footer.php       → Footer + WhatsApp floating button
│   └── functions.php    → Helper function & data dummy (stats, services, projects, team, testimonials)
└── config/config.php    → Nama perusahaan, kontak, sosial media, alamat
```

## Yang Perlu Diganti Sebelum Go-Live

Semua data placeholder ditandai jelas di `config/config.php`:

- `COMPANY_ADDRESS`, `COMPANY_PHONE`, `COMPANY_WHATSAPP`, `COMPANY_EMAIL`
- `MAP_EMBED_SRC` → ganti dengan link embed Google Maps lokasi asli
- `SOCIAL_INSTAGRAM`, `SOCIAL_LINKEDIN`, `SOCIAL_FACEBOOK`

Data konten (proyek, layanan, tim, testimoni, statistik) ada di `includes/functions.php` — cukup edit array di masing-masing fungsi `get_*()`.

## Gambar

Untuk keperluan demo, gambar memakai foto stok dari Unsplash (dipanggil langsung via URL). Untuk produksi:

1. Simpan foto resmi perusahaan ke `assets/images/hero/`, `about/`, `services/`, `projects/`, `team/`.
2. Ganti path `src` gambar pada masing-masing file `.php` dengan `<?php echo asset('images/projects/nama-file.jpg'); ?>`.
3. Kompres gambar (WebP disarankan) sebelum upload untuk menjaga performa.

## Form Kontak

Form pada `contact.php` sudah divalidasi di sisi client (JavaScript). Untuk mengirim email sungguhan, tambahkan proses submit ke PHP mailer atau layanan API pilihan Anda (misalnya PHPMailer + SMTP) pada endpoint baru, lalu arahkan `fetch()`/`action` form ke endpoint tersebut.

## Menambahkan Halaman Baru

Gunakan `index.php` sebagai contoh: `require config → require functions → set $page_title/$page_description/$page_path → require header.php → konten → require footer.php`.
