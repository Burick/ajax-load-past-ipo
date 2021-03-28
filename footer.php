<footer>
    <div class="wrapper">
      <div class="foot-top">
        <div class="foot-menu">
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

          <?php dynamic_sidebar( 'sidebar-2' ); ?>

        <?php endif; ?>
        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>

          <?php dynamic_sidebar( 'sidebar-3' ); ?>

        <?php endif; ?>
        </div>
        <div class="foot-contact">
          <h2>Контакты</h2>
          <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>

            <?php dynamic_sidebar( 'sidebar-4' ); ?>

          <?php endif; ?>
        </div>
      </div><!--end foot-top -->
      <div class="foot-bottom">
        <div class="foot-left">
        <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>

          <?php dynamic_sidebar( 'sidebar-5' ); ?>

        <?php endif; ?>
        </div>
        <div class="foot-logo"><a href="#" class="logo-f"><img src="<?php echo bloginfo('template_url'); ?>/assets/svg/foot-logo.svg" alt=""></a></div>
      </div><!--end foot-bottom -->
    </div><!--end wrapper -->
  </footer>
  <div id="pop-video" class="popup">
  	<div class="popup-container">
	  	<div class="popup-wrapper">
	  		<div class="close">
	  			<svg width="14" height="14" viewBox="0 0 14 14" fill="black" xmlns="http://www.w3.org/2000/svg">
				<path d="M8.64341 6.99901L13.6552 1.99813C13.8747 1.77862 13.998 1.48091 13.998 1.17048C13.998 0.860046 13.8747 0.562331 13.6552 0.342824C13.4358 0.123318 13.1381 0 12.8277 0C12.5173 0 12.2196 0.123318 12.0002 0.342824L7 5.35536L1.99983 0.342824C1.78036 0.123318 1.48268 -2.31288e-09 1.1723 0C0.861913 2.31288e-09 0.56424 0.123318 0.344765 0.342824C0.125289 0.562331 0.00198911 0.860046 0.00198911 1.17048C0.00198911 1.48091 0.125289 1.77862 0.344765 1.99813L5.35659 6.99901L0.344765 11.9999C0.235521 12.1083 0.148811 12.2372 0.0896384 12.3792C0.0304655 12.5213 0 12.6736 0 12.8275C0 12.9814 0.0304655 13.1338 0.0896384 13.2758C0.148811 13.4179 0.235521 13.5468 0.344765 13.6552C0.453117 13.7644 0.582027 13.8512 0.724059 13.9103C0.866091 13.9695 1.01843 14 1.1723 14C1.32616 14 1.47851 13.9695 1.62054 13.9103C1.76257 13.8512 1.89148 13.7644 1.99983 13.6552L7 8.64265L12.0002 13.6552C12.1085 13.7644 12.2374 13.8512 12.3795 13.9103C12.5215 13.9695 12.6738 14 12.8277 14C12.9816 14 13.1339 13.9695 13.2759 13.9103C13.418 13.8512 13.5469 13.7644 13.6552 13.6552C13.7645 13.5468 13.8512 13.4179 13.9104 13.2758C13.9695 13.1338 14 12.9814 14 12.8275C14 12.6736 13.9695 12.5213 13.9104 12.3792C13.8512 12.2372 13.7645 12.1083 13.6552 11.9999L8.64341 6.99901Z" />
				</svg>
			</div>
	  		<div class="pop-video-cont">
	  			<iframe width="560" height="315" src="https://www.youtube.com/embed/cERS8z56GsU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  		</div>
	  	</div><!--end popup-wrapper -->
  	</div><!--end popup-container -->
  </div><!--end popup -->
  <div id="pop-question" class="popup">
  	<div class="popup-container">
	  	<div class="popup-wrapper">
	  		<div class="close">
	  			<svg width="14" height="14" viewBox="0 0 14 14" fill="black" xmlns="http://www.w3.org/2000/svg">
				<path d="M8.64341 6.99901L13.6552 1.99813C13.8747 1.77862 13.998 1.48091 13.998 1.17048C13.998 0.860046 13.8747 0.562331 13.6552 0.342824C13.4358 0.123318 13.1381 0 12.8277 0C12.5173 0 12.2196 0.123318 12.0002 0.342824L7 5.35536L1.99983 0.342824C1.78036 0.123318 1.48268 -2.31288e-09 1.1723 0C0.861913 2.31288e-09 0.56424 0.123318 0.344765 0.342824C0.125289 0.562331 0.00198911 0.860046 0.00198911 1.17048C0.00198911 1.48091 0.125289 1.77862 0.344765 1.99813L5.35659 6.99901L0.344765 11.9999C0.235521 12.1083 0.148811 12.2372 0.0896384 12.3792C0.0304655 12.5213 0 12.6736 0 12.8275C0 12.9814 0.0304655 13.1338 0.0896384 13.2758C0.148811 13.4179 0.235521 13.5468 0.344765 13.6552C0.453117 13.7644 0.582027 13.8512 0.724059 13.9103C0.866091 13.9695 1.01843 14 1.1723 14C1.32616 14 1.47851 13.9695 1.62054 13.9103C1.76257 13.8512 1.89148 13.7644 1.99983 13.6552L7 8.64265L12.0002 13.6552C12.1085 13.7644 12.2374 13.8512 12.3795 13.9103C12.5215 13.9695 12.6738 14 12.8277 14C12.9816 14 13.1339 13.9695 13.2759 13.9103C13.418 13.8512 13.5469 13.7644 13.6552 13.6552C13.7645 13.5468 13.8512 13.4179 13.9104 13.2758C13.9695 13.1338 14 12.9814 14 12.8275C14 12.6736 13.9695 12.5213 13.9104 12.3792C13.8512 12.2372 13.7645 12.1083 13.6552 11.9999L8.64341 6.99901Z" />
				</svg>
			</div>
	  		<div class="popup-cont">
	  			<div class="popup-title">Остались вопросы?</div>
	  			<div class="desc">Получите ответы и присоединйтесь к  нам</div>

            <?php echo do_shortcode('[contact-form-7 id="2251" title="Остались вопросы форма"]'); ?>

	  		</div><!--end popup-cont -->
	  		<div class="pop-qua1"></div>
	  		<div class="pop-qua2"></div>
	  	</div><!--end popup-wrapper -->
  	</div><!--end popup-container -->
  </div><!--end popup -->
