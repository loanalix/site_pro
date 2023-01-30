var currYear = (new Date()).getFullYear();

$(document).ready(function () {
  $('.sidenav').sidenav();
  $('.tooltipped').tooltip();
  $('.materialboxed').materialbox();
  $('.modal').modal();
  $('.datepicker').datepicker({
    yearRange: [1940, currYear],
  });
  $('.collapsible').collapsible();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  $('.moveNextCarousel').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('.carousel').carousel('next');
  });

  $('.movePreviousCarousel').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('.carousel').carousel('prev');
  });
});
var clicked = 0;

  $(".toggle-password").click(function (e){
    e.preventDefault();

    $(this).toggleClass("toggle-password");
      if(clicked==0){
        $(this).html('<span class="material-icons">visibility_off</span>');
        clicked=1;
      }else{
        $(this).html('<span class="material-icons">visibility</span>');
        clicked=0;
      }
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password"){
        input.attr("type", "text");
      }else{
        input.attr("type", "password");
      };
  });

  var clicked = 0;

  $(".toggle-password1").click(function (e){
    e.preventDefault();

    $(this).toggleClass("toggle-password1");
      if(clicked==0){
        $(this).html('<span class="material-icons">visibility_off</span>');
        clicked=1;
      }else{
        $(this).html('<span class="material-icons">visibility</span>');
        clicked=0;
      }
      var input = $($(this).attr("toggle1"));
      if (input.attr("type") == "password"){
        input.attr("type", "text");
      }else{
        input.attr("type", "password");
      };
  });

  var clicked = 0;

  $(".toggle-password2").click(function (e){
    e.preventDefault();

    $(this).toggleClass("toggle-password2");
      if(clicked==0){
        $(this).html('<span class="material-icons">visibility_off</span>');
        clicked=1;
      }else{
        $(this).html('<span class="material-icons">visibility</span>');
        clicked=0;
      }
      var input = $($(this).attr("toggle2"));
      if (input.attr("type") == "password"){
        input.attr("type", "text");
      }else{
        input.attr("type", "password");
      };
  });

  $(".toggle-password3").click(function (e){
    e.preventDefault();

    $(this).toggleClass("toggle-password3");
      if(clicked==0){
        $(this).html('<span class="material-icons">visibility_off</span>');
        clicked=1;
      }else{
        $(this).html('<span class="material-icons">visibility</span>');
        clicked=0;
      }
      var input = $($(this).attr("toggle3"));
      if (input.attr("type") == "password"){
        input.attr("type", "text");
      }else{
        input.attr("type", "password");
      };
  });