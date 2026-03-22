// ============================================
// WEIGHT LOSS PAGE JAVASCRIPT
// ============================================

// ============================================
// SCROLL-TRIGGERED REVEAL ANIMATIONS
// ============================================
(function () {
  var reveals = document.querySelectorAll('.wl-reveal');
  if (!reveals.length) return;

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('wl-visible');
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
// FAQ ACCORDION
// ============================================
function toggleFAQ(button) {
  var item = button.closest('.wl-faq-item');
  var isActive = item.classList.contains('wl-faq-active');

  // Close all FAQs
  document.querySelectorAll('.wl-faq-item').forEach(function (faq) {
    faq.classList.remove('wl-faq-active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('wl-faq-active');
  }
}
