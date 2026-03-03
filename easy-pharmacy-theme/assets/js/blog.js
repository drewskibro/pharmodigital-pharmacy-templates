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
});
