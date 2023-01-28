<?php


    require_once './config/connexion.php';
    if (isset($_POST['search_term'])) {
        $search_term = $_POST['search_term'];
    
        $query = $access->prepare("SELECT * FROM produits WHERE nom LIKE :search_term OR description LIKE :search_term");
        $query->bindValue(':search_term', "%$search_term%");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
    
        if (count($results) > 0) {
            echo "<ul>";
            foreach ($results as $result) {
                echo "<li>" . $result['nom'] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No results found.";
        }
    }

?>




