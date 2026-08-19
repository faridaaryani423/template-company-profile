# PT Revere — Company Profile Website

Website company profile premium untuk PT Revere (properti), dibangun dengan HTML5, CSS3, dan JavaScript — tanpa framework berat.

## Menjalankan

1. Buka `index.html` langsung di browser, atau deploy folder ini ke hosting statis.

Tidak memerlukan server PHP atau database. Seluruh data ditampilkan langsung dalam file HTML.

## Struktur Folder

```
company-profile/
├── index.html          → Homepage
├── about.html          → Tentang kami, visi/misi, tim
├── services.html       → Layanan & alur kerja
├── projects.html       → Portofolio proyek + filter kategori
├── contact.html        → Form kontak, peta, info kontak
├── assets/
│   ├── css/style.css    → Seluruh styling (design system + komponen)
│   ├── js/script.js     → Navbar, drawer mobile, reveal, counter, filter, validasi form
│   └── images/          → Simpan foto asli perusahaan di sini
```

## Yang Perlu Diganti Sebelum Go-Live

Data kontak dan placeholder berada langsung di file HTML:

- Edit alamat, telepon, email, sosial media, dan konten langsung pada halaman HTML terkait.

## Gambar

Untuk keperluan demo, gambar memakai foto stok dari Unsplash (dipanggil langsung via URL). Untuk produksi:

1. Simpan foto resmi perusahaan ke `assets/images/hero/`, `about/`, `services/`, `projects/`, `team/`.
2. Ganti URL `src` gambar pada file HTML terkait dengan path gambar lokal.
3. Kompres gambar (WebP disarankan) sebelum upload untuk menjaga performa.

## Form Kontak

Form pada `contact.html` sudah divalidasi di sisi client (JavaScript). Untuk mengirim email sungguhan, hubungkan form dengan layanan email atau endpoint API pilihan Anda.

## Menambahkan Halaman Baru

Untuk menambahkan halaman, salin salah satu file HTML lalu sesuaikan metadata, navigasi, dan kontennya.
