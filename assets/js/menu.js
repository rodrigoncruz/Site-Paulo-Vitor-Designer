window.addEventListener('scroll', function() {
    let nav = document.querySelector('.nav');
    if (window.pageYOffset > 80) { /* Define a altura da página em que a transparência começa */
      nav.classList.add('transparent');
    } else {
      nav.classList.remove('transparent');
    }
  });
  