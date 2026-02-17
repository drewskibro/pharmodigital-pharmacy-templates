<?php
/**
 * Template Name: Hepatitis Vaccination
 * @package Easy_Pharmacy
 */

get_header();

$vaccine_name = ep_field('vaccine_name', 'Hepatitis A & B');
?>

<!-- Breadcrumb -->
<div class="hepatitis-breadcrumb">
  <div class="section-container">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <span class="separator">/</span>
    <a href="<?php echo esc_url(ep_field('vaccine_parent_url', '/travel-health/')); ?>">Travel Health</a>
    <span class="separator">/</span>
    <span class="current"><?php echo esc_html($vaccine_name); ?> Vaccination</span>
  </div>
</div>

<!-- Hero Section -->
<section class="hepatitis-hero-section">
  <div class="hepatitis-hero-overlay"></div>
  <div class="hepatitis-hero-dots"></div>

  <div class="section-container">
    <div class="hepatitis-hero-content">
      <div class="hepatitis-hero-line"></div>
      <span class="hepatitis-hero-label"><?php echo esc_html(ep_field('vaccine_hero_label', 'TRAVEL HEALTH PROTECTION')); ?></span>

      <h1 class="hepatitis-hero-title"><?php echo esc_html(ep_field('vaccine_hero_title', 'Hepatitis A & B Vaccination Service in Ashford')); ?></h1>

      <p class="hepatitis-hero-description">
        <?php echo esc_html(ep_field('vaccine_hero_description', 'Protect yourself against Hepatitis A and B with our expert travel health service. Essential for travellers to areas with poor sanitation or where Hepatitis is endemic.')); ?>
      </p>

      <div class="hepatitis-hero-actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button hepatitis-btn-primary">
          <?php echo esc_html(ep_field('vaccine_cta_text', 'Book Hepatitis Vaccination')); ?>
        </a>
        <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button hepatitis-btn-secondary">
          <?php echo esc_html(ep_field('vaccine_phone_display', 'Call 01784 255 222')); ?>
        </a>
      </div>

      <div class="hepatitis-hero-badges">
        <?php if (have_rows('vaccine_hero_badges')) : while (have_rows('vaccine_hero_badges')) : the_row(); ?>
          <div class="hepatitis-hero-badge"><?php echo esc_html(get_sub_field('text')); ?></div>
        <?php endwhile; else : ?>
          <div class="hepatitis-hero-badge">Single &amp; Combined Vaccines</div>
          <div class="hepatitis-hero-badge">Expert Advice</div>
          <div class="hepatitis-hero-badge">Same Day Appointments</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Protection Section -->
<section class="hepatitis-protect-section">
  <div class="section-container">
    <div class="hepatitis-protect-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_protect_badge', 'ESSENTIAL PROTECTION')); ?></span>
      </div>
      <h2 class="hepatitis-protect-title"><?php echo esc_html(ep_field('vaccine_protect_title', 'Understanding Hepatitis Risk')); ?></h2>
      <p class="hepatitis-protect-desc"><?php echo esc_html(ep_field('vaccine_protect_desc', 'Viral infections affecting the liver spread through contaminated food, water, or blood')); ?></p>
    </div>

    <div class="hepatitis-protect-grid">
      <div class="hepatitis-protect-image-wrapper">
        <div class="hepatitis-protect-image-card">
          <img src="<?php echo esc_url(ep_field('vaccine_protect_image', 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=800&h=1000&fit=crop')); ?>" alt="<?php echo esc_attr(ep_field('vaccine_protect_image_alt', 'Hepatitis vaccination consultation')); ?>" class="hepatitis-protect-image" />
          <div class="hepatitis-protect-name-tag">
            <span class="name"><?php echo esc_html(ep_field('vaccine_protect_nametag_name', 'Expert Care')); ?></span>
            <span class="role"><?php echo esc_html(ep_field('vaccine_protect_nametag_role', 'Travel Health Team')); ?></span>
          </div>
        </div>
      </div>

      <div class="hepatitis-protect-content">
        <div class="hepatitis-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(ep_field('vaccine_protect_highlight', 'Recommended for Most Travellers')); ?></span>
        </div>

        <h3 class="hepatitis-protect-subtitle"><?php echo esc_html(ep_field('vaccine_protect_subtitle', 'Why Vaccination is Important')); ?></h3>
        <p class="hepatitis-protect-text"><?php echo esc_html(ep_field('vaccine_protect_text', 'Hepatitis A is spread through contaminated food and water. Hepatitis B is spread through blood and body fluids. Both can cause serious liver disease. Combined vaccines are available for convenient protection.')); ?></p>

        <ul class="hepatitis-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="hepatitis-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="hepatitis-protect-feature"><div class="icon"><i class="fas fa-syringe"></i></div><div class="text"><strong>Single or Combined Vaccines</strong><p>Separate Hepatitis A and B vaccines, or a combined Twinrix vaccine for both in one course.</p></div></li>
            <li class="hepatitis-protect-feature"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="text"><strong>Long-lasting Protection</strong><p>Hepatitis A: protection for 25+ years. Hepatitis B: lifelong immunity after full course.</p></div></li>
            <li class="hepatitis-protect-feature"><div class="icon"><i class="fas fa-clock"></i></div><div class="text"><strong>Quick Protection</strong><p>Hepatitis A vaccine provides protection within 2-4 weeks. Accelerated courses available for last-minute travel.</p></div></li>
          <?php endif; ?>
        </ul>

        <div class="hepatitis-protect-actions">
          <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button secondary-cta">Call 01784 255 222</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats, About, Details, FAQ, CTA sections follow the same pattern as rabies -->
