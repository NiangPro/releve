<?php 
session_start();
require_once("models/database.php");

if (isset($_GET["page"]) && isset($_SESSION["user"])) {

    $user = $_SESSION["user"];
    require_once("partials/header.php"); 
    switch ($_GET["page"]) {
        case 'home':
            require_once("controllers/homeController.php");
            break;
        case 'transfert':
            require_once("controllers/transfertController.php");
            break;
        case 'confirm':
            require_once("controllers/confirmController.php");
            break;
        case 'logout':
            require_once("controllers/logoutController.php");
            break;
        default:
            require_once("controllers/homeController.php");
            break;
    }

    require_once("partials/pied.php");
}else{
    require_once("controllers/loginController.php");
}
