<?php
/**
 * Template Name: Yellow Fever Vaccination
 * @package Easy_Pharmacy
 */

get_header();

$vaccine_name = ep_field('vaccine_name', 'Yellow Fever');
?>

<!-- Breadcrumb -->
<div class="yellowfever-breadcrumb">
  <div class="section-container">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <span class="separator">/</span>
    <a href="<?php echo esc_url(ep_field('vaccine_parent_url', '/travel-health/')); ?>">Travel Health</a>
    <span class="separator">/</span>
    <span class="current"><?php echo esc_html($vaccine_name); ?> Vaccination</span>
  </div>
</div>

<!-- Hero Section -->
<section class="yellowfever-hero-section">
  <div class="yellowfever-hero-overlay"></div>
  <div class="yellowfever-hero-dots"></div>

  <div class="section-container">
    <div class="yellowfever-hero-content">
      <div class="yellowfever-hero-line"></div>
      <span class="yellowfever-hero-label"><?php echo esc_html(ep_field('vaccine_hero_label', 'OFFICIAL YELLOW FEVER CENTRE')); ?></span>

      <h1 class="yellowfever-hero-title"><?php echo esc_html(ep_field('vaccine_hero_title', 'Yellow Fever Vaccination Service in Ashford')); ?></h1>

      <p class="yellowfever-hero-description">
        <?php echo esc_html(ep_field('vaccine_hero_description', 'We are an official NHS Yellow Fever Vaccination Centre. Get your vaccination and International Certificate of Vaccination (ICVP) at Easy Pharmacy Ashford.')); ?>
      </p>

      <div class="yellowfever-hero-actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button yellowfever-btn-primary">
          <?php echo esc_html(ep_field('vaccine_cta_text', 'Book Yellow Fever Vaccination')); ?>
        </a>
        <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button yellowfever-btn-secondary">
          <?php echo esc_html(ep_field('vaccine_phone_display', 'Call 01784 255 222')); ?>
        </a>
      </div>

      <div class="yellowfever-hero-badges">
        <?php if (have_rows('vaccine_hero_badges')) : while (have_rows('vaccine_hero_badges')) : the_row(); ?>
          <div class="yellowfever-hero-badge"><?php echo esc_html(get_sub_field('text')); ?></div>
        <?php endwhile; else : ?>
          <div class="yellowfever-hero-badge">Official Yellow Fever Centre</div>
          <div class="yellowfever-hero-badge">ICVP Certificate</div>
          <div class="yellowfever-hero-badge">Same Day Appointments</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Protection Section -->
<section class="yellowfever-protect-section">
  <div class="section-container">
    <div class="yellowfever-protect-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_protect_badge', 'OFFICIAL CENTRE')); ?></span>
      </div>
      <h2 class="yellowfever-protect-title"><?php echo esc_html(ep_field('vaccine_protect_title', 'Understanding Yellow Fever')); ?></h2>
      <p class="yellowfever-protect-desc"><?php echo esc_html(ep_field('vaccine_protect_desc', 'A serious mosquito-borne viral infection')); ?></p>
    </div>

    <div class="yellowfever-protect-grid">
      <div class="yellowfever-protect-image-wrapper">
        <div class="yellowfever-protect-image-card">
          <img src="<?php echo esc_url(ep_field('vaccine_protect_image', 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=800&h=1000&fit=crop')); ?>" alt="Yellow Fever vaccination" class="yellowfever-protect-image" />
          <div class="yellowfever-protect-name-tag">
            <span class="name"><?php echo esc_html(ep_field('vaccine_protect_nametag_name', 'Official Centre')); ?></span>
            <span class="role"><?php echo esc_html(ep_field('vaccine_protect_nametag_role', 'Yellow Fever Approved')); ?></span>
          </div>
        </div>
      </div>

      <div class="yellowfever-protect-content">
        <div class="yellowfever-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(ep_field('vaccine_protect_highlight', 'Required for Entry to Many Countries')); ?></span>
        </div>

        <h3 class="yellowfever-protect-subtitle"><?php echo esc_html(ep_field('vaccine_protect_subtitle', 'Why You Need This Vaccination')); ?></h3>
        <p class="yellowfever-protect-text"><?php echo esc_html(ep_field('vaccine_protect_text', 'Yellow Fever is a serious viral infection spread by mosquitoes. Many countries require proof of vaccination for entry. As an official Yellow Fever Centre, we can administer the vaccine and issue the International Certificate of Vaccination or Prophylaxis (ICVP).')); ?></p>

        <ul class="yellowfever-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="yellowfever-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="yellowfever-protect-feature"><div class="icon"><i class="fas fa-syringe"></i></div><div class="text"><strong>Single Dose</strong><p>One injection provides lifelong protection. No booster needed for most travellers.</p></div></li>
            <li class="yellowfever-protect-feature"><div class="icon"><i class="fas fa-passport"></i></div><div class="text"><strong>Official Certificate</strong><p>We issue the International Certificate of Vaccination (ICVP) required for border entry.</p></div></li>
            <li class="yellowfever-protect-feature"><div class="icon"><i class="fas fa-clock"></i></div><div class="text"><strong>10 Day Lead Time</strong><p>Certificate becomes valid 10 days after vaccination. Plan ahead for your trip.</p></div></li>
          <?php endif; ?>
        </ul>

        <div class="yellowfever-protect-actions">
          <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button secondary-cta">Call 01784 255 222</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats, About, Details sections via template parts -->
