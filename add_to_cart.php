<?php 

session_start();

//it checks if a session variable called "cart" is set 


  if (isset($_SESSION['cart'])) {
       //the script creates an array called "cart_id" which contains the "id" of all the items in the session cart.
  	$cart_id = array_column($_SESSION['cart'], "id");
/* It then uses the in_array() function to check if the item that is being added to the cart already exists in the session cart,
 using the id of the item*/ 
  	if (!in_array($_POST['id'], $_SESSION['cart'])) {
              /*If the item does not exist in the session cart, it creates an array called "item_array" 
              that contains the id, name, price and quantity of the item being added.*/
  		$item_array = array(
         "id" => $_POST['id'],
         "name" => $_POST['name'],
         "price" => $_POST['price'],
         "quantity" => $_POST['quantity']
  	);
//It then adds the "item_array" to the "cart" session variable

  $_SESSION['cart'][] = $item_array;
  	}
  	/*If the "cart" session variable is not set, it creates the "item_array" 
       and sets the "cart" session variable to the "item_array". */
  }else{

  	$item_array = array(
         "id" => $_POST['id'],
         "name" => $_POST['name'],
         "price" => $_POST['price'],
         "quantity" => $_POST['quantity']
  	);


  $_SESSION['cart'][] = $item_array;
  }




 ?>