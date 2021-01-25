<?php
require 'session_cheak.php';
// require 'cookie_cheak.php';
require 'db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="dashboared_asses/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="uplode/user/<?php echo $_SESSION['user_img'];  ?>" alt="User Image" width="75" >
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['name']; ?></p>
          <p class="app-sidebar__user-designation">
           <?php
             if($_SESSION['role']==1) {
               echo "Admin";
             }
             if($_SESSION['role']==2) {
               echo "Moderator";
             }
             if($_SESSION['role']==3) {
               echo "Author";
             }
            ?>
          </p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="admin.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="message_view.php"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">MESSAGE</span></a></li>
        <?php
          if ($_SESSION['role']==1 || $_SESSION['role']==2) {
         ?>
        <li class="treeview"><a class="app-menu__item" href="user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">USERS</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="user.php"><i class="icon fa fa-user-o"></i> VIEW</a></li>
            <li><a class="treeview-item" href="register.php"><i class="icon fa fa-user-plus"></i> ADD USER </a></li>
            <!-- <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li> -->
          </ul>
        </li>
      <?php } ?>
      <li class="treeview"><a class="app-menu__item" href="notice.php" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">NOTICE</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="notice.php"><i class="icon fa fa-user-o"></i> VIEW</a></li>
          <li><a class="treeview-item" href="add_notice.php"><i class="icon fa fa-user-plus"></i> ADD NOTICE </a></li>

        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">QUICK LINKS</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="quick.php"><i class="icon fa fa-user-o"></i> VIEW</a></li>
          <li><a class="treeview-item" href="add_quick.php"><i class="icon fa fa-user-plus"></i> ADD QUICK LINKS</a></li>

        </ul>
      </li>
      <li class="treeview"><a class="app-menu__item" href="user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">NEWS</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="news.php"><i class="icon fa fa-user-o"></i> VIEW</a></li>
          <li><a class="treeview-item" href="add_news.php"><i class="icon fa fa-user-plus"></i> ADD NEWS</a></li>

        </ul>
      </li>


      <li class="treeview"><a class="app-menu__item" href="user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">WELCOME</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="welcome.php"><i class="icon fa fa-user-o"></i> VIEW</a></li>
          <li><a class="treeview-item" href="add_welcome.php"><i class="icon fa fa-user-plus"></i> ADD WELCOME </a></li>

        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">GALLARY</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="gallary.php"><i class="icon fa fa-user-o"></i> VIEW</a></li>
          <li><a class="treeview-item" href="add_gallary.php"><i class="icon fa fa-user-plus"></i> ADD PHOTO </a></li>

        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">ADMIN POST</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="adminpost.php"><i class="icon fa fa-user-o"></i> VIEW</a></li>
          <li><a class="treeview-item" href="add_adminpost.php"><i class="icon fa fa-user-plus"></i> ADD POST </a></li>

        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">HEADER PART</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="head.php"><i class="icon fa fa-user-o"></i> VIEW</a></li>
          <li><a class="treeview-item" href="add_head.php"><i class="icon fa fa-user-plus"></i> ADD </a></li>

        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">PRINCIPAL</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="principal.php"><i class="icon fa fa-user-o"></i> VIEW</a></li>
          <li><a class="treeview-item" href="add_principal.php"><i class="icon fa fa-user-plus"></i> ADD PRINCIPAL </a></li>

        </ul>
      </li>
      <li class="treeview"><a class="app-menu__item" href="user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">DEPERTMENT</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="depertment.php"><i class="icon fa fa-user-o"></i> VIEW</a></li>
          <li><a class="treeview-item" href="add_depertment.php"><i class="icon fa fa-user-plus"></i> ADD DEPT </a></li>

        </ul>
      </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">BANNER</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_banner.php"><i class="icon fa fa-circle-o"></i> ADD BANNER</a></li>
            <li><a class="treeview-item" href="banner.php"><i class="icon fa fa-circle-o"></i>VIEW</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">USEFUL LINKS</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_links.php"><i class="icon fa fa-circle-o"></i> ADD LINKS</a></li>
            <li><a class="treeview-item" href="links.php"><i class="icon fa fa-circle-o"></i>VIEW</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">INS DOCUMENT</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_document.php"><i class="icon fa fa-circle-o"></i> ADD DOCUMENT</a></li>
            <li><a class="treeview-item" href="document.php"><i class="icon fa fa-circle-o"></i>VIEW</a></li>
          </ul>
        </li>

      </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">STUDENT AREA</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_student.php"><i class="icon fa fa-circle-o"></i> ADD STUDENT AREA </a></li>
            <li><a class="treeview-item" href="student.php"><i class="icon fa fa-circle-o"></i>VIEW</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
            <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
            <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
          </ul>
            <li><a class="app-menu__item" href="login.php"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">LOGOUT</span></a></li>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
