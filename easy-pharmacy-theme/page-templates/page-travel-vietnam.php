<?php
/**
 * Template Name: Travel - Vietnam
 * @package Easy_Pharmacy
 */

get_header();

$country = ep_field('td_country_name', 'Vietnam');
?>

<!-- Hero Section -->
<section class="vietnam-hero-section">
  <div class="vietnam-hero-overlay"></div>
  <div class="vietnam-hero-dots"></div>
  <div class="section-container">
    <div class="vietnam-hero-grid">
      <div class="vietnam-hero-content">
        <div class="hero-badge"><span class="pulse-dot"><span></span><span></span></span><span class="hero-badge-text"><?php echo esc_html(ep_field('td_hero_badge', 'VIETNAM TRAVEL HEALTH')); ?></span></div>
        <h1 class="hero-title" style="color: white;"><?php echo esc_html(ep_field('td_hero_title_line1', 'Travel Vaccinations for')); ?><br /><span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html($country); ?></span></h1>
        <p class="vietnam-hero-description"><?php echo esc_html(ep_field('td_hero_description', 'Expert advice and vaccinations for your Vietnam adventure. Japanese Encephalitis, Malaria prevention, and more.')); ?></p>
        <div class="vietnam-hero-actions">
          <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta vietnam-hero-btn-primary"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
          <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta vietnam-hero-btn-secondary"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
        </div>
      </div>
      <div class="vietnam-hero-visual"></div>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="vietnam-stats-section">
  <div class="vietnam-stats-shimmer"></div>
  <div class="section-container">
    <div class="vietnam-stats-grid">
      <?php if (have_rows('td_stats')) : while (have_rows('td_stats')) : the_row(); ?>
        <div class="vietnam-stat-item"><div class="vietnam-stat-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="vietnam-stat-content"><p class="vietnam-stat-number"><?php echo esc_html(get_sub_field('number')); ?></p><p class="vietnam-stat-label"><?php echo esc_html(get_sub_field('label')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="vietnam-stat-item"><div class="vietnam-stat-icon"><i class="fas fa-syringe"></i></div><div class="vietnam-stat-content"><p class="vietnam-stat-number">6-8</p><p class="vietnam-stat-label">Vaccines Recommended</p></div></div>
        <div class="vietnam-stat-item"><div class="vietnam-stat-icon"><i class="fas fa-calendar-alt"></i></div><div class="vietnam-stat-content"><p class="vietnam-stat-number">6-8</p><p class="vietnam-stat-label">Weeks Before Travel</p></div></div>
        <div class="vietnam-stat-item"><div class="vietnam-stat-icon"><i class="fas fa-shield-halved"></i></div><div class="vietnam-stat-content"><p class="vietnam-stat-number">Full</p><p class="vietnam-stat-label">Protection Available</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Vaccines -->
