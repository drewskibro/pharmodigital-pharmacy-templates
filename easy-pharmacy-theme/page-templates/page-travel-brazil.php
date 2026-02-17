<?php
/**
 * Template Name: Travel - Brazil
 * @package Easy_Pharmacy
 */

get_header();

$country = ep_field('td_country_name', 'Brazil');
?>

<!-- Hero Section -->
<section class="brazil-hero-section">
  <div class="brazil-hero-overlay"></div>
  <div class="brazil-hero-dots"></div>
  <div class="section-container">
    <div class="brazil-hero-grid">
      <div class="brazil-hero-content">
        <div class="hero-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="hero-badge-text"><?php echo esc_html(ep_field('td_hero_badge', 'BRAZIL TRAVEL HEALTH')); ?></span>
        </div>
        <h1 class="hero-title" style="color: white;">
          <?php echo esc_html(ep_field('td_hero_title_line1', 'Travel Vaccinations for')); ?><br />
          <span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html($country); ?></span>
        </h1>
        <p class="brazil-hero-description"><?php echo esc_html(ep_field('td_hero_description', 'Expert advice and vaccinations for your trip to Brazil. Yellow Fever certificate required, Malaria prevention, and more.')); ?></p>
        <div class="brazil-hero-actions">
          <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta brazil-hero-btn-primary"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
          <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta brazil-hero-btn-secondary"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
        </div>
      </div>
      <div class="brazil-hero-visual"></div>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="brazil-stats-section">
  <div class="brazil-stats-shimmer"></div>
  <div class="section-container">
    <div class="brazil-stats-grid">
      <?php if (have_rows('td_stats')) : while (have_rows('td_stats')) : the_row(); ?>
        <div class="brazil-stat-item"><div class="brazil-stat-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="brazil-stat-content"><p class="brazil-stat-number"><?php echo esc_html(get_sub_field('number')); ?></p><p class="brazil-stat-label"><?php echo esc_html(get_sub_field('label')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="brazil-stat-item"><div class="brazil-stat-icon"><i class="fas fa-syringe"></i></div><div class="brazil-stat-content"><p class="brazil-stat-number">5-7</p><p class="brazil-stat-label">Vaccines Recommended</p></div></div>
        <div class="brazil-stat-item"><div class="brazil-stat-icon"><i class="fas fa-calendar-alt"></i></div><div class="brazil-stat-content"><p class="brazil-stat-number">6-8</p><p class="brazil-stat-label">Weeks Before Travel</p></div></div>
        <div class="brazil-stat-item"><div class="brazil-stat-icon"><i class="fas fa-shield-halved"></i></div><div class="brazil-stat-content"><p class="brazil-stat-number">Full</p><p class="brazil-stat-label">Protection Available</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Vaccines -->
