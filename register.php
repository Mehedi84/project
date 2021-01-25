<?php
require 'dashboard_part/header.php';
 ?>

    <div class="col-lg-6 m-auto">
      <div class="text-center bg-dark text-white py-3">
        <h2>REGISTER</h2>
      </div>
      <form action="register_post.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
        </div>

        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter Your EMAIL">
        </div>

        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Enter Your PASSWORD">
        </div>

        <select class="form-control" name="role">
          <option value="0">select</option>
          <option value="1">Admin</option>
          <option value="2">Moderator</option>
          <option value="3">Author</option>
        </select>

        <div class="form-group">
          <input type="file" name="user_img" class="form-control">
        </div>


        <div class="text-center py-3">
          <button type="submit" class="btn btn-primary">submit</button>
        </div>
      </form>
    </div>

     <?php
     require 'dashboard_part/footer.php';
      ?>
