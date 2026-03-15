<?php
/**
 * AHAM PREMAH FOUNDATION
 * pages/gallery.php — Gallery Page
 */
$page_title  = 'Gallery — Photos & Memories';
$page_desc   = 'Photo gallery from Aham Premah Foundation activities — events, rescues, seminars, and more.';
$active_page = 'gallery';
include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="page-hero-content">
    <span class="page-hero-tag">Photos & Memories</span>
    <h1>Our Gallery</h1>
    <p>Moments captured from our activities, events, and everyday animal care.</p>
  </div>
</section>

<!-- Breadcrumb -->
<div class="breadcrumb">
  <div class="breadcrumb-inner">
    <a href="../index.php">Home</a>
    <span>›</span>
    <span>Gallery</span>
  </div>
</div>

<!-- ======== FILTER TABS ======== -->
<div class="section" style="padding-bottom:0;">
  <div class="gallery-filter">
    <button class="filter-btn active" data-filter="all">All</button>
    <button class="filter-btn" data-filter="events">Events</button>
    <button class="filter-btn" data-filter="rescue">Rescue</button>
    <button class="filter-btn" data-filter="care">Daily Care</button>
    <button class="filter-btn" data-filter="education">Education</button>
  </div>
</div>

<!-- ======== LOGO / BRANDING SHOWCASE ======== -->
<div class="section" style="padding-top:2rem;">
  <p class="label">Brand Identity</p>
  <h2 class="section-title">Our Foundation Logo &amp; Identity</h2>
  <div class="logo-showcase">
    <div class="logo-item">
      <img src="../images/1.jpg" alt="Aham Premah Foundation Logo — Light">
      <div class="logo-caption">Logo — Light Version</div>
    </div>
    <div class="logo-item logo-dark-bg">
      <img src="../images/2.jpg" alt="Aham Premah Foundation Logo — Dark">
      <div class="logo-caption" style="color:#ddd;">Logo — Dark Version</div>
    </div>
    <div class="logo-item">
      <img src="../images/3.jpg" alt="Aham Premah Foundation — With Love We Thrive">
      <div class="logo-caption">With Love We Thrive — Full Identity</div>
    </div>
    <div class="logo-item">
      <img src="../images/4.jpg" alt="Aham Premah Foundation Logo 4">
      <div class="logo-caption">Logo Variant</div>
    </div>
  </div>
</div>

<!-- ======== ACTIVITY GALLERY ======== -->
<div style="background:var(--warm); padding:1px 0;">
  <div class="section">
    <p class="label">Activity Highlights</p>
    <h2 class="section-title">From the Field</h2>
    <div class="gallery-mosaic" id="galleryGrid">

      <div class="gallery-tile wide" data-category="events">
        <div class="tile-inner">
          <div class="tile-emoji">🌱</div>
          <div class="tile-overlay">
            <div class="tile-title">India Plant Based Show</div>
            <div class="tile-sub">4th Mega Convention — Animal Protection Awareness</div>
          </div>
        </div>
        <span class="tile-tag">Outreach</span>
      </div>

      <div class="gallery-tile" data-category="care">
        <div class="tile-inner">
          <div class="tile-emoji">🥣</div>
          <div class="tile-overlay">
            <div class="tile-title">Free Water Bowls</div>
            <div class="tile-sub">Distributed for community animals</div>
          </div>
        </div>
        <span class="tile-tag">Care</span>
      </div>

      <div class="gallery-tile" data-category="events">
        <div class="tile-inner">
          <div class="tile-emoji">🌿</div>
          <div class="tile-overlay">
            <div class="tile-title">3rd Plant Based Summit</div>
            <div class="tile-sub">New Delhi</div>
          </div>
        </div>
        <span class="tile-tag">Event</span>
      </div>

      <div class="gallery-tile" data-category="events">
        <div class="tile-inner">
          <div class="tile-emoji">🪁</div>
          <div class="tile-overlay">
            <div class="tile-title">PETA Collaboration</div>
            <div class="tile-sub">Glass Manja Awareness Drive</div>
          </div>
        </div>
        <span class="tile-tag">Campaign</span>
      </div>

      <div class="gallery-tile wide" data-category="rescue">
        <div class="tile-inner">
          <div class="tile-emoji">🦅</div>
          <div class="tile-overlay">
            <div class="tile-title">22 Wild Birds Rescued</div>
            <div class="tile-sub">Coordinated with Wildlife Department for rehabilitation</div>
          </div>
        </div>
        <span class="tile-tag">Rescue</span>
      </div>

      <div class="gallery-tile" data-category="rescue">
        <div class="tile-inner">
          <div class="tile-emoji">🐶</div>
          <div class="tile-overlay">
            <div class="tile-title">Puppy Rescue</div>
            <div class="tile-sub">8 motherless puppies fostered & adopted</div>
          </div>
        </div>
        <span class="tile-tag">Rescue</span>
      </div>

      <div class="gallery-tile" data-category="education">
        <div class="tile-inner">
          <div class="tile-emoji">🎓</div>
          <div class="tile-overlay">
            <div class="tile-title">College Seminar</div>
            <div class="tile-sub">S.B. Patil College, Pune</div>
          </div>
        </div>
        <span class="tile-tag">Education</span>
      </div>

      <div class="gallery-tile" data-category="education">
        <div class="tile-inner">
          <div class="tile-emoji">👮</div>
          <div class="tile-overlay">
            <div class="tile-title">Police Station Visit</div>
            <div class="tile-sub">PCA Act 1960 Awareness with Inspector Mali</div>
          </div>
        </div>
        <span class="tile-tag">Advocacy</span>
      </div>

      <div class="gallery-tile" data-category="events">
        <div class="tile-inner">
          <div class="tile-emoji">🏆</div>
          <div class="tile-overlay">
            <div class="tile-title">Award Ceremony</div>
            <div class="tile-sub">Vibrant Pimpri Chinchwad 2024</div>
          </div>
        </div>
        <span class="tile-tag">Recognition</span>
      </div>

      <div class="gallery-tile" data-category="care">
        <div class="tile-inner">
          <div class="tile-emoji">🍛</div>
          <div class="tile-overlay">
            <div class="tile-title">Daily Feeding</div>
            <div class="tile-sub">40–50 animals every day</div>
          </div>
        </div>
        <span class="tile-tag">Care</span>
      </div>

    </div>
  </div>
