<?php

require_once 'tools/common.php';

if(isset($_GET['article_id'] ) ){

	//selection de l'article dont l'ID est envoyé en paramètre GET
	$query = $db->prepare('
		SELECT article.* , category.name AS category_name
		FROM article
		JOIN category
		ON article.category_id = category.id
		WHERE article.id = ? AND article.is_published = 1');
	$query->execute( array( $_GET['article_id'] ) );

	$article = $query->fetch();

	//si pas d'article trouvé dans la base de données, renvoyer l'utilisateur vers la page index
	if(!$article){
		header('location:index.php');
		exit;
	}

}
else{ //si article_id n'est pas envoyé en URL, renvoyer l'utilisateur vers la page index
	header('location:index.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
 <head>
     <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

     <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


     <style>
         body{
             background: #eee;
             font-family: Arial;
             font-size: 14px;
             padding: 50px;
         }
         .tabs{
             margin:0;
             padding: 0;
         }
         .tabs > li{
             float: left;
             list-style: none;
             border-color: #ccc;
             border-style: solid;
             border-width: 1px 0px 0px 1px;
             background-color: #ededed;
             margin: 0;
         }
         .tabs > li:hover{
             background-color: #fff;
         }
         .tabs > li.last{
             border-width: 1px 1px 0px 1px;
         }
         .tabs > li > a{
             padding: 8px 12px;
             display: inline-block;
             text-decoration: none;
             color: inherit; /* hérite du parent */
         }
         .tabs > li.active{
             background-color: #fff;
             font-weight: bold;
         }
         .tabs-content{
             clear: both; /* pour virer le float des li */
             border-color: #ccc;
             border-style: solid;
             border-width: 1px 1px 1px 1px;
             background-color: #fff;
             padding: 20px;
             width: 800px;
             margin-bottom: 50px;
         }
         .tabs-content > div{
             display: none;
         }
         .tabs-content > .active{
             display: block;
         }
         .fade{
             opacity: 0;
             transition: opacity 0.3s; /* ajoute la transition de 1 vers 0 ou inversement car nous laissont les 2 classes */
         }
         .fade.in{
             opacity:1;
         }
     </style>
	<title><?php echo $article['title']; ?> Nabil'Express </title>

   <?php require 'partials/head_assets.php'; ?>

 </head>

 <body class="article-body">
	<div class="container-fluid">



        <a href="index.php"> <img style="width: 300px;height: 150px;margin-left: 550px;margin-bottom: 30px;margin-top: 10px" src="logo.jpg" alt=""></a>   <br>

        <ul style="margin-left: -115px;">
            <li style="display: inline;">
                <a style=" margin-right: -2px;padding: 12px 150px; background-color: #3F8EBF;color: white;" href="index.php"><i class="fas fa-home"></i> Accueil</a>
            </li>

            <li style="display: inline;">
                <a style=" margin-right: -2px;padding: 12px 150px; background-color: #3F8EBF;color: white;" href="boutique.php"><i class="fas fa-shopping-cart"></i> Boutique</a>
            </li>

            <li style="display: inline;">
                <a style=" margin-right: -2px;padding: 12px 110px; background-color: #3F8EBF;color: white;" href="login-register.php"><i class="fas fa-sign-in-alt"></i> Connexion/Inscription</a>
            </li>

            <li style="display: inline;">
                <a style=" margin-right: -102px;padding: 12px 110px; background-color: #3F8EBF;color: white;" href="@"><i class="fas fa-shopping-basket"></i> Panier </a>
            </li>
        </ul>


        <div class="row my-3 article-content">

			<?php require 'partials/nav.php'; ?>

			<main class="col-9">


				<article style="margin-top: 15px;margin-left: 10%;width: 100%;height: 10%;">
					<?php if(!empty($article['image'])): ?>
					<img style="width: 400px" class="pb-4 img-fluid" src="img/article/<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" />
					<?php endif; ?>
					<h1 class="h3"><?php echo $article['title']; ?></h1>
					<b class="article-category">[<?php echo $article['category_name']; ?>]</b>
					<span class="article-date">Créé le <?php echo $article['created_at']; ?></span>


                    <div>
                        <ul class="tabs">
                            <li class="active"><a href="#home">Descriptif</a></li>
                            <li><a href="#mentions">Mentions</a></li>
                            <li class="last"><a href="#about">Avis</a></li>
                        </ul>
                        <div class="tabs-content">
                            <div id="home" class="active"><?php echo $article['content']; ?></div>
                            <div id="mentions">Animi aspernatur delectus doloribus earum eius ex expedita inventore quaerat sequi tempora? A accusantium dolorem ducimus iste molestias nisi nostrum rem ut.</div>
                            <div id="about">Inventore quaerat sequi tempora? A accusantium dolorem ducimus iste molestias nisi nostrum rem ut.</div>
                        </div>
                    </div>
                    <script>
                        // Je récupère tous les a de mes menus
                        var menus = document.querySelectorAll('.tabs a')
                        var activateTab = function(a, animations){
                            /* --- Active l'animation si je ne l'ai pas stipulé à false --- */
                            if(animations === undefined){
                                animations = true
                            }
                            /* --- Je définis mes variables --- */
                            var li = a.parentNode // le li parent du a
                            var div = li.parentNode.parentNode // le div parent.parent du li
                            var activeTab = div.querySelector('.tabs-content .active') // mon onglet actif
                            var target = div.querySelector(a.getAttribute('href')) // l'onglet que je veux activer
                            // Si le li est déjà actif (contient .active), je ne fais rien
                            if(li.classList.contains('active')){
                                return false
                            }
                            // Sinon je continu
                            // J'enlève .active sur le li actif et je le mets sur mon li cible
                            var ul = li.parentNode
                            ul.querySelector('li.active').classList.remove('active')
                            li.classList.add('active')
                            // Ensuite
                            if(animations){
                                // Je remove .active sur mon div actif et je fade(out en virant le in)
                                activeTab.classList.add('fade')
                                activeTab.classList.remove('in') // si il était resté précédemment
                                var animate = function(){
                                    // Je vire le fade et le active de mon ancien div
                                    this.classList.remove('fade') // this fait référence à activeTab
                                    this.classList.remove('active')
                                    // J'active le div souhaité
                                    target.classList.add('fade')
                                    target.classList.add('active')
                                    target.offsetHeight // Force le navigateur à réaliser l'action suivante APRÈS les 2 autres pour avoir un fadein
                                    target.classList.add('in')
                                    activeTab.removeEventListener('transitionend', animate) // Supprime l'EventListener pour éviter les bug visuels
                                }
                                // Lance l'event après que la transition CSS soit terminée 'transitionend'
                                activeTab.addEventListener('transitionend', animate) // /!\ https://developer.mozilla.org/fr/docs/Web/Events/transitionend -> Browser compatibility
                            } else {
                                // Le changement d'onglet sans les transitions, pour le next page, previous page et reload
                                activeTab.classList.remove('active')
                                target.classList.add('active')
                            }
                        }
                        // Utile pour les clics sur les onglets
                        for(var i = 0 ; i < menus.length ; i++){
                            var menu = menus[i]
                            menu.addEventListener('click', function(){
                                activateTab(this)
                            })
                        }
                        // Utile pour le next page, previous page et reload
                        var hashChange = function(e){
                            var hash = window.location.hash
                            var a = document.querySelector('a[href="'+hash+'"]')
                            if(a != null && !a.parentNode.classList.contains('active')){
                                activateTab(a, e !== undefined) // le second paramètre s'excécute uniquement si il n'est pas à false
                            }
                        }
                        // Utile pour le next page, previous page et reload
                        window.addEventListener('hashchange', hashChange)
                        hashChange()
                    </script>


                    <a href="panier.php">  <button style="margin-top: -25px"  type="button" class="btn btn-primary btn-lg">Acheter</button> </a>
				</article>
			</main>

		</div>

        <div class="d-flex justify-content-around align-items-cente" style="background-color: #3F8EBF;margin-right: -90px;margin-left: -90px;">

            <a href="contact.php"> <h5 style="color: white;margin-right: 10px;margin-top: 5px"> Contact </h5></a>

            <a href="cookie.php"> <h5 style="color: white;margin-top: 5px;margin-right: 10px"> Cookies et publicité sur Internet </h5></a>

            <a href="publicite.php"> <h5 style="color: white;margin-top: 5px;margin-right: 10px"> Partenariat </h5></a>

            <a href="condition.php"> <h5 style="color: white;margin-top: 5px;margin-right: 10px"> C.G.V. </h5></a>

            <a href="https://fr-fr.facebook.com/"> <h5 style="color: white;margin-top: 5px;margin-right: 10px"> <i class="fab fa-facebook"></i> </h5></a>

            <a href="https://twitter.com/?lang=fr"> <h5 style="color: white;margin-top: 5px;margin-right: 10px"> <i class="fab fa-twitter"></i> </h5></a>

            <a href="https://www.instagram.com/?hl=fr"> <h5 style="color: white;margin-top: 5px;margin-right: 10px"> <i class="fab fa-instagram"></i></h5></a>

            <a href="https://plus.google.com/discover"> <h5 style="color: white;margin-top: 5px;"> <i class="fab fa-google-plus"></i> </h5></a>

        </div>

        <div class="footer" style="background-color: #3F8EBF;margin-right: -90px;margin-left: -90px;">

            <h5 style="color: white;padding: 10px 40px;margin-left: 565px"> Copyright &copy; 2018  Nabil'Express  </h5>
        </div>



    </div>
 </body>
</html>

