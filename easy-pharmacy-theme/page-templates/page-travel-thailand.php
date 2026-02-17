<?php
/**
 * Template Name: Travel - Thailand
 * @package Easy_Pharmacy
 */

get_header();

$country = ep_field('td_country_name', 'Thailand');
?>

<section class="thailand-hero-section">
  <div class="thailand-hero-overlay"></div>
  <div class="thailand-hero-dots"></div>
  <div class="section-container">
    <div class="thailand-hero-grid">
      <div class="thailand-hero-content">
        <div class="hero-badge"><span class="pulse-dot"><span></span><span></span></span><span class="hero-badge-text"><?php echo esc_html(ep_field('td_hero_badge', 'THAILAND TRAVEL HEALTH')); ?></span></div>
        <h1 class="hero-title" style="color: white;"><?php echo esc_html(ep_field('td_hero_title_line1', 'Travel Vaccinations for')); ?><br /><span class="gradient-text" style="background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html($country); ?></span></h1>
        <p class="thailand-hero-description"><?php echo esc_html(ep_field('td_hero_description', 'Expert advice and vaccinations for your Thailand holiday. Hepatitis, Rabies, Japanese Encephalitis, and more.')); ?></p>
        <div class="thailand-hero-actions">
          <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta thailand-hero-btn-primary"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
          <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta thailand-hero-btn-secondary"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
        </div>
      </div>
      <div class="thailand-hero-visual"></div>
    </div>
  </div>
</section>

