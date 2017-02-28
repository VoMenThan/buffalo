
!function ($, app) {
  // email coupon
  $('div.email-coupon-success').hide();
  $('p.error').hide();
  $('#email-coupon-submit').click(function () {

    //    $.post(window.location, $('#couponForm').serialize(), function (result) {
    //      // Do something with result?
    //      $('.article-title').hide();
    //      $('.article-copy').hide();
    //      $('div.email-coupon-success').css("display", "");
    //      $('.title-coupon-success').show();
    //      $('.copy-coupon-success').show();

    //    });

    $.post(window.location, $('#couponForm').serialize()).done(function (result) {
      $('.article-title').hide();
      $('.article-copy').hide();
      $('p.error').hide();
      $('div.email-coupon-success').css("display", "");
      $('.title-coupon-success').show();
      $('.copy-coupon-success').show();
    }).fail(function (result) {
      console.log('error submitting form');
      $('p.error').show();
    });

    return false;  // prevent actual form submission
  });

  // print coupon
  $('#print-coupon').click(function () {
    window.open($('#coupon-image').attr('src'), '_blank');
  });

} (jQuery, BuffaloWildWings)