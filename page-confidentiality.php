<?php
/*
Template Name: Шаблон с якорным меню
*/

    get_header();
?>


<div class="wrapper">

    <? get_template_part( 'template-parts/breadcrumbs' ) ?>

    <div class="content-wrapper">
      <main class="content">
        <div class="info-content">
          <h1><?php the_title(); ?></h1>

          <?php the_content(); ?>

          <?php the_field('acf_textblock-info'); ?>

        </div><!--end info-content -->
      </main>
      <aside class="col-right anchors-menu">
        <ul class="anchors-list">
          <?php
            $rows = get_field('acf_textblock-menu');
              if($rows)
              {

                foreach($rows as $row)
                {
                  echo '<li><a class="news-item__tag" href=" ' . $row['acf_link-id'] . ' "> ' . $row['acf_link-title'] . '</a></li>';
                }
              }
          ?>
        </ul>
      </aside>

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