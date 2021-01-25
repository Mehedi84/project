
<?php

require 'db.php';

$id = $_POST['id'];
$status = $_POST['status'];
$description = $_POST['desp'];
$ins = $_POST['ins'];
$num = $_POST['num'];
$email = $_POST['email'];
$location = $_POST['location'];
$logo = $_FILES['logo'];



 $update = "UPDATE welcome SET id='$id',status='$status',desp='$description',ins='$ins',num='$num',email='$email',location='$location',logo='$logo' WHERE id=$user_id";
 $result = mysqli_query($db_connection,$update);
 header("location:head.php");
?>
