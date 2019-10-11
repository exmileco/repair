var $window = $(window);
var $elem = $(".step__image");

function isScrolledIntoView($elem, $window) {
  var docViewTop = $window.scrollTop();
  var docViewBottom = docViewTop + $window.height();

  var elemTop = $elem.offset().top;
  var elemBottom = elemTop + $elem.height();

  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
$(document).ready(function () {
  $(document).on("scroll", function () {
    if (isScrolledIntoView($elem, $window)) {
      $elem.addClass("step__image--animate");
    }
  });
});