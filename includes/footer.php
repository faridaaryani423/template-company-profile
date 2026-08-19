<?php if (!defined('SITE_NAME')) { require_once __DIR__ . '/../config/config.php'; require_once __DIR__ . '/functions.php'; } ?>
<footer class="site-footer">
  <div class="footer-top">
    <div class="footer-brand">
      <a href="<?php echo BASE_URL; ?>/index.php" class="nav-logo">
        <span class="nav-logo-mark">R</span>
        <span class="nav-logo-text">Revere</span>
      </a>
      <p><?php e(SITE_DESCRIPTION); ?></p>
      <div class="footer-social">
        <a href="<?php e(SOCIAL_INSTAGRAM); ?>" aria-label="Instagram PT Revere" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
        <a href="<?php e(SOCIAL_LINKEDIN); ?>" aria-label="LinkedIn PT Revere" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="<?php e(SOCIAL_FACEBOOK); ?>" aria-label="Facebook PT Revere" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a>
      </div>
    </div>

    <div class="footer-col">
      <h4>Navigasi</h4>
      <a href="<?php echo BASE_URL; ?>/index.php">Home</a>
      <a href="<?php echo BASE_URL; ?>/about.php">About</a>
      <a href="<?php echo BASE_URL; ?>/services.php">Services</a>
      <a href="<?php echo BASE_URL; ?>/projects.php">Projects</a>
    </div>

    <div class="footer-col">
      <h4>Layanan</h4>
      <a href="<?php echo BASE_URL; ?>/services.php">Konsultasi Properti</a>
      <a href="<?php echo BASE_URL; ?>/services.php">Pengembangan & Konstruksi</a>
      <a href="<?php echo BASE_URL; ?>/services.php">Manajemen Aset</a>
      <a href="<?php echo BASE_URL; ?>/services.php">Pemasaran & Leasing</a>
    </div>

    <div class="footer-col">
      <h4>Kontak</h4>
      <a href="mailto:<?php e(COMPANY_EMAIL); ?>"><?php e(COMPANY_EMAIL); ?></a>
      <a href="tel:<?php e(COMPANY_PHONE); ?>"><?php e(COMPANY_PHONE); ?></a>
      <span class="footer-address"><?php e(COMPANY_ADDRESS); ?></span>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; <?php echo SITE_YEAR; ?> <?php e(SITE_NAME); ?>. All Rights Reserved.</p>
    <p class="footer-credit">Dirancang dengan presisi untuk pertumbuhan jangka panjang.</p>
  </div>
</footer>

<a href="https://wa.me/<?php echo preg_replace('/\D/', '', COMPANY_WHATSAPP); ?>" class="whatsapp-fab" aria-label="Hubungi via WhatsApp" target="_blank" rel="noopener">
  <i class="fa-brands fa-whatsapp"></i>
</a>

<script src="<?php echo asset('js/script.js'); ?>"></script>
</body>
</html>
