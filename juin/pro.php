<?php
/*
	MON PREMIER FORMULAIRE DE CONTACT EN PHP.
	
	auteur: alexandre AT pixeline.be (le script fonctionne. Aucun support n'est fourni, cherche sur internet)
	pour: étudiants DWM
	version: 03.02.2013
	
*/


// POUR VERIFIER CE QU'ENVOIE TON FORMULAIRE, DECOMMENTE LES LIGNES SUIVANTES: (décommenter = enlever les double-slash // et/ou les /* et */ )

/*
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
exit;
*/

// touche pas à ceci
$conf = array();

/*
:::::::::::   INSTRUCTIONS    :::::::::::

1.// Dans ton formulaire html, utiliser les champs aux attributs name= "message", "nom", "courriel"
Ces 3 champs seront vérifiés pour validation.

Tout autre champs sera ajouté, sans vérification.


2.// changer les valeurs des variables ci-dessous.
*/

$conf['email']= 'sophietroye3@gmail.com';
$conf['sujet']= 'VIT Contact Pro';
$conf['page_merci']= 'thanks.php';
// Messages d'erreur
$conf['complete']="Please complete all fields.";
$conf['wrong_email']="Your email address seems to be incorrect.";


$err= array();

if(isset($_POST) && count($_POST)>0){

	if(!strpos($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST'])){
		// si la requête ne vient pas de ce serveur, l'interrompre, quelqu'un tente de l'utiliser pour envoyer du spam.
		die("you should'nt be here.");
	}
	
	
	$first = trim($_POST['first']);
    $last = trim($_POST['last']);
    $artist = trim($_POST['artist']);
	$mail = trim($_POST['mail']);
    $date = trim($_POST['date']);
    $phone = trim($_POST['phone']);
	$place = trim($_POST['place']);
	$talk = trim($_POST['talk']);
    $message = trim($_POST['message']);

	if(empty($first) or empty($last) or empty($artist) or empty($mail) or empty($phone) or empty($place) or empty($talk)){
		// Est-ce que les champs ont tous été complétés ?
		$err[]=  $conf['complete'];
	}

	if (!filter_var($mail, FILTER_VALIDATE_EMAIL) and (!empty($mail)) ) {
		// l'adresse email est-elle valide?
		$err[]= $conf['wrong_email'];
	}



	if(count($err)<1){

		$message= "Nom : $first $last ($mail)\n\rartist : $artist\n\r Date : $date\n\rphone : $phone \n\rplace: $place\n\r About the event : $talk";
		
		

		$message = wordwrap($message, 70, "\r\n");
		// send the email
		if(empty($conf['email'])){
			die("La configuration du formulaire n'est pas correcte. (regarde pour config['email']) dans le code php");
		}
		mail($conf['email'], $conf['sujet'], $message);
		// redirect to thank you page
		header("Location: ".$conf['page_merci']);
		exit;
	}
}
// OK, A PARTIR D'ICI TU PEUX TOUCHER...

// TOUT TON CODE HTML VA CI-DESSOUS
?>
<!DOCTYPE html>
<html>
<head>
    <title>I'm a professional | VIT | TFE Sophie Troye</title>
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
            <h1 id="pro_h1">Are you a professional ?</h1>
            <p id="punchline">Stay close to your fans</p>
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
                <a href="pro.php"><li class="active_menu"><nobr>I'm a professional</nobr></li></a>
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
        
    <section id="pro_content">
        <!--<p class="pro_p_1">VIT offers a unique way to thank your fans and take them with you on tour !</p>-->
        <div id="how">
            <h4>How ?</h4>
            <p>Our team goes to the location of the show and capture your performance live. </p><p>Then we make the video available on our website for your fans.</p><p> All you have to do is contact us and give everything on stage !</p>
        </div>
        <div id="why">
            <h4>Why ?</h4>
            <p>VIT Offers a complementary service to your concert. </p><p>The first reason to use it is to please your fans but it can also help you to make yourself known or promote your products ( CD's, DVD's, ... ).</p>
        </div>
        <p id="interested">If you are interested please complete this form * :</p>
        <p id="belgium">* At the moment, our service is only available in Belgium.</p>
        
        <form class= "form_pro" action="" method="post" name='form_pro'>
    <div>
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first"/>
    </div>
    <div>
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last"/>
    </div>
    <div>
        <label for="artist_name">Artist Name</label>
        <input type="text" id="artist_name" name="artist"/>
    </div>
    <div>
        <label for="pro_email">Email Address</label>
        <input type="text" id="pro_email" name="mail"/>
    </div>
    <div>
        <label for="phone">Phone number</label>
        <input type="text" id="phone" name="phone"/>
    </div>
    <div>
        <label for="date">Event date</label>
        <input type="date" id="date" name="date"/>
    </div>
    <div>
        <label for="place">Event place</label>
        <input type="text" id="place" name="place"/>

    </div>
    <div id="pro_comment">
        <label for="comment">Talk about your event</label>
        <br>
        <textarea name="talk"></textarea>
    </div>
    <button type="submit" name='form_pro_submit'>Send</button>
            
            <?php
    // if form has been submitted, show the errors
        if($_POST && count($err)>0){
        ?>
	   <ul>
	   <?php
	       foreach($err as $e){
		      echo "<p id='pro_errors'>$e</p>";
	       }
	   ?>
	   </ul>
	   <?php
}
        ?>

</form>

       
    </section>
   
    </content>
    
<?php include("footer.php"); ?>
    

        
</body>
</html>