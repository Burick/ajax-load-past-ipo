<?php 

get_header(); 

?>

<div class="wrapper">

    <? get_template_part( 'template-parts/breadcrumbs' ) ?>

    <h1 class="title-h1 xl-mt50">Учебный центр</h1>
    <?php
      wp_nav_menu( array(
          'theme_location' => 'menu-3',
          'container' => '',
          'menu_class' => 'blog-links',
      ) );
    ?>
    <div class="content-wrapper mt10">
      <main class="content">
          <div class="b-abc">
          <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-4',
                'container' => '',
                'menu_class' => 'list-abc',
            ) );
          ?>
          <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-5',
                'container' => '',
                'menu_class' => 'list-abc',
            ) );
          ?>
            <div class="gloss-content">
              <div class="gloss-row">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non incidunt saepe quos sed at magni asperiores error blanditiis corporis molestiae eaque unde consequatur, nisi nesciunt.</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non incidunt saepe quos sed at magni asperiores error blanditiis corporis molestiae eaque unde consequatur, nisi nesciunt.</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non incidunt saepe quos sed at magni asperiores error blanditiis corporis molestiae eaque unde consequatur, nisi nesciunt.</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non incidunt saepe quos sed at magni asperiores error blanditiis corporis molestiae eaque unde consequatur, nisi nesciunt.</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non incidunt saepe quos sed at magni asperiores error blanditiis corporis molestiae eaque unde consequatur, nisi nesciunt.</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non incidunt saepe quos sed at magni asperiores error blanditiis corporis molestiae eaque unde consequatur, nisi nesciunt.</p>
              </div><!--end gloss-row -->
            </div>
          </div><!--end b-abc -->
      </main>
    </div><!--end content-wrapper -->
  </div><!--end wrapper -->
  <? get_template_part( 'template-parts/subscribe-news-all' ) ?>

<?php

get_footer();

?>