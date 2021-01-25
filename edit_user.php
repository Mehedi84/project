
<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM users_info WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-dark text-white py-2">
        <h2>USER EDIT</h2>
      </div>
      <form action="update_user.php" method="post" enctype="multipart/form-data">
        <div class="col-lg-12 p-0">
          <table class="table table-bordered bg-light">
            <tr>
              <td>NAME</td>
              <td>
                <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>">
                <input type="text" name="name" value="<?php echo $after_assoc['name']; ?>">
               </td>
            </tr>
            <tr>
              <td>EMAIL</td>
              <td> <input type="email" name="email" value="<?php echo $after_assoc['email']; ?>"> </td>

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
