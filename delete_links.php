<?php

require 'db.php';

$user_id = $_GET['id'];



$delete = "DELETE FROM links WHERE id=$user_id";
$result = mysqli_query($db_connection,$delete);
header('location:links.php');
 ?>
