<?php
/**
 * Template Name: Blog
 */

get_header(); ?>
  <main class="blog">
    <div class="nav-banner-blog">
        <img class="img-banner position-relative" src=<?php the_field('banner_blog'); ?> alt="Banner Blog">
        <div class="container d-flex justify-content-center align-items-center">
            <div  class="position-absolute text-banner">
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
                    <div class="bg-white col-lg-6">
                      <div class="about-par">
                        <h2 class="title "><?php the_title(); ?></h2>
                        <p><?php the_excerpt( ); ?></p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <a href=<?php the_permalink(); ?>><img class="img" src=<?php the_post_thumbnail();?></a>
                    </div>
                </section>
                    
                  <?php endwhile; endif;
                  wp_reset_postdata();
                ?>

            <?php

                  $args = array(
                      'category_name' => 'blog',
                      'posts_per_page' => 9,
                      'orderby' => 'date',
                      'order' => 'DESC'
                  );

                  $query = new WP_Query( $args ); ?>

                  
                  <section class="row">
                        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="pt-5 pb-5 col-lg-4">
                          <div class="">
                            <a href=<?php the_permalink(); ?>><img class="img-posts" src=<?php the_post_thumbnail();?></a>
                          </div>
                          <div class="bg-white card-text">
                            <div class="about-par-posts">
                              <h2 class="title"><?php the_title(); ?></h2>
                              <p><?php the_excerpt(20); ?></p>
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