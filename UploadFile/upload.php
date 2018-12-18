<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>File Upload with PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS jQuery, Popper.js, Bootstrap JS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="../js/jquery-3.3.1.min.js"></script>
        <link rel="../stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
        


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
            .input-file { visibility: hidden; position: absolute;}
            /* h4 { margin-top: 30px;} */
            #filesSelected{
                margin: 0.25rem 0.95rem;
            }
</style>


</head>
<body class="bg-dark">

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-12 bg-light mt-5 p-4 rounded">

                 <section class="">

                    <div class="p-4">
                        <div class="row border border-success" style="padding: 2rem;">
                            <div class="title_conditions text-uppercase mb-3">Upload Documents
                            </div>

                            <div class="content_conditions">

                            <form action="fileUpload.php" id="form1" method="post" multipart="" enctype="multipart/form-data">
                                <!-- <input type="hidden" name="application_id" value="< ?php echo $application_id; ?>"> -->
                                <?php $application_id = $_GET["application_id"]; ?>
                                        <input type="hidden" name="application_id" value="<?php echo $application_id; ?>">
                                    <h4>Add Attachments:</h4>
                                    <div id="uploading">
                                        <input id="fileUpload" type="file" name="files[]" class="input-file" multiple>
                                        <div>
                                            <span class="input-group-addon"><span class="fa fa-video-camera"></span></span>
                                            <input type="hidden" class="form-control" disabled placeholder="Upload Documents">
                                            <span class="input-group-btn">
                                                <button class="upload-field btn btn-info" type="button"><span class="fa fa-search"></span> Browse</button>
                                            </span>
                                            <span id="filesSelected"></span>
                                            <input type="submit" name="submit" value="Upload File(s) Now" class="btn btn-primary ml-2">

                                        </div>

                                    </div>
                            </form>



                        </div>
                    </div>
                    <div class="form-row ml-2">
                        <div id="step3_next_previous_buttons" class="form-group mp-4"> 
                            <button type="button" class="btn btn-danger step_3_revert_btn" id=""> <span class="fas fa-chevron-left"></span> Previous</button> 
                            <button type="submit" class="btn btn-primary step_4_btn" id=""> Submit <span class="fas fa-chevron-right"></span></button> 
                        </div>
                    </div>
                          
                </section>
            </div>
            </div>
        </div>
   
        <!-- Popper.js, Bootstrap JS -->
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

$("#form1").on("submit", function(e){
    // e.preventDefault();

    // Get form
    var form = $('#form1')[0];

    // Create an FormData object 
    var formdata = new FormData(form);

    $.ajax({
        url         : 'fileUpload.php',
        data        : formdata,
        cache       : false,
        contentType : false,
        processData : false,
        type        : 'POST',
        success     : function(response){
            if (response === "") { 
            }
            else { 
                response = JSON.parse(response);
                // response = JSON.stringify(data);
                if (response["outcome"] == "success") {
                    if (response["smessage"]) {
                        toastr.success(response["lmessage"], response["smessage"]);
                        console.log(response);
                        table = "<table><tr><td>File Name</td><td></td></tr>";
                        for(i=0;i<response['filename'].length;i++){
                            table +="<tr id='tr_"+response['id'][i]+"'><td>"+response['filename'][i]+"</td><td><button type='button' class='btn btn-danger deletefile' data-id="+response['id'][i]+">Delete</button></td></tr>";
                            console.log(response['id'][i]);
                            console.log(response['filename'][i]);
                        }
                        table+="</table>";

                        $('#uploading').append(table);

                    }
                } else if (response["outcome"] == "fail") {
                    toastr.error("no submissions");
                } else {
                    toastr.warning("An error prevented processing your request", "Error");
                }
            }
        }
    });
return false;
});

$(document).on('click', '.deletefile', function(){
    var file_id = $(this).attr("data-id"); 
    $.ajax({
        type: "GET",
        url: "filedelete.php",
        data: {
            file_id:file_id
        },
        success: function (data) {
            alert(data);
            $('#tr_'+file_id).remove();
        }
    });
});

        </script>
    </body>
</html>


