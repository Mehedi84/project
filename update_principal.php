
<?php

require 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['desp'];
$name = $_POST['name'];
$principal = $_POST['principal'];
$ins = $_POST['ins'];




 $update = "UPDATE principal SET title='$title',desp='$description',name='$name',principal='$principal',ins='$ins' WHERE id=$id";
 $result = mysqli_query($db_connection,$update);
 header("location:principal.php");
?>
