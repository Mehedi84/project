


 <?php
 require 'dashboard_part/header.php';
  ?>

  <?php
  // session_start();
  require 'db.php';

  $desp = $_POST['desp'];
  $title = $_POST['title'];
  $post_date = $_POST['post_date'];
  $comment = $_POST['comment'];
  $uploaded_file = $_FILES['admin_img'];
  // print_r($_POST);
  // print_r($_FILES['admin_img']['name']);
  $after_explode = explode('.',$uploaded_file['name']);
  $extention = end($after_explode);
  $allwoed_extention = array('jpg','png','jpeg','gif');

  if(in_array($extention,$allwoed_extention)){
    if($uploaded_file['size'] <= 300000000){
      $insert_query = "INSERT INTO adminpost (desp,title,post_date,comment,img) VALUES ('$desp','$title','$post_date','$comment','$uploaded_file')";
       $result = mysqli_query($db_connection,$insert_query);

      $last_id = mysqli_insert_id($db_connection);
      $file_name = $last_id.'.'.$extention;
      $new_location = "uplode/adminpost/".$file_name;
      move_uploaded_file($uploaded_file['tmp_name'],$new_location);

      $update_photo = "UPDATE adminpost SET img='$file_name' WHERE id=$last_id";
      $photo_upload = mysqli_query($db_connection,$update_photo);
      // $_SESSION['success'] = "Data Succesfully Sent!";
      // header("location:add_admin.php");
    }
    else{
      echo "file size onek boro";
    }
  }
  else{
    echo " chole na";
  }

  ?>


  <?php
  require 'dashboard_part/footer.php';
   ?>
