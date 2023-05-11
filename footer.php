  <footer class="bg-blue-dark">
    <section class="text-white container mb-5">
      <div class="row">
        <div class="col-md-6 title-zap">
          <h3 class="principal-zap"><?php the_field('titulo_rodape','options'); ?></h3>
          <h3 class="sub-zap"><?php the_field('subtitulo_rodape','options'); ?></h3>
          <a target="_blank" class="zap" href=<?php the_field('link_rodape','options');?>><img class="px-1"
              src=<?php echo get_template_directory_uri() . '/assets/img/whatsapp.svg' ?> alt="zap"><?php the_field('texto_botao_titulo_rodape','options');?></a>
          <p class="mb-0 d-none d-lg-block"><?php the_field('telefone_rodape','options');?></p>
          <span class="d-none d-lg-block"><?php the_field('descricao_telefone','options');?></span>
          <div class="bnt-icons d-flex d-none d-lg-block">
            <ul class="d-flex nav-icon mb-0">
              <?php if (have_rows('redes_sociais_rodape','options')): while (have_rows('redes_sociais_rodape','options')) : the_row();
                          $logotipo_rodape = get_sub_field('logotipo_rodape');
                          $link_rede_rodape = get_sub_field('link_rodape'); ?>
              <li>
                <a target="_blank" href=<?php echo $link_rede_rodape ?>><img src=<?php echo $logotipo_rodape ?> alt=""></a>
              </li>
              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="title-forms">
            <h2>Para falar sobre seu projetos ou parceria, preencha o formulário a baixo.</h2>
          </div>

          <!-- Formulário Contat Forms -->
          <?php echo get_field('formulario','options');?>

          <div class="bnt-icons-mobile d-flex d-block d-lg-none">
            <ul class="d-flex nav-icon mb-0">
              <?php if (have_rows('redes_sociais_rodape','options')): while (have_rows('redes_sociais_rodape','options')) : the_row();
                          $logotipo_rodape = get_sub_field('logotipo_rodape');
                          $link_rede_rodape = get_sub_field('link_rodape'); ?>
              <li>
                <a href=<?php echo $link_rede_rodape ?>><img src=<?php echo $logotipo_rodape ?> alt=""></a>
              </li>
              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light">
      <div class="container logo-rodape d-flex justify-content-between align-items-center">
        <div>
          <a href=<?php the_field('link_logo','options');?>><img
              src=<?php the_field('logo_paulo','options');?> alt="logo"></a><?php the_field('paulo_vitor_designer','options');?>
        </div>
        <div class="menu-footer d-none d-lg-block">
          <?php
            wp_nav_menu(
              array(
                  'theme_location'    => 'footer_menu',
                  'depth'             => 1
                  )
              );
          ?>
        </div>
      </div>
    </section>
  </footer>
  <?php wp_footer(); ?>
  </body>

  </html>