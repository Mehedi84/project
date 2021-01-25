<?php
require 'dashboard_part/header.php';
 ?>

<div class="col-lg-12">
  <div class="text-center bg-dark text-white">
    <h1>ADD NOTICE</h1>
  </div>
<form action="notice_post.php" method="post" >

  <div class="form-group">
    <input type="text" name="icon1" class="form-control"placeholder="Enter icon1">
  </div>
  <div class="form-group">
    <input type="text" name="icon2" class="form-control"placeholder="Enter icon 2">
  </div>
  <div class="form-group">
    <input type="text" name="notice" class="form-control"placeholder="Enter notice">
  </div>
  <div class="form-group">
    <input type="date" name="notice_date" class="form-control"placeholder="Enter number">
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
