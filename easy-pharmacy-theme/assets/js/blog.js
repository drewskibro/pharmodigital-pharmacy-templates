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

  // Table of Contents — collapse/expand and smooth scroll
  var toc = document.querySelector('.article-toc');
  if (toc) {
    var tocToggle = toc.querySelector('.article-toc-toggle');
    var tocList = toc.querySelector('.article-toc-list');

    // Set initial max-height so CSS transition works
    if (tocList) {
      tocList.style.maxHeight = tocList.scrollHeight + 'px';
    }

    if (tocToggle) {
      tocToggle.addEventListener('click', function () {
        var isCollapsed = toc.getAttribute('data-collapsed') === 'true';
        if (isCollapsed) {
          toc.setAttribute('data-collapsed', 'false');
          tocToggle.setAttribute('aria-expanded', 'true');
          if (tocList) {
            tocList.style.maxHeight = tocList.scrollHeight + 'px';
          }
        } else {
          toc.setAttribute('data-collapsed', 'true');
          tocToggle.setAttribute('aria-expanded', 'false');
          if (tocList) {
            tocList.style.maxHeight = null;
          }
        }
      });
    }

    // Smooth scroll for TOC links — offset for fixed nav
    var tocLinks = toc.querySelectorAll('.article-toc-list a[href^="#"]');
    tocLinks.forEach(function (link) {
      link.addEventListener('click', function (e) {
        var targetId = link.getAttribute('href').substring(1);
        var target = document.getElementById(targetId);
        if (target) {
          e.preventDefault();
          var navHeight = 90; // fixed nav height + breathing room
          var top = target.getBoundingClientRect().top + window.pageYOffset - navHeight;
          window.scrollTo({ top: top, behavior: 'smooth' });
          // Update URL hash without jumping
          history.pushState(null, null, '#' + targetId);
        }
      });
    });
  }

  // Mounjaro Weight Loss Calculator
  var mjCalc = document.getElementById('mj-calc');
  if (mjCalc) {
    var mjUnitBtns = mjCalc.querySelectorAll('.mj-calc-unit');
    var mjFields = mjCalc.querySelectorAll('.mj-calc-field');
    var mjSubmit = document.getElementById('mj-calc-submit');
    var mjResults = document.getElementById('mj-calc-results');
    var currentUnit = 'kg';

    // Unit toggle
    mjUnitBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        currentUnit = btn.getAttribute('data-unit');
        mjUnitBtns.forEach(function (b) {
          b.classList.remove('active');
          b.setAttribute('aria-pressed', 'false');
        });
        btn.classList.add('active');
        btn.setAttribute('aria-pressed', 'true');

        mjFields.forEach(function (f) { f.classList.remove('active'); });
        mjCalc.querySelector('.mj-calc-field-' + currentUnit).classList.add('active');
      });
    });

    // Get weight in kg from whichever unit is active
    function getWeightKg() {
      if (currentUnit === 'kg') {
        return parseFloat(mjCalc.querySelector('.mj-calc-field-kg .mj-calc-input').value) || 0;
      }
      if (currentUnit === 'st') {
        var st = parseFloat(mjCalc.querySelector('.mj-calc-st').value) || 0;
        var stLbs = parseFloat(mjCalc.querySelector('.mj-calc-st-lbs').value) || 0;
        return (st * 14 + stLbs) * 0.453592;
      }
      if (currentUnit === 'lbs') {
        return (parseFloat(mjCalc.querySelector('.mj-calc-field-lbs .mj-calc-input').value) || 0) * 0.453592;
      }
      return 0;
    }

    // Format weight in current unit
    function formatWeight(kg) {
      if (currentUnit === 'kg') {
        return kg.toFixed(1) + ' kg';
      }
      if (currentUnit === 'lbs') {
        return Math.round(kg / 0.453592) + ' lbs';
      }
      // stone
      var totalLbs = Math.round(kg / 0.453592);
      var st = Math.floor(totalLbs / 14);
      var remainLbs = totalLbs % 14;
      return st + 'st ' + remainLbs + 'lbs';
    }

    // SURMOUNT-1 loss percentages by week (tirzepatide 15 mg, approximate curve)
    var lossByWeek = { 12: 0.075, 24: 0.135, 52: 0.195, 72: 0.209 };

    // Animated count-up for the headline number
    function animateValue(el, targetText) {
      // Extract the numeric part for animation
      var match = targetText.match(/([\d.]+)/);
      if (!match) { el.textContent = targetText; return; }
      var targetNum = parseFloat(match[1]);
      var suffix = targetText.replace(match[1], '');
      var duration = 800;
      var start = performance.now();

      function tick(now) {
        var progress = Math.min((now - start) / duration, 1);
        // Ease out cubic
        var eased = 1 - Math.pow(1 - progress, 3);
        var current = (targetNum * eased).toFixed(1);
        el.textContent = current + suffix;
        if (progress < 1) requestAnimationFrame(tick);
        else el.textContent = targetText;
      }
      requestAnimationFrame(tick);
    }

    function calculate() {
      var weightKg = getWeightKg();
      if (weightKg < 40) return;

      // Populate timeline (3 milestones: 12, 24, 72 weeks)
      document.getElementById('mj-calc-w12').textContent = formatWeight(weightKg * lossByWeek[12]);
      document.getElementById('mj-calc-w24').textContent = formatWeight(weightKg * lossByWeek[24]);
      document.getElementById('mj-calc-w72').textContent = formatWeight(weightKg * lossByWeek[72]);

      // Total headline with count-up animation
      var totalEl = document.getElementById('mj-calc-total-loss');
      animateValue(totalEl, formatWeight(weightKg * lossByWeek[72]));

      // Before → After weight row
      var fromEl = document.getElementById('mj-calc-from');
      var toEl = document.getElementById('mj-calc-to');
      if (fromEl) fromEl.textContent = formatWeight(weightKg);
      if (toEl) toEl.textContent = formatWeight(weightKg * (1 - lossByWeek[72]));

      // Show results
      mjResults.classList.add('visible');
      mjResults.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    mjSubmit.addEventListener('click', calculate);

    // Also calculate on Enter key in any input
    mjCalc.querySelectorAll('.mj-calc-input').forEach(function (input) {
      input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
          e.preventDefault();
          calculate();
        }
      });
    });
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
