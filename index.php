<?php
/**
 * AHAM PREMAH FOUNDATION
 * index.php — Homepage
 */
$page_title  = 'With Love We Thrive — Animal Welfare NGO, Pune';
$page_desc   = 'Aham Premah Foundation is an NGO dedicated to holistic animal welfare — rescue, feeding, sterilization, legal advocacy, and education in Pune, India.';
$active_page = 'home';
define('SITE_ROOT', __DIR__);
include SITE_ROOT . '/includes/header.php';
?>

<!-- ======== HERO ======== -->
<section class="home-hero">
  <div class="hero-bg-overlay"></div>
  <div class="hero-animals-art"></div>
  <div class="hero-content">
    <span class="hero-badge">🐾 Animal Welfare NGO · Pune, India · Est. 2022</span>
    <h1 class="hero-title">
      With <em>Love</em>,<br>
      We <span>Thrive</span>
    </h1>
    <p class="hero-desc">
      Aham Premah Foundation is dedicated to the holistic welfare of animals —
      rescue, nourishment, affection, sterilization, and community empowerment
      for a kinder, more compassionate world.
    </p>
    <div class="hero-actions">
      <a href="pages/activities.php" class="btn btn-primary">Explore Our Work →</a>
      <a href="pages/contact.php" class="btn btn-outline-white">Get Involved</a>
    </div>
    <div class="hero-tagline-strip">
      <span>❤ Love</span>
      <span>✊ Act</span>
      <span>🆘 Rescue</span>
      <span>🍽 Feed</span>
      <span>🔁 Repeat</span>
    </div>
  </div>
</section>

<!-- ======== STATS BAR ======== -->
<section class="stats-bar">
  <div class="stats-grid">
    <div class="stat-item">
      <div class="stat-number" data-count="50" data-suffix="+">50+</div>
      <div class="stat-label">Animals Fed Daily</div>
    </div>
    <div class="stat-item">
      <div class="stat-number" data-count="22" data-suffix="">22</div>
      <div class="stat-label">Cats Vaccinated</div>
    </div>
    <div class="stat-item">
      <div class="stat-number" data-count="20" data-suffix="">20</div>
      <div class="stat-label">Cats Sterilised</div>
    </div>
    <div class="stat-item">
      <div class="stat-number" data-count="22" data-suffix="">22</div>
      <div class="stat-label">Wild Birds Rescued</div>
    </div>
    <div class="stat-item">
      <div class="stat-number" data-count="8" data-suffix="">8</div>
      <div class="stat-label">Puppies Adopted</div>
    </div>
    <div class="stat-item">
      <div class="stat-number" data-count="2" data-suffix="">2</div>
      <div class="stat-label">Years of Service</div>
    </div>
  </div>
</section>

<!-- ======== MISSION INTRO ======== -->
<div class="section">
  <div class="mission-layout">
    <div class="mission-text">
      <p class="label">Our Mission</p>
      <h2 class="section-title">Holistic Welfare for Every Animal</h2>
      <blockquote class="mission-quote">
        "In pursuit of our mission, Aham Premah Foundation is dedicated to the
        holistic welfare of animals, encompassing rescue, nourishment, affection,
        sterilization, and support to facilitate their well-being and contentment."
      </blockquote>
      <p class="section-subtitle">
        Beyond immediate care, we provide guidance on Indian animal laws and offer
        effective solutions to animal lovers and caregivers. Collaboration with aligned
        individuals and organizations is central to our strategy.
      </p>
      <div style="margin-top:2rem;">
        <a href="pages/about.php" class="btn btn-dark">Learn More About Us →</a>
      </div>
    </div>
    <div class="mission-image">
      <img src="images/logo-animals.jpg" alt="Aham Premah Foundation - With Love We Thrive" class="mission-img">
    </div>
  </div>
</div>

<!-- ======== PILLARS ======== -->
<div style="background:var(--warm); padding:1px 0;">
  <div class="section">
    <p class="label">What We Do</p>
    <h2 class="section-title">Six Pillars of Our Work</h2>
    <div class="pillars-grid">
      <div class="pillar-card">
        <div class="pillar-icon">🆘</div>
        <div class="pillar-title">Rescue & Rehabilitation</div>
        <div class="pillar-desc">Emergency rescues, rehabilitation, and fostering of injured and homeless animals.</div>
      </div>
      <div class="pillar-card">
        <div class="pillar-icon">🍽️</div>
        <div class="pillar-title">Daily Feeding</div>
        <div class="pillar-desc">Consistent daily nourishment for 40–50+ community animals in our area.</div>
      </div>
      <div class="pillar-card">
        <div class="pillar-icon">💉</div>
        <div class="pillar-title">Sterilization & Vaccination</div>
        <div class="pillar-desc">Humane drives to manage community animal populations and prevent disease.</div>
      </div>
      <div class="pillar-card">
        <div class="pillar-icon">⚖️</div>
        <div class="pillar-title">Legal Awareness</div>
        <div class="pillar-desc">Guidance on Indian animal protection laws including PCA Act, 1960.</div>
      </div>
      <div class="pillar-card">
        <div class="pillar-icon">🎓</div>
        <div class="pillar-title">Education & Seminars</div>
        <div class="pillar-desc">Workshops and sessions in colleges and institutions to foster empathy.</div>
      </div>
      <div class="pillar-card">
        <div class="pillar-icon">🤝</div>
        <div class="pillar-title">Collaboration</div>
        <div class="pillar-desc">Partnering with organizations like PETA India for collective impact.</div>
      </div>
    </div>
  </div>
