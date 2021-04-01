<?php
            global $wpdb;
            $lang = 'eng';

            $get_ipo = $wpdb->get_results("SELECT * FROM `budipo`");
          //  echo '<pre>';

            if('ru' == $lang){

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

            }else{

            $category = array('-');

            $category[] = 'Товары массового потребления';

            $category[] = 'Здравоохранение';

            $category[] = 'Потребительский сектор';

            $category[] = 'Высокие технологии';

            $category[] = 'Сырьевой сектор';

            $category[] = 'Недвижимость';

            $category[] = 'Финансы';

            $category[] = 'Промышленность';

            $category[] = 'Энергетика';

            $category[] = 'Инфраструктура';

            $category[] = 'Communication Services';

            }

            $timer_data = [];
            foreach ($get_ipo as $value) {

                $skuCode = $value->ticker;
                $ipo_date = $value->ipo_date;
/* правильно было бы не выводить вообще просроченные таймера и задержку $delta указывать в настройках */
//                $delta = 28*60*60;
//                $ipo_date_timestamp = strtotime($ipo_date) - $delta;
//                $current_timestamp = time();
//                if ($current_timestamp > $ipo_date_timestamp){
//                    continue;
//                }
                $timer_data[$skuCode] = $ipo_date;

                $selectProducts = $wpdb->get_results("SELECT * FROM `wp_postmeta` WHERE `meta_key` = 'tiker' AND `meta_value` = '$skuCode'");
            ?>
                
            <div class="ip-item">
              <div class="block">
                <div class="icon"><img src="https://static-dev-ff4708e.s3.eu-north-1.amazonaws.com/logos/<?php echo $value->ticker;  ?>_logo.jpg" alt=""></div>
                <div class="name"><?php echo $value->company_name; ?></div>
                <div class="title"><?php echo $value->stock; ?> : <a href="<?php echo get_post_permalink( $selectProducts[0]->post_id ); ?>"><?php echo $value->ticker; ?></a></div>
                <div class="text"><?php echo $value->lan_eng; ?></div>
                <div class="props">
                  <div class="p-row"><span>Размер сделки</span><strong>35.00 $</strong></div>
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
                    <div class="p-row"><span>Сфера</span><strong class="color_<?php echo $value->sphere; ?>"><?php echo $category[$value->sphere]; ?></strong></div>
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
                  <div class="b-btn"><a href="https://my.ipo.one/" class="btn btn-add">Подать заявку</a></div>
                  <div class="b-timer">
                    <div class="timer-title">До окончания приема заявок</div>
                    <div class="timer">
                      <div id="countdown-<?php echo $value->ticker; ?>" class="countdown">
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
              $timer_data = json_encode($timer_data);
              echo "<script>var timer_data = $timer_data</script>";

?>