<?php


get_header(); ?>
  <main class="single">
  <div class="col-lg-6">
    <a href=<?php the_permalink(); ?>><img class="img" src=<?php the_post_thumbnail();?>></a>
  </div>
    <div class="nav-banner">
        <img class="img-banner position-relative" src=<?php the_field('imagem_banner'); ?> alt="Banner">
    </div>
    <div class="row">
      <?php if(!get_the_content() == ''): ?>
        <div class="container content px-3">
          <div class="col-md-10">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
        <?php else: ?>
          <div class="container px-3">
          <div class="col-md-10">
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
  </main>
<?php get_footer(); ?>
  