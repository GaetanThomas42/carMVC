<?php
require __DIR__ . '/vendor/autoload.php';

// index.php

use App\Controller\AdminController;
use App\Controller\IndexController;
use App\Controller\SecurityController;

// Démarrer la session si besoin
session_start();

if(isset($_SESSION["username"])){
    $isLoggedIn = true;
}else{
    $isLoggedIn = false; 
}

$isLoggedIn = true;

// Récupérer les paramètres de l'URL
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'homePage';
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    $id = null;
}

var_dump($_GET);
var_dump("Login", $isLoggedIn);
$indexController = new IndexController();
$adminController = new AdminController();
$securityController = new SecurityController();

// Gérer les routes avec une suite de conditions if
if ($action === 'detail' && !is_null($id)) {

    $indexController->detailCar($id);

} elseif ($action === 'login') {

    $securityController->login();

} elseif ($action === 'register') {

    $securityController->register();

} elseif ($action === 'logout' && $isLoggedIn) {
    
    $securityController->logout();

}
elseif ($action === 'admin' && $isLoggedIn) {

    $adminController->dashboardAdmin();

} elseif ($action === 'add' && $isLoggedIn) {

    $adminController->addCar();

} elseif ($action === 'edit' && !is_null($id) && $isLoggedIn) {

    $adminController->editCar($id);

} elseif ($action === 'delete' && !is_null($id) && $isLoggedIn) {

    $adminController->deleteCar($id);

} else {

    $indexController->homePage();

}
