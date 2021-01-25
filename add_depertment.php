<?php
require 'dashboard_part/header.php';
 ?>

<div class="col-lg-12">
  <div class="text-center bg-dark text-white">
    <h1>ADD depertments</h1>
  </div>
<form action="depertment_post.php" method="post" >
  <div class="form-group">
    <input type="text" name="dept" class="form-control"placeholder="Enter department">
  </div>
  <div class="form-group">
    <input type="text" name="info1" class="form-control"placeholder="Enter info 1">
  </div>
  <div class="form-group">
    <input type="text" name="info2" class="form-control"placeholder="Enter info 2">
  </div>
  <div class="form-group">
    <input type="text" name="info3" class="form-control"placeholder="Enter info 3">
  </div>
  <div class="form-group">
    <input type="text" name="icon" class="form-control"placeholder="Enter icon depertment">
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
