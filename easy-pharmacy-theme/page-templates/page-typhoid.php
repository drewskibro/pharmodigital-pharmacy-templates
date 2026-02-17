<?php
/**
 * Template Name: Typhoid Vaccination
 * @package Easy_Pharmacy
 */

get_header();

$vaccine_name = ep_field('vaccine_name', 'Typhoid');
?>

<!-- Breadcrumb -->
<div class="typhoid-breadcrumb">
  <div class="section-container">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <span class="separator">/</span>
    <a href="<?php echo esc_url(ep_field('vaccine_parent_url', '/travel-health/')); ?>">Travel Health</a>
    <span class="separator">/</span>
    <span class="current"><?php echo esc_html($vaccine_name); ?> Vaccination</span>
  </div>
</div>

<!-- Hero Section -->
<section class="typhoid-hero-section">
  <div class="typhoid-hero-overlay"></div>
  <div class="typhoid-hero-dots"></div>

  <div class="section-container">
    <div class="typhoid-hero-content">
      <div class="typhoid-hero-line"></div>
      <span class="typhoid-hero-label"><?php echo esc_html(ep_field('vaccine_hero_label', 'TRAVEL HEALTH PROTECTION')); ?></span>

      <h1 class="typhoid-hero-title"><?php echo esc_html(ep_field('vaccine_hero_title', 'Typhoid Vaccination Service in Ashford')); ?></h1>

      <p class="typhoid-hero-description">
        <?php echo esc_html(ep_field('vaccine_hero_description', 'Protect yourself against Typhoid fever with our expert travel health service. Essential for travel to areas with poor sanitation in Asia, Africa, and South America.')); ?>
      </p>

      <div class="typhoid-hero-actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button typhoid-btn-primary">
          <?php echo esc_html(ep_field('vaccine_cta_text', 'Book Typhoid Vaccination')); ?>
        </a>
        <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button typhoid-btn-secondary">
          <?php echo esc_html(ep_field('vaccine_phone_display', 'Call 01784 255 222')); ?>
        </a>
      </div>

      <div class="typhoid-hero-badges">
        <?php if (have_rows('vaccine_hero_badges')) : while (have_rows('vaccine_hero_badges')) : the_row(); ?>
          <div class="typhoid-hero-badge"><?php echo esc_html(get_sub_field('text')); ?></div>
        <?php endwhile; else : ?>
          <div class="typhoid-hero-badge">Single Dose Available</div>
          <div class="typhoid-hero-badge">Expert Advice</div>
          <div class="typhoid-hero-badge">Same Day Appointments</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Protection Section -->
