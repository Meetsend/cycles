<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="/chat/chat.js"></script>
        <link rel="stylesheet" type="text/css" href="/chat/chat.css">
        <title>Cycles</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Catamaran|Ek+Mukta|Muli|Nunito+Sans|Open+Sans|Overpass+Mono|Poppins|Questrial|Varela+Round|Work+Sans" rel="stylesheet">
    </head>
    <body>
        <div id="telegramSiteHelper_box">
		<input id="telegramSiteHelper_lastMId" type="hidden" value="">
		<audio preload="auto" id="telegramSiteHelper_chatSound"><source src="/chat/telegramSiteHelper_chat.mp3"></source></audio>
		<div id="telegramSiteHelper_chatWrapper"><div id="telegramSiteHelper_chatInner"><ul id="telegramSiteHelper_chatMessages"><li id="telegramSiteHelper_firstChatMsg">Если у вас есть вопрос, можете задать его здесь</li></ul></div></div>
    <input id="telegramSiteHelper_chatTextBox" placeholder="Введите сообщение и нажмите Enter"></input>
    </div>
    
    </body>
</html>      