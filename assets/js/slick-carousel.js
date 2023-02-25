jQuery(document).ready(function($) {
  $('.slick-carousel').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    cssEase: 'linear',
    prevArrow: '<button type="button" class="slick-prev">Previous</button>',
    nextArrow: '<button type="button" class="slick-next">Next</button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });

  $('.slick-carousel-single-blog').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    cssEase: 'linear',
    prevArrow: '<button type="button" class="slick-prev">Previous</button>',
    nextArrow: '<button type="button" class="slick-next">Next</button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });

  // Adiciona margem entre os slides
  $('.slick-slide').css('margin-right', '12px');
  $('.slick-slide').css('margin-left', '12px');
});
  