// ============================================
// CHICKENPOX VACCINATION PAGE JAVASCRIPT
// ============================================

// Nav logic is handled by bowland-nav.js

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
  document.querySelectorAll('.hepatitisb-toggle-btn').forEach(function (btn) {
    btn.classList.remove('active');
  });
  button.classList.add('active');

  var iframe = document.getElementById('hepatitisb-acuity-iframe');
  var url = button.getAttribute('data-url');
  if (iframe && url) {
    iframe.src = url;
  }
}

// ============================================
// FAQ ACCORDION
// ============================================
function toggleFAQ(button) {
  const item = button.closest('.hepatitisb-faq-item');
  const isActive = item.classList.contains('travel-faq-active');

  // Close all FAQs
  document.querySelectorAll('.hepatitisb-faq-item').forEach(faq => {
    faq.classList.remove('travel-faq-active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('travel-faq-active');
  }
}
