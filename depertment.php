<?php
require 'dashboard_part/header.php';
 ?>
 <?php


 $select_query = "SELECT * FROM depertment";
 $result = mysqli_query($db_connection,$select_query);
 ?>

 <div class="col-lg-12">
   <div class="text-center bg-dark text-white py-2">
     <h2>ALL depertment</h2>
   </div>
   <!-- <div class="text-right">
     <a href="logout.php"> <button type="button" class="btn btn-danger">Logout</button> </a>
   </div> -->
     <table class="table table-bordered bg-light">
       <tr class="bg-dark text-white">
         <td>ID</td>
         <td>DEPT</td>
         <td>INFO</td>
         <td>ICON</td>
         <td>STATUS</td>
         <td>ACTION</td>
       </tr>
       <?php
         foreach ($result as $value) {
        ?>
       <tr>
         <td><?php echo $value['id']; ?></td>
             <td><?php echo $value['dept']; ?></td>
             <td><?php echo $value['info']; ?></td>
                 <td> <i class="<?php echo $value['icon']; ?>"></i> </td>
                     <td>
           <?php
             if($value['status']==1) {
               echo "Active";
             }
             if($value['status']==2) {
               echo "Deactive";
             }
            ?>
         </td>
         <td>
           <a href="delete_depertment.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button>  </a>
         </td>
       </tr>
       <?php } ?>

     </table>
 </div>

 <?php
 require 'dashboard_part/footer.php';
  ?>
