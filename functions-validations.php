<?php
	function generateSecureCode($data) {
        return hash('sha256', $data);
      }
	function debug_me($msg){
	$debug_active = true;
	if($debug_active){
		echo "<h5>";
		print_r($msg);
		echo "</h5>";
	}
	}
	
	function validateDate($date, $format = 'Y/m/d')
	{
	    $d = DateTime::createFromFormat($format, $date);
	    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
	    return $d && $d->format($format) === $date;
	}
	
	function fieldCheck($method, $fieldName, $dataType){
	    $value = "";
	    //get the post or get values
	    if(strtolower($method) == "post"){
	        if(isset($_POST[$fieldName])){
	            $value = $_POST[$fieldName];
	        }
	    } else {
	        if(strtolower($method) == "get"){
	            debug_me("get");
	            if(isset($_GET[$fieldName])){
	                $value = $_GET[$fieldName];
	                debug_me("Is set: $value");
	            }
	        }
	    }
	    
	    if($value != ""){
	        debug_me("not null");
	        //SECURITY VALIDATIONS  //http://us3.php.net/manual/en/filter.filters.sanitize.php
	        //Remove blank spaces before and after the strings so we are sure it is whitespace free at both ends
	        $value = trim($value); 
	        $value=str_replace("\n","[NEWLINE]",$value);
	        //sanitise string
	        $value = filter_var($value, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
	        //now replace the placeholder with the original newline
	        $value = str_replace("[NEWLINE]","\n",$value);
	        debug_me("after sec checkings: $value");
	        if(strtolower($dataType) == "date"){
	            debug_me("is date");
	            if(!validateDate($value)){
	                debug_me("date not valid");
	                return "";
	            }
	        }
	    }
	    debug_me("returning:$value");
	    return $value;
	}

?>