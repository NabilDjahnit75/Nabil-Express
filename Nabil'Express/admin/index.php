<?php 

require_once '../tools/common.php'; 

if(!isset($_SESSION['is_admin']) OR $_SESSION['is_admin'] == 0){
	header('location:../index.php');
	exit;
}

?>

<!DOCTYPE html>
<html>
	<head>
	
		<title> Administration !</title>

		<?php require 'partials/head_assets.php'; ?>

	</head>
	<body class="index-body">
		<div class="container-fluid">
			<?php require 'partials/header.php'; ?>
			<div class="row my-3 index-content">
			
				<?php require 'partials/nav.php'; ?>
				
				<main class="col-9">
					
				</main>
			</div>
			
		</div>
	</body>
</html>

