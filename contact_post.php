<?php
session_start();
require 'db.php';


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$uploaded_file = $_FILES['contact_img'];
$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allwoed_extention = array('jpg','png','jpeg','gif');

if(in_array($extention,$allwoed_extention)){
  if($uploaded_file['size'] <= 3000000){
    $insert_query = "INSERT INTO messages (name, email, subject,message) VALUES ('$name','$email','$subject','$message')";
    $result = mysqli_query($db_connection,$insert_query);
    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = "uplode/".$file_name;
    move_uploaded_file($uploaded_file['tmp_name'],$new_location);

    $update_photo = "UPDATE messages SET contact_img='$file_name' WHERE id=$last_id";
    $photo_upload = mysqli_query($db_connection,$update_photo);

    $_SESSION['success'] = "Data Succesfully Sent!";
    header("location:contact.php#content");
  }
  else{
    echo "file size onek boro";
  }
}
else{
  echo " chole na";
}

?>
