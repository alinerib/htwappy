<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=htw;charset=utf8', '', '', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// $db = new PDO('mysql:host=www.htw.co.uk;dbname=htwapply;charset=utf8', '', '', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
if ($db){
  // echo "connected";
} else {
  // echo "not connected";
}

function db_conn() {
  static $db = false;
  if (!$db) {
    $db = new PDO('mysql:host=127.0.0.1;dbname=htw;charset=utf8', '', '', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // $db = new PDO('mysql:host=www.htw.co.uk;dbname=htwapply;charset=utf8', '', 'D#53a@', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  return $db;
}


?>
