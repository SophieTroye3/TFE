<!DOCTYPE html>
<html>
<head>
    <title>Live | VIT | TFE Sophie Troye</title>
    <meta charset="UTF-8">
    <meta name="description" content="VIT | Very Important Ticket - Multicam Concert Streaming" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="main.js"></script> 
    <link rel="icon" type="image/png" href="img/favicon.png" />


</head>
<body>
    <div id="fb-root"></div>
    
    <header>
        <div id="live_header_container">
            <a href="index.php">
                <div id="logo_container">
                    <img class="logo" src="img/logo.png" alt="VIT - Multicam Concert Streaming"/>
                </div>
            </a>
            <p>Logged as <a href="profile.php">Sophie Troye</a></p>
        </div>
        <div id="live_menus">
       
        <div id="live_menu_space">
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="schedule.php"><li>Schedule</li></a>
                <a href="latest.php"><li>Latest shows</li></a>
                <a href="artists.php"><li>Artists</li></a>
                <a href="pro.php"><li><nobr>I'm a professional</nobr></li></a>
                <a href="guided.php"><li>Guided tour</li></a>
            </ul>
        </div>
            <p><a href="arkom.php">ARKOM</a> - Live from the snooker pub</p>
            <a target="_blank" href="http://www.facebook.com/share.php?u=http://www.troye.be/tfe/juin/live.php&title=VeryImportantTicket"></a>
        </div>
    </header>
    <content>
    <div id="player">
        <div class="focus hide" id="focus1"></div>
        <div class="focus hide" id="focus2"></div>
        <div class="focus hide" id="focus3"></div>
        <div class="focus hide" id="focus4"></div>
        <video class="video video1" id="video1" loop>   
        <source src="video/v1.mp4" type="video/mp4">
        </video>
        <video class="video video2" id="video2" loop>   
        <source src="video/v2.mp4" type="video/mp4">
        </video> 
        <video class="video video3" id="video3" loop>   
        <source src="video/v3.mp4" type="video/mp4">
        </video>
        <video class="video video4" id="video4" loop>   
        <source src="video/v4.mp4" type="video/mp4">
        </video>
        
       <button id="big_play" type="button"></button>
        <button class="playpause hide" type="button"></button>
        <ul class="controls hide">
	<li class="volume"><p><span id="volume">10 </span><span class="control" id="v-dn" title="Volume down">- </span> <span class="control" id="v-up" title="Volume up"> +</span> </p></li>
	</ul>
    <button class="hide" id="to4" type="button"></button>
    <div id="views_btn">
    <button class="btn_view hide" id="btn_general" type="button">General</button>
    <button class="btn_view hide" id="btn_guitarist" type="button">Guitarist</button>
    <button class="btn_view hide" id="btn_singers" type="button">Singers</button>
    <button class="btn_view hide" id="btn_front" type="button">Front</button>
        </div>
    </div>
        <section class="live_left_section">
        
        <ul class="ext_links">
            <a href="http://www.fr.fnac.be/musique" target="_blank"><li>
                <svg version="1.1" id="cd" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 38 38" enable-background="new 0 0 38 38" xml:space="preserve">
<path fill="#FFD800" d="M18.8,1C9,1,1,9,1,18.8s8,17.8,17.8,17.8s17.8-8,17.8-17.8S28.7,1,18.8,1z M23.5,18.8c0,2.6-2.1,4.6-4.6,4.6
	c-0.7,0-1.3-0.2-1.9-0.4c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.3-0.2-0.5-0.4c-0.6-0.5-1-1.1-1.3-1.8c-0.2-0.5-0.3-1.1-0.3-1.7
	c0-2.6,2.1-4.6,4.6-4.6c0.7,0,1.3,0.2,1.9,0.4c0.2,0.1,0.4,0.2,0.6,0.3c0.2,0.1,0.3,0.2,0.5,0.4c0.6,0.5,1,1.1,1.3,1.8
	C23.4,17.7,23.5,18.2,23.5,18.8z M15,23.5c0.2,0.2,0.4,0.3,0.6,0.5l-5.5,8.7c-0.6-0.4-1.2-0.8-1.7-1.3L15,23.5z M22.7,14.2
	c-0.2-0.2-0.4-0.3-0.6-0.5L27.6,5c0.6,0.4,1.2,0.8,1.7,1.3L22.7,14.2z M18.8,2.4c2.4,0,4.7,0.5,6.8,1.5l-4.3,9.4
	c-0.8-0.3-1.6-0.5-2.5-0.5c-3.3,0-6.1,2.7-6.1,6.1c0,0.8,0.2,1.6,0.4,2.3l-9.6,3.8c-0.8-1.9-1.2-3.9-1.2-6.1
	C2.4,9.8,9.8,2.4,18.8,2.4z M18.8,35.3c-2.4,0-4.7-0.5-6.8-1.5l4.3-9.4c0.8,0.3,1.6,0.5,2.5,0.5c3.3,0,6.1-2.7,6.1-6.1
	c0-0.8-0.2-1.6-0.4-2.3l9.6-3.8c0.8,1.9,1.2,3.9,1.2,6.1C35.3,27.9,27.9,35.3,18.8,35.3z"/>
                </svg><p>cd's</p></li></a>
            <a href="http://www.rockagogo.com/magasin/rayon_vetements/groupe_ac-dc" target="_blank"><li>
                <svg version="1.1" id="shirt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 38 38" enable-background="new 0 0 38 38" xml:space="preserve">
