<footer>
    <ul>
        <a href="privacy.php"><li>Privacy policy</li></a>
        <a href="https://twitter.com/VITicket" target="_blank"><li>@VITicket</li></a>
    </ul>
        
    <?php
    include 'connexion.php';
    $config= array();
    $errors= array();
    $config['sujet']= "VIT Newsletter Subscription";
    $config['from']= "veryimportantticket@gmail.com";
    $config['confirmURL']="http://www.troye.be/tfe/juin/confirm.php?code=";
    $config['no_email']="Enter your email address please.";
    $config['wrong_email']="Your email address seems to be incorrect. Correct it please.";
    $config['email_exists']="You are already registered";
    $config['email_ok']="Check your mailbox to confirm your subscription";
    

    if(isset($_POST) && count($_POST)>0 && isset($_POST['email'])){
        try {
            // si la requête ne vient pas de ce serveur, l'interrompre, quelqu'un tente de l'utiliser pour                envoyer du spam.
            if(!strpos($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST'])){
                die("you should'nt be here.");
            }
            $email = trim($_POST['email']);

            // L'adresse email a-t-elle bien été encodée?
            if(empty($email) or ($email=='Your email')){
                $errors[]= $config['no_email'];
            }  

            // l'adresse email est-elle valide?
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) and (!empty($email)) and ($email!='Your email')){
                $errors[]= $config['wrong_email'];
            }

            // connect la base de données et vérifier si l'e-mail n'existe pas dans la DB
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT COUNT(*) FROM newsletter WHERE email='".$email."'";
            if ($res = $conn->query($sql)) {
                // récupère le nombre de lignes qui correspond à la requête SELECT 
                if ($res->fetchColumn() > 0) {
                    $errors[]= $config['email_exists'];
                } 
            }

            if(count($errors)<1){ 
                // prépare le sql statement et les paramètres
                $stmt = $conn->prepare("INSERT INTO newsletter (email, confirmed, code) VALUES (:pemail, :pconfirmed, :pcode)");
                $stmt->bindParam(':pemail', $pemail);
                $stmt->bindParam(':pconfirmed', $pconfirmed);
                $stmt->bindParam(':pcode', $pcode);
                // ajoute l'enregistrement
                $pemail = $email;
                $pconfirmed = false;
                $pcode = md5(uniqid());
                $stmt->execute();      
        
                // envoie le mail avec le lien de confirmation
                $message = "
                <html>
                <head>
                <title>";
                $message .= $config['sujet'];
                $message .= "</title>
                </head>
                <body>
                <p>Hello,</p>
                <p>To confirm you subscription to our newsletter, please follow this link: </p>
                <a style='color: black;font-weight: bold;font-size: 18px;' href='".$config['confirmURL'].$pcode."'>I confirm my subscription</a>
                <p>See you soon !</p>
                <p>VIT Team</p>
                <img width='300' src='http://www.troye.be/tfe/juin/img/logo.png'/>
                </body>
                </html>
                ";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: Very Important Ticket <".$config['from'].">" . "\r\n";
                mail($email, $config['sujet'], $message,$headers);
                $errors[]= $config['email_ok'];
            }
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        
        echo "<div class='news_feedback'>".$errors[0]."</div>";
        $conn = null;
    }
    ?>
    <form action="" method="post" id="newsletter" name='form_newsletter'><p>Don’t miss your favorites shows :</p><input id="inp_mail" type="text" name="email" placeholder="Your email"><button id="inp_send" type="submit" name='newsletter_submit'>Send</button></form>
    

</footer>