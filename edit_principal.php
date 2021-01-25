
<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM principal WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-dark text-white py-2">
        <h2>principal edit</h2>
      </div>
      <form action="update_principal.php" method="post">
        <div class="col-lg-12 p-0">
          <table class="table table-bordered bg-light">
            <tr>
              <td>TITLE</td>
              <td>
                <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>">
                 <input type="text" name="title" value="<?php echo $after_assoc['title']; ?>">
               </td>
            </tr>
            <tr>
         <td>Description</td>
   <td>  <textarea class="form-control "><?php echo $afer_assoc['desp']; ?></textarea></td>
      </tr>
      <tr>
   <td>NAME</td>
 <td>
<input type="text" name="name" value="<?php echo $after_assoc['name']; ?>">
</td>
</tr>
<td>principal</td>
<td>
<input type="text" name="principal" value="<?php echo $after_assoc['principal']; ?>">
</td>
</tr>
<td>INSTITUTE</td>
<td>
<input type="text" name="ins" value="<?php echo $after_assoc['ins']; ?>">
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
