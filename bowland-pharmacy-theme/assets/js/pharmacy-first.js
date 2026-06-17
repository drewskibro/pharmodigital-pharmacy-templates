// ============================================
// PHARMACY FIRST PAGE JAVASCRIPT
// ============================================

// ============================================
// SCROLL-TRIGGERED REVEAL ANIMATIONS
// ============================================
(function () {
  var reveals = document.querySelectorAll('.pharmfirst-reveal');
  if (!reveals.length) return;

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('pharmfirst-visible');
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
// FAQ ACCORDION
// ============================================
function togglePharmFirstFAQ(button) {
  const item = button.closest('.pharmfirst-faq-item');
  const isActive = item.classList.contains('active');

  // Close all FAQs
  document.querySelectorAll('.pharmfirst-faq-item').forEach(faq => {
    faq.classList.remove('active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('active');
  }
}

// ============================================
// CONDITION "BOOK NOW" — preselect type in the in-page Acuity calendar
// ============================================
(function () {
  var frame = document.getElementById('pharmfirst-acuity-frame');
  var section = document.getElementById('pharmfirst-book');
  if (!frame || !section) return;

  // Keep the pharmacy location locked: inherit owner + calendarID from the iframe.
  var defaultSrc = frame.src;
  function acuityBase() {
    var owner = (defaultSrc.match(/owner=(\d+)/) || [])[1] || '29286426';
    var cal = (defaultSrc.match(/calendarID=(\d+)/) || [])[1];
    var url = 'https://app.acuityscheduling.com/schedule.php?owner=' + owner;
    if (cal) { url += '&calendarID=' + cal; }
    return url;
  }

  document.querySelectorAll('.pharmfirst-condition-book[data-acuity-type]').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      var type = btn.getAttribute('data-acuity-type');
      if (type) {
        frame.src = acuityBase() + '&appointmentType=' + encodeURIComponent(type) + '&ref=embedded_csp';
      }
      section.scrollIntoView({ behavior: 'smooth' });
    });
  });
})();
