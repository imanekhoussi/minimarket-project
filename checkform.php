<?php 
require("config/connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div class="row">
        
    <link rel="shortcut icon" type="image/x-icon" href="images/fabIcon.png">
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>                    
    <title>checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<html>
<body>

  <div class="col-75">
    <div class="container">
      <form  method="POST" action="checkout.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fullname" placeholder="exemple: Nom Prénom">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="exemple: myname@example.com">
            <label for="adr"><i class="fas fa-address-card"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="exemple: 6, Rue Mohamed Jazouli">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="exemple: Casablanca">

            <div class="row">
              <div class="col-50">
                <label for="state">boite postal</label>
                <input type="text" id="state" name="state" placeholder="exemple: 425">
              </div>
              <div class="col-50">
                <label for="zip">code postal</label>
                <input type="text" id="zip" name="zip" placeholder="exemple: 20001">
                <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" id="btn"
         onclick="location.href='checked.php?id=<?php echo $checkout['id']; ?>'">
</form>
</div>
</div>
              </div>
             </form>
            </div>
           </div>
          </div>

         



    
</body>
</html>
