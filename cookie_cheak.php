<?php
if (isset($_COOKIE['kuddus'])) {
header('location:logout.php');
}
else {
  setcookie('kuddus','jorina',time() +30);
}
 ?>
