<?php
    
    $bdd = new PDO('mysql:host=localhost;dbname=expliquesimplemt', 'root', '');

    if(isset($_POST['formulaireconnexion']))
    {
        $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
        $motdepasseconnect = htmlspecialchars($_POST['motdepasseconnect']);

        if(!empty($pseudoconnect) AND !empty($motdepasseconnect))
        {
            $requeteUser = $bdd -> prepare ("SELECT * FROM inscriptions WHERE pseudo = ? AND motdepasse = ?");
            $requeteUser -> execute(array($pseudoconnect, $motdepasseconnect));
            $UserExist = $requeteUser -> rowCount();

            if($UserExist == 0)
            {
                $erreur ="Vous etes Connecter";
            }
            else
            {
                $erreur ="Mauvais identifiant ou Mot de passe";
            }
        }
        else
        {
            $erreur = "tous les champs doivent etres completes ";
        }
    }

    if(isset($erreur))
    {
        echo '<font color ="red">'.$erreur."</font>";
    }
?>