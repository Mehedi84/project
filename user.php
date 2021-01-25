<?php
require 'dashboard_part/header.php';
 ?>
 <?php


 $select_query = "SELECT * FROM users_info";
 $result = mysqli_query($db_connection,$select_query);
 ?>

 <div class="col-lg-12">
   <div class="text-center bg-dark text-white py-2">
     <h2>USER INFO</h2>
   </div>
   <!-- <div class="text-right">
     <a href="logout.php"> <button type="button" class="btn btn-danger">Logout</button> </a>
   </div> -->
     <table class="table table-bordered bg-light">
       <tr class="bg-dark text-white">
         <td>ID</td>
         <td>NAME</td>
         <td>EMAIL</td>
         <td>ROLE</td>
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
         <td>

           <?php
             if($value['role']==1) {
               echo "Admin";
             }
             if($value['role']==2) {
               echo "Moderator";
             }
             if($value['role']==3) {
               echo "Author";
             }
            ?>
         </td>
         <td> <img src="uplode/user/<?php echo $value['user_img']; ?>" alt="" width="50"> </td>


         <td>
           <a href="single_user.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-primary">View</button>  </a>
           <a href="edit_user.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-success">Edit</button>  </a>
           <a href="delete.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button>  </a>
         </td>
       </tr>
       <?php } ?>

     </table>
 </div>

 <?php
 require 'dashboard_part/footer.php';
  ?>
