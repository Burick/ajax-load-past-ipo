<?php
/*
Template Name: Шаблон для прошедших IPO
*/

get_header();

$lang = 'eng';
?>


    <div class="wrapper">

        <? get_template_part('template-parts/breadcrumbs') ?>

        <div class="content-wrapper">
            <main class="content">
                <h2 class="title-h1">Прошедшие IPO</h2>
                <div class="ipo-desc-first">
                    <p>Еженедельно мы отбираем свыше <strong>25</strong> потенциально прибыльных <strong>IPO</strong>.
                        Вы сами
                        решаете, во что вкладывать свои деньги. Инвестируйте и получайте результат — всю бумажную работу
                        мы берем на
                        себя.
                    </p>
                </div>
                <div class="ipos-filter">
                    <div class="ipos-filter__btns">
                        <div class="drop-select">
                            <div class="drop-select__value">Сфера(1)</div>
                            <span class="arr"><img
                                        src="<?php echo bloginfo('template_url'); ?>/assets/svg/arr-select2.svg" alt=""></span>
                            <div class="drop-select__list">
                                <ul>
                                    <li><label class="checkbox" for="dd1"><input id="dd1" type="checkbox"><span>Technology</span></label>
                                    </li>
                                    <li><label class="checkbox" for="dd2"><input id="dd2" type="checkbox"><span>Financials</span>
                                    </li>
                                    <li><label class="checkbox" for="dd3"><input id="dd3" type="checkbox"><span>Consumer Discretionary</span>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end drop-select -->
                        <div class="drop-select">
                            <div class="drop-select__value"><input id="" type="hidden"><span
                                        id="open-datepicker">Дата</span></div>
                            <span class="arr"><img
                                        src="<?php echo bloginfo('template_url'); ?>/assets/svg/arr-select2.svg" alt=""></span>
                            <div class="drop-select__list">
                                <div id="datepicker"></div>
                            </div>
                        </div><!--end drop-select -->
                        <div class="drop-select">
                            <div class="drop-select__value">Рейтинг</div>
                            <span class="arr"><img
                                        src="<?php echo bloginfo('template_url'); ?>/assets/svg/arr-select2.svg" alt=""></span>
                            <div class="drop-select__list">
                                <ul>
                                    <li><label class="checkbox" for="dd1"><input id="dd1" type="checkbox"><span>Technology</span></label>
                                    </li>
                                    <li><label class="checkbox" for="dd2"><input id="dd2" type="checkbox"><span>Financials</span>
                                    </li>
                                    <li><label class="checkbox" for="dd3"><input id="dd3" type="checkbox"><span>Consumer Discretionary</span>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end drop-select -->
                    </div><!--end ipos-filter__btns -->
                    <div class="ipos-filter__type">
                        <a href="#" id="js-tab-type-block" class="type active">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10.9091" height="10.9091"/>
                                <rect x="13.0908" width="10.9091" height="10.9091"/>
                                <rect y="13.0908" width="10.9091" height="10.9091"/>
                                <rect x="13.0908" y="13.0908" width="10.9091" height="10.9091"/>
                            </svg>
                        </a>
                        <a href="#" id="js-tab-type-table" class="type">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.000488281" width="24" height="4.36364"/>
                                <rect y="13.0908" width="24" height="4.36364"/>
                                <rect y="6.54541" width="24" height="4.36364"/>
                                <rect y="19.6367" width="24" height="4.36364"/>
                            </svg>
                        </a>
                    </div>
                </div><!--end ipos-filter -->
                <div class="tab-type-blocks">
                    <div class="deal-full">
                        <div class="deal-full-scroll">
                            <div class="deal-full-scroll__content">


                                <?php
                                global $wpdb;

                                //$post_per_page  = get_option('posts_per_page');
                                // постов на странице
                                $post_per_page = 3;
                                // номер страницы
                                $page = get_query_var('paged') ? get_query_var('paged') : 1;
                                // смещение для выборки
                                $offset = ($page * $post_per_page) - $post_per_page;


                                // переменные из формы фильтра
                                $sphere = get_query_var('sphere') ? get_query_var('sphere') : 1;
                                $ipo_date = get_query_var('ipo_date') ? get_query_var('ipo_date') : 1;
                                $rating = get_query_var('rating') ? get_query_var('rating') : 1;




                                $query = "SELECT * FROM pastipo";
                                //$get_ipo = $wpdb->get_results($query);
                                $total_record = count($wpdb->get_results($query, ARRAY_A));
                                $query .= ' ORDER BY id DESC LIMIT ' . $offset . ', ' . $post_per_page;
                                $get_ipo = $wpdb->get_results(  $wpdb->prepare( $query ) );





                                if ('ru' == $lang) {

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

                                } else {

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

                                foreach ($get_ipo as $value) {
                                    //	print_r($value);
                                    //  exit();
                                    $skuCode = $value->ticker;
                                    $selectProducts = $wpdb->get_results("SELECT * FROM `wp_postmeta` WHERE `meta_key` = 'tiker' AND `meta_value` = '$skuCode'");
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

                                    <?php

                                }

                                ?>

                            </div><!--end deal-right-scroll__content -->
                        </div><!--end deal-right-scroll -->
                        <div class="b-btn-center"><a href="#" class="btn">Загрузить все</a></div>
                    </div><!--end deal-full -->
                </div><!--end tab-type-blocks -->
                <div class="tab-type-table">
                    <div class="deal-table">
                        <div class="deal-table__row">
                            <div class="deal-table__th">Рейтинг
                                IPO.one
                            </div>
                            <div class="deal-table__th">Компания</div>
                            <div class="deal-table__th">Тикер</div>
                            <div class="deal-table__th">Сфера</div>
                            <div class="deal-table__th">Первый
                                торговый день
                            </div>
                            <div class="deal-table__th">Цена IPO</div>
                            <div class="deal-table__th">Доходность за 1-й
                                день торгов
                            </div>
                            <div class="deal-table__th">Текущая
                                доходность
                            </div>
                            <div class="deal-table__th">Дата окончания
                                Lock UP периода
                            </div>
                            <div class="deal-table__th">Доходность по итогам
                                Lock UP периода
                            </div>
                            <div class="deal-table__th"></div>
                        </div><!--end deal-table__row -->
                        <?php
                        //$get_ipo = $wpdb->get_results("SELECT * FROM `pastipo`");

                        foreach ($get_ipo as $value) {
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

                            <?php
                        }

                        ?>
                    </div><!--end deal-table -->
                </div><!--end tab-type-table -->


            </main>
        </div><!--end content-wrapper -->
    </div><!--end wrapper -->
    <div class="lvl12 inside-footer">
        <div class="wrapper">
            <div class="foot-just">
                <div class="b-text">Хотите получать свежие новости и аналитику?</div>
                <div class="b-form">
                    <div class="form">
                        <div class="b-pole"><input class="pole" type="text" placeholder=" " id="form-email"><label
                                    for="form-email">Введите
                                свой e-mail</label></div>
                        <div class="b-btn"><input class="btn btn-white" type="submit" value="Хочу!"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dqq bdq12-3 t7"></div>
        <div class="dqq bdq12-4 t5"></div>
    </div><!--end lvl -->


<?php


$args = [
    'base' => '/'.$post->post_name.'/%_%',
    //'format'       => '?paged=%#%',
    'format' => 'page/%#%',
    'total' => ceil($total_record / $post_per_page),
    'current' => $page,
    'show_all' => False,
    'end_size' => 1,
    'mid_size' => 2,
    'prev_next' => True,
    'prev_text' => __('« ТУДА'),
    'next_text' => __('СЮДА »'),
    'type' => 'plain',
    'add_args' => False,
    'add_fragment' => '',
    'before_page_number' => '',
    'after_page_number' => '',
    //'aria_current' => 'location',
];

echo paginate_links($args);
// true_option_page();
?>

<?php

get_footer();

?>