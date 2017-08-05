<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/info.css">
        <title>Cycles</title>
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/menu.js"></script>
        <script src="/js/income.js"></script>
        
        <!-- Chat -->
        <script type="text/javascript" src="/chat/chat.js"></script>
        <link rel="stylesheet" type="text/css" href="/chat/chat.css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Catamaran|Ek+Mukta|Muli|Nunito+Sans|Open+Sans|Overpass+Mono|Poppins|Questrial|Varela+Round|Work+Sans" rel="stylesheet">
    </head>
    <body>
        <div class="inframe">
                        <center><div class="h4">Вход в систему</div>
                        <input class="input" type="text" placeholder="Эл. адрес"><br>
                        <input class="input" type="password" placeholder="Пароль"><br>
                        <button id="inc">Войти</button>
                        <div class="mes">
                            <p>Введенный вами E-mail отсутствует в системе. Проверьте корректность данных и повторите попытку.</p>
                        </div></center>
                    </div>
        <div class="close">
        </div>
        <div class="bgr">
        </div>
        <div class="header sh">
            
            <div class="head">
                        <a href="/" class="logo c-up">

                            <div class="img-logo line"></div>

                            <div class="line grey">Cycles</div>

                        </a>

                    <a href="#" class="income blue">Войти</a>
            </div>
            
        </div>
        
        <div class="body up">
            
            <div class="cont c-up sh o">

                <div class="menu line">
                    <a id="a1" class="block blue" href="/about"> О проекте</a>
                    <a id="a2" class="block blue" href="/team"> Команда</a>
                    <a id="a3" class="block blue" href="/contacts"> Контакты</a>
                    <a id="a5" class="block blue" href="#"> Партнерство</a>
                    <a id="a4" class="blue set" href="/support"> Поддержка</a>
                </div>
                <div class="text line p">
                    <div class="br">
                        <div class="c-up">
                        <img src="/ourteam/4.jpg" class="line">
                        <div class="line upsh tab">
                            <div class="zag c-up"><img src="online.png " class="line"><a class="line">Cyclopod</a></div>
                             <p>Ваш круглосуточный помощник</p>
                             <p>Для более емких вопросов:<a class="blue" href="#"> support@cycles.su</a></p><br>
                        </div>
                        </div>
                        <div id="telegramSiteHelper_box">
                            <input id="telegramSiteHelper_lastMId" type="hidden" value="">
                            <audio preload="auto" id="telegramSiteHelper_chatSound"><source src="/chat/telegramSiteHelper_chat.mp3"></source></audio>
                            <div id="telegramSiteHelper_chatWrapper"><div id="telegramSiteHelper_chatInner"><ul id="telegramSiteHelper_chatMessages"><li id="telegramSiteHelper_firstChatMsg">Cyclopod на связи! Какой у вас вопрос? </li></ul></div></div>
                            <input id="telegramSiteHelper_chatTextBox" placeholder="Введите сообщение и нажмите Enter"></input>
                        </div>
                        
                    </div>
                
                </div>
            </div>
            

            <div class="footer up"><center>© 2017 Cycles</center>
            </div>
            
        </div>
        
    </body>

</html>