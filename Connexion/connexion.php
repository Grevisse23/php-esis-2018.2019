<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connexion</title>
</head>
<body>
<div align="center">
        <h1>Connexion</h1>
        <br /><br /><br />

         <form method="POST" action="traitement_connexion.php">
            <table>
                <tr>
                    <td>
                        <label for="pseudoconnect"> Pseudo :</label>
                    </td>
                    <td>
                        <input type="text" name="pseudoconnect" placeholder="Pseudo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="motdepasseconnect"> Mot de passe :</label>
                    </td> 
                    <td>
                        <input type="password" name="motdepasseconnect" placeholder="mot de passe">    
                    </td>
                </tr>
            </table>
            <br/> <br/>
            <input type="submit" value="Se Connecter" name="formulaireconnexion"/>   
         </form>
         <?php
            if(isset($erreur))
            {
                echo '<font color ="red">'.$erreur."</font>";
            }
         ?>
</div>
    
</body>
</html>