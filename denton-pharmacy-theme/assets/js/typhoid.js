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
// FORMAT TOGGLE (Injection / Oral Capsules booking calendar)
// ============================================
function switchBookingFormat(button) {
  document.querySelectorAll('.typhoid-toggle-btn').forEach(function (btn) {
    btn.classList.remove('active');
  });
  button.classList.add('active');

  var iframe = document.getElementById('typhoid-acuity-iframe');
  var url = button.getAttribute('data-url');
  if (iframe && url) {
    iframe.src = url;
  }
}

// ============================================
// FAQ ACCORDION
// ============================================
function toggleFAQ(button) {
  const item = button.closest('.typhoid-faq-item');
  const isActive = item.classList.contains('travel-faq-active');

  // Close all FAQs
  document.querySelectorAll('.typhoid-faq-item').forEach(faq => {
    faq.classList.remove('travel-faq-active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('travel-faq-active');
  }
}
