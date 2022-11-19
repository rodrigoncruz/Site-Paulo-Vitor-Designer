

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
                <div  class="d-flex justify-content-left align-items-center container">
                    <div>
                    <?php if(has_custom_logo() ): ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <img src=<?php echo get_template_directory_uri() . '/assets/img/logo.png';?> alt="Logo Paulo Vitor Designer">
                        </a>
                    <?php endif; ?>
                    </div>
                    <div>
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'primary_menu',
                                'depth' => 1
                                )
                            ); 
                        ?>
                    </div>
                </div>
            </nav>
            <div>
                <img class="w-100" src=<?php echo get_template_directory_uri() . '/assets/img/banner.png';?> alt="Logo Paulo Vitor Designer">
            </div>
        </section>
    </header>