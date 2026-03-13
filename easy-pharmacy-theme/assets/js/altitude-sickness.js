// ============================================
// ALTITUDE SICKNESS PAGE JAVASCRIPT
// ============================================

// Menu logic is handled by mega-menu.js

// ============================================
// FAQ ACCORDION
// ============================================
function toggleAltFaq(button) {
  const item = button.closest('.alt-faq-item');
  const isActive = item.classList.contains('active');

  // Close all FAQs
  document.querySelectorAll('.alt-faq-item').forEach(faq => {
    faq.classList.remove('active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('active');
  }
}
