/**
 * Home Page Scroll Reveal Animations
 *
 * Uses IntersectionObserver to add reveal classes when sections
 * scroll into view. Each section config defines the container,
 * the child items to stagger, and the animation direction.
 */
(function () {
  'use strict';

  // Bail if user prefers reduced motion
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    return;
  }

  /**
   * Section animation configs.
   * - selector: the section container
   * - children: child elements to animate with stagger (optional)
   * - type: 'reveal' (up), 'reveal-left', 'reveal-right', 'reveal-scale'
   * - header: optional header element to animate separately before children
   */
  var sections = [
    // Stats bar — each stat item staggers in
    {
      selector: '.stats-section',
      children: '.stat-item',
      type: 'reveal'
    },
    // Treatments — header fades in, then cards stagger
    {
      selector: '.treatments-section',
      header: '.treatments-header',
      children: '.treatment-card',
      type: 'reveal'
    },
    // Pharmacist — image from left, content from right
    {
      selector: '.pharmacist-section',
      items: [
        { selector: '.pharmacist-image-wrapper', type: 'reveal-left' },
        { selector: '.pharmacist-content', type: 'reveal-right' }
      ]
    },
    // How It Works — header then steps stagger
    {
      selector: '.how-it-works-section',
      header: '.how-it-works-header',
      children: '.how-it-works-step',
      type: 'reveal'
    },
    // Quick Book — left from left, card from right
    {
      selector: '.qb-section',
      items: [
        { selector: '.qb-left', type: 'reveal-left' },
        { selector: '.qb-right', type: 'reveal-right' }
      ]
    },
    // Switching — header then cards stagger
    {
      selector: '.switching-section',
      header: '.switching-header',
      children: '.switching-card',
      type: 'reveal'
    },
    // Safe & Secure — features from left, card from right
    {
      selector: '.safe-section',
      header: '.safe-header',
      items: [
        { selector: '.safe-features', type: 'reveal-left' },
        { selector: '.safe-card-wrapper', type: 'reveal-right' }
      ]
    },
    // Health Hub — header then cards stagger
    {
      selector: '.healthhub-section',
      header: '.healthhub-header',
      children: '.healthhub-card',
      type: 'reveal'
    },
    // Location — map scales in, card from right
    {
      selector: '.location-section',
      items: [
        { selector: '.location-map-wrapper', type: 'reveal-scale' },
        { selector: '.location-card', type: 'reveal-right' }
      ]
    },
    // Testimonials — header then cards stagger
    {
      selector: '.testimonials-section',
      header: '.testimonials-header',
      children: '.testimonial-card',
      type: 'reveal'
    }
  ];

  /**
   * Add reveal class to an element (sets it to hidden).
   */
  function addRevealClass(el, type) {
    el.classList.add(type || 'reveal');
  }

  /**
   * Mark element as visible (triggers the CSS transition).
   */
  function makeVisible(el) {
    el.classList.add('is-visible');
  }

  /**
   * Set up all sections: add hidden classes, create observers.
   */
  function init() {
    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;

          var section = entry.target;
          var sectionConfig = section._revealConfig;

          // Reveal the header first if present
          if (sectionConfig.headerEl) {
            makeVisible(sectionConfig.headerEl);
          }

          // Reveal individual items with directional animations
          if (sectionConfig.itemEls) {
            sectionConfig.itemEls.forEach(function (item, i) {
              item.el.style.transitionDelay = (i * 0.12) + 's';
              makeVisible(item.el);
            });
          }

          // Reveal staggered children
          if (sectionConfig.childEls) {
            sectionConfig.childEls.forEach(function (child, i) {
              child.style.transitionDelay = (i * 0.1 + (sectionConfig.headerEl ? 0.15 : 0)) + 's';
              makeVisible(child);
            });
          }

          // If section itself is a reveal target (no children)
          if (!sectionConfig.childEls && !sectionConfig.itemEls && !sectionConfig.headerEl) {
            makeVisible(section);
          }

          observer.unobserve(section);
        });
      },
      {
        threshold: 0.12,
        rootMargin: '0px 0px -40px 0px'
      }
    );

    sections.forEach(function (config) {
      var section = document.querySelector(config.selector);
      if (!section) return;

      var revealData = {};

      // Header element
      if (config.header) {
        var headerEl = section.querySelector(config.header);
        if (headerEl) {
          addRevealClass(headerEl, 'reveal');
          revealData.headerEl = headerEl;
        }
      }

      // Directional items (e.g. left/right pairs)
      if (config.items) {
        revealData.itemEls = [];
        config.items.forEach(function (item) {
          var el = section.querySelector(item.selector);
          if (el) {
            addRevealClass(el, item.type);
            revealData.itemEls.push({ el: el, type: item.type });
          }
        });
      }

      // Staggered children
      if (config.children) {
        var children = section.querySelectorAll(config.children);
        if (children.length) {
          revealData.childEls = [];
          children.forEach(function (child) {
            addRevealClass(child, config.type || 'reveal');
            revealData.childEls.push(child);
          });
        }
      }

      section._revealConfig = revealData;
      observer.observe(section);
    });
  }

  // Run after DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
