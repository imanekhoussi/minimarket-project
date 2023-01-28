<?php
    include "config/connexion.php";
    $category_id = $_GET['id'];
    $query = "SELECT * FROM produits WHERE cat_id = :category_id";
    $stmt = $access->prepare($query);
    $stmt->bindValue(':category_id', $category_id);
    $stmt->execute();
    $products = $stmt->fetchAll();
    echo "<h1> Products of category with id : $category_id </h1>";
    foreach ($products as $product) {
        echo "<p>" . $product['nom'] . "</p>";
    }
?>
