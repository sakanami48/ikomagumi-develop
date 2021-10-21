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
          <p class="c-breadcrumb__item">お知らせ</p>
        </div>
      </div>
      <div class="c-pageHeader__txtArea">
        <h1 class="c-txtRolling c-headingLarge">
          <span class="c-txtRolling__txt">
            <span>お</span><span>知</span><span>ら</span><span>せ</span>
          </span>
        </h1>
      </div>
    </header>
    <div class="l-contents">
      <section class="l-sectionLarge">
        <div class="l-articleInner">
          <!-- この辺に追記 -->
        </div>
      </section>
    </div>
  </main>
  <?php include dirname(__FILE__) . "/parts/footer.php"; ?>
</body>
<?php wp_footer(); ?>

</html>