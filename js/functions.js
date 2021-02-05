/***** STICKY NAVBAR *****/
$(window).scroll( function() {
  let windowScroll = $(window).scrollTop();
  if (windowScroll > 100) {
    $('.navbar').addClass('navbar-scroll');
    $('.navbar .logo').addClass('logo-scroll');
  } else {
    $('.navbar').removeClass('navbar-scroll');
    $('.navbar .logo').removeClass('logo-scroll');
  }
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

/***** SPLASH FULL *****/
function fullScreen(el) {
  let element = document.getElementById(el)
  element.style.minHeight = window.innerHeight + 'px'
}
fullScreen('splash')

window.onresize = function() {
  fullScreen('splash')
}