/**
 * Health Hub — Filter pill active state (visual enhancement only).
 *
 * Filtering is handled server-side via URL ?category= parameter so that
 * pagination, crawlability, and internal linking all work correctly.
 * This JS just adds subtle hover/active feedback for the pills.
 */
document.addEventListener('DOMContentLoaded', function () {
  // Smooth scroll back to grid when returning from pagination
  var urlParams = new URLSearchParams(window.location.search);
  var page = urlParams.get('paged') || urlParams.get('/page/');

  if (page && parseInt(page, 10) > 1) {
    var grid = document.querySelector('.healthhub-grid-section');
    if (grid) {
      grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  }

  // FAQ accordion toggle
  var faqButtons = document.querySelectorAll('.article-faq-question');
  faqButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.closest('.article-faq-item');
      var answer = item.querySelector('.article-faq-answer');
      var isOpen = item.classList.contains('is-open');

      // Close all other items
      document.querySelectorAll('.article-faq-item.is-open').forEach(function (openItem) {
        if (openItem !== item) {
          openItem.classList.remove('is-open');
          openItem.querySelector('.article-faq-question').setAttribute('aria-expanded', 'false');
          openItem.querySelector('.article-faq-answer').style.maxHeight = null;
        }
      });

      // Toggle current item
      if (isOpen) {
        item.classList.remove('is-open');
        btn.setAttribute('aria-expanded', 'false');
        answer.style.maxHeight = null;
      } else {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });
});
