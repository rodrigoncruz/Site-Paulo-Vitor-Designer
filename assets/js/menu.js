window.addEventListener('scroll', function() {
    let nav = document.querySelector('.nav');
    if (window.pageYOffset > 80) { /* Define a altura da página em que a transparência começa */
      nav.classList.add('transparent');
    } else {
      nav.classList.remove('transparent');
    }
  });



  //rmp-menu-wrap

  let meuElemento = document.querySelectorAll('ul.rmp-menu');
  // meuElemento.innerHTML = '<div class="d-flex align-items-center">\
  //                           <div class="nav-bnt d-none d-none d-lg-block">\
  //                               <a href=<?php the_field("link_orcamento","options"); ?>><?php the_field("texto_orcamento","options"); ?></a>\
  //                           </div>\
  //                           <div class="bnt-icons d-flex">\
  //                               <ul class="d-flex nav-icon mb-0">\
  //                                   <?php if (have_rows("redes_sociais","options")): while (have_rows("redes_sociais","options")) : the_row();\
  //                                       $logotipo = get_sub_field("logotipo");\
  //                                       $link_rede = get_sub_field("link_rede"); ?>\
  //                                           <li class="d-none d-lg-block">\
  //                                               <a href=<?php echo $link_rede ?>><img src=<?php echo $logotipo ?> alt="Logotipo Redes Sociais"></a>\
  //                                           </li>\
  //                                   <?php endwhile; endif; ?>\
  //                               </ul>\
  //                           </div>\
  //                       </div>';

  const codigoHTML = `
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
`;

meuElemento.innerHTML += codigoHTML;

