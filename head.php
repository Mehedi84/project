<?php
require 'dashboard_part/header.php';
 ?>
 <?php


 $select_query = "SELECT * FROM head";
 $result = mysqli_query($db_connection,$select_query);
 ?>

 <div class="col-lg-12">
   <div class="text-center bg-dark text-white py-2">
     <h2>ALL HEADER</h2>
   </div>
   <!-- <div class="text-right">
     <a href="logout.php"> <button type="button" class="btn btn-danger">Logout</button> </a>
   </div> -->
     <table class="table table-bordered bg-light">
       <tr class="bg-dark text-white">
         <td>ID</td>
         <td>DESP</td>
         <td>INS NAME</t>
         <td>NUMBER</td>
         <td>EMAIL</td>
         <td>STATUS</td>
         <td>LOCATION</td>
         <td>LOGO</td>
         <td>ACTION</td>
       </tr>
       <?php
         foreach($result as $value) {
        ?>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['desp']; ?></td>
        <td><?php echo $value['ins']; ?></td>
        <td><?php echo $value['num']; ?></td>
         <td><?php echo $value['email']; ?></td>
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
             <td><?php echo $value['location']; ?></td>
         <td>  <img src="uplode/logo/<?php echo $value['logo']; ?>" alt="" height="50"> </td>
         <td>

           <a href="edit_head.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-primary">edit</button>  </a>
           <a href="delete_head.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button>  </a>
         </td>
       </tr>
       <?php } ?>

     </table>
 </div>

 <?php
 require 'dashboard_part/footer.php';
  ?>
