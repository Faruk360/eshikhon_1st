let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});

videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".brand-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        450: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        991: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 5,
        },
      },
});

// auto filter

/**
 * AutoFilter (https://github.com/GianlucaChiarani/AutoFilter)
 * @version 0.3
 * @author Gianluca Chiarani
 * @license The MIT License (MIT)
 */

 (function ($) {
    
  $.autofilter = function( options ) {

      var settings = $.extend({
          showClass: 'show',
          htmlAsFilter: false,
          subString: false,
          minChars: 3,
          caseSensitive: false,
          animation: true,
          duration: 0
      }, options );

      $('[data-filter]:not(input)').click(function() {
          if (settings.htmlAsFilter) {
              var filterValue = $(this).html().trim();
          } else {
              var filterValue = $(this).attr('data-filter').trim();
          }

          if (filterValue!='')
              af_filter(filterValue);
          else
              $('[data-tags],[data-to-filter]').fadeIn(settings.duration).addClass(settings.showClass);
      });

      $('input[data-filter]').keyup(function() {
          var value = $(this).val();
          settings.subString = true;

          if (value!='' && value.length>=settings.minChars) {
              af_filter(value);
          } else {
              $('[data-tags],[data-to-filter]').fadeIn(settings.duration).addClass(settings.showClass);
          }

      });

      function af_filter(filterValue) {
          $('[data-tags],[data-to-filter]').each(function() {
              var tags = $(this).attr('data-tags');
              var tofilter = Array();
              var valid = false;
              
              if (!settings.caseSensitive) 
                  filterValue = filterValue.toLowerCase();

              if (tags) {
                  tofilter = tags.split(',');
              } else {
                  tofilter.push($(this).html());
              }

              if (!settings.caseSensitive) 
                  tofilter = tofilter.map(v => v.toLowerCase());

              if (settings.subString) {
                  tofilter.forEach(function(toFilterOne) {
                      if (toFilterOne.replace(/(&lt;([^>]+)>)/gi, "").indexOf(filterValue) > -2) {
                          valid = true;
                      }
                  });
              } else {
                  valid = tofilter.includes(filterValue);
              }

              if (valid) {
                  if (settings.animation)
                      $(this).fadeIn(0);
                  
                  $(this).addClass(settings.showClass);
              } else {
                  if (settings.animation)
                      $(this).fadeOut(settings.duration);
                  
                  $(this).removeClass(settings.showClass);
              }

          });
      }

  };

}(jQuery));


        window.onload = function(){
            document.getElementById("container").style.display = "none";
            document.getElementById("content").style.display = "block";
        }
        $(window).load(function(){
            $('#loading').fadeOut();
            $('#loading-img').delay(150).fadeOut('slow');
        }),4000;
