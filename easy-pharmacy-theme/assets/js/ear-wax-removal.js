// ============================================
// EAR WAX REMOVAL PAGE JAVASCRIPT
// ============================================

// Menu logic is handled by mega-menu.js

// ============================================
// FAQ ACCORDION
// ============================================
function toggleFAQ(button) {
  const item = button.closest('.earwax-faq-item');
  const isActive = item.classList.contains('active');

  // Close all FAQs
  document.querySelectorAll('.earwax-faq-item').forEach(faq => {
    faq.classList.remove('active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('active');
  }
}

// ============================================
// HERO YOUTUBE SHORTS — FACADE → IFRAME
// Poster image + play button on first paint; the YouTube iframe is only
// injected on user click so page-load weight (and LCP) stays minimal.
// ============================================
document.addEventListener('DOMContentLoaded', function () {
  const facades = document.querySelectorAll('.earwax-hero-video-facade');

  facades.forEach(function (facade) {
    function play() {
      if (facade.classList.contains('is-playing')) return;
      const videoId = facade.dataset.videoId;
      if (!videoId) return;

      const iframe = document.createElement('iframe');
      iframe.src = 'https://www.youtube.com/embed/' + encodeURIComponent(videoId) +
        '?autoplay=1&rel=0&playsinline=1&modestbranding=1';
      iframe.title = 'YouTube video player';
      iframe.setAttribute('frameborder', '0');
      iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
      iframe.setAttribute('allowfullscreen', '');
      iframe.className = 'earwax-hero-video-iframe';

      facade.innerHTML = '';
      facade.appendChild(iframe);
      facade.classList.add('is-playing');
    }

    facade.addEventListener('click', play);
    facade.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        play();
      }
    });
  });
});
