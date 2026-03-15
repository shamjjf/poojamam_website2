<?php
/**
 * AHAM PREMAH FOUNDATION
 * pages/contact.php — Contact Page with Working Form
 */
$page_title  = 'Contact Us — Reach Aham Premah Foundation';
$page_desc   = 'Get in touch with Aham Premah Foundation for animal rescue, volunteering, donations, or legal help.';
$active_page = 'contact';

// ---- FORM PROCESSING ----
$form_success = false;
$form_error   = '';
$form_data    = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_data['name']    = trim($_POST['name']    ?? '');
    $form_data['email']   = trim($_POST['email']   ?? '');
    $form_data['phone']   = trim($_POST['phone']   ?? '');
    $form_data['subject'] = trim($_POST['subject'] ?? '');
    $form_data['message'] = trim($_POST['message'] ?? '');

    // Validation
    if (empty($form_data['name'])) {
        $form_error = 'Please enter your full name.';
    } elseif (empty($form_data['email']) || !filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Please enter a valid email address.';
    } elseif (empty($form_data['message'])) {
        $form_error = 'Please enter your message.';
    } else {
        // Send email
        $to      = 'ahampremah@gmail.com';
        $subject = '[Aham Premah Website] ' . htmlspecialchars($form_data['subject']);
        $body    = "You have a new message from your website.\n\n";
        $body   .= "Name:    " . $form_data['name']    . "\n";
        $body   .= "Email:   " . $form_data['email']   . "\n";
        $body   .= "Phone:   " . $form_data['phone']   . "\n";
        $body   .= "Subject: " . $form_data['subject'] . "\n\n";
        $body   .= "Message:\n" . $form_data['message'] . "\n";
        $headers = "From: " . $form_data['email'] . "\r\n"
                 . "Reply-To: " . $form_data['email'] . "\r\n"
                 . "X-Mailer: PHP/" . phpversion();

        // Uncomment the line below on your live server:
        // mail($to, $subject, $body, $headers);

        $form_success = true;
        $form_data    = []; // Clear after success
    }
}

include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="page-hero-content">
    <span class="page-hero-tag">Get in Touch</span>
    <h1>Contact Us</h1>
    <p>For animal rescue, volunteering, donations, or any queries — we're here.</p>
  </div>
</section>

<!-- Breadcrumb -->
<div class="breadcrumb">
  <div class="breadcrumb-inner">
    <a href="../index.php">Home</a>
    <span>›</span>
    <span>Contact</span>
  </div>
</div>

