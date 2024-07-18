<!-- /* --------------------------------- PROCESS -------------------------------- */ -->
<?php 
include './config/database.php';
include './includes/model.php';
$id = $_GET["id"] ?? "";
$stmt = $conn->prepare("SELECT * FROM task WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
if(isset($_POST["edit"])){
  $details = $_POST["details"] ?? "";
  // if(editTaskDetails($details, $id)){
  //   ?><script>window.location.href = "./show-task.php"</script><?php //JS
  // }
}
?>
<!-- /* --------------------------------- PROCESS -------------------------------- */ -->
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
    <title>Task details</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fix.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- /* --------------------------------- HEADER --------------------------------- */ -->
    <?php include './includes/header.php' ?>
    <!-- /* --------------------------------- HEADER --------------------------------- */ -->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Task Details</h1>
          <p>Thông tin chi tiết </p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Task</li>
          <li class="breadcrumb-item active"><a href="#">Details</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h2><?= $data['information'] ?></h2>
            <p>Customer: <span class=""><?= $data['customer'] ?></span></p>
            <p>Deadline: <span class=""><?= $data['deadline'] ?></span></p>
            <p>Budget: <span class=""><?= number_format($data['budget']) ?> VNĐ</span></p>
            <p>Deposit: <span class=""><?= number_format($data['deposit']) ?> VNĐ</span></p>
            <p>Get: <span class=""><?= number_format($data['get']) ?> VNĐ</span></p>
            <div class="task-details">
              <p><strong class="badge badge-success" style="font-size: 18px;">Task details</strong> </p>
              <?= $data['details'] ?>
            </div>
            <div class="d-flex justify-content-end mt-3"><button class="btn btn-primary" onclick="window.location.href = './show-task.php'">Back</button></div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>