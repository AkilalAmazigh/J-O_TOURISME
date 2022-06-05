<?php
require_once("controleur/controleur.class.php");
require_once("controleur/config_bdd.php");

// instanciation du controleur 
$unControleur = new Controleur($serveur, $bdd, $user, $mdp);

?>


<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Document</title> 
</head>

<body>
    <header>
        <nav class="navigation_navbar">
            <ul>
                <li>
                    <a href="index.php?page=0"><img class="image-logo" src="images/logo.png" alt="logo jeux olympiques" /></a>
                </li>
                <li>
                    <a href="index.php?page=1">Évènements</a>
                </li>
                <li>
                    <a href="index.php?page=2">Autres services</a>
                </li>
                <li>
                    <a href="index.php?page=3">S'inscrire</a>
                </li>
                <li>
                    <a href="index.php?page=4">Se connecter</a>
                </li>
            </ul>
        </nav>



        <?php
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 0;
        }
        switch ($page) {
            case 0:
                require_once("index.php");
                break;
            case 1:
                require_once("evenement.php");
                break;
            case 2:
                require_once("service.php");
                break;
            case 3:
                require_once("inscription.php");
                break;
            case 4:
                require_once("connexion.php");
                break;
        }
        ?>
    </header>

    <main>

        <h1> Mettre le titre ici ! </h1>
    
    </main>

    <footer>

    </footer>

</body>

</html>