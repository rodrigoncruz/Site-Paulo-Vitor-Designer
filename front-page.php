<?php get_header(); ?>
  <main class="container text-center">
    
    <?php 


    
    $args = [
      
      'post_type'      => 'post',
      'posts_per_page' => 1,
    ];

    $query = new WP_Query($args);

    if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>

    <?php endwhile; endif; wp_reset_query(); ?>

    <br/>
    -------------------------------------------------
    <br/>

   <?php 

    $page = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;


    $args = [
      'post_type'      => 'post',
      'posts_per_page' => 7,
      'post__not_in'   => [$post->ID],
      'orderby'        => 'ID',
      'order'          => 'ASC',
      'paged'          => $page,
    ];

    $query = new WP_Query($args);
    if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post(); ?>
      <?php echo get_the_ID();?>
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    <?php endwhile; endif; wp_reset_query(); ?>
    <?php

      $big = 999999999; // need an unlikely integer

      echo paginate_links( array(
        'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'  => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total'   => $query->max_num_pages
      ) );
?>
  </main>
<?php get_footer(); ?>
  