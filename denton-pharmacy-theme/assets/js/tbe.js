// ============================================
// CHICKENPOX VACCINATION PAGE JAVASCRIPT
// ============================================

// Nav logic is handled by denton-nav.js

// ============================================
// SCROLL TO BOOKING (Acuity embed)
// ============================================
function scrollToBooking() {
  const booking = document.getElementById('booking-widget');
  if (booking) {
    booking.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

// ============================================
// AGE TOGGLE (Adult / Child booking calendar)
// ============================================
function switchBookingAge(button) {
  document.querySelectorAll('.tbe-toggle-btn').forEach(function (btn) {
    btn.classList.remove('active');
  });
  button.classList.add('active');

  var iframe = document.getElementById('tbe-acuity-iframe');
  var url = button.getAttribute('data-url');
  if (iframe && url) {
    iframe.src = url;
  }
}

// ============================================
// FAQ ACCORDION
// ============================================
function toggleFAQ(button) {
  const item = button.closest('.tbe-faq-item');
  const isActive = item.classList.contains('travel-faq-active');

  // Close all FAQs
  document.querySelectorAll('.tbe-faq-item').forEach(faq => {
    faq.classList.remove('travel-faq-active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('travel-faq-active');
  }
}
