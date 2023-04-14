<?php

get_header(); ?>
<main class="404">
  <section class="row">
    <div class="col-lg-6 col-12" id="sobre">
      <img class="img-paulo" src=<?php echo get_template_directory_uri() . '/assets/img/paulo.png' ?>
        alt="Foto do Designer Paulo Vitor">
    </div>
    <div class="col-lg-6 col-12 d-flex align-items-center bg-blue">
      <div class="about">
        <h2 class="title">Ops, essa página não existe</h2>
        <p>Não se preocupe, clique em Página Inicial ou Perguntas Frequentes.</p>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>