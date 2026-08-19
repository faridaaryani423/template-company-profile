<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_title       = 'Hubungi Kami — ' . SITE_NAME;
$page_description = 'Hubungi PT Revere untuk konsultasi properti, kerja sama proyek, atau pertanyaan lainnya. Kami siap membantu.';
$page_path        = '/contact.php';

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">

  <section class="page-header">
    <div class="container">
      <div class="breadcrumb"><a href="index.php">Home</a> <i class="fa-solid fa-chevron-right" style="font-size:.65rem"></i> <span>Contact</span></div>
      <span class="eyebrow">Get In Touch</span>
      <h1 class="h1">Mari Bicarakan Rencana Properti Anda.</h1>
    </div>
  </section>

  <section class="bg-paper">
    <div class="container">
      <div class="contact-grid">

        <!-- ================= INFO ================= -->
        <div class="reveal">
          <div class="contact-info-card">
            <h3 class="h3">Informasi Kontak</h3>

            <div class="contact-info-item">
              <i class="fa-solid fa-location-dot"></i>
              <div><strong>Alamat</strong><span><?php e(COMPANY_ADDRESS); ?></span></div>
            </div>
            <div class="contact-info-item">
              <i class="fa-solid fa-phone"></i>
              <div><strong>Telepon</strong><a href="tel:<?php e(COMPANY_PHONE); ?>"><?php e(COMPANY_PHONE); ?></a></div>
            </div>
            <div class="contact-info-item">
              <i class="fa-brands fa-whatsapp"></i>
              <div><strong>WhatsApp</strong><a href="https://wa.me/<?php echo preg_replace('/\D/', '', COMPANY_WHATSAPP); ?>" target="_blank" rel="noopener"><?php e(COMPANY_WHATSAPP); ?></a></div>
            </div>
            <div class="contact-info-item">
              <i class="fa-solid fa-envelope"></i>
              <div><strong>Email</strong><a href="mailto:<?php e(COMPANY_EMAIL); ?>"><?php e(COMPANY_EMAIL); ?></a></div>
            </div>
            <div class="contact-info-item">
              <i class="fa-solid fa-clock"></i>
              <div><strong>Jam Operasional</strong><span><?php e(COMPANY_HOURS); ?></span></div>
            </div>
          </div>
        </div>

        <!-- ================= FORM ================= -->
        <div class="reveal">
          <div class="contact-form-wrap">
            <h3 class="h3" style="margin-bottom:8px;">Kirim Pesan</h3>
            <p style="color:var(--text-muted);margin-bottom:30px;">Lengkapi formulir di bawah ini, tim kami akan merespons dalam 1x24 jam kerja.</p>

            <div id="formSuccess" role="status" style="display:none;background:#EEF6F0;color:#2A6E44;padding:14px 18px;border-radius:8px;margin-bottom:24px;font-size:0.9rem;"></div>

            <form id="contactForm" novalidate>
              <div class="form-grid">
                <div class="form-group">
                  <label for="fullName">Nama Lengkap</label>
                  <input type="text" id="fullName" name="fullName" data-required autocomplete="name">
                  <span class="form-error" id="fullNameError"></span>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" data-required autocomplete="email">
                  <span class="form-error" id="emailError"></span>
                </div>
                <div class="form-group">
                  <label for="phone">Nomor Telepon</label>
                  <input type="tel" id="phone" name="phone" data-required autocomplete="tel">
                  <span class="form-error" id="phoneError"></span>
                </div>
                <div class="form-group">
                  <label for="company">Perusahaan <span style="font-weight:400;color:var(--text-muted);">(opsional)</span></label>
                  <input type="text" id="company" name="company" autocomplete="organization">
                  <span class="form-error" id="companyError"></span>
                </div>
                <div class="form-group full">
                  <label for="subject">Subjek</label>
                  <select id="subject" name="subject" data-required>
                    <option value="">Pilih subjek</option>
                    <option value="Konsultasi Properti">Konsultasi Properti</option>
                    <option value="Pengembangan & Konstruksi">Pengembangan & Konstruksi</option>
                    <option value="Manajemen Aset">Manajemen Aset</option>
                    <option value="Pemasaran & Leasing">Pemasaran & Leasing</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                  <span class="form-error" id="subjectError"></span>
                </div>
                <div class="form-group full">
                  <label for="message">Pesan</label>
                  <textarea id="message" name="message" data-required placeholder="Ceritakan kebutuhan proyek Anda..."></textarea>
                  <span class="form-error" id="messageError"></span>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Send Message</button>
              <p class="form-note">Formulir ini menggunakan validasi sisi klien. Untuk integrasi pengiriman email, hubungkan dengan PHP mailer atau API pada <code>includes/functions.php</code>.</p>
            </form>
          </div>
        </div>
      </div>

      <!-- ================= MAP ================= -->
      <div class="map-wrap reveal">
        <iframe src="<?php echo MAP_EMBED_SRC; ?>" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi kantor PT Revere"></iframe>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
