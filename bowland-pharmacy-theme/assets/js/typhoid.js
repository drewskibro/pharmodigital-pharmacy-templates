// ============================================
// TYPHOID VACCINATION PAGE JAVASCRIPT
// ============================================

// Nav logic is handled by bowland-nav.js

// ============================================
// FAQ ACCORDION
// ============================================
function toggleFAQ(button) {
  const item = button.closest('.typhoid-faq-item');
  const isActive = item.classList.contains('travel-faq-active');

  document.querySelectorAll('.typhoid-faq-item').forEach(faq => {
    faq.classList.remove('travel-faq-active');
  });

  if (!isActive) {
    item.classList.add('travel-faq-active');
  }
}
