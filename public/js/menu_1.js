$(document).ready(function() {

  $('#a1,#a2,#a3,#a4,#a5').click(function() {
    $(this).parents('.menu').children().addClass('block');
  	$(this).parents('.menu').children().removeClass('set');
    $(this).addClass('set');
    $(this).removeClass('block');
  });
  
  $('.income').click(function() {
		$('.bgr, .inframe, .close').css('display','block');
      });
  
    $('.close').click(function() {
                    $('.bgr, .inframe, .close').css('display','none');
      });

    $('.bgr').click(function() {
                    $('.bgr, .inframe, .close').css('display','none');
      });
  
  
});