<?php
/**
 * Template Name: Single Empresas
 */

get_header(); ?>
  <main class="single">
    <div class="nav-banner">
        <img class="img-banner position-relative" src=<?php echo get_field('imagem_banner'); ?> alt="Banner">
    </div>
    <div class="row">
      <?php if(!get_the_content() == ''): ?>
        <div class="container content px-3">
          <div class="col-lg-10">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
        <?php else: ?>
          <div class="container px-3">
          <div class="col-lg-10">
            </div>
          </div>
        </div>
      <?php endif; ?>
    <div class="nav-banner">
    <?php if (have_rows('images')): while (have_rows('images')) : the_row(); 
      $titulo = get_sub_field('imagens');?>
        <img class="img-banner position-relative" src=<?php echo $titulo ?> alt="Banner">
        <?php endwhile; endif; ?>
    </div>

    <section class="container carrossel">
        <h2><?php echo get_field('titulo_carrossel'); ?></h2>
          <div class="slick-carousel">

          <?php 
          $current_post_id = get_the_ID();
          $args = array(
                'category_name' => 'empresas',
                'posts_per_page' => -1,
                'post__not_in' => array($current_post_id)
            );

            $query = new WP_Query( $args ); ?>

            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="card-slick d-flex align-items-center justify-content-center"> <a href="<?php the_permalink() ?>"><img src=<?php echo get_field('imagem_banner'); ?> alt="Logo clientes"></a></div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </div>
    </section>
  </main>
<?php get_footer(); ?>
  