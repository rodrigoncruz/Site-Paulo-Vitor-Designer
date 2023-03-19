<?php

/**
 * Template Name: Sobre mim
 */


get_header(); ?>
  <main class="sobre-mim">
    <div class="nav-banner">
        <img class="img-banner position-relative" src=<?php the_field('banner_sobre_mim'); ?> alt="Banner">
    </div>
    <section class="row bg-blue">
        <div class="col-md-6 col-12">
          <img class="img-paulo" src=<?php the_field('foto_paulo_vitor');?> alt="Foto do Designer Paulo Vitor">
        </div>
        <div class="col-md-6 col-12">
          <div class="about">
          <?php if (have_rows('quem_e_paulo_vitor')): while (have_rows('quem_e_paulo_vitor')) : the_row(); 
              $titulo = get_sub_field('titulo_sobre_paulo');
              $descricao = get_sub_field('descricao_sobre_paulo');?>
              <h2 class="title"><?php echo $titulo ?></h2>
              <p><?php echo $descricao ?></p>
          <?php endwhile; endif; ?>
          </div>
        </div>
      </section>
      <section class="bg-slogan">
        <div class="container">
          <h2 class="col-md-10 col-12"><?php the_field('titulo_metodologia_e_processo'); ?></h2>
          <p class="col-md-10 col-12"><?php the_field('sub_metodologia_e_processo'); ?></p>
        </div>
      </section>
      <div class="bg-black">
          <section class="briefing container">
          <ul>
            <?php if (have_rows('itens_processo_criativo')): while (have_rows('itens_processo_criativo')) : the_row();
            $titulo = get_sub_field('titulo');
            $descricao = get_sub_field('descricao');?>
            <li>
              <h4><?php echo $titulo ?></h4>
              <p><?php echo $descricao ?></p>
            </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      </section>
      <section class="bg-informacoes d-flex px-4">
        <div class="d-flex container justify-content-between">
        <?php if (have_rows('informacoes')): while (have_rows('informacoes')) : the_row();
          $titulo = get_sub_field('dados');
          $descricao = get_sub_field('descricao');?>
          <li>
          <div class="text-left pt-5 pb-5 d-lg-flex">
            <h4><?php echo $titulo ?></h4>
            <h5><?php echo $descricao ?></h5>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </section>
  </main>
<?php get_footer(); ?>
  