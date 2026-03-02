// ============================================
// TYPHOID PAGE JAVASCRIPT
// ============================================

// FAQ ACCORDION
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
