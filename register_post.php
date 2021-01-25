<?php
// session_start();
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];


$uploaded_file = $_FILES['user_img'];
$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allwoed_extention = array('jpg','png','jpeg','gif');

if(in_array($extention,$allwoed_extention)){
  if($uploaded_file['size'] <= 30000000){
    $insert_query = "INSERT INTO users_info (name,email,Password,role) VALUES ('$name','$email','$password','$role')";
    $result = mysqli_query($db_connection,$insert_query);
    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = "uplode/user/".$file_name;
    move_uploaded_file($uploaded_file['tmp_name'],$new_location);

    $update_photo = "UPDATE users_info SET user_img='$file_name' WHERE id=$last_id";
    $photo_upload = mysqli_query($db_connection,$update_photo);
    header("location:register.php");
  }
  else{
    echo "file size onek boro";
  }
}
else{
  echo " chole na";
}

 ?>
