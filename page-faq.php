<?php
/*
Template Name: Шаблон для Вопрос ответ
*/

    get_header();
?>

<div class="wrapper">

    <? get_template_part( 'template-parts/breadcrumbs' ) ?>

    <h1 class="title-h1 xl-mt50">Учебный центр</h1>
    <?php
      wp_nav_menu( array(
          'theme_location' => 'menu-3',
          'container' => '',
          'menu_class' => 'blog-links',
      ) );
    ?>
    <div class="content-wrapper mt10">
      <main class="content">
          <div class="b-faq">
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

      </main>
    </div><!--end content-wrapper -->
  </div><!--end wrapper -->
  <? get_template_part( 'template-parts/subscribe-news-all' ) ?>

<?php

    get_footer();

?>