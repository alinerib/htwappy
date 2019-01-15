<?php
//includes PHP code for DB connection
require('db.htw.php');
$db = new db();

require("functions-validations.php");
global $errorcode;
$data = array();
if ($db) {
    $data["connection"] = "success";
} else {
    $data["connection"] = "error";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   //common fields to all applications
   $operation=fieldCheck("post","operation","text");
   $application_type=fieldCheck("post","application_type","text");
   
   $company_type=fieldCheck("post","company_type","text");
   $company_name=fieldCheck("post","company_name","text");
   $company_address=fieldCheck("post","company_address","text");
   $company_address_line2=fieldCheck("post","company_address_line2","text");
   $company_town=fieldCheck("post","company_town","text");
   $company_county=fieldCheck("post","company_county","text");
   $company_postcode=fieldCheck("post","company_postcode","text");
   $company_telephone=fieldCheck("post","company_telephone","text");
   $company_mobile=fieldCheck("post","company_mobile","text");
   $company_email=fieldCheck("post","company_email","text");
   $email_list=fieldCheck("post","email_list","text");
   $company_business_nature=fieldCheck("post","company_business_nature","text");
   $operation=fieldCheck("post","operation","text");
   $conditions_fullname=fieldCheck("post","conditions_fullname","text");
   $conditions_signature=fieldCheck("post","conditions_signature","text"); //this is the signature image
   $position=fieldCheck("post","position","text");
   $correspondence_title=fieldCheck("post","correspondence_title","text");
   $correspondence_firstname=fieldCheck("post","correspondence_firstname","text");
   $correspondence_surname=fieldCheck("post","correspondence_surname","text");
   $start_date=fieldCheck("post","start_date","date"); // yyyy/mm/dd
    if($application_type == "trade_card"){
        if($company_type == "limited"){
            $registered_name=fieldCheck("post","registered_name","text");
            $registered_number=fieldCheck("post","registered_number","text");
        }
    } else { //credit_account
        
        $trading_premises=fieldCheck("post","trading_premises","text");
        $credit_limit_required=fieldCheck("post","credit_limit_required","text");
        $creditors_voluntary_arrangement=fieldCheck("post",'creditors_voluntary_arrangement',"text");

        if($company_type == "limited"){
            $registered_name=fieldCheck("post","registered_name","text");
            $registered_number=fieldCheck("post","registered_number","text");
            $principle_trading_address=fieldCheck("post","principle_trading_address","text");
            $principle_trading_address_line2=fieldCheck("post","principle_trading_address_line2","text");
            $principle_trading_town=fieldCheck("post","principle_trading_town","text");
            $principle_trading_county=fieldCheck("post","principle_trading_county","text");
            $principle_trading_postcode=fieldCheck("post","principle_trading_postcode","text");
        } 
    }

}

