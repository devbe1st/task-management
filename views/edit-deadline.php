<!-- /* --------------------------------- PROCESS -------------------------------- */ -->
<?php 
include './config/database.php';
include './includes/model.php';
$id = $_GET["id"] ?? "";
$stmt = $conn->prepare("SELECT * FROM deadline WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$dataOld = $result->fetch_assoc();
if(isset($_POST["edit"])){
  $information = $_POST["information"] ?? "";
  $deadline = $_POST["deadline"] ?? "";
  if(editDeadline($information, $deadline, $id)){
    ?><script>window.location.href = "./show-deadline.php"</script><?php //JS
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
    <title>Edit deadline</title>
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
    <!-- /* --------------------------------- HEADER --------------------------------- */ -->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit deadline</h1>
          <p>Edit deadline</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Deadline</li>
          <li class="breadcrumb-item"><a href="#">Edit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Edit deadline</h3>
            <div class="tile-body">
              <form method="POST">
                <div class="form-group">
                  <label class="control-label">Information</label>
                  <input class="form-control" type="text" placeholder="Enter information" name="information" value="<?= $dataOld['information'] ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Deadline</label>
                  <input class="form-control" type="text" placeholder="Enter deadline" name="deadline" value="<?= $dataOld['deadline'] ?>">
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
