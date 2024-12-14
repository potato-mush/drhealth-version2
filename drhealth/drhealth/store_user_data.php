<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = json_decode(file_get_contents('php://input'), true);

    // Store individual fields in the session
    $_SESSION['fname'] = $input['fname'];
    $_SESSION['lname'] = $input['lname'];
    $_SESSION['age'] = $input['age'];
    $_SESSION['province'] = $input['province']; // Store province
    $_SESSION['city'] = $input['city']; // Store City
    $_SESSION['barangay'] = $input['barangay']; // Store Barangay

    // Combine address components and store as address
    $_SESSION['address'] = $input['province'] . ", " . $input['city'] . ", " . $input['barangay'];

    $_SESSION['gender'] = $input['gender'];
    $_SESSION['email'] = $input['email'];
    $_SESSION['password'] = $input['password'];  // Store password in session
    $_SESSION['confirm_password'] = $input['confirm_password'];  // Store confirm password in session
    $_SESSION['contact'] = $input['contact'];

    // Send success response back to the client
    echo json_encode(['success' => true]);
}
?>