</div><!--end over -->
<div id="pop-subscribe" class="popup">
  <div class="popup-container">
    <div class="popup-wrapper">
      <div class="close">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="black" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.64341 6.99901L13.6552 1.99813C13.8747 1.77862 13.998 1.48091 13.998 1.17048C13.998 0.860046 13.8747 0.562331 13.6552 0.342824C13.4358 0.123318 13.1381 0 12.8277 0C12.5173 0 12.2196 0.123318 12.0002 0.342824L7 5.35536L1.99983 0.342824C1.78036 0.123318 1.48268 -2.31288e-09 1.1723 0C0.861913 2.31288e-09 0.56424 0.123318 0.344765 0.342824C0.125289 0.562331 0.00198911 0.860046 0.00198911 1.17048C0.00198911 1.48091 0.125289 1.77862 0.344765 1.99813L5.35659 6.99901L0.344765 11.9999C0.235521 12.1083 0.148811 12.2372 0.0896384 12.3792C0.0304655 12.5213 0 12.6736 0 12.8275C0 12.9814 0.0304655 13.1338 0.0896384 13.2758C0.148811 13.4179 0.235521 13.5468 0.344765 13.6552C0.453117 13.7644 0.582027 13.8512 0.724059 13.9103C0.866091 13.9695 1.01843 14 1.1723 14C1.32616 14 1.47851 13.9695 1.62054 13.9103C1.76257 13.8512 1.89148 13.7644 1.99983 13.6552L7 8.64265L12.0002 13.6552C12.1085 13.7644 12.2374 13.8512 12.3795 13.9103C12.5215 13.9695 12.6738 14 12.8277 14C12.9816 14 13.1339 13.9695 13.2759 13.9103C13.418 13.8512 13.5469 13.7644 13.6552 13.6552C13.7645 13.5468 13.8512 13.4179 13.9104 13.2758C13.9695 13.1338 14 12.9814 14 12.8275C14 12.6736 13.9695 12.5213 13.9104 12.3792C13.8512 12.2372 13.7645 12.1083 13.6552 11.9999L8.64341 6.99901Z" />
        </svg>
      </div>
      <div class="popup-cont">
        <div class="popup-title">Подписаться</div>
        <div class="text-desc">Узнавайте первыми актуальные новости</div>
        <div class="form-question">
            <div class="b-row">
              <div class="b-pole"><input class="pole" type="text" placeholder=" " name="email" id="pop-reg__form-email"><label for="pop-reg__form-email">E-mail</label></div>
            </div><!--end b-row -->
            <ul class="list-subscribe">
              <li><label class="checkbox" for="sb3"><input id="sb3" type="checkbox"><span>Все новости</span></label></li>
              <li><label class="checkbox" for="sb1"><input id="sb1" type="checkbox"><span>Новости компании</span></label></li>
              <li><label class="checkbox" for="sb2"><input id="sb2" type="checkbox"><span>Все новости IPO</span></label></li>
            </ul>
            <div class="b-row">
              <div class="b-btn"><input class="btn" type="submit" value="Зарегистрироваться"></div>
            </div><!--end b-row -->
        </div><!--end form-question -->
      </div><!--end popup-cont -->
      <div class="pop-qua3"></div>
      <div class="pop-qua4"></div>
      <div class="pop-qua5"></div>
    </div><!--end popup-wrapper -->
  </div><!--end popup-container -->