</div>

<?php include '../includes/footer.php'; ?>

<style>
/* Filter Buttons */
.gallery-filter {
  display: flex;
  gap: 0.6rem;
  flex-wrap: wrap;
  margin-bottom: 1rem;
}
.filter-btn {
  padding: 0.5rem 1.4rem;
  border-radius: 50px;
  border: 1.5px solid var(--border);
  background: var(--white);
  font-family: 'DM Sans', sans-serif;
  font-size: 0.88rem;
  font-weight: 600;
  cursor: pointer;
  transition: var(--transition);
  color: var(--text-muted);
}
.filter-btn:hover, .filter-btn.active {
  background: var(--dark);
  border-color: var(--dark);
  color: #fff;
}

/* Logo Showcase */
.logo-showcase {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 1.5rem;
  margin-top: 2rem;
}
.logo-item {
  background: var(--white);
  border: 1.5px solid var(--border);
  border-radius: var(--radius-md);
  padding: 1.5rem;
  text-align: center;
  transition: var(--transition);
}
.logo-item:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.logo-dark-bg { background: #1a1a1a; border-color: #333; }
.logo-item img { width: 100%; border-radius: var(--radius-sm); margin-bottom: 0.8rem; }
.logo-caption { font-size: 0.85rem; color: var(--text-muted); font-weight: 600; }

/* Gallery Mosaic */
.gallery-mosaic {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-auto-rows: 220px;
  gap: 1rem;
  margin-top: 2rem;
}
.gallery-tile {
  position: relative;
  border-radius: var(--radius-md);
  overflow: hidden;
  cursor: pointer;
  background: var(--warm);
  border: 1.5px solid var(--border);
  transition: var(--transition);
}
.gallery-tile.wide { grid-column: span 2; }
.gallery-tile:hover { transform: scale(1.02); box-shadow: var(--shadow-lg); border-color: var(--red); }
.gallery-tile.hidden { display: none; }
.tile-inner {
  width: 100%; height: 100%;
  display: flex; align-items: center; justify-content: center;
  font-size: 5rem;
  position: relative;
}
.tile-overlay {
  position: absolute;
  bottom: 0; left: 0; right: 0;
  background: linear-gradient(transparent, rgba(0,0,0,0.75));
  color: #fff;
  padding: 2rem 1.2rem 1.2rem;
  transform: translateY(60%);
  transition: var(--transition);
}
.gallery-tile:hover .tile-overlay { transform: translateY(0); }
.tile-title { font-weight: 700; font-size: 0.95rem; margin-bottom: 0.2rem; }
.tile-sub { font-size: 0.8rem; color: #ddd; }
.tile-tag {
  position: absolute;
  top: 0.8rem; right: 0.8rem;
  background: var(--red);
  color: #fff;
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  padding: 0.2rem 0.6rem;
  border-radius: 20px;
}

@media (max-width: 768px) {
  .gallery-mosaic { grid-template-columns: 1fr 1fr; }
  .gallery-tile.wide { grid-column: span 2; }
}
@media (max-width: 480px) {
  .gallery-mosaic { grid-template-columns: 1fr; }
  .gallery-tile.wide { grid-column: span 1; }
}
</style>

<script>
// Gallery filter
document.querySelectorAll('.filter-btn').forEach(function(btn) {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    this.classList.add('active');
    const filter = this.getAttribute('data-filter');
    document.querySelectorAll('.gallery-tile').forEach(function(tile) {
      if (filter === 'all' || tile.getAttribute('data-category') === filter) {
        tile.classList.remove('hidden');
      } else {
        tile.classList.add('hidden');
      }
    });
  });
});
</script>
