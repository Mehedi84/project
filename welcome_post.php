<?php
require 'dashboard_part/header.php';
 ?>

 <?php
 require 'db.php';


 $title = $_POST['title'];
 $desp = $_POST['desp'];
 $btn = $_POST['btn'];



 $insert_query = "INSERT INTO welcome (title,desp,btn) VALUES ('$title','$desp','$btn')";

  $result = mysqli_query($db_connection,$insert_query);
    // header("location:welcome.php")
 ?>


 <?php
 require 'dashboard_part/footer.php';
  ?>
