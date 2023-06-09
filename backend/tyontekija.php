<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--jQuery & JavaScript links-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!--<script src="js/myScript.js"></script>-->
    <link rel="stylesheet" href="../css/mycss.css">
    <!-- Fontin linkki -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 
        <title>Työntekijän sivu</title>
    </head>
    <body>
    <?php include '../header.html'; ?>
     <div class="container text-center ">
        <h1></h1>
        <a href="../index.html">Takaisin</a>
        <?php
        if($_SESSION['rooli'] == "tyontekija"){ ?>
        <a href="http://localhost/vlampsij.github.io/backend/logout.php">Kirjaudu ulos</a><br>
        <h3 class="mt-4">Valitse työntekijän toiminto</h3>
        <div>
            <a href="http://localhost/vlampsij.github.io/backend/uusiTyontekija.php">Muokkaa työntekijän tietoja</a>
        </div>
        <br>
        <div>
            <a href="http://localhost/vlampsij.github.io/backend/tyolista.php">Työlista ja tilanhallinta</a>
        </div>
        <br>
        <div>
            <a href="http://localhost/vlampsij.github.io/backend/yhteydenottopyynnot.php">Katso yhteydenottopyynnöt</a>
        </div>
        <?php }else{ ?>
            <p>Tunnuksella ei oikeuksia nähdä sivua</p>
        <?php } ?>
     </div>
     <?php include '../footer.html'; ?>
    </body>
</html>