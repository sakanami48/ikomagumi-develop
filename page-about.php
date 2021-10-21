<?php
/*
 * Template Name: about
 * 
 */
?>
<?php include dirname(__FILE__) . "/parts/head.php"; ?>
<?php wp_head(); ?>
</head>

<body>
  <?php include dirname(__FILE__) . "/parts/globalNav.php"; ?>
  <main class="l-body">
    <header class="c-pageHeader">
      <div class="c-pageHeader__breadcrumb">
        <div class="c-breadcrumb">
          <a href="<?php echo esc_url(
              home_url("/")
          ); ?>" class="c-breadcrumb__item">TOP</a>
          <p class="c-breadcrumb__item">私たちについて</p>
        </div>
      </div>
    </header>

    <section class="l-sectionLarge">
      <!-- この辺にコンセプト -->
    </section>

    <section class="l-sectionLarge">
      <div class="l-articleInner">
        <section class="l-sectionLarge">
          <header class="l-sectionHeader">
            <div class="c-header">
              <h2 class="c-header__heading">事業ジャンルと仕事の流れ</h2>
            </div>
          </header>
          <div class="l-sectionMedium">
            <p class="c-headingSmall">
              地域のインフラを支える〜
            </p>
          </div>
          <div class="l-sectionMedium">
            <div class="c-figBlock">
              <section class="l-sectionSmall">
                <header class="l-sectionHeader --small">
                  <h3 class="c-headingSmall">仕事の流れ</h3>
                </header>
                <p>
                  私たちは土木工事の中で〜
                </p>
              </section>
              <div class="l-sectionSmall">
                <img src="https://placehold.jp/600x160.png" alt="" class="c-figBlock__img">
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
  </main>
  <?php include dirname(__FILE__) . "/parts/footer.php"; ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/showAccordion.js"></script>
</body>
<?php wp_footer(); ?>

</html>