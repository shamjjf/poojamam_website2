<?php
/**
 * AHAM PREMAH FOUNDATION
 * includes/footer.php
 */
$depth = substr_count($_SERVER['PHP_SELF'], '/') - 1;
$root  = ($depth <= 1) ? './' : '../';
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
      <img src="<?php echo $root; ?>images/logo-variant.jpg" alt="Aham Premah Foundation">
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
      <a href="<?php echo $root; ?>index.php"> Home</a>
      <a href="<?php echo $root; ?>pages/about.php"> About Us</a>
      <a href="<?php echo $root; ?>pages/activities.php"> Activities</a>
      <a href="<?php echo $root; ?>pages/gallery.php"> Gallery</a>
      <a href="<?php echo $root; ?>pages/contact.php"> Contact</a>
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

<!-- Main JS -->
<script src="<?php echo $root; ?>js/main.js"></script>
</body>
</html>
