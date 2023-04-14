  <footer class="bg-blue-dark">
    <section class="bg-light">
      <div class="container logo-rodape d-flex justify-content-between align-items-center">
        <div>
          <a href=<?php the_field('link_logo','options');?>><img
              src=<?php the_field('logo_paulo','options');?>></a><?php the_field('paulo_vitor_designer','options');?>
        </div>
        <div class="menu-footer d-none d-lg-block">
          <?php
            wp_nav_menu(
              array(
                  'theme_location'    => 'footer_menu',
                  'depth'             => 1
                  )
              );
          ?>
        </div>
      </div>
    </section>
  </footer>
  <?php wp_footer(); ?>
  </body>

  </html>