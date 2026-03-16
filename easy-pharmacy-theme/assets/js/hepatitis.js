// ============================================
// HEPATITIS PAGE JAVASCRIPT
// ============================================

// FAQ Accordion
function toggleFAQ(button) {
  var item = button.closest('.hepatitis-faq-item');
  var isActive = item.classList.contains('travel-faq-active');

  // Close all FAQs
  document.querySelectorAll('.hepatitis-faq-item').forEach(function(faq) {
    faq.classList.remove('travel-faq-active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('travel-faq-active');
  }
}
