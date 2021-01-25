
<?php

require 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$num = $_POST['num'];
$icon = $_POST['icon'];



 $update = "UPDATE document SET id='$id',title='$title',num='$num',icon='$icon' WHERE id=$user_id";
 $result = mysqli_query($db_connection,$update);
 header("location:document.php");
?>
