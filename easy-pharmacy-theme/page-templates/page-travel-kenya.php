<?php
/**
 * Template Name: Travel - Kenya
 * @package Easy_Pharmacy
 */

get_header();

$prefix = 'kenya';
$country = ep_field('td_country_name', 'Kenya');
?>

<!-- Hero Section -->
<section class="kenya-hero-section">
  <div class="kenya-hero-overlay"></div>
  <div class="kenya-hero-dots"></div>
  <div class="section-container">
    <div class="kenya-hero-grid">
      <div class="kenya-hero-content">
        <div class="hero-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="hero-badge-text"><?php echo esc_html(ep_field('td_hero_badge', 'KENYA TRAVEL HEALTH')); ?></span>
        </div>
        <h1 class="hero-title" style="color: white;">
          <?php echo esc_html(ep_field('td_hero_title_line1', 'Travel Vaccinations for')); ?><br />
          <span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html($country); ?></span>
        </h1>
        <p class="kenya-hero-description">
          <?php echo esc_html(ep_field('td_hero_description', 'Expert advice and vaccinations for your Kenya safari or holiday. Yellow Fever, Malaria, and more. Get protected with Ashford\'s specialists.')); ?>
        </p>
        <div class="kenya-hero-actions">
          <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta kenya-hero-btn-primary">
            <?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta kenya-hero-btn-secondary">
            <i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?>
          </a>
        </div>
      </div>
      <div class="kenya-hero-visual"></div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="kenya-stats-section">
  <div class="kenya-stats-shimmer"></div>
  <div class="section-container">
    <div class="kenya-stats-grid">
      <?php if (have_rows('td_stats')) : while (have_rows('td_stats')) : the_row(); ?>
        <div class="kenya-stat-item">
          <div class="kenya-stat-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <div class="kenya-stat-content"><p class="kenya-stat-number"><?php echo esc_html(get_sub_field('number')); ?></p><p class="kenya-stat-label"><?php echo esc_html(get_sub_field('label')); ?></p></div>
        </div>
      <?php endwhile; else : ?>
        <div class="kenya-stat-item"><div class="kenya-stat-icon"><i class="fas fa-syringe"></i></div><div class="kenya-stat-content"><p class="kenya-stat-number">6-8</p><p class="kenya-stat-label">Vaccines Recommended</p></div></div>
        <div class="kenya-stat-item"><div class="kenya-stat-icon"><i class="fas fa-calendar-alt"></i></div><div class="kenya-stat-content"><p class="kenya-stat-number">6-8</p><p class="kenya-stat-label">Weeks Before Travel</p></div></div>
        <div class="kenya-stat-item"><div class="kenya-stat-icon"><i class="fas fa-shield-halved"></i></div><div class="kenya-stat-content"><p class="kenya-stat-number">Full</p><p class="kenya-stat-label">Protection Available</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Vaccines Section -->
