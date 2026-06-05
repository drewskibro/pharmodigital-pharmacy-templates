(function () {
  'use strict';

  var tablist = document.querySelector('.prices-tabs-nav');
  if (!tablist) return;

  var tabs   = Array.prototype.slice.call(tablist.querySelectorAll('.prices-tab'));
  var panels = Array.prototype.slice.call(document.querySelectorAll('.prices-tab-panel'));
  if (!tabs.length) return;

  function panelFor(tab) {
    var target = tab.getAttribute('data-tab');
    for (var i = 0; i < panels.length; i++) {
      if (panels[i].getAttribute('data-panel') === target) return panels[i];
    }
    return null;
  }

  function activate(tab, updateHash) {
    tabs.forEach(function (t) {
      var isActive = t === tab;
      t.classList.toggle('is-active', isActive);
      t.setAttribute('aria-selected', isActive ? 'true' : 'false');
      t.setAttribute('tabindex', isActive ? '0' : '-1');
    });
    panels.forEach(function (p) {
      var isActive = p === panelFor(tab);
      p.classList.toggle('is-active', isActive);
      if (isActive) {
        p.removeAttribute('hidden');
      } else {
        p.setAttribute('hidden', '');
      }
    });
    if (updateHash && window.history && window.history.replaceState) {
      window.history.replaceState(null, '', '#' + tab.getAttribute('data-tab'));
    }
  }

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      activate(tab, true);
    });
    tab.addEventListener('keydown', function (e) {
      var i = tabs.indexOf(tab);
      var next = null;
      switch (e.key) {
        case 'ArrowRight':
        case 'ArrowDown':
          next = tabs[(i + 1) % tabs.length];
          break;
        case 'ArrowLeft':
        case 'ArrowUp':
          next = tabs[(i - 1 + tabs.length) % tabs.length];
          break;
        case 'Home':
          next = tabs[0];
          break;
        case 'End':
          next = tabs[tabs.length - 1];
          break;
      }
      if (next) {
        e.preventDefault();
        activate(next, true);
        next.focus();
      }
    });
  });

  // Deep link via hash on initial load
  var hash = (window.location.hash || '').replace('#', '');
  if (hash) {
    for (var i = 0; i < tabs.length; i++) {
      if (tabs[i].getAttribute('data-tab') === hash) {
        activate(tabs[i], false);
        break;
      }
    }
  }
})();
