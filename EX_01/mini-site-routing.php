<!DOCTYPE html>
<html>
    <meta charset="utf-8">
<head>
    <title>mini-site-routing</title>
<a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1">Accueil !</a>
<a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2">Page1</a>
<a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3">Page2</a>
</head>
<body>
    <?php
    if($_GET["page"] ==1){
        echo"<h1>Accueil : </h1>";
    
    }
    elseif($_GET["page"] ==2){
        echo"<h1>Page 2</h1>";
    }
    elseif($_GET["page"] ==3){
        echo"<h1>Page 3</h1>";
    }
    ?>
<body>
</html>