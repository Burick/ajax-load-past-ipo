<?php
$value = $args['value'];
$selectProducts = $args['selectProducts'];
?>
<div class="deal-table__row">
    <div class="deal-table__td td-stars">
        <?php
        if ($value->rating == 0) {
            $skuCode = $value->ticker;
            $selectProducts = $wpdb->get_results("SELECT * FROM `wp_postmeta` WHERE `meta_key` = 'tiker' AND `meta_value` = '$skuCode'");
            ?>

            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
            <?php

        } elseif ($value->rating == 1) {

            ?>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">

            <?php

        } elseif ($value->rating == 2) {

            ?>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star2.png" alt="">

            <?php

        } elseif ($value->rating == 3) {

            ?>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star1.png" alt="">

            <?php

        }


        ?>
    </div>
    <div class="deal-table__td td-company"><?php echo $value->company_name; ?></div>
    <div class="deal-table__td td-tick"><a
                href="<?php echo get_post_permalink($selectProducts[0]->post_id); ?>"><?php echo $value->ticker; ?></a>
    </div>
    <div class="deal-table__td"><?php echo $category[$value->sphere]; ?></div>
    <div class="deal-table__td"><?php

        //echo $value->ipo_date;
        $x = explode('T', $value->ipo_date);

        $x = explode('-', $x[0]);

        echo $x[2] . '-' . $x[1] . '-' . $x[0];

        ?></div>
    <div class="deal-table__td">$<?php echo $value->price_first_day; ?></div>
    <div class="deal-table__td"><span
                class="green"><?php echo $value->first_day_profit_percent; ?>%</span></div>
    <div class="deal-table__td"><span
                class="green"><?php echo $value->price_lockup; ?>%</span></div>
    <?php
    $e = explode('T', $value->lockup_date);

    ?>
    <div class="deal-table__td"><?php

        $time_ex = explode('-', $e[0]);
        echo $time_ex[2] . '-' . $time_ex[1] . '-' . $time_ex[0];
        ?>
    </div>

    <div class="deal-table__td"><span
                class="green"><?php echo $value->lockup_day_profit_percent; ?>%</span></div>
    <div class="deal-table__td"><a
                href="<?php echo get_post_permalink($selectProducts[0]->post_id); ?>"
                class="btn">Подробнее</a></div>
</div><!--end deal-table__row -->