<section class="kenya-vaccines-section">
  <div class="section-container">
    <div class="kenya-vaccines-header">
      <h2 class="kenya-vaccines-title"><?php echo esc_html(ep_field('td_vaccines_title', 'Protect yourself in ' . $country)); ?></h2>
      <div class="kenya-vaccines-divider"></div>
      <p class="kenya-vaccines-description"><?php echo esc_html(ep_field('td_vaccines_description', 'These vaccinations are recommended for most travellers to ' . $country)); ?></p>
    </div>
    <div class="kenya-vaccines-grid">
      <?php if (have_rows('td_vaccinations_required')) : while (have_rows('td_vaccinations_required')) : the_row(); ?>
        <div class="kenya-vaccine-card">
          <div class="kenya-vaccine-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <div class="kenya-vaccine-content">
            <div class="kenya-vaccine-head">
              <h3 class="kenya-vaccine-name"><?php echo esc_html(get_sub_field('name')); ?></h3>
              <span class="kenya-badge-<?php echo esc_attr(get_sub_field('badge_color')); ?>"><?php echo esc_html(get_sub_field('badge_text')); ?></span>
            </div>
            <p class="kenya-vaccine-short"><?php echo esc_html(get_sub_field('short_desc')); ?></p>
            <p class="kenya-vaccine-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="kenya-vaccine-card"><div class="kenya-vaccine-icon"><i class="fas fa-shield-virus"></i></div><div class="kenya-vaccine-content"><div class="kenya-vaccine-head"><h3 class="kenya-vaccine-name">Yellow Fever</h3><span class="kenya-badge-purple">Essential</span></div><p class="kenya-vaccine-short">Mosquito-borne virus</p><p class="kenya-vaccine-desc">Certificate often required for entry. We are an official Yellow Fever Centre.</p></div></div>
        <div class="kenya-vaccine-card"><div class="kenya-vaccine-icon"><i class="fas fa-virus"></i></div><div class="kenya-vaccine-content"><div class="kenya-vaccine-head"><h3 class="kenya-vaccine-name">Hepatitis A</h3><span class="kenya-badge-purple">Essential</span></div><p class="kenya-vaccine-short">Food &amp; water safety</p><p class="kenya-vaccine-desc">Spread through contaminated food and water. Recommended for all travellers.</p></div></div>
        <div class="kenya-vaccine-card"><div class="kenya-vaccine-icon"><i class="fas fa-bacteria"></i></div><div class="kenya-vaccine-content"><div class="kenya-vaccine-head"><h3 class="kenya-vaccine-name">Typhoid</h3><span class="kenya-badge-purple">Essential</span></div><p class="kenya-vaccine-short">Food &amp; water safety</p><p class="kenya-vaccine-desc">Recommended for most travellers, especially if visiting rural areas.</p></div></div>
        <div class="kenya-vaccine-card"><div class="kenya-vaccine-icon"><i class="fas fa-syringe"></i></div><div class="kenya-vaccine-content"><div class="kenya-vaccine-head"><h3 class="kenya-vaccine-name">Tetanus</h3><span class="kenya-badge-purple">Essential</span></div><p class="kenya-vaccine-short">Routine booster</p><p class="kenya-vaccine-desc">Ensure your routine UK schedule is up to date. A booster may be needed.</p></div></div>
        <div class="kenya-vaccine-card"><div class="kenya-vaccine-icon"><i class="fas fa-dog"></i></div><div class="kenya-vaccine-content"><div class="kenya-vaccine-head"><h3 class="kenya-vaccine-name">Rabies</h3><span class="kenya-badge-gray">Recommended</span></div><p class="kenya-vaccine-short">Animal contact risk</p><p class="kenya-vaccine-desc">High risk in Kenya. Recommended for those working with animals or in remote areas.</p></div></div>
        <div class="kenya-vaccine-card"><div class="kenya-vaccine-icon"><i class="fas fa-notes-medical"></i></div><div class="kenya-vaccine-content"><div class="kenya-vaccine-head"><h3 class="kenya-vaccine-name">Hepatitis B</h3><span class="kenya-badge-gray">Consider</span></div><p class="kenya-vaccine-short">Blood/fluid contact</p><p class="kenya-vaccine-desc">Consider for longer stays or if you might need medical treatment.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Malaria Section -->
<section class="kenya-malaria-section">
  <div class="section-container">
    <div class="kenya-malaria-layout">
      <div class="kenya-malaria-visual">
        <div class="kenya-malaria-image-card">
          <img src="<?php echo esc_url(ep_field('td_malaria_image', 'https://images.unsplash.com/photo-1516426122078-c23e76319801?w=800&h=1000&fit=crop')); ?>" alt="<?php echo esc_attr('Safari in ' . $country); ?>" class="kenya-malaria-image" />
          <div class="kenya-malaria-overlay"></div>
          <div class="kenya-malaria-badge">
            <div class="kenya-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div>
            <span class="kenya-malaria-badge-text">Expert Advice</span>
          </div>
        </div>
      </div>
      <div class="kenya-malaria-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html(ep_field('td_malaria_badge', 'HIGH RISK AREA')); ?></span>
        </div>
        <h2 class="kenya-malaria-title"><?php echo esc_html(ep_field('td_malaria_title', 'Malaria Risk in ' . $country)); ?></h2>
        <p class="kenya-malaria-intro"><?php echo esc_html(ep_field('td_malaria_intro', 'Malaria risk is high throughout most of Kenya, including safari parks. Antimalarials are usually recommended.')); ?></p>
        <div class="kenya-malaria-info-grid">
          <?php if (have_rows('td_malaria_risks')) : while (have_rows('td_malaria_risks')) : the_row(); ?>
            <div class="kenya-malaria-item">
              <div class="kenya-malaria-item-icon <?php echo esc_attr(get_sub_field('risk_level')); ?>"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
              <div class="kenya-malaria-item-text"><h4><?php echo esc_html(get_sub_field('title')); ?></h4><p><?php echo esc_html(get_sub_field('description')); ?></p></div>
            </div>
          <?php endwhile; else : ?>
            <div class="kenya-malaria-item"><div class="kenya-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div><div class="kenya-malaria-item-text"><h4>High Risk Areas</h4><p>Most of the country below 2500m, including coastal areas and game parks.</p></div></div>
            <div class="kenya-malaria-item"><div class="kenya-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div><div class="kenya-malaria-item-text"><h4>Low Risk Areas</h4><p>Nairobi and areas above 2500m have lower risk, but awareness is still key.</p></div></div>
          <?php endif; ?>
        </div>
        <div class="kenya-malaria-actions">
          <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Check Your Risk <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Health Tips Section -->
