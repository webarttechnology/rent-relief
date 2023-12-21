$(document).ready(function() {
    $(window).scroll(function() {
      var scrollTop = $(this).scrollTop();
  
      // Check if scroll position is not at the top
      if (scrollTop > 0) {
        // Add a class when scrolled down
        $('header').addClass('bg-white');
      } else {
        // Remove the class when at the top
        $('header').removeClass('bg-white');
      }
    });
  });

