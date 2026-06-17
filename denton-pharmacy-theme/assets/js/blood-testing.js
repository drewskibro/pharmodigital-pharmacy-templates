// ============================================
// BLOOD TESTING PAGE JAVASCRIPT
// ============================================

// ============================================
// SCROLL-TRIGGERED REVEAL ANIMATIONS
// ============================================
(function () {
  var reveals = document.querySelectorAll('.bloodtest-reveal');
  if (!reveals.length) return;

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('bloodtest-visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0,
    rootMargin: '0px 0px -60px 0px'
  });

  reveals.forEach(function (el) {
    observer.observe(el);
  });
})();

// ============================================
// MOST REQUESTED "Book this test" — continuity note + scroll to calendar
// ============================================
(function () {
  var note = document.getElementById('bt-booking-selected');
  var target = document.getElementById('blood-testing-calendar');
  var buttons = document.querySelectorAll('.bt-featured-btn[data-test-name]');
  if (!buttons.length || !target) return;

  buttons.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      var name = btn.getAttribute('data-test-name');
      if (note && name) {
        note.textContent = 'Selected: ' + name;
        note.hidden = false;
      }
      target.scrollIntoView({ behavior: 'smooth' });
    });
  });
})();

// ============================================
// FAQ ACCORDION
// ============================================
function toggleBloodTestFAQ(button) {
  const item = button.closest('.bloodtest-faq-item');
  const isActive = item.classList.contains('active');

  // Close all FAQs
  document.querySelectorAll('.bloodtest-faq-item').forEach(faq => {
    faq.classList.remove('active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('active');
  }
}
