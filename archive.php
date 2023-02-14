<?php
/**
 * Template Name: Archive
 */
get_header(); ?>
    <main class="blog">
        <div class="nav-banner-blog">
            <img class="img-banner position-relative" src=<?php echo get_template_directory_uri() . '/assets/img/banner-archive.png' ?> alt="Banner Blog">
            <div class="container d-flex justify-content-center align-items-center">
                <div  class="position-absolute text-banner">
                    <h1>
                        <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="bg-light">
            <section class="container">
                

                <?php
                    $tag = single_tag_title( '', false );
                    $args = array(
                        'tag' => $tag,
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
                        <?php endwhile; endif; ?>
                        </section>
                    
                    <?php wp_reset_postdata();
                ?>
        </section>
        </div>
    </main>
<?php get_footer(); ?>