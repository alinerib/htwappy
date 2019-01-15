<?php
require('../db.htw.php');
$db = new db();

$data = array();

$file_id = $_GET['file_id'];
$application_id = $_GET['application_id'];
$application_type = $_GET['application_type'];

$query="DELETE from files where id =$file_id";
$statement = $db->query($query);            

if($statement){
    $data["application_id"] = $application_id;
    $data["application_type"] = $application_type;
    $data["outcome"] = "success";
} else {
    $data["outcome"] = "failed";
}

echo json_encode($data);
?>