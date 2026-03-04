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

  // Reading progress bar — tracks scroll through article content
  var progressBar = document.getElementById('readingProgressBar');
  var articleBody = document.querySelector('.article-body-section');
  if (progressBar && articleBody) {
    function updateProgressBar() {
      var rect = articleBody.getBoundingClientRect();
      var articleTop = rect.top + window.pageYOffset;
      var articleHeight = articleBody.offsetHeight;
      var scrollY = window.pageYOffset;
      var windowHeight = window.innerHeight;
      var scrollable = articleTop + articleHeight - windowHeight;

      if (scrollable <= 0) {
        // Article is shorter than the viewport — full once visible
        progressBar.style.width = scrollY >= articleTop ? '100%' : '0%';
      } else if (scrollY <= 0) {
        progressBar.style.width = '0%';
      } else if (scrollY >= scrollable) {
        progressBar.style.width = '100%';
      } else {
        var progress = (scrollY / scrollable) * 100;
        progressBar.style.width = Math.min(100, Math.max(0, progress)) + '%';
      }
    }

    window.addEventListener('scroll', updateProgressBar, { passive: true });
    updateProgressBar(); // run once on load in case page is already scrolled
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
