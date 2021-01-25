<?php
require 'dashboard_part/header.php';
 ?>

 <?php
 // session_start();
 require 'db.php';


 $status = $_POST['status'];
 // $status2 = $_POST['status2'];



 $uploaded_file = $_FILES['photo'];
 $after_explode = explode('.',$uploaded_file['name']);
 $extention = end($after_explode);
 $allwoed_extention = array('jpg','png','jpeg','gif');

 if(in_array($extention,$allwoed_extention)){
   if($uploaded_file['size'] <= 30000000){
     $insert_query = "INSERT INTO gallary (status) VALUES ('$status')";
     $result = mysqli_query($db_connection,$insert_query);
     $last_id = mysqli_insert_id($db_connection);
     $file_name = $last_id.'.'.$extention;
     $new_location = "uplode/gallary/".$file_name;
     move_uploaded_file($uploaded_file['tmp_name'],$new_location);

     $update_photo = "UPDATE gallary SET photo='$file_name' WHERE id=$last_id";
     $photo_upload = mysqli_query($db_connection,$update_photo);
     // $_SESSION['success'] = "Data Succesfully Sent!";
     // header("location:add_banner.php");
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
