<!-- <ul class="crumbs">
    <li><a href="">Главная</a></li>
    <li><a href="">Новости</a></li>
</ul> -->

<?php

if ( function_exists( 'yoast_breadcrumb' ) && !is_home() && !is_front_page() ) :?>

<?php
   yoast_breadcrumb( '<ul class="crumbs">', '</ul>' );
endif;?>

<?php
?>