<section class="brazil-vaccines-section">
  <div class="section-container">
    <div class="brazil-vaccines-header">
      <h2 class="brazil-vaccines-title"><?php echo esc_html(ep_field('td_vaccines_title', 'Protect yourself in ' . $country)); ?></h2>
      <div class="brazil-vaccines-divider"></div>
      <p class="brazil-vaccines-description"><?php echo esc_html(ep_field('td_vaccines_description', 'These vaccinations are recommended for most travellers to ' . $country)); ?></p>
    </div>
    <div class="brazil-vaccines-grid">
      <?php if (have_rows('td_vaccinations_required')) : while (have_rows('td_vaccinations_required')) : the_row(); ?>
        <div class="brazil-vaccine-card"><div class="brazil-vaccine-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="brazil-vaccine-content"><div class="brazil-vaccine-head"><h3 class="brazil-vaccine-name"><?php echo esc_html(get_sub_field('name')); ?></h3><span class="brazil-badge-<?php echo esc_attr(get_sub_field('badge_color')); ?>"><?php echo esc_html(get_sub_field('badge_text')); ?></span></div><p class="brazil-vaccine-short"><?php echo esc_html(get_sub_field('short_desc')); ?></p><p class="brazil-vaccine-desc"><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="brazil-vaccine-card"><div class="brazil-vaccine-icon"><i class="fas fa-shield-virus"></i></div><div class="brazil-vaccine-content"><div class="brazil-vaccine-head"><h3 class="brazil-vaccine-name">Yellow Fever</h3><span class="brazil-badge-purple">Essential</span></div><p class="brazil-vaccine-short">Mosquito-borne virus</p><p class="brazil-vaccine-desc">Required for many regions. We are an official Yellow Fever Centre.</p></div></div>
        <div class="brazil-vaccine-card"><div class="brazil-vaccine-icon"><i class="fas fa-virus"></i></div><div class="brazil-vaccine-content"><div class="brazil-vaccine-head"><h3 class="brazil-vaccine-name">Hepatitis A</h3><span class="brazil-badge-purple">Essential</span></div><p class="brazil-vaccine-short">Food &amp; water safety</p><p class="brazil-vaccine-desc">Recommended for all travellers to Brazil.</p></div></div>
        <div class="brazil-vaccine-card"><div class="brazil-vaccine-icon"><i class="fas fa-bacteria"></i></div><div class="brazil-vaccine-content"><div class="brazil-vaccine-head"><h3 class="brazil-vaccine-name">Typhoid</h3><span class="brazil-badge-purple">Essential</span></div><p class="brazil-vaccine-short">Food &amp; water safety</p><p class="brazil-vaccine-desc">Recommended especially for travel outside major cities.</p></div></div>
        <div class="brazil-vaccine-card"><div class="brazil-vaccine-icon"><i class="fas fa-syringe"></i></div><div class="brazil-vaccine-content"><div class="brazil-vaccine-head"><h3 class="brazil-vaccine-name">Tetanus</h3><span class="brazil-badge-purple">Essential</span></div><p class="brazil-vaccine-short">Routine booster</p><p class="brazil-vaccine-desc">Ensure your routine UK schedule is up to date.</p></div></div>
        <div class="brazil-vaccine-card"><div class="brazil-vaccine-icon"><i class="fas fa-dog"></i></div><div class="brazil-vaccine-content"><div class="brazil-vaccine-head"><h3 class="brazil-vaccine-name">Rabies</h3><span class="brazil-badge-gray">Recommended</span></div><p class="brazil-vaccine-short">Animal contact risk</p><p class="brazil-vaccine-desc">Consider for adventure travel or remote areas.</p></div></div>
        <div class="brazil-vaccine-card"><div class="brazil-vaccine-icon"><i class="fas fa-notes-medical"></i></div><div class="brazil-vaccine-content"><div class="brazil-vaccine-head"><h3 class="brazil-vaccine-name">Hepatitis B</h3><span class="brazil-badge-gray">Consider</span></div><p class="brazil-vaccine-short">Blood/fluid contact</p><p class="brazil-vaccine-desc">Consider for longer stays or medical tourism.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Malaria -->
<section class="brazil-malaria-section">
  <div class="section-container">
    <div class="brazil-malaria-layout">
      <div class="brazil-malaria-visual">
        <div class="brazil-malaria-image-card">
          <img src="<?php echo esc_url(ep_field('td_malaria_image', 'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?w=800&h=1000&fit=crop')); ?>" alt="<?php echo esc_attr($country . ' travel'); ?>" class="brazil-malaria-image" />
          <div class="brazil-malaria-overlay"></div>
          <div class="brazil-malaria-badge"><div class="brazil-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div><span class="brazil-malaria-badge-text">Expert Advice</span></div>
        </div>
      </div>
      <div class="brazil-malaria-content">
        <div class="section-badge"><span class="pulse-dot"><span></span><span></span></span><span class="section-badge-text"><?php echo esc_html(ep_field('td_malaria_badge', 'RISK VARIES BY REGION')); ?></span></div>
        <h2 class="brazil-malaria-title"><?php echo esc_html(ep_field('td_malaria_title', 'Malaria Risk in ' . $country)); ?></h2>
        <p class="brazil-malaria-intro"><?php echo esc_html(ep_field('td_malaria_intro', 'Malaria risk exists in the Amazon region and some rural areas of Brazil. Major cities like Rio and Sao Paulo are generally malaria-free.')); ?></p>
        <div class="brazil-malaria-info-grid">
          <?php if (have_rows('td_malaria_risks')) : while (have_rows('td_malaria_risks')) : the_row(); ?>
            <div class="brazil-malaria-item"><div class="brazil-malaria-item-icon <?php echo esc_attr(get_sub_field('risk_level')); ?>"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="brazil-malaria-item-text"><h4><?php echo esc_html(get_sub_field('title')); ?></h4><p><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
          <?php endwhile; else : ?>
            <div class="brazil-malaria-item"><div class="brazil-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div><div class="brazil-malaria-item-text"><h4>Amazon Region</h4><p>High risk in the Amazon basin and surrounding rural areas.</p></div></div>
            <div class="brazil-malaria-item"><div class="brazil-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div><div class="brazil-malaria-item-text"><h4>Major Cities</h4><p>Rio de Janeiro, Sao Paulo, and coastal cities are generally malaria-free.</p></div></div>
          <?php endif; ?>
        </div>
        <div class="brazil-malaria-actions"><a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Check Your Risk <i class="fas fa-arrow-right"></i></a></div>
      </div>
    </div>
  </div>
