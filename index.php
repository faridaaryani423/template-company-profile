<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_title       = 'PT Revere — Konsultan & Pengembang Properti Terpercaya';
$page_description = 'PT Revere merancang, membangun, dan mengelola aset properti komersial serta residensial dengan standar kualitas tertinggi di Indonesia.';
$page_path         = '/index.php';

require_once __DIR__ . '/includes/header.php';

$stats = get_company_stats();
$services = get_services();
$projects = get_projects(4);
$testimonials = get_testimonials();
?>

<main id="main-content">

  <!-- ================= HERO ================= -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-copy">
        <span class="eyebrow">Selamat Datang di PT Revere</span>
        <h1 class="h1">Membangun Properti yang <em>Bertahan</em> Lintas Generasi.</h1>
        <p class="lede">PT Revere adalah konsultan dan pengembang properti yang memadukan riset pasar, desain arsitektural, dan eksekusi konstruksi yang presisi — untuk klien korporat maupun privat.</p>
        <div class="hero-actions">
          <a href="services.php" class="btn btn-on-ink">Jelajahi Layanan Kami</a>
          <a href="contact.php" class="btn btn-ghost-on-ink">Hubungi Kami</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-frame">
          <div class="hero-corner-brackets"><span></span><span></span><span></span><span></span></div>
          <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1000&auto=format&fit=crop" alt="Gedung perkantoran modern hasil pengembangan PT Revere" loading="eager">
        </div>
        <div class="hero-badge">
          <strong>12+</strong>
          <span>Tahun membangun kepercayaan klien di industri properti</span>
        </div>
      </div>
    </div>
    <div class="scroll-indicator"><span class="line"></span> Scroll</div>
  </section>

  <!-- ================= TRUST STATS ================= -->
  <section class="stats-strip section-tight">
    <div class="container">
      <div class="stats-grid">
        <?php foreach ($stats as $s): ?>
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

  <!-- ================= ABOUT PREVIEW ================= -->
  <section class="bg-paper">
    <div class="container split">
      <div class="split-media reveal">
        <div class="frame">
          <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?q=80&w=900&auto=format&fit=crop" alt="Tim PT Revere sedang meninjau rencana proyek properti" loading="lazy">
        </div>
        <div class="corner-brackets"><span></span><span></span><span></span><span></span></div>
      </div>
      <div class="split-copy reveal">
        <span class="eyebrow">About Us</span>
        <h2 class="h2">Kami Menciptakan Lebih dari Sekadar Bangunan.</h2>
        <p class="lede">Sejak awal berdiri, PT Revere percaya bahwa properti terbaik lahir dari pertemuan antara perencanaan yang matang dan eksekusi yang disiplin. Kami membantu klien mengubah lahan kosong menjadi aset yang bernilai — dan bangunan lama menjadi aset yang relevan kembali.</p>
        <p>Setiap proyek kami mulai dengan mendengarkan tujuan bisnis klien, lalu diterjemahkan menjadi solusi properti yang terukur, efisien, dan tahan terhadap perubahan zaman.</p>
        <br>
        <a href="about.php" class="text-link">Kenali Cerita Kami <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- ================= SERVICES ================= -->
  <section class="bg-stone">
    <div class="container">
      <div class="section-label reveal">
        <span class="eyebrow" style="justify-content:center">What We Do</span>
        <h2 class="h2">Solusi yang Dirancang Sesuai Kebutuhan Anda.</h2>
      </div>
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

  <!-- ================= WHY CHOOSE US ================= -->
  <section class="bg-paper">
    <div class="container why-grid">
      <div class="why-media reveal">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=900&auto=format&fit=crop" alt="Kawasan hunian hasil pengembangan PT Revere" loading="lazy">
      </div>
      <div class="reveal">
        <span class="eyebrow">Why Choose Us</span>
        <h2 class="h2" style="margin-bottom:36px;">Alasan Klien Mempercayakan Proyek Mereka pada Kami.</h2>
        <div class="why-list">
          <div class="why-item">
            <span class="why-num">01</span>
            <div><h3 class="h3">Tim Berpengalaman</h3><p>Didukung arsitek, insinyur, dan konsultan properti dengan rekam jejak lebih dari satu dekade.</p></div>
          </div>
          <div class="why-item">
            <span class="why-num">02</span>
            <div><h3 class="h3">Standar Kualitas Tinggi</h3><p>Setiap tahap konstruksi melalui quality control ketat sesuai standar nasional dan internasional.</p></div>
          </div>
          <div class="why-item">
            <span class="why-num">03</span>
            <div><h3 class="h3">Berorientasi pada Klien</h3><p>Komunikasi transparan dan pelaporan berkala di setiap fase proyek berjalan.</p></div>
          </div>
          <div class="why-item">
            <span class="why-num">04</span>
            <div><h3 class="h3">Pengiriman yang Andal</h3><p>Komitmen terhadap linimasa dan anggaran yang telah disepakati bersama klien.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= PROJECTS PREVIEW ================= -->
  <section class="bg-stone">
    <div class="container">
      <div class="section-label reveal">
        <span class="eyebrow" style="justify-content:center">Our Work</span>
        <h2 class="h2">Proyek yang Kami Banggakan.</h2>
      </div>
      <div class="projects-grid reveal">
        <?php foreach ($projects as $p): ?>
        <div class="project-card">
          <div class="thumb">
            <img src="<?php e($p['image']); ?>" alt="<?php e($p['name']); ?> — proyek <?php e($p['category']); ?> oleh PT Revere" loading="lazy">
            <div class="project-overlay"><a href="projects.php" class="text-link">Lihat Proyek <i class="fa-solid fa-arrow-right"></i></a></div>
          </div>
          <div class="project-body">
            <span class="project-cat"><?php e($p['category']); ?></span>
            <h3 class="h3"><?php e($p['name']); ?></h3>
            <p><?php e($p['desc']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="projects-cta reveal"><a href="projects.php" class="btn btn-outline">Lihat Semua Proyek</a></div>
    </div>
  </section>

  <!-- ================= TESTIMONIALS ================= -->
  <section class="bg-paper">
    <div class="container">
      <div class="section-label reveal">
        <span class="eyebrow" style="justify-content:center">What Our Clients Say</span>
        <h2 class="h2">Dipercaya oleh Para Pemilik dan Investor Properti.</h2>
      </div>
      <div class="testi-track reveal" id="testiTrack">
        <?php foreach ($testimonials as $t): ?>
        <div class="testi-card">
          <i class="fa-solid fa-quote-left"></i>
          <p class="quote">&ldquo;<?php e($t['quote']); ?>&rdquo;</p>
          <div class="testi-person">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($t['name']); ?>&background=101B2D&color=D8BD8C" alt="Foto <?php e($t['name']); ?>">
            <div>
              <strong><?php e($t['name']); ?></strong>
              <span><?php e($t['position']); ?>, <?php e($t['company']); ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="testi-nav">
        <button id="testiPrev" aria-label="Testimoni sebelumnya"><i class="fa-solid fa-arrow-left"></i></button>
        <button id="testiNext" aria-label="Testimoni berikutnya"><i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </div>
  </section>

  <!-- ================= CTA BANNER ================= -->
  <section class="cta-banner">
    <div class="container">
      <h2 class="h2">Punya Rencana Proyek Properti?</h2>
      <p class="lede">Mari wujudkan bersama — dari konsultasi awal hingga proyek berjalan penuh.</p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-on-ink">Start a Conversation</a>
        <a href="services.php" class="btn btn-ghost-on-ink">Lihat Layanan</a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
