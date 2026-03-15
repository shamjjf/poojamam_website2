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
