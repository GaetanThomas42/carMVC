<?php

namespace App\Controller;

use App\Manager\CarManager;

class IndexController{
    
    private CarManager $carManager;

    public function __construct(){
        $this->carManager = new CarManager();
    }

    // Route HomePage -> index.php
    public function homePage(){
        //Récuperer les voitures
        $cars = $this->carManager->selectAll();
        //Afficher les voitures dans la template
        require_once("./templates/index_car.php");
    }

    // Route DetailCar -> index.php?action=detail&id=10 
    public function detailCar(int $id){
         //Récuperer les voitures
         $car = $this->carManager->selectByID($id);
         if($car != false){
             //Afficher les voitures dans la template
             require_once("./templates/car_detail.php");
         }else{
            $this->homePage();
         }
 }
}