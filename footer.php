  <footer class="bg-blue-dark">
    <section class="text-white container">
      <div class="row">
        <div class="col-sm-6">
            <h2><?php the_field('titulo_rodape'); ?></h2>
            <a class="zap" href=<?php the_field('link_rodape');?>><img class="px-1" src=<?php echo get_template_directory_uri() . '/assets/img/whatsapp.svg' ?>><?php the_field('texto_botao_titulo_rodape');?></a>
            <p class="mb-0"><?php the_field('telefone_rodape');?></p>
            <span><?php the_field('descricao_telefone');?></span>
              <div class="bnt-icons d-flex">
                  <ul class="d-flex nav-icon mb-0">
                      <?php if (have_rows('redes_sociais_rodape')): while (have_rows('redes_sociais_rodape')) : the_row();
                          $logotipo_rodape = get_sub_field('logotipo_rodape');
                          $link_rede_rodape = get_sub_field('link_rodape'); ?>
                              <li>
                                  <a href=<?php echo $link_rede_rodape ?>><img src=<?php echo $logotipo_rodape ?> alt=""></a>
                              </li>
                      <?php endwhile; endif; ?>
                  </ul>
              </div>
        </div>
        <div class="col-sm-6">
          <div class="content">
            <h2 class="title">Fale conosco</h2>
          
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light">
      <div class="container logo-rodape d-flex justify-content-between align-items-center">
        <div>
          <a href=<?php the_field('link_logo');?>><img src=<?php the_field('logo_paulo');?>></a><?php the_field('paulo_vitor_designer');?>
        </div>
        <div>
          <a href=<?php the_field('link_texto_alternativo');?>><span><?php the_field('texto_alternativo_rodape');?></span></a>
        </div>
      </div>
    </section>
  </footer>
<?php wp_footer(); ?>
</body>
</html>