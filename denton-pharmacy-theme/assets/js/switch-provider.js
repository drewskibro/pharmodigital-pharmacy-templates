// ============================================
// SWITCH PROVIDER PAGE JAVASCRIPT
// ============================================

// Navigation logic handled by denton-nav.js

// ============================================
// SCROLL-TRIGGERED REVEAL ANIMATIONS
// ============================================
(function () {
  var reveals = document.querySelectorAll('.switch-reveal');
  if (!reveals.length) return;

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('switch-visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15,
    rootMargin: '0px 0px -60px 0px'
  });

  reveals.forEach(function (el) {
    observer.observe(el);
  });
})();

// ============================================
// PROCESS TABS — highlight active tab on click
// ============================================
document.addEventListener('DOMContentLoaded', function () {
  var tabs = document.querySelectorAll('.process-tab-slide');

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      tabs.forEach(function (t) {
        t.classList.remove('process-tab-active');
      });
      tab.classList.add('process-tab-active');

      var step = tab.getAttribute('data-step');
      var card = document.querySelector('.process-content-card[data-step="' + step + '"]');
      if (card) {
        card.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    });
  });
});
