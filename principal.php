<?php
require 'dashboard_part/header.php';
 ?>
 <?php


 $select_query = "SELECT * FROM principal";
 $result = mysqli_query($db_connection,$select_query);
 ?>

 <div class="col-lg-12">
   <div class="text-center bg-dark text-white py-2">
     <h2>ALL PRINCIPAL</h2>
   </div>
   <!-- <div class="text-right">
     <a href="logout.php"> <button type="button" class="btn btn-danger">Logout</button> </a>
   </div> -->
     <table class="table table-bordered bg-light">
       <tr class="bg-dark text-white">
         <td>ID</td>
         <td>TITLE</td>
         <td>DESP</td>
         <td>NAME</td>
         <td>PRINCIPAL</td>
         <td>INS</td>
         <td>PHOTO</td>
         <td>ACTION</td>
       </tr>
       <?php
         foreach ($result as $value) {
        ?>
       <tr>

         <td><?php echo $value['title']; ?></td>
         <td><?php echo $value['desp']; ?></td>
         <td><?php echo $value['name']; ?></td>
         <td><?php echo $value['principal']; ?></td>
         <td><?php echo $value['ins']; ?></td>

            <td>  <img src="uplode/principal/<?php echo $value['principal_img']; ?>" alt="" height="50"> </td>
         <td>
           <a href="single_principal.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-info">view</button>  </a>
           <a href="edit_principal.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-primary">edit</button>  </a>
           <a href="delete_principal.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button>  </a>
         </td>
       </tr>
       <?php } ?>

     </table>
 </div>

 <?php
 require 'dashboard_part/footer.php';
  ?>
