{
  const mqList = {
    sp: matchMedia('screen and (max-width: 560px)'), // 画面サイズが560まで
    pc: matchMedia('screen and (max-width: 960px)'), // 画面サイズが960まで
  };
  function setMargin() {
    jQuery('.js-accordion-target').each(function (index, element) {
      jQuery(element).css('margin-top', function () {
        return '-' + jQuery(element).outerHeight() + 'px';
      });
    });
  }
  jQuery(document).ready(function () {
    setMargin();
    mqList.sp.addListener(setMargin);
    mqList.pc.addListener(setMargin);
    jQuery('.js-accordion .js-accordion-btn').each(function (index, element) {
      jQuery(element).click(function () {
        const parent = jQuery(this).parent();
        const target = parent.find('.js-accordion-target');
        target.toggleClass('is-show');
        parent.toggleClass('is-show');
      });
    });
  });
}
