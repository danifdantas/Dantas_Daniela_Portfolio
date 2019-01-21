<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
// include 'connect.php';
require 'functions.php';

// instantiate database and product object
$database = new Database();
$conn = $database->getConnection();

if(isset($_GET['project'])) {
 
  $data = get_single_project($conn, $proj);
  echo json_encode($data);
  //var_dump($proj);
} else{
  $data = get_all_projects($conn);
  echo json_encode($data);
}


?>