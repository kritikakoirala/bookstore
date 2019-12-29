$(document).ready(function() {
  // owl-carousel
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    items:4,
    navText : ['<i class="fas fa-chevron-left" aria-hidden="true"></i>','<i class="fas fa-chevron-right" aria-hidden="true"></i>'],   
    responsive:{
      0:{
        items:1,
        nav:false
      },
      560:{
        items:2,
        nav:false
      },
      768:{
        items:3,
        nav:true
      },
      992:{
        items:4,
        nav:true
      }
      
    }
  });

//slider range
  $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 753,
    values: [80, 320],
    slide: function(event, ui) {
      $("#amount").val("£" + ui.values[0] + " - £" + ui.values[1]);
       }
    });

    $("#amount").val("£" + $("#slider-range").slider("values", 0) +
  " - £" + $("#slider-range").slider("values", 1));
});



 