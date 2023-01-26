<?php
 
 /*require './vendor/autoload.php';
 header('Content-Type', 'application/json');
 \Stripe\Stripe::setApiKey("sk_test_51MUBRzF1PqiAs7xKLRqOUPdEcv8LHdhldEXYsh7YrhrQK2Jh8vGjD8fw9WUG5QTiEH3nhPS2vcMWNOsjtAYy6mbI00WhVFE9a4");

*/
?>



<?php


require("config/connexion.php");
include("checkform.html");


  session_start();
  $id=$_SESSION['id'];
  $prix=$_SESSION['price'];
    if(isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["address"])
     && isset($_POST["city"])  && isset($_POST["state"]) && isset($_POST["zip"])) {
        if(!empty($_POST["fullname"]) && !empty($_POST["email"]) && !empty($_POST["address"])
        && !empty($_POST["city"]) && !empty($_POST["state"]) && !empty($_POST["zip"])) {
            $fname=htmlspecialchars($_POST["fullname"]);
            $email=htmlspecialchars($_POST["email"]);
            $adr=htmlspecialchars($_POST["address"]);
            $city=htmlspecialchars($_POST["city"]);
            $state=htmlspecialchars($_POST["state"]);
            $zip=htmlspecialchars($_POST["zip"]);
    
            $insert=$access->prepare('INSERT  INTO checkout(email,full_name, adress,total_price, prod_id, city, stat, zip) VALUES (?,?,?,?,?,?,?,?)');
            $insert->execute(array($email, $fname, $adr,$prix, $id ,$city, $state, $zip));
            echo "tout les champs ont été bien ajoutés";
            }
            else {
                echo "tout les champs sont obligatoires";
    
            }
    }



?>