<g>
	<path fill="#FFD800" d="M36.7,10.8c-0.1-0.2-0.2-0.4-0.4-0.5L27.8,6c-0.1-0.1-0.2-0.1-0.4-0.1h-4.7c-0.5,0-0.8,0.4-0.8,0.8
		c0,1.6-1.3,3-3,3s-3-1.3-3-3c0-0.5-0.4-0.8-0.8-0.8h-4.7c-0.1,0-0.3,0-0.4,0.1l-8.5,4.2c-0.2,0.1-0.4,0.3-0.4,0.5
		c-0.1,0.2,0,0.5,0.1,0.7l4.2,6.4c0.2,0.3,0.6,0.4,0.9,0.3l3.1-0.9v14.9c0,0.5,0.4,0.8,0.8,0.8h16.9c0.5,0,0.8-0.4,0.8-0.8V17.2
		l3.1,0.9c0.1,0,0.2,0,0.2,0c0.3,0,0.5-0.1,0.7-0.4l4.2-6.4C36.7,11.3,36.7,11,36.7,10.8z M31.3,16.4l-3-0.9v-1.1
		c0-0.5-0.4-0.8-0.8-0.8c-0.5,0-0.8,0.4-0.8,0.8v16.9H11.3V14.4c0-0.5-0.4-0.8-0.8-0.8s-0.8,0.4-0.8,0.8v1.1l-3,0.9l-3.4-5l7.4-3.7
		h3.7c0.4,2.2,2.3,3.8,4.6,3.8s4.2-1.6,4.6-3.8h3.7l7.4,3.7L31.3,16.4z"/>
</g>
</svg>
                <p>goodies</p></li></a>
            <a href="https://play.spotify.com/album/1C2h7mLntPSeVYciMRTF4a" target="_blank"><li>
                <svg version="1.1" id="spotify" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 38 38" enable-background="new 0 0 38 38" xml:space="preserve">
<path id="path3101" inkscape:connector-curvature="0" fill="#FFD800" d="M18.7,1.7C9.3,1.7,1.7,9.3,1.7,18.6s7.6,16.9,16.9,16.9
	c9.4,0,16.9-7.6,16.9-16.9S28,1.7,18.7,1.7z M16.2,10.5c5,0,10.2,1,14,3.3c0.5,0.3,0.9,0.7,0.9,1.5c0,0.9-0.7,1.6-1.6,1.6
	c-0.3,0-0.5-0.1-0.9-0.3c-3.1-1.8-7.8-2.9-12.4-2.9c-2.3,0-4.6,0.2-6.8,0.8c-0.2,0.1-0.6,0.2-0.9,0.2c-0.9,0-1.6-0.7-1.6-1.6
	c0-0.9,0.6-1.4,1.2-1.6C10.5,10.8,13.2,10.5,16.2,10.5z M15.8,16.3c4.4,0,8.7,1.1,12.1,3.1c0.6,0.3,0.8,0.7,0.8,1.3
	c0,0.7-0.6,1.3-1.3,1.3c-0.4,0-0.6-0.1-0.8-0.3c-2.8-1.6-6.6-2.7-10.8-2.7c-2.1,0-4,0.3-5.5,0.7C9.9,19.9,9.7,20,9.4,20
	c-0.7,0-1.3-0.6-1.3-1.3c0-0.7,0.3-1.2,1.1-1.4C11.1,16.7,13,16.3,15.8,16.3z M16.1,21.9c3.7,0,7,0.9,9.9,2.6
	c0.4,0.2,0.7,0.5,0.7,1.1c0,0.6-0.5,1.1-1.1,1.1c-0.3,0-0.5-0.1-0.7-0.3c-2.5-1.5-5.5-2.3-8.8-2.3c-1.8,0-3.6,0.2-5.3,0.6
	c-0.3,0.1-0.6,0.2-0.8,0.2c-0.6,0-1.1-0.5-1.1-1.1c0-0.7,0.4-1.1,0.9-1.2C11.8,22.1,13.9,21.9,16.1,21.9z"/>
                </svg><p>spotify</p></li></a>
        </ul>
       
        <section id="tweetwall">
        <h4>Tweetwall</h4>
        <p class="p_tweetwall">Use #VIT01 to post on the wall</p>
        <ul>
            <li><p class="tweet_pseudo">@Supertigrou</p><p class="tweet">Amazing show ! Hope to see them again, where are they from ?</p></li>
            <li><p class="tweet_pseudo">@Rockerz01</p><p class="tweet">Live from the Snooker Pub !<img src="img/picture_tweet.png"/></p></li>
            <li><p class="tweet_pseudo">@Dragonhunter</p><p class="tweet">Hey guys i'm on the internet ! #Troll</p></li>
        </ul>
        </section>
        
    </section>
    
    </content>
    
<?php include("footer.php"); ?>
    

    
       
 
        
</body>
</html>