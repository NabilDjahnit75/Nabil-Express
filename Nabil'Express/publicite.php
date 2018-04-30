<?php
require_once 'tools/common.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/bootstrap.css" type="text/css">
    <?php require 'partials/head_assets.php'; ?>
</head>
<body class="index-body">
<div class="container-fluid">
    <?php require 'partials/header.php'; ?>

    <div style="margin-top: -5px" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="pub.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="pub2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="pub3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <br/>
        <br/>
        <h1><bold>Publicité :</bold></h1><br/>
        <h3 style="color: #3F8EBF">Vous souhaitez communiquer sur Nabil'Express ?</h3><br/>
        <p>Profitez de la puissance du site Nabil'Express pour communiquer auprès d'une audience captive en phase d'achat. Avec 24 millions de visiteurs uniques mensuels, Nabil'Express est la 5ème marque digitale française (Source Médiamétrie Internet GLOBAL 3 écrans - Juillet 2016). Ses solutions publicitaires vous permettent de toucher 1 internaute Français sur 2, dans leur phase d'achat.</p>
        <br/>
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img src="5.png" alt="">
                </div>
                <div class="col-sm">
                    <img src="6.png" alt="">
                </div>
                <div class="col-sm">
                    <img src="7.png" alt="">
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/><br/><br/>
        <h1><bold>Publicité Libre Service :</bold></h1>  <br/>


        <h3 style="color: #3F8EBF">Envoyez vos publicités à Nabil'Express :</h3>

        <p>Tirez parti de la puissance du site  Nabil'Express avec notre nouvelle solution publicitaire clefs en main !<br/>
            Créez des publicités en toute simplicité depuis votre ordinateur, tablette ou smartphone :<br/>
            1. Suivez nos conseils pour créer des publicités efficaces<br/>
            2. Ciblez votre clientèle en local ou en national<br/>
            3. Choisissez votre budget<br/>
            Avec nos outils inclus<br/>
            - Suivez en temps réel les clics générés vers votre site ou boutique<br/>
            - Optimisez les performances de votre publicité
        </p><br/><br/>

<h1 style="color: #3F8EBF"><bold>PERFORMANCE :</bold></h1>
        <br/>
        <br/>
        <p>Les solutions et outils publicitaires de Nabil'Express répondent à tous les objectifs d'acquisition de trafic,<br/> d'augmentation des ventes et de fidélisation. Ses leviers d'optimisation permettent d'affiner le ciblage sur des critères sociodémographiques ,<br/>et contextuels pour limiter la déperdition et toucher des internautes captifs.
            Vos pub sponsorisée vous permet une mise en avant exceptionnelle de vos produits grâce à un format publicitaire immersif au cœur du site.  le format idéal pour communiquer sur vos opérations spéciales.
            vous touchez une audience ultra qualifiée grâce à un positionnement privilégié de votre publicité sur notre site.
            Vous communiquez sur votre activité tout en maîtrisant votre budget, c'est le format à la performance dédié à la mise en avant de vos actualités : proposition de service, réduction, offre promo.</p>
        <br/>
        <br/>
    </div>



  <div class="container-fluid">


  </div>

    <?php require 'partials/footer.php'; ?>

</div>

</body>
</html>