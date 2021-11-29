<?php
date_default_timezone_set("asia/colombo");
require 's-db-connect.php';

//DATABASE CALLS FOR 'PRODUCTS.PHP' >> FETCH EVENTS

//FETCHING DATA FOR PRODUCTS > ALL
if(isset($_POST['loadTrTbl'])) {
    $db = new DbConnect;
    $conn = $db->connect();
    $stmt = $conn->prepare("SELECT * FROM `products`;"); // where seller ID is the one that is logged in
    $stmt->execute();
    $trs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($trs);
}

//FETCHING DATA FOR PRODUCTS > PENDING ORDERS

//FETCHING DATA FOR PRODUCTS > ACTIVE

//FETCHING DATA FOR PRODUCTS > INACTIVE

//FETCHING DATA FOR PRODUCTS > 

?>
