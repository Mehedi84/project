
<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM welcome WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-dark text-white py-2">
        <h2>WELCOME EDIT</h2>
      </div>
      <form action="update_welcome.php" method="post">
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
       <td>Button</td>
       <td>    <input type="text" name="btn" class="form-control" placeholder="enter button" >
 </td>
    </tr>
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
