/***** SPLASH FULL *****/
function splashFull(){
  var browserHeight = $(window).height();
  var browserWidth = $(window).width();
  var navbarHeight = $("nav").height();

$("section.splash").css({"padding-top": navbarHeight + "px"});

if(browserWidth > 768){ 
  $("section.splash").css({"height": browserHeight - navbarHeight + "px"});
  } else{
    $("section.splash").css({"height": "auto"});
  }
}
splashFull();

/***** PAGE HEADER *****/
function pageHeader(){
  var navbarHeight = $("nav").height();
  $("header.page-header").css({"padding-top": navbarHeight + 50 + "px"})
}
pageHeader();

/***** STICKY NAVBAR *****/
$(window).scroll(function(){
  function stickyNavbar(){
    var browserScroll = $(window).scrollTop();
    if(browserScroll > 100){
      $("nav").css({"background-color": "#004C75"});
      $("div.logo").addClass("logo-scroll");
      $("div.menu").addClass("menu-scroll");
    } else{
      $("nav").css({"background-color": "transparent"});
      $("div.logo").removeClass("logo-scroll");
      $("div.menu").removeClass("menu-scroll");
    }
  }
  stickyNavbar();
});

/***** SHOW/HIDDEN MOBILE MENU *****/
$(document).ready(function(){
  $('#menu-mobile-button').click(function(){
    $('div.menu-mobile-content').fadeIn();
  });
  
  $('#menu-mobile-button-close').click(function(){
    $('div.menu-mobile-content').fadeOut();
  });

  $('#about-btn, #services-btn, #contact-btn').click(function(){
      $('div.menu-mobile-content').fadeOut();
  });
});

/***** CONTACT FORM *****/
(function ($) {
  'use strict';

  var form = $('.contact-form'),
      message = $('.contact-msg'),
      form_data;

  // Success function
  function done_func(response) {
      message.fadeIn().removeClass('fail-msg').addClass('success-msg');
      message.text(response);
      setTimeout(function () {
          message.fadeOut();
      }, 5000);
      form.find('input:not([type="submit"]), textarea').val('');
  }

  // fail function
  function fail_func(data) {
      message.fadeIn().removeClass('alert-success').addClass('fail-msg');
      message.text(data.responseText);
      setTimeout(function () {
          message.fadeOut();
      }, 5000);
  }
  form.submit(function (e) {
      e.preventDefault();
      form_data = $(this).serialize();
      $.ajax({
          type: 'POST',
          url: form.attr('action'),
          data: form_data
      })
      .done(done_func)
      .fail(fail_func);
  });
})(jQuery);

/***** SCROLL ANCHORS *****/
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });