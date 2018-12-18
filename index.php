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
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <!-- Font Awesome 5 Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="jsignature-js-css/css/sign.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>

        <script src="jsignature-js-css/libs/modernizr.js"></script>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="jsignature-js-css/libs/flashcanvas.js"></script>
        <![endif]-->


        <style>
            /* datepicker */
            /* // solution 1: */
            .datepicker {
                font-size: 0.875em;
            }
            /* solution 2: the original datepicker use 20px so replace with the following:*/
            
            .datepicker td, .datepicker th {
                width: 1.5em;
                height: 1.5em;
            }

            .align-cards-front-page{
                padding: 1.23rem!important;
            }
            .conditions{
                margin-bottom: 1.1rem;
            }
            .top-column-conditions{
                margin-top: .75rem;
            }
            .title{
                font-weight: 700;
                margin-bottom: 0;
            }
            .content{
                margin-bottom:0;
                text-align: justify;
            }
            .conditions-column-left, .conditions-column-right{
                padding: 2% 4% 2% 4%;
            }
            .shadow-sm {
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.295)!important;
            }

            /* conditions board */
            
            .title_conditions{
                font-weight: 800;
                width: 100%;
                text-align: center;
                margin-top: 1%;
            }
            .content_conditions{
                margin-left: 1%;
                margin-bottom: 1%;
            }
            .p_conditions{
                margin-bottom: 0;
            }
            input.text_form{
                border: 0;
                outline: 0;
                background: transparent;
                border-bottom: 1px dotted grey;
            }
            [placeholder]:focus::-webkit-input-placeholder{
                transition: opacity 0.5s 0.5s ease; 
                opacity: 0;
            }
            .placeholder-two:focus::-webkit-input-placeholder {
                transition: text-indent 0.5s 0.5s ease; 
                text-indent: -100%;
                opacity: 1;
            }
            /* .company-details{
                width: 90%;
            } */

            /* trade card users */
            .form-check-inline{
                margin-right: 1px!important;
            }

            .img_trade_user_signature{
                max-width: 60%;
                max-height: 60%;
            }
            .fa-bottom-right{
                position: relative;
                float: right;
                margin-top: 25%;
            }
           .currency-symbol{
               max-width: 3%;
           }

            /* trade card terms and conditions signature */

            .img_signature_conditions{
                max-width: 60%;
            }
            
            label{
                margin-top: .5rem;
            }

            .currencyinput {
                border: 1px inset #ccc;
            }
            .currencyinput input {
                border: 0;
            }
            #img_signature_credit_conditions{
                max-width: 80%;
                float: right;
            }

            @media screen and (max-width: 786px) {
                div.currency-symbol{
                    max-width: 10%;
                }
                div.currency-input{
                    max-width: 25%;
                }
                div.premises-sm-screen{
                    display: block!important;
                }
            }
/* ipad */
@media screen and (max-width: 1024px) and (min-width: 768px), (min-width: 1100px) {}


        </style>

    </head>
    <body class="bg-dark">
   
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 bg-light mt-5 p-4 rounded">
                    <form action="validation.php" method="POST" id="form">
                        <!-- ALL INPUT HIDDEN -->
                        <input type="hidden" id="application_type" name="application_type" value="">
                        <input type="hidden" id="company_type" name="company_type" value="">
                        <input type="hidden" id="trade_proprietors_qty" name="trade_proprietors_qty" value="0">
                        <input type="hidden" id="trade_applicants_qty" name="trade_applicants_qty" value="0">
                        <input type="hidden" id="principle_directors_qty" name="principle_directors_qty" value="0">
                        <input type="hidden" id="credit_proprietors_qty" name="credit_proprietors_qty" value="0">
                        <input type="hidden" id="operation" name="operation" value="add">

                        <!-- Choose Form Application Form (cards) -->

                        <section class="step_0">
                            <div class="form-row">

                                <div class="col-sm-12 col-md-6" id="trade_card">
                                    <div class="card border-success mb-4 trade_card">
                                        <div class="card-body text-success">
                                            <h5 class="card-title" style="text-align: center;">Trade Card</h5>
                                            <p class="card-text" style="text-align: center;">Application Form</p>
                                        </div>
                                        <div class="card-footer bg-success border-success text-white" style="text-align: center;">Trade Card</div>
                                    </div>
                                </div>
                                    
                                <div class="col-sm-12 col-md-6" id="credit_account">
                                    <div class="card border-primary mb-4 limited">
                                        <div class="card-body text-primary align-cards-front-page">
                                            <h5 class="card-title" style="text-align: center;">Credit Account</h5>
                                            <p class="card-text" style="text-align: center;">For Limited and Non Limited Companies</p>

                                        </div>
                                        <div class="card-footer bg-primary border-primary text-white" style="text-align: center;">Application Form</div>
                                    </div>
                                </div>

                            </div>
                    
                        </section>

                        


                        
                        <!-- begin of: Common data for all applications -->
                        <section class="step_1 d-none">

                            <div class="form-row company-details">
       
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">Full Trading Name of Business</label>
                                </div>

                                <div class="form-group col-md-7">
                                    <input type="text" class="form-control text_form" id="company_name" placeholder="Full Trading Name of Business" name="company_name">
                                </div>

                            </div>

                            <div class="form-row">
                                
                                <div class="form-group col-md-1">
                                    <label class="font-weight-bold">Address</label>
                                </div>
                                
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control placeholder-two text_form" id="company_address" placeholder="1234 Main St" name="company_address">
                                </div>

                                <div class="form-group col-md-1">
                                    <label class="font-weight-bold">Postcode</label>
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control placeholder-two text_form" id="company_postcode" name="company_postcode">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="font-weight-bold">Correspondence Name:</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="correspondence_title" value="Mr">Mr
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="correspondence_title" value="Mrs">Mrs
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="correspondence_title" value="Miss">Miss
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-1">
                                    <label class="font-weight-bold">First name</label>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control text_form" id="correspondence_firstname" placeholder="First Name" name="correspondence_firstname">
                                </div>
                                <div class="form-group col-md-1">
                                    <label class="font-weight-bold">Surname</label>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control text_form" id="correspondenc_surname" placeholder="Surname" name="correspondence_surname">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label class="font-weight-bold">Telephone</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="tel" class="form-control text_form" id="company_telephone" placeholder="Telephone No" name="company_telephone">
                                </div>
                                <div class="form-group col-md-1">
                                    <label  class="font-weight-bold">Mobile</label>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="tel" class="form-control placeholder-two text_form" id="company_mobile" placeholder="Mobile Telephone No" name="company_mobile">
                                </div>
                                <div class="form-group col-md-1">
                                    <label class="font-weight-bold">Email</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="email" class="form-control text_form" id="company_email" placeholder="Email" name="company_email">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-check">
                                    <input class="form-check-input text_form" type="checkbox" id="email_list" name="email_list" value="no"/>
                                    <label class="form-check-label" for="gridCheck">
                                        Do you want to receive our electronic ceramics price list? 
                                    </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row" id="business_nature">
                                <div class="form-group col-md-2">
                                    <label class="font-weight-bold">Nature of Business</label>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control text_form" id="company_business_nature" placeholder="Nature of Business" name="company_business_nature">
                                </div>
                                <div class="form-group col-md-3 d-none" id="start_date">
                                    <label class="font-weight-bold">When was the business started:</label>
                                </div>
                              
                                <div class="form-group col-md-2">
                                    <div class="col">
                                        <input data-date-format="yyyy/mm/dd" id="datepicker" name="start_date">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </div>
                                </div>
                            </div> 

                            <div class="form-group col-md-12 mt-4 pl-0">
                                <p>Is your Business a Limited company?
                                    No
                                    <label class="switch">
                                    
                                        <input type="checkbox" class="check_limited" value="" name="company_type">
                                        <span class="slider round"></span>
                                    
                                    </label>
                                    Yes
                                </p>
                            </div>

                            <div id="step1_next_previous_buttons" class="form-group mp-4 d-none"> 
                                <a href="#" class="btn btn-danger" id="step_0_btn"> <span class="fas fa-chevron-left"></span> Previous</a> 
                                <a href="#" class="btn btn-success" id="step_2_btn"> Next <span class="fas fa-chevron-right"></span></a> 
                            </div>
                        </section>
                        <!-- end of: Common data for all applications -->

                        <!-- begin of: Trade Card only - Non Limited Companies -->
                        <section class="step_2_nonlimited d-none">
                            <div id="trade_section_1" class="trade_section_1">
                                <h4><span class="far fa-building"></span>&nbsp Non Limited Company</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label>Fullname</label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control text_form" id="trade_proprietor_fullname_0" placeholder="Fullname of Proprietor" name="trade_proprietor_fullname_0">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label>Address</label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control text_form" id="trade_proprietor_address_0" placeholder="Proprietor Address" name="trade_proprietor_address_0">
                                    </div>
                                </div>   
                            </div>   
                            <button type="button" id="add_trade_proprietor" class="btn btn-success">Add More</button>
                        </section>
                        <!-- end of: Trade Card only - Non Limited Companies -->




                        <!-- begin of: Trade Card only - Limited Companies -->
                        <section class="step_2_limited d-none">
                            <h4><span class="far fa-building"></span>&nbsp Limited Company</h4>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="registered_name">Registered Name</label>
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="text" class="form-control text_form" id="registered_name" placeholder="Registered name" name="registered_name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="registered_office">Registered Office</label>
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="text" class="form-control text_form" id="registered_office" placeholder="" name="registered_office">
                                </div>
                            </div>
                        </section>
                        <!-- end of: Trade Card only - Limited Companies -->


                        <!-- begin of: Trade Card only - Users Signatures any type of Companies -->
                        <section class="step_2_users_sign d-none">
                            <div class="form-group col-md-12 mt-4 pl-0" id="signature_box">
                                <h4 class="col-md-12" style="padding-left: 0 !important;"><span class="fas fa-pencil-alt"></span>&nbspTo be completed by all aplicants</h4>
                                <p>Names of authorised TRADE CARD users</p>

                                <div id="trading">
                                    <div class="form-row trade_users_0">
                                        <div class="form-group col-md-2">
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="trade_user_title_0" value="Mr">Mr
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="trade_user_title_0" value="Mrs">Mrs
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="trade_user_title_0" value="Miss">Miss
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control text_form" id="trade_user_fullname" placeholder="User Full Name" name="trade_user_fullname_0">
                                        </div>

                                        <!-- signature module -->
                                        <div class="form-group col-md-2">
                                            <button type="button" class="btn btn-info add_signature_btn" id="add_signature_btn_0" data-toggle="modal" data-target="#signatureModule" data-signature-index="0" data-signature-conditions="applicants">Add Signature</button>
                                            <button type="button" class="btn btn-info change_signature_btn d-none" id="change_signature_btn_0" data-toggle="modal" data-target="#signatureModule" data-signature-index="'0'" data-signature-conditions="applicants">Change Signature</button>
                                            <input type="hidden" name="trade_user_sign_0" id="trade_user_sign_id_0" value="">
                                        </div>
                                        
                                        <div class="form-group col-md-2">
                                            <img class="img_trade_user_signature" id="img_signature_0"><!-- signature image -->
                                        </div>
                                    </div>
                                </div>
                                <!-- dinamically add new trade_user button -->
                                <button type="button" id="add_trade_users" class="btn btn-success">Add More</button>

                                <div class="form-row">
                                    <div class="border border-light form-group col-md-12 mt-3  mb-0 bg-light pl-0" id="conditions_note">
                                        <h4>All applicants must sign trade card conditions</h4>
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="trade_doc_info col-8 d-none">
                                        <span class="fas fa-file-alt" style="padding-right: 5px;color:green;"></span>Please provide a sheet of company headed paper, order form or business card.
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div id="step2_next_previous_buttons" class="form-group mp-4"> 
                                        <button type="button" class="btn btn-danger step_1_btn" id=""> <span class="fas fa-chevron-left"></span> Previous</button> 
                                        <button  type="button" class="btn btn-success step_3_btn" id=""> Next <span class="fas fa-chevron-right"></span></button> 
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- end of: Trade Card only - Non Limited Companies -->

                        <!-- begin of: Trade Card - Terms and Conditions -->
                        <section class="step_3_trade_conditions d-none">
                            <div class="conditionsButton mt-3 ml-2">
                                <button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#tradeConditions">
                                    <span class="fa fa-check"></span> Read Terms and Conditions
                                </button>
                            </div>

                            <!-- begin of Check Trade Card conditions and Signature -->
                            <div class="p-4">
                                <div class="row border border-success" style="padding: 2rem;">
                                    <div class="title_conditions text-uppercase">Trade Card Conditions
                                    </div>
                                    <div class="content_conditions">
                                        <p class="p_conditions">All orders and sales are subject to our standard terms and conditions of sale as attached.</p>
                                    </div>
                                    <div class="title_conditions text-uppercase">Additional Conditions
                                    </div>
                                    <div class="content_conditions">
                                        <p class="p_conditions">The Trade Card is not transferable.</p>
                                        <p class="p_conditions">The Trade Card is the property of Hampshire Tile Warehouse Ltd. and if requested must be returned immediately to us or any other person acting for us.</p>
                                        <p class="p_conditions">The Trade Card is for the use of the authorised users whilst going about the cardholders normal Business.</p>
                                        <p class="p_conditions">Hampshire Tile Warehouse Ltd reserve the right to vary the discount matrix without prior warning to the Trade Card holder.</p>
                                        <p class="p_conditions">Payment for the goods taken is due in full on receipt of the cash sale invoice.</p>

                                        <div class="form-row mt-3">
                                            <div class="form-group col-md-1">
                                                <p class="font-weight-bold">Signature</p>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control text_form" id="conditions_fullname" placeholder="Full Name" name="conditions_fullname">
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label class="font-weight-bold">Position</label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control text_form" id="position" placeholder="Position" name="position">
                                            </div>

                                            <div class="form-group col-md-1">
                                                <button type="button" class="btn btn-success add_signature_btn" id="signature_conditions_signed" data-toggle="modal" data-target="#signatureModule" data-signature-conditions="trade">Sign here</button> 
                                                <input type="hidden" class="conditions_signature" name="conditions_signature" id="conditions_signature" value="">
                                            </div>

                                            <!-- begin of signature image -->
                                            <div class="form-group col-md-2">
                                                <img class="img_signature_conditions ml-3" id="img_signature_conditions">
                                            </div>
                                            <!-- end of signature image -->

                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <div class="form-row ml-2">
                                <div id="step3_next_previous_buttons" class="form-group mp-4"> 
                                    <button type="button" class="btn btn-danger step_2_revert_btn" id=""> <span class="fas fa-chevron-left"></span> Previous</a> 
                                    <button type="submit" class="btn btn-success step_4_btn" id=""> Next <span class="fas fa-chevron-right"></span></button> 
                                </div>
                            </div>
                            <!-- end of Check Trade Card conditions and Signature -->
                        </section>
                    <!-- end of: Trade Card - Terms and Conditions -->




                    <!-- begin of Credit Account only -->


                        <!-- begin of: Credit Account - References -->
                        <section class="step_2_references d-none">
                            <div id="credit_section_1" class="credit_section_1">
                                <h4 class="col-md-12" style="padding-left: 0 !important;">Trade References</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label>Name</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control text_form" id="first_reference_name" placeholder="Full Name of First Reference" name="first_reference_name">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label>Name</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control text_form" id="second_reference_name" placeholder="Full Name of Second Reference" name="second_reference_name">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label>Address</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="text" class="form-control text_form" id="first_reference_address" placeholder="First Reference Address" name="first_reference_address">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label>Address</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="text" class="form-control text_form" id="second_reference_address" placeholder="Second Reference Address" name="second_reference_address">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label>Telephone
                                    <div class="form-group col-md-5">
                                        <input type="tel" class="form-control text_form" id="first_reference_tel" placeholder="First Reference Telephone" name="first_reference_tel">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label>Telephone</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="tel" class="form-control text_form" id="second_reference_tel" placeholder="Second Reference Telephone" name="second_reference_tel">
                                    </div>
                                </div>                                
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label>Mobile</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="tel" class="form-control text_form" id="first_reference_address" placeholder="First Reference Address" name="first_reference_mobile">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label>Mobile</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="tel" class="form-control text_form" id="second_reference_address" placeholder="Second Reference Address" name="second_reference_mobile">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <h4 class="col-md-12" style="padding-left: 0 !important;">Company Bank Account</h4>
                                        <div class="form-group col-md-1">
                                            <label>Bank</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control text_form" id="first_reference_name" placeholder="Full Name of First Reference" name="company_bank">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label>Account No</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control text_form" id="first_reference_name" placeholder="Full Name of First Reference" name="company_bank_account">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label>Sort Code</label>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <input type="text" class="form-control text_form" id="first_reference_name" placeholder="Full Name of First Reference" name="company_bank_sortcode">
                                        </div>
                                </div>
                                <div class="form-row">
                                    <div id="cia_type" class="form-group col-md-12 mt-4 pl-0 d-none">
                                        <p>Are any of the proprietors or have they ever been in a creditors voluntary arrangement?
                                            No
                                            <label class="switch">
                                                <input type="checkbox" class="creditors_voluntary_arrangement" value="yes" name="creditors_voluntary_arrangement">
                                                <span class="slider round"></span>
                                            </label>
                                            Yes
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- end of: Credit Account - Trade References -->

                        <!-- begin of Credit Account - Step 2 for Limited Companies -->
                        <section class="step_2_credit_limited d-none">
                            <h4><span class="far fa-building"></span>&nbsp Limited Company</h4>
                            <div class="form-row mt-4">
                                <div class="form-group col-md-2">
                                    <label for="registered_name">Registered Name</label>
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="text" class="form-control text_form" id="registered_name" placeholder="Registered name" name="registered_name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="registered_office">Registered Office</label>
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="text" class="form-control text_form" id="registered_office" placeholder="" name="registered_office">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="registered_name">Registered Number</label>
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="text" class="form-control text_form" id="registered_number" placeholder="Registered Number" name="registered_number">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="registered_office">Principle Trading Address</label>
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control text_form" id="principle_trading_address" placeholder="" name="principle_trading_address">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="registered_office">Postcode</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control text_form" id="principle_trading_postcode" placeholder="" name="principle_trading_postcode">
                                </div>
                            </div>

                            <!-- Dynamically include Principle Directors -->
                            <div class="form-row">
                                <h5>Principle Directors details</h5>
                                <input type="hidden" id="i" name="i" value="0">
                            </div>
                            <div id="principle-directors">
                                <div class="form-row" id="principal_directors_0">
                                    <div class="form-group col-md-2">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="principle_director_title_0" value="Mr">Mr
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="principle_director_title_0" value="Mrs">Mrs
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="principle_director_title_0" value="Miss">Miss
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control text_form" id="principle_director_fullname_0" placeholder="Principle Director Fullname" name="principle_director_fullname_0">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="registered_name">Address</label>
                                    </div>
                                        

                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control text_form" id="principle_director_address_0" placeholder="Principle Director Address" name="principle_director_address_0">
                                    </div>

                                    <!-- begin of Dinamically add new principle_director button -->
                                    <div class="form-group col-1">
                                        <button type="button" name="add" id="add_principle_directors" class="btn btn-success">Add More</button>
                                    </div>
                                    <!-- end of Dinamically add new trade_user button -->
                                </div>
                            </div>
                            <div class="d-flex flex-row premises-sm-screen">
                                
                                <div class="mt-2 mr-2">Are the trading premises </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="trading_premises" value="leased">Leased 
                                </div>
                                <div class="p-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="trading_premises" value="owned">Owned 
                                </div> 
                                <div class="p-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="trading_premises" value="none">Non applicable 
                                </div> 
                               

                            </div>

                            <div class="form-row">
                                <div class="col-md-2">
                                    <label>Credit Limit Required</label>
                                </div>
                                <div class="col-md-1 currency-symbol">
                                    <label class="">&#163; &nbsp;</label>
                                </div>
                                <div class="col-md-1 currency-input">
                                    <input class="text_form" type="text" name="credit_limit_required">
                                </div>
                            </div>

                            <div class="form-row">
                                    <div id="step2_next_previous_buttons" class="form-group mp-4"> 
                                        <button type="button" class="btn btn-danger step_1_btn" id=""> <span class="fas fa-chevron-left"></span> Previous</button> 
                                        <button type="button" class="btn btn-success step_3_btn" id=""> Next <span class="fas fa-chevron-right"></span></button> 
                                    </div>
                                </div>
                        </section>
                        <!-- end of Credit Account - Step 2 for Limited Companies-->



                        <!-- begin of Credit Account - Step 2 for Non Limited Companies -->
                        <section class="step_2_credit_nonlimited d-none">
                            <h4><span class="far fa-building"></span>&nbsp Non Limited Company</h4>
                            
                            <!-- Dynamically include Proprietors -->
                            <div id="proprietors">
                                <div class="form-row proprietor-details-0"><p class="font-weight-bold">Proprietor details:</p></div>
                                <div class="form-row" id="proprietor_0">
                                    <div class="form-group col-md-2">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="credit_proprietor_title_0" value="Mr">Mr
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="credit_proprietor_title_0" value="Mrs">Mrs
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="credit_proprietor_title_0" value="Miss">Miss
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control text_form" id="credit_proprietor_fullname_0" placeholder="Proprietor Fullname" name="credit_proprietor_fullname_0">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="registered_name">Address</label>
                                    </div>
                                        

                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control text_form" id="credit_proprietor_address_0" placeholder="Proprietor Address" name="credit_proprietor_address_0">
                                    </div>
                                    <div class="col-md-2"></div>

                                    <div class="col-md-2" style="max-width: 34%;">
                                    <p style="margin-bottom: 0!important;">Is this property: </p>
                                    </div>
                                    <div class="col-md-4" style="max-width: 30%;">
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" name="property_type_row_0" value="mortgaged">Mortgaged 
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" name="property_type_row_0" value="owned">Owned 
                                        </div> 
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" name="property_type_row_0" value="rented">Rented 
                                        </div> 
                                    </div>
                                    <div class="col-md-5">
                                        <p style="margin-bottom: 0!important;">Does the proprietor have a bank account?
                                            No
                                            <label class="switch" style="margin-top: 0!important;">
                                            
                                                <input type="checkbox" class="proprietor_has_bank_account" data-identification="proprietor_has_bank_account_0"  id="0" value="yes" name="proprietor_has_bank_account_0">
                                                <span class="slider round"></span>
                                            
                                            </label>
                                            Yes
                                        </p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                            </div>
                            
                            <!-- begin of Dinamically add new proprietor button  Credit Account, Non Limited Companies -->
                            <div>
                                <button type="button" id="add_credit_proprietor" class="btn btn-success">Add More</button>
                            </div>
                            <!-- end of Dinamically add new proprietor button  Credit Account, Non Limited Companies -->

                            <div class="d-flex flex-row mt-3 premises-sm-screen">
                                
                                <div class="mt-2 mr-2">Are the trading premises </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="trading_premises" value="leased">Leased 
                                </div>
                                <div class="p-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="trading_premises" value="owned">Owned 
                                </div> 
                                <div class="p-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="trading_premises" value="none">Non applicable 
                                </div> 
                               

                            </div>

                            <div class="form-row">
                                <div class="col-md-2">
                                    <label>Credit Limit Required</label>
                                </div>
                                <div class="col-md-1 currency-symbol">
                                    <label class="">&#163; &nbsp;</label>
                                </div>
                                <div class="col-md-1 currency-input">
                                    <input class="text_form" type="text" name="currency">
                                </div>
                            </div>

                            <div class="form-row">
                                    <div id="step2_next_previous_buttons" class="form-group mp-4"> 
                                        <button type="button" class="btn btn-danger step_1_btn" id=""> <span class="fas fa-chevron-left"></span> Previous</button> 
                                        <button type="button" class="btn btn-success step_3_btn" id=""> Next <span class="fas fa-chevron-right"></span></button> 
                                    </div>
                                </div>
                        </section>
                        <!-- end of Credit Account - Step 2 for Non Limited Companies -->



                        <!-- begin of Credit Account - Step 3 -->
                        
                        <!-- begin of: Credit Account Terms and Conditions -->
                        <section class="step_3_credit_conditions d-none">
                            <div class="conditionsButton mt-3 ml-2">
                                <button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#tradeConditions">
                                    <span class="fa fa-check"></span> Read Terms and Conditions
                                </button>
                            </div>

                            <!-- begin of Check Credit Account conditions and Signature -->
                            <div class="p-4">
                                <div class="row border border-success" style="padding: 2rem;">
                                    <div class="title_conditions text-uppercase">Credit Account Conditions
                                    </div>
                                    <div class="content_conditions">
                                        <p class="p_conditions">I accept that all orders and sales are subject to the Hampshire Tile Warehouse Ltd Standard Terms and Conditions.</p>
                                        <p class="p_conditions">We may make a search with a credit reference agency which will keep a record of that search and will share that information with other businesses.</p>
                                        <div class="form-row mt-3">
                                            <div class="form-group col-md-1">
                                                <p class="font-weight-bold">Signature</p>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control text_form" id="conditions_fullname" placeholder="Full Name" name="conditions_fullname">
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label class="font-weight-bold">Position</label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control text_form" id="position" placeholder="Position" name="position">
                                            </div>

                                            <div class="form-group col-md-1">
                                                <button type="button" class="btn btn-success add_signature_btn" id="signature_conditions_signed" data-toggle="modal" data-target="#signatureModule" data-signature-conditions="credit_account">Sign here</button> 
                                                <input type="hidden" class="conditions_signature" name="conditions_signature" id="conditions_signature" value="">
                                            </div>

                                            <!-- begin of signature image -->
                                            <div class="form-group col-md-2">
                                                <img class="img_signature_credit_conditions ml-3" id="img_signature_credit_conditions" name="img_signature_credit_conditions">
                                            </div>
                                            <!-- end of signature image -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row ml-2">
                                <div id="step3_next_previous_buttons" class="form-group mp-4"> 
                                    <button type="button" class="btn btn-danger step_2_revert_btn" id=""> <span class="fas fa-chevron-left"></span> Previous</button> 
                                    <button type="submit" class="btn btn-success step_4_btn" id=""> Next <span class="fas fa-chevron-right"></span></button> 
                                </div>
                            </div>
                            <!-- end of Check Credit Account conditions and Signature -->
                        </section>
                        <!-- end of: Terms and Conditions -->

                        <!-- end of Credit Account - Step 3 -->


                    <!-- end of Credit Account only	-->
 


                        <!-- begin of: submitButton -->
                        <div class="form-group submitButton mt-4 d-none">
                            <button type="button" class="btn btn-danger step_3_revert_btn" id=""> <span class="fas fa-chevron-left"></span> Previous</button> 
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <!-- end of: submitButton -->




                            <!-- Modal for Terms & Conditions -->
                            <div class="modal fade" id="tradeConditions" tabindex="-1" role="dialog" aria-labelledby="tradeConditions" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-warning" role="document">
                                    <div class="modal-content">
                                        <!-- begin of: Header-->
                                        <div class="modal-header text-center bg-warning">
                                            <h4 class="modal-title text-white w-100 font-weight-bold py-2">Terms and Conditions</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="text-white">&times;</span>
                                            </button>
                                        </div>
                                        <!-- end of: Header-->

                                        <!-- begin of: Body -->
                                        <div class="modal-body">
                                            <div class="row" style="font-size:xx-small;">
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
                                                            but not electronic mail or other forms of electronic communication ‘FORCE 
                                                            MAJEURE’ means any circumstance beyond the reasonable control of the Seller 
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
                                            <button type="button" class="btn btn-outline-warning waves-effect font-weight-bold border-footer" data-dismiss="modal">Close</button>
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
                                            <h4 class="modal-title text-white font-weight-bold">Signature</h4>
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
                    </form>

                </div>
            </div>
        </div>
   
        <!-- Popper.js, Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>    





