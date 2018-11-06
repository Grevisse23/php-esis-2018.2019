<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <h1>Inscription</h1>
        <br /><br /><br />
        
        <form method="POST" action="inscription.php">
            <table>
                <tr>
                    <td>
                        <label for="pseudo"> Pseudo :</label>
                    </td>
                    <td>
                         <input type="text" placeholder="pseudo" id ="pseudo" name="pseudo" />
                    </td>
                </tr>
                <tr>   
                    <td>
                        <label for="motdepasse"> Mot de passe :</label>
                    </td>
                    <td>
                         <input type="password" placeholder="Mot de passee" id ="motdepasse" name="motdepasse" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="confmotdepasse"> Confirmer mot de passe :</label>
                    </td>
                    <td>
                         <input type="password" placeholder="Confirmer mot de passe" id ="confmotdepasse" name="confmotdepasse" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">E-mail :</label>
                    </td>
                    <td>
                         <input type="email" placeholder="E-mail" id ="email" name="email" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sexe">Sexe :</label>
                    </td>
                    <td>
                        <select id="sexe" name="sexe" >
                            <option value ="F"> F</option>
                            <option value ="M"> M</option>
                        </select>
                    </td>

                </tr>
            </table>
           <br /><br />
           <input type="submit" name="formulaireinscription" value="s'inscrire" /> 
           
        </form>
        
    </div>
</body>
</html>