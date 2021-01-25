<?php
require 'dashboard_part/header.php';
 ?>

<div class="col-lg-12">
  <div class="text-center bg-dark text-white">
    <h1>ADD principal</h1>
  </div>
<form action="principal_post.php" method="post"enctype="multipart/form-data" >

  <div class="form-group">
    <input type="text" name="title" class="form-control"placeholder="Enter Title">
  </div>

  <div class="form-group">
    <textarea name="desp" class="form-control" rows="8" cols="80" placeholder="Deiscription"></textarea>
  </div>

  <div class="form-group">
    <input type="text" name="name" class="form-control"placeholder="Enter name">
  </div>

  <div class="form-group">
    <input type="text" name="principal" class="form-control"placeholder="Enter principal">
  </div>

  <div class="form-group">
    <input type="text" name="ins" class="form-control"placeholder="Enter  ins">
  </div>
  <div class="form-group">
    <input type="file" name="principal_img" class="form-control"placeholder="PHOTO">
  </div>



  <div class="text-center py-2">
    <button type="submit" class="btn btn-info">Submit</button>
  </div>
</form>
</div>

 <?php
 require 'dashboard_part/footer.php';
  ?>
