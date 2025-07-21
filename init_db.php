<?php
require_once 'database.php';

try {
    // Appelle la fonction pour forcer la connexion (et donc init DB + table + data)
    $conn = getConnection();
    echo "Base de données initialisée avec succès.";
    $conn->close();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
