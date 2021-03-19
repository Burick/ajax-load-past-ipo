<?php get_header(); ?>

<?php if(is_front_page() ): ?>
    <div class="lvl1">
    <div class="wrapper">
      <div class="main-left">
        <h1>Покупайте акции
          <strong>по ценам IPO</strong></h1>
        <div class="desc">IPO.one - ведущая европейская краудфандинговая платформа.</div>
        <div class="mobile-video">
          <div class="main-video">
            <div class="b-img"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/lvl1-bg.svg" alt=""></div>
            <div class="b-btn-video"><a href="#" class="btn-video js-pop-video">Узнай о нас за 60 секунд</a></div>
          </div>

        </div><!--end mobile-video -->
        <div class="bs-icons">
          <div class="block ic1">
            <div class="item">
              <div class="ico"></div>
              <div class="right">
                <div class="tit">Подача заявок</div>
                от 100$
              </div>
            </div>
          </div>
          <div class="block ic2">
            <div class="item">
              <div class="ico"></div>
              <div class="right">
                <div class="tit">Аллокация</div>
                до 70%
              </div>
            </div>
          </div>
          <div class="block ic3">
            <div class="item">
              <div class="ico"></div>
              <div class="right">
                <div class="tit">LockUP период</div>
                93 дня
              </div>
            </div>
          </div>
          <div class="block ic4">
            <div class="item">
              <div class="ico"></div>
              <div class="right">
                <div class="tit">Потенциал дохода</div>
                от 65%
              </div>
            </div>
          </div>
        </div>
        <div class="b-text">Никаких стартапов! Только акции глобальных корпораций с листингом на NASDAQ и NYSE </div>
        <div class="link-lvl1"><a href="#" class="btn">Начать инвестировать</a></div>
      </div>
      <div class="main-video">
        <div class="b-img"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/lvl1-bg.svg" alt=""></div>
        <div class="b-btn-video"><a href="#" class="btn-video js-pop-video">Узнай о нас за 60 секунд</a></div>
      </div>

    </div>
    <div class="lvl-bg">
      <div class="bdq dq1"><div class="dqq t4"></div></div>
      <div class="bdq dq2"><div class="dqq t2"></div><div class="dqq t1"></div></div>
      <div class="bdq dq3"><div class="dqq t1"></div><div class="dqq t2"></div><div class="dqq t3"></div></div>
    </div>
  </div><!--end lvl -->
  <div class="lvl2">
    <div class="wrapper">
      <h2>Наши партнеры</h2>
      <div class="bs-parts">
        <div class="parts-scroll">
          <div class="parts-scroll-cont">
            <div class="block"><span><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/part1.svg" alt=""><img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/svg/part1_.svg" alt=""></span></div>
            <div class="block"><span><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/part2.svg" alt=""><img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/svg/part2_.svg" alt=""></span></div>
            <div class="block"><span><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/part3.svg" alt=""><img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/svg/part3_.svg" alt=""></span></div>
            <div class="block"><span><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/part4.svg" alt=""><img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/svg/part4_.svg" alt=""></span></div>
            <div class="block"><span><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/part5.svg" alt=""><img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/svg/part5_.svg" alt=""></span></div>
            <div class="block"><span><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/part6.svg" alt=""><img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/svg/part6_.svg" alt=""></span></div>
            <div class="block"><span><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/part7.svg" alt=""><img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/svg/part7_.svg" alt=""></span></div>
            <div class="block"><span><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/part8.svg" alt=""><img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/svg/part8_.svg" alt=""></span></div>
            <div class="block"><span><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/part9.svg" alt=""><img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/svg/part9_.svg" alt=""></span></div>
            <div class="block"><span><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/part10.svg" alt=""><img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/svg/part10_.svg" alt=""></span></div>
          </div><!--end parts-scroll-cont -->
        </div><!--end parts-scroll -->
      </div>
    </div>
  </div><!--end lvl -->
  <div class="lvl3">
    <div class="wrapper">
      <h2>Ближайшие IPO</h2>
      <div class="desc">Еженедельно мы отбираем свыше <strong>25</strong> потенциально прибыльных <strong>IPO</strong>. Вы сами решаете, во что вкладывать свои деньги. Инвестируйте и получайте результат — всю бумажную работу мы берем на себя.
      </div>
      <div class="bs-ipos">
        <div class="ipos-scroll">
          <div class="ipos-scroll-cont">

          	<?php
          	global $wpdb;


          	$get_ipo = $wpdb->get_results("SELECT * FROM `budipo` LIMIT 3");
         // 	echo '<pre>';

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
          	
            $timer_data = [];
          	foreach ($get_ipo as $value) {

              $skuCode = $value->ticker;
              $timer_data[$skuCode] = $value->ipo_date;

          		$selectProducts = $wpdb->get_results("SELECT * FROM `wp_postmeta` WHERE `meta_key` = 'tiker' AND `meta_value` = '$skuCode'");
          	?>
            
            <div class="ip-item">
              <div class="block">
                <div class="icon"><img src="https://static-dev-ff4708e.s3.eu-north-1.amazonaws.com/logos/<?php echo $value->ticker;  ?>_logo.jpg" alt=""></div>
                <div class="name"><?php echo $value->company_name; ?></div>
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

                  ?>
                  </strong></div>
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
            </div><!--end ipos-scroll-cont -->
          </div><!--end ipos-scroll -->
        </div><!--end bs-ipos -->
        <div class="bdq dq5">
          <div class="dqq t6"></div>
          <div class="dqq t4"></div>
        </div>
      <div class="b-etc"><a href="/blizhajshee-ipo/" class="btn">Смотреть все</a></div>
    </div>
    <div class="lvl-bg">
      <div class="bdq dq4"><div class="dqq t3"></div><div class="dqq t5"></div></div>
    </div>
  </div><!--end lvl -->
  <div class="lvl4">
    <div class="wrapper">
      <h2>Оцените потенциальный доход</h2>
      <div class="desc">Более <strong>700</strong> розничных инвесторов еженедельно приобретают акции по ценам <strong>IPO</strong> на нашей платформе. Каждый 1-й инвестор получает чистую доходность выше <strong>50%</strong> годовых, каждый 2-й - становится нашим постоянным клиентом.
      </div>
      <h3>Ознакомьтесь с результатами недавно прошедших IPO и оцените потенциальную доходность.</h3>
      <div class="bs-dohod">
        <div class="dohod-scroll">
          <div class="dohod-scroll-cont">


                            <?php
            global $wpdb;


            $get_ipo = $wpdb->get_results("SELECT * FROM `pastipo` LIMIT 3");
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

             // print_r($value);



              //exit();
              ?>
                <div class="deal-item">
                  <div class="block">
                    <div class="img"><img src="https://static-dev-ff4708e.s3.eu-north-1.amazonaws.com/logos/<?php echo $value->ticker;  ?>_logo.jpg" alt=""></div>
                    <div class="tit-text"> <?php echo $value->company_name; ?></div>
                    <div class="bs-rows">
                      <div class="b-row">
                        <div class="col1">Цена первичного размещения</div>
                        <div class="col2"><?php echo $value->price; ?> $</div>
                      </div>
                      <div class="b-row">
                        <div class="col1">Цена на дату окончания
                          Lock Up периода</div>
                        <div class="col2"><?php echo $value->price_lockup; ?> $</div>
                      </div>
                      <div class="b-row">
                        <div class="col1">Заработок за первый
                          день публичных торгов</div>
                        <div class="col2"><?php echo $value->first_day_profit_percent; ?> %</div>
                      </div>
                      <div class="b-row sel">
                        <div class="col1">Прибыль на дату окончания Lock Up периода</div>
                        <div class="col2"><?php echo $value->lockup_day_profit_percent; ?> %</div>
                      </div>
                      <div class="b-row">
                        <div class="col1">Рейтинг от IPO.one:</div>
                        <div class="col2"><div class="stars">

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

                        </div></div>
                      </div>
                    </div>
                  </div><!--end block -->
                </div><!--end deal-item -->

                <?php

              }

                ?>

          </div><!--end dohod-scroll-cont -->
        </div><!--end dohod-scroll -->
      </div><!--end bs-dohod -->
      <div class="b-etc"><a href="/proshedshie-ipo/" class="btn">Смотреть все</a></div>
    </div>
    <div class="lvl-bg">
      <div class="dqq t3"></div>
      <div class="bdq dq4-2"><div class="dqq t3"></div><div class="dqq t4"></div></div>
    </div>
  </div><!--end lvl -->
  <div class="lvl5">
    <div class="wrapper">
      <div id="b-slider-change" class="slid-1">
        <div class="slider">
          <ul class="nav-slide">
            <li class="sl1"></li>
            <li class="sl2"></li>
            <li class="sl3"></li>
            <li class="sl4"></li>
            <li class="sl5"></li>
            <li class="sl6"></li>
            <li class="nav-active">1</li>
          </ul><!--end nav-slide -->
          <div class="slider-change-position">
	          <div class="slides">
	            <div class="slide">
	              <div class="b-text">
	                <div class="text-center">
	                  <h3><?php the_field('zagolovok_slajd_1'); ?></h3>
                    <?php the_field('opisanie_slajd_1'); ?>
	                </div>
	              </div>
	            </div>
	            <div class="slide">
	              <div class="b-text">
	                <div class="text-center">
                  <h3><?php the_field('zagolovok_slajd_2'); ?></h3>
                    <?php the_field('opisanie_slajd_2'); ?>
	                </div>
	              </div>
	            </div>
	            <div class="slide">
	              <div class="b-text">
	                <div class="text-center">
                  <h3><?php the_field('zagolovok_slajd_3'); ?></h3>
                    <?php the_field('opisanie_slajd_3'); ?>
	                </div>
	              </div>
	            </div>
	            <div class="slide">
	              <div class="b-text">
	                <div class="text-center">
                  <h3><?php the_field('zagolovok_slajd_4'); ?></h3>
                    <?php the_field('opisanie_slajd_4'); ?>
	                </div>
	              </div>
	            </div>
	            <div class="slide">
	              <div class="b-text">
	                <div class="text-center">
                  <h3><?php the_field('zagolovok_slajd_5'); ?></h3>
                    <?php the_field('opisanie_slajd_5'); ?>
	                </div>
	              </div>
	            </div>
	            <div class="slide">
	              <div class="b-text">
	                <div class="text-center">
                  <h3><?php the_field('zagolovok_slajd_6'); ?></h3>
                    <?php the_field('opisanie_slajd_6'); ?>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div><!--end slides -->
    	</div><!--end slider-change-position -->
        <div class="slide-nav-bottom">
        	<div class="slide-steps"><span class="step">01</span> /<span class="steps">06</span></div>
        	<div class="slide-progress"><div class="progress"></div></div>
        	<div class="slide-arrs">
        		<div class="change-prev"></div>
				<div class="change-next"></div>
        	</div>
        </div>
      </div><!--end b-slider-change -->
    </div>
    <div class="bdq dq5-1"><div class="dqq t1"></div><div class="dqq t4"></div></div>
  </div><!--end lvl -->
  <div class="lvl6">
    <div class="wrapper">
      <div class="two-cols">
        <div class="col1">
          <h2>Простые шаги к достойным доходам</h2>
          <div class="text">
            <strong>IPO (Initial Public Offering) —</strong> первичное предложение акций до начала котирования на бирже. Компании развивают свой бизнес, а Вы — увеличиваете ваш доход за счет их динамичного роста и развития.

          </div>
        </div>
        <div class="col2"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/step-img.svg" alt=""></div>
      </div>

    </div>
    <div class="lvl-bg">
      <div class="bdq dq6-1"><div class="dqq t3"></div></div>
    </div>
  </div><!--end lvl -->
  <div class="lvl7">
    <div class="wrapper">
      <h2>У вас есть причины нам доверять:</h2>
      <div class="grafs">
        <div class="graf-scroll">
          <div class="graf-cont">
            <div class="graf graf1">
              <div class="ic"></div>
              <h3>Конфиденциальность</h3>
              <div class="text">Ваши личные данные и вся история финансовых операций хранятся внутри нашей децентрализованной системы. Платформа не предоставляет информацию о финансовой деятельности 3-им сторонам.
              </div>
            </div>
            <div class="graf graf2">
              <div class="ic"></div>
              <h3>Комиссии до 5%</h3>
              <div class="text">Мы выполняем за вас всю аналитическую и бумажную работу. При этом комиссия за наши услуги составляет всего 5%, а высокие аллокации, которые мы получаем благодаря крупным коллективным заявкам, позволяют вам получать чистую доходность даже выше, чем при индивидуальном инвестировании.</div>
            </div>
            <div class="graf graf3">
              <div class="ic"></div>
              <h3>Безопасность</h3>
              <div class="text">Механизмы шифрования Платформы позволяют исключить утечку личных данных. Протоколы безопасности оперативно предотвращают DDoS-атаки, а вся финансовая информация резервируется в режиме реального времени на выделенном сервере.</div>
            </div>
            <div class="graf graf4">
              <div class="ic"></div>
              <h3>Инвестиции
                для&nbsp;каждого</h3>
              <div class="text">Ваши личные данные и вся история финансовых операций хранятся внутри нашей децентрализованной системы. Платформа не предоставляет информацию о финансовой деятельности 3-им сторонам.</div>
            </div>
          </div><!--end graf-cont -->
        </div><!--end graf-scroll -->
      </div><!--end grafs -->
    </div>
    <div class="bdq dq7-1"><div class="dqq t1"></div></div>
    <div class="bdq dq7-2"><div class="dqq t3"></div></div>
  </div><!--end lvl -->
  <div class="lvl8">
    <div class="wrapper">
      <h2>Почему IPO.ONE?</h2>
      <div class="desc">Классические сделки IPO предъявляют очень строгие требования к потенциальным участникам:</div>
      <div class="two-graf">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/svg/grafs.svg" alt="">
      </div>
      <div class="mobile-grafs">
        <div class="graf-title tit1">IPO.one</div>
        <div class="graf-img"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/graf1.svg" alt=""></div>
        <div class="graf-title">Конкуренты</div>
        <div class="graf-img"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/graf2.svg" alt=""></div>
        <ul class="legends">
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/leg1.svg" alt=""></li>
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/leg2.svg" alt=""></li>
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/leg3.svg" alt=""></li>
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/leg4.svg" alt=""></li>
        </ul>
      </div><!--end mobile-grafs -->
      <div class="text2">
        <strong>IPO.one</strong> — это краудфандинговая Платформа, благодаря которой любое физическое лицо может получить доступ к первоклассным сделкам <strong>IPO</strong> с суммой всего от <strong>100 USD</strong>.<br>
        Мы работаем в европейской юрисдикции и принимаем заявки со всего мира <strong>24/7</strong>.<br>
        Наша цель: предоставить доступ к высококлассные сделкам <strong>IPO</strong> для широкого круга розничных клиентов, вне зависимости от их возраста, профессии, уровня дохода и гражданства.
      </div>
      <div class="bottom-btn"><a href="#" class="btn">Начать зарабатывать</a></div>
    </div>
    <div class="bdq dq8-1"></div>
  </div><!--end lvl -->
  <div class="lvl9">
    <div class="wrapper">
      <h2>Мы на вашей стороне</h2>
      <div class="desc">IPO.one — инвестиции с минимальным риском и максимальной доходностью:</div>
      <div class="blocks">
        <div class="lvl9-scroll bg-blue">
          <div class="lvl9-cont">
            <div class="item">
              <div class="block">
                <div class="img"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/me1.svg" alt=""></div>
                <div class="title">Партнерская программа</div>
                <div class="text">Ваши личные данные и вся история финансовых операций хранятся внутри нашей децентрализованной системы. Платформа не предоставляет информацию о финансовой деятельности 3-им сторонам.</div>
              </div>
            </div>
            <div class="item">
              <div class="block">
                <div class="img"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/me2.svg" alt=""></div>
                <div class="title">Аналитики со стажем более 20 лет</div>
                <div class="text">Ваши личные данные и вся история финансовых операций хранятся внутри нашей децентрализованной системы. Платформа не предоставляет информацию о финансовой деятельности 3-им сторонам.</div>
              </div>
            </div>
            <div class="item">
              <div class="block">
                <div class="img"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/me3.svg" alt=""></div>
                <div class="title">Учебный центр</div>
                <div class="text">Механизмы шифрования Платформы позволяют исключить утечку личных данных. Протоколы безопасности оперативно предотвращают DDoS-атаки, а вся финансовая информация резервируется в режиме реального времени на выделенном сервере.</div>
              </div>
            </div>
            <div class="item">
              <div class="block">
                <div class="img"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/me4.svg" alt=""></div>
                <div class="title">Перспектива получения бонусов</div>
                <div class="text">Мы выполняем за вас всю аналитическую и бумажную работу. При этом комиссия за наши услуги составляет всего 5%, а высокие аллокации, которые мы получаем благодаря крупным коллективным заявкам, позволяют вам получать чистую доходность даже выше, чем при индивидуальном инвестировании.</div>
              </div>
            </div>
          </div>
        </div>
      </div><!--end lvl9-scroll -->
    </div>
    <div class="bdq dq9-1"><div class="dqq t4"></div></div>
  </div><!--end lvl -->
  <div class="lvl10">
    <div class="wrapper">
      <h2>Честные ответы на важные вопросы</h2>
      <div class="bs-toggle">
        
        <?php
          $rows = get_field('acf_spisok_faq');
            if($rows)
            {

              foreach($rows as $row)
              {?>
                
                <div class="b-toggle">
                    <div class="toggle-title"><?php echo $row['acf_faq_title'] ?><span></span></div>
                    <div class="toggle-box"><?php echo $row['acf_faq_opisanie'] ?></div>
                </div>

                <?php
              }
            }
        ?>

      </div>
      <div class="b-vopros">
        <h3>Остались вопросы?</h3>
        <div class="text">Получите ответы и присоединяйтесь к нам</div>
        <div class="b-btn"><a href="#" class="btn btn-white js-pop-question">Задать вопрос</a></div>
      </div>
    </div>
    <div class="bdq dq10-1"><div class="dqq t6"></div></div>
    <div class="bdq dq10-2"><div class="dqq t4"></div></div>
  </div><!--end lvl -->
  <div class="lvl11">
    <div class="wrapper">
      <h2>Разрабатываем и публикуем образовательные материалы:</h2>
      <div class="b-row">
        <h3>Наша команда:</h3>
        <div class="bs-block">
          <div class="block">
            <div class="b-item">
              <div class="ico ic1"><span></span></div>
              <div class="text">Проводит комплексный
                мониторинг рынка IPO</div>
            </div><!--end b-item -->
          </div><!--end block -->
          <div class="block">
            <div class="b-item">
              <div class="ico ic2"><span></span></div>
              <div class="text">Работает напрямую с андеррайтерами и с американскими лицензированными брокерами</div>
            </div><!--end b-item -->
          </div><!--end block -->
          <div class="block">
            <div class="b-item">
              <div class="ico ic3"><span></span></div>
              <div class="text">Анализирует результаты финансовых исследований и составляет рейтинг IPO</div>
            </div><!--end b-item -->
          </div><!--end block -->
        </div><!--end bs-block -->
      </div><!--end b-row -->
      <div class="b-row">
        <h3>С аналитикой от наших экспертов Вы:</h3>
        <div class="bs-block">
          <div class="block">
            <div class="b-item">
              <div class="ico ic4"><span></span></div>
              <div class="text">Сможете инвестировать только в действительно перспективные IPO</div>
            </div><!--end b-item -->
          </div><!--end block -->
          <div class="block">
            <div class="b-item">
              <div class="ico ic5"><span></span></div>
              <div class="text">Сможете оперативно получать актуальные новости от эмитентов</div>
            </div><!--end b-item -->
          </div><!--end block -->
          <div class="block">
            <div class="b-item">
              <div class="ico ic6"><span></span></div>
              <div class="text">Уже через 6 месяцев станете экспертом по IPO</div>
            </div><!--end b-item -->
          </div><!--end block -->
        </div><!--end bs-block -->
      </div><!--end b-row -->
    </div>
    <div class="bdq dq11-1"><div class="dqq t4"></div></div>
  </div><!--end lvl -->
  
  <? get_template_part( 'template-parts/subscribe-news-all' ) ?>
  
<?php endif; ?>

<?php get_footer();