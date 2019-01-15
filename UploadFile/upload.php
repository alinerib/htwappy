<?php
require('../db.htw.php');
$db = new db();

$application_type = $_GET["application_type"];
$application_id = $_GET["application_id"];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HTW Application - Upload Documents</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
		<link rel="stylesheet" type="text/css" href="../css/styles.css?1">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<!-- SweetAlert2 -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
		<link rel="shortcut icon" href="#">
	<!-- progress bar -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

		<style>
			
			.input-file { 
				visibility: hidden; position: absolute;
			}
			
			h4 { 
				margin-top: 30px;
			}
			
			#filesSelected {
				margin: 0.25rem 0.95rem;
			}

			#file_upload {
				min-width: 240px;
				margin-top: 0!important;
			}
			
			td {
				padding-right: 16px;
			}
			
			.tit {
			    font-size: 18px;
			    font-weight: 400;
			}
			
		</style>
	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-light">
			<div class="container m-0">
				<a class="navbar-brand" href="#">
					<img src="../media/htw-logo1.png" width="85px" height="85px" class="d-inline-block align-top" alt="">
				</a>
				<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
				<?php if($application_type == "credit_account") {?>
				<li class="nav-item active headerLi" id="header_credit">Credit Account Application</li>
				<?php } else {?>
				<li class="nav-item active headerLi" id="header_trade">Trade Card Application</li>
				<?php }?>
				</ul>
				</div>
			</div>
			</nav>
		</header>
	    <div class="container">
	        <div class="row">
		        <input type="hidden" id="application_type" value="<?php echo $application_type; ?>">
		        <input type="hidden" id="application_id" value="<?php echo $application_id; ?>">
		        <?php if($application_type == "trade_card") { ?>
		        <!-- Progress bar -->
				<div class="progress trade_progress progress1 col-12">
				  <div class="circle done" id="t1">
				    <span class="label">1</span>
				    <span class="progressTitle">Company</span>
				  </div>
				  <span class="bar"></span>
				  <div class="circle done" id="t2">
				    <span class="label">2</span>
				    <span class="progressTitle">Users</span>
				  </div>
				  <span class="bar"></span>
				  <div class="circle done" id="t3">
				    <span class="label">3</span>
				    <span class="progressTitle">Conditions</span>
				  </div>
  				  <span class="bar"></span>
				  <div class="circle active" id="t4">
				    <span class="label">4</span>
				    <span class="progressTitle">Documents</span>
				  </div>
				</div>

				<?php } else if ($application_type == "credit_account") { ?>
				<!-- Progress bar -->
				<div class="progress credit_progress progress1 col-12">
				  <div class="circle done" id="c1">
				    <span class="label">1</span>
				    <span class="progressTitle">Company</span>
				  </div>
				  <span class="bar"></span>
				  <div class="circle done" id="c2">
				    <span class="label">2</span>
				    <span class="progressTitle">References</span>
				  </div>
				  <span class="bar"></span>
				  <div class="circle done" id="c3">
				    <span class="label">3</span>
				    <span class="progressTitle">Credit</span>
				  </div>
  				  <span class="bar"></span>
				  <div class="circle done" id="c4">
				    <span class="label">4</span>
				    <span class="progressTitle">Conditions</span>
				  </div>
				  <span class="bar"></span>
  				  <div class="circle active" id="c5">
				    <span class="label">5</span>
				    <span class="progressTitle">Documents</span>
				  </div>
				</div>
				
				<?php } ?>
	            
	            <div class="col-12">
	
		            <section class="">
			            <div class="p-4">
							<div class="row border border-success" style="padding: 2rem;">
								<div class="col-12">
									<h2>Upload Documents</h2>
		                        </div>
		                        <div class="col-12">
		                        	<form action="fileUpload.php" id="form_upload" method="post" multipart="" enctype="multipart/form-data">
		                                <input type="hidden" name="application_id" value="<?php echo $application_id; ?>">
		                                <div id="uploading">
		                                    <input id="fileUpload" type="file" name="files[]" class="input-file" multiple>
		                                    <div class="row">
			                                    <div class="col-4">
			                                        <p>Please select the files to be uploaded</p>
			                                    </div>
			                                    <div class="col-2">
			                                        <button class="upload-field btn btn-info" type="button">Select Files</button>
			                                    </div>
	    	                                    <div class="col-2">
			                                        <span id="filesSelected"></span>
			                                    </div>
	    	                                    <div class="col-4">
			                                        <button class="btn btn-primary" type="button" id="file_upload">Upload File(s) Now</button>
			                                    </div>
	
		                                    </div>
		                                    <table id='upload_table' class="mt-11">
											<?php 
												$query = "SELECT id, filename FROM files WHERE application_id = '$application_id'";
												$getfiles = $db->select($query);
												if(!empty($getfiles)){	
													echo "<tr><td class='tit'>Files attached</td><td></td></tr>";
												
													$k = 0;
													foreach ($getfiles AS $file){
														$id = $file['id'];
														$filename = $file['filename'];
														
														echo "<tr id='tr_$id'><td>$filename</td><td><button type='button' class='btn btn-danger deletefile' data-id='$id'>Delete</button></td></tr>";
														$k++;
													}													
								
												}
											?>
											</table>
		                                </div>
		                        	</form>
		                        </div>
		                    </div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div id="step3_next_previous_buttons" class="form-group mp-4"> 
							<a href="../index.php?application_id=<?php echo $application_id; ?>&application_type=<?php echo $application_type; ?>"><button type="button" class="btn btn-danger revert_to_index_btn" id=""> <span class="fas fa-chevron-left"></span> Previous</button> 
							<button type="submit" class="btn btn-primary step_4_btn float-right" id="upload_submit"> Submit <span class="fas fa-chevron-right"></span></button> 
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>	

		<script>

			$(document).on('click', '.upload-field', function(){
				var file = $(this).parent().parent().parent().find('.input-file');
				file.trigger('click');
			});
			$(document).on('change', '.input-file', function(){
				$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
			});

			$(document).on('change', '#fileUpload', function(){
				var files = $(this)[0].files;
				if (files.length > 0) {
					$('#filesSelected').text(files.length+' selected');
				}
				else {
					$('#filesSelected').text('');
				}
			});

            $("#file_upload").click( function(){
                $("#form_upload").submit();
            });
            $("#upload_submit").click( function(){
                $("#form_upload").submit();
            });
            
			$("#form_upload").on("submit", function(e){
				e.preventDefault();
			
				// Get form
				var form = $('#form_upload')[0];
			
				// Create an FormData object 
				var formdata = new FormData(form);
			
				$.ajax({
					url		 : 'fileUpload.php',
					data		: formdata,
					cache	   : false,
					contentType : false,
					processData : false,
					type		: 'POST',
					success	 : function(response){
						if (response === "") { 
						}
						else {
							response = JSON.parse(response);
			
							if (response["outcome"] == "success") {
								if (response["smessage"]) {
									swal({
										title: 'Success',
										text: 'Files Uploaded.',
										type: 'success',
										confirmButtonText: "Ok",
									})
									.then((result) => {location.reload();})
									
								}
							} else if (response["outcome"] == "fail") {
								swal({
										title: 'Error',
										text: 'An error had occurred. Please check the size and type of files.',
										type: 'error',
										confirmButtonText: "Ok",
									}).then((result) => {location.reload();})

							} else {
								swal({
									title: 'Warning!',
									text: 'An error prevented processing your request',
									type: 'warning',
									confirmButtonText: "Ok",
								}).then((result) => {location.reload();})
							}
						}
					}
				});
				return false;
			});
			$(".deletefile").on("click", function(e){
				// e.preventDefault();
				var file_id = $(this).attr("data-id"); 
				
				var application_type = $("#application_type").val();

				var application_id = $("#application_id").val();

				$.ajax({
					type: "GET",
					url: "filedelete.php?file_id="+file_id+"&application_type="+application_type+"&application_id="+application_id+"",
					data: {
						file_id:file_id,
						application_type:application_type,
						application_id:application_id
					},
					cache:false,
					success: function (response) {
						if (response === "") { 
						}
						else {
							response = JSON.parse(response);
			
							if (response["outcome"] == "success") {
								$('#tr_'+file_id).remove();
							}
						}
					}
				});
			});

		</script>
	</body>
</html>