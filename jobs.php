<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CTM | Jobs</title>
  <?php $path = getcwd()."/layout/"; include($path."header_link.php"); ?>

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  
  <?php $path = getcwd()."/layout/"; include($path."navigation.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Jobs List <small></small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="container-fluid p-md-4">
        <div class="row">
          <div class="col">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <table id="tb_job_list" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Job Id</th>
                      <th>Project_id</th>
                      <th>Cores / Machine Type</th>
                      <th>Job status</th>  
                      <th>Create Time</th>
                      <th>Update Time</th>                 
                      <th>Log Path</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Job Id</th>
                      <th>Project_id</th>
                      <th>Cores / Machine Type</th>
                      <th>Job status</th>  
                      <th>Create Time</th>
                      <th>Update Time</th>                  
                      <th>Log Path</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php $path = getcwd()."/layout/"; include($path."footer.php"); ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php $path = getcwd()."/layout/"; include($path."footer_link.php"); ?>

<script src="assets/js/jobs.js"></script>

</body>
</html>