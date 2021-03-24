<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="no">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo bloginfo('template_url'); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php if ( is_front_page() ) { body_class( '' ); } else { body_class('inside'); } ?>>
<?php wp_body_open(); ?>
<div class="over">
  <header class="header">
    <div class="wrapper">
      <div class="b-logo"><a href="/" class="logo"></a></div>
      <?php
          wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'container' => 'nav',
          ) );
      ?>
      <div class="header-right">
        <div class="b-notify">
          <a href="#"><svg width="16" height="18" viewBox="0 0 16 18"  xmlns="http://www.w3.org/2000/svg">
            <path d="M14.9385 8.16687C14.6625 8.16687 14.4385 7.94287 14.4385 7.66687C14.4385 5.7522 13.6932 3.95288 12.3398 2.59888C12.1445 2.40356 12.1445 2.08691 12.3398 1.8916C12.5352 1.69629 12.8518 1.69629 13.0472 1.8916C14.5892 3.4342 15.4385 5.4856 15.4385 7.66687C15.4385 7.94287 15.2145 8.16687 14.9385 8.16687Z" stroke-width="0.4"/>
            <path d="M1.27197 8.16675C0.995972 8.16675 0.771973 7.94275 0.771973 7.66675C0.771973 5.48547 1.62134 3.43408 3.16394 1.89209C3.35925 1.69678 3.67603 1.69678 3.87134 1.89209C4.06665 2.0874 4.06665 2.40417 3.87134 2.59949C2.51733 3.95276 1.77197 5.75208 1.77197 7.66675C1.77197 7.94275 1.54797 8.16675 1.27197 8.16675Z"  stroke-width="0.4"/>
            <path d="M8.10547 17C6.72681 17 5.60547 15.8787 5.60547 14.5C5.60547 14.224 5.82947 14 6.10547 14C6.38147 14 6.60547 14.224 6.60547 14.5C6.60547 15.3274 7.27808 16 8.10547 16C8.93274 16 9.60547 15.3274 9.60547 14.5C9.60547 14.224 9.82947 14 10.1055 14C10.3815 14 10.6055 14.224 10.6055 14.5C10.6055 15.8787 9.48413 17 8.10547 17Z" stroke-width="0.4"/>
            <path d="M13.6052 15H2.60522C1.96179 15 1.43848 14.4767 1.43848 13.8334C1.43848 13.4919 1.58716 13.1687 1.84656 12.9467C2.86047 12.09 3.43848 10.8447 3.43848 9.52539V7.66663C3.43848 5.09338 5.53186 3 8.10522 3C10.6785 3 12.7718 5.09338 12.7718 7.66663V9.52539C12.7718 10.8447 13.3499 12.09 14.3572 12.942C14.6232 13.1687 14.7718 13.4919 14.7718 13.8334C14.7718 14.4767 14.2485 15 13.6052 15ZM8.10522 4C6.08313 4 4.43848 5.64465 4.43848 7.66663V9.52539C4.43848 11.1393 3.7312 12.6633 2.49854 13.7053C2.47522 13.7253 2.43848 13.7667 2.43848 13.8334C2.43848 13.924 2.51453 14 2.60522 14H13.6052C13.6958 14 13.7718 13.924 13.7718 13.8334C13.7718 13.7667 13.7352 13.7253 13.7131 13.7067C12.4791 12.6633 11.7718 11.1393 11.7718 9.52539V7.66663C11.7718 5.64465 10.1272 4 8.10522 4Z"  stroke-width="0.4"/>
            <path d="M8.10547 4C7.82947 4 7.60547 3.776 7.60547 3.5V1.5C7.60547 1.224 7.82947 1 8.10547 1C8.38147 1 8.60547 1.224 8.60547 1.5V3.5C8.60547 3.776 8.38147 4 8.10547 4Z" stroke-width="0.4"/>
          </svg></a>

        </div>
        <div class="b-profile">
          <a href="#" class="js-pop-subscribe"><svg width="15" height="16" viewBox="0 0 15 16"  xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.17157 10.7717C1.92172 10.0215 2.93913 9.6001 4 9.6001H10.4C11.4609 9.6001 12.4783 10.0215 13.2284 10.7717C13.9786 11.5218 14.4 12.5392 14.4 13.6001V15.2001C14.4 15.6419 14.0418 16.0001 13.6 16.0001C13.1582 16.0001 12.8 15.6419 12.8 15.2001V13.6001C12.8 12.9636 12.5471 12.3531 12.0971 11.903C11.647 11.453 11.0365 11.2001 10.4 11.2001H4C3.36348 11.2001 2.75303 11.453 2.30294 11.903C1.85286 12.3531 1.6 12.9636 1.6 13.6001V15.2001C1.6 15.6419 1.24183 16.0001 0.8 16.0001C0.358172 16.0001 0 15.6419 0 15.2001V13.6001C0 12.5392 0.421427 11.5218 1.17157 10.7717Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.20001 1.6C5.87453 1.6 4.80001 2.67452 4.80001 4C4.80001 5.32548 5.87453 6.4 7.20001 6.4C8.5255 6.4 9.60001 5.32548 9.60001 4C9.60001 2.67452 8.5255 1.6 7.20001 1.6ZM3.20001 4C3.20001 1.79086 4.99087 0 7.20001 0C9.40915 0 11.2 1.79086 11.2 4C11.2 6.20914 9.40915 8 7.20001 8C4.99087 8 3.20001 6.20914 3.20001 4Z" />
          </svg></a>
        </div>
        <a href="javascript:void(0);"  id="hamburger-icon">
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </a>
        <div class="b-lang">
          <div class="lang-val">RU</div>
          <div class="arr"><svg width="7" height="4" viewBox="0 0 7 4" fill="#000" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.6639 0.334315L6.44207 0.110943C6.37225 0.0411838 6.27937 0.00275299 6.1801 0.00275299C6.08088 0.00275299 5.98789 0.0411838 5.91807 0.110943L3.38758 2.64154L0.854178 0.108135C0.784474 0.0383758 0.69148 0 0.592264 0C0.493049 0 0.4 0.0383758 0.330241 0.108135L0.108355 0.330131C-0.0361184 0.474494 -0.0361184 0.709649 0.108355 0.854012L3.12468 3.88118C3.19438 3.95089 3.28727 4 3.38736 4H3.38852C3.48779 4 3.58068 3.95083 3.65038 3.88118L6.6639 0.862216C6.73371 0.792512 6.77203 0.69682 6.77214 0.597605C6.77214 0.498334 6.73371 0.403964 6.6639 0.334315Z" />
          </svg>
          </div>
          <ul class="list-lang">
            <li class="active"><a href="">RU</a></li>
            <li><a href="">EN</a></li>
          </ul>
        </div>
        <div class="btns">
          <a href="#" class="btn js-pop-subscribe">Подписаться на рассылку</a>
          <a href="#" class="btn btn-op">Регистрация / Вход</a>
        </div>
      </div>
    </div>
    <div class="mobile-menu">
      <div class="mobile-menu__wrapper">
        <div class="mobile-menu__scroll">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
            ) );
        ?>
        </div><!--end mobile-menu__scroll -->
        <div class="btns">
            <a href="#" class="btn">Подписаться на рассылку</a>
            <a href="#" class="btn btn-op">Регистрация / Вход</a>
          </div>
      </div><!--end mobile-menu__wrapper-->
    </div><!--end mobile-menu -->
  </header>