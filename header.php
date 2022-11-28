

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
        <section class="menu-mobile">
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
                            <a href="">Orçamento</a>
                        </div>
                        <div class="bnt-icons d-flex">
                            <ul class="d-flex nav-icon mb-0">
                                <li class="d-none d-lg-block">
                                    <a href=""><img src=<?php echo get_template_directory_uri() . '/assets/img/instagram.png';?> alt="Instagram"></a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href=""><img src=<?php echo get_template_directory_uri() . '/assets/img/facebook.png';?> alt="Facebook"></a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href=""><img src=<?php echo get_template_directory_uri() . '/assets/img/Drible.png';?> alt="Drible"></a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href=""><img src=<?php echo get_template_directory_uri() . '/assets/img/Pinterest.png';?> alt="Pinterest"></a>
                                </li>
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
            <img class="w-100" src=<?php echo get_template_directory_uri() . '/assets/img/banner.png';?> alt="Logo Paulo Vitor Designer">
            <div class="container">
                <h1>
                    A ideia da marca vale mais
                    <br>
                    que a própria marca.
                </h1>
                <a class="nav-banner-bnt" href="">Veja mais</a>
            </div>
        </div>
        </section>
    </header>