<?php
/**
 * AHAM PREMAH FOUNDATION
 * includes/footer.php
 */

// Use same $root from header — if not set, recalculate
if (!isset($root)) {
    $_protocol  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $_host      = $_SERVER['HTTP_HOST'];
    $_doc_root  = rtrim(realpath($_SERVER['DOCUMENT_ROOT']), '/\\');
    $_site_root = rtrim(realpath(dirname(__FILE__) . '/..'), '/\\');
    $_base_path = str_replace($_doc_root, '', $_site_root);
    $_base_path = '/' . trim(str_replace('\\', '/', $_base_path), '/');
    if ($_base_path === '/') $_base_path = '';
    $root = $_protocol . '://' . $_host . $_base_path . '/';
}
?>

<!-- CTA Banner -->
<section class="cta-banner">
  <div class="cta-banner-inner">
    <h2>Every Act of Kindness Creates a<br><em>Ripple of Love</em></h2>
    <p>Join us in building a world where every animal is safe, fed, and loved. Volunteer, donate, or simply spread the word.</p>
    <div class="cta-btns">
      <a href="<?php echo $root; ?>pages/contact.php" class="btn btn-primary">Get Involved Today</a>
      <a href="<?php echo $root; ?>pages/activities.php" class="btn btn-outline-white">See Our Work</a>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="footer-grid">
    <div class="footer-brand">
      <img src="<?php echo $root; ?>images/logo-black.jpg" alt="Aham Premah Foundation">
      <p>Dedicated to the holistic welfare of animals — rescue, nourishment, affection, sterilization, and community empowerment. With love, we thrive.</p>
      <div class="footer-socials">
        <a href="#" class="social-btn" title="Facebook">f</a>
        <a href="#" class="social-btn" title="Instagram">in</a>
        <a href="#" class="social-btn" title="YouTube">▶</a>
        <a href="#" class="social-btn" title="Twitter / X">✕</a>
      </div>
    </div>

    <div class="footer-col">
      <h4>Quick Links</h4>
      <a href="<?php echo $root; ?>index.php">🏠 Home</a>
      <a href="<?php echo $root; ?>pages/about.php">ℹ About Us</a>
      <a href="<?php echo $root; ?>pages/activities.php">🐾 Activities</a>
      <a href="<?php echo $root; ?>pages/gallery.php">🖼 Gallery</a>
      <a href="<?php echo $root; ?>pages/contact.php">✉ Contact</a>
    </div>

    <div class="footer-col">
      <h4>What We Do</h4>
      <a href="#">Animal Rescue</a>
      <a href="#">Daily Feeding</a>
      <a href="#">Sterilization</a>
      <a href="#">Legal Awareness</a>
      <a href="#">Education</a>
    </div>

    <div class="footer-col">
      <h4>Contact Us</h4>
      <a href="tel:+918447667582">📞 +91 8447667582</a>
      <a href="tel:+919730243040">📞 +91 9730243040</a>
      <a href="mailto:ahampremah@gmail.com">✉ ahampremah@gmail.com</a>
      <a href="#">📍 Pune, Maharashtra, India</a>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© <?php echo date('Y'); ?> Aham Premah Foundation. All rights reserved.</p>
    <p>Made with ❤ for animals | Pune, India</p>
  </div>
</footer>

<!-- JS Inline — no path dependency -->
<script>
// ============================================
// AHAM PREMAH FOUNDATION — MAIN JAVASCRIPT
// ============================================

document.addEventListener('DOMContentLoaded', function () {

  // ---- MOBILE HAMBURGER MENU ----
  const hamburger = document.querySelector('.hamburger');
  const navMenu = document.querySelector('.nav-menu');

  if (hamburger && navMenu) {
    hamburger.addEventListener('click', function () {
      navMenu.classList.toggle('open');
      const isOpen = navMenu.classList.contains('open');
      hamburger.setAttribute('aria-expanded', isOpen);
    });

    // Close menu when a link is clicked
    navMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        navMenu.classList.remove('open');
      });
    });
  }

  // ---- ACTIVE NAV LINK (highlight current page) ----
  const currentPage = window.location.pathname.split('/').pop();
  document.querySelectorAll('.nav-menu a').forEach(function (link) {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.php')) {
      link.classList.add('active');
    }
  });

  // ---- SCROLL ANIMATION (fade-in on scroll) ----
  const observeTargets = document.querySelectorAll(
    '.pillar-card, .ach-card, .activity-card, .value-card, .contact-item, .stat-item'
  );

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    observeTargets.forEach(function (el, i) {
      el.style.opacity = '0';
      el.style.transform = 'translateY(24px)';
      el.style.transition = 'opacity 0.5s ease ' + (i * 0.05) + 's, transform 0.5s ease ' + (i * 0.05) + 's';
      observer.observe(el);
    });
  }

  // ---- ANIMATED STAT COUNTERS ----
  const statNumbers = document.querySelectorAll('.stat-number[data-count]');

  if (statNumbers.length && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseInt(el.getAttribute('data-count'), 10);
          const suffix = el.getAttribute('data-suffix') || '';
          let current = 0;
          const step = Math.max(1, Math.floor(target / 50));
          const timer = setInterval(function () {
            current = Math.min(current + step, target);
            el.textContent = current + suffix;
            if (current >= target) clearInterval(timer);
          }, 30);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.5 });

    statNumbers.forEach(function (el) {
      counterObserver.observe(el);
    });
  }

  // ---- CONTACT FORM: client-side validation feedback ----
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    const inputs = contactForm.querySelectorAll('input, select, textarea');
    inputs.forEach(function (input) {
      input.addEventListener('blur', function () {
        if (input.required && !input.value.trim()) {
          input.style.borderColor = 'var(--red)';
        } else {
          input.style.borderColor = '';
        }
      });
      input.addEventListener('input', function () {
        input.style.borderColor = '';
      });
    });
  }

  // ---- SMOOTH SCROLL for anchor links ----
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // ---- STICKY NAV shadow on scroll ----
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 40) {
        navbar.style.boxShadow = '0 4px 30px rgba(0,0,0,0.12)';
      } else {
        navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.06)';
      }
    });
  }

});

</script>
</body>
</html>
