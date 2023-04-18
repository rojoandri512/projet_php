<?php

include_once("connection.php");
if(isset($_POST['submit'])){
	$name = $_POST['user'];
	$mdp = $_POST['mdp'];
	if($name&&$mdp != ""){
		$sql = "SELECT * FROM utilisateur";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    // output data of each row
    	while($row = $result->fetch_assoc()) {
			if($row['Username']==$name && $row['mdp']==$mdp){

				header('location:accueil.php');
			}
    	}
		} else {
    		echo "Cet utilisateur n'existe pas";
			header('location:signin.php');
		}
	}
}

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">SBD</h3>
						<form action="signin.php" class="login-form" method="POST">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="user" placeholder="Nom d'utilisateur" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" name="mdp" placeholder="Mot de passe" required>
	            </div>
	            <div class="form-group flex-center">
	            	<div class="w-100">
	            		<label class="checkbox-wrap checkbox-primary">Se souvenir de moi
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								
	            </div>
				<div class="form-group flex-center"><a href="signup.php">Créer un compte</a>
									</div>
	            <div class="form-group">
	            	<input type="submit" class="btn btn-primary rounded submit p-3 px-5" name="submit" value="Log In">
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

