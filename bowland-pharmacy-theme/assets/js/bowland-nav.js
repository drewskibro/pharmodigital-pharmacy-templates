/**
 * Bowland Pharmacy — Three-Tier Navigation
 *
 * Handles:
 * - Scroll effect (shadow + compact mode)
 * - Search overlay with keyword map + WordPress search fallback
 * - Mobile menu toggle
 * - Mobile accordion sections
 * - Escape key to close search/mobile menu
 * - Auto-close mobile menu at desktop breakpoint
 *
 * @package Bowland_Pharmacy
 */
document.addEventListener('DOMContentLoaded', function () {
  var nav = document.querySelector('.bowland-nav');
  var mobileBtn = document.getElementById('bowland-mobile-btn');
  var mobileMenu = document.getElementById('bowland-mobile-menu');

  // ── Scroll Effect + Compact on scroll ──
  // Runs regardless of mobile menu presence.
  if (nav) {
    window.addEventListener('scroll', function () {
      var y = window.scrollY;
      nav.classList.toggle('scrolled', y > 10);
      nav.classList.toggle('nav-compact', y > 80);
    }, { passive: true });
  }

  // ── Search Overlay (created dynamically so it works on all pages) ──
  var searchBtn = document.getElementById('bowland-search-btn');
  if (searchBtn) {
    // Inject overlay HTML into body
    var overlayEl = document.createElement('div');
    overlayEl.className = 'bowland-search-overlay';
    overlayEl.id = 'bowland-search-overlay';
    overlayEl.setAttribute('role', 'dialog');
    overlayEl.setAttribute('aria-modal', 'true');
    overlayEl.setAttribute('aria-label', 'Search');
    overlayEl.innerHTML =
      '<button class="bowland-search-close" id="bowland-search-close" aria-label="Close search">' +
        '<svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>' +
        ' Close' +
      '</button>' +
      '<div class="bowland-search-inner">' +
        '<span class="bowland-search-label">What are you looking for?</span>' +
        '<form class="bowland-search-input-row" action="/" method="get">' +
          '<input type="text" class="bowland-search-input" id="bowland-search-input" name="s" placeholder="e.g. weight loss, travel vaccines\u2026" autocomplete="off" spellcheck="false" />' +
          '<button type="submit" class="bowland-search-submit" aria-label="Submit search">' +
            '<svg width="26" height="26" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>' +
          '</button>' +
        '</form>' +
        '<p class="bowland-search-hint"><strong>Popular:</strong> Weight Loss \u00b7 Travel Vaccines \u00b7 Yellow Fever \u00b7 NHS Services \u00b7 Hair Loss</p>' +
      '</div>';
    document.body.appendChild(overlayEl);

    var searchOverlay = overlayEl;
    var searchClose = document.getElementById('bowland-search-close');
    var searchInput = document.getElementById('bowland-search-input');
    var searchForm = overlayEl.querySelector('.bowland-search-input-row');

    var openSearch = function () {
      searchOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
      setTimeout(function () { if (searchInput) searchInput.focus(); }, 120);
    };

    var closeSearch = function () {
      searchOverlay.classList.remove('active');
      document.body.style.overflow = '';
    };

    searchBtn.addEventListener('click', openSearch);
    if (searchClose) searchClose.addEventListener('click', closeSearch);

    // Close on backdrop click
    searchOverlay.addEventListener('click', function (e) {
      if (e.target === searchOverlay) closeSearch();
    });

    // Close on Escape
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && searchOverlay.classList.contains('active')) closeSearch();
    });

    // ── Search: keyword map + WordPress search fallback ──
    if (searchForm) {
      searchForm.addEventListener('submit', function (e) {
        var query = searchInput.value.trim();
        if (!query) {
          e.preventDefault();
          return;
        }

        var lowerQuery = query.toLowerCase();

        // Keyword → page URL map (WordPress permalink paths)
        var searchMap = {
          'weight loss': '/weight-loss/',
          'weight': '/weight-loss/',
          'obesity': '/weight-loss/',
          'wegovy': '/weight-loss/',
          'mounjaro': '/weight-loss/',
          'travel': '/travel-health/',
          'travel health': '/travel-health/',
          'travel vaccines': '/travel-health/',
          'travel vaccination': '/travel-health/',
          'yellow fever': '/yellow-fever/',
          'typhoid': '/typhoid/',
          'hepatitis': '/hepatitis/',
          'rabies': '/rabies/',
          'brazil': '/travel-brazil/',
          'india': '/travel-india/',
          'thailand': '/travel-thailand/',
          'vietnam': '/travel-vietnam/',
          'kenya': '/travel-kenya/',
          'cape verde': '/travel-cape-verde/',
          'nhs': '/nhs-services/',
          'nhs services': '/nhs-services/',
          'prescriptions': '/nhs-services/',
          'pharmacy first': '/nhs-services/',
          'flu': '/nhs-services/',
          'flu jab': '/nhs-services/',
          'hair loss': '/hair-loss/',
          'hair': '/hair-loss/',
          'finasteride': '/hair-loss/',
          'ear wax': '/ear-wax-removal/',
          'ear wax removal': '/ear-wax-removal/',
          'microsuction': '/ear-wax-removal/',
          'book': '/book-appointment/',
          'appointment': '/book-appointment/',
          'consultation': '/book-appointment/',
          'switch': '/switch-provider/',
          'switch provider': '/switch-provider/',
          'register': '/switch-provider/',
          'team': '/team/',
          'about': '/team/',
          'blog': '/health-hub/'
        };

        // Check keyword map for direct page match
        var targetPage = null;
        for (var keyword in searchMap) {
          if (searchMap.hasOwnProperty(keyword) && lowerQuery.indexOf(keyword) !== -1) {
            targetPage = searchMap[keyword];
            break;
          }
        }

        if (targetPage) {
          e.preventDefault();
          window.location.href = targetPage;
        }
        // Otherwise let the form submit naturally to WordPress search (?s=query)
      });
    }
  }

  // ── Mobile Menu ──
  if (!mobileBtn || !mobileMenu) return;

  var mobileIcon = mobileBtn.querySelector('svg');

  var closeMobileMenu = function () {
    mobileMenu.classList.remove('active');
    mobileBtn.setAttribute('aria-expanded', 'false');
    if (mobileIcon) {
      mobileIcon.innerHTML = '<path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>';
    }
    document.body.style.overflow = '';
  };

  // ── Mobile Menu Toggle ──
  mobileBtn.addEventListener('click', function () {
    var isExpanded = mobileBtn.getAttribute('aria-expanded') === 'true';
    var opening = !isExpanded;

    mobileMenu.classList.toggle('active', opening);
    mobileBtn.setAttribute('aria-expanded', String(opening));

    if (opening) {
      if (mobileIcon) {
        mobileIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
      }
      document.body.style.overflow = 'hidden';
    } else {
      closeMobileMenu();
    }
  });

  // ── Accordion Sections ──
  var accordionBtns = document.querySelectorAll('.bowland-mobile-accordion-btn');
  accordionBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var accordion = btn.closest('.bowland-mobile-accordion');
      var isOpen = accordion.classList.contains('open');

      // Close all open accordions
      document.querySelectorAll('.bowland-mobile-accordion.open').forEach(function (a) {
        a.classList.remove('open');
      });

      // Open the clicked one if it was closed
      if (!isOpen) {
        accordion.classList.add('open');
      }
    });
  });

  // ── Close mobile menu on link click ──
  mobileMenu.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', closeMobileMenu);
  });

  // ── Close mobile menu on Escape ──
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
      closeMobileMenu();
    }
  });

  // ── Auto-close mobile menu at desktop breakpoint ──
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 1024 && mobileMenu.classList.contains('active')) {
      closeMobileMenu();
    }
  });
});
