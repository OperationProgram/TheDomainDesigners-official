$(document).ready(function(){
    $('.carousel').slick({
      autoplay: true, // Autoplay slides
      autoplaySpeed: 5000, // Autoplay speed in milliseconds (5 seconds)
      arrows: true, // Display navigation arrows
      dots: true, // Display navigation dots
      infinite: true, // Enable infinite loop
      speed: 500, // Slide transition speed in milliseconds (0.5 seconds)
      slidesToShow: 1, // Number of slides to show at a time
      slidesToScroll: 1 // Number of slides to scroll at a time
    });
  });