<!DOCTYPE html>
<html>
<head>
    <title>Profile | VIT | TFE Sophie Troye</title>
    <meta charset="UTF-8">
    <meta name="description" content="VIT | Very Important Ticket - Multicam Concert Streaming" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="main.js"></script> 
    <link rel="icon" type="image/png" href="img/favicon.png" />


</head>
<body>
    
    <header>
        <div id="live_header_container">
            <a href="index.php">
                <div id="logo_container">
                    <img class="logo" src="img/logo.png" alt="VIT - Multicam Concert Streaming"/>
                </div>
            </a>
            <p>Logged as <a href="profile.php">Sophie Troye</a></p>
            </div>
        <div id="menus">
        <!--<ul class="social">
                <a href="#"><li></li></a>
            <a href="#"><li></li></a>
            </ul>-->
        <div id="menu_space">
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="schedule.php"><li>Schedule</li></a>
                <a href="latest.php"><li>Latest shows</li></a>
                <a href="artists.php"><li>Artists</li></a>
                <a href="pro.php"><li><nobr>I'm a professional</nobr></li></a>
                <a href="guided.php"><li>Guided tour</li></a>
            </ul>
        </div>
        </div>
        
    </header>
    <content>
   
    <section class="profile_left_section">
        <h4>Our recommendations</h4>
        <ul class="list_schedule">
            <a href="arkom.php"><li><img class="artist_small" src="img/small_sweet.png" alt="Artist picture" /><p class="band_name">Sweet Melody</p><p class="date">02 July 2015</p></li></a>
            <a href="arkom.php"><li><img class="artist_small" src="img/small_kraken.png" alt="Artist picture"/><p class="band_name">The Kraken Released</p><p class="date">15 July 2015</p></li></a>
            <a href="arkom.php"><li><img class="artist_small" src="img/small_theo.png" alt="Artist picture"/><p class="band_name">Theo Legrand</p><p class="date">04 August 2015</p></li></a>
        </ul>
        <ul class="stars">
            <li><div class="star" id="star1"></div></li>
            <li><div class="star"></div></li>
            <li><div class="star"></div></li>
        </ul>
       
       
    </section>
        
    <section id="profile_content">
        <img src="img/avatar.png" alt="Your Avatar" id="avatar"/>
        <p id="welcome">Welcome on your profile <span>Sophie Troye</span></p>
        <a href="index.php"><button id="logout">Log Out</button></a>
        <div class="profile_newsletter">
        <div id="box_weekly">
        <input type="checkbox" id="weekly" checked="checked">
        <label for="weekly">I want to receive the weekly newsletter</label>
        </div>
        <input type="checkbox" id="alert" >
        <label for="alert">I want to receive an alert before the beginning of the shows I want to see</label>
        </div>
        <h4 id="profile_h4"> Your favorites kinds of music</h4>
        <div id="list_genres">
        <div class="genres_col">
        <input type="checkbox" id="rock" checked="checked">
        <label for="rock">Rock</label>
        <input type="checkbox" id="pop" >
        <label for="pop">Pop</label>
        <input type="checkbox" id="rap" checked="checked">
        <label for="rap">Rap</label>
        <input type="checkbox" id="classical" >
        <label for="classical">Classical</label>
        <input type="checkbox" id="blues" >
        <label for="blues">Blues</label>
        </div>
        <div class="genres_col">
        <input type="checkbox" id="jazz" checked="checked">
        <label for="jazz">Jazz</label>
        <input type="checkbox" id="hiphop" >
        <label for="hiphop">Hip-Hop</label>
        <input type="checkbox" id="electronic" checked="checked">
        <label for="electronic">Electronic</label>
        <input type="checkbox" id="folk" >
        <label for="folk">Folk</label>
        <input type="checkbox" id="metal" >
        <label for="metal">Metal</label>
        </div>
        <div class="genres_col">
        <input type="checkbox" id="latino" checked="checked">
        <label for="latino">Latino</label>
        <input type="checkbox" id="acoustic" >
        <label for="acoustic">Acoustic</label>
        <input type="checkbox" id="dance" checked="checked">
        <label for="dance">Dance</label>
        <input type="checkbox" id="indie" >
        <label for="indie">Indie</label>
        <input type="checkbox" id="disco" >
        <label for="disco">Disco</label>
        </div>
        <div class="genres_col">
        <input type="checkbox" id="jmusic" checked="checked">
        <label for="jmusic">Jmusic</label>
        <input type="checkbox" id="lounge" >
        <label for="lounge">Lounge</label>
        <input type="checkbox" id="ska" checked="checked">
        <label for="ska">Ska</label>
        <input type="checkbox" id="slam" >
        <label for="slam">Slam</label>
        <input type="checkbox" id="techno" >
        <label for="techno">Techno</label>
        </div>
        </div>

    </section>
    <section id="profile_bottom">
        <h4>Shows that you want to see</h4>
<ul class="list_wts">
        <div class="cont_wts"><svg version="1.1" class="profile_cross" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
<path d="M23.1,1.1l-7.9,8c-0.2,0.2-0.5,0.2-0.6,0l-8-8C6.3,1,6,1,5.8,1.1L1.1,5.8C1,6,1,6.3,1.1,6.5l8,8c0.2,0.2,0.2,0.5,0,0.6
	l-8,7.9c-0.2,0.2-0.2,0.5,0,0.6l4.7,4.7c0.2,0.2,0.5,0.2,0.6,0l8-8c0.2-0.2,0.5-0.2,0.6,0l8,8c0.2,0.2,0.5,0.2,0.6,0l4.7-4.7
	c0.2-0.2,0.2-0.5,0-0.6l-7.9-7.9c-0.2-0.2-0.2-0.5,0-0.6l8-8c0.2-0.2,0.2-0.5,0-0.6l-4.7-4.7C23.6,1,23.3,1,23.1,1.1z"/>
