window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
    if (scrollTop > 0) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
  