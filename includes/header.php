<?php
/**
 * header.php
 * Membutuhkan variabel opsional sebelum di-include:
 * $page_title, $page_description, $page_path (untuk canonical/OG)
 */
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/functions.php';
}

$page_title       = $page_title ?? SITE_NAME . ' — ' . SITE_TAGLINE;
$page_description = $page_description ?? SITE_DESCRIPTION;
$page_path        = $page_path ?? '/';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php e($page_title); ?></title>
<meta name="description" content="<?php e($page_description); ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php e(SITE_URL . $page_path); ?>">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php e($page_title); ?>">
<meta property="og:description" content="<?php e($page_description); ?>">
<meta property="og:url" content="<?php e(SITE_URL . $page_path); ?>">
<meta property="og:site_name" content="<?php e(SITE_NAME); ?>">
<meta property="og:image" content="<?php e(SITE_URL); ?>/assets/images/hero/og-cover.jpg">
<meta name="twitter:card" content="summary_large_image">

<!-- Favicon -->
<link rel="icon" type="image/png" href="<?php echo asset('images/favicon.png'); ?>">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400;1,9..144,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Styles -->
<link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">

<!-- Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "<?php echo SITE_NAME; ?>",
  "url": "<?php echo SITE_URL; ?>",
  "logo": "<?php echo SITE_URL; ?>/assets/images/logo.png",
  "description": "<?php echo SITE_DESCRIPTION; ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php echo COMPANY_ADDRESS; ?>"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "<?php echo COMPANY_PHONE; ?>",
    "contactType": "customer service"
  }
}
</script>
</head>
<body>
<a class="skip-link" href="#main-content">Langsung ke konten</a>
<?php require_once __DIR__ . '/navbar.php'; ?>
