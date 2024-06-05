<?php
require 'dbConnection.php'; // Include the database connection file
require 'functions.php'; // Include the functions file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $companyName = $_POST['name'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
   // You can modify this as per your logic

    // Call the function to insert data into the database
    $result = insertCompany($companyName, $country, $phone, $email, $conn);

    if ($result == 1) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}
?>
