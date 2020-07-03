<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  </head>
    <?php include("header.php") ?>
    <body>
    <body>
    <?php

    if($_GET["page"] ==Accueil){
        include("vitrine-accueil.php");
        echo"<a href="vitrine-accueil.php"> Accueil</a>";
        
    }
    elseif($_GET["page"] ==Programme){
        include("vitrine-programme");
        echo"<a href="vitrine-programme.php"> Programme</a>":
    }
    elseif($_GET["page"]==Contact){
        include("vitrine-contact");
        echo"<a href="vitrine-conacts.php"> Contact </a>";
    }
    ?>
    </body>
    </body>
    <?php include("footer.php"); ?>
</html>