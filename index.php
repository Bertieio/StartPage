<!doctype HTML>
<head>
    <meta name="author" content="Bertie Scott">
    <title>Bertie Scott - StartPage - Bertie.io</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="scripts.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46891909-2', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body onload="startTime()">
    <div class="search">
        <form method="get" action="https://www.google.com/search">
            <input class="searchBox" type="text" name="q" size="20" placeholder=" Google" autofocus="autofocus">
        </form>
    </div>
    <div class="divider"></div>
    <div class="linkBox">
        <a href="https://reddit.com" style="text-decoration:none"><div class="links" style="border-color:#ff00bf;color:#ff00bf"><span class="linkText">Re</span></div></a>
	<a href="https://github.com" style="text-decoration:none"><div class="links" style="border-color:#FF9D00;color:#FF9D00"><span class="linkText">Gi</span></div></a>
        <a href="http://www.twitch.tv/directory/following/live" style="text-decoration:none"><div class="links" style="border-color:#18BEF5;color:#18BEF5"><span class="linkText">Tw</span></div></a>         
        <a href="https://Facebook.com" style="text-decoration:none"><div class="links" style="border-color:#00FF1E;color:#00FF1E"><span class="linkText">Fb</span></div></a>
	<a href="https://tweetdeck.twitter.com/" style="text-decoration:none"><div class="links" style="border-color:#D6FF0A;color:#D6FF0A"><span class="linkText">Td</span></div></a>
        <a href="https://imgur.com" style="text-decoration:none"><div class="links" style="border-color:#FF0A5C;color:#FF0A5C"><span class="linkText">Im</span></div></a>
   	<a href="https://youtube.com" style="text-decoration:none"><div class="links" style="border-color:#FF0000;color:#FF0000"><span class="linkText">Yt</span></div></a>
        <a href="https://discordapp.com/channels/@me" style="text-decoration:none"><div class="links" style="border-color:#0000ff;color:#0000ff"><span class="linkText">Di</span></div></a>
        <a href="https://play.spotify.com/browse" style="text-decoration:none"><div class="links" style="border-color:#D400FF;color:#D400FF"><span class="linkText">Sp</span></div></a>
	<a href="https://kissanime.to/" style="text-decoration:none"><div class="links" style="border-color:#00ffdf;color:#00ffdf"><span class="linkText">Ka</span></div></a>
	<a href="http://kisscartoon.me" style="text-decoration:none"><div class="links" style="border-color:#ff5a00;color:#ff5a00"><span class="linkText">Kc</span></div></a>
    </div> 
    <div id="time"></div><span id="s">
    <div id="dateWeather"><span id="date"></span> - B:<span id="weatherB"></span> | S:<span id="weatherS"></span></div>
</body>
