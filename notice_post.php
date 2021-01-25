
 <?php
 require 'db.php';

 $icon1 = $_POST['icon1'];
 $icon2 = $_POST['icon2'];
 $notice = $_POST['notice'];
 $notice_date  = $_POST['notice_date'];
 $status = $_POST['status'];




 $insert_query = "INSERT INTO notice (icon1,icon2,notice,notice_date,status) VALUES ('$icon1','$icon2','$notice','$notice_date','$status')";
 $result = mysqli_query($db_connection,$insert_query);

 ?>
