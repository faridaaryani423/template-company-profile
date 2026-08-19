<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_title       = 'Tentang Kami — ' . SITE_NAME;
$page_description = 'Kenali PT Revere: sejarah, visi, misi, nilai inti, dan tim di balik proyek-proyek properti terpercaya.';
$page_path        = '/about.php';

require_once __DIR__ . '/includes/header.php';
$team = get_team();
?>

<main id="main-content">

  <section class="page-header">
    <div class="container">
      <div class="breadcrumb"><a href="index.php">Home</a> <i class="fa-solid fa-chevron-right" style="font-size:.65rem"></i> <span>About</span></div>
      <span class="eyebrow">About PT Revere</span>
      <h1 class="h1">Dibangun di Atas Kepercayaan, Diperkuat oleh Rekam Jejak.</h1>
    </div>
  </section>

  <!-- ================= STORY ================= -->
  <section class="bg-paper">
    <div class="container split">
      <div class="split-media reveal">
        <div class="frame">
          <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=900&auto=format&fit=crop" alt="Kantor pusat PT Revere di Jakarta" loading="lazy">
        </div>
        <div class="corner-brackets"><span></span><span></span><span></span><span></span></div>
      </div>
      <div class="split-copy reveal">
        <span class="eyebrow">Our Story</span>
        <h2 class="h2">Dari Satu Proyek Kecil, Menjadi Mitra Properti Tepercaya.</h2>
        <p class="lede">PT Revere didirikan oleh sekelompok profesional properti yang percaya bahwa industri ini membutuhkan pendekatan yang lebih personal — bukan sekadar transaksional.</p>
        <p>Dimulai dari proyek renovasi gedung perkantoran skala kecil, kami tumbuh menjadi perusahaan yang menangani pengembangan kawasan komersial, hunian, hingga fasilitas industri di berbagai kota besar Indonesia.</p>
        <p>Kini, PT Revere dipercaya oleh korporasi, investor privat, hingga institusi untuk mengelola aset properti bernilai tinggi — dengan prinsip yang sama sejak hari pertama: kejujuran proses dan kualitas hasil.</p>
      </div>
    </div>
  </section>

  <!-- ================= VISION MISSION VALUES ================= -->
  <section class="bg-stone">
    <div class="container">
      <div class="section-label reveal">
        <span class="eyebrow" style="justify-content:center">Our Direction</span>
        <h2 class="h2">Visi, Misi, dan Nilai yang Kami Pegang.</h2>
      </div>

      <div class="vm-grid reveal">
        <div class="vm-card">
          <i class="fa-solid fa-eye"></i>
          <h3 class="h3">Visi</h3>
          <p>Menjadi perusahaan properti terpercaya di Indonesia yang dikenal atas kualitas, integritas, dan nilai jangka panjang yang diciptakan bagi klien serta komunitas.</p>
        </div>
        <div class="vm-card">
          <i class="fa-solid fa-bullseye"></i>
          <h3 class="h3">Misi</h3>
          <p>Menghadirkan solusi properti yang terencana matang, dikerjakan secara profesional, dan dikelola secara berkelanjutan — mulai dari konsultasi hingga purna serah terima.</p>
        </div>
      </div>

      <div class="values-row reveal">
        <div class="value-chip"><i class="fa-solid fa-shield-halved"></i><span>Integrity</span></div>
        <div class="value-chip"><i class="fa-solid fa-lightbulb"></i><span>Innovation</span></div>
        <div class="value-chip"><i class="fa-solid fa-medal"></i><span>Excellence</span></div>
        <div class="value-chip"><i class="fa-solid fa-people-group"></i><span>Collaboration</span></div>
        <div class="value-chip"><i class="fa-solid fa-heart"></i><span>Customer Focus</span></div>
      </div>
    </div>
  </section>

  <!-- ================= STATS ================= -->
  <section class="stats-strip section-tight">
    <div class="container">
      <div class="stats-grid">
        <?php foreach (get_company_stats() as $s): ?>
        <div class="stat-item reveal">
          <div class="stat-value" data-count="<?php echo (int)$s['value']; ?>">
            <span class="num">0</span><span class="suffix"><?php e($s['suffix']); ?></span>
          </div>
          <div class="stat-label"><?php e($s['label']); ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================= TEAM ================= -->
  <section class="bg-paper">
    <div class="container">
      <div class="section-label reveal">
        <span class="eyebrow" style="justify-content:center">Meet Our Team</span>
        <h2 class="h2">Orang-Orang di Balik Setiap Proyek.</h2>
      </div>
      <div class="team-grid reveal">
        <?php foreach ($team as $m): ?>
        <div class="team-card">
          <div class="team-photo">
            <img src="<?php e($m['image']); ?>" alt="Foto <?php e($m['name']); ?>, <?php e($m['role']); ?>" loading="lazy">
            <div class="team-social">
              <a href="#" aria-label="LinkedIn <?php e($m['name']); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#" aria-label="Email <?php e($m['name']); ?>"><i class="fa-solid fa-envelope"></i></a>
            </div>
          </div>
          <h3><?php e($m['name']); ?></h3>
          <span><?php e($m['role']); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================= CTA ================= -->
  <section class="cta-banner">
    <div class="container">
      <h2 class="h2">Ingin Mengenal Lebih Jauh Cara Kerja Kami?</h2>
      <p class="lede">Tim kami siap menjelaskan pendekatan dan portofolio kerja secara langsung.</p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-on-ink">Start a Conversation</a>
        <a href="projects.php" class="btn btn-ghost-on-ink">Lihat Proyek Kami</a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