<section class="thailand-stats-section">
  <div class="thailand-stats-shimmer"></div>
  <div class="section-container">
    <div class="thailand-stats-grid">
      <?php if (have_rows('td_stats')) : while (have_rows('td_stats')) : the_row(); ?>
        <div class="thailand-stat-item"><div class="thailand-stat-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="thailand-stat-content"><p class="thailand-stat-number"><?php echo esc_html(get_sub_field('number')); ?></p><p class="thailand-stat-label"><?php echo esc_html(get_sub_field('label')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="thailand-stat-item"><div class="thailand-stat-icon"><i class="fas fa-syringe"></i></div><div class="thailand-stat-content"><p class="thailand-stat-number">5-7</p><p class="thailand-stat-label">Vaccines Recommended</p></div></div>
        <div class="thailand-stat-item"><div class="thailand-stat-icon"><i class="fas fa-calendar-alt"></i></div><div class="thailand-stat-content"><p class="thailand-stat-number">6-8</p><p class="thailand-stat-label">Weeks Before Travel</p></div></div>
        <div class="thailand-stat-item"><div class="thailand-stat-icon"><i class="fas fa-shield-halved"></i></div><div class="thailand-stat-content"><p class="thailand-stat-number">Full</p><p class="thailand-stat-label">Protection Available</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="thailand-vaccines-section">
  <div class="section-container">
    <div class="thailand-vaccines-header">
      <h2 class="thailand-vaccines-title"><?php echo esc_html(ep_field('td_vaccines_title', 'Protect yourself in Thailand')); ?></h2>
      <div class="thailand-vaccines-divider"></div>
      <p class="thailand-vaccines-description"><?php echo esc_html(ep_field('td_vaccines_description', 'These vaccinations are recommended for most travellers to Thailand')); ?></p>
    </div>
    <div class="thailand-vaccines-grid">
      <?php if (have_rows('td_vaccinations_required')) : while (have_rows('td_vaccinations_required')) : the_row(); ?>
        <div class="thailand-vaccine-card"><div class="thailand-vaccine-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="thailand-vaccine-content"><div class="thailand-vaccine-head"><h3 class="thailand-vaccine-name"><?php echo esc_html(get_sub_field('name')); ?></h3><span class="thailand-badge-<?php echo esc_attr(get_sub_field('badge_color')); ?>"><?php echo esc_html(get_sub_field('badge_text')); ?></span></div><p class="thailand-vaccine-short"><?php echo esc_html(get_sub_field('short_desc')); ?></p><p class="thailand-vaccine-desc"><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="thailand-vaccine-card"><div class="thailand-vaccine-icon"><i class="fas fa-virus"></i></div><div class="thailand-vaccine-content"><div class="thailand-vaccine-head"><h3 class="thailand-vaccine-name">Hepatitis A</h3><span class="thailand-badge-purple">Essential</span></div><p class="thailand-vaccine-short">Food &amp; water safety</p><p class="thailand-vaccine-desc">Recommended for all travellers to Thailand.</p></div></div>
        <div class="thailand-vaccine-card"><div class="thailand-vaccine-icon"><i class="fas fa-bacteria"></i></div><div class="thailand-vaccine-content"><div class="thailand-vaccine-head"><h3 class="thailand-vaccine-name">Typhoid</h3><span class="thailand-badge-purple">Essential</span></div><p class="thailand-vaccine-short">Food &amp; water safety</p><p class="thailand-vaccine-desc">Important for street food lovers and rural travellers.</p></div></div>
        <div class="thailand-vaccine-card"><div class="thailand-vaccine-icon"><i class="fas fa-notes-medical"></i></div><div class="thailand-vaccine-content"><div class="thailand-vaccine-head"><h3 class="thailand-vaccine-name">Hepatitis B</h3><span class="thailand-badge-purple">Essential</span></div><p class="thailand-vaccine-short">Blood/fluid contact</p><p class="thailand-vaccine-desc">Recommended especially for longer stays or medical tourism.</p></div></div>
        <div class="thailand-vaccine-card"><div class="thailand-vaccine-icon"><i class="fas fa-brain"></i></div><div class="thailand-vaccine-content"><div class="thailand-vaccine-head"><h3 class="thailand-vaccine-name">Japanese Encephalitis</h3><span class="thailand-badge-gray">Recommended</span></div><p class="thailand-vaccine-short">Mosquito-borne virus</p><p class="thailand-vaccine-desc">Consider for rural travel or stays longer than one month.</p></div></div>
        <div class="thailand-vaccine-card"><div class="thailand-vaccine-icon"><i class="fas fa-dog"></i></div><div class="thailand-vaccine-content"><div class="thailand-vaccine-head"><h3 class="thailand-vaccine-name">Rabies</h3><span class="thailand-badge-gray">Recommended</span></div><p class="thailand-vaccine-short">Animal contact risk</p><p class="thailand-vaccine-desc">Stray dogs and monkeys are common. Consider for adventure travellers.</p></div></div>
        <div class="thailand-vaccine-card"><div class="thailand-vaccine-icon"><i class="fas fa-syringe"></i></div><div class="thailand-vaccine-content"><div class="thailand-vaccine-head"><h3 class="thailand-vaccine-name">Tetanus/Diphtheria/Polio</h3><span class="thailand-badge-gray">Recommended</span></div><p class="thailand-vaccine-short">Routine boosters</p><p class="thailand-vaccine-desc">Ensure your routine UK schedule is up to date.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="thailand-malaria-section">
  <div class="section-container">
    <div class="thailand-malaria-layout">
      <div class="thailand-malaria-visual">
        <div class="thailand-malaria-image-card">
          <img src="<?php echo esc_url(ep_field('td_malaria_image', 'https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?w=800&h=1000&fit=crop')); ?>" alt="Thailand travel" class="thailand-malaria-image" />
          <div class="thailand-malaria-overlay"></div>
          <div class="thailand-malaria-badge"><div class="thailand-malaria-badge-icon"><i class="fas fa-shield-virus"></i></div><span class="thailand-malaria-badge-text">Expert Advice</span></div>
        </div>
      </div>
      <div class="thailand-malaria-content">
        <div class="section-badge"><span class="pulse-dot"><span></span><span></span></span><span class="section-badge-text"><?php echo esc_html(ep_field('td_malaria_badge', 'BORDER REGIONS ONLY')); ?></span></div>
        <h2 class="thailand-malaria-title"><?php echo esc_html(ep_field('td_malaria_title', 'Malaria Risk in Thailand')); ?></h2>
        <p class="thailand-malaria-intro"><?php echo esc_html(ep_field('td_malaria_intro', 'Malaria risk in Thailand is mainly limited to border regions. Bangkok, Chiang Mai, and popular islands are generally malaria-free.')); ?></p>
        <div class="thailand-malaria-info-grid">
          <?php if (have_rows('td_malaria_risks')) : while (have_rows('td_malaria_risks')) : the_row(); ?>
            <div class="thailand-malaria-item"><div class="thailand-malaria-item-icon <?php echo esc_attr(get_sub_field('risk_level')); ?>"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><div class="thailand-malaria-item-text"><h4><?php echo esc_html(get_sub_field('title')); ?></h4><p><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
          <?php endwhile; else : ?>
            <div class="thailand-malaria-item"><div class="thailand-malaria-item-icon high-risk"><i class="fas fa-exclamation-triangle"></i></div><div class="thailand-malaria-item-text"><h4>Border Regions</h4><p>Rural forested areas near Myanmar, Cambodia, and Laos borders.</p></div></div>
            <div class="thailand-malaria-item"><div class="thailand-malaria-item-icon low-risk"><i class="fas fa-check-circle"></i></div><div class="thailand-malaria-item-text"><h4>Tourist Areas</h4><p>Bangkok, Phuket, Koh Samui, Chiang Mai city centre are malaria-free.</p></div></div>
          <?php endif; ?>
        </div>
        <div class="thailand-malaria-actions"><a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">Check Your Risk <i class="fas fa-arrow-right"></i></a></div>
      </div>
    </div>
  </div>
