<?php

require 'db.php';

$user_id = $_GET['id'];



$delete = "DELETE FROM quick WHERE id=$user_id";
$result = mysqli_query($db_connection,$delete);
header('location:quick.php');
 ?>
