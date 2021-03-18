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

              <?php
            global $wpdb;


            $get_ipo = $wpdb->get_results("SELECT * FROM `budipo`");
          //  echo '<pre>';

            $category = array('-');

            $category[] = 'Consumer Staples';

            $category[] = 'Health Care';

            $category[] = 'Consumer Discretionary';

            $category[] = 'Technology';

            $category[] = 'Materials';

            $category[] = 'Real Estate';

            $category[] = 'Financials';

            $category[] = 'Industrials';

            $category[] = 'Energy';

            $category[] = 'Utilities';

            $category[] = 'Communication Services';

            foreach ($get_ipo as $value) {

              $skuCode = $value->ticker;
              $selectProducts = $wpdb->get_results("SELECT * FROM `wp_postmeta` WHERE `meta_key` = 'tiker' AND `meta_value` = '$skuCode'");
            ?>
            <div class="ip-item">
              <div class="block">
                <div class="icon"><img src="https://static-dev-ff4708e.s3.eu-north-1.amazonaws.com/logos/<?php echo $value->ticker;  ?>_logo.jpg" alt=""></div>
                <?php echo $value->company_name; ?>
                <div class="title"><?php echo $value->stock; ?>:<a href="<?php echo get_post_permalink( $selectProducts[0]->post_id ); ?>"><?php echo $value->ticker; ?></a></div>
                <div class="text"><?php echo $value->lan_eng; ?></div>
                <div class="props">
                  <div class="p-row"><span>Deal size</span><strong>35.00 $</strong></div>
                  <div class="p-row"><span>Диапазон цены</span><strong><?php echo $value->offering_range_min; ?>-<?php echo $value->offering_range_max; ?> $</strong></div>

                  <?php
                  $ex_date = explode('T',$value->ipo_date);

                  ?>
                  <div class="p-row"><span>Планируемая дата IPO:</span><strong><?php
                  // echo $ex_date[0];
                   $x = explode('-',$ex_date[0]);

                   echo $x[2].'-'.$x[1].'-'.$x[0];
                    ?></strong></div>
                </div>
                <div class="bottom">
                  <div class="bott-props">
                    <div class="p-row"><span>Сфера</span><strong class="color <?php echo $category[$value->sphere]; ?>"><?php echo $category[$value->sphere]; ?></strong></div>
                    <div class="p-row"><span>Антерайтер</span><strong>Goldman</strong></div>
                    <div class="p-row"><span>Рейтинг от IPO.one:</span><strong>
                      
                      <?php

                      if($value->rating == 0){

                        ?>

                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
                        <?php

                      }elseif($value->rating ==1){

                        ?>
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">

                        <?php

                      }elseif($value->rating ==2){

                        ?>
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">

                        <?php

                      }elseif($value->rating ==3){

                        ?>
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">

                        <?php

                      }
                      $t = $ex_date[1];
                      $ex = explode(':',$t);
                      ?>

                      </strong>
                    </div>
                  </div>
                  <div class="b-btn"><a href="#" class="btn btn-add">Подать заявку</a></div>
                  <div class="b-timer">
                    <div class="timer-title">До окончания приема заявок</div>
                    <div class="timer">
                      <div id="countdown1" class="countdown">
                        <div class="countdown-number">
                          <span data="<?php echo $ex_date[0]; ?>" class="days countdown-time"></span>
                          <span class="countdown-text">Дня</span>
                        </div>
                        <div class="countdown-number">
                          <span data="<?php echo $ex[0]; ?>" class="hours countdown-time"></span>
                          <span class="countdown-text">Часы</span>
                        </div>
                        <div class="countdown-number">
                          <span data="<?php echo $ex[1]; ?>" class="minutes countdown-time"></span>
                          <span class="countdown-text">Минут</span>
                        </div>
                        <div class="countdown-number">
                          <span data="<?php echo preg_replace('~\D+~','', $ex[2]); ?>" class="seconds countdown-time"></span>
                          <span class="countdown-text">Секунд</span>
                        </div>
                      </div>
                    </div><!--end countdown -->
                  </div><!--end b-timer -->
                </div><!--end bottom -->
              </div><!--end block -->
            </div><!--end ip-item -->


<?php
  }

?>


             
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
  <div class="lvl12 inside-footer">
    <div class="wrapper">
      <div class="foot-just">
        <div class="b-text">Хотите получать свежие новости и аналитику?</div>
        <div class="b-form">
          <div class="form">
            <div class="b-pole"><input class="pole" type="text" placeholder=" " id="form-email"><label for="form-email">Введите
              свой e-mail</label></div>
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