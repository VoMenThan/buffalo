
if ($(window).width() < 767) {
  $("#bottom-text-paragraph1, #bottom-text-paragraph2, #bottom-text-paragraph3, #bottom-text-paragraph4, #bottom-text-paragraph7, #bottom-text-paragraph8, #bottom-text-paragraph9, #bottom-text-paragraph10").fitText(2, { minFontSize: '14px', maxFontSize: '23px' });
}
else {
  $("#bottom-text-paragraph1, #bottom-text-paragraph2, #bottom-text-paragraph3, #bottom-text-paragraph4, #bottom-text-paragraph7, #bottom-text-paragraph8, #bottom-text-paragraph9, #bottom-text-paragraph10").fitText(2, { minFontSize: '18px', maxFontSize: '18px' });
}

$(window).resize(function () {
  if ($(window).width() < 767) {
    $("#bottom-text-paragraph1, #bottom-text-paragraph2, #bottom-text-paragraph3, #bottom-text-paragraph4, #bottom-text-paragraph7, #bottom-text-paragraph8, #bottom-text-paragraph9, #bottom-text-paragraph10").fitText(2, { minFontSize: '14px', maxFontSize: '23px' });
  }
  else {
    $("#bottom-text-paragraph1, #bottom-text-paragraph2, #bottom-text-paragraph3, #bottom-text-paragraph4, #bottom-text-paragraph7, #bottom-text-paragraph8, #bottom-text-paragraph9, #bottom-text-paragraph10").fitText(2, { minFontSize: '18px', maxFontSize: '18px' });
  }
});
