
$('#abbv').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
  $('#abbv').hide();
  $('#full').show();
});

$('#full').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
  $('#full span').css("color", "#f0f0f0");
});

$('#full span').bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
  $('#full span').css("color", "#960000");
  $('#full').css("color", "#960000");
});

var navTop = $("nav").offset().top;
$(document).scroll(
    function () {

        var currentTop = $(window).scrollTop();
        if(currentTop >= navTop){
          $("nav").addClass('nav-fixed');
        }
        else{
          $("nav").removeClass('nav-fixed');
        }
        
});