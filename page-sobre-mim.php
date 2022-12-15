<?php

/**
 * Template Name: Sobre mim
 */


get_header(); ?>
  <main class="sobre-mim">
    <div class="nav-banner">
        <img class="img-banner position-relative" src=<?php the_field('banner_sobre_mim'); ?> alt="Banner">
    </div>
    <section class="row">
        <div class="col-md-6 col-12">
          <img class="img-paulo" src=<?php the_field('foto_paulo_vitor');?> alt="Foto do Designer Paulo Vitor">
        </div>
        <div class="col-md-6 col-12 bg-blue">
          <div class="about">
          <?php if (have_rows('quem_e_paulo_vitor')): while (have_rows('quem_e_paulo_vitor')) : the_row(); 
              $titulo = get_sub_field('titulo_sobre_paulo');
              $descricao = get_sub_field('descricao_sobre_paulo');?>
              <h2 class="title"><?php echo $titulo ?></h2>
              <p class="pb-5"><?php echo $descricao ?></p>
          <?php endwhile; endif; ?>
          </div>
        </div>
      </section>
      <section class="bg-slogan row px-4">
        <h2 class="mx-auto text-center"><?php the_field('citacao_sobre_mim'); ?></h2>
      </section>
      <section class="briefing container">
        <h2>Processo criativo:</h2>
        <ul>
          <li>
            <h4>1 - Briefing:</h4>
            <p>Tudo começa pelo briefing. Ele é a matéria prima de todo projeto. É onde vou coletar, analisar e estudar as informações sobre o seu negócio, seus objetivos e os desafios que ele possui. Com ele eu consigo identificar os atributos que o projeto precisa conter.</p>
          </li>
        </ul>
      </section>
  </main>
<?php get_footer(); ?>
  