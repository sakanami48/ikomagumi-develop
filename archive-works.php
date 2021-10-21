<?php include dirname(__FILE__) . '/parts/head.php'; ?>
<?php wp_head(); ?>
</head>

<body data-barba="wrapper">
  <?php include dirname(__FILE__) . '/parts/globalNav.php'; ?>
  <main>
    <header class="c-pageHeader">
      <div class="c-pageHeader__breadcrumb">
        <div class="c-breadcrumb">
          <a href="#" class="c-breadcrumb__item">TOP</a>
          <a href="#" class="c-breadcrumb__item">事業について「事業実績」</a>
        </div>
      </div>
      <div class="c-pageHeader__txtArea">
        <h1 class="c-headingLarge">事業実績</h1>
      </div>
    </header>
    <div class="p-single">
      <div class="p-single__archives">
        <header class="p-single__header">
          <div class="p-single__categories">
            <a href="<?php echo esc_url(
                home_url('/works')
            ); ?>" class="p-single__category" data-barba-prevent>すべて</a>
            <?php
            $args = [
                'hide_empty' => false,
            ];
            $terms = get_terms('works_cat', $args);
            // var_dump($terms);
            foreach ($terms as $term): ?>
            <a href="
            <?php echo get_term_link(
                $term
            ); ?>" class="p-single__category" data-barba-prevent><?php echo $term->name; ?></a>
            <?php endforeach;
            ?>
          </div>
        </header>
        <div class="p-single__archive">
          <div class="p-single__sections">
            <?php
            $args = [
                'post_type' => 'works',
                'posts_per_page' => '6',
                'paged' => get_query_var('paged', 1),
                'post_status' => 'publish',
                'has_password' => false,
            ];
            $works = new WP_Query($args);
            if ($works->have_posts()):
                while ($works->have_posts()):

                    $works->the_post();
                    $num++;

                    // $post_id = $post->ID;
                    // $terms = get_the_terms($post_id, "news_category");
                    ?>
            <section class="p-single__section">
              <a class="p-single__link js-click  <?php if ($num == 1) {
                  echo 'is-active';
              } ?>" href="<?php the_permalink(); ?>">
                <div class="p-single__sectionContents">
                  <figure class="p-single__sectionFigure"
                    style="background-image: url(https://placehold.jp/400x200.png);">
                    <p class="p-single__sectionCaption c-tag">道路</p>
                  </figure>
                  <div class="p-single__sectionTxtArea">
                    <header class="p-single__sectionHeader">
                      <time class="p-single__sectionDate"><?php the_time(
                          'Y.n.d'
                      ); ?></time>
                      <p class="p-frontPageContetns__status">工事完了</p>
                    </header>
                    <h2 class="c-headingMedium"><?php the_title(); ?></h2>
                  </div>
                </div>
              </a>
            </section>
            <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
          </div>
          <?php if (function_exists('pagenation')) {
              pagenation($max_pages, 5);
          } ?>
        </div>
      </div>

      <article class="p-single__article">
        <div id="js-article" class="p-single__articleContents">
          <section data-barba="container" data-barba-namespace="archive">
            <header class="p-single__articleHeader">
              <h1 class="c-headingLarge"><?php the_title(); ?></h1>
              <div class="p-single__articleInfo">
                <p class="p-single__articleCategory c-tag" data-barba-prevent>道路</p>
                <p class="p-single__articleStatus">工事完了日</p>
                <time class="p-single__articleDate">
                  <?php the_time('Y.n.d'); ?>
                </time>
              </div>
            </header>
            <section class="p-single__contents">
              <div class="p-singleArticle">
                <h2 class="p-singleHeading">工事担当者から</h2>
                <div class="p-singleComment">
                  <div class="p-singleComment__figArea">
                    <figure class="p-singleComment__fig">
                      <img src="https://placehold.jp/150x150.png" alt="" class="p-singleComment__img">
                    </figure>
                    <p class="p-singleComment__role">総括監督員</p>
                    <p class="p-singleComment__name">
                      土木部部署<br>
                      田中太郎
                    </p>
                  </div>
                  <p class="p-singleComment__txt">
                    この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                  </p>
                </div>

                <div class="p-singleFig2col">
                  <figure class="p-singleFig2col__figure">
                    <img src="https://placehold.jp/400x300.png" alt="" class="p-singleFig2col__img">
                    <figcaption class="p-singleFig2col__caption">
                      この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                    </figcaption>
                  </figure>
                  <figure class="p-singleFig2col__figure">
                    <img src="https://placehold.jp/400x300.png" alt="" class="p-singleFig2col__img">
                    <figcaption class="p-singleFig2col__caption">
                      この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                    </figcaption>
                  </figure>
                </div>

                <h2 class="p-singleHeading">工事完成写真</h2>
                <div class="p-singleFig">
                  <img src="https://placehold.jp/400x300.png" alt="" class="p-singleFig__img">
                </div>

                <h2 class="p-singleHeading">工事概要</h2>
                <dl class="p-singleTable">
                  <dt class="p-singleTable__heading">工事名</dt>
                  <dd class="p-singleTable__data">ペーパン川 災害復旧緊急工事外4工区</dd>
                  <dt class="p-singleTable__heading">工事場所</dt>
                  <dd class="p-singleTable__data">旭川市 東旭川町豊田</dd>
                  <dt class="p-singleTable__heading">工期</dt>
                  <dd class="p-singleTable__data">自 令和2年 10月7日／至 令和3年 3月26日</dd>
                </dl>

              </div>
            </section>
          </section>
        </div>
        <div class="js-mask"></div>
      </article>
    </div>

  </main>
  <?php include dirname(__FILE__) . '/parts/footer.php'; ?>
  <script src="//unpkg.com/jscroll/dist/jquery.jscroll.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
  <script src="<?php echo esc_url(
      get_template_directory_uri()
  ); ?>/assets/js/barbaCustom.js"></script>

</body>
<?php wp_footer(); ?>

</html>