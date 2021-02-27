var owl = $('.owl-carousel');

$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    margin: 10,
    loop: true,
    items: 1,
    dotsContainer: '#carousel-custom-dots'
  });
});

$('.owl-dot').click(function () {
  owl.trigger('to.owl.carousel', [$(this).index(), 300]);
});
