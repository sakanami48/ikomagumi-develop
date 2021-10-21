<!doctype html>
<html lang="ja">

<head>

  <?php
// basic認証・検索避け
// $userArray = array("improvide" => "impr0vide");
// basic_auth($userArray);
// echo '<meta name="robots" content="noindex,nofollow">';
?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">

  <!-- INFO -->
  <?php if (is_home()): ?> <title>サンプルサイト</title>
  <meta property="og:title" content="サンプルサイト">
  <meta name="twitter:title" content="サンプルサイト">
  <?php elseif (is_404()): ?>
  <title>404 Not found | サンプルサイト</title>
  <meta property="og:title" content="<?php "404 Not found" .
      " | サンプルサイト"; ?>">
  <meta name="twitter:title" content="<?php "404 Not found" .
      " | サンプルサイト"; ?>">
  <?php else: ?>
  <title><?php echo get_the_title(); ?> | サンプルサイト</title>
  <meta property="og:title" content="<?php echo get_the_title() .
      " | サンプルサイト"; ?>">
  <meta name="twitter:title" content="<?php echo get_the_title() .
      " | サンプルサイト"; ?>">
  <?php endif; ?>
  <meta name="keywords" content="" />
  <meta name="description" content="">

  <!-- OGP -->
  <meta property="og:description" content="">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/ogp.jpg">
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/ogp.jpg" />
  <meta property="og:url" content="<?php echo esc_url(home_url("/")); ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="サンプルサイト">
  <meta property="fb:app_id" content="">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="<?php echo esc_url(home_url("/")); ?>">
  <?php
/* <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/assets/img/common/apple-touch-icon.png"> */
?>

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">

  <!-- Yaku Han JP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanmp.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp-narrow.min.css">


  <!-- Adobe Fonts -->
  <script>
  (function(d) {
    var config = {
        kitId: 'ntq3ozn',
        scriptTimeout: 3000,
        async: true
      },
      h = d.documentElement,
      t = setTimeout(function() {
        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
      }, config.scriptTimeout),
      tk = d.createElement("script"),
      f = false,
      s = d.getElementsByTagName("script")[0],
      a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
      a = this.readyState;
      if (f || a && a != "complete" && a != "loaded") return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config)
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s)
  })(document);
  </script>