<?php
/**
 * Template Name: Travel - India
 * @package Easy_Pharmacy
 */

get_header();

$country = ep_field('td_country_name', 'India');
?>

<section class="india-hero-section">
  <div class="india-hero-overlay"></div>
  <div class="india-hero-dots"></div>
  <div class="section-container">
    <div class="india-hero-grid">
      <div class="india-hero-content">
        <div class="hero-badge"><span class="pulse-dot"><span></span><span></span></span><span class="hero-badge-text"><?php echo esc_html(ep_field('td_hero_badge', 'INDIA TRAVEL HEALTH')); ?></span></div>
        <h1 class="hero-title" style="color: white;"><?php echo esc_html(ep_field('td_hero_title_line1', 'Travel Vaccinations for')); ?><br /><span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html($country); ?></span></h1>
        <p class="india-hero-description"><?php echo esc_html(ep_field('td_hero_description', 'Expert advice and vaccinations for your India trip. Comprehensive protection against Hepatitis, Typhoid, Rabies, and more.')); ?></p>
        <div class="india-hero-actions">
          <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta india-hero-btn-primary"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
          <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta india-hero-btn-secondary"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
        </div>
      </div>
      <div class="india-hero-visual"></div>
    </div>
  </div>
</section>

<section class="india-stats-section">
  <div class="india-stats-shimmer"></div>
  <div class="section-container">
    <div class="india-stats-grid">
      <?php if (have_rows('td_stats')) : while (have_rows('td_stats')) : the_row(); ?>
        <div class="india-stat-item"><div class="india-stat-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="india-stat-content"><p class="india-stat-number"><?php echo esc_html(get_sub_field('number')); ?></p><p class="india-stat-label"><?php echo esc_html(get_sub_field('label')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="india-stat-item"><div class="india-stat-icon"><i class="fas fa-syringe"></i></div><div class="india-stat-content"><p class="india-stat-number">6-8</p><p class="india-stat-label">Vaccines Recommended</p></div></div>
        <div class="india-stat-item"><div class="india-stat-icon"><i class="fas fa-calendar-alt"></i></div><div class="india-stat-content"><p class="india-stat-number">6-8</p><p class="india-stat-label">Weeks Before Travel</p></div></div>
        <div class="india-stat-item"><div class="india-stat-icon"><i class="fas fa-shield-halved"></i></div><div class="india-stat-content"><p class="india-stat-number">Full</p><p class="india-stat-label">Protection Available</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="india-vaccines-section">
  <div class="section-container">
    <div class="india-vaccines-header">
      <h2 class="india-vaccines-title"><?php echo esc_html(ep_field('td_vaccines_title', 'Protect yourself in India')); ?></h2>
      <div class="india-vaccines-divider"></div>
      <p class="india-vaccines-description"><?php echo esc_html(ep_field('td_vaccines_description', 'These vaccinations are recommended for most travellers to India')); ?></p>
    </div>
    <div class="india-vaccines-grid">
      <?php if (have_rows('td_vaccinations_required')) : while (have_rows('td_vaccinations_required')) : the_row(); ?>
        <div class="india-vaccine-card"><div class="india-vaccine-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="india-vaccine-content"><div class="india-vaccine-head"><h3 class="india-vaccine-name"><?php echo esc_html(get_sub_field('name')); ?></h3><span class="india-badge-<?php echo esc_attr(get_sub_field('badge_color')); ?>"><?php echo esc_html(get_sub_field('badge_text')); ?></span></div><p class="india-vaccine-short"><?php echo esc_html(get_sub_field('short_desc')); ?></p><p class="india-vaccine-desc"><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="india-vaccine-card"><div class="india-vaccine-icon"><i class="fas fa-virus"></i></div><div class="india-vaccine-content"><div class="india-vaccine-head"><h3 class="india-vaccine-name">Hepatitis A</h3><span class="india-badge-purple">Essential</span></div><p class="india-vaccine-short">Food &amp; water safety</p><p class="india-vaccine-desc">Highly recommended for all travellers to India.</p></div></div>
        <div class="india-vaccine-card"><div class="india-vaccine-icon"><i class="fas fa-bacteria"></i></div><div class="india-vaccine-content"><div class="india-vaccine-head"><h3 class="india-vaccine-name">Typhoid</h3><span class="india-badge-purple">Essential</span></div><p class="india-vaccine-short">Food &amp; water safety</p><p class="india-vaccine-desc">High risk throughout India, especially with street food.</p></div></div>
        <div class="india-vaccine-card"><div class="india-vaccine-icon"><i class="fas fa-notes-medical"></i></div><div class="india-vaccine-content"><div class="india-vaccine-head"><h3 class="india-vaccine-name">Hepatitis B</h3><span class="india-badge-purple">Essential</span></div><p class="india-vaccine-short">Blood/fluid contact</p><p class="india-vaccine-desc">Recommended for all travellers, especially longer stays.</p></div></div>
        <div class="india-vaccine-card"><div class="india-vaccine-icon"><i class="fas fa-dog"></i></div><div class="india-vaccine-content"><div class="india-vaccine-head"><h3 class="india-vaccine-name">Rabies</h3><span class="india-badge-purple">Essential</span></div><p class="india-vaccine-short">Animal contact risk</p><p class="india-vaccine-desc">India has the highest rate of rabies globally. Stray dogs are extremely common.</p></div></div>
        <div class="india-vaccine-card"><div class="india-vaccine-icon"><i class="fas fa-brain"></i></div><div class="india-vaccine-content"><div class="india-vaccine-head"><h3 class="india-vaccine-name">Japanese Encephalitis</h3><span class="india-badge-gray">Recommended</span></div><p class="india-vaccine-short">Mosquito-borne virus</p><p class="india-vaccine-desc">Consider for rural travel, especially during monsoon season.</p></div></div>
        <div class="india-vaccine-card"><div class="india-vaccine-icon"><i class="fas fa-syringe"></i></div><div class="india-vaccine-content"><div class="india-vaccine-head"><h3 class="india-vaccine-name">Tetanus/Diphtheria/Polio</h3><span class="india-badge-gray">Recommended</span></div><p class="india-vaccine-short">Routine boosters</p><p class="india-vaccine-desc">Ensure your routine UK schedule is up to date before travel.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="india-malaria-section">
  <div class="section-container">
    <div class="india-malaria-layout">
      <div class="india-malaria-visual">
        <div class="india-malaria-image-card">
          <img src="<?php echo esc_url(ep_field('td_malaria_image', 'https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=800&h=1000&fit=crop')); ?>" alt="India travel" class="india-malaria-image" />
          <div class="india-malaria-overlay"></div>
          <div class="india-malaria-badge"><div class="india-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div><span class="india-malaria-badge-text">Expert Advice</span></div>
        </div>
      </div>
      <div class="india-malaria-content">
        <div class="section-badge"><span class="pulse-dot"><span></span><span></span></span><span class="section-badge-text"><?php echo esc_html(ep_field('td_malaria_badge', 'HIGH RISK COUNTRY')); ?></span></div>
        <h2 class="india-malaria-title"><?php echo esc_html(ep_field('td_malaria_title', 'Malaria Risk in India')); ?></h2>
        <p class="india-malaria-intro"><?php echo esc_html(ep_field('td_malaria_intro', 'Malaria risk exists throughout India, especially during and after monsoon season. Antimalarials are recommended for most areas.')); ?></p>
        <div class="india-malaria-info-grid">
          <?php if (have_rows('td_malaria_risks')) : while (have_rows('td_malaria_risks')) : the_row(); ?>
            <div class="india-malaria-item"><div class="india-malaria-item-icon <?php echo esc_attr(get_sub_field('risk_level')); ?>"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="india-malaria-item-text"><h4><?php echo esc_html(get_sub_field('title')); ?></h4><p><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
          <?php endwhile; else : ?>
            <div class="india-malaria-item"><div class="india-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div><div class="india-malaria-item-text"><h4>Most of India</h4><p>Risk throughout, especially rural areas. Higher risk during and after monsoon (June-October).</p></div></div>
            <div class="india-malaria-item"><div class="india-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div><div class="india-malaria-item-text"><h4>Some Hill Stations</h4><p>Areas above 2000m such as Shimla and Darjeeling have lower risk.</p></div></div>
          <?php endif; ?>
        </div>
        <div class="india-malaria-actions"><a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Check Your Risk <i class="fas fa-arrow-right"></i></a></div>
      </div>
    </div>
  </div>
