  <footer class="bg-blue-dark">
    <section class="text-white container">
      <div class="row">
        <div class="col-sm-6 title-zap">
            <h2><?php the_field('titulo_rodape','options'); ?></h2>
            <a class="zap" href=<?php the_field('link_rodape','options');?>><img class="px-1" src=<?php echo get_template_directory_uri() . '/assets/img/whatsapp.svg' ?>><?php the_field('texto_botao_titulo_rodape','options');?></a>
            <p class="mb-0"><?php the_field('telefone_rodape','options');?></p>
            <span><?php the_field('descricao_telefone','options');?></span>
              <div class="bnt-icons d-flex">
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
        <div class="col-sm-6">
          <div class="title-forms">
            <h2>Para falar sobre seu projetos ou parceria, preencha  o formulário a baixo.</h2>
          </div>
          <form>
              <label>
                  <input type="text" name="name" placeholder="Nome Sobrenome" required>
              </label>
              <label>
                  <input type="email" name="email" placeholder="seuemail@gmail.com" required>
              </label>
              <label>
                  <input type="tel" name="phone" placeholder="Telefone" required>
              </label>
              <label>
                  <input type="text" name="subject" placeholder="Assunto" required>
              </label>
              <label>
                  <textarea name="message" placeholder="Conte, como posso te ajudar?" required></textarea>
              </label>
            <input type="submit" value="Enviar">
          </form>

        </div>
      </div>
    </section>
    <section class="bg-light">
      <div class="container logo-rodape d-flex justify-content-between align-items-center">
        <div>
          <a href=<?php the_field('link_logo','options');?>><img src=<?php the_field('logo_paulo','options');?>></a><?php the_field('paulo_vitor_designer','options');?>
        </div>
        <div class="menu-footer">
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