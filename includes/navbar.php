<?php if (!defined('SITE_NAME')) { require_once __DIR__ . '/../config/config.php'; require_once __DIR__ . '/functions.php'; } ?>
<header class="site-nav" id="siteNav">
  <div class="nav-inner">
    <a href="<?php echo BASE_URL; ?>/index.php" class="nav-logo" aria-label="<?php e(SITE_NAME); ?> — Beranda">
      <span class="nav-logo-mark">R</span>
      <span class="nav-logo-text">Revere</span>
    </a>

    <nav class="nav-links" id="navLinks" aria-label="Navigasi utama">
      <a href="<?php echo BASE_URL; ?>/index.php" class="<?php echo is_active('index.php'); ?>">Home</a>
      <a href="<?php echo BASE_URL; ?>/about.php" class="<?php echo is_active('about.php'); ?>">About</a>
      <a href="<?php echo BASE_URL; ?>/services.php" class="<?php echo is_active('services.php'); ?>">Services</a>
      <a href="<?php echo BASE_URL; ?>/projects.php" class="<?php echo is_active('projects.php'); ?>">Projects</a>
      <a href="<?php echo BASE_URL; ?>/contact.php" class="<?php echo is_active('contact.php'); ?>">Contact</a>
    </nav>

    <div class="nav-actions">
      <a href="<?php echo BASE_URL; ?>/contact.php" class="btn btn-primary btn-sm nav-cta">Let's Talk</a>
      <button class="nav-toggle" id="navToggle" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="mobileDrawer">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<div class="mobile-drawer" id="mobileDrawer" aria-hidden="true">
  <nav aria-label="Navigasi mobile">
    <a href="<?php echo BASE_URL; ?>/index.php" class="<?php echo is_active('index.php'); ?>">Home</a>
    <a href="<?php echo BASE_URL; ?>/about.php" class="<?php echo is_active('about.php'); ?>">About</a>
    <a href="<?php echo BASE_URL; ?>/services.php" class="<?php echo is_active('services.php'); ?>">Services</a>
    <a href="<?php echo BASE_URL; ?>/projects.php" class="<?php echo is_active('projects.php'); ?>">Projects</a>
    <a href="<?php echo BASE_URL; ?>/contact.php" class="<?php echo is_active('contact.php'); ?>">Contact</a>
  </nav>
  <div class="mobile-drawer-footer">
    <a href="<?php echo BASE_URL; ?>/contact.php" class="btn btn-primary btn-block">Let's Talk</a>
    <p><?php e(COMPANY_PHONE); ?></p>
  </div>
</div>
<div class="drawer-overlay" id="drawerOverlay"></div>
