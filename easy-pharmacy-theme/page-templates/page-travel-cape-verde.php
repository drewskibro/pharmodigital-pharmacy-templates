<?php
/**
 * Template Name: Travel - Cape Verde
 * @package Easy_Pharmacy
 */

get_header();

$country = ep_field('td_country_name', 'Cape Verde');
?>

<section class="capeverde-hero-section">
  <div class="capeverde-hero-overlay"></div>
  <div class="capeverde-hero-dots"></div>
  <div class="section-container">
    <div class="capeverde-hero-grid">
      <div class="capeverde-hero-content">
        <div class="hero-badge"><span class="pulse-dot"><span></span><span></span></span><span class="hero-badge-text"><?php echo esc_html(ep_field('td_hero_badge', 'CAPE VERDE TRAVEL HEALTH')); ?></span></div>
        <h1 class="hero-title" style="color: white;"><?php echo esc_html(ep_field('td_hero_title_line1', 'Travel Vaccinations for')); ?><br /><span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html($country); ?></span></h1>
        <p class="capeverde-hero-description"><?php echo esc_html(ep_field('td_hero_description', 'Expert advice and vaccinations for your Cape Verde holiday. Hepatitis A, Typhoid, and more. Get protected before you travel.')); ?></p>
        <div class="capeverde-hero-actions">
          <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta capeverde-hero-btn-primary"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
          <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta capeverde-hero-btn-secondary"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
        </div>
      </div>
      <div class="capeverde-hero-visual"></div>
    </div>
  </div>
</section>

