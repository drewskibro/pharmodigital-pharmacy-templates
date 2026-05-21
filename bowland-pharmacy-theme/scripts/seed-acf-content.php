<?php
/**
 * Seed ACF content for NHS Prescriptions, Blister Packs, Travel Health vaccinations.
 * Run with: wp eval-file /tmp/bowland-seed-acf.php
 */

if ( ! function_exists( 'update_field' ) ) {
    echo "ACF not active\n";
    exit;
}

// -------- Resolve Page IDs -----------
$np_id = get_posts( [ 'post_type' => 'page', 'name' => 'nhs-prescriptions', 'fields' => 'ids', 'posts_per_page' => 1 ] );
$bp_id = get_posts( [ 'post_type' => 'page', 'name' => 'blister-packs', 'fields' => 'ids', 'posts_per_page' => 1 ] );
$th_id = get_posts( [ 'post_type' => 'page', 'name' => 'travel-health', 'fields' => 'ids', 'posts_per_page' => 1 ] );

$np = $np_id[0] ?? 0;
$bp = $bp_id[0] ?? 0;
$th = $th_id[0] ?? 0;

echo "NHS Prescriptions: $np | Blister Packs: $bp | Travel Health: $th\n";

// =============================================================================
// NHS PRESCRIPTIONS (np_*)
// =============================================================================
if ( $np ) {
    update_field( 'np_hero_badge',       'NHS Prescriptions', $np );
    update_field( 'np_hero_title_accent', 'Fast, Free', $np );
    update_field( 'np_hero_title_rest',   'NHS Prescriptions', $np );
    update_field( 'np_hero_description',  "Whether it's a repeat or a one-off prescription, we promise to fulfill all prescriptions promptly with a fast and efficient service. Free delivery across Wythenshawe — including refrigerated items and controlled drugs.", $np );
    update_field( 'np_hero_cta_primary',  [ 'title' => 'Register Now', 'url' => 'https://bowlandpharmacy.co.uk/prescriptions/', 'target' => '' ], $np );
    update_field( 'np_hero_cta_secondary',[ 'title' => 'Call 0161 998 7114', 'url' => 'tel:01619987114', 'target' => '' ], $np );

    update_field( 'np_hero_trust_pills', [
        [ 'icon' => 'fa-solid fa-truck',       'text' => 'Free Delivery' ],
        [ 'icon' => 'fa-solid fa-bell',        'text' => 'SMS Notifications' ],
        [ 'icon' => 'fa-solid fa-user-doctor', 'text' => 'Pharmacist Support' ],
    ], $np );

    update_field( 'np_hero_card_label', 'NHS Prescription', $np );
    update_field( 'np_hero_card_price', 'FREE', $np );
    update_field( 'np_hero_card_sub',   'if you qualify', $np );
    update_field( 'np_hero_card_checks', [
        [ 'text' => 'NHS Nominated pharmacy' ],
        [ 'text' => 'Repeat prescriptions handled' ],
        [ 'text' => 'Same-day collection' ],
    ], $np );

    update_field( 'np_elig_badge',       'Who Qualifies', $np );
    update_field( 'np_elig_title',       "Free NHS Prescriptions — Who's Eligible", $np );
    update_field( 'np_elig_description', 'Most patients qualify for free NHS prescriptions. Check the categories below — if any apply, your prescription is free.', $np );
    update_field( 'np_elig_items', [
        [ 'icon' => 'fa-solid fa-cake-candles', 'title' => 'Age 60+ or under 16', 'description' => 'Free prescriptions regardless of income or circumstances.' ],
        [ 'icon' => 'fa-solid fa-graduation-cap', 'title' => '16–18 in full-time education', 'description' => 'Continue to qualify while you are studying.' ],
        [ 'icon' => 'fa-solid fa-baby', 'title' => 'Maternity / Medical Exemption', 'description' => 'Valid MatEx or MedEx certificate holders.' ],
        [ 'icon' => 'fa-solid fa-id-card', 'title' => 'Prepayment Certificate', 'description' => 'PPC, HRT-only PPC or MoD exemption holders.' ],
        [ 'icon' => 'fa-solid fa-hand-holding-heart', 'title' => 'Income-based benefits', 'description' => 'Income Support, JSA, ESA, Pension Credit Guarantee, Universal Credit (criteria apply), Tax Credit exemption.' ],
        [ 'icon' => 'fa-solid fa-shield', 'title' => 'HC2 / Full Help certificate', 'description' => 'NHS Low Income Scheme holders with the HC2 certificate.' ],
    ], $np );

    update_field( 'np_process_badge',       'How It Works', $np );
    update_field( 'np_process_title',       'Three Simple Steps to Your Prescriptions', $np );
    update_field( 'np_process_description', 'Nominate Bowland Pharmacy once and receive your medication, month after month.', $np );
    update_field( 'np_process_steps', [
        [ 'icon' => 'fa-solid fa-pen', 'title' => 'Register', 'description' => 'Complete our short online form to nominate Bowland Pharmacy as your NHS pharmacy — takes two minutes.' ],
        [ 'icon' => 'fa-solid fa-stethoscope', 'title' => 'We Coordinate', 'description' => 'We contact your GP for repeats, access your Summary Care Record for safety checks, and dispense promptly.' ],
        [ 'icon' => 'fa-solid fa-truck', 'title' => 'Delivery or Collection', 'description' => 'Free delivery across Wythenshawe — including fridge items and controlled drugs — or collect in-store. SMS when ready.' ],
    ], $np );

    update_field( 'np_faq_badge',   'Common Questions', $np );
    update_field( 'np_faq_title',   'NHS Prescriptions — Answered', $np );
    update_field( 'np_faqs', [
        [ 'question' => 'How do I nominate Bowland Pharmacy?', 'answer' => 'Either complete our online registration or tell us in-store — we handle the rest with your GP.' ],
        [ 'question' => 'Is delivery really free?', 'answer' => 'Yes. Free delivery across Wythenshawe, including refrigerated items and controlled drugs.' ],
        [ 'question' => 'How quickly will my prescription be ready?', 'answer' => 'Most prescriptions are ready within 24 hours. You will receive an SMS when yours is prepared.' ],
        [ 'question' => 'Can I switch pharmacies to Bowland?', 'answer' => 'Absolutely. We handle the switch from your current pharmacy — no paperwork for you.' ],
        [ 'question' => 'Do you dispense controlled drugs?', 'answer' => 'Yes. Our pharmacist Ahmed Al-Liabi handles all controlled drug prescriptions directly.' ],
    ], $np );

    update_field( 'np_cta_title',       'Register with Bowland Pharmacy', $np );
    update_field( 'np_cta_description', 'Free, fast, local. Nominate us today and experience how a proper independent pharmacy feels.', $np );
    update_field( 'np_cta_primary',     [ 'title' => 'Register Now', 'url' => 'https://bowlandpharmacy.co.uk/prescriptions/', 'target' => '' ], $np );
    update_field( 'np_cta_secondary',   [ 'title' => 'Call 0161 998 7114', 'url' => 'tel:01619987114', 'target' => '' ], $np );
    update_field( 'np_cta_badges', [
        [ 'text' => 'GPhC Registered' ],
        [ 'text' => 'NHS Partner' ],
        [ 'text' => '15+ Years in Wythenshawe' ],
    ], $np );

    echo "NHS Prescriptions ($np): seeded\n";
}

