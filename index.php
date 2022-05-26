<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <nav class="navigation_navbar">
        <ul>
            <li>
                <a href="index.php?page=0"><img class="image-logo" src="images/logo.png" alt="logo jeux olympiques"/></a>
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
            require_once("typeservice.php");
            break;
        case 3:
            require_once("inscription.php");
            break;
        case 4:
            require_once("connexion.php");
            break;
    }
    ?>

<h1>Bienvenue</h1>

</body>

</html>