<section class="capeverde-stats-section">
  <div class="capeverde-stats-shimmer"></div>
  <div class="section-container">
    <div class="capeverde-stats-grid">
      <?php if (have_rows('td_stats')) : while (have_rows('td_stats')) : the_row(); ?>
        <div class="capeverde-stat-item"><div class="capeverde-stat-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="capeverde-stat-content"><p class="capeverde-stat-number"><?php echo esc_html(get_sub_field('number')); ?></p><p class="capeverde-stat-label"><?php echo esc_html(get_sub_field('label')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="capeverde-stat-item"><div class="capeverde-stat-icon"><i class="fas fa-syringe"></i></div><div class="capeverde-stat-content"><p class="capeverde-stat-number">4-6</p><p class="capeverde-stat-label">Vaccines Recommended</p></div></div>
        <div class="capeverde-stat-item"><div class="capeverde-stat-icon"><i class="fas fa-calendar-alt"></i></div><div class="capeverde-stat-content"><p class="capeverde-stat-number">4-6</p><p class="capeverde-stat-label">Weeks Before Travel</p></div></div>
        <div class="capeverde-stat-item"><div class="capeverde-stat-icon"><i class="fas fa-shield-halved"></i></div><div class="capeverde-stat-content"><p class="capeverde-stat-number">Full</p><p class="capeverde-stat-label">Protection Available</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="capeverde-vaccines-section">
  <div class="section-container">
    <div class="capeverde-vaccines-header">
      <h2 class="capeverde-vaccines-title"><?php echo esc_html(ep_field('td_vaccines_title', 'Protect yourself in Cape Verde')); ?></h2>
      <div class="capeverde-vaccines-divider"></div>
      <p class="capeverde-vaccines-description"><?php echo esc_html(ep_field('td_vaccines_description', 'These vaccinations are recommended for most travellers to Cape Verde')); ?></p>
    </div>
    <div class="capeverde-vaccines-grid">
      <?php if (have_rows('td_vaccinations_required')) : while (have_rows('td_vaccinations_required')) : the_row(); ?>
        <div class="capeverde-vaccine-card"><div class="capeverde-vaccine-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="capeverde-vaccine-content"><div class="capeverde-vaccine-head"><h3 class="capeverde-vaccine-name"><?php echo esc_html(get_sub_field('name')); ?></h3><span class="capeverde-badge-<?php echo esc_attr(get_sub_field('badge_color')); ?>"><?php echo esc_html(get_sub_field('badge_text')); ?></span></div><p class="capeverde-vaccine-short"><?php echo esc_html(get_sub_field('short_desc')); ?></p><p class="capeverde-vaccine-desc"><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="capeverde-vaccine-card"><div class="capeverde-vaccine-icon"><i class="fas fa-virus"></i></div><div class="capeverde-vaccine-content"><div class="capeverde-vaccine-head"><h3 class="capeverde-vaccine-name">Hepatitis A</h3><span class="capeverde-badge-purple">Essential</span></div><p class="capeverde-vaccine-short">Food &amp; water safety</p><p class="capeverde-vaccine-desc">Recommended for all travellers to Cape Verde.</p></div></div>
        <div class="capeverde-vaccine-card"><div class="capeverde-vaccine-icon"><i class="fas fa-bacteria"></i></div><div class="capeverde-vaccine-content"><div class="capeverde-vaccine-head"><h3 class="capeverde-vaccine-name">Typhoid</h3><span class="capeverde-badge-purple">Essential</span></div><p class="capeverde-vaccine-short">Food &amp; water safety</p><p class="capeverde-vaccine-desc">Recommended for most travellers, especially outside resorts.</p></div></div>
        <div class="capeverde-vaccine-card"><div class="capeverde-vaccine-icon"><i class="fas fa-syringe"></i></div><div class="capeverde-vaccine-content"><div class="capeverde-vaccine-head"><h3 class="capeverde-vaccine-name">Tetanus</h3><span class="capeverde-badge-purple">Essential</span></div><p class="capeverde-vaccine-short">Routine booster</p><p class="capeverde-vaccine-desc">Ensure your routine UK schedule is up to date.</p></div></div>
        <div class="capeverde-vaccine-card"><div class="capeverde-vaccine-icon"><i class="fas fa-notes-medical"></i></div><div class="capeverde-vaccine-content"><div class="capeverde-vaccine-head"><h3 class="capeverde-vaccine-name">Hepatitis B</h3><span class="capeverde-badge-gray">Consider</span></div><p class="capeverde-vaccine-short">Blood/fluid contact</p><p class="capeverde-vaccine-desc">Consider for longer stays or adventure activities.</p></div></div>
        <div class="capeverde-vaccine-card"><div class="capeverde-vaccine-icon"><i class="fas fa-dog"></i></div><div class="capeverde-vaccine-content"><div class="capeverde-vaccine-head"><h3 class="capeverde-vaccine-name">Rabies</h3><span class="capeverde-badge-gray">Consider</span></div><p class="capeverde-vaccine-short">Animal contact risk</p><p class="capeverde-vaccine-desc">Consider if spending time outdoors or with animals.</p></div></div>
        <div class="capeverde-vaccine-card"><div class="capeverde-vaccine-icon"><i class="fas fa-shield-virus"></i></div><div class="capeverde-vaccine-content"><div class="capeverde-vaccine-head"><h3 class="capeverde-vaccine-name">Yellow Fever</h3><span class="capeverde-badge-gray">If Required</span></div><p class="capeverde-vaccine-short">Entry requirement</p><p class="capeverde-vaccine-desc">May be required if arriving from a country with Yellow Fever risk.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="capeverde-malaria-section">
  <div class="section-container">
    <div class="capeverde-malaria-layout">
      <div class="capeverde-malaria-visual">
        <div class="capeverde-malaria-image-card">
          <img src="<?php echo esc_url(ep_field('td_malaria_image', 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?w=800&h=1000&fit=crop')); ?>" alt="Cape Verde travel" class="capeverde-malaria-image" />
          <div class="capeverde-malaria-overlay"></div>
          <div class="capeverde-malaria-badge"><div class="capeverde-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div><span class="capeverde-malaria-badge-text">Expert Advice</span></div>
        </div>
      </div>
      <div class="capeverde-malaria-content">
        <div class="section-badge"><span class="pulse-dot"><span></span><span></span></span><span class="section-badge-text"><?php echo esc_html(ep_field('td_malaria_badge', 'LOW RISK')); ?></span></div>
        <h2 class="capeverde-malaria-title"><?php echo esc_html(ep_field('td_malaria_title', 'Malaria Risk in Cape Verde')); ?></h2>
        <p class="capeverde-malaria-intro"><?php echo esc_html(ep_field('td_malaria_intro', 'Malaria risk in Cape Verde is generally low. Santiago island has some risk during the rainy season (August-November). Most tourist islands are malaria-free.')); ?></p>
        <div class="capeverde-malaria-info-grid">
          <?php if (have_rows('td_malaria_risks')) : while (have_rows('td_malaria_risks')) : the_row(); ?>
            <div class="capeverde-malaria-item"><div class="capeverde-malaria-item-icon <?php echo esc_attr(get_sub_field('risk_level')); ?>"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="capeverde-malaria-item-text"><h4><?php echo esc_html(get_sub_field('title')); ?></h4><p><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
          <?php endwhile; else : ?>
            <div class="capeverde-malaria-item"><div class="capeverde-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div><div class="capeverde-malaria-item-text"><h4>Santiago Island</h4><p>Some risk during rainy season (Aug-Nov). Consider antimalarials.</p></div></div>
            <div class="capeverde-malaria-item"><div class="capeverde-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div><div class="capeverde-malaria-item-text"><h4>Other Islands</h4><p>Sal, Boa Vista, and other tourist islands have very low or no risk.</p></div></div>
          <?php endif; ?>
        </div>
        <div class="capeverde-malaria-actions"><a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Check Your Risk <i class="fas fa-arrow-right"></i></a></div>
      </div>
    </div>
  </div>
