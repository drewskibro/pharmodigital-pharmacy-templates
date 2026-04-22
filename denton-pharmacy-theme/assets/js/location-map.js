/**
 * Location map — geo-anchored callout positioning.
 *
 * The Google Maps iframe underneath is a frozen visual backdrop. We project
 * each parking callout's real lat/lng through the same Web Mercator maths
 * that Google uses internally, so the overlay dots always align with the
 * exact geographic point regardless of map centre or zoom.
 *
 * Formula: https://en.wikipedia.org/wiki/Web_Mercator_projection
 * Pharmacy pin always sits at the map's visual centre (the iframe is
 * centred on the pharmacy coords).
 */
(function () {
  'use strict';

  var TILE = 256; // Web Mercator base tile size

  function latLngToWorldPx(lat, lng, zoom) {
    var scale = TILE * Math.pow(2, zoom);
    var x = (lng + 180) / 360 * scale;
    var sin = Math.sin(lat * Math.PI / 180);
    var y = (0.5 - Math.log((1 + sin) / (1 - sin)) / (4 * Math.PI)) * scale;
    return { x: x, y: y };
  }

  function positionCallouts(root) {
    var centerLat = parseFloat(root.getAttribute('data-center-lat'));
    var centerLng = parseFloat(root.getAttribute('data-center-lng'));
    var zoom      = parseFloat(root.getAttribute('data-zoom'));

    if (!isFinite(centerLat) || !isFinite(centerLng) || !isFinite(zoom)) {
      return;
    }

    var centerPx = latLngToWorldPx(centerLat, centerLng, zoom);
    var callouts = root.querySelectorAll('.location-callout[data-lat][data-lng]');

    callouts.forEach(function (node) {
      var lat = parseFloat(node.getAttribute('data-lat'));
      var lng = parseFloat(node.getAttribute('data-lng'));
      if (!isFinite(lat) || !isFinite(lng)) { return; }

      var p  = latLngToWorldPx(lat, lng, zoom);
      var dx = Math.round(p.x - centerPx.x);
      var dy = Math.round(p.y - centerPx.y);

      node.style.setProperty('--dx', dx + 'px');
      node.style.setProperty('--dy', dy + 'px');
      node.classList.add('is-positioned');
    });
  }

  function bindPopupToggle() {
    var dots = document.querySelectorAll('.location-callout-dot');
    dots.forEach(function (dot) {
      if (dot.dataset.popupBound === '1') { return; }
      dot.dataset.popupBound = '1';
      dot.addEventListener('click', function (e) {
        e.stopPropagation();
        var callout = dot.closest('.location-callout');
        if (!callout) { return; }
        var wasOpen = callout.classList.contains('is-open');
        // Close any currently open popup — only one at a time.
        document.querySelectorAll('.location-callout.is-open').forEach(function (n) {
          n.classList.remove('is-open');
        });
        if (!wasOpen) { callout.classList.add('is-open'); }
      });
    });
  }

  function bindParkingListTriggers() {
    var triggers = document.querySelectorAll('[data-parking-trigger]');
    triggers.forEach(function (btn) {
      if (btn.dataset.triggerBound === '1') { return; }
      btn.dataset.triggerBound = '1';
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var idx = btn.getAttribute('data-parking-trigger');
        var callout = document.querySelector('.location-callout[data-parking-index="' + idx + '"]');
        if (!callout) { return; }
        // Close any other open popup, open this one.
        document.querySelectorAll('.location-callout.is-open').forEach(function (n) {
          if (n !== callout) { n.classList.remove('is-open'); }
        });
        callout.classList.add('is-open');
        // Scroll the map wrapper into view so the popup is visible on mobile.
        var wrap = callout.closest('.location-map-wrapper');
        if (wrap && typeof wrap.scrollIntoView === 'function') {
          wrap.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      });
    });
  }

  function bindGlobalClose() {
    if (document.body.dataset.calloutGlobalBound === '1') { return; }
    document.body.dataset.calloutGlobalBound = '1';

    // Tap / click outside any callout closes open popups.
    document.addEventListener('click', function (e) {
      if (e.target.closest('.location-callout')) { return; }
      document.querySelectorAll('.location-callout.is-open').forEach(function (n) {
        n.classList.remove('is-open');
      });
    });

    // Escape closes popups.
    document.addEventListener('keydown', function (e) {
      if (e.key !== 'Escape') { return; }
      document.querySelectorAll('.location-callout.is-open').forEach(function (n) {
        n.classList.remove('is-open');
      });
    });
  }

  function init() {
    var roots = document.querySelectorAll('.location-map-annotations[data-center-lat]');
    roots.forEach(positionCallouts);
    bindPopupToggle();
    bindParkingListTriggers();
    bindGlobalClose();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  // Recompute on resize — the maths is zoom-based so pixel offsets are
  // stable, but this catches any edge cases (e.g. CSS media-query changes
  // hiding/showing the layer).
  var resizeTimer;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(init, 150);
  }, { passive: true });
})();
