//start home page bloge slider 
$('.product-carousel').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: '<i class="arrow rightss iconslider">',
    prevArrow: '<i class="arrow leftss iconslider">',
    infinite: true,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true } },
  
  
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1 } },
  
  
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1 } }
  
  
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ] });
  //# sourceURL=pen.js
//   end homepage bloge product slider