// =============================================================================
// BLISTER PACKS (bp_*)
// =============================================================================
if ( $bp ) {
    update_field( 'bp_hero_badge',        'Blister Packs', $bp );
    update_field( 'bp_hero_title_accent', 'Your medicine,', $bp );
    update_field( 'bp_hero_title_rest',   'laid out by the day', $bp );
    update_field( 'bp_hero_description',  "A paid multi-compliance aid service. We organise your medication into clearly labelled blister packs — every day, every dose — so you never miss a tablet again.", $bp );
    update_field( 'bp_hero_cta_primary',  [ 'title' => 'Book an Assessment', 'url' => '/book-appointment/', 'target' => '' ], $bp );
    update_field( 'bp_hero_cta_secondary',[ 'title' => 'Call 0161 998 7114', 'url' => 'tel:01619987114', 'target' => '' ], $bp );

    update_field( 'bp_hero_trust_pills', [
        [ 'icon' => 'fa-solid fa-calendar-days', 'text' => 'Weekly Dispensing' ],
        [ 'icon' => 'fa-solid fa-shield-halved', 'text' => 'Pharmacist Checked' ],
        [ 'icon' => 'fa-solid fa-house',         'text' => 'Delivery Available' ],
    ], $bp );

    update_field( 'bp_hero_card_label', 'Monthly', $bp );
    update_field( 'bp_hero_card_price', '£25', $bp );
    update_field( 'bp_hero_card_sub',   'per month · £270/yr if paid annually (10% off)', $bp );
    update_field( 'bp_hero_card_checks', [
        [ 'text' => 'Weekly blister packs' ],
        [ 'text' => 'MAR sheets included' ],
        [ 'text' => 'Pharmacist-checked' ],
    ], $bp );

    update_field( 'bp_elig_badge',       "Who It's For", $bp );
    update_field( 'bp_elig_title',       'Blister Packs — Who benefits most', $bp );
    update_field( 'bp_elig_description', 'A paid service ideal for anyone managing multiple medications, complex routines, or supporting a loved one at home.', $bp );
    update_field( 'bp_elig_items', [
        [ 'icon' => 'fa-solid fa-pills', 'title' => 'Multiple daily medications', 'description' => 'If you take three or more prescriptions daily, blister packs dramatically reduce the chance of missed or double doses.' ],
        [ 'icon' => 'fa-solid fa-user-group', 'title' => 'Carers and family members', 'description' => 'Visible, dated compartments make it easy for family or carers to check the day\'s medication has been taken.' ],
        [ 'icon' => 'fa-solid fa-house-medical', 'title' => 'Living independently at home', 'description' => 'Older patients who want to stay home safely benefit from the clear, structured layout.' ],
        [ 'icon' => 'fa-solid fa-hospital', 'title' => 'Post-hospital discharge', 'description' => 'After a hospital stay, blister packs help re-establish a reliable medication routine.' ],
    ], $bp );

    update_field( 'bp_process_badge',       'How It Works', $bp );
    update_field( 'bp_process_title',       'From assessment to weekly delivery', $bp );
    update_field( 'bp_process_description', 'We assess, dispense, and deliver — so you can focus on getting better, not on admin.', $bp );
    update_field( 'bp_process_steps', [
        [ 'icon' => 'fa-solid fa-clipboard-list', 'title' => 'In-store Assessment', 'description' => 'Ahmed reviews your medication list, routine, and any changes from your GP.' ],
        [ 'icon' => 'fa-solid fa-boxes-stacked', 'title' => 'Weekly Dispensing', 'description' => 'Your medication is laid out by day and dose into sealed blister packs, checked by our pharmacist.' ],
        [ 'icon' => 'fa-solid fa-handshake-angle', 'title' => 'Collection or Delivery', 'description' => 'Collect in-store or we deliver weekly across Wythenshawe — whichever suits you best.' ],
    ], $bp );

    update_field( 'bp_faq_badge', 'Common Questions', $bp );
    update_field( 'bp_faq_title', 'Blister Packs — FAQ', $bp );
    update_field( 'bp_faqs', [
        [ 'question' => 'How much does it cost?', 'answer' => '£25 per month, or £270 upfront for a year (10% off). Please only commit to a payment plan once an in-store assessment has been completed.' ],
        [ 'question' => 'Is the service free on the NHS?', 'answer' => 'No — blister packs are a private, paid service. NHS prescription costs are separate and charged (or exempted) as normal.' ],
        [ 'question' => 'Can family members pay on a patient\'s behalf?', 'answer' => 'Yes. Many of our blister-pack patients have family paying monthly or yearly. Speak to Ahmed for details.' ],
        [ 'question' => 'What happens if my medication changes?', 'answer' => 'We re-dispense the affected week\'s pack at no extra cost. Any changes from your GP come through automatically.' ],
        [ 'question' => 'Do you deliver blister packs?', 'answer' => 'Yes. Free weekly delivery across Wythenshawe if you prefer not to collect in person.' ],
    ], $bp );

    update_field( 'bp_cta_title',       'Book your Blister Pack assessment', $bp );
    update_field( 'bp_cta_description', 'A fifteen-minute chat with Ahmed to review your medication — no commitment until you are happy.', $bp );
    update_field( 'bp_cta_primary',     [ 'title' => 'Book an Assessment', 'url' => '/book-appointment/', 'target' => '' ], $bp );
    update_field( 'bp_cta_secondary',   [ 'title' => 'Call 0161 998 7114', 'url' => 'tel:01619987114', 'target' => '' ], $bp );
    update_field( 'bp_cta_badges', [
        [ 'text' => 'GPhC Registered' ],
        [ 'text' => 'Same-Day Appointments' ],
        [ 'text' => 'Free Parking' ],
    ], $bp );

    echo "Blister Packs ($bp): seeded\n";
}

