<?php
/**
 * Template Name: Blog
 */

get_header(); ?>
<main class="blog">
  <div class="nav-banner-blog align-items-center position-relative">
    <img class="img-banner" src=<?php the_field('banner_blog'); ?> alt="Banner Blog">
    <div class="container d-flex justify-content-center align-items-center">
      <div class="text-banner-blog">
        <h1>
          <?php the_field('titulo_banner_blog'); ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="bg-light">
    <section class="container">
      <?php

                $post = get_field('post_principal');
                $args = array(
                    'post_type' => 'post',
                    'p' => $post
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

      <section class=" row align-items-center pt-5 pb-5">
        <div style="border-radius: 6px 0px 0px 6px;" class="bg-white col-lg-6">
          <div class="about-par">
            <h2 class="title "><?php the_title(); ?></h2>
            <p><?php the_excerpt( ); ?></p>
            <div class="d-flex align-items-center comments mb-2">
              <img src=<?php echo get_template_directory_uri() . '/assets/img/comentarios.png' ?> alt="">
              <?php
                          if(get_comments_number() == 0 ): ?>
              <p class="mb-1">Faça um comentário</p>
              <?php else: ?>
              <p class="mb-1"><?php echo get_comments_number(); ?> comentários.</p>
              <?php endif; ?>
            </div>
            <a href="<?php echo get_permalink();?>">Leia o artigo</a>
          </div>
        </div>
        <div class="col-lg-6">
          <a href=<?php the_permalink(); ?>><img class="img" src=<?php the_post_thumbnail();?></a> </div> </section> <?php endwhile; endif;
                  wp_reset_postdata();
                ?> <?php

                  $args = array(
                      'category_name' => 'blog',
                      'posts_per_page' => 9,
                      'orderby' => 'date',
                      'order' => 'DESC'
                  );

                  $query = new WP_Query( $args ); ?> <section class="row container-blog">
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="pt-5 pb-5 col-lg-4">
              <div class="">
                <a href=<?php the_permalink(); ?>><img class="img-posts" src=<?php the_post_thumbnail();?></a> </div>
                    <div style="border-radius: 0px 0px 6px 6px;" class="bg-white card-text">
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
                      <?php endif; ?> </div>
                    <a href="<?php echo get_permalink();?>">Leia o artigo</a>
                  </div>
              </div>
            </div>
            <?php endwhile; endif; ?>
      </section>

      <?php wp_reset_postdata();
                ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>