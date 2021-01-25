<?php
require 'dashboard_part/header.php';
 ?>

 <?php
 require 'db.php';


 $info = $_POST['info'];
 $status = $_POST['status'];



 $insert_query = "INSERT INTO links (info,status) VALUES ('$info','$status')";

  $result = mysqli_query($db_connection,$insert_query);
    // header("location:student.php")
 ?>


 <?php
 require 'dashboard_part/footer.php';
  ?>
