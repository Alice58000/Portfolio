<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   

    <title>Portfolio</title>

</head>
<body>
<form action="connexion.php" method="post">


        <input  type="text" name="nom" placeholder="Nom" required>
            <br> <br>


        <input type="password" name="mdp" placeholder="Mot de passe" required>
            <br> <br>    
            
            <br> <input type="submit" name="btn" value="Connexion">

    <?php


          $nom='Alice';
          $mdp='1234';
          if (isset($_POST['btn']))
          {
          if($_POST['nom'] == 'Alice' && $_POST['mdp'] == '1234')
          {
              $_SESSION['acces']="oui";
              header('location:projet.php');
          }
          else {
              echo "<p class='afficher'> connexion impossible </p>";
          }
        }
        
?>
</form>
</body>
</html>