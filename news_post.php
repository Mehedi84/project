<?php
require 'dashboard_part/header.php';
 ?>

 <?php
 // session();
 require 'db.php';

 $news = $_POST['news'];
 $status = $_POST['status'];



 $insert_query = "INSERT INTO news (news,status) VALUES ('$news','$status')";
 $result = mysqli_query($db_connection,$insert_query);
 // header("location:depertment.php")
 ?>


 <?php
 require 'dashboard_part/footer.php';
  ?>
