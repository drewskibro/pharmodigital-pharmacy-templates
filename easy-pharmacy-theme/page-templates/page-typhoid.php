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
        <?php echo esc_html(ep_field('vaccine_hero_description', 'Protect yourself against typhoid fever with our expert travel health service. Available as a single injection or oral capsules.')); ?>
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
          <div class="typhoid-hero-badge">Injection or Oral</div>
          <div class="typhoid-hero-badge">3 Years Protection</div>
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
      <h2 class="typhoid-protect-title"><?php echo esc_html(ep_field('vaccine_protect_title', 'Safe & Effective Typhoid Prevention')); ?></h2>
      <p class="typhoid-protect-desc"><?php echo esc_html(ep_field('vaccine_protect_desc', 'Choose the vaccination method that suits you best')); ?></p>
    </div>

    <div class="typhoid-protect-grid">
      <div class="typhoid-protect-image-wrapper">
        <div class="typhoid-protect-image-card">
          <?php
          $protect_image_id = ep_field('vaccine_protect_image');
          $protect_image_url = $protect_image_id ? wp_get_attachment_image_url($protect_image_id, 'large') : '';
          if ($protect_image_url) : ?>
            <img src="<?php echo esc_url($protect_image_url); ?>" alt="<?php echo esc_attr(ep_field('vaccine_protect_image_alt', 'Travel health consultation')); ?>" class="typhoid-protect-image" />
          <?php endif; ?>
          <div class="typhoid-protect-name-tag">
            <span class="name"><?php echo esc_html(ep_field('vaccine_protect_nametag_name', 'Expert Advice')); ?></span>
            <span class="role"><?php echo esc_html(ep_field('vaccine_protect_nametag_role', 'Travel Health Team')); ?></span>
          </div>
        </div>
      </div>

      <div class="typhoid-protect-content">
        <div class="typhoid-protect-badge-box">
          <i class="fas fa-shield-virus"></i>
          <span><?php echo esc_html(ep_field('vaccine_protect_highlight', 'Recommended for High-Risk Areas')); ?></span>
        </div>

        <h3 class="typhoid-protect-subtitle"><?php echo esc_html(ep_field('vaccine_protect_subtitle', 'Two Ways to Protect Yourself')); ?></h3>
        <p class="typhoid-protect-text"><?php echo esc_html(ep_field('vaccine_protect_text', 'Typhoid fever is a serious bacterial infection spread through contaminated food and water. We offer both the single-dose injection and the oral capsule course, giving you flexibility in how you get protected.')); ?></p>

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
            <li class="typhoid-protect-feature">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <div class="text"><strong>Injection (Typhim Vi)</strong><p>A single dose injection suitable for adults and children over 2 years. Provides protection for up to 3 years.</p></div>
            </li>
            <li class="typhoid-protect-feature">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <div class="text"><strong>Oral Capsules (Vivotif)</strong><p>A course of 3 capsules taken over 5 days. Suitable for adults and children over 6 years who prefer not to have an injection.</p></div>
            </li>
            <li class="typhoid-protect-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div class="text"><strong>Lasts for 3 Years</strong><p>Both methods provide effective protection for 3 years. A booster is recommended if you continue to travel to risk areas.</p></div>
            </li>
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

<!-- Stats Bar -->
<section class="typhoid-stats-section">
  <div class="section-container">
    <div class="typhoid-stats-bar">
      <?php if (have_rows('vaccine_stats')) : $stat_i = 0; while (have_rows('vaccine_stats')) : the_row(); $stat_i++; ?>
        <?php if ($stat_i > 1) : ?><div class="typhoid-stat-divider"></div><?php endif; ?>
        <div class="typhoid-stat-item">
          <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <div class="content">
            <span class="number"><?php echo esc_html(get_sub_field('number')); ?></span>
            <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="typhoid-stat-item"><div class="icon"><i class="fas fa-shield-halved"></i></div><div class="content"><span class="number">70-80%</span><span class="label">Effective Protection</span></div></div>
        <div class="typhoid-stat-divider"></div>
        <div class="typhoid-stat-item"><div class="icon"><i class="fas fa-calendar-days"></i></div><div class="content"><span class="number">3 Years</span><span class="label">Protection Duration</span></div></div>
        <div class="typhoid-stat-divider"></div>
        <div class="typhoid-stat-item"><div class="icon"><i class="fas fa-hourglass-start"></i></div><div class="content"><span class="number">14 Days</span><span class="label">Before Travel</span></div></div>
        <div class="typhoid-stat-divider"></div>
        <div class="typhoid-stat-item"><div class="icon"><i class="fas fa-user-check"></i></div><div class="content"><span class="number">2+ Years</span><span class="label">Suitable Age</span></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About Typhoid -->
