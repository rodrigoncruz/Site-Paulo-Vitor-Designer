const jsBnts = document.querySelectorAll('.js-bnt');

for (let i = 0; i < jsBnts.length; i++) {
  const setaEmpresas = jsBnts[i].querySelector('img');
  
  jsBnts[i].addEventListener('mouseover', function() {
    setaEmpresas.style.transform = 'scale(1.1, 1.4)';
  });
  
  jsBnts[i].addEventListener('mouseout', function() {
    setaEmpresas.style.transform = 'scale(1)';
  });
}
