<!-- /* --------------------------------- PROCESS -------------------------------- */ -->
<?php 
include './config/database.php';
include './includes/model.php';
$id = $_GET["id"] ?? "";
$stmt = $conn->prepare("SELECT * FROM project WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$dataOld = $result->fetch_assoc();
if(isset($_POST["edit"])){
  $project = $_POST["project"] ?? "";
  $url = $_POST["url"] ?? "";
  if(editProject($project, $url, $id)){
    ?><script>window.location.href = "./show-project.php"</script><?php //JS
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
    <title>Edit Project</title>
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
          <h1><i class="fa fa-edit"></i> Edit Project</h1>
          <p>Edit Project</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Project</li>
          <li class="breadcrumb-item"><a href="#">Edit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Edit Project</h3>
            <div class="tile-body">
              <form method="POST">
                <div class="form-group">
                  <label class="control-label">Project</label>
                  <input class="form-control" type="text" placeholder="Enter project" name="project" value="<?= $dataOld['project'] ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">URL</label>
                  <input class="form-control" type="text" placeholder="Enter url" name="url" value="<?= $dataOld['url'] ?>">
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