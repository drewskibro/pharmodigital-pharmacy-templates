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
  var frame = document.getElementById('bt-acuity-frame');
  var buttons = document.querySelectorAll('.bt-featured-btn[data-test-name]');
  if (!buttons.length || !target) return;

  // Remember the iframe's original src (full categorised list, locked location)
  // so the user can return to it after picking a specific test.
  var defaultSrc = frame ? frame.src : '';

  // Build the base URL from the iframe's own owner + calendarID so the
  // pharmacy location stays locked to this site (no location picker).
  function acuityBase() {
    var owner = (defaultSrc.match(/owner=(\d+)/) || [])[1] || '29286426';
    var cal = (defaultSrc.match(/calendarID=(\d+)/) || [])[1];
    var url = 'https://app.acuityscheduling.com/schedule.php?owner=' + owner;
    if (cal) { url += '&calendarID=' + cal; }
    return url;
  }

  function resetToAll() {
    if (frame && defaultSrc) { frame.src = defaultSrc; }
    if (note) { note.hidden = true; note.innerHTML = ''; }
  }

  // Clicking the chip returns to the full list.
  if (note) {
    note.addEventListener('click', resetToAll);
  }

  buttons.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      var name = btn.getAttribute('data-test-name');
      var type = btn.getAttribute('data-acuity-type');
      if (frame && type) {
        frame.src = acuityBase() + '&appointmentType=' + encodeURIComponent(type) + '&ref=embedded_csp';
      }
      if (note && name) {
        note.innerHTML = '';
        note.appendChild(document.createTextNode('Selected: ' + name));
        var clear = document.createElement('span');
        clear.className = 'bt-booking-clear';
        clear.textContent = '✕ show all';
        note.appendChild(clear);
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
