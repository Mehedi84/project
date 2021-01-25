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
        <h2>SINGLE BANNER</h2>
      </div>
<div class="col-lg-12 p-0">
  <table class="table table-bordered bg-light">
    <tr>
      <td>ID</td>
      <td><?php echo $after_assoc['id']; ?></td>
    </tr>
    <tr>
      <td>STATUS</td>
      <td><?php echo $after_assoc['status']; ?></td>
    </tr>
    <tr>
      <td>PHOTO</td>
      <td> <img src="uplode/banner/<?php echo $after_assoc['banner_img']; ?>" alt=""> </td>

    </tr>

  </table>
</div>
    </div>

    <?php
    require 'dashboard_part/footer.php';
     ?>
