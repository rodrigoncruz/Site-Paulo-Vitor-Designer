<?php

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section>
            <nav class="nav">
                <div class="d-flex justify-content-between container">

                    <div class="d-flex align-items-center">
                        <div class="logo">
                            <?php get_template_part('/inc/menu'); ?>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="nav-bnt d-none d-none d-lg-block">
                            <a href="">Orçamento</a>
                        </div>
                        <div class="bnt-icons d-flex">
                            <ul class="d-flex nav-icon mb-0">
                                <li class="d-none d-lg-block">
                                    <a href="https://www.instagram.com/paulovitordesigner/"><img src=<?php echo get_template_directory_uri() . '/assets/img/instagram.png' ?> alt="instagram"></a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href="https://www.facebook.com/paulovitordesigner"><img src=<?php echo get_template_directory_uri() . '/assets/img/facebook.png' ?> alt="facebook"></a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href="https://dribbble.com/paulovitordesigner"><img src=<?php echo get_template_directory_uri() . '/assets/img/Drible.png' ?> alt="Drible"></a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href="https://br.pinterest.com/paulovitordesigner/_created/"><img src=<?php echo get_template_directory_uri() . '/assets/img/Pinterest.png' ?> alt="Pinterest"></a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </nav>
        </section>
    </header>
  <main class="404">
    <section class="row">
        <div class="col-md-6 col-12"  id="sobre">
          <img class="img-paulo" src=<?php echo get_template_directory_uri() . '/assets/img/paulo.png' ?> alt="Foto do Designer Paulo Vitor">
        </div>
        <div class="col-md-6 col-12 bg-blue">
          <div class="about">
            <h2 class="title">Ops, essa página não existe</h2>
            <p>Não se preocupe, clique em Página Inicial ou Perguntas Frequentes.</p>
          </div>
        </div>
      </section>
  </main>
  <footer class="bg-blue-dark">
    <section class="text-white container">
      <div class="row">
        <div class="col-sm-6">
            <h2>Experimente
                um atendimento ainda mais eficiente.
                Só chamar a gente no Whatsapp
            </h2>
            <a class="zap" href="https://web.whatsapp.com/send?phone=5521981564128"><img class="px-1" src=<?php echo get_template_directory_uri() . '/assets/img/whatsapp.svg' ?>>Solicite seu orçamento</a>
            <p class="mb-0">(21) 98156-4128</p>
            <span>Número exclusivo para atendimento.</span>
              <div class="bnt-icons d-flex">
                  <ul class="d-flex nav-icon mb-0">
                  <li class="d-none d-lg-block">
                      <a href="https://www.instagram.com/paulovitordesigner/"><img src=<?php echo get_template_directory_uri() . '/assets/img/instagram.png' ?> alt="instagram"></a>
                  </li>
                  <li class="d-none d-lg-block">
                      <a href="https://www.facebook.com/paulovitordesigner"><img src=<?php echo get_template_directory_uri() . '/assets/img/facebook.png' ?> alt="facebook"></a>
                  </li>
                  <li class="d-none d-lg-block">
                      <a href="https://dribbble.com/paulovitordesigner"><img src=<?php echo get_template_directory_uri() . '/assets/img/Drible.png' ?> alt="Drible"></a>
                  </li>
                  <li class="d-none d-lg-block">
                      <a href="https://br.pinterest.com/paulovitordesigner/_created/"><img src=<?php echo get_template_directory_uri() . '/assets/img/Pinterest.png' ?> alt="Pinterest"></a>
                  </li>
                  </ul>
              </div>
        </div>
        <div class="col-sm-6 bg-blue-light">
          <div class="content">
            <h2 class="title">Fale conosco</h2>
          
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light">
      <div class="container logo-rodape d-flex justify-content-between align-items-center">
        <div>
          <a href="/"><img src=<?php echo get_template_directory_uri() . '/assets/img/logo-dark.png' ?>></a>
          <span><strong>paulovitor</strong>designer</span>
        </div>
        <div>
          <a href="/"><span>Políticas de privacidade</span></a>
        </div>
      </div>
    </section>
  </footer>
<?php wp_footer(); ?>
</body>
</html>
  