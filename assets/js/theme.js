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

  var testimonials = Array.isArray(window.rieTestimonials) ? window.rieTestimonials : [];
  var currentIndex = 0;

  function updateTestimonial() {
    if (!testimonials.length) {
      return;
    }

    var text = byId('testimonial-text');
    var name = byId('testimonial-name');
    var position = byId('testimonial-position');
    var image = byId('testimonial-image');
    var rating = byId('testimonial-rating');

    if (!text || !name || !position || !image || !rating) {
      return;
    }

    var testimonial = testimonials[currentIndex];
    text.textContent = testimonial.text;
    name.textContent = testimonial.name;
    position.textContent = testimonial.position;
    image.textContent = testimonial.image;

    rating.innerHTML = '';
    for (var i = 0; i < testimonial.rating; i += 1) {
      var star = document.createElement('i');
      star.className = 'fas fa-star star';
      rating.appendChild(star);
    }

    var dots = document.querySelectorAll('.testimonial-dots .dot');
    dots.forEach(function (dot, index) {
      dot.classList.toggle('active', index === currentIndex);
    });
  }

  function changeTestimonial(direction) {
    if (!testimonials.length) {
      return;
    }

    currentIndex = (currentIndex + direction + testimonials.length) % testimonials.length;
    updateTestimonial();
  }

  function goToTestimonial(index) {
    if (!testimonials.length) {
      return;
    }

    currentIndex = index;
    updateTestimonial();
  }

  window.toggleMenu = toggleMenu;
  window.closeMenu = closeMenu;
  window.changeTestimonial = changeTestimonial;
  window.goToTestimonial = goToTestimonial;

  window.addEventListener('scroll', updateNavbarOnScroll);

  document.addEventListener('DOMContentLoaded', function () {
    updateNavbarOnScroll();
    updateTestimonial();
  });
})();