</section>

<section class="thailand-health-section">
  <div class="section-container">
    <div class="thailand-health-header">
      <div class="section-badge"><span class="pulse-dot"><span></span><span></span></span><span class="section-badge-text"><?php echo esc_html(ep_field('td_health_badge', 'HEALTH ADVICE')); ?></span></div>
      <h2 class="thailand-health-title"><?php echo esc_html(ep_field('td_health_title', 'Stay healthy in Thailand')); ?></h2>
      <p class="thailand-health-subtitle"><?php echo esc_html(ep_field('td_health_subtitle', 'Essential tips for a safe holiday')); ?></p>
    </div>
    <div class="thailand-health-grid">
      <?php if (have_rows('td_travel_tips')) : while (have_rows('td_travel_tips')) : the_row(); ?>
        <div class="thailand-health-card-visual"><div class="thailand-health-bg"><img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" /><div class="thailand-health-overlay"></div></div><div class="thailand-health-content"><div class="thailand-health-icon-wrapper"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div><h3 class="thailand-health-card-title"><?php echo esc_html(get_sub_field('title')); ?></h3><p class="thailand-health-card-desc"><?php echo esc_html(get_sub_field('description')); ?></p></div></div>
      <?php endwhile; else : ?>
        <div class="thailand-health-card-visual"><div class="thailand-health-bg"><img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=600&h=800&fit=crop" alt="Water safety" /><div class="thailand-health-overlay"></div></div><div class="thailand-health-content"><div class="thailand-health-icon-wrapper"><i class="fas fa-glass-water"></i></div><h3 class="thailand-health-card-title">Food &amp; Water</h3><p class="thailand-health-card-desc">Drink bottled water. Thai street food is generally safe from busy stalls.</p></div></div>
        <div class="thailand-health-card-visual"><div class="thailand-health-bg"><img src="https://images.unsplash.com/photo-1533619043865-1c2e2f32ff5f?w=600&h=800&fit=crop" alt="Sun safety" /><div class="thailand-health-overlay"></div></div><div class="thailand-health-content"><div class="thailand-health-icon-wrapper"><i class="fas fa-sun"></i></div><h3 class="thailand-health-card-title">Sun Safety</h3><p class="thailand-health-card-desc">Tropical sun is intense. Use high SPF, wear a hat, and stay hydrated.</p></div></div>
        <div class="thailand-health-card-visual"><div class="thailand-health-bg"><img src="https://images.unsplash.com/photo-1551817958-29d0660f98de?w=600&h=800&fit=crop" alt="Insect protection" /><div class="thailand-health-overlay"></div></div><div class="thailand-health-content"><div class="thailand-health-icon-wrapper"><i class="fas fa-mosquito"></i></div><h3 class="thailand-health-card-title">Insects</h3><p class="thailand-health-card-desc">Dengue risk year-round. Use DEET repellent, especially during daytime.</p></div></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="thailand-cta-section">
  <div class="thailand-cta-glow-1"></div><div class="thailand-cta-glow-2"></div><div class="thailand-cta-dots"></div>
  <div class="section-container">
    <div class="thailand-cta-content">
      <h2 class="thailand-cta-title"><?php echo esc_html(ep_field('td_cta_title', 'Ready for your Thailand holiday?')); ?></h2>
      <p class="thailand-cta-description"><?php echo esc_html(ep_field('td_cta_description', 'Book your travel health consultation at our Ashford clinic.')); ?></p>
      <div class="thailand-cta-actions">
        <a href="<?php echo esc_url(ep_field('td_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta thailand-cta-button-white"><?php echo esc_html(ep_field('td_cta_text', 'Book Consultation')); ?> <i class="fas fa-arrow-right"></i></a>
        <a href="tel:<?php echo esc_attr(ep_field('td_phone', '01784255222')); ?>" class="cta-button secondary-cta thailand-cta-button-outlined"><i class="fas fa-phone"></i> <?php echo esc_html(ep_field('td_phone_display', 'Call 01784 255 222')); ?></a>
      </div>
      <div class="thailand-cta-checks">
        <div class="thailand-cta-check"><i class="fas fa-plane-departure"></i><span>Travel Ready</span></div>
        <div class="thailand-cta-check"><i class="fas fa-user-doctor"></i><span>Expert Advice</span></div>
        <div class="thailand-cta-check"><i class="fas fa-shield-virus"></i><span>All Vaccines</span></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