// =============================================================================
// TRAVEL HEALTH — Vaccinations repeater (th_vaccinations)
// =============================================================================
if ( $th ) {
    update_field( 'th_vaccines_badge',          'ALL VACCINATIONS', $th );
    update_field( 'th_vaccines_title_highlight','Available', $th );
    update_field( 'th_vaccines_title_rest',     'Vaccinations', $th );

    update_field( 'th_vaccinations', [
        [ 'icon' => 'fa-solid fa-shield-virus',  'name' => 'Yellow Fever',            'is_featured' => 1, 'badge' => 'Official Centre' ],
        [ 'icon' => 'fa-solid fa-syringe',       'name' => 'Hepatitis A',             'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-syringe',       'name' => 'Hepatitis B',             'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-syringe',       'name' => 'Typhoid',                 'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-paw',           'name' => 'Rabies',                  'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-mosquito',      'name' => 'Japanese Encephalitis',   'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-tree',          'name' => 'Tick-Borne Encephalitis', 'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-virus',         'name' => 'Meningitis ACWY',         'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-virus',         'name' => 'Meningitis B',            'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-water',         'name' => 'Cholera',                 'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-shield',        'name' => 'Diphtheria, Tetanus & Polio', 'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-syringe',       'name' => 'MMR',                     'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-lungs',         'name' => 'Pneumonia',               'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-droplet',       'name' => 'Chickenpox',              'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-shield-virus', 'name' => 'Shingles',                'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-virus-covid',   'name' => 'COVID-19',                'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-virus',         'name' => 'Flu (Seasonal)',          'is_featured' => 0, 'badge' => '' ],
        [ 'icon' => 'fa-solid fa-mosquito-net',  'name' => 'Malaria Prevention',      'is_featured' => 0, 'badge' => 'Advice & Rx' ],
    ], $th );

    echo "Travel Health ($th): vaccinations repeater seeded (" . count( get_field('th_vaccinations', $th) ) . " rows)\n";
}

// Flush caches
wp_cache_flush();
echo "Done. Flush site cache via wp cache flush afterwards.\n";
