$(function() {      
                            var width=$('.slider').width();                     // Ширина слайдера.
                                interval = 4000;                                    // Интервал смены слайдов.

                            $('.carus img:last').clone().prependTo('.carus');     // Копия последнего слайда помещается в начало.
                            $('.carus img').eq(1).clone().appendTo('.carus');     // Копия первого слайда помещается в конец.  
                            $('.carus').css('margin-left', -width);                // Контейнер .slider сдвигается влево на ширину одного слайда.
                            setInterval('animation()',interval);                    // Запускается функция animation(), выполняющая смену слайдов.
                          });
                          function animation(){

                            var margin = parseInt($('.carus').css('marginLeft'));  // Текущее смещение блока .slider
                                width=$('.slider').width(),                     // Ширина слайдера.
                                slidersAmount=$('.carus').children().length;       // Количество слайдов в слайдере.
                            if(margin!=(-width*(slidersAmount-1)))                  // Если текущий слайд не последний,
                            {
                              margin=margin-width;                                  // то значение margin уменьшается на ширину слайда.
                            }else{                                                  // Если показан последний слайд,
                              $('.carus').css('margin-left', -width);              // то блок .slider возвращается в начальное положение,
                              margin=-width*2;         
                            }
                            $('.carus').animate({marginLeft:margin},1000);          // Блок .slider смещается влево на 1 слайд.
                          };