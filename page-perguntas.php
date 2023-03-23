<?php

/**
 * Template Name: Perguntas e Respostas
 */


get_header(); ?>
  <main>
    <section class="bg-black">
      <div class="container">
        <h1 class="text-white">Perguntas e respostas:</h1>
      </div>
    </section>

    <section class="container acordion-section">
    <?php if (have_rows('perguntas_e_respostas')): while (have_rows('perguntas_e_respostas')) : the_row(); ?>
        <?php $informacoes = get_sub_field('informacoes');?>

      <?php if (have_rows('titulo')): while (have_rows('titulo')) : the_row(); ?>
          <?php $titulo_acordion = get_sub_field('titulo_acordion');?>
          <h2 class="pb-2 pt-5 titulo"><?php echo $titulo_acordion ?></h2>
      <?php endwhile; endif; ?>

      <div class="px-0 py-sm-0 px-lg-0 col-md-9 col-12">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo $informacoes['acordion']; ?>">
              <button class="accordion-button collapsed v-expansion-panel-header" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $informacoes['acordion']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $informacoes['acordion']; ?>">
                <?php echo $informacoes['subtitulo_do_acordion'] ?>
              </button>
            </h2>
            <div id="collapse<?php echo $informacoes['acordion']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $informacoes['acordion']; ?>" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <?php echo $informacoes['descricao_perguntas'] ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
      <hr class="px-0 py-sm-0 px-lg-0 col-md-9 col-12 mb-5">

    <p class="mb-5">Fico feliz que meu trabalho tenha lhe despertado interesse. Caso tenha alguma dúvida<br> específica, entre em contato.<br><br>
        Muito obrigado, um forte abraço e sucesso!
    </p>

    </section>
  </main>
<?php get_footer(); ?>
  