</section>

<!-- Health Tips -->
<section class="brazil-health-section">
  <div class="section-container">
    <div class="brazil-health-header">
      <div class="section-badge"><span class="pulse-dot"><span></span><span></span></span><span class="section-badge-text"><?php echo esc_html(ep_field('td_health_badge', 'HEALTH ADVICE')); ?></span></div>
      <h2 class="brazil-health-title"><?php echo esc_html(ep_field('td_health_title', 'Stay healthy in ' . $country)); ?></h2>
      <p class="brazil-health-subtitle"><?php echo esc_html(ep_field('td_health_subtitle', 'Essential tips for a safe trip')); ?></p>
    </div>
    <div class="brazil-health-grid">
      <?php if (have_rows('td_travel_tips')) : while (have_rows('td_travel_tips')) : the_row(); ?>
        <div class="brazil-health-card-visual"><div class="brazil-health-bg"><img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" /><div class="brazil-health-overlay"></div></div><div class="brazil-health-content"><div class="brazil-health-icon-wrapper"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><h3 class="brazil-health-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3><p class="brazil-health-card-desc"><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="brazil-health-card-visual"><div class="brazil-health-bg"><img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=600&h=800&fit=crop" alt="Water safety" /><div class="brazil-health-overlay"></div></div><div class="brazil-health-content"><div class="brazil-health-icon-wrapper"><i class="fas fa-glass-water"></i></div><h3 class="brazil-health-card-title">Food &amp; Water</h3><p class="brazil-health-card-desc">Drink bottled water only. Avoid street food and unpeeled fruit.</p></div></div>
        <div class="brazil-health-card-visual"><div class="brazil-health-bg"><img src="https://images.unsplash.com/photo-1533619043865-1c2e2f32ff5f?w=600&h=800&fit=crop" alt="Sun safety" /><div class="brazil-health-overlay"></div></div><div class="brazil-health-content"><div class="brazil-health-icon-wrapper"><i class="fas fa-sun"></i></div><h3 class="brazil-health-card-title">Sun Safety</h3><p class="brazil-health-card-desc">Tropical sun is intense. Use SPF 50+, wear a hat, and stay hydrated.</p></div></div>
        <div class="brazil-health-card-visual"><div class="brazil-health-bg"><img src="https://images.unsplash.com/photo-1551817958-29d0660f98de?w=600&h=800&fit=crop" alt="Insect protection" /><div class="brazil-health-overlay"></div></div><div class="brazil-health-content"><div class="brazil-health-icon-wrapper"><i class="fas fa-mosquito"></i></div><h3 class="brazil-health-card-title">Insects</h3><p class="brazil-health-card-desc">Use DEET repellent. Protect against Dengue, Zika, and Malaria mosquitoes.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="brazil-cta-section">
  <div class="brazil-cta-glow-1"></div><div class="brazil-cta-glow-2"></div><div class="brazil-cta-dots"></div>
  <div class="section-container">
    <div class="brazil-cta-content">
      <h2 class="brazil-cta-title"><?php echo esc_html(ep_field('td_cta_title', 'Ready for your trip to Brazil?')); ?></h2>
      <p class="brazil-cta-description"><?php echo esc_html(ep_field('td_cta_description', 'Book your travel health consultation at our Ashford clinic. Get expert advice and all recommended vaccinations in one visit.')); ?></p>
      <div class="brazil-cta-actions">
        <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta brazil-cta-button-white"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
        <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta brazil-cta-button-outlined"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
      <div class="brazil-cta-checks">
        <div class="brazil-cta-check"><i class="fas fa-plane-departure"></i><span>Travel Ready</span></div>
        <div class="brazil-cta-check"><i class="fas fa-user-doctor"></i><span>Expert Advice</span></div>
        <div class="brazil-cta-check"><i class="fas fa-shield-virus"></i><span>All Vaccines</span></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
