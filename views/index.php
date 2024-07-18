<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- /* --------------------------------- HEADER --------------------------------- */ -->
    <?php include './includes/header.php' ?>
    <?php include './includes/model.php' ?>
    <!-- /* --------------------------------- HEADER --------------------------------- */ -->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>Nói gì đi khi đây là những chiến công của anh</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <!-- /* -------------------------------- DEADLINE -------------------------------- */ -->
        <div class="col-md-6 col-lg-4">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-stop-circle fa-3x"></i>
            <div class="info">
              <h4>Deadline pending</h4>
              <p><b><?= selectTotalWhere('deadline',0) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-spinner fa-3x"></i>
            <div class="info">
              <h4>Deadline process</h4>
              <p><b><?= selectTotalWhere('deadline',1) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small success coloured-icon"><i class="icon fa fa-check-circle-o fa-3x"></i>
            <div class="info">
              <h4>Deadline done</h4>
              <p><b><?= selectTotalWhere('deadline',2) ?></b></p>
            </div>
          </div>
        </div>
        <!-- /* -------------------------------- DEADLINE -------------------------------- */ -->
        <!-- /* ---------------------------------- TASK ---------------------------------- */ -->
        <div class="col-md-6 col-lg-4">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-stop-circle fa-3x"></i>
            <div class="info">
              <h4>Task pending</h4>
              <p><b><?= selectTotalWhere('task',0) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-spinner fa-3x"></i>
            <div class="info">
              <h4>Task process</h4>
              <p><b><?= selectTotalWhere('task',1) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small success coloured-icon"><i class="icon fa fa-check-circle-o fa-3x"></i>
            <div class="info">
              <h4>Task done</h4>
              <p><b><?= selectTotalWhere('task',2) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-database fa-3x"></i>
            <div class="info">
              <h4>Total task</h4>
              <p><b><?= selectTotal("task") ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
              <h4>Monney pending</h4>
              <p><b><?= (monneyPending()) ? number_format(monneyPending()) : 0 ?> VNĐ</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small success coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
              <h4>Get monney</h4>
              <p><b><?= (monneyGet()) ? number_format(monneyGet()) : 0 ?> VNĐ</b></p>
            </div>
          </div>
        </div>
        <!-- /* ---------------------------------- TASK ---------------------------------- */ -->
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
  </body>
</html>