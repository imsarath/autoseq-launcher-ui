<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Autoseq-Launcher | Home</title>
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
						<h5 class="m-0 text-uppercase"> Create Sample List</h5>
					</div>
					<div class="col-sm-6">
						<button type="button" class="btn btn-md btn btn-info float-right rSync-btn"><i class="fas fa-cloud-upload-alt"></i>&nbsp;&nbsp;Sync Data</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row pb-4">
					<div class="col">
						<div class="card card-info card-outline">
							<div class="card-body">
								<div class="row pb-2">
									<div class="col-2 ml-5">
										<div class="form-group">
											<label class="mandatory">Project List</label>
											<select class="custom-select" id="project_name">
												<option value="">-- Select --</option>
												<option value="PROBIO">PROBIO</option>
												<option value='PSFF'>PSFF</option>
											</select>
										</div>
									</div>
									<div class="col-3 ml-5">
										<div class="form-group">
											<label class="mandatory">Autoseq Launch Step</label>
											<select class="custom-select" id="sample_processing_step">
												<option value="">-- Select  --</option>
												<option value="upload">Upload Orderform</option>
												<option value="sample">Launch using Sample ID and barcodes</option>
											</select>
										</div>
									</div>
									<div class="col-2 ml-5">
										<div class="form-group">
											<label class="mandatory">Anchorage UserName</label>
											<div class="mb-3">
												<input type="text" class="form-control" id="username" placeholder="Enter anchorage username">
											</div>
										</div>
									</div>
									<div class="col-2 ml-5">
										<div class="form-group">
											<label class="mandatory">Anchorage Password</label>
											<div class="mb-3 input-group">
												<input type="password" class="form-control" id="password" placeholder="Enter anchorage password">
												<div class="input-group-append">
													<span class="input-group-text"><i class="fa fa-eye-slash" id="togglePassword"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12 upload">
										<hr>
										<div class="row pt-3">
												<div class="col-10">
														<div class="form-group">
																<label class="mandatory">Upload Orderform</label>
																<div class="custom-file mb-3">
																		<input type="file" class="custom-file-input" id="orderFormfile" name="filename">
																		<label class="custom-file-label" for="orderFormfile">Choose file</label>
																</div>
														</div>
												</div>
												<div class="col-2">
													<div class="form-group upload-btn">
														<button type="button" class="btn bg-gradient-info btn-lg form-submit">Submit</button>
													</div>
												</div>
										</div>
									</div>
									<div class="col-12 sample">
										<hr>
										<div class="row pt-3">
											<div class="col-7">
												<p class="text-center font-weight-bold">CFDNA / Tissue</p>
												<div class="row">
													<div class="col">
														<div class="form-group">
															<label class="mandatory">SID1 <small>(sample name)</small></label>
															<div class="mb-3">
																<input type="text" class="form-control" id="cfdna_sid1" placeholder="*-P-*-CFDNA-*-KH*-C3*">
															</div>
														</div>
													</div>
													<div class="col">
														<div class="form-group">
															<label class="">SID2 <small>(sample name)</small></label>
															<div class="mb-3">
																<input type="text" class="form-control" id="cfdna_sid2" placeholder="*-P-*-CFDNA-*-KH*-C3*">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-4 vertical-line">
												<p class="text-center font-weight-bold">Germline</p>
												<div class="row">
													<div class="col">
														<div class="form-group">
															<label class="mandatory">SID <small>(sample name)</small></label>
															<div class="mb-3">
																<input type="text" class="form-control" id="germline_sid" placeholder="*-P-*-N-*-KH*-C3*">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-1">
													<div class="form-group float-right">
														<button type="button" class="btn btn-sm btn-success add-btn"><i class="fas fa-plus"></i></button>
													</div>
												</div>
										</div>
										<div class="input_fields_wrap">
										</div>
										<div class="row">
											<div class="col-2">
													<div class="form-group generate-btn">
														<button type="button" class="btn bg-gradient-info btn-lg search-sample-submit">Submit</button>
													</div>
											</div>
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
								<h5 class="card-title m-0 text-uppercase">Barcode file list</h5>
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

	<div class="modal" tabindex="-1" role="dialog" id="rSyncSection">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Sync the files for the patients : Anchorage</h5>
				</div>
				<div class="modal-body">
					<form action="" id="rSyncForm">
						<div class="form-group row">
							<label for="mdlProjectName" class="col-sm-4 col-form-label mandatory">Project List</label>
							<div class="col-sm-8">
								<select class="form-control" id="mdlProjectName">
									<option value="">-- Select --</option>
									<option value="PROBIO">PROBIO</option>
									<option value='PSFF'>PSFF</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="mdlCutomId" class="col-sm-4 col-form-label mandatory">Custom ID</label>
							<div class="col-sm-8">
								<input type="number" min="1" class="form-control" id="mdlCutomId" value="eg.. 829511">
							</div>
						</div>
						<div class="form-group row">
							<label for="mdlUsername" class="col-sm-4 col-form-label mandatory">Username</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="mdlUsername" placeholder="Enter anchorage username">
							</div>
						</div>
						<div class="form-group row">
							<label for="mdlPassword" class="col-sm-4 col-form-label mandatory">Password</label>
							<div class="col-sm-8 input-group">
								<input type="password" class="form-control" id="mdlPassword" placeholder="Enter anchorage password">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fa fa-eye-slash" id="modelTooglePwd"></i></span>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info upload-data-btn">Upload</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

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
