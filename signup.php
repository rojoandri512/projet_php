<?php
	include_once("connection.php");

	if(isset($_POST['register'])){
		if($_POST['mdp'] == $_POST['cmdp']){
			$user=$_POST['username'];
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$email=$_POST['email'];
			$mdp=$_POST['mdp'];

			$sql="INSERT INTO utilisateur(Username,Nom,Prenom,email,mdp) VALUES ('$user','$nom','$prenom','$email','$mdp')";
			if ($conn->query($sql) === TRUE) {
				$_SESSION["Username"]=$user;
				header('location:accueil.php');
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				header('location:signup.php');
			}

		}else{
			die('mot de passe non identique');
		}
	}



?>


<!doctype html>
<html lang="fr">
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
					<form action="signup.php" method="POST" class="login-form">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control rounded-left" placeholder="Nom d'utilisateur" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="text" name="nom" class="form-control rounded-left" placeholder="Nom" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="text" name="prenom" class="form-control rounded-left" placeholder="Prenom" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="email" name="email" class="form-control rounded-left" placeholder="Email">
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" name="mdp" class="form-control rounded-left" placeholder="Mot de passe" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" name="cmdp" class="form-control rounded-left" placeholder="Confirmer mot de passe" required>
                        </div>
                        <div class="form-group d-md-flex">
	            	<div class="w-100">
	            		<label class="checkbox-wrap checkbox-primary"><a href="signin.php">Avez-vous déjà un compte?</a>
									  
									</label>
								</div>

	            </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary rounded submit p-3 px-5" name="register" value="S'inscrire">
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

