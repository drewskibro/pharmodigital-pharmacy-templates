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
// Accept any of: bare 11-char ID, full youtu.be link, /shorts/ link, or watch?v= link.
// Without this, an author pasting "https://youtube.com/shorts/ABC123" produces
// "youtube.com/embed/https://youtube.com/shorts/ABC123" which is invalid and
// YouTube returns a generic "An error occurred" playback failure.
function earwaxParseYouTubeId(input) {
  if (!input) return '';
  const raw = String(input).trim();
  const patterns = [
    /youtube\.com\/shorts\/([A-Za-z0-9_-]{6,})/,
    /youtube\.com\/embed\/([A-Za-z0-9_-]{6,})/,
    /youtube\.com\/watch\?(?:.*&)?v=([A-Za-z0-9_-]{6,})/,
    /youtu\.be\/([A-Za-z0-9_-]{6,})/,
    /^([A-Za-z0-9_-]{6,})$/
  ];
  for (let i = 0; i < patterns.length; i++) {
    const m = raw.match(patterns[i]);
    if (m) return m[1];
  }
  return '';
}

document.addEventListener('DOMContentLoaded', function () {
  const facades = document.querySelectorAll('.earwax-hero-video-facade');

  facades.forEach(function (facade) {
    function play() {
      if (facade.classList.contains('is-playing')) return;
      const videoId = earwaxParseYouTubeId(facade.dataset.videoId);
      if (!videoId) return;

      const iframe = document.createElement('iframe');
      // youtube-nocookie.com is the privacy-enhanced embed host; behaves
      // identically for playback but trips fewer ad-blocker / consent issues.
      iframe.src = 'https://www.youtube-nocookie.com/embed/' + videoId +
        '?autoplay=1&rel=0&playsinline=1';
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
