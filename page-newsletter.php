<?php

/**
 * Template Name: Newsletter
 */

get_header(); ?>
<div class="bg-black">
    <main class="container">
        <div class="card-news">
            <h1>Posso enviar dicas de Design
                e conteúdos sobre Marketing. O que acha?
            </h1>
            <p>
                Você receberá o conteúdo diretamente no seu e-mail.
                Fique tranquilo pois não envio SPAM e você pode cancelar
                a assinatura assim que tiver vontade.
            </p>

             <!-- Formulário Contat Forms -->
          <?php echo get_field('formulario_newsletter');?>

          <div class="bnt-icons-mobile">
            <ul class="d-flex nav-icon mb-0">
              <?php if (have_rows('redes_sociais')): while (have_rows('redes_sociais')) : the_row();
                          $logotipo_rodape = get_sub_field('logotipo_rodape');
                          $link_rede_rodape = get_sub_field('link_rodape'); ?>
              <li>
                <a href=<?php echo $link_rede_rodape ?>><img src=<?php echo $logotipo_rodape ?> alt=""></a>
              </li>
              <?php endwhile; endif; ?>
            </ul>
          </div>

        </div>
    </main>
</div>
<?php get_footer('news'); ?>