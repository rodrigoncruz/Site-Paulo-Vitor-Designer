
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
    <?php 
    if(is_page('home') || is_page('newsletter')):
        wp_nav_menu(
            array(
                'theme_location'    => 'menu_home',
                'depth'             => 1
                )
            ); 

    elseif(is_single() || is_single('blog') || is_single('empresas')):
            wp_nav_menu(
                array(
                    'theme_location'    => 'menu_artigo',
                    'depth'             => 1
                    )
                ); 

    elseif(is_page('portifolio') || is_404()):
                wp_nav_menu(
                    array(
                        'theme_location'    => 'menu_portfolio',
                        'depth'             => 1
                        )
                    ); 

    elseif(is_page('perguntas')):
        wp_nav_menu(
            array(
                'theme_location'    => 'menu_perguntas',
                'depth'             => 1
                )
            ); 

    elseif(is_page('politica-de-privacidade')):
        wp_nav_menu(
            array(
                'theme_location'    => 'menu_politica',
                'depth'             => 1
                )
            ); 

    elseif(is_page('blog')):
        wp_nav_menu(
            array(
                'theme_location'    => 'menu_blog',
                'depth'             => 1
                )
            ); 
            
    elseif(is_page('sobre-mim')):
        wp_nav_menu(
            array(
                'theme_location'    => 'menu_quem_sou',
                'depth'             => 1
                )
            ); 
    ?>

    <?php endif; ?>
    
</div>

<!-- Plugin Mobile-->
<?php 
if(is_page('home') || is_page('newsletter')): 
 ?>   
<div class="d-block d-sm-none d-flex">
    <?php
        $menu_id = '807';
        $menu_output = do_shortcode('[rmp_menu id="'.$menu_id.'"]');
        echo $menu_output;

elseif(is_page('blog')): 
 ?>   
<div class="d-block d-sm-none d-flex">
    <?php
        $menu_id = '911';
        $menu_output = do_shortcode('[rmp_menu id="'.$menu_id.'"]');
        echo $menu_output;

elseif(is_single() || is_single('blog') || is_single('empresas')):
    ?>   
    <div class="d-block d-sm-none d-flex">
        <?php
            $menu_id = '912';
            $menu_output = do_shortcode('[rmp_menu id="'.$menu_id.'"]');
            echo $menu_output;

elseif(is_page('portifolio') || is_404()): 
    ?>   
    <div class="d-block d-sm-none d-flex">
        <?php
            $menu_id = '913';
            $menu_output = do_shortcode('[rmp_menu id="'.$menu_id.'"]');
            echo $menu_output;

elseif(is_page('perguntas')): 
    ?>   
    <div class="d-block d-sm-none d-flex">
        <?php
            $menu_id = '914';
            $menu_output = do_shortcode('[rmp_menu id="'.$menu_id.'"]');
            echo $menu_output;

elseif(is_page('politica-de-privacidade')):
    ?>   
    <div class="d-block d-sm-none d-flex">
        <?php
            $menu_id = '915';
            $menu_output = do_shortcode('[rmp_menu id="'.$menu_id.'"]');
            echo $menu_output;

elseif(is_page('sobre-mim')):
    ?>   
    <div class="d-block d-sm-none d-flex">
        <?php
            $menu_id = '916';
            $menu_output = do_shortcode('[rmp_menu id="'.$menu_id.'"]');
            echo $menu_output;
endif
        ?>

</div>