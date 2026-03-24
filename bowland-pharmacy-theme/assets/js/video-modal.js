/**
 * Video Modal — Vimeo & YouTube Player
 *
 * Parses Vimeo and YouTube URLs and opens a fullscreen modal
 * with the corresponding iframe player.
 *
 * @package Bowland_Pharmacy
 */

(function () {
  'use strict';

  var modal = document.getElementById('videoModal');
  var player = document.getElementById('videoModalPlayer');

  if (!modal || !player) return;

  /**
   * Parse a video URL and return provider + id (+ optional hash for Vimeo).
   *
   * Supports:
   *   Vimeo:   vimeo.com/ID, vimeo.com/ID/HASH, player.vimeo.com/video/ID?h=HASH
   *   YouTube: youtube.com/watch?v=ID, youtu.be/ID, youtube.com/embed/ID
   */
  function parseVideoUrl(url) {
    if (!url) return null;

    var match;

    // --- YouTube ---
    // youtube.com/watch?v=ID or youtube.com/watch?v=ID&...
    match = url.match(/(?:youtube\.com\/watch\?.*v=)([\w-]{11})/);
    if (match) return { provider: 'youtube', id: match[1] };

    // youtu.be/ID
    match = url.match(/youtu\.be\/([\w-]{11})/);
    if (match) return { provider: 'youtube', id: match[1] };

    // youtube.com/embed/ID
    match = url.match(/youtube\.com\/embed\/([\w-]{11})/);
    if (match) return { provider: 'youtube', id: match[1] };

    // --- Vimeo ---
    // player.vimeo.com/video/ID?h=HASH or player.vimeo.com/video/ID
    match = url.match(/player\.vimeo\.com\/video\/(\d+)(?:\?.*h=([a-zA-Z0-9]+))?/);
    if (match) return { provider: 'vimeo', id: match[1], hash: match[2] || null };

    // vimeo.com/ID/HASH (unlisted)
    match = url.match(/vimeo\.com\/(\d+)\/([a-zA-Z0-9]+)/);
    if (match) return { provider: 'vimeo', id: match[1], hash: match[2] };

    // vimeo.com/ID
    match = url.match(/vimeo\.com\/(\d+)/);
    if (match) return { provider: 'vimeo', id: match[1], hash: null };

    return null;
  }

  /**
   * Build the embed URL for the given provider.
   */
  function buildEmbedUrl(parsed) {
    if (parsed.provider === 'youtube') {
      return 'https://www.youtube.com/embed/' + parsed.id + '?autoplay=1&rel=0&modestbranding=1';
    }

    // Vimeo
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
   * Open the video modal with the given URL.
   */
  window.openVideoModal = function (url) {
    var parsed = parseVideoUrl(url);
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
