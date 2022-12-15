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