<?php
/**
 * Template Name: Malaria Prevention
 * @package Easy_Pharmacy
 */

get_header();
?>

<!-- Breadcrumb -->
<div class="malaria-breadcrumb">
  <div class="section-container">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <span class="separator">/</span>
    <a href="<?php echo esc_url(ep_field('mal_parent_url', '/travel-health/')); ?>">Travel Health</a>
    <span class="separator">/</span>
    <span class="current">Malaria Prevention</span>
  </div>
</div>

<!-- S1: Hero Section (warm cream style — matches weight loss / switch provider) -->
<section class="malaria-hero-section">
  <div class="malaria-hero-bg"></div>
  <div class="malaria-hero-dots"></div>
  <div class="malaria-hero-glow-1"></div>
  <div class="malaria-hero-glow-2"></div>

  <div class="section-container">
    <div class="malaria-hero-grid">

      <!-- Left: Content -->
      <div class="malaria-hero-content">
        <div class="section-badge">
          <span class="pulse-dot"><span></span><span></span></span>
          <span class="section-badge-text"><?php echo esc_html(ep_field('mal_hero_label', 'TRAVEL HEALTH PROTECTION')); ?></span>
        </div>

        <h1 class="malaria-hero-title">
          <span class="gradient-text"><?php echo esc_html(ep_field('mal_hero_title_line_1', 'Malaria Tablets')); ?></span>
          <span class="malaria-hero-accent-text"><?php echo esc_html(ep_field('mal_hero_title_line_2', 'in Ashford, Chertsey')); ?></span>
          <span class="gradient-text"><?php echo esc_html(ep_field('mal_hero_title_line_3', '& Walton-on-Thames')); ?></span>
        </h1>

        <p class="malaria-hero-description">
          <?php echo esc_html(ep_field('mal_hero_description', 'Travelling to a malaria zone? Get expert advice and prescription antimalarial tablets before you go. Face-to-face consultation with travel health pharmacist — no GP referral needed.')); ?>
        </p>

        <div class="malaria-hero-actions">
          <a href="<?php echo esc_url(ep_field('mal_cta_url', '') ?: ep_booking_url()); ?>" class="cta-button primary-cta">
            <?php echo esc_html(ep_field('mal_cta_text', 'Book Your Travel Consultation')); ?>
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="tel:<?php echo esc_attr(ep_phone_link()); ?>" class="cta-button secondary-cta">
            <i class="fas fa-phone"></i>
            <?php echo esc_html('Call ' . ep_phone()); ?>
          </a>
        </div>

        <div class="malaria-hero-badges">
          <?php if (have_rows('mal_hero_badges')) : while (have_rows('mal_hero_badges')) : the_row(); ?>
            <div class="malaria-hero-badge"><?php echo esc_html(get_sub_field('text')); ?></div>
          <?php endwhile; else : ?>
            <div class="malaria-hero-badge">Same-Day Appointments</div>
            <div class="malaria-hero-badge">No GP Referral Needed</div>
            <div class="malaria-hero-badge">Malarone & Doxycycline Available</div>
          <?php endif; ?>
        </div>
      </div>

      <!-- Right: Image -->
      <div class="malaria-hero-visual">
        <?php
        $hero_image_id  = ep_field('mal_hero_image');
        $hero_image_url = $hero_image_id ? wp_get_attachment_image_url($hero_image_id, 'large') : '';
        if ($hero_image_url) : ?>
          <div class="malaria-hero-image-card">
            <img src="<?php echo esc_url($hero_image_url); ?>" alt="Malaria prevention consultation at Easy Pharmacy" />
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- S2: Why Malaria Prevention Matters -->
<section class="malaria-why-section">
  <div class="section-container">
    <div class="malaria-why-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('mal_why_badge', 'WHY IT MATTERS')); ?></span>
      </div>
      <h2 class="malaria-why-title"><?php echo esc_html(ep_field('mal_why_title', '"I Didn\'t Think I Needed Malaria Tablets for a Two-Week Holiday"')); ?></h2>
    </div>

    <div class="malaria-why-grid">
      <div class="malaria-why-content">
        <p class="malaria-why-intro">
          <?php echo esc_html(ep_field('mal_why_intro', 'Most people booking trips to Thailand, Tanzania, or India don\'t realise malaria is a risk until they research travel requirements a few weeks before departure.')); ?>
        </p>

        <p class="malaria-why-text">
          <?php echo esc_html(ep_field('mal_why_text', 'By then, some are scrambling to get GP appointments (weeks-long waiting lists), or trying online pharmacies (impersonal forms, postal delays), or worse — planning to "get them at the airport" (limited stock, inflated prices).')); ?>
        </p>

        <p class="malaria-why-solution">
          <?php echo esc_html(ep_field('mal_why_solution', 'At Easy Pharmacy in Ashford, Chertsey, and Walton-on-Thames, travellers book malaria consultations weeks before departure and leave the same day with:')); ?>
        </p>

        <ul class="malaria-why-checklist">
          <?php if (have_rows('mal_why_items')) : while (have_rows('mal_why_items')) : the_row(); ?>
            <li><i class="fas fa-check-circle"></i> <?php echo esc_html(get_sub_field('text')); ?></li>
          <?php endwhile; else : ?>
            <li><i class="fas fa-check-circle"></i> Expert assessment of your destination's malaria risk</li>
            <li><i class="fas fa-check-circle"></i> Prescription antimalarial tablets suited to your trip</li>
            <li><i class="fas fa-check-circle"></i> Clear dosing instructions (when to start, how long to take)</li>
            <li><i class="fas fa-check-circle"></i> Advice on mosquito bite prevention strategies</li>
          <?php endif; ?>
        </ul>
      </div>

      <div class="malaria-why-callout">
        <div class="malaria-why-callout-card">
          <div class="badge"><?php echo esc_html(ep_field('mal_why_callout_badge', 'KEY STATISTIC')); ?></div>
          <h3><?php echo esc_html(ep_field('mal_why_callout_stat', '610,000')); ?></h3>
          <p><?php echo esc_html(ep_field('mal_why_callout_text', 'deaths annually from malaria, mostly in sub-Saharan Africa. Prevention is straightforward if you prepare properly.')); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- S2b: Social Proof Band (shared pattern from switch provider) -->
