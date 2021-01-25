
 <?php

 require 'db.php';

 $user_id = $_POST['id'];
 $status = $_POST['status'];


 if ($_FILES['banner']['name'] !='') {
   $select_query = "SELECT banner_img FROM banner WHERE id=$user_id";
   $select_result = mysqli_query($db_connection,$select_query);
   $after_assoc = mysqli_fetch_assoc($select_result);
   $delete_from = "uplode/banner/".$after_assoc['banner_img'];
   unlink($delete_from);

   $uploaded_file = $_FILES['banner'];
   $after_explode = explode('.',$uploaded_file['name']);
   $extention = end($after_explode);
   $allwoed_extention = array('jpg','png','jpeg','gif');

   if(in_array($extention,$allwoed_extention)){
     if($uploaded_file['size'] <= 3000000){
       $file_name = $user_id.'.'.$extention;
       $new_location = "uplode/banner/".$file_name;
       move_uploaded_file($uploaded_file['tmp_name'],$new_location);

       $update_photo = "UPDATE banner SET banner_img='$file_name' WHERE id=$user_id";
       $photo_upload = mysqli_query($db_connection,$update_photo);

       $update = "UPDATE banner SET status='$status' WHERE id=$user_id";
       $result = mysqli_query($db_connection,$update);

       header('location:banner.php');
     }
     else{
       echo "file size onek boro";
     }
   }
   else{
     echo "dhur mia chole na";
   }
 }
 else {
   $update = "UPDATE banner SET status='$status' WHERE id=$user_id";
   $result = mysqli_query($db_connection,$update);
   header('location:banner.php');
 }



  ?>