//insert in db
if($operation == "add"){
    $date = new DateTime();
    $timestamp = $date->getTimestamp();
    
    $secure_code = generateSecureCode($company_name.'-'.$conditions_signature.'-'.$company_email.'-'.$timestamp);

    if($application_type == "trade_card"){
//         debug_me("trade_card");
        if($company_type == "limited"){
//             debug_me("limited");
            //insert into companies
            $query_trade_limited_company = "INSERT INTO companies (application_type, company_type, company_name, company_address, company_address_line2, company_town, company_county, company_postcode, correspondence_title, correspondence_firstname, correspondence_surname, company_telephone, company_mobile, company_email, email_list, company_business_nature, start_date, registered_name, registered_number,secure_code)  VALUES ('$application_type', '$company_type', '$company_name', '$company_address', '$company_address_line2', '$company_town', '$company_county','$company_postcode', '$correspondence_title', '$correspondence_firstname', '$correspondence_surname', '$company_telephone', '$company_mobile', '$company_email', '$email_list', '$company_business_nature', '$start_date', '$registered_name', '$registered_number','$secure_code')";
            $statement_a = $db->query($query_trade_limited_company);
//             debug_me($query_trade_limited_company);
            //get company ID
            $application_id = $db->insert_id();
//             debug_me("ID=$application_id");
            //terms and conditions person 
            $person_type = "trade_conditions";
            $query_trade_conditions = "INSERT INTO person (application_id, person_type, fullname, position, signature) VALUES ($application_id,'$person_type', '$conditions_fullname', '$position', '$conditions_signature')";
            $statement_c = $db->query($query_trade_conditions);
//             debug_me($query_trade_conditions);
/*             exit */;
        } else if($company_type == "nonlimited"){

            //insert into companies
            $query_trade_nonlimited_company = "INSERT INTO companies (application_type, company_type, company_name, company_address, company_address_line2, company_town, company_county, company_postcode, correspondence_title, correspondence_firstname, correspondence_surname, company_telephone, company_mobile, company_email, email_list, company_business_nature, start_date) VALUES ('$application_type', '$company_type', '$company_name', '$company_address', '$company_address_line2', '$company_town', '$company_county', '$company_postcode', '$correspondence_title', '$correspondence_firstname', '$correspondence_surname', '$company_telephone', '$company_mobile', '$company_email', '$email_list', '$company_business_nature', '$start_date')";
            $statement_d = $db->query($query_trade_nonlimited_company);

            //get company ID
            $application_id = $db->insert_id();

            //insert proprietors
            $trade_proprietors_qty=fieldCheck("post","trade_proprietors_qty","text");

            for($w = 0; $w <= $trade_proprietors_qty; $w++){
                $person_type = "trade_proprietor";
                $fullname=fieldCheck("post","trade_proprietor_fullname_".$w,"text");
                $address=fieldCheck("post","trade_proprietor_address_".$w,"text");
                $trade_proprietor_address_line2=fieldCheck("post","trade_proprietor_address_line2_".$w,"text");
                $trade_proprietor_town=fieldCheck("post","trade_proprietor_town_".$w,"text");
                $trade_proprietor_county=fieldCheck("post","trade_proprietor_county_".$w,"text");
                $trade_proprietor_postcode=fieldCheck("post","trade_proprietor_postcode_".$w,"text");

                $query_nonlimited_proprietor = "INSERT INTO person (application_id, person_type, fullname, address, address_line2, town, county, postcode) VALUES ($application_id, '$person_type', '$fullname', '$address', '$trade_proprietor_address_line2', '$trade_proprietor_town', '$trade_proprietor_county', '$trade_proprietor_postcode')";
                $statement_e = $db->query($query_nonlimited_proprietor);

            }
     
            //terms and conditions person 
            $person_type = "trade_conditions";
            $query_trade_conditions = "INSERT INTO person (application_id, person_type, fullname, position, signature) VALUES ($application_id,'$person_type', '$conditions_fullname', '$position', '$conditions_signature')";
            $statement_g = $db->query($query_trade_conditions);
        }

        // begin of trade applicants
        $trade_applicants_qty=fieldCheck("post","trade_applicants_qty","text");
        for($y = 0; $y <= $trade_applicants_qty; $y++){
            $person_type = "trade_applicants";
            $title=fieldCheck("post","trade_user_title_".$y,"text");
            $fullname=fieldCheck("post","trade_user_fullname_".$y,"text");
            $signature=fieldCheck("post","trade_user_sign_".$y,"text");

            $query_limited_applicant = "INSERT INTO person (application_id, person_type, title, fullname, signature) VALUES ($application_id, '$person_type', '$title', '$fullname', '$signature')";
            $statement_b = $db->query($query_limited_applicant);
    
        } 

    } else if($application_type == "credit_account"){
        if($company_type == "limited"){
            //insert into companies
            $query_credit_limited_company = "INSERT INTO companies (application_type, company_type, company_name, company_address, company_address_line2, company_town, company_county, company_postcode, check_limited, creditors_voluntary_arrangement, correspondence_title, correspondence_firstname, correspondence_surname, company_telephone, company_mobile, company_email, email_list, company_business_nature, start_date, registered_name, registered_number, principle_trading_address, principle_trading_address_line2, principle_trading_town, principle_trading_county, principle_trading_postcode) VALUES ('$application_type', '$company_type', '$company_name', '$company_address', '$company_address_line2', '$company_town', '$company_county', '$company_postcode', '$check_limited', '$correspondence_title', '$correspondence_firstname', '$correspondence_surname', '$company_telephone', '$company_mobile', '$company_email', '$email_list', '$company_business_nature', '$start_date', '$registered_name', '$registered_number', '$principle_trading_address', '$principle_trading_address_line2', '$principle_trading_town', '$principle_trading_county', '$principle_trading_postcode')";
            $statement_h = $db->query($query_credit_limited_company);

            //get company ID
            $application_id = $db->insert_id();

            // directors
            $directors_qty=fieldCheck("post","principle_directors_qty","text");

            for($x = 0; $x <= $directors_qty; $x++){
                    $person_type = "director";
                    $fullname=fieldCheck("post","principle_director_fullname_".$x,"text");
                    $address=fieldCheck("post","principle_director_address_".$x,"text");
                    $address_line2=fieldCheck("post","principle_director_address_line2_".$x,"text");
                    $town=fieldCheck("post","principle_director_town_".$x,"text");
                    $county=fieldCheck("post","principle_director_county_".$x,"text");
                    $postcode=fieldCheck("post","principle_director_postcode_".$x,"text");

                    if(isset($title) && isset($fullname) && isset($address)){

                        $query_credit_limited_director = "INSERT INTO person (application_id, person_type, fullname, address, address_line2, town, county, postcode) VALUES ($application_id, '$person_type', '$fullname', '$address', '$address_line2', '$town', '$county', '$postcode')";
                        $statement_i = $db->query($query_credit_limited_director);

                    }
            } 

            //terms and conditions person 
            $person_type = "credit_conditions";
            $query_credit_conditions = "INSERT INTO person (application_id, person_type, fullname, position, signature) VALUES ($application_id,'$person_type', '$conditions_fullname', '$position', '$conditions_signature')";
            $statement_j = $db->query($query_credit_conditions);
        } else if($company_type == "nonlimited"){
            //insert into companies
            $query_credit_nonlimited_company = "INSERT INTO companies (application_type, company_type, company_name, company_address, company_address_line2, company_postcode, correspondence_title, correspondence_firstname, correspondence_surname, company_telephone, company_mobile, company_email, email_list, company_business_nature, start_date) VALUES ('$application_type', '$company_type', '$company_name', '$company_address', '$company_address_line2', '$company_postcode', '$correspondence_title', '$correspondence_firstname', '$correspondence_surname', '$company_telephone', '$company_mobile', '$company_email', '$email_list', '$company_business_nature', '$start_date')";
            $statement_k = $db->query($query_credit_nonlimited_company);

            //get company ID
            $application_id = $db->insert_id();

            //credit proprietors with/without bank account
            $proprietors_qty=fieldCheck("post","credit_proprietors_qty","text");
            for($k = 0; $k <= $proprietors_qty; $k++){
                $person_type = "credit_nonlimited_proprietor";
                $title=fieldCheck("post","credit_proprietor_title_".$k,"text");
                $fullname=fieldCheck("post","credit_proprietor_fullname_".$k,"text");
                $address=fieldCheck("post","credit_proprietor_address_".$k,"text");
                $address_line2=fieldCheck("post","credit_proprietor_address_line2_".$k,"text");
                $town=fieldCheck("post","credit_proprietor_town_".$k,"text");
                $county=fieldCheck("post","credit_proprietor_county_".$k,"text");
                $postcode=fieldCheck("post","credit_proprietor_postcode_".$k,"text");
                $property_type=fieldCheck("post","property_type_row_".$k,"text");
                $has_bank_account = fieldCheck("post","proprietor_has_bank_account_".$k,"text");
                $bank_branch = fieldCheck("post","proprietor_bank_branch_".$k,"text");
                $account = fieldCheck("post","proprietor_bank_account_".$k,"text");
                $sortcode = fieldCheck("post","proprietor_bank_sortcode_".$k,"text");
                $query_credit_nonlimited_proprietor = "INSERT INTO person (application_id, person_type, title, fullname, address, address_line2, town, county, postcode, has_bank_account, branch, account, sortcode) VALUES ($application_id, '$person_type', '$title', '$fullname', '$address', '$address_line2', '$town', '$county', '$postcode', '$has_bank_account', '$bank_branch', '$account', '$sortcode')";
                $statement_l = $db->query($query_credit_nonlimited_proprietor);
                 
            }
            //terms and conditions person 
            $person_type = "credit_conditions";
            $query_credit_conditions = "INSERT INTO person (application_id, person_type, fullname, position, signature) VALUES ($application_id,'$person_type', '$conditions_fullname', '$position', '$conditions_signature')";
            $statement_m = $db->query($query_credit_conditions);

        }
    }
}
$data["smessage"] = "You have a new application id: ".$application_id;
$data["outcome"] = "success";
$data["refresh-div"] = "yes";
$data["application_id"] = $application_id;
$data["application_type"] = $application_type;
echo json_encode($data);
?>