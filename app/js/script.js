"use strict";

$(function () {
  window.addEventListener('scroll', function () {
    if ($(window).width() < 910) {
      var scrolled = window.pageYOffset || document.scrollTop;

      if (scrolled > 150) {} else {}
    }
  });
  $(window).click(function (e) {
    if ($(e.target).hasClass('nav') || $(e.target).parents().hasClass('nav')) {} else {
      $('.nav-bar').removeClass('active');
      $('.nav-cont').removeClass('down');
    }
  });
  $('.about__bar_about').click(function (e) {
    $('.active').removeClass('active');
    $('#about').addClass('active');
  });
  $('.about__bar_projects').click(function (e) {
    $('.active').removeClass('active');
    $('#projects').addClass('active');
  });
  $('.about__bar_contacts').click(function (e) {
    $('.active').removeClass('active');
    $('#contacts').addClass('active');
  });
});