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
// FAQ ACCORDION
// ============================================
function toggleFAQ(button) {
  const item = button.closest('.pneumonia-faq-item');
  const isActive = item.classList.contains('travel-faq-active');

  // Close all FAQs
  document.querySelectorAll('.pneumonia-faq-item').forEach(faq => {
    faq.classList.remove('travel-faq-active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('travel-faq-active');
  }
}