</section>

<section class="india-health-section">
  <div class="section-container">
    <div class="india-health-header">
      <div class="section-badge"><span class="pulse-dot"><span></span><span></span></span><span class="section-badge-text"><?php echo esc_html(ep_field('td_health_badge', 'HEALTH ADVICE')); ?></span></div>
      <h2 class="india-health-title"><?php echo esc_html(ep_field('td_health_title', 'Stay healthy in India')); ?></h2>
      <p class="india-health-subtitle"><?php echo esc_html(ep_field('td_health_subtitle', 'Essential tips for a safe trip')); ?></p>
    </div>
    <div class="india-health-grid">
      <?php if (have_rows('td_travel_tips')) : while (have_rows('td_travel_tips')) : the_row(); ?>
        <div class="india-health-card-visual"><div class="india-health-bg"><img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" /><div class="india-health-overlay"></div></div><div class="india-health-content"><div class="india-health-icon-wrapper"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><h3 class="india-health-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3><p class="india-health-card-desc"><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="india-health-card-visual"><div class="india-health-bg"><img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=600&h=800&fit=crop" alt="Water safety" /><div class="india-health-overlay"></div></div><div class="india-health-content"><div class="india-health-icon-wrapper"><i class="fas fa-glass-water"></i></div><h3 class="india-health-card-title">Food &amp; Water</h3><p class="india-health-card-desc">Only drink sealed bottled water. Avoid ice, salads, and unpeeled fruit.</p></div></div>
        <div class="india-health-card-visual"><div class="india-health-bg"><img src="https://images.unsplash.com/photo-1533619043865-1c2e2f32ff5f?w=600&h=800&fit=crop" alt="Sun safety" /><div class="india-health-overlay"></div></div><div class="india-health-content"><div class="india-health-icon-wrapper"><i class="fas fa-sun"></i></div><h3 class="india-health-card-title">Sun &amp; Heat</h3><p class="india-health-card-desc">Extreme heat in summer. Stay hydrated, use SPF, and avoid midday sun.</p></div></div>
        <div class="india-health-card-visual"><div class="india-health-bg"><img src="https://images.unsplash.com/photo-1551817958-29d0660f98de?w=600&h=800&fit=crop" alt="Insect protection" /><div class="india-health-overlay"></div></div><div class="india-health-content"><div class="india-health-icon-wrapper"><i class="fas fa-mosquito"></i></div><h3 class="india-health-card-title">Insects</h3><p class="india-health-card-desc">Use DEET repellent day and night. Dengue, Malaria, and Chikungunya are risks.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="india-cta-section">
  <div class="india-cta-glow-1"></div><div class="india-cta-glow-2"></div><div class="india-cta-dots"></div>
  <div class="section-container">
    <div class="india-cta-content">
      <h2 class="india-cta-title"><?php echo esc_html(ep_field('td_cta_title', 'Ready for your trip to India?')); ?></h2>
      <p class="india-cta-description"><?php echo esc_html(ep_field('td_cta_description', 'Book your travel health consultation at our Ashford clinic.')); ?></p>
      <div class="india-cta-actions">
        <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta india-cta-button-white"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
        <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta india-cta-button-outlined"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
      <div class="india-cta-checks">
        <div class="india-cta-check"><i class="fas fa-plane-departure"></i><span>Travel Ready</span></div>
        <div class="india-cta-check"><i class="fas fa-user-doctor"></i><span>Expert Advice</span></div>
        <div class="india-cta-check"><i class="fas fa-shield-virus"></i><span>All Vaccines</span></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
