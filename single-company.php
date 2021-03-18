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
                  <h2><?php echo $get_com->stock; ?>:<a href="<?php echo get_page_link( $id );?>"><?php echo $get_com->ticker; ?></a></h2>
                  <p><?php echo $get_com->l10_n->en->brief; ?></p>
                </div>
              </div><!--end card-steps__up -->
              <ul class="card-steps__list">
                <li class="blue-check">
                  <span class="card-step">
                    <span class="icon"></span>
                    <span class="title">filed</span>
                    <span class="date"><?php
                    $e = explode('T',$get_com->filled_date);

                     echo $e[0];


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

                     echo $e1[0];


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

                     echo $e2[0];


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

                     echo $e3[0];


                      ?></span>
                  </span>
                </li>
              </ul>

            </div><!--end card-steps -->
          </div><!--end b-col -->
          <div class="b-col card-info__col">
            <div class="card-info">
              <div class="card-info__row">
                <div class="col1">1-ый день</div>
                <div class="col2"><span class="blue"><?php
                if($get_com->ipo->price_first_day){
                	 echo $get_com->ipo->price_first_day.' %';
                }else{
                	echo ' - ';
                }
                



                 ?></span></div>
              </div><!--end card-info__row -->
              <div class="card-info__row">
                <div class="col1">Last price</div>
                <div class="col2"><?php
                if($get_com->ipo->price_last_day){
                	echo $get_com->ipo->price_last_day.' $';
                }else{
                	echo ' - ';
                }
                 ?></div>
              </div><!--end card-info__row -->
              <div class="card-info__row">
                <div class="col1">Цена IPO</div>
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
                  <div class="col2"><a href="<?php echo $get_com->website; ?>"><?php echo $get_com->ticker; ?></a></div>
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
                   echo $exdate[0]; ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">IPO</div>
                  <div class="col2"><?php
                  echo $get_com->ipo->price;
                   ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">IPO Date</div>
                  <div class="col2"><?php
                   $ipo_date = explode('T', $get_com->ipo->ipo_date);
                   echo $ipo_date[0]; ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">Price range</div>
                  <div class="col2">$<?php echo $get_com->offering_range_min; ?>-$<?php echo $get_com->offering_range_max; ?></div>
                </div>
              </div><!--end block -->
              <div class="block">
                <div class="b-row">
                  <div class="col1">Lawyers</div>
                  <div class="col2"><?php echo $get_com->lawyers; ?></div>
                </div>
                <div class="b-row">
                  <div class="col1">Auditor</div>
                  <div class="col2"><?php echo $get_com->auditors; ?></div>
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
        <div class="card-articles">
          <div class="item">
            <div class="news-item">
              <a href="" class="news-item__label">IPOone – лауреат премии «Права потребителей и качество обслуживания»</a>
              <a href="" class="news-item__text">Это первая инвестиция Д'Амелио в стартап, сообщает TechCrunch.</a>

              <div class="news-item__bottom--mobile">
                <div class="news-item__time">
                  <div class="ico"><svg fill="black" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0C3.58261 0 0 3.58261 0 8C0 12.4174 3.58261 16 8 16C12.4174 16 16 12.4174 16 8C16 3.58261 12.4174 0 8 0ZM8 14.6087C4.34783 14.6087 1.3913 11.6522 1.3913 8C1.3913 4.34783 4.34783 1.3913 8 1.3913C11.6522 1.3913 14.6087 4.34783 14.6087 8C14.6087 11.6522 11.6522 14.6087 8 14.6087ZM10.6609 9.66958C10.9391 9.94784 10.9391 10.3826 10.6609 10.6609C10.5217 10.8 10.3478 10.8696 10.1739 10.8696C10 10.8696 9.82608 10.8 9.68695 10.6609L7.53044 8.50433C7.39131 8.3652 7.32173 8.19132 7.32173 8.01741V3.87827C7.32173 3.49566 7.63478 3.18262 8.01739 3.18262C8.39999 3.18262 8.71304 3.49566 8.71304 3.87827V7.73913L10.6609 9.66958Z"></path>
                  </svg>
                  </div>
                  Вчера в 10:00
                </div>
                <a class="news-item__tag" href="">R fsd fsdsffdfsdNS</a><a class="news-item__tag" href="">R dsfsdfsdfsdfNS2</a><a class="news-item__tag" href="">RNfsd f sdfsfsdfS3</a><a class="news-item__tag" href="">RNS4</a>
              </div><!--end news-item__bottom -->
            </div><!--end news-item -->
          </div><!--end item -->
          <div class="item">
            <div class="news-item">
              <a href="" class="news-item__label">IPOone – лауреат премии «Права потребителей и качество обслуживания»</a>
              <a href="" class="news-item__text">Это первая инвестиция Д'Амелио в стартап, сообщает TechCrunch.</a>

              <div class="news-item__bottom--mobile">
                <div class="news-item__time">
                  <div class="ico"><svg fill="black" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0C3.58261 0 0 3.58261 0 8C0 12.4174 3.58261 16 8 16C12.4174 16 16 12.4174 16 8C16 3.58261 12.4174 0 8 0ZM8 14.6087C4.34783 14.6087 1.3913 11.6522 1.3913 8C1.3913 4.34783 4.34783 1.3913 8 1.3913C11.6522 1.3913 14.6087 4.34783 14.6087 8C14.6087 11.6522 11.6522 14.6087 8 14.6087ZM10.6609 9.66958C10.9391 9.94784 10.9391 10.3826 10.6609 10.6609C10.5217 10.8 10.3478 10.8696 10.1739 10.8696C10 10.8696 9.82608 10.8 9.68695 10.6609L7.53044 8.50433C7.39131 8.3652 7.32173 8.19132 7.32173 8.01741V3.87827C7.32173 3.49566 7.63478 3.18262 8.01739 3.18262C8.39999 3.18262 8.71304 3.49566 8.71304 3.87827V7.73913L10.6609 9.66958Z"></path>
                  </svg>
                  </div>
                  Вчера в 10:00
                </div>
                <a class="news-item__tag" href="">R fsd fsdsffdfsdNS</a><a class="news-item__tag" href="">R dsfsdfsdfsdfNS2</a><a class="news-item__tag" href="">RNfsd f sdfsfsdfS3</a><a class="news-item__tag" href="">RNS4</a>
              </div><!--end news-item__bottom -->
            </div><!--end news-item -->
          </div><!--end item -->
          <div class="item">
            <div class="news-item">
              <a href="" class="news-item__label">IPOone – лауреат премии «Права потребителей и качество обслуживания»</a>
              <a href="" class="news-item__text">Это первая инвестиция Д'Амелио в стартап, сообщает TechCrunch.</a>

              <div class="news-item__bottom--mobile">
                <div class="news-item__time">
                  <div class="ico"><svg fill="black" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0C3.58261 0 0 3.58261 0 8C0 12.4174 3.58261 16 8 16C12.4174 16 16 12.4174 16 8C16 3.58261 12.4174 0 8 0ZM8 14.6087C4.34783 14.6087 1.3913 11.6522 1.3913 8C1.3913 4.34783 4.34783 1.3913 8 1.3913C11.6522 1.3913 14.6087 4.34783 14.6087 8C14.6087 11.6522 11.6522 14.6087 8 14.6087ZM10.6609 9.66958C10.9391 9.94784 10.9391 10.3826 10.6609 10.6609C10.5217 10.8 10.3478 10.8696 10.1739 10.8696C10 10.8696 9.82608 10.8 9.68695 10.6609L7.53044 8.50433C7.39131 8.3652 7.32173 8.19132 7.32173 8.01741V3.87827C7.32173 3.49566 7.63478 3.18262 8.01739 3.18262C8.39999 3.18262 8.71304 3.49566 8.71304 3.87827V7.73913L10.6609 9.66958Z"></path>
                  </svg>
                  </div>
                  Вчера в 10:00
                </div>
                <a class="news-item__tag" href="">R fsd fsdsffdfsdNS</a><a class="news-item__tag" href="">R dsfsdfsdfsdfNS2</a><a class="news-item__tag" href="">RNfsd f sdfsfsdfS3</a><a class="news-item__tag" href="">RNS4</a>
              </div><!--end news-item__bottom -->
            </div><!--end news-item -->
          </div><!--end item -->
          <div class="item">
            <div class="news-item">
              <a href="" class="news-item__label">IPOone – лауреат премии «Права потребителей и качество обслуживания»</a>
              <a href="" class="news-item__text">Это первая инвестиция Д'Амелио в стартап, сообщает TechCrunch.</a>

              <div class="news-item__bottom--mobile">
                <div class="news-item__time">
                  <div class="ico"><svg fill="black" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0C3.58261 0 0 3.58261 0 8C0 12.4174 3.58261 16 8 16C12.4174 16 16 12.4174 16 8C16 3.58261 12.4174 0 8 0ZM8 14.6087C4.34783 14.6087 1.3913 11.6522 1.3913 8C1.3913 4.34783 4.34783 1.3913 8 1.3913C11.6522 1.3913 14.6087 4.34783 14.6087 8C14.6087 11.6522 11.6522 14.6087 8 14.6087ZM10.6609 9.66958C10.9391 9.94784 10.9391 10.3826 10.6609 10.6609C10.5217 10.8 10.3478 10.8696 10.1739 10.8696C10 10.8696 9.82608 10.8 9.68695 10.6609L7.53044 8.50433C7.39131 8.3652 7.32173 8.19132 7.32173 8.01741V3.87827C7.32173 3.49566 7.63478 3.18262 8.01739 3.18262C8.39999 3.18262 8.71304 3.49566 8.71304 3.87827V7.73913L10.6609 9.66958Z"></path>
                  </svg>
                  </div>
                  Вчера в 10:00
                </div>
                <a class="news-item__tag" href="">R fsd fsdsffdfsdNS</a><a class="news-item__tag" href="">R dsfsdfsdfsdfNS2</a><a class="news-item__tag" href="">RNfsd f sdfsfsdfS3</a><a class="news-item__tag" href="">RNS4</a>
              </div><!--end news-item__bottom -->
            </div><!--end news-item -->
          </div><!--end item -->
          <div class="item">
            <div class="news-item">
              <a href="" class="news-item__label">IPOone – лауреат премии «Права потребителей и качество обслуживания»</a>
              <a href="" class="news-item__text">Это первая инвестиция Д'Амелио в стартап, сообщает TechCrunch.</a>
              <div class="news-item__bottom--mobile">
                <div class="news-item__time">
                  <div class="ico"><svg fill="black" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0C3.58261 0 0 3.58261 0 8C0 12.4174 3.58261 16 8 16C12.4174 16 16 12.4174 16 8C16 3.58261 12.4174 0 8 0ZM8 14.6087C4.34783 14.6087 1.3913 11.6522 1.3913 8C1.3913 4.34783 4.34783 1.3913 8 1.3913C11.6522 1.3913 14.6087 4.34783 14.6087 8C14.6087 11.6522 11.6522 14.6087 8 14.6087ZM10.6609 9.66958C10.9391 9.94784 10.9391 10.3826 10.6609 10.6609C10.5217 10.8 10.3478 10.8696 10.1739 10.8696C10 10.8696 9.82608 10.8 9.68695 10.6609L7.53044 8.50433C7.39131 8.3652 7.32173 8.19132 7.32173 8.01741V3.87827C7.32173 3.49566 7.63478 3.18262 8.01739 3.18262C8.39999 3.18262 8.71304 3.49566 8.71304 3.87827V7.73913L10.6609 9.66958Z"></path>
                  </svg>
                  </div>
                  Вчера в 10:00
                </div>
                <a class="news-item__tag" href="">R fsd fsdsffdfsdNS</a><a class="news-item__tag" href="">R dsfsdfsdfsdfNS2</a><a class="news-item__tag" href="">RNfsd f sdfsfsdfS3</a><a class="news-item__tag" href="">RNS4</a>
              </div><!--end news-item__bottom -->
            </div><!--end news-item -->
          </div><!--end item -->
          <div class="item">
            <div class="news-item">
              <a href="" class="news-item__label">IPOone – лауреат премии «Права потребителей и качество обслуживания»</a>
              <a href="" class="news-item__text">Это первая инвестиция Д'Амелио в стартап, сообщает TechCrunch.</a>

              <div class="news-item__bottom--mobile">
                <div class="news-item__time">
                  <div class="ico"><svg fill="black" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0C3.58261 0 0 3.58261 0 8C0 12.4174 3.58261 16 8 16C12.4174 16 16 12.4174 16 8C16 3.58261 12.4174 0 8 0ZM8 14.6087C4.34783 14.6087 1.3913 11.6522 1.3913 8C1.3913 4.34783 4.34783 1.3913 8 1.3913C11.6522 1.3913 14.6087 4.34783 14.6087 8C14.6087 11.6522 11.6522 14.6087 8 14.6087ZM10.6609 9.66958C10.9391 9.94784 10.9391 10.3826 10.6609 10.6609C10.5217 10.8 10.3478 10.8696 10.1739 10.8696C10 10.8696 9.82608 10.8 9.68695 10.6609L7.53044 8.50433C7.39131 8.3652 7.32173 8.19132 7.32173 8.01741V3.87827C7.32173 3.49566 7.63478 3.18262 8.01739 3.18262C8.39999 3.18262 8.71304 3.49566 8.71304 3.87827V7.73913L10.6609 9.66958Z"></path>
                  </svg>
                  </div>
                  Вчера в 10:00
                </div>
                <a class="news-item__tag" href="">R fsd fsdsffdfsdNS</a><a class="news-item__tag" href="">R dsfsdfsdfsdfNS2</a><a class="news-item__tag" href="">RNfsd f sdfsfsdfS3</a><a class="news-item__tag" href="">RNS4</a>
              </div><!--end news-item__bottom -->
            </div><!--end news-item -->
          </div><!--end item -->

        </div><!--end card-articles -->
      </main>
    </div><!--end content-wrapper -->
  </div><!--end wrapper -->

<? get_template_part( 'template-parts/subscribe-news-all' ) ?>

<?php

get_footer();

?>