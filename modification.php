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
    
   </html>

<?php

// Connexion à la base de données

try
{
$bdd = new PDO('mysql:host=localhost;dbname=mes_projets;charset=utf8', 'root', ''); // Je me connecte en PDO à ma base de donnée MySql
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}


catch (Exception $e) // Si il y a une erreur
{
die('Erreur : ' . $e->getMessage()); // Alors ca me retourne un message m'informant la provenance de cette erreur Exemple : Base 'Connexionn' inconnue | Un n en trop à la fin et se n'est plus la bonne base de donnée
}
?>

    
 
   <?php
        if(isset($_POST["nom_du_projet"]) && isset($_POST["moyens_utilisés"]) && isset($_POST["photo"]) && isset($_POST["lien"]) &&isset($_POST["lien2"]) && isset($_POST["id"]) && isset($_POST["afficher"])) {
            $nom=$_POST["nom_du_projet"];
            $moyen=$_POST["moyens_utilisés"];
            $photo=$_POST["photo"];
            $lien=$_POST["lien"];
            $lien2=$_POST["lien2"];
            $afficher=$_POST["afficher"];
            $id=$_POST["id"];

            $sql = "UPDATE projet  SET nom_du_projet='{$nom}', moyens_utilisés='{$moyen}' , photo='{$photo}' , lien='{$lien}' , lien2='{$lien2}' , afficher='{$afficher}' WHERE id='{$id}'";
            $h = $bdd->exec($sql);

            header('Location: projet.php');
        }
     else {
         if(!isset($_GET['id']))
         echo "il manque un argument";
     }
     
?>

<form action="modification.php" method="Post">
                
<input  type="text" name="nom_du_projet" placeholder="Nom du projet" required>
<br> <br>


<input  type="text" name="moyens_utilisés" placeholder="Moyens utilisés" required>
<br> <br>


<input  type="text" name="photo" placeholder="Photo" required>
<br> <br>


<input  type="text" name="lien" placeholder="Lien" required>
<br> <br>
  
<input  type="text" name="lien2" placeholder="Lien-github" required>
<br> <br>

<input  type="text" name="afficher" placeholder="Afficher" required>
<br> <br>

   <input type="hidden" name="id" value="<?php if(isset($_GET["id"])) echo $_GET["id"];?>">
 <br> <input type="submit" value="Modifier" >

 <br> <br>

 </form>
 <script type="text/javascript" language="javascript">
  if (confirm("Vous désirez vraiment modifier?")) {
    alert("oui")
  }
  else {
    alert("non")
  }
</script>