<?php get_template_part('template-parts/vaccine', 'stats', array('prefix' => 'hepatitis')); ?>
<?php get_template_part('template-parts/vaccine', 'about', array('prefix' => 'hepatitis')); ?>
<?php get_template_part('template-parts/vaccine', 'details', array('prefix' => 'hepatitis')); ?>

<!-- FAQ Section -->
<section class="hepatitis-faq-section">
  <div class="section-container">
    <div class="hepatitis-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_faq_badge', 'HEPATITIS FAQs')); ?></span>
      </div>
      <h2 class="hepatitis-faq-title"><?php echo esc_html(ep_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="hepatitis-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="hepatitis-faq-item">
          <button class="hepatitis-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="hepatitis-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="hepatitis-faq-item"><button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses do I need?</span><i class="fas fa-plus icon"></i></button><div class="hepatitis-faq-content"><p>Hepatitis A requires 2 doses (0 and 6-12 months). Hepatitis B requires 3 doses (0, 1, and 6 months). The combined Twinrix vaccine requires 3 doses. Accelerated schedules are available.</p></div></div>
        <div class="hepatitis-faq-item"><button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Do I need both Hepatitis A and B vaccines?</span><i class="fas fa-plus icon"></i></button><div class="hepatitis-faq-content"><p>For most travellers, Hepatitis A is the priority. Hepatitis B is recommended for longer stays, healthcare workers, or those who may have intimate contact. We can advise which is best for you.</p></div></div>
        <div class="hepatitis-faq-item"><button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">How long does protection last?</span><i class="fas fa-plus icon"></i></button><div class="hepatitis-faq-content"><p>Hepatitis A: at least 25 years with the full 2-dose course. Hepatitis B: lifelong immunity for most people after completing the full course.</p></div></div>
        <div class="hepatitis-faq-item"><button class="hepatitis-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="hepatitis-faq-content"><p>Side effects are generally mild: sore arm, mild headache, or slight temperature. Serious reactions are extremely rare.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="hepatitis-cta-section">
  <div class="hepatitis-cta-bg"></div>
  <div class="section-container">
    <div class="hepatitis-cta-content">
      <div class="hepatitis-cta-badges">
        <span class="badge">Same Day Appointments</span>
        <span class="badge">Expert Advice</span>
        <span class="badge">Combined Vaccines Available</span>
      </div>
      <h2 class="hepatitis-cta-title"><?php echo esc_html(ep_field('vaccine_cta_title', 'Protect your health while travelling')); ?></h2>
      <p class="hepatitis-cta-desc"><?php echo esc_html(ep_field('vaccine_cta_desc', 'Book your Hepatitis vaccination with our expert team today. Quick, convenient, and professional service in Ashford.')); ?></p>
      <div class="hepatitis-cta-actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(ep_field('vaccine_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
