<?php 

get_header(); 

?>

<div class="wrapper">

    <? get_template_part( 'template-parts/breadcrumbs' ) ?>

    <h1 class="title-h1 xl-mt50">Глоссарий</h1>
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
                <div class="letter"><?php the_title(); ?></div>

                <?php the_content(); ?>
                
              </div><!--end gloss-row -->
            </div>
          </div><!--end b-abc -->
      </main>
    </div><!--end content-wrapper -->
  </div><!--end wrapper -->
  <div class="lvl12 inside-footer">
    <div class="wrapper">
      <div class="foot-just">
        <div class="b-text">Хотите получать свежие новости и аналитику?</div>
        <div class="b-form">
          <div class="form">
            <div class="b-pole"><input class="pole" type="text" placeholder=" " id="form-email"><label for="form-email">Введите свой e-mail</label></div>
            <div class="b-btn"><input class="btn btn-white" type="submit" value="Хочу!"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="dqq bdq12-3 t7"></div>
    <div class="dqq bdq12-4 t5"></div>
  </div><!--end lvl -->

<?php

get_footer();

?>