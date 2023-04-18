<?php
  require 'header.php';

?>
<h2 class="text-center">Ajout personnels</h2>
<div class="container">
  <div class="row">
    <form action="ajout.php" method="POST" enctype="multipart/form-data">
      <div class="col-md-7">
        <div class="card">
          <div class="card-header">
            ETAT CIVIL
          </div>
          <div class="card-body">
            <input type="file" name="photo">
            
          </div>
        </div>
      </div>
      <div class="col-md-5">

      </div>
      <input type="submit" name="submit" value="continuer">
    </form>
  </div>
</div>


