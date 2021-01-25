<?php
require 'dashboard_part/header.php';
 ?>

 <?php
 // session();
 require 'db.php';

 $links = $_POST['links'];
 $status = $_POST['status'];



 $insert_query = "INSERT INTO quick (links,status) VALUES ('$links','$status')";
 $result = mysqli_query($db_connection,$insert_query);
 // header("location:depertment.php")
 ?>


 <?php
 require 'dashboard_part/footer.php';
  ?>
