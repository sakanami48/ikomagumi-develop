<?php include dirname(__FILE__) . "/parts/head.php"; ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css"
  integrity="sha512-nSomje7hTV0g6A5X/lEZq8koYb5XZtrWD7GU2+aIJD35CePx89oxSM+S7k3hqNSpHajFbtmrjavZFxSEfl6pQA=="
  crossorigin="anonymous" />
<noscript>

</noscript>
</head>

<body>
  <?php include dirname(__FILE__) . "/parts/globalNav-front.php"; ?>
  <h1 class="c-hiddenTxt">株式会社生駒組</h1>
  <main class="l-body">
    <section class="l-sectionLarge">
      <header id="KV" class="p-frontKV">
        <p class="p-frontKV__firstCopy">
          まちの明日を、<br>
          建てている。
        </p>
        <div class="p-frontKV__contents">
          <div class="p-frontKV__lead">
            <div class="p-frontKV__leadTxt">
              <p class="p-frontKV__leadHead">
                まちの明日を、<br>
                建てている。
              </p>
              <p class="p-frontKV__leadCopy">
                技術を磨き、人を育てる。<br>
                建設という専門分野で、<br>
                地域の発展に貢献します。
              </p>
            </div>
          </div>
          <div class="p-frontKV__visual">
            <div class="p-frontKV__kv"></div>
          </div>
        </div>
      </header>
    </section>
    <section class="l-sectionLarge">
      <section class="l-sectionSmall">
        <div id="js-performances" class="p-frontPageWorks swiper-container">
          <div class="swiper-wrapper">
            <?php
            $args = [
                "post_type" => "works",
                "posts_per_page" => "6",
                "post_status" => "publish",
                "has_password" => false,
            ];
            $works = new WP_Query($args);
            if ($works->have_posts()):
                while ($works->have_posts()):
                    $works->the_post();
                    // $post_id = $post->ID;
                    // $terms = get_the_terms($post_id, "news_category");
                    ?>
            <section class="p-frontPageWorks__section swiper-slide">
              <figure class="p-frontPageWorks__figure">
                <img src="https://placehold.jp/240x160.png" alt="" class="p-frontPageWorks__img">
              </figure>
              <div class="p-frontPageWorks__txtArea">
                <header class="p-frontPageWorks__header">
                  <h2 class="c-headingSmall"><?php the_title(); ?></h2>
                </header>
                <p>
                  <?php the_content(); ?>
                </p>
                <div class="p-frontPageWorks__buttonArea">
                  <a class="p-frontPageWorks__button" href="<?php the_permalink(); ?>">詳しく見る</a>
                </div>
              </div>
            </section>
            <?php
                endwhile;
            endif;
            ?>
          </div>
        </div>
      </section>
      <div class="l-sectionSmall" style="text-align: center;">
        <a class="c-button" href="<?php echo esc_url(
            home_url("/works")
        ); ?>">事業実績一覧</a>
      </div>
    </section>
  </main>
  <?php include dirname(__FILE__) . "/parts/footer.php"; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"
    integrity="sha512-ZHauUc/vByS6JUz/Hl1o8s2kd4QJVLAbkz8clgjtbKUJT+AG1c735aMtVLJftKQYo+LD62QryvoNa+uqy+rCHQ=="
    crossorigin="anonymous"></script>
  <script type="text/javascript" async>
  {
    let smallMaps = new Swiper('#js-performances', {
      // PC parameters
      centeredSlides: true,
      loop: true,
      slidesPerView: 2,
      spaceBetween: 32,

      // SP parameters
      // breakpoints: {
      //   560: {
      //     centeredSlides: false,
      //     loop: true,
      //     loopedSlides: 2,
      //     slidesPerView: 1.1,
      //     spaceBetween: 16
      //   }
      // }
    });

    jQuery(window).on('load', function() {
      jQuery('body').addClass('is-show');
    });
  }
  </script>
</body>
<?php wp_footer(); ?>

</html>