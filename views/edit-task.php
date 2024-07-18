<!-- /* --------------------------------- PROCESS -------------------------------- */ -->
<?php 
include './config/database.php';
include './includes/model.php';
$id = $_GET["id"] ?? "";
$stmt = $conn->prepare("SELECT * FROM task WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$dataOld = $result->fetch_assoc();
if(isset($_POST["edit"])){
  $customer = $_POST["customer"] ?? "";
  $information = $_POST["information"] ?? "";
  $details = $_POST["details"] ?? "";
  $deadline = $_POST["deadline"] ?? "";
  $budget = $_POST["budget"] ?? "";
  $deposit = $_POST["deposit"] ?? "";
  $get = $_POST["get"] ?? "";
  if(editTask($customer, $information, $details, $deadline, $budget, $deposit, $get, $id)){
    ?><script>window.location.href = "./show-task.php"</script><?php //JS
  }
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
    <title>Edit task</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="./ckeditor5/sample/css/sample.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- /* --------------------------------- HEADER --------------------------------- */ -->
    <?php include './includes/header.php' ?>
    <!-- /* --------------------------------- HEADER --------------------------------- */ -->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit task</h1>
          <p>Edit task</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Task</li>
          <li class="breadcrumb-item"><a href="#">Edit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Edit task</h3>
            <div class="tile-body">
              <form method="POST">
                <div class="form-group">
                  <label class="control-label">Customer</label>
                  <input class="form-control" type="text" placeholder="Enter customer" name="customer" value="<?= $dataOld['customer'] ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Information</label>
                  <input class="form-control" type="text" placeholder="Enter information" name="information" value="<?= $dataOld['information'] ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Details</label>
                  <textarea name="details" id="editor"><?= $dataOld['details'] ?></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Deadline</label>
                  <input class="form-control" type="text" placeholder="Enter deadline" name="deadline" value="<?= $dataOld['deadline'] ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Budget</label>
                    <input class="form-control" type="number" placeholder="Enter budget" name="budget" value="<?= $dataOld['budget'] ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Deposit</label>
                    <input class="form-control" type="number" placeholder="Enter deposit" name="deposit" value="<?= $dataOld['deposit'] ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Get</label>
                    <input class="form-control" type="number" placeholder="Enter get" name="get" value="<?= $dataOld['get'] ?>">
                </div>
                <div class="tile-footer">
                  <button class="btn btn-primary" type="submit" name="edit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                </div>
              </form>
            </div>
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
  </body>
</html>
<!-- /* ----------------------------------- new ---------------------------------- */ -->
<script src="./ckeditor5/ckeditor.js"></script>
<script src="./ckeditor5/create-ckeditor.js"></script>
<!-- /* ----------------------------------- new ---------------------------------- */ -->