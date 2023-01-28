<?php

require("config/connexion.php");
include("checkform.php");

session_start();
$id=$_SESSION['id'];
$prix=$_SESSION['price'];
$clt_id=$_SESSION['user_id'];

// Create an error variable
$errors = "";

// Check if form was submitted
if(isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["address"])
     && isset($_POST["city"])  && isset($_POST["state"]) && isset($_POST["zip"])) {
  // Remove whitespaces
  $fullname = trim($_POST["fullname"]);
  $email = trim($_POST["email"]);
  $address = trim($_POST["address"]);
  $city = trim($_POST["city"]);
  $state = trim($_POST["state"]);
  $zip = trim($_POST["zip"]);

  // Check if any fields are empty
  if (empty($fullname) || empty($email) || empty($address) || empty($city) || empty($state) || empty($zip)) {
    $errors = "All fields are required.";
    echo $errors;
  } 
  // Check if email is valid
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors = "Invalid email address.";
    echo $errors;
  } 
  // Check if BP is valid (e.g. 3 letters)
  else if (!preg_match("/^[0-9]{3}$/", $state)) {
    $errors = "Invalid BP code. Please use 3 digit BP code.";
    echo $errors;
  }
  // Check if zip code is valid (e.g. 5 digits)
  else if (!preg_match("/^[0-9]{5}$/", $zip)) {
    $errors = "Invalid zip code. Please use 5 digit postal code.";
    echo $errors;
  }
  else {
    // Proceed with rest of script (e.g. insert data into database)
           
            $insert=$access->prepare('INSERT  INTO checkout( clt_id, email,full_name, adress,total_price, prod_id, city, stat, zip) VALUES (?,?,?,?,?,?,?,?,?)');
            $insert->execute(array($clt_id, $email, $fullname, $address,$prix, $id ,$city, $state, $zip));
            $checkout_id = $access->lastInsertId();
            $_SESSION['checkout_id'] = $checkout_id;
             header("Location: checked.php");
          }
  }

     
            
    