<!-- bof signature scripts -->




<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="jsignature-js-css/libs/subscribe.js"></script>
<script src="jsignature-js-css/src/jSignature.js"></script>
<script src="jsignature-js-css/src/plugins/jSignature.CompressorBase30.js"></script>
<script src="jsignature-js-css/src/plugins/jSignature.CompressorSVG.js"></script>
<script src="jsignature-js-css/src/plugins/jSignature.UndoButton.js"></script> 
<script src="jsignature-js-css/src/plugins/signhere/jSignature.SignHere.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

<script>

    $(document).ready( function() {
        
        var $sigdiv = "";
        var sign_index = "";
        trade_conditions = "";
//email list
$(function() {
    $('#email_list').click(function() {
        if($(this).is(":checked")){
            $(this).val("yes");
        } else {
            $(this).val("no");

        }
    });
});
        // dynamically adding new div for trade_card user
        var i=0;
        $('#add_trade_users').click(function(){
            i++;
            $('#trading').append('<div class="form-row trade_users" id="trade_users_'+i+'">\
                                        <div class="form-group col-md-2">\
                                            <div class="form-check-inline"><label class="form-check-label">\
                                            <input type="radio" class="form-check-input" name="trade_user_title_'+i+'" value="Mr">Mr\
                                            </label>\
                                            </div>\
                                            <div class="form-check-inline">\
                                            <label class="form-check-label">\
                                            <input type="radio" class="form-check-input" name="trade_user_title_'+i+'" value="Mrs">Mrs\
                                            </label>\
                                            </div>\
                                            <div class="form-check-inline">\
                                            <label class="form-check-label">\
                                            <input type="radio" class="form-check-input" name="trade_user_title_'+i+'" value="Miss">Miss\
                                            </label>\
                                            </div>\
                                        </div>\
                                        <div class="form-group col-md-4">\
                                            <input type="text" class="form-control text_form" id="trade_user_fullname_'+i+'" placeholder="User Full Name" name="trade_user_fullname_'+i+'">\
                                        </div>\
                                        <!-- MODAL FOR SIGNATURE MODULE -->\
                                        <div class="form-group col-md-2">\
                                            <button type="button" class="btn btn-info add_signature_btn" id="add_signature_btn_'+i+'" name="signature_btn_'+i+'"" data-toggle="modal" data-target="#signatureModule" data-signature-index="'+i+'" data-signature-conditions="applicants">Add Signature</button>\
                                            <button type="button" class="btn btn-info change_signature_btn d-none" id="change_signature_btn_'+i+'" data-toggle="modal" data-target="#signatureModule" data-signature-index="'+i+'" data-signature-conditions="applicants">Change Signature</button>\
                                            <input type="hidden" name="trade_user_sign_'+i+'" id="trade_user_sign_id_'+i+'" value="">\
                                        </div>\
                                        <!-- END MODAL FOR SIGNATURE MODULE -->\
                                        <!-- begin of signature image -->\
                                            <div class="form-group col-md-2">\
                                                <img class="img_trade_user_signature" id="img_signature_'+i+'">\
                                            </div>\
                                        <!-- end of signature image -->\
                                        <!-- bof Dinamically add new "remove" trade_user button -->\
                                        <div class="form-group col-md-1">\
                                            <button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove ">X</button>\
                                        </div>\
                                        <!-- bof Dinamically add new trade_user button -->\
                                    </div>');
            $('#i').val(i);
            $('#trade_applicants_qty').val(i);
        });
        // trade_users remove button 
        $(document).on('click', '.btn_trade_users_remove', function(){
            var button_id = $(this).attr("id"); 
            $('#trade_users_'+button_id+'').remove();
        });

        var j=0;
        $('#add_principle_directors').click(function(){
            j++;
            $('#principle-directors').append('<div class="form-row" id="principle_directors_'+j+'">\
                                <div class="form-group col-md-2">\
                                    <div class="form-check-inline">\
                                        <label class="form-check-label">\
                                            <input type="radio" class="form-check-input" name="principle_director_title_'+j+'" value="Mr">Mr\
                                        </label>\
                                    </div>\
                                    <div class="form-check-inline">\
                                        <label class="form-check-label">\
                                        <input type="radio" class="form-check-input" name="principle_director_title_'+j+'" value="Mrs">Mrs\
                                        </label>\
                                    </div>\
                                    <div class="form-check-inline">\
                                        <label class="form-check-label">\
                                        <input type="radio" class="form-check-input" name="principle_director_title_'+j+'" value="Miss">Miss\
                                        </label>\
                                    </div>\
                                </div>\
                                <div class="form-group col-md-4">\
                                    <input type="text" class="form-control text_form" id="principle_director_fullname_'+j+'" placeholder="Principle Director Fullname" name="principle_director_fullname_'+j+'">\
                                </div>\
                                <div class="form-group col-md-1">\
                                    <label for="registered_name">Address</label>\
                                </div>\
                                <div class="form-group col-md-2">\
                                    <input type="text" class="form-control text_form" id="principle_director_address_'+j+'" placeholder="Principle Director Fullname" name="principle_director_address_'+j+'">\
                                </div>\
                                <!-- Dinamically add new "remove" principle_directors_remove button -->\
                                <div class="form-group col-md-1">\
                                    <button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_principle_directors_remove ">X</button>\
                                </div>');
                $('#j').val(j);
                $('#principle_directors_qty').val(j);
                
        });

        // principle-directors remove button 
        $(document).on('click', '.btn_principle_directors_remove', function(){
            var button_id = $(this).attr("id"); 
            $('#principle_directors_'+button_id).remove();
        });
        
//dynamically adding new proprietor to trade nonlimited
trade_section_1
var w=0;
        $('#add_trade_proprietor').click(function(){
            w++;
            $('#trade_section_1').append('<div class="form-row trade-proprietor-wrap-'+w+'">\
                                            <div class="form-group col-md-1">\
                                                <label>Fullname</label>\
                                            </div>\
                                            <div class="form-group col-md-4">\
                                                <input type="text" class="form-control text_form" id="trade_proprietor_fullname_'+w+'" placeholder="Fullname of Proprietor" name="trade_proprietor_fullname_'+w+'">\
                                            </div>\
                                            <div class="form-group col-md-1">\
                                                <label>Address</label>\
                                            </div>\
                                            <div class="form-group col-md-4">\
                                                <input type="text" class="form-control text_form" id="trade_proprietor_address_'+w+'" placeholder="Proprietor Address" name="trade_proprietor_address_'+w+'">\
                                            </div>\
                                            <!-- Dinamically add new "remove" trade proprietor_remove button -->\
                                            <div class="col-md-2">\
                                                <button type="button" name="remove" id="'+w+'" class="btn btn-danger btn_trade_proprietor_remove ">X</button>\
                                            </div>\
                                        </div>');
            $('#trade_proprietors_qty').val(w);
            });
        // trade proprietor remove button 
        $(document).on('click', '.btn_trade_proprietor_remove', function(){
            var button_id = $(this).attr("id"); 
            $('.trade-proprietor-wrap-'+button_id+'').remove();
            // $('#proprietor_'+button_id+'').remove();
        });

        // dynamically adding new proprietor to credit_account
        var k=0;
        $('#add_credit_proprietor').click(function(){
            k++;
            $('#proprietors').append('<div class="form-row credit-proprietor-wrap-'+k+'">\
                                        <!-- Dinamically add new "remove" credit proprietor_remove button -->\
                                        <div>\
                                            <button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_credit_proprietor_remove ">X</button>\
                                        </div>\
                                    <div class="ml-3 mt-2 proprietor-details-'+k+'"><p class="font-weight-bold">Proprietor details:</p></div>\
                                    </div>\
                                    <div class="form-row" id="proprietor_'+k+'">\
                                        <div class="form-group col-md-2">\
                                            <div class="form-check-inline">\
                                                <label class="form-check-label">\
                                                    <input type="radio" class="form-check-input" name="credit_proprietor_title_'+k+'" value="Mr">Mr\
                                                </label>\
                                            </div>\
                                            <div class="form-check-inline">\
                                                <label class="form-check-label">\
                                                <input type="radio" class="form-check-input" name="credit_proprietor_title_'+k+'" value="Mrs">Mrs\
                                                </label>\
                                            </div>\
                                            <div class="form-check-inline">\
                                                <label class="form-check-label">\
                                                <input type="radio" class="form-check-input" name="credit_proprietor_title_'+k+'" value="Miss">Miss\
                                                </label>\
                                            </div>\
                                        </div>\
                                        <div class="form-group col-md-3">\
                                            <input type="text" class="form-control text_form" id="credit_proprietor_fullname_'+k+'" placeholder="Proprietor Fullname" name="credit_proprietor_fullname_'+k+'">\
                                        </div>\
                                        <div class="form-group col-md-1">\
                                            <label for="registered_name">Address</label>\
                                        </div>\
                                        <div class="form-group col-md-4">\
                                            <input type="text" class="form-control text_form" id="credit_proprietor_address_'+k+'" placeholder="Proprietor Address" name="credit_proprietor_address_'+k+'">\
                                        </div>\
                                        <div class="col-md-2"></div>\
                                        <div class="col-md-2" style="max-width: 34%;">\
                                            <p style="margin-bottom: 0!important;">Is this property: </p>\
                                        </div>\
                                        <div class="col-md-4" style="max-width: 30%;">\
                                            <div class="form-check-inline">\
                                                <input type="radio" class="form-check-input" name="property_type_row_'+k+'" value="mortgaged">Mortgaged \
                                            </div>\
                                            <div class="form-check-inline">\
                                                <input type="radio" class="form-check-input" name="property_type_row_'+k+'" value="owned">Owned \
                                            </div> \
                                            <div class="form-check-inline">\
                                                <input type="radio" class="form-check-input" name="property_type_row_'+k+'" value="rented">Rented \
                                            </div> \
                                        </div>\
                                        <div class="col-md-5">\
                                            <p style="margin-bottom: 0!important;">Does the proprietor have a bank account?\
                                                No\
                                                <label class="switch" style="margin-top: 0!important;">\
                                                    <input type="checkbox" class="proprietor_has_bank_account" value="yes" id="'+k+'" data-identification="proprietor_has_bank_account_'+k+'" name="proprietor_has_bank_account_'+k+'">\
                                                    <span class="slider round"></span>\
                                                </label>\
                                                Yes\
                                            </p>\
                                        </div>\
                                        <div class="col-md-1"></div>\
                                    </div>');
            $('#k').val(k);
            $('#credit_proprietors_qty').val(k);

        });
        // credit proprietor remove button 
        $(document).on('click', '.btn_credit_proprietor_remove', function(){
            var button_id = $(this).attr("id"); 
            $('.credit-proprietor-wrap-'+button_id+'').remove();
            $('#proprietor_'+button_id+'').remove();
        });

        //begin of Signature Module
        var jSignature_initialized = false;
        $(document).on('click', '.add_signature_btn', function(){
            sign_index = $(this).attr("data-signature-index");
            trade_conditions = $(this).attr("data-signature-conditions");
            if(jSignature_initialized == false){
                if(screen.width >= 800) { 
                    $sigdiv = $('#signature').jSignature({ 'UndoButton': false, 'width': 600, 'height': 200 });
                    jSignature_initialized = true;
                } else {
                    $sigdiv = $('#signature').jSignature({ 'UndoButton': false });
                    jSignature_initialized = true;
                }

            } else {
                $("#btn_clear").click();

            }

            var signature_string_name = $('input[name="signature_string_'+sign_index+'"]');


        });

        var $tools = $('#tools');
        var $extraarea = $('#displayarea');
        var pubsubprefix = 'jSignature.demo.';


        $.subscribe(pubsubprefix + 'image/svg+xml', function(data) {
            try{
                var i = new Image()
                i.src = 'data:' + data[0] + ';base64,' + btoa( data[1] )
                $(i).appendTo($extraarea)
            } catch (ex) {
            }		
        });	

        if (Modernizr.touch){
            $('#scrollgrabber').height($('#content').height())		
        }

        $("#btn_clear").click(function() {
            $sigdiv.jSignature('reset');
            $('#signature').val("");
            $('#signature_string').val("");
            $('#sign_result').attr("src", "");
            $("#icon_added").addClass("d-none");

        });

        $("#btn_displayarea").click(function() {
            var signature_string_id = $('#signature_string').val();

            //publish to display area
            $('#sign_result').attr("src", "data:" + signature_string_id);
        });
        

        // dynamically adding bank details to proprietor in credit_account
        $(document).on('click', '.proprietor_has_bank_account', function(){
            var a = $(this).attr("id"); 
            if($(this).is(":checked")){
                $(this).val("yes"); // yes has_bank_account
                has_bank_index_val=$(this).val("yes"); 
                $('#proprietor_'+a).append('<div class="form-row col-md-12 bank-details-'+a+'">\
                                                <div class="form-group col-md-2" style="max-width: 11%;">\
                                                    Bank branch:\
                                                </div>\
                                                <div class="form-group col-md-2">\
                                                    <input type="text" class="text_form" name="proprietor_bank_branch_'+a+'">\
                                                </div>\
                                                <div class="form-group col-md-2" style="max-width: 13%;">\
                                                    Account number:\
                                                </div>\
                                                <div class="form-group col-md-2">\
                                                    <input type="text" class="text_form" name="proprietor_bank_account_'+a+'">\
                                                </div>\
                                                <div class="form-group col-md-1">\
                                                    Sort Code:\
                                                </div>\
                                                <div class="form-group col-md-2">\
                                                    <input type="text" class="text_form" name="proprietor_bank_sortcode_'+a+'">\
                                                </div>\
                                            </div>');
            } else {
                $(this).val("no"); // no for has_bank_account
                $('.bank-details-'+a).remove();
            }
        });

        $(".btn_save_signature").click(function() {
            var data = $sigdiv.jSignature('getData', "svgbase64")
            if (typeof data === 'string'){
                $('#signature_string', $tools).val(data)
            } else if($.isArray(data) && data.length === 2){
                $('#signature_string', $tools).val(data.join(','))
            } else {
                try {
                    $('#signature_string', $tools).val(JSON.stringify(data))
                } catch (ex) {
                    $('#signature_string', $tools).val('Not sure how to stringify this, likely binary, format.')
                }
            }

            signature_string = $('#signature_string').val();
            if(trade_conditions == "applicants"){
                $('#trade_user_sign_id_'+sign_index).val(signature_string);
                $('#add_signature_btn_'+sign_index).addClass('d-none');
                $('#change_signature_btn_'+sign_index).removeClass('d-none');

                //publish to display area on trade users board
                $('#img_signature_'+sign_index).attr("src", "data:" + signature_string);
                $('#signatureModule').modal('hide');
            } else if(trade_conditions == "trade"){
                $('.conditions_signature').val(signature_string);
                //publish to display area on trade users board
                $('#img_signature_conditions').attr("src", "data:" + signature_string);
                $('#signatureModule').modal('hide');

            } else if(trade_conditions == "credit_account"){
                $('.conditions_signature').val(signature_string);
                //publish to display area on terms & conditions for credit account modality
                $('#img_signature_credit_conditions').attr("src", "data:" + signature_string);
                $('#signatureModule').modal('hide');
            } 
        });       

    // end of Signature Module

//limited x nonlimited check
$(function() {
    $('.check_limited').click(function() {
        if($(this).is(":checked")){
            $(this).val("limited");
        } else {
            $(this).val("nonlimited");
        }
        // alert($(this).val() + ' ' + (this.checked ? 'checked' : 'unchecked'));
    });
});

var application_type = $('#application_type').val();
// Trade Section
    $("#trade_card").click( function() {
        $(".step_0").addClass('d-none');
        $(".step_1").removeClass('d-none');
        $("#start_date").addClass('d-none');
        $("#start_date_input").addClass('d-none');
        $(".trade_doc_info").removeClass('d-none');
        $("#step1_next_previous_buttons").removeClass('d-none');
        $("#account_type").val("trade_card");
        $("#application_type").val("trade_card");

        application_type = $("#application_type").val();
    });

//Credit Account Section
    $("#credit_account").click( function() {

        $(".step_0").addClass('d-none');
        $(".step_1").removeClass('d-none');
        $("#start_date").removeClass('d-none');
        $("#start_date_input").removeClass('d-none');
        $("#step_2_references").removeClass('d-none');
        $("#cia_type").removeClass('d-none');
        $("#step1_next_previous_buttons").removeClass('d-none');
        $("#application_type").val("credit_account");
        application_type = $("#application_type").val();
        localStorage.setItem("application_type", application_type);

    });

// Next-2 to Section 2 (all)
    $("#step_0_btn").click( function(){
        $(".step_1").addClass('d-none');
        $(".step_0").removeClass('d-none');
    });

    
    $(".step_1_btn").click( function(){
        application_type = $('#application_type').val();
        if(application_type == "trade_card"){
            $(".step_2_nonlimited").addClass('d-none'); //hide trade_card non limited
            $(".step_2_limited").addClass('d-none'); //hide trade_card limited
            $(".step_2_users_sign").addClass('d-none'); //hide trade_card step 2
            $(".step_1").removeClass('d-none'); //show trade_card step 1
        } else if(application_type == "credit_account"){

            $(".step_2_credit_limited").addClass('d-none'); //hide credit account limited step 2
            $(".step_2_credit_nonlimited").addClass('d-none'); //hide credit account non limited step 2
            $(".step_1").removeClass('d-none'); //show credit account step 1
        }
    });

    $("#step_2_btn").click( function(){
        application_type = $('#application_type').val();
        if(application_type == "trade_card"){
            if ($('input.check_limited').is(':checked')){
                $(".step_2_limited").removeClass('d-none');
                $(".step_2_users_sign").removeClass('d-none');
                var company_type = "limited";
                $("#company_type").val("limited");
            } else {
                $(".step_2_nonlimited").removeClass('d-none');
                $(".step_2_users_sign").removeClass('d-none');
                var company_type = "nonlimited";
                $("#company_type").val("nonlimited");
            }
        
            localStorage.setItem("company_type", company_type);

        } else if(application_type == "credit_account"){
            if ($('input.check_limited').is(':checked')){
                $(".step_2_credit_limited").removeClass('d-none'); 
                $(".step_2_credit_nonlimited").addClass('d-none');                    
                $("#company_type").val("limited");
                var company_type = "limited";
                $("#company_type").val("limited");

            } else {
                $(".step_2_credit_nonlimited").removeClass('d-none');  
                $(".step_2_credit_limited").addClass('d-none');                   
                $("#company_type").val("nonlimited");                 
                var company_type = "nonlimited";
                $("#company_type").val("nonlimited");

            }

            localStorage.setItem("company_type", company_type);

        }

        $(".step_1").addClass('d-none');

    });

    $(".step_3_btn").click( function(){
        application_type = $('#application_type').val();

        if(application_type == "trade_card"){
            $(".step_2_nonlimited").addClass('d-none');
            $(".step_2_limited").addClass('d-none');
            $(".step_2_users_sign").addClass('d-none');
            $(".step_3_trade_conditions").removeClass('d-none');
            // $(".submitButton").removeClass('d-none');
            // $(".step_4_trade_conditions_btn").removeClass('d-none');

        } else if(application_type == "credit_account"){
            $(".step_2_credit_limited").addClass('d-none');
            $(".step_2_credit_nonlimited").addClass('d-none');
            $(".step_3_credit_conditions").removeClass('d-none');
            // $(".submitButton").removeClass('d-none');
            // $(".step_4_credit_conditions").removeClass('d-none'); //it will be a new form to update db

        }
    });

    $(".step_2_revert_btn").click( function(){

        company_type = localStorage.getItem("company_type");
        if(application_type == "trade_card"){
            if (company_type == "limited"){
                $(".step_2_limited").removeClass('d-none');
                $(".step_2_users_sign").removeClass('d-none');

            } else {
                $(".step_2_nonlimited").removeClass('d-none');
                $(".step_2_users_sign").removeClass('d-none');

            }
            $(".step_3_trade_conditions").addClass('d-none');

        } else if(application_type == "credit_account"){
            if (company_type == "limited"){
                $(".step_2_credit_limited").removeClass('d-none');
            } else {
                $(".step_2_credit_nonlimited").removeClass('d-none');
            }

            $(".step_3_credit_conditions").addClass('d-none');
        }

    });



    $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
    // Form Submission
    $("form").on("submit", function(e){
        e.preventDefault();
        var action = $(this).attr('action');
        var formData = $(this).serialize();
        $.post(action, formData, function(data, status, xhr) {
            response = JSON.parse(data);
            if (response["outcome"] == "success") {
                application_id = response["application_id"];
                alert("You will now be redirected.");
                setTimeout('window.location = "UploadFile/upload.php?application_id='+response["application_id"]+'"',100);
            }
        });
    
    });

});

</script>

    </body>
</html>
