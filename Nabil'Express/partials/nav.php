<?php
	$query = $db->query('SELECT * FROM category');
?>

<nav class="col-3 py-2 categories-nav">

	<!-- Si une session utilisateur existe (utilisateur connécté) on affiche son prénom et un boutton pour se déconnecter -->
	<?php if(isset($_SESSION['user'])): ?>
	<p class="h2 text-center">Salut <?php echo $_SESSION['user']; ?> !</p>
	<!-- ici le boutton de déconnexion est un lien allant vers l'index qui envoie le paramètre "logout" via URL -->
	<p><a class="d-block btn btn-danger mb-4 mt-2" href="index.php?logout">Déconnexion</a></p>
        <a class="d-block btn btn-warning mb-4 mt-2" href="user-profile.php">Profile</a>
	<?php else: ?>
	<!-- Sinon afficher un boutton de connexion -->
	<?php endif; ?>

    <div style="margin-left: -4%;margin-top: 1%" class="row" >
        <div id="google_translate_element"></div><script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
            }
        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
    <br>


	<b class="text-danger">Catégories :</b>
	<ul>
		<li><a href="article_list.php">Tous les articles</a></li>
		<!-- liste des catégories -->
		<?php while($category = $query->fetch()): ?>
		<li><a href="article_list.php?category_id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></li>
		<?php endwhile; ?>

		<?php $query->closeCursor(); ?>
	</ul>
</nav>
