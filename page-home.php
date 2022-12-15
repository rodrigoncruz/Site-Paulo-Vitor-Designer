<?php

/**
 * Template Name: Home
 */


get_header(); ?>
  <main class="frontPage">
    <div class="nav-banner">
        <img class="img-banner position-relative" src=<?php the_field('banner'); ?> alt="Logo Paulo Vitor Designer">
        <div class="container">
            <div  class="position-absolute text-banner">
                <h1>
                    <?php the_field('titulo'); ?>
                </h1>
                <a href=""><?php the_field('texto_botao'); ?></a>
            </div>
        </div>
    </div>

    <section class="row">
      <div class="col-md-6 col-12"  id="sobre">
        <img class="img-paulo" src=<?php the_field('foto');?> alt="Foto do Designer Paulo Vitor">
      </div>
      <div class="col-md-6 col-12 bg-blue">
        <div class="about">
          <h2 class="title"><?php the_field('titulo_paulo');?></h2>
          <p><?php the_field('apresentacao_paragrafo_01');?></p>
          <p><?php the_field('apresentacao_paragrafo_02');?></p>
          <a href=""><?php the_field('texto_botao');?></a>
        </div>
      </div>
    </section>

      <div id="portfolio">
        <section class="container text-center text-empresas" style="padding-top: 83px;">
          <h2 class="px-4 px-sm-2"><?php the_field('titulo_empresas');?></h2>
          <p class="px-4"><?php the_field('subtitulo_empresas');?></p>
        </section>

        <section class="row overlay">
          <?php if (have_rows('logos')): while (have_rows('logos')) : the_row();
              $imagem = get_sub_field('imagem_empresas');
              $link = get_sub_field('link_empresas'); 
              $alt = get_sub_field('alt_empresas'); ?>
                <div class="col-md-4"><a href=<?php  echo $link ?>><img class="img-paulo" src= <?php  echo $imagem ?> alt=<?php $alt ?>></a></div>
          <?php endwhile; endif; ?>
        </section>
      </div>

    <div id="servicos"></div>
    <section class="container text-posso-ajudar">
      <?php if (have_rows('como_posso_te_ajudar')): while (have_rows('como_posso_te_ajudar')) : the_row();
            $titulo = get_sub_field('titulo_posso_te_ajudar');
            $subtitulo = get_sub_field('subtitulo_posso_te_ajudar'); ?>
              <h2 class=""><?php echo $titulo ?></h2>
              <p class=""><?php echo $subtitulo ?></p>
      <?php endwhile; endif; ?>
    </section>

    <section class="row container mx-auto">
      <?php if (have_rows('cards')): while (have_rows('cards')) : the_row();
          $icon_card = get_sub_field('icon');
          $titulo_card = get_sub_field('titulo_card'); 
          $descricao_card = get_sub_field('descricao_card');
          $alt_card = get_sub_field('alt_card'); ?>
            <div class="col-md-4 px-3" style="padding-bottom: 80px;">
              <div class="card">
                <div class="icone mt-n9"> 
                  <img src= <?php  echo $icon_card ?> alt=<?php $alt_card ?>>
                </div>
                <h3><?php echo $titulo_card ?> </h3>
                <p><?php echo $descricao_card ?></p>
              </div>
              </div>
              
            </div>
      <?php endwhile; endif; ?>
    </section>
  </main>
<?php get_footer(); ?>
  