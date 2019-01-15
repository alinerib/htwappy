<?php
require('db.htw.php');
$db = new db();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>HTW Apply</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS jQuery, Popper.js, Bootstrap JS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" href="css/styles.css?8">
		<!-- Font Awesome 5 Icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="jsignature-js-css/css/sign.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
		<script src="jsignature-js-css/libs/modernizr.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<!-- SweetAlert2 -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
		<!-- progress bar -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

		<!--[if lt IE 9]>
		<script type="text/javascript" src="jsignature-js-css/libs/flashcanvas.js"></script>
		<![endif]-->
		<!-- 	Loqate scripts, Javascript and CSS files	 -->
		<script>(function(n,t,i,r){var u,f;n[i]=n[i]||{},n[i].initial={accountCode:"HAMPS11132",host:"HAMPS11132.pcapredict.com"},n[i].on=n[i].on||function(){(n[i].onq=n[i].onq||[]).push(arguments)},u=t.createElement("script"),u.async=!0,u.src=r,f=t.getElementsByTagName("script")[0],f.parentNode.insertBefore(u,f)})(window,document,"pca","//HAMPS11132.pcapredict.com/js/sensor.js")</script>

	</head>

	<body>
	<?php include('header.php');?>


	<div class="container">
			<div class="row mb-80">
				<!-- Progress bar -->
				<div class="progress trade_progress col-12 d-none">
				  <div class="circle" id="t1">
				    <span class="label">1</span>
				    <span class="progressTitle tCompany">Company</span>
				  </div>
				  <span class="bar"></span>
				  <div class="circle" id="t2">
				    <span class="label">2</span>
				    <span class="progressTitle tUsers">People</span>
				  </div>
				  <span class="bar"></span>
				  <div class="circle" id="t3">
				    <span class="label">3</span>
				    <span class="progressTitle tConditions">Conditions</span>
				  </div>
  				  <span class="bar"></span>
				  <div class="circle" id="t4">
				    <span class="label">4</span>
				    <span class="progressTitle tDocuments">Documents</span>
				  </div>
				</div>


				<!-- Progress bar -->
				<div class="progress credit_progress col-12 d-none">
				  <div class="circle" id="c1">
				    <span class="label">1</span>
				    <span class="progressTitle cCompany">Company</span>
				  </div>
				  <span class="bar"></span>
				  <div class="circle" id="c2">
				    <span class="label">2</span>
				    <span class="progressTitle cReferences">References</span>
				  </div>
				  <span class="bar"></span>
				  <div class="circle" id="c3">
				    <span class="label">3</span>
				    <span class="progressTitle cCredit">Credit</span>
				  </div>
  				  <span class="bar"></span>
				  <div class="circle" id="c4">
				    <span class="label">4</span>
				    <span class="progressTitle cConditions">Conditions</span>
				  </div>
				  <span class="bar"></span>
  				  <div class="circle" id="c5">
				    <span class="label">5</span>
				    <span class="progressTitle cDocuments">Documents</span>
				  </div>
				</div>




				<div class="col-12">
					<section class="step_0">
<!--
				<ul class="nav nav-tabs list-inline">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#signup">Sign up</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#login">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nologin">Apply No Login</a>
					</li>
				</ul>
-->

<!--
				<div class="tab-content">

					<div id="signup" class="tab-pane active">
						<form action="signup.php" method="POST" id="signupForm">

							<h1>Sign up</h1>
							<input type="text" name="email" placeholder="E-mail" />
							<input type="password" name="password" placeholder="Password" />
							<input type="password" name="password2" placeholder="Retype password" />
						
							<input type="submit" name="signup_submit" value="Sign me up" />	
						</form>

					</div>

					<div id="login" class="tab-pane">
						<form action="login.php" method="POST" id="loginForm">

							<h1>Login</h1>
							<input type="text" name="email" placeholder="E-mail" />
							<input type="password" name="password" placeholder="Password" />

							<input type="submit" name="login_submit" value="Login" />	
						</form>

					</div>

					<div id="nologin" class="tab-pane">
