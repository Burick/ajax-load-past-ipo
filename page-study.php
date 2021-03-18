<?php
/*
Template Name: Шаблон для учебного центра
*/

    get_header();
?>

<div class="wrapper">

    <? get_template_part( 'template-parts/breadcrumbs' ) ?>

    <h1 class="title-h1 xl-mt50"><?php the_title(); ?></h1>
    <?php
      wp_nav_menu( array(
          'theme_location' => 'menu-3',
          'container' => '',
          'menu_class' => 'blog-links',
      ) );
    ?>
    <div class="content-wrapper mt10">
      <main class="content">
        <div class="items-univer">
          <div class="item">
            <div class="block">
              <div class="img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/video-img.png" alt=""></div>
              <div class="title">Онлайн - курс “Начинающий”</div>
              <div class="text">IPO (Initial Public Offering) — первичное предложение акций до начала котирования на бирже. </div>
              <div class="b-btn"><a href="#" class="btn">Подробнее</a></div>
            </div><!--end block -->
          </div><!--end item -->
          <div class="item">
            <div class="block">
              <div class="img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/video-img.png" alt=""></div>
              <div class="title">Онлайн - курс “Начинающий”</div>
              <div class="text">IPO (Initial Public Offering) — первичное предложение акций до начала котирования на бирже. </div>
              <div class="b-btn"><a href="#" class="btn">Подробнее</a></div>
            </div><!--end block -->
          </div><!--end item -->
          <div class="item">
            <div class="block">
              <div class="img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/video-img.png" alt=""></div>
              <div class="title">Онлайн - курс “Начинающий”</div>
              <div class="text">IPO (Initial Public Offering) — первичное предложение акций до начала котирования на бирже. </div>
              <div class="b-btn"><a href="#" class="btn">Подробнее</a></div>
            </div><!--end block -->
          </div><!--end item -->

        </div><!--end b-items-univer -->
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