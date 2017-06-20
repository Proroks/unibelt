<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo( 'name' ); ?><?php wp_title(' | '); ?></title>


    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/slick-theme.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar first"></span>
            <span class="icon-bar second"></span>
            <span class="icon-bar last"></span>
          </button>
          <a class="navbar-brand logo" href="/">Unibelt</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           <?php if( is_front_page() ){
                 echo '<li class="active"><a class="go_to" href="#about-products">О гирлянде</a></li>
            <li><a class="go_to" href="#support">Поддержка</a></li>
            <li><a class="go_to" href="#reviews">Отзывы</a></li>
            <li><a class="go_to" href=".footer">О нас</a></li>';
                }
                else {
                     echo '<li class="active"><a class="go_to" href="/#about-products">О гирлянде</a></li>
            <li><a class="go_to" href="/#support">Поддержка</a></li>
            <li><a class="go_to" href="/#reviews">Отзывы</a></li>
            <li><a class="go_to" href="/.footer">О нас</a></li>';
                }?>
            
            <a href="#zakaz" class="popap" data-effect="mfp-zoom-out"><button type="submit" class="btn btn-default pull-right">Заказать</button></a>
            <li class="opening-hours pull-right">Часы работы<br> <span>10:00 - 18:00</span></li>
            <li class="phone pull-right"><a href="tel: +7 495 380 18 97">+7 495 380 18 97</a></li>
          </ul>
        </div>
        <span class="phone"><a href="tel: +7 495 380 18 97">+7 495 380 18 97</a></span>
      </div>
    </div>