-->
					<form action="validation.php" method="POST" id="creditform">
					<?php 
					if ($_SERVER['REQUEST_METHOD'] === 'GET') {

						if(isset($_GET['application_id']) && isset($_GET['application_type'])){
							$application_id = $_GET['application_id'];
							$application_type = $_GET['application_type'];
					?>
							<input type="hidden" id="application_id" name="application_id" value="<?php echo $application_id;?>">
							<input type="hidden" id="getDataResponse" name="getDataResponse">

					<?php	}
					} 
					?>
	
					<!-- ALL INPUT HIDDEN -->
					<input type="hidden" id="application_type" name="application_type" value="">
					<input type="hidden" id="company_type" name="company_type" value="">
					<input type="hidden" id="trade_proprietors_qty" name="trade_proprietors_qty" value="0">
					<input type="hidden" id="trade_applicants_qty" name="trade_applicants_qty" value="0">
					<input type="hidden" id="principle_directors_qty" name="principle_directors_qty" value="0">
					<input type="hidden" id="credit_proprietors_qty" name="credit_proprietors_qty" value="0">
					<input type="hidden" id="operation" name="operation" value="add">

						<!-- Choose Form Application Form (cards) -->
					<div class="modalities">
	<!--
						<h1>Apply with no Login</h1>
						<h2>**applying with login can give you updates of your application</h2>
	-->
						
						<div class="col-sm-12" id="trade_card">
							<div class="card border-success mb-4 trade_card">
								<div class="card-body text-success">
									<h5 class="card-title" style="text-align: center;">Trade Card Application</h5>
									<p class="card-text" style="text-align: center;">For Trade Card Applicants</p>
								</div>
								<div class="card-footer bg-success border-success text-white" style="text-align: center;">Trade Card</div>
							</div>
						</div>

						<div class="col-sm-12" id="credit_account">
							<div class="card border-primary mb-4 limited">
								<div class="card-body text-primary align-cards-front-page">
									<h5 class="card-title" style="text-align: center;">Credit Account Application</h5>
									<p class="card-text" style="text-align: center;">For Credit Account Applicants</p>

								</div>
								<div class="card-footer bg-primary border-primary text-white" style="text-align: center;">Credit Account</div>
							</div>
						</div>
					</div>

	<!-- 		</div> -->
	
					</section>
			
                    <!-- begin of: Common data for all applications -->
                    <section class="step_1 d-none">
                        <div class="row">
                            <div class="col-6 company-details">	
                                <div class="row">
                                    <div class="col-12">	  
                                        <h2>Company Details</h2>
                                        <label>Full Trading Name of Business</label>
                                        <input type="text" class="input-text-required" id="company_name" placeholder="Company Name" name="company_name" value="<?php if(isset($company_name)){echo $company_name;}?>">
                                        <label class="">Address</label>
                                        <input type="text" class="input-text-required" id="company_address" placeholder="1234 Main St" name="company_address" value="<?php  if(isset($company_name)){echo $company_address;}?>">
                                        <label class="">&nbsp;</label>
                                        <input type="text" id="company_address_line2" name="company_address_line2">
                                        <label class="">Town / City</label>
                                        <input type="text" class="input-text-required" id="company_town" placeholder="Town / City" name="company_town">
                                        <label class="">County</label>
                                        <input type="text" class="input-text-required" id="company_county" placeholder="County" name="company_county">
                                        <label class="">Postcode</label>
                                        <input type="text" class="input-text-required" id="company_postcode" placeholder="Postcode" name="company_postcode">
                                    </div>
                                    <div class="col-12">
                                        <p>Is your Business a Limited company?
                                            No
                                            <label class="switch">
                                            
                                                <input type="checkbox" class="check_limited" name="check_limited" value="">
                                                <span class="slider round"></span>
                                            
                                            </label>
                                            Yes
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="row">

                                    <div class="col-12">
                                        <h2>Correspondence Details</h2>
                    
                                        <label class="">Title</label>
                                        <select class="mb-20 mt-11 titleSelect2" name="correspondence_title">
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
											<option value="Ms">Ms</option>
                                        </select>
                                            
                                        <label class="mt-24">First Name</label>
                                        <input type="text" class="input-text-required" id="correspondence_firstname" placeholder="First Name" name="correspondence_firstname">

                                            <label class="">Last Name</label>
                                        <input type="text" class="input-text-required" id="correspondenc_surname" placeholder="Surname" name="correspondence_surname">
                                    </div>
                                    <div class="col-6">
                                        <label>Telephone</label>
                                        <input type="text" class="input-text-required" id="company_telephone" placeholder="Telephone No" name="company_telephone">
                                    </div>
                                    <div class="col-6">
                                        <label>Mobile</label>
                                        <input type="text" class="" id="company_mobile" placeholder="Mobile Telephone No" name="company_mobile">
                                    </div>
                                    <div class="col-12">

                                    <div class="email-list mb-22 mt-24">
                                        <label class="label">
                                            <input  class="label__checkbox" type="checkbox" name="email_list" value=""/>
                                            <span class="label__text">
                                            <span class="label__check">
                                                <i class="fa fa-check icon email-list-check"></i>
                                            </span>
                                            </span>
                                        </label>
                                        <span>I would like to receive the HTW Price List via email.</span>
                                    </div>
                                        <label>Email</label>
                                        <input type="email" class="input-text-required" id="company_email" placeholder="Email" name="company_email">
                                    </div>
                                    <div class="clearfix"></div>	
                                    <div class="col-6">
                                        <label class="">Nature of Business</label>
                                        <select class="mb-20 mt-11 titleSelect2" style="width: 100%;" class="input-text-required" name="company_business_nature" id="company_business_nature">
											<option value="Builder">Builder</option>                                        
											<option value="Landscaper">Landscaper</option>
											<option value="Plumber">Plumber</option>
											<option value="General Fixer">General Fixer</option>
											<option value="Housebuilder Fixer">Housebuilder Fixer</option>
											<option value="Developer">Developer</option>
											<option value="Main Contractor Fixer">Main Contractor Fixer</option>
											<option value="Specialist Tile Shop">Specialist Tile Shop</option>
											<option value="Non Specialist Tile Shop">Non Specialist Tile Shop</option>

										</select>
                                    </div>
                                    <div class="col-6">
                                        <label class="">When was the business started?</label>
                                        <input data-date-format="dd-mm-yyyy" class="input-text-required" id="datepicker" name="start_date" value="">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </section>
                    <!-- end of: Common data for all applications -->


                    <div class="row">
                        <div class="col-6">

                            <!-- begin of: Trade Card only - Non Limited Companies -->
                            <section class="step_2_nonlimited d-none">
                                <div id="trade_section_1" class="trade_section_1">
                                    <h2><span class="far fa-building"></span>&nbsp Non Limited Company</h2>
                                    <h3>Proprietors</h3>
                                    <div id="repeatable_trade_proprietor_0" class="repeatable">
                                        <div class="row">
                                            <div class="col-12">											
                                                <h4>Proprietor 1</h4>
                                            </div>
                                            <div class="col-6">
												<label class="">Title</label>
													<select class="mb-20 mt-11 titleSelect2" name="trade_proprietor_title_0">
														<option value="Mr">Mr</option>                                        
														<option value="Mrs">Mrs</option>
														<option value="Miss">Miss</option>
														<option value="Ms">Ms</option>
													</select>
                                                <label>Full Name</label>
                                                <input type="text" class="input-text-required" id="trade_proprietor_fullname_0" placeholder="Full Name" name="trade_proprietor_fullname_0">
                                                <label>Address</label>
                                                <input type="text" class="input-text-required" id="trade_proprietor_address_0" placeholder="Address" name="trade_proprietor_address_0">
                                                <label>Address Line 2</label>
                                                <input type="text" class="" id="trade_proprietor_line2_address_0" placeholder="" name="trade_proprietor_line2_address_0">
                                            </div> 
                                            <div class="col-6">   
                                                <label>Town</label>
                                                <input type="text" class="input-text-required" id="trade_proprietor_town_0" placeholder="Town / City" name="trade_proprietor_town_0">
            
                                                <label>County</label>
                                                <input type="text" class="input-text-required" id="trade_proprietor_county_0" placeholder="County" name="trade_proprietor_county_0">
                                                
                                                <label>Postcode</label>
                                                <input type="text" class="input-text-required" id="trade_proprietor_postcode_0" placeholder="Postcode" name="trade_proprietor_postcode_0">
                                            </div>
                                        </div>
                                        <button style="display: none;" class="btn btn-danger btn_remove_trade_proprietor btn_remove" id="btn_remove_trade_proprietor_0"><span class="fa fa-times"></span></button>
            
                                    </div>	  
                                    <button type="button" id="add_trade_proprietor" class="mb-20 btn btn-success">Add Proprietor</button>
                                </div>
                                <!-- end of: Trade Card only - Non Limited Companies -->
                            </section>

            
                            <!-- begin of: Trade Card only - Limited Companies -->
                            <section class="step_2_limited d-none">
                                <h2><span class="far fa-building"></span>&nbsp Limited Company</h2>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="trade_registered_name">Registered Company Name</label>
                                        <input type="text" class="input-text-required" id="trade_registered_name" placeholder="Registered Company Name" name="trade_registered_name">

                                        <label for="trade_registered_number">Registered Company Number</label>
                                        <input type="text" class="input-text-required" id="trade_registered_number" placeholder="Registered Company Number" name="trade_registered_number">
                                    </div>
                                </div>
                            </section>
                            <!-- end of: Trade Card only - Limited Companies -->
                        
                        </div>

                        <div class="col-6">

                            <!-- begin of: Trade Card only - Users Signatures any type of Companies -->
                            <section class="step_2_users_sign d-none">
                                <div class="" id="signature_box">
                                    <h2><span class="fas fa-pencil-alt"></span> Authorised Trade Card Users</h2>
                                    <div class="row">
                                        <div class="col-6 mb-20">
                                            <h3>All trade card users must sign to accept trade card conditions</h3>
                                        </div>	
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info text-center mb-20" data-toggle="modal" data-target="#tradeConditions">Read Trade Card Conditions</button>
                                        </div>	
                                        <div class="col-12">										
                                            <div id="trading">
                                                <div class="repeatable" id="repeatable_trade_0">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Authorised Trade Card User 1</h4>
                                                        </div>
                                                        <div class="col-2">
                                                            <select class="mb-20 titleSelect2" name="trade_user_title_0">
                                                                <option selected="selected" value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                                <option value="Miss">Miss</option>
        														<option value="Ms">Ms</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="text" class="input-text-required" id="trade_user_fullname_0" placeholder="User Full Name" name="trade_user_fullname_0">
                                                        </div>
                    
                                                        <!-- signature module -->
                                                        <div class="col-2">
                                                            <img class="img_trade_user_signature" id="img_signature_0">
                                                        </div>
                                                        <div class="col-4">
                                                            <button type="button" class="btn btn-success add_signature_btn" id="add_signature_btn_0" data-toggle="modal" data-target="#signatureModule" data-signature-index="0" data-signature-conditions="applicants">Add Signature</button>
                                                            <button type="button" class="btn btn-success change_signature_btn d-none" id="change_signature_btn_0" data-toggle="modal" data-target="#signatureModule" data-signature-index="0" data-signature-conditions="applicants">Change Signature</button>
                                                            <input type="hidden" name="trade_user_sign_0" id="trade_user_sign_id_0" value="">
                                                        </div>
            
                                                        
                                                        <button style="display: none;" class="btn btn-danger btn_remove_trade_applicants btn_remove" id="btn_remove_trade_applicants_0"><span class="fa fa-times"></span></button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" id="add_trade_users" class="mb-20 btn btn-success">Add Trade Card User</button>
                                        </div>
                                    </div>
                                <!-- dinamically add new trade_user button -->
                            </div>	  
                        </section>
                        <!-- end of: Trade Card only - Non Limited Companies -->
                    </div>
                </div>

					<!-- begin of: Trade Card - Terms and Conditions -->
					<section class="step_3_trade_conditions d-none">
						<!-- begin of Check Trade Card conditions and Signature -->
						<div class="p-4">
							<div class="row border border-success" style="padding: 2rem;">
								<div class="col-12">
									<h2>Trade Card Conditions</h2>
								</div>
								<div class="col-6">
									<p class="mb-20">All orders and sales are subject to our standard terms and conditions of sale.</p>
								</div>
								<div class="col-6">
									<button type="button" class="btn btn-info text-center" data-toggle="modal" data-target="#tradeConditions">Read Trade Card Conditions</button>
								</div>
								<div class="col-12">
									<h3>Additional Conditions</h3>
									<ul class="p_conditions">
										<li>The Trade Card is not transferable.</p>
										<li>The Trade Card is the property of Hampshire Tile Warehouse Ltd. and if requested must be returned immediately to us or any other person acting for us.</p>
										<li>The Trade Card is for the use of the authorised users whilst going about the cardholders normal Business.</p>
										<li>Hampshire Tile Warehouse Ltd reserve the right to vary the discount matrix without prior warning to the Trade Card holder.</p>
										<li>Payment for the goods taken is due in full on receipt of the cash sale invoice.</p>
									</ul>	
								</div>
								<div class="col-3">
									<label>Full Name</label>
									<input type="text" class="input-text-required" id="conditions_trade_fullname" placeholder="Full Name" name="conditions_fullname">
								</div>
								<div class="col-3">
									<label>Position</label>
									<input type="text" class="input-text-required" id="position" placeholder="Position" name="position">
								</div>
								<div class="col-4"><img class="img_signature_conditions ml-3" id="img_signature_conditions"></div>
								<div class="col-2">
									<button type="button" class="btn btn-success add_signature_btn" id="signature_trade_conditions_signed" data-toggle="modal" data-target="#signatureModule" data-signature-conditions="trade">Add Signature</button> 
									<input type="hidden" class="conditions_signature" name="conditions_signature" id="conditions_trade_signature" value="">
								</div>
							</div>
						</div>
						<!-- end of Check Trade Card conditions and Signature -->
					</section>
				<!-- end of: Trade Card - Terms and Conditions -->

					<!-- begin of: Credit Account - References -->
					<section class="step_2_references d-none">
							<div id="credit_section_1" class="credit_section_1">
								<div class="row">
									<div class="col-8">
										<h2>Trade References</h2>
									</div>
									<div class="col-4">
										<h2>Company Bank Account</h2>
									</div>
									<div class="col-4">
										<h3>1st Reference</h3>
										
										<label>Full Name</label>
										<input type="text" class="input-text-required" id="first_reference_name" placeholder="Full Name" name="first_reference_name">
											
										<label>Address</label>
										<input type="text" class="input-text-required" id="first_trade_reference_address" placeholder="Address" name="first_reference_address">
										
										<input type="text" class="" id="first_trade_reference_address" placeholder="Line 2" name="first_reference_address_line2">
										
										<label>Town / City</label>
										<input type="text" class="input-text-required" id="first_trade_reference_town" placeholder="Town / City" name="first_reference_town">
										
										<label>County</label>
										<input type="text" class="input-text-required" id="first_trade_reference_county" placeholder="County" name="first_reference_county">
										
										<label>Postcode</label>
										<input type="text" class="input-text-required" id="first_trade_reference_postcode" placeholder="Postcode" name="first_reference_postcode">
										
										<label>Telephone
										<input type="tel" class="input-text-required" id="first_reference_tel" placeholder="Telephone" name="first_reference_tel">
																	
										<label>Email</label>
										<input type="email" class="input-text-required" id="first_reference_email" placeholder="Email" name="first_reference_email">
									</div>
									<div class="col-4">
										<h3>2nd Reference</h3>
										
										<label>Full Name</label>
										<input type="text" class="input-text-required" id="second_reference_name" placeholder="Full Name" name="second_reference_name">
											
										<label>Address</label>
										<input type="text" class="input-text-required" id="second_trade_reference_address" placeholder="Address" name="second_reference_address">
										
										<input type="text" class="" id="second_trade_reference_address" placeholder="Line 2" name="second_reference_address_line2">
										
										<label>Town / City</label>
										<input type="text" class="input-text-required" id="second_trade_reference_town" placeholder="Town / City" name="second_reference_town">
										
										<label>County</label>
										<input type="text" class="input-text-required" id="second_trade_reference_county" placeholder="County" name="second_reference_county">
										
										<label>Postcode</label>
										<input type="text" class="input-text-required" id="second_trade_reference_postcode" placeholder="Postcode" name="second_reference_postcode">
										
										<label>Telephone
										<input type="tel" class="input-text-required" id="second_reference_tel" placeholder="Telephone" name="second_reference_tel">
										
										<label>Email</label>
										<input type="email" class="input-text-required" id="second_reference_email" placeholder="Email" name="second_reference_email">
									</div>
									<div class="col-4">
										<label>Bank Name</label>
										<input type="text" class="input-text-required" id="company_bank" placeholder="Bank Name" name="company_bank">
									
										<label>Account No.</label>
										<input type="text" class="input-text-required" id="company_bank_account" placeholder="Account No." name="company_bank_account">
									
										<label>Sort Code</label>
										<input type="text" class="input-text-required" id="company_bank_sortcode" placeholder="Sort Code" name="company_bank_sortcode">
									</div>
									<div id="cia_type" class="col-12 d-none">
										<p>Have any of the proprietors ever been in a creditors voluntary arrangement?
											No
											<label class="switch">
												<input type="checkbox" class="creditors_voluntary_arrangement" value="" name="creditors_voluntary_arrangement">
												<span class="slider round"></span>
											</label>
											Yes
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- end of: Credit Account - Trade References -->

					<!-- begin of Credit Account - Step 2 for Limited Companies -->
					<section class="step_2_credit_limited d-none">
						<div class="row step2_credit_limited_wraper">
							<div class="credit_limited_company col-6">
								<h2><span class="far fa-building"></span>&nbsp Limited Company</h2>
								
								<label for="registered_name">Registered Company Name</label>
								<input type="text" class="input-text-required" id="registered_name" placeholder="Registered Company Name" name="registered_name">
								
								<label for="registered_number">Registered Company Number</label>
								<input type="text" class="input-text-required" id="registered_number" placeholder="Registered Company Number" name="registered_number">
								
								<label for="principle_trading_address">Principle Trading Address</label>
								<input type="text" class="" id="principle_trading_address" placeholder="Address" name="principle_trading_address">
								
								<input type="text" class="" id="principle_trading_address_line2" placeholder="Line 2" name="principle_trading_address_line2">
								
								<label for="principle_trading_town">Town / City</label>
								<input type="text" class="input-text-required" id="principle_trading_town" placeholder="Town / City" name="principle_trading_town">
								
								<label for="principle_trading_county">County</label>
								<input type="text" class="input-text-required" id="principle_trading_county" placeholder="County" name="principle_trading_county">
								
								<label for="principle_trading_postcode">Postcode</label>
								<input type="text" class="input-text-required" id="principle_trading_postcode" placeholder="Postcode" name="principle_trading_postcode">
							</div>

							<div class="col-6" id="principle-directors">
							<!-- Dynamically include Principle Directors -->
							<h3>Principle Directors details</h3>
							<div id="repeatable_principle_directors_0" class="repeatable">
								<div class="row">
									<div class="col-12">
										<h4>Principle Director 1</h4>
									</div>
									<div class="col-6">
										<label>Full Name</label>
										<input type="text" class="" id="principle_director_fullname_0" placeholder="Full Name" name="principle_director_fullname_0">
									
										<label>Address</label>
										<input type="text" class="" id="principle_director_address_0" placeholder="Address" name="principle_director_address_0">
										<input type="text" class="" id="principle_director_address_0" placeholder="Line 2" name="principle_director_address_line2_0">
										
									</div>
									<div class="col-6">
										<label>Town / City</label>
											<input type="text" class="" id="principle_director_town_0" placeholder="Town / City" name="principle_director_town_0">
		
											<label>County</label>
											<input type="text" class="" id="principle_director_county_0" placeholder="County" name="principle_director_county_0">
											
											<label>Postcode</label>
											<input type="text" class="" id="principle_director_postcode_0" placeholder="Postcode" name="principle_director_postcode_0">
									</div>
								</div>

								<button style="display: none;" class="btn btn-danger btn_remove_credit_directors btn_remove" id="btn_remove_credit_directors_0"><span class="fa fa-times"></span></button>
							</div>
							
							<button type="button" name="add" id="add_principle_directors" class="btn btn-success">Add Principle Director</button>
							
						</div>	
							
							<div class="col-12">
								<div class="radio">
									<p class="">Are the trading premises </p>
									<label class="leased cont">Leased
										<input type="radio" checked="checked" name="trading_premises">
										<span class="checkmark"></span>
									</label>
									<label class="owned cont">Owned
										<input type="radio" name="trading_premises">
										<span class="checkmark"></span>
									</label>
			
									<label class="mt-11">Credit Limit Required</label>
									<div class="input-group-prepend mt-2">
										<span style="margin-bottom: 20px; padding-top: 11px; padding-right: 3px;">&#163;</span>
										<input class="input-text-required premises" type="text" style="padding-left: 5%;padding-bottom: 0;padding-top: 13px; width: 200px;" name="credit_limit_required">
									</div>
								</div>
							</div>
						
						</div>
							

					</section>
					<!-- end of Credit Account - Step 2 for Limited Companies-->

					<!-- begin of Credit Account - Step 2 for Non Limited Companies -->
					<section class="step_2_credit_nonlimited d-none">
						<h2><span class="far fa-building"></span>&nbsp Non Limited Company</h2>
						<!-- Dynamically include Proprietors -->
						<div class="row step2_credit_nonlimited_wraper">
								<!-- dinamically add new proprietor button for credit_account only nonlimited companies -->
								<div class="col-6" id="credit_proprietors">
									<h3>Proprietors</h3>
									<div id="repeatable_credit_proprietor_details_0" class="repeatable">
										<div class="row">
											<div class="col-12">											
												<h4>Proprietor 1</h4>
											</div>
											<div class="col-6">

												<label class="">Title</label>
													<select class="mb-20 mt-11 titleSelect2" name="credit_proprietor_title_0">
														<option value="Mr">Mr</option>
														<option value="Mrs">Mrs</option>
														<option value="Miss">Miss</option>
														<option value="Ms">Ms</option>

													</select>
												<label>Full Name</label>
												<input type="text" class="input-text-required" id="credit_proprietor_fullname_0" placeholder="Full Name" name="credit_proprietor_fullname_0">
												<label>Address</label>
												<input type="text" class="input-text-required" id="credit_proprietor_address_0" placeholder="Address" name="credit_proprietor_address_0">
												<label>Address Line 2</label>
												<input type="text" class="" id="credit_proprietor_line2_address_0" placeholder="Line 2" name="credit_proprietor_line2_address_0">
											</div> 
											<div class="col-6">   
												<label>Town</label>
												<input type="text" class="input-text-required" id="credit_proprietor_town_0" placeholder="Town / City" name="credit_proprietor_town_0">
			
												<label>County</label>
												<input type="text" class="input-text-required" id="credit_proprietor_county_0" placeholder="County" name="credit_proprietor_county_0">
												
												<label>Postcode</label>
												<input type="text" class="input-text-required" id="credit_proprietor_postcode_0" placeholder="Postcode" name="credit_proprietor_postcode_0">
											</div>
											<div class="radio col-12">
												<p>This property is </p>
												
												<label class="mortgage cont">Mortgaged
													<input type="radio" name="property_type_row_0" value="mortgage">
													<span class="checkmark"></span>
												</label>
												
												<label class="owned cont">Owned
													<input type="radio" name="property_type_row_0" value="owned">
													<span class="checkmark"></span>
												</label>
												
												<label class="rented cont">Rented
													<input type="radio" name="property_type_row_0" value="rented">
													<span class="checkmark"></span>
												</label>
												
												<label class="credit_bank_account_0 mt-11 pb-4">Does the proprietor have a bank account?
													No
													<label class="switch" style="margin-top: 0!important;">
													
														<input type="checkbox" class="proprietor_has_bank_account" id="proprietor_has_bank_account_0" value="no" name="proprietor_has_bank_account_0">
														<span class="slider round"></span>
													
													</label>
													Yes
												</label>
											</div>
										</div>
										<button style="display: none;" class="btn btn-danger btn_remove_credit_proprietor btn_remove" id="btn_remove_credit_proprietor_0"><span class="fa fa-times"></span></button>
										
									</div>	  
									<button type="button" id="add_credit_proprietor" class="btn btn-success">Add Proprietor</button>
								</div>  

							<div class="col-6">
								<div class="radio">
									<p class="">Are the trading premises </p>
									<label class="leased cont">Leased
										<input type="radio" checked="checked" name="trading_premises">
										<span class="checkmark"></span>
									</label>
									<label class="owned cont">Owned
										<input type="radio" checked="checked" name="trading_premises">
										<span class="checkmark"></span>
									</label>
			
									<label class="mt-11">Credit Limit Required</label>
									<div class="input-group-prepend mt-2" style="width: 50%;">
										<span style="margin-bottom: 20px; padding-top: 11px; padding-right: 3px;">&#163;</span>
										<input type="text" class="input-text-required" style="padding-left: 5%;padding-bottom: 0;padding-top: 13px;" name="credit_limit_required">
									</div>
								</div>
							</div>
						</div>

					</section>
					<!-- end of Credit Account - Step 2 for Non Limited Companies -->

					<!-- begin of Credit Account - Step 3 -->
					
					<!-- begin of: Credit Account Terms and Conditions -->
					<section class="step_3_credit_conditions d-none">

						<!-- begin of Check Credit Account conditions and Signature -->
						<div class="p-4">
							<div class="row border border-success" style="padding: 2rem;">
								<div class="col-12">
									<h2>Credit Account Conditions</h2>
								</div>
								<div class="col-6">
									<p class="p_conditions">I accept that all orders and sales are subject to the Hampshire Tile Warehouse Ltd Standard Terms and Conditions.</p>
								</div>
								<div class="conditionsButton col-6">
									<button type="button" class="btn btn-info text-center" data-toggle="modal" data-target="#tradeConditions">Read Terms and Conditions</button>
								</div>
								<div class="col-12">
									<p>We may make a search with a credit reference agency which will keep a record of that search and will share that information with other businesses.</p>
								</div>
								
								
								<div class="col-3">
									<label>Full Name</label>
									<input type="text" class="input-text-required" id="conditions_credit_fullname" placeholder="Full Name" name="conditions_fullname">
								</div>
								<div class="col-3">
									<label>Position</label>
									<input type="text" class="input-text-required" id="credit_position" placeholder="Position" name="position">
								</div>
								<div class="col-4"><img class="img_signature_credit_conditions ml-3" id="img_signature_credit_conditions" name="img_signature_credit_conditions"></div>
								<div class="col-2">
									<button type="button" class="btn btn-success add_signature_btn" id="signature_credit_conditions_signed" data-toggle="modal" data-target="#signatureModule" data-signature-conditions="credit_account">Add Signature</button> 
									<input type="hidden" class="conditions_signature" name="conditions_signature" id="conditions_credit_signature" value="">
								</div>
							</div>
						</div>
					</section>
			
					<!-- end of Credit Account - Step 3 -->

					<!-- Modal for Terms & Conditions -->
					<div class="modal fade" id="tradeConditions" tabindex="-1" role="dialog" aria-labelledby="tradeConditions" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-warning" role="document">
							<div class="modal-content">
								<!-- begin of: Header-->
								<div class="modal-header text-center bg-info">
									<h2 class="modal-title text-white w-100 font-weight-bold py-2">Terms and Conditions</h2>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true" class="text-white">&times;</span>
									</button>
								</div>
								<!-- end of: Header-->
			
								<!-- begin of: Body -->
								<div class="modal-body">
									<div class="row" style="font-size:11px;">
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 border-right conditions-column-left">
											<div class="conditions">
												<p class="title">1	Interpretation</p>
												<p class="content">1.1	In these Conditions:
													‘BUYER’ means the person who accepts a quotation of the Seller for the sale 
													of the Goods or whose order for the Goods is accepted by the Seller ‘GOODS’ 
													means the goods (including any instalment of the goods or any parts for them) 
													which the Seller is to supply in accordance with these Conditions ‘SELLER’ 
													means HAMPSHIRE TILE WAREHOUSE LTD (registered in ENGLAND under 
													number 1224335) ‘CONDITIONS’ means the standard terms and conditions of 
													sale set out in this document and (unless the context otherwise requires) 
													includes any special terms and conditions agreed in Writing between the Buyer 
													and the Seller ‘CONTRACT’ means the contract for the purchase and sale of the 
													Goods ‘WRITING’ and any similar expression includes facsimile transmission 
													but not electronic mail or other forms of electronic communication 'FORCE 
													MAJEURE' means any circumstance beyond the reasonable control of the Seller 
													or the Buyer (as the case may be) including but without limitation any Act of God, 
													storm, flood, strike, lockout or industrial action</p>
												<p class="content">1.2	Any reference in these Conditions to any provision of a statute shall be 
													construed as a reference to that provision as amended, re-enacted or extended 
													at the relevant time </p>
												<p class="content">1.3	The headings in these Conditions are for convenience only and shall not affect 
													their interpretation</p>
												<p class="content">1.4	In these Conditions the singular includes the plural and vice versa and any 
													gender includes any other gender</p>
											</div>
			
											<div class="conditions">
												<p class="title">2	Basis of the sale</p>
												<p class="content">2.1	The Seller shall sell and the Buyer shall purchase the Goods in accordance with 
													any written quotation of the Seller which is accepted by the Buyer, or any written 
													order of the Buyer which is accepted by the Seller, subject in either case to these 
													Conditions, which shall govern the Contract to the exclusion of any other terms 
													and conditions subject to which any such quotation is accepted, or purported to 
													be accepted, or any such order is made or purported, by the Buyer</p>
												<p class="content">2.2	No variation to these Conditions shall be binding unless agreed in Writing 
													between the authorised representatives of the Buyer and the Seller</p>
												<p class="content">2.3	The Seller’s employees or agents are not authorised to make any 
													representations concerning the Goods unless confirmed by the Seller in writing 
													and in entering into the Contract the Buyer acknowledges that it does not rely on 
													any such representations which are not so confirmed, but nothing in these 
													Conditions affects the liability of either party for fraudulent misrepresentation</p>
												<p class="content">2.4	Any advice or recommendation given by the Seller or its employees or agents to 
													the Buyer or its employees or agents as to the storage, application or use of the
													Goods which is not confirmed in Writing by the Seller is followed or acted upon 
													entirely at the Buyer’s own risk, and accordingly the Seller shall not be liable for 
													any such advice or recommendation which is not so confirmed</p>
												<p class="content">2.5	Any typographical, clerical or other error or omission in any sales literature, 
													quotation, price list, acceptance of offer, invoice or other document or information 
													issued by the Seller shall be subject to correction without any liability on the part 
													of the Seller</p>
											</div>
			
											<div class="conditions">
												<p class="title">3	Orders and Specifications</p>
												<p class="content">3.1	No order submitted by the Buyer shall be deemed to be accepted by the Seller 
													unless and until confirmed in Writing by the Seller’s authorised representative</p>
												<p class="content">3.2	The Buyer shall be responsible to the Seller for ensuring the accuracy of the 
													terms of any order submitted by the Buyer, and for giving the Seller any 
													necessary information relating to the Goods within a sufficient time to enable the 
													Seller to perform the Contract in accordance with its terms</p>
												<p class="content">3.3	The quantity, quality and description of and any specification for the Goods shall 
													be those set out in the Seller’s quotation (if accepted by the Buyer) or the 
													Buyer’s order (if accepted by the Seller)</p>
												<p class="content">3.4	The Seller reserves the right to make any changes in the specification of the 
													Goods which are required to conform with any applicable statutory or E.U. 
													requirements, or where the goods are to be supplied to the Sellers specification 
													which do not materially affect their quality or performance.</p>
												<p class="content">3.5	No order which has been accepted by the Seller may be cancelled by the Buyer 
													except with the agreement in Writing of the Seller on such terms as the Seller 
													shall specify</p>
												<p class="content">3.6	The Seller discharges their responsibility where quantities of material are 
													estimated by the Seller on the Buyers behalf.  The Seller accept no responsibility 
													for the sufficiency or otherwise of the quantities for the goods ordered and 
													received by the Buyer</p>
											</div>
			
											<div class="conditions">
												<p class="title">4	Price of the Goods</p>
												<p class="content">4.1	The price of the Goods shall be the Seller’s quoted price or, where no price has 
													been quoted (or a quoted price is no longer valid), the price listed in the Seller’s 
													price list current at the date of acceptance of the order. All prices quoted are valid 
													for 90 days only or until earlier acceptance by the Buyer or notification to him of 
													any change and are exclusive of VAT at current rates</p>
												<p class="content">4.2	The Seller reserves the right, by giving notice to the Buyer at any time before 
													delivery, to increase the price of the Goods to reflect any increase in the cost to 
													the Seller which is due to any factor beyond the control of the Seller (such as, 
													without limitation, any foreign exchange fluctuation, significant increase in costs 
													of labour, materials or other costs of manufacture), any change in delivery dates, 
													quantities or specifications for the Goods which is requested by the Buyer, or any 
													delay caused by any instructions of the Buyer, or failure of the Buyer to give the 
													Seller adequate information or instructions</p>
											</div>
			
											<div class="conditions">
												<p class="title">5	Terms of Payment</p>
												<p class="content">5.1	Where the face of the order confirmation shows the words “Cash Sale” then pay
													ment shall be made upon delivery to or collection by the Buyer, and shall be by 
													cash, credit card acceptable to the Seller, or cheque up to £50.00 and supported
													by valid cheque card, in which case the rest of this clause shall not apply</p>
												<p class="content">5.2	In all other cases the rest of this clause shall apply and subject to any special 
													terms agreed in Writing between the Buyer and the Seller, the Seller shall be 
													entitled to invoice the Buyer for the price of the Goods on or at any time after 
													delivery of the Goods, unless the Goods are to be collected by the Buyer or the 
													Buyer wrongfully fails to take delivery of the Goods, in which event the Seller 
													shall be entitled to invoice the Buyer for the price at any time after the Seller has 
													notified the Buyer that the Goods are ready for collection or (as the case may be) 
													the Seller has tendered delivery of the Goods</p>
												<p class="content">5.3	The Buyer shall pay the price of the Goods by the 25th day of the calendar 
													month following the month in which the Seller’s invoice was rendered notwith- 
													standing that delivery may not have taken place and the property in the Goods 
													has not passed to the Buyer. The time of payment of the price shall be of the 
													essence of the Contract. Receipts for payment will be issued only upon request</p>
												<p class="content">5.4	If the Buyer fails to make any payment on the due date then, without prejudice to
													any other right or remedy available to the Seller, the Seller shall be entitled to:</p>
												<p class="content">5.4.1	cancel the contract or suspend any further deliveries to the Buyer;</p>
												<p class="content">5.4.2	appropriate any payment made by the Buyer to such of the Goods (or the goods
													supplied under any other contract between the Buyer and the Seller) as the 
													Seller may think fit (notwithstanding any purported appropriation by the Buyer); 
													and</p>
												<p class="content">5.4.3	charge the Buyer interest (both before and after any judgement) on the amount 
													unpaid, at the rate of 2 per cent per month until payment in full is made (a part of
													a month being treated as a full month for the purpose of calculating interest)</p>
											</div>
			
											<div class="conditions">
												<p class="title">6	Delivery</p>
												<p class="content">6.1	Delivery of the Goods shall be made by the Buyer collecting the Goods at the 
													Seller’s premises at any time after the Seller has notified the Buyer that the 
													Goods are ready for collection or, if some other place for delivery is agreed by
													the Seller, by the Seller delivering the Goods to that place</p>
												<p class="content">6.2	Any dates quoted for delivery of the Goods are approximate only and the Seller 
													shall not be liable for any delay in delivery of the Goods howsoever caused. Time
													for delivery shall not be of the essence unless previously agreed by the Seller in
													writing. The Goods may be delivered by the Seller in advance of the quoted 
													delivery date upon giving reasonable notice to the Buyer</p>
												<p class="content">6.3	Where delivery of the Goods is to be made by the Seller in bulk, the Seller 
													reserves the right to deliver up to 5 per cent more or 5 per cent less than the 
													quantity ordered without any adjustment in the price, and the quantity so 
													delivered shall be deemed to be the quantity ordered</p>
												<p class="content">6.4	Where the Goods are to be delivered in instalments, each delivery shall 
													constitute a separate contract and failure by the Seller to deliver any one or more 
													of the instalments in accordance with these Conditions or any claim by the Buyer 
													in respect of any one or more instalments shall not entitle the Buyer to treat the 
													Contract as a whole as repudiated</p>
												<p class="content">6.5	If the Seller fails to deliver the Goods (or any instalment) for any reason other 
													than any cause beyond the Seller’s reasonable control or the Buyer’s fault, and 
													the Seller is accordingly liable to the Buyer, the Seller’s liability shall be limited to 
													the excess (if any) of the cost to the Buyer (in the cheapest available market) of 
													similar goods to replace those not delivered over the price of the Goods</p>
												<p class="content">6.6	If the Buyer fails to take delivery of the Goods or fails to give the Seller adequate 
													delivery instructions at the time stated for delivery (otherwise than by reason of 
													any cause beyond the Buyer’s reasonable control or by reason of the Seller’s 
													fault) then without prejudice to any other right or remedy available to the Seller 
													the Seller may:</p>
												<p class="content">6.6.1	store the Goods until actual delivery and charge the Buyer for the reasonable 
													costs (including insurance) of storage; or</p>
											</div>   
			
										</div>
			
										<!-- Content Colum Right -->
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 border-right conditions-column-right">
													
											<div class="conditions top-column-conditions">
												<p class="content">6.6.2	sell the Goods at the best price readily obtainable and (after deducting all 
													reasonable storage and selling expenses) account to the Buyer for the excess 
													over the price under the Contract or charge the Buyer for any shortfall below the 
													price under the Contract</p>
												<p class="content">6.7	The Seller may at its discretion accept returns of unused, packaged Goods 
													subject to a handling charge of 25% of the full price. All returns must be made 
													within one month of sale and be in a resaleable condition. The Seller will not 
													accept returns of goods that did not come from the Seller’s stock or of goods 
													returned in part full boxes</p>
												<p class="content">6.8	If the Seller is requested to deliver to a site, delivery will be to the nearest hard 
													road to the site</p>
												<p class="content">6.8.1	If the Buyer requests delivery to a site beyond the nearest hard road, then all 
													risks as to the condition of the Goods on delivery shall be with the Buyer and no
													claim shall be entertained as to the condition of the Goods on delivery</p>
												<p class="content">6.8.2	In the case of delivery to a site or to the nearest hard road to the site, at the 
													request of the Buyer, a signed Delivery Note.  Is conclusive evidence that 
													delivery has been made to the Order of the Buyer and in compliance with the 
													Contract</p>
												<p class="content">6.8.3	Unloading of the delivered Goods shall be the responsibility of the Buyer</p>
												<p class="content">6.8.4	The Buyer shall effect unloading of the Goods with reasonable speed and 
													commencing immediately after delivery of the Goods</p>
											</div>
			
											<div class="conditions">
												<p class="title">7	Risk and Property</p>
												<p class="content">7.1	Risk of damage to or loss of the Goods shall pass to the Buyer:</p>
												<p class="content">7.1.1	In the case of Goods to be delivered at the Seller’s premises, at the time when 
													the Seller notifies the Buyer that the Goods are available for collection; or</p>
												<p class="content">7.1.2	In the case of Goods to be delivered otherwise than at the Seller’s premises, at 
													the time of delivery or, if the Buyer wrongfully fails to take delivery of the Goods, 
													the time when the Seller has tendered delivery of the Goods</p>
												<p class="content">7.2	Notwithstanding delivery and the passing of risk in the Goods, or any other 
													provision of these Conditions, the property in the Goods shall not pass to the 
													Buyer until the Seller has received in cash or cleared funds payment in full of the 
													price of the Goods and all other goods agreed to be sold by the Seller to the 
													Buyer for which payment is then due </p>
												<p class="content">7.3	Until such time as the property in the Goods passes to the Buyer, the Buyer shall 
													hold the Goods as the Seller’s fiduciary agent and bailee, and shall keep the 
													Goods separate from those of the Buyer and third parties and properly stored, 
													protected and insured and identified as the Seller’s property but shall be entitled 
													to resell or use the Goods in the in the ordinary course of its business</p>
												<p class="content">7.4	Until such time as the property in the Goods passes to the Buyer (and provided 
													the Goods are still in existence and have not been resold), the Seller shall be 
													entitled at any time to require the Buyer to deliver up the Goods to the Seller and, 
													if the Buyer fails to do so forthwith, to enter upon any premises of the Buyer or 
													any third party where the Goods are stored and repossess the Goods</p>
												<p class="content">7.5	The Buyer shall not be entitled to pledge or in any way charge by way of security 
													for any indebtedness any of the Goods which remain the property of the Seller, 
													but if the Buyer does so all moneys owing by the Buyer to the Seller shall (without 
													prejudice to any other right or remedy of the Seller) forthwith become due and 
													payable</p>
											</div>
			
											<div class="conditions">
												<p class="title">8	Warranties and Liability</p>
												<p class="content">8.1	The Goods were not manufactured by the Seller and the Buyer accepts that this 
													is the case. Subject as set out below the Buyer shall be entitled to the benefit of 
													any warranty or guarantee given by the manufacturer to the Seller and any liability 
													of the Seller to replace Goods ends at the end of the period of any such warranty 
													or guarantee given by the manufacturer</p>
												<p class="content">8.2	The above warranty is given by the Seller subject to the following conditions:</p>
												<p class="content">8.2.1	No liability is accepted for crazing or discrepancies in colour of tiles and bricks 
													supplied as Goods. The Buyer accepts this may be unavoidable in the production 
													of tiles and bricks</p>
												<p class="content">8.2.2	the Seller shall be under no liability in respect of any defect arising from fair wear 
													and tear, wilful damage, negligence, abnormal working conditions, failure to follow 
													the Seller’s instructions (whether oral or in writing), misuse or alteration or repair 
													of the Goods without the Seller’s approval</p>
												<p class="content">8.2.3	the Seller shall be under no liability under the above warranty (or any other 
													warranty, condition or guarantee) if the total price for the Goods has not been
													paid by the due date for payment</p>
												<p class="content">8.2.4	no claim shall be made by the Buyer in respect of the defective condition or failure 
													to meet specification of any Goods once they have been fixed, or any attempt has 
													been made to so fix them</p>
												<p class="content">8.3	Subject as expressly provided in these Conditions, all warranties, conditions or 
													other terms implied by statute or common law are excluded to the fullest extent 
													permitted by law</p>
												<p class="content">8.4	Any claim by the Buyer which is based on any defect in the quality or condition 
													of the Goods or their failure to correspond with specification shall (whether or not 
													delivery is refused by the Buyer) be notified to the Seller within 7 days from the 
													date of delivery or (where the defect or failure was not apparent on reasonable 
													inspection) within a reasonable time after discovery of the defect or failure. If 
													delivery is not refused, and the Buyer does not notify the Seller accordingly, the 
													Buyer shall not be entitled to reject the Goods and the Seller shall have no liability 
													for such defect or failure, and the Buyer shall be bound to pay the price as if the 
													Goods had been delivered in accordance with the Contract</p>
												<p class="content">8.5	Where any valid claim in respect of any of the Goods which is based on a defect 
													in quality or condition of the Goods or their failure to meet specification is notified 
													to the Seller in accordance with these Conditions, the Seller shall be entitled to 
													replace the Goods (or the part in question) free of charge or, at the Seller’s sole 
													discretion, refund to the Buyer the price of the Goods (or a proportionate of the 
													price), but the Seller shall have no further liability to the Buyer</p>
												<p class="content">8.6	Except in respect of death or personal injury caused by the Seller’s negligence, 
													the Seller shall not be liable to the Buyer by reason of any representation, (unless 
													fraudulent) or any implied warranty, condition or other term, or any duty at 
													common law, or under the express terms of the Contract, for any consequential 
													loss or damage (whether for loss of profit or otherwise), costs, expenses or other 
													claims for consequential compensation whatsoever  (and whether caused by the 
													negligence of the Seller, its employees or agents or otherwise) which arise out of 
													or in connection with the supply of the Goods or their use or resale by the Buyer, 
													and the entire liability of the Seller under or in connection with the Contract shall 
													not exceed the price of the Goods, except as expressly provided in these 
													Conditions</p>
												<p class="content">8.7	The Seller shall not be liable to the Buyer or be deemed to be in breach of the 
													Contract by reason of any delay in performing, or any failure to perform, any of 
													the Seller’s obligations in relation to the Goods, if the delay or failure was due to 
													Force Majeure</p>
												<p class="content">8.8.	If either party is affected by Force Majeure, it shall promptly notify the other of the 
													circumstances in question</p>
											</div>
			
											<div class="conditions">
												<p class="title">9	Insolvency of Buyer</p>
												<p class="content">9.1	This clause applies if:</p>
												<p class="content">9.1.1	the Buyer makes any voluntary arrangement with its creditors or (being an 
													individual or firm) becomes bankrupt, or (being a company) becomes subject to 
													an administration order or goes into liquidation (otherwise than for the purposes 
													of amalgamation or reconstruction); or</p>
												<p class="content">9.1.2	an encumbrancer takes possession, or a receiver is appointed, of any of the 
													property or assets of the Buyer; or</p>
												<p class="content">9.1.3	the Buyer ceases, or threatens to cease, to carry on business; or</p>
												<p class="content">9.1.4	the Seller reasonably apprehends that any of the events mentioned above is 
													about to occur in relation to the Buyer and notifies the Buyer accordingly </p>
												<p class="content">9.2	If this clause applies then, without prejudice to any other right or remedy available 
													to the Seller, the Seller shall be entitled to cancel the Contract or suspend any 
													further deliveries under the Contract without any liability to the Buyer, and if the 
													Goods have been delivered but not paid for the price shall become immediately 
													due and payable notwithstanding any previous agreement or arrangement to the 
													contrary</p>
											</div>
			
											<div class="conditions">
												<p class="title">10	General</p>
												<p class="content">10.1	The Seller Hampshire Tile Warehouse Ltd, and accordingly the Seller may 
													perform any of its obligations or exercise any of its rights under the Contract by 
													itself or through any other member of its group, providing that any act or omission 
													of any such other member shall be deemed to be the act or omission of the Seller</p>
												<p class="content">10.2	Any notice required or permitted to be given by either party to the other under 
													these Conditions shall be in Writing addressed to that other party at its registered 
													office or principal place of business or such other address as may at the relevant 
													time have been notified pursuant to this provision to the party giving the notice</p>
												<p class="content">10.3	No waiver by the Seller of any breach of the Contract by the Buyer shall be 
													considered as a waiver of any subsequent breach of the same or any other 
													provision</p>
												<p class="content">10.4	If any provision of these Conditions is held by any competent authority to be 
													invalid or unenforceable in whole or in part the validity of the other provisions of 
													these Conditions and the remainder of the provision in question shall not be 
													affected thereby</p>
												<p class="content">10.5	The Contract shall be governed by the laws of England</p>
											</div>
										</div>
									</div>
								</div>
								<!-- end of: modal body -->
			
								<!-- begin of: modal footer -->
								<div class="modal-footer col-12 border-warning justify-content-center">
									<button type="button" class="btn btn-outline-info waves-effect font-weight-bold border-footer" data-dismiss="modal">Close</button>
								</div>
								<!-- begin of: modal footer -->
			
							</div>
						</div>
					</div>
					<!-- end of: conditionsButton modal window-->

				<!-- begin of: Modal for Signature Module -->
				<div class="modal fade signatureModule" id="signatureModule" tabindex="-1" role="dialog" aria-labelledby="signatureModule" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-warning" role="document">
							<div class="modal-content">
								<!--Header-->
								<div class="modal-header text-center bg-warning">
									<h2 class="modal-title text-white font-weight-bold">Signature</h2>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true" class="text-white">&times;</span>
									</button>
								</div>
								<div class="modal-body">
											
										<div id="content">
											<div id="signatureparent">
												<div id="signature">
												<span class='fas fa-check d-none fa-bottom-right' id='icon_added' style='font-size:36px'></span>
												</div>
											</div>
											<div id="tools">
												<button  type="button" class="btn btn-secondary" value="Clear" id="btn_clear">Clear</button>
												<!-- <button class="btn btn-success" value="Add" id="btn_add_signature">Add Signature</button> -->
												<button type="button" class="btn btn-success d-none" value="Finish" id="btn_finish">Finish</button>
												<button type="button" class="btn btn-primary d-none" type="button" value="Display Signature" id="btn_displayarea">Display Signature</button>
												<div><input type="text" class="text_form d-none" id="signature_string" name="signature_string"></div>
												<div class="d-none"><p>Display Area:</p><div id="displayarea"></div> 
												<img class="d-none" id='sign_result'>
											</div>
										</div>
								</div>
								<div class="modal-footer col-12 border-warning justify-content-center">
									<button type="button" id="btn_save_signature" class="btn btn-outline-success waves-effect font-weight-bold border-footer btn_save_signature">Save Signature</button>
									<button type="button" class="btn btn-outline-secondary waves-effect font-weight-bold border-footer" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				<!-- end of: for Signature Module -->

				</div>
			</div>

		</form>
		</div>

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div id="step1_next_previous_buttons" class="d-none"> 
							<button type="button" class="btn btn-danger step_0_btn"><span class="fas fa-chevron-left"></span> Previous</button> 
							<button type="button" class="btn btn-success step_2_btn float-right next">Next <span class="fas fa-chevron-right"></span></button> 
						</div>
						<div id="step2_next_previous_buttons" class="d-none"> 
							<button type="button" class="btn btn-danger step_1_btn_revert"> <span class="fas fa-chevron-left"></span> Previous</button> 
							<button  type="button" class="btn btn-success step_3_btn float-right next"> Next <span class="fas fa-chevron-right"></span></button> 
						</div>
						<div id="step3_next_previous_buttons_trade" class="d-none"> 
							<button type="button" class="btn btn-danger step_2_revert_btn"> <span class="fas fa-chevron-left"></span> Previous</button> 
							<button type="button" class="btn btn-success float-right next" id="trade_submit"> Next <span class="fas fa-chevron-right"></span></button> 
						</div>
						<div id="step3_next_previous_buttons_credit" class="d-none"> 
							<button type="button" class="btn btn-danger step_2_revert_btn"> <span class="fas fa-chevron-left"></span> Previous</button> 
							<button type="button" class="btn btn-success step_4_btn float-right next"> Next <span class="fas fa-chevron-right"></span></button> 
						</div>
						<div id="step4_next_previous_buttons" class="d-none"> 
							<button type="button" class="btn btn-danger step_3_revert_btn" > <span class="fas fa-chevron-left"></span> Previous</button> 
							<button type="button" class="btn btn-success float-right next" id="credit_submit"> Next <span class="fas fa-chevron-right"></span></button> 
						</div>
					</div>
				</div>
					
			</div>
		</footer>

		<!-- Popper.js, Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>	

		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
		<script src="jsignature-js-css/libs/subscribe.js"></script>
		<script src="jsignature-js-css/src/jSignature.js"></script>
		<script src="jsignature-js-css/src/plugins/jSignature.CompressorBase30.js"></script>
		<script src="jsignature-js-css/src/plugins/jSignature.CompressorSVG.js"></script>
		<script src="jsignature-js-css/src/plugins/jSignature.UndoButton.js"></script> 
		<script src="jsignature-js-css/src/plugins/signhere/jSignature.SignHere.js"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
		<script src="js/scripts.js"></script><!-- specific scripts made by us -->
		
		<script>
			$(function() {	
				$('#datepicker').val('');
			});
		</script>
	</body>
</html>

