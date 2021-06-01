<?php
session_start();

if(!isset($_SESSION['acces']))
header('Location:index.php');
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
       
<ul class="menu">
            <li>
                <a href="index.php">Accueil</a>
            </li>
            <li>
                <a href="#titre">Mes projets</a>
            </li>

            <li>
                <a href="#competence">Mes compétences</a>
            </li>
            <li>
                <a href="#footer"> Contact</a>
            </li>
            <li>
                <a href="projet.php"> Projets</a>
            </li>
        </ul>

    <section>
            <div class="formulaire">
                <h2> Mes projets </h2>
                <br>
                <form action="bd.php" method="Post">

                
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

                     </select>

                    <br> <input type="submit" value="Ajouter">
                    <br> <br>

                </form>
  


            </div>
        </section>
        </body>
</html>
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
?>



    <?php

$sql = "SELECT * FROM projet";
    foreach ($bdd -> query($sql) as $row) {
    
      
        
        echo '<a href="suppression.php?id=' . $row["id"] . '">Suppprimer</a>' ;
        echo '<a href="modification.php?id=' . $row["id"] . '">Modifier</a>' ;
   
        ?>

    <div class="duo1">
            <a href=" <?php echo $row['lien']; ?>" target="_blank"> <img src=<?php echo $row['photo'] ?>
                    alt="projet1" width="330px"> </a>
            <div> <a href=<?php echo $row['lien2']; ?> target="_blank"><img class="github"
                        src="github4.png"></a>
            </div>
    </div>
       
        <?php
    } ; 
    ?>

    <div class="deco">
    <a href="deconnexion.php"> deconnection </a>
    </div>
</body>
</html>

