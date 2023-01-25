<?php

/**
 * Template Name: Portfólio
 */


get_header(); ?>
  <main class="portifolio">
    <div class="nav-banner">
        <img class="img-banner position-relative" src=<?php the_field('banner_portfolio'); ?> alt="Banner Portfólio">
        <div class="container">
            <div  class="position-absolute text-banner">
                <h1>
                    <?php the_field('titulo'); ?> <img class="mt-0 seta" src=<?php echo get_template_directory_uri() . '/assets/img/seta-portifolio.svg' ?>>
                </h1>
                <p>
                    <?php the_field('subtitulo'); ?>
                </p>
            </div>
        </div>
    </div>

    <section class="row">
      <div class="col-md-6 col-12"  id="sobre">
        <img class="img-paulo" src=<?php the_field('foto');?> alt="Foto do Designer Paulo Vitor">
      </div>
      <div class="col-md-6 col-12 bg-blue">
        <div class="about">
          <h2 class="title "><?php the_field('titulo_paulo');?></h2>
          <p><?php the_field('apresentacao_paragrafo_01');?></p>
          <p><?php the_field('apresentacao_paragrafo_02');?></p>
          <a href=<?php the_field('link_botao_paulo_vitor'); ?>><?php the_field('texto_botao');?></a>
        </div>
      </div>
    </section>

      <div id="portfolio">
        <section class="row overlay">
          <?php if (have_rows('logos')): while (have_rows('logos')) : the_row();
              $imagem = get_sub_field('imagem_empresas');
              $link = get_sub_field('link_empresas'); 
              $alt = get_sub_field('alt_empresas'); ?>
                <div class="col-md-4"><a href=<?php  echo $link ?>><img class="img-paulo" src= <?php  echo $imagem ?> alt=<?php $alt ?>></a></div>
          <?php endwhile; endif; ?>
        </section>
      </div>
  </main>
<?php get_footer(); ?>
  