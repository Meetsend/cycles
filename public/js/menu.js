$(document).ready(function() {
  
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