</div>

<!-- ======== KEY ACHIEVEMENTS ======== -->
<div class="section">
  <p class="label">Key Achievements · 2022–2024</p>
  <h2 class="section-title">Making a Difference, One Life at a Time</h2>
  <p class="section-subtitle">A snapshot of what we've accomplished in our first two years of dedicated service.</p>

  <div class="achievements-grid">
    <div class="ach-card">
      <div class="ach-icon">🐱</div>
      <div class="ach-content">
        <div class="ach-title">Cat Sterilisation & Vaccination</div>
        <div class="ach-desc">20 cats sterilised and 22 cats vaccinated to manage community feline population humanely.</div>
      </div>
    </div>
    <div class="ach-card">
      <div class="ach-icon">🤝</div>
      <div class="ach-content">
        <div class="ach-title">PETA India Collaboration</div>
        <div class="ach-desc">Partnered with PETA for a public campaign against glass-coated manja kite string that injures birds.</div>
      </div>
    </div>
    <div class="ach-card">
      <div class="ach-icon">🍛</div>
      <div class="ach-content">
        <div class="ach-title">Daily Community Feeding</div>
        <div class="ach-desc">Consistent daily feeding programme serving 40–50 community animals without interruption.</div>
      </div>
    </div>
    <div class="ach-card">
      <div class="ach-icon">🐶</div>
      <div class="ach-content">
        <div class="ach-title">Motherless Puppy Adoptions</div>
        <div class="ach-desc">8 motherless newborn puppies rescued, fostered with care, and placed into loving forever homes.</div>
      </div>
    </div>
    <div class="ach-card">
      <div class="ach-icon">🦅</div>
      <div class="ach-content">
        <div class="ach-title">Wild Bird Rescue</div>
        <div class="ach-desc">Rescued 22 wild birds and coordinated with the wildlife department for proper rehabilitation.</div>
      </div>
    </div>
    <div class="ach-card">
      <div class="ach-icon">🏆</div>
      <div class="ach-content">
        <div class="ach-title">Vibrant Pimpri Chinchwad 2024 Award</div>
        <div class="ach-desc">Honoured by Punekar News for making a safer and more beautiful place for animals and community.</div>
      </div>
    </div>
  </div>

  <div style="text-align:center; margin-top:2.5rem;">
    <a href="pages/activities.php" class="btn btn-primary">View All Activities →</a>
  </div>
</div>

<?php include SITE_ROOT . '/includes/footer.php'; ?>

<!-- ======== HOME PAGE EXTRA CSS ======== -->
<style>
/* Hero Section */
.home-hero {
  position: relative;
  min-height: 94vh;
  display: flex;
  align-items: center;
  background: var(--dark);
  overflow: hidden;
}
.hero-bg-overlay {
  position: absolute; inset: 0;
  background: radial-gradient(ellipse at 30% 60%, #2d1010 0%, #141414 65%);
}
.hero-animals-art {
  position: absolute;
  right: 0; top: 0; bottom: 0;
  width: 52%;
  background: url('../images/logo-animals.jpg') center / cover no-repeat;
  opacity: 0.1;
  mask-image: linear-gradient(to left, rgba(0,0,0,0.6) 0%, transparent 80%);
  -webkit-mask-image: linear-gradient(to left, rgba(0,0,0,0.6) 0%, transparent 80%);
}
.hero-content {
  position: relative; z-index: 2;
  max-width: 700px;
  padding: 3rem 2rem 3rem 6rem;
}
.hero-badge {
  display: inline-block;
  background: rgba(230,51,41,0.18);
  border: 1px solid rgba(230,51,41,0.4);
  color: #ff9994;
  font-size: 0.78rem;
  font-weight: 600;
  letter-spacing: 0.1em;
  padding: 0.4rem 1.2rem;
  border-radius: 30px;
  margin-bottom: 1.8rem;
}
.hero-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 700;
  color: #fff;
  line-height: 1.05;
  margin-bottom: 1.2rem;
}
.hero-title em { color: var(--red); font-style: normal; }
.hero-title span { color: #fff; }
.hero-desc {
  color: #ccc;
  font-size: 1.1rem;
  line-height: 1.8;
  margin-bottom: 2rem;
  max-width: 560px;
}
.hero-actions { display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2.5rem; }
.hero-tagline-strip {
  display: flex;
  gap: 1.2rem;
  flex-wrap: wrap;
}
.hero-tagline-strip span {
  color: #777;
  font-size: 0.88rem;
  font-weight: 600;
  letter-spacing: 0.05em;
}

/* Mission layout */
.mission-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
}
.mission-img {
  border-radius: 24px;
  box-shadow: 0 20px 60px rgba(0,0,0,0.12);
  width: 100%;
}

@media (max-width: 900px) {
  .mission-layout { grid-template-columns: 1fr; }
  .hero-content { padding: 3rem 1.5rem; }
  .hero-animals-art { display: none; }
}
@media (max-width: 600px) {
  .home-hero { min-height: auto; padding: 4rem 0; }
  .hero-title { font-size: 2.6rem; }
}
</style>
