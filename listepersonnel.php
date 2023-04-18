<?php
  require 'header.php';
  include_once("connection.php");
  $sql = "SELECT * FROM personnels ORDER BY id_personnel DESC";
  $result = mysqli_query($conn, $sql);
?>
<style>
        .alb {
            width: 50px;
            height: 50px;
            padding: 5px;

        }
        .alb img{
            width:100%;
            height:100%;
        }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
          <div class="card-header">Liste des personnels 
            <a href="ajoutpersonnel.php" class="btn btn-success rounded" style="margin-left:800px;">
            <i class="fa fa-plus">Ajouter
            </i>
          </a>
        </div>
            <div class="card-body">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Matricul</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    if (mysqli_num_rows($result)>0) {
                      // output data of each row
                        while($row =mysqli_fetch_assoc($result)) {

                  
                  ?>
                  <tr>
                    <td><div class="alb">
                      <img src="images/<?=$row['Photo']?>">
                    </div></td>
                    <td><?= $row['nom']?></td>
                    <td><?= $row['prenom']?></td>
                    <td><?= $row['matricule']?></td>
                    <td><?= $row['statut']?></td>
                    <td>
                      <a href="fiche_individuel.php" class="btn btn-secondary btn-xs"><i class="fa fa-tasks"></i></a>
                      <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                    </td>
                  </tr>
              </table>
            </div>
<?php 
                        }
                      }
?>
          </div>
        </div>
      </div>
      
    </div>
  </div>