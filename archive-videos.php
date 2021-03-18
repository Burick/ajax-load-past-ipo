<?php 

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
        <?php

            if( have_posts() ):

        ?>
        <div class="b-videos">
        <?php
            while( have_posts() ):
                the_post();
        ?>
        <?php
            if( has_post_thumbnail() ){
                $img_url = get_the_post_thumbnail_url();
            }else{
                $img_url = 'https://picsum.photos/400/280';
            }
        ?>
          <div class="item">
            <a href="<?php the_permalink(); ?>" class="block">
              <span class="img"><img src="<?php echo $img_url; ?>" alt="<?php the_title(); ?> - фото превью видео записи"></span>
              <span class="title"><?php the_title(); ?></span>
              <span class="text"><?php echo get_the_excerpt(); ?></span>
            </a><!--end block -->
          </div><!--end item -->

        <?php endwhile; ?>

        </div><!--end b-videos -->
        <?php else: ?>

            Постов нет

        <?php endif; ?>
      </main>
    </div><!--end content-wrapper -->
  </div><!--end wrapper -->
  <? get_template_part( 'template-parts/subscribe-news-all' ) ?>

<?php

get_footer();

?>