<h1> Your Order has been confirmed!</h1>
<h1> Thank You For Choosing Our Store</h1>


<form method="POST">

<button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">cancel order</button>


</form>
<form method="POST" action="myOrders.php">

<button class="btn btn-outline-success my-2 my-sm-0" name="order" type="submit">show my orders</button>


</form>

<?php
session_start();
require("config/connexion.php");


if( isset($_POST['submit'])){
    $id= $_SESSION['checkout_id'] ;
    $stmt = $access->prepare("DELETE FROM checkout WHERE id = :id");
    $stmt->bindParam(':id', $id);
    if($stmt->execute()){
        echo "Order canceled successfully";
    }else{
        echo "Error canceling order: " . $stmt->error;
    }
}


?>