</svg>
        <a href="arkom.php" class="a_wts"><li>
            <img src="img/art_theo.png"><p class="tour_name">First part</p><p class="band_name">Théo Legrand</p><p class="date">15 July 2015</p></li></a></div>
    
        <div class="cont_wts"><svg version="1.1" class="profile_cross" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
<path d="M23.1,1.1l-7.9,8c-0.2,0.2-0.5,0.2-0.6,0l-8-8C6.3,1,6,1,5.8,1.1L1.1,5.8C1,6,1,6.3,1.1,6.5l8,8c0.2,0.2,0.2,0.5,0,0.6
	l-8,7.9c-0.2,0.2-0.2,0.5,0,0.6l4.7,4.7c0.2,0.2,0.5,0.2,0.6,0l8-8c0.2-0.2,0.5-0.2,0.6,0l8,8c0.2,0.2,0.5,0.2,0.6,0l4.7-4.7
	c0.2-0.2,0.2-0.5,0-0.6l-7.9-7.9c-0.2-0.2-0.2-0.5,0-0.6l8-8c0.2-0.2,0.2-0.5,0-0.6l-4.7-4.7C23.6,1,23.3,1,23.1,1.1z"/>
</svg>
        <a href="arkom.php" class="a_wts"><li><img src="img/art_junior.png"><p class="tour_name">Symphonic Tour</p><p class="band_name">Junior Opéra</p><p class="date">04 August 2015</p></li></a></div>
            
    <div class="cont_wts"><svg version="1.1" class="profile_cross" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
<path d="M23.1,1.1l-7.9,8c-0.2,0.2-0.5,0.2-0.6,0l-8-8C6.3,1,6,1,5.8,1.1L1.1,5.8C1,6,1,6.3,1.1,6.5l8,8c0.2,0.2,0.2,0.5,0,0.6
	l-8,7.9c-0.2,0.2-0.2,0.5,0,0.6l4.7,4.7c0.2,0.2,0.5,0.2,0.6,0l8-8c0.2-0.2,0.5-0.2,0.6,0l8,8c0.2,0.2,0.5,0.2,0.6,0l4.7-4.7
	c0.2-0.2,0.2-0.5,0-0.6l-7.9-7.9c-0.2-0.2-0.2-0.5,0-0.6l8-8c0.2-0.2,0.2-0.5,0-0.6l-4.7-4.7C23.6,1,23.3,1,23.1,1.1z"/>
</svg>
        <a href="arkom.php" class="a_wts"><li><img src="img/art_jae.png"><p class="tour_name">Banjo Banji</p><p class="band_name">Jae Gandhi</p><p class="date">15 August 2015</p></li></a></div>
        <div class="cont_wts"><svg version="1.1" class="profile_cross" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
<path d="M23.1,1.1l-7.9,8c-0.2,0.2-0.5,0.2-0.6,0l-8-8C6.3,1,6,1,5.8,1.1L1.1,5.8C1,6,1,6.3,1.1,6.5l8,8c0.2,0.2,0.2,0.5,0,0.6
	l-8,7.9c-0.2,0.2-0.2,0.5,0,0.6l4.7,4.7c0.2,0.2,0.5,0.2,0.6,0l8-8c0.2-0.2,0.5-0.2,0.6,0l8,8c0.2,0.2,0.5,0.2,0.6,0l4.7-4.7
	c0.2-0.2,0.2-0.5,0-0.6l-7.9-7.9c-0.2-0.2-0.2-0.5,0-0.6l8-8c0.2-0.2,0.2-0.5,0-0.6l-4.7-4.7C23.6,1,23.3,1,23.1,1.1z"/>
</svg>
            <a href="live.php"><li><img src="img/art_mac.png"><p class="tour_name">Acoustic Tour</p><p class="band_name">Mac Fergusson</p><p class="date">05 september 2015</p></li></a></div>
    <div class="cont_wts"><svg version="1.1" class="profile_cross" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
<path d="M23.1,1.1l-7.9,8c-0.2,0.2-0.5,0.2-0.6,0l-8-8C6.3,1,6,1,5.8,1.1L1.1,5.8C1,6,1,6.3,1.1,6.5l8,8c0.2,0.2,0.2,0.5,0,0.6
	l-8,7.9c-0.2,0.2-0.2,0.5,0,0.6l4.7,4.7c0.2,0.2,0.5,0.2,0.6,0l8-8c0.2-0.2,0.5-0.2,0.6,0l8,8c0.2,0.2,0.5,0.2,0.6,0l4.7-4.7
	c0.2-0.2,0.2-0.5,0-0.6l-7.9-7.9c-0.2-0.2-0.2-0.5,0-0.6l8-8c0.2-0.2,0.2-0.5,0-0.6l-4.7-4.7C23.6,1,23.3,1,23.1,1.1z"/>
</svg>
        <a href="arkom.php" class="a_wts"><li><img src="img/art_nalu.png"><p class="tour_name">Summer Set</p><p class="band_name">DJ Nalu</p><p class="date">26 september 2015</p></li></a></div>
        </ul>
    </section>
   
    </content>
    
<?php include("footer.php"); ?>
    

        
</body>
</html>