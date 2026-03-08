/**
 * Video Modal — Vimeo Player
 *
 * Parses Vimeo URLs (standard, unlisted/private, embed) and opens
 * a fullscreen modal with the Vimeo iframe player.
 *
 * @package Easy_Pharmacy
 */

(function () {
  'use strict';

  var modal = document.getElementById('videoModal');
  var player = document.getElementById('videoModalPlayer');

  if (!modal || !player) return;

  /**
   * Extract Vimeo video ID and optional privacy hash from a URL.
   *
   * Supports:
   *   https://vimeo.com/123456789
   *   https://vimeo.com/123456789/abc123hash
   *   https://player.vimeo.com/video/123456789
   *   https://player.vimeo.com/video/123456789?h=abc123hash
   */
  function parseVimeoUrl(url) {
    if (!url) return null;

    var match;

    // player.vimeo.com/video/ID?h=HASH or player.vimeo.com/video/ID
    match = url.match(/player\.vimeo\.com\/video\/(\d+)(?:\?.*h=([a-zA-Z0-9]+))?/);
    if (match) return { id: match[1], hash: match[2] || null };

    // vimeo.com/ID/HASH (unlisted)
    match = url.match(/vimeo\.com\/(\d+)\/([a-zA-Z0-9]+)/);
    if (match) return { id: match[1], hash: match[2] };

    // vimeo.com/ID
    match = url.match(/vimeo\.com\/(\d+)/);
    if (match) return { id: match[1], hash: null };

    return null;
  }

  /**
   * Build the Vimeo embed URL with quality and privacy parameters.
   */
  function buildEmbedUrl(parsed) {
    var params = [
      'autoplay=1',
      'dnt=1',
      'quality=1080p',
      'byline=0',
      'title=0',
      'portrait=0'
    ];

    if (parsed.hash) {
      params.push('h=' + parsed.hash);
    }

    return 'https://player.vimeo.com/video/' + parsed.id + '?' + params.join('&');
  }

  /**
   * Open the video modal with the given Vimeo URL.
   */
  window.openVideoModal = function (url) {
    var parsed = parseVimeoUrl(url);
    if (!parsed) return;

    var iframe = document.createElement('iframe');
    iframe.src = buildEmbedUrl(parsed);
    iframe.setAttribute('allow', 'autoplay; fullscreen; picture-in-picture');
    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('loading', 'lazy');

    player.innerHTML = '';
    player.appendChild(iframe);

    modal.classList.add('is-active');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  };

  /**
   * Close the video modal and stop playback.
   */
  window.closeVideoModal = function () {
    modal.classList.remove('is-active');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';

    // Destroy iframe after transition to stop playback
    setTimeout(function () {
      player.innerHTML = '';
    }, 300);
  };

  // Close on Escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && modal.classList.contains('is-active')) {
      closeVideoModal();
    }
  });
})();
