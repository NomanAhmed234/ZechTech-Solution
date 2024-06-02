let hamburger = document.querySelector('.fa-bars');
    let mobile_nav = document.querySelector('.mobile-nav');

    hamburger.addEventListener('click', () => {
      if (hamburger.classList.contains('fa-bars')) {
        hamburger.classList.add('fa-xmark');
        hamburger.classList.remove('fa-bars');
        mobile_nav.classList.remove('hidden');
        mobile_nav.classList.add('flex');
      } else {
        hamburger.classList.add('fa-bars');
        hamburger.classList.remove('fa-xmark');
        mobile_nav.classList.add('hidden');
      }
    });