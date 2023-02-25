
<div class="logo">
    <?php if(has_custom_logo() ): ?>
        <?php the_custom_logo(); ?>
    <?php else: ?>
        <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img src=<?php echo get_template_directory_uri() . '/assets/img/logo.png';?> alt="Logo Paulo Vitor Designer">
        </a>
    <?php endif; ?>
</div>
<div>
    <?php if(is_page('perguntas')):
        wp_nav_menu(
            array(
                'theme_location'    => 'secundary_menu',
                'depth'             => 1
                )
            ); 
    elseif(is_page('sobre-mim') || is_page('portifolio') || is_page('blog') || is_single() || is_404() ):
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
<div>oi</div>

<!-- <nav id="navbar-custom" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="">
            <?php if(has_custom_logo() ): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
                    <img src=<?php echo get_template_directory_uri() . '/assets/img/logo.png';?> alt="Logo Paulo Vitor Designer">
                </a>
            <?php endif; ?>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100" id="navbarNav">
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary_menu',
                'depth'             => 1,
                'container'         => '',
                'menu_class'        => 'navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
    </div>
</nav> -->
