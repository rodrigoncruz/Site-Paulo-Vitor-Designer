<?php

/**
 * Template Name: Portfólio
 */


get_header(); ?>
  <main class="portifolio">
    <div class="nav-banner-portfolio">
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
      <?php $count = 0 ?>
    <?php if (have_rows('empresas')): while (have_rows('empresas')) : the_row();
            $count++;
            $imagem = get_sub_field('imagem');
            $titulo = get_sub_field('titulo_empresa');
            $descricao = get_sub_field('descricao_empresa');  
            $alt = get_sub_field('alt_empresa_portifolio');
            $link = get_sub_field('link_botao_empresas');
            $texto_bnt = get_sub_field('texto_botao_empresas'); ?>

          <?php if ($count % 2 == 1 ) : ?>
          <div class="col-md-6 col-12">
            <img class="img" src=<?php echo $imagem ?> alt="<?php echo $alt ?>">
          </div>
          <div class="col-md-6 col-12">
            <div class="about">
              <h2 class="title "><?php echo $titulo ?></h2>
              <p><?php echo $descricao ?></p>
              <a href=<?php echo $link ?>><img class="mt-0 seta-empresas" src=<?php echo get_template_directory_uri() . '/assets/img/seta_empresas_es.svg' ?>><?php echo $texto_bnt ?></a>
            </div>
          </div>

          <?php else : ?>
            
            <div class="col-md-6 col-12">
              <div class="about-par">
                <h2 class="title "><?php echo $titulo ?></h2>
                <p><?php echo $descricao ?></p>
                <a href=<?php echo $link ?>><?php echo $texto_bnt ?><img class="mt-0 seta-oposta" src=<?php echo get_template_directory_uri() . '/assets/img/seta-portifolio.svg' ?>></a>
              </div>
            </div>
          <div class="col-md-6 col-12">
            <img class="img" src=<?php echo $imagem ?> alt="<?php echo $alt ?>">
          </div>
          <?php endif; ?>
      <?php endwhile; endif; ?>
    </section>
  </main>
<?php get_footer(); ?>
  