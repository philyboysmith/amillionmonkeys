// @codekit-prepend "vendor/jquery-1.10.1.min.js"

// @codekit-append "vendor/responsive-carousel.js"

// @codekit-append "vendor/responsive-carousel.keybd.js"

// @codekit-append "vendor/responsive-carousel.touch.js"

// @codekit-append "vendor/responsive-carousel.drag.js"

// @codekit-append "vendor/responsive-carousel.autoplay.js"

// @codekit-append "vendor/responsive-carousel.autoinit.js"

jQuery(document).ready(function($) {

    var iphone = 767,
    ipad = 768,
    desktop = 1024,
    mainNav = $('.l-header__menu'),
    windowWidth = $(window).width();

    // Toggle Navigation

    $('.menu-toggle').on( "click", function() {
    if($(mainNav).hasClass('visible')){
    $(mainNav).removeClass('visible').slideUp();
    } else {
    $(mainNav).addClass('visible').slideDown();
    }
    });

    $( window ).resize(function() {
      if(mainNav.is(':hidden') && $(window).width() >= ipad){
      mainNav.show();
      }
      if(mainNav.is(':visible') && $(window).width() < ipad){
      mainNav.hide();
      }
    });

    // Add visible class to bracket blocks

    if ($('.bracket-block--with-hover').length>0) {

        var bracketBlock = $('.bracket-block--with-hover');
        $(bracketBlock).hover(function(){
        console.log('Testing console');
      $(this).addClass('bracket-block--with-hover--is-active');
      },function(){
      $(this).removeClass('bracket-block--with-hover--is-active');
    });
    }

    // Make accordians work

    var allTerms = $('.accordion > dt');
    var allPanels = $('.accordion > dd').hide();

      $('.accordion > dt > a').click(function() {
          $this = $(this);
          $target =  $this.parent().next();
          if(!$this.parent().hasClass('is-open')){
            allTerms.removeClass('is-open');
            $this.parent().addClass('is-open');
            if(!$target.hasClass('active')){
               allPanels.removeClass('active').slideUp();
               $target.addClass('active').slideDown();
            }
          } else {
            allTerms.removeClass('is-open');
            allPanels.removeClass('active').slideUp();
          }



        return false;
      });

      // Add rule after each row of solutions ( Hidden using media queries)


      $('<hr>').insertAfter('.l-bracket-block-list--solutions ul li:nth-child(3n)');


      equalheight = function(container){

      var currentTallest = 0,
           currentRowStart = 0,
           rowDivs = new Array(),
           $el,
           topPosition = 0;
       $(container).each(function() {

         $el = $(this);
         $($el).height('auto')
         topPostion = $el.position().top;

         if (currentRowStart != topPostion) {
           for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
             rowDivs[currentDiv].height(currentTallest);
           }
           rowDivs.length = 0; // empty the array
           currentRowStart = topPostion;
           currentTallest = $el.height();
           rowDivs.push($el);
         } else {
           rowDivs.push($el);
           currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
         for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
           rowDivs[currentDiv].height(currentTallest);
         }
       });
      }

      $(window).load(function() {
        equalheight('.l-bracket-block-list li');
        equalheight('.l-article-footer .widget');
        $('.l-bracket-block-list').addClass('loaded');
      });


      $(window).resize(function(){
        equalheight('.l-bracket-block-list li');
        equalheight('.l-article-footer .widget')

      });


});
