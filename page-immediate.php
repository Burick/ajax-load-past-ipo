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
        <h2 class="title-h1">Самые ожидаемые IPO</h2>
        <div class="ipos-full">
          <div class="ipos-full-scroll">
            <div class="ipos-full-scroll__content">
              <div class="ip-item">
                <div class="block">
                  <div class="icon"><img src="img/ipo-i1.png" alt=""></div>
                  <div class="title">Nasdaq:1SY</div>
                  <div class="text">Provides software for construction and infrastructure projects.</div>
                  <div class="props">
                    <div class="p-row"><span>Deal size</span><strong>35.00 $</strong></div>
                    <div class="p-row"><span>Диапазон цены</span><strong>19-21 $</strong></div>
                    <div class="p-row"><span>Планируемая дата IPO:</span><strong>12.08.2020</strong></div>
                  </div>
                  <div class="bottom">
                    <div class="bott-props">
                      <div class="p-row"><span>Сфера</span><strong class="blue">Technology</strong></div>
                      <div class="p-row"><span>Андерайдер</span><strong>Goldman</strong></div>
                      <div class="p-row"><span>Рейтинг от IPO.one:</span><strong><img src="svg/star1.svg" alt=""><img
                          src="svg/star2.svg" alt=""><img src="svg/star2.svg" alt=""></strong></div>
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
              <div class="ip-item">
                <div class="block">
                  <div class="icon"><img src="img/ipo-i1.png" alt=""></div>
                  <div class="title">Nasdaq:2SY</div>
                  <div class="text">Provides software for construction and infrastructure projects.</div>
                  <div class="props">
                    <div class="p-row"><span>Deal size</span><strong>35.00 $</strong></div>
                    <div class="p-row"><span>Диапазон цены</span><strong>19-21 $</strong></div>
                    <div class="p-row"><span>Планируемая дата IPO:</span><strong>12.08.2020</strong></div>
                  </div>
                  <div class="bottom">
                    <div class="bott-props">
                      <div class="p-row"><span>Сфера</span><strong class="blue">Technology</strong></div>
                      <div class="p-row"><span>Андерайдер</span><strong>Goldman</strong></div>
                      <div class="p-row"><span>Рейтинг от IPO.one:</span><strong><img src="svg/star1.svg" alt=""><img
                          src="svg/star2.svg" alt=""><img src="svg/star2.svg" alt=""></strong></div>
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
              <div class="ip-item">
                <div class="block">
                  <div class="icon"><img src="img/ipo-i1.png" alt=""></div>
                  <div class="title">Nasdaq:3SY</div>
                  <div class="text">Provides software for construction and infrastructure projects.</div>
                  <div class="props">
                    <div class="p-row"><span>Deal size</span><strong>35.00 $</strong></div>
                    <div class="p-row"><span>Диапазон цены</span><strong>19-21 $</strong></div>
                    <div class="p-row"><span>Планируемая дата IPO:</span><strong>12.08.2020</strong></div>
                  </div>
                  <div class="bottom">
                    <div class="bott-props">
                      <div class="p-row"><span>Сфера</span><strong class="blue">Technology</strong></div>
                      <div class="p-row"><span>Андерайдер</span><strong>Goldman</strong></div>
                      <div class="p-row"><span>Рейтинг от IPO.one:</span><strong><img src="svg/star1.svg" alt=""><img
                          src="svg/star2.svg" alt=""><img src="svg/star2.svg" alt=""></strong></div>
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
              <div class="ip-item">
                <div class="block">
                  <div class="icon"><img src="img/ipo-i1.png" alt=""></div>
                  <div class="title">Nasdaq:4SY</div>
                  <div class="text">Provides software for construction and infrastructure projects.</div>
                  <div class="props">
                    <div class="p-row"><span>Deal size</span><strong>35.00 $</strong></div>
                    <div class="p-row"><span>Диапазон цены</span><strong>19-21 $</strong></div>
                    <div class="p-row"><span>Планируемая дата IPO:</span><strong>12.08.2020</strong></div>
                  </div>
                  <div class="bottom">
                    <div class="bott-props">
                      <div class="p-row"><span>Сфера</span><strong class="blue">Technology</strong></div>
                      <div class="p-row"><span>Андерайдер</span><strong>Goldman</strong></div>
                      <div class="p-row"><span>Рейтинг от IPO.one:</span><strong><img src="svg/star1.svg" alt=""><img
                          src="svg/star2.svg" alt=""><img src="svg/star2.svg" alt=""></strong></div>
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
              <div class="ip-item">
                <div class="block">
                  <div class="icon"><img src="img/ipo-i1.png" alt=""></div>
                  <div class="title">Nasdaq:5SY</div>
                  <div class="text">Provides software for construction and infrastructure projects.</div>
                  <div class="props">
                    <div class="p-row"><span>Deal size</span><strong>35.00 $</strong></div>
                    <div class="p-row"><span>Диапазон цены</span><strong>19-21 $</strong></div>
                    <div class="p-row"><span>Планируемая дата IPO:</span><strong>12.08.2020</strong></div>
                  </div>
                  <div class="bottom">
                    <div class="bott-props">
                      <div class="p-row"><span>Сфера</span><strong class="blue">Technology</strong></div>
                      <div class="p-row"><span>Андерайдер</span><strong>Goldman</strong></div>
                      <div class="p-row"><span>Рейтинг от IPO.one:</span><strong><img src="svg/star1.svg" alt=""><img
                          src="svg/star2.svg" alt=""><img src="svg/star2.svg" alt=""></strong></div>
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
              <div class="ip-item">
                <div class="block">
                  <div class="icon"><img src="img/ipo-i1.png" alt=""></div>
                  <div class="title">Nasdaq:6SY</div>
                  <div class="text">Provides software for construction and infrastructure projects.</div>
                  <div class="props">
                    <div class="p-row"><span>Deal size</span><strong>35.00 $</strong></div>
                    <div class="p-row"><span>Диапазон цены</span><strong>19-21 $</strong></div>
                    <div class="p-row"><span>Планируемая дата IPO:</span><strong>12.08.2020</strong></div>
                  </div>
                  <div class="bottom">
                    <div class="bott-props">
                      <div class="p-row"><span>Сфера</span><strong class="blue">Technology</strong></div>
                      <div class="p-row"><span>Андерайдер</span><strong>Goldman</strong></div>
                      <div class="p-row"><span>Рейтинг от IPO.one:</span><strong><img src="svg/star1.svg" alt=""><img
                          src="svg/star2.svg" alt=""><img src="svg/star2.svg" alt=""></strong></div>
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
            </div><!--end ipos-right-scroll__content -->
          </div><!--end ipos-right-scroll -->
        </div><!--end ipos-full -->
      </main>
    </div><!--end content-wrapper -->
  </div><!--end wrapper -->
  <? get_template_part( 'template-parts/subscribe-news-all' ) ?>

<?php

    get_footer();

?>