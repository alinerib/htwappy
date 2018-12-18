<?php
//includes PHP code for DB connection
require_once("connect.php");
$db = db_conn();
global $errorcode;
$data = array();
if ($db) {
    $data["connection"] = "success";
} else {
    $data["connection"] = "error";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   //common fields to all applications
   $application_type=$_POST["application_type"];
   $company_name=$_POST["company_name"];
   $company_address=$_POST["company_address"];
   $company_postcode=$_POST["company_postcode"];
   $company_telephone=$_POST["company_telephone"];
   $company_mobile=$_POST["company_mobile"];
   $company_email=$_POST["company_email"];
   $email_list=$_POST["email_list"];
   $company_business_nature=$_POST["company_business_nature"];
   $company_type=$_POST["company_type"];
   $operation = $_POST["operation"];
   $conditions_fullname = $_POST["conditions_fullname"];
   $conditions_signature = $_POST["conditions_signature"]; //this is the signature image
   $position = $_POST["position"];
   $correspondence_title = $_POST["correspondence_title"];
   $correspondence_firstname = $_POST["correspondence_firstname"];
   $correspondence_surname = $_POST["correspondence_surname"];

    if($application_type == "trade_card"){
        if($company_type == "limited"){
            $registered_name = $_POST["registered_name"];
            $registered_office = $_POST["registered_office"];
        }
    } else { //credit_account
        $start_date=$_POST["start_date"]; // yyyy/mm/dd
        $trading_premises = $_POST["trading_premises"];
        $credit_limit_required = $_POST["credit_limit_required"];

        if($company_type == "limited"){
            $registered_name=$_POST["registered_name"];
            $registered_office=$_POST["registered_office"];
            $registered_number=$_POST["registered_number"];
            $principle_trading_address = $_POST["principle_trading_address"];
            $principle_trading_postcode = $_POST["principle_trading_postcode"];
        } 
    }

}

