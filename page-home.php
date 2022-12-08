<?php

/**
 * Template Name: Home
 */


get_header(); ?>
  <main class="frontPage">

    <section class="row">
      <div class="col-md-6 col-12">
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

    <section class="container text-center text-empresas">
      <h2 class="px-4 px-sm-2"><?php the_field('titulo_empresas');?></h2>
      <p class="px-4"><?php the_field('subtitulo_empresas');?></p>
    </section>

    <section class="row overlay">
      <div class="col-md-4"><a href=""><img class="img-paulo" src=<?php echo get_template_directory_uri() . '/assets/img/linkPark.jpg';?> alt="Link Park"></a></div>
      <div class="col-md-4"><a href=""><img class="img-paulo" src=<?php echo get_template_directory_uri() . '/assets/img/supreme.png';?> alt="Supreme"></a></div>
      <div class="col-md-4"><a href=""><img class="img-paulo" src=<?php echo get_template_directory_uri() . '/assets/img/logotipos.png';?> alt="Logotipo"></a></div>
      <div class="col-md-4"><a href=""><img class="img-paulo" src=<?php echo get_template_directory_uri() . '/assets/img/bojack.jpg';?> alt="Bojack"></a></div>
      <div class="col-md-4"><a href=""><img class="img-paulo" src=<?php echo get_template_directory_uri() . '/assets/img/papelada.jpg';?> alt="Papelaria"></a></div>
      <div class="col-md-4"><a href=""><img class="img-paulo" src=<?php echo get_template_directory_uri() . '/assets/img/bela.jpg';?> alt="Bela Arina"></a></div>
    </section>
  </main>
<?php get_footer(); ?>
  