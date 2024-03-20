<?php 
session_start();

// Include database connection file 
include_once 'dbConnect.php';

$amount = $_GET['amount'];
//$amount = $_GET['amount'];
$item = $_GET['item'];
$email = $_GET['email'];
$phoneno = $_GET['phoneno'];
$status = "pending";

$insert = $db->query("INSERT INTO `product` ( `price`, `status`, `vin_number`, `email`, `phone_no`) VALUES ('".$amount."','".$status."','".$item."','".$email."','".$phoneno."')");

$last_id = $db->insert_id;

$_SESSION['product_id'] = $last_id;
