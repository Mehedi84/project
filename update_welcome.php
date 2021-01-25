
<?php

require 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['desp'];
$btn = $_POST['btn'];



 $update = "UPDATE welcome SET title='$title',desp='$description',btn='$btn' WHERE id='$id'";
 $result = mysqli_query($db_connection,$update);
 header("location:welcome.php");
?>
