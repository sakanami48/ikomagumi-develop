{
  function judgePcWidth() {
    const mq = matchMedia('screen and (min-width: 960px)');
    if (mq.matches) {
      // PCサイズならTRUE
      if (window.innerWidth < 960) {
        return false;
      } else {
        return true;
      }
    }
  }
  // 記事詳細非表示
  function hiddenArticle() {
    jQuery('#js-close').click(function () {
      let mask = document.querySelector('.js-mask');
      mask.classList.add('is-close');
      async function waitAnim() {
        await new Promise(function (resolve) {
          return setTimeout(resolve, 400);
        });
        jQuery('#js-article').removeClass('is-show');
      }
      waitAnim().then(function () {
        mask.classList.remove('is-close');
      });
    });
  }
  // アクティブな記事の切り替え
  function changeActiveSingle() {
    jQuery('.js-click').on('click', function () {
      jQuery('.js-click').removeClass('is-active');
      jQuery(this).addClass('is-active');
    });
  }
  // 記事詳細表示
  function showArticle() {
    let mask = document.querySelector('.js-mask');
    mask.classList.add('is-close');
    async function waitAnim() {
      await new Promise(function (resolve) {
        return setTimeout(resolve, 400);
      });
      jQuery('#js-article').addClass('is-show');
    }
    waitAnim().then(function () {
      mask.classList.remove('is-close');
    });
  }
  // TOPへスクロール
  function goTop() {
    async function waitAnim() {
      await new Promise(function (resolve) {
        return setTimeout(resolve, 400);
      });
    }
    waitAnim().then(function () {
      // console.log('go top');
      window.scrollTo({
        top: 0,
        behavior: 'smooth',
      });
    });
  }

  // 現在と同じページのリンクをクリックした場合、リロードをしない設定(オプション)
  // リロードしたい場合は削除してOKです。
  const links = document.querySelectorAll('a[href]');
  const cbk = function (e) {
    if (e.currentTarget.href === window.location.href) {
      if (!judgePcWidth()) {
        showArticle();
        goTop();
      }
      e.stopPropagation();
      e.preventDefault();
    }
  };
  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', cbk);
  }

  // ページ遷移時のマスクアニメーション
  let mask = document.querySelector('.js-mask');
  barba.init({
    transitions: [
      {
        async leave() {
          mask.classList.add('is-close');
          await new Promise(function (resolve) {
            return setTimeout(resolve, 400);
          });
          jQuery('#js-article').addClass('is-show');
        },
        enter() {
          mask.classList.remove('is-close');
        },
      },
    ],
    views: [
      {
        namespace: 'single',
        beforeEnter() {
          hiddenArticle();
          changeActiveSingle();
        },
      },
      {
        namespace: 'archive',
        beforeEnter() {
          hiddenArticle();
          changeActiveSingle();
        },
      },
    ],
    debug: true,
  });

  // ページ遷移時に最上部へスクロール
  // beforeの他にも、enterなど他にもタイミング指定可
  barba.hooks.before(function () {
    goTop();
  });
  barba.hooks.enter(function () {
    jQuery('#js-article').addClass('is-show');
  });

  barba.hooks.beforeOnce(function () {
    // console.log('global after');
    // let jscrollOption = {
    //   nextSelector: 'a.js-scrollnext:last',
    // };
    // jQuery('.js-scroll').jscroll(jscrollOption);
  });
}
