<?php get_header(); ?>
    <header class="header-blog">
    <div class="background"></div>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 prewie">
            <h1>«<?php the_title(); ?>»</h1>
            <p></p>
          </div>
        </div>
      </div>
    </header>
    <section class="content">
      <div class="container inner">
        <div class="row">
          <div class="col-md-12">
            <?
            global $more;
            $more = 0; 
            if (have_posts()) : while (have_posts()) : the_post();
            the_content("Read more");
            endwhile;
            endif;
            ?>
            <hr>
            <div class="content-bottom">
              <div class="button-area">
                 <a href="/"><button class="btn btn-default">На главную</button></a>
                <a target="blank" href="https://www.facebook.com/sharer.php?u=<?php bloginfo('url'); echo $_SERVER["REQUEST_URI"] ?>"><button class="btn facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i> <span>Поделиться на Facebook</span></button></a>
                <a target="blank" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php bloginfo('url'); echo $_SERVER["REQUEST_URI"] ?>"><button class="btn twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i> <span>Поделиться на Twitter</span></button></a>
              </div>
              <form action="" class="form">
                <h4 class="text-center">Задать вопрос</h4>
                <?php echo do_shortcode('[contact-form-7 id="59" title="Задать вопрос"]'); ?>
                <div class="checkbox-area">
                  <span class="checkbox-butt">
                    <input type="checkbox">
                    <i class="fa fa-square-o" aria-hidden="true"></i>
                    <!-- <i class="fa fa-check-square-o" aria-hidden="true"></i> -->
                  </span>
                  <span class="text">Я согласен <a href="#">с условиями конфиденциальности</a></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- instagram -->
    <section id="instagram">
      <div class="item" style="width: 20%; float: left;">
        <img src="<?php bloginfo('template_url'); ?>/img/about-products.jpg" alt="" style="width: 100%; height: auto;">
      </div>
       <div class="item" style="width: 20%; float: left;">
        <img src="<?php bloginfo('template_url'); ?>/img/about-products-2.jpg" alt="" style="width: 100%; height: auto;">
      </div>
       <div class="item" style="width: 20%; float: left;">
        <img src="<?php bloginfo('template_url'); ?>/img/about-products-3.jpg" alt="" style="width: 100%; height: auto;">
      </div>
       <div class="item" style="width: 20%; float: left;">
        <img src="<?php bloginfo('template_url'); ?>/img/about-products-1.jpg" alt="" style="width: 100%; height: auto;">
      </div>
       <div class="item" style="width: 20%; float: left;">
        <img src="<?php bloginfo('template_url'); ?>/img/about-products.jpg" alt="" style="width: 100%; height: auto;">
      </div>
      <div class="clearfix"></div>
    </section>
    <!-- END instagram -->
<?php get_footer(); ?>   