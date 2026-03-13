// ============================================
// SMOKING CESSATION PAGE JAVASCRIPT
// ============================================

// Menu logic is handled by mega-menu.js

// ============================================
// FAQ ACCORDION
// ============================================
function toggleSCFaq(button) {
  const item = button.closest('.sc-faq-item');
  const isActive = item.classList.contains('active');

  // Close all FAQs
  document.querySelectorAll('.sc-faq-item').forEach(faq => {
    faq.classList.remove('active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('active');
  }
}
