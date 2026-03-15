<?php
/**
 * AHAM PREMAH FOUNDATION
 * includes/header.php
 * Usage: include at top of every page
 * Pass: $page_title, $page_desc, $active_page
 */

$page_title = $page_title ?? 'Aham Premah Foundation';
$page_desc  = $page_desc  ?? 'Dedicated to the holistic welfare of animals — rescue, nourishment, affection, sterilization, and community empowerment.';
$active_page = $active_page ?? '';

// Detect root path relative to current file
$depth = substr_count($_SERVER['PHP_SELF'], '/') - 1;
$root  = ($depth <= 1) ? './' : '../';
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

  <!-- Main CSS -->
  <link rel="stylesheet" href="<?php echo $root; ?>css/style.css">

  <!-- Favicon (inline SVG as data URI) -->
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
