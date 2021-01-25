
<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM banner WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-dark text-white py-2">
        <h2>BANNER EDIT</h2>
      </div>
      <form action="update_banner.php" method="post" enctype="multipart/form-data">
        <div class="col-lg-12 p-0">
          <table class="table table-bordered bg-light">
            <tr>
              <td>STATUS</td>
              <td>
                <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>">
              <select class="form-control" name="status">
                <option value="0">--status---</option>
                <option value="1">--Active---</option>
                <option value="2">--Deactive---</option>
              </select>
               </td>
            </tr>
            <tr>
              <td>BANNER</td>
              <td> <img src="uplode/banner/<?php echo $after_assoc['banner_img']; ?>" alt=""> </td>
            </tr>
            <tr>
              <td> CHANGE BANNER </td>
              <td> <input type="file" name="banner" value=""> </td>
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
