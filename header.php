<?php
  include 'footer.php';
  include 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Fiche Individuel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">


	</head>
	<body>
  <nav class="navbar navbar-expand-sm bg-dark">

  <a class="navbar-brand" href="accueil.php">
    <img src="MICC.jpg" alt="Logo" style="width:150px;height:auto;">
  </a>
  <ul class="navbar-nav ">

    <li class="nav-item">
      <a class="nav-link active" href="accueil.php">Accueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="listepersonnel.php">Personnels</a>
    </li>
    <form class="form-inline" action="recherche.php"  style="padding-left:600px;">
      <input class="form-control rounded" type="text" placeholder="Recherche">
      <button class="btn btn-primary rounded submit p-3" type="submit"><i class="fa fa-search"></i></button>
    </form>
    <li class="nav-item" style="padding-left:10px;">
      <a class="btn btn-primary rounded submit p-3" href="utilisateur.php" style="border-radius:20px;"><i class="fa fa-user"></i></a>
    </li>
    <li class="nav-item" style="padding-left:10px;">
      <a class="btn btn-primary rounded submit p-3" href="logout.php"><i class="fa fa-sign-out"></i></a>
    </li>
  </ul>


</nav>
<button class="btn btn-success">fgghh</button>
<br>
<br>

