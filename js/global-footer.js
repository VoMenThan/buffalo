!function ($, app, modernizr) {
  app._debug = 1; // Debugging should be set to 0 for production.
  if (!app._debug) {
    console.log = $.noop;
  }

  // Initialize breakpoints for template modules
  if (app.HeroSlideshow || app.SaucySlider) {
    $(window).load(function () {
      setTimeout(docReady, 100); // Sadly, the timeout seems to help.
    })
  }
  else {
    if (!app.Core.isOldIE) { // jQuery docReady has been inconsistent in old IE
      $(docReady);
    }
    else {
      docReady();
    }
  }

  function docReady() {
    app.ResponsiveBreakpoints.trigger_event();

    $('input, textarea').placeholder();

    waitForFaceBookToExistThenAddTracking();
    addDoubleClickEvents();

    if (!modernizr.textshadow) {
      applyTextShadows();
    }

    if (!Modernizr.svg) { // Swap SVG CMS content with PNGs
      swapSvgWithPng();
    }

    if (!app.Core.isIE && !Modernizr.svg) { // Swap SVG CSS with PNGs. We already built out IE, so we're avoiding it here.
      insertSvgFallbackCSS();
    }

    if (app.Core.isIE) { // Additional IE JS Hacks
      resolveOptionElementDimensions();
    }

    if (app.Core.isIE7) { // This solves a very annoying layout issue in IE7 quickly. The IE7 items should be moved to oldie.js
      fixIe7LayoutIssues();
    }
  }

  function fixIe7LayoutIssues() {
    $('.landing-item-anchor').each(function (i, el) {
      var $el, $newEl;
      $el = $(el);
      $newEl = $el.clone().empty();
      $newEl.addClass('ie-landing-item-anchor');
      $(el).after($newEl);
    });


    $('#flexContainer .slide a').each(function (i, el) {
      var $el, $newEl;
      $el = $(el);
      $newEl = $el.clone().empty();
      $newEl.addClass('ie-home-item-anchor');
      $(el).after($newEl);
    });
  }

  function waitForFaceBookToExistThenAddTracking() {
    if (typeof FB == 'undefined') {
      setTimeout(waitForFaceBookToExistThenAddTracking, 250);
    }
    else {
      addFacebookTracking();
    }
  }

  function addFacebookTracking() {
    FB.Event.subscribe('edge.create', function (response) { $('#connectFacebook').trigger('send-analytics'); });
  }

  function addDoubleClickEvents() {
    $('#myBDubs').on('click.double-click', '.store-detail-link', trackStoreDetail);
    $('#myBDubs').on('click.double-click', '#getDirections', trackGetDirections);
    $('#myBDubs').on('click.double-click', '#orderOnline', trackOrderOnline);

    $('#bwwHeadLocator').on('click.double-click', '#findABDubsLabel', trackFindBdubs);
    $('#bwwHeadLocator').on('click.double-click', '#findABDubsSubmit', trackFindBdubs);

    $('.social-bar').on('click.double-click', '.facebook', trackFacebook);
    $('.social-bar').on('click.double-click', '.twitter', trackTwitter);
    $('.social-bar').on('click.double-click', '.youtube', trackYoutube);
  }

  function trackStoreDetail() {
    var click1 = new Image();
    var axel = Math.random() + "";
    var ord = axel * 1000000000000000000;
    click1.src = 'http://ad.doubleclick.net/activity;src=3300547;type=nearb303;cat=buffa850;ord=' + ord + '?';
  }

  function trackGetDirections() {
    var click1 = new Image();
    var axel = Math.random() + "";
    var ord = axel * 1000000000000000000;
    click1.src = 'http://ad.doubleclick.net/activity;src=3300547;type=getdi481;cat=buffa503;ord=' + ord + '?';
  }

  function trackOrderOnline() {
    var click1 = new Image();
    var axel = Math.random() + "";
    var ord = axel * 1000000000000000000;
    click1.src = 'http://ad.doubleclick.net/activity;src=3300547;type=order520;cat=buffa916;ord=' + ord + '?';
  }

  function trackFindBdubs() {
    var click1 = new Image();
    var axel = Math.random() + "";
    var ord = axel * 1000000000000000000;
    click1.src = 'http://ad.doubleclick.net/activity;src=3300547;type=finda945;cat=buffa552;ord=' + ord + '?';
  }

  function trackFacebook() {
    var click1 = new Image();
    var axel = Math.random() + "";
    var ord = axel * 1000000000000000000;
    click1.src = 'http://ad.doubleclick.net/activity;src=3300547;type=faceb920;cat=buffa467;ord=' + ord + '?';
  }

  function trackTwitter() {
    var click1 = new Image();
    var axel = Math.random() + "";
    var ord = axel * 1000000000000000000;
    click1.src = 'http://ad.doubleclick.net/activity;src=3300547;type=twitt347;cat=buffa905;ord=' + ord + '?';
  }

  function trackYoutube() {
    var click1 = new Image();
    var axel = Math.random() + "";
    var ord = axel * 1000000000000000000;
    click1.src = 'http://ad.doubleclick.net/activity;src=3300547;type=youtu925;cat=buffa692;ord=' + ord + '?';
  }

  function applyTextShadows() {
    var fakeTextShadowSelection = [
      '.hero-container h1',
      '.hero-container p',
      '.promo-container h1',
      '.promo-container p',
      '.flexslider-overlay-text h1',
      '.flexslider-overlay-text p',
      '.landing-item h2',
      '.item-hero-container h4'
    ].join(", ");

    $(fakeTextShadowSelection).addTextShadows();
    $('.menu-container h2').addTextShadows({
      shadowDistance: 1
    });
  }

  function swapSvgWithPng() {
    $('[data-svg-png]').each(function (i, el) {
      $el = $(el);
      $el.attr('src', $el.data('svgPng'));
    });
  }

  function insertSvgFallbackCSS() {
    var svgFallbackStylesheet = $("<link>");
    svgFallbackStylesheet.attr({
      type: 'text/css',
      rel: 'stylesheet',
      href: '/public/stylesheets/svgFallbacks.css?rdm=' + new Date().getTime()
    });
    $('head').append(svgFallbackStylesheet);
  }

  function resolveOptionElementDimensions() {
    $('select').each(function () {
      if ($(this).attr('multiple') == false) {
        $(this).mousedown(function () {
          if ($(this).css("width") != "auto") {
            var width = $(this).width();
            $(this).data("origWidth", $(this).css("width")).css("width", "auto");
            if ($(this).width() < width) { // If the width is now less than before then undo
              $(this).unbind('mousedown');
              $(this).css("width", $(this).data("origWidth"));
            }
          }
        })
          .blur(function () { // Handle blur if the user does not change the value
            $(this).css("width", $(this).data("origWidth"))
          })
          .change(function () { // Handle change of the user does change the value
            $(this).css("width", $(this).data("origWidth"))
          });
      }
    });
  }

  function replaceTrademarksWithRBalls() {
    var module = new TextReplaceModule();
    module.replaceAllText("&trade;", "&reg;");
    module.replaceAllText("™", "®");
  }
} (jQuery, BuffaloWildWings, Modernizr);