<?php
require 'dashboard_part/header.php';
 ?>

<div class="col-lg-12">
  <div class="text-center bg-dark text-white">
    <h1>ADD HEAD</h1>
  </div>
<form action="head_post.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="file" name="logo" class="form-control">
  </div>
  <div class="form-group">
    <input type="text" name="ins" class="form-control" placeholder="INS NAME">
  </div>
  <div class="form-group">
    <input type="number" name="num" class="form-control" placeholder="NUMBER">
  </div>
  <div class="form-group">
    <input type="text" name="location" class="form-control" placeholder="location">
  </div>
  <div class="form-group">
    <textarea name="desp" rows="8" cols="80"class="form-control" placeholder="DESP"></textarea>
  </div>

   <div class="form-group">
      <input type="email" name="email" class="form-control" placeholder="EMAIL">
    </div>
  <select class="form-control" name="status">
    <option value="0">status</option>
    <option value="1">Active</option>
    <option value="2">Deactive</option>
  </select>
  <div class="text-center py-2">
    <button type="submit" class="btn btn-info">Submit</button>
  </div>
</form>
</div>

 <?php
 require 'dashboard_part/footer.php';
  ?>
