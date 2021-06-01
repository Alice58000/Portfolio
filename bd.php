<?php

// Connexion à la base de données

try
{
$bdd = new PDO('mysql:host=localhost;dbname=mes_projets;charset=utf8', 'root', ''); // Je me connecte en PDO à ma base de donnée MySql
}

catch (Exception $e) // Si il y a une erreur
{
die('Erreur : ' . $e->getMessage()); // Alors ca me retourne un message m'informant la provenance de cette erreur Exemple : Base 'Connexionn' inconnue | Un n en trop à la fin et se n'est plus la bonne base de donnée
}


    
   // Vérifier si le formulaire est soumis 

     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_POST['nom_du_projet']; 
     $moyen = $_POST['moyens_utilisés']; 
     $photo = $_POST['photo'];
     $lien = $_POST['lien'];
     $lien2 = $_POST['lien2'];
     $afficher = $_POST['afficher'];
     
     // afficher le résultat
     $bdd->exec("INSERT INTO projet(nom_du_projet, moyens_utilisés, photo, lien, lien2, afficher) VALUES('$nom','$moyen','$photo', '$lien', '$lien2', '$afficher')");
     echo '<h3>Données transmises à la base de données </h3>';
     header ('Location: projet.php');


?>
    