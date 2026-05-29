// ============================================
// EAR WAX REMOVAL — SHEPPERTON PAGE JS
// FAQ accordion + smooth scroll are handled by ear-wax-removal.js
// (enqueued alongside this file). This file only handles lazy-loading
// the TikTok embed so it never blocks initial page render / LCP.
// ============================================

(function () {
  'use strict';

  var embed = document.getElementById('earwax-shep-tiktok-embed');
  if (!embed) return;

  var loaded = false;

  function loadTikTok() {
    if (loaded) return;
    loaded = true;

    // TikTok's embed.js scans the page for .tiktok-embed blockquotes and
    // replaces them with the rendered player. We only inject it once the
    // section is near the viewport.
    var script = document.createElement('script');
    script.src = 'https://www.tiktok.com/embed.js';
    script.async = true;
    document.body.appendChild(script);
  }

  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          loadTikTok();
          observer.disconnect();
        }
      });
    }, { rootMargin: '300px 0px' });
    observer.observe(embed);
  } else {
    // Fallback for older browsers — load on first scroll or after idle.
    window.addEventListener('scroll', loadTikTok, { once: true, passive: true });
    setTimeout(loadTikTok, 3000);
  }
})();
