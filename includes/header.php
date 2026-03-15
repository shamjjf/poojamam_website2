<?php
/**
 * AHAM PREMAH FOUNDATION
 * includes/header.php
 */

$page_title  = $page_title  ?? 'Aham Premah Foundation';
$page_desc   = $page_desc   ?? 'Dedicated to the holistic welfare of animals — rescue, nourishment, affection, sterilization, and community empowerment.';
$active_page = $active_page ?? '';

// -------------------------------------------------------
// BULLETPROOF ABSOLUTE URL — works on EasyPanel /app, 
// cPanel, shared hosting, Docker, any server
// Never uses relative paths for assets — always absolute
// -------------------------------------------------------
$_protocol  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$_host      = $_SERVER['HTTP_HOST'];
$_doc_root  = rtrim(realpath($_SERVER['DOCUMENT_ROOT']), '/\\');
$_site_root = rtrim(realpath(dirname(__FILE__) . '/..'), '/\\');
$_base_path = str_replace($_doc_root, '', $_site_root);
$_base_path = '/' . trim(str_replace('\\', '/', $_base_path), '/');
if ($_base_path === '/') $_base_path = '';
$base_url   = $_protocol . '://' . $_host . $_base_path;
// $root ends with / — e.g. "https://yourdomain.com/"
// All asset links: $root . 'css/style.css' etc.
$root = $base_url . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <title><?php echo htmlspecialchars($page_title); ?> | Aham Premah Foundation</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Main CSS — absolute URL, never breaks -->
  <link rel="stylesheet" href="<?php echo $root; ?>css/style.css">

  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🐾</text></svg>">
</head>
<body>

<!-- Announcement Bar -->
<div class="announcement-bar">
  🐾 &nbsp;Daily feeding of 40–50 community animals &nbsp;|&nbsp;
  📞 <a href="tel:+918447667582">+91 8447667582</a> &nbsp;|&nbsp;
  Need help? <a href="<?php echo $root; ?>pages/contact.php">Contact Us →</a>
</div>

<!-- Navbar -->
<nav class="navbar">
  <div class="nav-inner">
    <a href="<?php echo $root; ?>index.php" class="nav-logo">
      <img src="<?php echo $root; ?>images/logo-white.jpg" alt="Aham Premah Foundation">
    </a>

    <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

    <ul class="nav-menu">
      <li><a href="<?php echo $root; ?>index.php"
             <?php if($active_page === 'home') echo 'class="active"'; ?>>Home</a></li>
      <li><a href="<?php echo $root; ?>pages/about.php"
             <?php if($active_page === 'about') echo 'class="active"'; ?>>About</a></li>
      <li><a href="<?php echo $root; ?>pages/activities.php"
             <?php if($active_page === 'activities') echo 'class="active"'; ?>>Activities</a></li>
      <li><a href="<?php echo $root; ?>pages/gallery.php"
             <?php if($active_page === 'gallery') echo 'class="active"'; ?>>Gallery</a></li>
      <li><a href="<?php echo $root; ?>pages/contact.php"
             <?php if($active_page === 'contact') echo 'class="active"'; ?>>Contact</a></li>
      <li><a href="<?php echo $root; ?>pages/contact.php#donate" class="nav-donate">Donate ❤</a></li>
    </ul>
  </div>
</nav>
