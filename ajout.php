<?php
  if(isset($_POST['submit']) && isset($_FILES['photo']) ){
    include "connection.php";
    
    echo "<pre>";
    print_r($_FILES['photo']);
    echo "</pre>";

    $img_name = $_FILES['photo']['name'];
    $img_size = $_FILES['photo']['size'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $error = $_FILES['photo']['error'];

    if ($error === 0) {
      if ($img_size > 125000) {
        $em = "Desolé,le fichier est trop large";
        header("Location:ajoutpersonnel.php?error=$em");
      }else{
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg","jpeg","png");

        if(in_array($img_ex_lc, $allowed_exs)){
            $new_img_name = uniqid("IMG", true).'.'.$img_ex_lc;
            $img_upload_path = 'images/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            //Insertion a la base de données
            $sql = "INSERT INTO personnels(Photo,) VALUES('$new_img_name')";
            mysqli_query($conn, $sql);
            header("Location:listepersonnel.php");
        }else{
            $em = "Vous pouvez pas uploader un fichier de ce genre!";
            header("Location:ajoutpersonnel.php?error=$em");
        }
      }
    }else{
      $em = "Il y a un erreur!";
      header("Location:ajoutpersonnel.php?error=$em");

    }
  }else{
    header("Location:ajoutpersonnel.php");
}
?>