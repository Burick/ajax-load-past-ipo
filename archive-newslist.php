<?php 

get_header(); 

?>

<div class="wrapper">

    <? get_template_part( 'template-parts/breadcrumbs' ) ?>
    <h1 class="title-h1 xl-mt50">Новости и аналитика</h1>
    <div class="content-wrapper mt10">
      <main class="content">

        <?php
          wp_nav_menu( array(
              'theme_location' => 'menu-2',
              'container' => '',
              'menu_class' => 'news-filter',
          ) );
        ?>
        
        <?php

            if( have_posts() ):

        ?>

        <div class="news-list">
        <?php
            while( have_posts() ):
                the_post();
        ?>
          <div class="news-item">
            <a href="<?php the_permalink(); ?>" class="news-item__label"><?php the_title(); ?></a>
            <p class="news-item__text"><?php echo get_the_excerpt(); ?></p>

            <div class="news-item__bottom--mobile">
              <div class="news-item__time">
                <div class="ico"><svg fill="black" width="16" height="16" viewBox="0 0 16 16"  xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 0C3.58261 0 0 3.58261 0 8C0 12.4174 3.58261 16 8 16C12.4174 16 16 12.4174 16 8C16 3.58261 12.4174 0 8 0ZM8 14.6087C4.34783 14.6087 1.3913 11.6522 1.3913 8C1.3913 4.34783 4.34783 1.3913 8 1.3913C11.6522 1.3913 14.6087 4.34783 14.6087 8C14.6087 11.6522 11.6522 14.6087 8 14.6087ZM10.6609 9.66958C10.9391 9.94784 10.9391 10.3826 10.6609 10.6609C10.5217 10.8 10.3478 10.8696 10.1739 10.8696C10 10.8696 9.82608 10.8 9.68695 10.6609L7.53044 8.50433C7.39131 8.3652 7.32173 8.19132 7.32173 8.01741V3.87827C7.32173 3.49566 7.63478 3.18262 8.01739 3.18262C8.39999 3.18262 8.71304 3.49566 8.71304 3.87827V7.73913L10.6609 9.66958Z" />
                </svg>
                </div>
                <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'd F Y' ); ?></time>
              </div>
              <?php
              $rows = get_field('acf_dobavlenie_tikerov');
                if($rows)
                {

                  foreach($rows as $row)
                  {
                    echo '<a class="news-item__tag" href=" ' . $row['acf_adres_ssylki'] . ' "> ' . $row['acf_nazvanie_tikera'] . '</a>';
                  }
                }
              ?>
            </div><!--end news-item__bottom -->
          </div><!--end news-item -->

        <?php endwhile; ?>
        </div><!--end news-list -->
        <div class="b-center"><span class="btn" style="display:none;">Загрузить еще</span></div>

        <?php else: ?>

            Постов нет

        <?php endif; ?>
      </main>
      <aside class="col-right">
        <h3>Ближайшие IPO</h3>
        <div class="ipos-right">
          <div class="ipos-right-scroll">
            <div class="ipos-right-scroll__content">
          <?php
            global $wpdb;


            $get_ipo = $wpdb->get_results("SELECT * FROM `budipo` LIMIT 3");
         //   echo '<pre>';

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

            
            ?>
            <div class="ip-item">
              <div class="block">
                <div class="icon"><img src="https://static-dev-ff4708e.s3.eu-north-1.amazonaws.com/logos/<?php echo $value->ticker;  ?>_logo.jpg" alt=""></div>
                <?php echo $value->company_name; ?>
                <div class="title"><?php echo $value->stock; ?>:<?php echo $value->ticker; ?></div>
                <div class="text"><?php echo $value->lan_eng; ?></div>
                <div class="props">
                  <div class="p-row"><span>Deal size</span><strong>35.00 $</strong></div>
                  <div class="p-row"><span>Диапазон цены</span><strong><?php echo $value->offering_range_min; ?>-<?php echo $value->offering_range_max; ?> $</strong></div>

                  <?php
                  $ex_date = explode('T',$value->ipo_date);

                  $x = explode('-',$ex_date[0]);

                  ?>
                  <div class="p-row"><span>Планируемая дата IPO:</span><strong><?php  echo $x[2].'-'.$x[1].'-'.$x[0]; ?></strong></div>
                </div>
                <div class="bottom">
                  <div class="bott-props">
                    <div class="p-row"><span>Сфера</span><strong class="blue"><?php echo $category[$value->sphere]; ?></strong></div>
                    <div class="p-row"><span>Андерайдер</span><strong>Goldman</strong></div>
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
                          <span class="days countdown-time"></span>
                          <span class="countdown-text">Дня</span>
                        </div>
                        <div class="countdown-number">
                          <span class="hours countdown-time"></span>
                          <span class="countdown-text">Часы</span>
                        </div>
                        <div class="countdown-number">
                          <span class="minutes countdown-time"></span>
                          <span class="countdown-text">Минут</span>
                        </div>
                        <div class="countdown-number">
                          <span class="seconds countdown-time"></span>
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
            </div><!--end ipos-right-scroll__content -->
          </div><!--end ipos-right-scroll -->
        </div><!--end ipos-right -->
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