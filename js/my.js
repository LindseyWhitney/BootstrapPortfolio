// Fade text in and Out on cover






// JavaScript for Icon Animation on Scroll -------------------------
// Reference: http://www.sitepoint.com/scroll-based-animations-jquery-css3/#scroll-animation-examples

var animateEye = new Vivus('draweye');
var animateBulb = new Vivus('drawbulb');
var animateComp = new Vivus('drawcomp');

var drawNow = function (animation) {
	animation
		.reset()
		.play(2)
};


var $animation_elements = $('#draweye');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {

				if ($element.hasClass('go')) {
					return drawNow(animateEye);
	        $element.removeClass('go');

					return drawNow(animateBulb);
	        $element.removeClass('go');

					return drawNow(animateComp);
	        $element.removeClass('go');
				}

    } else {
      //$element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');




// Smooth scrolling on anchor tags -------------------------
// Reference: https://css-tricks.com/snippets/jquery/smooth-scrolling/

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
