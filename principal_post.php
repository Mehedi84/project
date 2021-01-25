<?php
require 'dashboard_part/header.php';
?>
<?php
    require 'db.php';



    $title = $_POST['title'];
    $desp = $_POST['desp'];
    $name = $_POST['name'];
    $principal = $_POST['principal'];
    $ins = $_POST['ins'];

    $uploaded_file = $_FILES['principal_img'];
    $after_explode = explode('.',$uploaded_file['name']);
    $extention = end($after_explode);
    $allwoed_extention = array("jpg","png","jpeg","gif");

    if(in_array($extention,$allwoed_extention)){
      if($uploaded_file['size'] <= 4000000){
        $insert_query = "INSERT INTO principal (title,desp,name,principal,ins) VALUES ('$title','$desp','$name','$principal','$ins')";
        $result = mysqli_query($db_connection, $insert_query);

        $last_id = mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extention;
        $new_location = "uplode/principal/".$file_name;
        move_uploaded_file($uploaded_file['tmp_name'],$new_location);

        $update_photo = "UPDATE principal SET principal_img='$file_name' WHERE id=$last_id";
        $photo_upload = mysqli_query($db_connection,$update_photo);

      
      }
      else{
        echo "file size onek boro";
      }
    }
    else{
      echo " chole na";
    }



 ?>


 <?php
 require 'dashboard_part/footer.php';
  ?>