<section class="typhoid-about-section">
  <div class="section-container">
    <div class="typhoid-about-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_about_badge', 'ABOUT THE DISEASE')); ?></span>
      </div>
      <h2 class="typhoid-about-title"><?php echo esc_html(ep_field('vaccine_about_title', 'What is Typhoid Fever?')); ?></h2>
      <p class="typhoid-about-desc"><?php echo esc_html(ep_field('vaccine_about_desc', 'A bacterial infection that can be serious if not treated')); ?></p>
    </div>

    <div class="typhoid-about-content-grid">
      <div class="typhoid-about-image-wrapper">
        <div class="typhoid-about-image-card">
          <?php
          $about_image_id = ep_field('vaccine_about_image');
          $about_image_url = $about_image_id ? wp_get_attachment_image_url($about_image_id, 'large') : '';
          if ($about_image_url) : ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="<?php echo esc_attr(ep_field('vaccine_about_image_alt', 'Street food market in Asia')); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <div class="typhoid-about-cards-grid">
        <?php if (have_rows('vaccine_about_cards')) : while (have_rows('vaccine_about_cards')) : the_row(); ?>
          <div class="typhoid-info-card">
            <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        <?php endwhile; else : ?>
          <div class="typhoid-info-card"><div class="icon"><i class="fas fa-bacteria"></i></div><h3>Bacterial Infection</h3><p>Caused by Salmonella Typhi bacteria. It is highly contagious and spreads through contaminated food and water.</p></div>
          <div class="typhoid-info-card"><div class="icon"><i class="fas fa-glass-water"></i></div><h3>Transmission</h3><p>Spread by eating food or drinking water contaminated with the faeces of an infected person. Poor sanitation is a major risk factor.</p></div>
          <div class="typhoid-info-card"><div class="icon"><i class="fas fa-head-side-virus"></i></div><h3>Symptoms</h3><p>High temperature, headache, stomach pain, and constipation or diarrhea. Without treatment, it can lead to serious complications.</p></div>
          <div class="typhoid-info-card"><div class="icon"><i class="fas fa-globe-asia"></i></div><h3>High Risk Areas</h3><p>Common in parts of the world with poor sanitation and limited access to clean water, including South Asia, Africa, and South America.</p></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Who Needs Vaccination -->
<section class="typhoid-needs-section">
  <div class="section-container">
    <div class="typhoid-needs-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_needs_badge', 'WHO NEEDS VACCINATION')); ?></span>
      </div>
      <h2 class="typhoid-needs-title"><?php echo esc_html(ep_field('vaccine_needs_title', 'Should you get vaccinated?')); ?></h2>
      <p class="typhoid-needs-desc"><?php echo esc_html(ep_field('vaccine_needs_desc', 'Vaccination is recommended for travellers visiting high-risk areas')); ?></p>
    </div>

    <div class="typhoid-needs-grid">
      <?php if (have_rows('vaccine_needs_cards')) : while (have_rows('vaccine_needs_cards')) : the_row(); ?>
        <div class="typhoid-needs-card <?php echo esc_attr(get_sub_field('type')); ?>">
          <div class="card-badge"><?php echo esc_html(get_sub_field('badge')); ?></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
          <ul class="check-list">
            <?php if (have_rows('items')) : while (have_rows('items')) : the_row(); ?>
              <li><i class="fas fa-check"></i> <?php echo esc_html(get_sub_field('text')); ?></li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      <?php endwhile; else : ?>
        <div class="typhoid-needs-card recommended">
          <div class="card-badge">HIGHLY RECOMMENDED</div>
          <h3>Travellers to Risk Areas</h3>
          <p>Vaccination is strongly recommended if you are travelling to parts of the world where typhoid is common.</p>
          <ul class="check-list">
            <li><i class="fas fa-check"></i> Visiting India, Pakistan, or Bangladesh</li>
            <li><i class="fas fa-check"></i> Travelling to Southeast Asia, Africa, or South America</li>
            <li><i class="fas fa-check"></i> Staying with local people</li>
          </ul>
        </div>
        <div class="typhoid-needs-card consider">
          <div class="card-badge">CONSIDER</div>
          <h3>Extended Stays</h3>
          <p>Even in lower risk areas, certain travel styles increase your risk of exposure to contaminated food or water.</p>
          <ul class="check-list">
            <li><i class="fas fa-check"></i> Frequent or long-term travellers</li>
            <li><i class="fas fa-check"></i> Visiting areas with poor sanitation</li>
            <li><i class="fas fa-check"></i> Adventurous eaters (street food)</li>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Risk Zones -->
