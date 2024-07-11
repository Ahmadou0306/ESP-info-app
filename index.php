<?php
require_once 'controller/HomeController.php';

$action = $_GET['action'] ?? '';
$controller = new HomeController();

switch ($action) {
    case 'afficher_categorie':
            $categorieId = $_GET['id'] ?? 1;
            $controller->afficherCategorie($categorieId);
            break;
    default:
        $controller->index(); 
        break;
}

