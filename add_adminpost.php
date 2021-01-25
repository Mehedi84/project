<?php
require 'dashboard_part/header.php';
 ?>

<div class="col-lg-12">
  <div class="text-center bg-dark text-white">
    <h1>ADD ADMIN POST</h1>
  </div>
<form action="adminpost_post.php" method="post"enctype="multipart/form-data">

  <div class="form-group">
    <textarea name="desp" class="form-control" rows="8" cols="80" placeholder="Deiscription"></textarea>
  </div>

  <div class="text-center py-2">
  <input type="text" name="title" class="form-control" placeholder="TITLE">
  </div>

  <div class="text-center py-2">
  <input type="date" name="post_date" class="form-control" placeholder="Date">
  </div>
  <div class="text-center py-2">
  <input type="text" name="comment" class="form-control" placeholder="comment">
  </div>
  <div class="text-center py-2">
  <input type="file" name="admin_img" class="form-control" placeholder="Image">
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>

 <?php
 require 'dashboard_part/footer.php';
  ?>
