window.viewportUnitsBuggyfill.init();

function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
        // Alternatively you could use:
        // (new Image()).src = this;
    });
}

jQuery(document).ready(function($) {

  var $body = $('html, body'),
  content = $('#main').smoothState({
    // Runs when a link has been activated
    prefetch: true,
    pageCacheSize: 4,
    onStart: {
      duration: 250, // Duration of our animation
      render: function (url, $container) {
        // toggleAnimationClass() is a public method
        // for restarting css animations with a class
        content.toggleAnimationClass('is-exiting');
        // Scroll user to the top
        $body.animate({
          scrollTop: 0
        });
        if (window.ga)
          {
              window.ga('send', 'pageview',
                  undefined !== window.location.pathname ? window.location.pathname : url);
          }
      }
    }
  }).data('smoothState');



  $('body').on('click', '.scroll-down', function (e) {
    e.preventDefault();
    $('html,body').animate({
      scrollTop: $(".section").offset().top},
      'slow');
  });

  $('body').on('click', '.about-links__item', function (e) {
    $(this).addClass('js-open').find('.about-links__color-block').css('z-index',5);
    var target = $(this).data('target');
    setTimeout(function(){
      $('#' + target). addClass('js-open');
    }, 500);
  });

  $('body').on('click', '.js-close', function (e) {
    $(this).parent().removeClass('js-open');
    setTimeout(function(){
      $('.about-links__item').removeClass('js-open');
    }, 500);
    setTimeout(function(){
      $('.about-links__color-block').css('z-index', '');
    }, 850);
  });

  preload([
      '/assets/images/min/brighton-pier.jpg',
      '/assets/images/min/ferris-wheel.jpg',
      '/assets/images/min/contact.jpg',
      '/assets/images/min/monument.jpg',
  ]);
});

function scrolling(){
  var header = $('.hero');
  var st = $(this).scrollTop();
  var offset = $(header).offset().top;
  var height = $(header).outerHeight();
  var opacity = ((st / height) * 0.5) + 0.3;

  $('#hero-overlay').css({ 'opacity': opacity});
  
}

$(window).scroll(function(){
   scrolling();
});

