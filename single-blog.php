<?php


get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="single">
    <div class="nav-banner-single-blog">
          <img class="img-banner position-relative" src=<?php the_post_thumbnail(); ?>
          <div class="container d-flex justify-content-center align-items-center">
              <div  class="position-absolute text-banner container">
                <h1><?php the_title(); ?></h1>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="container content px-3">
          <div class="col-md-10">
            <h2><?php the_title();?></h2>
            <p>By <strong><?php the_author(); ?></strong> </p>
            <?php the_content();?>
          </div>
        </div>
      </div>
      <div class="nav-banner">
      <?php if (have_rows('images')): while (have_rows('images')) : the_row(); 
        $titulo = get_sub_field('imagens');?>
          <img class="img-banner position-relative" src=<?php echo $titulo ?> alt="Banner">
          <?php endwhile; endif; ?>
      </div>
    </main>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
  