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

// ============================================
// BOOKING FROM FEATURED TESTS AND CATALOGUE RESULTS
// ============================================
(function () {
  var frame = document.getElementById('bt-acuity-frame');
  var calendar = document.getElementById('blood-testing-calendar');
  var selection = document.getElementById('bt-booking-selected');
  if (!frame || !calendar || !selection) return;

  var categoryUrl = frame.src;
  var catalogue = document.getElementById('blood-test-catalogue');
  var list = document.getElementById('tsbt-list');
  var appointmentTypes = catalogue ? JSON.parse(catalogue.dataset.appointmentTypes || '{}') : {};
  var generalType = '59509551';

  function bindBooking(control, type, test) {
    control.addEventListener('click', function (event) {
      event.preventDefault();
      // Keep the selection in Bowland's existing booking frame.
      var url = new URL(categoryUrl);
      url.searchParams.set('appointmentType', type);
      if (type === generalType) url.searchParams.set('field:19120441', test);
      frame.src = url.href;
      selection.textContent = 'Selected: ' + test;
      var clear = document.createElement('span');
      clear.className = 'bt-booking-clear';
      clear.textContent = '✕ show all';
      selection.appendChild(clear);
      selection.hidden = false;
      selection.focus({ preventScroll: true });
      calendar.scrollIntoView({ behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth' });
    });
  }

  selection.addEventListener('click', function () {
    frame.src = categoryUrl;
    selection.hidden = true;
    selection.textContent = '';
    frame.focus({ preventScroll: true });
  });

  document.querySelectorAll('.bt-featured-btn[data-test-name]').forEach(function (link) {
    var code = link.dataset.testCode;
    var test = code ? code + ' · ' + link.dataset.testName : link.dataset.testName;
    bindBooking(link, link.dataset.acuityType || appointmentTypes[code] || generalType, test);
  });

  if (!list || !catalogue) return;

  function appendBookingButton(container, label, type, test) {
    var button = document.createElement('button');
    button.type = 'button';
    button.className = 'bt-featured-btn';
    button.textContent = label;
    button.setAttribute('aria-label', label + ', ' + test);
    bindBooking(button, type, test);
    container.appendChild(button);
  }

  function addCatalogueBooking(card) {
    if (card.nodeType !== 1 || !card.matches('.tsbt-card') || card.querySelector('.bt-catalogue-actions')) return;
    var code = card.querySelector('.tsbt-code').textContent.trim();
    var name = card.querySelector('.tsbt-name').textContent.trim();
    var test = code + ' · ' + name;
    var actions = document.createElement('div');
    actions.className = 'bt-catalogue-actions';
    if (code === 'HUMA') {
      var instruction = document.createElement('p');
      instruction.textContent = 'Choose a main test, then select the Biological Age Add-on when booking.';
      actions.appendChild(instruction);
      appendBookingButton(actions, 'Book with Well Man Premier Plus', '59509699', test);
      appendBookingButton(actions, 'Book with Well Woman Premier Plus', '59509703', test);
    } else {
      appendBookingButton(actions, 'Book this test', appointmentTypes[code] || generalType, test);
    }
    card.appendChild(actions);
  }

  // The catalogue plugin replaces the result cards after every search and page change.
  new MutationObserver(function (changes) {
    changes.forEach(function (change) {
      change.addedNodes.forEach(addCatalogueBooking);
    });
  }).observe(list, { childList: true });
  Array.from(list.children).forEach(addCatalogueBooking);
})();
