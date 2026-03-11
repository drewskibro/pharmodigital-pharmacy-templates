// ============================================
// HAIR LOSS PAGE JAVASCRIPT
// ============================================

// Navigation logic handled by denton-nav.js

// ============================================
// FAQ ACCORDION (plus/minus icon toggle)
// ============================================
function toggleFAQ(button) {
  const item = button.closest('.hairloss-faq-item');
  const isActive = item.classList.contains('active');

  // Close all FAQs
  document.querySelectorAll('.hairloss-faq-item').forEach(faq => {
    faq.classList.remove('active');
    const icon = faq.querySelector('.icon i');
    if (icon) {
      icon.classList.remove('fa-minus');
      icon.classList.add('fa-plus');
    }
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('active');
    const icon = item.querySelector('.icon i');
    if (icon) {
      icon.classList.remove('fa-plus');
      icon.classList.add('fa-minus');
    }
  }
}
