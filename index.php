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
    <nav>
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
                <a href="connexion.php"> Projets</a>
            </li>
        </ul>
    </nav>
    <div id="alice">
        <img class="moi2" src="moi.jpeg" alt="moi" width="300px" height="400px">
        <h1>Alice FINOT</h1>
    </div>
 
    <div id="debut">

        <div>
            <h3 class="moi">A propos</h3>
            <p class="propos"> Passionnée par le web, je suis entrée en formation Access Code School de Développeur Web
                et Web Mobile, j'aimerais après mon titre qui aura lieu au mois de décembre, me diriger vers une
                formation de Développeur d'Applications Web et Mobile. </p>
        </div>
    </div>

    <h3 id="titre">Mes projets</h3>
        <div id="projet2">
    <?php
        $bdd = new PDO('mysql:host=localhost;dbname=mes_projets;charset=utf8', 'root', '');
        $sql = "SELECT * FROM projet WHERE afficher='oui'" ;
        foreach ($bdd -> query($sql) as $row) {
       
    ?>
   
    <div class="duo1">
            <a href=" <?php echo $row['lien']; ?>" target="_blank"> <img src= <?php echo $row['photo'] ?>
                    alt="projet1" width="330px"> </a>
            <div> <a href=<?php echo $row['lien2']; ?> target="_blank"><img class="github"
                        src="github4.png"></a>
            </div>
    </div>
       
    <?php
    } ; 
    ?>
        </div>

    <h3 id="competence">Mes compétences</h3> 
    <conteneur>
        <div class="logo">
            <div class="html">
                <img src="html_seul.png" alt="html">
            </div>

            <div class="html">
                <img src="css_seul.png" alt="html">
            </div>

            <div class="html">
                <img src="js_seul.png" alt="html">
            </div>

            <div class="html">
                <img src="php_seul.png" alt="html">
            </div>

            <div class="html">
                <img src="mysql_seul.png" alt="html">
            </div>

            <div class="html">
                <img class="logo2" src="ps.png" alt="html">
            </div>

            <div class="html">
                <img class="logo2" src="ai.png" alt="html">
            </div>

            <div class="html">
                <img class="logo2" src="figma.png" alt="html">
            </div>

            <div class="html">
                <img class="logo2" src="github4.png" alt="html">
            </div>

        </div>
    </conteneur>

    <footer id="footer">

        <section>
            <div class="formulaire">
                <h2 class="contact"> Me contacter </h2>
                <br>
               
                <form action="form.php" method="POST">


                    <input class="form" type="text" name="nom" placeholder="Nom" required>
                    <br> <br>


                    <input class="form" type="text" name="prénom" placeholder="Prénom" required>
                    <br> <br>


                    <input class="form" type="email" name="adresse" placeholder="Mail" required>
                    <br> <br>


                    <input class="form" type="text" name="tel" placeholder="Téléphone" required>
                    <br> <br>


                    <textarea class="form" name="user_message" placeholder="Message"></textarea>
                    <br> <br>

                    </select>


                    <br> <input type="submit" value="Envoyer">
                    <br> <br>

                </form>

            </div>
        </section>

        <div class="lien">
            <a href="https://github.com/Alice58000" target="_blank"><img src="github4.png" alt="git" width="100px"></a>
            <a href="https://www.linkedin.com/in/alice-finot/" target="_blank"><img src="linkdin.png" alt="link"
                    width="100px"></a>
            <a class="cv" href="PDF/CV_Alice_Développeur_web.pdf" target="_blank"><img src="logotelechargement.png"
                    alt="logo" width="100px"> </a>
        </div>

    </footer>

    <script src="main.js"></script>
    
</body>

</html>

    
    








