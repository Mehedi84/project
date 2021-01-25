<?php
require 'dashboard_part/header.php';
 ?>

<div class="col-lg-12">
  <div class="text-center bg-dark text-white">
    <h1>ADD WELCOME</h1>
  </div>
<form action="welcome_post.php" method="post" >
  <div class="form-group">
    <input type="text" name="title" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <textarea name="desp" class="form-control" rows="8" cols="80" placeholder="Deiscription"></textarea>
  </div>

  <div class="text-center py-2">
  <input type="text" name="btn" class="form-control" placeholder="button name">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>

 <?php
 require 'dashboard_part/footer.php';
  ?>
