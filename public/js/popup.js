$(document).ready(function(){
    
    $('#reg').click(function() {
		$('.bgr, .popup, .close').css('display','block');
      });
  
    $('.close').click(function() {
                    $('.bgr, .popup, .close, .pushmes').css('display','none');
      });

    $('.bgr').click(function() {
                    $('.bgr, .popup, .close, .pushmes').css('display','none');
      });
      
    $('.pushup').click(function() {
                    $('.popup').css('display','none');
                    $('.pushmes').css('display','block');
      });
      
});