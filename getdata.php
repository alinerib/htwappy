<?php 
require('db.htw.php');
$db = new db();

    if (isset($_POST["application_id"])){
        $data = array();      // array to pass back data
        $application_id = $_POST["application_id"];

        $query = "SELECT c.id, c.application_type, c.company_name, c.company_address, c.company_address_line1, c.company_postcode, c.company_telephone, c.company_mobile, c.company_email, c.email_list, c.company_business_nature, c.start_date, c.company_type, c.registered_name, c.registered_number, c.trading_premises, c.credit_limited_required, c.principle_trading_address, c.principle_trading_address_line2, c.principle_trading_town, c.principle_trading_county, c.principle_trading_postcode, c.registration_date, c.correspondence_title, c.correspondence_firstname, c.correspondence_surname, p.id_person, p.fullname, p.person_type, p.address, p.title, p.has_bank_account, p.branch, p.account, p.sortcode, p.signature, p.position, p.signature_type, p.application_id, p.line1_address, p.county, p.town, p.postcode FROM companies as c, person as p WHERE c.id = p.application_id AND c.id = $application_id";        
        $statement_a = $db->query($query);
        if ($statement_a->num_rows > 0) {
            $trade_proprietor_index = 0;
            $credit_proprietor_index = 0;
            $trade_user_index = 0;
            $credit_directors_index = 0;
            while($row = $statement_a->fetch_assoc()) {	
                $data['company_name'] = $row["company_name"];
                $data['company_address'] = $row["company_address"]; 
                $data['fullname'] = $row["fullname"]; 
                $data['outcome'] = 'success';

            //    if($person_type == "trade_proprietor"){
                   
            //         // $data['trade_proprietor_fullname_'.$trade_proprietor_index] = $row['fullname'];
            //         $fullname = $_POST["trade_proprietor_fullname_".$w];

            //     $address = $_POST["trade_proprietor_address_".$w];
            //     $trade_proprietor_line1_address = $_POST["trade_proprietor_line1_address_".$w];
            //     $trade_proprietor_town = $_POST["trade_proprietor_town_".$w];
            //     $trade_proprietor_postcode = $_POST["trade_proprietor_postcode_".$w];

            //     }
            }
        } else {
            $data['outcome'] = 'cancel';
        }
        // mysqli_close($db);
        } else {
        $data['outcome'] = 'cancel';
    }

    // return all our data to an AJAX call
    echo json_encode($data);
?>
