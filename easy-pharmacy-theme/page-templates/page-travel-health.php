<?php
/**
 * Template Name: Travel Health
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- Hero Section -->
<section class="travel-hero-section">
  <div class="travel-hero-bg"></div>
  <div class="travel-hero-overlay"></div>
  <div class="travel-hero-dots"></div>

  <div class="section-container">
    <div class="travel-hero-grid">

      <!-- Left: Content -->
      <div class="travel-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html(ep_field('th_hero_badge', 'TRAVEL HEALTH SERVICES')); ?></span>
        </div>

        <h1 class="travel-hero-title">
          <?php echo esc_html(ep_field('th_hero_title_line1', "Ashford's Leading")); ?><br />
          <span class="gradient-text"><?php echo esc_html(ep_field('th_hero_title_highlight', 'Travel Clinic')); ?></span>
        </h1>

        <p class="travel-hero-description">
          <?php echo esc_html(ep_field('th_hero_description', 'Expert travel jabs Ashford and health advice for your next adventure. Book your appointment at our Ashford travel clinic with Dilip.')); ?>
        </p>

        <div class="travel-hero-actions">
          <a href="<?php echo esc_url(ep_field('th_hero_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta">
            <?php echo esc_html(ep_field('th_hero_cta_text', 'Book Appointment')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(ep_field('th_phone_number', '01784255222')); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html(ep_field('th_phone_display', 'Call 01784 255 222')); ?>
          </a>
        </div>

        <!-- Trust Badges -->
        <div class="travel-hero-trust">
          <div class="travel-hero-trust-item">
            <i class="fas fa-shield-virus"></i>
            <span><?php echo esc_html(ep_field('th_trust_1', 'Yellow Fever Centre')); ?></span>
          </div>
          <div class="travel-hero-trust-item">
            <i class="fas fa-syringe"></i>
            <span><?php echo esc_html(ep_field('th_trust_2', 'All Travel Vaccinations')); ?></span>
          </div>
          <div class="travel-hero-trust-item">
            <i class="fas fa-user-doctor"></i>
            <span><?php echo esc_html(ep_field('th_trust_3', 'Expert Travel Advice')); ?></span>
          </div>
        </div>
      </div>

      <!-- Right: Visual -->
      <div class="travel-hero-visual"></div>

    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="travel-stats-section">
  <div class="travel-stats-shimmer"></div>
  <div class="section-container">
    <div class="travel-stats-grid">
      <?php if (have_rows('th_stats')) : while (have_rows('th_stats')) : the_row(); ?>
        <div class="travel-stat-item">
          <div class="travel-stat-image-wrapper">
            <?php $stat_image = get_sub_field('image'); if ($stat_image) : ?>
              <img src="<?php echo esc_url($stat_image); ?>" alt="<?php echo esc_attr(get_sub_field('label')); ?>" class="travel-stat-image" style="object-fit: contain;" />
            <?php else : ?>
              <div class="travel-stat-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
            <?php endif; ?>
          </div>
          <div class="travel-stat-content">
            <p class="travel-stat-number"><?php echo esc_html(get_sub_field('number')); ?></p>
            <p class="travel-stat-label"><?php echo esc_html(get_sub_field('label')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="travel-stat-item">
          <div class="travel-stat-image-wrapper">
            <img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771163076528-1.png" alt="Official Yellow Fever Centre" class="travel-stat-image" style="object-fit: contain;" />
          </div>
          <div class="travel-stat-content"><p class="travel-stat-number">Official</p><p class="travel-stat-label">Yellow Fever Centre</p></div>
        </div>
        <div class="travel-stat-item">
          <div class="travel-stat-image-wrapper">
            <img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771162536465-0.png" alt="British Passport" class="travel-stat-image" style="object-fit: contain;" />
          </div>
          <div class="travel-stat-content"><p class="travel-stat-number">1,000+</p><p class="travel-stat-label">Travellers Protected</p></div>
        </div>
        <div class="travel-stat-item">
          <div class="travel-stat-image-wrapper">
            <img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771163876571-0.png" alt="Years Experience" class="travel-stat-image" />
          </div>
          <div class="travel-stat-content"><p class="travel-stat-number">30+</p><p class="travel-stat-label">Years Experience</p></div>
        </div>
        <div class="travel-stat-item">
          <div class="travel-stat-image-wrapper">
            <img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771163876573-1.png" alt="GPhC Registered" class="travel-stat-image" />
          </div>
          <div class="travel-stat-content"><p class="travel-stat-number">GPhC</p><p class="travel-stat-label">Registered</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="travel-services-section">
  <div class="section-container">
    <div class="travel-services-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('th_services_badge', 'COMPREHENSIVE TRAVEL HEALTH')); ?></span>
      </div>
      <h2 class="travel-services-title"><?php echo esc_html(ep_field('th_services_title', 'Everything you need for safe travel')); ?></h2>
      <p class="travel-services-description"><?php echo esc_html(ep_field('th_services_description', 'From expert consultations to all vaccinations and official certificates')); ?></p>
    </div>

    <div class="travel-services-grid">
      <?php if (have_rows('th_services')) : while (have_rows('th_services')) : the_row(); ?>
        <div class="travel-service-card-premium">
          <div class="travel-service-image-wrapper">
            <img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" class="travel-service-image" />
            <div class="travel-service-overlay"></div>
          </div>
          <div class="travel-service-content">
            <div class="travel-service-icon-small">
              <i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i>
            </div>
            <h3 class="travel-service-title"><?php echo esc_html(get_sub_field('title')); ?></h3>
            <p class="travel-service-desc"><?php echo esc_html(get_sub_field('description')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="travel-service-card-premium">
          <div class="travel-service-image-wrapper">
            <img src="https://c.animaapp.com/mlmfflrnWtpLI7/img/uploaded-asset-1771163150335-1.png" alt="Travel Vaccinations" class="travel-service-image" style="object-fit: contain; padding: 2rem; background: #f8f7ff;" />
            <div class="travel-service-overlay"></div>
          </div>
          <div class="travel-service-content">
            <div class="travel-service-icon-small"><i class="fas fa-syringe"></i></div>
            <h3 class="travel-service-title">Travel Vaccinations</h3>
            <p class="travel-service-desc">Full range including yellow fever, rabies, and typhoid.</p>
          </div>
        </div>
        <div class="travel-service-card-premium">
          <div class="travel-service-image-wrapper">
            <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&h=800&fit=crop" alt="Malaria Prevention" class="travel-service-image" />
            <div class="travel-service-overlay"></div>
          </div>
          <div class="travel-service-content">
            <div class="travel-service-icon-small"><i class="fas fa-pills"></i></div>
            <h3 class="travel-service-title">Malaria Prevention</h3>
            <p class="travel-service-desc">Prescription medication and guidance for your trip.</p>
          </div>
        </div>
        <div class="travel-service-card-premium">
          <div class="travel-service-image-wrapper">
            <img src="https://images.unsplash.com/photo-1603398938378-e54eab446dde?w=600&h=800&fit=crop" alt="Travel Health Kits" class="travel-service-image" />
            <div class="travel-service-overlay"></div>
          </div>
          <div class="travel-service-content">
            <div class="travel-service-icon-small"><i class="fas fa-kit-medical"></i></div>
            <h3 class="travel-service-title">Travel Health Kits</h3>
            <p class="travel-service-desc">Personalised first aid kits tailored for your destination.</p>
          </div>
        </div>
        <div class="travel-service-card-premium">
          <div class="travel-service-image-wrapper">
            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=800&fit=crop" alt="Health Certificates" class="travel-service-image" />
            <div class="travel-service-overlay"></div>
          </div>
          <div class="travel-service-content">
            <div class="travel-service-icon-small"><i class="fas fa-certificate"></i></div>
            <h3 class="travel-service-title">Health Certificates</h3>
            <p class="travel-service-desc">Official vaccination certificates for border entry.</p>
          </div>
        </div>
        <div class="travel-service-card-premium">
          <div class="travel-service-image-wrapper">
            <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=600&h=800&fit=crop" alt="Travel Health Advice" class="travel-service-image" />
            <div class="travel-service-overlay"></div>
          </div>
          <div class="travel-service-content">
            <div class="travel-service-icon-small"><i class="fas fa-clipboard-check"></i></div>
            <h3 class="travel-service-title">Travel Health Advice</h3>
            <p class="travel-service-desc">Destination-specific guidance from expert pharmacists.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Vaccinations Grid -->
<section class="travel-vaccines-section">
  <div class="travel-vaccines-blob-1"></div>
  <div class="travel-vaccines-blob-2"></div>
  <div class="section-container">
    <div class="travel-vaccines-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('th_vaccines_badge', 'ALL VACCINATIONS')); ?></span>
      </div>
      <h3 class="travel-vaccines-title"><?php echo esc_html(ep_field('th_vaccines_title', 'Available Vaccinations')); ?></h3>
    </div>

    <div class="travel-vaccines-grid">
      <?php if (have_rows('th_vaccinations')) : while (have_rows('th_vaccinations')) : the_row();
        $is_special = get_sub_field('is_featured');
        $card_class = $is_special ? 'travel-vaccine-card travel-vaccine-card-yellow' : 'travel-vaccine-card';
      ?>
        <div class="<?php echo esc_attr($card_class); ?>">
          <div class="travel-vaccine-icon">
            <i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i>
          </div>
          <h4 class="travel-vaccine-name"><?php echo esc_html(get_sub_field('name')); ?></h4>
          <?php if ($badge = get_sub_field('badge')) : ?>
            <span class="travel-vaccine-badge"><?php echo esc_html($badge); ?></span>
          <?php endif; ?>
        </div>
      <?php endwhile; else : ?>
        <div class="travel-vaccine-card travel-vaccine-card-yellow">
          <div class="travel-vaccine-icon"><i class="fas fa-shield-virus"></i></div>
          <h4 class="travel-vaccine-name">Yellow Fever</h4>
          <span class="travel-vaccine-badge">Official Centre</span>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Typhoid</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Hepatitis A</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Hepatitis B</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Rabies</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Cholera</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Japanese Encephalitis</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Meningitis ACWY</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Tetanus / Diphtheria</h4>
        </div>
        <div class="travel-vaccine-card">
          <div class="travel-vaccine-icon"><i class="fas fa-syringe"></i></div>
          <h4 class="travel-vaccine-name">Tick-Borne Encephalitis</h4>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Destinations Section -->
<section class="travel-destinations-section">
  <div class="section-container">
    <div class="travel-destinations-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('th_destinations_badge', 'POPULAR DESTINATIONS')); ?></span>
      </div>
      <h2 class="travel-destinations-title"><?php echo esc_html(ep_field('th_destinations_title', 'Where are you travelling?')); ?></h2>
      <p class="travel-destinations-description"><?php echo esc_html(ep_field('th_destinations_description', 'View recommended vaccinations for your destination')); ?></p>
    </div>

    <div class="travel-destinations-grid">
      <?php if (have_rows('th_destinations')) : while (have_rows('th_destinations')) : the_row(); ?>
        <a href="<?php echo esc_url(get_sub_field('country_url')); ?>" class="travel-destination-card">
          <div class="travel-destination-flag">
            <img src="<?php echo esc_url(get_sub_field('flag_image')); ?>" alt="<?php echo esc_attr(get_sub_field('country_name')); ?>" />
          </div>
          <span class="travel-destination-name"><?php echo esc_html(get_sub_field('country_name')); ?></span>
          <i class="fas fa-arrow-right travel-destination-arrow"></i>
        </a>
      <?php endwhile; else : ?>
        <?php
        $destinations = array(
          array('name' => 'Thailand', 'flag' => 'https://flagcdn.com/w80/th.png', 'url' => '/travel-thailand/'),
          array('name' => 'India', 'flag' => 'https://flagcdn.com/w80/in.png', 'url' => '/travel-india/'),
          array('name' => 'Cape Verde', 'flag' => 'https://flagcdn.com/w80/cv.png', 'url' => '/travel-cape-verde/'),
          array('name' => 'Kenya', 'flag' => 'https://flagcdn.com/w80/ke.png', 'url' => '/travel-kenya/'),
          array('name' => 'Brazil', 'flag' => 'https://flagcdn.com/w80/br.png', 'url' => '/travel-brazil/'),
          array('name' => 'Vietnam', 'flag' => 'https://flagcdn.com/w80/vn.png', 'url' => '/travel-vietnam/'),
        );
        foreach ($destinations as $dest) :
        ?>
          <a href="<?php echo esc_url($dest['url']); ?>" class="travel-destination-card">
            <div class="travel-destination-flag">
              <img src="<?php echo esc_url($dest['flag']); ?>" alt="<?php echo esc_attr($dest['name']); ?>" />
            </div>
            <span class="travel-destination-name"><?php echo esc_html($dest['name']); ?></span>
            <i class="fas fa-arrow-right travel-destination-arrow"></i>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Pharmacist Section -->
<?php get_template_part('template-parts/section', 'pharmacist'); ?>

<!-- FAQ Section -->
<section class="travel-faq-section">
  <div class="section-container">
    <div class="travel-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('th_faq_badge', 'TRAVEL HEALTH FAQs')); ?></span>
      </div>
      <h2 class="travel-faq-title"><?php echo esc_html(ep_field('th_faq_title', 'Common Questions')); ?></h2>
    </div>

    <div class="travel-faq-list">
      <?php if (have_rows('th_faqs')) : $faq_num = 0; while (have_rows('th_faqs')) : the_row(); $faq_num++; ?>
        <div class="travel-faq-item">
          <button class="travel-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="travel-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="travel-faq-item">
          <button class="travel-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">01</span>
            <span class="text">How far in advance should I book?</span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="travel-faq-content">
            <p>We recommend booking 6-8 weeks before travel for most destinations. Some vaccines require multiple doses spread over weeks. However, last-minute appointments are available.</p>
          </div>
        </div>
        <div class="travel-faq-item">
          <button class="travel-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">02</span>
            <span class="text">Do I need a Yellow Fever certificate?</span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="travel-faq-content">
            <p>Some countries require proof of Yellow Fever vaccination for entry. As an official Yellow Fever Centre, we can administer the vaccine and issue the International Certificate of Vaccination.</p>
          </div>
        </div>
        <div class="travel-faq-item">
          <button class="travel-faq-btn" onclick="toggleFAQ(this)">
            <span class="num">03</span>
            <span class="text">How much do travel vaccinations cost?</span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="travel-faq-content">
            <p>Prices vary by vaccine. We offer competitive pricing and will give you a full quote during your consultation. Multiple vaccines can often be given in one appointment.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="travel-cta-section">
  <div class="travel-cta-glow-1"></div>
  <div class="travel-cta-glow-2"></div>
  <div class="travel-cta-dots"></div>
  <div class="section-container">
    <div class="travel-cta-content">
      <h2 class="travel-cta-title"><?php echo esc_html(ep_field('th_cta_title', 'Ready to travel safely?')); ?></h2>
      <p class="travel-cta-description"><?php echo esc_html(ep_field('th_cta_description', 'Book your travel health consultation today. Expert advice, all vaccinations, and certificates in one visit.')); ?></p>
      <div class="travel-cta-actions">
        <a href="<?php echo esc_url(ep_field('th_hero_cta_url', '/book-travel-clinic/')); ?>" class="cta-button primary-cta travel-cta-button-white">
          <?php echo esc_html(ep_field('th_cta_button_text', 'Book Consultation')); ?>
          <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr(ep_field('th_phone_number', '01784255222')); ?>" class="cta-button secondary-cta travel-cta-button-outlined">
          <i class="fas fa-phone"></i> <?php echo esc_html(ep_field('th_phone_display', 'Call 01784 255 222')); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
