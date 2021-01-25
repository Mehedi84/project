<?php
session_start();
if(!isset($_SESSION['abul'])){
  header("location:login.php");
}
?>
