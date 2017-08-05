$(document).ready(function(){
    
    $('#inc').click(function() {
        

    $.get($(this).attr('class'),function(data){
        setTimeout(function () {
            $('.input').val('');
            $('.mes').show();
        }, 1000);
                });
        });
});