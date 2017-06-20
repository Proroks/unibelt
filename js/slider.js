$(document).ready(function() {
$('#instagram').magnificPopup({
      delegate: 'a',
      type: 'image',
      closeOnContentClick: false,
      closeBtnInside: false,
      mainClass: 'mfp-with-zoom mfp-img-mobile',
      gallery: {
       enabled: true
      },
      zoom: {
       enabled: true,
       duration: 300
      }
});
    
    $('#instagram').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      dots: false,
      responsive: [
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
       {
        breakpoint: 720,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      }
      ]
    });
});

