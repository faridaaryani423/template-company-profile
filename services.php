<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_title       = 'Layanan Kami — ' . SITE_NAME;
$page_description = 'Layanan konsultasi properti, pengembangan & konstruksi, manajemen aset, serta pemasaran dan leasing dari PT Revere.';
$page_path        = '/services.php';

require_once __DIR__ . '/includes/header.php';
$services = get_services();
?>

<main id="main-content">

  <section class="page-header">
    <div class="container">
      <div class="breadcrumb"><a href="index.php">Home</a> <i class="fa-solid fa-chevron-right" style="font-size:.65rem"></i> <span>Services</span></div>
      <span class="eyebrow">What We Do</span>
      <h1 class="h1">Solusi Properti Menyeluruh, dari Ide hingga Operasional.</h1>
    </div>
  </section>

  <!-- ================= SERVICES GRID ================= -->
  <section class="bg-paper">
    <div class="container">
      <div class="services-grid reveal">
        <?php foreach ($services as $i => $sv): ?>
        <div class="service-card">
          <div class="service-top">
            <span class="service-index">0<?php echo $i + 1; ?></span>
            <span class="service-arrow"><i class="fa-solid fa-arrow-up-right"></i></span>
          </div>
          <i class="fa-solid fa-<?php e($sv['icon']); ?>"></i>
          <h3 class="h3"><?php e($sv['name']); ?></h3>
          <p><?php e($sv['desc']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================= DETAIL PER LAYANAN ================= -->
  <section class="bg-stone">
    <div class="container split">
      <div class="split-copy reveal">
        <span class="eyebrow">Konsultasi Properti</span>
        <h2 class="h2">Keputusan Investasi yang Berpijak pada Data.</h2>
        <p class="lede">Tim riset kami menganalisis potensi lahan, tren pasar, dan proyeksi nilai investasi sebelum proyek dimulai — meminimalkan risiko dan memaksimalkan hasil.</p>
        <ul style="display:flex;flex-direction:column;gap:12px;margin-bottom:26px;">
          <li style="display:flex;gap:10px;align-items:flex-start;"><i class="fa-solid fa-check" style="color:var(--bronze);margin-top:4px;"></i> Studi kelayakan lahan dan regulasi</li>
          <li style="display:flex;gap:10px;align-items:flex-start;"><i class="fa-solid fa-check" style="color:var(--bronze);margin-top:4px;"></i> Analisis pasar dan proyeksi ROI</li>
          <li style="display:flex;gap:10px;align-items:flex-start;"><i class="fa-solid fa-check" style="color:var(--bronze);margin-top:4px;"></i> Strategi akuisisi dan struktur investasi</li>
        </ul>
        <a href="contact.php" class="text-link">Konsultasikan Proyek Anda <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="split-media reveal">
        <div class="frame"><img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=900&auto=format&fit=crop" alt="Sesi konsultasi properti PT Revere" loading="lazy"></div>
        <div class="corner-brackets"><span></span><span></span><span></span><span></span></div>
      </div>
    </div>
  </section>

  <section class="bg-paper">
    <div class="container split">
      <div class="split-media reveal" style="order:2;">
        <div class="frame"><img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=900&auto=format&fit=crop" alt="Proses konstruksi proyek PT Revere" loading="lazy"></div>
        <div class="corner-brackets"><span></span><span></span><span></span><span></span></div>
      </div>
      <div class="split-copy reveal">
        <span class="eyebrow">Pengembangan & Konstruksi</span>
        <h2 class="h2">Dari Gambar Rencana Menjadi Bangunan Nyata.</h2>
        <p class="lede">Kami mengelola seluruh siklus konstruksi — perencanaan teknis, pengadaan, pengawasan lapangan — dengan standar mutu dan ketepatan waktu sebagai prioritas.</p>
        <ul style="display:flex;flex-direction:column;gap:12px;margin-bottom:26px;">
          <li style="display:flex;gap:10px;align-items:flex-start;"><i class="fa-solid fa-check" style="color:var(--bronze);margin-top:4px;"></i> Manajemen proyek end-to-end</li>
          <li style="display:flex;gap:10px;align-items:flex-start;"><i class="fa-solid fa-check" style="color:var(--bronze);margin-top:4px;"></i> Quality control di setiap tahapan</li>
          <li style="display:flex;gap:10px;align-items:flex-start;"><i class="fa-solid fa-check" style="color:var(--bronze);margin-top:4px;"></i> Koordinasi kontraktor dan pemasok</li>
        </ul>
        <a href="contact.php" class="text-link">Diskusikan Proyek Anda <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- ================= PROCESS ================= -->
  <section class="bg-stone">
    <div class="container">
      <div class="section-label reveal">
        <span class="eyebrow" style="justify-content:center">How We Work</span>
        <h2 class="h2">Alur Kerja Sama dengan PT Revere.</h2>
      </div>
      <div class="why-list reveal" style="max-width:760px;margin:0 auto;">
        <div class="why-item"><span class="why-num">01</span><div><h3 class="h3">Konsultasi Awal</h3><p>Diskusi kebutuhan, tujuan, dan anggaran proyek bersama tim konsultan kami.</p></div></div>
        <div class="why-item"><span class="why-num">02</span><div><h3 class="h3">Perencanaan & Desain</h3><p>Penyusunan rencana teknis, estimasi biaya, dan linimasa proyek yang realistis.</p></div></div>
        <div class="why-item"><span class="why-num">03</span><div><h3 class="h3">Eksekusi Konstruksi</h3><p>Pelaksanaan pembangunan dengan pengawasan mutu dan pelaporan berkala.</p></div></div>
        <div class="why-item"><span class="why-num">04</span><div><h3 class="h3">Serah Terima & Pengelolaan</h3><p>Serah terima proyek serta opsi manajemen aset berkelanjutan pascakonstruksi.</p></div></div>
      </div>
    </div>
  </section>

  <section class="cta-banner">
    <div class="container">
      <h2 class="h2">Siap Memulai Proyek Bersama Kami?</h2>
      <p class="lede">Ceritakan kebutuhan Anda, tim kami akan menyusun pendekatan yang paling sesuai.</p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-on-ink">Start a Conversation</a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
