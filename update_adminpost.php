
 <?php

 require 'db.php';

 $user_id = $_POST['id'];
 $status = $_POST['status'];


 // if ($_FILES['adminpost']['name'] !='') {
 //   $select_query = "SELECT img FROM adminpost WHERE id=$user_id";
 //   $select_result = mysqli_query($db_connection,$select_query);
 //   $after_assoc = mysqli_fetch_assoc($select_result);
 //   $delete_from = "uplode/adminpost/".$after_assoc['adminpost_img'];
 //   unlink($delete_from);

   $uploaded_file = $_FILES['adminpost'];
   $after_explode = explode('.',$uploaded_file['name']);
   $extention = end($after_explode);
   $allwoed_extention = array('jpg','png','jpeg','gif');

   if(in_array($extention,$allwoed_extention)){
     if($uploaded_file['size'] <= 3000000){
       $file_name = $user_id.'.'.$extention;
       $new_location = "uplode/adminpost/".$file_name;
       move_uploaded_file($uploaded_file['tmp_name'],$new_location);

       $update_photo = "UPDATE adminpost SET adminpost_img='$file_name' WHERE id=$user_id";
       $photo_upload = mysqli_query($db_connection,$update_photo);

       $update = "UPDATE adminpost SET status='$status' WHERE id=$user_id";
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
   $update = "UPDATE adminpost SET status='$status' WHERE id=$user_id";
   $result = mysqli_query($db_connection,$update);
   header('location:adminpost.php');
 }



  ?>
