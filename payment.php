<?php


if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) 
{
   
       include("checkout.php");
    }

else{

    include("login.php");

}
?>
