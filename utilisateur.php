<?php
  require 'header.php';
  include_once("connection.php");
  $sql = "SELECT * FROM utilisateur ORDER BY idUser DESC";
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
          <div class="card-header">Liste des utilisateurs
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Non d'utilisateur</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                         while($row =mysqli_fetch_assoc($result)) {

                    
                    ?>
                    <tr>
                        <td><?= $row['Username']?></td>
                        <td><?= $row['Nom']?></td>
                        <td><?= $row['Prenom']?></td>
                        <td><?= $row['email']?></td>
                        <td>
                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                        </td>
                    </tr>
              </table>
            </div>
<?php 
                        }
                      
?>
          </div>
        </div>
      </div>
      
    </div>
  </div>