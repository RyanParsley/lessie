(function ($) {
  $('.screenshots .1').click(function() {
  $("#screenshot").attr("src", "/sites/default/files/screenshot1.jpg");
  return false;
});
$('.screenshots .2').click(function() {
  $("#screenshot").attr("src", "/sites/default/files/screenshot2.jpg");
  return false;
});
$('.screenshots .3').click(function() {
  $("#screenshot").attr("src", "/sites/default/files/screenshot3.jpg");
  return false;
});
}(jQuery));

