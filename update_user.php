
 <?php

 require 'db.php';

 $user_id = $_POST['id'];
 $name = $_POST['name'];
 $email = $_POST['email'];

   $update = "UPDATE users_info SET name='$name',email='$email' WHERE id=$user_id";
   $result = mysqli_query($db_connection,$update);

   header('location:user.php');


  ?>