<section class="malaria-social-proof-section">
  <div class="section-container">
    <div class="malaria-social-proof-wrapper">

      <!-- Left: Google Rating Badge (uses globals.css .rating-badge styles) -->
      <div class="rating-badge">
        <div class="rating-header">
          <div class="rating-label">
            <div class="google-icon-wrapper">
              <i class="fab fa-google"></i>
            </div>
            <span>Google Rating</span>
          </div>
          <div class="badge-success">
            <i class="fas fa-check-circle"></i>
            <span>Excellent</span>
          </div>
        </div>
        <div class="rating-score">
          <span class="score-number"><?php echo esc_html(ep_field('mal_social_rating_score', ep_option('google_rating', '4.7'))); ?></span>
          <div class="rating-score-detail">
            <div class="star-row">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="rating-count"><?php echo esc_html(ep_field('mal_social_rating_count', 'Based on 300+ reviews')); ?></span>
          </div>
        </div>
        <div class="rating-footer">
          <div class="rating-location">
            <i class="fas fa-map-marker-alt"></i>
            <span><?php echo esc_html(ep_field('mal_social_rating_location', ep_option('pharmacy_location_label', 'Ashford, UK'))); ?></span>
          </div>
          <a href="#reviews" class="rating-link">View Reviews</a>
        </div>
      </div>

      <!-- Right: Text Content -->
      <div class="malaria-social-proof-content">
        <p class="malaria-social-proof-eyebrow"><?php echo esc_html(ep_field('mal_social_eyebrow', 'TRUSTED BY ASHFORD')); ?></p>
        <h2 class="malaria-social-proof-headline"><?php echo esc_html(ep_field('mal_social_headline', 'Expert travel health advice from a pharmacy you can trust')); ?></h2>
        <p class="malaria-social-proof-subtext"><?php echo esc_html(ep_field('mal_social_subtext', 'Hundreds of travellers across Ashford, Chertsey, and Walton-on-Thames trust Easy Pharmacy for malaria prevention and travel health consultations')); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- S3: How It Works (Journey Steps — matches weight loss page pattern) -->
