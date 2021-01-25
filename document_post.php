
 <?php
 require 'db.php';

 $title = $_POST['title'];
 $num = $_POST['num'];
 $icon = $_POST['icon'];




 $insert_query = "INSERT INTO document (title,num,icon) VALUES ('$title','$num','$icon')";
 $result = mysqli_query($db_connection,$insert_query);

 ?>
