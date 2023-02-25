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
                <a href=<?php the_field('link_botao_banner'); ?>><?php the_field('texto_botao_banner'); ?></a>
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
      <section class="container carrossel">
        <h2><?php the_field('titulo_carrossel'); ?></h2>
          <div class="slick-carousel">
          <?php if (have_rows('carrosel')): while (have_rows('carrosel')) : the_row(); 
                $imagem_cad = get_sub_field('imagem'); 
                $link_cad = get_sub_field('link'); ?>
              <div class="card-slick d-flex align-items-center justify-content-center"> <a href="<?php echo $link_cad['url']; ?>"><img src=<?php echo $imagem_cad; ?> alt="Logo clientes"></div></a>
            <?php endwhile; endif; ?>
          </div>
      </section>

  </main>
<?php get_footer(); ?>
  