<section class="typhoid-protect-section">
  <div class="section-container">
    <div class="typhoid-protect-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_protect_badge', 'ESSENTIAL PROTECTION')); ?></span>
      </div>
      <h2 class="typhoid-protect-title"><?php echo esc_html(ep_field('vaccine_protect_title', 'Understanding Typhoid Risk')); ?></h2>
      <p class="typhoid-protect-desc"><?php echo esc_html(ep_field('vaccine_protect_desc', 'A bacterial infection spread through contaminated food and water')); ?></p>
    </div>

    <div class="typhoid-protect-grid">
      <div class="typhoid-protect-image-wrapper">
        <div class="typhoid-protect-image-card">
          <img src="<?php echo esc_url(ep_field('vaccine_protect_image', 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=800&h=1000&fit=crop')); ?>" alt="Typhoid vaccination consultation" class="typhoid-protect-image" />
          <div class="typhoid-protect-name-tag">
            <span class="name"><?php echo esc_html(ep_field('vaccine_protect_nametag_name', 'Expert Care')); ?></span>
            <span class="role"><?php echo esc_html(ep_field('vaccine_protect_nametag_role', 'Travel Health Team')); ?></span>
          </div>
        </div>
      </div>

      <div class="typhoid-protect-content">
        <div class="typhoid-protect-badge-box">
          <i class="fas fa-bacteria"></i>
          <span><?php echo esc_html(ep_field('vaccine_protect_highlight', 'Recommended for Most Destinations')); ?></span>
        </div>

        <h3 class="typhoid-protect-subtitle"><?php echo esc_html(ep_field('vaccine_protect_subtitle', 'Why Vaccination Matters')); ?></h3>
        <p class="typhoid-protect-text"><?php echo esc_html(ep_field('vaccine_protect_text', 'Typhoid fever is caused by Salmonella typhi bacteria, spread through contaminated food and water. It causes high fever, headache, and stomach pain. Without treatment, it can be life-threatening.')); ?></p>

        <ul class="typhoid-protect-features">
          <?php if (have_rows('vaccine_protect_features')) : while (have_rows('vaccine_protect_features')) : the_row(); ?>
            <li class="typhoid-protect-feature">
              <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
              <div class="text">
                <strong><?php echo esc_html(get_sub_field('title')); ?></strong>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>
              </div>
            </li>
          <?php endwhile; else : ?>
            <li class="typhoid-protect-feature"><div class="icon"><i class="fas fa-syringe"></i></div><div class="text"><strong>Single Injection</strong><p>One dose provides protection for approximately 3 years. Quick and convenient vaccination.</p></div></li>
            <li class="typhoid-protect-feature"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="text"><strong>70-80% Effective</strong><p>The vaccine significantly reduces your risk. Combined with food and water precautions for maximum protection.</p></div></li>
            <li class="typhoid-protect-feature"><div class="icon"><i class="fas fa-clock"></i></div><div class="text"><strong>2 Week Lead Time</strong><p>Best given at least 2 weeks before travel. Can be combined with other travel vaccinations.</p></div></li>
          <?php endif; ?>
        </ul>

        <div class="typhoid-protect-actions">
          <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Book Appointment</a>
          <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button secondary-cta">Call 01784 255 222</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats, About, Details sections via template parts -->
<?php get_template_part('template-parts/vaccine', 'stats', array('prefix' => 'typhoid')); ?>
<?php get_template_part('template-parts/vaccine', 'about', array('prefix' => 'typhoid')); ?>
<?php get_template_part('template-parts/vaccine', 'details', array('prefix' => 'typhoid')); ?>

<!-- FAQ Section -->
<section class="typhoid-faq-section">
  <div class="section-container">
    <div class="typhoid-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_faq_badge', 'TYPHOID FAQs')); ?></span>
      </div>
      <h2 class="typhoid-faq-title"><?php echo esc_html(ep_field('vaccine_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="typhoid-faq-list">
      <?php if (have_rows('vaccine_faqs')) : $faq_num = 0; while (have_rows('vaccine_faqs')) : the_row(); $faq_num++; ?>
        <div class="typhoid-faq-item">
          <button class="typhoid-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="typhoid-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">How many doses do I need?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>Just one injection is needed for the injectable vaccine. Protection lasts approximately 3 years. An oral vaccine is also available (3 capsules over 5 days).</p></div></div>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">Where is Typhoid a risk?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>Typhoid is a risk in many parts of Asia, Africa, Central and South America, and the Middle East. It is particularly common in areas with poor sanitation and limited access to clean water.</p></div></div>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Can I combine Typhoid with other vaccines?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>Yes, Typhoid vaccine can be given at the same time as most other travel vaccinations. A combined Hepatitis A and Typhoid vaccine (VIVAXIM) is also available for convenience.</p></div></div>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>Side effects are usually mild and short-lived: sore arm, slight fever, or headache. Serious reactions are very rare.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="typhoid-cta-section">
  <div class="typhoid-cta-bg"></div>
  <div class="section-container">
    <div class="typhoid-cta-content">
      <div class="typhoid-cta-badges">
        <span class="badge">Same Day Appointments</span>
        <span class="badge">Expert Advice</span>
        <span class="badge">Single Dose Protection</span>
      </div>
      <h2 class="typhoid-cta-title"><?php echo esc_html(ep_field('vaccine_cta_title', 'Protect your health while travelling')); ?></h2>
      <p class="typhoid-cta-desc"><?php echo esc_html(ep_field('vaccine_cta_desc', 'Book your Typhoid vaccination with our expert team today. Quick, convenient, and professional service in Ashford.')); ?></p>
      <div class="typhoid-cta-actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(ep_field('vaccine_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
