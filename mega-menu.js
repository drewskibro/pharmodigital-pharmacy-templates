// ============================================
// MEGA MENU JAVASCRIPT
// ============================================

// Mobile Menu Toggle
function toggleMobileMenu() {
  const menuList = document.querySelector('.mega-menu-list');
  if (menuList) {
    menuList.classList.toggle('mobile-open');
  }
}

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
  const nav = document.querySelector('.mega-menu-nav');
  const menuList = document.querySelector('.mega-menu-list');
  const toggle = document.querySelector('.mega-menu-mobile-toggle');
  
  if (nav && !nav.contains(event.target) && menuList && menuList.classList.contains('mobile-open')) {
    // Don't close if clicking the toggle button itself (handled by toggle function)
    if (!toggle || !toggle.contains(event.target)) {
      menuList.classList.remove('mobile-open');
    }
  }
});

// Handle mobile dropdown toggles
document.querySelectorAll('.mega-menu-has-dropdown > .mega-menu-link').forEach(link => {
  link.addEventListener('click', function(e) {
    if (window.innerWidth < 1024) {
      e.preventDefault();
      const parent = this.parentElement;
      parent.classList.toggle('mobile-dropdown-open');
    }
  });
});

// Add scroll effect to nav
window.addEventListener('scroll', function() {
  const nav = document.querySelector('.mega-menu-nav');
  if (nav) {
    if (window.scrollY > 50) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  }
});
