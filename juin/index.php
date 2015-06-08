<!DOCTYPE html>
<html>
<head>
    <title>VIT | TFE Sophie Troye</title>
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
        </div>
        <div id="menus">
        <!--<ul class="social">
                <a href="#"><li></li></a>
            <a href="#"><li></li></a>
            </ul>-->
        <div id="menu_space">
            <ul>
                <a href="index.php"><li class="active_menu">Home</li></a>
                <a href="schedule.php"><li>Schedule</li></a>
                <a href="latest.php"><li>Latest shows</li></a>
                <a href="artists.php"><li>Artists</li></a>
                <a href="pro.php"><li>I'm a professional</li></a>
                <a href="guided.php"><li>Guided tour</li></a>
            </ul>
        </div>
        </div>
    </header>
    <content>
    <a href="live.php"><div id="highlight">
        <div id="highlight_play"></div>
        <div id="highlight_text">
            <h2>Arkom</h2>
            <h3>Live now !</h3>
        </div>
    </div>
        </a>
    <section class="left_section">
        <h4>Schedule</h4>
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
        <h4>Latest Shows</h4>
        <ul class="list_latest">
        <a href="live.php"><li><img src="img/medium_DJ.png"><p class="tour_name">Incredible Tour</p><p class="band_name">Nico & Dimitri</p><p class="date">14 February 2015</p></li></a>
        <a href="live.php"><li><img src="img/medium_steph.png"><p class="tour_name">Me and my guitar</p><p class="band_name">Stéphane Rico</p><p class="date">03 March 2015</p></li></a>
        </ul>
    </section>
    <section class="bottom_section">
        <ul class="big_buttons">
            <a href="pro.php"><li><h5>Are you Performing Live ?</h5><p>Discover our offers for professionals</p></li></a>
            <a href="guided.php"><li><h5>New here ?</h5><p>Explore VIT ... and enjoy live music at home !</p></li></a>
        </ul>
    </section>
    </content>
    
    
<?php include("footer.php"); ?>
    
        
</body>
</html>