<!-- ======== CONTACT SECTION ======== -->
<div class="section">
  <div class="contact-grid">

    <!-- SIDEBAR -->
    <div class="contact-sidebar">
      <p class="label">Get In Touch</p>
      <h2 class="contact-info-title">We'd Love to<br>Hear From You</h2>
      <p class="contact-info-text">
        Whether you've found an injured animal, want to volunteer, donate,
        or collaborate with us — reach out and our team will respond promptly.
      </p>

      <div class="contact-item">
        <div class="contact-item-icon">📞</div>
        <div class="contact-item-content">
          <div class="contact-item-label">Phone / WhatsApp</div>
          <div class="contact-item-value">
            <a href="tel:+918447667582">+91 8447667582</a><br>
            <a href="tel:+919730243040">+91 9730243040</a>
          </div>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-item-icon">✉️</div>
        <div class="contact-item-content">
          <div class="contact-item-label">Email</div>
          <div class="contact-item-value">
            <a href="mailto:ahampremah@gmail.com">ahampremah@gmail.com</a>
          </div>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-item-icon">📍</div>
        <div class="contact-item-content">
          <div class="contact-item-label">Location</div>
          <div class="contact-item-value">Wagholi, Pune,<br>Maharashtra, India</div>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-item-icon">⏰</div>
        <div class="contact-item-content">
          <div class="contact-item-label">Response Time</div>
          <div class="contact-item-value">Within 24 hours<br>(Emergencies: ASAP)</div>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-item-icon">🌐</div>
        <div class="contact-item-content">
          <div class="contact-item-label">Social Media</div>
          <div class="contact-item-value">
            Instagram, Facebook &amp; YouTube<br>
            @ahampremahfoundation
          </div>
        </div>
      </div>

      <div class="emergency-box">
        <h4>🆘 Animal Emergency?</h4>
        <p>
          For urgent animal rescue or cruelty cases, contact us immediately on
          WhatsApp at <strong>+91 8447667582</strong>. Please share the animal's
          location and photos if possible. We respond as fast as we can.
        </p>
      </div>
    </div>

    <!-- FORM -->
    <div class="contact-form-card" id="donate">
      <div class="form-title">Send Us a Message</div>

      <?php if ($form_success): ?>
        <div class="alert alert-success">
          ✅ Thank you! Your message has been sent successfully. We'll get back to you soon. 🐾
        </div>
      <?php endif; ?>
      <?php if ($form_error): ?>
        <div class="alert alert-error">
          ⚠️ <?php echo htmlspecialchars($form_error); ?>
        </div>
      <?php endif; ?>

      <form id="contactForm" method="POST" action="contact.php" novalidate>

        <div class="form-row">
          <div class="form-group">
            <label for="name">Full Name <span style="color:var(--red)">*</span></label>
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Your full name"
              value="<?php echo htmlspecialchars($form_data['name'] ?? ''); ?>"
              required
              autocomplete="name"
            >
          </div>
          <div class="form-group">
            <label for="email">Email Address <span style="color:var(--red)">*</span></label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="your@email.com"
              value="<?php echo htmlspecialchars($form_data['email'] ?? ''); ?>"
              required
              autocomplete="email"
            >
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="phone">Phone / WhatsApp</label>
            <input
              type="tel"
              id="phone"
              name="phone"
              placeholder="+91 XXXXX XXXXX"
              value="<?php echo htmlspecialchars($form_data['phone'] ?? ''); ?>"
              autocomplete="tel"
            >
          </div>
          <div class="form-group">
            <label for="subject">How Can We Help?</label>
            <select id="subject" name="subject">
              <?php
              $subjects = [
                'General Inquiry'      => 'General Inquiry',
                'Animal Rescue'        => '🆘 Animal Rescue / Emergency',
                'Volunteer'            => '🤝 I Want to Volunteer',
                'Donation'             => '❤ Donation / Support',
                'Collaboration'        => '🤝 Collaboration / Partnership',
                'Legal Help'           => '⚖️ Animal Law / Legal Help',
                'Report Cruelty'       => '🚨 Report Animal Cruelty',
                'Adoption'             => '🐾 Adoption Inquiry',
                'Other'                => 'Other',
              ];
              $selected = $form_data['subject'] ?? '';
              foreach ($subjects as $val => $label) {
                $sel = ($selected === $val) ? 'selected' : '';
                echo "<option value=\"$val\" $sel>" . htmlspecialchars($label) . "</option>";
              }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="message">Your Message <span style="color:var(--red)">*</span></label>
          <textarea
            id="message"
            name="message"
            placeholder="Tell us how we can help, or describe the animal situation in detail..."
            required
          ><?php echo htmlspecialchars($form_data['message'] ?? ''); ?></textarea>
        </div>

        <div style="margin-bottom:1.2rem; font-size:0.82rem; color:var(--text-muted);">
          Fields marked with <span style="color:var(--red)">*</span> are required.
        </div>

        <button type="submit" class="btn-submit">
          Send Message &nbsp; 🐾
        </button>
      </form>
    </div>

  </div>
</div>

<!-- ======== HOW TO HELP ======== -->
<div style="background:var(--warm); padding:1px 0;">
  <div class="section">
    <p class="label">Ways to Support</p>
    <h2 class="section-title">How You Can Help</h2>
    <div class="support-grid">
      <div class="support-card">
        <div class="support-icon">💰</div>
        <h4>Donate</h4>
        <p>Financial support helps us feed more animals, cover medical costs, and expand our reach.</p>
        <a href="#donate" class="btn btn-primary" style="margin-top:1rem; font-size:0.88rem; padding:0.6rem 1.5rem;">Donate Now</a>
      </div>
      <div class="support-card">
        <div class="support-icon">🤝</div>
        <h4>Volunteer</h4>
        <p>Join us in daily feeding, rescue operations, events, or digital advocacy from wherever you are.</p>
        <a href="#donate" class="btn btn-dark" style="margin-top:1rem; font-size:0.88rem; padding:0.6rem 1.5rem;">Join Us</a>
      </div>
      <div class="support-card">
        <div class="support-icon">📢</div>
        <h4>Spread the Word</h4>
        <p>Share our work on social media. Awareness is the most powerful tool for change.</p>
      </div>
      <div class="support-card">
        <div class="support-icon">🍛</div>
        <h4>Sponsor a Meal</h4>
        <p>Sponsor daily feeding for community animals — even a small contribution goes a long way.</p>
      </div>
    </div>
  </div>
</div>

<?php include '../includes/footer.php'; ?>

<style>
.support-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 1.5rem;
  margin-top: 2.5rem;
}
.support-card {
  background: var(--white);
  border-radius: var(--radius-md);
  border: 1.5px solid var(--border);
  padding: 2rem 1.5rem;
  text-align: center;
  transition: var(--transition);
}
.support-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-md); }
.support-icon { font-size: 2.5rem; margin-bottom: 0.8rem; }
.support-card h4 { font-weight: 700; color: var(--dark); font-size: 1.05rem; margin-bottom: 0.5rem; }
.support-card p { font-size: 0.88rem; color: var(--text-muted); line-height: 1.6; }
</style>
