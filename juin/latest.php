<!DOCTYPE html>
<html>
<head>
    <title>Latest Shows | VIT | TFE Sophie Troye</title>
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
            <h1 class="h1_latest">Latest shows</h1>
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
                <a href="latest.php"><li class="active_menu">Latest shows</li></a>
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
            <a href="live.php"><li><img class="artist_small" src="img/small_steph.png" alt="Artist picture" /><p class="band_name">Stéphane Rico</p><p class="date">03 March 2015</p></li></a>
            <a href="live.php"><li><img class="artist_small" src="img/small_nico.png" alt="Artist picture"/><p class="band_name">Nico & Dimitri</p><p class="date">14 February 2015</p></li></a>
            <a href="live.php"><li><img class="artist_small" src="img/small_summer.png" alt="Artist picture"/><p class="band_name">Summer Dreams</p><p class="date">03 February 2015</p></li></a>
        </ul>
       <a href="live.php" class="schedule_highlight">
           <div id="schedule_highlight_play"></div>
           <div class="schedule_highlight_text">
           <p>Arkom</p><p>Live Now !</p></div>
        </a>
       
    </section>
        
    <section id="schedule_content">
        <ul class="schedule latest">
            <a href="live.php"><li><div class="sch_header"><div class="sch_date"><p>03 March <span>20:00</span></p></div></div><div class="sch_infos"><p class="band_name">Stéphane Rico</p><p class="tour_name">Me and My Guitar</p><p class="watch">Replay ></p></div></li></a>
            <a href="live.php"><li><div class="sch_header"><div class="sch_date"><p>14 February <span>21:00</span></p></div></div><div class="sch_infos"><p class="band_name">Nico & Dimitri</p><p class="tour_name">Incredible Tour</p><p class="watch">Replay ></p></div></li></a>
            <a href="live.php"><li><div class="sch_header"><div class="sch_date"><p>03 February <span>19:00</span></p></div></div><div class="sch_infos"><p class="band_name">Summer Dreams</p><p class="tour_name">Unknow Tour</p><p class="watch">Replay ></p></div></li></a>
            <a href="live.php"><li><div class="sch_header"><div class="sch_date"><p>22 January <span>20:30</span></p></div></div><div class="sch_infos"><p class="band_name">El Gitano</p><p class="tour_name">6 Cords</p><p class="watch">Replay ></p></div></li></a>
            <a href="live.php"><li><div class="sch_header"><div class="sch_date"><p>14 January <span>21:30</span></p></div></div><div class="sch_infos"><p class="band_name">Big Mouse</p><p class="tour_name">European Tour</p><p class="watch">Replay ></p></div></li></a>
            
        </ul>
    </section>
   
    </content>
    
<?php include("footer.php"); ?>
    

 
        
</body>
</html>