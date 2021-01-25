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
        <h2>SINGLE principal</h2>
      </div>
<div class="col-lg-12 p-0">
  <table class="table table-bordered bg-light">
    <tr>
      <td>ID</td>
      <td><?php echo $after_assoc['id']; ?></td>
    </tr>
    <tr>
      <td>TITLE</td>
      <td><?php echo $after_assoc['title']; ?></td>
    </tr>
    <tr>
      <td>DESP</td>
      <td><?php echo $after_assoc['desp']; ?></td>
    </tr>
    <tr>
      <td>NAME</td>
      <td><?php echo $after_assoc['name']; ?></td>
    </tr>
    <tr>
      <td>principal</td>
      <td><?php echo $after_assoc['principal']; ?></td>
    </tr>
    <tr>
      <td>INS</td>
      <td><?php echo $after_assoc['ins']; ?></td>
    </tr>
    <!-- <tr>
      <td>PHOTO</td>
      <td>
        <img src="uplode/principal/<?php echo $after_assoc['image']; ?>" alt="">
      </td>

    </tr> -->

  </table>
</div>
    </div>

    <?php
    require 'dashboard_part/footer.php';
     ?>
