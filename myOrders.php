<?php
require("config/connexion.php");
require("config/commandes.php");
$Produits=afficher();

session_start();
$clt_id=$_SESSION['user_id'];

if( isset($_POST['order'])){
   

 ?>

<main>
        <div class="album py-5 bg-light">
            <div class="container" style="display: flex; justify-content: center">
                <div class="row">
                    <div class="col-md-2"></div>
                    <?php 
                        $query = "SELECT prod_id FROM checkout WHERE clt_id = $clt_id";
                        $stmt = $access->query($query);
                        $results = $stmt->fetchAll(); 
                        $prod_ids = array_column($results, 'prod_id');
                        foreach($Produits as $produit) {
                            if(in_array($produit->id, $prod_ids)) {
                    ?> 
                        <div class="col">
                            <div class="card shadow-sm" style="margin-top: 25%">
                                <h3><?= $produit->nom ?></h3>
                                <img src="<?= $produit->image ?>" style="width: 24%">
                                <div class="card-body">
                                    <p class="card-text"><?= substr($produit->description, 0, 160); ?>...</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text" style="font-weight: bold;"><?= $produit->prix ?> €</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                            }
                        }
                    }
                    ?>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </main>

  




