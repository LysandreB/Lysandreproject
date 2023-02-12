<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <section>
       <h1> Connexion</h1><br><br>
       <form method="post"> 
           <div class="form"><label>Mot de passe:</label>
           <input class="password" type="text" name="mdp">
           <input class="boutton" type="submit" value="Envoyer" name="boutton-valider"></div>
		   <?php
		   if(!empty($_POST["boutton-valider"])) {
    $mdp='lysandre';
	$mdpv=$_POST["mdp"];
	if($mdp == $mdpv){
			  header("location:images/fichier.php");
		  }
		   }
  ?>
       </form>
   </section> 
</body>
</html>