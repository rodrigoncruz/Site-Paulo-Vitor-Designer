
<div class="logo">
    <?php if(has_custom_logo() ): ?>
        <?php the_custom_logo(); ?>
    <?php else: ?>
        <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img src=<?php echo get_template_directory_uri() . '/assets/img/logo.png';?> alt="Logo Paulo Vitor Designer">
        </a>
    <?php endif; ?>
</div>
<div class="d-none d-sm-block">
    <?php if(is_page('perguntas') || is_page('sobre-mim') || is_page('portifolio') || is_page('blog') || is_single() || is_404()):
        wp_nav_menu(
            array(
                'theme_location'    => 'tertiary_menu',
                'depth'             => 1
                )
            ); 

    ?>

   <?php else: 
        wp_nav_menu(
            array(
                'theme_location' => 'primary_menu',
                'depth' => 1
                )
            ); 
    endif; ?>
    
</div>

<!-- Plugin Mobile-->

<div class="d-block d-sm-none">
    <?php
        $menu_id = '807';
        $menu_output = do_shortcode('[rmp_menu id="'.$menu_id.'"]');
        echo $menu_output;
    ?>
</div>
