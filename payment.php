<?php


if(isset($_SESSION['xRttpHo0greL39']))
{
    if(!empty($_SESSION['xRttpHo0greL39']))
    {
       include("checkout.php");
    }
}
else{
    include("login.php");
    if(isset($_SESSION['xRttpHo0greL39']))
{
    if(!empty($_SESSION['xRttpHo0greL39']))
    {
       include("checkout.php");
    }
}
}
?>