<section class="kenya-health-section">
  <div class="section-container">
    <div class="kenya-health-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('td_health_badge', 'HEALTH ADVICE')); ?></span>
      </div>
      <h2 class="kenya-health-title"><?php echo esc_html(ep_field('td_health_title', 'Stay healthy in ' . $country)); ?></h2>
      <p class="kenya-health-subtitle"><?php echo esc_html(ep_field('td_health_subtitle', 'Essential tips for a safe safari')); ?></p>
    </div>
    <div class="kenya-health-grid">
      <?php if (have_rows('td_travel_tips')) : while (have_rows('td_travel_tips')) : the_row(); ?>
        <div class="kenya-health-card-visual">
          <div class="kenya-health-bg">
            <img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" />
            <div class="kenya-health-overlay"></div>
          </div>
          <div class="kenya-health-content">
            <div class="kenya-health-icon-wrapper"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
            <h3 class="kenya-health-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p class="kenya-health-card-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="kenya-health-card-visual"><div class="kenya-health-bg"><img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=600&h=800&fit=crop" alt="Water safety" /><div class="kenya-health-overlay"></div></div><div class="kenya-health-content"><div class="kenya-health-icon-wrapper"><i class="fas fa-glass-water"></i></div><h3 class="kenya-health-card-title">Food &amp; Water</h3><p class="kenya-health-card-desc">Drink bottled water only. Avoid ice and salads. Eat freshly cooked food.</p></div></div>
        <div class="kenya-health-card-visual"><div class="kenya-health-bg"><img src="https://images.unsplash.com/photo-1533619043865-1c2e2f32ff5f?w=600&h=800&fit=crop" alt="Sun safety" /><div class="kenya-health-overlay"></div></div><div class="kenya-health-content"><div class="kenya-health-icon-wrapper"><i class="fas fa-sun"></i></div><h3 class="kenya-health-card-title">Sun Safety</h3><p class="kenya-health-card-desc">Equatorial sun is strong. High SPF, hat, and sunglasses are essential.</p></div></div>
        <div class="kenya-health-card-visual"><div class="kenya-health-bg"><img src="https://images.unsplash.com/photo-1551817958-29d0660f98de?w=600&h=800&fit=crop" alt="Insect protection" /><div class="kenya-health-overlay"></div></div><div class="kenya-health-content"><div class="kenya-health-icon-wrapper"><i class="fas fa-mosquito"></i></div><h3 class="kenya-health-card-title">Insects</h3><p class="kenya-health-card-desc">Use 50% DEET repellent. Wear long sleeves/trousers at dawn and dusk.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="kenya-cta-section">
  <div class="kenya-cta-glow-1"></div><div class="kenya-cta-glow-2"></div><div class="kenya-cta-dots"></div>
  <div class="section-container">
    <div class="kenya-cta-content">
      <h2 class="kenya-cta-title"><?php echo esc_html(ep_field('td_cta_title', 'Ready for your Kenya safari?')); ?></h2>
      <p class="kenya-cta-description"><?php echo esc_html(ep_field('td_cta_description', 'Book your travel health consultation at our Ashford clinic. Get expert advice and all recommended vaccinations in one visit.')); ?></p>
      <div class="kenya-cta-actions">
        <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta kenya-cta-button-white"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
        <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta kenya-cta-button-outlined"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
      <div class="kenya-cta-checks">
        <div class="kenya-cta-check"><i class="fas fa-plane-departure"></i><span>Travel Ready</span></div>
        <div class="kenya-cta-check"><i class="fas fa-user-doctor"></i><span>Expert Advice</span></div>
        <div class="kenya-cta-check"><i class="fas fa-shield-virus"></i><span>All Vaccines</span></div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
