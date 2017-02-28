!function ($, app) {

  var _openInterval = setInterval(checkForWingDay, 2000);
  var _closeInterval = -1;
  var _inactivityTimeout = -1;
  var _$modal = null;

  function checkForWingDay() {
    if (forceShowing() || (!userIsDoneSeeingWingDay() && isWingDay())) {
      clearInterval(_openInterval);
      showWingDay();
    }
  }

  function forceShowing() {
    return window.location.hash.indexOf("wingday") >= 0;
  }

  function isOnUsSite() {
    return window.location.href.toLowerCase().indexOf("/en-ca") < 0;
  }

  function isWingDay() {
    var now = new Date();

    var necessaryMinutesIn = (6 * 60) + 30; // 6:30 AM
    var actualMinutesIn = (now.getHours() * 60) + now.getMinutes();
    return now.getMonth() == 0 && now.getDate() == 29 && now.getFullYear() == 2017// && actualMinutesIn > necessaryMinutesIn;
  }

  function userIsDoneSeeingWingDay() {
    var cookie = $.cookie("userClosedWingDayModal");
    return cookie != null;
  }

  function showWingDay() {
    if (_$modal == null) {
      var $template = $('#js-national-wing-day-content');
      if ($template.length <= 0) {
        throw new Error("Unable to find the national wing day template!");
      }

      _$modal = $($template.text());
      _$modal.find('.js-close-button').on('click', onCloseSelected);
    }

    //var detailsLink = "http://www.buffalowildwings.com/en/National-Chicken-Wing-Day-US/";
    //var locationsLink = "http://www.buffalowildwings.com/en/locations/";
    //if (!isOnUsSite()) {
    //detailsLink = "http://www.buffalowildwings.com/en-CA/National-Chicken-Wing-Day-CA/";
    //locationsLink = "http://www.buffalowildwings.com/en-CA/locations";
    //}

    //var $detailsLink = _$modal.find('.js-details-link');
    //if ($detailsLink.length <= 0) {
    //throw new Error("Unable to find the details link in the wing day template.");
    //}
    //$detailsLink.attr('href', detailsLink);
    //$detailsLink.on('click', onCtaSelected);

    //var $locationsLink = _$modal.find('.js-locations-link');
    //if ($locationsLink.length <= 0) {
    //throw new Error("Unable to find the locations link in the wing day template.");
    //}
    //$locationsLink.attr('href', locationsLink);
    //$locationsLink.on('click', onCtaSelected);

    var $body = $('body');
    $body.prepend(_$modal);
    _$modal.slideDown({ complete: onModalSlideDownComplete });

    $('body').on('click', checkForOutsideModalClick);

    if (!forceShowing()) {
      _closeInterval = setInterval(checkForClose, 1000);
    }

    _inactivityTimeout = setTimeout(onCloseSelected, 30000);

    requestAnimationFrame(centerContentVertically);
    centerContentVertically();
  }

  function onModalSlideDownComplete() {
    _$modal.addClass('open');
    $('body').addClass('no-scroll');
  }

  function checkForOutsideModalClick(evt) {
    if (evt.pageY > _$modal.height()) { // If they clicked outside the modal, close it.
      onCloseSelected();
      return;
    }

    var $target = $(evt.target);
    if ($target.get(0) === _$modal.get(0)) {
      onCloseSelected();
      return;
    }

    resetInactivityTimeout();
  }

  function checkForClose() {
    if (!isWingDay()) {
      onCloseSelected();
    }
  }

  function resetInactivityTimeout() {
    clearTimeout(_inactivityTimeout);
    _inactivityTimeout = setTimeout(onCloseSelected, 120000);
  }

  function centerContentVertically() {
    if (_$modal != null) {
      if ($(window).width() < 768) {
        //_$modal.css('padding-top', '');
      }
      else {
        var $contentAreas = _$modal.find('.js-wing-day-content-area');
        var totalHeight = 0;
        for (var i = 0; i < $contentAreas.length; i++) {
          var $area = $($contentAreas.get(i));
          totalHeight += $area.height() - 155;
        }
      }

      requestAnimationFrame(centerContentVertically);
    }
  }

  function onCloseSelected() {
    setPreventionCookie();

    _$modal.removeClass('open');
    _$modal.slideUp({ complete: onModalSlideUpComplete });

    clearInterval(_closeInterval);
    clearTimeout(_inactivityTimeout);

    $('body').off('click', checkForOutsideModalClick);
    $('body').removeClass('no-scroll');
  }

  function setPreventionCookie() {
    $.cookie("userClosedWingDayModal", "1");
  }

  function onCtaSelected() {
    setPreventionCookie();
    return true;
  }

  function onModalSlideUpComplete() {
    _$modal.remove();
    _$modal = null;
  }
} (jQuery, BuffaloWildWings);
