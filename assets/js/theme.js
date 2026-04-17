(function () {
  'use strict';

  function byId(id) {
    return document.getElementById(id);
  }

  function updateNavbarOnScroll() {
    var navbar = byId('navbar');
    if (!navbar) {
      return;
    }

    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }

  function toggleMenu() {
    var menu = byId('nav-menu');
    var hamburger = byId('hamburger');

    if (!menu || !hamburger) {
      return;
    }

    menu.classList.toggle('active');
    hamburger.classList.toggle('active');
  }

  function closeMenu() {
    var menu = byId('nav-menu');
    var hamburger = byId('hamburger');

    if (!menu || !hamburger) {
      return;
    }

    menu.classList.remove('active');
    hamburger.classList.remove('active');
  }

  window.toggleMenu = toggleMenu;
  window.closeMenu = closeMenu;

  window.addEventListener('scroll', updateNavbarOnScroll);

  document.addEventListener('DOMContentLoaded', function () {
    updateNavbarOnScroll();
  });
})();
