<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section>
            <nav class="nav">
                <div class="d-flex justify-content-between container">

                    <div class="d-flex align-items-center">
                        <div class="logo">
                            <?php if(has_custom_logo() ): ?>
                                <?php the_custom_logo(); ?>
                            <?php else: ?>
                                <a href="<?php echo esc_url( home_url('/') ); ?>">
                                    <img src=<?php echo get_template_directory_uri() . '/assets/img/logo.png';?> alt="Logo Paulo Vitor Designer">
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="d-none d-lg-block">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'primary_menu',
                                    'depth' => 1
                                    )
                                ); 
                            ?>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="nav-bnt d-none d-none d-lg-block">
                            <a href=<?php the_field('link_orcamento'); ?>><?php the_field('texto_orcamento'); ?></a>
                        </div>
                        <div class="bnt-icons d-flex">
                            <ul class="d-flex nav-icon mb-0">
                                <?php if (have_rows('redes_sociais')): while (have_rows('redes_sociais')) : the_row();
                                    $logotipo = get_sub_field('logotipo');
                                    $link_rede = get_sub_field('link_rede'); ?>
                                        <li class="d-none d-lg-block">
                                            <a href=<?php echo $link_rede ?>><img src=<?php echo $logotipo ?> alt="Instagram"></a>
                                        </li>
                                <?php endwhile; endif; ?>
                            </ul>
                        </div>

                        <div class="text-white d-block d-lg-none">
                            oi
                        </div>
                    </div>

                </div>
            </nav>
        </div>
        <div class="nav-banner">
            <img class="img-banner position-relative" src=<?php the_field('banner'); ?> alt="Logo Paulo Vitor Designer">
            <div class="container">
                <div  class="position-absolute text-banner">
                    <h1>
                        <?php the_field('titulo'); ?>
                    </h1>
                    <a href=""><?php the_field('texto_botao'); ?></a>
                </div>
            </div>
        </div>
        </section>
    </header>