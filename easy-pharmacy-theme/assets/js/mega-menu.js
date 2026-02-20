// ============================================
// MEGA MENU JAVASCRIPT
// ============================================

// Mobile Menu Toggle Function (Global)
window.toggleMobileMenu = function() {
  const menuList = document.querySelector('.mega-menu-list');
  const mobileToggle = document.querySelector('.mega-menu-mobile-toggle');
  const body = document.body;

  if (menuList) {
    menuList.classList.toggle('mobile-open');
    
    // Toggle scroll lock on body
    if (menuList.classList.contains('mobile-open')) {
      body.style.overflow = 'hidden';
      if (mobileToggle) mobileToggle.classList.add('active');
    } else {
      body.style.overflow = '';
      if (mobileToggle) mobileToggle.classList.remove('active');
    }
  }
};

document.addEventListener('DOMContentLoaded', function() {
  // Close mobile menu when clicking outside
  document.addEventListener('click', function(event) {
    const nav = document.querySelector('.mega-menu-nav');
    const menuList = document.querySelector('.mega-menu-list');
    const mobileToggle = document.querySelector('.mega-menu-mobile-toggle');
    
    // If menu is open and click is outside nav container
    if (menuList && menuList.classList.contains('mobile-open')) {
      if (nav && !nav.contains(event.target)) {
        // Close menu
        menuList.classList.remove('mobile-open');
        document.body.style.overflow = '';
        if (mobileToggle) mobileToggle.classList.remove('active');
      }
    }
  });

  // Handle mobile dropdown toggles
  const dropdownLinks = document.querySelectorAll('.mega-menu-has-dropdown > .mega-menu-link');
  dropdownLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      // Only prevent default on mobile
      if (window.innerWidth < 1024) {
        e.preventDefault();
        const parent = this.parentElement;
        
        // Close other dropdowns
        document.querySelectorAll('.mega-menu-has-dropdown').forEach(item => {
          if (item !== parent) {
            item.classList.remove('mobile-dropdown-open');
          }
        });

        parent.classList.toggle('mobile-dropdown-open');
      }
    });
  });

  // ============================================
  // DESKTOP DROPDOWN HOVER WITH INTENT DETECTION
  // CSS :hover was removed because it instantly shows
  // dropdowns when the mouse passes across the nav,
  // and those dropdowns (z-index 9999) block hero CTAs
  // underneath. This JS-only approach requires 200ms
  // of intentional hover before opening, so fast mouse
  // passes never trigger a dropdown.
  // ============================================
  var dropdownParents = document.querySelectorAll('.mega-menu-has-dropdown');

  dropdownParents.forEach(function(parent) {
    var dropdownInner = parent.querySelector('.mega-menu-dropdown-inner');
    var openTimer = null;
    var closeTimer = null;

    function openDropdown() {
      clearTimeout(closeTimer);
      // Close other dropdowns
      dropdownParents.forEach(function(p) {
        if (p !== parent) {
          p.classList.remove('dropdown-open');
        }
      });
      parent.classList.add('dropdown-open');
    }

    function closeDropdown() {
      clearTimeout(openTimer);
      clearTimeout(closeTimer);
      parent.classList.remove('dropdown-open');
    }

    function scheduleClose() {
      closeTimer = setTimeout(function() {
        parent.classList.remove('dropdown-open');
      }, 300);
    }

    // Nav item: open after 200ms of intentional hover
    parent.addEventListener('mouseenter', function() {
      if (window.innerWidth < 1024) return;
      clearTimeout(closeTimer);
      openTimer = setTimeout(function() {
        openDropdown();
      }, 200); // 200ms intent delay — fast mouse passes won't trigger
    });

    parent.addEventListener('mouseleave', function() {
      if (window.innerWidth < 1024) return;
      clearTimeout(openTimer); // Cancel pending open if mouse leaves fast
      scheduleClose();
    });

    // Keep alive when mouse reaches the visible dropdown content
    if (dropdownInner) {
      dropdownInner.addEventListener('mouseenter', function() {
        if (window.innerWidth < 1024) return;
        clearTimeout(closeTimer);
      });
      dropdownInner.addEventListener('mouseleave', function() {
        if (window.innerWidth < 1024) return;
        scheduleClose();
      });
    }
  });

  // Add scroll effect to nav + close dropdowns on scroll
  window.addEventListener('scroll', function() {
    var nav = document.querySelector('.mega-menu-nav');
    if (nav) {
      if (window.scrollY > 50) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    }

    // Close any open dropdowns when user scrolls (prevents stale blockers)
    dropdownParents.forEach(function(p) {
      p.classList.remove('dropdown-open');
    });
  });

  // Active State Logic
  const currentPath = window.location.pathname;
  const menuLinks = document.querySelectorAll('.mega-menu-link');

  menuLinks.forEach(link => {
    const href = link.getAttribute('href');
    // Check if current path matches link href
    // Handle root path '/' matching 'index.html'
    if (href === currentPath || 
       (currentPath === '/' && href === 'index.html') ||
       (currentPath.endsWith(href) && href !== '#')) {
      
      link.classList.add('active');
      
      // If it's inside a dropdown (though these are main links), 
      // we might want to highlight the parent. 
      // But for the main mega menu structure, the links are top-level.
      // If we had dropdown links, we'd check their parents.
    }
  });
});