<section class="malaria-journey-section">
  <div class="section-container">
    <div class="malaria-journey-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('mal_process_badge', 'HOW IT WORKS')); ?></span>
      </div>
      <h2 class="malaria-journey-title">
        <span class="gradient-text"><?php echo esc_html(ep_field('mal_process_title_highlight', 'Your Path To')); ?></span>
        <span class="malaria-journey-accent-text"><?php echo esc_html(ep_field('mal_process_title_line2', ' Malaria Protection')); ?></span>
      </h2>
      <p class="malaria-journey-description">
        <?php echo esc_html(ep_field('mal_process_description', 'A simple, face-to-face process with expert guidance at every step.')); ?>
      </p>
    </div>

    <?php
    $default_journey_steps = array(
        array('title' => 'Travel Health Consultation', 'description' => 'Book an appointment with Dilip or one of the pharmacy team at Easy Pharmacy. We\'ll review your travel itinerary, destination malaria risk, medical history, and current medications to determine which antimalarial is most suitable. Not all malaria tablets are right for everyone — some have contraindications or side effects that make alternatives better.', 'image' => ''),
        array('title' => 'Prescription & Supply', 'description' => 'If antimalarials are appropriate for your trip, Dilip (registered independent prescriber) will issue a prescription and supply the medication on the same day. You\'ll receive clear dosing instructions: when to start, when to take daily, and how long to continue after returning home.', 'image' => ''),
        array('title' => 'Travel Protected', 'description' => 'Leave your consultation with everything you need: antimalarial tablets, written dosing schedule, mosquito bite prevention advice (DEET repellent, mosquito nets, clothing), and guidance on what to do if you develop symptoms during or after your trip.', 'image' => ''),
    );

    $has_journey_steps = have_rows('mal_process_steps');
    $journey_steps     = array();

    if ($has_journey_steps) {
        while (have_rows('mal_process_steps')) {
            the_row();
            $img_id  = get_sub_field('image');
            $img_url = $img_id ? wp_get_attachment_image_url($img_id, 'medium_large') : '';
            $journey_steps[] = array(
                'title'       => get_sub_field('title'),
                'description' => get_sub_field('description'),
                'image'       => $img_url,
            );
        }
    } else {
        $journey_steps = $default_journey_steps;
    }
    ?>

    <!-- Numbered Tabs Navigation -->
    <div class="malaria-journey-tabs">
      <?php foreach ($journey_steps as $i => $step) : ?>
        <div class="malaria-journey-tab<?php echo $i === 0 ? ' malaria-journey-tab-active' : ''; ?>">
          <span class="malaria-journey-tab-counter"><?php echo esc_html($i + 1); ?></span>
          <strong class="malaria-journey-tab-title"><?php echo esc_html($step['title']); ?></strong>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Step Content Cards Grid -->
    <div class="malaria-journey-cards">
      <?php foreach ($journey_steps as $i => $step) : ?>
        <div class="malaria-journey-card">
          <?php if (!empty($step['image'])) : ?>
            <figure class="malaria-journey-card-image">
              <img src="<?php echo esc_url($step['image']); ?>" alt="<?php echo esc_attr($step['title']); ?>" />
            </figure>
          <?php endif; ?>
          <h4 class="malaria-journey-card-title"><?php echo esc_html($step['title']); ?></h4>
          <p class="malaria-journey-card-description"><?php echo esc_html($step['description']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- S4: Antimalarial Options -->
<section class="malaria-options-section">
  <div class="section-container">
    <div class="malaria-options-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('mal_options_badge', 'ANTIMALARIAL OPTIONS')); ?></span>
      </div>
      <h2 class="malaria-options-title"><?php echo esc_html(ep_field('mal_options_title', 'Malarone, Doxycycline, or Atovaquone/Proguanil — Which Is Right for Your Trip?')); ?></h2>
      <p class="malaria-options-intro"><?php echo esc_html(ep_field('mal_options_intro', 'There isn\'t one "best" antimalarial. The right choice depends on your destination, trip duration, medical history, and other medications you take.')); ?></p>
    </div>

    <div class="malaria-options-grid">
      <?php if (have_rows('mal_options_cards')) : while (have_rows('mal_options_cards')) : the_row(); ?>
        <div class="malaria-option-card<?php echo get_sub_field('featured') ? ' malaria-option-featured' : ''; ?>">
          <div class="malaria-option-header">
            <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
            <?php if (get_sub_field('best_for')) : ?>
              <span class="malaria-option-tag"><?php echo esc_html(get_sub_field('best_for')); ?></span>
            <?php endif; ?>
          </div>
          <ul class="malaria-option-details">
            <?php if (have_rows('details')) : while (have_rows('details')) : the_row(); ?>
              <li>
                <i class="fas fa-<?php echo esc_attr(get_sub_field('positive') ? 'check' : 'info-circle'); ?>"></i>
                <?php echo esc_html(get_sub_field('text')); ?>
              </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      <?php endwhile; else : ?>
        <div class="malaria-option-card malaria-option-featured">
          <div class="malaria-option-header">
            <h3>Malarone (Atovaquone/Proguanil)</h3>
            <span class="malaria-option-tag">Best for short trips (1-4 weeks)</span>
          </div>
          <ul class="malaria-option-details">
            <li><i class="fas fa-check"></i> Most popular for short trips (1-4 weeks)</li>
            <li><i class="fas fa-check"></i> Start 1-2 days before travel, take daily, continue 7 days after return</li>
            <li><i class="fas fa-check"></i> Well-tolerated with minimal side effects</li>
            <li><i class="fas fa-info-circle"></i> More expensive than doxycycline</li>
            <li><i class="fas fa-info-circle"></i> Not suitable for pregnant women or severe kidney disease</li>
          </ul>
        </div>
        <div class="malaria-option-card">
          <div class="malaria-option-header">
            <h3>Doxycycline</h3>
            <span class="malaria-option-tag">Best for longer trips (4+ weeks)</span>
          </div>
          <ul class="malaria-option-details">
            <li><i class="fas fa-check"></i> Most cost-effective for longer trips (4+ weeks)</li>
            <li><i class="fas fa-check"></i> Start 2 days before travel, take daily, continue 4 weeks after return</li>
            <li><i class="fas fa-info-circle"></i> Sun sensitivity (use high SPF sunscreen), nausea if taken on empty stomach</li>
            <li><i class="fas fa-info-circle"></i> Not suitable for pregnant women, children under 8, or certain antibiotic allergies</li>
            <li><i class="fas fa-info-circle"></i> Can interfere with oral contraceptives (use additional protection)</li>
          </ul>
        </div>
        <div class="malaria-option-card">
          <div class="malaria-option-header">
            <h3>Atovaquone/Proguanil (Generic)</h3>
            <span class="malaria-option-tag">Same efficacy, lower cost</span>
          </div>
          <ul class="malaria-option-details">
            <li><i class="fas fa-check"></i> Same active ingredients as branded Malarone</li>
            <li><i class="fas fa-check"></i> Same dosing schedule and efficacy</li>
            <li><i class="fas fa-check"></i> Lower cost than branded Malarone</li>
          </ul>
        </div>
      <?php endif; ?>
    </div>

    <p class="malaria-options-footer"><?php echo esc_html(ep_field('mal_options_footer', 'During your consultation, we\'ll recommend the most suitable option based on your specific situation. Some destinations have chloroquine-resistant malaria strains, which affects which tablets work.')); ?></p>
  </div>
</section>

<!-- S5: High-Risk Destinations -->
<section class="malaria-destinations-section">
  <div class="section-container">
    <div class="malaria-destinations-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('mal_dest_badge', 'DESTINATION RISK')); ?></span>
      </div>
      <h2 class="malaria-destinations-title"><?php echo esc_html(ep_field('mal_dest_title', 'Do You Need Malaria Tablets for Your Destination?')); ?></h2>
      <p class="malaria-destinations-desc"><?php echo esc_html(ep_field('mal_dest_desc', 'High-risk malaria destinations where antimalarials are essential:')); ?></p>
    </div>

    <div class="malaria-destinations-grid">
      <?php if (have_rows('mal_dest_zones')) : while (have_rows('mal_dest_zones')) : the_row(); ?>
        <div class="malaria-dest-card <?php echo esc_attr(get_sub_field('level')); ?>">
          <div class="malaria-dest-icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <div class="malaria-dest-countries">
            <?php if (have_rows('countries')) : while (have_rows('countries')) : the_row(); ?>
              <span><?php echo esc_html(get_sub_field('name')); ?></span>
            <?php endwhile; endif; ?>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="malaria-dest-card high">
          <div class="malaria-dest-icon"><i class="fas fa-globe-africa"></i></div>
          <h3>Africa</h3>
          <div class="malaria-dest-countries">
            <span>Kenya</span><span>Tanzania</span><span>Uganda</span><span>Ghana</span><span>Nigeria</span><span>Zambia</span><span>Zimbabwe</span><span>South Africa (certain regions)</span><span>Mozambique</span><span>Madagascar</span><span>Senegal</span>
          </div>
        </div>
        <div class="malaria-dest-card high">
          <div class="malaria-dest-icon"><i class="fas fa-globe-asia"></i></div>
          <h3>Asia</h3>
          <div class="malaria-dest-countries">
            <span>India (certain states)</span><span>Thailand (border regions)</span><span>Cambodia</span><span>Laos</span><span>Vietnam</span><span>Myanmar</span><span>Indonesia</span><span>Papua New Guinea</span><span>Philippines (certain islands)</span>
          </div>
        </div>
        <div class="malaria-dest-card moderate">
          <div class="malaria-dest-icon"><i class="fas fa-globe-americas"></i></div>
          <h3>Central & South America</h3>
          <div class="malaria-dest-countries">
            <span>Brazil (Amazon basin)</span><span>Peru (Amazon regions)</span><span>Colombia</span><span>Ecuador</span><span>Venezuela</span><span>Bolivia</span>
          </div>
        </div>
        <div class="malaria-dest-card low">
          <div class="malaria-dest-icon"><i class="fas fa-globe-europe"></i></div>
          <h3>Middle East</h3>
          <div class="malaria-dest-countries">
            <span>Yemen</span><span>Certain regions of Saudi Arabia</span>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <div class="malaria-destinations-callout">
      <div class="malaria-destinations-callout-card">
        <i class="fas fa-info-circle"></i>
        <div>
          <p><strong><?php echo esc_html(ep_field('mal_dest_callout_title', 'Important')); ?>:</strong> <?php echo esc_html(ep_field('mal_dest_callout_text', 'Malaria risk varies within countries. Cities and high-altitude areas often have no malaria risk, while rural/jungle regions do. During your consultation, we\'ll assess your specific itinerary.')); ?></p>
        </div>
      </div>
    </div>

    <div class="malaria-destinations-norisk">
      <h3><?php echo esc_html(ep_field('mal_dest_norisk_title', 'No malaria risk (antimalarials NOT needed):')); ?></h3>
      <p><?php echo esc_html(ep_field('mal_dest_norisk_text', 'Most of Caribbean, Mexico (tourist areas), Maldives, Bali (but other Indonesian islands DO have malaria), Dubai/UAE, most of China')); ?></p>
    </div>

    <div class="malaria-destinations-footer">
      <div class="info-badge">
        <i class="fas fa-user-doctor"></i>
        <?php echo esc_html(ep_field('mal_dest_footer', 'If you\'re unsure whether your destination requires antimalarials, book a consultation. We\'ll check current travel health guidance and advise accordingly.')); ?>
      </div>
      <div class="actions">
        <a href="<?php echo esc_url(ep_field('mal_cta_url', '') ?: ep_booking_url()); ?>" class="cta-button primary-cta">Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- S6: Why Easy Pharmacy -->
<section class="malaria-why-us-section">
  <div class="section-container">
    <div class="malaria-why-us-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('mal_whyus_badge', 'WHY EASY PHARMACY')); ?></span>
      </div>
      <h2 class="malaria-why-us-title"><?php echo esc_html(ep_field('mal_whyus_title', 'Why Travellers in Ashford, Chertsey & Walton Choose Easy Pharmacy')); ?></h2>
    </div>

    <div class="malaria-why-us-grid">
      <?php if (have_rows('mal_whyus_cards')) : while (have_rows('mal_whyus_cards')) : the_row(); ?>
        <div class="malaria-why-us-card">
          <div class="icon"><i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i></div>
          <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
          <p><?php echo esc_html(get_sub_field('description')); ?></p>
        </div>
      <?php endwhile; else : ?>
        <div class="malaria-why-us-card">
          <div class="icon"><i class="fas fa-user-md"></i></div>
          <h3>Travel Health Expertise</h3>
          <p>Dilip is a registered independent prescriber with specialist training in travel health. You're not just getting tablets — you're getting expert assessment of destination-specific malaria risk, medication suitability, and comprehensive prevention advice including mosquito bite avoidance strategies.</p>
        </div>
        <div class="malaria-why-us-card">
          <div class="icon"><i class="fas fa-calendar-check"></i></div>
          <h3>Same-Day Prescription & Supply</h3>
          <p>Most GP practices have weeks-long waiting lists and limited travel health expertise. Online pharmacies require postal delivery and impersonal forms. At Easy Pharmacy in Ashford, Chertsey, and Walton-on-Thames, book one appointment, get your prescription and medication the same day — no delays, no waiting.</p>
        </div>
        <div class="malaria-why-us-card">
          <div class="icon"><i class="fas fa-globe-europe"></i></div>
          <h3>Complete Travel Health Services</h3>
          <p>Planning a trip? Easy Pharmacy offers comprehensive travel health consultations including malaria prevention, altitude sickness tablets (for Kilimanjaro, Everest, etc.), and travel vaccinations. Get everything you need for safe travel in one convenient appointment — no referrals, no multiple visits.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- S7: FAQ Section -->
<section class="malaria-faq-section">
  <div class="section-container">
    <div class="malaria-faq-header">
      <div class="section-badge">
        <span class="pulse-dot"><span></span><span></span></span>
        <span class="section-badge-text"><?php echo esc_html(ep_field('mal_faq_badge', 'MALARIA FAQs')); ?></span>
      </div>
      <h2 class="malaria-faq-title"><?php echo esc_html(ep_field('mal_faq_title', 'Frequently Asked Questions')); ?></h2>
    </div>

    <div class="malaria-faq-list">
      <?php if (have_rows('mal_faqs')) : $faq_num = 0; while (have_rows('mal_faqs')) : the_row(); $faq_num++; ?>
        <div class="malaria-faq-item">
          <button class="malaria-faq-btn" onclick="toggleFAQ(this)">
            <span class="num"><?php echo esc_html(str_pad($faq_num, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="text"><?php echo esc_html(get_sub_field('question')); ?></span>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="malaria-faq-content">
            <p><?php echo esc_html(get_sub_field('answer')); ?></p>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="malaria-faq-item">
          <button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">01</span><span class="text">Do I need a GP referral for malaria tablets?</span><i class="fas fa-plus icon"></i></button>
          <div class="malaria-faq-content"><p>No. Easy Pharmacy's malaria prevention service is available without a GP referral. Dilip is a registered independent prescriber and can assess your suitability for antimalarials, issue a prescription, and supply the medication during your consultation. Book by calling 01784 255 222 or emailing hello@easypharmacy.co.uk.</p></div>
        </div>
        <div class="malaria-faq-item">
          <button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">02</span><span class="text">When should I book my malaria consultation?</span><i class="fas fa-plus icon"></i></button>
          <div class="malaria-faq-content"><p>Book 2-4 weeks before your trip. This ensures you have time to start the medication before travel (Malarone requires starting 1-2 days before, doxycycline 2 days before) and allows time to address any questions or side effects. Same-week appointments are often available if you're booking last-minute.</p></div>
        </div>
        <div class="malaria-faq-item">
          <button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">03</span><span class="text">How much do malaria tablets cost?</span><i class="fas fa-plus icon"></i></button>
          <div class="malaria-faq-content"><p>Pricing varies depending on which antimalarial is prescribed and trip duration. Doxycycline is typically most cost-effective for longer trips (4+ weeks). Malarone/Atovaquone-Proguanil is more expensive but preferred for shorter trips due to shorter post-travel dosing. We'll discuss costs during your consultation based on your specific needs.</p></div>
        </div>
        <div class="malaria-faq-item">
          <button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">04</span><span class="text">What are the side effects of antimalarials?</span><i class="fas fa-plus icon"></i></button>
          <div class="malaria-faq-content"><p>Malarone: Generally well-tolerated. Mild nausea, headache, or vivid dreams are possible but uncommon. Doxycycline: Sun sensitivity (requires high SPF sunscreen), nausea if taken on empty stomach (take with food), possible interaction with oral contraceptives. We'll discuss side effect management during your consultation and provide written guidance.</p></div>
        </div>
        <div class="malaria-faq-item">
          <button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">05</span><span class="text">Can I buy malaria tablets over the counter?</span><i class="fas fa-plus icon"></i></button>
          <div class="malaria-faq-content"><p>No. Antimalarials are prescription-only medicines in the UK and cannot be bought over the counter at pharmacies like Boots, Superdrug, or Asda. Easy Pharmacy's face-to-face service means you get expert travel health advice, your prescription, and your medication on the same day — no impersonal online forms, no postal delays.</p></div>
        </div>
        <div class="malaria-faq-item">
          <button class="malaria-faq-btn" onclick="toggleFAQ(this)"><span class="num">06</span><span class="text">Do antimalarials guarantee I won't get malaria?</span><i class="fas fa-plus icon"></i></button>
          <div class="malaria-faq-content"><p>No medication is 100% effective. Antimalarials significantly reduce your risk (90-95% protection depending on medication and compliance), but mosquito bite prevention is equally important. Use DEET repellent (50%+ concentration), sleep under mosquito nets, wear long sleeves/trousers at dusk/dawn, and stay in air-conditioned or screened accommodation when possible. We'll provide comprehensive prevention advice during your consultation.</p></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- S8: Final CTA Section (shared pattern — matches weight loss page exactly) -->
<section class="malaria-final-cta-section">
  <div class="malaria-final-cta-glow-1"></div>
  <div class="malaria-final-cta-glow-2"></div>
  <div class="malaria-final-cta-dots"></div>

  <div class="section-container">
    <div class="malaria-final-cta-content">
      <div class="malaria-final-cta-badges">
        <?php if (have_rows('mal_cta_badges')) : while (have_rows('mal_cta_badges')) : the_row(); ?>
          <div class="malaria-final-cta-badge"><i class="fas fa-check-circle"></i><span><?php echo esc_html(get_sub_field('text')); ?></span></div>
        <?php endwhile; else : ?>
          <div class="malaria-final-cta-badge"><i class="fas fa-shield-halved"></i><span>GPhC Registered</span></div>
          <div class="malaria-final-cta-badge"><i class="fas fa-user-doctor"></i><span>Independent Prescriber</span></div>
          <div class="malaria-final-cta-badge"><i class="fas fa-calendar-check"></i><span>Same-Day Appointments</span></div>
        <?php endif; ?>
      </div>

      <h2 class="malaria-final-cta-title"><?php echo esc_html(ep_field('mal_cta_title', 'Ready to Protect Yourself from Malaria?')); ?></h2>
      <p class="malaria-final-cta-description"><?php echo esc_html(ep_field('mal_cta_desc', 'Book your malaria prevention consultation at Easy Pharmacy serving Ashford, Chertsey, and Walton-on-Thames.')); ?></p>

      <div class="malaria-final-cta-actions">
        <a href="<?php echo esc_url(ep_field('mal_cta_url', '') ?: ep_booking_url()); ?>" class="cta-button primary-cta malaria-final-cta-button-white">
          Book Your Consultation <i class="fas fa-arrow-right"></i>
        </a>
        <a href="tel:<?php echo esc_attr(ep_phone_link()); ?>" class="cta-button secondary-cta malaria-final-cta-button-outlined">
          <i class="fas fa-phone"></i> <?php echo esc_html('Call ' . ep_phone()); ?>
        </a>
      </div>

      <div class="malaria-final-cta-checks">
        <div class="malaria-final-cta-check"><i class="fas fa-check"></i><span>No referral needed</span></div>
        <div class="malaria-final-cta-check"><i class="fas fa-check"></i><span>Same-day prescription & supply</span></div>
        <div class="malaria-final-cta-check"><i class="fas fa-check"></i><span>Travel vaccinations also available</span></div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
