<?php
require 'dashboard_part/header.php';
 ?>
 <?php


 $select_query = "SELECT * FROM messages";
 $result = mysqli_query($db_connection,$select_query);
 ?>

 <div class="col-lg-12">
   <div class="text-center bg-dark text-white py-2">
     <h2>Messages</h2>
   </div>
   <!-- <div class="text-right">
     <a href="logout.php"> <button type="button" class="btn btn-danger">Logout</button> </a>
   </div> -->
     <table class="table table-bordered bg-light">
       <tr class="bg-dark text-white">
         <td>ID</td>
         <td>NAME</td>
         <td>EMAIL</td>
         <td>SUBJECT</td>
         <td>MESSAGE</td>
         <td>PHOTO</td>
         <td>ACTION</td>
       </tr>
       <?php
         foreach ($result as $value) {
        ?>
       <tr>
         <td><?php echo $value['id']; ?></td>
         <td><?php echo $value['name']; ?></td>
         <td><?php echo $value['email']; ?></td>
         <td><?php echo $value['subject']; ?></td>
         <td><?php echo $value['message']; ?></td>


         <td>  <img src="uplode/<?php echo $value['contact_img']; ?>" alt="" height="100"> </td>
         <td>
           <a href="single_view.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-primary">View</button>  </a>
           <?php
             if ($_SESSION['role']==1 || $_SESSION['role']==2) {
            ?>
           <a href="edit.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-success">Edit</button>  </a>
         <?php } ?>
           <?php
             if ($_SESSION['role']==1 || $_SESSION['role']==2) {
            ?>
           <a href="delete.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button>  </a>
           <?php  } ?>
         </td>
       </tr>
       <?php } ?>

     </table>
 </div>

 <?php
 require 'dashboard_part/footer.php';
  ?>
