
<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM head WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-dark text-white py-2">
        <h2>head edit</h2>
      </div>
      <form action="update_head.php" method="post" enctype="multipart/form-data">
        <div class="col-lg-12 p-0">
          <table class="table table-bordered bg-light">
            <tr>
              <td>ins</td>
              <td>
                <input type="hidden" name="id" class="form-control" value="<?php echo $after_assoc['id']; ?>">
                 <input type="text" name="ins" class="form-control" value="<?php echo $after_assoc['ins']; ?>">
               </td>
            </tr>
            <tr>
         <td>Description</td>
   <td>  <textarea class="form-control "><?php echo $afer_assoc['desp']; ?></textarea></td>
      </tr>
      <tr>
   <td>LOCATION</td>
 <td>
<input type="text" name="name" class="form-control" value="<?php echo $after_assoc['location']; ?>">
</td>
</tr>
<td>Email</td>
<td>
<input type="email" name="email" class="form-control" value="<?php echo $after_assoc['email']; ?>">
</td>
</tr>
<td>NUMBER</td>
<td>
<input type="Number" name="num" class="form-control" value="<?php echo $after_assoc['num']; ?>">
</td>
<td>LOGO</td>
<td>
<input type="text" name="logo" class="form-control" value="<?php echo $after_assoc['logo']; ?>">
</td>
<td>CHANGE LOGO</td>
<td>
<input type="file" name="logo" class="form-control" >
</td>


          </table>
          <div class="text-center py-3">
            <button type="submit" class="btn btn-primary">update</button>
          </div>
        </div>
  </form>
    </div>
    <?php
    require 'dashboard_part/footer.php';
     ?>
