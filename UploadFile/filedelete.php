<?php
require_once("../connect.php");
$db = db_conn();

$data = array();

$file_id = $_GET['file_id'];

$query="DELETE from files where id =$file_id";
$statement = $db->prepare($query);
$statement->execute();
            
if($statement){
    $data["success"]= true;
} else {
    $data["success"]= false;
}

echo json_encode($data);
?>