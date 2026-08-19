<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_title       = 'Proyek Kami — ' . SITE_NAME;
$page_description = 'Jelajahi portofolio proyek komersial, residensial, teknologi, dan industrial yang telah dikembangkan oleh PT Revere.';
$page_path        = '/projects.php';

require_once __DIR__ . '/includes/header.php';
$projects = get_projects();
$categories = ['all' => 'All', 'Commercial' => 'Commercial', 'Residential' => 'Residential', 'Technology' => 'Technology', 'Industrial' => 'Industrial'];
?>

<main id="main-content">

  <section class="page-header">
    <div class="container">
      <div class="breadcrumb"><a href="index.php">Home</a> <i class="fa-solid fa-chevron-right" style="font-size:.65rem"></i> <span>Projects</span></div>
      <span class="eyebrow">Our Work</span>
      <h1 class="h1">Proyek yang Merepresentasikan Standar Kerja Kami.</h1>
    </div>
  </section>

  <section class="bg-paper">
    <div class="container">
      <div class="filter-bar reveal">
        <?php foreach ($categories as $key => $label): ?>
          <button class="filter-btn <?php echo $key === 'all' ? 'active' : ''; ?>" data-filter="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></button>
        <?php endforeach; ?>
      </div>

      <div class="projects-grid reveal">
        <?php foreach ($projects as $p): ?>
        <div class="project-card project-item" data-category="<?php e($p['category']); ?>">
          <div class="thumb">
            <img src="<?php e($p['image']); ?>" alt="<?php e($p['name']); ?> — proyek <?php e($p['category']); ?> oleh PT Revere" loading="lazy">
            <div class="project-overlay"><span class="text-link">View Project <i class="fa-solid fa-arrow-right"></i></span></div>
          </div>
          <div class="project-body">
            <span class="project-cat"><?php e($p['category']); ?></span>
            <h3 class="h3"><?php e($p['name']); ?></h3>
            <p><?php e($p['desc']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta-banner">
    <div class="container">
      <h2 class="h2">Tertarik dengan Salah Satu Proyek Kami?</h2>
      <p class="lede">Hubungi tim kami untuk mendiskusikan proyek serupa untuk kebutuhan Anda.</p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-on-ink">Start a Conversation</a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
