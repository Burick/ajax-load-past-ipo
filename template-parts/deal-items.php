<?php
    $value = $args['value'];
    $selectProducts = $args['selectProducts'];
?>
<div class="deal-item">
    <div class="block">
        <div class="img"><img
                    src="https://static-dev-ff4708e.s3.eu-north-1.amazonaws.com/logos/<?php echo $value->ticker; ?>_logo.jpg"
                    alt=""></div>
        <div class="tit-text"> <?php echo $value->company_name; ?></div>
        <div class="bs-rows">
            <div class="b-row">
                <div class="col1">Цена первичного размещения</div>
                <div class="col2"><?php echo $value->price; ?> $</div>
            </div>
            <div class="b-row">
                <div class="col1">Цена на дату окончания
                    Lock Up периода
                </div>
                <div class="col2"><?php echo $value->price_lockup; ?> $</div>
            </div>
            <div class="b-row">
                <div class="col1">Заработок за первый
                    день публичных торгов
                </div>
                <div class="col2"><?php echo $value->first_day_profit_percent; ?>
                    %
                </div>
            </div>
            <div class="b-row">
                <div class="col1">Тикер</div>
                <div class="col2"><a
                            href="<?php echo get_post_permalink($selectProducts[0]->post_id); ?>"><?php echo $value->ticker; ?></a>
                </div>
            </div>
            <div class="b-row">
                <div class="col1">Cфера</div>
                <div class="col2"><strong
                            class="color_<?php echo $value->sphere; ?>"><?php echo $category[$value->sphere]; ?></strong>
                </div>
            </div>
            <div class="b-row">
                <div class="col1">Первый торговый день</div>
                <div class="col2"><?php

                    //echo $value->ipo_date;
                    $x = explode('T', $value->ipo_date);

                    $x = explode('-', $x[0]);

                    echo $x[2] . '-' . $x[1] . '-' . $x[0];

                    ?></div>
            </div>
            <div class="b-row sel">
                <div class="col1">Прибыль на дату окончания Lock Up периода</div>
                <div class="col2"><?php echo $value->lockup_day_profit_percent; ?>
                    %
                </div>
            </div>
            <div class="b-row">
                <div class="col1">Рейтинг от IPO.one:</div>
                <div class="col2">
                    <div class="stars">

                        <?php

                        if ($value->rating == 0) {

                            ?>

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png"
                                 alt="">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png"
                                 alt="">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png"
                                 alt="">
                            <?php

                        } elseif ($value->rating == 1) {

                            ?>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png"
                                 alt="">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png"
                                 alt="">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png"
                                 alt="">

                            <?php

                        } elseif ($value->rating == 2) {

                            ?>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png"
                                 alt="">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png"
                                 alt="">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png"
                                 alt="">

                            <?php

                        } elseif ($value->rating == 3) {

                            ?>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png"
                                 alt="">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png"
                                 alt="">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png"
                                 alt="">

                            <?php

                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div><!--end block -->
</div><!--end deal-item -->






















