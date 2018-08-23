// God save the Dev

'use strict';

if (process.env.NODE_ENV !== 'production') {
  require('./assets/templates/layouts/index.html');
}

// Depends
var $ = require('jquery');
require('bootstrap');

// Modules
var Forms = require('_modules/forms');
var Slider = require('_modules/slider');
var Popup = require('_modules/popup');
var Fancy_select = require('_modules/fancyselect');
var Jscrollpane = require('_modules/jscrollpane');
// var LightGallery = require('_modules/lightgallery');
var Jslider = require('_modules/jslider');
var Fancybox = require('_modules/fancybox');
var Chosen = require('_modules/chosen');
require('../node_modules/sumoselect/jquery.sumoselect.js');
require('../node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js');

// Stylesheet entrypoint
require('_stylesheets/app.scss');

// Are you ready?
$(function() {
  new Forms();
  new Popup();
  new Fancy_select();
  new Jscrollpane();
  // new LightGallery();
  new Slider();
  new Jslider();
  new Fancybox();
  new Chosen();

  // табы компании

  (function($) {
    $(function() {
      $('.companies-list').on('click', 'li:not(.active)', function() {
        $(this)
          .closest('.companies-screen').find('.companies-info').removeClass('active').eq($(this).index()).addClass('active');
        $('.companies-info__inner').getNiceScroll().resize();
      });
    });
  })(jQuery);

  $('.companies-info__close').click(function() {
    $(this).closest('.companies-info').removeClass('active');
    $('.companies-info__inner').getNiceScroll().resize();
  });

  // табы сортировка

  (function($) {
    $(function() {
      $('.sorting-tabs').on('click', 'li:not(.active)', function() {
        $(this).addClass('active').siblings().removeClass('active');
        if ($(this).hasClass('new')) {
          $('.listing-item').removeClass('active');
          $('.listing-item.new').addClass('active');
        }
        else if ($(this).hasClass('old')) {
          $('.listing-item').removeClass('active');
          $('.listing-item.old').addClass('active');
        }
        else if ($(this).hasClass('soon')) {
          $('.listing-item').removeClass('active');
          $('.listing-item.soon').addClass('active');
        }
        else if ($(this).hasClass('exlusive')) {
          $('.listing-item').removeClass('active');
          $('.listing-item.exlusive').addClass('active');
        }
        else if ($(this).hasClass('sold')) {
          $('.listing-item').removeClass('active');
          $('.listing-item.sold').addClass('active');
        }
        else if ($(this).hasClass('investment')) {
          $('.listing-item').removeClass('active');
          $('.listing-item.investment').addClass('active');
        }
        else if ($(this).hasClass('office')) {
          $('.listing-item').removeClass('active');
          $('.listing-item.office').addClass('active');
        }
        else if ($(this).hasClass('hotel')) {
          $('.listing-item').removeClass('active');
          $('.listing-item.hotel').addClass('active');
        }
        else if ($(this).hasClass('retail')) {
          $('.listing-item').removeClass('active');
          $('.listing-item.retail').addClass('active');
        }
      });
    });
  })(jQuery);

  // языки

  $('.lang-btn').click(function() {
    $(this).toggleClass('active');
    $('.lang-menu').slideToggle();
    return false;
  });

  $('.lang-menu').on('click', 'li:not(.active)', function() {
    var l = $(this).text();
    $(this).addClass('active').siblings().removeClass('active');
    if ($(this).hasClass('active')) {
      $('.lang').text(l);
    }
    location = $(this).find('a').attr('href');
  });

  $(document).click(function() {
    if ($('.lang-menu').is(':visible') && $('.lang-btn').hasClass('active')) {
      $('.lang-menu').slideUp();
      $('.lang-btn').removeClass('active');
    }
  });

  // выпадающее меню about me

  $('.about-heading').click(function() {
    $('.about-heading__list').slideToggle();
    return false;
  });

  // видео слайдер

  $('.video-slider').not('.slick-initialized').slick({
    speed: 500,
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: false,
    dots: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          arrows: true,
          prevArrow: '<div class="slick-arrow arrow-left icon-angle-left"></div>',
          nextArrow: '<div class="slick-arrow arrow-right icon-angle-right"></div>',
          dots: true
        }
      }
    ]
  });

  // слайдер мероприятия

  $('.events-slider').not('.slick-initialized').slick({
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    prevArrow: '<div class="slick-arrow arrow-left icon-angle-left"></div>',
    nextArrow: '<div class="slick-arrow arrow-right icon-angle-right"></div>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  // слайдер статистика

  $('.statistics-slider').not('.slick-initialized').slick({
    speed: 500,
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    prevArrow: '<div class="slick-arrow arrow-left icon-angle-left"></div>',
    nextArrow: '<div class="slick-arrow arrow-right icon-angle-right"></div>',
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  // слайдер команда

  $('.team-slider').not('.slick-initialized').slick({
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    prevArrow: '<div class="slick-arrow arrow-left icon-angle-left"></div>',
    nextArrow: '<div class="slick-arrow arrow-right icon-angle-right"></div>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  // слайдер отзывы

  $('.reviews-slider').not('.slick-initialized').slick({
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    prevArrow: '<div class="slick-arrow arrow-left icon-angle-left"></div>',
    nextArrow: '<div class="slick-arrow arrow-right icon-angle-right"></div>'
  });

  // слайдер мероприятия в блоге

  $('.blog-sidebar__events-slider').not('.slick-initialized').slick({
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    prevArrow: '<div class="slick-arrow arrow-left icon-angle-left"></div>',
    nextArrow: '<div class="slick-arrow arrow-right icon-angle-right"></div>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  // слайдер внутри статьи

  $('.blog-post__Slider').not('.slick-initialized').slick({
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    arrows: false
  });

  // показать-скрыть текст

  $('.hide-btn').click(function() {
    var h = $(this).closest('.hidden-text__wrapper').find('.hidden-text__inner').height();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).find('span').text('REVEAL INFO');
      $(this).closest('.hidden-text__wrapper').find('.hidden-text').removeClass('active').addClass('open').removeAttr('style');
    }
    else {
      $(this).addClass('active');
      $(this).find('span').text('HIDE INFO');
      $(this).closest('.hidden-text__wrapper').find('.hidden-text').addClass('active').removeClass('open').css('height', h);
    }
  });

  // стилизованный select

  $('.feedback-form__select').SumoSelect();

  // скроллинг

  jQuery(document).ready(function($) {
    $('a[href^="#"]').bind('click.smoothscroll', function(e) {
      e.preventDefault();
      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate( {
        'scrollTop': $target.offset().top
      }, 1000, 'swing', function() {
        // window.location.hash = target;
      } );
    } );
  });

  // мобильное меню

  $('.mobile-menu__btn').click(function() {
    $(this).toggleClass('active');
    $('.mobile-menu').toggleClass('active');
  });

/*  $('.mobile-menu__btn-close').click(function() {
    $('.mobile-menu').removeClass('active');
  });*/

  // скролл вверх

  $('.scroll-btn__wrapper').click(function() {
    $('body, html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });

  // скролбар

  $('.companies-info__inner').niceScroll();
});