<section class="vietnam-vaccines-section">
  <div class="section-container">
    <div class="vietnam-vaccines-header">
      <h2 class="vietnam-vaccines-title"><?php echo esc_html(ep_field('td_vaccines_title', 'Protect yourself in ' . $country)); ?></h2>
      <div class="vietnam-vaccines-divider"></div>
      <p class="vietnam-vaccines-description"><?php echo esc_html(ep_field('td_vaccines_description', 'These vaccinations are recommended for most travellers to ' . $country)); ?></p>
    </div>
    <div class="vietnam-vaccines-grid">
      <?php if (have_rows('td_vaccinations_required')) : while (have_rows('td_vaccinations_required')) : the_row(); ?>
        <div class="vietnam-vaccine-card"><div class="vietnam-vaccine-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="vietnam-vaccine-content"><div class="vietnam-vaccine-head"><h3 class="vietnam-vaccine-name"><?php echo esc_html(get_sub_field('name')); ?></h3><span class="vietnam-badge-<?php echo esc_attr(get_sub_field('badge_color')); ?>"><?php echo esc_html(get_sub_field('badge_text')); ?></span></div><p class="vietnam-vaccine-short"><?php echo esc_html(get_sub_field('short_desc')); ?></p><p class="vietnam-vaccine-desc"><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="vietnam-vaccine-card"><div class="vietnam-vaccine-icon"><i class="fas fa-virus"></i></div><div class="vietnam-vaccine-content"><div class="vietnam-vaccine-head"><h3 class="vietnam-vaccine-name">Hepatitis A</h3><span class="vietnam-badge-purple">Essential</span></div><p class="vietnam-vaccine-short">Food &amp; water safety</p><p class="vietnam-vaccine-desc">Recommended for all travellers to Vietnam.</p></div></div>
        <div class="vietnam-vaccine-card"><div class="vietnam-vaccine-icon"><i class="fas fa-bacteria"></i></div><div class="vietnam-vaccine-content"><div class="vietnam-vaccine-head"><h3 class="vietnam-vaccine-name">Typhoid</h3><span class="vietnam-badge-purple">Essential</span></div><p class="vietnam-vaccine-short">Food &amp; water safety</p><p class="vietnam-vaccine-desc">Especially important if trying local street food.</p></div></div>
        <div class="vietnam-vaccine-card"><div class="vietnam-vaccine-icon"><i class="fas fa-syringe"></i></div><div class="vietnam-vaccine-content"><div class="vietnam-vaccine-head"><h3 class="vietnam-vaccine-name">Tetanus</h3><span class="vietnam-badge-purple">Essential</span></div><p class="vietnam-vaccine-short">Routine booster</p><p class="vietnam-vaccine-desc">Ensure your routine UK schedule is up to date.</p></div></div>
        <div class="vietnam-vaccine-card"><div class="vietnam-vaccine-icon"><i class="fas fa-brain"></i></div><div class="vietnam-vaccine-content"><div class="vietnam-vaccine-head"><h3 class="vietnam-vaccine-name">Japanese Encephalitis</h3><span class="vietnam-badge-purple">Essential</span></div><p class="vietnam-vaccine-short">Mosquito-borne virus</p><p class="vietnam-vaccine-desc">Recommended for rural travel or stays longer than one month.</p></div></div>
        <div class="vietnam-vaccine-card"><div class="vietnam-vaccine-icon"><i class="fas fa-dog"></i></div><div class="vietnam-vaccine-content"><div class="vietnam-vaccine-head"><h3 class="vietnam-vaccine-name">Rabies</h3><span class="vietnam-badge-gray">Recommended</span></div><p class="vietnam-vaccine-short">Animal contact risk</p><p class="vietnam-vaccine-desc">High risk in Vietnam. Stray dogs are common in cities and rural areas.</p></div></div>
        <div class="vietnam-vaccine-card"><div class="vietnam-vaccine-icon"><i class="fas fa-notes-medical"></i></div><div class="vietnam-vaccine-content"><div class="vietnam-vaccine-head"><h3 class="vietnam-vaccine-name">Hepatitis B</h3><span class="vietnam-badge-gray">Consider</span></div><p class="vietnam-vaccine-short">Blood/fluid contact</p><p class="vietnam-vaccine-desc">Consider for longer stays or medical/dental treatment abroad.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Malaria -->
<section class="vietnam-malaria-section">
  <div class="section-container">
    <div class="vietnam-malaria-layout">
      <div class="vietnam-malaria-visual">
        <div class="vietnam-malaria-image-card">
          <img src="<?php echo esc_url(ep_field('td_malaria_image', 'https://images.unsplash.com/photo-1528127269322-539801943592?w=800&h=1000&fit=crop')); ?>" alt="Vietnam travel" class="vietnam-malaria-image" />
          <div class="vietnam-malaria-overlay"></div>
          <div class="vietnam-malaria-badge"><div class="vietnam-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div><span class="vietnam-malaria-badge-text">Expert Advice</span></div>
        </div>
      </div>
      <div class="vietnam-malaria-content">
        <div class="section-badge"><span class="pulse-dot"><span></span><span></span></span><span class="section-badge-text"><?php echo esc_html(ep_field('td_malaria_badge', 'RISK VARIES BY REGION')); ?></span></div>
        <h2 class="vietnam-malaria-title"><?php echo esc_html(ep_field('td_malaria_title', 'Malaria Risk in Vietnam')); ?></h2>
        <p class="vietnam-malaria-intro"><?php echo esc_html(ep_field('td_malaria_intro', 'Malaria risk exists in rural and forested areas of Vietnam. Major cities and tourist resorts are generally low risk.')); ?></p>
        <div class="vietnam-malaria-info-grid">
          <?php if (have_rows('td_malaria_risks')) : while (have_rows('td_malaria_risks')) : the_row(); ?>
            <div class="vietnam-malaria-item"><div class="vietnam-malaria-item-icon <?php echo esc_attr(get_sub_field('risk_level')); ?>"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="vietnam-malaria-item-text"><h4><?php echo esc_html(get_sub_field('title')); ?></h4><p><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
          <?php endwhile; else : ?>
            <div class="vietnam-malaria-item"><div class="vietnam-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div><div class="vietnam-malaria-item-text"><h4>Rural &amp; Forest Areas</h4><p>Highland and forested areas, especially border regions, have higher malaria risk.</p></div></div>
            <div class="vietnam-malaria-item"><div class="vietnam-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div><div class="vietnam-malaria-item-text"><h4>Cities &amp; Coast</h4><p>Hanoi, Ho Chi Minh City, and popular coastal resorts have minimal risk.</p></div></div>
          <?php endif; ?>
        </div>
        <div class="vietnam-malaria-actions"><a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Check Your Risk <i class="fas fa-arrow-right"></i></a></div>
      </div>
    </div>
  </div>
