<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CTM | Home</title>
  <?php $path = getcwd()."/layout/"; include($path."header_link.php"); ?>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <?php $path = getcwd()."/layout/"; include($path."navigation.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Generate Barcode</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid p-md-4">
        <div class="row pb-4">
          <div class="col">
            <div class="card card-info card-outline">
              <div class="card-body">
                <div class="row">
                  <div class="col-2 mr-3">
                    <div class="form-group">
                      <label>Project List</label>
                      <select class="custom-select" id="project_name">
                        <option value="">-- Select project --</option>
                        <option value="PROBIO">PROBIO</option>
                        <option value='PSFF'>PSFF</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-8 mr-3">
                    <div class="wrapper-divider row">
                        <div class="col-6 ml-5">
                            <div class="form-group">
                                <label>Upload Orderform</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="orderFormfile" name="filename">
                                    <label class="custom-file-label" for="orderFormfile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="divider">
                                <div class="or-separator">
                                    <div class="vertical-line"></div>
                                    <div>OR</div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Search pattern</label>
                                <input type="text" class="form-control" placeholder="eg: PN20210210" id="search_pattern">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-1">
                    <div class="form-group generate-btn">
                      <button type="button" class="btn btn-block bg-gradient-info btn-md btn-flat form-submit">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="barcode-details">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Barcode file list</h5>
              </div>
              <div class="card-body">
                  <div id="barcode-list">
                  
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php $path = getcwd()."/layout/"; include($path."footer.php"); ?>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<?php $path = getcwd()."/layout/"; include($path."footer_link.php"); ?>
<script type="text/javascript" src="assets/js/xlsx/xlsx.full.min.js"></script>
<script type="text/javascript" src="assets/js/xlsx/jszip.js"></script>
<script type="text/javascript" src="assets/js/xlsx/jquery.tabletojson.min.js"></script>
<script src="assets/js/generate.js"></script>
</body>
</html>