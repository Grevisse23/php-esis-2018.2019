<?php
    $bdd = new PDO('mysql:host=localhost;dbname=expliquesimplemt', 'root', '');

    if(isset($_POST['formulaireinscription']))
    {
        if(!empty($_POST['pseudo']) AND !empty($_POST['motdepasse']) AND !empty($_POST['confmotdepasse']) AND !empty($_POST['email']) AND !empty($_POST['sexe']))
        {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $motdepasse = sha1($_POST['motdepasse']);
            $confmotdepasse = sha1($_POST['confmotdepasse']);
            $email = htmlspecialchars($_POST['email']);
            $sexe = htmlspecialchars($_POST['sexe']);

            $pseudolength = strlen($pseudo);
            if($pseudolength <= 255)
            {
                if ($motdepasse == $confmotdepasse)
                {
                    $insert = $bdd -> prepare("INSERT INTO inscriptions(pseudo,motdepasse,confmotdepasse,email,sexe) VALUES(?,?,?,?,?)");
                    $insert-> execute(array($pseudo,$motdepasse,$confmotdepasse,$email,$sexe));
                    $erreur = "votre compte a bien ete creer";
                    header('Location: connexion.php');
                }
                else
                {
                    $erreur="votre mot de passe ne correspond pas";
                }
            }
            else
            {
                $erreur = "votre pseudo ne doivent pas depasser 255 caracteres";
            }
        }
        else 
        {
           $erreur = "Tous les champs doivent etre completer";
        }
    }
            if(isset($erreur))
            {
                echo '<font color ="red">'.$erreur."</font>";
            }

?>


