<?php
/**
 * Template Name: Single Blog
 */

get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="single">
      <section class="nav-banner-single-blog">
          <img class="img-banner position-relative" src=<?php the_post_thumbnail();?>
          <div class="container d-flex justify-content-center align-items-center">
              <div  class="position-absolute text-banner container">
                <h1><?php the_title(); ?></h1>
              </div>
          </div>
      </section>
      <section class="row">
        <div class="container content px-3">
          <div class="col-md-10">
            <div class="mb-5">
              <h2 class="title-single-blog"><?php the_title();?></h2>
            </div>
            <div class="by-single-blog">
              <p>By <strong><?php the_author(); ?></strong> - <?php echo get_the_date('F j, Y'); ?> - <strong><?php echo get_comments_number(); ?> comentários</strong></p>
            </div>
            <div class="mt-5">
              <?php the_content();?>
            </div>
            <div class="mt-5">
              <p><strong>Crédito</strong></p>
                <?php
                  if ( has_tag() ):
                  echo 'Tags: ';
                  echo get_the_tag_list( '', ', ', '' );
                  endif;
              ?>
            </div>
          </div>
        </div>
      </section>
    </main>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
  