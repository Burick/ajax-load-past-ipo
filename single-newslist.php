<?php 

get_header(); 

?>

<div class="wrapper">

    <? get_template_part( 'template-parts/breadcrumbs' ) ?>

    <div class="content-wrapper">
      <main class="content">

        <div class="news-full editable-text">
          <h1><?php the_title(); ?></h1>
          <?php
          
          if( have_posts() ):
            while( have_posts() ):
                the_post();

          ?>
          <div class="news-full__info">
            <!-- <div class="ava"><img src="img/ava.png" alt=""></div>
            <div class="news-item__name">Ирина Каримова</div> -->
            <time class="news-item__date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'd F Y' ); ?></time>
            <div class="news-item__tags">
            <?php
              $rows = get_field('acf_dobavlenie_tikerov');
                if($rows)
                {

                  foreach($rows as $row)
                  {
                    echo '<a href=" ' . $row['acf_adres_ssylki'] . ' "> ' . $row['acf_nazvanie_tikera'] . '</a>';
                  }
                }
              ?>
            </div>
          </div>
          <div class="news-full__text">
              <?php the_post_thumbnail( 'full' ); ?>
                <?php the_content(); ?>

          </div><!--end news-full__text -->
          <div class="news-full__bottom">
            <div class="share">
              Поделиться:
              <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" rel="nofollow" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/i-fb.svg" alt=""></a>
              <a href="https://t.me/share/url?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" rel="nofollow" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/i-tele.svg" alt=""></a>
              <a href="https://vk.com/share.php?url=<?php the_permalink(); ?>" rel="nofollow" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/i-vk.svg" alt=""></a>
             </div>
             
          </div><!--end news-full__bottom -->
          <?php

                endwhile;
            endif;
            
            ?>
        </div><!--end news-content -->

        <?php

          $query = new WP_Query( array(
              'post_type' => 'newslist',
              'posts_per_page' => 3,
              'order' => 'DESC',
              'orderby' => 'date',
              'post__not_in' => array($post->ID),
          ) );

        ?>

        <h2 class="mobile-hidden">Новинки</h2>
        <div class="news-list mobile-hidden"> 
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

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

        <?php else: ?>

        <?php endif; ?>
        </div><!--end news-list -->

      </main>
      <aside class="col-right">
        <h3>Ближайшие IPO</h3>
        <div class="ipos-right">
          <div class="ipos-right-scroll">
            <div class="ipos-right-scroll__content">
              <div class="ip-item">
                <div class="block">
                  <div class="icon"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/ipo-i1.png" alt=""></div>
                  <div class="title">Nasdaq:BSY</div>
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
                      <div class="p-row"><span>Рейтинг от IPO.one:</span><strong><img src="svg/star1.svg" alt=""><img src="img/star2.png" alt=""><img src="img/star2.png" alt=""></strong></div>
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
                  <div class="icon"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/ipo-i1.png" alt=""></div>
                  <div class="title">Nasdaq:BSY</div>
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
                      <div class="p-row"><span>Рейтинг от IPO.one:</span><strong><img src="svg/star1.svg" alt=""><img src="img/star2.png" alt=""><img src="img/star2.png" alt=""></strong></div>
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
        </div><!--end ipos-right -->
      </aside>

    </div><!--end content-wrapper -->
  </div><!--end wrapper -->
  <? get_template_part( 'template-parts/subscribe-news-all' ) ?>

<?php

get_footer();

?>