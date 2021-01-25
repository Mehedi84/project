<?php
require 'dashboard_part/header.php';
 ?>

<div class="col-lg-12">
  <div class="text-center bg-dark text-white">
    <h1>ADD STUDENT AREA</h1>
  </div>
<form action="student_post.php" method="post" >

  <div class="form-group">
    <input type="text" name="info" class="form-control"placeholder="ENTER INFO">
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
