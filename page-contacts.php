<?php
/*
Template Name: Шаблон для страницы контактов
*/

    get_header();
?>
  <div class="wrapper">

    <? get_template_part( 'template-parts/breadcrumbs' ) ?>
    
    <div class="content-wrapper">
      <main class="content">
        <div class="question-section">
          <div class="question-form">
            <h2>Есть вопросы?</h2>

              <?php echo do_shortcode( '[contact-form-7 id="715" title="Форма Контакты"]' ); ?>

          </div><!--end question-form -->
          <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

            <?php dynamic_sidebar( 'sidebar-1' ); ?>

          <?php endif; ?>
        </div><!--end qustion-section -->
      </main>
    </div><!--end content-wrapper -->
  </div><!--end wrapper -->
  <? get_template_part( 'template-parts/subscribe-news-all' ) ?>

<?php

    get_footer();

?>