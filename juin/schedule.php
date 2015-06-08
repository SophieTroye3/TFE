<!DOCTYPE html>
<html>
<head>
    <title>Schedule | VIT | TFE Sophie Troye</title>
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
        <div id="header_container">
            <a href="index.php">
                <div id="logo_container">
                    <img class="logo" src="img/logo.png" alt="VIT - Multicam Concert Streaming"/>
                </div>
            </a>
            <ul class="member">
                <a href="sign.php"><li>Sign up</li></a>
                <a href="profile.php"><li>Login</li></a>
            </ul>
            <h1>Schedule</h1>
        </div>
        <div id="menus">
        <!--<ul class="social">
                <a href="#"><li></li></a>
            <a href="#"><li></li></a>
            </ul>-->
        <div id="menu_space">
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="schedule.php"><li class="active_menu" >Schedule</li></a>
                <a href="latest.php"><li>Latest shows</li></a>
                <a href="artists.php"><li>Artists</li></a>
                <a href="pro.php"><li><nobr>I'm a professional</nobr></li></a>
                <a href="guided.php"><li>Guided tour</li></a>
            </ul>
        </div>
        </div>
        
    </header>
    <content>
   
    <section class="left_section">
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
       <a href="live.php" class="schedule_highlight">
           <div id="schedule_highlight_play"></div>
           <div class="schedule_highlight_text">
           <p>Arkom</p><p>Live Now !</p></div>
        </a>
       
    </section>
        
    <section id="schedule_content">
        <ul class="schedule">
            <a href="arkom.php"><li><div class="sch_header"><div class="sch_date"><p>02 July <span>20:00</span></p></div></div><div class="sch_infos"><p class="band_name">Sweet Melody</p><p class="tour_name">Complicity Tour</p><p class="watch">Artist page ></p></div></li></a>
            <a href="arkom.php"><li><div class="sch_header"><div class="sch_date"><p>15 July <span>20:00</span></p></div></div><div class="sch_infos"><p class="band_name">The Kraken Released</p><p class="tour_name">The Ship</p><p class="watch">Artist page ></p></div></li></a>
            <a href="arkom.php"><li><div class="sch_header"><div class="sch_date"><p>04 August <span>21:00</span></p></div></div><div class="sch_infos"><p class="band_name">Theo Legrand</p><p class="tour_name">First part</p><p class="watch">Artist page ></p></div></li></a>
            <a href="arkom.php"><li><div class="sch_header"><div class="sch_date"><p>08 August <span>19:30</span></p></div></div><div class="sch_infos"><p class="band_name">Junior Opéra</p><p class="tour_name">Symphonic tour</p><p class="watch">Artist page ></p></div></li></a>
            <a href="arkom.php"><li><div class="sch_header"><div class="sch_date"><p>15 August <span>21:30</span></p></div></div><div class="sch_infos"><p class="band_name">Jae gandhi</p><p class="tour_name">Banjo Banji</p><p class="watch">Artist page ></p></div></li></a>
            <a href="arkom.php"><li><div class="sch_header"><div class="sch_date"><p>05 September <span>20:00</span></p></div></div><div class="sch_infos"><p class="band_name">Mac Fergusson</p><p class="tour_name">Acoustic Tour</p><p class="watch">Artist page ></p></div></li></a>
            <a href="arkom.php"><li><div class="sch_header"><div class="sch_date"><p>26 September <span>21:00</span></p></div></div><div class="sch_infos"><p class="band_name">DJ Nalu</p><p class="tour_name">Summer Set</p><p class="watch">Artist page ></p></div></li></a>
        </ul>
    </section>
   
    </content>
    
<?php include("footer.php"); ?>
    
    
    
 
        
</body>
</html>