//insert in db
if($operation == "add"){
    if($application_type == "trade_card"){

        if($company_type == "limited"){

            //insert into companies
            $query_trade_limited_company = "INSERT INTO companies (application_type, company_type, company_name, company_address, company_postcode, correspondence_title, correspondence_firstname, correspondence_surname, company_telephone, company_mobile, company_email, email_list, company_business_nature, registered_name, registered_office) VALUES ('$application_type', '$company_type', '$company_name', '$company_address', '$company_postcode', '$correspondence_title', '$correspondence_firstname', '$correspondence_surname', '$company_telephone', '$company_mobile', '$company_email', '$email_list', '$company_business_nature', '$registered_name', '$registered_office')";
            $statement_a = $db->prepare($query_trade_limited_company);
            $statement_a->execute();

            //get company ID
            $application_id = $db->lastInsertId();

            // begin of trade applicants
            $trade_applicants_qty=$_POST["trade_applicants_qty"];
            for($y = 0; $y <= $trade_applicants_qty; $y++){
                $person_type = "trade_applicants";
                $title = $_POST["trade_user_title_".$y];
                $fullname = $_POST["trade_user_fullname_".$y];
                $signature = $_POST["trade_user_sign_".$y];

                $query_limited_applicant = "INSERT INTO person (application_id, person_type, title, fullname, signature) VALUES ($application_id, '$person_type', '$title', '$fullname', '$signature')";
                $statement_b = $db->prepare($query_limited_applicant);
                $statement_b->execute();
            
            } 

            //terms and conditions person 
            $person_type = "trade_conditions";
            $query_trade_conditions = "INSERT INTO person (application_id, person_type, fullname, position, signature) VALUES ($application_id,'$person_type', '$conditions_fullname', '$position', '$conditions_signature')";
            $statement_c = $db->prepare($query_trade_conditions);
            $statement_c->execute();

        } else if($company_type == "nonlimited"){

            //insert into companies
            $query_trade_nonlimited_company = "INSERT INTO companies (application_type, company_type, company_name, company_address, company_postcode, correspondence_title, correspondence_firstname, correspondence_surname, company_telephone, company_mobile, company_email, email_list, company_business_nature) VALUES ('$application_type', '$company_type', '$company_name', '$company_address', '$company_postcode', '$correspondence_title', '$correspondence_firstname', '$correspondence_surname', '$company_telephone', '$company_mobile', '$company_email', '$email_list', '$company_business_nature')";
            $statement_d = $db->prepare($query_trade_nonlimited_company);
            $statement_d->execute();

            //get company ID
            $application_id = $db->lastInsertId();

            //insert proprietors
            $trade_proprietors_qty=$_POST["trade_proprietors_qty"];

            for($w = 0; $w <= $trade_proprietors_qty; $w++){
                $person_type = "trade_proprietor";
                $fullname = $_POST["trade_proprietor_fullname_".$w];

                $address = $_POST["trade_proprietor_address_".$w];

                $query_nonlimited_proprietor = "INSERT INTO person (application_id, person_type, fullname, address) VALUES ($application_id, '$person_type', '$fullname', '$address')";
                $statement_e = $db->prepare($query_nonlimited_proprietor);
                $statement_e->execute();
            }
            
            //insert applicants
            $trade_applicants_qty=$_POST["trade_applicants_qty"];
            for($y = 0; $y <= $trade_applicants_qty; $y++){
                $person_type = "trade_applicants";
                $title = $_POST["trade_user_title_".$y];
                $fullname = $_POST["trade_user_fullname_".$y];
                $signature = $_POST["trade_user_sign_".$y];
                if(isset($title) && isset($fullname) && isset($signature)){
                    $query_nonlimited_applicant = "INSERT INTO person (application_id, person_type, title, fullname, signature) VALUES ($application_id, '$person_type', '$title', '$fullname', '$signature')";
                    $statement_f = $db->prepare($query_nonlimited_applicant);
                    $statement_f->execute();           
                } 
            }         
            //terms and conditions person 
            $person_type = "trade_conditions";
            $query_trade_conditions = "INSERT INTO person (application_id, person_type, fullname, position, signature) VALUES ($application_id,'$person_type', '$conditions_fullname', '$position', '$conditions_signature')";
            $statement_g = $db->prepare($query_trade_conditions);
            $statement_g->execute();
        }

    } else if($application_type == "credit_account"){

        if($company_type == "limited"){
            //insert into companies
            $query_credit_limited_company = "INSERT INTO companies (application_type, company_type, company_name, company_address, company_postcode, correspondence_title, correspondence_firstname, correspondence_surname, company_telephone, company_mobile, company_email, email_list, company_business_nature, start_date, registered_name, registered_office, registered_number, principle_trading_address, principle_trading_postcode) VALUES ('$application_type', '$company_type', '$company_name', '$company_address', '$company_postcode', '$correspondence_title', '$correspondence_firstname', '$correspondence_surname', '$company_telephone', '$company_mobile', '$company_email', '$email_list', '$company_business_nature', '$start_date', '$registered_name', '$registered_office', '$registered_number', '$principle_trading_address', '$principle_trading_postcode')";
            $statement_h = $db->prepare($query_credit_limited_company);
            $statement_h->execute();

            //get company ID
            $application_id = $db->lastInsertId();

            // directors
            $directors_qty=$_POST["principle_directors_qty"];

            for($x = 0; $x <= $directors_qty; $x++){
                    $person_type = "director";
                    $title = $_POST["principle_director_title_".$x];
                    $fullname = $_POST["principle_director_fullname_".$x];
                    $address = $_POST["principle_director_address_".$x];

                    if(isset($title) && isset($fullname) && isset($address)){

                        $query_credit_limited_director = "INSERT INTO person (application_id, person_type, title, fullname, address) VALUES ($application_id, '$person_type', '$title', '$fullname', '$address')";
                        $statement_i = $db->prepare($query_credit_limited_director);
                        $statement_i->execute();
                    }
            } 

            //terms and conditions person 
            $person_type = "credit_conditions";
            $query_credit_conditions = "INSERT INTO person (application_id, person_type, fullname, position, signature) VALUES ($application_id,'$person_type', '$conditions_fullname', '$position', '$conditions_signature')";
            $statement_j = $db->prepare($query_credit_conditions);
            $statement_j->execute();

        } else if($company_type == "nonlimited"){
            //insert into companies
            $query_credit_nonlimited_company = "INSERT INTO companies (application_type, company_type, company_name, company_address, company_postcode, correspondence_title, correspondence_firstname, correspondence_surname, company_telephone, company_mobile, company_email, email_list, company_business_nature, start_date) VALUES ('$application_type', '$company_type', '$company_name', '$company_address', '$company_postcode', '$correspondence_title', '$correspondence_firstname', '$correspondence_surname', '$company_telephone', '$company_mobile', '$company_email', '$email_list', '$company_business_nature', '$start_date')";
            $statement_k = $db->prepare($query_credit_nonlimited_company);
            $statement_k->execute();
            //get company ID
            $application_id = $db->lastInsertId();

            //credit proprietors with/without bank account
            $proprietors_qty=$_POST["credit_proprietors_qty"];
            for($k = 0; $k <= $proprietors_qty; $k++){
                $person_type = "credit_nonlimited_proprietor";
                $title = $_POST["credit_proprietor_title_".$k];
                $fullname = $_POST["credit_proprietor_fullname_".$k];
                $address = $_POST["credit_proprietor_address_".$k];
                $property_type = $_POST["property_type_row_".$k];
                if(isset($title, $fullname, $address, $property_type)){
                    if(isset($_POST["proprietor_has_bank_account_".$k])){
                        $has_bank_account = $_POST["proprietor_has_bank_account_".$k];
                        $bank_branch = $_POST["proprietor_bank_branch_".$k];
                        $account = $_POST["proprietor_bank_account_".$k];
                        $sortcode = $_POST["proprietor_bank_sortcode_".$k];
                        $query_credit_nonlimited_proprietor = "INSERT INTO person (application_id, person_type, title, fullname, address, has_bank_account, branch, account, sortcode) VALUES ($application_id, '$person_type', '$title', '$fullname', '$address', '$has_bank_account', '$bank_branch', '$account', '$sortcode')";
                        
                    } else {
                    $query_credit_nonlimited_proprietor = "INSERT INTO person (application_id, person_type, title, fullname, address) VALUES ($application_id, '$person_type', '$title', '$fullname', '$address')";
                    }
                $statement_m = $db->prepare($query_credit_nonlimited_proprietor);
                $statement_m->execute();
                } 
            }
            //terms and conditions person 
            $person_type = "credit_conditions";
            $query_credit_conditions = "INSERT INTO person (application_id, person_type, fullname, position, signature) VALUES ($application_id,'$person_type', '$conditions_fullname', '$position', '$conditions_signature')";
            $statement_n = $db->prepare($query_credit_conditions);
            $statement_n->execute();

        }
    }
}
$data["smessage"] = "You have a new application id: ".$application_id;
$data["outcome"] = "success";
$data["refresh-div"] = "yes";
$data["application_id"] = $application_id;
echo json_encode($data);
?>