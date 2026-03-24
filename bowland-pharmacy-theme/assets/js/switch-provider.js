// ============================================
// SWITCH PROVIDER PAGE JAVASCRIPT
// ============================================

// Navigation logic handled by bowland-nav.js

// Process Tabs — highlight active tab on click and scroll to matching card
document.addEventListener('DOMContentLoaded', function () {
  var tabs = document.querySelectorAll('.process-tab-slide');

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      tabs.forEach(function (t) {
        t.classList.remove('process-tab-active');
      });
      tab.classList.add('process-tab-active');

      var step = tab.getAttribute('data-step');
      var card = document.querySelector('.process-content-card[data-step="' + step + '"]');
      if (card) {
        card.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    });
  });
});