</section>

<!-- Health Tips -->
<section class="vietnam-health-section">
  <div class="section-container">
    <div class="vietnam-health-header">
      <div class="section-badge"><span class="pulse-dot"><span></span><span></span></span><span class="section-badge-text"><?php echo esc_html(ep_field('td_health_badge', 'HEALTH ADVICE')); ?></span></div>
      <h2 class="vietnam-health-title"><?php echo esc_html(ep_field('td_health_title', 'Stay healthy in Vietnam')); ?></h2>
      <p class="vietnam-health-subtitle"><?php echo esc_html(ep_field('td_health_subtitle', 'Essential tips for a safe adventure')); ?></p>
    </div>
    <div class="vietnam-health-grid">
      <?php if (have_rows('td_travel_tips')) : while (have_rows('td_travel_tips')) : the_row(); ?>
        <div class="vietnam-health-card-visual"><div class="vietnam-health-bg"><img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" /><div class="vietnam-health-overlay"></div></div><div class="vietnam-health-content"><div class="vietnam-health-icon-wrapper"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><h3 class="vietnam-health-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3><p class="vietnam-health-card-desc"><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="vietnam-health-card-visual"><div class="vietnam-health-bg"><img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=600&h=800&fit=crop" alt="Water safety" /><div class="vietnam-health-overlay"></div></div><div class="vietnam-health-content"><div class="vietnam-health-icon-wrapper"><i class="fas fa-glass-water"></i></div><h3 class="vietnam-health-card-title">Food &amp; Water</h3><p class="vietnam-health-card-desc">Drink bottled water only. Enjoy street food from busy stalls with high turnover.</p></div></div>
        <div class="vietnam-health-card-visual"><div class="vietnam-health-bg"><img src="https://images.unsplash.com/photo-1533619043865-1c2e2f32ff5f?w=600&h=800&fit=crop" alt="Sun safety" /><div class="vietnam-health-overlay"></div></div><div class="vietnam-health-content"><div class="vietnam-health-icon-wrapper"><i class="fas fa-sun"></i></div><h3 class="vietnam-health-card-title">Sun Safety</h3><p class="vietnam-health-card-desc">Tropical humidity and heat. Use SPF 50+, stay hydrated, and rest during midday.</p></div></div>
        <div class="vietnam-health-card-visual"><div class="vietnam-health-bg"><img src="https://images.unsplash.com/photo-1551817958-29d0660f98de?w=600&h=800&fit=crop" alt="Insect protection" /><div class="vietnam-health-overlay"></div></div><div class="vietnam-health-content"><div class="vietnam-health-icon-wrapper"><i class="fas fa-mosquito"></i></div><h3 class="vietnam-health-card-title">Insects</h3><p class="vietnam-health-card-desc">Use DEET repellent. Dengue-carrying mosquitoes bite during the day.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="vietnam-cta-section">
  <div class="vietnam-cta-glow-1"></div><div class="vietnam-cta-glow-2"></div><div class="vietnam-cta-dots"></div>
  <div class="section-container">
    <div class="vietnam-cta-content">
      <h2 class="vietnam-cta-title"><?php echo esc_html(ep_field('td_cta_title', 'Ready for your Vietnam adventure?')); ?></h2>
      <p class="vietnam-cta-description"><?php echo esc_html(ep_field('td_cta_description', 'Book your travel health consultation at our Ashford clinic.')); ?></p>
      <div class="vietnam-cta-actions">
        <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta vietnam-cta-button-white"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
        <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta vietnam-cta-button-outlined"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
      <div class="vietnam-cta-checks">
        <div class="vietnam-cta-check"><i class="fas fa-plane-departure"></i><span>Travel Ready</span></div>
        <div class="vietnam-cta-check"><i class="fas fa-user-doctor"></i><span>Expert Advice</span></div>
        <div class="vietnam-cta-check"><i class="fas fa-shield-virus"></i><span>All Vaccines</span></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
