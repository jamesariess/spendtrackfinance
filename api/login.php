<?php
header('Content-Type: application/json');
session_start();
include_once '../backend/conn.php';

$data  = json_decode(file_get_contents('php://input'), true);

$email = $data['email'];
$password = $data['password'];

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo json_encode(['status' => 'error', 'message' => 'Invalid email format']);
    exit;
    }
if(strlen($password) < 6){
    echo json_encode(['status' => 'error', 'message' => 'Password must be at least 6 characters']);
    exit;
    }


?>