<?php

/**
 * Template Name: Portfólio
 */


get_header(); ?>
<main class="portifolio">
  <div class="nav-banner-portfolio">
    <img class="img-banner position-relative" src=<?php the_field('banner_portfolio'); ?> alt="Banner Portfólio">
    <div class="container">
      <div class="position-absolute text-banner">
        <h1>
          <?php the_field('titulo'); ?>
        </h1>
        <p>
          <?php the_field('subtitulo'); ?>
        </p>
      </div>
    </div>
  </div>

  <section class="row align-items-center">
    <?php $count = 0 ?>
    <?php if (have_rows('empresas')): while (have_rows('empresas')) : the_row();
            $count++;
            $imagem = get_sub_field('imagem');
            $imagem_hover = get_sub_field('imagem_hover');
            $titulo = get_sub_field('titulo_empresa');
            $descricao = get_sub_field('descricao_empresa');  
            $alt = get_sub_field('alt_empresa_portifolio');
            $link = get_sub_field('link_botao_empresas');
            $texto_bnt = get_sub_field('texto_botao_empresas'); ?>

    <?php if ($count % 2 == 1 ) : ?>
    <div class="col-lg-6 col-12 position-relative">
      <div class="img-wrapper">
        <a href="<?php echo $link ?>"><img class="img" src="<?php echo $imagem ?>" alt="<?php echo $alt ?>"></a>
        <a href="<?php echo $link ?>"><img class="img-hover" src="<?php echo $imagem_hover ?>"
            alt="<?php echo $alt ?>"></a>
        <div class="text-wrapper">
          <a href="<?php echo $link ?>">
            <p class="text-hover"><?php echo $alt ?></p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-12">
      <div class="about">
        <a href="<?php echo $link ?>">
          <h2 class="title"><?php echo $titulo ?></h2>
        </a>
        <p><?php echo $descricao ?></p>
        <a class="js-bnt" href=<?php echo $link ?>><img class="mt-0 seta-empresas"
            src=<?php echo get_template_directory_uri() . '/assets/img/seta_empresas_es.svg' ?>><?php echo $texto_bnt ?></a>
      </div>
    </div>

    <?php else : ?>

    <div class="col-lg-6 col-12 position-relative d-block d-lg-none">
      <div class="img-wrapper">
        <a href="<?php echo $link ?>"><img class="img" src="<?php echo $imagem ?>" alt="<?php echo $alt ?>"></a>
        <a href="<?php echo $link ?>"><img class="img-hover" src="<?php echo $imagem_hover ?>"
            alt="<?php echo $alt ?>"></a>
        <div class="text-wrapper">
          <a href="<?php echo $link ?>">
            <p class="text-hover"><?php echo $alt ?></p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-12">
      <div class="about-par">
        <a href="<?php echo $link ?>">
          <h2 class="title "><?php echo $titulo ?></h2>
        </a>
        <p><?php echo $descricao ?></p>
        <a class="js-bnt" href="<?php echo $link ?>"><?php echo $texto_bnt ?><img class="mt-0 seta-oposta"
            src=<?php echo get_template_directory_uri() . '/assets/img/seta-portifolio.svg' ?>></a>
      </div>
    </div>
    <div class="col-lg-6 col-12 position-relative d-none d-lg-block">
      <div class="img-wrapper">
        <a href="<?php echo $link ?>"><img class="img" src="<?php echo $imagem ?>" alt="<?php echo $alt ?>"></a>
        <a href="<?php echo $link ?>"><img class="img-hover" src="<?php echo $imagem_hover ?>"
            alt="<?php echo $alt ?>"></a>
        <div class="text-wrapper">
          <a href="<?php echo $link ?>">
            <p class="text-hover"><?php echo $alt ?></p>
          </a>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>
  </section>
</main>
<?php get_footer(); ?>