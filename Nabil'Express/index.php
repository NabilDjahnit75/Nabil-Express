<?php

require_once 'tools/common.php';

//si un utilisateur est connécté et que l'on reçoit le paramètre "lougout" via URL, on le déconnecte

if(isset($_GET['logout']) && isset($_SESSION['user'])){

	//la fonction unset() détruit une variable ou une partie de tableau. ici on détruit la session user
	unset($_SESSION["user"]);
	//détruire $_SESSION["user"] va permettre l'affichage du bouton connexion / inscription de la nav, et permettre à nouveau l'accès aux formulaires de connexion / inscription
	//détruire $_SESSION["is_admin"] va empêcher l'accès au back-office
	unset($_SESSION["is_admin"]);
	unset($_SESSION["user_id"]);
}

?>

<!DOCTYPE html>
<html>
	<head>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
		<title>Nabil'Express</title>

		<?php require 'partials/head_assets.php'; ?>

	</head>
	<body class="index-body">

     <div class="container-fluid">

			<?php require 'partials/header.php'; ?>


            <div class="row">
                <a href="article_list.php?category_id=4"> <img style="width: 1460px;height: 600px;margin-top: 1%" src="50.jpeg" alt=""> </a>
            </div>

            <div class="row">
                <a href=""> <img style="width: 1460px;height: 400px;margin-top: 2%" src="super.jpeg" alt=""></a>

            </div>

            <div class="row">
                <img style="width: 1460px;height: 300px;margin-top: 2%" src="go.jpeg" alt="">
            </div>


            <div class="row" style="margin-top: 2%;margin-bottom: 2%" >
                <div class="col-6"><img src="40.jpeg" alt=""></div>
                <div class="col-6"><img src="75.jpeg" alt=""></div>
            </div>

            <div class="row">
                <div class="col" style="margin-left: 2.5%"><img  src="model-top.jpeg" alt="">
                    <a href="article_list.php?category_id=2"><p style="font-size: 40px;color: black;margin-left: 5%"> HAUT
                        </p> </a>
                </div>

                <div class="col"><img  src="bas-style.jpg" alt="">
                    <a href="article_list.php?category_id=3"><p style="font-size: 40px;color: black;margin-left: 5%">
                            BAS


                        </p> </a>
                </div>

                <div class="col"><img  src="sneak.jpeg" alt="">
                    <a href="article_list.php?category_id=1"><p style="font-size: 40px;color: black;margin-left: 5%">

                            Basket
                        </p> </a>
                </div>
            </div>

            <div class="row" style="margin-top: 3%;margin-bottom: 6%;">
                <a href="article_list.php?category_id=4"> <img style="width: 1460px;height: 610px;margin-top: -1%" src="winter.jpeg" alt=""> </a>
            </div>


            <div class="row">
                <img style="width: 1460px;height: 400px;margin-top: -1%" src="nba.jpeg" alt="">
            </div>

            <div class="row" style="background-color: white;">
                <div class="col-12">
                    <img style="width: 1200px;height: 500px;margin-top: 4%;margin-left: 8%" src="mapub.jpg" alt="">
                </div>
            </div>


            <div class="col-12" style="background-color: darkred ;margin-top: 6%;padding: 10px 30px;">
                <p style="font-size: 70px;margin-left: 30%;color: white">
                    Best Price <strong style="color: gray">Guarantee</strong>
                </p>
                <p style="font-size: 30px;margin-left: 34%;color: white;margin-top: -2%">
                    If you find a lower price, we'll match it.
                </p>

            </div>

            <div class="col-12" style="background-color: darkgreen ;padding: 10px 30px">

                <form style="margin-top: 10px">
                    <div class="form-group" style="display: flex;justify-content: center;align-items: center;">
                        <p style="color: white;margin:0;"><strong> Receive Newsletter :  </strong></p>
                        <form  id="emailSignup" class="email-signUp-footer" aria-labelledby="emailSignupLabel">
                            <div class="subscribeContainer" style="margin-left: 1%">
                                <input  type="email" class="subscribeInput" name="subscribe" placeholder="Enter Email Address" >
                                <button  type="submit" class="subscribe-btn -primary -inactive" >Sign Up</button>
                            </div>
                        </form>
                    </div>
                </form>
            </div>


            <div class="row">
                <img style="width: 1440px;height: 240px;margin-top: 5%" src="sponsor.jpg" alt="">
            </div>

         <?php require 'partials/footer.php'; ?>
        </div>

	</body>
</html>

