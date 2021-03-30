<?php 

get_header(); 

?>
  <div class="wrapper">

    <? get_template_part( 'template-parts/breadcrumbs' ) ?>
<?php

  $id =  get_the_ID();
  $today = date("Y-m-d");
  $get_tiker = get_post_meta($id,'tiker',true);



  //echo $get_tiker;

  $link_company = 'https://ipo-dev.site/api/public/companies/'.$get_tiker;

  $get_com = curlhttp($link_company);
  //echo '<pre>';
  // print_r($get_com);

?>
    <div class="content-wrapper">
      <main class="content">
        <div class="card-top">
          <div class="b-col card-steps__col">
            <div class="card-steps">
              <div class="card-steps__up">
                <div class="card-steps__img"><img src="https://static-dev-ff4708e.s3.eu-north-1.amazonaws.com/logos/<?php echo $get_com->ticker;  ?>_logo.jpg" alt=""></div>
                <div class="card-steps__text">
                  <h2><?php echo $get_com->company_name; ?></h2>
                  <div class="name"><?php echo $get_com->stock; ?> : <?php echo $get_com->ticker; ?></div>
                </div>
              </div><!--end card-steps__up -->
              <div class="card-steps__brief">
                <p><?php echo $get_com->l10_n->en->brief; ?></p>
              </div>
              <ul class="card-steps__list">
                <li class="blue-check">
                  <span class="card-step">
                    <span class="icon"></span>
                    <span class="title">Filed</span>
                    <span class="date"><?php
                    $e = explode('T',$get_com->filled_date);
                    $x = explode('-',$e[0]);
                     echo $x[2].'-'.$x[1].'-'.$x[0];


                      ?></span>
                  </span>
                </li>
                <li class="
                <?php
                $e1 = explode('T',$get_com->ipo->set_terms_date);


                  $userDate = strtotime ($today); 
					$databaseDate = strtotime ($e1[0]); 
 
					if ($userDate>$databaseDate) { echo 'blue-check';}else{ echo 'check'; } 
                 ?>
                ">
                  <span class="card-step">
                    <span class="icon"></span>
                    <span class="title">Set Terms</span>
                    <span class="date"><?php
                    $e1 = explode('T',$get_com->ipo->set_terms_date);
                    $x = explode('-',$e1[0]);
                     //echo $e1[0];
                     echo $x[2].'-'.$x[1].'-'.$x[0];

                      ?></span>
                  </span>
                </li>
                <li class="<?php
                $e2 = explode('T',$get_com->ipo->ipo_date);

                  $userDate = strtotime ($today); 
					$databaseDate = strtotime ($e2[0]); 
 
					if ($userDate>$databaseDate) { echo 'blue-check';}else{ echo 'check'; } 
                 ?>">
                  <span class="card-step">

                    <span class="icon"></span>
                    <span class="title">IPO Data</span>
                    <span class="date"><?php
                    $e2 = explode('T',$get_com->ipo->ipo_date);

                     $x = explode('-',$e2[0]);
                     echo $x[2].'-'.$x[1].'-'.$x[0];

                      ?></span>
                  </span>
                </li>
                <li class="<?php
                $e3 = explode('T',$get_com->ipo->lockup_date);

                  $userDate = strtotime ($today); 
					$databaseDate = strtotime ($e3[0]); 
 
					if ($userDate>$databaseDate) { echo 'blue-check';}else{ echo 'check'; } 
                 ?>">
                  <span class="card-step">
                    <span class="icon"></span>
                    <span class="title">Lock Up</span>
                    <span class="date"><?php
                    $e3 = explode('T',$get_com->ipo->lockup_date);
                    	$x = explode('-',$e3[0]);
                    echo $x[2].'-'.$x[1].'-'.$x[0];


                      ?></span>
                  </span>
                </li>
              </ul>

            </div><!--end card-steps -->
          </div><!--end b-col -->
          <div class="b-col card-info__col">
            <div class="card-info">
              <div class="card-info__row">
                <div class="col1">Текущая цена</div>
                <div class="col2">
                  <span class="blue">
                  <?php
                    if($get_com->ipo->price_last_day){
                      echo $get_com->ipo->price_last_day.' $';
                    }else{
                      echo ' - ';
                    }
                  ?>
                  <?php
                    // if($get_com->ipo->price_first_day){
                    //   echo $get_com->ipo->price_first_day.' %';
                    // }else{
                    //   echo ' - ';
                    // }
                 ?>
                </span>
                </div>
              </div><!--end card-info__row -->
              <div class="card-info__row">
                <div class="col1">Доходность за 1 день торгов</div>
                <div class="col2"><?php
                if($get_com->ipo->price_last_day){
                	echo $get_com->ipo->price_last_day.' $';
                }else{
                	echo ' - ';
                }
                 ?></div>
              </div><!--end card-info__row -->
              <div class="card-info__row">
                <div class="col1">Доходность по итогам<br>Lock up периодна</div>
                <div class="col2"><?php
                 if($get_com->ipo->price_lockup){
                 	 echo $get_com->ipo->price_lockup.' %';
                 }else{
                 	echo ' - ';
                 }
                

                 ?></div>
              </div><!--end card-info__row -->
              <div class="card-info__row">
                <div class="col1">Рейтинг от IPO.one:</div>
                <div class="col2">
                  <div class="stars">
                  	<?php
                   if($get_com->rating == 0){

                        ?>

                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
                        <?php

                      }elseif($get_com->rating ==1){

                        ?>
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">

                        <?php

                      }elseif($get_com->rating ==2){

                        ?>
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">

                        <?php

                      }elseif($get_com->rating ==3){

                        ?>
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">

                        <?php

                      }
                      ?>
                  </div>
                </div>
              </div><!--end card-info__row -->
            </div><!--end card-info -->
          </div><!--end b-col -->
        </div><!--end card-top -->
        <div class="card-grafic">
          <div class="card-chart__info__col">
            <div class="card-chart__info">
              <div class="block">
                <div class="b-row">
                  <div class="col1">Год основания</div>
                  <div class="col2"><?php echo $get_com->year; ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">Головной офис</div>
                  <div class="col2"><?php echo $get_com->address; ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">Веб сайт</div>
                  <div class="col2"><a href="<?php echo $get_com->website; ?>" target="_blank"><?php echo $get_com->website; ?></a></div>
                </div>
              </div><!--end block -->
              <div class="block">
                <div class="b-row">
                  <div class="col1">Offer Shares (M)</div>
                  <div class="col2"><?php echo $get_com->shares_number; ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">Deal Size ($M)</div>
                  <div class="col2"><?php echo $get_com->deal_size; ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">Lock-up Date</div>
                  <div class="col2"><?php

                    $exdate = explode('T',$get_com->ipo->lockup_date);
                    $x = explode('-',$exdate[0]);
                    echo $x[2].'-'.$x[1].'-'.$x[0];

                   //echo $exdate[0]; ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">IPO Price ($)</div>
                  <div class="col2"><?php
                  echo $get_com->ipo->price;
                   ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">IPO Date</div>
                  <div class="col2"><?php
                   $ipo_date = explode('T', $get_com->ipo->ipo_date);
                   $x = explode('-',$ipo_date[0]);
                    echo $x[2].'-'.$x[1].'-'.$x[0];
                  // echo $ipo_date[0]; ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">Price range</div>
                  <div class="col2">$<?php echo $get_com->offering_range_min; ?>-$<?php echo $get_com->offering_range_max; ?></div>
                </div>
              </div><!--end block -->
              <div class="block">
                <div class="b-col">
                  <div class="col1">Lawyers</div>
                  <div class="col2">                    <?php
                        $lawyers_arr = explode(';', $get_com->lawyers );
                        foreach($lawyers_arr as $lawyer){
                            echo "<span>$lawyer</span>";
                        }
                    ?></div>
                </div>
                <div class="b-col">
                  <div class="col1">Auditor</div>
                  <div class="col2">                    <?php
                        $auditors_arr = explode(';', $get_com->auditors );
                        foreach($auditors_arr as $auditor){
                            echo "<span>$auditor</span>";
                        }
                    ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">Underwriters</div>
                  <div class="col2"><?php echo $get_com->underwriter; ?></div>
                </div>
              </div><!--end block -->
            </div><!--end card-grafic__info -->
          </div><!--end card-chart__info__col -->
          <div class="card-grafic__chart__col">
            <div class="card-grafic__chart">
            	<?php
            	$id_p = get_the_ID();
              $get_tikers = get_post_meta($id_p,'tiker',true);

              $get_grafs = 'https://static-dev-ff4708e.s3.eu-north-1.amazonaws.com/charts/'.$get_tikers.'.json';


              $get_coms = curlhttp($get_grafs);

    	        if(!$get_coms){
    		?>
    		       <div class="card-grafic__info">
          <div class="card-grafic__info__title">
            <h2>Business Overview</h2>
            <div class="b-btn"><a href="<?php echo $get_com->prospectus_url; ?>" class="btn">IPO prospectus</a></div>
          </div><!--end card-grafic__info__title -->
          <div class="text"><?php echo $get_com->l10_n->en->description; ?>
          </div>
          <div class="b-btn__bottom"><a href="#" class="btn">IPO prospectus</a></div>
        </div><!--end card-grafic__info -->

    		<?php
    	}else{
    		echo '<div id="card-chart"></div>';
    	}

            	?>
              
            </div><!--end card-grafic__chart -->
          </div><!--end card-grafic__chart__col -->
        </div><!--end card-grafic -->

        <?php
        if($get_coms){
        ?>
        <div class="card-grafic__info">
          <div class="card-grafic__info__title">
            <h2>Business Overview</h2>
            <div class="b-btn"><a href="<?php echo $get_com->prospectus_url; ?>" class="btn">IPO prospectus</a></div>
          </div><!--end card-grafic__info__title -->
          <div class="text"><?php echo $get_com->l10_n->en->description; ?>
          </div>
          <div class="b-btn__bottom"><a href="#" class="btn">IPO prospectus</a></div>
        </div><!--end card-grafic__info -->

        <?php

    	}
        ?>
      <?php 

      $posts = get_posts(array(
        'post_type' => 'newslist',
        'meta_key' => 'acf_dobavlenie_tikerov_0_acf_nazvanie_tikera',
        'meta_value' => $get_com->ticker
      ));

      if( $posts ): ?>
          
          <div class="card-articles">

          <?php foreach( $posts as $post ): 
              
              setup_postdata( $post );
              
              ?>
              <div class="item">
                <div class="news-item">
                  <a href="<?php the_permalink(); ?>" class="news-item__label"><?php gog_limit_title(120, '...'); ?></a>
                  <div class="news-item__text"><?php the_excerpt(); ?></div>

                  <div class="news-item__bottom--mobile">
                    <div class="news-item__time">
                      <div class="ico"><svg fill="black" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0C3.58261 0 0 3.58261 0 8C0 12.4174 3.58261 16 8 16C12.4174 16 16 12.4174 16 8C16 3.58261 12.4174 0 8 0ZM8 14.6087C4.34783 14.6087 1.3913 11.6522 1.3913 8C1.3913 4.34783 4.34783 1.3913 8 1.3913C11.6522 1.3913 14.6087 4.34783 14.6087 8C14.6087 11.6522 11.6522 14.6087 8 14.6087ZM10.6609 9.66958C10.9391 9.94784 10.9391 10.3826 10.6609 10.6609C10.5217 10.8 10.3478 10.8696 10.1739 10.8696C10 10.8696 9.82608 10.8 9.68695 10.6609L7.53044 8.50433C7.39131 8.3652 7.32173 8.19132 7.32173 8.01741V3.87827C7.32173 3.49566 7.63478 3.18262 8.01739 3.18262C8.39999 3.18262 8.71304 3.49566 8.71304 3.87827V7.73913L10.6609 9.66958Z"></path>
                      </svg>
                      </div>
                      <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'd F Y' ); ?></time>
                    </div>
                  </div><!--end news-item__bottom -->
                </div><!--end news-item -->
              </div><!--end item -->
          
          <?php endforeach; ?>
          
          </div><!--end card-articles -->
          
          <?php wp_reset_postdata(); ?>

        <?php endif; ?>
      </main>
    </div><!--end content-wrapper -->
  </div><!--end wrapper -->

<? get_template_part( 'template-parts/subscribe-news-all' ) ?>

<?php

get_footer();

?>