<section class="typhoid-risk-section">
  <div class="section-container">
    <div class="typhoid-risk-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('vaccine_risk_badge', 'GLOBAL RISK ZONES')); ?></span>
      </div>
      <h2 class="typhoid-risk-title"><?php echo esc_html(ep_field('vaccine_risk_title', 'Where is Typhoid found?')); ?></h2>
      <p class="typhoid-risk-desc"><?php echo esc_html(ep_field('vaccine_risk_desc', 'Typhoid is found worldwide but is most common in areas with poor sanitation and hygiene.')); ?></p>
    </div>

    <div class="typhoid-risk-grid">
      <?php if (have_rows('vaccine_risk_zones')) : while (have_rows('vaccine_risk_zones')) : the_row();
        $zone_image_id = get_sub_field('image');
        $zone_image_url = $zone_image_id ? wp_get_attachment_image_url($zone_image_id, 'large') : '';
      ?>
        <div class="typhoid-risk-column">
          <?php if ($zone_image_url) : ?>
          <div class="typhoid-destination-image">
            <img src="<?php echo esc_url($zone_image_url); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" />
          </div>
          <?php endif; ?>
          <div class="typhoid-risk-card <?php echo esc_attr(get_sub_field('level')); ?>">
            <div class="card-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p class="desc"><?php echo esc_html(get_sub_field('description')); ?></p>
            <div class="country-list">
              <?php if (have_rows('countries')) : while (have_rows('countries')) : the_row(); ?>
                <span><?php echo esc_html(get_sub_field('name')); ?></span>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="typhoid-risk-column">
          <div class="typhoid-destination-image"><img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=1200&h=600&fit=crop" alt="India travel" /></div>
          <div class="typhoid-risk-card asia">
            <div class="card-icon"><i class="fas fa-globe-asia"></i></div>
            <h3>Indian Subcontinent</h3>
            <p class="desc">The highest risk area for typhoid fever. Vaccination is essential for almost all travellers to this region.</p>
            <div class="country-list"><span>India</span><span>Pakistan</span><span>Bangladesh</span></div>
          </div>
        </div>
        <div class="typhoid-risk-column">
          <div class="typhoid-destination-image"><img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=1200&h=600&fit=crop" alt="Africa travel" /></div>
          <div class="typhoid-risk-card africa">
            <div class="card-icon"><i class="fas fa-globe-africa"></i></div>
            <h3>Africa & South America</h3>
            <p class="desc">Widespread risk across many countries. Recommended for most travellers, especially those visiting rural areas.</p>
            <div class="country-list"><span>Kenya</span><span>Nigeria</span><span>Peru</span><span>Brazil</span></div>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <div class="typhoid-risk-footer">
      <div class="info-badge">
        <i class="fas fa-user-doctor"></i>
        <?php echo esc_html(ep_field('vaccine_risk_footer', "Unsure about your destination? We'll check the latest risk data for you.")); ?>
      </div>
      <div class="actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Book Consultation</a>
      </div>
    </div>
  </div>
</section>

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
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Which is better: injection or capsules?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>Both are equally effective. The injection is a single dose and easier for many people. The capsules avoid a needle but require taking 3 doses over 5 days on an empty stomach. We can help you decide which is best for you.</p></div></div>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">How long before travel should I get vaccinated?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>Ideally, you should complete your vaccination at least 1-2 weeks before you travel to allow your body to build immunity. However, it's never too late to seek advice, so please contact us even if you are travelling sooner.</p></div></div>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">Are there any side effects?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>Side effects are usually mild. For the injection, you might have a sore arm or mild fever. For capsules, some people experience mild stomach upset. Serious side effects are very rare.</p></div></div>
        <div class="typhoid-faq-item"><button class="typhoid-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">Can I get Typhoid and Hepatitis A together?</span><i class="fas fa-plus icon"></i></button><div class="typhoid-faq-content"><p>Yes, there is a combined vaccine available for Hepatitis A and Typhoid. This is often a convenient option if you need protection against both diseases. We can discuss this during your appointment.</p></div></div>
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
        <?php if (have_rows('vaccine_cta_badges')) : while (have_rows('vaccine_cta_badges')) : the_row(); ?>
          <span class="badge"><?php echo esc_html(get_sub_field('text')); ?></span>
        <?php endwhile; else : ?>
          <span class="badge">Same Day Appointments</span>
          <span class="badge">Expert Advice</span>
          <span class="badge">Oral or Injection</span>
        <?php endif; ?>
      </div>

      <h2 class="typhoid-cta-title"><?php echo esc_html(ep_field('vaccine_cta_title', 'Protect your health while travelling')); ?></h2>
      <p class="typhoid-cta-desc"><?php echo esc_html(ep_field('vaccine_cta_desc', 'Book your typhoid vaccination with our expert team today. Quick, convenient, and professional service in Ashford.')); ?></p>

      <div class="typhoid-cta-actions">
        <a href="<?php echo esc_url(ep_field('vaccine_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta white-btn">Book Vaccination</a>
        <a href="tel:<?php echo esc_attr(ep_field('vaccine_phone', '01784255222')); ?>" class="cta-button secondary-cta outline-btn"><?php echo esc_html(ep_field('vaccine_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
