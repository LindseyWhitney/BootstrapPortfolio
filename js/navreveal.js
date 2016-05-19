// Nav | Hide/Reveal Based on Scroll Location ========================================
// Reference: http://stackoverflow.com/questions/13549214/make-a-div-appear-when-scrolling-past-a-certain-point-of-a-page

// $(document).ready(function() {
//   $('.navbar-fixed-top').hide();
// });


window.addEventListener("scroll",function() {

   if(window.scrollY > 50) {
      $('.navbar-fixed-top').slideDown(1000);
      $('.navbar-fixed-top').removeClass('nav-up');

   }
   else {
      $('.navbar-fixed-top').slideUp(1000);
      $('.navbar-fixed-top').addClass('nav-up');
   }
},false);
