<?php
require 'dashboard_part/header.php';
 ?>

<div class="col-lg-12">
  <div class="text-center bg-dark text-white">
    <h1>ADD GALLARY</h1>
  </div>
<form action="gallary_post.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="file" name="photo" class="form-control">
  </div>
  <select class="form-control" name="status">
    <option value="0">status</option>
    <option value="1">Active</option>
    <option value="2">Deactive</option>
  </select>
  <!-- <select class="form-control" name="status2">
    <option value="campus">campus</option>
    <option value="Events">Events</option>
    <option value="Photo Gallary">Photo Gallary</option>
  </select> -->
  <div class="text-center py-2">
    <button type="submit" class="btn btn-info">Submit</button>
  </div>
</form>
</div>

 <?php
 require 'dashboard_part/footer.php';
  ?>
