<?php
require('validation_functions.php');
require_once("../connect.php");

$currentDir = getcwd(); //Returns the current working directory on success, or FALSE on failure.
$uploadDirectory = "/uploads/";
$data = array();
$application_id = $_POST["application_id"];
$files = $_FILES['files'];
if($files)
{
        $files_description = reArrayFiles($files);
        
        $table_result = "<table border=1><tr><th>File Name</th><th>Upload Result</th><th>All Done</th></tr>";
        $allFilesCheckingsPassed = true;

        $db = db_conn();
        $db->beginTransaction();

        foreach($files_description as $val)
        {
            $checkingsPassed = true;
            $errorMsg = "";	
            $filename = $val['name']; //This refers to the real name of the uploaded file.
            $fileSize = $val['size']; //This refers to the size of the file.
            $fileTmpName  = $val['tmp_name']; //This is the temporary uploaded file that resides in the tmp/ directory of the web server.
            $fileType = $val['type']; //This refers to the type of the file. Is it a jpeg or png or mp3 file?
            
            // perform the checkings
            //file type
            if (!checkType($fileTmpName)) {
                $errorMsg = "This file extension is not allowed. Please upload a JPEG or PNG file";
                $checkingsPassed = false;  
            }
            //file size
            if ($checkingsPassed) {
                if ($fileSize > 2000000) {
                    $errorMsg = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
                    $checkingsPassed = false;  
                }
            }
            if ($checkingsPassed) {
                $blob = fopen($fileTmpName, 'rb');
                $mime = mime_content_type($fileTmpName);
                $sql = "INSERT INTO files(mime,filename,data,application_id) VALUES(:mime,:filename,:data,:application_id)";
                $stmt = $db->prepare($sql);
        
                $stmt->bindParam(':mime', $mime);
                $stmt->bindParam(':filename', $filename);
                $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);
                $stmt->bindParam(':application_id', $application_id);
                //TO REMEMBER: the execute below is tied to the Begin Transation, so it won't be executed right now, but only when we do the commit at the end of the code
                $res = $stmt->execute();
                
                if (!$res){
                    $errorMsg = "Error when inserting data into the DB";
                    $checkingsPassed = false;
                }
            }

            $table_result .= createResultTable(basename($filename),$errorMsg,$checkingsPassed);

            if (!$checkingsPassed) {
                $allFilesCheckingsPassed = false;
                //stop the FOR loop
                break;
            }
             
        }
        if ($allFilesCheckingsPassed){
            //Ends the transation and writes the data in the DB
            $db->commit();
            $data["outcome"]="success";
            $smessage = "All went well. File(s) uploaded.";
            $data["smessage"]="All went well. File(s) uploaded.";
            $data["lmessage"] ="great";

            $query="SELECT id,filename from files where application_id =$application_id";
            $statement = $db->prepare($query);
            $statement->execute();
            
            $i=0;
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $id=$row['id'];
                $filename=$row['filename'];
                $data['id'][$i] = $id;
                $data['filename'][$i] = $filename;
                $i++;
            }

        } else {
            $db->rollback();
            $data["outcome"]="fail";
            $data["lmessage"]="Please re-submit the file";
            $outcome = "fail";
            $lmessage = "Please re-submit the file";
        }
}
echo json_encode($data);

?>
