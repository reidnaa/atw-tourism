jQuery(function($) {
  $("body").vegas({
    slides: [
      { src: login_images.theme_path + "/1.png" },
      { src: login_images.theme_path + "/2.png" },
      { src: login_images.theme_path + "/3.png" }
    ],
    delay: 7000,
    timer: false,
    shuffle: true,
    transition:'fade',
    firstTransition: "fade",
    //firstTransitionDuration: 5000,
    animation:'kenburnsDown',
    transitionDuration: 5000
  });
});
