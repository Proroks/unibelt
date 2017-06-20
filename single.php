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
              <div class="form">
                <h4 class="text-center">Задать вопрос</h4>
                <?php echo do_shortcode('[contact-form-7 id="59" title="Задать вопрос"]'); ?>
<!--
                <div class="checkbox-area">
                  <span class="checkbox-butt">
                    <input type="checkbox">
                    <i class="fa fa-square-o" aria-hidden="true"></i>
                  </span>
                  <span class="text">Я согласен <a href="#">с условиями конфиденциальности</a></span>
                </div>
-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="more">
      <div class="container">
        <div class="row">
          <h4 class="text-center">Больше статей по теме</h4>
          <div class="clearfix"></div>
          <?php
            if ( have_posts() ) : // если имеются записи в блоге.
                query_posts(array( 'posts_per_page' => 3, 'cat' => 4 ) );
                while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
            ?>
              <div class="col-md-4 col-sm-4 item">
                <div class="inner">
                  <?php the_post_thumbnail( 'full-img' ); ?>
                  <div class="text">
                    <span class="date"><?php echo get_the_date('m-d-Y'); ?></span>
                    <h5><?php the_title(); ?></h5>
                    <a href="<?php the_permalink(); ?>">Читать подробнее</a>
                  </div>
                </div>
              </div>   
            <?php
            endwhile;
            endif;            
            ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>   