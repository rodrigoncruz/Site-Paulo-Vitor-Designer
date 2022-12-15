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
                            <?php if(is_page('perguntas')):
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'secundary_menu',
                                        'depth' => 1
                                        )
                                    ); 
                            elseif(is_page('sobre-mim') || is_single() ):
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'tertiary_menu',
                                        'depth' => 1
                                        )
                                    ); 
                            
                                else:
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary_menu',
                                        'depth' => 1
                                        )
                                    ); 
                            endif; ?>
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
                                            <a href=<?php echo $link_rede ?>><img src=<?php echo $logotipo ?> alt="Logotipo Redes Sociais"></a>
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
        </section>
    </header>