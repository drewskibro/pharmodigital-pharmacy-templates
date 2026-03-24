// ============================================
// HEPATITIS VACCINATION PAGE JAVASCRIPT
// ============================================

// Nav logic is handled by bowland-nav.js

// ============================================
// FAQ ACCORDION
// ============================================
function toggleFAQ(button) {
  const item = button.closest('.hepatitis-faq-item');
  const isActive = item.classList.contains('travel-faq-active');

  document.querySelectorAll('.hepatitis-faq-item').forEach(faq => {
    faq.classList.remove('travel-faq-active');
  });

  if (!isActive) {
    item.classList.add('travel-faq-active');
  }
}
