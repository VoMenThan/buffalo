/**
  :inlineStyle filter

  An inline style selector filter.

  Usage:  $("div:inlineStyle(display:none)"); // returns any divs with display style set to none
          $("div:inlineStyle(width)");        // returns any divs with a width style set
          $("div:inlineStyle");               // returns any divs with an inline style set

  Written by Corban Brook @corban
*/
$.expr[':'].inlineStyle = function(element, index, meta) {
  var $element = $(element);
  var style = $element.attr("style");
  var match = meta[3];
  var matchSelector, matchValue, value;

  // Only interested in elements with an inline style set.
  if (!style || style === "") {
    return false;
  }

  if (match) {
    if (match.indexOf(":") > 0) {
      var pair = match.split(":");
      matchSelector = pair[0];
      matchValue = pair[1];
    } else {
      matchSelector = match;
    }

    value = element.style[matchSelector];

    if (typeof value === "undefined" || value === "") {
      return false;
    }

    // Match param given, make sure this style exists and check vs match value if specified
    return typeof matchValue !== "undefined" ? value === matchValue : true;
  } else {
    // No match param given, return true for elements which have any inline styles set
    return true;
  }
};