"use strict";

$(document).ready(function () {
   
    /* Header Title Slick */
    $('.slick-wrap').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: false,
        responsive: [
          {
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
          }
        ]
      });

      /* Burger Menu */
  $('.burger').on('click', function(event){
    $('.share').toggleClass('share-active');
    $('.burger').toggleClass('burger-active');
  })
  if ($(window).width() <= 1024){
    $('.share').addClass('display');
  }

  $( window ).resize(function() {

    /* Burger Menu adaptive on resize */
    if($(window).width() > 576
      && $('.share').hasClass('display')
    ){
      $('.share').removeClass('display');
      $('.share').removeClass('share-active');
      $('.burger').removeClass('burger-active');
    } else if($(window).width() <= 576
      && !$('.share').hasClass('display')
    ){
      $('.share').addClass('display');
    }

    /* End resize */
  });

  var min = 1;
  var max = 60000;
  

  var selectFromVal = $( "#price-from" ).val();
  var selectToVal = $( "#price-to" ).val();

  /* Ui slider-range price*/
  var slider = $( "#slider-range" ).slider({
    range: true,
    min: min,
    max: max,
    values: [ 7, 45600 ],
    slide: function( event, ui ) {
      $( ".price-from").val(ui.values[ 0 ]);
      $( ".price-to").val(ui.values[ 1 ]);
    }
  });
  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    $('.toddler.ui-slider-horizontal span').eq(0).html('<i class="fas fa-chevron-left"></i>');
    $('.toddler.ui-slider-horizontal span').eq(1).html('<i class="fas fa-chevron-right"></i>');
          
    $( "#price-from" ).on( "change", function() {
      selectFromVal = $( "#price-from" ).val();
      selectToVal = $( "#price-to" ).val();
      slider.slider( "values", [selectFromVal , selectToVal] );
      
    });
    $( "#price-to" ).on( "change", function() {
      selectFromVal = $( "#price-from" ).val();
      selectToVal = $( "#price-to" ).val();
      slider.slider( "values", [selectFromVal , selectToVal] );
      
    });
    
    /* Card button */
    $('.btn_card').on('click', function () {
      $('.form-outer').toggleClass('form-active');
    })
    $('.form-close').on('click', function (event) {
      event.preventDefault();
      $('.form-outer').removeClass('form-active');
    })

    $('#slider-range').draggable();





})