</section>

<section class="capeverde-health-section">
  <div class="section-container">
    <div class="capeverde-health-header">
      <div class="section-badge"><span class="pulse-dot"><span></span><span></span></span><span class="section-badge-text"><?php echo esc_html(ep_field('td_health_badge', 'HEALTH ADVICE')); ?></span></div>
      <h2 class="capeverde-health-title"><?php echo esc_html(ep_field('td_health_title', 'Stay healthy in Cape Verde')); ?></h2>
      <p class="capeverde-health-subtitle"><?php echo esc_html(ep_field('td_health_subtitle', 'Essential tips for a safe holiday')); ?></p>
    </div>
    <div class="capeverde-health-grid">
      <?php if (have_rows('td_travel_tips')) : while (have_rows('td_travel_tips')) : the_row(); ?>
        <div class="capeverde-health-card-visual"><div class="capeverde-health-bg"><img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" /><div class="capeverde-health-overlay"></div></div><div class="capeverde-health-content"><div class="capeverde-health-icon-wrapper"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><h3 class="capeverde-health-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3><p class="capeverde-health-card-desc"><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="capeverde-health-card-visual"><div class="capeverde-health-bg"><img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=600&h=800&fit=crop" alt="Water safety" /><div class="capeverde-health-overlay"></div></div><div class="capeverde-health-content"><div class="capeverde-health-icon-wrapper"><i class="fas fa-glass-water"></i></div><h3 class="capeverde-health-card-title">Food &amp; Water</h3><p class="capeverde-health-card-desc">Drink bottled water. Tap water is not always safe outside resorts.</p></div></div>
        <div class="capeverde-health-card-visual"><div class="capeverde-health-bg"><img src="https://images.unsplash.com/photo-1533619043865-1c2e2f32ff5f?w=600&h=800&fit=crop" alt="Sun safety" /><div class="capeverde-health-overlay"></div></div><div class="capeverde-health-content"><div class="capeverde-health-icon-wrapper"><i class="fas fa-sun"></i></div><h3 class="capeverde-health-card-title">Sun Safety</h3><p class="capeverde-health-card-desc">Strong Atlantic sun. Use SPF 50+, wear a hat, and drink plenty of water.</p></div></div>
        <div class="capeverde-health-card-visual"><div class="capeverde-health-bg"><img src="https://images.unsplash.com/photo-1551817958-29d0660f98de?w=600&h=800&fit=crop" alt="Insect protection" /><div class="capeverde-health-overlay"></div></div><div class="capeverde-health-content"><div class="capeverde-health-icon-wrapper"><i class="fas fa-mosquito"></i></div><h3 class="capeverde-health-card-title">Insects</h3><p class="capeverde-health-card-desc">Use repellent during evenings. Dengue risk exists in some areas.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="capeverde-cta-section">
  <div class="capeverde-cta-glow-1"></div><div class="capeverde-cta-glow-2"></div><div class="capeverde-cta-dots"></div>
  <div class="section-container">
    <div class="capeverde-cta-content">
      <h2 class="capeverde-cta-title"><?php echo esc_html(ep_field('td_cta_title', 'Ready for your Cape Verde holiday?')); ?></h2>
      <p class="capeverde-cta-description"><?php echo esc_html(ep_field('td_cta_description', 'Book your travel health consultation at our Ashford clinic.')); ?></p>
      <div class="capeverde-cta-actions">
        <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta capeverde-cta-button-white"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
        <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta capeverde-cta-button-outlined"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
      <div class="capeverde-cta-checks">
        <div class="capeverde-cta-check"><i class="fas fa-plane-departure"></i><span>Travel Ready</span></div>
        <div class="capeverde-cta-check"><i class="fas fa-user-doctor"></i><span>Expert Advice</span></div>
        <div class="capeverde-cta-check"><i class="fas fa-shield-virus"></i><span>All Vaccines</span></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
