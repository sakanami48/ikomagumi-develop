<?php
/*
Template Name: 404
*/
?>

<?php include dirname(__FILE__) . '/parts/head.php' ?>
<?php wp_head(); ?>
</head>

<body>
  <?php include dirname(__FILE__) . '/parts/globalNav.php' ?>
  <main>
    <header class="l-marginFirstView">
      <div class="c-commonFirstView c-commonFirstView--small">
        <div class="c-commonFirstView__headingArea">
          <h2 class="c-commonFirstView__heading">404 ERROR</h2>
          <div class="c-commonFirstView__subHeading">
            <p class="c-headingSmall">ページが見つかりません</p>
          </div>
        </div>
      </div>
    </header>
    <article class="p-404">
      <header class="p-404__intro">
        <p class="c-headingSmall">
          お探しのページが見つかりませんでした。<br>
          一時的にアクセスできない状態になっているか、<br>
          移動または削除された可能性があります。
        </p>
      </header>

    </article>
  </main>
  <?php include dirname(__FILE__) . '/parts/footer.php' ?>
  <?php wp_footer(); ?>
</body>

</html>