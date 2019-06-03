<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="index.css">
        <title>Mini-chat</title>     
    </head>
    
    <body>     
       
        <!-- Formulaire -->
        <form method="POST" action="script.php" >
            <fieldset>
                <div class="formulaire">
                    <input type="text" name="pseudo" placeholder="Pseudo" required><br/>
                    <textarea type="text" name="message" placeholder="Ecrivez votre Message..." rows="6" cols="70" required></textarea><br/>
                    <input type="submit" name="envoyer" value="Envoyer">
                </div>
            </fieldset>
        </form>
        
        
        <?php     
            // Affiche les messages
            $mysqli=new mysqli ("localhost","root","","TP");
            $selectUser="SELECT * FROM minichat ORDER BY Id DESC LIMIT 0,20";            
            $result=$mysqli->query($selectUser);

            if($result->num_rows>0){
                while($resultat_requete=$result->fetch_assoc()){
                    ?>
                        <div class="resultat">
                            <h3><?php echo $resultat_requete["Pseudo"]?> :</h3>
                            <p><?php echo $resultat_requete["Message"];?></p>
                        </div>
                    <?php
                }
            }                    
        ?>

    </body>
</html>