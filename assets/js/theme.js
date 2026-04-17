(function () {
  'use strict';

  function byId(id) {
    return document.getElementById(id);
  }

  function updateHamburgerIcon(isActive) {
    var icon = byId('hamburger-icon');
    if (!icon) {
      return;
    }

    icon.className = isActive ? 'fas fa-times' : 'fas fa-bars';
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

  function resetServicesMenu() {
    var servicesItem = document.querySelector('.nav-item-has-submenu');
    if (!servicesItem) {
      return;
    }

    servicesItem.classList.remove('open');

    var servicesLink = servicesItem.querySelector('a[aria-haspopup="true"]');
    if (servicesLink) {
      servicesLink.setAttribute('aria-expanded', 'false');
    }
  }

  function toggleMenu() {
    var menu = byId('nav-menu');
    var hamburger = byId('hamburger');

    if (!menu || !hamburger) {
      return;
    }

    var isActive = menu.classList.toggle('active');
    hamburger.classList.toggle('active', isActive);
    updateHamburgerIcon(isActive);

    if (!isActive) {
      resetServicesMenu();
    }
  }

  function closeMenu() {
    var menu = byId('nav-menu');
    var hamburger = byId('hamburger');

    if (!menu || !hamburger) {
      return;
    }

    menu.classList.remove('active');
    hamburger.classList.remove('active');
    updateHamburgerIcon(false);
    resetServicesMenu();
  }

  function toggleServicesMenu(event) {
    var link = event.currentTarget;
    if (!link) {
      return;
    }

    var isMobile = window.innerWidth <= 992;
    if (!isMobile) {
      closeMenu();
      return;
    }

    event.preventDefault();

    var servicesItem = link.closest('.nav-item-has-submenu');
    if (!servicesItem) {
      return;
    }

    var isOpen = servicesItem.classList.toggle('open');
    link.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  }

  function handleContactSubmit(event) {
    event.preventDefault();

    var form = event.currentTarget;
    var name = form.querySelector('[name="name"]');
    var email = form.querySelector('[name="email"]');
    var phone = form.querySelector('[name="phone"]');
    var subject = form.querySelector('[name="subject"]');
    var message = form.querySelector('[name="message"]');

    if (!name || !email || !subject || !message) {
      return;
    }

    var nameValue = name.value.trim();
    var emailValue = email.value.trim();
    var phoneValue = phone ? phone.value.trim() : '';
    var subjectValue = subject.value.trim();
    var messageValue = message.value.trim();

    if (!nameValue || !emailValue || !subjectValue || !messageValue) {
      alert('Please fill in all required fields.');
      return;
    }

    var whatsappMessage = '*New Contact Form Submission*\n\n'
      + '*Name:* ' + nameValue + '\n'
      + '*Email:* ' + emailValue + '\n'
      + '*Phone:* ' + phoneValue + '\n'
      + '*Subject:* ' + subjectValue + '\n'
      + '*Message:* ' + messageValue;

    var whatsappUrl = 'https://wa.me/919698536038?text=' + encodeURIComponent(whatsappMessage);
    window.open(whatsappUrl, '_blank');

    alert('Thank you for your message! We will get back to you soon.');
    form.reset();
  }

  window.toggleMenu = toggleMenu;
  window.closeMenu = closeMenu;
  window.toggleServicesMenu = toggleServicesMenu;

  window.addEventListener('scroll', updateNavbarOnScroll);

  document.addEventListener('DOMContentLoaded', function () {
    var contactForm = byId('contact-form');
    var hamburger = byId('hamburger');

    updateNavbarOnScroll();

    if (contactForm) {
      contactForm.addEventListener('submit', handleContactSubmit);
    }

    if (hamburger) {
      hamburger.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          toggleMenu();
        }
      });
    }
  });
})();
