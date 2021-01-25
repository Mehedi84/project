<?php
require 'dashboard_part/header.php';
 ?>

 <?php
 // session();
 require 'db.php';

 $dept = $_POST['dept'];
 $info = $_POST['info1'].','.$_POST['info2'].','.$_POST['info3'];
 $icon = $_POST['icon'];
 $status = $_POST['status'];



 $insert_query = "INSERT INTO depertment (dept,info,icon,status) VALUES ('$dept','$info','$icon','$status')";
 $result = mysqli_query($db_connection,$insert_query);
 // header("location:depertment.php")
 ?>


 <?php
 require 'dashboard_part/footer.php';
  ?>
