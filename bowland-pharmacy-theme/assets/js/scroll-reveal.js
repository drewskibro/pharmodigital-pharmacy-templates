/**
 * Scroll Reveal — Smooth entrance animations on scroll
 *
 * Uses IntersectionObserver to trigger GPU-composited animations
 * (opacity + transform only) as elements enter the viewport.
 * Each element animates once and stays visible.
 *
 * @package Bowland_Pharmacy
 */
(function () {
  'use strict';

  // Bail if no IntersectionObserver (very old browsers)
  if (!('IntersectionObserver' in window)) return;

  // Respect reduced-motion preference
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  /**
   * Sections that should reveal on scroll.
   * Hero + stats are above the fold — skip them.
   */
  var sectionSelectors = [
    '.nhs-services-section',
    '.treatments-section',
    '.pharmacist-section',
    '.how-it-works-section',
    '.switching-section',
    '.revslider-section',
    '.safe-secure-section',
    '.health-hub-section',
    '.location-section',
    '.testimonials-section'
  ];

  /**
   * Children that should stagger within their parent section.
   * Selector is relative to the revealed section.
   */
  var staggerSelectors = [
    '.treatment-card',
    '.how-it-works-step',
    '.switching-feature-card',
    '.safe-card',
    '.healthhub-article-card',
    '.testimonial-card',
    '.stats-item',
    '.nhs-card'
  ];

  // Combine into a single query
  var staggerQuery = staggerSelectors.join(', ');

  /**
   * Apply the initial hidden state via JS (not CSS) so content
   * is visible if JS fails or is blocked. Progressive enhancement.
   */
  function hideElement(el, delay) {
    el.style.opacity = '0';
    el.style.transform = 'translateY(40px)';
    el.style.transition = 'none';
    el.style.willChange = 'opacity, transform';
    if (delay) {
      el.dataset.revealDelay = delay;
    }
  }

  function revealElement(el) {
    var delay = el.dataset.revealDelay || '0';
    // Force a reflow so the browser registers the hidden state
    // before we apply the transition
    void el.offsetHeight;
    el.style.transition =
      'opacity 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) ' + delay + 'ms, ' +
      'transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) ' + delay + 'ms';
    el.style.opacity = '1';
    el.style.transform = 'translateY(0)';
  }

  function cleanUp(el) {
    el.style.willChange = '';
    el.style.transition = '';
    delete el.dataset.revealDelay;
  }

  /**
   * Initialise: find all sections, hide them and their stagger children
   */
  var sections = document.querySelectorAll(sectionSelectors.join(', '));
  if (!sections.length) return;

  sections.forEach(function (section) {
    hideElement(section, 0);

    // Find stagger children within this section
    var children = section.querySelectorAll(staggerQuery);
    children.forEach(function (child, i) {
      // Stagger: 100ms between each child, starting 150ms after section
      hideElement(child, 150 + i * 100);
    });
  });

  /**
   * Observer: trigger reveal when 12% of the section is visible.
   * Low threshold = animations start early for a smooth feel,
   * not a jarring pop-in right at the edge.
   */
  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;

        var section = entry.target;

        // Reveal the section itself
        revealElement(section);

        // Reveal stagger children
        var children = section.querySelectorAll(staggerQuery);
        children.forEach(function (child) {
          revealElement(child);
        });

        // Clean up will-change after animations finish
        var maxDelay = children.length ? 150 + children.length * 100 : 0;
        setTimeout(function () {
          cleanUp(section);
          children.forEach(cleanUp);
        }, 800 + maxDelay);

        // Stop watching — animate once only
        observer.unobserve(section);
      });
    },
    { threshold: 0.12 }
  );

  sections.forEach(function (section) {
    observer.observe(section);
  });
})();