<?php get_template_part('template-parts/vaccine', 'stats', array('prefix' => 'yellowfever')); ?>
<?php get_template_part('template-parts/vaccine', 'about', array('prefix' => 'yellowfever')); ?>
<?php get_template_part('template-parts/vaccine', 'details', array('prefix' => 'yellowfever')); ?>

<!-- FAQ Section -->
<section class="yellowfever-faq-section">
  <div class="section-container">
    <div class="yellowfever-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_faq_badge', 'YELLOW FEVER FAQs')); ?></span>
      </div>
      <h2 class="yellowfever-faq-title"><?php echo esc_html(ep_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="yellowfever-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="yellowfever-faq-item">
          <button class="yellowfever-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="yellowfever-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="yellowfever-faq-item"><button class="yellowfever-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Do I need a Yellow Fever certificate?</span><i class="fas fa-plus icon"></i></button><div class="yellowfever-faq-content"><p>Many countries in Africa and South America require proof of Yellow Fever vaccination for entry. Some countries require it if you are arriving from a country with Yellow Fever risk. We can check requirements for your specific destination.</p></div></div>
        <div class="yellowfever-faq-item"><button class="yellowfever-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How many doses do I need?</span><i class="fas fa-plus icon"></i></button><div class="yellowfever-faq-content"><p>Just one dose provides lifelong protection for most people. The certificate becomes valid 10 days after vaccination.</p></div></div>
        <div class="yellowfever-faq-item"><button class="yellowfever-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="yellowfever-faq-content"><p>Mild side effects such as headache, muscle aches, or low-grade fever may occur. Serious side effects are very rare. We will assess your suitability before vaccination.</p></div></div>
        <div class="yellowfever-faq-item"><button class="yellowfever-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Who should NOT have the Yellow Fever vaccine?</span><i class="fas fa-plus icon"></i></button><div class="yellowfever-faq-content"><p>The vaccine is not suitable for infants under 6 months, people with severe egg allergies, those with weakened immune systems, or people with thymus disorders. We can issue an exemption letter if needed.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="yellowfever-cta-section">
  <div class="yellowfever-cta-bg"></div>
  <div class="section-container">
    <div class="yellowfever-cta-content">
      <div class="yellowfever-cta-badges">
        <span class="badge">Official Yellow Fever Centre</span>
        <span class="badge">ICVP Certificate</span>
        <span class="badge">Same Day Appointments</span>
      </div>
      <h2 class="yellowfever-cta-title"><?php echo esc_html(ep_field('vaccine_cta_title', 'Get your Yellow Fever vaccination and certificate')); ?></h2>
      <p class="yellowfever-cta-desc"><?php echo esc_html(ep_field('vaccine_cta_desc', 'Book your Yellow Fever vaccination at our official centre in Ashford. Certificate issued on the day.')); ?></p>
      <div class="yellowfever-cta-actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(ep_field('vaccine_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