</div><!--end popup -->

<?php wp_footer(); ?>
<?php
  if ( is_singular('company') ) {
?>
<script src="https://unpkg.com/lightweight-charts@3.2.0/dist/lightweight-charts.standalone.production.js"></script>
<script>
$(function() {

    var container = document.getElementById('card-chart');
    // document.body.appendChild(container);

    var width = $('.card-grafic__chart').width();
    var height = $('.card-grafic__chart').height();
    console.log(width);
    var chart = LightweightCharts.createChart(container, {
        width: width,
        height: height,
        leftPriceScale: {
            scaleMargins: {
                top: 0.2,
                bottom: 0.2,
            },
            visible: true,
            borderVisible: false,
        },
        rightPriceScale: {
            visible: false,
        },
        timeScale: {
            borderVisible: false,
        },
        grid: {
            horzLines: {
                color: '#eee',
            },
            vertLines: {
                color: '#ffffff',
            },
        },
        crosshair: {
            horzLine: {
                visible: false,
                labelVisible: false
            },
            vertLine: {
                visible: true,
                style: 0,
                width: 2,
                color: 'rgba(32, 38, 46, 0.1)',
                labelVisible: false,
            }
        },
    });
    var timerID;
    document.body.onresize = function() {
        width = $('.card-grafic__chart').width();
        height = $('.card-chart__info').height();
        if (timerID) clearTimeout(timerID);
        timerID = setTimeout(function() {
            chart.resize(width, height + 30);
        }, 200);
    }
    var series = chart.addAreaSeries({
        topColor: 'rgba(0, 120, 255, 0.2)',
        bottomColor: 'rgba(0, 120, 255, 0.0)',
        lineColor: 'rgba(0, 120, 255, 1)',
        lineWidth: 3
    });

    <?php

      $id_p = get_the_ID();
    $get_tikers = get_post_meta($id_p,'tiker',true);

    $get_grafs = 'https://static-dev-ff4708e.s3.eu-north-1.amazonaws.com/charts/'.$get_tikers.'.json';


    $get_coms = curlhttp($get_grafs);
       $num = 1;
       echo 'series.setData([';
foreach($get_coms as $value){
    // проверяем четность
    if(($num % 2) == 0){

        /*  $v = number_format($value);
           $switched = str_replace(',', '.', $v);*/

           $value = $value/100;
        // если четное, то делаем отступ 
        echo "value:$value},";

      //  break;
        
    }else{
        $returnValue = date('Y-m-d', $value);
        // если не четное, то просто выводим
        echo '{time: "'.$returnValue.'",';

    }
    $num ++;
}
    echo ' ]);';
     ?>



    function businessDayToString(businessDay) {
        return new Date(Date.UTC(businessDay.year, businessDay.month - 1, businessDay.day, 0, 0, 0)).toLocaleDateString();
    }

    var toolTipWidth = 96;
    var toolTipHeight = 80;
    var toolTipMargin = 15;
    var priceScaleWidth = 50;

    var toolTip = document.createElement('div');
    toolTip.className = 'floating-tooltip-2';
    container.appendChild(toolTip);

    // update tooltip
    chart.subscribeCrosshairMove(function (param) {
        if (!param.time || param.point.x < 0 || param.point.x > width || param.point.y < 0 || param.point.y > height) {
            toolTip.style.display = 'none';
            return;
        }

        var dateStr = LightweightCharts.isBusinessDay(param.time) ?
            businessDayToString(param.time) :
            new Date(param.time * 1000).toLocaleDateString();

        toolTip.style.display = 'block';
        var price = param.seriesPrices.get(series);
        toolTip.innerHTML = '<div style="color: rgba(0, 120, 255, 0.9)">⬤ <?php echo $get_tikers; ?></div>' +
            '<div style="font-size: 24px; margin: 4px 0px; color: #20262E">' + (Math.round(price * 100) / 100).toFixed(2) + '</div>' +
            '<div>' + dateStr + '</div>';

        var left = param.point.x;


        if (left > width - toolTipWidth - toolTipMargin) {
            left = width - toolTipWidth;
        } else if (left < toolTipWidth / 2) {
            left = priceScaleWidth;
        }

        toolTip.style.left = left + 'px';
        toolTip.style.top = 0 + 'px';
    });
});
</script>
<?php
  }
?>
</body>
</html>