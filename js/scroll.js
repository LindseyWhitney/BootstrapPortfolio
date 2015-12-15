// Nav Hide/Reveal on Scroll -------------------------
// Reference: https://medium.com/@mariusc23/hide-header-on-scroll-down-show-on-scroll-up-67bbaae9a78c#.q84aykb9s

var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('nav').outerHeight();
var didScroll;

// on scroll, let the interval function know the user has scrolled
$(window).scroll(function(event){
  didScroll = true;
});
// run hasScrolled() and reset didScroll status
setInterval(function() {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);
function hasScrolled() {
  var st = $(this).scrollTop();

  if ( Math.abs(lastScrollTop - st) <= delta ) {
  return;
  }

  // If current position > last position AND scrolled past navbar...
  if (st > lastScrollTop){
  // Scroll Down
  $('nav').removeClass('nav-down').addClass('nav-up');
} else {
  // Scroll Up
  // If did not scroll past the document (possible on mac)...
  if(st + $(window).height() < $(document).height()) {
    $('nav').removeClass('nav-up').addClass('nav-down');
  }
}

lastScrollTop = st;

}
