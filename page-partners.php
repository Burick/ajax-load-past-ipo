<?php
/*
Template Name: Шаблон для страницы партнерам
*/

    get_header();
?>

<section class="partner-1">
    <div class="wrapper">
      <div class="partner-bann">
        <div class="bann-content">
          <div class="title-bann">

            <?php the_field('f-partner-1'); ?>

          </div>
          <div class="subtitle-bann"><?php the_field('f-partner-2'); ?></div>
          <div class="text"><?php the_field('f-partner-3'); ?></div>
        </div><!--end bann-content -->
      </div><!--end partner-bann -->
      <div class="steps-parnters">
        <h2>Вознаграждение за 4 быстрых действия</h2>
        <div class="b-steps-list">
          <div class="steps-list__scroll">
            <ul class="steps-list">
              <li><span class="ico">1</span><span class="title">Подайте заявку на оформление договора</span></li>
              <li><span class="ico">2</span><span class="title">Получите реферальную ссылку.</span></li>
              <li><span class="ico">3</span><span class="title">Поделитесь IPO.one в сообществе или с друзьями</span></li>
              <li><span class="ico">4</span><span class="title">Заберите комиссионную выплату</span></li>
            </ul>
          </div>
        </div>
        <div class="b-btn"><a href="#" class="btn">Стать партнером</a></div>
      </div>
    </div><!--end wrapper -->
  </section>
  <section class="partner-2">
    <div class="wrapper">
      <h2>Как рассчитать процент</h2>
      <div class="partner-graf">
        <div class="graf-text">
          <?php the_field('f-partner-4'); ?>
        </div><!--end graf-text -->

        <div class="graf-img">

          <?php the_field('f-partner-5'); ?>

        </div><!-- end graf-img -->
        <div class="text-small">*Для владельцев блогов, YouTube-каналов и партнерских сетей 30% фиксируется с момента старта.</div>
      </div>
    </div><!--end wrapper -->
  </section>
  <section class="partner-3">
    <div class="wrapper">
      <h2><?php the_field('f-partner-6'); ?></h2>
      <div class="row-calc">
        <div class="calc-center">

          <?php the_field('f-partner-7'); ?>

        </div><!--end calc-left -->
      </div><!--end row-calc -->
    </div><!--end wrapper -->
  </section>
  <section class="partner-4">
    <div class="wrapper">
      <h2>Польза сотрудничества очевидна</h2>
      <div class="list-info-images">
        <div class="item">
          <div class="block">
            <div class="icon ic1">
              <span></span>
            </div>
            Договор составляется в течение 24 часов и действует 50 лет.
          </div><!--end block -->
        </div><!--end item -->
        <div class="item">
          <div class="block">
            <div class="icon ic2">
              <span></span>
            </div>
            Участие в программе доступно физическим и юридических лицам, ИП.
          </div><!--end block -->
        </div><!--end item -->
        <div class="item">
          <div class="block">
            <div class="icon ic3">
              <span></span>
            </div>
            Комиссионные вознаграждения поступают каждые 30 дней.
          </div><!--end block -->
        </div><!--end item -->
        <div class="item">
          <div class="block">
            <div class="icon ic4">
              <span></span>
            </div>
            Компетенции партнера повышаются за счет образовательных ресурсов IPO.one.
          </div><!--end block -->
        </div><!--end item -->
        <div class="item">
          <div class="block">
            <div class="icon ic5">
              <span></span>
            </div>
            Действует личный кабинет партнера с понятным функционалом
          </div><!--end block -->
        </div><!--end item -->
      </div><!--end list-info-images -->
      <h2>Условия участия в программе</h2>
      <div class="list-info-images">
        <div class="item">
          <div class="block">
            <div class="icon ic6">
              <span></span>
            </div>
            Предоставление документов для оформления договора. Список по <a href="#">ссылке</a>
          </div><!--end block -->
        </div><!--end item -->
        <div class="item">
          <div class="block">
            <div class="icon ic7">
              <span></span>
            </div>
            Соблюдение требований размещения рекламных кампаний и реферальных ссылок.
          </div><!--end block -->
        </div><!--end item -->
        <div class="item">
          <div class="block">
            <div class="icon ic8">
              <span></span>
            </div>
            Сотрудничество с отделом маркетинга IPO.one.
          </div><!--end block -->
        </div><!--end item -->
      </div><!--end list-info-images -->
    </div><!--end wrapper -->
  </section>
  <section class="partner-5">
    <div class="wrapper">
      <div class="partner-5__left">
      <h2>Вместе зарабатывать легче!</h2>
      <div class="text">Станьте частью большой команды партнеров.
        Расскажите о нас сейчас, чтобы о вас говорили внуки</div>
      <div class="b-btn"><a href="#" class="btn">Стать партнером</a></div>
      </div><!--end partner-5__left -->
      <div class="partner-5__right">

      </div><!--end partner-5__right -->
    </div><!--end wrapper -->
    <div class="bdq dqpr5-1"><div class="dqq t8"></div></div>
    <div class="bdq dqpr5-2"><div class="dqq t8"></div><div class="dqq t9"></div></div>
  </section>


  <div class="lvl12 inside-footer">
    <div class="wrapper">
      <div class="foot-just">
        <div class="b-text">Хотите получать свежие новости и аналитику?</div>
        <div class="b-form">
          <div class="form">
            <div class="b-pole"><input class="pole" type="text" placeholder=" " id="form-email"><label for="form-email">Введите
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

    get_footer();

?>