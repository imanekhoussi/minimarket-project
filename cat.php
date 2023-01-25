<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/fabIcon.png">
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Ecommerce Site</title>
    <title>Album example · Bootstrap v5.0</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    </head>
  <body>
  
<?php
require("config/connexion.php");
require("config/commandes.php");
require("header.php");


  $Produits=afficher();

// get the selected value
if(isset($_POST['cat']) || isset($_POST['search']) ){
    
    if(!empty($_POST['cat']) || !empty($_POST['search']) )
    {
        $selected = $_POST['cat'];
        $product = $_POST['search'];
        
     
    }
}

?>


<main>

<div class="album py-5 bg-light">
<div class="container" style="display: flex; justify-content: center">
<div class="row">
<div class="col-md-2"></div>

      <?php foreach($Produits as $produit)
        {
         $description=strpos($produit->description, $product);
         $name=strpos($produit->nom, $product);


           if(($produit->cat_id === $selected) || ( $description== true) || ( $name== true) ){ ?> 

        <div class="col">
          <div class="card shadow-sm" style="margin-top: 25%">
            <h3><?= $produit->nom ?></h3>
            <img src="<?= $produit->image ?>" style="width: 24%">

            <div class="card-body">
              <p class="card-text"><?= substr($produit->description, 0, 160); ?>...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="produit.php?pdt=<?= $produit->id ?>"><button type="button" class="btn btn-sm btn-success">Voir plus</button></a>
                </div>
                <small class="text" style="font-weight: bold;"><?= $produit->prix ?> €</small>
              </div>
            </div>
          </div>
        </div>
   
  <?php
}
}
    endforeach; ?>


<div class="col-md-2"></div>
    </div>
</div>
</div>

</main>




</Body>
</html>



