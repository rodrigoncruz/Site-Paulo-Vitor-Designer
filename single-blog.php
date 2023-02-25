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
      <section class="bg-light">
          <div class="slick-carousel-single-blog container ">

          <?php 
          $current_post_id = get_the_ID();
          $args = array(
                'category_name' => 'blog',
                'posts_per_page' => -1,
                'post__not_in' => array($current_post_id)
            );

            $query = new WP_Query( $args ); ?>

            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="pt-5 pb-5 col-lg-4">
                <div class="">
                  <a href=<?php the_permalink(); ?>><img class="img-posts" src=<?php the_post_thumbnail();?></a>
                </div>
                <div class="bg-white card-text">
                  <div class="about-par-posts">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <p><?php the_excerpt(20); ?></p>
                    <div class="d-flex align-items-center comments mb-2">
                      <img src=<?php echo get_template_directory_uri() . '/assets/img/comentarios.png' ?> alt="">
                      <?php
                        if(get_comments_number() == 0 ): ?>
                          <p class="mb-1">Faça um comentário</p>
                        <?php else: ?> 
                          <p class="mb-1"><?php echo get_comments_number(); ?> comentários.</p>
                        <?php endif; ?>                               </div>
                    <a href="<?php echo get_permalink();?>">Leia o artigo</a>
                  </div>
                </div>
              </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </div>
    </section>
    </main>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
  