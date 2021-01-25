
<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM document WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-dark text-white py-2">
        <h2>Document EDIT</h2>
      </div>
      <form action="update_document.php" method="post" >
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
              <td>NUMBER</td>
              <td>
                <input type="number" name="num" value="<?php echo $after_assoc['num']; ?>">
               </td>
            </tr>
            <tr>
              <td>ICON</td>
              <td>
                <input type="text" name="icon" value="<?php echo $after_assoc['icon']; ?>">
               </td>
            </tr>

        </div>
  </form>
    </div>
    <?php
    require 'dashboard_part/footer.php';
     ?>
