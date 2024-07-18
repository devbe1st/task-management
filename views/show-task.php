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
    <title>Task list</title>
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
          <h1><i class="fa fa-th-list"></i> Task List</h1>
          <p>Lụm tiền nào </p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Task</li>
          <li class="breadcrumb-item active"><a href="#">List</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Information</th>
                    <th>Deadline</th>
                    <th>Budget</th>
                    <th>Deposit</th>
                    <th>Get full</th>
                    <th>Process</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include './config/database.php';
                  include './includes/model.php';
                  $stmt = $conn->prepare("SELECT * FROM task ORDER BY id DESC");
                  $stmt->execute();
                  $result = $stmt->get_result();
                  $stt = 1;
                  while ($row = $result->fetch_assoc()) :
                    ?>
                    <tr>
                        <td><?= $stt ?></td>
                        <td><?= $row['customer'] ?></td>
                        <td><?= $row['information'] ?></td>
                        <td><?= $row['deadline'] ?></td>
                        <td><?= format_number($row['budget']) ?></td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button class="btn btn-<?= ($row['deposit'] !== 0) ? "success" : "secondary" ?>" type="button"><?= ($row['deposit'] !== 0) ? format_number($row['deposit']) : "None" ?></button>
                        </div>
                        </td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button class="btn btn-<?= translateStatusClass($row['status']) ?>" type="button"><?= format_number($row['get']) ?></button>
                            <div class="btn-group" role="group">
                            <button class="btn btn-<?= translateStatusClass($row['status']) ?> dropdown-toggle" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="./update.php?table=task&column=status&value=0&id=<?= $row['id'] ?>"><div class="circle-fix bg-danger"></div>Unpaid</a>
                                <a class="dropdown-item" href="./update.php?table=task&column=status&value=1&id=<?= $row['id'] ?>"><div class="circle-fix bg-success"></div>Paid</a>
                                <a class="dropdown-item" href="./update.php?table=task&column=status&value=2&id=<?= $row['id'] ?>"><div class="circle-fix bg-dark"></div>Cancel</a>
                                <a class="dropdown-item" href="./update.php?table=task&column=status&value=3&id=<?= $row['id'] ?>"><div class="circle-fix bg-warning"></div>Boom</a>
                            </div>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button class="btn btn-<?= translateProcessClass($row['process']) ?>" type="button"><?= translateProcess($row['process']) ?></button>
                            <div class="btn-group" role="group">
                            <button class="btn btn-<?= translateProcessClass($row['process']) ?> dropdown-toggle" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="./update.php?table=task&column=process&value=0&id=<?= $row['id'] ?>"><div class="circle-fix bg-danger"></div>Pending</a>
                                <a class="dropdown-item" href="./update.php?table=task&column=process&value=1&id=<?= $row['id'] ?>"><div class="circle-fix bg-warning"></div>Processing</a>
                                <a class="dropdown-item" href="./update.php?table=task&column=process&value=2&id=<?= $row['id'] ?>"><div class="circle-fix bg-success"></div>Done</a>
                            </div>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button class="btn btn-dark" type="button" onclick="window.location.href = './show-task-details.php?id=<?= $row['id'] ?>'"><i style="font-size: 18px;" class="fa fa-info-circle" aria-hidden="true"></i></button>
                            <div class="btn-group" role="group">
                            <button class="btn btn-dark dropdown-toggle" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="./edit-task.php?id=<?= $row['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                <a onclick="return confirm('Chắc chưa đại ca ?')" class="dropdown-item" href="./delete.php?table=task&id=<?= $row['id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                            </div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <?php //HTML
                    $stt ++;
                  endwhile;
                  ?>
                </tbody>
              </table>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>