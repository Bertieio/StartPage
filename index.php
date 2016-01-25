<!doctype HTML>
<head>
    <meta name="author" content="Bertie Scott">
    <title>Bertie Scott - StartPage - Bertie.io</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.0.2/jquery.simpleWeather.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body onload="startTime()">
    <div class="search">
        <form method="get" action="https://www.google.com/search">
            <input class="searchBox" type="text" name="q" size="20" placeholder=" Google" autofocus="autofocus">
        </form>
    </div>
    <div class="divider"></div>
    <div class="linkBox">
        <a href="https://reddit.com" style="text-decoration:none"><div class="links" style="border-color:#ff00bf;color:#ff00bf">Re</div></a>
	    <div class="Spacer"></div>
	<a href="https://github.com" style="text-decoration:none"><div class="links" style="border-color:#FF9D00;color:#FF9D00">Gi</div></a>
	    <div class="Spacer"></div>
        <a href="http://www.twitch.tv/directory/following/live" style="text-decoration:none"><div class="links" style="border-color:#18BEF5;color:#18BEF5">Tw</div></a>         
            <div class="Spacer"></div>                                                                                                               
	<a href="https://Facebook.com" style="text-decoration:none"><div class="links" style="border-color:#00FF1E;color:#00FF1E">Fb</div></a>
	    <div class="Spacer"></div>
	<a href="https://tweetdeck.twitter.com/" style="text-decoration:none"><div class="links" style="border-color:#D6FF0A;color:#D6FF0A">Td</div></a>
            <div class="Spacer"></div>
	<a href="https://imgur.com" style="text-decoration:none"><div class="links" style="border-color:#FF0A5C;color:#FF0A5C">Im</div></a>
    <div style="width:100%;height:7px;"></div>
	<a href="https://youtube.com" style="text-decoration:none"><div class="links" style="border-color:#FF0000;color:#FF0000">Yt</div></a>
    <div class="Spacer"></div>
        <a href="https://discordapp.com/channels/@me" style="text-decoration:none"><div class="links" style="border-color:#0000ff;color:#0000ff">Di</div></a>
    </div> 
    <div id="time"></div>
    <div id="dateWeather"><span id="date"></span> - B:<span id="weatherB"></span> | S:<span id="weatherS"></span></div>
</body>
