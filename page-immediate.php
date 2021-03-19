<?php
/*
Template Name: Шаблон для ближайших IPO
*/

    get_header();
?>

<div class="wrapper">

        <? get_template_part( 'template-parts/breadcrumbs' ) ?>

    <div class="content-wrapper">
      <main class="content">
        <h2 class="title-h1">Ближайшие IPO</h2>
        <div class="ipo-desc-first">
          <p>Еженедельно мы отбираем свыше <strong>25</strong> потенциально прибыльных <strong>IPO</strong>. Вы сами
            решаете, во что вкладывать свои деньги. Инвестируйте и получайте результат — всю бумажную работу мы берем на
            себя.
          </p>
        </div>
        <div class="ipos-full">
          <div class="ipos-full-scroll">
            <div class="ipos-full-scroll__content">

              <? get_template_part( 'template-parts/immediate-item' ) ?>

            </div>

          </div><!--end slider -->
          </div><!--end ipos-full__slider--scroll -->
          <?php
          $get_ipo_count = $wpdb->get_results("SELECT COUNT(*) FROM `budipo`");
          $get_ipo_count= (array)$get_ipo_count[0];
         // print_r($get_ipo_count);
          if($get_ipo_count['COUNT(*)'] > 9){
          ?>
                   <div class="slide-nav-bottom">
            <div class="slide-steps"><span class="step">01</span> /<span class="steps">05</span></div>
            <div class="slide-progress">
              <div class="progress"></div>
            </div>
            <div class="slide-arrs">
              <div id="ipo-slide-prev" class="change-prev"></div>
              <div id="ipo-slide-next" class="change-next"></div>
            </div>
          </div>
          <?php

        }

          ?>
        
        </div><!--end ipos-full--slider -->
      </main>
    </div><!--end content-wrapper -->
  </div><!--end wrapper -->
  <? get_template_part( 'template-parts/subscribe-news-all' ) ?>

<?php

    get_footer();

?>